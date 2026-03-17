<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ \App\Utils::config(\App\Enums\ConfigKey::SiteKeywords) }}"/>
    <meta name="description" content="{{ \App\Utils::config(\App\Enums\ConfigKey::SiteDescription) }}"/>

    <title>{{ \App\Utils::config(\App\Enums\ConfigKey::AppName) }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}?t=20220817">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?t=20220817">
    <link rel="stylesheet" href="{{ asset('css/lsky-ui.css') }}">

    <style>
        :root {
            --sidebar-width: 0px;
            --header-height: 48px;
        }

        .lsky-shell {
            position: fixed;
            inset: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background: #f3f4f6;
        }

        .lsky-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 30;
            background: #fff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.04);
            transform: translateX(-110%);
            transition: transform .25s ease;
            width: auto;
            max-width: calc(100vw - 24px);
        }

        .lsky-sidebar.is-open {
            transform: translateX(0);
        }

        .lsky-sidebar-inner {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            min-width: max-content;
            padding: 16px;
            padding-bottom: 48px;
            overflow-y: auto;
            overscroll-behavior: contain;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .lsky-sidebar-inner::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .lsky-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: var(--header-height);
            z-index: 20;
            background: #374151;
            color: #fff;
            box-shadow: 0 15px 10px -15px rgba(0, 0, 0, 0.3);
        }

        .lsky-main {
            position: fixed;
            top: var(--header-height);
            left: 0;
            right: 0;
            bottom: 0;
            overflow-y: auto;
            overflow-x: hidden;
            -ms-overflow-style: none;
            scrollbar-width: none;
            z-index: 10;
            padding: 10px;
        }

        .lsky-main::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .lsky-main.wide-content {
            padding: 10px;
        }

        .lsky-main.media-carousel-open {
            overflow: hidden;
        }

        .lsky-backdrop {
            position: fixed;
            inset: 0;
            z-index: 25;
            background: rgba(15, 23, 42, 0.45);
            opacity: 0;
            pointer-events: none;
            transition: opacity .2s ease;
        }

        @media (min-width: 640px) {
            .lsky-sidebar {
                transform: translateX(0);
                max-width: none;
            }

            .lsky-backdrop {
                display: none;
            }

            .lsky-header {
                left: var(--sidebar-width);
                width: calc(100% - var(--sidebar-width));
                transition: left .2s ease, width .2s ease;
            }

            .lsky-main {
                left: var(--sidebar-width);
                width: calc(100% - var(--sidebar-width));
                transition: left .2s ease, width .2s ease;
            }
        }

        @media (min-width: 768px) {
            .lsky-main {
                padding: 10px;
            }

            .lsky-main.wide-content {
                padding: 10px;
            }
        }

        @media (min-width: 1536px) {
            .lsky-main {
                padding: 10px;
            }
        }

        @media (max-width: 639px) {
            .lsky-shell.sidebar-open .lsky-main {
                overflow: hidden;
                touch-action: none;
            }

            .lsky-shell.sidebar-open .lsky-backdrop {
                opacity: 1;
                pointer-events: auto;
            }
        }

        .admin-page-v2 {
            width: 100%;
            margin: 0;
        }

        .admin-page-v2 > p {
            color: #0f172a;
        }

        .admin-page-v2 .shadow-custom,
        .admin-page-v2 .bg-white.rounded-md,
        .admin-page-v2 .bg-white.rounded-lg {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            box-shadow: 0 1px 2px rgba(15, 23, 42, .05);
        }

        .admin-page-v2 #tabs {
            gap: 8px;
            margin-bottom: 0;
        }

        .admin-page-v2 #tabs a {
            border-radius: 8px 8px 0 0;
            border: 1px solid #e2e8f0;
            border-bottom: 0;
            background: #f1f5f9;
            color: #334155;
        }

        .admin-page-v2 #tabs a.bg-white {
            background: #fff;
            color: #0f172a;
            font-weight: 700;
        }
    </style>

    @stack('styles')
</head>
<body class="font-sans antialiased overflow-hidden">
<div class="lsky-shell" x-data x-cloak :class="{ 'sidebar-open': $store.sidebar.open }">
    @php
        $isWideContent = request()->routeIs('images', 'gallery', 'admin.images');
    @endphp

    @include('layouts.sidebar')
    <div class="lsky-backdrop sm:hidden" x-show="$store.sidebar.open" x-transition.opacity @click="$store.sidebar.toggle()" style="display:none;"></div>
    @include('layouts.header')

    <main class="lsky-main {{ $isWideContent ? 'wide-content' : '' }}">
        {{ $slot }}
    </main>

</div>

<script src="{{ asset('js/app.js') }}?t=20220817"></script>
@include('common.notice', ['_is_notice' => ($_is_notice ?? null)])
<script>
    let updateShellLayout = function () {
        const sidebar = document.getElementById('app-sidebar');
        const header = document.getElementById('app-header');

        if (header) {
            document.documentElement.style.setProperty('--header-height', header.getBoundingClientRect().height + 'px');
        }

        if (!sidebar) return;

        if (window.matchMedia('(min-width: 640px)').matches) {
            document.documentElement.style.setProperty('--sidebar-width', sidebar.getBoundingClientRect().width + 'px');
        } else {
            document.documentElement.style.setProperty('--sidebar-width', '0px');
        }
    };

    let setSwitch = function (e) {
        if (e.checked) {
            $(e).closest('.switch').find('input[type=hidden]').remove();
        } else {
            $(e).before('<input type="hidden" name="'+e.name+'" value="0" />');
        }
    }

    window.addEventListener('resize', updateShellLayout);
    window.addEventListener('load', updateShellLayout);
    updateShellLayout();

    if (window.ResizeObserver) {
        const sidebar = document.getElementById('app-sidebar');
        const header = document.getElementById('app-header');
        if (sidebar) {
            const observer = new ResizeObserver(function () {
                updateShellLayout();
            });
            observer.observe(sidebar);
        }
        if (header) {
            const headerObserver = new ResizeObserver(function () {
                updateShellLayout();
            });
            headerObserver.observe(header);
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
</body>
</html>
