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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-primary">
        <div class="min-h-screen">
            <x-header />
            <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 px-4">
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-black shadow-md overflow-hidden rounded-xl sm:rounded-3xl">
                    {{ $slot }}
                </div>
            </div>
            <x-footer class="mt-8" />
        </div>
    </body>
</html>
