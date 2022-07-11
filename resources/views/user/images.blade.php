@section('title', '我的图片')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/justified-gallery/justifiedGallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/viewer-js/viewer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/context-js/context-js.css') }}">
@endpush

<x-app-layout>
    <div class="relative flex justify-between items-center px-2 py-2 z-[3] top-0 left-0 right-0 bg-white border-solid border-b">
        <div class="space-x-2 flex justify-between items-center">
            <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:getAlbums()"><i class="fas fa-bars text-blue-500"></i> 相册</a>
            <div class="flex-row hidden lg:flex">
                <a data-operate="movements" class="hidden text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">移动到相册</a>
                <a data-operate="remove" class="hidden text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">移出当前相册</a>
                <a data-operate="permission" class="hidden text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">设置权限</a>
                <a data-operate="detail" class="hidden text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">详细信息</a>
                <a data-operate="rename" class="hidden text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">重命名</a>
                <a data-operate="delete" class="hidden text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">删除</a>
            </div>
            <div class="block lg:hidden">
                <x-dropdown direction="right">
                    <x-slot name="trigger">
                        <a class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)"><i class="fas fa-ellipsis-h text-blue-500"></i></a>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link data-operate="refresh" href="javascript:void(0)" @click="open = false">刷新</x-dropdown-link>
                        <x-dropdown-link data-operate="movements" class="hidden" href="javascript:void(0)" @click="open = false">移动到相册</x-dropdown-link>
                        <x-dropdown-link data-operate="remove" class="hidden" href="javascript:void(0)" @click="open = false">移出当前相册</x-dropdown-link>
                        <x-dropdown-link data-operate="permission" class="hidden" href="javascript:void(0)" @click="open = false">设置权限</x-dropdown-link>
                        <x-dropdown-link data-operate="detail" class="hidden" href="javascript:void(0)" @click="open = false">详细信息</x-dropdown-link>
                        <x-dropdown-link data-operate="rename" class="hidden" href="javascript:void(0)" @click="open = false">重命名</x-dropdown-link>
                        <x-dropdown-link data-operate="delete" class="hidden" href="javascript:void(0)" @click="open = false">删除</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
        <div class="flex space-x-2 items-center">
            <input type="text" id="search" class="px-2.5 py-1.5 border-0 outline-none rounded bg-gray-100 text-sm transition-all duration-300 hidden md:block md:w-36 md:hover:w-52 md:focus:w-52" placeholder="输入关键字搜索...">
            <x-dropdown direction="left">
                <x-slot name="trigger">
                    <a id="order" class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">
                        <span>最新</span>
                        <i class="fas fa-sort-alpha-up text-blue-500"></i>
                    </a>
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
            <x-dropdown direction="left">
                <x-slot name="trigger">
                    <a id="permission" class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800" href="javascript:void(0)">
                        <span>全部</span>
                        <i class="fas fa-eye text-blue-500"></i>
                    </a>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="javascript:void(0)" @click="open = false; setPermission('all')">全部
                    </x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false; setPermission('public')">公开
                    </x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false; setPermission('private')">私有
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
    <div class="relative inset-0 h-full overflow-hidden">
        <!-- content -->
        <div id="images-scroll" class="absolute inset-0 overflow-y-scroll dragselect select-none">
            <div id="images-grid" class="dragselect"></div>
        </div>
        <!-- right drawer -->
        <div id="drawer-mask" class="absolute hidden inset-0 bg-gray-500 bg-opacity-50 z-[2]" onclick="drawer.close()"></div>
        <div id="drawer" class="absolute bg-white w-64 md:w-72 top-0 -right-[1000px] bottom-0 z-[2] flex flex-col transition-all duration-300">
            <div class="flex justify-between items-center text-md px-3 py-1 border-b">
                <span class="text-gray-600 truncate" id="drawer-title"></span>
                <a href="javascript:drawer.close()" class="p-2"><i class="fas fa-times text-blue-500"></i></a>
            </div>
            <div id="drawer-content" class="overflow-y-auto"></div>
        </div>
    </div>

    <script type="text/html" id="images-item-tpl">
        <a href="javascript:void(0)" data-id="__id__" data-json='__json__' class="images-item relative cursor-default rounded outline outline-2 outline-offset-2 outline-transparent">
            <div class="image-selector absolute z-[2] top-0 right-0 overflow-hidden cursor-pointer sm:hidden group-hover:block">
                <div class="p-1 text-xl sm:text-2xl">
                    <i class="fas fa-check-circle block rounded-full bg-white text-white border border-gray-500"></i>
                </div>
            </div>
            <div class="image-mask absolute left-0 right-0 bottom-0 h-20 z-[1] bg-gradient-to-t from-black" onclick="$(this).siblings('img').trigger('click')">
                <div class="absolute left-2 bottom-2 text-white z-[2] w-[90%]">
                    <p class="text-sm truncate filename" title="__name__">__name__</p>
                    <p class="text-xs date" title="__human_date__">__date__</p>
                </div>
            </div>
            <img alt="__name__" data-original="__url__" src="__thumb_url__" width="__width__" height="__height__">
        </a>
    </script>

    <script type="text/html" id="albums-container-tpl">
        <div id="albums-container" class="flex flex-col justify-center items-center w-full p-3 space-y-2">
            <div id="album-add" class="flex flex-col w-full hidden border rounded p-2">
                <p class="error-message text-white p-2 mb-2 text-sm bg-red-500 rounded hidden"></p>
                <form class="w-full space-y-2" action="/user/albums">
                    <input type="text" class="w-full rounded px-2.5 py-1.5 text-sm border-0 bg-gray-200" name="name" placeholder="请输入名称">
                    <textarea class="w-full resize-y rounded-md text-sm border-0 bg-gray-200" name="intro" placeholder="请输入简介"></textarea>
                    <button class="w-full py-1 px-2 bg-indigo-500 text-white text-sm text-center tracking-wider font-semibold rounded-md">创建相册</button>
                </form>
            </div>
        </div>
    </script>

    <script type="text/html" id="albums-item-tpl">
        <a href="javascript:void(0)" data-id="__id__" data-json='__json__' title="__intro__" class="albums-item flex justify-between items-center group px-2 h-7 rounded w-full bg-gray-100 text-gray-800 hover:bg-blue-300 hover:text-white">
            <span class="text-sm truncate w-[80%] name">__name__</span>
            <div class="flex items-center justify-center space-x-1 hidden group-hover:block">
                <span class="update"><i class="fas fa-edit text-xs"></i></span>
                <span class="delete"><i class="fas fa-trash-alt text-xs text-red-400"></i></span>
            </div>
            <span class="group-hover:hidden text-xs">__image_num__</span>
        </a>
    </script>

    <script type="text/html" id="album-update-tpl">
        <div id="album-edit" data-id="__id__" class="flex flex-col w-full border rounded p-2">
            <p class="error-message text-white p-2 mb-2 text-sm bg-red-500 rounded hidden"></p>
            <form class="w-full space-y-2" action="/user/albums/__id__">
                <input type="text" class="w-full rounded px-2.5 py-1.5 text-sm border-0 bg-gray-200" placeholder="请输入名称" name="name" value="__name__">
                <textarea class="w-full resize-y rounded-md text-sm border-0 bg-gray-200" name="intro" placeholder="请输入简介">__intro__</textarea>
                <button class="w-full py-1 px-2 bg-indigo-500 text-white text-sm text-center tracking-wider font-semibold rounded-md">确认修改</button>
            </form>
        </div>
    </script>

    <script type="text/html" id="image-detail-tpl">
        <div class="my-4 px-4 space-y-3">
            <div>
                <span class="text-sm font-semibold">相册名称</span>
                <p class="my-2 break-words text-gray-700">__album_name__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">使用策略</div>
                <p class="my-2 break-words text-gray-600">__strategy_name__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">图片名称</div>
                <p class="my-2 break-words text-gray-600">__filename__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">图片原始名称</div>
                <p class="my-2 break-words text-gray-600">__origin_name__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">图片大小</div>
                <p class="my-2 break-words text-gray-600">__size__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">图片类型</div>
                <p class="my-2 break-words text-gray-600">__mimetype__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">尺寸</div>
                <p class="my-2 break-words text-gray-600">__width__ * __height__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">MD5</div>
                <p class="my-2 break-words text-gray-600">__md5__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">SHA-128</div>
                <p class="my-2 break-words text-gray-600">__sha1__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">权限</div>
                <p class="my-2 break-words text-gray-600">__permission__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">上传 IP</div>
                <p class="my-2 break-words text-gray-600">__uploaded_ip__</p>
            </div>
            <div>
                <div class="text-sm font-semibold">上传时间</div>
                <p class="my-2 break-words text-gray-600">__created_at__</p>
            </div>
        </div>
    </script>

    @push('scripts')
        <script src="{{ asset('js/justified-gallery/jquery.justifiedGallery.min.js') }}"></script>
        <script src="{{ asset('js/viewer-js/viewer.min.js') }}"></script>
        <script src="{{ asset('js/dragselect/ds.min.js') }}"></script>
        <script src="{{ asset('js/context-js/context-js.js') }}"></script>
        <script src="{{ asset('js/clipboard/index.browser.js') }}"></script>
        <script src="{{ asset('js/clipboard/clipboard.min.js') }}"></script>
        <script>
            let gridConfigs = {
                rowHeight: 180,
                margins: 16,
                captions: false,
                border: 10,
                waitThumbnailsLoad: false,
            };

            let selectedAlbum = {}; // 选择的相册

            const HEADER_TITLE = '#header-title';
            const IMAGES_SCROLL = '#images-scroll';
            const IMAGES_GRID = '#images-grid';
            const IMAGES_ITEM = '.images-item';
            const ALBUM_ITEM = '.albums-item';

            const $headerTitle = $(HEADER_TITLE);
            const $photos = $(IMAGES_GRID);
            const $drawer = $("#drawer");
            const $drawerMask = $('#drawer-mask');
            const viewer = new Viewer(document.getElementById('images-grid'), {url: 'data-original'});
            const drawer = {
                open(title, content, callback) {
                    $drawerMask.fadeIn();
                    $drawer.css('right', 0);
                    $drawer.find('#drawer-title').html(title);
                    $drawer.find('#drawer-content').html(content);
                    callback && callback();
                },
                close(callback) {
                    $drawerMask.fadeOut();
                    $drawer.css('right', '-1000px');
                    albumsInfinite && albumsInfinite.destroy();
                    callback && callback();
                },
                toggle(title, content, callback) {
                    if ($drawerMask.is(':hidden')) {
                        this.open(title, content, callback);
                    } else {
                        this.close(callback);
                    }
                }
            }

            $photos.justifiedGallery(gridConfigs);

            let albumsInfinite = null;
            const imagesInfinite = utils.infiniteScroll(IMAGES_SCROLL, {
                url: '{{ route('user.images') }}',
                classes: ['dragselect'],
                success: function (response) {
                    if (!response.status) {
                        return toastr.error(response.message);
                    }

                    let images = response.data.images.data;
                    if (images.length <= 0 || response.data.images.current_page === response.data.images.last_page) {
                        this.finished = true;
                    }

                    let html = '';
                    for (const i in images) {
                        html += $('#images-item-tpl').html()
                            .replace(/__id__/g, images[i].id)
                            .replace(/__name__/g, images[i].filename.replace(/\$/g, '$$$$'))
                            .replace(/__human_date__/g, images[i].human_date)
                            .replace(/__date__/g, images[i].date)
                            .replace(/__url__/g, images[i].url)
                            .replace(/__thumb_url__/g, images[i].thumb_url)
                            .replace(/__width__/g, images[i].width)
                            .replace(/__height__/g, images[i].height)
                            .replace(/__json__/g, JSON.stringify(images[i]).replace(/\$/g, '$$$$'))
                    }

                    $photos.append(html);
                    ds.setSelectables($photos.find(IMAGES_ITEM));
                },
                complete: function () {
                    if ($photos.html() !== '') {
                        // 由于 justifiedGallery 创建后占高度(无论是否有内容或内容被清空)，导致加载过程中在没有数据的情况下高度被拉开
                        // 所以需要在重置前销毁，重置数据后重新构建 justifiedGallery
                        if ($photos.hasClass('reset')) {
                            $photos.justifiedGallery(gridConfigs).removeClass('reset');
                        }

                        $photos.justifiedGallery('norewind')
                        viewer.update();
                    } else {
                        // 没有任何数据时销毁 justifiedGallery
                        $photos.justifiedGallery('destroy')
                    }
                    $headerTitle.text('我的图片')
                }
            });

            const resetImages = (params) => {
                $photos.addClass('reset').html('').justifiedGallery('destroy');
                ds.clearSelection();
                params = $.extend({page: 1}, params)
                imagesInfinite.refresh(params);
            }

            const getAlbums = (options, callback) => {
                let title = '__title__ <i class="cursor-pointer fas fa-plus text-blue-500" onclick="$(\'#album-add\').toggleClass(\'hidden\')"></i>'.replace(/__title__/g, (options || {}).title || '我的相册');
                let content = $('#albums-container-tpl').html();
                drawer.toggle(title, content, function () {
                    let $albums = $('#albums-container');
                    const CREATE_ID = '#album-add';
                    const UPDATE_ID = '#album-edit';
                    albumsInfinite = utils.infiniteScroll('#drawer-content', {
                        url: '{{ route('user.albums') }}',
                        success: function (response) {
                            if (!response.status) {
                                return toastr.error(response.message);
                            }

                            let albums = response.data.albums.data;
                            if (albums.length <= 0 || response.data.albums.current_page === response.data.albums.last_page) {
                                this.finished = true;
                            }

                            let html = '';
                            for (const i in albums) {
                                let item = $('#albums-item-tpl').html()
                                    .replace(/__id__/g, albums[i].id)
                                    .replace(/__name__/g, albums[i].name)
                                    .replace(/__intro__/g, albums[i].intro)
                                    .replace(/__image_num__/g, albums[i].image_num)
                                    .replace(/__json__/g, JSON.stringify(albums[i]))
                                if (albums[i].id === selectedAlbum.id) {
                                    // 选中的相册高亮
                                    item = item
                                        .replace(/bg-gray-100/g, 'bg-blue-400')
                                        .replace(/text-gray-800/g, 'text-white')
                                }

                                html += item;
                            }

                            $albums.append(html);

                            callback && callback.call(this, $albums.get(0));
                        }
                    });

                    $albums.off('click', '>a').on('click', '>a', function () {
                        // 如果当前已经为选中状态则清除
                        if (selectedAlbum.id === $(this).data('id')) {
                            selectedAlbum = {};
                        } else {
                            selectedAlbum = $(this).data('json');
                        }
                        resetImages({page: 1, album_id: selectedAlbum.id || null});
                        drawer.close();
                        ds.clearSelection();
                    });

                    const resetAlbums = () => {
                        $albums.find('>a').remove();
                        $albums.find(CREATE_ID).addClass('hidden');
                        $albums.find(UPDATE_ID).remove();
                        albumsInfinite.refresh({page: 1});
                    }

                    $albums.off('click', '.update').on('click', '.update', function (e) {
                        e.stopPropagation();
                        let selectedId = $albums.find(UPDATE_ID).data('id');
                        let $item = $(this).closest('a.albums-item');
                        $albums.find(UPDATE_ID).remove();
                        if (selectedId !== $item.data('id')) {
                            $item.after($('#album-update-tpl').html()
                                .replace(/__id__/g, $item.data('id'))
                                .replace(/__name__/g, $item.find('>span').html())
                                .replace(/__intro__/g, $item.attr('title'))
                            );
                        }
                    });

                    $albums.off('click', '.delete').on('click', '.delete', function (e) {
                        e.stopPropagation();
                        Swal.fire({
                            title: '确认删除该相册?',
                            text: "删除后相册中的图片将会被移出。",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: '确认',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                let id = $(this).closest(ALBUM_ITEM).data('id');
                                axios.delete(`/user/albums/${id}`).then(response => {
                                    if (response.data.status) {
                                        selectedAlbum = {};
                                        resetImages();
                                        setTimeout(_ => drawer.close(), 300)
                                    } else {
                                        toastr.error(response.data.message);
                                    }
                                });
                            }
                        })
                    });

                    // confirm create
                    $albums.off('submit', CREATE_ID + ' form').on('submit', CREATE_ID + ' form', function (e) {
                        e.preventDefault();
                        let $form = $(this);
                        axios.post($form.attr('action'), $form.serialize()).then(response => {
                            let $errorMessage = $albums.find(CREATE_ID + ' .error-message').html('').hide();
                            if (response.data.status) {
                                $form.get(0).reset();
                                resetAlbums()
                            } else {
                                $errorMessage.html('<i class="fas fa-exclamation-circle"></i> ' + response.data.message).show();
                            }
                        });
                    });

                    // confirm update
                    $albums.off('submit', UPDATE_ID + ' form').on('submit', UPDATE_ID + ' form', function (e) {
                        e.preventDefault();
                        let $form = $(this);
                        axios.put($form.attr('action'), $form.serialize()).then(response => {
                            let $errorMessage = $albums.find(UPDATE_ID + ' .error-message').html('').hide();
                            if (response.data.status) {
                                let $editContainer = $(this).closest(UPDATE_ID);
                                $albums.find(`>a[data-id=${$editContainer.data('id')}]`)
                                    .attr('title', $form.find('textarea').val())
                                    .find('.name').text($form.find('input').val());
                                $editContainer.remove();
                            } else {
                                $errorMessage.html('<i class="fas fa-exclamation-circle"></i> ' + response.data.message).show();
                            }
                        });
                    });
                });
            }

            const setOrderBy = function (sort) {
                resetImages({page: 1, order: sort})
                $('#order span').text({newest: '最新', earliest: '最早', utmost: '最大', least: '最小'}[sort]);
            };

            const setPermission = function (permission) {
                resetImages({page: 1, permission: permission})
                $('#permission span').text({public: '公开', private: '私有', all: '全部'}[permission]);
            };

            $('#search').keydown(function (e) {
                if (e.keyCode === 13) {
                    resetImages({page: 1, keyword: $(this).val()});
                }
            });

            $(document).keydown(e => {
                if (e.keyCode === 65 && (e.altKey || e.metaKey)) {
                    e.preventDefault();
                    ds.setSelection($(IMAGES_ITEM));
                }
            });
        </script>
        <script>
            const ds = new DragSelect({
                area: $(IMAGES_SCROLL).get(0),
                keyboardDrag: false,
            });

            const bindOperates = () => {
                let selected = ds.getSelection();
                if (selected.length) {
                    $headerTitle.text(`已选择 ${selected.length} 张图片`);
                } else {
                    $headerTitle.text('我的图片');
                }
                $('[data-operate]').hide();
                let operates = [];
                if (selected.length === 0) {
                    operates = ['refresh'];
                }
                if (selected.length === 1) {
                    operates = ['refresh', 'movements', 'permission', 'detail', 'rename', 'delete'];
                }
                if (selected.length > 1) {
                    operates = ['refresh', 'movements', 'permission', 'delete'];
                }
                if (selected.length && selectedAlbum.id !== undefined) {
                    operates.push('remove');
                }
                $(operates.map(item => `[data-operate=${item}]`).toString()).css('display', 'block');
            };

            ds.subscribe('predragstart', ({ event }) => {
                if (utils.isMobile()) {
                    ds.stop();
                }

                if (! $(event.target).hasClass('dragselect')) {
                    ds.break();
                }
            });
            ds.subscribe('elementselect', _ => bindOperates());
            ds.subscribe('elementunselect', _ => bindOperates());

            $photos.on('click', '.image-selector', function () {
                ds.toggleSelection($(this).closest('a'));
                bindOperates();
            })
        </script>
        <script>
            context.init({
                fadeSpeed: 100,
                filter: function ($obj) {},
                above: 'auto',
                preventDoubleContext: true,
                compress: false
            });

            new ClipboardJS('.dropdown-menu li a.copy', {
                text: function(trigger) {
                    return $(trigger).data('copy-value');
                }
            }).on('success', _ => {
                toastr.success('复制成功');
            }).on('error', _ => {
                toastr.warning('复制失败')
            });

            const methods = {
                movements() {
                    getAlbums({title: '选择相册'}, e => {
                        let selected = ds.getSelection().map(item => $(item).data('id'));
                        $headerTitle.text(`移动 ${selected.length} 张图片至...`)
                        $(e).off('click', '>a').on('click', '>a', function () {
                            axios.put('{{ route('user.images.movement') }}', {
                                selected: selected,
                                id: $(this).data('id'),
                                album_id: selectedAlbum.id || 0,
                            }).then(response => {
                                if (response.data.status) {
                                    drawer.close();
                                    resetImages();
                                    toastr.success(response.data.message);
                                } else {
                                    toastr.warning(response.data.message);
                                }
                            })
                        });
                    });
                },
                remove() {
                    let selected = ds.getSelection().map(item => $(item).data('id'));
                    $headerTitle.text(`移出 ${selected.length} 张图片`)
                    axios.put('{{ route('user.images.movement') }}', {
                        selected: selected,
                        album_id: selectedAlbum.id || null, // 原相册ID
                        id: null,
                    }).then(response => {
                        if (response.data.status) {
                            drawer.close();
                            resetImages();
                            toastr.success(response.data.message);
                        } else {
                            toastr.warning(response.data.message);
                        }
                    });
                },
                permission() {
                    Swal.fire({
                        title: '选择一个权限',
                        text: '选择公开将会出现在画廊中(若平台开启了画廊)',
                        input: 'select',
                        inputOptions: {
                            public: '公开',
                            private: '私有',
                        },
                        confirmButtonText: '确认设置',
                        inputPlaceholder: '请选择一个权限',
                        showCancelButton: true,
                        inputValidator: (value) => {
                            return new Promise((resolve) => {
                                if (value === '') {
                                    resolve('请选择正确的权限')
                                } else {
                                    resolve();
                                }
                            })
                        }
                    }).then(result => {
                        if (result.isConfirmed) {
                            let selected = ds.getSelection().map(item => $(item).data('id'));
                            axios.put('{{ route('user.images.permission') }}', {
                                ids: selected,
                                permission: result.value,
                            }).then(response => {
                                if (response.data.status) {
                                    ds.clearSelection();
                                    toastr.success(response.data.message);
                                } else {
                                    toastr.warning(response.data.message);
                                }
                            });
                        }
                    });
                },
                rename(e) {
                    let item = $(e).data('json');
                    Swal.fire({
                        title: '请输入图片名称',
                        input: 'text',
                        inputValue: item.filename,
                        inputAttributes: {
                            autocapitalize: 'off'
                        },
                        showCancelButton: true,
                        confirmButtonText: '确认',
                        showLoaderOnConfirm: true,
                        preConfirm: (value) => {
                            return axios.put('{{ route('user.images.rename') }}', {
                                id: item.id,
                                name: value,
                            }).then(response => {
                                if (! response.data.status) {
                                    throw new Error(response.data.message)
                                }
                                return response.data;
                            }).catch(error => Swal.showValidationMessage('服务异常，请稍后重试。'));
                        },
                        allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                        if (result.isConfirmed) {
                            if (result.value.status) {
                                $(e).find('p.filename').attr('title', result.value.data.filename).text(result.value.data.filename)
                                item.filename = result.value.data.filename;
                                $(e).data('json', item);
                                toastr.success(result.value.message);
                            } else {
                                toastr.error(result.value.message);
                            }
                        }
                    })
                },
                delete() {
                    Swal.fire({
                        title: '确认要删除选中的图片？',
                        text: "删除后不可恢复，记录和文件同时删除",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '确认删除',
                        cancelButtonText: '取消',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            let selected = ds.getSelection().map(item => $(item).data('id'));
                            axios.delete('{{ route('user.images.delete') }}', {
                                data: selected,
                            }).then(response => {
                                if (response.data.status) {
                                    let size = 0;
                                    ds.getSelection().map(item => {
                                        size += $(item).data('json').size;
                                        $(item).remove();
                                    });
                                    utils.setCapacityProgress(-size);
                                    $headerTitle.text('我的图片');
                                    $photos.justifiedGallery(gridConfigs).removeClass('reset');
                                    toastr.success(response.data.message);
                                } else {
                                    toastr.warning(response.data.message);
                                }
                            });
                        }
                    });
                },
                detail(e) {
                    let item = $(e).data('json');
                    axios.get(`/user/images/${item.id}`).then(response => {
                        if (response.data.status) {
                            let image = response.data.data.image;
                            let content = $('#image-detail-tpl').html()
                                .replace(/__album_name__/g, image.album ? image.album.name : '-')
                                .replace(/__strategy_name__/g, image.strategy ? image.strategy.name : '-')
                                .replace(/__filename__/g, image.filename.replace(/\$/g, '$$$$'))
                                .replace(/__origin_name__/g, image.origin_name.replace(/\$/g, '$$$$'))
                                .replace(/__size__/g, utils.formatSize(image.size * 1024))
                                .replace(/__mimetype__/g, image.mimetype)
                                .replace(/__width__/g, image.width)
                                .replace(/__height__/g, image.height)
                                .replace(/__md5__/g, image.md5)
                                .replace(/__sha1__/g, image.sha1)
                                .replace(/__permission__/g, image.permission === 1 ? '公开' : '私有')
                                .replace(/__uploaded_ip__/g, image.uploaded_ip)
                                .replace(/__created_at__/g, image.created_at)
                            drawer.open(item.filename, content);
                        } else {
                            toastr.error(response.data.message);
                        }
                    })
                }
            };
            // right click actions
            const actions = {
                copy: {
                    text: '复制图片',
                    action: e => {
                        let src = $(e).find('img').attr('src');
                        CopyImageClipboard.copyImageToClipboard(src).then(() => {
                            toastr.success('复制成功')
                        }).catch(e => {
                            toastr.warning('复制失败, ' + e.message)
                        });
                    },
                    visible: () => ds.getSelection().length === 1,
                },
                refresh: {text: '刷新', action: _ => resetImages()},
                rename: {
                    text: '重命名',
                    visible: () => ds.getSelection().length === 1,
                    action: e => methods.rename(e),
                },
                open: {
                    text: '新窗口打开',
                    action: e => window.open($(e).data('json').url),
                    visible: () => ds.getSelection().length === 1,
                },
                copies: {
                    text: '复制链接',
                    subMenu: [
                        {
                            text: 'Url',
                            classes: ['copy'],
                            attributes: {"data-link-type": "url"},
                        },
                        {
                            text: 'Html',
                            classes: ['copy'],
                            attributes: {"data-link-type": "html"},
                        },
                        {
                            text: 'BBCode',
                            classes: ['copy'],
                            attributes: {"data-link-type": "bbcode"},
                        },
                        {
                            text: 'Markdown',
                            classes: ['copy'],
                            attributes: {"data-link-type": "markdown"},
                        },
                        {
                            text: 'Markdown with link',
                            classes: ['copy'],
                            attributes: {"data-link-type": "markdown_with_link"},
                        },
                        {
                            text: 'Thumbnail url',
                            classes: ['copy'],
                            attributes: {"data-link-type": "thumbnail_url"},
                        },
                    ],
                    visible: () => ds.getSelection().length === 1,
                },
                movements: {
                    text: '移动到相册',
                    action: _ => methods.movements(),
                },
                remove: {
                    text: '移出当前相册',
                    action: _ => methods.remove(),
                    visible: _ => selectedAlbum.id !== undefined,
                },
                detail: {
                    text: '详细信息',
                    visible: () => ds.getSelection().length === 1,
                    action: e => methods.detail(e)
                },
                delete: {
                    text: '删除',
                    action: _ => methods.delete(),
                },
                permission: {
                    text: '设置权限',
                    action: _ => methods.permission(),
                },
            };
            // right click 'images scroll' container
            context.attach(IMAGES_SCROLL, {
                data: [actions.refresh],
                beforeOpen: () => ds.clearSelection(),
            });
            // right click image
            context.attach(IMAGES_ITEM, {
                data: [
                    {header: '图片操作'},
                    actions.refresh,
                    actions.copy,
                    actions.copies,
                    actions.open,
                    actions.movements,
                    actions.remove,
                    actions.permission,
                    actions.detail,
                    {divider: true},
                    actions.rename,
                    actions.delete,
                ],
                beforeOpen: function (item) {
                    // 选中当前项目
                    if (ds.getSelection().length <= 1) ds.clearSelection();
                    ds.addSelection($(item));
                },
                afterOpen: function (item, dropdown) {
                    let data = $(item).data('json');
                    // 追加链接
                    $(dropdown).find('a.copy').each(function () {
                        $(this).data('copy-value', data.links[$(this).data('link-type')])
                    });
                }
            });
            // the operates functions
            $('[data-operate]').click(function () {
                let operate = $(this).data('operate');
                let selected = ds.getSelection();

                if (selected.length === 0) {
                    return false;
                }

                switch (operate) {
                    case 'refresh': // 刷新
                        resetImages();
                        break;
                    case 'movements': // 移动到相册
                        methods.movements();
                        break;
                    case 'remove': // 移出当前相册
                        methods.remove();
                        break;
                    case 'rename': // 重命名
                        methods.rename(selected[0]);
                        break;
                    case 'permission': // 设置权限
                        methods.permission();
                        break;
                    case 'detail':
                        methods.detail(selected[0]);
                        break;
                    case 'delete': // 删除
                        methods.delete();
                        break;
                }
            });
        </script>
    @endpush
</x-app-layout>
