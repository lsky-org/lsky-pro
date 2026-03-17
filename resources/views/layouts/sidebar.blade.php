<style>
    #app-sidebar {
        display: flex;
        flex-direction: column;
        transition: width .2s ease, transform .25s ease;
    }

    #app-sidebar .brand {
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 10px;
        background: #4b5563;
        color: #fff;
        position: relative;
    }

    #app-sidebar .brand-logo {
        width: 32px;
        height: 32px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(145deg, #22d3ee 0%, #2563eb 100%);
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .03em;
        position: relative;
        box-shadow: 0 4px 12px rgba(34, 211, 238, 0.28);
    }

    #app-sidebar .brand-logo::after {
        content: '';
        position: absolute;
        width: 7px;
        height: 7px;
        border-radius: 999px;
        top: -2px;
        right: -2px;
        background: #fef3c7;
        box-shadow: 0 0 0 2px #4b5563;
    }

    #app-sidebar .brand-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 26px;
        height: 26px;
        border-radius: 999px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: rgba(255, 255, 255, .88);
        transition: .2s ease;
    }

    #app-sidebar .brand-btn:hover {
        background: rgba(255, 255, 255, .12);
        color: #fff;
    }

    #app-sidebar .brand-btn.close {
        right: 8px;
    }

    #app-sidebar .lsky-sidebar-inner {
        height: auto;
        min-height: 0;
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
        padding: 10px 8px 12px;
        align-items: center;
        justify-content: flex-start;
        overflow: visible;
    }

    #app-sidebar .sidebar-menu {
        width: 100%;
        flex: 1 1 auto;
        min-height: 0;
        overflow-y: auto;
        overflow-x: visible;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    #app-sidebar .sidebar-menu::-webkit-scrollbar {
        width: 0;
        height: 0;
    }

    #app-sidebar .menu-group {
        margin-bottom: 10px;
        width: 100%;
    }

    #app-sidebar .menu-title {
        margin-bottom: 6px;
        color: #9ca3af;
        font-size: 11px;
        letter-spacing: .08em;
        text-transform: uppercase;
        text-align: center;
        transition: opacity .2s ease;
    }

    #app-sidebar .menu-list {
        display: flex;
        flex-direction: column;
        align-items: center;
        row-gap: 4px;
    }

    #app-sidebar .menu-entry {
        width: 78px;
        min-height: 58px;
        border-radius: 10px;
        padding: 6px 4px;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 3px;
        color: #334155;
        border: 1px solid transparent;
        transition: .2s ease;
        text-align: center;
    }

    #app-sidebar .menu-entry:hover {
        background: #f1f5f9;
        border-color: #e2e8f0;
    }

    #app-sidebar .menu-entry.active {
        background: #eff6ff;
        border-color: #bfdbfe;
        color: #1d4ed8;
    }

    #app-sidebar .menu-icon {
        font-size: 16px;
        line-height: 1;
    }

    #app-sidebar .menu-name {
        font-size: 10px;
        line-height: 1.2;
        letter-spacing: .02em;
        word-break: break-word;
    }

    #app-sidebar .menu-parent {
        width: 78px;
        min-height: 58px;
        border-radius: 10px;
        padding: 6px 4px;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 3px;
        color: #334155;
        border: 1px solid transparent;
        background: transparent;
        transition: .2s ease;
    }

    #app-sidebar .menu-parent:hover {
        background: #f1f5f9;
        border-color: #e2e8f0;
    }

    #app-sidebar .menu-parent.active {
        background: #eff6ff;
        border-color: #bfdbfe;
        color: #1d4ed8;
    }

    #app-sidebar .submenu-wrap {
        position: relative;
        width: 78px;
    }

    #app-sidebar .submenu-popover {
        position: fixed;
        width: max-content;
        min-width: 0;
        max-width: calc(100vw - 24px);
        max-height: calc(100vh - 120px);
        overflow-y: auto;
        border: 1px solid #dbe2ea;
        border-radius: 10px;
        background: #ffffff;
        box-shadow: 0 12px 24px rgba(15, 23, 42, .12);
        padding: 6px;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    #app-sidebar .submenu-item {
        min-height: 32px;
        border-radius: 8px;
        padding: 0 10px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 8px;
        font-size: 11px;
        color: #475569;
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        text-align: left;
        line-height: 1.2;
        white-space: nowrap;
    }

    #app-sidebar .submenu-item i {
        width: 12px;
        text-align: center;
        font-size: 11px;
        color: #64748b;
    }

    #app-sidebar .submenu-item.active i {
        color: #1d4ed8;
    }

    #app-sidebar .submenu-item.active {
        color: #1d4ed8;
        border-color: #bfdbfe;
        background: #eff6ff;
        font-weight: 600;
    }

    #app-sidebar .sidebar-bottom {
        width: 100%;
        margin-top: 8px;
        padding-top: 8px;
        border-top: 1px solid #f1f5f9;
        display: flex;
        justify-content: center;
        flex: 0 0 auto;
    }

    #app-sidebar .collapse-bottom-btn {
        width: 28px;
        height: 28px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #64748b;
        background: transparent;
        border: 0;
        transition: .2s ease;
        font-size: 16px;
        line-height: 1;
    }

    #app-sidebar .collapse-bottom-btn:hover {
        color: #1d4ed8;
        background: transparent;
    }

    /* ── Collapsed: hide group titles ── */
    #app-sidebar.is-collapsed .menu-title {
        display: none;
    }

    #app-sidebar.is-collapsed .lsky-sidebar-inner {
        padding-left: 7px;
        padding-right: 7px;
        overflow: visible;
    }

    #app-sidebar.is-collapsed .menu-entry,
    #app-sidebar.is-collapsed .menu-parent {
        width: 44px;
        min-height: 44px;
        padding: 0;
        gap: 0;
        border-radius: 10px;
        position: relative;
    }

    #app-sidebar.is-collapsed .submenu-wrap {
        width: 44px;
    }

    #app-sidebar.is-collapsed .menu-icon {
        font-size: 16px;
    }

    #app-sidebar.is-collapsed .sidebar-menu {
        overflow: visible;
    }

    /* ── Collapsed: tooltip on hover ── */
    #app-sidebar.is-collapsed .menu-name {
        position: absolute;
        left: calc(100% + 10px);
        top: 50%;
        transform: translateY(-50%);
        background: #1e293b;
        color: #fff;
        padding: 5px 10px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 600;
        white-space: nowrap;
        word-break: normal;
        opacity: 0;
        pointer-events: none;
        transition: opacity .15s ease;
        z-index: 9999;
        box-shadow: 0 4px 12px rgba(0,0,0,.18);
        letter-spacing: .01em;
    }

    #app-sidebar.is-collapsed .menu-name::before {
        content: '';
        position: absolute;
        left: -4px;
        top: 50%;
        transform: translateY(-50%);
        border: 4px solid transparent;
        border-right-color: #1e293b;
        border-left: 0;
    }

    #app-sidebar.is-collapsed .menu-entry:hover .menu-name,
    #app-sidebar.is-collapsed .menu-parent:hover .menu-name {
        opacity: 1;
    }

    #app-sidebar .mobile-only {
        display: inline-flex;
    }

    #app-sidebar .desktop-only {
        display: none;
    }

    @media (min-width: 640px) {
        #app-sidebar {
            width: 106px;
        }

        #app-sidebar.is-collapsed {
            width: 58px;
        }

        #app-sidebar .mobile-only {
            display: none;
        }

        #app-sidebar .desktop-only {
            display: flex;
        }
    }
</style>

<nav
    id="app-sidebar"
    class="lsky-sidebar"
    :class="{ 'is-open': $store.sidebar.open, 'is-collapsed': collapsed }"
    x-data="{
        collapsed: false,
        advancedOpen: false,
        advancedActive: false,
        advancedPopoverTop: 64,
        advancedPopoverLeft: 120,
        init() {
            try {
                this.collapsed = window.localStorage.getItem('lsky.sidebar.collapsed') === '1';
            } catch (e) {
                this.collapsed = false;
            }
            this.advancedActive = window.location.pathname.startsWith('/advanced');
            this.advancedOpen = false;
            window.addEventListener('resize', () => this.syncAdvancedPopover());
            window.addEventListener('scroll', () => this.syncAdvancedPopover(), true);
        },
        openAdvancedMenu(event) {
            this.advancedOpen = !this.advancedOpen;
            if (this.advancedOpen) {
                this.syncAdvancedPopover(event?.currentTarget);
            }
        },
        syncAdvancedPopover(trigger = null) {
            if (! this.advancedOpen) return;
            const el = trigger || this.$refs.advancedTrigger;
            if (!el) return;
            const rect = el.getBoundingClientRect();
            const estimatedHeight = 340;
            const top = Math.min(Math.max(8, rect.top), window.innerHeight - estimatedHeight - 8);
            this.advancedPopoverTop = top;
            this.advancedPopoverLeft = rect.right + 8;
        },
        toggleCollapsed() {
            this.collapsed = !this.collapsed;
            if (this.collapsed) {
                this.advancedOpen = false;
            }
            try {
                window.localStorage.setItem('lsky.sidebar.collapsed', this.collapsed ? '1' : '0');
            } catch (e) {}
            this.$nextTick(() => {
                this.syncAdvancedPopover();
                window.dispatchEvent(new Event('resize'));
            });
        }
    }"
    @click.outside="advancedOpen = false"
    @keydown.escape.window="advancedOpen = false"
>
    <div class="brand">
        <a href="/" class="brand-logo" title="{{ \App\Utils::config(\App\Enums\ConfigKey::AppName) }}">LS</a>
        <a href="javascript:void(0)" class="brand-btn close mobile-only" @click="$store.sidebar.toggle()"><i class="fas fa-times"></i></a>
    </div>

    <div class="lsky-sidebar-inner">
        <div class="sidebar-menu">
            <div class="menu-group">
                <div class="menu-list">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <x-slot name="icon"><i class="menu-icon fas fa-tachometer-alt text-blue-500"></i></x-slot>
                        <x-slot name="name">仪表盘</x-slot>
                    </x-nav-link>
                </div>
            </div>

            <div class="menu-group">
                <p class="menu-title">我的</p>
                <div class="menu-list">
                    <x-nav-link :href="route('images')" :active="request()->routeIs('images')">
                        <x-slot name="icon"><i class="menu-icon fas fa-images text-blue-500"></i></x-slot>
                        <x-slot name="name">我的图片</x-slot>
                    </x-nav-link>
                    <x-nav-link :href="route('settings')" :active="request()->routeIs('settings')">
                        <x-slot name="icon"><i class="menu-icon fas fa-user-cog text-blue-500"></i></x-slot>
                        <x-slot name="name">设置</x-slot>
                    </x-nav-link>
                </div>
            </div>

            <div class="menu-group">
                <p class="menu-title">高阶</p>
                <div class="menu-list">
                    <div class="submenu-wrap">
                        <button x-ref="advancedTrigger" type="button" class="menu-parent" :class="{ 'active': advancedActive }" @click.stop="openAdvancedMenu($event)">
                            <i class="menu-icon fas fa-rocket text-blue-500"></i>
                            <span class="menu-name">高级功能</span>
                        </button>
                        <div class="submenu-popover" x-show="advancedOpen" x-transition.origin.left :style="`top:${advancedPopoverTop}px;left:${advancedPopoverLeft}px;`" style="display:none;" @click.stop>
                            @if(Auth::user()?->is_adminer)
                            <a class="submenu-item {{ request()->routeIs('advanced') ? 'active' : '' }}" href="{{ route('advanced') }}" @click="advancedOpen = false"><i class="fas fa-th-large"></i><span>总览</span></a>
                            @endif
                            <a class="submenu-item {{ request()->is('advanced/image-process') ? 'active' : '' }}" href="{{ route('advanced.feature', ['feature' => 'image-process']) }}" @click="advancedOpen = false"><i class="fas fa-sliders-h"></i><span>图片编辑</span></a>
                            <a class="submenu-item {{ request()->is('advanced/ai-search') ? 'active' : '' }}" href="{{ route('advanced.feature', ['feature' => 'ai-search']) }}" @click="advancedOpen = false"><i class="fas fa-search"></i><span>AI检索</span></a>
                            <a class="submenu-item {{ request()->is('advanced/ai-prompt') ? 'active' : '' }}" href="{{ route('advanced.feature', ['feature' => 'ai-prompt']) }}" @click="advancedOpen = false"><i class="fas fa-magic"></i><span>AI提示词</span></a>
                            <a class="submenu-item {{ request()->is('advanced/ai-config') ? 'active' : '' }}" href="{{ route('advanced.feature', ['feature' => 'ai-config']) }}" @click="advancedOpen = false"><i class="fas fa-robot"></i><span>AI配置</span></a>
                            @if(Auth::user()?->is_adminer)
                                <a class="submenu-item {{ request()->is('advanced/performance') ? 'active' : '' }}" href="{{ route('advanced.feature', ['feature' => 'performance']) }}" @click="advancedOpen = false"><i class="fas fa-gauge-high"></i><span>系统性能</span></a>
                            @endif
                            <a class="submenu-item {{ request()->is('advanced/drivers') ? 'active' : '' }}" href="{{ route('advanced.feature', ['feature' => 'drivers']) }}" @click="advancedOpen = false"><i class="fas fa-microchip"></i><span>处理驱动</span></a>
                            @if(Auth::user()?->is_adminer)
                            <a class="submenu-item {{ request()->is('advanced/reviews') ? 'active' : '' }}" href="{{ route('advanced.feature', ['feature' => 'reviews']) }}" @click="advancedOpen = false"><i class="fas fa-user-check"></i><span>审核中心</span></a>
                            @endif
                            <a class="submenu-item {{ request()->is('advanced/jobs') ? 'active' : '' }}" href="{{ route('advanced.feature', ['feature' => 'jobs']) }}" @click="advancedOpen = false"><i class="fas fa-tasks"></i><span>作业中心</span></a>
                            <a class="submenu-item {{ request()->is('advanced/team-permissions') ? 'active' : '' }}" href="{{ route('advanced.feature', ['feature' => 'team-permissions']) }}" @click="advancedOpen = false"><i class="fas fa-users-cog"></i><span>团队权限</span></a>
                        </div>
                    </div>
                </div>
            </div>

            @if(\App\Utils::config(\App\Enums\ConfigKey::IsEnableGallery) || \App\Utils::config(\App\Enums\ConfigKey::IsEnableApi))
                <div class="menu-group">
                    <p class="menu-title">公共</p>
                    <div class="menu-list">
                        @if(\App\Utils::config(\App\Enums\ConfigKey::IsEnableGallery))
                            <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                                <x-slot name="icon"><i class="menu-icon fas fa-chalkboard text-blue-500"></i></x-slot>
                                <x-slot name="name">画廊</x-slot>
                            </x-nav-link>
                        @endif
                        @if(\App\Utils::config(\App\Enums\ConfigKey::IsEnableApi))
                            <x-nav-link :href="route('api')" :active="request()->routeIs('api')">
                                <x-slot name="icon"><i class="menu-icon fas fa-link text-blue-500"></i></x-slot>
                                <x-slot name="name">接口</x-slot>
                            </x-nav-link>
                        @endif
                    </div>
                </div>
            @endif

            @if(Auth::user()->is_adminer)
                <div class="menu-group">
                    <p class="menu-title">系统</p>
                    <div class="menu-list">
                        <x-nav-link :href="route('admin.console')" :active="request()->is('admin/console')">
                            <x-slot name="icon"><i class="menu-icon fas fa-chart-line text-blue-500"></i></x-slot>
                            <x-slot name="name">控制台</x-slot>
                        </x-nav-link>
                        <x-nav-link :href="route('admin.groups')" :active="request()->is('admin/groups*')">
                            <x-slot name="icon"><i class="menu-icon fas fa-users text-blue-500"></i></x-slot>
                            <x-slot name="name">角色组</x-slot>
                        </x-nav-link>
                        <x-nav-link :href="route('admin.users')" :active="request()->is('admin/users*')">
                            <x-slot name="icon"><i class="menu-icon fas fa-users-cog text-blue-500"></i></x-slot>
                            <x-slot name="name">用户管理</x-slot>
                        </x-nav-link>
                        <x-nav-link :href="route('admin.images')" :active="request()->is('admin/images*')">
                            <x-slot name="icon"><i class="menu-icon fas fa-images text-blue-500"></i></x-slot>
                            <x-slot name="name">图片管理</x-slot>
                        </x-nav-link>
                        <x-nav-link :href="route('admin.strategies')" :active="request()->is('admin/strategies*')">
                            <x-slot name="icon"><i class="menu-icon fas fa-hdd text-blue-500"></i></x-slot>
                            <x-slot name="name">储存策略</x-slot>
                        </x-nav-link>
                        <x-nav-link :href="route('admin.settings')" :active="request()->is('admin/settings*')">
                            <x-slot name="icon"><i class="menu-icon fas fa-cogs text-blue-500"></i></x-slot>
                            <x-slot name="name">系统设置</x-slot>
                        </x-nav-link>
                    </div>
                </div>
            @endif
        </div>

        <div class="sidebar-bottom desktop-only">
            <button type="button" class="collapse-bottom-btn" @click="toggleCollapsed()" :title="collapsed ? '展开菜单' : '折叠菜单'">
                <i class="fas" :class="collapsed ? 'fa-angle-double-right' : 'fa-angle-double-left'"></i>
            </button>
        </div>
    </div>
</nav>
