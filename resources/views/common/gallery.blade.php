@section('title', '画廊')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/justified-gallery/justifiedGallery.min.css') }}">
    <style>
        @include('components.images-workspace-styles')
        @include('components.images-loading-styles')
        @include('components.media-carousel-styles')

        /* Gallery album sidebar */
        .gallery-v2 .gallery-album-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 10px;
            border-radius: 6px;
            color: #334155;
            font-size: 12px;
            cursor: pointer;
            text-decoration: none;
            transition: all .15s;
        }
        .gallery-v2 .gallery-album-item:hover { background: #f1f5f9; }
        .gallery-v2 .gallery-album-item.active {
            background: #eff6ff;
            color: #1d4ed8;
            font-weight: 600;
        }
        .gallery-v2 .gallery-album-name {
            flex: 1; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;
        }
        .gallery-v2 .gallery-album-count {
            color: #94a3b8; font-size: 11px; flex-shrink: 0;
        }

        /* ---- Grid (JustifiedGallery) items — same as user images page ---- */
        .gallery-v2 #gallery-grid:not(.view-list) .images-item {
            border: 1px solid transparent;
            border-radius: 8px;
            outline: none !important;
            outline-width: 0 !important;
            outline-offset: 0 !important;
            transition: border-color .14s ease, box-shadow .14s ease;
        }
        .gallery-v2 #gallery-grid:not(.view-list) .images-item:hover {
            border-color: #dbeafe;
        }

        /* Grid hover overlay with copy button */
        .gallery-v2 .grid-hover-actions {
            position: absolute; top: 6px; right: 6px; z-index: 3;
            opacity: 0; visibility: hidden; pointer-events: none;
            transition: opacity .14s, visibility .14s;
        }
        .gallery-v2 .images-item:hover .grid-hover-actions {
            opacity: 1; visibility: visible; pointer-events: auto;
        }
        .gallery-v2 .grid-action-btn {
            width: 28px; height: 28px; border: 0; border-radius: 6px;
            background: rgba(0,0,0,.55); color: #fff; cursor: pointer;
            display: inline-flex; align-items: center; justify-content: center;
            font-size: 12px; margin-left: 4px; backdrop-filter: blur(4px);
        }
        .gallery-v2 .grid-action-btn:hover { background: rgba(0,0,0,.75); }

        /* ---- List view (matching user images page) ---- */
        .gallery-v2 #gallery-grid.view-list {
            display: block; padding: 10px;
        }
        .gallery-v2 #gallery-grid.view-list .images-list-head,
        .gallery-v2 #gallery-grid.view-list .images-item {
            display: grid;
            grid-template-columns: 100px 88px minmax(220px, 1fr) 120px 100px 150px 180px;
            gap: 10px; align-items: center;
        }
        .gallery-v2 #gallery-grid.view-list .images-list-head {
            height: 40px; border: 1px solid #e2e8f0; border-radius: 8px;
            background: #f8fafc; padding: 0 10px;
            font-size: 12px; color: #64748b; font-weight: 600;
            position: sticky; top: 0; z-index: 2;
        }
        .gallery-v2 #gallery-grid.view-list .images-item {
            border: 1px solid #e2e8f0; border-radius: 8px; background: #fff;
            padding: 6px 10px; min-height: 72px; overflow: visible;
            margin-top: 8px; cursor: pointer; transition: background .15s;
        }
        .gallery-v2 #gallery-grid.view-list .images-item:hover { background: #f8fafc; }
        .gallery-v2 #gallery-grid.view-list .list-col {
            min-width: 0; overflow: hidden; text-overflow: ellipsis;
            white-space: nowrap; font-size: 12px; color: #334155;
        }
        .gallery-v2 #gallery-grid.view-list .list-thumb-wrap {
            display: inline-flex; align-items: center; justify-content: center; width: 88px;
        }
        .gallery-v2 .images-list-thumb {
            width: 88px; height: 52px; object-fit: cover; border-radius: 4px;
        }
        .gallery-v2 .list-type {
            text-transform: uppercase; font-size: 10px; font-weight: 700; color: #64748b;
        }
        .gallery-v2 .list-url-text {
            min-width: 0; overflow: hidden; text-overflow: ellipsis;
            white-space: nowrap; font-size: 12px; color: #0f172a;
        }
        .gallery-v2 .list-ops {
            display: inline-flex; align-items: center; justify-content: flex-end;
            gap: 6px; white-space: nowrap; min-width: max-content;
        }
        .gallery-v2 .list-op-group {
            display: inline-flex; align-items: center;
            border: 1px solid #dbe2ea; border-radius: 8px; overflow: hidden;
            background: #f8fafc; opacity: 0; visibility: hidden; pointer-events: none;
            transition: opacity .14s, visibility .14s; flex: 0 0 auto;
        }
        .gallery-v2 #gallery-grid.view-list .images-item:hover .list-op-group {
            opacity: 1; visibility: visible; pointer-events: auto;
        }
        .gallery-v2 .list-op-btn {
            height: 28px; border: 0; border-radius: 0; background: transparent;
            color: #334155; font-size: 12px;
            display: inline-flex; align-items: center; justify-content: center;
            gap: 4px; padding: 0 8px; cursor: pointer;
        }
        .gallery-v2 .list-op-btn + .list-op-btn { border-left: 1px solid #dbe2ea; }
        .gallery-v2 .list-op-btn:hover { background: #e2e8f0; }

        /* ---- Right-click context menu ---- */
        .gallery-ctx-menu {
            position: fixed; z-index: 9999;
            background: #fff; border: 1px solid #e2e8f0; border-radius: 8px;
            padding: 4px 0; box-shadow: 0 8px 24px rgba(0,0,0,.12);
            min-width: 160px; display: none;
        }
        .gallery-ctx-item {
            display: flex; align-items: center; gap: 8px;
            padding: 7px 14px; font-size: 12px; color: #334155;
            cursor: pointer; transition: background .1s;
        }
        .gallery-ctx-item:hover { background: #f1f5f9; }
        .gallery-ctx-item i { width: 14px; text-align: center; color: #64748b; font-size: 11px; }

        /* ---- Empty & misc ---- */
        .gallery-v2 .gallery-empty-hint {
            padding: 40px 20px; text-align: center; color: #94a3b8; font-size: 13px;
        }
        .gallery-v2 .aside-head-icon-btn {
            width: 22px; height: 22px; border: 0; border-radius: 6px;
            background: #eff6ff; color: #2563eb;
            display: inline-flex; align-items: center; justify-content: center;
            font-size: 11px; cursor: pointer;
        }
        .gallery-v2 .aside-head-icon-btn:hover { background: #dbeafe; }

        /* Share management modal */
        .share-modal-overlay {
            position: fixed; inset: 0; z-index: 9999;
            background: rgba(0,0,0,.4);
            display: flex; align-items: center; justify-content: center;
        }
        .share-modal-panel {
            background: #fff; border-radius: 12px; width: 520px;
            max-width: 90vw; max-height: 80vh;
            display: flex; flex-direction: column;
            box-shadow: 0 20px 60px rgba(0,0,0,.15);
        }
        .share-modal-header {
            display: flex; align-items: center; justify-content: space-between;
            padding: 16px 20px; border-bottom: 1px solid #f1f5f9;
        }
        .share-modal-title { font-size: 14px; font-weight: 600; color: #0f172a; }
        .share-modal-close {
            width: 28px; height: 28px; border: 0; border-radius: 6px;
            background: #f1f5f9; color: #64748b; cursor: pointer;
            display: flex; align-items: center; justify-content: center; font-size: 12px;
        }
        .share-modal-close:hover { background: #e2e8f0; }
        .share-modal-body { padding: 16px 20px; overflow-y: auto; flex: 1; }
        .share-list { display: flex; flex-direction: column; gap: 8px; }
        .share-list-item {
            display: flex; align-items: center; gap: 10px;
            padding: 10px 12px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 12px;
        }
        .share-list-album {
            font-weight: 600; color: #0f172a; flex: 1; min-width: 0;
            overflow: hidden; text-overflow: ellipsis; white-space: nowrap;
        }
        .share-list-users { color: #64748b; font-size: 11px; flex-shrink: 0; }
        .share-list-action {
            width: 24px; height: 24px; border: 0; border-radius: 6px;
            background: #eff6ff; color: #2563eb; cursor: pointer;
            display: flex; align-items: center; justify-content: center; font-size: 11px;
        }
        .share-list-action:hover { background: #dbeafe; }
        .share-empty {
            padding: 30px 20px; text-align: center; color: #94a3b8; font-size: 13px;
        }
    </style>
@endpush

<x-app-layout>
<x-images-workspace
    id-prefix="gallery"
    root-class="images-v2 gallery-v2"
    sidebar-tag="aside"
    stage-id="gallery-stage"
    :show-sidebar="true"
    :show-pagination="true"
>
    <x-slot:sidebarHead>
        <div class="images-aside-head">
            <span class="images-aside-title">共享相册</span>
            <div class="flex items-center gap-2">
                <button type="button" id="gallery-refresh" class="aside-head-icon-btn" title="刷新"><i class="fas fa-sync-alt"></i></button>
            </div>
        </div>
    </x-slot:sidebarHead>

    <x-slot:sidebarContent>
        <div id="gallery-albums-tree" class="images-tree-list"></div>
    </x-slot:sidebarContent>

    <x-slot:toolbar>
        <div class="images-toolbar relative flex justify-between items-center">
            <div class="toolbar-action-groups">
                <span style="font-size:13px;font-weight:600;color:#0f172a;">画廊</span>
                @if(Auth::user() && Auth::user()->is_adminer)
                <button type="button" id="gallery-share-manage" class="aside-head-icon-btn" style="margin-left:8px;" title="共享管理"><i class="fas fa-users-cog"></i></button>
                @endif
            </div>
            <div class="flex space-x-2 items-center">
                <div class="search-input-wrap hidden md:block">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" id="gallery-search" class="search-input" placeholder="搜索...">
                    <button type="button" id="gallery-search-clear" class="search-clear-btn" title="清空"><i class="fas fa-times"></i></button>
                </div>
                <div class="toolbar-meta-group">
                    <button type="button" class="view-switch-btn toolbar-meta-btn active" data-view="grid" title="网格"><i class="fas fa-th"></i></button>
                    <button type="button" class="view-switch-btn toolbar-meta-btn" data-view="list" title="列表"><i class="fas fa-list"></i></button>
                </div>
            </div>
        </div>
    </x-slot:toolbar>

    <x-slot:stageContent>
        <div id="gallery-grid"></div>
        <div id="gallery-empty" class="gallery-empty-hint" style="display:none;">
            <i class="fas fa-images" style="font-size:32px;color:#cbd5e1;margin-bottom:12px;display:block;"></i>
            暂无图片
        </div>
    </x-slot:stageContent>

    <x-slot:pagination>
        <div class="images-footer">
            <div class="images-pagination">
                <button type="button" id="gallery-page-prev" class="pager-btn">上一页</button>
                <span id="gallery-page-info" class="pager-info">第 1 / 1 页，共 0 条</span>
                <button type="button" id="gallery-page-next" class="pager-btn">下一页</button>
                <span class="images-footer-label">每页</span>
                <select id="gallery-page-size" class="pager-select">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="150">150</option>
                    <option value="200">200</option>
                </select>
                <span class="images-footer-label">前往</span>
                <input id="gallery-page-jump" class="pager-jump" type="number" min="1" step="1" placeholder="页码">
                <button type="button" id="gallery-page-go" class="pager-btn">确定</button>
                <label class="pager-toggle" title="开启后滚动到底部自动加载下一页">
                    <input type="checkbox" id="gallery-infinite-scroll">
                    <span class="pager-toggle-label">无限滚动</span>
                </label>
            </div>
        </div>
    </x-slot:pagination>

    <x-slot:extraContent>
        @if(Auth::user() && Auth::user()->is_adminer)
        <div id="gallery-share-modal" class="share-modal-overlay" style="display:none;">
            <div class="share-modal-panel">
                <div class="share-modal-header">
                    <span class="share-modal-title">共享相册管理</span>
                    <button type="button" id="gallery-share-modal-close" class="share-modal-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="share-modal-body">
                    <div id="gallery-share-list" class="share-list"></div>
                    <div id="gallery-share-empty" class="share-empty" style="display:none;">
                        <i class="fas fa-share-alt" style="font-size:28px;color:#cbd5e1;margin-bottom:8px;display:block;"></i>
                        暂无共享相册
                    </div>
                </div>
            </div>
        </div>
        @endif
    </x-slot:extraContent>

    <x-slot:carousel>
        <x-media-carousel id-prefix="gallery-carousel" host-mode="panel" :show-crop-layer="false" :show-caption="false">
            <x-slot name="actions">
                <div class="images-carousel-action-group">
                    <button type="button" id="gallery-carousel-copy-url" class="images-carousel-action"><i class="fas fa-link"></i>复制链接</button>
                    <button type="button" id="gallery-carousel-download" class="images-carousel-action"><i class="fas fa-download"></i>下载</button>
                    <button type="button" id="gallery-carousel-open" class="images-carousel-action"><i class="fas fa-external-link-alt"></i>新标签打开</button>
                </div>
            </x-slot>
        </x-media-carousel>
    </x-slot:carousel>
</x-images-workspace>

{{-- Right-click context menu --}}
<div id="gallery-ctx-menu" class="gallery-ctx-menu">
    <div class="gallery-ctx-item" data-action="copy-url"><i class="fas fa-link"></i>复制图片链接</div>
    <div class="gallery-ctx-item" data-action="download"><i class="fas fa-download"></i>下载图片</div>
    <div class="gallery-ctx-item" data-action="open-tab"><i class="fas fa-external-link-alt"></i>新标签打开</div>
    <div class="gallery-ctx-item" data-action="carousel"><i class="fas fa-expand"></i>查看大图</div>
    <div class="gallery-ctx-item" data-action="doc-view" id="ctx-doc-view" style="display:none;"><i class="fas fa-file-alt"></i>在线查看</div>
</div>

@push('scripts')
<script src="{{ asset('js/justified-gallery/jquery.justifiedGallery.min.js') }}"></script>
<script src="{{ asset('static/js/media-carousel-shared.js') }}?v={{ filemtime(public_path('static/js/media-carousel-shared.js')) }}"></script>
<script>
(function() {
    'use strict';
    const $ = jQuery;
    const GALLERY_IMAGES_URL = '{{ route("gallery.images") }}';
    const GALLERY_ALBUMS_URL = '{{ route("gallery.albums") }}';

    const {
        escapeHtml,
        renderThumbButtons,
        setPanelScrollLocked: _setPanelScrollLocked,
    } = window.LskyMediaCarousel || {};

    // ==================== State ====================
    const state = {
        currentPage: 1,
        lastPage: 1,
        total: 0,
        perPage: parseInt(localStorage.getItem('lsky.gallery.page.size') || '50'),
        loading: false,
        viewMode: localStorage.getItem('lsky.gallery.view.mode') || 'grid',
        infiniteScroll: localStorage.getItem('lsky.gallery.infinite.scroll') === 'true',
        selectedAlbumId: null,
        keyword: '',
    };

    // Keep full image records for context menu / carousel
    let currentImageRecords = [];



    // ==================== DOM Refs ====================
    const $stage = $('#gallery-stage');
    const $grid = $('#gallery-grid');
    const $empty = $('#gallery-empty');
    const $loading = $('#gallery-loading');
    const $albumsTree = $('#gallery-albums-tree');

    // Pagination
    const $pagePrev = $('#gallery-page-prev');
    const $pageNext = $('#gallery-page-next');
    const $pageInfo = $('#gallery-page-info');
    const $pageSize = $('#gallery-page-size');
    const $pageJump = $('#gallery-page-jump');
    const $pageGo = $('#gallery-page-go');
    const $infiniteScrollToggle = $('#gallery-infinite-scroll');

    // Carousel
    let carouselItems = [];
    let carouselIndex = 0;
    const $carousel = $('#gallery-carousel');
    const $carouselImg = $('#gallery-carousel-img');
    const $carouselIndex = $('#gallery-carousel-index');
    const $carouselTop = $('#gallery-carousel-top');
    const $carouselDetail = $('#gallery-carousel-detail');
    let carouselZoom = { scale: 1, translateX: 0, translateY: 0 };

    // Context menu
    const $ctxMenu = $('#gallery-ctx-menu');
    let ctxTarget = null; // image record for context menu

    // ==================== Utilities ====================
    function formatSize(bytes) {
        if (typeof bytes !== 'number' || isNaN(bytes)) return '0 KB';
        var kb = bytes;
        if (kb < 1024) return kb.toFixed(1) + ' KB';
        return (kb / 1024).toFixed(1) + ' MB';
    }

    function findImageById(id) {
        id = String(id);
        for (var i = 0; i < currentImageRecords.length; i++) {
            if (String(currentImageRecords[i].id) === id) return currentImageRecords[i];
        }
        return null;
    }

    function copyToClipboard(text) {
        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text).then(function() {
                if (typeof toastr !== 'undefined') toastr.success('已复制到剪贴板');
            });
        } else {
            var ta = document.createElement('textarea');
            ta.value = text;
            ta.style.cssText = 'position:fixed;left:-9999px';
            document.body.appendChild(ta);
            ta.select();
            document.execCommand('copy');
            document.body.removeChild(ta);
            if (typeof toastr !== 'undefined') toastr.success('已复制到剪贴板');
        }
    }

    // ==================== Sync Functions ====================
    function syncPagination() {
        const p = state;
        $pageInfo.text(
            p.infiniteScroll
                ? '已加载 ' + p.currentPage + ' / ' + p.lastPage + ' 页，共 ' + p.total + ' 条'
                : '第 ' + p.currentPage + ' / ' + p.lastPage + ' 页，共 ' + p.total + ' 条'
        );
        $pagePrev.prop('disabled', p.currentPage <= 1);
        $pageNext.prop('disabled', p.currentPage >= p.lastPage);
        const hideInInfinite = p.infiniteScroll ? 'none' : '';
        $pagePrev.css('display', hideInInfinite);
        $pageNext.css('display', hideInInfinite);
        $pageJump.css('display', hideInInfinite);
        $pageGo.css('display', hideInInfinite);
    }

    function syncLoadingUi() {
        if (state.loading && $grid.find('.images-item').length === 0) {
            $loading.addClass('show').removeClass('hidden');
        } else {
            $loading.removeClass('show').addClass('hidden');
        }
    }

    function syncEmptyState() {
        const hasItems = $grid.find('.images-item').length > 0;
        $empty.toggle(!hasItems && !state.loading);
    }

    // ==================== View Mode ====================
    function setViewMode(mode) {
        state.viewMode = mode;
        localStorage.setItem('lsky.gallery.view.mode', mode);
        $('.view-switch-btn').removeClass('active');
        $('[data-view="' + mode + '"]').addClass('active');

        $loading.toggleClass('is-list', mode === 'list');

        if (mode === 'list') {
            $grid.addClass('view-list');
            $grid.addClass('reset').html('').justifiedGallery('destroy');
        } else {
            $grid.removeClass('view-list');
        }

        // Re-render with current data
        renderImages(currentImageRecords, false);
    }

    // ==================== Templates ====================
    function createGridItem(image) {
        var safeName = escapeHtml(image.filename || image.origin_name || '');
        var safeThumb = escapeHtml(image.thumb_url || '');
        var safePreview = escapeHtml(image.preview_url || image.thumb_url || image.url || '');
        var safeDate = escapeHtml(image.human_date || image.date || '');
        var safeUrl = escapeHtml(image.url || '');
        return '<a href="javascript:void(0)" data-id="' + image.id + '" class="images-item relative cursor-default rounded outline outline-2 outline-offset-2 outline-transparent">' +
            '<div class="grid-hover-actions">' +
                '<button type="button" class="grid-action-btn grid-copy-url" data-url="' + safeUrl + '" title="复制链接"><i class="fas fa-link"></i></button>' +
                '<button type="button" class="grid-action-btn grid-download" data-url="' + safeUrl + '" title="下载"><i class="fas fa-download"></i></button>' +
            '</div>' +
            '<div class="image-mask absolute left-0 right-0 bottom-0 h-20 z-[1] bg-gradient-to-t from-black">' +
                '<div class="absolute left-2 bottom-2 text-white z-[2] w-[90%]">' +
                    '<p class="text-sm truncate filename" title="' + safeName + '">' + safeName + '</p>' +
                    '<p class="text-xs date" title="' + safeDate + '">' + safeDate + '</p>' +
                '</div>' +
            '</div>' +
            '<img alt="' + safeName + '" data-original="' + safePreview + '" src="' + safeThumb + '" width="' + Math.max(image.width, 200) + '" height="' + Math.max(image.height, 200) + '" loading="lazy">' +
            '</a>';
    }

    function createListItem(image) {
        var safeName = escapeHtml(image.filename || image.origin_name || '');
        var safeThumb = escapeHtml(image.thumb_url || '');
        var safeUrl = escapeHtml(image.url || '');
        return '<div data-id="' + image.id + '" class="images-item">' +
            '<div class="list-col list-thumb-wrap"><img class="images-list-thumb" alt="' + safeName + '" src="' + safeThumb + '" loading="lazy"></div>' +
            '<div class="list-col list-type">' + escapeHtml((image.extension || '').toUpperCase()) + '</div>' +
            '<div class="list-col"><span class="list-url-text" title="' + safeUrl + '">' + safeUrl + '</span></div>' +
            '<div class="list-col">' + (image.width || 0) + ' × ' + (image.height || 0) + '</div>' +
            '<div class="list-col">' + formatSize(image.size) + '</div>' +
            '<div class="list-col">' + escapeHtml(image.human_date || image.date || '') + '</div>' +
            '<div class="list-col list-ops">' +
                '<span class="list-op-group">' +
                    '<button type="button" class="list-op-btn list-copy-url" data-url="' + safeUrl + '"><i class="fas fa-link"></i>复制URL</button>' +
                    '<button type="button" class="list-op-btn list-download" data-url="' + safeUrl + '"><i class="fas fa-download"></i>下载</button>' +
                '</span>' +
            '</div>' +
            '</div>';
    }

    var listHeadHtml = '<div class="images-list-head">' +
        '<div class="list-col">缩略图</div>' +
        '<div class="list-col">类型</div>' +
        '<div class="list-col">URL</div>' +
        '<div class="list-col">分辨率</div>' +
        '<div class="list-col">大小</div>' +
        '<div class="list-col">日期</div>' +
        '<div class="list-col">操作</div>' +
        '</div>';

    // ==================== JustifiedGallery ====================
    var gridConfigs = {
        rowHeight: 180,
        margins: 16,
        border: 10,
        captions: false,
        waitThumbnailsLoad: false,
    };

    // Pre-initialize JustifiedGallery (same as user images page)
    $grid.justifiedGallery(gridConfigs);

    function syncGridGallery() {
        if (state.viewMode !== 'grid' || $grid.find('.images-item').length === 0) return;
        $grid.justifiedGallery(gridConfigs).removeClass('reset');
        $grid.justifiedGallery('norewind');
    }

    // ==================== Render ====================
    function renderImages(images, append) {
        if (!append) {
            currentImageRecords = images.slice();
        } else {
            currentImageRecords = currentImageRecords.concat(images);
        }

        var html = '';
        if (state.viewMode === 'list') {
            if (!append) html += listHeadHtml;
            images.forEach(function(image) { html += createListItem(image); });
        } else {
            images.forEach(function(image) { html += createGridItem(image); });
        }

        if (append) {
            $grid.append(html);
        } else {
            if (state.viewMode !== 'list') {
                // Match user page: destroy, set html, re-init
                $grid.addClass('reset').html('').justifiedGallery('destroy');
            }
            $grid.html(html);
        }

        if (state.viewMode === 'grid' && $grid.html() !== '') {
            $grid.justifiedGallery(gridConfigs).removeClass('reset');
            $grid.justifiedGallery('norewind');
        }
        syncEmptyState();
        syncLoadingUi();
    }

    // ==================== Load Page ====================
    function loadPage(page, append) {
        if (state.loading) return;

        const params = {
            page: page,
            per_page: state.perPage,
        };
        if (state.selectedAlbumId) params.album_id = state.selectedAlbumId;
        if (state.keyword) params.keyword = state.keyword;

        state.loading = true;
        syncLoadingUi();

        axios.get(GALLERY_IMAGES_URL, { params: params })
            .then(function(res) {
                const data = res.data;
                state.currentPage = data.current_page;
                state.lastPage = data.last_page;
                state.total = data.total;
                state.loading = false;
                renderImages(data.data || [], !!append);
                syncPagination();
            })
            .catch(function(err) {
                state.loading = false;
                syncLoadingUi();
                var msg = '加载失败';
                if (err.response && err.response.data && err.response.data.message) msg = err.response.data.message;
                if (typeof toastr !== 'undefined') toastr.error(msg);
            });
    }

    // ==================== Albums ====================
    function loadAlbums() {
        axios.get(GALLERY_ALBUMS_URL)
            .then(function(res) {
                const albums = res.data.data || [];
                renderAlbumTree(albums);
            });
    }

    function renderAlbumTree(albums) {
                $albumsTree.empty();

                var $all = $('<a class="gallery-album-item active" data-album-id="" href="javascript:void(0)">' +
                    '<i class="fas fa-images" style="color:#94a3b8;font-size:11px;width:16px;text-align:center;"></i>' +
                    '<span class="gallery-album-name">全部图片</span>' +
                    '</a>');
                $albumsTree.append($all);

                albums.forEach(function(album) {
                    var $item = $('<a class="gallery-album-item" data-album-id="' + album.id + '" href="javascript:void(0)">' +
                        '<i class="fas fa-folder" style="color:#94a3b8;font-size:11px;width:16px;text-align:center;"></i>' +
                        '<span class="gallery-album-name">' + escapeHtml(album.name) + '</span>' +
                        '<span class="gallery-album-count">' + (album.image_num || 0) + '</span>' +
                        '</a>');
                    $albumsTree.append($item);
                });

                if (albums.length === 0) {
                    $albumsTree.append('<div class="gallery-empty-hint" style="padding:20px 10px;">暂无共享相册</div>');
                }
    }

    // ==================== Carousel ====================
    function collectCarouselItems() {
        return currentImageRecords.map(function(img) {
            return {
                id: img.id,
                url: img.url || img.thumb_url,
                thumb_url: img.thumb_url,
                filename: img.filename || img.origin_name || '',
                extension: img.extension || '',
                width: img.width,
                height: img.height,
                size: img.size,
                human_date: img.human_date || img.date || '',
            };
        });
    }

    function applyCarouselZoom() {
        var z = carouselZoom;
        $carouselImg.css('transform', 'scale(' + z.scale + ') translate(' + z.translateX + 'px, ' + z.translateY + 'px)');
        $carouselImg.closest('.images-carousel-image-frame').toggleClass('is-zoomed', z.scale !== 1);
    }

    function resetCarouselZoom() {
        carouselZoom = { scale: 1, translateX: 0, translateY: 0 };
        applyCarouselZoom();
    }

    function renderCarousel() {
        if (!carouselItems.length) return;
        var len = carouselItems.length;
        var idx = ((carouselIndex % len) + len) % len;
        carouselIndex = idx;
        var item = carouselItems[idx];

        resetCarouselZoom();
        $carouselImg.attr('src', item.url || item.thumb_url);
        if ($carouselIndex.length) $carouselIndex.text((idx + 1) + ' / ' + len);
        if ($carouselTop.length) $carouselTop.text(item.filename || '').show();

        // Detail panel
        if ($carouselDetail.length) {
            $carouselDetail.html(
                '<div class="images-carousel-detail-row"><dt>文件名</dt><dd>' + escapeHtml(item.filename) + '</dd></div>' +
                '<div class="images-carousel-detail-row"><dt>类型</dt><dd>' + escapeHtml((item.extension || '').toUpperCase()) + '</dd></div>' +
                '<div class="images-carousel-detail-row"><dt>分辨率</dt><dd>' + (item.width || 0) + ' × ' + (item.height || 0) + '</dd></div>' +
                '<div class="images-carousel-detail-row"><dt>大小</dt><dd>' + formatSize(item.size) + '</dd></div>' +
                '<div class="images-carousel-detail-row"><dt>日期</dt><dd>' + escapeHtml(item.human_date) + '</dd></div>'
            );
        }

        // Thumbs
        if (typeof renderThumbButtons === 'function') {
            $('#gallery-carousel-thumbs').html(renderThumbButtons(carouselItems, idx, function(item) {
                return { src: item.thumb_url || item.url, alt: item.filename || '', title: item.filename || '' };
            }));
        }
    }

    function openCarousel(id) {
        carouselItems = collectCarouselItems();
        carouselIndex = 0;
        var sid = String(id);
        for (var i = 0; i < carouselItems.length; i++) {
            if (String(carouselItems[i].id) === sid) { carouselIndex = i; break; }
        }
        renderCarousel();
        $carousel.addClass('show');
        _setPanelScrollLocked && _setPanelScrollLocked($carousel[0], true);
    }

    function closeCarousel() {
        $carousel.removeClass('show');
        _setPanelScrollLocked && _setPanelScrollLocked($carousel[0], false);
    }

    // ==================== Context Menu ====================
    function showCtxMenu(e, image) {
        e.preventDefault();
        ctxTarget = image;
        var viewExts = ['pdf','doc','docx','xls','xlsx','csv','ppt','pptx','svg'];
        var ctxImg = currentImageRecords[ctxTargetIdx] || {};
        var ctxExt = (ctxImg.extension || '').toLowerCase();
        $('#ctx-doc-view')[viewExts.indexOf(ctxExt) >= 0 ? 'show' : 'hide']();
        $ctxMenu.css({ left: e.clientX, top: e.clientY }).show();
    }

    $(document).on('click', function() { $ctxMenu.hide(); });

    $ctxMenu.on('click', '.gallery-ctx-item', function() {
        var action = $(this).data('action');
        if (!ctxTarget) return;
        var url = ctxTarget.url || ctxTarget.thumb_url || '';
        switch (action) {
            case 'copy-url': copyToClipboard(url); break;
            case 'download':
                var a = document.createElement('a');
                a.href = url; a.download = ctxTarget.filename || ''; a.target = '_blank';
                document.body.appendChild(a); a.click(); document.body.removeChild(a);
                break;
            case 'open-tab': window.open(url, '_blank'); break;
            case 'doc-view':
                window.open('/document-viewer/' + image.id, '_blank');
                break;
            case 'carousel': openCarousel(ctxTarget.id); break;
        }
        $ctxMenu.hide();
    });

    // ==================== Event Bindings ====================

    // Album click
    $albumsTree.on('click', '.gallery-album-item', function() {
        var albumId = $(this).data('album-id');
        state.selectedAlbumId = albumId ? albumId : null;
        $albumsTree.find('.gallery-album-item').removeClass('active');
        $(this).addClass('active');
        loadPage(1, false);
    });

    // Refresh
    $('#gallery-refresh').click(function() { loadAlbums(); loadPage(1, false); });

    // Search
    $('#gallery-search').on('input', function() {
        var val = $.trim($(this).val());
        $('#gallery-search-clear').css('display', val ? 'flex' : 'none');
    }).on('keydown', function(e) {
        if (e.keyCode === 13) {
            e.preventDefault();
            state.keyword = $.trim($(this).val());
            loadPage(1, false);
        }
    });
    $('#gallery-search-clear').click(function() {
        $('#gallery-search').val('');
        $(this).hide();
        state.keyword = '';
        loadPage(1, false);
    });

    // View mode
    $('[data-view]').click(function() { setViewMode($(this).data('view')); });

    // Grid item click -> carousel (click on image area, not action buttons)
    $grid.on('click', '.images-item', function(e) {
        if ($(e.target).closest('.grid-hover-actions, .list-op-group').length) return;
        openCarousel($(this).data('id'));
    });

    // Grid hover action buttons
    $grid.on('click', '.grid-copy-url, .list-copy-url', function(e) {
        e.stopPropagation();
        copyToClipboard($(this).data('url'));
    });
    $grid.on('click', '.grid-download, .list-download', function(e) {
        e.stopPropagation();
        var url = $(this).data('url');
        var a = document.createElement('a');
        a.href = url; a.download = ''; a.target = '_blank';
        document.body.appendChild(a); a.click(); document.body.removeChild(a);
    });

    // Right-click context menu
    $grid.on('contextmenu', '.images-item', function(e) {
        var id = $(this).data('id');
        var image = findImageById(id);
        if (image) showCtxMenu(e, image);
    });

    // Carousel events
    $('#gallery-carousel-close').click(closeCarousel);
    $('#gallery-carousel-prev').click(function() { carouselIndex--; renderCarousel(); });
    $('#gallery-carousel-next').click(function() { carouselIndex++; renderCarousel(); });
    $carousel.on('click', '.images-carousel-thumb', function() {
        carouselIndex = parseInt($(this).data('index'));
        renderCarousel();
    });
    $(document).on('keydown', function(e) {
        if (!$carousel.hasClass('show')) return;
        if (e.key === 'Escape') closeCarousel();
        else if (e.key === 'ArrowRight') { carouselIndex++; renderCarousel(); }
        else if (e.key === 'ArrowLeft') { carouselIndex--; renderCarousel(); }
    });
    $carousel.click(function(e) {
        if (e.target === this || $(e.target).hasClass('images-carousel-stage')) closeCarousel();
    });

    // Carousel action buttons
    $('#gallery-carousel-copy-url').click(function() {
        var item = carouselItems[carouselIndex];
        if (item) copyToClipboard(item.url || item.thumb_url);
    });
    $('#gallery-carousel-download').click(function() {
        var item = carouselItems[carouselIndex];
        if (!item) return;
        var a = document.createElement('a');
        a.href = item.url || item.thumb_url; a.download = item.filename || ''; a.target = '_blank';
        document.body.appendChild(a); a.click(); document.body.removeChild(a);
    });
    $('#gallery-carousel-open').click(function() {
        var item = carouselItems[carouselIndex];
        if (item) window.open(item.url || item.thumb_url, '_blank');
    });

    // Zoom controls
    $carousel.on('click', '.zoom-btn', function() {
        var action = $(this).data('zoom');
        var z = carouselZoom;
        if (action === 'in') z.scale = Math.min(z.scale * 1.3, 5);
        else if (action === 'out') z.scale = Math.max(z.scale / 1.3, 0.5);
        else if (action === 'reset') { z.scale = 1; z.translateX = 0; z.translateY = 0; }
        else if (action === 'original') {
            var item = carouselItems[carouselIndex];
            if (item && item.url) $carouselImg.attr('src', item.url);
        }
        if (Math.abs(z.scale - 1) < 0.05) { z.scale = 1; z.translateX = 0; z.translateY = 0; }
        applyCarouselZoom();
    });
    $('#gallery-carousel-image-frame').on('wheel', function(e) {
        e.preventDefault();
        var z = carouselZoom;
        z.scale *= e.originalEvent.deltaY < 0 ? 1.1 : 0.9;
        z.scale = Math.max(0.5, Math.min(5, z.scale));
        if (Math.abs(z.scale - 1) < 0.05) { z.scale = 1; z.translateX = 0; z.translateY = 0; }
        applyCarouselZoom();
    });
    $carouselImg.on('dblclick', function() {
        var z = carouselZoom;
        if (z.scale === 1) { z.scale = 2; } else { z.scale = 1; z.translateX = 0; z.translateY = 0; }
        applyCarouselZoom();
    });

    // Pagination
    $pagePrev.click(function() { if (state.currentPage > 1) { loadPage(state.currentPage - 1, false); $stage.scrollTop(0); } });
    $pageNext.click(function() { if (state.currentPage < state.lastPage) { loadPage(state.currentPage + 1, false); $stage.scrollTop(0); } });
    $pageGo.click(function() {
        var p = parseInt($pageJump.val());
        if (p && p >= 1 && p <= state.lastPage) { loadPage(p, false); $stage.scrollTop(0); }
    });
    $pageJump.on('keydown', function(e) { if (e.keyCode === 13) $pageGo.click(); });
    $pageSize.val(state.perPage).on('change', function() {
        state.perPage = parseInt($(this).val());
        localStorage.setItem('lsky.gallery.page.size', state.perPage);
        loadPage(1, false);
    });
    $infiniteScrollToggle.prop('checked', state.infiniteScroll).on('change', function() {
        state.infiniteScroll = $(this).is(':checked');
        localStorage.setItem('lsky.gallery.infinite.scroll', state.infiniteScroll);
        syncPagination();
        if (!state.infiniteScroll) loadPage(1, false);
    });

    // Infinite scroll
    $stage.on('scroll', function() {
        if (!state.infiniteScroll || state.loading || state.currentPage >= state.lastPage) return;
        if ($stage[0].scrollHeight - $stage.scrollTop() - $stage.outerHeight() <= 60) {
            loadPage(state.currentPage + 1, true);
        }
    });

    // ==================== Share Management ====================
    const $shareModal = $('#gallery-share-modal');
    const $shareList = $('#gallery-share-list');
    const $shareEmpty = $('#gallery-share-empty');

    $('#gallery-share-manage').click(function() {
        loadShareManagement();
        $shareModal.show();
    });
    $('#gallery-share-modal-close').click(function() { $shareModal.hide(); });
    $shareModal.click(function(e) { if (e.target === this) $(this).hide(); });

    function loadShareManagement() {
        $shareList.empty();
        $shareEmpty.hide();
        axios.get(GALLERY_ALBUMS_URL)
            .then(function(res) {
                const albums = res.data.data || [];
                if (albums.length === 0) { $shareEmpty.show(); return; }
                var loaded = 0, hasShares = false;
                albums.forEach(function(album) {
                    axios.get('/admin/albums/' + album.id + '/shares')
                        .then(function(sres) {
                            var shares = sres.data.data || [];
                            if (shares.length > 0) {
                                hasShares = true;
                                $shareList.append(
                                    '<div class="share-list-item" data-album-id="' + album.id + '">' +
                                    '<i class="fas fa-folder" style="color:#94a3b8;font-size:12px;"></i>' +
                                    '<span class="share-list-album">' + escapeHtml(album.name) + '</span>' +
                                    '<span class="share-list-users"><i class="fas fa-users" style="margin-right:4px;"></i>' + shares.length + ' 人</span>' +
                                    '</div>'
                                );
                            }
                            loaded++;
                            if (loaded === albums.length && !hasShares) $shareEmpty.show();
                        })
                        .catch(function() { loaded++; });
                });
            });
    }

    // ==================== Init ====================
    setViewMode(state.viewMode);
    syncPagination();
    loadAlbums();
    loadPage(1, false);
})();
</script>
@endpush
</x-app-layout>
