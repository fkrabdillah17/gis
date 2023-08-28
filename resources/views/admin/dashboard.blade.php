@extends('layouts.main')

@section('content')
    <div class="mt-4 p-4 sm:ml-64">
        <div class="mb-4 flex">
            <h1 class="rounded border-l-4 border-blue-600 p-2 text-center text-2xl font-bold uppercase dark:border-indigo-900">Tentang Kami</h1>
        </div>
        <div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                <div
                    class="flex max-w-sm items-center justify-between rounded-lg border-l-4 border-blue-600 bg-gray-100 p-6 shadow dark:border-indigo-700 dark:bg-gray-700">
                    <div class="flex items-center justify-start">
                        <svg class="h-8 w-8 text-blue-600 dark:text-indigo-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 14 18">
                            <path
                                d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <h5 class="ml-4 text-2xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">User</h5>
                    </div>
                    <h5 class="ml-4 text-2xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">{{ $user }}</h5>
                </div>
                <div
                    class="flex max-w-sm items-center justify-between rounded-lg border-l-4 border-blue-600 bg-gray-100 p-6 shadow dark:border-indigo-700 dark:bg-gray-700">
                    <div class="flex items-center justify-start">
                        <svg class="h-8 w-8 text-blue-600 dark:text-indigo-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 0 19 9.5 9.5 0 0 0 0-19ZM8.374 17.4a7.6 7.6 0 0 1-5.9-7.4c0-.83.137-1.655.406-2.441l.239.019a3.887 3.887 0 0 1 2.082 2.5 4.1 4.1 0 0 0 2.441 2.8c1.148.522 1.389 2.007.732 4.522Zm3.6-8.829a.997.997 0 0 0-.027-.225 5.456 5.456 0 0 0-2.811-3.662c-.832-.527-1.347-.854-1.486-1.89a7.584 7.584 0 0 1 8.364 2.47c-1.387.208-2.14 2.237-2.14 3.307a1.187 1.187 0 0 1-1.9 0Zm1.626 8.053-.671-2.013a1.9 1.9 0 0 1 1.771-1.757l2.032.619a7.553 7.553 0 0 1-3.132 3.151Z" />
                        </svg>
                        <h5 class="ml-4 text-2xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">Provinsi</h5>
                    </div>
                    <h5 class="ml-4 text-2xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">{{ $provinces }}</h5>
                </div>
                <div
                    class="flex max-w-sm items-center justify-between rounded-lg border-l-4 border-blue-600 bg-gray-100 p-6 shadow dark:border-indigo-700 dark:bg-gray-700">
                    <div class="flex items-center justify-start">
                        <svg class="h-8 w-8 text-blue-600 dark:text-indigo-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 0 19 9.5 9.5 0 0 0 0-19ZM8.374 17.4a7.6 7.6 0 0 1-5.9-7.4c0-.83.137-1.655.406-2.441l.239.019a3.887 3.887 0 0 1 2.082 2.5 4.1 4.1 0 0 0 2.441 2.8c1.148.522 1.389 2.007.732 4.522Zm3.6-8.829a.997.997 0 0 0-.027-.225 5.456 5.456 0 0 0-2.811-3.662c-.832-.527-1.347-.854-1.486-1.89a7.584 7.584 0 0 1 8.364 2.47c-1.387.208-2.14 2.237-2.14 3.307a1.187 1.187 0 0 1-1.9 0Zm1.626 8.053-.671-2.013a1.9 1.9 0 0 1 1.771-1.757l2.032.619a7.553 7.553 0 0 1-3.132 3.151Z" />
                        </svg>
                        <h5 class="ml-4 text-2xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">Kabupaten</h5>
                    </div>
                    <h5 class="ml-4 text-2xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">{{ $regencies }}</h5>
                </div>
                <div
                    class="flex max-w-sm items-center justify-between rounded-lg border-l-4 border-blue-600 bg-gray-100 p-6 shadow dark:border-indigo-700 dark:bg-gray-700">
                    <div class="flex items-center justify-start">
                        <svg class="h-8 w-8 text-blue-600 dark:text-indigo-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 16 20">
                            <path
                                d="M8 5.625c4.418 0 8-1.063 8-2.375S12.418.875 8 .875 0 1.938 0 3.25s3.582 2.375 8 2.375Zm0 13.5c4.963 0 8-1.538 8-2.375v-4.019c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353c-.193.081-.394.158-.6.231l-.189.067c-2.04.628-4.165.936-6.3.911a20.601 20.601 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244c-.053-.028-.113-.053-.165-.082v4.019C0 17.587 3.037 19.125 8 19.125Zm7.09-12.709c-.193.081-.394.158-.6.231l-.189.067a20.6 20.6 0 0 1-6.3.911 20.6 20.6 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244C.112 6.035.052 6.01 0 5.981V10c0 .837 3.037 2.375 8 2.375s8-1.538 8-2.375V5.981c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353Z" />
                        </svg>
                        <h5 class="ml-4 text-2xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">Data</h5>
                    </div>
                    <h5 class="ml-4 text-2xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">{{ $data }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
