<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" x-data="{sidebarOpened: false}" x-cloak>
            @include('layouts.sidebar')
            @include('layouts.header')
            <div
                 class="bg-black opacity-50 h-full w-full fixed left-0 right-0 bottom-0 top-0"
                 x-show="sidebarOpened"
                 @click.outside="sidebarOpened = false"
                 @close.stop="sidebarOpened = false"
                 @click="sidebarOpened = ! sidebarOpened"
                 style="display: none"
            >
            </div>
            <main class="transition-all duration-300 sm:ml-64 pt-9 sm:pt-14">
                <div class="mt-8 container mx-auto px-4 sm:px-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60 w-full">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
