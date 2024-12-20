<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BoyK07') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tsparticles/preset-stars@3/tsparticles.preset.stars.bundle.min.js"></script>
    </head>
    <body class="font-sans antialiased bg-[#13152b] overflow-y-scroll scrollbar-hide">
        <div id="tsparticles" class="bg-black opacity-30"></div>
        <div class="min-h-screen flex flex-col">
            <livewire:layout.navigation />

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <livewire:layout.footer />
        </div>
    </body>
</html>
