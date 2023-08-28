@extends('layouts.main')

@section('content')
    <div>
        <div class="mt-5 flex items-center justify-center">
            <h1 class="mx-auto border-b-4 border-blue-600 p-4 text-center text-2xl font-bold uppercase dark:border-indigo-900">Peta Klasifikasi Tutupan Lahan</h1>
        </div>
    </div>
    <div class="m-4 grid grid-cols-2 gap-4 md:grid-cols-3">
        @foreach ($regencies as $regency)
            <a href="{{ route('mapping.details', [$regency->province_id, $regency->id]) }}">
                <div>
                    <div
                        class="flex max-w-sm items-center justify-start rounded-lg border-l-4 border-blue-600 bg-gray-100 p-6 shadow hover:bg-blue-300 dark:border-indigo-700 dark:bg-gray-700 dark:hover:bg-gray-500">
                        <svg class="h-8 w-8 text-blue-600 dark:text-indigo-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 0 19 9.5 9.5 0 0 0 0-19ZM8.374 17.4a7.6 7.6 0 0 1-5.9-7.4c0-.83.137-1.655.406-2.441l.239.019a3.887 3.887 0 0 1 2.082 2.5 4.1 4.1 0 0 0 2.441 2.8c1.148.522 1.389 2.007.732 4.522Zm3.6-8.829a.997.997 0 0 0-.027-.225 5.456 5.456 0 0 0-2.811-3.662c-.832-.527-1.347-.854-1.486-1.89a7.584 7.584 0 0 1 8.364 2.47c-1.387.208-2.14 2.237-2.14 3.307a1.187 1.187 0 0 1-1.9 0Zm1.626 8.053-.671-2.013a1.9 1.9 0 0 1 1.771-1.757l2.032.619a7.553 7.553 0 0 1-3.132 3.151Z" />
                        </svg>
                        <h5 class="ml-4 text-2xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">{{ $regency->name }}</h5>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
