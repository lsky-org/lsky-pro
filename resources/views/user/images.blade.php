@section('title', '我的图片')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/justified-gallery/justifiedGallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/context-js/context-js.css') }}">
    <style>
        @include('components.images-workspace-styles')
        @include('components.images-loading-styles')

        .images-v2 .albums-tree-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            background: #f8fafc;
            min-height: 34px;
            padding: 0 10px;
            color: #334155;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .images-v2 .albums-tree-item-actions {
            display: none;
            align-items: center;
            gap: 6px;
            flex: 0 0 auto;
        }

        .images-v2 .albums-tree-item:hover .albums-tree-item-actions {
            display: inline-flex;
        }

        .images-v2 .albums-tree-action {
            width: 18px;
            height: 18px;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: #475569;
            background: #e2e8f0;
        }

        .images-v2 .albums-tree-action.share {
            color: #2563eb;
            background: #dbeafe;
        }

        .images-v2 .albums-tree-action.delete {
            color: #b91c1c;
            background: #fee2e2;
        }

        /* Share dialog modal */
        .share-dialog-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0,0,0,.4);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .share-dialog-panel {
            background: #fff;
            border-radius: 12px;
            width: 480px;
            max-width: 90vw;
            max-height: 80vh;
            display: flex;
            flex-direction: column;
            box-shadow: 0 20px 60px rgba(0,0,0,.15);
        }
        .share-dialog-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 18px;
            border-bottom: 1px solid #f1f5f9;
        }
        .share-dialog-title {
            font-size: 14px;
            font-weight: 600;
            color: #0f172a;
        }
        .share-dialog-close {
            width: 26px;
            height: 26px;
            border: 0;
            border-radius: 6px;
            background: #f1f5f9;
            color: #64748b;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
        }
        .share-dialog-close:hover { background: #e2e8f0; }
        .share-dialog-body { padding: 14px 18px; overflow-y: auto; flex: 1; }
        .share-dialog-section { margin-bottom: 14px; }
        .share-dialog-label {
            font-size: 11px;
            font-weight: 600;
            color: #64748b;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: .5px;
        }
        .share-user-search {
            width: 100%;
            height: 32px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 0 10px;
            font-size: 12px;
            outline: none;
            box-shadow: none;
        }
        .share-user-search:focus {
            border-color: #93c5fd;
            box-shadow: none;
            --tw-ring-shadow: 0 0 #0000;
        }
        .share-user-results {
            margin-top: 6px;
            max-height: 140px;
            overflow-y: auto;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            display: none;
        }
        .share-user-option {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 10px;
            font-size: 12px;
            color: #334155;
            cursor: pointer;
            border-bottom: 1px solid #f8fafc;
        }
        .share-user-option:last-child { border-bottom: 0; }
        .share-user-option:hover { background: #f1f5f9; }
        .share-user-option .user-email { color: #94a3b8; font-size: 11px; }
        .share-current-list { display: flex; flex-direction: column; gap: 4px; }
        .share-current-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 10px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 12px;
        }
        .share-current-name { flex: 1; color: #334155; }
        .share-current-perm {
            font-size: 10px;
            color: #64748b;
            background: #f1f5f9;
            padding: 2px 6px;
            border-radius: 4px;
        }
        .share-current-remove {
            width: 20px;
            height: 20px;
            border: 0;
            border-radius: 4px;
            background: #fee2e2;
            color: #b91c1c;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
        }
        .share-current-remove:hover { background: #fecaca; }
        .share-no-users {
            padding: 12px;
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
        }

        .images-v2 .albums-tree-item.active {
            background: #eff6ff;
            border-color: #bfdbfe;
            color: #1d4ed8;
        }

        .images-v2 .albums-tree-name {
            flex: 1 1 auto;
            min-width: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .images-v2 .albums-tree-count {
            color: #64748b;
            font-size: 11px;
            flex: 0 0 auto;
        }

        .images-v2 #images-grid.view-list {
            display: block;
            padding: 10px;
        }

        .images-v2 #images-grid:not(.view-list) .images-item {
            border: 1px solid transparent;
            border-radius: 8px;
            outline: none !important;
            outline-width: 0 !important;
            outline-offset: 0 !important;
            transition: border-color .14s ease, box-shadow .14s ease;
        }

        .images-v2 #images-grid:not(.view-list) .images-item:hover {
            border-color: #dbeafe;
        }

        .images-v2 #images-grid:not(.view-list) .images-item.ds-selected {
            border-color: #60a5fa;
            box-shadow: inset 0 0 0 1px rgba(96, 165, 250, .15);
        }

        .images-v2 #images-grid.view-list .images-list-head,
        .images-v2 #images-grid.view-list .images-item {
            display: grid;
            grid-template-columns: 100px 88px minmax(220px, 1fr) 120px 100px 150px 280px;
            gap: 10px;
            align-items: center;
        }

        .images-v2 #images-grid.view-list .images-list-head {
            height: 40px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            background: #f8fafc;
            padding: 0 10px;
            font-size: 12px;
            color: #64748b;
            font-weight: 600;
            position: sticky;
            top: 0;
            z-index: 2;
        }

        .images-v2 #images-grid.view-list .images-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            background: #fff;
            padding: 6px 10px;
            min-height: 72px;
            overflow: visible;
            margin-top: 8px;
            outline: none !important;
            outline-width: 0 !important;
            outline-offset: 0 !important;
        }

        .images-v2 #images-grid.view-list .images-item.ds-selected {
            border-color: #60a5fa;
            background: #eff6ff;
            outline: none !important;
        }

        .images-v2 #images-grid.view-list .list-col {
            min-width: 0;
        }

        .images-v2 #images-grid.view-list .list-thumb-wrap {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 88px;
            height: 58px;
            border-radius: 6px;
            background: #f1f5f9;
            overflow: hidden;
        }

        .images-v2 #images-grid.view-list .list-type {
            font-size: 12px;
            color: #334155;
            text-transform: uppercase;
            letter-spacing: .02em;
        }

        .images-v2 #images-grid.view-list .images-list-thumb {
            width: 88px;
            height: 58px;
            object-fit: cover;
            display: block;
        }

        .images-v2 #images-grid.view-list .list-url {
            min-width: 0;
            display: flex;
            align-items: center;
        }

        .images-v2 #images-grid.view-list .list-url-text {
            min-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            font-size: 12px;
            color: #0f172a;
        }

        .images-v2 #images-grid.view-list .list-op-btn {
            height: 26px;
            border: 1px solid #dbe2ea;
            border-radius: 7px;
            background: #f8fafc;
            color: #334155;
            font-size: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 4px;
            padding: 0 8px;
            flex: 0 0 auto;
        }

        .images-v2 #images-grid.view-list .list-size,
        .images-v2 #images-grid.view-list .list-resolution,
        .images-v2 #images-grid.view-list .list-date {
            font-size: 12px;
            color: #334155;
            white-space: nowrap;
        }

        .images-v2 #images-grid.view-list .list-ops {
            display: inline-flex;
            align-items: center;
            justify-content: flex-end;
            gap: 6px;
            white-space: nowrap;
            min-width: max-content;
        }

        .images-v2 #images-grid.view-list .list-op-group {
            display: inline-flex;
            align-items: center;
            border: 1px solid #dbe2ea;
            border-radius: 8px;
            overflow: hidden;
            background: #f8fafc;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity .14s ease, visibility .14s ease;
            flex: 0 0 auto;
        }

        .images-v2 #images-grid.view-list .list-op-group .list-op-btn {
            border: 0;
            border-radius: 0;
            background: transparent;
            height: 28px;
            padding: 0 8px;
        }

        .images-v2 #images-grid.view-list .list-op-group .list-op-btn + .list-op-btn {
            border-left: 1px solid #dbe2ea;
        }

        .images-v2 #images-grid.view-list .images-item:hover .list-op-group,
        .images-v2 #images-grid.view-list .images-item:focus-within .list-op-group {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .images-v2 #images-grid.view-list .images-item.ds-selected:hover,
        .images-v2 #images-grid.view-list .images-item.ds-selected:focus-within {
            border-color: #93c5fd;
            background: #eff6ff;
        }

        .images-v2 #images-grid.view-list .image-selector {
            position: static !important;
            width: 26px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .images-v2 #images-grid.view-list .image-selector .text-xl {
            font-size: 17px;
            line-height: 1;
        }

        .images-v2 #images-grid.view-list .image-selector i {
            color: #ffffff;
            border-color: #94a3b8;
            background: #ffffff;
            transition: color .16s ease, border-color .16s ease, background-color .16s ease;
        }

        .images-v2 #images-grid.view-list .images-item.ds-selected .image-selector i {
            color: #2563eb;
            border-color: #2563eb;
            background: #ffffff;
        }

        .images-v2 .toolbar-meta-btn.is-ai {
            background: #eff6ff;
            color: #1d4ed8;
            border-color: #bfdbfe;
            font-weight: 600;
        }

        .images-v2 .images-uploading {
            position: relative;
            overflow: hidden;
            pointer-events: none;
        }

        .images-v2 .images-uploading .image-upload-overlay {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, .52);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 3;
        }

        .images-v2 .images-uploading-panel {
            width: min(240px, 86%);
            display: grid;
            gap: 6px;
        }

        .images-v2 .images-uploading-name {
            font-size: 12px;
            line-height: 1.4;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .images-v2 .images-uploading-progress {
            width: 100%;
            height: 6px;
            background: rgba(255, 255, 255, .3);
            border-radius: 999px;
            overflow: hidden;
        }

        .images-v2 .images-uploading-progress > span {
            display: block;
            width: 0;
            height: 100%;
            background: #60a5fa;
            transition: width .2s ease;
        }

        .images-v2 .images-uploading-text {
            font-size: 11px;
            color: #e2e8f0;
        }

        @include('components.media-carousel-styles')

        #album-action-modal .md\:max-w-2xl {
            max-width: 480px;
        }

        #album-action-modal {
            z-index: 120;
        }

        #album-action-modal .lg\:max-w-4xl {
            max-width: 480px;
        }

        #album-action-modal .w-full.relative.flex {
            padding: 16px;
            border-radius: 12px;
        }

        .album-modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 8px;
            margin-top: 12px;
        }

        .album-modal-btn {
            height: 36px;
            min-width: 92px;
            padding: 0 12px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid transparent;
            line-height: 1;
        }

        .album-modal-btn.cancel {
            background: #ffffff;
            border-color: #d1d5db;
            color: #374151;
        }

        .album-modal-btn.confirm {
            background: #2563eb;
            border-color: #2563eb;
            color: #ffffff;
        }

        .album-modal-btn.danger {
            background: #dc2626;
            border-color: #dc2626;
            color: #ffffff;
        }

        .album-modal-btn:disabled {
            opacity: .65;
            cursor: not-allowed;
        }

        .aside-head-icon-btn {
            width: 22px;
            height: 22px;
            border: 0;
            border-radius: 6px;
            background: #eff6ff;
            color: #2563eb;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
        }

        .aside-head-icon-btn:hover {
            background: #dbeafe;
        }

        .images-v2 .images-error-state {
            display: grid;
            gap: 10px;
            padding: 16px;
            border: 1px solid #fecaca;
            border-radius: 14px;
            background: #fff1f2;
            color: #881337;
        }

        .images-v2 .images-error-title {
            font-size: 14px;
            font-weight: 700;
            color: #7f1d1d;
        }

        .images-v2 .images-error-meta {
            font-size: 13px;
            line-height: 1.6;
            color: #9f1239;
        }

        .images-v2 .images-error-action {
            width: fit-content;
            height: 34px;
            padding: 0 14px;
            border-radius: 8px;
            border: 1px solid #fda4af;
            background: #fff;
            color: #be123c;
            font-size: 12px;
            font-weight: 600;
        }

        .images-v2 .images-item-badges {
            position: absolute;
            top: 8px;
            left: 8px;
            z-index: 2;
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
            max-width: calc(100% - 48px);
        }

        .images-v2 .images-item-badges.is-inline {
            position: static;
            z-index: auto;
            max-width: none;
            margin-top: 6px;
        }

        .images-v2 .images-item-badge {
            height: 22px;
            padding: 0 8px;
            border-radius: 999px;
            background: rgba(15, 23, 42, .72);
            color: #fff;
            font-size: 11px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            white-space: nowrap;
        }

        .images-v2 .images-item-badge.is-danger {
            background: rgba(185, 28, 28, .9);
        }

        .images-v2 .images-item-badge.is-muted {
            background: rgba(71, 85, 105, .88);
        }

        .images-v2 .images-toolbar button:disabled,
        .images-v2 .images-toolbar input:disabled {
            opacity: .6;
            cursor: not-allowed;
        }

    </style>
@endpush

<x-app-layout>
    <x-images-workspace
        id-prefix="images"
        root-class="images-v2"
        sidebar-tag="aside"
        stage-id="images-scroll"
        stage-class="relative inset-0 h-full overflow-y-auto select-none"
        :show-sidebar="true"
        :show-pagination="true"
    >
        <x-slot:sidebarHead>
            @include('user.images.partials.aside-head')
        </x-slot:sidebarHead>

        <x-slot:sidebarContent>
            <div id="albums-tree-list" class="images-tree-list"></div>
        </x-slot:sidebarContent>

        <x-slot:toolbar>
            @include('user.images.partials.toolbar')
        </x-slot:toolbar>

        <x-slot:stageContent>
            <div id="images-grid" class="dragselect"></div>
            <div id="images-error" class="hidden p-4">
                <div class="images-error-state">
                    <div class="images-error-title">图片列表加载失败</div>
                    <div id="images-error-message" class="images-error-meta">当前请求没有成功返回数据。</div>
                    <button type="button" id="images-retry" class="images-error-action">重新加载</button>
                </div>
            </div>
            <div id="images-empty" class="hidden p-4">
                <x-no-data message="这里还是空的～" />
            </div>
        </x-slot:stageContent>

        <x-slot:pagination>
            @include('user.images.partials.footer-pagination')
        </x-slot:pagination>

        <x-slot:carousel>
            @include('user.images.partials.carousel-shell')
        </x-slot:carousel>

        <x-slot:extraContent>
            <div id="drawer-mask" class="fixed hidden inset-0 bg-gray-500 bg-opacity-50 z-[40]" onclick="drawer.close()"></div>
            <div id="drawer" class="fixed bg-white w-64 md:w-72 top-0 -right-[1000px] bottom-0 z-[41] flex flex-col transition-all duration-300">
                <div class="flex justify-between items-center text-md px-3 py-1 border-b">
                    <span class="text-gray-600 truncate" id="drawer-title"></span>
                    <a href="javascript:drawer.close()" class="p-2"><i class="fas fa-times text-blue-500"></i></a>
                </div>
                <div id="drawer-content" class="overflow-y-auto"></div>
            </div>
            <input id="toolbar-upload-input" type="file" class="hidden" accept=".jpeg,.jpg,.png,.gif,.tif,.bmp,.ico,.psd,.webp,.pdf,.doc,.docx,.xls,.xlsx,.csv,.ppt,.pptx,.raw,.zip,.rar" multiple>
        </x-slot:extraContent>
    </x-images-workspace>

    <script type="text/html" id="images-item-tpl">
        <a href="javascript:void(0)" data-id="__id__" data-json='__json__' class="images-item relative cursor-default rounded outline outline-2 outline-offset-2 outline-transparent">
            <div class="images-item-badges">__status_badges__</div>
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
            <img alt="__name__" data-original="__preview_url__" src="__thumb_url__" width="__width__" height="__height__" loading="lazy">
        </a>
    </script>

    <script type="text/html" id="images-item-list-tpl">
        <div data-id="__id__" data-json='__json__' class="images-item relative cursor-default outline outline-2 outline-offset-2 outline-transparent">
            <div class="list-col list-thumb-wrap">
                <img class="images-list-thumb" alt="__name__" data-original="__preview_url__" src="__thumb_url__" width="__width__" height="__height__" loading="lazy">
            </div>
            <div class="list-col list-type"><div>__type__</div><div class="images-item-badges is-inline">__status_badges__</div></div>
            <div class="list-col list-url" title="__url__">
                <span class="list-url-text">__url__</span>
            </div>
            <div class="list-col list-resolution">__width__ × __height__</div>
            <div class="list-col list-size">__size__</div>
            <div class="list-col list-date">__date__</div>
            <div class="list-col list-ops">
                <span class="list-op-group">
                    <button type="button" class="list-op-btn list-op-copy" data-url="__url__"><i class="fas fa-link"></i>复制URL</button>
                    <button type="button" class="list-op-btn list-op-rename"><i class="fas fa-pen"></i>重命名</button>
                    <button type="button" class="list-op-btn list-op-delete"><i class="fas fa-trash"></i>删除</button>
                </span>
                <button type="button" class="image-selector overflow-hidden cursor-pointer" title="选择">
                    <span class="text-xl"><i class="fas fa-check-circle block rounded-full bg-white text-white border border-gray-500"></i></span>
                </button>
            </div>
        </div>
    </script>

    <script type="text/html" id="images-list-head-tpl">
        <div class="images-list-head">
            <div class="list-col">缩略图</div>
            <div class="list-col">类型</div>
            <div class="list-col">URL</div>
            <div class="list-col">分辨率</div>
            <div class="list-col">大小</div>
            <div class="list-col">上传时间</div>
            <div class="list-col text-right">操作</div>
        </div>
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

    <script type="text/html" id="albums-tree-item-tpl">
        <a href="javascript:void(0)" data-id="__id__" data-json='__json__' title="__intro__" class="albums-tree-item">
            <span class="albums-tree-name">__name__</span>
            <span class="albums-tree-count">__image_num__</span>
            <span class="albums-tree-item-actions">
                <i class="fas fa-share-alt albums-tree-action share" title="共享"></i>
                <i class="fas fa-pen albums-tree-action edit" title="重命名"></i>
                <i class="fas fa-trash albums-tree-action delete" title="删除"></i>
            </span>
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

    <x-modal id="album-action-modal">
        <div class="w-full pt-2">
            <h3 id="album-action-title" class="text-sm font-semibold text-gray-800">相册操作</h3>
            <p id="album-action-desc" class="mt-2 text-sm text-gray-600 hidden"></p>
            <form id="album-action-form" class="mt-3 space-y-3">
                <div id="album-action-input-wrap">
                    <input id="album-action-input" type="text" class="w-full h-10 rounded-lg px-3 text-sm border border-gray-200 bg-white focus:border-blue-400 focus:ring-0" placeholder="请输入相册名称">
                </div>
                <p id="album-action-delete-tip" class="text-xs text-red-500 hidden">删除后该相册中的图片会被移出。</p>
                <div class="album-modal-actions">
                    <button type="button" class="album-modal-btn cancel" onclick="Alpine.store('modal').close('album-action-modal')">取消</button>
                    <button id="album-action-submit" type="submit" class="album-modal-btn confirm">确认</button>
                </div>
            </form>
        </div>
    </x-modal>

    @push('scripts')
        {{-- Share dialog --}}
    <div id="album-share-dialog" class="share-dialog-overlay" style="display:none;">
        <div class="share-dialog-panel">
            <div class="share-dialog-header">
                <span class="share-dialog-title">共享相册: <span id="share-album-name"></span></span>
                <button type="button" id="share-dialog-close" class="share-dialog-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="share-dialog-body">
                <div class="share-dialog-section">
                    <div class="share-dialog-label">添加共享用户</div>
                    <input type="text" id="share-user-search" class="share-user-search" placeholder="搜索用户名或邮箱...">
                    <div id="share-user-results" class="share-user-results"></div>
                </div>
                <div class="share-dialog-section">
                    <div class="share-dialog-label">已共享用户</div>
                    <div id="share-current-list" class="share-current-list"></div>
                    <div id="share-no-users" class="share-no-users" style="display:none;">暂无共享用户</div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/justified-gallery/jquery.justifiedGallery.min.js') }}"></script>
        <script src="{{ asset('js/dragselect/ds.min.js') }}"></script>
        <script src="{{ asset('js/context-js/context-js.js') }}"></script>
        <script src="{{ asset('js/clipboard/index.browser.js') }}"></script>
        <script src="{{ asset('js/clipboard/clipboard.min.js') }}"></script>
        <script src="{{ asset('static/js/media-carousel-shared.js') }}?v={{ filemtime(public_path('static/js/media-carousel-shared.js')) }}"></script>
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
            const ALBUM_TREE_ITEM = '.albums-tree-item';
            const IMAGES_VIEW_MODE_KEY = 'lsky.images.view.mode';
            const IMAGES_PAGE_SIZE_KEY = 'lsky.images.page.size';
            const IMAGES_SEARCH_MODE_KEY = 'lsky.images.search.mode';
            const IMAGES_SELECTED_ALBUM_KEY = 'lsky.images.selected.album';
            const IMAGES_INFINITE_SCROLL_KEY = 'lsky.images.infinite.scroll';
            const PAGE_SIZES = [50, 100, 150, 200];
            const MAX_PARALLEL_UPLOADS = 6;
            const {
                escapeHtml,
                copyText,
                renderThumbButtons,
                normalizeLoopIndex: normalizeCarouselIndex,
                setPanelScrollLocked: setCarouselScrollLocked,
            } = window.LskyMediaCarousel;

            const $headerTitle = $(HEADER_TITLE);
            const $imagesScroll = $(IMAGES_SCROLL);
            const $photos = $(IMAGES_GRID);
            const $imagesEmpty = $('#images-empty');
            const $imagesLoading = $('#images-loading');
            const $imagesError = $('#images-error');
            const $imagesErrorMessage = $('#images-error-message');
            const $imagesRetry = $('#images-retry');
            const $drawer = $("#drawer");
            const $drawerMask = $('#drawer-mask');
            const $albumsTree = $('#albums-tree-list');
            const modal = Alpine.store('modal');
            let imageViewMode = localStorage.getItem(IMAGES_VIEW_MODE_KEY) || 'grid';
            let imagePageSize = Number(localStorage.getItem(IMAGES_PAGE_SIZE_KEY) || 50);
            if (!PAGE_SIZES.includes(imagePageSize)) {
                imagePageSize = 50;
            }
            let actionDialog = {target: null, mode: null, payload: {}};
            const $carousel = $('#images-carousel');
            const $carouselMain = $('#images-carousel-main');
            const $carouselImageFrame = $('#images-carousel-image-frame');
            const $carouselImg = $('#images-carousel-img');
            const $carouselCaption = $('#images-carousel-caption');
            const $carouselIndex = $('#images-carousel-index');
            const $carouselTop = $('#images-carousel-top');
            const $carouselStatus = $('#images-carousel-status');
            const $carouselDetail = $('#images-carousel-detail');
            const $carouselPrev = $('#images-carousel-prev');
            const $carouselNext = $('#images-carousel-next');
            const $carouselThumbs = $('#images-carousel-thumbs');
            const $carouselLoading = $('#images-carousel-loading');
            const $carouselEdit = $('#images-carousel-edit');
            const $carouselCropLayer = $('#images-carousel-crop-layer');
            const $carouselCropBox = $('#images-carousel-crop-box');
            const $carouselCropReset = $('#images-carousel-crop-reset');
            const $carouselCropSquare = $('#images-carousel-crop-square');
            const $carouselCropLandscape = $('#images-carousel-crop-landscape');
            const $carouselCropPortrait = $('#images-carousel-crop-portrait');
            const $carouselRotateLeft = $('#images-carousel-rotate-left');
            const $carouselRotateRight = $('#images-carousel-rotate-right');
            const $carouselFlipHorizontal = $('#images-carousel-flip-horizontal');
            const $carouselFlipVertical = $('#images-carousel-flip-vertical');
            const $carouselFilterClarity = $('#images-carousel-filter-clarity');
            const $carouselFilterGrayscale = $('#images-carousel-filter-grayscale');
            const $carouselFilterSoften = $('#images-carousel-filter-soften');
            const $carouselWatermark = $('#images-carousel-watermark');
            const $carouselRevert = $('#images-carousel-revert');
            const $carouselCropApply = $('#images-carousel-crop-apply');
            const $carouselCropCancel = $('#images-carousel-crop-cancel');
            const $carouselAi = $('#images-carousel-ai');
            const $carouselRename = $('#images-carousel-rename');
            const $carouselDelete = $('#images-carousel-delete');
            const $searchModeToggle = $('#search-mode-toggle');
            const $pagePrev = $('#images-page-prev');
            const $pageNext = $('#images-page-next');
            const $pageInfo = $('#images-page-info');
            const $pageSize = $('#images-page-size');
            const $pageJump = $('#images-page-jump');
            const $pageGo = $('#images-page-go');
            const $infiniteScrollToggle = $("#images-infinite-scroll");
            let infiniteScrollEnabled = localStorage.getItem(IMAGES_INFINITE_SCROLL_KEY) === "true";
            $infiniteScrollToggle.prop("checked", infiniteScrollEnabled);
            const batchDeletePreviewUrl = @json(route('advanced.api.images.batch-delete.preview'));
            const batchDeleteExecuteUrl = @json(route('advanced.api.images.batch-delete.execute'));
            const batchDeleteRollbackUrlTemplate = @json(route('advanced.api.images.batch-delete.rollback', ['batchId' => '__BATCH_ID__']));
            let currentImageRecords = [];
            let imagesLoadError = '';
            let carouselItems = [];
            let carouselIndex = 0;
            let touchStartX = null;
            let carouselProcessedObjectUrl = '';
            let carouselDetailCache = {};
            let carouselDetailRequestId = 0;
            let carouselCropState = {
                active: false,
                drawing: false,
                dragging: false,
                resizing: false,
                handle: '',
                rect: null,
                aspectRatio: null,
                pointerStart: null,
                startRect: null,
                pointerId: null,
            };
            let carouselZoom = { scale: 1, translateX: 0, translateY: 0, dragging: false, startX: 0, startY: 0 };
            let imageSearchMode = localStorage.getItem(IMAGES_SEARCH_MODE_KEY) || 'normal';
            let imageFilters = {};
            let imagePagination = {
                currentPage: 1,
                lastPage: 1,
                total: 0,
            };
            let preferredAlbumId = Number(localStorage.getItem(IMAGES_SELECTED_ALBUM_KEY) || 0);
            if (!Number.isInteger(preferredAlbumId) || preferredAlbumId < 1) {
                preferredAlbumId = 0;
            }
            let imagesLoading = true;
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
            const setImagesLoadError = (message = '') => {
                imagesLoadError = String(message || '').trim();
                if (imagesLoadError) {
                    $imagesErrorMessage.text(imagesLoadError);
                }
            };

            const syncImagesLoadingState = () => {
                const shouldShow = imagesLoading && currentImageRecords.length === 0;
                $imagesLoading.toggleClass('is-list', imageViewMode === 'list');
                $imagesLoading.toggleClass('show', shouldShow);
                $imagesLoading.toggleClass('hidden', !shouldShow);
            };

            const syncImagesErrorState = () => {
                const shouldShow = !imagesLoading && currentImageRecords.length === 0 && imagesLoadError !== '';
                $imagesError.toggleClass('hidden', !shouldShow);
            };

            const syncImagesToolbarState = () => {
                $('.images-toolbar button[data-operate], .images-toolbar [data-view], #search, #search-mode-toggle, #order, #permission').prop('disabled', imagesLoading);
            };

            const syncImagesEmptyState = () => {
                const shouldShow = !imagesLoading && imagesLoadError === '' && currentImageRecords.length === 0;
                $imagesEmpty.toggleClass('hidden', !shouldShow);
            };

            const buildImageStatusBadges = (image = {}) => {
                const reviewStatus = String(image.review_status || '').trim();
                const badges = [];
                if (image.is_unhealthy === true) {
                    badges.push({text: '疑似违规', className: 'is-danger'});
                }
                if (reviewStatus === 'review_pending') {
                    badges.push({text: '待审核', className: 'is-muted'});
                } else if (reviewStatus === 'review_rejected') {
                    badges.push({text: '已驳回', className: 'is-danger'});
                }
                return badges.map((badge) => `<span class="images-item-badge ${badge.className}">${escapeHtml(badge.text)}</span>`).join('');
            };

            const renderImages = (images, append = false) => {
                currentImageRecords = append ? currentImageRecords.concat(images) : images.slice();
                setImagesLoadError('');
                let html = '';
                const template = imageViewMode === 'list' ? '#images-item-list-tpl' : '#images-item-tpl';
                for (const i in images) {
                    const typeText = escapeHtml(String(images[i].extension || '-').toUpperCase());
                    const sizeText = escapeHtml(utils.formatSize(images[i].size * 1024));
                    const safeUrl = escapeHtml(String(images[i].url || ''));
                    const safePreviewUrl = escapeHtml(String(images[i].preview_url || images[i].thumb_url || images[i].url || ''));
                    const safeThumbUrl = escapeHtml(String(images[i].preview_url || images[i].thumb_url || images[i].url || ''));
                    const safeName = escapeHtml(String(images[i].filename || ''));
                    const safeJson = escapeHtml(JSON.stringify(images[i]));
                    const statusBadges = buildImageStatusBadges(images[i]);
                    html += $(template).html()
                        .replace(/__id__/g, images[i].id)
                        .replace(/__name__/g, safeName.replace(/\$/g, '$$$$'))
                        .replace(/__type__/g, typeText)
                        .replace(/__human_date__/g, escapeHtml(images[i].human_date))
                        .replace(/__date__/g, escapeHtml(images[i].date))
                        .replace(/__size__/g, sizeText)
                        .replace(/__url__/g, safeUrl.replace(/\$/g, '$$$$'))
                        .replace(/__preview_url__/g, safePreviewUrl.replace(/\$/g, '$$$$'))
                        .replace(/__thumb_url__/g, safeThumbUrl.replace(/\$/g, '$$$$'))
                        .replace(/__status_badges__/g, statusBadges.replace(/\$/g, '$$$$'))
                        .replace(/__width__/g, images[i].width)
                        .replace(/__height__/g, images[i].height)
                        .replace(/__json__/g, safeJson.replace(/\$/g, '$$$$'));
                }
                if (append) {
                    $photos.append(html);
                } else {
                    const head = imageViewMode === 'list' ? $('#images-list-head-tpl').html() : '';
                    $photos.html(head + html);
                }
                ds.setSelectables($photos.find(IMAGES_ITEM));
                bindOperates();

                if (imageViewMode === 'grid' && $photos.html() !== '') {
                    $photos.justifiedGallery(gridConfigs).removeClass('reset');
                    $photos.justifiedGallery('norewind');
                } else {
                    $photos.justifiedGallery('destroy');
                }
                syncImagesLoadingState();
                syncImagesErrorState();
                syncImagesEmptyState();
                syncImagesToolbarState();
                $headerTitle.text('我的图片');
            };

            const syncPagination = () => {
                const current = imagePagination.currentPage || 1;
                const last = imagePagination.lastPage || 1;
                const total = imagePagination.total || 0;
                if (infiniteScrollEnabled) {
                    $pageInfo.text(`已加载 ${current} / ${last} 页，共 ${total} 条`);
                    $pagePrev.hide();
                    $pageNext.hide();
                    $pageJump.hide();
                    $("#images-page-jump-label").hide();
                    $pageGo.hide();
                } else {
                    $pageInfo.text(`第 ${current} / ${last} 页，共 ${total} 条`);
                    $pagePrev.show().prop("disabled", imagesLoading || current <= 1);
                    $pageNext.show().prop("disabled", imagesLoading || current >= last);
                    $pageJump.show();
                    $("#images-page-jump-label").show();
                    $pageGo.show().prop("disabled", imagesLoading);
                }
                $pageSize.prop("disabled", imagesLoading);
            };











            const fetchImagesPage = (params = {}, options = {}) => {
                const append = Boolean(options.append);
                imageFilters = $.extend({}, imageFilters, params);
                if (!imageFilters.page) {
                    imageFilters.page = 1;
                }
                imagesLoading = true;
                syncPagination();
                syncImagesLoadingState();
                syncImagesToolbarState();
                if (!append) {
                    currentImageRecords = [];
                    setImagesLoadError('');
                    $imagesScroll.scrollTop(0);
                    ds.clearSelection();
                    $photos.addClass('reset').html('').justifiedGallery('destroy');
                }
                syncImagesErrorState();
                syncImagesEmptyState();
                return axios.get('{{ route('user.images') }}', {
                    params: $.extend({}, imageFilters, {per_page: imagePageSize}),
                }).then(response => {
                    if (!response.data.status) {
                        setImagesLoadError(response.data.message || '图片加载失败');
                        if (append) {
                            toastr.error(response.data.message || '图片加载失败');
                        }
                        return;
                    }
                    const pager = response.data.data.images || {};
                    imagePagination.currentPage = Number(pager.current_page || 1);
                    imagePagination.lastPage = Number(pager.last_page || 1);
                    imagePagination.total = Number(pager.total || 0);
                    renderImages(pager.data || [], append);
                }).catch((error) => {
                    const message = error?.response?.data?.message || error?.message || '图片加载失败';
                    setImagesLoadError(message);
                    if (append) {
                        toastr.error(message);
                    }
                }).finally(() => {
                    imagesLoading = false;
                    syncPagination();
                    syncImagesLoadingState();
                    syncImagesErrorState();
                    syncImagesEmptyState();
                    syncImagesToolbarState();
                });
            };

            const resetImages = (params) => {
                const merged = $.extend({page: 1}, params);
                return fetchImagesPage(merged);
            };

            const applyCarouselZoom = () => {
                const img = $carouselImg.get(0);
                if (!img) return;
                const {scale, translateX, translateY} = carouselZoom;
                img.style.transform = `scale(${scale}) translate(${translateX}px, ${translateY}px)`;
                img.classList.toggle('is-zoomed', scale > 1);
            };
            const resetCarouselZoom = () => {
                carouselZoom = {scale: 1, translateX: 0, translateY: 0, dragging: false, startX: 0, startY: 0};
                applyCarouselZoom();
            };
            const loadMoreImagesByScroll = () => {
                if (!infiniteScrollEnabled) return;
                if (imagesLoading) return;
                if (imagePagination.currentPage >= imagePagination.lastPage) return;
                const nextPage = imagePagination.currentPage + 1;
                fetchImagesPage({page: nextPage}, {append: true});
            };

            const setSelectedAlbum = (album) => {
                selectedAlbum = album || {};
                const id = Number(selectedAlbum.id || 0);
                if (id > 0) {
                    preferredAlbumId = id;
                    localStorage.setItem(IMAGES_SELECTED_ALBUM_KEY, String(id));
                } else {
                    preferredAlbumId = 0;
                    localStorage.removeItem(IMAGES_SELECTED_ALBUM_KEY);
                }
            };

            const syncAlbumsTreeActive = () => {
                $(ALBUM_TREE_ITEM).removeClass('active');
                if (selectedAlbum.id !== undefined) {
                    $albumsTree.find(`a[data-id="${selectedAlbum.id}"]`).addClass('active');
                }
            };

            const setViewMode = (mode, refresh = true) => {
                imageViewMode = mode === 'list' ? 'list' : 'grid';
                localStorage.setItem(IMAGES_VIEW_MODE_KEY, imageViewMode);
                $('[data-view]').removeClass('active');
                $(`[data-view="${imageViewMode}"]`).addClass('active');
                if (imageViewMode === 'list') {
                    $photos.addClass('view-list');
                } else {
                    $photos.removeClass('view-list');
                }
                syncImagesLoadingState();
                syncImagesErrorState();
                syncImagesEmptyState();
                if (!refresh) return;
                if (imagesLoading) return;
                if (currentImageRecords.length > 0) {
                    renderImages(currentImageRecords, false);
                    return;
                }
                resetImages();
            };

            const syncPageSizeState = () => {
                $pageSize.val(String(imagePageSize));
            };

            const setPageSize = (size) => {
                const val = Number(size || 0);
                if (!PAGE_SIZES.includes(val) || val === imagePageSize) return;
                imagePageSize = val;
                localStorage.setItem(IMAGES_PAGE_SIZE_KEY, String(imagePageSize));
                syncPageSizeState();
                resetImages({page: 1});
            };

            const revokeCarouselProcessedObjectUrl = () => {
                if (carouselProcessedObjectUrl) {
                    URL.revokeObjectURL(carouselProcessedObjectUrl);
                    carouselProcessedObjectUrl = '';
                }
            };

            const base64ToBlob = (base64, mimeType) => {
                const binary = atob(base64 || '');
                const len = binary.length;
                const bytes = new Uint8Array(len);
                for (let i = 0; i < len; i++) {
                    bytes[i] = binary.charCodeAt(i);
                }
                return new Blob([bytes], {type: mimeType || 'application/octet-stream'});
            };

            const syncSearchModeState = () => {
                imageSearchMode = imageSearchMode === 'ai' ? 'ai' : 'normal';
                localStorage.setItem(IMAGES_SEARCH_MODE_KEY, imageSearchMode);
                const isAi = imageSearchMode === 'ai';
                $searchModeToggle.toggleClass('is-ai', isAi);
                $searchModeToggle.find('span').text(isAi ? 'AI检索' : '普通检索');
                $('#search').attr('placeholder', isAi ? 'AI：标签/名称/OCR...' : '搜索...');
            };

            const applySearch = (keyword) => {
                const value = $.trim(keyword || '');
                if (imageSearchMode === 'ai') {
                    return resetImages({
                        page: 1,
                        q: value,
                        keyword: '',
                        search_mode: 'ai',
                    });
                }
                return resetImages({
                    page: 1,
                    keyword: value,
                    q: '',
                    search_mode: 'normal',
                });
            };

            const renderUploadingPlaceholderHtml = (guid, file, objectUrl) => {
                const safeName = $('<div>').text(file.name || 'image').html();
                const safeGuid = escapeHtml(guid);
                const sizeText = utils.formatSize(file.size || 0);
                return `
                    <a href="javascript:void(0)" class="images-item images-uploading relative rounded outline outline-2 outline-offset-2 outline-transparent" data-upload-guid="${safeGuid}">
                        <img alt="${safeName}" src="${escapeHtml(objectUrl)}">
                        <div class="image-upload-overlay">
                            <div class="images-uploading-panel">
                                <div class="images-uploading-name" title="${safeName}">${safeName}</div>
                                <div class="images-uploading-progress"><span style="width:0%"></span></div>
                                <div class="images-uploading-text">等待上传 · ${sizeText}</div>
                            </div>
                        </div>
                    </a>
                `;
            };

            const updateUploadingPlaceholder = (guid, percent, text) => {
                const $item = $photos.find(`[data-upload-guid="${guid}"]`);
                if (!$item.length) return;
                $item.find('.images-uploading-progress > span').css('width', `${Math.max(0, Math.min(100, percent || 0))}%`);
                $item.find('.images-uploading-text').text(text || '上传中');
            };

            const markUploadingPlaceholderState = (guid, isSuccess, text) => {
                const $item = $photos.find(`[data-upload-guid="${guid}"]`);
                if (!$item.length) return;
                $item.find('.images-uploading-progress > span').css('background', isSuccess ? '#22c55e' : '#ef4444');
                $item.find('.images-uploading-text').text(text || (isSuccess ? '上传成功' : '上传失败'));
                if (isSuccess) {
                    $item.removeClass('images-uploading');
                    $item.find('.image-upload-overlay').remove();
                }
            };

            const safeTemplateValue = (value) => escapeHtml(String(value ?? '')).replace(/\$/g, '$$$$');

            const buildImageItemHtml = (image) => {
                const template = imageViewMode === 'list' ? '#images-item-list-tpl' : '#images-item-tpl';
                const createdAt = String(image.created_at || '');
                const date = createdAt ? createdAt.replace('T', ' ').replace(/\.\d+Z$/, '').slice(0, 19) : '刚刚';
                const payload = {
                    id: image.id,
                    key: image.key || '',
                    album_id: image.album_id || null,
                    filename: image.filename || image.origin_name || '',
                    extension: String(image.extension || '').toUpperCase(),
                    human_date: '刚刚',
                    date: date,
                    size: Number(image.size || 0),
                    url: image.url || '',
                    preview_url: image.preview_url || image.thumb_url || image.url || '',
                    thumb_url: image.preview_url || image.thumb_url || image.url || '',
                    width: Math.max(Number(image.width || 0), 200),
                    height: Math.max(Number(image.height || 0), 200),
                };
                return $(template).html()
                    .replace(/__id__/g, payload.id)
                    .replace(/__name__/g, safeTemplateValue(payload.filename))
                    .replace(/__type__/g, safeTemplateValue(payload.extension || '-'))
                    .replace(/__human_date__/g, escapeHtml(payload.human_date))
                    .replace(/__date__/g, escapeHtml(payload.date))
                    .replace(/__size__/g, escapeHtml(utils.formatSize(payload.size * 1024)))
                    .replace(/__url__/g, safeTemplateValue(payload.url))
                    .replace(/__preview_url__/g, safeTemplateValue(payload.preview_url))
                    .replace(/__thumb_url__/g, safeTemplateValue(payload.thumb_url))
                    .replace(/__width__/g, payload.width)
                    .replace(/__height__/g, payload.height)
                    .replace(/__json__/g, safeTemplateValue(JSON.stringify(payload)));
            };

            const replaceUploadPlaceholderByImage = (guid, image) => {
                const $placeholder = $photos.find(`[data-upload-guid="${guid}"]`).first();
                if (!$placeholder.length || !image?.id) return false;
                $placeholder.replaceWith(buildImageItemHtml(image));
                ds.setSelectables($photos.find(IMAGES_ITEM));
                if (imageViewMode === 'grid') {
                    $photos.justifiedGallery(gridConfigs).removeClass('reset');
                    $photos.justifiedGallery('norewind');
                }
                return true;
            };

            const clampNumber = (value, min, max) => Math.min(max, Math.max(min, value));
            const getCurrentCarouselItem = () => carouselItems[carouselIndex] || null;

            const buildCarouselItems = () => {
                return $photos.find(IMAGES_ITEM).map(function () {
                    const $item = $(this);
                    const $img = $item.find('img').first();
                    const meta = $item.data('json') || {};
                    const previewUrl = meta.preview_url || $img.data('original') || $img.attr('data-original') || $img.attr('src');
                    const originUrl = meta.url || previewUrl;
                    const thumb = meta.thumb_url || $img.attr('src') || previewUrl;
                    const name = $item.find('.filename').first().text() || $img.attr('alt') || '';
                    const id = $item.data('id');
                    const key = meta.key || '';
                    return previewUrl ? {
                        id: id,
                        key: key,
                        url: previewUrl,
                        origin_url: originUrl,
                        thumb: thumb,
                        filename: name,
                        extension: String(meta.extension || '').toUpperCase(),
                        mimetype: String(meta.mimetype || ''),
                        date: String(meta.date || ''),
                        width: Number(meta.width || $img.attr('width') || 0),
                        height: Number(meta.height || $img.attr('height') || 0),
                        size: Number(meta.size || 0),
                    } : null;
                }).get().filter(Boolean);
            };

            const renderCarouselDetail = (detail = null) => {
                const item = getCurrentCarouselItem();
                if (!item) {
                    $carouselDetail.html('');
                    return;
                }

                const reviewStatusMap = {
                    review_pending: '待审核',
                    review_approved: '已通过',
                    review_rejected: '已驳回',
                };
                const detailSize = Number(detail?.size || item.size || 0);
                const detailTags = Array.isArray(detail?.tags)
                    ? detail.tags.map((tag) => String(tag?.name || '').trim()).filter(Boolean)
                    : [];
                const detailOcr = String(detail?.ocr_text || '').trim();
                const displayName = String(detail?.filename || item.filename || '-').trim() || '-';
                const originName = String(detail?.origin_name || '').trim();
                const copyUrl = String(detail?.url || item.origin_url || item.url || '').trim();
                const groups = [
                    {
                        title: '基础信息',
                        rows: [
                            {key: '名称', value: displayName},
                            ...(originName && originName !== displayName ? [{key: '原名', value: originName}] : []),
                            {key: '类型', value: detail?.mimetype || item.mimetype || item.extension || '-'},
                            {key: '尺寸', value: (detail?.width || item.width) && (detail?.height || item.height) ? `${detail?.width || item.width} × ${detail?.height || item.height}px` : '-'},
                            {key: '大小', value: detailSize > 0 ? utils.formatSize(detailSize * 1024) : '-'},
                            {key: 'URL', value: copyUrl || '-', isHtml: !!copyUrl},
                        ],
                    },
                    {
                        title: '归属信息',
                        rows: [
                            {key: '相册', value: detail?.album?.name || '-'},
                            {key: '策略', value: detail?.strategy?.name || '-'},
                            {key: '权限', value: Number(detail?.permission ?? item.permission) === 1 ? '公开' : '私有'},
                            {key: '上传时间', value: detail?.created_at || item.date || '-'},
                        ],
                    },
                    {
                        title: 'AI与审核',
                        rows: [
                            {key: 'AI检测', value: typeof detail?.is_unhealthy === 'boolean' ? (detail.is_unhealthy ? '疑似违规' : '正常') : '-'},
                            {key: '人工审核', value: reviewStatusMap[String(detail?.review_status || '')] || '-'},
                            {key: '审核原因', value: detail?.review_reason || '-'},
                            {key: '审核时间', value: detail?.reviewed_at || '-'},
                            {key: '审核人', value: detail?.reviewed_by ? `#${detail.reviewed_by}` : '-'},
                            {key: '标签', value: detailTags.length ? detailTags.join(' / ') : '-'},
                            {key: 'OCR摘要', value: detailOcr ? (detailOcr.length > 140 ? `${detailOcr.slice(0, 140)}...` : detailOcr) : '-'},
                        ],
                    },
                ];

                const stateHtml = detail
                    ? ''
                    : `<div class="images-carousel-detail-state"><div class="images-carousel-detail-state-title">正在补充完整详情</div><div class="images-carousel-detail-state-meta">当前先展示列表中的轻量元数据，详细信息会在请求成功后自动补齐。</div></div>`;
                const html = stateHtml + groups.map((group) => {
                    const rowsHtml = group.rows.map((row) => {
                        const valueHtml = row.isHtml
                            ? `<div class="images-carousel-detail-inline"><span class="images-carousel-detail-text">${escapeHtml(row.value)}</span><button type="button" class="images-carousel-detail-copy" data-url="${escapeHtml(row.value)}" title="复制链接"><i class="fas fa-link"></i></button></div>`
                            : escapeHtml(row.value);
                        return `<div class="images-carousel-detail-row"><dt class="images-carousel-detail-k">${escapeHtml(row.key)}</dt><dd class="images-carousel-detail-v">${valueHtml}</dd></div>`;
                    }).join('');
                    return `<section class="images-carousel-detail-group"><div class="images-carousel-detail-group-title">${escapeHtml(group.title)}</div><div class="images-carousel-detail-group-body">${rowsHtml}</div></section>`;
                }).join('');
                $carouselDetail.html(html);
                $carouselDetail.scrollTop(0);
            };

            const fetchCarouselDetail = async (imageId) => {
                if (!imageId) return;
                if (carouselDetailCache[imageId]) {
                    renderCarouselDetail(carouselDetailCache[imageId]);
                    return;
                }

                const requestId = ++carouselDetailRequestId;
                try {
                    const response = await axios.get(`/user/images/${imageId}`);
                    if (!response.data?.status) {
                        throw new Error(response.data?.message || '详情加载失败');
                    }
                    const detail = response.data?.data?.image || null;
                    if (!detail) {
                        throw new Error('详情数据为空');
                    }
                    carouselDetailCache[imageId] = detail;
                    const current = getCurrentCarouselItem();
                    if (requestId === carouselDetailRequestId && current && String(current.id) === String(imageId)) {
                        renderCarouselDetail(detail);
                    }
                } catch (error) {
                    const current = getCurrentCarouselItem();
                    if (requestId === carouselDetailRequestId && current && String(current.id) === String(imageId)) {
                        renderCarouselDetail({});
                        $carouselDetail.prepend(`<div class="images-carousel-detail-state is-error"><div class="images-carousel-detail-state-title">详情加载失败</div><div class="images-carousel-detail-state-meta">${escapeHtml(error?.message || '已回退到当前列表元数据。')}</div><button type="button" class="images-carousel-detail-state-btn" data-action="retry-detail">重试</button></div>`);
                    }
                }
            };

            const setCarouselCropMode = (active) => {
                carouselCropState.active = active;
                carouselCropState.drawing = false;
                carouselCropState.dragging = false;
                carouselCropState.resizing = false;
                carouselCropState.handle = '';
                carouselCropState.pointerStart = null;
                carouselCropState.startRect = null;
                carouselCropState.pointerId = null;
                if (!active) {
                    $carouselCropLayer.removeClass('active').removeAttr('style');
                    $carouselCropBox.removeAttr('style');
                    carouselCropState.aspectRatio = null;
                    $carouselCropBox.attr('data-ratio', '');
                }
                $carouselEdit.toggleClass('hidden', active);
                $carouselCropReset.toggleClass('hidden', !active);
                $carouselCropSquare.toggleClass('hidden', !active);
                $carouselCropLandscape.toggleClass('hidden', !active);
                $carouselCropPortrait.toggleClass('hidden', !active);
                $carouselCropApply.toggleClass('hidden', !active);
                $carouselCropCancel.toggleClass('hidden', !active);
                $carouselStatus.text(active ? '自由裁剪' : '');
            };

            const syncCarouselCropPresetButtons = () => {
                const ratio = carouselCropState.aspectRatio;
                $carouselCropSquare.toggleClass('is-primary', ratio === 1);
                $carouselCropLandscape.toggleClass('is-primary', ratio === 16 / 9);
                $carouselCropPortrait.toggleClass('is-primary', ratio === 4 / 5);
                $carouselCropReset.toggleClass('is-primary', ratio === null);
            };

            const roundCropRect = (rect) => ({
                x: Math.round(rect.x),
                y: Math.round(rect.y),
                width: Math.round(rect.width),
                height: Math.round(rect.height),
            });

            const getCarouselCropBounds = () => ({
                width: Number($carouselCropLayer.width() || 0),
                height: Number($carouselCropLayer.height() || 0),
            });

            const clampCropRect = (rect, bounds, ratio = null) => {
                const minSize = 32;
                if (!bounds.width || !bounds.height) {
                    return null;
                }

                let width = clampNumber(Number(rect.width || 0), minSize, bounds.width);
                let height = clampNumber(Number(rect.height || 0), minSize, bounds.height);

                if (ratio) {
                    height = Math.round(width / ratio);
                    if (height > bounds.height) {
                        height = bounds.height;
                        width = Math.round(height * ratio);
                    }
                    if (width > bounds.width) {
                        width = bounds.width;
                        height = Math.round(width / ratio);
                    }
                    width = Math.max(minSize, width);
                    height = Math.max(minSize, height);
                }

                const x = clampNumber(Number(rect.x || 0), 0, Math.max(0, bounds.width - width));
                const y = clampNumber(Number(rect.y || 0), 0, Math.max(0, bounds.height - height));

                return roundCropRect({x, y, width, height});
            };

            const buildCropRectFromDraw = (startPoint, currentPoint, bounds, ratio = null) => {
                const minSize = 32;
                const x1 = clampNumber(startPoint.x, 0, bounds.width);
                const y1 = clampNumber(startPoint.y, 0, bounds.height);
                const x2 = clampNumber(currentPoint.x, 0, bounds.width);
                const y2 = clampNumber(currentPoint.y, 0, bounds.height);
                const signX = x2 >= x1 ? 1 : -1;
                const signY = y2 >= y1 ? 1 : -1;

                if (!ratio) {
                    const rect = {
                        x: Math.min(x1, x2),
                        y: Math.min(y1, y2),
                        width: Math.max(minSize, Math.abs(x2 - x1)),
                        height: Math.max(minSize, Math.abs(y2 - y1)),
                    };

                    if (signX < 0) rect.x = x1 - rect.width;
                    if (signY < 0) rect.y = y1 - rect.height;

                    return clampCropRect(rect, bounds, null);
                }

                const maxWidth = signX > 0 ? bounds.width - x1 : x1;
                const maxHeight = signY > 0 ? bounds.height - y1 : y1;
                let width = Math.max(minSize, Math.abs(x2 - x1));
                let height = Math.max(minSize, Math.abs(y2 - y1));

                if ((width / Math.max(height, 1)) >= ratio) {
                    height = Math.round(width / ratio);
                } else {
                    width = Math.round(height * ratio);
                }

                width = Math.min(width, maxWidth);
                height = Math.round(width / ratio);
                if (height > maxHeight) {
                    height = maxHeight;
                    width = Math.round(height * ratio);
                }

                const rect = {
                    x: signX > 0 ? x1 : x1 - width,
                    y: signY > 0 ? y1 : y1 - height,
                    width,
                    height,
                };

                return clampCropRect(rect, bounds, ratio);
            };

            const buildCropRectFromResize = (handle, start, pointer, bounds, ratio = null) => {
                const minSize = 32;
                const currentX = clampNumber(pointer.x, 0, bounds.width);
                const currentY = clampNumber(pointer.y, 0, bounds.height);
                const centerX = start.x + start.width / 2;
                const centerY = start.y + start.height / 2;

                if (!ratio) {
                    const rect = {...start};
                    switch (handle) {
                        case 'nw':
                            rect.x = clampNumber(currentX, 0, start.x + start.width - minSize);
                            rect.y = clampNumber(currentY, 0, start.y + start.height - minSize);
                            rect.width = start.width - (rect.x - start.x);
                            rect.height = start.height - (rect.y - start.y);
                            break;
                        case 'n':
                            rect.y = clampNumber(currentY, 0, start.y + start.height - minSize);
                            rect.height = start.height - (rect.y - start.y);
                            break;
                        case 'ne':
                            rect.y = clampNumber(currentY, 0, start.y + start.height - minSize);
                            rect.width = clampNumber(currentX - start.x, minSize, bounds.width - start.x);
                            rect.height = start.height - (rect.y - start.y);
                            break;
                        case 'e':
                            rect.width = clampNumber(currentX - start.x, minSize, bounds.width - start.x);
                            break;
                        case 'se':
                            rect.width = clampNumber(currentX - start.x, minSize, bounds.width - start.x);
                            rect.height = clampNumber(currentY - start.y, minSize, bounds.height - start.y);
                            break;
                        case 's':
                            rect.height = clampNumber(currentY - start.y, minSize, bounds.height - start.y);
                            break;
                        case 'sw':
                            rect.x = clampNumber(currentX, 0, start.x + start.width - minSize);
                            rect.width = start.width - (rect.x - start.x);
                            rect.height = clampNumber(currentY - start.y, minSize, bounds.height - start.y);
                            break;
                        case 'w':
                            rect.x = clampNumber(currentX, 0, start.x + start.width - minSize);
                            rect.width = start.width - (rect.x - start.x);
                            break;
                    }

                    return clampCropRect(rect, bounds, null);
                }

                if (['nw', 'ne', 'sw', 'se'].includes(handle)) {
                    const anchorX = handle.includes('w') ? start.x + start.width : start.x;
                    const anchorY = handle.includes('n') ? start.y + start.height : start.y;
                    const maxWidth = handle.includes('w') ? anchorX : bounds.width - anchorX;
                    const maxHeight = handle.includes('n') ? anchorY : bounds.height - anchorY;
                    let width = Math.max(minSize, Math.abs(currentX - anchorX));
                    let height = Math.round(width / ratio);

                    if (height > maxHeight) {
                        height = maxHeight;
                        width = Math.round(height * ratio);
                    }
                    if (width > maxWidth) {
                        width = maxWidth;
                        height = Math.round(width / ratio);
                    }

                    const rect = {
                        x: handle.includes('w') ? anchorX - width : anchorX,
                        y: handle.includes('n') ? anchorY - height : anchorY,
                        width,
                        height,
                    };

                    return clampCropRect(rect, bounds, ratio);
                }

                if (handle === 'e' || handle === 'w') {
                    let width = Math.max(minSize, Math.abs(currentX - (handle === 'e' ? start.x : start.x + start.width)));
                    const maxWidth = handle === 'e' ? bounds.width - start.x : start.x + start.width;
                    width = Math.min(width, maxWidth);
                    let height = Math.round(width / ratio);
                    const maxHeight = Math.min(centerY, bounds.height - centerY) * 2;
                    if (height > maxHeight) {
                        height = maxHeight;
                        width = Math.round(height * ratio);
                    }

                    const rect = {
                        x: handle === 'e' ? start.x : start.x + start.width - width,
                        y: centerY - height / 2,
                        width,
                        height,
                    };

                    return clampCropRect(rect, bounds, ratio);
                }

                if (handle === 'n' || handle === 's') {
                    let height = Math.max(minSize, Math.abs(currentY - (handle === 's' ? start.y : start.y + start.height)));
                    const maxHeight = handle === 's' ? bounds.height - start.y : start.y + start.height;
                    height = Math.min(height, maxHeight);
                    let width = Math.round(height * ratio);
                    const maxWidth = Math.min(centerX, bounds.width - centerX) * 2;
                    if (width > maxWidth) {
                        width = maxWidth;
                        height = Math.round(width / ratio);
                    }

                    const rect = {
                        x: centerX - width / 2,
                        y: handle === 's' ? start.y : start.y + start.height - height,
                        width,
                        height,
                    };

                    return clampCropRect(rect, bounds, ratio);
                }

                return clampCropRect(start, bounds, ratio);
            };

            const renderCropBox = () => {
                if (!carouselCropState.active || !carouselCropState.rect) return;
                const rect = carouselCropState.rect;
                $carouselCropBox.css({
                    left: `${rect.x}px`,
                    top: `${rect.y}px`,
                    width: `${rect.width}px`,
                    height: `${rect.height}px`,
                });
                $carouselCropBox.attr('data-ratio', carouselCropState.aspectRatio ? String(carouselCropState.aspectRatio) : '');
            };

            const syncCarouselCropLayer = (resetRect = false) => {
                if (!carouselCropState.active) return;
                const frameEl = $carouselImageFrame.get(0);
                const imgEl = $carouselImg.get(0);
                if (!frameEl || !imgEl) return;

                const frameRect = frameEl.getBoundingClientRect();
                const imgRect = imgEl.getBoundingClientRect();
                const width = Math.round(imgRect.width);
                const height = Math.round(imgRect.height);
                if (width < 24 || height < 24) return;

                const left = Math.round(imgRect.left - frameRect.left);
                const top = Math.round(imgRect.top - frameRect.top);
                $carouselCropLayer.addClass('active').css({
                    left: `${left}px`,
                    top: `${top}px`,
                    width: `${width}px`,
                    height: `${height}px`,
                });

                const bounds = {width, height};
                if (resetRect || !carouselCropState.rect) {
                    const ratio = carouselCropState.aspectRatio;
                    let cropWidth = Math.max(96, Math.round(width * 0.72));
                    let cropHeight = ratio ? Math.round(cropWidth / ratio) : Math.max(96, Math.round(height * 0.72));
                    if (cropHeight > height * 0.82) {
                        cropHeight = Math.round(height * 0.82);
                        cropWidth = ratio ? Math.round(cropHeight * ratio) : cropWidth;
                    }
                    if (cropWidth > width * 0.82) {
                        cropWidth = Math.round(width * 0.82);
                        cropHeight = ratio ? Math.round(cropWidth / ratio) : cropHeight;
                    }
                    carouselCropState.rect = clampCropRect({
                        x: Math.round((width - cropWidth) / 2),
                        y: Math.round((height - cropHeight) / 2),
                        width: cropWidth,
                        height: cropHeight,
                    }, bounds, ratio);
                } else {
                    carouselCropState.rect = clampCropRect(carouselCropState.rect, bounds, carouselCropState.aspectRatio);
                }

                syncCarouselCropPresetButtons();
                renderCropBox();
            };

            const setCarouselCropPreset = (ratio = null) => {
                if (!carouselCropState.active) return;
                const layerWidth = Number($carouselCropLayer.width() || 0);
                const layerHeight = Number($carouselCropLayer.height() || 0);
                if (layerWidth < 24 || layerHeight < 24) return;

                if (!ratio) {
                    carouselCropState.aspectRatio = null;
                    syncCarouselCropLayer(true);
                    return;
                }

                carouselCropState.aspectRatio = ratio;
                let width = Math.round(layerWidth * 0.82);
                let height = Math.round(width / ratio);
                if (height > layerHeight * 0.82) {
                    height = Math.round(layerHeight * 0.82);
                    width = Math.round(height * ratio);
                }
                carouselCropState.rect = {
                    x: Math.max(0, Math.round((layerWidth - width) / 2)),
                    y: Math.max(0, Math.round((layerHeight - height) / 2)),
                    width: Math.max(24, width),
                    height: Math.max(24, height),
                };
                syncCarouselCropPresetButtons();
                renderCropBox();
            };

            const applyCarouselProcessedResult = (data, fallbackLabel = '处理结果') => {
                if (!data?.content_base64) {
                    toastr.warning('处理结果缺少预览内容');
                    return false;
                }

                const blob = base64ToBlob(data.content_base64, data.mimetype || 'application/octet-stream');
                revokeCarouselProcessedObjectUrl();
                carouselProcessedObjectUrl = URL.createObjectURL(blob);
                const item = getCurrentCarouselItem();
                $carouselImg.attr('src', carouselProcessedObjectUrl).attr('alt', item?.filename || '');
                const dimText = data.width && data.height ? `${data.width} × ${data.height}px` : '-';
                const sizeText = blob.size > 0 ? utils.formatSize(blob.size) : '-';
                $carouselTop.text(`${fallbackLabel} · ${dimText} · ${sizeText}`);
                $carouselStatus.text(fallbackLabel);
                return true;
            };

            const runCarouselProcess = async (payload, label) => {
                const item = getCurrentCarouselItem();
                if (!item?.key) {
                    toastr.warning('当前图片缺少 key，无法处理');
                    return false;
                }

                await ensureCarouselOriginalImage();
                setCarouselCropMode(false);
                $carouselLoading.addClass('show');
                resetCarouselZoom();
                $carouselImg.addClass('is-loading');

                try {
                    const response = await axios.post(`/advanced-api/images/${encodeURIComponent(item.key)}/process`, payload);
                    if (!response.data?.status) {
                        toastr.warning(response.data?.message || `${label}失败`);
                        return false;
                    }
                    const ok = applyCarouselProcessedResult(response.data.data || {}, label);
                    if (ok) {
                        toastr.success(`${label}完成`);
                    }
                    return ok;
                } catch (e) {
                    toastr.error(e?.response?.data?.message || e?.message || `${label}失败`);
                    $carouselImg.removeClass('is-loading');
                    $carouselLoading.removeClass('show');
                    return false;
                }
            };

            const ensureCarouselOriginalImage = () => {
                const item = getCurrentCarouselItem();
                if (!item) return Promise.resolve();
                const currentSrc = String($carouselImg.attr('src') || '');
                const originalSrc = item.origin_url || item.url;
                if (currentSrc === originalSrc) {
                    return Promise.resolve();
                }

                return new Promise((resolve) => {
                    let settled = false;
                    const done = () => { if (!settled) { settled = true; resolve(); } };
                    $carouselImg.one('load.carouselOriginal error.carouselOriginal', done);
                    setTimeout(done, 15000);
                    $carouselLoading.addClass('show');
                    $carouselImg.addClass('is-loading').attr('src', originalSrc);
                    revokeCarouselProcessedObjectUrl();
                });
            };

            const startCarouselCrop = async () => {
                const item = getCurrentCarouselItem();
                if (!item?.key) {
                    toastr.warning('当前图片缺少 key，无法裁剪');
                    return;
                }
                await ensureCarouselOriginalImage();
                setCarouselCropMode(true);
                syncCarouselCropLayer(true);
            };

            const applyCarouselCrop = async () => {
                const item = getCurrentCarouselItem();
                const imgEl = $carouselImg.get(0);
                if (!item?.key || !imgEl || !carouselCropState.rect) return;

                const layerWidth = $carouselCropLayer.width();
                const layerHeight = $carouselCropLayer.height();
                const sourceWidth = Math.max(1, Number(item.width || imgEl.naturalWidth || 0));
                const sourceHeight = Math.max(1, Number(item.height || imgEl.naturalHeight || 0));
                if (!layerWidth || !layerHeight || !sourceWidth || !sourceHeight) {
                    toastr.warning('裁剪区域无效');
                    return;
                }

                const crop = {
                    x: Math.round((carouselCropState.rect.x / layerWidth) * sourceWidth),
                    y: Math.round((carouselCropState.rect.y / layerHeight) * sourceHeight),
                    width: Math.round((carouselCropState.rect.width / layerWidth) * sourceWidth),
                    height: Math.round((carouselCropState.rect.height / layerHeight) * sourceHeight),
                };

                crop.x = Math.max(0, Math.min(crop.x, sourceWidth - 1));
                crop.y = Math.max(0, Math.min(crop.y, sourceHeight - 1));
                crop.width = Math.max(1, Math.min(crop.width, sourceWidth - crop.x));
                crop.height = Math.max(1, Math.min(crop.height, sourceHeight - crop.y));

                if (crop.width < 2 || crop.height < 2) {
                    toastr.warning('裁剪范围过小');
                    return;
                }

                await runCarouselProcess({crop: crop}, '裁剪预览');
            };

            const revertCarouselPreview = async () => {
                const item = getCurrentCarouselItem();
                if (!item) return;
                await ensureCarouselOriginalImage();
                $carouselStatus.text('');
                const sizeText = item.size > 0 ? utils.formatSize(item.size * 1024) : '-';
                const dimText = item.width > 0 && item.height > 0 ? `${item.width} × ${item.height}px` : '-';
                $carouselTop.text(item.origin_url ? `${item.origin_url} · ${dimText} · ${sizeText}` : `${dimText} · ${sizeText}`);
                toastr.success('已还原到原图');
            };

            const openCarouselWatermarkDialog = async () => {
                const result = await Swal.fire({
                    title: '文字水印',
                    html: `
                        <div style="display:grid;gap:10px;text-align:left;">
                            <input id="sw-watermark-text" class="swal2-input" placeholder="例如 © Lsky Pro" style="margin:0;width:100%;" />
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                                <select id="sw-watermark-pos" class="swal2-select" style="margin:0;width:100%;">
                                    <option value="top-left">左上</option>
                                    <option value="top">顶部</option>
                                    <option value="top-right">右上</option>
                                    <option value="left">左侧</option>
                                    <option value="center">居中</option>
                                    <option value="right">右侧</option>
                                    <option value="bottom-left">左下</option>
                                    <option value="bottom">底部</option>
                                    <option value="bottom-right" selected>右下</option>
                                </select>
                                <input id="sw-watermark-size" class="swal2-input" type="number" min="8" max="200" value="28" style="margin:0;width:100%;" />
                            </div>
                            <input id="sw-watermark-color" class="swal2-input" value="#FFFFFFCC" style="margin:0;width:100%;" />
                        </div>
                    `,
                    showCancelButton: true,
                    confirmButtonText: '应用水印',
                    cancelButtonText: '取消',
                    preConfirm: () => {
                        const text = String(document.getElementById('sw-watermark-text')?.value || '').trim();
                        const position = String(document.getElementById('sw-watermark-pos')?.value || 'bottom-right').trim();
                        const size = Number(document.getElementById('sw-watermark-size')?.value || 28);
                        const color = String(document.getElementById('sw-watermark-color')?.value || '#FFFFFFCC').trim();
                        if (!text) {
                            Swal.showValidationMessage('水印文本不能为空');
                            return false;
                        }
                        return {text, position, size, color};
                    },
                });

                if (!result.isConfirmed || !result.value) return;
                await runCarouselProcess({
                    watermark: result.value,
                }, '文字水印');
            };

            const renderCarousel = () => {
                if (!carouselItems.length) return;
                setCarouselCropMode(false);
                revokeCarouselProcessedObjectUrl();
                carouselIndex = normalizeCarouselIndex(carouselIndex, carouselItems.length);
                const item = carouselItems[carouselIndex];
                resetCarouselZoom();
                $carouselImg.addClass('is-loading');
                $carouselLoading.addClass('show');
                $carouselImg.attr('src', item.origin_url || item.url).attr('alt', item.filename || '');
                $carouselCaption.text(item.filename || '-');
                const sizeText = item.size > 0 ? utils.formatSize(item.size * 1024) : '-';
                const dimText = item.width > 0 && item.height > 0 ? `${item.width} × ${item.height}px` : '-';
                const topText = item.origin_url ? `${item.origin_url} · ${dimText} · ${sizeText}` : `${dimText} · ${sizeText}`;
                $carouselTop.text(topText);
                $carouselStatus.text('');
                $carouselIndex.text(`${carouselIndex + 1} / ${carouselItems.length}`);
                renderCarouselDetail(carouselDetailCache[item.id] || null);
                fetchCarouselDetail(item.id);
                $carouselPrev.toggle(carouselItems.length > 1);
                $carouselNext.toggle(carouselItems.length > 1);
                $carouselThumbs.find('.images-carousel-thumb').removeClass('active')
                    .eq(carouselIndex).addClass('active');
                const activeThumb = $carouselThumbs.find('.images-carousel-thumb').get(carouselIndex);
                activeThumb && activeThumb.scrollIntoView({behavior: 'smooth', block: 'nearest', inline: 'center'});
            };

            const renderCarouselThumbs = () => {
                const html = renderThumbButtons(carouselItems, carouselIndex, (item) => ({
                    title: item.filename || '',
                    src: item.thumb || item.url || '',
                    alt: item.filename || '',
                }));
                $carouselThumbs.html(html);
            };

            const openCarousel = (id) => {
                carouselItems = buildCarouselItems();
                if (!carouselItems.length) return;
                const idx = carouselItems.findIndex(item => String(item.id) === String(id));
                carouselIndex = normalizeCarouselIndex(idx >= 0 ? idx : 0, carouselItems.length);
                renderCarouselThumbs();
                renderCarousel();
                setCarouselScrollLocked($carousel.get(0), true);
                $carousel.addClass('show');
            };

            const closeCarousel = () => {
                setCarouselCropMode(false);
                revokeCarouselProcessedObjectUrl();
                $carousel.removeClass('show');
                setCarouselScrollLocked($carousel.get(0), false);
            };

            const carouselNext = () => {
                if (!carouselItems.length) return;
                carouselIndex = normalizeCarouselIndex(carouselIndex + 1, carouselItems.length);
                renderCarousel();
            };

            const carouselPrev = () => {
                if (!carouselItems.length) return;
                carouselIndex = normalizeCarouselIndex(carouselIndex - 1, carouselItems.length);
                renderCarousel();
            };


            const renderAlbumTreeNodes = (albums, $container, depth) => {
                const tplHtml = $('#albums-tree-item-tpl').html();
                albums.forEach(function(album) {
                    var itemHtml = tplHtml
                        .replace(/__id__/g, album.id)
                        .replace(/__name__/g, escapeHtml(album.name))
                        .replace(/__intro__/g, escapeHtml(album.intro || ''))
                        .replace(/__image_num__/g, album.image_num)
                        .replace(/__json__/g, escapeHtml(JSON.stringify(album)).replace(/\$/g, '$$$$'));
                    var $item = $(itemHtml);

                    // Add indentation based on depth
                    if (depth > 0) {
                        $item.filter('a').css('padding-left', (12 + depth * 16) + 'px');
                    }

                    var hasChildren = album.children_recursive && album.children_recursive.length > 0;

                    // Add toggle icon or placeholder before the name span
                    var $nameEl = $item.filter('a').find('.albums-tree-name');
                    if (hasChildren) {
                        $('<i class="fas fa-chevron-right albums-tree-toggle is-open"></i>').insertBefore($nameEl);
                    } else {
                        $('<span class="albums-tree-toggle-placeholder"></span>').insertBefore($nameEl);
                    }

                    $container.append($item);

                    // Recursively render children
                    if (hasChildren) {
                        var $childContainer = $('<div class="albums-tree-children"></div>');
                        renderAlbumTreeNodes(album.children_recursive, $childContainer, depth + 1);
                        $container.append($childContainer);
                    }
                });
            };

            const flattenAlbumsTree = (albums, depth) => {
                depth = depth || 0;
                var result = [];
                albums.forEach(function(album) {
                    result.push({id: album.id, name: album.name, depth: depth});
                    if (album.children_recursive && album.children_recursive.length > 0) {
                        result = result.concat(flattenAlbumsTree(album.children_recursive, depth + 1));
                    }
                });
                return result;
            };

            let cachedAlbumsTreeData = [];

            const loadAlbumsTree = (page = 1, append = false, options = {}) => {
                const skipImagesReset = Boolean(options.skipImagesReset);
                if (!append) {
                    $albumsTree.html('');
                }

                axios.get('{{ route("user.albums") }}', { params: { tree: 1 } })
                    .then(function(response) {
                        if (!response.data.status) return;

                        var albums = response.data.data.albums || [];
                        cachedAlbumsTreeData = albums;
                        if (!append) {
                            $albumsTree.html('');
                        }
                        renderAlbumTreeNodes(albums, $albumsTree, 0);

                        // Auto-select remembered album
                        if (!append && selectedAlbum.id === undefined && albums.length > 0) {
                            var flatAlbums = flattenAlbumsTree(albums, 0);
                            var remembered = preferredAlbumId > 0
                                ? flatAlbums.find(function(item) { return Number(item.id) === preferredAlbumId; })
                                : null;
                            if (remembered) {
                                // Find the full album data
                                var findAlbum = function(list, id) {
                                    for (var i = 0; i < list.length; i++) {
                                        if (list[i].id === id) return list[i];
                                        if (list[i].children_recursive) {
                                            var found = findAlbum(list[i].children_recursive, id);
                                            if (found) return found;
                                        }
                                    }
                                    return null;
                                };
                                setSelectedAlbum(findAlbum(albums, remembered.id) || albums[0]);
                            } else {
                                setSelectedAlbum(albums[0]);
                            }
                            if (!skipImagesReset) {
                                resetImages({page: 1, album_id: selectedAlbum.id});
                            }
                        }

                        syncAlbumsTreeActive();

                        if (!append && albums.length === 0) {
                            imagesLoading = false;
                            syncImagesLoadingState();
                            syncImagesEmptyState();
                        }

                        if (options.onComplete) options.onComplete(albums);
                    })
                    .catch(function() {
                        // Fallback: if tree mode fails, load flat list (backward compatible)
                        loadAlbumsTreeFlat(page, append, options);
                    });
            };

            const loadAlbumsTreeFlat = (page = 1, append = false, options = {}) => {
                const skipImagesReset = Boolean(options.skipImagesReset);
                axios.get('{{ route('user.albums') }}', {params: {page: page}}).then(response => {
                    if (!response.data.status) return;

                    if (!append) {
                        $albumsTree.html('');
                    }

                    let albums = response.data.data.albums.data || [];
                    let html = '';
                    for (const i in albums) {
                        html += $('#albums-tree-item-tpl').html()
                            .replace(/__id__/g, albums[i].id)
                            .replace(/__name__/g, escapeHtml(albums[i].name))
                            .replace(/__intro__/g, escapeHtml(albums[i].intro || ''))
                            .replace(/__image_num__/g, albums[i].image_num)
                            .replace(/__json__/g, escapeHtml(JSON.stringify(albums[i])).replace(/\$/g, '$$$$'));
                    }
                    $albumsTree.append(html);

                    if (!append && selectedAlbum.id === undefined && albums.length > 0) {
                        const remembered = preferredAlbumId > 0
                            ? albums.find(item => Number(item.id) === preferredAlbumId)
                            : null;
                        setSelectedAlbum(remembered || albums[0]);
                        if (!skipImagesReset) {
                            resetImages({page: 1, album_id: selectedAlbum.id});
                        }
                    }

                    syncAlbumsTreeActive();

                    const current = response.data.data.albums.current_page;
                    const last = response.data.data.albums.last_page;
                    if (current < last) {
                        loadAlbumsTree(current + 1, true, options);
                    }
                    if (!append && albums.length === 0) {
                        imagesLoading = false;
                        syncImagesLoadingState();
                        syncImagesEmptyState();
                    }
                }).catch(() => {
                    imagesLoading = false;
                    syncImagesLoadingState();
                    syncImagesEmptyState();
                    toastr.error('相册加载失败');
                });
            };

            const openActionDialog = (target, mode, payload = {}) => {
                actionDialog = {target: target, mode: mode, payload: payload};
                const $title = $('#album-action-title');
                const $desc = $('#album-action-desc');
                const $inputWrap = $('#album-action-input-wrap');
                const $input = $('#album-action-input');
                const $tip = $('#album-action-delete-tip');
                const $submit = $('#album-action-submit');

                $desc.addClass('hidden').text('');
                $tip.addClass('hidden');
                $inputWrap.removeClass('hidden');
                $submit.removeClass('danger').addClass('confirm').text('确认');
                $input.val('');

                if (target === 'album') {
                    const album = payload.album || {};
                    if (mode === 'create') {
                        $title.text('新增相册');
                        $input.attr('placeholder', '请输入相册名称');
                        $submit.text('确认新增');
                        // Phase 1b: Add parent album selector
                        var $parentWrap = $('#album-parent-select-wrap');
                        if ($parentWrap.length === 0) {
                            $parentWrap = $('<div id="album-parent-select-wrap" style="margin-bottom:8px;"></div>');
                            $parentWrap.append('<select id="album-parent-select" class="album-search-input" style="width:100%;height:32px;"><option value="">顶级相册（根目录）</option></select>');
                            $inputWrap.prepend($parentWrap);
                        }
                        var $parentSelect = $('#album-parent-select');
                        $parentSelect.find('option:not(:first)').remove();
                        var flatList = flattenAlbumsTree(cachedAlbumsTreeData, 0);
                        flatList.forEach(function(a) {
                            var indent = '';
                            for (var d = 0; d < a.depth; d++) indent += '\u00A0\u00A0\u00A0\u00A0';
                            $parentSelect.append($('<option></option>').val(a.id).text(indent + a.name));
                        });
                        $parentWrap.show();
                    } else if (mode === 'rename') {
                        $title.text('重命名相册');
                        $input.attr('placeholder', '请输入相册名称').val(album.name || '');
                        $submit.text('确认重命名');
                        $('#album-parent-select-wrap').hide();
                    } else if (mode === 'delete') {
                        $title.text('删除相册');
                        $inputWrap.addClass('hidden');
                        $desc.removeClass('hidden').text(`确认删除 ${album.name || '-'}？`);
                        $tip.removeClass('hidden').text('删除后该相册中的图片会被移出。');
                        $submit.removeClass('confirm').addClass('danger').text('确认删除');
                        $('#album-parent-select-wrap').hide();
                    }
                } else if (target === 'image') {
                    const item = payload.item || {};
                    const ids = payload.ids || [];
                    if (mode === 'rename') {
                        $title.text('重命名图片');
                        $input.attr('placeholder', '请输入图片名称').val(item.filename || '');
                        $submit.text('确认重命名');
                    } else if (mode === 'delete') {
                        $title.text('删除图片');
                        $inputWrap.addClass('hidden');
                        $desc.removeClass('hidden').text(`确认删除选中的 ${ids.length} 张图片？`);
                        $tip.removeClass('hidden').text('删除后不可恢复，记录和文件将同时删除。');
                        $submit.removeClass('confirm').addClass('danger').text('确认删除');
                    }
                }

                modal.open('album-action-modal');
                if (mode !== 'delete') {
                    setTimeout(() => $input.trigger('focus'), 120);
                }
            };

            const openAlbumActionDialog = (mode, album = null) => openActionDialog('album', mode, {album});
            const openImageActionDialog = (mode, payload = {}) => openActionDialog('image', mode, payload);

            const findImageDataById = (id) => {
                const normalizedId = String(id);
                const current = currentImageRecords.find((item) => String(item.id) === normalizedId);
                if (current) {
                    return current;
                }

                return $photos.find(`${IMAGES_ITEM}[data-id="${normalizedId}"]`).data('json') || null;
            };

            const resolveImageSelectionPayload = (ids = []) => {
                const items = ids
                    .map((id) => findImageDataById(id))
                    .filter(Boolean);
                const keys = Array.from(new Set(items
                    .map((item) => String(item.key || '').trim())
                    .filter(Boolean)));

                return {items, keys};
            };

            const applyImageDeletion = (imageIds = []) => {
                const removeIds = new Set((imageIds || []).map((id) => String(id)));
                Object.keys(carouselDetailCache).forEach((cacheId) => {
                    if (removeIds.has(String(cacheId))) {
                        delete carouselDetailCache[cacheId];
                    }
                });

                let size = 0;
                $photos.find(IMAGES_ITEM).each(function () {
                    const id = String($(this).data('id'));
                    if (removeIds.has(id)) {
                        size += ($(this).data('json') || {}).size || 0;
                        $(this).remove();
                    }
                });

                utils.setCapacityProgress(-size);
                ds.clearSelection();
                bindOperates();
                $headerTitle.text('我的图片');

                if (imageViewMode === 'grid') {
                    $photos.justifiedGallery(gridConfigs).removeClass('reset');
                }

                loadAlbumsTree();
                if ($carousel.hasClass('show')) {
                    carouselItems = buildCarouselItems();
                    if (!carouselItems.length) {
                        closeCarousel();
                    } else {
                        carouselIndex = Math.min(carouselIndex, carouselItems.length - 1);
                        renderCarouselThumbs();
                        renderCarousel();
                    }
                }
            };

            const buildBatchDeleteRollbackUrl = (batchId) => batchDeleteRollbackUrlTemplate.replace('__BATCH_ID__', encodeURIComponent(batchId));

            const rollbackBatchDelete = async (batchId) => {
                const { data } = await axios.post(buildBatchDeleteRollbackUrl(batchId));
                if (!data?.status) {
                    throw new Error(data?.message || '批量删除回滚失败');
                }

                resetImages({
                    page: Math.max(1, Number(imagePagination.currentPage || 1)),
                    album_id: selectedAlbum.id || null,
                });

                return data.data || {};
            };

            const previewAndExecuteBatchDelete = async (imageIds = []) => {
                const { keys } = resolveImageSelectionPayload(imageIds);
                if (!keys.length) {
                    toastr.warning('未找到可删除图片 key');
                    return;
                }

                try {
                    const previewResponse = await axios.post(batchDeletePreviewUrl, {keys});
                    if (!previewResponse.data?.status) {
                        throw new Error(previewResponse.data?.message || '批量删除预演失败');
                    }

                    const preview = previewResponse.data.data || {};
                    const previewKeys = Array.isArray(preview.preview_keys) ? preview.preview_keys : [];
                    const confirmResult = await Swal.fire({
                        title: '批量删除预演',
                        html: `
                            <div style="text-align:left;display:grid;gap:8px;">
                                <div>请求数量：<strong>${preview.requested_count || keys.length}</strong></div>
                                <div>命中数量：<strong>${preview.affected_count || 0}</strong></div>
                                <div>缺失数量：<strong>${preview.missing_count || 0}</strong></div>
                                <div>预览 Key：<code style="white-space:normal;word-break:break-all;">${escapeHtml(previewKeys.join(', ') || '-')}</code></div>
                            </div>
                        `,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '确认批量删除',
                        cancelButtonText: '取消',
                    });
                    if (!confirmResult.isConfirmed) {
                        return;
                    }

                    const executeResponse = await axios.post(batchDeleteExecuteUrl, {
                        keys,
                        execute: true,
                    });
                    if (!executeResponse.data?.status) {
                        throw new Error(executeResponse.data?.message || '批量删除失败');
                    }

                    const result = executeResponse.data.data || {};
                    applyImageDeletion(imageIds);
                    toastr.success(executeResponse.data.message || '批量删除成功');

                    if (result.batch_id) {
                        const rollbackPrompt = await Swal.fire({
                            title: '批量删除已执行',
                            text: `已删除 ${result.deleted_count || imageIds.length} 张图片，可立即回滚本次删除。`,
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonText: '回滚本次批删',
                            cancelButtonText: '关闭',
                        });

                        if (rollbackPrompt.isConfirmed) {
                            const rollback = await rollbackBatchDelete(result.batch_id);
                            toastr.success(`回滚完成，恢复 ${rollback.restored_count || 0} 张图片`);
                        }
                    }
                } catch (error) {
                    toastr.error(error?.response?.data?.message || error?.message || '批量删除失败');
                }
            };

            const getAlbums = (options, callback) => {
                let title = '__title__ <i class="cursor-pointer fas fa-plus text-blue-500" onclick="$(\'#album-add\').toggleClass(\'hidden\')"></i>'.replace(/__title__/g, escapeHtml((options || {}).title || '我的相册'));
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
                                    .replace(/__name__/g, escapeHtml(albums[i].name))
                                    .replace(/__intro__/g, escapeHtml(albums[i].intro || ''))
                                    .replace(/__image_num__/g, albums[i].image_num)
                                    .replace(/__json__/g, escapeHtml(JSON.stringify(albums[i])))
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
                        setSelectedAlbum($(this).data('json'));
                        resetImages({page: 1, album_id: selectedAlbum.id || null});
                        syncAlbumsTreeActive();
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
                                .replace(/__name__/g, escapeHtml($item.find('>span').text()))
                                .replace(/__intro__/g, escapeHtml($item.attr('title') || ''))
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
                                    setSelectedAlbum({});
                                    resetImages();
                                    loadAlbumsTree();
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
                                loadAlbumsTree();
                            } else {
                                $errorMessage.html('<i class="fas fa-exclamation-circle"></i> ' + escapeHtml(response.data.message)).show();
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
                                loadAlbumsTree();
                            } else {
                                $errorMessage.html('<i class="fas fa-exclamation-circle"></i> ' + escapeHtml(response.data.message)).show();
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

            // Search: inline input
            $('#search').keydown(function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                    applySearch($(this).val());
                }
            }).on('input', function () {
                $('#search-clear').css('display', $(this).val() ? 'flex' : 'none');
            });
            $('#search-clear').click(function () {
                $('#search').val('').trigger('input').focus();
                applySearch('');
            });

            // Search: batch popover
            $('#search-expand').click(function (e) {
                e.stopPropagation();
                const $pop = $('#search-batch-popover');
                $pop.toggleClass('show');
                if ($pop.hasClass('show')) {
                    const current = $.trim($('#search').val());
                    if (current) {
                        $('#search-batch-input').val(current);
                    }
                    $('#search-batch-input').focus();
                }
            });
            $(document).on('click', function (e) {
                if (!$(e.target).closest('#search-batch-popover, #search-expand').length) {
                    $('#search-batch-popover').removeClass('show');
                }
            });
            $('#search-batch-input').keydown(function (e) {
                if (e.keyCode === 13 && (e.ctrlKey || e.metaKey)) {
                    e.preventDefault();
                    $('#search-batch-submit').click();
                }
            });
            $('#search-batch-submit').click(function () {
                const raw = $.trim($('#search-batch-input').val());
                if (!raw) return;
                const terms = raw.split(/\n/).map(s => s.trim()).filter(Boolean);
                const keyword = terms.join(',');
                $('#search').val(keyword);
                $('#search-batch-popover').removeClass('show');
                applySearch(keyword);
            });

            // Search mode toggle (in batch popover)
            $searchModeToggle.click(function () {
                imageSearchMode = imageSearchMode === 'ai' ? 'normal' : 'ai';
                syncSearchModeState();
                const keyword = $.trim($('#search').val());
                if (keyword) {
                    applySearch(keyword);
                }
            });

            $albumsTree.on('click', '.albums-tree-item', function (e) {
                if ($(e.target).closest('.albums-tree-toggle').length) return;
                setSelectedAlbum($(this).data('json'));
                syncAlbumsTreeActive();
                resetImages({page: 1, album_id: selectedAlbum.id || null});
            });
            // Album tree toggle (expand/collapse children)
            $albumsTree.on('click', '.albums-tree-toggle', function(e) {
                e.stopPropagation();
                e.preventDefault();
                var $toggle = $(this);
                $toggle.toggleClass('is-open');
                var $children = $toggle.closest('.albums-tree-item').next('.albums-tree-children');
                $children.toggleClass('is-collapsed');
            });


            // ==================== Album Share Dialog ====================
            const $shareDialog = $('#album-share-dialog');
            const $shareAlbumName = $('#share-album-name');
            const $shareUserSearch = $('#share-user-search');
            const $shareUserResults = $('#share-user-results');
            const $shareCurrentList = $('#share-current-list');
            const $shareNoUsers = $('#share-no-users');
            let shareAlbumId = null;

            function openShareDialog(album) {
                shareAlbumId = album.id;
                $shareAlbumName.text(album.name);
                $shareUserSearch.val('');
                $shareUserResults.hide().empty();
                loadCurrentShares();
                $shareDialog.show();
            }

            function loadCurrentShares() {
                $shareCurrentList.empty();
                $shareNoUsers.hide();
                axios.get('/admin/albums/' + shareAlbumId + '/shares')
                    .then(function(res) {
                        var shares = res.data.data || [];
                        if (shares.length === 0) {
                            $shareNoUsers.show();
                            return;
                        }
                        shares.forEach(function(share) {
                            var userName = share.user ? (share.user.name || share.user.email) : 'Unknown';
                            var permLabel = share.permission === 'download' ? '可下载' : '仅查看';
                            $shareCurrentList.append(
                                '<div class="share-current-item" data-user-id="' + share.user_id + '">' +
                                '<i class="fas fa-user" style="color:#94a3b8;font-size:11px;"></i>' +
                                '<span class="share-current-name">' + escapeHtml(userName) + '</span>' +
                                '<span class="share-current-perm">' + permLabel + '</span>' +
                                '<button type="button" class="share-current-remove" title="取消共享"><i class="fas fa-times"></i></button>' +
                                '</div>'
                            );
                        });
                    })
                    .catch(function() {
                        if (typeof toastr !== 'undefined') toastr.error('加载共享信息失败');
                    });
            }

            // Close share dialog
            $('#share-dialog-close').click(function() { $shareDialog.hide(); });
            $shareDialog.click(function(e) { if (e.target === this) $(this).hide(); });

            // Search users
            let shareSearchTimer = null;
            $shareUserSearch.on('input', function() {
                var keyword = $.trim($(this).val());
                clearTimeout(shareSearchTimer);
                if (!keyword) {
                    $shareUserResults.hide().empty();
                    return;
                }
                shareSearchTimer = setTimeout(function() {
                    axios.get('/admin/share-users', { params: { keyword: keyword } })
                        .then(function(res) {
                            var users = res.data.data || [];
                            $shareUserResults.empty();
                            if (users.length === 0) {
                                $shareUserResults.append('<div class="share-user-option" style="cursor:default;color:#94a3b8;">未找到用户</div>');
                            } else {
                                users.forEach(function(u) {
                                    $shareUserResults.append(
                                        '<div class="share-user-option" data-user-id="' + u.id + '">' +
                                        '<i class="fas fa-user" style="color:#94a3b8;font-size:11px;"></i>' +
                                        '<span>' + escapeHtml(u.name || '') + '</span>' +
                                        '<span class="user-email">' + escapeHtml(u.email || '') + '</span>' +
                                        '</div>'
                                    );
                                });
                            }
                            $shareUserResults.show();
                        });
                }, 300);
            });

            // Click user to share
            $shareUserResults.on('click', '.share-user-option[data-user-id]', function() {
                var userId = $(this).data('user-id');
                if (!userId || !shareAlbumId) return;
                axios.post('/admin/albums/' + shareAlbumId + '/shares', {
                    user_id: userId,
                    permission: 'view'
                })
                .then(function(res) {
                    if (typeof toastr !== 'undefined') toastr.success(res.data.message || '共享成功');
                    $shareUserSearch.val('');
                    $shareUserResults.hide().empty();
                    loadCurrentShares();
                })
                .catch(function(err) {
                    var msg = err.response && err.response.data && err.response.data.message ? err.response.data.message : '共享失败';
                    if (typeof toastr !== 'undefined') toastr.error(msg);
                });
            });

            // Remove share
            $shareCurrentList.on('click', '.share-current-remove', function() {
                var userId = $(this).closest('.share-current-item').data('user-id');
                if (!userId || !shareAlbumId) return;
                axios.delete('/admin/albums/' + shareAlbumId + '/shares/' + userId)
                .then(function(res) {
                    if (typeof toastr !== 'undefined') toastr.success(res.data.message || '已取消共享');
                    loadCurrentShares();
                })
                .catch(function() {
                    if (typeof toastr !== 'undefined') toastr.error('操作失败');
                });
            });

            $albumsTree.on('click', '.albums-tree-action', function (e) {
                e.preventDefault();
                e.stopPropagation();
                const $item = $(this).closest(ALBUM_TREE_ITEM);
                const album = $item.data('json');
                if (!album || !album.id) return;

                if ($(this).hasClass('share')) {
                    openShareDialog(album);
                    return;
                }

                if ($(this).hasClass('edit')) {
                    openAlbumActionDialog('rename', album);
                    return;
                }

                if ($(this).hasClass('delete')) {
                    openAlbumActionDialog('delete', album);
                }
            });

            $('#album-action-form').submit(function (e) {
                e.preventDefault();
                const mode = actionDialog.mode;
                const target = actionDialog.target;
                const payload = actionDialog.payload || {};
                const album = payload.album || {};
                const image = payload.item || {};
                const imageIds = payload.ids || [];
                const $submit = $('#album-action-submit');
                const name = $.trim($('#album-action-input').val());
                let request = null;

                if (target === 'album' && mode === 'create') {
                    if (!name) {
                        toastr.warning('相册名称不能为空');
                        return;
                    }
                    var createData = {name: name, intro: ''};
                    var parentId = $('#album-parent-select').val();
                    if (parentId) createData.parent_id = Number(parentId);
                    request = axios.post('/user/albums', createData);
                } else if (target === 'album' && mode === 'rename') {
                    if (!album.id) return;
                    if (!name) {
                        toastr.warning('相册名称不能为空');
                        return;
                    }
                    request = axios.put(`/user/albums/${album.id}`, {
                        name: name,
                        intro: album.intro || '',
                    });
                } else if (target === 'album' && mode === 'delete') {
                    if (!album.id) return;
                    request = axios.delete(`/user/albums/${album.id}`);
                } else if (target === 'image' && mode === 'rename') {
                    if (!image.id) return;
                    if (!name) {
                        toastr.warning('图片名称不能为空');
                        return;
                    }
                    request = axios.put('{{ route('user.images.rename') }}', {
                        id: image.id,
                        name: name,
                    });
                } else if (target === 'image' && mode === 'delete') {
                    if (!imageIds.length) return;
                    request = axios.delete('{{ route('user.images.delete') }}', {
                        data: imageIds,
                    });
                } else {
                    return;
                }

                $submit.prop('disabled', true);
                request.then(response => {
                    if (response.data.status) {
                        if (target === 'album' && mode === 'rename' && selectedAlbum.id === album.id) {
                            selectedAlbum.name = name;
                        }
                        if (target === 'album' && mode === 'delete' && selectedAlbum.id === album.id) {
                            setSelectedAlbum({});
                            resetImages({page: 1, album_id: selectedAlbum.id || null});
                        }
                        if (target === 'album') {
                            loadAlbumsTree();
                        }
                        if (target === 'image' && mode === 'rename' && payload.element) {
                            $(payload.element).find('p.filename')
                                .attr('title', response.data.data.filename)
                                .text(response.data.data.filename);
                            let item = $(payload.element).data('json');
                            item.filename = response.data.data.filename;
                            $(payload.element).data('json', item);
                        }
                        if (target === 'image' && mode === 'rename') {
                            if (carouselDetailCache[image.id]) {
                                carouselDetailCache[image.id].filename = response.data.data.filename;
                            }
                            carouselItems = carouselItems.map(item => {
                                if (String(item.id) === String(image.id)) {
                                    return {...item, filename: response.data.data.filename};
                                }
                                return item;
                            });
                            if ($carousel.hasClass('show')) {
                                renderCarousel();
                                renderCarouselThumbs();
                            }
                        }
                        if (target === 'image' && mode === 'delete') {
                            applyImageDeletion(imageIds);
                        }
                        modal.close('album-action-modal');
                        actionDialog = {target: null, mode: null, payload: {}};
                        toastr.success(response.data.message);
                    } else {
                        toastr.warning(response.data.message);
                    }
                }).finally(() => $submit.prop('disabled', false));
            });

            $('#album-action-modal').on('click', function (e) {
                const isBackdrop = e.target.id === 'album-action-modal';
                if (isBackdrop) {
                    actionDialog = {target: null, mode: null, payload: {}};
                }
            });

            $('#refresh-album-tree').click(() => loadAlbumsTree());
            $('#toggle-album-create').click(() => openAlbumActionDialog('create'));

            // Album tree search
            $('#toggle-album-search').click(function() {
                const $bar = $('#album-search-bar');
                $bar.toggle();
                if ($bar.is(':visible')) {
                    $('#album-search-input').val('').focus();
                }
            });

            $('#album-search-input').on('input', function() {
                const keyword = $.trim($(this).val()).toLowerCase();
                if (!keyword) {
                    // Show everything, expand all
                    $('#albums-tree-list .albums-tree-item').show();
                    $('#albums-tree-list .albums-tree-children').show().removeClass('is-collapsed');
                    $('#albums-tree-list .albums-tree-toggle').addClass('is-open');
                    return;
                }
                // First hide all items and children containers
                $('#albums-tree-list .albums-tree-item').hide();
                $('#albums-tree-list .albums-tree-children').hide();
                // Find matching items and show them + their parent chain
                $('#albums-tree-list .albums-tree-item').each(function() {
                    const name = $(this).find('.albums-tree-name').text().toLowerCase();
                    if (name.indexOf(keyword) !== -1) {
                        $(this).show();
                        // Show all parent containers
                        $(this).parents('.albums-tree-children').each(function() {
                            $(this).show().removeClass('is-collapsed');
                            $(this).prev('.albums-tree-item').show()
                                .find('.albums-tree-toggle').addClass('is-open');
                        });
                        // Also show direct children container if any
                        $(this).next('.albums-tree-children').show().removeClass('is-collapsed')
                            .find('.albums-tree-item').show();
                    }
                });
            });
            $('#images-carousel-close').click(() => closeCarousel());
            $('#images-carousel-next').click(() => carouselNext());
            $('#images-carousel-prev').click(() => carouselPrev());
            $carouselRename.click(() => {
                if (!carouselItems.length) return;
                const item = carouselItems[carouselIndex];
                const $itemEl = $photos.find(`${IMAGES_ITEM}[data-id="${item.id}"]`).first();
                openImageActionDialog('rename', {
                    element: $itemEl.get(0),
                    item: {id: item.id, filename: item.filename},
                });
            });
            $carouselDelete.click(() => {
                if (!carouselItems.length) return;
                const item = carouselItems[carouselIndex];
                openImageActionDialog('delete', {ids: [item.id]});
            });
            $carouselEdit.click(() => startCarouselCrop());
            $carouselCropReset.click(() => setCarouselCropPreset(null));
            $carouselCropSquare.click(() => setCarouselCropPreset(1));
            $carouselCropLandscape.click(() => setCarouselCropPreset(16 / 9));
            $carouselCropPortrait.click(() => setCarouselCropPreset(4 / 5));
            $carouselRotateLeft.click(() => runCarouselProcess({transform: {rotate: -90}}, '左旋90°'));
            $carouselRotateRight.click(() => runCarouselProcess({transform: {rotate: 90}}, '右旋90°'));
            $carouselFlipHorizontal.click(() => runCarouselProcess({transform: {flip: 'horizontal'}}, '水平镜像'));
            $carouselFlipVertical.click(() => runCarouselProcess({transform: {flip: 'vertical'}}, '垂直镜像'));
            $carouselFilterClarity.click(() => runCarouselProcess({filters: {sharpen: 1.8, contrast: 18}}, '清晰增强'));
            $carouselFilterGrayscale.click(() => runCarouselProcess({filters: {grayscale: true, contrast: 12}}, '黑白胶片'));
            $carouselFilterSoften.click(() => runCarouselProcess({filters: {blur: 1.2, contrast: -8}}, '柔和降噪'));
            $carouselWatermark.click(() => openCarouselWatermarkDialog());
            $carouselRevert.click(() => revertCarouselPreview());
            $carouselCropCancel.click(() => setCarouselCropMode(false));
            $carouselCropApply.click(() => applyCarouselCrop());
            const sleep = (ms) => new Promise(resolve => window.setTimeout(resolve, ms));
            const pollAiPromptTask = async (taskId, timeoutMs = 90000, intervalMs = 1000) => {
                const begin = Date.now();
                while (Date.now() - begin < timeoutMs) {
                    const response = await axios.get(`/advanced-api/ai/prompt-tasks/${encodeURIComponent(taskId)}`);
                    const body = response?.data || {};
                    if (!body.status) {
                        throw new Error(body.message || '任务查询失败');
                    }
                    const payload = body.data || {};
                    const task = payload.task || payload || {};
                    const status = String(task.status || '').toLowerCase();
                    if (status === 'success') {
                        return task;
                    }
                    if (status === 'failed') {
                        throw new Error(task.error_message || '任务执行失败');
                    }
                    await sleep(intervalMs);
                }
                throw new Error('任务超时，请稍后重试');
            };
            $carouselAi.click(async () => {
                if (!carouselItems.length) return;
                const item = carouselItems[carouselIndex];
                if (!item?.key) {
                    toastr.warning('当前图片缺少 key，无法生成提示词');
                    return;
                }

                const promptInput = await Swal.fire({
                    title: 'AI 提示词任务',
                    input: 'textarea',
                    inputPlaceholder: '请输入你希望 AI 生成提示词的意图',
                    inputValue: '请理解这张图片并生成可直接用于文生图的中文提示词，包含主体、场景、光线、构图与风格。',
                    showCancelButton: true,
                    confirmButtonText: '提交任务',
                    cancelButtonText: '取消',
                    inputValidator: (value) => !$.trim(value || '') ? '意图不能为空' : null,
                });

                if (!promptInput.isConfirmed) return;
                const intent = $.trim(promptInput.value || '');
                if (!intent) return;

                try {
                    toastr.info('任务提交中...');
                    const response = await axios.post('/advanced-api/ai/prompt-tasks', {
                        key: item.key,
                        intent: intent,
                        template: '',
                        language: 'zh-CN',
                        style: '专业、简洁、可执行',
                    });
                    if (!response.data.status) {
                        toastr.warning(response.data.message || '任务提交失败');
                        return;
                    }
                    const payload = response.data.data || {};
                    const taskId = String(payload.task_id || payload?.task?.task_id || '').trim();
                    if (!taskId) {
                        toastr.warning('任务ID缺失，无法继续执行');
                        return;
                    }

                    toastr.info('AI 提示词任务执行中...');
                    const task = await pollAiPromptTask(taskId);
                    const taskResult = task.result || {};
                    const provider = taskResult.provider || {};
                    const prompt = String(taskResult.prompt || '').trim();
                    const safePrompt = prompt
                        .replace(/&/g, '&amp;')
                        .replace(/</g, '&lt;')
                        .replace(/>/g, '&gt;')
                        .replace(/"/g, '&quot;')
                        .replace(/'/g, '&#39;');
                    const providerText = [provider.label || provider.provider || '', provider.model || ''].filter(Boolean).join(' · ');
                    const safeProviderText = providerText
                        .replace(/&/g, '&amp;')
                        .replace(/</g, '&lt;')
                        .replace(/>/g, '&gt;')
                        .replace(/"/g, '&quot;')
                        .replace(/'/g, '&#39;');

                    const res = await Swal.fire({
                        title: 'AI 提示词结果',
                        html: `
                            <div style="display:grid;gap:10px;text-align:left;">
                                <div style="font-size:12px;color:#64748b;">${safePrompt && providerText ? safeProviderText : ''}</div>
                                <textarea id="sw-ai-prompt-result" style="width:100%;min-height:220px;border:1px solid #d1d5db;border-radius:8px;padding:10px;font-size:13px;line-height:1.7;">${safePrompt}</textarea>
                            </div>
                        `,
                        showCancelButton: true,
                        confirmButtonText: '复制并关闭',
                        cancelButtonText: '关闭',
                        width: 780,
                    });
                    if (res.isConfirmed && prompt) {
                        navigator.clipboard.writeText(prompt).then(() => {
                            toastr.success('提示词已复制');
                        }).catch(() => {
                            toastr.warning('复制失败');
                        });
                    }
                } catch (e) {
                    toastr.error(e?.response?.data?.message || e?.message || '提示词任务失败');
                }
            });
            $carouselImg.on('load', function () {
                $(this).removeClass('is-loading');
                $carouselLoading.removeClass('show');
                if (carouselCropState.active) {
                    syncCarouselCropLayer(!carouselCropState.rect);
                }
            }).on('error', function () {
                const item = carouselItems[carouselIndex];
                if (item && item.thumb) {
                    $(this).attr('src', item.thumb).removeClass('is-loading');
                } else {
                    $(this).removeClass('is-loading');
                }
                $carouselLoading.removeClass('show');
            });
            // Zoom controls
            $('#images-carousel .images-carousel-zoom-controls').on('click', '.zoom-btn', function (e) {
                e.stopPropagation();
                const action = $(this).data('zoom');
                if (action === 'in') {
                    carouselZoom.scale = Math.min(carouselZoom.scale * 1.3, 5);
                } else if (action === 'out') {
                    carouselZoom.scale = Math.max(carouselZoom.scale / 1.3, 0.5);
                    if (Math.abs(carouselZoom.scale - 1) < 0.05) {
                        carouselZoom.scale = 1;
                        carouselZoom.translateX = 0;
                        carouselZoom.translateY = 0;
                    }
                } else if (action === 'original') {
                    ensureCarouselOriginalImage();
                    return;
                } else if (action === 'reset') {
                    carouselZoom.scale = 1;
                    carouselZoom.translateX = 0;
                    carouselZoom.translateY = 0;
                }
                applyCarouselZoom();
            });
            // Mouse wheel zoom
            $('#images-carousel .images-carousel-image-frame').on('wheel', function (e) {
                e.preventDefault();
                const delta = e.originalEvent.deltaY > 0 ? 0.9 : 1.1;
                carouselZoom.scale = Math.min(Math.max(carouselZoom.scale * delta, 0.5), 5);
                if (Math.abs(carouselZoom.scale - 1) < 0.05) {
                    carouselZoom.scale = 1;
                    carouselZoom.translateX = 0;
                    carouselZoom.translateY = 0;
                }
                applyCarouselZoom();
            });
            // Drag to pan when zoomed
            $('#images-carousel .images-carousel-image-frame').on('pointerdown', function (e) {
                if (carouselZoom.scale <= 1 || e.button !== 0) return;
                if ($(e.target).closest('.zoom-btn, .images-carousel-btn').length) return;
                carouselZoom.dragging = true;
                carouselZoom.startX = e.clientX - carouselZoom.translateX * carouselZoom.scale;
                carouselZoom.startY = e.clientY - carouselZoom.translateY * carouselZoom.scale;
                $(this).addClass('is-dragging');
                e.preventDefault();
            });
            $(document).on('pointermove.carouselZoom', function (e) {
                if (!carouselZoom.dragging) return;
                carouselZoom.translateX = (e.clientX - carouselZoom.startX) / carouselZoom.scale;
                carouselZoom.translateY = (e.clientY - carouselZoom.startY) / carouselZoom.scale;
                applyCarouselZoom();
            });
            $(document).on('pointerup.carouselZoom', function () {
                if (!carouselZoom.dragging) return;
                carouselZoom.dragging = false;
                $('#images-carousel .images-carousel-image-frame').removeClass('is-dragging');
            });
            // Double-click to toggle zoom
            $('#images-carousel .images-carousel-img').on('dblclick', function () {
                if (carouselZoom.scale > 1) {
                    resetCarouselZoom();
                } else {
                    carouselZoom.scale = 2;
                    applyCarouselZoom();
                }
            });
            $carouselCropLayer.on('pointerdown', function (e) {
                if (!carouselCropState.active || e.button !== 0) return;
                const layerRect = this.getBoundingClientRect();
                const startX = e.clientX - layerRect.left;
                const startY = e.clientY - layerRect.top;
                const $target = $(e.target);
                const handle = String($target.data('handle') || '');

                carouselCropState.pointerStart = {x: startX, y: startY};
                carouselCropState.startRect = {...(carouselCropState.rect || {x: 0, y: 0, width: 120, height: 120})};
                carouselCropState.pointerId = e.pointerId;
                carouselCropState.handle = handle;
                carouselCropState.drawing = false;
                carouselCropState.resizing = handle !== '';
                carouselCropState.dragging = !carouselCropState.resizing && $target.closest('#images-carousel-crop-box').length > 0;

                if (!carouselCropState.dragging && !carouselCropState.resizing) {
                    carouselCropState.startRect = null;
                    carouselCropState.rect = null;
                    carouselCropState.drawing = true;
                    $carouselCropBox.removeAttr('style');
                } else {
                    renderCropBox();
                }

                this.setPointerCapture?.(e.pointerId);
                e.preventDefault();
            });
            $(document).on('pointermove', function (e) {
                if (!carouselCropState.active || (!carouselCropState.drawing && !carouselCropState.dragging && !carouselCropState.resizing) || !carouselCropState.pointerStart) {
                    return;
                }
                if (carouselCropState.pointerId !== null && e.pointerId !== carouselCropState.pointerId) return;

                const bounds = getCarouselCropBounds();
                if (!bounds.width || !bounds.height) return;
                const layerRect = $carouselCropLayer.get(0).getBoundingClientRect();
                const currentX = e.clientX - layerRect.left;
                const currentY = e.clientY - layerRect.top;
                const dx = currentX - carouselCropState.pointerStart.x;
                const dy = currentY - carouselCropState.pointerStart.y;
                const start = carouselCropState.startRect ? {...carouselCropState.startRect} : null;
                let rect = carouselCropState.rect ? {...carouselCropState.rect} : null;

                if (carouselCropState.dragging) {
                    if (!start) return;
                    rect = clampCropRect({
                        x: start.x + dx,
                        y: start.y + dy,
                        width: start.width,
                        height: start.height,
                    }, bounds, carouselCropState.aspectRatio);
                } else if (carouselCropState.resizing) {
                    if (!start) return;
                    rect = buildCropRectFromResize(
                        carouselCropState.handle,
                        start,
                        {x: currentX, y: currentY},
                        bounds,
                        carouselCropState.aspectRatio
                    );
                } else if (carouselCropState.drawing) {
                    rect = buildCropRectFromDraw(
                        carouselCropState.pointerStart,
                        {x: currentX, y: currentY},
                        bounds,
                        carouselCropState.aspectRatio
                    );
                }

                if (!rect) return;
                carouselCropState.rect = rect;
                renderCropBox();
                e.preventDefault();
            });
            $(document).on('pointerup pointercancel', function (e) {
                if (!carouselCropState.active) return;
                if (carouselCropState.pointerId !== null && e.pointerId !== carouselCropState.pointerId) return;
                if (carouselCropState.drawing && !carouselCropState.rect) {
                    syncCarouselCropLayer(true);
                }
                $carouselCropLayer.get(0)?.releasePointerCapture?.(carouselCropState.pointerId);
                carouselCropState.drawing = false;
                carouselCropState.dragging = false;
                carouselCropState.resizing = false;
                carouselCropState.handle = '';
                carouselCropState.pointerStart = null;
                carouselCropState.startRect = null;
                carouselCropState.pointerId = null;
            });
            $(window).on('resize', function () {
                if (carouselCropState.active) {
                    syncCarouselCropLayer(false);
                }
            });
            $('#images-carousel-stage').on('touchstart', function (e) {
                if (carouselCropState.active) return;
                touchStartX = e.originalEvent.touches?.[0]?.clientX ?? null;
            }).on('touchend', function (e) {
                if (carouselCropState.active) return;
                const endX = e.originalEvent.changedTouches?.[0]?.clientX ?? null;
                if (touchStartX === null || endX === null || !carouselItems.length) return;
                const delta = endX - touchStartX;
                if (Math.abs(delta) < 40) return;
                if (delta < 0) {
                    carouselNext();
                } else {
                    carouselPrev();
                }
                touchStartX = null;
            });
            $('#images-carousel').click(function (e) {
                if (e.target.id === 'images-carousel') {
                    closeCarousel();
                }
            });
            $carouselThumbs.on('click', '.images-carousel-thumb', function () {
                const idx = Number($(this).data('index'));
                if (Number.isNaN(idx) || idx < 0 || idx >= carouselItems.length) return;
                carouselIndex = normalizeCarouselIndex(idx, carouselItems.length);
                renderCarousel();
            });
            $carouselDetail.on('click', '.images-carousel-detail-copy', function () {
                const url = String($(this).data('url') || '').trim();
                if (!url) return;
                copyText(url).then(() => {
                    toastr.success('链接已复制', null, {timeOut: 2200, extendedTimeOut: 0});
                }).catch(() => {
                    toastr.warning('复制失败', null, {timeOut: 2200, extendedTimeOut: 0});
                });
            }).on('click', '[data-action="retry-detail"]', function () {
                const item = getCurrentCarouselItem();
                if (!item?.id) return;
                delete carouselDetailCache[item.id];
                renderCarouselDetail(null);
                fetchCarouselDetail(item.id);
            });
            $(document).on('keydown', function (e) {
                if (!$carousel.hasClass('show')) return;
                if (e.key === 'Escape') {
                    e.preventDefault();
                    if (carouselCropState.active) {
                        setCarouselCropMode(false);
                    } else {
                        closeCarousel();
                    }
                } else if (e.key === 'ArrowRight') {
                    if (carouselCropState.active) return;
                    e.preventDefault();
                    carouselNext();
                } else if (e.key === 'ArrowLeft') {
                    if (carouselCropState.active) return;
                    e.preventDefault();
                    carouselPrev();
                }
            });
            $('#toolbar-upload-input').on('change', async function () {
                const files = Array.from(this.files || []);
                if (!files.length) return;

                const $uploadBtns = $('[data-operate="upload"]');
                $uploadBtns.addClass('is-disabled');

                const uploadQueue = files.map(file => ({
                    guid: utils.guid(),
                    file: file,
                    objectUrl: URL.createObjectURL(file),
                }));
                let placeholders = '';
                uploadQueue.forEach(item => {
                    placeholders += renderUploadingPlaceholderHtml(item.guid, item.file, item.objectUrl);
                });
                $photos.prepend(placeholders);
                if (imageViewMode === 'grid') {
                    $photos.justifiedGallery(gridConfigs).removeClass('reset');
                    $photos.justifiedGallery('norewind');
                }

                let success = 0;
                let failed = 0;
                const failedItems = [];
                const uploadOne = async (item) => {
                    const formData = new FormData();
                    formData.append('file', item.file);
                    if (selectedAlbum?.id) {
                        formData.append('album_id', String(selectedAlbum.id));
                    }
                    const ext = String((item.file?.name || '').split('.').pop() || '').toLowerCase();
                    try {
                        const response = await axios.post('{{ route('upload') }}', formData, {
                            headers: {'Content-Type': 'multipart/form-data'},
                            onUploadProgress: (e) => {
                                const total = Number(e.total || item.file.size || 0);
                                const loaded = Number(e.loaded || 0);
                                const percent = total > 0 ? Math.round((loaded / total) * 100) : 0;
                                updateUploadingPlaceholder(item.guid, percent, `上传中 · ${percent}%`);
                            },
                        });
                        if (response.data.status) {
                            success += 1;
                            utils.setCapacityProgress(response.data.data.size || 0);
                            markUploadingPlaceholderState(item.guid, true, '上传成功 · 100%');
                            const uploaded = response.data?.data || null;
                            const replaced = replaceUploadPlaceholderByImage(item.guid, uploaded);
                            if (replaced) {
                                URL.revokeObjectURL(item.objectUrl);
                            }
                        } else {
                            failed += 1;
                            const reason = response?.data?.message || '未知错误';
                            markUploadingPlaceholderState(item.guid, false, `上传失败 · ${reason}`);
                            failedItems.push(`${item.file.name} [${ext || '-'}]: ${reason}`);
                        }
                    } catch (e) {
                        failed += 1;
                        const reason = e?.response?.data?.message || e?.message || '网络或服务异常';
                        markUploadingPlaceholderState(item.guid, false, `上传失败 · ${reason}`);
                        failedItems.push(`${item.file.name} [${ext || '-'}]: ${reason}`);
                    }
                };

                let nextUploadIndex = 0;
                const workerCount = Math.min(MAX_PARALLEL_UPLOADS, uploadQueue.length);
                await Promise.all(Array.from({length: workerCount}, async () => {
                    while (nextUploadIndex < uploadQueue.length) {
                        const currentIndex = nextUploadIndex++;
                        const item = uploadQueue[currentIndex];
                        if (!item) continue;
                        await uploadOne(item);
                    }
                }));

                this.value = '';
                $uploadBtns.removeClass('is-disabled');
                if (success > 0) {
                    loadAlbumsTree(1, false, {skipImagesReset: true});
                    toastr.success(`上传成功 ${success} 张`);
                }
                if (failed > 0) {
                    toastr.warning(`上传失败 ${failed} 个文件`);
                    failedItems.slice(0, 6).forEach(msg => toastr.error(msg, null, {timeOut: 5000}));
                    if (failedItems.length > 6) {
                        toastr.info(`还有 ${failedItems.length - 6} 个失败项，请查看占位卡片中的失败原因`);
                    }
                }
            });

            $('[data-view]').click(function () {
                setViewMode($(this).data('view'));
            });
            $infiniteScrollToggle.change(function () {
                infiniteScrollEnabled = this.checked;
                localStorage.setItem(IMAGES_INFINITE_SCROLL_KEY, infiniteScrollEnabled ? "true" : "false");
                syncPagination();
                if (!infiniteScrollEnabled) {
                    resetImages({page: 1});
                }
            });
            $pageSize.change(function () {
                setPageSize($(this).val());
            });
            $pagePrev.click(function () {
                if (imagePagination.currentPage <= 1) return;
                resetImages({page: imagePagination.currentPage - 1});
            });
            $pageNext.click(function () {
                if (imagePagination.currentPage >= imagePagination.lastPage) return;
                resetImages({page: imagePagination.currentPage + 1});
            });
            $pageGo.click(function () {
                const target = Number($pageJump.val() || 0);
                if (!Number.isInteger(target) || target < 1) {
                    toastr.warning('请输入正确页码');
                    return;
                }
                const page = Math.min(target, imagePagination.lastPage || 1);
                resetImages({page: page});
            });
            $pageJump.on('keydown keypress', function (e) {
                if (e.key === 'Enter' || e.which === 13) {
                    e.preventDefault();
                    $pageGo.trigger('click');
                }
            });
            $imagesRetry.click(function () {
                resetImages({page: imageFilters.page || 1});
            });
            $(IMAGES_SCROLL).on('scroll', function () {
                const remain = this.scrollHeight - this.scrollTop - this.clientHeight;
                if (remain <= 60) {
                    loadMoreImagesByScroll();
                }
            });

            setViewMode(imageViewMode, false);
            syncPageSizeState();
            syncSearchModeState();
            syncPagination();
            syncImagesErrorState();
            syncImagesEmptyState();
            syncImagesToolbarState();
            loadAlbumsTree();

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
                immediateDrag: false,
            });

            const bindOperates = () => {
                let selected = ds.getSelection();
                if (selected.length) {
                    $headerTitle.text(`已选择 ${selected.length} 张图片`);
                } else {
                    $headerTitle.text('我的图片');
                }

                const canSingle = selected.length === 1;
                const canMulti = selected.length > 1;
                const canAny = selected.length > 0;
                const hasItems = $photos.find(IMAGES_ITEM).length > 0;
                const isAllSelected = hasItems && selected.length === $photos.find(IMAGES_ITEM).length;

                const state = {
                    upload: true,
                    refresh: true,
                    select_all: hasItems,
                    movements: canAny,
                    permission: canAny,
                    detail: canSingle,
                    rename: canSingle,
                    batch_delete: canAny,
                    delete: canAny,
                };

                Object.keys(state).forEach((key) => {
                    const enabled = state[key];
                    $(`[data-operate="${key}"]`).each(function () {
                        if ($(this).is('button')) {
                            $(this).prop('disabled', !enabled).toggleClass('is-disabled', !enabled);
                        } else {
                            $(this).toggleClass('opacity-40 pointer-events-none', !enabled);
                            $(this).attr('aria-disabled', enabled ? 'false' : 'true');
                        }
                    });
                });

                $('[data-operate="select_all"]').text(isAllSelected ? '反选' : '全选');
            };

            ds.subscribe('predragstart', ({ event }) => {
                if (utils.isMobile()) {
                    ds.stop();
                }

                const $target = $(event.target);
                if (!$(event.target).closest(IMAGES_SCROLL).length) {
                    ds.break();
                    return;
                }

                // 点击图片主体只触发预览，不进入 DragSelect 的选中链路
                if ($target.closest('.image-selector').length > 0) {
                    return;
                }
                if ($target.closest('.list-op-btn').length > 0) {
                    ds.break();
                    return;
                }
                if ($target.closest(`${IMAGES_ITEM} img, ${IMAGES_ITEM} .image-mask`).length > 0) {
                    ds.break();
                }
            });
            ds.subscribe('elementselect', _ => bindOperates());
            ds.subscribe('elementunselect', _ => bindOperates());

            $photos.on('pointerdown', '.image-selector', function (e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                const element = $(this).closest(IMAGES_ITEM).get(0);
                if (!element) return false;
                if ($(element).hasClass('ds-selected')) {
                    ds.removeSelection(element);
                } else {
                    ds.addSelection(element);
                }
                bindOperates();
                return false;
            });

            $photos.on('click', '.image-selector', function (e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                return false;
            });

            bindOperates();
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

            const getOperateTargets = () => ds.getSelection();

            const methods = {
                upload() {
                    $('#toolbar-upload-input').trigger('click');
                },
                select_all() {
                    const $items = $(IMAGES_ITEM);
                    if (!$items.length) {
                        toastr.warning('当前页暂无可选图片');
                        return;
                    }
                    const selected = ds.getSelection();
                    const isAllSelected = selected.length === $items.length;
                    if (isAllSelected) {
                        ds.clearSelection();
                    } else {
                        ds.setSelection($items);
                    }
                    bindOperates();
                },
                movements() {
                    getAlbums({title: '选择相册'}, e => {
                        let selected = getOperateTargets().map(item => $(item).data('id'));
                        if (!selected.length) {
                            toastr.warning('请先选择图片');
                            return;
                        }
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
                            let selected = getOperateTargets().map(item => $(item).data('id'));
                            if (!selected.length) {
                                toastr.warning('请先选择图片');
                                return;
                            }
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
                    openImageActionDialog('rename', {
                        element: e,
                        item: $(e).data('json'),
                    });
                },
                delete() {
                    const selected = getOperateTargets().map(item => $(item).data('id'));
                    if (!selected.length) {
                        toastr.warning('请先选择图片');
                        return;
                    }
                    if (selected.length > 1) {
                        previewAndExecuteBatchDelete(selected);
                        return;
                    }
                    openImageActionDialog('delete', {ids: selected});
                },
                download() {
                const selected = getOperateTargets();
                if (!selected.length) {
                    toastr.warning('请先选择图片');
                    return;
                }
                const items = selected.map(item => $(item).data('json') || {});
                if (items.length === 1) {
                    const url = items[0].url || items[0].preview_url || '';
                    if (url) {
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = items[0].name || items[0].origin_name || 'image';
                        a.target = '_blank';
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                    }
                    return;
                }
                // Batch: download each sequentially
                toastr.info(`正在下载 ${items.length} 张图片...`);
                items.forEach((item, i) => {
                    setTimeout(() => {
                        const url = item.url || item.preview_url || '';
                        if (!url) return;
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = item.name || item.origin_name || ('image_' + i);
                        a.target = '_blank';
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                    }, i * 300);
                });
            },
            batch_delete() {
                    const selected = getOperateTargets().map(item => $(item).data('id'));
                    if (!selected.length) {
                        toastr.warning('请先选择图片');
                        return;
                    }
                    previewAndExecuteBatchDelete(selected);
                },
                detail(e) {
                    let item = $(e).data('json');
                    axios.get(`/user/images/${item.id}`).then(response => {
                        if (response.data.status) {
                            let image = response.data.data.image;
                            let content = $('#image-detail-tpl').html()
                                .replace(/__album_name__/g, escapeHtml(image.album ? image.album.name : '-'))
                                .replace(/__strategy_name__/g, escapeHtml(image.strategy ? image.strategy.name : '-'))
                                .replace(/__filename__/g, safeTemplateValue(image.filename))
                                .replace(/__origin_name__/g, safeTemplateValue(image.origin_name))
                                .replace(/__size__/g, escapeHtml(utils.formatSize(image.size * 1024)))
                                .replace(/__mimetype__/g, escapeHtml(image.mimetype))
                                .replace(/__width__/g, image.width)
                                .replace(/__height__/g, image.height)
                                .replace(/__md5__/g, escapeHtml(image.md5))
                                .replace(/__sha1__/g, escapeHtml(image.sha1))
                                .replace(/__permission__/g, image.permission === 1 ? '公开' : '私有')
                                .replace(/__uploaded_ip__/g, escapeHtml(image.uploaded_ip))
                                .replace(/__created_at__/g, escapeHtml(image.created_at))
                            drawer.open(escapeHtml(item.filename), content);
                        } else {
                            toastr.error(response.data.message);
                        }
                    })
                }
            };
            // 图片右键：直接复制图片 URL，不再打开右键菜单
            $photos.on('contextmenu', IMAGES_ITEM, function (e) {
                e.preventDefault();
                e.stopPropagation();
                const data = $(this).data('json') || {};
                if (!data.url) {
                    toastr.warning('未找到图片链接', null, {timeOut: 3000, extendedTimeOut: 0});
                    return false;
                }
                navigator.clipboard.writeText(data.url).then(() => {
                    toastr.success('已复制图片 URL', null, {timeOut: 3000, extendedTimeOut: 0});
                }).catch(() => {
                    toastr.warning('复制失败', null, {timeOut: 3000, extendedTimeOut: 0});
                });
                return false;
            });
            $photos.on('click', '.list-op-copy', function (e) {
                e.preventDefault();
                e.stopPropagation();
                const url = $(this).data('url') || '';
                if (!url) return;
                navigator.clipboard.writeText(url).then(() => {
                    toastr.success('链接已复制');
                }).catch(() => {
                    toastr.warning('复制失败');
                });
            });
            $photos.on('click', '.list-op-rename', function (e) {
                e.preventDefault();
                e.stopPropagation();
                const $item = $(this).closest(IMAGES_ITEM);
                const item = $item.data('json') || {};
                if (!item.id) return;
                openImageActionDialog('rename', {
                    element: $item.get(0),
                    item: {id: item.id, filename: item.filename || ''},
                });
            });
            $photos.on('click', '.list-op-delete', function (e) {
                e.preventDefault();
                e.stopPropagation();
                const item = $(this).closest(IMAGES_ITEM).data('json') || {};
                if (!item.id) return;
                openImageActionDialog('delete', {ids: [item.id]});
            });

            $photos.on('click', `${IMAGES_ITEM} img`, function (e) {
                e.preventDefault();
                const item = $(this).closest(IMAGES_ITEM).data('json') || {};
                if (item.id) {
                    openCarousel(item.id);
                }
            });
            // the operates functions
            $('[data-operate]').click(function () {
                let operate = $(this).data('operate');
                let selected = ds.getSelection();

                if (selected.length === 0 && ! ['refresh', 'upload', 'select_all'].includes(operate)) {
                    return false;
                }

                switch (operate) {
                    case 'upload': // 上传
                        methods.upload();
                        break;
                    case 'refresh': // 刷新
                        resetImages();
                        break;
                    case 'select_all': // 全选
                        methods.select_all();
                        break;
                    case 'movements': // 移动到相册
                        methods.movements();
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
                    case 'download': // 下载
                        methods.download();
                        break;
                    case 'batch_delete': // 批量删除
                        methods.batch_delete();
                        break;
                }
            });
        </script>
    @endpush
</x-app-layout>
