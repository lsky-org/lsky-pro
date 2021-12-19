<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="Lsky Pro"/>
        <meta name="description" content="Lsky Pro, Your photo album on the cloud."/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
        @stack('styles')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" x-data="{sidebarOpened: false}" x-cloak>
            @include('layouts.sidebar')
            @include('layouts.header')
            <div
                x-transition:enter="ease-in-out duration-500"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in-out duration-500"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                 class="z-[9] bg-black bg-opacity-75 transition-opacity h-full w-full fixed inset-0 sm:hidden"
                 x-show="sidebarOpened"
                 @click.outside="sidebarOpened = false"
                 @close.stop="sidebarOpened = false"
                 @click="sidebarOpened = ! sidebarOpened"
                 style="display: none"
            >

            </div>
            <x-container class="transition-all duration-300 pt-20 md:pt-24 pb-6">
                {{ $slot }}
            </x-container>
        </div>
    </body>
    @stack('scripts')
</html>
