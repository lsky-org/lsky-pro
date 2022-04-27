<header class="transition-all duration-300 w-full h-14 bg-gray-700 text-white flex justify-center fixed top-0 z-[9] shadow-[0_15px_30px_-15px_rgba(0,0,0,0.5)]">
    <x-container class="w-full px-6 flex justify-between items-center">
        <div class="flex justify-start items-center max-w-[70%]">
            <a href="javascript:void(0)" @click="$store.sidebar.toggle()" class="w-6 h-6 p-4 rounded-full sm:hidden -ml-1 mr-4 flex justify-center items-center">
                <i class="fas fa-bars text-xl"></i>
            </a>
            <a href="" class="text-xl truncate" id="header-title">@yield('title', \App\Utils::config(\App\Enums\ConfigKey::AppName))</a>
        </div>
        <div class="flex justify-end items-center space-x-4">
            @if($_group->strategies->isNotEmpty())
                @include('layouts.strategies')
            @endif
            @include('layouts.user-nav')
        </div>
    </x-container>
</header>
