@extends('layouts.main')

@section('content')
    <div>
        <div class="m-5 flex items-center justify-center">
            <h1 class="mx-auto border-b-4 border-blue-600 p-4 text-center text-2xl font-bold uppercase dark:border-indigo-900">Tentang Kami</h1>
        </div>
        <div class="mx-auto flex max-w-md flex-col items-center justify-center text-justify">
            <p
                class="mb-3 text-gray-900 first-letter:float-left first-letter:mr-3 first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 first-line:uppercase first-line:tracking-widest dark:text-gray-400 dark:first-letter:text-gray-100">
                TerraVisage adalah website yang menyediakan data klasifikasi tutupan lahan.Klasifikasi tutupan lahan adalah penggolongan objek perhitungan lahan
                kedalam
                kelas - kelas menurut batasan dan kriteria tertentu.</p>
        </div>
    </div>
@endsection
