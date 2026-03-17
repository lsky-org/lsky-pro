@section('title', '设置')

@push('styles')
    <style>
        .settings-v2 {
            width: 100%;
            margin: 0;
            color: #111827;
        }

        .settings-v2 .settings-shell {
            display: grid;
            gap: 16px;
        }

        .settings-v2 .save-btn {
            width: 100%;
            min-height: 44px;
            border-radius: 12px;
            padding: 0 20px;
            border: 0;
            background: linear-gradient(95deg, #0284c7, #0369a1);
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            transition: .2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(2,132,199,.22);
        }

        .settings-v2 .save-btn:hover {
            filter: brightness(1.05);
        }

        /* ── Grid layout ── */
        .settings-v2 .settings-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(320px, .95fr);
            gap: 16px;
        }

        .settings-v2 .section-stack {
            display: grid;
            gap: 16px;
        }

        /* ── Panel ── */
        .settings-v2 .panel {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 1px 3px rgba(15,23,42,.06);
            overflow: hidden;
        }

        .settings-v2 .panel-head {
            border-bottom: 1px solid #e2e8f0;
            padding: 14px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .settings-v2 .panel-title {
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
        }

        .settings-v2 .panel-sub {
            font-size: 12px;
            color: #64748b;
        }

        .settings-v2 .panel-body {
            padding: 14px 16px 16px;
        }

        /* ── Field grid ── */
        .settings-v2 .field-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px 14px;
        }

        .settings-v2 .field {
            min-width: 0;
        }

        .settings-v2 .field.full {
            grid-column: 1 / -1;
        }

        .settings-v2 .field > label {
            display: block;
            margin-bottom: 4px;
            font-size: 12px;
            color: #64748b;
            font-weight: 600;
        }

        .settings-v2 fieldset legend {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
        }

        .settings-v2 fieldset p {
            font-size: 12px;
            color: #64748b;
        }

        /* ── Status chips ── */
        .settings-v2 .status-chip {
            min-height: 26px;
            padding: 0 10px;
            border-radius: 999px;
            border: 1px solid #dbe2ea;
            background: #fff;
            color: #475569;
            font-size: 11px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            white-space: nowrap;
        }

        .settings-v2 .status-chip.success {
            border-color: #86efac;
            background: #dcfce7;
            color: #166534;
        }

        .settings-v2 .status-chip.warn {
            border-color: #fde68a;
            background: #fffbeb;
            color: #92400e;
        }

        .settings-v2 .status-chip.danger {
            border-color: #fecaca;
            background: #fef2f2;
            color: #b91c1c;
        }

        .settings-v2 .status-chip.muted {
            background: #f8fafc;
            color: #64748b;
        }

        /* ── Security grid (compact cards) ── */
        .settings-v2 .security-grid {
            display: grid;
            gap: 10px;
        }

        .settings-v2 .security-card {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #f8fafc;
            padding: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: border-color .15s ease, background .15s ease;
        }

        .settings-v2 .security-card.active {
            background: linear-gradient(180deg, #eff6ff 0%, #f8fbff 100%);
            border-color: #bfdbfe;
        }

        .settings-v2 .security-card.pending {
            background: linear-gradient(180deg, #fff7ed 0%, #fffbeb 100%);
            border-color: #fed7aa;
        }

        .settings-v2 .security-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            color: #0f172a;
            font-size: 15px;
            box-shadow: 0 0 0 1px rgba(148,163,184,.12);
            flex-shrink: 0;
        }

        .settings-v2 .security-body {
            flex: 1;
            min-width: 0;
        }

        .settings-v2 .security-row {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .settings-v2 .security-name {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
        }

        .settings-v2 .security-desc {
            color: #64748b;
            font-size: 12px;
            line-height: 1.5;
            margin-top: 2px;
        }

        .settings-v2 .security-action {
            min-height: 32px;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            background: #fff;
            color: #0f172a;
            font-size: 12px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 0 12px;
            white-space: nowrap;
            flex-shrink: 0;
            cursor: pointer;
            transition: .15s ease;
        }

        .settings-v2 .security-action:hover {
            background: #f1f5f9;
        }

        .settings-v2 .security-action[disabled] {
            background: #f8fafc;
            color: #94a3b8;
            cursor: not-allowed;
        }

        /* ── Passkey extras (device list below the compact card) ── */
        .settings-v2 .passkey-section {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #f8fafc;
            padding: 14px;
        }

        .settings-v2 .passkey-section.pending {
            background: linear-gradient(180deg, #fff7ed 0%, #fffbeb 100%);
            border-color: #fed7aa;
        }

        .settings-v2 .passkey-top-row {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .settings-v2 .passkey-device-list {
            margin-top: 10px;
            display: grid;
            gap: 8px;
        }

        .settings-v2 .passkey-device {
            border: 1px dashed #cbd5e1;
            border-radius: 10px;
            background: #fff;
            padding: 10px;
        }

        .settings-v2 .passkey-device-head {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 8px;
        }

        .settings-v2 .passkey-device-label {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
        }

        .settings-v2 .passkey-device-meta {
            margin-top: 3px;
            font-size: 11px;
            line-height: 1.6;
            color: #64748b;
        }

        .settings-v2 .passkey-device-actions {
            margin-top: 8px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .settings-v2 .passkey-device-btn {
            min-height: 28px;
            border-radius: 7px;
            border: 1px solid #cbd5e1;
            background: #f8fafc;
            color: #0f172a;
            font-size: 11px;
            font-weight: 700;
            padding: 0 10px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }

        .settings-v2 .passkey-device-btn.danger {
            border-color: #fecaca;
            background: #fef2f2;
            color: #b91c1c;
        }

        .settings-v2 .passkey-device-empty {
            border: 1px dashed #dbe2ea;
            border-radius: 10px;
            background: rgba(255,255,255,.72);
            padding: 10px;
            font-size: 12px;
            color: #64748b;
        }

        /* ── Governance (hidden by default, JS populates) ── */
        .settings-v2 .governance-panel-hidden {
            display: none;
        }

        .settings-v2 .governance-notice-list,
        .settings-v2 .governance-method-list,
        .settings-v2 .governance-timeline {
            display: grid;
            gap: 8px;
        }

        .settings-v2 .governance-item {
            border: 1px solid #dbe2ea;
            border-radius: 10px;
            background: #f8fafc;
            padding: 10px 11px;
        }

        .settings-v2 .governance-item.warn {
            border-color: #fde68a;
            background: #fffbeb;
        }

        .settings-v2 .governance-item.danger {
            border-color: #fecaca;
            background: #fef2f2;
        }

        .settings-v2 .governance-item.success {
            border-color: #bbf7d0;
            background: #f0fdf4;
        }

        .settings-v2 .governance-item.info {
            border-color: #bfdbfe;
            background: #eff6ff;
        }

        .settings-v2 .governance-item-head {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 6px;
        }

        .settings-v2 .governance-item-title {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
        }

        .settings-v2 .governance-item-time {
            font-size: 11px;
            color: #64748b;
            white-space: nowrap;
        }

        .settings-v2 .governance-item-copy {
            font-size: 12px;
            line-height: 1.7;
            color: #475569;
        }

        .settings-v2 .governance-empty {
            border: 1px dashed #cbd5e1;
            border-radius: 10px;
            padding: 10px 11px;
            background: #f8fafc;
            color: #64748b;
            font-size: 12px;
            line-height: 1.7;
        }

        .settings-v2 .summary-list {
            display: grid;
            gap: 8px;
        }

        .settings-v2 .summary-item {
            border: 1px dashed #cbd5e1;
            border-radius: 9px;
            background: #f8fafc;
            padding: 9px 10px;
        }

        .settings-v2 .summary-k {
            font-size: 11px;
            color: #64748b;
            margin-bottom: 3px;
        }

        .settings-v2 .summary-v {
            font-size: 13px;
            font-weight: 600;
            color: #0f172a;
            word-break: break-word;
        }

        /* ── Responsive ── */
        @media (max-width: 1180px) {
            .settings-v2 .settings-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 720px) {
            .settings-v2 .field-grid {
                grid-template-columns: 1fr;
            }

            .settings-v2 .settings-hero {
                flex-direction: column;
                align-items: stretch;
            }

            .settings-v2 .hero-right {
                justify-content: space-between;
            }

            .settings-v2 .save-btn {
                width: 100%;
            }

            .settings-v2 .security-card {
                flex-wrap: wrap;
            }
        }
    </style>
@endpush

<x-app-layout>
    @php
        /** @var \App\Models\User $settingsUser */
        $settingsUser = Auth::user();
        $oauthProviders = \App\Http\Controllers\Auth\SocialAuthController::providersStatus();
        $linkedProvider = trim((string) ($settingsUser->provider ?? ''));
        $linkedProviderId = trim((string) ($settingsUser->provider_id ?? ''));
        $isGoogleLinked = $linkedProvider === 'google' && $linkedProviderId !== '';
        $isGithubLinked = $linkedProvider === 'github' && $linkedProviderId !== '';
        $hasPassword = $settingsUser->hasPasswordLoginReady();
        $statusLabel = (int) $settingsUser->status === \App\Enums\UserStatus::Frozen ? '冻结' : '正常';
        $statusClass = (int) $settingsUser->status === \App\Enums\UserStatus::Frozen ? 'warn' : 'success';
        $defaultStrategyId = (int) $settingsUser->configs->get('default_strategy', 0);
        $defaultStrategy = $settingsUser->group?->strategies?->firstWhere('id', $defaultStrategyId);
        $linkedProviderLabel = $isGoogleLinked ? 'Google' : ($isGithubLinked ? 'GitHub' : '本地账号');
        $initialIdentitySummary = $hasPassword ? '密码 / 本地账号' : '未检测到本地密码';
        if ($isGoogleLinked) {
            $initialIdentitySummary = $hasPassword ? '密码 + Google' : 'Google';
        } elseif ($isGithubLinked) {
            $initialIdentitySummary = $hasPassword ? '密码 + GitHub' : 'GitHub';
        }
        $passkeyStatusEndpoint = route('passkeys.status');
        $settingsIdentityNotice = session('settings_identity_notice');
    @endphp

    <div class="settings-v2" data-passkey-status-endpoint="{{ $passkeyStatusEndpoint }}">
        <form id="user-settings-form" action="{{ route('settings.update') }}" method="POST">
            @csrf

            <div class="settings-shell">
                {{-- Hidden spans for JS to populate --}}
                <span id="identity-source-summary" style="display:none">{{ $initialIdentitySummary }}</span>
                <span id="identity-source-sub" style="display:none"></span>
                <span id="passkey-support-summary" style="display:none"></span>
                <span id="passkey-hero-status" style="display:none"></span>

                <div class="settings-grid">
                    {{-- ── Left column ── --}}
                    <div class="section-stack">
                        {{-- Basic settings --}}
                        <section class="panel">
                            <div class="panel-head">
                                <div>
                                    <h3 class="panel-title">基础设置</h3>
                                    <div class="panel-sub">账号资料与密码</div>
                                </div>
                                <span class="status-chip {{ $statusClass }}"><i class="fas fa-circle" style="font-size:6px"></i>{{ $statusLabel }}</span>
                            </div>
                            <div class="panel-body">
                                <div class="field-grid">
                                    <div class="field">
                                        <label for="name">昵称</label>
                                        <x-input type="text" name="name" id="name" autocomplete="name" value="{{ $settingsUser->name }}"/>
                                    </div>
                                    <div class="field">
                                        <label for="email">邮箱</label>
                                        <x-input type="text" id="email" autocomplete="email" value="{{ $settingsUser->email }}" disabled readonly/>
                                    </div>
                                    <div class="field full">
                                        <label for="password">更新密码</label>
                                        <x-input type="password" name="password" id="password" placeholder="不修改请留空" autocomplete="new-password" />
                                    </div>
                                    <div class="field full">
                                        <label for="url">个人主页</label>
                                        <x-input type="url" name="url" id="url" autocomplete="url" value="{{ $settingsUser->url }}" placeholder="个人主页地址，http(s)://"/>
                                    </div>
                                </div>
                            </div>
                        </section>

                        {{-- Upload settings --}}
                        <section class="panel">
                            <div class="panel-head">
                                <div>
                                    <h3 class="panel-title">上传设置</h3>
                                    <div class="panel-sub">默认策略与相册</div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="field-grid">
                                    <div class="field">
                                        <label for="default_strategy">默认上传策略</label>
                                        <x-select id="default_strategy" name="configs[default_strategy]" autocomplete="default-strategy">
                                            @if($settingsUser->group)
                                                <option value="0">未选择</option>
                                                @foreach($settingsUser->group->strategies as $strategy)
                                                    <option value="{{ $strategy->id }}" @selected($settingsUser->configs->get('default_strategy') == $strategy->id)>{{ $strategy->name }}</option>
                                                @endforeach
                                            @else
                                                <option value="0">系统默认</option>
                                            @endif
                                        </x-select>
                                    </div>

                                    <div class="field">
                                        <label for="default_album">默认上传相册</label>
                                        <x-select id="default_album" name="configs[default_album]" autocomplete="default-album">
                                            @if($settingsUser->albums->isNotEmpty())
                                                <option value="0">未选择</option>
                                                @foreach($settingsUser->albums as $album)
                                                    <option value="{{ $album->id }}" @selected($settingsUser->configs->get('default_album') == $album->id)>{{ $album->name }}</option>
                                                @endforeach
                                            @else
                                                <option value="0">没有可用相册</option>
                                            @endif
                                        </x-select>
                                    </div>
                                </div>

                                <div style="margin-top:14px; display:grid; gap:12px;">
                                    <x-fieldset title="是否自动清除预览" faq="设置上传时，文件上传完成以后是否自动清除预览图片">
                                        <x-fieldset-radio id="is_auto_clear_preview_yes" name="configs[is_auto_clear_preview]" value="1" :checked="$settingsUser->configs->get('is_auto_clear_preview')">是</x-fieldset-radio>
                                        <x-fieldset-radio id="is_auto_clear_preview_no" name="configs[is_auto_clear_preview]" value="0" :checked="! $settingsUser->configs->get('is_auto_clear_preview')">否</x-fieldset-radio>
                                    </x-fieldset>

                                    <x-fieldset title="图片粘贴后动作" faq="设置上传页面粘贴图片后的动作">
                                        <x-fieldset-radio id="pasted_action_upload" name="configs[pasted_action]" value="{{ \App\Enums\PastedAction::Upload }}" :checked="$settingsUser->configs->get('pasted_action') == \App\Enums\PastedAction::Upload">直接上传</x-fieldset-radio>
                                        <x-fieldset-radio id="pasted_action_waiting" name="configs[pasted_action]" value="{{ \App\Enums\PastedAction::Waiting }}" :checked="$settingsUser->configs->get('pasted_action') == \App\Enums\PastedAction::Waiting">等待上传</x-fieldset-radio>
                                    </x-fieldset>

                                    <x-fieldset title="图片默认权限" faq="设置上传的图片默认的权限(公开还是私有，公开的图片将会出现在画廊中，你也可以通过图片管理单独设置权限)">
                                        <x-fieldset-radio id="default_permission_private" name="configs[default_permission]" value="{{ \App\Enums\ImagePermission::Private }}" :checked="$settingsUser->configs->get('default_permission') == \App\Enums\ImagePermission::Private">私有</x-fieldset-radio>
                                        <x-fieldset-radio id="default_permission_public" name="configs[default_permission]" value="{{ \App\Enums\ImagePermission::Public }}" :checked="$settingsUser->configs->get('default_permission') == \App\Enums\ImagePermission::Public">公开</x-fieldset-radio>
                                    </x-fieldset>
                                </div>
                            </div>
                        </section>

                        <button class="save-btn" type="submit"><i class="fas fa-save"></i>保存设置</button>
                    </div>

                    {{-- ── Right column: Security ── --}}
                    <aside class="section-stack">
                        <section class="panel">
                            <div class="panel-head">
                                <div>
                                    <h3 class="panel-title">登录方式</h3>
                                    <div class="panel-sub">管理密码、社交登录与 Passkey</div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="security-grid">
                                    {{-- Google --}}
                                    <article class="security-card {{ ($oauthProviders['google'] ?? false) ? ($isGoogleLinked ? 'active' : '') : '' }}" id="identity-google-card">
                                        <div class="security-icon"><i class="fab fa-google"></i></div>
                                        <div class="security-body">
                                            <div class="security-row">
                                                <span class="security-name">Google</span>
                                                <span
                                                    class="status-chip {{ ($oauthProviders['google'] ?? false) ? ($isGoogleLinked ? 'success' : 'muted') : 'muted' }}"
                                                    id="identity-google-chip"
                                                >
                                                    {{ ($oauthProviders['google'] ?? false) ? ($isGoogleLinked ? '已关联' : '未关联') : '未接入' }}
                                                </span>
                                            </div>
                                            <div id="identity-google-detail" style="display:none">
                                                @if($isGoogleLinked)
                                                    已关联
                                                @elseif($oauthProviders['google'] ?? false)
                                                    未关联
                                                @else
                                                    未配置
                                                @endif
                                            </div>
                                            <div id="identity-google-snapshot" style="display:none"></div>
                                        </div>
                                        <button type="button" class="security-action" id="identity-google-action" disabled><i class="fab fa-google"></i>加载中...</button>
                                    </article>

                                    {{-- GitHub --}}
                                    <article class="security-card {{ ($oauthProviders['github'] ?? false) ? ($isGithubLinked ? 'active' : '') : '' }}" id="identity-github-card">
                                        <div class="security-icon"><i class="fab fa-github"></i></div>
                                        <div class="security-body">
                                            <div class="security-row">
                                                <span class="security-name">GitHub</span>
                                                <span
                                                    class="status-chip {{ ($oauthProviders['github'] ?? false) ? ($isGithubLinked ? 'success' : 'muted') : 'muted' }}"
                                                    id="identity-github-chip"
                                                >
                                                    {{ ($oauthProviders['github'] ?? false) ? ($isGithubLinked ? '已关联' : '未关联') : '未接入' }}
                                                </span>
                                            </div>
                                            <div id="identity-github-detail" style="display:none">
                                                @if($isGithubLinked)
                                                    已关联
                                                @elseif($oauthProviders['github'] ?? false)
                                                    未关联
                                                @else
                                                    未配置
                                                @endif
                                            </div>
                                            <div id="identity-github-snapshot" style="display:none"></div>
                                        </div>
                                        <button type="button" class="security-action" id="identity-github-action" disabled><i class="fab fa-github"></i>加载中...</button>
                                    </article>

                                    {{-- Passkey --}}
                                    <div class="passkey-section pending" id="passkey-card">
                                        <div class="passkey-top-row">
                                            <div class="security-icon"><i class="fas fa-fingerprint"></i></div>
                                            <div class="security-body">
                                                <div class="security-row">
                                                    <span class="security-name">Passkey</span>
                                                    <span class="status-chip warn" id="passkey-backend-state">加载中...</span>
                                                </div>
                                                <div class="security-desc" id="passkey-status-detail">加载中...</div>
                                            </div>
                                            <button type="button" class="security-action" id="passkey-foundation-action" disabled><i class="fas fa-fingerprint"></i>加载中...</button>
                                        </div>
                                        {{-- Hidden elements for JS --}}
                                        <span id="passkey-browser-support" style="display:none"></span>
                                        <span id="passkey-credential-detail" style="display:none"></span>
                                        <span id="passkey-registration-detail" style="display:none"></span>
                                        <span id="passkey-operation-status" style="display:none"></span>
                                        <div class="passkey-device-list" id="passkey-credential-list">
                                            <div class="passkey-device-empty">加载中...</div>
                                        </div>
                                    </div>

                                    {{-- 2FA --}}
                                    <article class="security-card {{ $settingsUser->two_factor_enabled ? 'active' : '' }}">
                                        <div class="security-icon"><i class="fas fa-shield-alt"></i></div>
                                        <div class="security-body">
                                            <div class="security-row">
                                                <span class="security-name">两步验证</span>
                                                <span class="status-chip {{ $settingsUser->two_factor_enabled ? 'success' : 'muted' }}">{{ $settingsUser->two_factor_enabled ? '已启用' : '未启用' }}</span>
                                            </div>
                                        </div>
                                        <a href="{{ route('two-factor.setup') }}" class="security-action"><i class="fas fa-shield-alt"></i>{{ $settingsUser->two_factor_enabled ? '管理' : '启用' }}</a>
                                    </article>
                                </div>

                                {{-- Hidden elements that JS references --}}
                                <div style="display:none" id="identity-status-overview"></div>
                                <div style="display:none" id="identity-provider-summary"></div>
                                <div style="display:none" id="identity-legacy-summary"></div>
                                <div style="display:none" id="passkey-foundation-summary"></div>
                            </div>
                        </section>

                        {{-- Governance panel: hidden by default, JS populates --}}
                        <section class="panel governance-panel-hidden" id="identity-governance-panel">
                            <div class="panel-head">
                                <div>
                                    <h3 class="panel-title">身份治理面板</h3>
                                    <div class="panel-sub">恢复路径与身份事件</div>
                                </div>
                                <span class="status-chip muted" id="governance-level-chip"><i class="fas fa-shield-alt"></i>分析中</span>
                            </div>
                            <div class="panel-body" style="display:grid; gap:12px;">
                                <div class="summary-list">
                                    <div class="summary-item">
                                        <div class="summary-k">恢复等级</div>
                                        <div class="summary-v" id="governance-recovery-label"></div>
                                    </div>
                                    <div class="summary-item">
                                        <div class="summary-k">恢复说明</div>
                                        <div class="summary-v" id="governance-recovery-detail"></div>
                                    </div>
                                    <div class="summary-item">
                                        <div class="summary-k">Legacy snapshot</div>
                                        <div class="summary-v" id="governance-legacy-detail"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="panel-sub" style="margin-bottom:8px;">治理提示</div>
                                    <div class="governance-notice-list" id="governance-notices">
                                        <div class="governance-empty">暂无</div>
                                    </div>
                                </div>

                                <div>
                                    <div class="panel-sub" style="margin-bottom:8px;">登录方式清单</div>
                                    <div class="governance-method-list" id="governance-method-inventory">
                                        <div class="governance-empty">暂无</div>
                                    </div>
                                </div>

                                <div>
                                    <div class="panel-sub" style="margin-bottom:8px;">最近身份事件</div>
                                    <div class="governance-timeline" id="governance-timeline">
                                        <div class="governance-empty">暂无</div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </form>
    </div>
    @push('scripts')
        <script>
            $('#user-settings-form').submit(function (e) {
                e.preventDefault();
                axios.put(this.action, $(this).serialize()).then(response => {
                    toastr[response.data.status ? 'success' : 'warning'](response.data.message);
                });
            });

            (function () {
                const settingsRoot = document.querySelector('.settings-v2');
                const statusEndpoint = settingsRoot ? settingsRoot.dataset.passkeyStatusEndpoint : '';
                const oauthProviders = @json($oauthProviders);
                const settingsIdentityNotice = @json($settingsIdentityNotice);
                const hasPassword = @json($hasPassword);
                const passkeySupportSummary = document.getElementById('passkey-support-summary');
                const passkeyBrowserSupport = document.getElementById('passkey-browser-support');
                const passkeyHeroStatus = document.getElementById('passkey-hero-status');
                const passkeyBackendState = document.getElementById('passkey-backend-state');
                const passkeyStatusDetail = document.getElementById('passkey-status-detail');
                const passkeyCredentialDetail = document.getElementById('passkey-credential-detail');
                const passkeyRegistrationDetail = document.getElementById('passkey-registration-detail');
                const passkeyFoundationAction = document.getElementById('passkey-foundation-action');
                const passkeyFoundationSummary = document.getElementById('passkey-foundation-summary');
                const passkeyCard = document.getElementById('passkey-card');
                const identitySourceSummary = document.getElementById('identity-source-summary');
                const identitySourceSub = document.getElementById('identity-source-sub');
                const identityStatusOverview = document.getElementById('identity-status-overview');
                const identityProviderSummary = document.getElementById('identity-provider-summary');
                const identityLegacySummary = document.getElementById('identity-legacy-summary');
                const governanceLevelChip = document.getElementById('governance-level-chip');
                const governanceRecoveryLabel = document.getElementById('governance-recovery-label');
                const governanceRecoveryDetail = document.getElementById('governance-recovery-detail');
                const governanceLegacyDetail = document.getElementById('governance-legacy-detail');
                const governanceNotices = document.getElementById('governance-notices');
                const governanceMethodInventory = document.getElementById('governance-method-inventory');
                const governanceTimeline = document.getElementById('governance-timeline');
                const supportsPasskeyCreate = Boolean(
                    window.PublicKeyCredential
                    && navigator.credentials
                    && typeof navigator.credentials.create === 'function'
                );
                const supportsPasskeyGet = Boolean(
                    window.PublicKeyCredential
                    && navigator.credentials
                    && typeof navigator.credentials.get === 'function'
                );
                const supportsPasskeyApi = supportsPasskeyCreate && supportsPasskeyGet;
                const providerLabels = {
                    google: 'Google',
                    github: 'GitHub',
                };
                const passkeyCredentialList = document.getElementById('passkey-credential-list');
                const passkeyOperationStatus = document.getElementById('passkey-operation-status');
                let latestPasskeyPayload = null;
                let passkeyBusy = false;

                const providerElements = {
                    google: {
                        card: document.getElementById('identity-google-card'),
                        chip: document.getElementById('identity-google-chip'),
                        detail: document.getElementById('identity-google-detail'),
                        snapshot: document.getElementById('identity-google-snapshot'),
                        action: document.getElementById('identity-google-action'),
                    },
                    github: {
                        card: document.getElementById('identity-github-card'),
                        chip: document.getElementById('identity-github-chip'),
                        detail: document.getElementById('identity-github-detail'),
                        snapshot: document.getElementById('identity-github-snapshot'),
                        action: document.getElementById('identity-github-action'),
                    },
                };
                let identityBusyProvider = '';

                function setChipState(element, tone, text) {
                    if (!element) {
                        return;
                    }

                    element.classList.remove('success', 'warn', 'muted', 'danger');
                    if (tone) {
                        element.classList.add(tone);
                    }
                    element.textContent = text;
                }

                function setPasskeyOperation(message, tone = 'info') {
                    if (passkeyOperationStatus) {
                        passkeyOperationStatus.textContent = message;
                    }

                    if (window.toastr) {
                        if (tone === 'success') {
                            window.toastr.success(message);
                        } else if (tone === 'error') {
                            window.toastr.error(message);
                        }
                    }
                }

                function formatDateTime(value) {
                    if (!value) {
                        return '未知时间';
                    }

                    const parsed = new Date(value.replace(' ', 'T'));
                    if (Number.isNaN(parsed.getTime())) {
                        return value;
                    }

                    return new Intl.DateTimeFormat('zh-CN', {
                        year: 'numeric',
                        month: '2-digit',
                        day: '2-digit',
                        hour: '2-digit',
                        minute: '2-digit',
                    }).format(parsed);
                }

                function toneClass(tone) {
                    if (tone === 'success' || tone === 'warn' || tone === 'danger' || tone === 'info') {
                        return tone;
                    }

                    return 'info';
                }

                function csrfToken() {
                    const token = document.querySelector('meta[name="csrf-token"]');
                    return token ? token.getAttribute('content') || '' : '';
                }

                function toArrayBuffer(value) {
                    const normalized = String(value || '').replace(/-/g, '+').replace(/_/g, '/');
                    const padded = normalized + '='.repeat((4 - normalized.length % 4) % 4);
                    const binary = window.atob(padded);
                    const bytes = new Uint8Array(binary.length);
                    for (let index = 0; index < binary.length; index += 1) {
                        bytes[index] = binary.charCodeAt(index);
                    }

                    return bytes.buffer;
                }

                function toBase64Url(value) {
                    const bytes = value instanceof ArrayBuffer ? new Uint8Array(value) : new Uint8Array(value.buffer || value);
                    let binary = '';
                    bytes.forEach(byte => {
                        binary += String.fromCharCode(byte);
                    });

                    return window.btoa(binary).replace(/\+/g, '-').replace(/\//g, '_').replace(/=+$/g, '');
                }

                async function requestJson(url, options = {}) {
                    const response = await fetch(url, Object.assign({
                        credentials: 'same-origin',
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                    }, options));

                    return response.json();
                }

                function prepareRegistrationOptions(options) {
                    const publicKey = Object.assign({}, options || {});
                    publicKey.challenge = toArrayBuffer(publicKey.challenge);
                    if (publicKey.user && publicKey.user.id) {
                        publicKey.user = Object.assign({}, publicKey.user, {
                            id: toArrayBuffer(publicKey.user.id),
                        });
                    }
                    publicKey.excludeCredentials = Array.isArray(publicKey.excludeCredentials)
                        ? publicKey.excludeCredentials.map(item => Object.assign({}, item, {
                            id: toArrayBuffer(item.id),
                        }))
                        : [];

                    return publicKey;
                }

                function prepareAuthenticationOptions(options) {
                    const publicKey = Object.assign({}, options || {});
                    publicKey.challenge = toArrayBuffer(publicKey.challenge);
                    publicKey.allowCredentials = Array.isArray(publicKey.allowCredentials)
                        ? publicKey.allowCredentials.map(item => Object.assign({}, item, {
                            id: toArrayBuffer(item.id),
                        }))
                        : [];

                    return publicKey;
                }

                function serializeAttestation(credential, label) {
                    return {
                        id: credential.id,
                        rawId: toBase64Url(credential.rawId),
                        type: credential.type,
                        label: label,
                        transports: credential.response && typeof credential.response.getTransports === 'function'
                            ? credential.response.getTransports()
                            : [],
                        response: {
                            clientDataJSON: toBase64Url(credential.response.clientDataJSON),
                            attestationObject: toBase64Url(credential.response.attestationObject),
                        },
                    };
                }

                function serializeAssertion(credential) {
                    return {
                        id: credential.id,
                        rawId: toBase64Url(credential.rawId),
                        type: credential.type,
                        response: {
                            clientDataJSON: toBase64Url(credential.response.clientDataJSON),
                            authenticatorData: toBase64Url(credential.response.authenticatorData),
                            signature: toBase64Url(credential.response.signature),
                            userHandle: credential.response.userHandle ? toBase64Url(credential.response.userHandle) : '',
                        },
                    };
                }

                function setPasskeyActionState(text, disabled) {
                    if (!passkeyFoundationAction) {
                        return;
                    }

                    passkeyFoundationAction.disabled = disabled;
                    passkeyFoundationAction.innerHTML = `<i class="fas fa-fingerprint"></i>${text}`;
                }

                function renderCredentialList(credentials) {
                    if (!passkeyCredentialList) {
                        return;
                    }

                    passkeyCredentialList.innerHTML = '';
                    if (!credentials.length) {
                        const empty = document.createElement('div');
                        empty.className = 'passkey-device-empty';
                        empty.textContent = '当前账号还没有已登记的 Passkey。点击上方按钮即可开始新凭证登记。';
                        passkeyCredentialList.appendChild(empty);
                        return;
                    }

                    credentials.forEach(credential => {
                        const item = document.createElement('div');
                        item.className = 'passkey-device';

                        const head = document.createElement('div');
                        head.className = 'passkey-device-head';

                        const body = document.createElement('div');
                        const label = document.createElement('div');
                        label.className = 'passkey-device-label';
                        label.textContent = credential.label || credential.credential_id;
                        const meta = document.createElement('div');
                        meta.className = 'passkey-device-meta';
                        meta.textContent = `最近使用：${credential.last_used_at ? formatDateTime(credential.last_used_at) : '尚未使用'}；创建时间：${formatDateTime(credential.created_at)}`;
                        body.appendChild(label);
                        body.appendChild(meta);

                        head.appendChild(body);
                        item.appendChild(head);

                        const actions = document.createElement('div');
                        actions.className = 'passkey-device-actions';

                        const renameButton = document.createElement('button');
                        renameButton.type = 'button';
                        renameButton.className = 'passkey-device-btn';
                        renameButton.innerHTML = '<i class="fas fa-pen"></i>重命名';
                        renameButton.disabled = passkeyBusy;
                        renameButton.addEventListener('click', () => renameCredential(credential));

                        const deleteButton = document.createElement('button');
                        deleteButton.type = 'button';
                        deleteButton.className = 'passkey-device-btn danger';
                        deleteButton.innerHTML = '<i class="fas fa-trash"></i>移除';
                        deleteButton.disabled = passkeyBusy;
                        deleteButton.addEventListener('click', () => deleteCredential(credential));

                        actions.appendChild(renameButton);
                        actions.appendChild(deleteButton);
                        item.appendChild(actions);
                        passkeyCredentialList.appendChild(item);
                    });
                }

                function listIdentityLabels(identities) {
                    const labels = [];

                    if (hasPassword) {
                        labels.push('密码');
                    }

                    identities.forEach(identity => {
                        const label = providerLabels[identity.provider] || identity.provider;
                        if (labels.indexOf(label) === -1) {
                            labels.push(label);
                        }
                    });

                    return labels.length ? labels.join(' + ') : '未识别可用身份';
                }

                function renderProviderState(provider, identity, legacy) {
                    const elements = providerElements[provider];
                    if (!elements) {
                        return;
                    }

                    const label = providerLabels[provider] || provider;
                    const isAvailable = !!identity.available;
                    const isLinked = !!identity.linked;
                    const isLegacySnapshot = !!identity.is_legacy_snapshot || (legacy.provider === provider && legacy.provider_id_present);
                    const action = elements.action;

                    if (elements.card) {
                        elements.card.classList.toggle('active', isAvailable || isLinked);
                    }

                    if (isLinked) {
                        setChipState(elements.chip, identity.can_disconnect ? 'success' : 'warn', identity.can_disconnect ? '当前已关联' : '已关联但受保护');
                        elements.detail.textContent = identity.provider_email
                            ? `当前账户已关联 ${label}：${identity.provider_email}。解绑前会先检查是否还保留其他登录方式。`
                            : `当前账户已关联 ${label}，但第三方没有返回可展示邮箱。`;
                        elements.snapshot.textContent = isLegacySnapshot
                            ? '该身份同时命中 legacy provider snapshot；旧 schema 仍保持兼容镜像。'
                            : '该身份来自新的多身份表，不依赖旧的单 provider 槽位。';
                    } else if (isAvailable) {
                        setChipState(elements.chip, 'warn', '站点已接入');
                        elements.detail.textContent = `站点已配置 ${label} OAuth，当前账户尚未关联该身份，点击按钮后会跳转到第三方完成绑定。`;
                        elements.snapshot.textContent = isLegacySnapshot
                            ? 'legacy snapshot 仍指向该 provider，但独立身份表里还没有对应记录。'
                            : '后端没有发现该 provider 的身份记录。';
                    } else {
                        setChipState(elements.chip, 'muted', '站点未接入');
                        elements.detail.textContent = `当前站点未完成 ${label} OAuth 配置，因此这里只展示未接入状态。`;
                        elements.snapshot.textContent = isLegacySnapshot
                            ? '发现 legacy snapshot 仍指向该 provider，但站点配置已缺失或未开启。'
                            : '当前没有该 provider 的身份记录。';
                    }

                    if (!action) {
                        return;
                    }

                    if (identityBusyProvider === provider) {
                        action.disabled = true;
                        action.innerHTML = `<i class="fab fa-${provider === 'github' ? 'github' : 'google'}"></i>正在处理`;
                        return;
                    }

                    action.disabled = true;
                    if (identity.action_mode === 'connect' && identity.connect_route) {
                        action.disabled = false;
                        action.innerHTML = `<i class="fab fa-${provider === 'github' ? 'github' : 'google'}"></i>${identity.action_label || `绑定 ${label}`}`;
                    } else if (identity.action_mode === 'disconnect' && identity.disconnect_route && identity.can_disconnect) {
                        action.disabled = false;
                        action.innerHTML = `<i class="fab fa-${provider === 'github' ? 'github' : 'google'}"></i>${identity.action_label || `解绑 ${label}`}`;
                    } else if (identity.action_mode === 'blocked') {
                        action.innerHTML = `<i class="fab fa-${provider === 'github' ? 'github' : 'google'}"></i>${identity.action_label || `${label} 暂不可解绑`}`;
                        if (identity.disconnect_block_reason) {
                            elements.snapshot.textContent = identity.disconnect_block_reason;
                        }
                    } else {
                        action.innerHTML = `<i class="fab fa-${provider === 'github' ? 'github' : 'google'}"></i>${identity.action_label || '站点未接入'}`;
                    }
                }

                function renderPasskeyState(payload) {
                    latestPasskeyPayload = payload || {};
                    const registration = payload.registration || {};
                    const credentialCount = Number(payload.credential_count || 0);
                    const credentials = Array.isArray(payload.credentials) ? payload.credentials : [];
                    const foundationReady = !!payload.foundation_ready;
                    const verificationEnabled = !!payload.verification_enabled;
                    const credentialLabels = credentials
                        .map(credential => credential.label || credential.credential_id)
                        .filter(Boolean)
                        .slice(0, 2);

                    if (foundationReady) {
                        setChipState(passkeyBackendState, verificationEnabled ? 'success' : 'warn', verificationEnabled ? '已可验证' : 'Foundation 已接入');
                        if (passkeyCard) {
                            passkeyCard.classList.remove('pending');
                            passkeyCard.classList.add(verificationEnabled ? 'active' : 'pending');
                        }
                    } else {
                        setChipState(passkeyBackendState, 'danger', 'Foundation 未就绪');
                    }

                    if (passkeyHeroStatus) {
                        passkeyHeroStatus.textContent = foundationReady
                            ? (verificationEnabled ? '可验证' : 'Foundation 已接入')
                            : '未接入';
                    }

                    if (passkeySupportSummary) {
                        if (foundationReady) {
                            passkeySupportSummary.textContent = supportsPasskeyApi
                                ? '后端 Passkey 注册、验证和设备管理均已接入；当前设备支持完整 WebAuthn 流程。'
                                : '后端 Passkey 注册、验证和设备管理均已接入；但当前设备缺少完整 WebAuthn 能力。';
                        } else {
                            passkeySupportSummary.textContent = supportsPasskeyApi
                                ? '当前设备支持 Passkey API，但后端 foundation 仍未就绪。'
                                : '当前设备未检测到 Passkey API，且后端 foundation 仍未就绪。';
                        }
                    }

                    if (passkeyBrowserSupport) {
                        passkeyBrowserSupport.textContent = supportsPasskeyApi
                            ? '当前浏览器支持 WebAuthn / Passkey API；本页可直接发起新凭证登记，也能管理已登记设备。'
                            : '当前浏览器未检测到完整的 WebAuthn / Passkey API；即使 foundation 已接入，也仍需切换到支持该能力的浏览器和系统。';
                    }

                    if (passkeyStatusDetail) {
                        passkeyStatusDetail.textContent = foundationReady
                            ? (verificationEnabled
                                ? '后端已声明 Passkey foundation、验证能力和设备管理入口都可用。'
                                : '后端已返回 Passkey foundation、challenge 状态和凭证列表，但验证开关仍关闭。')
                            : '后端暂未返回可用的 Passkey foundation 状态。';
                    }

                    if (passkeyCredentialDetail) {
                        passkeyCredentialDetail.textContent = credentialCount > 0
                            ? `后端已登记 ${credentialCount} 个凭证${credentialLabels.length ? `：${credentialLabels.join('、')}` : ''}。`
                            : '后端暂未记录任何 WebAuthn 凭证。';
                    }

                    if (passkeyRegistrationDetail) {
                        passkeyRegistrationDetail.textContent = registration.pending
                            ? `当前有待完成的注册 challenge，过期时间：${formatDateTime(registration.expires_at)}。`
                            : '当前没有 pending registration challenge；点击上方按钮可随时发起新登记。';
                    }

                    if (passkeyFoundationSummary) {
                        passkeyFoundationSummary.textContent = foundationReady
                            ? (verificationEnabled
                                ? 'Passkey foundation、验证能力和设备管理均可用。'
                                : `Passkey foundation 已接入，验证仍关闭，已登记 ${credentialCount} 个凭证。`)
                            : 'Passkey foundation 未就绪。';
                    }

                    if (!foundationReady || !verificationEnabled) {
                        setPasskeyActionState('等待 Passkey foundation', true);
                    } else if (!supportsPasskeyCreate) {
                        setPasskeyActionState('当前设备不支持新凭证登记', true);
                    } else if (passkeyBusy) {
                        setPasskeyActionState('正在处理 Passkey 操作', true);
                    } else if (registration.pending) {
                        setPasskeyActionState('继续当前 Passkey 登记', false);
                    } else {
                        setPasskeyActionState('登记新的 Passkey', false);
                    }

                    renderCredentialList(credentials);
                    if (passkeyOperationStatus) {
                        passkeyOperationStatus.textContent = foundationReady && verificationEnabled
                            ? '可以直接登记、重命名或移除 Passkey。所有操作都会回写真实后端状态。'
                            : '等待后端 Passkey foundation 就绪后才能执行设备管理。';
                    }
                }

                function renderGovernance(payload) {
                    const governance = payload || {};
                    const recovery = governance.recovery || {};
                    const legacySnapshot = governance.legacy_snapshot || {};
                    const notices = Array.isArray(governance.notices) ? governance.notices : [];
                    const methodInventory = Array.isArray(governance.method_inventory) ? governance.method_inventory : [];
                    const recentEvents = Array.isArray(governance.recent_events) ? governance.recent_events : [];
                    const recoveryTone = recovery.level === 'resilient'
                        ? 'success'
                        : (recovery.level === 'single_path' ? 'warn' : 'danger');

                    setChipState(governanceLevelChip, recovery.label ? recoveryTone : 'muted', recovery.label || '治理状态未知');

                    if (governanceRecoveryLabel) {
                        governanceRecoveryLabel.textContent = recovery.label || '治理状态未知';
                    }

                    if (governanceRecoveryDetail) {
                        governanceRecoveryDetail.textContent = recovery.detail || '暂时没有可用的治理摘要。';
                    }

                    if (governanceLegacyDetail) {
                        governanceLegacyDetail.textContent = legacySnapshot.detail || '暂时无法判断 legacy snapshot 一致性。';
                    }

                    if (governanceNotices) {
                        if (!notices.length) {
                            governanceNotices.innerHTML = '<div class="governance-empty">当前没有额外治理告警，恢复路径与快照状态看起来正常。</div>';
                        } else {
                            governanceNotices.innerHTML = notices.map(notice => `
                                <div class="governance-item ${toneClass(notice.level)}">
                                    <div class="governance-item-title">${notice.code || 'notice'}</div>
                                    <div class="governance-item-copy">${notice.message || ''}</div>
                                </div>
                            `).join('');
                        }
                    }

                    if (governanceMethodInventory) {
                        if (!methodInventory.length) {
                            governanceMethodInventory.innerHTML = '<div class="governance-empty">暂时没有可展示的登录方式摘要。</div>';
                        } else {
                            governanceMethodInventory.innerHTML = methodInventory.map(item => `
                                <div class="governance-item ${item.ready ? 'success' : 'warn'}">
                                    <div class="governance-item-head">
                                        <div class="governance-item-title">${item.label || item.provider || '身份方式'}</div>
                                        <div class="governance-item-time">${item.last_used_at ? `最近使用 ${formatDateTime(item.last_used_at)}` : (item.last_changed_at ? `最近变更 ${formatDateTime(item.last_changed_at)}` : '暂无时间戳')}</div>
                                    </div>
                                    <div class="governance-item-copy">${item.detail || ''}</div>
                                </div>
                            `).join('');
                        }
                    }

                    if (governanceTimeline) {
                        if (!recentEvents.length) {
                            governanceTimeline.innerHTML = '<div class="governance-empty">当前还没有可展示的身份治理事件。</div>';
                        } else {
                            governanceTimeline.innerHTML = recentEvents.map(event => `
                                <div class="governance-item ${toneClass(event.tone)}">
                                    <div class="governance-item-head">
                                        <div class="governance-item-title">${event.title || event.event_type || '身份事件'}</div>
                                        <div class="governance-item-time">${event.created_at ? formatDateTime(event.created_at) : '未知时间'}</div>
                                    </div>
                                    <div class="governance-item-copy">${event.summary || ''}</div>
                                </div>
                            `).join('');
                        }
                    }
                }

                function renderStatusPayload(payload) {
                    latestStatusPayload = payload || {};
                    latestIdentityMatrixPayload = (payload && payload.identity_matrix) || {};
                    latestLegacyPayloadCache = (payload && payload.legacy) || {};
                    const identities = Array.isArray(payload.identities) ? payload.identities : [];
                    const identityMatrix = payload.identity_matrix || {};
                    const legacy = payload.legacy || {};
                    const passkeys = payload.passkeys || {};
                    const identityByProvider = identities.reduce((carry, identity) => {
                        if (identity && identity.provider) {
                            carry[identity.provider] = identity;
                        }

                        return carry;
                    }, {});
                    const identitySummary = listIdentityLabels(identities);

                    if (identitySourceSummary) {
                        identitySourceSummary.textContent = identitySummary;
                    }

                    if (identitySourceSub) {
                        identitySourceSub.textContent = identities.length
                            ? `后端身份表已识别 ${identities.length} 条记录；页面展示以 auth_identities 为准，并保留 legacy snapshot 说明。`
                            : '后端身份表暂未识别社交账号记录；当前仅保留密码 / 本地账号语义。';
                    }

                    if (identityProviderSummary) {
                        identityProviderSummary.textContent = identities.length
                            ? `${identitySummary}（共 ${identities.length} 条后端身份记录）`
                            : (hasPassword ? '仅检测到密码 / 本地账号。' : '当前未检测到后端身份记录。');
                    }

                    if (identityLegacySummary) {
                        identityLegacySummary.textContent = legacy.provider && legacy.provider_id_present
                            ? `legacy provider snapshot 当前指向 ${providerLabels[legacy.provider] || legacy.provider}。`
                            : '当前用户没有 legacy provider snapshot。';
                    }

                    if (identityStatusOverview) {
                        identityStatusOverview.textContent = `设置页现在直接读取后端身份状态：auth_identities ${identities.length} 条，Passkey 凭证 ${Number(passkeys.credential_count || 0)} 个。Google、GitHub、密码会共存展示；其中 Google/GitHub 已支持绑定解绑控制，Passkey 已具备真实设备管理能力。`;
                    }

                    renderProviderState('google', identityMatrix.google || identityByProvider.google || {}, legacy);
                    renderProviderState('github', identityMatrix.github || identityByProvider.github || {}, legacy);
                    renderPasskeyState(passkeys);
                    renderGovernance(payload.governance || {});
                }

                function renderStatusError() {
                    if (passkeyHeroStatus) {
                        passkeyHeroStatus.textContent = '读取失败';
                    }

                    if (passkeySupportSummary) {
                        passkeySupportSummary.textContent = supportsPasskeyApi
                            ? '当前设备支持 Passkey API，但设置页暂时无法读取后端状态。'
                            : '当前设备未检测到 Passkey API，且设置页暂时无法读取后端状态。';
                    }

                    if (passkeyBrowserSupport) {
                        passkeyBrowserSupport.textContent = supportsPasskeyApi
                            ? '当前浏览器支持 WebAuthn / Passkey API，但这次页面加载没有成功拿到后端 foundation 状态。'
                            : '当前浏览器未检测到完整 WebAuthn / Passkey API；同时这次页面加载也没有成功拿到后端 foundation 状态。';
                    }

                    setChipState(passkeyBackendState, 'danger', '状态读取失败');

                    if (passkeyStatusDetail) {
                        passkeyStatusDetail.textContent = '后端状态读取失败，本页暂时无法启用 Passkey 设备管理。';
                    }

                    if (passkeyCredentialDetail) {
                        passkeyCredentialDetail.textContent = '暂时无法读取凭证列表。';
                    }

                    if (passkeyRegistrationDetail) {
                        passkeyRegistrationDetail.textContent = '暂时无法读取 registration challenge 状态。';
                    }

                    if (passkeyFoundationSummary) {
                        passkeyFoundationSummary.textContent = '暂时无法读取 Passkey foundation 状态。';
                    }

                    if (passkeyFoundationAction) {
                        setPasskeyActionState('后端状态读取失败', true);
                    }

                    if (identityStatusOverview) {
                        identityStatusOverview.textContent = '这次页面加载没有成功读取后端身份状态；Google/GitHub 绑定解绑和 Passkey 设备管理都暂时不可用。';
                    }

                    if (identityProviderSummary) {
                        identityProviderSummary.textContent = '暂时无法读取后端身份记录。';
                    }

                    if (identityLegacySummary) {
                        identityLegacySummary.textContent = '暂时无法读取 legacy snapshot。';
                    }

                    setChipState(governanceLevelChip, 'danger', '治理状态读取失败');

                    if (governanceRecoveryLabel) {
                        governanceRecoveryLabel.textContent = '治理状态读取失败';
                    }

                    if (governanceRecoveryDetail) {
                        governanceRecoveryDetail.textContent = '暂时无法分析当前账户的恢复路径。';
                    }

                    if (governanceLegacyDetail) {
                        governanceLegacyDetail.textContent = '暂时无法判断 legacy snapshot 与新身份记录的一致性。';
                    }

                    if (governanceNotices) {
                        governanceNotices.innerHTML = '<div class="governance-empty">这次状态读取失败，无法展示治理提示。</div>';
                    }

                    if (governanceMethodInventory) {
                        governanceMethodInventory.innerHTML = '<div class="governance-empty">这次状态读取失败，无法展示登录方式清单。</div>';
                    }

                    if (governanceTimeline) {
                        governanceTimeline.innerHTML = '<div class="governance-empty">这次状态读取失败，无法展示最近身份事件。</div>';
                    }
                }

                if (passkeyBrowserSupport) {
                    passkeyBrowserSupport.textContent = supportsPasskeyApi
                        ? '当前浏览器支持 WebAuthn / Passkey API，正在等待设置页读取后端 foundation 状态。'
                        : '当前浏览器未检测到完整 WebAuthn / Passkey API；页面仍会读取后端 foundation 状态，但当前设备无法直接登记新凭证。';
                }

                async function loadStatus() {
                    const response = await requestJson(statusEndpoint);
                    if (!response || response.status !== true) {
                        throw new Error((response && response.message) || '状态读取失败');
                    }

                    renderStatusPayload(response.data || {});
                }

                async function handleIdentityAction(provider) {
                    const elements = providerElements[provider];
                    if (!elements) {
                        return;
                    }

                    const matrix = latestIdentityMatrix();
                    const identity = matrix[provider] || null;
                    if (!identity) {
                        return;
                    }

                    if (identity.action_mode === 'connect' && identity.connect_route) {
                        window.location.assign(identity.connect_route);
                        return;
                    }

                    if (identity.action_mode !== 'disconnect' || !identity.disconnect_route || !identity.can_disconnect) {
                        if (identity.disconnect_block_reason) {
                            setPasskeyOperation(identity.disconnect_block_reason, 'error');
                        }
                        return;
                    }

                    if (!window.confirm(`确定要解绑 ${identity.label || providerLabels[provider] || provider} 吗？`)) {
                        return;
                    }

                    identityBusyProvider = provider;
                    renderStatusPayload({
                        identities: [],
                        identity_matrix: matrix,
                        legacy: latestLegacyPayload(),
                        passkeys: latestPasskeyPayload || {},
                    });

                    try {
                        const response = await requestJson(identity.disconnect_route, {
                            method: 'DELETE',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken(),
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                            body: JSON.stringify({}),
                        });

                        if (!response || response.status !== true) {
                            throw new Error((response && response.message) || `${identity.label || providerLabels[provider] || provider} 解绑失败。`);
                        }

                        if (window.toastr) {
                            window.toastr.success(`${identity.label || providerLabels[provider] || provider} 已解绑。`);
                        }
                        await loadStatus();
                    } catch (error) {
                        if (window.toastr) {
                            window.toastr.error((error && error.message) || `${identity.label || providerLabels[provider] || provider} 解绑失败。`);
                        }
                    } finally {
                        identityBusyProvider = '';
                        if (latestStatusPayload) {
                            renderStatusPayload(latestStatusPayload);
                        }
                    }
                }

                let latestStatusPayload = null;
                let latestIdentityMatrixPayload = {};
                let latestLegacyPayloadCache = {};

                function latestIdentityMatrix() {
                    return latestIdentityMatrixPayload || {};
                }

                function latestLegacyPayload() {
                    return latestLegacyPayloadCache || {};
                }

                async function registerPasskey() {
                    const passkeys = latestPasskeyPayload || {};
                    if (!passkeys.registration || !passkeys.registration.options_route) {
                        setPasskeyOperation('当前还没有可用的 Passkey 注册入口。', 'error');
                        return;
                    }

                    if (!supportsPasskeyCreate) {
                        setPasskeyOperation('当前浏览器不支持新 Passkey 登记。', 'error');
                        return;
                    }

                    const label = window.prompt('为新的 Passkey 输入设备名称（可留空自动命名）', '');
                    if (label === null) {
                        return;
                    }

                    passkeyBusy = true;
                    setPasskeyActionState('正在发起 Passkey 登记', true);
                    setPasskeyOperation('正在请求新的 Passkey registration challenge。');

                    try {
                        const optionsResponse = await requestJson(passkeys.registration.options_route, {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken(),
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                            body: JSON.stringify({}),
                        });

                        if (!optionsResponse || optionsResponse.status !== true) {
                            throw new Error((optionsResponse && optionsResponse.message) || 'Passkey 注册初始化失败。');
                        }

                        const credential = await navigator.credentials.create({
                            publicKey: prepareRegistrationOptions(optionsResponse.data.options || {}),
                        });

                        if (!credential) {
                            throw new Error('浏览器没有返回可用的 Passkey 注册结果。');
                        }

                        const verifyResponse = await requestJson(
                            (optionsResponse.data && optionsResponse.data.verify_route) || passkeys.registration.verify_route,
                            {
                                method: 'POST',
                                headers: {
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': csrfToken(),
                                    'X-Requested-With': 'XMLHttpRequest',
                                },
                                body: JSON.stringify(serializeAttestation(credential, label)),
                            }
                        );

                        if (!verifyResponse || verifyResponse.status !== true) {
                            throw new Error((verifyResponse && verifyResponse.message) || 'Passkey 注册失败。');
                        }

                        setPasskeyOperation('Passkey 已登记完成，正在刷新状态。', 'success');
                        await loadStatus();
                    } catch (error) {
                        if (error && error.name === 'NotAllowedError') {
                            setPasskeyOperation('你取消了 Passkey 登记，本次 challenge 已失效。', 'error');
                        } else {
                            setPasskeyOperation((error && error.message) || 'Passkey 登记失败。', 'error');
                        }
                    } finally {
                        passkeyBusy = false;
                        if (latestPasskeyPayload) {
                            renderPasskeyState(latestPasskeyPayload);
                        }
                    }
                }

                async function renameCredential(credential) {
                    const label = window.prompt('输入新的 Passkey 名称', credential.label || '');
                    if (label === null) {
                        return;
                    }

                    passkeyBusy = true;
                    renderPasskeyState(latestPasskeyPayload || {});

                    try {
                        const response = await requestJson(credential.update_route, {
                            method: 'PATCH',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken(),
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                            body: JSON.stringify({ label: label }),
                        });

                        if (!response || response.status !== true) {
                            throw new Error((response && response.message) || 'Passkey 重命名失败。');
                        }

                        setPasskeyOperation('Passkey 名称已更新，正在刷新状态。', 'success');
                        await loadStatus();
                    } catch (error) {
                        setPasskeyOperation((error && error.message) || 'Passkey 重命名失败。', 'error');
                    } finally {
                        passkeyBusy = false;
                        if (latestPasskeyPayload) {
                            renderPasskeyState(latestPasskeyPayload);
                        }
                    }
                }

                async function deleteCredential(credential) {
                    if (!window.confirm(`确定要移除 Passkey「${credential.label || credential.credential_id}」吗？`)) {
                        return;
                    }

                    passkeyBusy = true;
                    renderPasskeyState(latestPasskeyPayload || {});

                    try {
                        const response = await requestJson(credential.delete_route, {
                            method: 'DELETE',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken(),
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                            body: JSON.stringify({}),
                        });

                        if (!response || response.status !== true) {
                            throw new Error((response && response.message) || 'Passkey 移除失败。');
                        }

                        setPasskeyOperation('Passkey 已移除，正在刷新状态。', 'success');
                        await loadStatus();
                    } catch (error) {
                        setPasskeyOperation((error && error.message) || 'Passkey 移除失败。', 'error');
                    } finally {
                        passkeyBusy = false;
                        if (latestPasskeyPayload) {
                            renderPasskeyState(latestPasskeyPayload);
                        }
                    }
                }

                if (passkeyFoundationAction) {
                    passkeyFoundationAction.addEventListener('click', () => {
                        if (!passkeyBusy) {
                            registerPasskey();
                        }
                    });
                }

                Object.keys(providerElements).forEach((provider) => {
                    const action = providerElements[provider] && providerElements[provider].action;
                    if (!action) {
                        return;
                    }

                    action.addEventListener('click', () => {
                        handleIdentityAction(provider);
                    });
                });

                if (statusEndpoint) {
                    loadStatus()
                        .catch(() => {
                            renderStatusError();
                        });
                } else {
                    renderStatusError();
                }

                if (settingsIdentityNotice && settingsIdentityNotice.message && window.toastr) {
                    window.toastr[settingsIdentityNotice.type === 'success' ? 'success' : 'warning'](settingsIdentityNotice.message);
                }
            })();
        </script>
    @endpush

</x-app-layout>
