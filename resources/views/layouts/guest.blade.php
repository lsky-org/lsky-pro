<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="relative min-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="{{ \App\Utils::config(\App\Enums\ConfigKey::SiteKeywords) }}"/>
        <meta name="description" content="{{ \App\Utils::config(\App\Enums\ConfigKey::SiteDescription) }}"/>

        <title>{{ \App\Utils::config(\App\Enums\ConfigKey::AppName) }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
        @stack('styles')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/common.css') }}?t=20220817">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}?t=20220817">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen text-gray-900 bg-gray-100">
            {{ $slot }}
        </div>
    </body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}?t=20220817"></script>
    @if(file_exists(public_path('js/custom.js')))
        <script src="{{ asset('js/custom.js') }}"></script>
    @endif
    @stack('scripts')
</html>
