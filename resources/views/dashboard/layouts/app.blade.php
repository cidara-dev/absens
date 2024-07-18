<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="bg-gray-50 dark:bg-gray-800">
@include('dashboard.layouts.navbar')
    <div class="flex overflow-hidden pt-16 bg-gray-50 dark:bg-gray-900">
        @include('dashboard.layouts.sidebar')
        <div class="hidden fixed inset-0 z-10 bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
        <div id="main-content" class="overflow-y-auto relative w-full h-full bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    @stack('scripts')
    @stack('script')
</body>

</html>