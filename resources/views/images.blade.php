@section('title', '我的图片')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/justified-gallery/justifiedGallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viewer-js/viewer.min.css') }}">
@endpush

<x-app-layout>
    <div class="fixed z-[2] top-14 left-0 right-0 bg-white border-solid border-b">
        <x-container class="px-2 flex justify-between items-center h-12">
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
                        <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('newest'); open = false">最新</x-dropdown-link>
                        <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('earliest'); open = false">最早</x-dropdown-link>
                        <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('utmost'); open = false">最大</x-dropdown-link>
                        <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('least'); open = false">最小</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </x-container>
    </div>

    <div id="photos-grid" class="overflow-hidden mt-6 md:mt-2"></div>
    <div id="photos-loading" class="flex justify-center items-center pt-6 pb-6">
        <a href="javascript:void(0)" class="flex justify-center items-center text-sm text-gray-400 text-gray-700 cursor-not-allowed">加载中...</a>
    </div>

    <script type="text/html" id="photos-item">
        <a href="javascript:void(0)" class="rounded relative item">
            <div class="absolute left-0 right-0 bottom-0 h-20 z-[1] bg-gradient-to-t from-black" onclick="$(this).siblings('img').trigger('click')">
                <div class="absolute left-2 bottom-2 text-white z-[2] w-[90%]">
                    <p class="text-sm truncate" title="__name__">__name__</p>
                    <p class="text-xs" title="__human_date__">__date__</p>
                </div>
            </div>
            <img alt="__name__" src="__url__">
        </a>
    </script>

    @push('scripts')
        <script src="{{ asset('js/justified-gallery/jquery.justifiedGallery.min.js') }}"></script>
        <script src="{{ asset('js/viewer-js/viewer.min.js') }}"></script>
        <script>
            const $photos = $("#photos-grid");
            const $loading = $("#photos-loading a");
            const viewer = new Viewer(document.getElementById('photos-grid'), {});
            let params = {
                page: 1,
                order: '',
            };
            let gridConfigs = {
                rowHeight : 180,
                margins: 10,
                captions: false,
                border: 10,
                refreshSensitivity: (this.scrollbarWidth || 19) + 1, // 防止 viewer.js 打开时隐藏滚动条导致 grid 被重新计算
            };
            const getImages = () => {
                if (params.page !== 1 && $loading.hasClass('cursor-not-allowed')) {
                    return;
                }
                $.ajax({
                    url: '',
                    type: 'post',
                    data: params,
                    beforeSend: function () {
                        $loading.text('加载中...').addClass('text-gray-400 cursor-not-allowed');
                    },
                    success: function (response) {
                        if (! response.status) {
                            return toastr.error(response.message);
                        }

                        let images = response.data.images.data;
                        if (images.length <= 0 || response.data.last_page === params.page) {
                            $loading.text('我也是有底线的~').addClass('text-gray-400 cursor-not-allowed');
                            return;
                        }

                        let html = '';
                        for (const i in images) {
                            html += $('#photos-item').html()
                                .replace(/__name__/g, images[i].filename)
                                .replace(/__human_date__/g, images[i].human_date)
                                .replace(/__date__/g, images[i].date)
                                .replace(/__url__/g, images[i].url)
                        }

                        $photos.append(html).justifiedGallery('norewind');
                        viewer.update();

                        params.page++;
                        setTimeout(function () {
                            $loading.text('加载更多').removeClass('text-gray-400 cursor-not-allowed');
                        }, 500)
                    },
                });
            };

            const setOrderBy = function (sort) {
                params.page = 1;
                params.order = sort;
                $photos.html('').justifiedGallery('destroy').justifiedGallery(gridConfigs)
                getImages();
            };

            $('html').css('overflow-y', 'scroll')
            $photos.justifiedGallery(gridConfigs);
            $loading.click(() => getImages(params.page));

            $(window).scroll(function() {
                let scrollTop = $(this).scrollTop();
                let scrollHeight = $(document).height();
                let clientHeight = $(this).height();
                if(scrollTop + clientHeight >= scrollHeight - 50) {
                    getImages();
                }
            });

            setTimeout(() => getImages(), 500);
        </script>
    @endpush
</x-app-layout>
