<footer class="{{ request()->routeIs('admin*') ? 'md:ml-64' : '' }} bg-white dark:bg-gray-900">
    <div class="{{ request()->routeIs('admin*') ? 'px-0' : 'p-4' }} mx-auto w-full max-w-full py-6 lg:py-8">
        @if (!(request()->routeIs('login') || request()->routeIs('admin*')))
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('assets/images/logo_unib.png') }}" class="mr-3 h-8" alt="Logo UNIB" />
                        <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">TerraVisage</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Pemetaan Lahan</h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                @foreach ($provincesList as $province)
                                    <a href="{{ route('mapping', $province->id) }}" class="hover:underline">{{ $province->name }}</a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Ikuti kami</h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://engineering.unib.ac.id/bi/" class="hover:underline">Informatika UNIB</a>
                            </li>
                            <li>
                                <a href="https://himatifunib.org/" class="hover:underline">HIMATIF UNIB</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Tentang Kami</h2>
                        <ul class="font-medium text-gray-500 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">TerraVisage</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <hr class="my-6 border-gray-200 dark:border-gray-700 lg:my-8" />
        <div class="flex items-center justify-center">
            <span class="text-center text-sm text-gray-500 dark:text-gray-400">© 2023 <a href="https://engineering.unib.ac.id/bi/"
                    class="hover:underline">INFORMATIKA UNIVERSITAS
                    BENGUKULU</a>.
                All Rights Reserved.
            </span>
        </div>
    </div>
</footer>
