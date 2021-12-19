@section('title', '我的图片')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/justified-gallery/justifiedGallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/photo-swipe/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/photo-swipe/default-skin/default-skin.css') }}">
@endpush

<x-app-layout>
    <div class="flex justify-between items-center bg-white h-12 border-solid border-b px-2">
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
        <div class="flex space-x-2 items-center">
            <input type="text" class="px-2.5 py-1.5 border-0 outline-none rounded bg-gray-100 text-sm transition-all duration-300 w-36 md:hover:w-52 md:focus:w-52" placeholder="输入关键字搜索...">
            <x-dropdown direction="left">
                <x-slot name="trigger">
                    <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">排序 <i class="fas fa-sort-alpha-up text-blue-500"></i></a>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="javascript:void(0)">最新</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)">最早</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)">最大</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)">最小</x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
    <div id="photo-grid">
        @foreach(Auth::user()->images()->get() as $image)
            <a href="javascript:void(0)" class="rounded p-1 border-2 border-transparent hover:border-blue-500">
                <img src="{{ $image->url }}">
            </a>
        @endforeach
    </div>
    @push('scripts')
        <script src="{{ asset('js/justified-gallery/jquery.justifiedGallery.min.js') }}"></script>
        <script src="{{ asset('js/photo-swipe/jquery.photoswipe-global.js') }}"></script>
        <script>
            $("#photo-grid").justifiedGallery({
                rowHeight : 180,
                margins: 10,
                border: 10,
            }).photoSwipe('img', {
                allowPanToNext: true,
                shareButtons: [
                    {id: 'facebook', label: 'Share on Facebook', url: 'https://www.facebook.com/sharer/sharer.php?u=@{{url}}'},
                    {id: 'twitter', label: 'Tweet', url: 'https://twitter.com/intent/tweet?text=@{{text}}&url=@{{url}}'},
                    {id: 'download', label: 'Download image', url: '@{{raw_image_url}}', download: true}
                ],
            });
        </script>
    @endpush
</x-app-layout>
