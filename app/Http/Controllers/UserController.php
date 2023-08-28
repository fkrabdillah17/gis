<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Regency;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function home(){
        $data = Map::orderBy('created_at','desc')->get();
        $maps = $data->unique('regency_id')->take(5);
        return view('user.home', compact('maps'));
    }

    public function mapping($province){
        $regencies = Regency::where('province_id', $province)->orderBy('name')->get();
        return view('user.mapping', compact('regencies'));
    }

    public function mappingDetails($province,Regency $regency){

        $maps = Map::where('province_id', $province)->where('regency_id', $regency->id)->orderBy('title','asc')->get();
        return view('user.mappingDetails', compact('maps','regency'));
    }

    public function about(){
        return view('user.about');
    }
}


