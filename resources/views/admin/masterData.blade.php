@extends('layouts.main')

@section('content')
    <div class="mt-4 p-4 sm:ml-64">
        <div class="mb-4 flex">
            <h1 class="rounded border-l-4 border-blue-600 p-2 text-center text-2xl font-bold uppercase dark:border-indigo-900">Master Data</h1>
        </div>
        <div>
            <div>
                <button type="button" data-modal-target="provinceCreate" data-modal-toggle="provinceCreate"
                    class="mr-2 mb-2 inline-flex rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 h-5 w-5"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Provinsi
                </button>
                <button type="button" data-modal-target="regencyCreate" data-modal-toggle="regencyCreate"
                    class="mr-2 mb-2 inline-flex rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="mr-2 -ml-1 h-5 w-5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Kabupaten
                </button>
            </div>
            <div class="relative overflow-x-auto p-3 shadow-md sm:rounded-lg">
                <table id="dataTable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Kabupaten/Kota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($provinces as $province)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $province->name }}</td>
                                <td> Provinsi </td>
                                <td class="flex justify-center">
                                    <button data-modal-target="provinceEdit-{{ $province->id }}" data-modal-toggle="provinceEdit-{{ $province->id }}"
                                        data-tooltip-target="tooltip-edit"
                                        class="mx-1 inline-flex rounded-lg border border-orange-500 px-1 py-1 text-center text-sm font-medium hover:bg-orange-200 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 fill-orange-500">
                                            <path
                                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                                        </svg>
                                        <div id="tooltip-edit" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                            Ubah Data
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </button>
                                    <a href="{{ route('admin.province.destroy', $province->id) }}" data-confirm-delete="true" data-tooltip-target="tooltip-delete"
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
                            @php
                                $no++;
                            @endphp
                            @foreach ($province->regencies as $regency)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $regency->province->name }}</td>
                                    <td> {{ $regency->name }} </td>
                                    <td class="flex justify-center">
                                        <button data-modal-target="regencyEdit-{{ $regency->id }}" data-modal-toggle="regencyEdit-{{ $regency->id }}"
                                            data-tooltip-target="tooltip-edit"
                                            class="mx-1 inline-flex rounded-lg border border-orange-500 px-1 py-1 text-center text-sm font-medium hover:bg-orange-200 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 fill-orange-500">
                                                <path
                                                    d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                                            </svg>
                                            <div id="tooltip-edit" role="tooltip"
                                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                                Ubah Data
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </button>
                                        <a href="{{ route('admin.regency.destroy', $regency->id) }}" data-confirm-delete="true"
                                            data-tooltip-target="tooltip-delete"
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
                                @php
                                    $no++;
                                @endphp
                            @endforeach
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Kabupaten/Kota</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    @include('admin.component.provinceCreate')
    @include('admin.component.regencyCreate')
    @foreach ($provinces as $province)
        @include('admin.component.provinceEdit')
        @foreach ($province->regencies as $regency)
            @include('admin.component.regencyEdit')
        @endforeach
    @endforeach
@endsection
