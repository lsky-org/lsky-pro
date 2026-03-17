<x-guest-layout>
    @php($oauthProviders = \App\Http\Controllers\Auth\SocialAuthController::providersStatus())

    @push('styles')
        <style>
            .auth-register-shell {
                min-height: 100vh;
                display: flex;
                align-items: stretch;
                background:
                    radial-gradient(circle at 82% 12%, rgba(250, 204, 21, .24) 0, rgba(250, 204, 21, 0) 22%),
                    linear-gradient(155deg, #f8fafc 0%, #fefce8 36%, #eef6ff 100%);
            }

            .auth-register-main {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1.5rem;
            }

            .auth-register-panel {
                width: 100%;
                max-width: 1120px;
                border: 1px solid rgba(148, 163, 184, .22);
                border-radius: 28px;
                background: rgba(255, 255, 255, .9);
                box-shadow: 0 28px 72px rgba(15, 23, 42, .13);
                backdrop-filter: blur(10px);
                padding: 1.5rem;
            }

            .auth-register-head {
                display: flex;
                align-items: flex-start;
                justify-content: space-between;
                gap: 16px;
                margin-bottom: 1rem;
            }

            .auth-register-title {
                font-size: 1.8rem;
                line-height: 1.15;
                font-weight: 800;
                color: #0f172a;
            }

            .auth-register-sub {
                margin-top: .45rem;
                max-width: 620px;
                color: #64748b;
                font-size: .95rem;
                line-height: 1.7;
            }

            .auth-register-chip-row {
                display: flex;
                flex-wrap: wrap;
                justify-content: flex-end;
                gap: 8px;
            }

            .auth-register-chip {
                min-height: 30px;
                padding: 0 12px;
                border-radius: 999px;
                border: 1px solid #dbe2ea;
                background: #f8fafc;
                color: #475569;
                font-size: 12px;
                display: inline-flex;
                align-items: center;
                gap: 6px;
            }

            .auth-register-chip.success {
                border-color: #86efac;
                background: #dcfce7;
                color: #166534;
            }

            .auth-register-chip.warn {
                border-color: #fde68a;
                background: #fffbeb;
                color: #92400e;
            }

            .auth-register-grid {
                display: grid;
                gap: 16px;
                grid-template-columns: minmax(0, 1fr) minmax(320px, .92fr);
            }

            .auth-register-card {
                border: 1px solid #e2e8f0;
                border-radius: 22px;
                background: rgba(255, 255, 255, .96);
                padding: 1.35rem;
            }

            .auth-register-card-head {
                display: flex;
                align-items: flex-start;
                justify-content: space-between;
                gap: 12px;
                margin-bottom: 1rem;
            }

            .auth-register-card-title {
                font-size: 1.05rem;
                font-weight: 700;
                color: #0f172a;
            }

            .auth-register-card-sub {
                margin-top: .3rem;
                color: #64748b;
                font-size: .88rem;
                line-height: 1.6;
            }

            .auth-register-field {
                display: grid;
                gap: 6px;
            }

            .auth-register-label {
                font-size: 12px;
                font-weight: 700;
                color: #334155;
            }

            .auth-register-input {
                width: 100%;
                min-height: 44px;
                border: 1px solid #cbd5e1;
                border-radius: 14px;
                padding: 0 .9rem;
                background: #fff;
                color: #0f172a;
            }

            .auth-register-input:focus {
                border-color: #f59e0b;
                outline: none;
                box-shadow: 0 0 0 3px rgba(245, 158, 11, .14);
            }

            .auth-register-submit {
                appearance: none;
                min-height: 46px;
                width: 100%;
                border: 0;
                border-radius: 14px;
                color: #fff;
                font-weight: 700;
                letter-spacing: .02em;
                background: linear-gradient(95deg, #d97706 0%, #b45309 100%);
                box-shadow: 0 12px 24px rgba(217, 119, 6, .24);
            }

            .auth-register-submit:hover {
                filter: brightness(1.04);
            }

            .auth-register-foot {
                margin-top: 1rem;
                font-size: 13px;
                color: #64748b;
            }

            .auth-register-foot a {
                color: #0f172a;
                text-decoration: underline;
            }

            .auth-register-method-grid {
                display: grid;
                gap: 12px;
            }

            .auth-register-method {
                border: 1px solid #dbe2ea;
                border-radius: 18px;
                background: #f8fafc;
                padding: 1rem;
                display: grid;
                gap: .75rem;
            }

            .auth-register-method-head {
                display: flex;
                align-items: flex-start;
                justify-content: space-between;
                gap: 12px;
            }

            .auth-register-method-icon {
                width: 42px;
                height: 42px;
                border-radius: 14px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                background: #fff;
                color: #0f172a;
                box-shadow: inset 0 0 0 1px rgba(148, 163, 184, .16);
                font-size: 16px;
            }

            .auth-register-method-name {
                font-size: 14px;
                font-weight: 700;
                color: #0f172a;
            }

            .auth-register-method-desc {
                color: #64748b;
                font-size: 12px;
                line-height: 1.65;
            }

            .auth-register-link,
            .auth-register-btn {
                min-height: 38px;
                border-radius: 12px;
                border: 1px solid #cbd5e1;
                background: #fff;
                color: #0f172a;
                font-size: 13px;
                font-weight: 700;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                width: 100%;
            }

            .auth-register-link:hover {
                background: #fff7ed;
                border-color: #fdba74;
                color: #9a3412;
            }

            .auth-register-btn[disabled] {
                cursor: not-allowed;
                color: #94a3b8;
                background: #f8fafc;
            }

            .auth-register-status {
                margin-top: .25rem;
                border: 1px dashed #cbd5e1;
                border-radius: 18px;
                background: #f8fafc;
                padding: 1rem;
                display: grid;
                gap: .55rem;
            }

            .auth-register-status-title {
                font-size: 13px;
                font-weight: 700;
                color: #0f172a;
            }

            .auth-register-status-text {
                color: #64748b;
                font-size: 12px;
                line-height: 1.65;
            }

            @media (max-width: 960px) {
                .auth-register-head {
                    flex-direction: column;
                }

                .auth-register-chip-row {
                    justify-content: flex-start;
                }

                .auth-register-grid {
                    grid-template-columns: 1fr;
                }
            }

            @media (max-width: 640px) {
                .auth-register-main {
                    padding: 1rem;
                }

                .auth-register-panel {
                    padding: 1rem;
                    border-radius: 22px;
                }
            }
        </style>
    @endpush

    <div class="auth-register-shell">
        <main class="auth-register-main">
            <section class="auth-register-panel">
                <div class="auth-register-head">
                    <div>
                        <div class="auth-register-title">创建账号</div>
                        <div class="auth-register-sub">继续保留邮箱注册，同时把 Google、GitHub 和 Passkey 的入口状态放进同一套矩阵。这样无论你是首次创建本地账号，还是直接用现有身份进入，都能清楚看到当前可用能力。</div>
                    </div>
                    <div class="auth-register-chip-row">
                        <span class="auth-register-chip success"><i class="fas fa-user-plus"></i>邮箱注册可用</span>
                        <span class="auth-register-chip {{ ($oauthProviders['google'] ?? false) ? 'success' : 'warn' }}"><i class="fab fa-google"></i>Google {{ ($oauthProviders['google'] ?? false) ? '已配置' : '未配置' }}</span>
                        <span class="auth-register-chip {{ ($oauthProviders['github'] ?? false) ? 'success' : 'warn' }}"><i class="fab fa-github"></i>GitHub {{ ($oauthProviders['github'] ?? false) ? '已配置' : '未配置' }}</span>
                        <span class="auth-register-chip warn" id="register-passkey-chip"><i class="fas fa-fingerprint"></i>Passkey 待检测</span>
                    </div>
                </div>

                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <div class="auth-register-grid">
                    <section class="auth-register-card">
                        <div class="auth-register-card-head">
                            <div>
                                <div class="auth-register-card-title">邮箱创建</div>
                                <div class="auth-register-card-sub">适合首次注册和需要保留本地密码的账号。字段结构和提交目标保持不变。</div>
                            </div>
                            <span class="auth-register-chip success"><i class="fas fa-envelope"></i>主入口</span>
                        </div>

                        <form method="POST" action="{{ route('register') }}" class="space-y-4">
                            @csrf

                            <label class="auth-register-field">
                                <span class="auth-register-label">用户名</span>
                                <input id="name" class="auth-register-input" type="text" name="name" value="{{ old('name') }}" required autofocus />
                            </label>

                            <label class="auth-register-field">
                                <span class="auth-register-label">邮箱地址</span>
                                <input id="email" class="auth-register-input" type="email" name="email" value="{{ old('email') }}" required />
                            </label>

                            <label class="auth-register-field">
                                <span class="auth-register-label">登录密码</span>
                                <input id="password" class="auth-register-input" type="password" name="password" required autocomplete="new-password" />
                            </label>

                            <label class="auth-register-field">
                                <span class="auth-register-label">确认密码</span>
                                <input id="password_confirmation" class="auth-register-input" type="password" name="password_confirmation" required />
                            </label>

                            <button type="submit" class="auth-register-submit">创建账号</button>
                        </form>

                        <div class="auth-register-foot">
                            已有账号？<a href="{{ route('login') }}">返回登录</a>
                        </div>
                    </section>

                    <section class="auth-register-card">
                        <div class="auth-register-card-head">
                            <div>
                                <div class="auth-register-card-title">访问矩阵</div>
                                <div class="auth-register-card-sub">如果你不是来创建本地账号，也可以直接使用现有身份继续。Passkey 已支持已登记凭证登录；新凭证登记仍在登录后的账户安全页完成。</div>
                            </div>
                            <span class="auth-register-chip warn"><i class="fas fa-layer-group"></i>状态视图</span>
                        </div>

                        <div class="auth-register-method-grid">
                            <article class="auth-register-method">
                                <div class="auth-register-method-head">
                                    <div class="auth-register-method-icon"><i class="fab fa-google"></i></div>
                                    <span class="auth-register-chip {{ ($oauthProviders['google'] ?? false) ? 'success' : 'warn' }}">{{ ($oauthProviders['google'] ?? false) ? '已配置' : '未配置' }}</span>
                                </div>
                                <div class="auth-register-method-name">Google</div>
                                <div class="auth-register-method-desc">适合已拥有 Google 身份的用户直接继续访问，无需额外创建本地密码。</div>
                                @if($oauthProviders['google'] ?? false)
                                    <a href="{{ route('oauth.redirect', ['provider' => 'google']) }}" class="auth-register-link"><i class="fab fa-google"></i>使用 Google</a>
                                @else
                                    <button type="button" class="auth-register-btn" disabled><i class="fab fa-google"></i>等待站点配置</button>
                                @endif
                            </article>

                            <article class="auth-register-method">
                                <div class="auth-register-method-head">
                                    <div class="auth-register-method-icon"><i class="fab fa-github"></i></div>
                                    <span class="auth-register-chip {{ ($oauthProviders['github'] ?? false) ? 'success' : 'warn' }}">{{ ($oauthProviders['github'] ?? false) ? '已配置' : '未配置' }}</span>
                                </div>
                                <div class="auth-register-method-name">GitHub</div>
                                <div class="auth-register-method-desc">适合研发用户直接沿用 GitHub 身份。当前仍由服务端 OAuth 配置决定是否可用。</div>
                                @if($oauthProviders['github'] ?? false)
                                    <a href="{{ route('oauth.redirect', ['provider' => 'github']) }}" class="auth-register-link"><i class="fab fa-github"></i>使用 GitHub</a>
                                @else
                                    <button type="button" class="auth-register-btn" disabled><i class="fab fa-github"></i>等待站点配置</button>
                                @endif
                            </article>

                            <article class="auth-register-method">
                                <div class="auth-register-method-head">
                                    <div class="auth-register-method-icon"><i class="fas fa-fingerprint"></i></div>
                                    <span class="auth-register-chip warn" id="register-passkey-card-chip">待检测</span>
                                </div>
                                <div class="auth-register-method-name">Passkey</div>
                                <div class="auth-register-method-desc">如果你已经在账户安全页登记过 Passkey，可以直接在这里发起 challenge 并登录。新凭证登记仍在登录后完成。</div>
                                <button type="button" class="auth-register-btn" disabled id="register-passkey-entry"><i class="fas fa-fingerprint"></i>检测设备能力中</button>
                            </article>
                        </div>

                        <div class="auth-register-status">
                            <div class="auth-register-status-title">Passkey 状态</div>
                            <div class="auth-register-status-text" id="register-passkey-copy">正在检测当前浏览器是否支持 Passkey 登录。如果你已有凭证，本页会直接使用 challenge 完成认证。</div>
                        </div>
                    </section>
                </div>
            </section>
        </main>
    </div>

    @push('scripts')
        <script>
            (() => {
                const optionsEndpoint = @json(route('passkeys.login.options'));
                const fallbackVerifyEndpoint = @json(route('passkeys.login.verify'));
                const isSupported = Boolean(
                    window.PublicKeyCredential
                    && navigator.credentials
                    && typeof navigator.credentials.get === 'function'
                    && typeof navigator.credentials.create === 'function'
                );
                const topChip = document.getElementById('register-passkey-chip');
                const cardChip = document.getElementById('register-passkey-card-chip');
                const copy = document.getElementById('register-passkey-copy');
                const entryButton = document.getElementById('register-passkey-entry');
                let inFlight = false;

                const setChip = (element, tone, text, withIcon = false) => {
                    if (!element) {
                        return;
                    }

                    element.className = `auth-register-chip ${tone}`;
                    element[withIcon ? 'innerHTML' : 'textContent'] = withIcon
                        ? `<i class="fas fa-fingerprint"></i>Passkey ${text}`
                        : text;
                };

                const setCopy = (message) => {
                    if (copy) {
                        copy.textContent = message;
                    }
                };

                const setButton = (message, disabled = false) => {
                    if (!entryButton) {
                        return;
                    }

                    entryButton.disabled = disabled;
                    entryButton.innerHTML = `<i class="fas fa-fingerprint"></i>${message}`;
                };

                const csrfToken = () => {
                    const token = document.querySelector('meta[name="csrf-token"]');
                    return token ? token.getAttribute('content') || '' : '';
                };

                const toArrayBuffer = (value) => {
                    const normalized = String(value || '').replace(/-/g, '+').replace(/_/g, '/');
                    const padded = normalized + '='.repeat((4 - normalized.length % 4) % 4);
                    const binary = window.atob(padded);
                    const bytes = new Uint8Array(binary.length);
                    for (let index = 0; index < binary.length; index += 1) {
                        bytes[index] = binary.charCodeAt(index);
                    }

                    return bytes.buffer;
                };

                const toBase64Url = (value) => {
                    const bytes = value instanceof ArrayBuffer ? new Uint8Array(value) : new Uint8Array(value.buffer || value);
                    let binary = '';
                    bytes.forEach(byte => {
                        binary += String.fromCharCode(byte);
                    });

                    return window.btoa(binary).replace(/\+/g, '-').replace(/\//g, '_').replace(/=+$/g, '');
                };

                const prepareRequestOptions = (options) => {
                    const publicKey = Object.assign({}, options || {});
                    publicKey.challenge = toArrayBuffer(publicKey.challenge);
                    publicKey.allowCredentials = Array.isArray(publicKey.allowCredentials)
                        ? publicKey.allowCredentials.map(item => Object.assign({}, item, {
                            id: toArrayBuffer(item.id),
                        }))
                        : [];

                    return publicKey;
                };

                const serializeAssertion = (credential) => {
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
                };

                const requestJson = async (url, payload = {}) => {
                    const response = await fetch(url, {
                        method: 'POST',
                        credentials: 'same-origin',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken(),
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        body: JSON.stringify(payload),
                    });

                    return response.json();
                };

                const setReadyState = () => {
                    setChip(topChip, isSupported ? 'success' : 'warn', isSupported ? '可登录' : '设备不支持', true);
                    setChip(cardChip, isSupported ? 'success' : 'warn', isSupported ? '可发起' : '不可用');

                    if (!isSupported) {
                        setButton('当前设备不支持', true);
                        setCopy('当前浏览器或设备不具备 Passkey 登录能力。若需要继续访问，请改用本地注册、Google 或 GitHub。');
                        return;
                    }

                    setButton('使用 Passkey 登录', false);
                    setCopy('当前浏览器支持 Passkey 登录。如果你已有登记凭证，可以直接完成 challenge 并进入工作台。');
                };

                const handleLogin = async () => {
                    if (!isSupported || inFlight) {
                        return;
                    }

                    inFlight = true;
                    setButton('正在发起 challenge', true);
                    setCopy('正在向后端请求 Passkey challenge。');

                    try {
                        const optionsPayload = await requestJson(optionsEndpoint);
                        if (!optionsPayload || optionsPayload.status !== true) {
                            throw new Error((optionsPayload && optionsPayload.message) || 'Passkey challenge 请求失败。');
                        }

                        const credential = await navigator.credentials.get({
                            publicKey: prepareRequestOptions(optionsPayload.data.options || {}),
                        });

                        if (!credential) {
                            throw new Error('浏览器没有返回可用的 Passkey 断言。');
                        }

                        const verifyPayload = await requestJson(
                            (optionsPayload.data && optionsPayload.data.verify_route) || fallbackVerifyEndpoint,
                            serializeAssertion(credential)
                        );

                        if (!verifyPayload || verifyPayload.status !== true) {
                            throw new Error((verifyPayload && verifyPayload.message) || 'Passkey 登录失败。');
                        }

                        setChip(topChip, 'success', '验证成功', true);
                        setChip(cardChip, 'success', '已通过');
                        setCopy('Passkey 验证成功，正在跳转到工作台。');
                        window.location.assign((verifyPayload.data && verifyPayload.data.redirect_to) || '/dashboard');
                    } catch (error) {
                        if (error && error.name === 'NotAllowedError') {
                            setCopy('你取消了 Passkey 验证，本次 challenge 已失效。需要时可以重新发起。');
                        } else {
                            setCopy((error && error.message) || 'Passkey 登录失败。');
                        }
                        setChip(topChip, 'warn', '等待重试', true);
                        setChip(cardChip, 'warn', '验证失败');
                    } finally {
                        inFlight = false;
                        if (isSupported) {
                            setButton('使用 Passkey 登录', false);
                        }
                    }
                };

                if (entryButton) {
                    entryButton.addEventListener('click', handleLogin);
                }

                setReadyState();
            })();
        </script>
    @endpush
</x-guest-layout>
