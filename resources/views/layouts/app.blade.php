<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
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
<body class="font-sans antialiased overflow-hidden">
<div class="min-h-screen bg-gray-100" x-data x-cloak>
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
        x-show="$store.sidebar.open"
        @click.outside="$store.sidebar.open = false"
        @close.stop="$store.sidebar.open = false"
        @click="$store.sidebar.toggle()"
        style="display: none"
    >

    </div>
    <x-container class="flex flex-col overflow-y-auto absolute pb-14 top-14 left-0 right-0 bottom-0 transition-all duration-300 min-h-screen h-full">
        {{ $slot }}
    </x-container>
</div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}?t=20220817"></script>
@include('common.notice')
<script>
    // 开关组件默认值
    let setSwitch = function (e) {
        if (e.checked) {
            $(e).closest('.switch').find('input[type=hidden]').remove();
        } else {
            $(e).before('<input type="hidden" name="'+e.name+'" value="0" />');
        }
    }
    $('.switch input[type=checkbox]').each(function () {
        setSwitch(this);
    }).click(function () {
        setSwitch(this);
    });
</script>
@if(file_exists(public_path('js/custom.js')))
<script src="{{ asset('js/custom.js') }}"></script>
@endif
@stack('scripts')
</html>
