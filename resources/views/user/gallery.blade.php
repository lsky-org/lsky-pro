@section('title', '画廊')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@endpush

<x-app-layout>
    <div class="p-4">
        <div class="mb-4">
            <p class="mb-2 text-xl font-semibold text-gray-700">2022 年 1 月</p>
            <div class="images-grid">
                @foreach(\App\Models\Image::all() as $image)
                    <div class="grid-item relative mb-4 bg-white rounded-md w-40 overflow-hidden">
                        <div class="relative overflow-hidden w-full h-32">
                            <img class="grow object-cover object-center w-full h-full" src="{{ $image->thumb_url }}"/>
                        </div>
                        <a href="{{ $image->user->url ?: 'javascript:void(0)' }}" class="flex justify-between items-center px-2 py-3 bg-white overflow-hidden">
                            <img src="{{ $image->user->avatar }}" class="w-6 h-6 rounded-full">
                            <p class="ml-2 truncate">{{ $image->user->name }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/masonry/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script>
            var $grid = $('.images-grid').masonry({
                itemSelector: '.grid-item',
                gutter: 14,
                originLeft: true,
                originTop: true,
                duration: '0.8s',
                resize: true,
                initLayout: true,
                percentPosition: true,
                horizontalOrder: true,
            });
            $grid.imagesLoaded().progress(function() {
                $grid.masonry('layout');
            });
        </script>
    @endpush
</x-app-layout>
