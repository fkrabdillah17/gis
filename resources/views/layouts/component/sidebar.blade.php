<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-20 transition-transform dark:border-gray-700 dark:bg-gray-900 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full overflow-y-auto bg-white px-3 pb-4 dark:bg-gray-900">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'border-l-8 border-blue-600 dark:border-blue-500 text-blue-600 dark:text-blue-500' : 'text-gray-900 dark:text-white' }} group flex items-center rounded-lg p-2 hover:bg-gray-300 dark:hover:bg-gray-700">
                    <svg class="{{ request()->routeIs('admin.dashboard') ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} h-5 w-5 transition duration-75"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.masterData') }}"
                    class="{{ request()->routeIs('admin.masterData*') ? 'border-l-8 border-blue-600 dark:border-blue-500 text-blue-600 dark:text-blue-500' : 'text-gray-900 dark:text-white' }} group flex items-center rounded-lg p-2 hover:bg-gray-300 dark:hover:bg-gray-700">
                    <svg class="{{ request()->routeIs('admin.masterData*') ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} h-5 w-5 transition duration-75"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M8 5.625c4.418 0 8-1.063 8-2.375S12.418.875 8 .875 0 1.938 0 3.25s3.582 2.375 8 2.375Zm0 13.5c4.963 0 8-1.538 8-2.375v-4.019c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353c-.193.081-.394.158-.6.231l-.189.067c-2.04.628-4.165.936-6.3.911a20.601 20.601 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244c-.053-.028-.113-.053-.165-.082v4.019C0 17.587 3.037 19.125 8 19.125Zm7.09-12.709c-.193.081-.394.158-.6.231l-.189.067a20.6 20.6 0 0 1-6.3.911 20.6 20.6 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244C.112 6.035.052 6.01 0 5.981V10c0 .837 3.037 2.375 8 2.375s8-1.538 8-2.375V5.981c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353Z" />
                    </svg>
                    <span class="ml-3">Master Data</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.upload') }}"
                    class="{{ request()->routeIs('admin.upload*') ? 'border-l-8 border-blue-600 dark:border-blue-500 text-blue-600 dark:text-blue-500' : 'text-gray-900 dark:text-white' }} group flex items-center rounded-lg p-2 hover:bg-gray-300 dark:hover:bg-gray-700">
                    <svg class="{{ request()->routeIs('admin.upload*') ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400' }} h-5 w-5 transition duration-75"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="m14.707 4.793-4-4a1 1 0 0 0-1.416 0l-4 4a1 1 0 1 0 1.416 1.414L9 3.914V12.5a1 1 0 0 0 2 0V3.914l2.293 2.293a1 1 0 0 0 1.414-1.414Z" />
                        <path
                            d="M18 12h-5v.5a3 3 0 0 1-6 0V12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="ml-3">Unggah Peta</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
