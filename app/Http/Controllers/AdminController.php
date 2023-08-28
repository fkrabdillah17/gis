<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function login(){
        if (Auth::user() != null) {
            return back()->with('toast_warning','Anda sudah masuk ke akun anda!');
        } else {
            return view('admin.login');
        }
    }

    public function auth(Request $request)
    {
        try{
            $rules = [
                'email' => 'required|string|exists:users',
                'password' => 'required|string'
            ];
    
            $message = [
                'email.required' => 'Email harus diisi!',
                'email.exists' => 'Email tidak terdaftar!',
                'password.required' => 'Password harus diisi!',
            ];
            $validate = $this->validate($request, $rules, $message);
    
            if ($validate) {
                if (Auth::attempt($request->only('email', 'password'))) {
                    $request->session()->regenerate();
                    return redirect()->route('admin.dashboard')->with('toast_success','Anda berhasil masuk!');
                } else {
                    return redirect()->route('login')->with('info', 'Periksa kembali password anda!');
                }
            }
        }catch(MethodNotAllowedHttpException $exception){
            return redirect()->back()->with('toast_warning','Anda Tidak Memiliki Akses!');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login')->with('toast_info','Anda Telah Logout!');
    }

    public function dashboard(){
        $user = User::all()->count();
        $provinces = Province::all()->count();
        $regencies = Regency::all()->count();
        $data = Map::all()->count();

        return view('admin.dashboard', compact('user','provinces','regencies','data'));
    }
    public function masterData(){
        // Confirm Delete Sweetalert
        $title = 'Hapus data!';
        $text = 'Apakah anda yakin akan menghapus data?';
        confirmDelete($title, $text);

        $provinces = Province::all()->sortBy('name');
        return view('admin.masterData', compact('provinces'));
    }

    public function storeProvince(Request $request){
        $rules = [
            'province' => 'required|unique:provinces,name'
        ];
        $message = [
            'province.required' => 'Isi nama provinsi!',
            'province.unique' => 'Nama provinsi tidak boleh sama!',
        ];

        $validation = $this->validate($request, $rules, $message);
        if($validation){
            Province::create([
                'name' => $request->province
            ]);

            return redirect()->back()->with('toast_success','Data provinsi berhasil disimpan!');
        }
    }

    public function storeRegency(Request $request){
        $rules = [
            'province_id' => 'required',
            'regency' => 'required|unique:regencies,name'
        ];
        $message = [
            'province_id.required' => 'Pilih provinsi!',
            'regency.required' => 'Isi nama provinsi!',
            'regency.unique' => 'Nama provinsi tidak boleh sama!',
        ];

        $validation = $this->validate($request, $rules, $message);
        if($validation){
            Regency::create([
                'name' => $request->regency,
                'province_id' => $request->province_id
            ]);

            return redirect()->back()->with('toast_success','Data kabupaten/kota berhasil disimpan!');
        }
    }

    public function updateProvince(Request $request, Province $province){
        // Check Name
        if ($request->province != $province->name) {
            $nameRules = 'required|unique:provinces,name';
        } else {
            $nameRules = 'required';
        }
        
        $rules = [
            'province' => $nameRules
        ];
        $message = [
            'province.required' => 'Isi nama provinsi!',
            'province.unique' => 'Nama provinsi tidak boleh sama!',
        ];
        $validation = $this->validate($request, $rules, $message);
        if($validation){
            $province->update([
                'name' => $request->province
            ]);

            return redirect()->back()->with('toast_success','Perubahan data provinsi berhasil disimpan!');
        }
    }

    public function updateRegency(Request $request, Regency $regency){
        // Check Name
        if ($request->regency != $regency->name) {
            $nameRules = 'required|unique:regencies,name';
        } else {
            $nameRules = 'required';
        }
        
        $rules = [
            'province_id' => 'required',
            'regency' => $nameRules
        ];
        $message = [
            'province_id.required' => 'Pilih provinsi!',
            'regency.required' => 'Isi nama provinsi!',
            'regency.unique' => 'Nama provinsi tidak boleh sama!',
        ];

        $validation = $this->validate($request, $rules, $message);
        if($validation){
            $regency->update([
                'name' => $request->regency,
                'province_id' => $request->province_id
            ]);

            return redirect()->back()->with('toast_success','Data kabupaten/kota berhasil disimpan!');
        }
    }

    public function destroyProvince(Province $province){
        $province->delete();
        return redirect()->back()->with('toast_success','Data berhasil dihapus!');
    }

    public function destroyRegency(Regency $regency){
        $regency->delete();
        return redirect()->back()->with('toast_success','Data berhasil dihapus!');
    }

    public function upload(){
        // Confirm Delete Sweetalert
        $title = 'Hapus data!';
        $text = 'Apakah anda yakin akan menghapus data?';
        confirmDelete($title, $text);

        $provinces = Province::all()->sortBy('name');
        $regencies = Regency::all()->sortBy('name');
        $maps = Map::all()->sortBy('title');
        return view('admin.upload', compact('provinces','regencies','maps'));
    }

    public function mapStore(Request $request){
        $rules = [
            'province_id'=> 'required',
            'regency_id'=> 'required',
            'title'=> 'required|unique:maps,title',
            'map' => 'required|image|mimes:jpg,png|max:15126'
        ];
        $message = [
            'province_id.required' => 'Wajib pilih provinsi!',
            'regency_id.required' => 'Wajib pilih kabupaten/kota!',
            'title.required' => 'Wajib isi judul!',
            'title.unique' => 'Nama sudah digunakan!',
            'map.required' => 'Wajib pilih file!',
            'map.image' => 'Berkas harus berupa gambar!',
            'map.mimes' => 'Tipe berkas JPG atau PNG!',
            'map.max' => 'Ukuran berkas maksimum 10Mb!'
        ];

        $validation = $this->validate($request, $rules, $message);
        if($validation){
            if($request->hasFile('map')){
                // Start Upload File
                $item = $request->map;
                $fileName = time() . rand(100, 999) . "." . $item->getClientOriginalExtension();
                $item->move(public_path() . '/assets/images/upload', $fileName);
                //End Upload Data
    
                Map::create([
                  'province_id' => $request->province_id,
                  'regency_id' => $request->regency_id,
                  'title' => $request->title,
                  'file' => $fileName
                ]);
                return redirect()->back()->with('toast_success','Peta berhasil diunggah!');
            } else {
                return redirect()->back()->with('toast_error','Terjadi suatu kesalahan!');
            }
        }
    }

    public function mapDestroy(Map $map){
        if (File::exists(public_path('assets/images/upload/' . $map->file))) {
            File::delete(public_path('assets/images/upload/' . $map->file));
            $map->delete();
            return redirect()->back()->with('toast_success', 'Peta berhasil dihapus!');
        } else {
            return redirect()->back()->with('error', 'File gambar tidak ada, data gagal dihapus');
        }
    }
}
