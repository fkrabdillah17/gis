@extends('layouts.main')

@section('content')
    <div>
        <div class="mt-5 flex items-center justify-center">
            <h1 class="mx-auto border-b-4 border-blue-600 p-4 text-center text-2xl font-bold uppercase dark:border-indigo-900">Peta Klasifikasi Tutupan Lahan
                {{ $regency->name }}
            </h1>
        </div>
    </div>
    <div>
        <div class="m-4 grid grid-cols-2 gap-4 md:grid-cols-3">
            @foreach ($maps as $map)
                <figure class="cursor-pointer" data-modal-target="maps-{{ $map->id }}" data-modal-toggle="maps-{{ $map->id }}">
                    <img src="{{ asset('assets/images/upload/' . $map->file) }}" class="max-w-75vh grayscale hover:grayscale-0" alt="{{ $map->title }}">
                    <figcaption class="mt-2 text-center text-lg font-bold text-gray-500 dark:text-gray-400">{{ $map->title }}
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>

    @foreach ($maps as $map)
        {{-- Modal --}}
        <div id="maps-{{ $map->id }}" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
            <div class="relative max-h-full w-full max-w-7xl">
                <!-- Modal content -->
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between rounded-t border-b p-5 dark:border-gray-600">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                            {{ $map->title }}
                        </h3>
                        <button type="button"
                            class="ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="maps-{{ $map->id }}">
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="space-y-6 p-6">
                        <img class="h-auto max-w-full" src="{{ asset('assets/images/upload/' . $map->file) }}" alt="{{ $map->title }}">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
