@section('title', '创建角色组')

@push('styles')
    <style>
        /* ===== Root Shell ===== */
        .group-shell {
            display: flex;
            flex-direction: column;
            gap: 0;
            color: #0f172a;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* ===== Toolbar ===== */
        .group-toolbar {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 8px 12px;
            border-bottom: 1px solid #f1f5f9;
        }

        .group-toolbar-group {
            display: inline-flex;
            align-items: center;
            border: 1px solid #dbe2ea;
            border-radius: 8px;
            overflow: hidden;
            background: #f8fafc;
        }

        .group-toolbar-group a,
        .group-toolbar-group button,
        .group-toolbar-group .group-toolbar-btn {
            height: 30px;
            border: 0;
            border-right: 1px solid #dbe2ea;
            border-radius: 0;
            background: transparent;
            color: #334155;
            font-size: 12px;
            line-height: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 0 12px;
            white-space: nowrap;
            cursor: pointer;
            text-decoration: none;
            transition: all .15s;
        }

        .group-toolbar-group > :last-child {
            border-right: 0;
        }

        .group-toolbar-group a:hover,
        .group-toolbar-group button:hover {
            background: #eff6ff;
            color: #1d4ed8;
        }

        /* ===== Two-Column Layout ===== */
        .group-layout {
            display: grid;
            gap: 16px;
            grid-template-columns: 260px minmax(0, 1fr);
            align-items: start;
        }

        /* ===== Sidebar ===== */
        .group-aside {
            position: sticky;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .group-nav-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .04);
            overflow: hidden;
        }

        .group-nav-header {
            padding: 14px 16px 10px;
            border-bottom: 1px solid #f1f5f9;
        }

        .group-nav-header-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #94a3b8;
        }

        .group-nav {
            padding: 6px;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .group-nav-link {
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

        .group-nav-link:hover {
            background: #f8fafc;
            border-color: #e2e8f0;
        }

        .group-nav-link.active {
            background: #eff6ff;
            border-color: #bfdbfe;
        }

        .group-nav-link.active .group-nav-icon {
            background: #1d4ed8;
            color: #fff;
        }

        .group-nav-link.active .group-nav-title {
            color: #1d4ed8;
        }

        .group-nav-icon {
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

        .group-nav-text {
            flex: 1;
            min-width: 0;
        }

        .group-nav-title {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
            transition: color .18s ease;
        }

        .group-nav-desc {
            font-size: 11px;
            color: #94a3b8;
            margin-top: 1px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .group-nav-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .group-nav-dot.green { background: #22c55e; }
        .group-nav-dot.amber { background: #f59e0b; }
        .group-nav-dot.red { background: #ef4444; }
        .group-nav-dot.blue { background: #3b82f6; }

        /* ===== Sidebar Hint Card ===== */
        .group-hint-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .04);
            padding: 14px;
        }

        .group-hint-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #94a3b8;
            margin-bottom: 10px;
        }

        .group-hint-body {
            font-size: 12px;
            line-height: 1.7;
            color: #64748b;
        }

        .group-hint-body p {
            margin-bottom: 6px;
        }

        .group-hint-body p:last-child {
            margin-bottom: 0;
        }

        /* ===== Main Content Area ===== */
        .group-main {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .group-main-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(15, 23, 42, .04);
            overflow: hidden;
        }

        /* ===== Panel (each tab content) ===== */
        .group-panel {
            display: none;
        }

        .group-panel.active {
            display: block;
        }


        .group-panel-head {
            padding: 20px 22px 18px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 14px;
        }

        .group-panel-head-left {
            flex: 1;
            min-width: 0;
        }

        .group-panel-label {
            font-size: 11px;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #94a3b8;
            font-weight: 600;
        }

        .group-panel-title {
            margin-top: 6px;
            font-size: 20px;
            line-height: 1.2;
            font-weight: 800;
            color: #0f172a;
        }

        .group-panel-desc {
            margin-top: 6px;
            max-width: 620px;
            font-size: 13px;
            line-height: 1.7;
            color: #64748b;
        }

        .group-chip {
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

        .group-chip.success {
            border-color: #bbf7d0;
            background: #f0fdf4;
            color: #15803d;
        }

        .group-chip.warn {
            border-color: #fde68a;
            background: #fffbeb;
            color: #a16207;
        }

        .group-chip.info {
            border-color: #bfdbfe;
            background: #eff6ff;
            color: #1d4ed8;
        }

        .group-chip-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .group-chip.success .group-chip-dot { background: #22c55e; }
        .group-chip.warn .group-chip-dot { background: #f59e0b; }
        .group-chip.info .group-chip-dot { background: #3b82f6; }

        .group-panel-body {
            padding: 22px;
            min-height: calc(100vh - 280px);
        }

        /* ===== Form Grids ===== */
        .group-form-grid {
            display: grid;
            gap: 14px;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .group-field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .group-field-span-2 {
            grid-column: span 2;
        }

        .group-label {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
        }

        .group-label .req {
            color: #ef4444;
            margin-right: 2px;
        }

        .group-help {
            font-size: 12px;
            line-height: 1.6;
            color: #64748b;
        }

        .group-note {
            margin-top: 14px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            padding: 12px 14px;
            font-size: 12px;
            line-height: 1.6;
            color: #475569;
        }

        /* ===== Toggle Grid (switch cards) ===== */
        .group-toggle-grid {
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }

        .group-toggle-card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #f8fafc;
            padding: 14px;
            display: flex;
            justify-content: space-between;
            gap: 14px;
            align-items: flex-start;
            transition: border-color .2s ease, box-shadow .2s ease;
        }

        .group-toggle-card:hover {
            border-color: #cbd5e1;
            box-shadow: 0 2px 8px rgba(15, 23, 42, .06);
        }

        .group-toggle-title {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
        }

        .group-toggle-copy {
            margin-top: 4px;
            font-size: 12px;
            line-height: 1.6;
            color: #64748b;
        }

        /* ===== Stack ===== */
        .group-stack {
            display: grid;
            gap: 14px;
        }

        /* ===== Preview Box ===== */
        .group-preview-box {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 6px;
            padding: 8px 12px;
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 8px;
            font-size: 12px;
            color: #15803d;
            word-break: break-all;
        }

        .group-preview-box i {
            color: #22c55e;
            flex-shrink: 0;
        }

        .group-preview-box .preview-label {
            color: #4ade80;
            font-weight: 500;
            white-space: nowrap;
        }

        /* ===== Driver Cards ===== */
        .group-driver-cards {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .group-driver-card {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            cursor: pointer;
            transition: all .15s;
            min-width: 140px;
            background: #fff;
        }

        .group-driver-card:hover {
            border-color: #bfdbfe;
            background: #fafafe;
        }

        .group-driver-card.selected {
            border-color: #3b82f6;
            background: #eff6ff;
            box-shadow: 0 0 0 1px #3b82f6;
        }

        .group-driver-card input[type="radio"] {
            display: none;
        }

        .group-driver-logo {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .group-driver-logo.logo-tencent { background: #e0f2fe; color: #0284c7; }
        .group-driver-logo.logo-aliyun { background: #fef3c7; color: #d97706; }
        .group-driver-logo.logo-nsfwjs { background: #ede9fe; color: #7c3aed; }
        .group-driver-logo.logo-font { background: #fce7f3; color: #db2777; }
        .group-driver-logo.logo-image { background: #d1fae5; color: #059669; }

        .group-driver-name {
            font-size: 14px;
            font-weight: 600;
            color: #1e293b;
        }

        .group-driver-desc {
            font-size: 11px;
            color: #94a3b8;
            margin-top: 1px;
        }

        /* ===== Driver Config Panel ===== */
        .group-driver-config {
            margin-top: 20px;
            padding: 20px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
        }

        .group-driver-config-title {
            font-size: 13px;
            font-weight: 600;
            color: #475569;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .group-driver-config-title .help-link {
            font-size: 12px;
            color: #3b82f6;
            text-decoration: none;
            font-weight: 400;
        }

        .group-driver-config-title .help-link:hover {
            text-decoration: underline;
        }

        /* ===== Upload Frequency Limits ===== */
        /* (removed: now uses .group-form-grid layout) */

        .group-add-limit-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 10px;
            font-size: 13px;
            color: #3b82f6;
            background: #eff6ff;
            border: 1px dashed #93c5fd;
            border-radius: 8px;
            cursor: pointer;
            transition: all .15s;
        }

        .group-add-limit-btn:hover {
            background: #dbeafe;
            border-color: #3b82f6;
        }

        /* ===== File Type Badges ===== */
        .group-file-type-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .group-file-type-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            color: #475569;
            cursor: pointer;
            transition: all .15s;
            background: #fff;
        }

        .group-file-type-badge:hover {
            border-color: #bfdbfe;
        }

        .group-file-type-badge input:checked + span {
            color: #1d4ed8;
        }

        .group-file-type-badge:has(input:checked) {
            border-color: #3b82f6;
            background: #eff6ff;
        }

        /* ===== Action Field Row ===== */
        .group-action-field-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        /* ===== Watermark Warning ===== */
        .group-watermark-notice {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 8px;
            font-size: 12px;
            color: #dc2626;
            margin-bottom: 16px;
        }

        /* ===== Notice Banners ===== */
        .group-notice-bar {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .group-notice-bar.notice-info {
            background: #eff6ff;
            color: #1e40af;
            border: 1px solid #bfdbfe;
        }

        .group-notice-bar.notice-warn {
            background: #fffbeb;
            color: #92400e;
            border: 1px solid #fde68a;
        }

        .group-notice-bar.notice-error {
            background: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .group-notice-bar i {
            margin-top: 3px;
            flex-shrink: 0;
        }

        /* ===== Responsive ===== */
        @media (max-width: 1024px) {
            .group-layout {
                grid-template-columns: 1fr;
            }

            .group-aside {
                position: static;
            }

            .group-nav {
                flex-direction: row;
                flex-wrap: wrap;
                gap: 4px;
                padding: 8px;
            }

            .group-nav-link {
                flex: 0 0 auto;
                padding: 8px 12px;
            }

            .group-nav-desc {
                display: none;
            }

            .group-hint-card {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .group-panel-head {
                flex-direction: column;
                padding: 16px 18px 14px;
            }

            .group-panel-body {
                padding: 18px;
            }

            .group-form-grid {
                grid-template-columns: 1fr;
            }

            .group-field-span-2 {
                grid-column: span 1;
            }

            .group-toggle-card {
                flex-direction: column;
            }

            .group-nav-link {
                padding: 6px 10px;
            }

            .group-nav-icon {
                width: 28px;
                height: 28px;
                font-size: 11px;
            }

            .group-nav-text {
                display: none;
            }

            .group-nav-dot {
                width: 6px;
                height: 6px;
            }
        }
    </style>
@endpush

<x-app-layout>
    <div class="group-shell">
        {{-- ===== Two-Column Layout ===== --}}
        <div class="group-layout">
            {{-- ===== Sidebar Navigation ===== --}}
            <aside class="group-aside">
                <div class="group-nav-card">
                    <div class="group-nav-header">
                        <div class="group-nav-header-title">配置导航</div>
                    </div>
                    <nav class="group-nav">
                        @php
                            $sections = [
                                ['id' => 'basic', 'title' => '基础信息', 'desc' => '名称与角色', 'icon' => 'fa-id-badge'],
                                ['id' => 'limits', 'title' => '上传限制', 'desc' => '大小与频率', 'icon' => 'fa-cloud-upload-alt'],
                                ['id' => 'naming', 'title' => '路径格式', 'desc' => '命名与转换', 'icon' => 'fa-folder-open'],
                                ['id' => 'review', 'title' => '图片审核', 'desc' => '违规检测', 'icon' => 'fa-shield-alt'],
                                ['id' => 'protection', 'title' => '原图保护', 'desc' => '访问控制', 'icon' => 'fa-lock'],
                                ['id' => 'watermark', 'title' => '水印设置', 'desc' => '文字与图片', 'icon' => 'fa-tint'],
                            ];
                        @endphp
                        @foreach($sections as $idx => $section)
                            <a class="group-nav-link {{ $idx === 0 ? 'active' : '' }}"
                               href="javascript:void(0)"
                               data-tab="{{ $section['id'] }}">
                                <div class="group-nav-icon">
                                    <i class="fas {{ $section['icon'] }}"></i>
                                </div>
                                <div class="group-nav-text">
                                    <div class="group-nav-title">{{ $section['title'] }}</div>
                                    <div class="group-nav-desc">{{ $section['desc'] }}</div>
                                </div>
                            </a>
                        @endforeach
                    </nav>
                </div>

                {{-- ===== Hint Card ===== --}}
                <div class="group-hint-card">
                    <div class="group-hint-title">注意事项</div>
                    <div class="group-hint-body">
                        <p>角色组设置默认以后新用户注册会归属该角色组，系统只能设置一个默认角色组。</p>
                        <p>设置为游客组后，未登录用户将会受游客组控制。</p>
                    </div>
                </div>
            </aside>

            {{-- ===== Main Content: Dynamic Panels ===== --}}
            <main class="group-main">
                <div class="group-main-card">
                {{-- Toolbar --}}
                <div class="group-toolbar">
                    <div class="group-toolbar-group">
                        <a href="{{ route('admin.groups') }}"><i class="fas fa-arrow-left"></i> 返回</a>
                        <button type="submit" form="group-create-form">确认创建</button>
                    </div>
                </div>

                <form id="group-create-form" action="{{ route('admin.group.create') }}" method="POST">

                    {{-- ============================================================
                         PANEL 1: Basic Info
                         ============================================================ --}}
                    <section id="basic" class="group-panel active">
                        <div class="group-panel-head">
                            <div class="group-panel-head-left">
                                <div class="group-panel-label">基础</div>
                                <h2 class="group-panel-title">基础信息</h2>
                                <p class="group-panel-desc">设置角色组名称以及是否设为默认或游客角色组。</p>
                            </div>
                            <span class="group-chip info">
                                <span class="group-chip-dot"></span>
                                必填项
                            </span>
                        </div>
                        <div class="group-panel-body">
                            <div class="group-stack">
                                <div class="group-field">
                                    <label class="group-label" for="name"><span class="req">*</span> 组名称</label>
                                    <x-input type="text" name="name" id="name" autocomplete="name" placeholder="请输入角色组名称，如：注册用户、高级会员" />
                                </div>

                                <div class="group-toggle-grid">
                                    <div class="group-toggle-card">
                                        <div>
                                            <div class="group-toggle-title">设为默认组</div>
                                            <div class="group-toggle-copy">新注册用户将自动归入此组</div>
                                        </div>
                                        <x-switch id="is_default" name="is_default" value="1"></x-switch>
                                    </div>

                                    <div class="group-toggle-card">
                                        <div>
                                            <div class="group-toggle-title">设为游客组</div>
                                            <div class="group-toggle-copy">未登录用户受该组控制</div>
                                        </div>
                                        <x-switch id="is_guest" name="is_guest" value="1"></x-switch>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- ============================================================
                         PANEL 2: Upload & Storage Limits
                         ============================================================ --}}
                    <section id="limits" class="group-panel">
                        <div class="group-panel-head">
                            <div class="group-panel-head-left">
                                <div class="group-panel-label">容量</div>
                                <h2 class="group-panel-title">上传限制</h2>
                                <p class="group-panel-desc">配置文件大小上限、并发数量、频率限制以及允许上传的图片类型。</p>
                            </div>
                            <span class="group-chip warn">
                                <span class="group-chip-dot"></span>
                                运营规则
                            </span>
                        </div>
                        <div class="group-panel-body">
                            <div class="group-stack">
                                {{-- Core limits --}}
                                <div class="group-form-grid">
                                    <div class="group-field">
                                        <label class="group-label" for="maximum_file_size"><span class="req">*</span> 最大文件大小 (KB)</label>
                                        <x-input type="number" name="configs[maximum_file_size]" id="maximum_file_size" autocomplete="maximum_file_size" placeholder="例如：5120 即 5MB" value="{{ $default->get('maximum_file_size') }}" />
                                        <span class="group-help">单个上传文件的最大限制，单位为 KB</span>
                                    </div>

                                    <div class="group-field">
                                        <label class="group-label" for="concurrent_upload_num"><span class="req">*</span> 并发上传数量</label>
                                        <x-input type="number" name="configs[concurrent_upload_num]" id="concurrent_upload_num" autocomplete="concurrent_upload_num" placeholder="允许同时上传的文件数量" value="{{ $default->get('concurrent_upload_num') }}" />
                                        <span class="group-help">同一时间可同时上传的文件数量</span>
                                    </div>
                                </div>

                                {{-- Upload frequency limits --}}
                                <div class="group-form-grid">
                                    <div class="group-field">
                                        <label class="group-label" for="limit_per_minute">每分钟上传限制</label>
                                        <x-input type="number" name="configs[limit_per_minute]" id="limit_per_minute" placeholder="0为不限" value="{{ $default->get('limit_per_minute') }}" />
                                    </div>
                                    <div class="group-field">
                                        <label class="group-label" for="limit_per_hour">每小时上传限制</label>
                                        <x-input type="number" name="configs[limit_per_hour]" id="limit_per_hour" placeholder="0为不限" value="{{ $default->get('limit_per_hour') }}" />
                                    </div>
                                    <div class="group-field">
                                        <label class="group-label" for="limit_per_day">每天上传限制</label>
                                        <x-input type="number" name="configs[limit_per_day]" id="limit_per_day" placeholder="0为不限" value="{{ $default->get('limit_per_day') }}" />
                                    </div>
                                    <div class="group-field">
                                        <label class="group-label" for="limit_per_week">每周上传限制</label>
                                        <x-input type="number" name="configs[limit_per_week]" id="limit_per_week" placeholder="0为不限" value="{{ $default->get('limit_per_week') }}" />
                                    </div>
                                    <div class="group-field group-field-span-2">
                                        <label class="group-label" for="limit_per_month">每月上传限制</label>
                                        <x-input type="number" name="configs[limit_per_month]" id="limit_per_month" placeholder="0为不限" value="{{ $default->get('limit_per_month') }}" />
                                    </div>
                                </div>

                                {{-- Allowed file types --}}
                                <div>
                                    <label class="group-label" style="margin-bottom: 10px; display: block;">允许上传的图片类型</label>
                                    <div class="group-file-type-grid">
                                        @foreach($default->get('accepted_file_suffixes') as $extension)
                                            <label class="group-file-type-badge">
                                                <x-fieldset-checkbox id="configs[accepted_file_suffixes]_{{ $extension }}" name="configs[accepted_file_suffixes][]" value="{{ $extension }}" checked>
                                                    {{ strtoupper($extension) }}
                                                </x-fieldset-checkbox>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- ============================================================
                         PANEL 3: Path & Naming
                         ============================================================ --}}
                    <section id="naming" class="group-panel">
                        <div class="group-panel-head">
                            <div class="group-panel-head-left">
                                <div class="group-panel-label">格式</div>
                                <h2 class="group-panel-title">路径格式</h2>
                                <p class="group-panel-desc">配置上传文件的路径命名规则、文件命名规则以及保存质量和格式转换。</p>
                            </div>
                            <span class="group-chip">
                                高级配置
                            </span>
                        </div>
                        <div class="group-panel-body">
                            <div class="group-stack">
                                <div class="group-form-grid">
                                    <div class="group-field">
                                        <label class="group-label" for="path_naming_rule">路径命名规则</label>
                                        <x-input type="text" name="configs[path_naming_rule]" id="path_naming_rule" autocomplete="path_naming_rule" placeholder="例如：{Y}/{m}/{d}" value="{{ $default->get('path_naming_rule') }}" />
                                        <div class="group-preview-box" id="path-preview">
                                            <i class="fas fa-eye"></i>
                                            <span class="preview-label">预览：</span>
                                            <span id="path-preview-text">--</span>
                                        </div>
                                        <button type="button" class="group-add-limit-btn" id="rename-rules" style="margin-top: 4px;">
                                            <i class="fas fa-book"></i> 查看命名规则对照表
                                        </button>
                                        @include('admin.group.rules')
                                    </div>

                                    <div class="group-field">
                                        <label class="group-label" for="file_naming_rule"><span class="req">*</span> 文件命名规则</label>
                                        <x-input type="text" name="configs[file_naming_rule]" id="file_naming_rule" autocomplete="file_naming_rule" placeholder="例如：{md5}" value="{{ $default->get('file_naming_rule') }}" />
                                        <div class="group-preview-box" id="file-preview">
                                            <i class="fas fa-eye"></i>
                                            <span class="preview-label">预览：</span>
                                            <span id="file-preview-text">--</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="group-form-grid">
                                    <div class="group-field">
                                        <label class="group-label" for="image_save_quality">图片保存质量</label>
                                        <x-input type="number" name="configs[image_save_quality]" id="image_save_quality" autocomplete="path_naming_rule" placeholder="1-100，默认100" value="{{ $default->get('image_save_quality', 100) }}" />
                                        <span class="group-help">取值范围 1-100，数值越高画质越好，文件越大</span>
                                    </div>

                                    <div class="group-field">
                                        <label class="group-label" for="configs[image_save_format]">图片转换格式</label>
                                        <x-select id="configs[image_save_format]" name="configs[image_save_format]" autocomplete="image_save_format">
                                            <option value="">不转换格式</option>
                                            @foreach($default->get('accepted_file_suffixes') as $extension)
                                                <option value="{{ strtolower($extension) }}">{{ strtoupper($extension) }}</option>
                                            @endforeach
                                        </x-select>
                                        <span class="group-help">上传后自动转换为指定格式</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- ============================================================
                         PANEL 4: Image Review (Audit)
                         ============================================================ --}}
                    <section id="review" class="group-panel">
                        <div class="group-panel-head">
                            <div class="group-panel-head-left">
                                <div class="group-panel-label">安全</div>
                                <h2 class="group-panel-title">图片审核</h2>
                                <p class="group-panel-desc">配置违规图片自动检测与处理策略，支持腾讯云、阿里云和 NsfwJs 审核。</p>
                            </div>
                            <span class="group-chip warn">
                                <span class="group-chip-dot"></span>
                                需配置密钥
                            </span>
                        </div>
                        <div class="group-panel-body">
                            <div class="group-stack">
                                {{-- Enable switch --}}
                                <div class="group-toggle-card">
                                    <div>
                                        <div class="group-toggle-title">启用图片审核</div>
                                        <div class="group-toggle-copy">上传时应用第三方审查，违规图片会被标记或删除</div>
                                    </div>
                                    <x-switch id="configs[is_enable_scan]" name="configs[is_enable_scan]" value="1"></x-switch>
                                </div>

                                {{-- Action on violation --}}
                                <div>
                                    <label class="group-label" style="margin-bottom: 10px; display: block;">审核动作</label>
                                    <div class="group-action-field-row">
                                        <x-fieldset-radio id="configs[scanned_action]_mark" name="configs[scanned_action]" value="mark" checked>标记为不健康</x-fieldset-radio>
                                        <x-fieldset-radio id="configs[scanned_action]_delete" name="configs[scanned_action]" value="delete">直接删除</x-fieldset-radio>
                                    </div>
                                </div>

                                {{-- Driver cards --}}
                                <div>
                                    <label class="group-label" style="margin-bottom: 10px; display: block;">审核服务商</label>
                                    <div class="group-driver-cards">
                                        <label class="group-driver-card selected" data-driver-card="scan-tencent">
                                            <input type="radio" name="configs[scan_configs][driver]" data-select="scan" value="tencent" checked />
                                            <span class="group-driver-logo logo-tencent"><i class="fas fa-cloud"></i></span>
                                            <div>
                                                <div class="group-driver-name">腾讯云</div>
                                                <div class="group-driver-desc">内容安全 CMS</div>
                                            </div>
                                        </label>

                                        <label class="group-driver-card" data-driver-card="scan-aliyun">
                                            <input type="radio" name="configs[scan_configs][driver]" data-select="scan" value="aliyun" />
                                            <span class="group-driver-logo logo-aliyun"><i class="fas fa-cloud"></i></span>
                                            <div>
                                                <div class="group-driver-name">阿里云</div>
                                                <div class="group-driver-desc">内容审核</div>
                                            </div>
                                        </label>

                                        <label class="group-driver-card" data-driver-card="scan-nsfwjs">
                                            <input type="radio" name="configs[scan_configs][driver]" data-select="scan" value="nsfwjs" />
                                            <span class="group-driver-logo logo-nsfwjs"><i class="fas fa-brain"></i></span>
                                            <div>
                                                <div class="group-driver-name">NsfwJs</div>
                                                <div class="group-driver-desc">开源 AI 审核</div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                {{-- Tencent config --}}
                                <div class="hidden" data-scan-driver="tencent">
                                    <div class="group-driver-config">
                                        <div class="group-driver-config-title">
                                            <i class="fas fa-cog"></i> 腾讯云配置
                                            <a href="https://cloud.tencent.com/document/product/1125/53513" target="_blank" class="help-link"><i class="fas fa-external-link-alt"></i> 获取密钥帮助</a>
                                        </div>
                                        <div class="group-form-grid">
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][tencent][endpoint]"><span class="req">*</span> Endpoint</label>
                                                <x-input type="text" name="configs[scan_configs][drivers][tencent][endpoint]" id="configs[scan_configs][drivers][tencent][endpoint]" autocomplete="endpoint" placeholder="请输入 Endpoint" value="ims.tencentcloudapi.com" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][tencent][region]"><span class="req">*</span> 地域</label>
                                                <x-input type="text" name="configs[scan_configs][drivers][tencent][region]" id="configs[scan_configs][drivers][tencent][region]" autocomplete="region" placeholder="例如：ap-beijing" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][tencent][secret_id]"><span class="req">*</span> SecretId</label>
                                                <x-input type="text" name="configs[scan_configs][drivers][tencent][secret_id]" id="configs[scan_configs][drivers][tencent][secret_id]" autocomplete="secret_id" placeholder="请输入 SecretId" />
                                                <span class="group-help">在腾讯云控制台 - 访问管理 - API密钥管理中获取</span>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][tencent][secret_key]"><span class="req">*</span> SecretKey</label>
                                                <x-input type="password" name="configs[scan_configs][drivers][tencent][secret_key]" id="configs[scan_configs][drivers][tencent][secret_key]" autocomplete="secret_key" placeholder="请输入 SecretKey" />
                                                <span class="group-help">与 SecretId 配对使用</span>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][tencent][biz_type]">场景名称</label>
                                                <x-input type="text" name="configs[scan_configs][drivers][tencent][biz_type]" id="configs[scan_configs][drivers][tencent][biz_type]" autocomplete="biz_type" placeholder="业务场景名称，可为空" />
                                                <span class="group-help">可选，在腾讯云控制台中自定义的审核策略</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Aliyun config --}}
                                <div class="hidden" data-scan-driver="aliyun">
                                    <div class="group-driver-config">
                                        <div class="group-driver-config-title">
                                            <i class="fas fa-cog"></i> 阿里云配置
                                            <a href="https://help.aliyun.com/document_detail/57104.html" target="_blank" class="help-link"><i class="fas fa-external-link-alt"></i> 获取密钥帮助</a>
                                        </div>
                                        <div class="group-form-grid">
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][aliyun][access_key_id]"><span class="req">*</span> AccessKeyId</label>
                                                <x-input type="text" name="configs[scan_configs][drivers][aliyun][access_key_id]" id="configs[scan_configs][drivers][aliyun][access_key_id]" autocomplete="access_key_id" placeholder="请输入 AccessKeyId" />
                                                <span class="group-help">在阿里云控制台 - AccessKey 管理中获取</span>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][aliyun][access_key_secret]"><span class="req">*</span> AccessKeySecret</label>
                                                <x-input type="password" name="configs[scan_configs][drivers][aliyun][access_key_secret]" id="configs[scan_configs][drivers][aliyun][access_key_secret]" autocomplete="access_key_id" placeholder="请输入 AccessKeySecret" />
                                                <span class="group-help">与 AccessKeyId 配对使用</span>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][aliyun][region_id]"><span class="req">*</span> 地域节点</label>
                                                <x-input type="text" name="configs[scan_configs][drivers][aliyun][region_id]" id="configs[scan_configs][drivers][aliyun][region_id]" autocomplete="region_id" placeholder="例如：cn-shanghai" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][aliyun][biz_type]">场景名称</label>
                                                <x-input type="text" name="configs[scan_configs][drivers][aliyun][biz_type]" id="configs[scan_configs][drivers][aliyun][biz_type]" autocomplete="biz_type" placeholder="请输入业务场景名称" />
                                            </div>
                                        </div>
                                        <div style="margin-top: 16px;">
                                            <x-fieldset title="审核场景">
                                                @foreach($scenes as $key => $scene)
                                                    <x-fieldset-checkbox id="configs[scan_configs][drivers][aliyun][scenes][]_{{ $key }}" name="configs[scan_configs][drivers][aliyun][scenes][]" value="{{ $key }}">{{ $scene }}</x-fieldset-checkbox>
                                                @endforeach
                                            </x-fieldset>
                                        </div>
                                    </div>
                                </div>

                                {{-- NsfwJs config --}}
                                <div class="hidden" data-scan-driver="nsfwjs">
                                    <div class="group-driver-config">
                                        <div class="group-driver-config-title">
                                            <i class="fas fa-cog"></i> NsfwJs 配置
                                        </div>
                                        <div class="group-form-grid">
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][nsfwjs][api_url]"><span class="req">*</span> 接口地址</label>
                                                <x-input type="url" name="configs[scan_configs][drivers][nsfwjs][api_url]" id="configs[scan_configs][drivers][nsfwjs][api_url]" autocomplete="api_url" placeholder="http(s)://domain.com/classify" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][nsfwjs][attr_name]"><span class="req">*</span> 属性名称</label>
                                                <x-input type="text" name="configs[scan_configs][drivers][nsfwjs][attr_name]" id="configs[scan_configs][drivers][nsfwjs][attr_name]" autocomplete="attr_name" placeholder="接口的表单文件属性名" value="image" />
                                                <span class="group-help">POST 请求的文件字段名</span>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[scan_configs][drivers][nsfwjs][threshold]"><span class="req">*</span> 阈值</label>
                                                <x-input type="number" name="configs[scan_configs][drivers][nsfwjs][threshold]" id="configs[scan_configs][drivers][nsfwjs][threshold]" autocomplete="threshold" placeholder="取值 1-100" value="60" />
                                                <span class="group-help">违规程度上限，取值 1-100，数值越低审核越严格</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- ============================================================
                         PANEL 5: Original Protection
                         ============================================================ --}}
                    <section id="protection" class="group-panel">
                        <div class="group-panel-head">
                            <div class="group-panel-head-left">
                                <div class="group-panel-label">保护</div>
                                <h2 class="group-panel-title">原图保护</h2>
                                <p class="group-panel-desc">开启后图片不返回直链，通过 PHP 接管请求进行动态处理。对服务器有较高要求，请谨慎使用。</p>
                            </div>
                            <span class="group-chip success">
                                <span class="group-chip-dot"></span>
                                可选功能
                            </span>
                        </div>
                        <div class="group-panel-body">
                            <div class="group-stack">
                                <div class="group-toggle-card">
                                    <div>
                                        <div class="group-toggle-title">启用原图保护</div>
                                        <div class="group-toggle-copy">开启后图片不返回直链，通过 PHP 接管请求</div>
                                    </div>
                                    <x-switch id="configs[is_enable_original_protection]" name="configs[is_enable_original_protection]" value="1"></x-switch>
                                </div>

                                <div class="group-form-grid">
                                    <div class="group-field">
                                        <label class="group-label" for="configs[image_cache_ttl]">图片缓存时间 (秒)</label>
                                        <x-input type="number" name="configs[image_cache_ttl]" id="configs[image_cache_ttl]" autocomplete="image_cache_ttl" placeholder="不填或填 0 表示不缓存" value="" />
                                        <span class="group-help">受保护图片的缓存时间，0 表示每次请求都重新生成</span>
                                    </div>
                                </div>

                                <div class="group-note">
                                    <i class="fas fa-info-circle" style="color:#94a3b8; margin-right:4px;"></i>
                                    原图保护功能原理是使用 PHP 接管图片请求，动态处理后缓存并输出图片。如果你使用第三方储存，建议使用第三方储存的图片处理规则。
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- ============================================================
                         PANEL 6: Watermark
                         ============================================================ --}}
                    <section id="watermark" class="group-panel">
                        <div class="group-panel-head">
                            <div class="group-panel-head-left">
                                <div class="group-panel-label">水印</div>
                                <h2 class="group-panel-title">水印设置</h2>
                                <p class="group-panel-desc">配置文字水印或图片水印的模式、位置和样式参数。</p>
                            </div>
                            <span class="group-chip">
                                高级功能
                            </span>
                        </div>
                        <div class="group-panel-body">
                            <div class="group-stack">
                                <div class="group-watermark-notice">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    开启水印功能前请注意考虑图片版权问题。
                                </div>

                                {{-- Enable switch --}}
                                <div class="group-toggle-card">
                                    <div>
                                        <div class="group-toggle-title">启用水印</div>
                                        <div class="group-toggle-copy">动态生成模式仅在开启原图保护后生效</div>
                                    </div>
                                    <x-switch id="configs[is_enable_watermark]" name="configs[is_enable_watermark]" value="1"></x-switch>
                                </div>

                                {{-- Watermark mode --}}
                                <div>
                                    <label class="group-label" style="margin-bottom: 10px; display: block;">水印模式</label>
                                    <div class="group-action-field-row">
                                        <x-fieldset-radio id="configs[watermark_configs][mode]_overlay" name="configs[watermark_configs][mode]" value="{{ \App\Enums\Watermark\Mode::Overlay }}" checked>覆盖原图</x-fieldset-radio>
                                        <x-fieldset-radio id="configs[watermark_configs][mode]_dynamic" name="configs[watermark_configs][mode]" value="{{ \App\Enums\Watermark\Mode::Dynamic }}">动态生成</x-fieldset-radio>
                                    </div>
                                </div>

                                {{-- Watermark type cards --}}
                                <div>
                                    <label class="group-label" style="margin-bottom: 10px; display: block;">水印类型</label>
                                    <div class="group-driver-cards">
                                        <label class="group-driver-card selected" data-driver-card="watermark-font">
                                            <input type="radio" name="configs[watermark_configs][driver]" data-select="watermark" value="font" checked />
                                            <span class="group-driver-logo logo-font"><i class="fas fa-font"></i></span>
                                            <div>
                                                <div class="group-driver-name">文字水印</div>
                                                <div class="group-driver-desc">自定义文本</div>
                                            </div>
                                        </label>

                                        <label class="group-driver-card" data-driver-card="watermark-image">
                                            <input type="radio" name="configs[watermark_configs][driver]" data-select="watermark" value="image" />
                                            <span class="group-driver-logo logo-image"><i class="fas fa-image"></i></span>
                                            <div>
                                                <div class="group-driver-name">图片水印</div>
                                                <div class="group-driver-desc">Logo / 图标</div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                {{-- Font watermark config --}}
                                <div class="hidden" data-watermark-driver="font">
                                    <div class="group-driver-config">
                                        <div class="group-driver-config-title"><i class="fas fa-font"></i> 文字水印参数</div>
                                        <div class="group-form-grid">
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][font][text]"><span class="req">*</span> 水印文字</label>
                                                <x-input type="text" name="configs[watermark_configs][drivers][font][text]" id="configs[watermark_configs][drivers][font][text]" autocomplete="text" placeholder="请输入水印文字" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][font][font]"><span class="req">*</span> 字体文件</label>
                                                <x-input type="text" name="configs[watermark_configs][drivers][font][font]" id="configs[watermark_configs][drivers][font][font]" autocomplete="text" placeholder="例如：fonts/lsky.ttf" />
                                                <span class="group-help">请将字体文件放置 {{ storage_path('app/public') }} 目录下</span>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][font][position]"><span class="req">*</span> 水印位置</label>
                                                <x-select id="configs[watermark_configs][drivers][font][position]" name="configs[watermark_configs][drivers][font][position]" autocomplete="position">
                                                    @foreach($positions as $key => $position)
                                                        <option value="{{ $key }}">{{ $position }}</option>
                                                    @endforeach
                                                </x-select>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][font][color]">字体颜色</label>
                                                <x-input type="text" name="configs[watermark_configs][drivers][font][color]" id="configs[watermark_configs][drivers][font][color]" autocomplete="color" placeholder="例如：#ffffff" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][font][size]">字体大小</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][font][size]" id="configs[watermark_configs][drivers][font][size]" autocomplete="size" placeholder="默认 14" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][font][angle]">旋转角度</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][font][angle]" id="configs[watermark_configs][drivers][font][angle]" autocomplete="angle" placeholder="默认 0" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][font][x]">X轴偏移量</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][font][x]" id="configs[watermark_configs][drivers][font][x]" autocomplete="x" placeholder="水平方向偏移" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][font][y]">Y轴偏移量</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][font][y]" id="configs[watermark_configs][drivers][font][y]" autocomplete="y" placeholder="垂直方向偏移" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Image watermark config --}}
                                <div class="hidden" data-watermark-driver="image">
                                    <div class="group-driver-config">
                                        <div class="group-driver-config-title"><i class="fas fa-image"></i> 图片水印参数</div>
                                        <div class="group-form-grid">
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][image][image]"><span class="req">*</span> 水印图片</label>
                                                <x-input type="text" name="configs[watermark_configs][drivers][image][image]" id="configs[watermark_configs][drivers][image][image]" autocomplete="image" placeholder="例如：images/lsky.png" />
                                                <span class="group-help">请将水印图片放置 {{ storage_path('app/public') }} 目录下</span>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][image][position]"><span class="req">*</span> 水印位置</label>
                                                <x-select id="configs[watermark_configs][drivers][image][position]" name="configs[watermark_configs][drivers][image][position]" autocomplete="position">
                                                    @foreach($positions as $key => $position)
                                                        <option value="{{ $key }}">{{ $position }}</option>
                                                    @endforeach
                                                </x-select>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][image][width]">图片宽度</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][image][width]" id="configs[watermark_configs][drivers][image][width]" autocomplete="width" placeholder="水印图片宽度" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][image][height]">图片高度</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][image][height]" id="configs[watermark_configs][drivers][image][height]" autocomplete="height" placeholder="水印图片高度" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][image][opacity]">不透明度</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][image][opacity]" id="configs[watermark_configs][drivers][image][opacity]" autocomplete="opacity" placeholder="取值 0-100" />
                                                <span class="group-help">0 为全透明，100 为完全不透明</span>
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][image][rotate]">旋转角度</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][image][rotate]" id="configs[watermark_configs][drivers][image][rotate]" autocomplete="rotate" placeholder="默认 0" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][image][x]">X轴偏移量</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][image][x]" id="configs[watermark_configs][drivers][image][x]" autocomplete="x" placeholder="水平方向偏移" />
                                            </div>
                                            <div class="group-field">
                                                <label class="group-label" for="configs[watermark_configs][drivers][image][y]">Y轴偏移量</label>
                                                <x-input type="number" name="configs[watermark_configs][drivers][image][y]" id="configs[watermark_configs][drivers][image][y]" autocomplete="y" placeholder="垂直方向偏移" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
                </div>
            </main>
        </div>

    </div>

    @push('scripts')
        <script>
            // ===== Driver config panel show/hide (scan & watermark) =====
            let setSelected = function () {
                $('[data-select]').each(function () {
                    $('[data-' + $(this).data('select') + '-driver=' + $(this).val() + ']')[this.checked ? 'show' : 'hide']();
                });
            };

            setSelected();

            $('[data-select]').on('click change', function () {
                setSelected();
            });

            // ===== Tab Switching (dynamic panels) =====
            let switchTab = function (tabId) {
                // Hide all panels
                $('.group-panel').removeClass('active');
                // Show target
                $('#' + tabId).addClass('active');
                // Update nav
                $('.group-nav-link').removeClass('active');
                $(`.group-nav-link[data-tab="${tabId}"]`).addClass('active');

                // Re-init driver visibility for newly shown panel
                setSelected();
            };

            // Nav click handler
            $('.group-nav-link[data-tab]').on('click', function (e) {
                e.preventDefault();
                let tabId = $(this).data('tab');
                switchTab(tabId);
            });

            // Support URL hash navigation
            if (window.location.hash) {
                let hashId = window.location.hash.replace('#', '');
                let target = $(`.group-nav-link[data-tab="${hashId}"]`);
                if (target.length) {
                    switchTab(hashId);
                }
            }

            // ===== Driver card selection =====
            $('.group-driver-card input[type="radio"]').change(function () {
                var name = $(this).attr('name');
                $('input[name="' + name + '"]').each(function () {
                    $(this).closest('.group-driver-card').removeClass('selected');
                });
                $(this).closest('.group-driver-card').addClass('selected');
            });

            // ===== Real-time naming rule preview =====
            var ruleMap = {
                '{Y}': '{{ date("Y") }}',
                '{y}': '{{ date("y") }}',
                '{m}': '{{ date("m") }}',
                '{d}': '{{ date("d") }}',
                '{timestamp}': '{{ time() }}',
                '{uniqid}': '{{ uniqid() }}',
                '{md5}': '{{ md5(uniqid()) }}',
                '{md5-16}': '{{ substr(md5(uniqid()), 0, 16) }}',
                '{str-random-16}': '{{ \Illuminate\Support\Str::random(16) }}',
                '{str-random-10}': '{{ \Illuminate\Support\Str::random(10) }}',
                '{filename}': 'example_photo',
                '{uid}': '1'
            };

            function resolvePreview(template) {
                if (!template) return '--';
                var result = template;
                for (var key in ruleMap) {
                    result = result.split(key).join(ruleMap[key]);
                }
                return result;
            }

            $('#path_naming_rule').on('input', function () {
                $('#path-preview-text').text(resolvePreview($(this).val()));
            }).trigger('input');

            $('#file_naming_rule').on('input', function () {
                $('#file-preview-text').text(resolvePreview($(this).val()));
            }).trigger('input');

            // ===== Form submit =====
            $('form').submit(function (e) {
                e.preventDefault();
                axios.post(this.action, $(this).serialize()).then(response => {
                    if (response.data.status) {
                        toastr.success(response.data.message);
                        setTimeout(function () {
                            window.location.href = '{{ route('admin.groups') }}';
                        }, 3000);
                    } else {
                        toastr.error(response.data.message);
                    }
                });
            });
        </script>
    @endpush

</x-app-layout>
