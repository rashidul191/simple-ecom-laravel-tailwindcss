<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>


</head>

<!-- <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100"> -->

<body
    class="bg-gray-100 text-gray-800">



    @include('admin.layouts.navigation')

    <div class="flex pt-16">
        <!-- Sidebar -->
        @include('admin.layouts.partial.sidebar')


        <!-- Main Content -->
        <main class="flex-1 p-6">
            {{ $slot }}

        </main>
    </div>
    @include('admin.layouts.partial.footer')



    <script>
        const toggleBtn = document.getElementById("menuToggle");
        const sidebar = document.getElementById("sidebar");

        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });

        function toggleDropdown(id) {
            const menu = document.getElementById(id);
            menu.classList.toggle("hidden");
        }
    </script>
</body>

</html>