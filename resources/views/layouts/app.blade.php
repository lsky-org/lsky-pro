<!DOCTYPE html>
@props(['full' => request()->routeIs('images')])
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="Lsky Pro"/>
        <meta name="description" content="Lsky Pro, Your photo album on the cloud."/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @stack('styles')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" x-data="{sidebarOpened: false}" x-cloak>
            @include('layouts.sidebar')
            @include('layouts.header', ['full' => $full])
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
            <main class="transition-all duration-300 sm:ml-64 pt-14">
                <div class="w-full {{ $full ? '' : 'container mx-auto p-6 md:p-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60' }}" style="min-height: calc(100vh - 3.5rem)">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
    @stack('scripts')
</html>
