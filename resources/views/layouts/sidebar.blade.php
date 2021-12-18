<nav class="transition-all duration-300 -left-64 sm:left-0 h-screen sm:w-64 bg-white fixed z-10 shadow-lg sm:shadow-none" :class="{
    '-left-64': ! sidebarOpened,
    'left-0': sidebarOpened,
    'w-3/4': sidebarOpened
}">
    <div class="px-6 h-14 flex justify-between sm:justify-center items-center bg-gray-600 text-white text-xl">
        <a href="/" class="truncate">Lsky Pro</a>
        <a href="javascript:void(0)" class="sm:hidden block" @click="sidebarOpened = false"><i class="fas fa-times"></i></a>
    </div>

    <div class="flex flex-col justify-between container mx-auto p-4 pb-12 h-full overflow-scroll overscroll-contain scrollbar-none">
        <div>
            <div class="flex flex-col space-y-3 mb-5">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <x-slot name="icon"><i class="fas fa-tachometer-alt text-blue-500"></i></x-slot>
                    <x-slot name="name">仪表盘</x-slot>
                </x-nav-link>
            </div>
            <div class="flex flex-col space-y-2 mb-5">
                <p class="text-gray-400 text-sm mx-4">我的</p>
                <x-nav-link :href="route('upload')" :active="request()->routeIs('upload')">
                    <x-slot name="icon"><i class="fas fa-cloud-upload-alt text-blue-500"></i></x-slot>
                    <x-slot name="name">上传图片</x-slot>
                </x-nav-link>
                <x-nav-link :href="route('images')" :active="request()->routeIs('images')">
                    <x-slot name="icon"><i class="fas fa-images text-blue-500"></i></x-slot>
                    <x-slot name="name">我的图片</x-slot>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('settings')">
                    <x-slot name="icon"><i class="fas fa-user-cog text-blue-500"></i></x-slot>
                    <x-slot name="name">设置</x-slot>
                </x-nav-link>
            </div>
            <div class="flex flex-col space-y-2 mb-5">
                <p class="text-gray-400 text-sm mx-4">公共</p>
                <x-nav-link :active="request()->routeIs('gallery')">
                    <x-slot name="icon"><i class="fas fa-chalkboard text-blue-500"></i></x-slot>
                    <x-slot name="name">画廊</x-slot>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('apis')">
                    <x-slot name="icon"><i class="fas fa-link text-blue-500"></i></x-slot>
                    <x-slot name="name">接口</x-slot>
                </x-nav-link>
            </div>
            <div class="flex flex-col space-y-2 mb-5">
                <p class="text-gray-400 text-sm mx-4">系统</p>
                <x-nav-link :active="request()->routeIs('admin.console')">
                    <x-slot name="icon"><i class="fas fa-terminal text-blue-500"></i></x-slot>
                    <x-slot name="name">控制台</x-slot>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('admin.groups')">
                    <x-slot name="icon"><i class="fas fa-users text-blue-500"></i></x-slot>
                    <x-slot name="name">角色组</x-slot>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('admin.users')">
                    <x-slot name="icon"><i class="fas fa-users-cog text-blue-500"></i></x-slot>
                    <x-slot name="name">用户管理</x-slot>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('admin.images')">
                    <x-slot name="icon"><i class="fas fa-images text-blue-500"></i></x-slot>
                    <x-slot name="name">图片管理</x-slot>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('admin.strategies')">
                    <x-slot name="icon"><i class="fas fa-hdd text-blue-500"></i></x-slot>
                    <x-slot name="name">储存策略</x-slot>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('admin.settings')">
                    <x-slot name="icon"><i class="fas fa-cogs text-blue-500"></i></x-slot>
                    <x-slot name="name">系统设置</x-slot>
                </x-nav-link>
            </div>
        </div>

        <div class="flex flex-col space-y-2 mb-5 px-5 w-full mt-10">
            <p class="text-gray-700 text-sm">容量使用</p>
            <progress class="w-full h-1.5 bg-gary-300" value="90" max="100"></progress>
            <p class="text-gray-700 text-sm truncate" title="0.00 Bytes / 1.00 GB">0.00 Bytes / 1.00 GB</p>
        </div>
    </div>
</nav>
