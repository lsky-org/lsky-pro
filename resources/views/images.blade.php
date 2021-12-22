@section('title', '我的图片')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/justified-gallery/justifiedGallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viewer-js/viewer.min.css') }}">
@endpush

<x-app-layout>
    <div class="relative flex justify-between items-center px-2 py-2 z-[3] top-0 left-0 right-0 bg-white border-solid border-b">
        <div class="space-x-2 flex justify-between items-center">
            <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:getAlbums()"><i class="fas fa-bars text-blue-500"></i> 相册</a>
            <div class="block md:hidden">
                <x-dropdown direction="right">
                    <x-slot name="trigger">
                        <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800"
                           href="javascript:void(0)"><i class="fas fa-ellipsis-h text-blue-500"></i></a>
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
        <div class="flex space-x-2 items-center">
            <input type="text"
                   class="px-2.5 py-1.5 border-0 outline-none rounded bg-gray-100 text-sm transition-all duration-300 hidden md:block md:w-36 md:hover:w-52 md:focus:w-52"
                   placeholder="输入关键字搜索...">
            <x-dropdown direction="left">
                <x-slot name="trigger">
                    <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">排序 <i
                            class="fas fa-sort-alpha-up text-blue-500"></i></a>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('newest'); open = false">最新
                    </x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('earliest'); open = false">最早
                    </x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('utmost'); open = false">最大
                    </x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('least'); open = false">最小
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
    <div class="relative inset-0 h-full">
        <!-- content -->
        <div class="absolute inset-0 overflow-y-scroll">
            <div id="photos-grid"></div>
            <div id="photos-loading" class="flex justify-center items-center py-10">
                <a href="javascript:void(0)" class="flex justify-center items-center text-sm text-gray-400 text-gray-700 cursor-not-allowed">加载中...</a>
            </div>
        </div>
        <!-- right drawer -->
        <div id="drawer-mask" class="absolute hidden inset-0 bg-gray-500 bg-opacity-50 z-[2]" onclick="drawer.close()"></div>
        <div id="drawer" class="absolute bg-white w-52 md:w-72 top-0 -right-[1000px] bottom-0 z-[2] flex flex-col transition-all duration-300">
            <div class="flex justify-between items-center text-md px-3 py-1 border-b">
                <span class="text-gray-600 truncate" id="drawer-title"></span>
                <a href="javascript:drawer.close()" class="p-2"><i class="fas fa-times text-blue-500"></i></a>
            </div>
            <div id="drawer-content" class="overflow-y-auto"></div>
        </div>
    </div>

    <script type="text/html" id="photos-item">
        <a href="javascript:void(0)" class="relative cursor-default rounded outline outline-2 outline-offset-2 outline-transparent">
            <div class="photo-select absolute z-[1] top-1 right-1 rounded-full overflow-hidden text-white text-lg bg-white border border-gray-500 cursor-pointer hidden group-hover:block">
                <i class="fas fa-check-circle block"></i>
            </div>
            <div class="photo-mask absolute left-0 right-0 bottom-0 h-20 z-[1] bg-gradient-to-t from-black">
                <div class="absolute left-2 bottom-2 text-white z-[2] w-[90%]">
                    <p class="text-sm truncate" title="__name__">__name__</p>
                    <p class="text-xs" title="__human_date__">__date__</p>
                </div>
            </div>
            <img alt="__name__" src="__url__" width="__width__" height="__height__">
        </a>
    </script>

    @push('scripts')
        <script src="{{ asset('js/justified-gallery/jquery.justifiedGallery.min.js') }}"></script>
        <script src="{{ asset('js/viewer-js/viewer.min.js') }}"></script>
        <script>
            let params = {
                page: 1,
                order: '',
            };
            let gridConfigs = {
                rowHeight: 180,
                margins: 16,
                captions: false,
                border: 10,
                waitThumbnailsLoad: false,
            };

            const $photos = $("#photos-grid");
            const $loading = $("#photos-loading a");
            const $drawer = $("#drawer");
            const $drawerMask = $('#drawer-mask');
            const viewer = new Viewer(document.getElementById('photos-grid'), {});
            const drawer = {
                open(title, $content) {
                    $drawerMask.fadeIn();
                    $drawer.css('right', 0);
                    $drawer.find('#drawer-title').html(title);
                    $drawer.find('#drawer-content').html($content);
                },
                close() {
                    $drawerMask.fadeOut();
                    $drawer.css('right', '-1000px');
                },
                toggle(title, $content) {
                    if ($drawerMask.is(':hidden')) {
                        this.open(title, $content);
                    } else {
                        this.close();
                    }
                }
            }

            const getAlbums = () => {
                drawer.toggle('我的相册');
            }

            const getImages = () => {
                if (params.page !== 1 && $loading.hasClass('cursor-not-allowed')) {
                    return;
                }
                $.ajax({
                    url: '{{ route('user.images') }}',
                    data: params,
                    beforeSend: function () {
                        $loading.text('加载中...').addClass('text-gray-400 cursor-not-allowed');
                    },
                    success: function (response) {
                        if (!response.status) {
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
                                .replace(/__width__/g, images[i].width)
                                .replace(/__height__/g, images[i].height)
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

            $photos.justifiedGallery(gridConfigs);
            $loading.click(() => getImages(params.page));

            $(window).scroll(function () {
                let scrollTop = $(this).scrollTop();
                let scrollHeight = $(document).height();
                let clientHeight = $(this).height();
                if (scrollTop + clientHeight >= scrollHeight - 50) {
                    getImages();
                }
            });

            setTimeout(() => getImages(), 500);

            $photos.on('click', '.photo-mask', function () {
                $(this).siblings('img').trigger('click');
            })

            $photos.on('click', 'a .photo-select', function (e) {
                e.stopPropagation();
                $(this).closest('a').toggleClass('selected');
            }).on('mousedown', 'a', function () {

            }).on('mouseup', 'a', function () {
            });
        </script>
    @endpush
</x-app-layout>
