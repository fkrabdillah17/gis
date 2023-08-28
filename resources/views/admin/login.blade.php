@extends('layouts.main')

@section('content')
    <div>
        <div class="m-5 flex items-center justify-center">
            <div class="w-full max-w-lg rounded-lg border border-gray-200 bg-white p-4 shadow dark:border-gray-700 dark:bg-gray-800 sm:p-6 md:p-8">
                <form class="space-y-6" action="{{ route('auth') }}" method="post">
                    @csrf
                    <h5 class="text-center text-xl font-medium text-gray-900 dark:text-white">Masuk ke akun anda</h5>
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                            placeholder="admin@gmail.com" required>
                    </div>
                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kata Sandi</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                            required>
                    </div>
                    <button type="submit"
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
                </form>
            </div>
        </div>

    </div>
@endsection
