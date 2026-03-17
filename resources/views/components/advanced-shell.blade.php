@props(['page' => null, 'title'])

@php
    $menus = [
        'image-process' => ['title' => '图片编辑', 'icon' => 'fa-sliders-h'],
        'ai-search' => ['title' => 'AI 检索', 'icon' => 'fa-search'],
        'ai-prompt' => ['title' => 'AI 提示词', 'icon' => 'fa-magic'],
        'ai-config' => ['title' => 'AI 配置', 'icon' => 'fa-robot'],
        'performance' => ['title' => '系统性能', 'icon' => 'fa-gauge-high'],
        'drivers' => ['title' => '处理驱动', 'icon' => 'fa-microchip'],
        'reviews' => ['title' => '审核中心', 'icon' => 'fa-user-check'],
        'jobs' => ['title' => '作业中心', 'icon' => 'fa-tasks'],
        'team-permissions' => ['title' => '团队权限', 'icon' => 'fa-users-cog'],
    ];

    $isOverview = request()->routeIs('advanced');
@endphp

<style>
    .adv-shell {
        display: block;
        min-height: calc(100vh - 84px);
    }

    .adv-layout {
        display: grid;
        grid-template-columns: 220px minmax(0, 1fr);
        gap: 12px;
    }

    .adv-aside,
    .adv-main {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 1px 2px rgba(15, 23, 42, .05);
    }

    .adv-aside {
        padding: 10px;
        height: fit-content;
    }

    .adv-brand {
        display: flex;
        align-items: center;
        gap: 8px;
        min-height: 38px;
        border-radius: 10px;
        padding: 0 10px;
        margin-bottom: 10px;
        background: linear-gradient(135deg, #eff6ff 0%, #f8fafc 100%);
        color: #1d4ed8;
        font-size: 13px;
        font-weight: 700;
    }

    .adv-nav-group {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .adv-nav-title {
        padding: 0 6px;
        margin: 6px 0 2px;
        color: #64748b;
        font-size: 11px;
        letter-spacing: .06em;
        text-transform: uppercase;
    }

    .adv-nav-item {
        width: 100%;
        min-height: 36px;
        border: 1px solid transparent;
        border-radius: 8px;
        padding: 0 10px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #334155;
        font-size: 13px;
        transition: .2s ease;
    }

    .adv-nav-item:hover {
        border-color: #e2e8f0;
        background: #f8fafc;
    }

    .adv-nav-item.active {
        border-color: #bfdbfe;
        background: #eff6ff;
        color: #1d4ed8;
        font-weight: 700;
    }

    .adv-main {
        overflow: hidden;
    }

    .adv-main-head {
        min-height: 50px;
        padding: 0 12px;
        border-bottom: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
    }

    .adv-main-title {
        font-size: 15px;
        font-weight: 700;
        color: #0f172a;
    }

    .adv-main-tools {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .adv-main-body {
        padding: 12px;
    }

    .adv-tab {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        min-height: 32px;
        border-radius: 8px;
        padding: 0 10px;
        color: #334155;
        font-size: 12px;
        border: 1px solid #dbe2ea;
        background: #fff;
    }

    .adv-tab:hover {
        background: #f1f5f9;
    }

    .adv-toolbar {
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        background: #f8fafc;
        padding: 10px;
    }

    .adv-toolbar + .adv-toolbar,
    .adv-toolbar + .adv-panel,
    .adv-panel + .adv-panel,
    .adv-toolbar + .adv-result,
    .adv-panel + .adv-result,
    .adv-result + .adv-panel {
        margin-top: 10px;
    }

    .adv-toolbar-head {
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
    }

    .adv-toolbar-title {
        font-size: 13px;
        font-weight: 700;
        color: #0f172a;
    }

    .adv-toolbar-sub {
        font-size: 12px;
        color: #64748b;
    }

    .adv-grid {
        display: grid;
        gap: 10px;
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .adv-grid-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .adv-span-2 {
        grid-column: span 2;
    }

    .adv-span-3 {
        grid-column: span 3;
    }

    .adv-field {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .adv-field span {
        font-size: 12px;
        color: #64748b;
    }

    .adv-input,
    .adv-select,
    .adv-textarea {
        width: 100%;
        min-height: 34px;
        border: 1px solid #dbe2ea;
        border-radius: 8px;
        padding: 0 10px;
        font-size: 13px;
        color: #0f172a;
        background: #fff;
    }

    .adv-textarea {
        min-height: 88px;
        padding-top: 8px;
        padding-bottom: 8px;
        resize: vertical;
    }

    .adv-check {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        min-height: 34px;
        font-size: 13px;
        color: #334155;
    }

    .adv-actions {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        margin-top: 10px;
    }

    .adv-btn {
        min-height: 34px;
        border: 1px solid #dbe2ea;
        border-radius: 8px;
        background: #f8fafc;
        padding: 0 12px;
        font-size: 12px;
        color: #334155;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .adv-btn:hover {
        border-color: #bfdbfe;
        background: #eff6ff;
        color: #1d4ed8;
    }

    .adv-btn.primary {
        background: #1d4ed8;
        color: #fff;
        border-color: #1d4ed8;
    }

    .adv-btn.primary:hover {
        background: #1e40af;
        border-color: #1e40af;
        color: #fff;
    }

    .adv-btn[disabled] {
        cursor: not-allowed;
        opacity: .65;
    }

    .adv-chip {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        min-height: 24px;
        padding: 0 8px;
        border-radius: 999px;
        border: 1px solid #dbe2ea;
        font-size: 12px;
        color: #475569;
        background: #fff;
    }

    .adv-chip.success {
        border-color: #bbf7d0;
        color: #15803d;
        background: #f0fdf4;
    }

    .adv-chip.warn {
        border-color: #fde68a;
        color: #a16207;
        background: #fffbeb;
    }

    .adv-chip.muted {
        border-color: #e2e8f0;
        color: #64748b;
        background: #f8fafc;
    }

    .adv-alert {
        display: none;
        margin-top: 10px;
        padding: 9px 10px;
        border-radius: 8px;
        border: 1px solid #fecaca;
        background: #fef2f2;
        color: #991b1b;
        font-size: 12px;
    }

    .adv-alert.show {
        display: block;
    }

    .adv-loading {
        display: none;
        margin-top: 10px;
        border: 1px dashed #bfdbfe;
        border-radius: 8px;
        background: #eff6ff;
        color: #1d4ed8;
        font-size: 12px;
        min-height: 42px;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .adv-loading.show {
        display: flex;
    }

    .adv-panel,
    .adv-result {
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        background: #fff;
    }

    .adv-panel-head,
    .adv-result-head {
        min-height: 40px;
        border-bottom: 1px solid #e2e8f0;
        padding: 0 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
    }

    .adv-panel-title,
    .adv-result-title {
        font-size: 13px;
        font-weight: 700;
        color: #0f172a;
    }

    .adv-panel-body,
    .adv-result-body {
        padding: 10px;
    }

    .adv-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 10px;
    }

    .adv-card {
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        background: #fff;
        padding: 10px;
    }

    .adv-kv {
        display: grid;
        gap: 8px;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    }

    .adv-kv-item {
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        background: #f8fafc;
        padding: 8px;
    }

    .adv-kv-key {
        font-size: 11px;
        color: #64748b;
        margin-bottom: 4px;
    }

    .adv-kv-value {
        font-size: 12px;
        color: #0f172a;
        font-weight: 600;
        word-break: break-word;
    }

    .adv-table-wrap {
        overflow: auto;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        background: #fff;
    }

    .adv-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 760px;
    }

    .adv-table th,
    .adv-table td {
        border-bottom: 1px solid #e5e7eb;
        padding: 8px;
        font-size: 12px;
        text-align: left;
        vertical-align: middle;
        color: #334155;
    }

    .adv-table th {
        color: #0f172a;
        font-weight: 700;
        background: #f8fafc;
    }

    .adv-empty {
        min-height: 110px;
        border: 1px dashed #dbe2ea;
        border-radius: 8px;
        background: #f8fafc;
        font-size: 12px;
        color: #64748b;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 12px;
    }

    .adv-output {
        margin-top: 10px;
        border: 1px dashed #dbe2ea;
        border-radius: 8px;
        background: #f8fafc;
        padding: 10px;
        font-size: 12px;
        white-space: pre-wrap;
        word-break: break-word;
        max-height: 340px;
        overflow: auto;
    }

    .adv-thumb {
        width: 54px;
        height: 54px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        display: block;
    }

    .adv-mono {
        font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 12px;
    }

    @media (max-width: 1100px) {
        .adv-layout {
            grid-template-columns: 1fr;
        }

        .adv-aside {
            position: sticky;
            top: 0;
            z-index: 3;
        }

        .adv-nav-group {
            flex-direction: row;
            overflow: auto;
            padding-bottom: 4px;
        }

        .adv-nav-item {
            flex: 0 0 auto;
            white-space: nowrap;
        }
    }

    @media (max-width: 900px) {
        .adv-grid,
        .adv-grid-3 {
            grid-template-columns: 1fr;
        }

        .adv-span-2,
        .adv-span-3 {
            grid-column: auto;
        }

        .adv-table {
            min-width: 680px;
        }
    }
</style>

<div class="adv-shell">
    <div class="adv-layout">
        <aside class="adv-aside">
            <div class="adv-brand"><i class="fas fa-toolbox"></i><span>高级功能</span></div>

            <div class="adv-nav-title">入口</div>
            <div class="adv-nav-group">
                <a class="adv-nav-item {{ $isOverview ? 'active' : '' }}" href="{{ route('advanced') }}">
                    <i class="fas fa-th-large"></i>
                    <span>总览</span>
                </a>
            </div>

            <div class="adv-nav-title">能力</div>
            <div class="adv-nav-group">
                @foreach($menus as $key => $menu)
                    <a class="adv-nav-item {{ !$isOverview && $page === $key ? 'active' : '' }}"
                       href="{{ route('advanced.feature', ['feature' => $key]) }}">
                        <i class="fas {{ $menu['icon'] }}"></i>
                        <span>{{ $menu['title'] }}</span>
                    </a>
                @endforeach
            </div>
        </aside>

        <section class="adv-main">
            <div class="adv-main-head">
                <div class="adv-main-title">{{ $title }}</div>
                <div class="adv-main-tools">
                    @unless($isOverview)
                        <a class="adv-tab" href="{{ route('advanced') }}"><i class="fas fa-arrow-left"></i><span>返回总览</span></a>
                    @endunless
                </div>
            </div>
            <div class="adv-main-body">
                {{ $slot }}
            </div>
        </section>
    </div>
</div>
