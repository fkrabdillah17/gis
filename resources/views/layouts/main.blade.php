<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('assets/images/logo_unib.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/scroller/2.1.1/css/scroller.dataTables.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body class="flex min-h-screen flex-col dark:bg-gray-900 dark:text-white">
    @include('layouts.component.topbar')
    @if (request()->routeIs('admin*'))
        @include('layouts.component.sidebar')
    @endif
    <main class="flex-grow">
        <div class="mx-auto my-8 py-4">
            @yield('content')
        </div>
    </main>
    @include('layouts.component.footer')
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/scroller/2.1.1/js/dataTables.scroller.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable({
                dom: '<f<t>ip>',
                lengthChange: false,
                responsive: true,
                scrollY: '50vh',
                deferRender: true,
                order: [],
            });
        });
    </script>
    @include('sweetalert::alert')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
