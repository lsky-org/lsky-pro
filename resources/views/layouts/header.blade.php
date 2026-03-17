@php
    /** @var \App\Models\User $headerUser */
    $headerUser = Auth::user();
    $headerGroup = $_group ?? (object) ['strategies' => collect()];
    $noticePayload = $_is_notice ?? null;
    $hasNotice = filled($noticePayload);
    $dashboardUrl = route('dashboard', [], false);
    $pinnedTabs = collect(Auth::user()?->configs?->get(\App\Enums\UserConfigKey::HeaderPinnedTabs, []))
        ->map(function ($item) {
            return [
                'title' => trim((string) data_get($item, 'title', '')),
                'url' => trim((string) data_get($item, 'url', '')),
            ];
        })
        ->filter(fn ($item) => $item['title'] !== '' && $item['url'] !== '' && str_starts_with($item['url'], '/'))
        ->unique('url')
        ->values();

    if (! $pinnedTabs->contains(fn ($item) => $item['url'] === $dashboardUrl)) {
        $pinnedTabs->prepend(['title' => '仪表盘', 'url' => $dashboardUrl]);
    }
@endphp

<style>
    #app-header {
        display: block;
    }

    #app-header .header-top {
        min-height: 48px;
        padding-left: 12px;
        padding-right: 16px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    #app-header .header-left {
        display: flex;
        align-items: center;
        flex: 1 1 auto;
        min-width: 0;
        max-width: calc(100% - 250px);
    }

    #app-header .header-right {
        display: flex;
        align-items: center;
        gap: 8px;
        flex: 0 0 auto;
        min-width: 0;
    }

    #app-header .header-action {
        height: 34px;
        border-radius: 999px;
        border: 1px solid rgba(255, 255, 255, .16);
        background: rgba(17, 24, 39, .38);
        color: #fff;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 0 10px 0 4px;
        font-size: 12px;
        line-height: 1;
        transition: .2s ease;
    }

    #app-header .header-action#user-menu-button {
        width: 34px;
        padding: 0;
        justify-content: center;
    }

    #app-header .header-action:hover {
        background: rgba(17, 24, 39, .55);
        border-color: rgba(255, 255, 255, .28);
    }

    #app-header .header-action-icon {
        width: 26px;
        height: 26px;
        border-radius: 999px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, .95);
        color: #111827;
        flex: 0 0 auto;
    }

    #app-header .header-action-text {
        white-space: nowrap;
        max-width: 120px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #app-header .header-title {
        display: none;
    }

    #app-header .tabs-wrap {
        min-height: 0;
        padding: 0;
        position: relative;
        flex: 1 1 auto;
        min-width: 0;
        margin-right: 10px;
    }

    #app-header .tabs-list {
        display: flex;
        align-items: center;
        gap: 6px;
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    #app-header .tabs-list::-webkit-scrollbar {
        width: 0;
        height: 0;
    }

    #app-header .header-tab {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        height: 26px;
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, .18);
        padding: 0 8px;
        color: rgba(255, 255, 255, .92);
        background: rgba(255, 255, 255, .06);
        font-size: 12px;
        cursor: pointer;
        user-select: none;
        transition: .2s ease;
    }

    #app-header .header-tab:hover {
        background: rgba(255, 255, 255, .15);
        border-color: rgba(255, 255, 255, .28);
    }

    #app-header .header-tab.active {
        background: #fff;
        color: #1f2937;
        border-color: #fff;
    }

    #app-header .header-tab.pinned .tab-title::before {
        content: '\f08d';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        margin-right: 6px;
        font-size: 10px;
        opacity: .8;
    }

    #app-header .tab-close {
        width: 14px;
        height: 14px;
        border-radius: 999px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
    }

    #app-header .tab-close:hover {
        background: rgba(17, 24, 39, .12);
    }

    #header-tab-menu {
        position: fixed;
        z-index: 80;
        min-width: 160px;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        background: #fff;
        box-shadow: 0 10px 28px rgba(15, 23, 42, .18);
        padding: 4px;
        display: none;
    }

    #header-tab-menu .menu-item {
        display: flex;
        width: 100%;
        border: 0;
        border-radius: 6px;
        padding: 7px 8px;
        text-align: left;
        color: #1f2937;
        background: transparent;
        font-size: 12px;
        cursor: pointer;
    }

    #header-tab-menu .menu-item:hover:not(:disabled) {
        background: #f1f5f9;
    }

    #header-tab-menu .menu-item:disabled {
        color: #9ca3af;
        cursor: not-allowed;
    }

    #app-header .header-right .relative > div[role='menu'] {
        margin-top: 8px;
        width: max-content !important;
        min-width: 0 !important;
        max-width: calc(100vw - 24px);
        border: 1px solid #dbe3ef;
        border-radius: 10px;
        background: #ffffff;
        box-shadow: 0 16px 30px rgba(15, 23, 42, .16);
        padding: 6px;
    }

    #app-header .header-right .relative > div[role='menu'] a[role='menuitem'] {
        display: flex;
        align-items: center;
        border-radius: 8px;
        min-height: 34px;
        padding: 0 12px;
        color: #1f2937;
        font-size: 13px;
        transition: .18s ease;
        width: auto;
        white-space: nowrap;
        overflow: visible;
    }

    #app-header .header-right .relative > div[role='menu'] a[role='menuitem']:hover {
        background: #eef4ff;
        color: #1d4ed8;
    }

    #app-header #strategies {
        max-height: min(360px, 60vh);
        overflow-y: auto;
    }

    #profile-panel {
        position: fixed;
        inset: 0;
        z-index: 85;
        background: rgba(15, 23, 42, .45);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 16px;
    }

    #profile-panel.show {
        display: flex;
    }

    #profile-panel .profile-card {
        width: min(820px, 100%);
        max-height: 88vh;
        overflow: auto;
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        box-shadow: 0 14px 30px rgba(15, 23, 42, .2);
    }

    #profile-panel .profile-head {
        min-height: 46px;
        border-bottom: 1px solid #e2e8f0;
        padding: 0 12px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 14px;
        font-weight: 700;
        color: #0f172a;
    }

    #profile-panel .profile-body {
        padding: 12px;
    }

    #profile-panel .profile-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
    }

    #profile-panel .profile-item {
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        background: #f8fafc;
        padding: 10px;
    }

    #profile-panel .profile-k {
        font-size: 11px;
        color: #64748b;
        margin-bottom: 4px;
    }

    #profile-panel .profile-v {
        font-size: 13px;
        color: #0f172a;
        word-break: break-all;
    }

    #profile-panel .token-box {
        margin-top: 12px;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        background: #fff;
        padding: 10px;
    }

    #profile-panel .token-title {
        font-size: 13px;
        font-weight: 700;
        color: #0f172a;
    }

    #profile-panel .token-sub {
        margin-top: 4px;
        font-size: 12px;
        color: #64748b;
    }

    #profile-panel .token-form {
        margin-top: 10px;
        display: flex;
        gap: 8px;
        align-items: center;
        flex-wrap: wrap;
    }

    #profile-panel .token-input {
        height: 34px;
        border: 1px solid #dbe2ea;
        border-radius: 8px;
        padding: 0 10px;
        font-size: 12px;
        color: #0f172a;
        min-width: 220px;
        flex: 1 1 280px;
    }

    #profile-panel .token-btn {
        height: 34px;
        border: 1px solid #dbe2ea;
        border-radius: 8px;
        background: #f8fafc;
        color: #334155;
        font-size: 12px;
        padding: 0 12px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    #profile-panel .token-output {
        margin-top: 10px;
        border: 1px dashed #dbe2ea;
        border-radius: 8px;
        background: #f8fafc;
        padding: 10px;
        font-size: 12px;
        color: #0f172a;
        word-break: break-all;
        min-height: 44px;
    }

    @media (max-width: 640px) {
        #app-header .header-left {
            max-width: calc(100% - 72px);
        }

        #app-header .header-right .header-action-text {
            display: none;
        }

        #app-header .header-action {
            width: 34px;
            padding: 0;
            justify-content: center;
        }

        #profile-panel .profile-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<header id="app-header" class="lsky-header">
    <div class="header-top">
        <div class="header-left">
            <a href="javascript:void(0)" @click="$store.sidebar.toggle()" class="w-8 h-8 rounded-full sm:hidden -ml-1 mr-3 flex justify-center items-center">
                <i class="fas fa-bars"></i>
            </a>
            <span class="header-title" id="header-title">@yield('title', \App\Utils::config(\App\Enums\ConfigKey::AppName))</span>
            <div
                id="header-tabs-root"
                class="tabs-wrap"
                data-dashboard-url="{{ $dashboardUrl }}"
                data-save-url="{{ route('settings.header-tabs.save') }}"
                data-pinned-tabs='@json($pinnedTabs)'
            >
                <div id="header-tabs" class="tabs-list"></div>
            </div>
        </div>
        <div class="header-right">
            @includeWhen($hasNotice, 'layouts.notice', ['_is_notice' => $noticePayload])
            @includeWhen(collect($headerGroup->strategies ?? [])->isNotEmpty(), 'layouts.strategies')
            @include('layouts.user-nav')
        </div>
    </div>
</header>

<div id="header-tab-menu">
    <button class="menu-item" data-action="close-current">关闭当前选项卡</button>
    <button class="menu-item" data-action="close-left">关闭左侧选项卡</button>
    <button class="menu-item" data-action="close-all">关闭全部选项卡</button>
    <button class="menu-item" data-action="toggle-pin">固定 / 取消固定</button>
</div>

<div id="profile-panel">
    <div class="profile-card">
        <div class="profile-head">
            <span>个人信息</span>
            <button type="button" id="profile-panel-close" class="text-slate-500"><i class="fas fa-times"></i></button>
        </div>
        <div class="profile-body">
            <div class="profile-grid">
                <div class="profile-item">
                    <div class="profile-k">用户ID</div>
                    <div class="profile-v">{{ $headerUser->id }}</div>
                </div>
                <div class="profile-item">
                    <div class="profile-k">用户名</div>
                    <div class="profile-v">{{ $headerUser->name }}</div>
                </div>
                <div class="profile-item">
                    <div class="profile-k">邮箱</div>
                    <div class="profile-v">{{ $headerUser->email }}</div>
                </div>
                <div class="profile-item">
                    <div class="profile-k">个人主页</div>
                    <div class="profile-v">{{ $headerUser->url ?: '-' }}</div>
                </div>
                <div class="profile-item">
                    <div class="profile-k">用户组</div>
                    <div class="profile-v">{{ $headerUser->group?->name ?: '-' }}</div>
                </div>
                <div class="profile-item">
                    <div class="profile-k">账号状态</div>
                    <div class="profile-v">{{ $headerUser->status ? '正常' : '冻结' }}</div>
                </div>
                <div class="profile-item">
                    <div class="profile-k">注册IP</div>
                    <div class="profile-v">{{ $headerUser->registered_ip ?: '-' }}</div>
                </div>
                <div class="profile-item">
                    <div class="profile-k">注册时间</div>
                    <div class="profile-v">{{ $headerUser->created_at }}</div>
                </div>
                <div class="profile-item">
                    <div class="profile-k">邮箱验证</div>
                    <div class="profile-v">{{ $headerUser->email_verified_at ? '已验证' : '未验证' }}</div>
                </div>
                <div class="profile-item">
                    <div class="profile-k">社交登录来源</div>
                    <div class="profile-v">{{ $headerUser->provider ?: '-' }}</div>
                </div>
            </div>
            <div class="token-box">
                <div class="token-title">Bearer Token（Sanctum）</div>
                <div class="token-sub">请输入当前登录密码后获取 Token。系统不会也不能反查你的明文密码。</div>
                <div class="token-form">
                    <input type="password" id="profile-token-password" class="token-input" placeholder="请输入当前密码">
                    <button type="button" id="profile-token-issue" class="token-btn"><i class="fas fa-key"></i>获取 Token</button>
                    <button type="button" id="profile-token-copy" class="token-btn"><i class="fas fa-copy"></i>复制</button>
                </div>
                <div id="profile-token-output" class="token-output">未生成</div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        (function () {
            const root = document.getElementById('header-tabs-root');
            const tabsNode = document.getElementById('header-tabs');
            const menuNode = document.getElementById('header-tab-menu');
            if (!root || !tabsNode || !menuNode) return;

            const STORAGE_KEY = 'lsky.header.tabs.v1';
            const dashboardUrl = root.dataset.dashboardUrl || '/dashboard';
            const saveUrl = root.dataset.saveUrl;

            let contextIndex = -1;
            let tabs = [];

            const parseJSON = (raw, fallback = []) => {
                try {
                    return JSON.parse(raw);
                } catch (e) {
                    return fallback;
                }
            };

            const toPath = (url) => {
                try {
                    return new URL(url, window.location.origin).pathname;
                } catch (e) {
                    return url || '/';
                }
            };

            const normalize = (input, pinnedFallback = false) => {
                const seen = new Set();
                return (Array.isArray(input) ? input : []).reduce((acc, item) => {
                    const path = toPath(item.url || '').trim();
                    const title = String(item.title || '').trim();
                    if (!path || !title || !path.startsWith('/')) return acc;
                    if (seen.has(path)) return acc;
                    seen.add(path);
                    acc.push({
                        key: path,
                        url: path,
                        title: title.slice(0, 30),
                        pinned: Boolean(item.pinned ?? pinnedFallback),
                    });
                    return acc;
                }, []);
            };

            const ensureDashboardPinned = (items) => {
                const dashboard = items.find((t) => t.key === dashboardUrl);
                if (dashboard) {
                    dashboard.pinned = true;
                    if (!dashboard.title) dashboard.title = '仪表盘';
                    return items;
                }
                items.unshift({
                    key: dashboardUrl,
                    url: dashboardUrl,
                    title: '仪表盘',
                    pinned: true,
                });
                return items;
            };

            const syncPinnedToServer = () => {
                const pinned = tabs.filter((t) => t.pinned).map((t) => ({ title: t.title, url: t.url }));
                if (!saveUrl) return;
                axios.put(saveUrl, { tabs: pinned }).catch(() => {});
            };

            const persistLocal = () => {
                window.localStorage.setItem(STORAGE_KEY, JSON.stringify(tabs));
            };

            const activePath = () => window.location.pathname;

            const getCurrentTitle = () => {
                const node = document.getElementById('header-title');
                return (node?.textContent || document.title || '页面').trim().slice(0, 30);
            };

            const mergeTabs = () => {
                const pinnedTabs = normalize(parseJSON(root.dataset.pinnedTabs || '[]'), true);
                const localTabs = normalize(parseJSON(window.localStorage.getItem(STORAGE_KEY) || '[]'), false);
                const current = {
                    key: activePath(),
                    url: activePath(),
                    title: getCurrentTitle(),
                    pinned: false,
                };

                const map = new Map();
                [...pinnedTabs, ...localTabs, current].forEach((tab) => {
                    if (map.has(tab.key)) {
                        const prev = map.get(tab.key);
                        map.set(tab.key, {
                            ...prev,
                            title: tab.title || prev.title,
                            pinned: prev.pinned || tab.pinned,
                        });
                    } else {
                        map.set(tab.key, tab);
                    }
                });

                tabs = ensureDashboardPinned(Array.from(map.values()));
                persistLocal();
            };

            const goTab = (index) => {
                const tab = tabs[index];
                if (!tab) return;
                window.location.href = tab.url;
            };

            const closeTab = (index) => {
                const tab = tabs[index];
                if (!tab || tab.pinned || tab.key === dashboardUrl) return;

                const isCurrent = tab.key === activePath();
                tabs.splice(index, 1);
                ensureDashboardPinned(tabs);
                persistLocal();
                render();

                if (isCurrent) {
                    const fallback = tabs[Math.max(0, index - 1)] || tabs[0] || { url: dashboardUrl };
                    window.location.href = fallback.url;
                }
            };

            const closeLeft = (index) => {
                tabs = tabs.filter((tab, i) => i >= index || tab.pinned || tab.key === dashboardUrl);
                ensureDashboardPinned(tabs);
                persistLocal();
                render();
            };

            const closeAll = () => {
                const currentKey = activePath();
                tabs = tabs.filter((tab) => tab.pinned || tab.key === dashboardUrl || tab.key === currentKey);
                ensureDashboardPinned(tabs);
                persistLocal();
                render();
            };

            const togglePin = (index) => {
                const tab = tabs[index];
                if (!tab) return;

                if (tab.key === dashboardUrl) {
                    tab.pinned = true;
                } else {
                    tab.pinned = !tab.pinned;
                }

                if (tab.pinned) {
                    const moved = tabs.splice(index, 1)[0];
                    let lastPinned = 0;
                    tabs.forEach((item, idx) => {
                        if (item.pinned) lastPinned = idx + 1;
                    });
                    const pos = Math.max(1, lastPinned);
                    tabs.splice(pos, 0, moved);
                }

                ensureDashboardPinned(tabs);
                persistLocal();
                syncPinnedToServer();
                render();
            };

            const menuCanCloseCurrent = (index) => {
                const tab = tabs[index];
                return Boolean(tab && !tab.pinned && tab.key !== dashboardUrl);
            };

            const showMenu = (event, index) => {
                contextIndex = index;
                const tab = tabs[index];
                if (!tab) return;

                const closeCurrentBtn = menuNode.querySelector('[data-action="close-current"]');
                const closeLeftBtn = menuNode.querySelector('[data-action="close-left"]');
                const closeAllBtn = menuNode.querySelector('[data-action="close-all"]');
                const togglePinBtn = menuNode.querySelector('[data-action="toggle-pin"]');

                closeCurrentBtn.disabled = !menuCanCloseCurrent(index);
                closeLeftBtn.disabled = index <= 0;
                closeAllBtn.disabled = tabs.filter((t) => !t.pinned && t.key !== dashboardUrl && t.key !== activePath()).length === 0;

                togglePinBtn.textContent = tab.pinned ? '取消固定该选项卡' : '固定该选项卡';
                togglePinBtn.disabled = tab.key === dashboardUrl;

                menuNode.style.display = 'block';
                menuNode.style.left = `${event.clientX + 2}px`;
                menuNode.style.top = `${event.clientY + 2}px`;
            };

            const hideMenu = () => {
                contextIndex = -1;
                menuNode.style.display = 'none';
            };

            const esc = (text) => String(text)
                .replaceAll('&', '&amp;')
                .replaceAll('<', '&lt;')
                .replaceAll('>', '&gt;')
                .replaceAll('"', '&quot;')
                .replaceAll("'", '&#39;');

            const render = () => {
                const currentKey = activePath();
                tabsNode.innerHTML = tabs.map((tab, index) => {
                    const closable = !tab.pinned && tab.key !== dashboardUrl;
                    return `
                        <div class="header-tab ${tab.key === currentKey ? 'active' : ''} ${tab.pinned ? 'pinned' : ''}" data-index="${index}">
                            <span class="tab-title">${esc(tab.title)}</span>
                            ${closable ? '<span class="tab-close" title="关闭"><i class="fas fa-times"></i></span>' : ''}
                        </div>
                    `;
                }).join('');
            };

            tabsNode.addEventListener('click', function (event) {
                const closeNode = event.target.closest('.tab-close');
                const tabNode = event.target.closest('.header-tab');
                if (!tabNode) return;

                const index = Number(tabNode.dataset.index);
                if (!Number.isInteger(index)) return;

                if (closeNode) {
                    event.stopPropagation();
                    closeTab(index);
                    return;
                }

                goTab(index);
            });

            tabsNode.addEventListener('contextmenu', function (event) {
                const tabNode = event.target.closest('.header-tab');
                if (!tabNode) return;
                event.preventDefault();
                const index = Number(tabNode.dataset.index);
                if (!Number.isInteger(index)) return;
                showMenu(event, index);
            });

            menuNode.addEventListener('click', function (event) {
                const btn = event.target.closest('.menu-item');
                if (!btn || btn.disabled || contextIndex < 0) return;
                const action = btn.dataset.action;

                if (action === 'close-current') closeTab(contextIndex);
                if (action === 'close-left') closeLeft(contextIndex);
                if (action === 'close-all') closeAll();
                if (action === 'toggle-pin') togglePin(contextIndex);

                hideMenu();
            });

            document.addEventListener('click', function (event) {
                if (!menuNode.contains(event.target)) hideMenu();
            });

            window.addEventListener('resize', hideMenu);
            window.addEventListener('scroll', hideMenu, true);

            mergeTabs();
            syncPinnedToServer();
            render();
        })();
    </script>
    <script>
        (function () {
            const $panel = $('#profile-panel');
            const $open = $('#open-profile-panel');
            const $close = $('#profile-panel-close');
            const $pwd = $('#profile-token-password');
            const $issue = $('#profile-token-issue');
            const $copy = $('#profile-token-copy');
            const $output = $('#profile-token-output');

            const openPanel = function () {
                $panel.addClass('show');
            };
            const closePanel = function () {
                $panel.removeClass('show');
            };

            $open.on('click', function (e) {
                e.preventDefault();
                openPanel();
            });
            $close.on('click', function () {
                closePanel();
            });
            $panel.on('click', function (e) {
                if (e.target.id === 'profile-panel') closePanel();
            });

            $issue.on('click', function () {
                const password = String($pwd.val() || '');
                if (!password) {
                    toastr.warning('请输入当前密码');
                    return;
                }
                $issue.prop('disabled', true);
                axios.post('{{ route('settings.api-token.issue') }}', {password: password})
                    .then(response => {
                        if (!response.data.status) {
                            toastr.warning(response.data.message || '获取失败');
                            return;
                        }
                        const bearer = response.data?.data?.bearer_token || '';
                        $output.text(bearer || '获取失败');
                        if (bearer) toastr.success('Token 获取成功');
                    })
                    .catch(error => {
                        const message = error?.response?.data?.message || '获取失败';
                        toastr.error(message);
                    })
                    .finally(() => {
                        $issue.prop('disabled', false);
                    });
            });

            $copy.on('click', function () {
                const text = String($output.text() || '');
                if (!text || text === '未生成') {
                    toastr.warning('请先获取 Token');
                    return;
                }
                navigator.clipboard.writeText(text).then(() => {
                    toastr.success('已复制 Bearer Token');
                }).catch(() => {
                    toastr.warning('复制失败');
                });
            });

            $(document).on('keydown', function (e) {
                if (!$panel.hasClass('show')) return;
                if (e.key === 'Escape') {
                    e.preventDefault();
                    closePanel();
                }
            });
        })();
    </script>
@endpush
