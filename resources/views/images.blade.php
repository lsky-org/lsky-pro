@section('title', '我的图片')

<x-app-layout>
    <div class="flex justify-between items-center bg-white h-12 border-solid border-b px-2 space-x-2">
        <div class="hidden md:block">
            <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href=""><i class="fas fa-folder-open text-blue-500"></i> 新建相册</a>
        </div>
        <div class="block md:hidden">
            <x-dropdown direction="right">
                <x-slot name="trigger">
                    <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">选中项 <i class="fas fa-chevron-down text-blue-500"></i></a>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="{{ route('/') }}">移动到相册</x-dropdown-link>
                    <x-dropdown-link href="{{ route('/') }}">标记为不健康</x-dropdown-link>
                    <x-dropdown-link href="{{ route('/') }}" class="text-red-500">公开</x-dropdown-link>
                    <x-dropdown-link href="{{ route('/') }}" class="text-red-500">删除</x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
    <div>
        <x-no-data message="这里什么都没有呢～"/>
    </div>
</x-app-layout>
