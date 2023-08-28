@extends('layouts.main')

@section('content')
    <div class="mt-4 p-4 sm:ml-64">
        <div class="mb-4 flex">
            <h1 class="rounded border-l-4 border-blue-600 p-2 text-center text-2xl font-bold uppercase dark:border-indigo-900">Unggah Peta</h1>
        </div>
        <div>
            <div>
                <button data-modal-target="mapCreate" data-modal-toggle="mapCreate"
                    class="mr-2 mb-2 inline-flex rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 h-5 w-5"
                        aria-hidden="true">
                        <path
                            d="m14.707 4.793-4-4a1 1 0 0 0-1.416 0l-4 4a1 1 0 1 0 1.416 1.414L9 3.914V12.5a1 1 0 0 0 2 0V3.914l2.293 2.293a1 1 0 0 0 1.414-1.414Z" />
                        <path
                            d="M18 12h-5v.5a3 3 0 0 1-6 0V12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                    </svg>
                    Unggah Peta
                </button>
            </div>
            <div class="relative overflow-x-auto p-3 shadow-md sm:rounded-lg">
                <table id="dataTable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Kabupaten/Kota</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($maps as $map)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $map->province->name }}</td>
                                <td>{{ $map->regency->name }}</td>
                                <td>{{ $map->title }}</td>
                                <td class="flex justify-center">
                                    <button data-modal-target="mapShow-{{ $map->id }}" data-modal-toggle="mapShow-{{ $map->id }}"
                                        data-tooltip-target="tooltip-detail"
                                        class="mx-1 inline-flex rounded-lg border border-sky-500 px-1 py-1 text-center text-sm font-medium hover:bg-sky-200 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            class="h-5 w-5 stroke-sky-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                        </svg>
                                        <div id="tooltip-detail" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                            Lihat peta
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </button>
                                    <a href="{{ route('admin.map.destroy', $map->id) }}" data-confirm-delete="true" data-tooltip-target="tooltip-delete"
                                        class="delete-svg mx-1 inline-flex rounded-lg border border-red-700 px-1 py-1 text-center text-sm font-medium text-red-700 hover:bg-red-200 hover:text-red-700 focus:outline-none focus:ring-4 focus:ring-blue-300"
                                        style="width:30px">
                                    </a>
                                    <div id="tooltip-delete" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                        Hapus Data
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Kabupaten/Kota</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    @include('admin.component.mapCreate')
    @foreach ($maps as $map)
        @include('admin.component.mapShow')
    @endforeach
@endsection
