<nav class="transition-all duration-300 -left-[600px] sm:left-0 w-3/4 sm:w-64 h-screen bg-white fixed z-10 shadow-custom" :class="{
    '-left-[600px]': ! $store.sidebar.open,
    'left-0': $store.sidebar.open
}">
    <div class="px-6 h-14 flex justify-between sm:justify-center items-center bg-gray-600 text-white text-xl">
        <a href="/" class="truncate">{{ \App\Utils::config(\App\Enums\ConfigKey::AppName) }}</a>
        <a href="javascript:void(0)" class="sm:hidden block" @click="$store.sidebar.open = false"><i class="fas fa-times"></i></a>
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
                <x-nav-link :href="route('settings')" :active="request()->routeIs('settings')">
                    <x-slot name="icon"><i class="fas fa-user-cog text-blue-500"></i></x-slot>
                    <x-slot name="name">设置</x-slot>
                </x-nav-link>
            </div>
            @if(\App\Utils::config(\App\Enums\ConfigKey::IsEnableGallery) || \App\Utils::config(\App\Enums\ConfigKey::IsEnableApi))
            <div class="flex flex-col space-y-2 mb-5">
                <p class="text-gray-400 text-sm mx-4">公共</p>
                @if(\App\Utils::config(\App\Enums\ConfigKey::IsEnableGallery))
                <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                    <x-slot name="icon"><i class="fas fa-chalkboard text-blue-500"></i></x-slot>
                    <x-slot name="name">画廊</x-slot>
                </x-nav-link>
                @endif
                @if(\App\Utils::config(\App\Enums\ConfigKey::IsEnableApi))
                <x-nav-link :href="route('api')" :active="request()->routeIs('api')">
                    <x-slot name="icon"><i class="fas fa-link text-blue-500"></i></x-slot>
                    <x-slot name="name">接口</x-slot>
                </x-nav-link>
                @endif
            </div>
            @endif
            @if(Auth::user()->is_adminer)
            <div class="flex flex-col space-y-2 mb-5">
                <p class="text-gray-400 text-sm mx-4">系统</p>
                <x-nav-link :href="route('admin.console')" :active="request()->is('admin/console*')">
                    <x-slot name="icon"><i class="fas fa-terminal text-blue-500"></i></x-slot>
                    <x-slot name="name">控制台</x-slot>
                </x-nav-link>
                <x-nav-link :href="route('admin.groups')" :active="request()->is('admin/groups*')">
                    <x-slot name="icon"><i class="fas fa-users text-blue-500"></i></x-slot>
                    <x-slot name="name">角色组</x-slot>
                </x-nav-link>
                <x-nav-link :href="route('admin.users')" :active="request()->is('admin/users*')">
                    <x-slot name="icon"><i class="fas fa-users-cog text-blue-500"></i></x-slot>
                    <x-slot name="name">用户管理</x-slot>
                </x-nav-link>
                <x-nav-link :href="route('admin.images')" :active="request()->is('admin/images*')">
                    <x-slot name="icon"><i class="fas fa-images text-blue-500"></i></x-slot>
                    <x-slot name="name">图片管理</x-slot>
                </x-nav-link>
                <x-nav-link :href="route('admin.strategies')" :active="request()->is('admin/strategies*')">
                    <x-slot name="icon"><i class="fas fa-hdd text-blue-500"></i></x-slot>
                    <x-slot name="name">储存策略</x-slot>
                </x-nav-link>
                <x-nav-link :href="route('admin.settings')" :active="request()->is('admin/settings*')">
                    <x-slot name="icon"><i class="fas fa-cogs text-blue-500"></i></x-slot>
                    <x-slot name="name">系统设置</x-slot>
                </x-nav-link>
            </div>
            @endif
        </div>

        <div id="capacity-progress" class="flex flex-col space-y-2 mb-5 px-5 w-full mt-10">
            <p class="text-gray-700 text-sm">容量使用</p>
            <progress class="w-full h-1.5" value="{{ Auth::user()->use_capacity }}" max="{{ Auth::user()->capacity }}"></progress>
            <p class="text-gray-700 text-sm truncate">
                <span class="used">{{ \App\Utils::formatSize(Auth::user()->use_capacity * 1024) }}</span>
                /
                <span class="total">{{ \App\Utils::formatSize(Auth::user()->capacity * 1024) }}</span>
            </p>
        </div>
    </div>
</nav>

@push('scripts')
    <script>
        let $progress = $('#capacity-progress progress');
        let value = $progress.attr('value') / $progress.attr('max') * 100;
        let str = 'green';
        if (value > 90) {
            str = 'red';
        } else if (value > 70) {
            str = 'orange';
        } else if (value > 60) {
            str = 'yellow';
        } else if (value > 40) {
            str = 'yellowgreen';
        }
        $progress.addClass(str)
    </script>
@endpush
