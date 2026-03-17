@section('title', '系统设置')

@php
    $sections = [
        ['id' => 'general', 'eyebrow' => '基础', 'title' => '通用信息', 'description' => '维护站点名称、SEO 元信息和首页公告。', 'status' => '核心配置', 'icon' => 'fa-globe'],
        ['id' => 'control', 'eyebrow' => '访问', 'title' => '系统开关', 'description' => '控制注册、画廊、接口和游客上传等入口。', 'status' => '即时生效', 'icon' => 'fa-sliders-h'],
        ['id' => 'user', 'eyebrow' => '容量', 'title' => '用户默认配额', 'description' => '设置新用户的初始可用容量。', 'status' => '运营规则', 'icon' => 'fa-user-cog'],
        ['id' => 'cost', 'eyebrow' => '成本', 'title' => '成本估算', 'description' => '维护存储单价和币种，用于统计页估算。', 'status' => '分析使用', 'icon' => 'fa-coins'],
        ['id' => 'mail', 'eyebrow' => '通知', 'title' => '邮件配置', 'description' => '校准 SMTP 参数并执行在线测试。', 'status' => '需要验证', 'icon' => 'fa-envelope'],
        ['id' => 'upgrade', 'eyebrow' => '运维', 'title' => '系统升级', 'description' => '检查版本、查看更新说明并执行升级。', 'status' => '管理员专属', 'icon' => 'fa-arrow-up'],
    ];

    $controlFlags = [
        (bool) $configs->get('is_enable_registration'),
        (bool) $configs->get('is_enable_gallery'),
        (bool) $configs->get('is_enable_api'),
        (bool) $configs->get('is_allow_guest_upload'),
        (bool) $configs->get('is_user_need_verify'),
    ];

    $enabledControlCount = collect($controlFlags)->filter()->count();
    $mailHost = $configs['mail']['mailers']['smtp']['host'] ?? '';
    $mailConfigured = filled($mailHost);
@endphp

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markdown-css/github-markdown-light.css') }}">
    <style>
        /* ===== Root Shell ===== */
        .settings-shell {
            display: flex;
            flex-direction: column;
            gap: 0;
            color: #0f172a;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* ===== Compact Header Bar ===== */
        .settings-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 24px;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            margin-bottom: 16px;
        }

        .settings-header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .settings-header-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 18px;
            flex-shrink: 0;
        }

        .settings-header-title {
            font-size: 20px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.2;
        }

        .settings-header-sub {
            font-size: 13px;
            color: #64748b;
            margin-top: 2px;
        }

        .settings-header-badges {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .settings-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            color: #475569;
        }

        .settings-badge-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .settings-badge-dot.green { background: #22c55e; }
        .settings-badge-dot.amber { background: #f59e0b; }
        .settings-badge-dot.red { background: #ef4444; }
        .settings-badge-dot.blue { background: #3b82f6; }

        /* ===== Two-Column Layout ===== */
        .settings-layout {
            display: grid;
            gap: 16px;
            grid-template-columns: 260px minmax(0, 1fr);
            align-items: start;
        }

        /* ===== Sidebar ===== */
        .settings-aside {
            position: sticky;
            top: 16px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .settings-nav-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .04);
            overflow: hidden;
        }

        .settings-nav-header {
            padding: 14px 16px 10px;
            border-bottom: 1px solid #f1f5f9;
        }

        .settings-nav-header-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #94a3b8;
        }

        .settings-nav {
            padding: 6px;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .settings-nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 12px;
            border-radius: 10px;
            cursor: pointer;
            transition: all .18s ease;
            text-decoration: none;
            border: 1px solid transparent;
            position: relative;
        }

        .settings-nav-link:hover {
            background: #f8fafc;
            border-color: #e2e8f0;
        }

        .settings-nav-link.active {
            background: #eff6ff;
            border-color: #bfdbfe;
        }

        .settings-nav-link.active .settings-nav-icon {
            background: #1d4ed8;
            color: #fff;
        }

        .settings-nav-link.active .settings-nav-title {
            color: #1d4ed8;
        }

        .settings-nav-icon {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            color: #64748b;
            flex-shrink: 0;
            transition: all .18s ease;
        }

        .settings-nav-text {
            flex: 1;
            min-width: 0;
        }

        .settings-nav-title {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
            transition: color .18s ease;
        }

        .settings-nav-desc {
            font-size: 11px;
            color: #94a3b8;
            margin-top: 1px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .settings-nav-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .settings-nav-dot.green { background: #22c55e; }
        .settings-nav-dot.amber { background: #f59e0b; }
        .settings-nav-dot.red { background: #ef4444; }
        .settings-nav-dot.blue { background: #3b82f6; }

        /* ===== Sidebar Summary Card ===== */
        .settings-summary-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .04);
            padding: 14px;
        }

        .settings-summary-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #94a3b8;
            margin-bottom: 10px;
        }

        .settings-kv {
            display: grid;
            gap: 8px;
        }

        .settings-kv-item {
            padding: 10px 12px;
            border: 1px solid #f1f5f9;
            border-radius: 10px;
            background: #f8fafc;
        }

        .settings-kv-key {
            font-size: 11px;
            letter-spacing: .04em;
            text-transform: uppercase;
            color: #94a3b8;
        }

        .settings-kv-value {
            margin-top: 4px;
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
            word-break: break-word;
        }

        /* ===== Main Content Area ===== */
        .settings-main {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        /* ===== Panel (each tab content) ===== */
        .settings-panel {
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 4px 16px rgba(15, 23, 42, .04);
            overflow: hidden;
            display: none;
        }

        .settings-panel.active {
            display: block;
            animation: settingsFadeIn .25s ease;
        }

        @keyframes settingsFadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .settings-panel-head {
            padding: 20px 22px 18px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 14px;
        }

        .settings-panel-head-left {
            flex: 1;
            min-width: 0;
        }

        .settings-panel-label {
            font-size: 11px;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #94a3b8;
            font-weight: 600;
        }

        .settings-panel-title {
            margin-top: 6px;
            font-size: 20px;
            line-height: 1.2;
            font-weight: 800;
            color: #0f172a;
        }

        .settings-panel-desc {
            margin-top: 6px;
            max-width: 620px;
            font-size: 13px;
            line-height: 1.7;
            color: #64748b;
        }

        .settings-chip {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            min-height: 28px;
            border-radius: 999px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            padding: 0 12px;
            font-size: 12px;
            font-weight: 600;
            color: #475569;
            white-space: nowrap;
            flex-shrink: 0;
        }

        .settings-chip.success {
            border-color: #bbf7d0;
            background: #f0fdf4;
            color: #15803d;
        }

        .settings-chip.warn {
            border-color: #fde68a;
            background: #fffbeb;
            color: #a16207;
        }

        .settings-chip.info {
            border-color: #bfdbfe;
            background: #eff6ff;
            color: #1d4ed8;
        }

        .settings-chip-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .settings-chip.success .settings-chip-dot { background: #22c55e; }
        .settings-chip.warn .settings-chip-dot { background: #f59e0b; }
        .settings-chip.info .settings-chip-dot { background: #3b82f6; }

        .settings-panel-body {
            padding: 22px;
        }

        /* ===== Form Grids ===== */
        .settings-form-grid {
            display: grid;
            gap: 14px;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .settings-field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .settings-field-span-2 {
            grid-column: span 2;
        }

        .settings-label {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
        }

        .settings-help {
            font-size: 12px;
            line-height: 1.6;
            color: #64748b;
        }

        .settings-note {
            margin-top: 14px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            padding: 12px 14px;
            font-size: 12px;
            line-height: 1.6;
            color: #475569;
        }

        .settings-actions {
            margin-top: 18px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* ===== Toggle Grid (Control Board) ===== */
        .settings-toggle-grid {
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }

        .settings-toggle-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #f8fafc;
            padding: 14px;
            display: flex;
            justify-content: space-between;
            gap: 14px;
            align-items: center;
            transition: border-color .2s ease, box-shadow .2s ease;
        }

        .settings-toggle-card .switch {
            flex-shrink: 0;
        }

        .settings-toggle-card:hover {
            border-color: #cbd5e1;
            box-shadow: 0 2px 8px rgba(15, 23, 42, .06);
        }

        .settings-toggle-title {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
        }

        .settings-toggle-copy {
            margin-top: 4px;
            font-size: 12px;
            line-height: 1.6;
            color: #64748b;
        }

        /* ===== Inline Grid (mini stat cards) ===== */
        .settings-inline-grid {
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }

        .settings-mini-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #f8fafc;
            padding: 14px;
        }

        .settings-mini-title {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
        }

        .settings-mini-sub {
            margin-top: 4px;
            font-size: 12px;
            line-height: 1.6;
            color: #64748b;
        }

        .settings-mini-value {
            margin-top: 10px;
            font-size: 18px;
            font-weight: 800;
            color: #0f172a;
        }

        /* ===== Stack ===== */
        .settings-stack {
            display: grid;
            gap: 14px;
        }

        /* ===== Upgrade Board ===== */
        .settings-upgrade-board {
            border: 1px dashed #bfdbfe;
            border-radius: 16px;
            background: linear-gradient(180deg, #eff6ff 0%, #ffffff 100%);
            padding: 14px;
        }

        .settings-upgrade-state {
            min-height: 120px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            background: rgba(255, 255, 255, .92);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 8px;
            text-align: center;
        }

        .settings-upgrade-state span {
            font-size: 13px;
            color: #475569;
        }

        .settings-upgrade-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: rgba(255, 255, 255, .92);
            padding: 16px;
        }

        .settings-upgrade-head {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .settings-upgrade-icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            object-fit: cover;
            box-shadow: 0 8px 16px rgba(15, 23, 42, .10);
        }

        .settings-upgrade-title {
            font-size: 18px;
            font-weight: 800;
            color: #0f172a;
        }

        .settings-upgrade-meta {
            font-size: 12px;
            line-height: 1.7;
            color: #64748b;
        }

        .settings-upgrade-actions {
            margin-top: 18px;
            display: flex;
            justify-content: flex-end;
        }

        .settings-upgrade-actions a {
            text-decoration: none;
        }

        .settings-upgrade-actions a[disabled] {
            pointer-events: none;
        }

        /* ===== Responsive ===== */
        @media (max-width: 1024px) {
            .settings-layout {
                grid-template-columns: 1fr;
            }

            .settings-aside {
                position: static;
            }

            .settings-nav {
                flex-direction: row;
                flex-wrap: wrap;
                gap: 4px;
                padding: 8px;
            }

            .settings-nav-link {
                flex: 0 0 auto;
                padding: 8px 12px;
            }

            .settings-nav-desc {
                display: none;
            }

            .settings-summary-card {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .settings-header {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
                padding: 16px;
            }

            .settings-header-badges {
                width: 100%;
            }

            .settings-panel-head {
                flex-direction: column;
                padding: 16px 18px 14px;
            }

            .settings-panel-body {
                padding: 18px;
            }

            .settings-form-grid {
                grid-template-columns: 1fr;
            }

            .settings-field-span-2 {
                grid-column: span 1;
            }

            .settings-toggle-card {
                flex-direction: column;
            }

            .settings-nav-link {
                padding: 6px 10px;
            }

            .settings-nav-icon {
                width: 28px;
                height: 28px;
                font-size: 11px;
            }

            .settings-nav-text {
                display: none;
            }

            .settings-nav-dot {
                width: 6px;
                height: 6px;
            }
        }
    </style>
@endpush

<x-app-layout>
    <div class="settings-shell">
        {{-- ===== Compact Header Bar ===== --}}
        <header class="settings-header">
            <div class="settings-header-left">
                <div class="settings-header-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <div>
                    <h1 class="settings-header-title">系统设置</h1>
                    <p class="settings-header-sub">站点配置、访问控制、通知和升级管理</p>
                </div>
            </div>
            <div class="settings-header-badges">
                <span class="settings-badge">
                    <span class="settings-badge-dot {{ $enabledControlCount > 0 ? 'green' : 'amber' }}"></span>
                    {{ $enabledControlCount }}/5 开关已启用
                </span>
                <span class="settings-badge">
                    <span class="settings-badge-dot {{ $mailConfigured ? 'green' : 'red' }}"></span>
                    SMTP {{ $mailConfigured ? '已接入' : '待配置' }}
                </span>
                <span class="settings-badge">
                    <span class="settings-badge-dot blue"></span>
                    {{ \App\Utils::config(\App\Enums\ConfigKey::AppVersion) }}
                </span>
            </div>
        </header>

        {{-- ===== Two-Column Layout ===== --}}
        <div class="settings-layout">
            {{-- ===== Sidebar Navigation ===== --}}
            <aside class="settings-aside">
                <div class="settings-nav-card">
                    <div class="settings-nav-header">
                        <div class="settings-nav-header-title">配置导航</div>
                    </div>
                    <nav class="settings-nav">
                        @foreach($sections as $idx => $section)
                            <a class="settings-nav-link {{ $idx === 0 ? 'active' : '' }}"
                               href="javascript:void(0)"
                               data-tab="{{ $section['id'] }}">
                                <div class="settings-nav-icon">
                                    <i class="fas {{ $section['icon'] }}"></i>
                                </div>
                                <div class="settings-nav-text">
                                    <div class="settings-nav-title">{{ $section['title'] }}</div>
                                    <div class="settings-nav-desc">{{ $section['eyebrow'] }}</div>
                                </div>
                                @if($section['id'] === 'mail' && ! $mailConfigured)
                                    <span class="settings-nav-dot red" title="邮件未配置"></span>
                                @elseif($section['id'] === 'control')
                                    <span class="settings-nav-dot green" title="{{ $enabledControlCount }}/5 已启用"></span>
                                @elseif($section['id'] === 'upgrade')
                                    <span class="settings-nav-dot blue" title="检查更新"></span>
                                @endif
                            </a>
                        @endforeach
                    </nav>
                </div>

                {{-- ===== Summary Card ===== --}}
                <div class="settings-summary-card">
                    <div class="settings-summary-title">当前摘要</div>
                    <div class="settings-kv">
                        <div class="settings-kv-item">
                            <div class="settings-kv-key">应用名称</div>
                            <div class="settings-kv-value">{{ $configs->get('app_name') ?: '未设置' }}</div>
                        </div>
                        <div class="settings-kv-item">
                            <div class="settings-kv-key">默认用户容量</div>
                            <div class="settings-kv-value">{{ $configs->get('user_initial_capacity') ?: '0' }} KB</div>
                        </div>
                        <div class="settings-kv-item">
                            <div class="settings-kv-key">存储估算币种</div>
                            <div class="settings-kv-value">{{ $configs->get('storage_cost_currency', 'CNY') }}</div>
                        </div>
                    </div>
                </div>
            </aside>

            {{-- ===== Main Content: Dynamic Panels ===== --}}
            <main class="settings-main">
                @foreach($sections as $idx => $section)
                    <section id="{{ $section['id'] }}" class="settings-panel {{ $idx === 0 ? 'active' : '' }}">
                        <div class="settings-panel-head">
                            <div class="settings-panel-head-left">
                                <div class="settings-panel-label">{{ $section['eyebrow'] }}</div>
                                <h2 class="settings-panel-title">{{ $section['title'] }}</h2>
                                <p class="settings-panel-desc">{{ $section['description'] }}</p>
                            </div>
                            <span class="settings-chip {{ $section['id'] === 'mail' && ! $mailConfigured ? 'warn' : ($section['id'] === 'control' ? 'success' : ($section['id'] === 'upgrade' ? 'info' : '')) }}">
                                @if($section['id'] === 'mail' && ! $mailConfigured)
                                    <span class="settings-chip-dot"></span>
                                @elseif($section['id'] === 'control')
                                    <span class="settings-chip-dot"></span>
                                @endif
                                {{ $section['status'] }}
                            </span>
                        </div>
                        <div class="settings-panel-body">
                            @include('admin.setting.partials.'.$section['id'])
                        </div>
                    </section>
                @endforeach
            </main>
        </div>
    </div>

    <script type="text/html" id="update-tpl">
        <div class="settings-upgrade-card">
            <div class="settings-upgrade-head">
                <img id="icon" src="__icon__" alt="icon" class="settings-upgrade-icon" style="animation-duration: 5s">
                <div>
                    <p class="settings-upgrade-title">Lsky Pro __name__</p>
                    <p class="settings-upgrade-meta">__size__</p>
                    <p class="settings-upgrade-meta">发布于 __pushed_at__</p>
                </div>
            </div>
            <p id="upgrade-message" class="mt-4 text-sm text-gray-500"></p>
            <div class="mt-4 text-sm markdown-body">
                __changelog__
            </div>
            <div class="settings-upgrade-actions">
                <a href="javascript:void(0)" id="install" class="rounded-md px-4 py-2 bg-blue-500 text-white">立即安装</a>
            </div>
        </div>
    </script>

    @push('scripts')
        <script>
            // ===== Data-select driver toggling (for mail driver) =====
            let setSelected = function () {
                $('[data-select]').each(function () {
                    $(`[data-${$(this).data('select')}-driver=${$(this).val()}]`)[this.checked ? 'show' : 'hide']();
                });
            };

            setSelected();

            $('[data-select]').on('click change', function () {
                setSelected();
            });

            // ===== Tab Switching (dynamic panels) =====
            let switchTab = function (tabId) {
                // Hide all panels
                $('.settings-panel').removeClass('active');
                // Show target
                $('#' + tabId).addClass('active');
                // Update nav
                $('.settings-nav-link').removeClass('active');
                $(`.settings-nav-link[data-tab="${tabId}"]`).addClass('active');

                // Re-init driver visibility for newly shown panel
                setSelected();
            };

            // Nav click handler
            $('.settings-nav-link[data-tab]').on('click', function (e) {
                e.preventDefault();
                let tabId = $(this).data('tab');
                switchTab(tabId);
            });

            // Support URL hash navigation
            if (window.location.hash) {
                let hashId = window.location.hash.replace('#', '');
                let target = $(`.settings-nav-link[data-tab="${hashId}"]`);
                if (target.length) {
                    switchTab(hashId);
                }
            }

            // ===== Form Submission =====
            $('form[data-settings-form="save"]').submit(function (e) {
                e.preventDefault();
                axios.put(this.action, $(this).serialize()).then(function (response) {
                    toastr[response.data.status ? 'success' : 'error'](response.data.message)
                });
            });

            // ===== Mail Test =====
            $('#mail-test').click(function () {
                Swal.fire({
                    title: '请输入接收测试邮件的邮箱',
                    input: 'text',
                    inputValue: '',
                    inputAttributes: {
                        type: 'email',
                        autocapitalize: 'off'
                    },
                    showCancelButton: true,
                    confirmButtonText: '确认',
                    showLoaderOnConfirm: true,
                    preConfirm: (value) => {
                        return axios.post('{{ route('admin.settings.mail.test') }}', {
                            email: value,
                        }).then(response => {
                            if (! response.data.status) {
                                throw new Error(response.data.message)
                            }
                            return response.data;
                        }).catch(error => Swal.showValidationMessage(error));
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if (result.isConfirmed) {
                        toastr[result.value.status ? 'success' : 'warning'](result.value.message);
                    }
                })
            });

            // ===== Upgrade Logic =====
            let timer;
            let upgrade = function () {
                return {
                    start: function () {
                        $('#icon').addClass('animate-spin')
                        $('#install').attr('disabled', true).removeClass('bg-blue-500').addClass('cursor-not-allowed bg-gray-400').text('执行升级中...')
                        $('#upgrade-message').text('准备升级...').removeClass('text-red-500').addClass('text-gray-500');

                        timer = setInterval(getProgress, 1500);
                        axios.post('{{ route('admin.settings.upgrade') }}');
                    },
                    stop: function () {
                        $('#icon').removeClass('animate-spin')
                        $('#install').attr('disabled', false).removeClass('cursor-not-allowed bg-gray-400').addClass('bg-blue-500').text('立即安装')
                        clearInterval(timer);
                    }
                };
            };

            let getVersion = function (callback) {
                $('#check-update').show();
                axios.get('{{ route('admin.settings.check.update') }}').then(response => {
                    if (response.data.status && response.data.data.is_update) {
                        $('#check-update').hide();
                        let version = response.data.data.version;
                        let html = $('#update-tpl').html()
                            .replace(/__icon__/g, version.icon)
                            .replace(/__name__/g, version.name)
                            .replace(/__size__/g, version.size)
                            .replace(/__pushed_at__/g, version.pushed_at)
                            .replace(/__changelog__/g, version.changelog);
                        $('#have-update').html(html).show();
                        $('.markdown-body a').attr('target', '_blank');
                        callback && callback(version);
                    } else {
                        $('#not-update').show();
                        $('#check-update').hide();
                    }
                });
            }

            let getProgress = function () {
                axios.get('{{ route('admin.settings.upgrade.progress') }}').then(response => {
                    $('#upgrade-message').text(response.data.data.message);
                    if (response.data.data.status === 'success') {
                        $('#upgrade-message').removeClass('text-gray-500').addClass('text-green-500');
                        $('#install').hide();
                    }
                    if (response.data.data.status === 'fail') {
                        $('#upgrade-message').removeClass('text-gray-500').addClass('text-red-500');
                    }
                    if (response.data.data.status !== 'installing') {
                        upgrade().stop();
                    }
                });
            };

            $(document).on('click', '#install', function () {
                if ($(this).attr('disabled')) {
                    return;
                }
                upgrade().start();
            });

            @if(cache()->has('upgrade_progress'))
                getVersion(() => {
                    $('#icon').addClass('animate-spin')
                    $('#install').attr('disabled', true).removeClass('bg-blue-500').addClass('cursor-not-allowed bg-gray-400').text('正在升级...')
                    $('#upgrade-message').text('请稍等...').removeClass('text-red-500').addClass('text-gray-500');

                    timer = setInterval(getProgress, 1500);
                });
            @else
                getVersion();
            @endif
        </script>
    @endpush
</x-app-layout>
