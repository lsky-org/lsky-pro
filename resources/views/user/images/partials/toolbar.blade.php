<div class="images-toolbar relative flex justify-between items-center z-[3] top-0 left-0 right-0">
    <div class="space-x-2 flex justify-between items-center">
        <div class="toolbar-action-groups hidden lg:flex">
            <div class="toolbar-action-group">
                <button type="button" data-operate="upload" class="toolbar-action-btn">上传</button>
                <button type="button" data-operate="refresh" class="toolbar-action-btn">刷新</button>
                <button type="button" data-operate="select_all" class="toolbar-action-btn">全选</button>
            </div>
            <div class="toolbar-action-group">
                <button type="button" data-operate="movements" class="toolbar-action-btn">移动到相册</button>
            </div>
            <div class="toolbar-action-group">
                <button type="button" data-operate="permission" class="toolbar-action-btn">设置权限</button>
                <button type="button" data-operate="detail" class="toolbar-action-btn">详细信息</button>
                <button type="button" data-operate="rename" class="toolbar-action-btn">重命名</button>
                <button type="button" data-operate="download" class="toolbar-action-btn"><i class="fas fa-download" style="margin-right:2px"></i>下载</button>
                <button type="button" data-operate="batch_delete" class="toolbar-action-btn">批量删除</button>
                <button type="button" data-operate="delete" class="toolbar-action-btn">删除</button>
            </div>
        </div>
        <div class="block lg:hidden">
            <x-dropdown direction="right">
                <x-slot name="trigger">
                    <button type="button" class="text-sm py-2 px-3 hover:bg-gray-100 rounded text-gray-800"><i class="fas fa-ellipsis-h text-blue-500"></i></button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link data-operate="upload" href="javascript:void(0)" @click="open = false">上传</x-dropdown-link>
                    <x-dropdown-link data-operate="refresh" href="javascript:void(0)" @click="open = false">刷新</x-dropdown-link>
                    <x-dropdown-link data-operate="select_all" href="javascript:void(0)" @click="open = false">全选</x-dropdown-link>
                    <x-dropdown-link data-operate="movements" href="javascript:void(0)" @click="open = false">移动到相册</x-dropdown-link>
                    <x-dropdown-link data-operate="permission" href="javascript:void(0)" @click="open = false">设置权限</x-dropdown-link>
                    <x-dropdown-link data-operate="detail" href="javascript:void(0)" @click="open = false">详细信息</x-dropdown-link>
                    <x-dropdown-link data-operate="rename" href="javascript:void(0)" @click="open = false">重命名</x-dropdown-link>
                    <x-dropdown-link data-operate="download" href="javascript:void(0)" @click="open = false">下载</x-dropdown-link>
                    <x-dropdown-link data-operate="batch_delete" href="javascript:void(0)" @click="open = false">批量删除</x-dropdown-link>
                    <x-dropdown-link data-operate="delete" href="javascript:void(0)" @click="open = false">删除</x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
    <div class="flex space-x-2 items-center">
        <div class="search-input-wrap hidden md:block">
            <i class="fas fa-search search-icon"></i>
            <input type="text" id="search" class="search-input" placeholder="搜索...">
            <button type="button" id="search-clear" class="search-clear-btn" title="清空"><i class="fas fa-times"></i></button>
            <button type="button" id="search-expand" class="search-expand-btn" title="批量搜索"><i class="fas fa-list-ul"></i></button>
        </div>
        <div id="search-batch-popover" class="search-batch-popover">
            <div class="search-batch-header">
                <span class="search-batch-title">批量搜索</span>
                <span class="search-batch-hint">每行一个关键词</span>
            </div>
            <textarea id="search-batch-input" class="search-batch-textarea" rows="6" placeholder="输入关键词，每行一个&#10;例如：&#10;红色连衣裙&#10;蓝色手提包&#10;白色运动鞋"></textarea>
            <div class="search-batch-footer">
                <button type="button" id="search-mode-toggle" class="search-batch-mode" title="切换搜索模式">
                    <span>普通检索</span>
                    <i class="fas fa-brain"></i>
                </button>
                <button type="button" id="search-batch-submit" class="search-batch-submit"><i class="fas fa-search"></i>搜索</button>
            </div>
        </div>
        <div class="toolbar-meta-group">
            <button type="button" class="view-switch-btn toolbar-meta-btn" data-view="grid" title="网格"><i class="fas fa-th"></i></button>
            <button type="button" class="view-switch-btn toolbar-meta-btn" data-view="list" title="列表"><i class="fas fa-list"></i></button>
        </div>
        <div class="toolbar-meta-group">
            <x-dropdown direction="left">
                <x-slot name="trigger">
                    <button type="button" id="order" class="toolbar-meta-btn">
                        <span>最新</span>
                        <i class="fas fa-sort-alpha-up text-blue-500"></i>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('newest'); open = false">最新</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('earliest'); open = false">最早</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('utmost'); open = false">最大</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="setOrderBy('least'); open = false">最小</x-dropdown-link>
                </x-slot>
            </x-dropdown>
            <x-dropdown direction="left">
                <x-slot name="trigger">
                    <button type="button" id="permission" class="toolbar-meta-btn">
                        <span>全部</span>
                        <i class="fas fa-eye text-blue-500"></i>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="javascript:void(0)" @click="open = false; setPermission('all')">全部</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false; setPermission('public')">公开</x-dropdown-link>
                    <x-dropdown-link href="javascript:void(0)" @click="open = false; setPermission('private')">私有</x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>
