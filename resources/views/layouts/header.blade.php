<header class="pl-0 sm:pl-64 transition-all duration-300 w-full h-14 bg-gray-700 text-white flex justify-center fixed top-0 z-[9]">
    <div class="container mx-auto px-5 sm:px-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60 flex justify-between items-center">
        <div class="flex justify-start items-center max-w-[70%]">
            <a href="javascript:void(0)" @click="sidebarOpened = ! sidebarOpened" class="w-6 h-6 p-4 rounded-full sm:hidden -ml-1 mr-4 flex justify-center items-center">
                <i class="fas fa-bars text-xl"></i>
            </a>
            <a href="" class="text-xl truncate">@yield('title', 'Lsky Pro')</a>
        </div>
        <div class="flex justify-end items-center">
            @include('layouts.user-nav')
        </div>
    </div>
</header>
