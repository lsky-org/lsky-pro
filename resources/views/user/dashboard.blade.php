@section('title', '仪表盘')

@push('styles')
    <style>
        /* ── Dashboard v5 ── */
        .dash {
            width: 100%;
            margin: 0;
            color: #111827;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* ── Hero: 4-column stat cards ── */
        .dash .hero-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
            margin-bottom: 18px;
        }

        .dash .hero-card {
            position: relative;
            border-radius: 12px;
            padding: 20px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .dash .hero-card--images {
            background: #fff;
        }

        .dash .hero-card--used {
            background: #fff;
        }

        .dash .hero-card--free {
            background: #fff;
        }

        .dash .hero-card--status {
            background: #fff;
        }

        .dash .hero-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            margin-bottom: 14px;
        }

        .dash .hero-card--images .hero-icon {
            background: #dbeafe;
            color: #2563eb;
        }

        .dash .hero-card--used .hero-icon {
            background: #fef3c7;
            color: #d97706;
        }

        .dash .hero-card--free .hero-icon {
            background: #dcfce7;
            color: #16a34a;
        }

        .dash .hero-card--status .hero-icon {
            background: #ede9fe;
            color: #7c3aed;
        }

        .dash .hero-label {
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: .06em;
            margin-bottom: 6px;
        }

        .dash .hero-card--images .hero-label { color: #64748b; }
        .dash .hero-card--used .hero-label,
        .dash .hero-card--free .hero-label,
        .dash .hero-card--status .hero-label { color: #64748b; }

        .dash .hero-num {
            font-size: 32px;
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -.02em;
            word-break: break-word;
        }

        .dash .hero-card--images .hero-num { color: #0f172a; }
        .dash .hero-card--used .hero-num { color: #0f172a; }
        .dash .hero-card--free .hero-num { color: #0f172a; }
        .dash .hero-card--status .hero-num { color: #0f172a; font-size: 20px; font-weight: 700; }

        .dash .hero-sub {
            margin-top: 6px;
            font-size: 12px;
        }

        .dash .hero-card--images .hero-sub { color: #64748b; }
        .dash .hero-card--used .hero-sub,
        .dash .hero-card--free .hero-sub,
        .dash .hero-card--status .hero-sub { color: #94a3b8; }

        /* ── Body: 2-column layout ── */
        .dash .body-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 18px;
        }

        .dash .body-col {
            display: grid;
            gap: 18px;
            align-content: start;
        }

        /* ── Card generic ── */
        .dash .card {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 1px 3px rgba(15, 23, 42, .04);
            overflow: hidden;
        }

        .dash .card-head {
            padding: 14px 18px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .dash .card-title {
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dash .card-title i {
            font-size: 14px;
            color: #64748b;
        }

        .dash .card-badge {
            font-size: 11px;
            font-weight: 600;
            color: #64748b;
            background: #f1f5f9;
            padding: 2px 10px;
            border-radius: 999px;
        }

        .dash .card-body {
            padding: 16px 18px;
        }

        /* ── Capacity ring ── */
        .dash .cap-block {
            display: flex;
            align-items: center;
            gap: 24px;
            margin-bottom: 18px;
        }

        .dash .cap-ring-wrap {
            position: relative;
            width: 100px;
            height: 100px;
            flex-shrink: 0;
        }

        .dash .cap-ring-wrap svg {
            width: 100%;
            height: 100%;
            transform: rotate(-90deg);
        }

        .dash .cap-ring-bg {
            fill: none;
            stroke: #e2e8f0;
            stroke-width: 8;
        }

        .dash .cap-ring-fill {
            fill: none;
            stroke-width: 8;
            stroke-linecap: round;
            stroke: url(#capGrad);
            transition: stroke-dashoffset .8s cubic-bezier(.4,0,.2,1);
        }

        .dash .cap-ring-fill.usage-warn { stroke: #f59e0b; }
        .dash .cap-ring-fill.usage-danger { stroke: #ef4444; }

        .dash .cap-center {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .dash .cap-pct {
            font-size: 22px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1;
        }

        .dash .cap-pct-unit {
            font-size: 12px;
            font-weight: 500;
        }

        .dash .cap-label {
            font-size: 10px;
            color: #94a3b8;
            margin-top: 2px;
        }

        .dash .cap-details {
            flex: 1;
            min-width: 0;
        }

        .dash .cap-detail-row {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 0;
        }

        .dash .cap-detail-row + .cap-detail-row {
            border-top: 1px dashed #f1f5f9;
        }

        .dash .cap-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .dash .cap-dot--used { background: #3b82f6; }
        .dash .cap-dot--free { background: #e2e8f0; }

        .dash .cap-detail-label {
            font-size: 13px;
            color: #64748b;
            flex: 1;
        }

        .dash .cap-detail-val {
            font-size: 13px;
            font-weight: 600;
            color: #0f172a;
        }

        .dash .cap-est {
            display: flex;
            align-items: center;
            gap: 6px;
            background: #f8fafc;
            border: 1px dashed #e2e8f0;
            border-radius: 8px;
            padding: 8px 12px;
            font-size: 12px;
            color: #64748b;
            margin-bottom: 18px;
        }

        .dash .cap-est i { color: #94a3b8; }

        /* ── Limit pills ── */
        .dash .limit-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .dash .limit-pill {
            border: 1px solid #f1f5f9;
            border-radius: 10px;
            background: #f8fafc;
            padding: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dash .limit-pill-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            flex-shrink: 0;
        }

        .dash .lpi--file { background: #dbeafe; color: #2563eb; }
        .dash .lpi--conc { background: #fef3c7; color: #d97706; }
        .dash .lpi--day  { background: #dcfce7; color: #16a34a; }
        .dash .lpi--mon  { background: #ede9fe; color: #7c3aed; }

        .dash .limit-pill-text {
            min-width: 0;
        }

        .dash .limit-pill-k {
            font-size: 11px;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: .04em;
        }

        .dash .limit-pill-v {
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
            margin-top: 1px;
            word-break: break-word;
        }

        /* ── Strategy list ── */
        .dash .strat-list {
            display: grid;
            gap: 8px;
        }

        .dash .strat-item {
            border: 1px solid #f1f5f9;
            border-radius: 10px;
            padding: 12px 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: border-color .2s;
        }

        .dash .strat-item:hover {
            border-color: #cbd5e1;
        }

        .dash .strat-item.is-default {
            border-color: #86efac;
            background: #f0fdf4;
        }

        .dash .strat-icon {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #64748b;
            flex-shrink: 0;
        }

        .dash .strat-item.is-default .strat-icon {
            background: #dcfce7;
            color: #16a34a;
        }

        .dash .strat-info {
            flex: 1;
            min-width: 0;
        }

        .dash .strat-name {
            font-size: 14px;
            font-weight: 600;
            color: #0f172a;
            word-break: break-word;
        }

        .dash .strat-desc {
            margin-top: 2px;
            font-size: 12px;
            color: #94a3b8;
            word-break: break-word;
        }

        .dash .strat-tag {
            flex-shrink: 0;
            border-radius: 999px;
            border: 1px solid #86efac;
            background: #dcfce7;
            color: #166534;
            padding: 2px 10px;
            font-size: 11px;
            font-weight: 600;
        }

        /* ── Upload CTA ── */
        .dash .upload-cta {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: transform .15s, box-shadow .2s;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(37, 99, 235, .25);
        }

        .dash .upload-cta:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, .35);
            
        }

        .dash .upload-cta:active {
            transform: translateY(0);
        }

        .dash .upload-cta i {
            font-size: 18px;
        }

        /* ── Quick links row ── */
        .dash .quick-row {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 8px;
            margin-top: 14px;
        }

        .dash .quick-link {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            background: #f8fafc;
            color: #334155;
            padding: 11px 8px;
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            text-decoration: none;
            transition: all .2s;
        }

        .dash .quick-link:hover {
            background: #eff6ff;
            border-color: #93c5fd;
            color: #1d4ed8;
        }

        .dash .quick-link.disabled {
            opacity: .45;
            cursor: not-allowed;
            pointer-events: none;
        }

        .dash .quick-link i {
            font-size: 13px;
            color: #64748b;
        }

        .dash .quick-link:hover i {
            color: #3b82f6;
        }

        /* ── Account card ── */
        .dash .acct-card {
            padding: 0;
        }

        .dash .acct-header {
            padding: 18px 18px 14px;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .dash .acct-avatar {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .dash .acct-name {
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
            word-break: break-word;
        }

        .dash .acct-email {
            font-size: 12px;
            color: #94a3b8;
            word-break: break-word;
            margin-top: 2px;
        }

        .dash .acct-rows {
            padding: 0 18px 16px;
        }

        .dash .acct-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding: 9px 0;
            font-size: 13px;
        }

        .dash .acct-row + .acct-row {
            border-top: 1px solid #f1f5f9;
        }

        .dash .acct-k {
            color: #64748b;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dash .acct-k i {
            font-size: 12px;
            width: 16px;
            text-align: center;
        }

        .dash .acct-v {
            color: #0f172a;
            font-weight: 500;
            text-align: right;
            word-break: break-word;
        }

        .dash .acct-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 2px 9px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 600;
        }

        .dash .acct-badge--ok {
            background: #dcfce7;
            color: #166534;
        }

        .dash .acct-badge--warn {
            background: #fef2f2;
            color: #b91c1c;
        }

        /* ── Verify alert ── */
        .dash .verify-alert {
            margin-top: 18px;
            border: 1px solid #fecaca;
            border-radius: 12px;
            background: #fef2f2;
            color: #991b1b;
            padding: 14px 18px;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dash .verify-alert i {
            font-size: 16px;
            color: #dc2626;
            flex-shrink: 0;
        }

        .dash .verify-alert a {
            color: #0f766e;
            text-decoration: underline;
            font-weight: 700;
        }

        /* ── Responsive ── */
        @media (max-width: 1200px) {
            .dash .hero-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 1000px) {
            .dash .body-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .dash .hero-grid {
                grid-template-columns: 1fr;
            }

            .dash .hero-num {
                font-size: 26px;
            }

            .dash .limit-grid,
            .dash .quick-row {
                grid-template-columns: 1fr;
            }

            .dash .cap-block {
                flex-direction: column;
                text-align: center;
            }

            .dash .upload-cta {
                font-size: 15px;
                padding: 14px;
            }
        }
    </style>
@endpush

<x-app-layout>
    @php
        $usedBytes = $user->use_capacity * 1024;
        $totalBytes = max(0, $user->capacity * 1024);
        $freeBytes = max(0, ($user->capacity - $user->use_capacity) * 1024);
        $usagePercent = $user->capacity > 0 ? round(($user->use_capacity / $user->capacity) * 100, 1) : 0;
        $usagePercent = min(100, max(0, $usagePercent));
        $defaultStrategyId = (int) $user->configs->get(\App\Enums\UserConfigKey::DefaultStrategy, 0);
        $defaultStrategy = $strategies->firstWhere('id', $defaultStrategyId);
        $enabledApi = (bool) \App\Utils::config(\App\Enums\ConfigKey::IsEnableApi);
        $needVerify = (bool) \App\Utils::config(\App\Enums\ConfigKey::IsUserNeedVerify);
        $dailyLimit = (int) $configs->get(\App\Enums\GroupConfigKey::LimitPerDay);
        $monthlyLimit = (int) $configs->get(\App\Enums\GroupConfigKey::LimitPerMonth);
        $concurrentLimit = (int) $configs->get(\App\Enums\GroupConfigKey::ConcurrentUploadNum);
        $maxFileBytes = (int) $configs->get(\App\Enums\GroupConfigKey::MaximumFileSize) * 1024;

        // Estimated remaining days
        $estDays = null;
        if ($user->image_num > 0 && $freeBytes > 0 && $usedBytes > 0) {
            $accountAge = max(1, now()->diffInDays($user->created_at));
            $dailyUsage = $usedBytes / $accountAge;
            if ($dailyUsage > 0) {
                $estDays = (int) floor($freeBytes / $dailyUsage);
            }
        }

        // Ring SVG calculations
        $ringRadius = 42;
        $ringCircum = 2 * 3.14159 * $ringRadius;
        $ringOffset = $ringCircum - ($ringCircum * $usagePercent / 100);

        // Usage threshold class
        $usageClass = '';
        if ($usagePercent >= 90) {
            $usageClass = 'usage-danger';
        } elseif ($usagePercent >= 70) {
            $usageClass = 'usage-warn';
        }

        // Strategy icon mapping
        $strategyIcons = [
            'local' => 'fas fa-hdd',
            's3' => 'fab fa-aws',
            'oss' => 'fas fa-cloud',
            'cos' => 'fas fa-cloud',
            'kodo' => 'fas fa-cloud',
            'uss' => 'fas fa-cloud',
            'sftp' => 'fas fa-server',
            'ftp' => 'fas fa-server',
            'webdav' => 'fas fa-globe',
            'minio' => 'fas fa-database',
        ];
    @endphp

    <div class="dash">
        {{-- ── Hero: 4-column stats ── --}}
        <div class="hero-grid">
            <div class="hero-card hero-card--images">
                <div class="hero-icon"><i class="fas fa-images"></i></div>
                <div class="hero-label">图片总数</div>
                <div class="hero-num">{{ number_format($user->image_num) }}</div>
                <div class="hero-sub">累计上传图片</div>
            </div>
            <div class="hero-card hero-card--used">
                <div class="hero-icon"><i class="fas fa-database"></i></div>
                <div class="hero-label">已用空间</div>
                <div class="hero-num">{{ \App\Utils::formatSize($usedBytes) }}</div>
                <div class="hero-sub">总计 {{ \App\Utils::formatSize($totalBytes) }}</div>
            </div>
            <div class="hero-card hero-card--free">
                <div class="hero-icon"><i class="fas fa-box-open"></i></div>
                <div class="hero-label">剩余空间</div>
                <div class="hero-num">{{ \App\Utils::formatSize($freeBytes) }}</div>
                <div class="hero-sub">使用率 {{ $usagePercent }}%</div>
            </div>
            <div class="hero-card hero-card--status">
                <div class="hero-icon"><i class="fas fa-user-shield"></i></div>
                <div class="hero-label">账号状态</div>
                <div class="hero-num">
                    @if($user->email_verified_at)
                        <span style="color:#16a34a">已验证</span>
                    @elseif($needVerify)
                        <span style="color:#dc2626">未验证</span>
                    @else
                        <span style="color:#16a34a">正常</span>
                    @endif
                </div>
                <div class="hero-sub">{{ $user->group ? $user->group->name : '默认组' }}</div>
            </div>
        </div>

        {{-- ── Body: left + right ── --}}
        <div class="body-grid">
            {{-- LEFT: Resource Management --}}
            <div class="body-col">
                {{-- Capacity card --}}
                <section class="card">
                    <div class="card-head">
                        <h3 class="card-title"><i class="fas fa-chart-pie"></i> 容量概览</h3>
                        <span class="card-badge">{{ $usagePercent }}% 已用</span>
                    </div>
                    <div class="card-body">
                        <div class="cap-block">
                            <div class="cap-ring-wrap">
                                <svg viewBox="0 0 100 100">
                                    <defs>
                                        <linearGradient id="capGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" stop-color="#3b82f6"/>
                                            <stop offset="100%" stop-color="#06b6d4"/>
                                        </linearGradient>
                                    </defs>
                                    <circle class="cap-ring-bg" cx="50" cy="50" r="{{ $ringRadius }}"/>
                                    <circle class="cap-ring-fill {{ $usageClass }}"
                                            cx="50" cy="50" r="{{ $ringRadius }}"
                                            stroke-dasharray="{{ $ringCircum }}"
                                            stroke-dashoffset="{{ $ringOffset }}"/>
                                </svg>
                                <div class="cap-center">
                                    <span class="cap-pct">{{ $usagePercent }}<span class="cap-pct-unit">%</span></span>
                                    <span class="cap-label">已使用</span>
                                </div>
                            </div>
                            <div class="cap-details">
                                <div class="cap-detail-row">
                                    <span class="cap-dot cap-dot--used"></span>
                                    <span class="cap-detail-label">已用空间</span>
                                    <span class="cap-detail-val">{{ \App\Utils::formatSize($usedBytes) }}</span>
                                </div>
                                <div class="cap-detail-row">
                                    <span class="cap-dot cap-dot--free"></span>
                                    <span class="cap-detail-label">剩余空间</span>
                                    <span class="cap-detail-val">{{ \App\Utils::formatSize($freeBytes) }}</span>
                                </div>
                                <div class="cap-detail-row">
                                    <span class="cap-dot" style="background:#94a3b8"></span>
                                    <span class="cap-detail-label">总容量</span>
                                    <span class="cap-detail-val">{{ \App\Utils::formatSize($totalBytes) }}</span>
                                </div>
                            </div>
                        </div>

                        @if($estDays !== null)
                            <div class="cap-est">
                                <i class="fas fa-clock"></i>
                                <span>按当前使用速率，预计剩余容量可用约 <strong>{{ $estDays }}</strong> 天</span>
                            </div>
                        @endif

                        <div class="limit-grid">
                            <div class="limit-pill">
                                <div class="limit-pill-icon lpi--file"><i class="fas fa-file-image"></i></div>
                                <div class="limit-pill-text">
                                    <div class="limit-pill-k">单文件上限</div>
                                    <div class="limit-pill-v">{{ \App\Utils::formatSize($maxFileBytes) }}</div>
                                </div>
                            </div>
                            <div class="limit-pill">
                                <div class="limit-pill-icon lpi--conc"><i class="fas fa-layer-group"></i></div>
                                <div class="limit-pill-text">
                                    <div class="limit-pill-k">并发上传</div>
                                    <div class="limit-pill-v">{{ $concurrentLimit }} 张</div>
                                </div>
                            </div>
                            <div class="limit-pill">
                                <div class="limit-pill-icon lpi--day"><i class="fas fa-calendar-day"></i></div>
                                <div class="limit-pill-text">
                                    <div class="limit-pill-k">每日限制</div>
                                    <div class="limit-pill-v">{{ $dailyLimit > 0 ? $dailyLimit.' 张' : '不限' }}</div>
                                </div>
                            </div>
                            <div class="limit-pill">
                                <div class="limit-pill-icon lpi--mon"><i class="fas fa-calendar-alt"></i></div>
                                <div class="limit-pill-text">
                                    <div class="limit-pill-k">每月限制</div>
                                    <div class="limit-pill-v">{{ $monthlyLimit > 0 ? $monthlyLimit.' 张' : '不限' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Strategies card --}}
                <section class="card">
                    <div class="card-head">
                        <h3 class="card-title"><i class="fas fa-server"></i> 存储策略</h3>
                        <span class="card-badge">{{ $strategies->count() }} 个可用</span>
                    </div>
                    <div class="card-body">
                        @if($strategies->isEmpty())
                            <x-no-data message="您所在的组还没有可用的储存策略，请联系管理员。" />
                        @else
                            <div class="strat-list">
                                @foreach ($strategies as $strategy)
                                    @php
                                        $isDefault = $strategy->id === $defaultStrategyId;
                                        $driverKey = strtolower($strategy->key ?? '');
                                        $icon = $strategyIcons[$driverKey] ?? 'fas fa-cloud';
                                    @endphp
                                    <div class="strat-item {{ $isDefault ? 'is-default' : '' }}">
                                        <div class="strat-icon"><i class="{{ $icon }}"></i></div>
                                        <div class="strat-info">
                                            <p class="strat-name">{{ $strategy->name }}</p>
                                            <p class="strat-desc">{{ $strategy->intro ?: '暂无描述' }}</p>
                                        </div>
                                        @if($isDefault)
                                            <span class="strat-tag">默认</span>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </section>
            </div>

            {{-- RIGHT: Quick Actions + Account --}}
            <div class="body-col">
                {{-- Upload CTA + Quick Links --}}
                <section class="card">
                    <div class="card-body">
                        <a href="{{ route('images') }}" class="upload-cta">
                            <i class="fas fa-cloud-upload-alt"></i>
                            立即上传
                        </a>
                        <div class="quick-row">
                            <a href="{{ route('images') }}" class="quick-link"><i class="fas fa-images"></i> 图片管理</a>
                            <a href="{{ route('settings') }}" class="quick-link"><i class="fas fa-user-cog"></i> 账号设置</a>
                            @if($enabledApi)
                                <a href="{{ route('api') }}" class="quick-link"><i class="fas fa-code"></i> API 文档</a>
                            @else
                                <a href="javascript:void(0)" class="quick-link disabled"><i class="fas fa-code"></i> API 未启用</a>
                            @endif
                        </div>
                    </div>
                </section>

                {{-- Account card --}}
                <section class="card acct-card">
                    <div class="card-head">
                        <h3 class="card-title"><i class="fas fa-id-card"></i> 账号信息</h3>
                    </div>
                    <div class="acct-header">
                        <div class="acct-avatar">
                            {{ mb_strtoupper(mb_substr($user->name ?? $user->email, 0, 1)) }}
                        </div>
                        <div>
                            <div class="acct-name">{{ $user->name ?? '用户' }}</div>
                            <div class="acct-email">{{ $user->email }}</div>
                        </div>
                    </div>
                    <div class="acct-rows">
                        <div class="acct-row">
                            <span class="acct-k"><i class="fas fa-users"></i> 所属用户组</span>
                            <span class="acct-v">{{ $user->group ? $user->group->name : '系统默认组' }}</span>
                        </div>
                        <div class="acct-row">
                            <span class="acct-k"><i class="fas fa-hdd"></i> 默认策略</span>
                            <span class="acct-v">{{ $defaultStrategy ? $defaultStrategy->name : '未设置' }}</span>
                        </div>
                        <div class="acct-row">
                            <span class="acct-k"><i class="fas fa-shield-alt"></i> 邮箱验证</span>
                            <span class="acct-v">
                                @if($user->email_verified_at)
                                    <span class="acct-badge acct-badge--ok"><i class="fas fa-check-circle"></i> 已验证</span>
                                @else
                                    <span class="acct-badge acct-badge--warn"><i class="fas fa-exclamation-circle"></i> 未验证</span>
                                @endif
                            </span>
                        </div>
                        <div class="acct-row">
                            <span class="acct-k"><i class="fas fa-images"></i> 图片数量</span>
                            <span class="acct-v">{{ number_format($user->image_num) }} 张</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        {{-- ── Verify email alert ── --}}
        @if($needVerify && !$user->email_verified_at)
            <div class="verify-alert">
                <i class="fas fa-exclamation-triangle"></i>
                <span>
                    你的账号尚未激活，功能受限，请根据激活邮件指引激活账号，如果你没有收到邮件，请点击
                    <a id="send-verify-email" href="javascript:void(0)">这里</a>
                    重新发送。
                </span>
            </div>
        @endif
    </div>

    @if($needVerify && !$user->email_verified_at)
        @push('scripts')
            <script>
                $('#send-verify-email').click(function () {
                    if (! $(this).attr('disabled')) {
                        $(this).text('发送中...').attr('disabled');
                        axios.post('{{ route('verification.send') }}').then(response => {
                            toastr.success('发送成功，请注意查收。');
                        }).catch(error => {
                            if (error.response.status === 429) {
                                toastr.error('操作频繁，请稍后再试');
                            }
                        }).finally(_ => {
                            $(this).text('这里').attr('disabled');
                        });
                    }
                });
            </script>
        @endpush
    @endif

</x-app-layout>
