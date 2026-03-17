<!-- Profile dropdown -->
<x-dropdown>
    <x-slot name="trigger">
        <button type="button" class="header-action focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true" title="{{ Auth::user()->name }}">
            <span class="sr-only">Open user menu</span>
            <img class="header-action-icon" src="{{ Auth::user()->avatar }}" alt="">
        </button>
    </x-slot>

    <x-slot name="content">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link href="javascript:void(0)" id="open-profile-panel"><i class="fas fa-id-card w-4 mr-2"></i>个人信息</x-dropdown-link>
            <x-dropdown-link href="{{ route('images') }}"><i class="fas fa-images w-4 mr-2"></i>我的图片</x-dropdown-link>
            <x-dropdown-link href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt w-4 mr-2"></i>仪表盘</x-dropdown-link>
            <x-dropdown-link href="{{ route('settings') }}"><i class="fas fa-user-cog w-4 mr-2"></i>设置</x-dropdown-link>
            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="fas fa-sign-out-alt w-4 mr-2"></i>{{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </x-slot>
</x-dropdown>
