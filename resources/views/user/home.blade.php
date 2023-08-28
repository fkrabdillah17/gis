@extends('layouts.main')

@section('content')
    <section class="dark:to-indigo-950 bg-gradient-to-r from-indigo-700 to-blue-600 dark:from-indigo-900">
        <div class="mx-auto max-w-screen-xl py-8 px-4 text-left lg:py-16">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-white dark:text-white md:text-2xl lg:text-3xl">Selamat Datang Di Website
                TerraVisage </h1>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl">Semoga Kamu Mendapatkan Informasi Yang Diingkan!</p>
        </div>
    </section>

    <div>
        <div class="flex items-center justify-center">
            <h1 class="mx-auto border-b-4 border-blue-600 p-4 text-center text-2xl font-bold uppercase dark:border-indigo-900">Peta Klasifikasi Tutupan Lahan</h1>
        </div>

        <div class="m-4 grid grid-cols-2 gap-4 md:grid-cols-3">
            @foreach ($maps as $map)
                <a href="{{ route('mapping.details', [$map->province_id, $map->regency_id]) }}">
                    <div class="group relative">
                        <img class="h-auto max-w-full scale-90 rounded-lg grayscale transition delay-100 ease-in-out group-hover:scale-100 group-hover:grayscale-0"
                            src="{{ asset('assets/images/upload/' . $map->file) }}" alt="" title="{{ $map->title }}">
                        <div
                            class="absolute inset-0 flex transform items-center justify-center bg-gray-200/30 text-center opacity-0 transition delay-100 ease-in-out group-hover:opacity-100">
                            <h1 class="text-4xl font-bold uppercase text-black group-hover:px-28 group-hover:backdrop-blur-sm">{{ $map->regency->name }}</h1>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
@endsection
