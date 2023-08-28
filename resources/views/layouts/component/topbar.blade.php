<nav class="{{ request()->routeIs('admin*') ? 'border-b dark:border-gray-700' : '' }} fixed top-0 z-50 w-full border-gray-200 bg-white dark:bg-gray-900">
    <div class="mx-auto flex max-w-full flex-wrap items-center justify-between p-4">
        <div class="flex items-center justify-start">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
                class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
                <span class="sr-only">Open sidebar</span>
                <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/images/logo_unib.png') }}" class="mr-3 h-8" alt="Logo UNIB" />
                <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">TerraVisage
                    <span class="hidden md:inline-block">{{ request()->routeIs('admin*') ? 'Administrator' : '' }}</span></span>
            </a>
        </div>
        <div class="flex md:order-2">
            <button id="theme-toggle" type="button"
                class="ml-2 rounded-lg text-sm text-gray-500 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700 md:order-2">
                <svg id="theme-toggle-dark-icon" class="hidden h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
            @if (request()->routeIs('admin*'))
                <button type="button"
                    class="mr-3 flex rounded-full border border-black bg-white text-sm focus:ring-4 focus:ring-white dark:border-white dark:bg-gray-700 dark:focus:ring-white md:mr-0"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <svg class="h-8 w-8 rounded-full p-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span class="block truncate text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ route('home') }}" target="_blank"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">TerraVisage</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</a>
                        </li>
                    </ul>
                </div>
            @endif

            @if (!(request()->routeIs('login') || request()->routeIs('admin*')))
                <button data-collapse-toggle="navigationBar" type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                    aria-controls="navigationBar" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            @endif
        </div>

        @if (!(request()->routeIs('login') || request()->routeIs('admin*')))
            <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navigationBar">
                <ul
                    class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
                    <li>
                        <a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'md:text-blue-700 text-white md:dark:text-blue-500 bg-blue-700' : 'hover:bg-gray-200 text-gray-900 dark:text-white dark:hover:bg-gray-700 ' }} block rounded py-2 pl-3 pr-4 md:bg-transparent md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="{{ request()->routeIs('mapping*') ? 'md:text-blue-700 text-white md:dark:text-blue-500 bg-blue-700' : 'hover:bg-gray-200 text-gray-900 dark:text-white dark:hover:bg-gray-700 ' }} flex w-full items-center justify-between rounded py-2 pl-3 pr-4 dark:border-gray-700 dark:focus:text-white md:w-auto md:border-0 md:bg-transparent md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Pemetaan
                            Lahan
                            <svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow-lg dark:divide-gray-600 dark:bg-gray-800">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                @foreach ($provincesList as $province)
                                    <li>
                                        <a href="{{ route('mapping', $province->id) }}"
                                            class="{{ request()->segment(2) == $province->id ? ' text-white md:dark:text-blue-500 bg-blue-700' : 'hover:bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-white dark:hover:bg-gray-700' }} block px-4 py-2 font-semibold">{{ $province->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="{{ request()->routeIs('about') ? 'md:text-blue-700 text-white md:dark:text-blue-500 bg-blue-700' : 'hover:bg-gray-200 text-gray-900 dark:text-white dark:hover:bg-gray-700 ' }} block rounded py-2 pl-3 pr-4 md:bg-transparent md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500"
                            aria-current="page">Tantang Kami</a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
