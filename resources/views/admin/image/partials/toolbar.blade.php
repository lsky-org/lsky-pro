<form class="images-toolbar" action="{{ route('admin.images') }}" method="get" id="admin-images-toolbar">
    <input type="hidden" id="per-page-input" name="per_page" value="{{ $perPage ?? 50 }}">
    <div class="toolbar-left">
        <div class="hidden lg:block">
            <div class="toolbar-action-groups">
                <div class="toolbar-action-group">
                    <button type="submit" class="toolbar-action-btn"><i class="fas fa-search"></i>搜索</button>
                    <a href="{{ route('admin.images') }}" class="toolbar-action-btn"><i class="fas fa-undo"></i>重置</a>
                    <button type="button" id="grammar" class="toolbar-action-btn"><i class="fas fa-question-circle"></i>语法</button>
                </div>
                <div class="toolbar-action-group">
                    <button type="button" id="select-all" class="toolbar-action-btn"><i class="fas fa-check-square"></i>全选</button>
                    <button type="button" id="batch-download" class="toolbar-action-btn" disabled><i class="fas fa-download"></i>下载</button>
                    <button type="button" id="batch-delete" class="toolbar-action-btn" disabled><i class="fas fa-trash"></i>批量删除</button>
                </div>
            </div>
        </div>
        <div class="block lg:hidden">
            <x-dropdown direction="right">
                <x-slot name="trigger">
                    <button type="button" class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800"><i class="fas fa-ellipsis-h text-blue-500"></i></button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link data-admin-action="submit" href="javascript:void(0)" @click="open = false">搜索</x-dropdown-link>
                    <x-dropdown-link href="{{ route('admin.images') }}" @click="open = false">重置</x-dropdown-link>
                    <x-dropdown-link data-admin-action="grammar" href="javascript:void(0)" @click="open = false">语法</x-dropdown-link>
                    <x-dropdown-link data-admin-action="select-all" href="javascript:void(0)" @click="open = false">全选 / 反选</x-dropdown-link>
                    <x-dropdown-link data-admin-action="batch-download" href="javascript:void(0)" @click="open = false">下载</x-dropdown-link>
                    <x-dropdown-link data-admin-action="batch-delete" href="javascript:void(0)" @click="open = false">批量删除</x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
    <div class="toolbar-right">
        <div class="search-input-wrap hidden md:block">
            <i class="fas fa-search search-icon"></i>
            <input type="text" id="keywords-input" name="keywords" class="search-input" placeholder="搜索..." value="{{ request('keywords') }}" />
            <button type="button" id="admin-search-clear" class="search-clear-btn" title="清空"><i class="fas fa-times"></i></button>
            <button type="button" id="admin-search-expand" class="search-expand-btn" title="批量搜索"><i class="fas fa-list-ul"></i></button>
            <div id="admin-search-batch-popover" class="search-batch-popover">
                <div class="search-batch-header">
                    <span class="search-batch-title">批量搜索</span>
                    <span class="search-batch-hint">每行一个关键词</span>
                </div>
                <textarea id="admin-search-batch-input" class="search-batch-textarea" rows="6" placeholder="输入关键词，每行一个&#10;例如：&#10;红色连衣裙&#10;蓝色手提包&#10;白色运动鞋"></textarea>
                <div class="search-batch-footer">
                    <span class="search-batch-hint">Ctrl+Enter 提交</span>
                    <button type="button" id="admin-search-batch-submit" class="search-batch-submit"><i class="fas fa-search"></i>搜索</button>
                </div>
            </div>
        </div>
        <div class="toolbar-meta-group">
            <button type="button" id="view-grid" class="view-switch-btn toolbar-meta-btn active" title="网格"><i class="fas fa-th"></i></button>
            <button type="button" id="view-list" class="view-switch-btn toolbar-meta-btn" title="列表"><i class="fas fa-list"></i></button>
        </div>
        <div class="toolbar-meta-group">
            <x-dropdown direction="left">
                <x-slot name="trigger">
                    <button type="button" class="toolbar-meta-btn">
                        <span>{{ $orderText }}</span>
                        <i class="fas fa-sort-alpha-up text-blue-500"></i>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link href="javascript:void(0)" @click="open = false" onclick="setQuickKeyword('')">最新</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false" onclick="setQuickKeyword('order:earliest')">最早</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false" onclick="setQuickKeyword('order:utmost')">最大</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false" onclick="setQuickKeyword('order:least')">最小</x-dropdown-link>
                </x-slot>
            </x-dropdown>
            <x-dropdown direction="left">
                <x-slot name="trigger">
                    <button type="button" class="toolbar-meta-btn">
                        <span>{{ $statusText }}</span>
                        <i class="fas fa-eye text-blue-500"></i>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link href="javascript:void(0)" @click="open = false" onclick="setQuickKeyword('')">全部</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false" onclick="setQuickKeyword('is:public')">公开</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false" onclick="setQuickKeyword('is:private')">私有</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false" onclick="setQuickKeyword('is:unhealthy')">违规</x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</form>
