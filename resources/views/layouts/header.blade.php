<header class="pl-0 sm:pl-64 transition-all duration-300 w-full h-14 bg-gray-700 text-white flex justify-center fixed">
    <div class="container mx-auto px-5 sm:px-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60 flex justify-between items-center">
        <div class="flex justify-start items-center max-w-[70%]">
            <a href="javascript:void(0)" @click="sidebarOpened = ! sidebarOpened" class="w-6 h-6 p-4 rounded-full sm:hidden -ml-1 mr-4 flex justify-center items-center">
                <i class="fas fa-bars text-xl"></i>
            </a>
            <a href="" class="text-xl truncate">仪表盘</a>
        </div>
        <div class="flex justify-end items-center">
        <!-- Profile dropdown -->
        <x-dropdown>
            <x-slot name="trigger">
                <button type="button" class="bg-gray-800 flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://gravatar.zeruns.tech/avatar/7a585313ed855e8d652cbb3154a6056e?s=300&d=mm&r=g" alt="">
                    <span class="px-2 sm:block hidden">{{ Auth::user()->name }}</span>
                </button>
            </x-slot>

            <x-slot name="content">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="''">上传图片</x-dropdown-link>
                    <x-dropdown-link :href="''">设置</x-dropdown-link>
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>

        </x-dropdown>
    </div>
</header>
