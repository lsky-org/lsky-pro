<x-guest-layout>
    @php($oauthProviders = \App\Http\Controllers\Auth\SocialAuthController::providersStatus())

    @push('styles')
        <style>
            .auth-matrix-shell {
                min-height: 100vh;
                display: flex;
                align-items: stretch;
                background:
                    radial-gradient(circle at 18% 18%, rgba(125, 211, 252, .45) 0, rgba(125, 211, 252, 0) 28%),
                    linear-gradient(145deg, #f8fafc 0%, #eef6ff 42%, #f4f7fb 100%);
            }

            /* ===== Left Visual Panel ===== */
            .auth-matrix-visual {
                position: relative;
                width: 100%;
                max-width: 52%;
                display: none;
                overflow: hidden;
                background: linear-gradient(150deg, #082f49 0%, #0f172a 45%, #164e63 100%);
            }

            .auth-visual-inner {
                position: relative;
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 3rem;
                z-index: 2;
            }

            /* Animated gradient blobs */
            .auth-matrix-visual::before,
            .auth-matrix-visual::after {
                content: "";
                position: absolute;
                border-radius: 9999px;
                filter: blur(80px);
                opacity: .5;
                z-index: 0;
            }
            .auth-matrix-visual::before {
                width: 500px; height: 500px;
                top: -100px; left: -100px;
                background: radial-gradient(circle, rgba(34, 211, 238, .6) 0%, transparent 70%);
                animation: blobA 8s ease-in-out infinite;
            }
            .auth-matrix-visual::after {
                width: 400px; height: 400px;
                right: -80px; bottom: -60px;
                background: radial-gradient(circle, rgba(139, 92, 246, .5) 0%, transparent 70%);
                animation: blobB 10s ease-in-out infinite;
            }

            /* Grid background */
            .auth-grid-bg {
                position: absolute;
                inset: 0;
                background-image:
                    linear-gradient(rgba(255,255,255,.06) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,.06) 1px, transparent 1px);
                background-size: 48px 48px;
                z-index: 0;
            }

            /* Floating gallery mockup */
            .gallery-showcase {
                position: relative;
                width: 360px;
                height: 320px;
                perspective: 800px;
            }

            .gallery-card {
                position: absolute;
                border-radius: 16px;
                overflow: hidden;
                box-shadow: 0 20px 60px rgba(0,0,0,.35);
                transition: transform .6s cubic-bezier(.23,1,.32,1);
            }

            .gallery-card-inner {
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 2.5rem;
            }

            .gc-1 {
                width: 200px; height: 160px;
                top: 20px; left: 0;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                transform: rotate(-6deg);
                animation: cardFloat1 6s ease-in-out infinite;
                z-index: 3;
            }
            .gc-2 {
                width: 180px; height: 140px;
                top: 0; right: 0;
                background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
                transform: rotate(4deg);
                animation: cardFloat2 7s ease-in-out infinite;
                z-index: 2;
            }
            .gc-3 {
                width: 220px; height: 150px;
                bottom: 0; left: 50px;
                background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
                transform: rotate(2deg);
                animation: cardFloat3 8s ease-in-out infinite;
                z-index: 1;
            }

            /* Image icon inside cards */
            .card-icon {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 8px;
                color: rgba(255,255,255,.9);
            }
            .card-icon i { font-size: 2rem; }
            .card-icon span {
                font-size: .7rem;
                font-weight: 600;
                letter-spacing: .08em;
                text-transform: uppercase;
                opacity: .75;
            }

            /* Fake image bars for texture */
            .card-bars {
                display: flex;
                flex-direction: column;
                gap: 6px;
                padding: 16px;
                width: 100%;
            }
            .card-bar {
                height: 8px;
                border-radius: 4px;
                background: rgba(255,255,255,.25);
            }
            .card-bar:nth-child(1) { width: 80%; }
            .card-bar:nth-child(2) { width: 60%; }
            .card-bar:nth-child(3) { width: 40%; }

            /* Stats row */
            .visual-stats {
                display: flex;
                gap: 2.5rem;
                margin-top: 2.5rem;
                z-index: 2;
            }
            .stat-item {
                text-align: center;
            }
            .stat-num {
                font-size: 1.8rem;
                font-weight: 800;
                color: #f0f9ff;
                line-height: 1;
            }
            .stat-label {
                margin-top: .35rem;
                font-size: .75rem;
                color: rgba(186,230,253,.6);
                letter-spacing: .04em;
            }

            /* Brand area */
            .visual-brand {
                margin-top: 2.5rem;
                text-align: center;
                z-index: 2;
            }
            .visual-brand h2 {
                font-size: 1.5rem;
                font-weight: 800;
                color: #f0f9ff;
                letter-spacing: -.01em;
            }
            .visual-brand p {
                margin-top: .4rem;
                font-size: .85rem;
                color: rgba(186,230,253,.55);
                line-height: 1.6;
            }

            /* Upload indicator pill */
            .upload-pill {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                margin-top: 1.5rem;
                padding: 8px 18px;
                border-radius: 999px;
                background: rgba(255,255,255,.08);
                border: 1px solid rgba(255,255,255,.12);
                color: rgba(186,230,253,.8);
                font-size: .78rem;
                font-weight: 600;
                z-index: 2;
                animation: pillPulse 3s ease-in-out infinite;
            }
            .upload-pill i { color: #67e8f9; }
            .upload-dot {
                width: 6px; height: 6px;
                border-radius: 50%;
                background: #34d399;
                animation: dotBlink 2s ease-in-out infinite;
            }

            /* ===== Right Panel (login form) ===== */
            .auth-matrix-main {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1.5rem;
            }

            /* ===== Flip Card Container ===== */
            .auth-flip-container {
                width: 100%;
                max-width: 460px;
                perspective: 1200px;
            }
            .auth-flip-inner {
                position: relative;
                width: 100%;
                transition: transform 0.6s cubic-bezier(.4,.2,.2,1);
                transform-style: preserve-3d;
            }
            .auth-flip-inner.flipped {
                transform: rotateY(180deg);
            }
            .auth-flip-front,
            .auth-flip-back {
                width: 100%;
                backface-visibility: hidden;
                -webkit-backface-visibility: hidden;
            }
            .auth-flip-back {
                position: absolute;
                top: 0;
                left: 0;
                transform: rotateY(180deg);
            }

            .auth-matrix-panel {
                width: 100%;
                border: 1px solid rgba(148, 163, 184, .24);
                border-radius: 28px;
                background: rgba(255, 255, 255, .88);
                box-shadow: 0 28px 72px rgba(15, 23, 42, .14);
                backdrop-filter: blur(10px);
                padding: 2rem;
            }

            .auth-matrix-panel-head { margin-bottom: 1.5rem; }

            .auth-matrix-title {
                font-size: 1.6rem;
                line-height: 1.15;
                font-weight: 800;
                color: #0f172a;
            }

            .auth-matrix-sub {
                margin-top: .45rem;
                color: #64748b;
                font-size: .88rem;
                line-height: 1.7;
            }

            .auth-field { display: grid; gap: 6px; }

            .auth-field-label {
                font-size: 12px;
                font-weight: 700;
                color: #334155;
            }

            .auth-input {
                width: 100%;
                min-height: 44px;
                border: 1px solid #cbd5e1;
                border-radius: 14px;
                padding: 0 .9rem;
                background: #fff;
                color: #0f172a;
            }

            .auth-input:focus {
                border-color: #0ea5e9;
                outline: none;
                box-shadow: 0 0 0 3px rgba(14, 165, 233, .16);
            }

            /* Register form accent color override */
            .auth-flip-back .auth-input:focus {
                border-color: #f59e0b;
                box-shadow: 0 0 0 3px rgba(245, 158, 11, .14);
            }

            .auth-inline-row {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 12px;
                font-size: 13px;
                color: #475569;
            }

            .auth-check {
                display: inline-flex;
                align-items: center;
                gap: 8px;
            }

            .auth-submit {
                appearance: none;
                min-height: 46px;
                width: 100%;
                border: 0;
                border-radius: 14px;
                color: #fff;
                font-weight: 700;
                letter-spacing: .02em;
                cursor: pointer;
                background: linear-gradient(95deg, #0284c7 0%, #0369a1 100%);
                box-shadow: 0 12px 24px rgba(2, 132, 199, .28);
            }

            .auth-submit:hover { filter: brightness(1.06); }

            /* Register submit button with amber/orange accent */
            .auth-submit-register {
                appearance: none;
                min-height: 46px;
                width: 100%;
                border: 0;
                border-radius: 14px;
                color: #fff;
                font-weight: 700;
                letter-spacing: .02em;
                cursor: pointer;
                background: linear-gradient(95deg, #d97706 0%, #b45309 100%);
                box-shadow: 0 12px 24px rgba(217, 119, 6, .24);
            }

            .auth-submit-register:hover { filter: brightness(1.04); }

            .auth-divider {
                display: flex;
                align-items: center;
                gap: 12px;
                margin: 1.25rem 0;
                color: #94a3b8;
                font-size: 12px;
            }
            .auth-divider::before,
            .auth-divider::after {
                content: "";
                flex: 1;
                height: 1px;
                background: #e2e8f0;
            }

            .auth-alt-buttons { display: grid; gap: 10px; }

            .auth-alt-btn {
                min-height: 44px;
                width: 100%;
                border-radius: 14px;
                border: 1px solid #cbd5e1;
                background: #fff;
                color: #0f172a;
                font-size: 14px;
                font-weight: 600;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                cursor: pointer;
                transition: background .15s, border-color .15s;
                text-decoration: none;
            }
            .auth-alt-btn:hover {
                background: #f1f5f9;
                border-color: #94a3b8;
            }
            .auth-alt-btn[disabled] {
                cursor: not-allowed;
                color: #94a3b8;
                background: #f8fafc;
            }
            .auth-alt-btn i { font-size: 16px; }

            .auth-links {
                margin-top: 1.25rem;
                font-size: 13px;
                color: #64748b;
                text-align: center;
            }
            .auth-links a {
                color: #0f172a;
                text-decoration: underline;
                cursor: pointer;
            }

            /* ===== Responsive ===== */
            @media (min-width: 1024px) {
                .auth-matrix-visual {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }
            }

            @media (max-width: 640px) {
                .auth-matrix-main { padding: 1rem; }
                .auth-matrix-panel {
                    padding: 1.25rem;
                    border-radius: 22px;
                }
            }

            /* ===== Animations ===== */
            @keyframes blobA {
                0%, 100% { transform: translate(0, 0) scale(1); }
                50% { transform: translate(40px, 30px) scale(1.08); }
            }
            @keyframes blobB {
                0%, 100% { transform: translate(0, 0) scale(1); }
                50% { transform: translate(-30px, -25px) scale(1.05); }
            }
            @keyframes cardFloat1 {
                0%, 100% { transform: rotate(-6deg) translateY(0); }
                50% { transform: rotate(-4deg) translateY(-12px); }
            }
            @keyframes cardFloat2 {
                0%, 100% { transform: rotate(4deg) translateY(0); }
                50% { transform: rotate(6deg) translateY(-10px); }
            }
            @keyframes cardFloat3 {
                0%, 100% { transform: rotate(2deg) translateY(0); }
                50% { transform: rotate(0deg) translateY(-14px); }
            }
            @keyframes pillPulse {
                0%, 100% { opacity: 1; }
                50% { opacity: .7; }
            }
            @keyframes dotBlink {
                0%, 100% { opacity: 1; }
                50% { opacity: .3; }
            }
        </style>
    @endpush

    <div class="auth-matrix-shell">
        {{-- ===== Left Visual Panel ===== --}}
        <aside class="auth-matrix-visual">
            <div class="auth-grid-bg"></div>

            <div class="auth-visual-inner">
                {{-- Floating gallery cards --}}
                <div class="gallery-showcase">
                    <div class="gallery-card gc-1">
                        <div class="gallery-card-inner">
                            <div class="card-icon">
                                <i class="fas fa-image"></i>
                                <span>PNG</span>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-card gc-2">
                        <div class="gallery-card-inner">
                            <div class="card-icon">
                                <i class="fas fa-camera"></i>
                                <span>JPEG</span>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-card gc-3">
                        <div class="gallery-card-inner">
                            <div class="card-icon">
                                <i class="fas fa-film"></i>
                                <span>WebP</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Brand --}}
                <div class="visual-brand">
                    <h2>{{ \App\Utils::config(\App\Enums\ConfigKey::AppName) }}</h2>
                    <p>Your photo album on the cloud</p>
                </div>

                {{-- Upload indicator --}}
                <div class="upload-pill">
                    <div class="upload-dot"></div>
                    <i class="fas fa-cloud-upload-alt"></i>
                    <span>Drag & Drop Upload Ready</span>
                </div>

                {{-- Stats --}}
                <div class="visual-stats">
                    <div class="stat-item">
                        <div class="stat-num"><i class="fas fa-bolt" style="font-size:.9em;color:#facc15"></i></div>
                        <div class="stat-label">CDN Accelerated</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num"><i class="fas fa-shield-alt" style="font-size:.9em;color:#34d399"></i></div>
                        <div class="stat-label">Secure Storage</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num"><i class="fas fa-link" style="font-size:.9em;color:#60a5fa"></i></div>
                        <div class="stat-label">Instant Link</div>
                    </div>
                </div>
            </div>
        </aside>

        {{-- ===== Right Panel with Flip Card ===== --}}
        <main class="auth-matrix-main">
            <div class="auth-flip-container">
                <div class="auth-flip-inner" id="authFlipInner">

                    {{-- ====== FRONT FACE: Login ====== --}}
                    <div class="auth-flip-front" id="authFlipFront">
                        <section class="auth-matrix-panel">
                            <div class="auth-matrix-panel-head">
                                <div class="auth-matrix-title">{{ __('Login') }}</div>
                                <div class="auth-matrix-sub">{{ __('Sign in to manage your images') }}</div>
                            </div>

                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                                @csrf

                                <label class="auth-field">
                                    <span class="auth-field-label">{{ __('Email') }}</span>
                                    <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autofocus />
                                </label>

                                <label class="auth-field">
                                    <span class="auth-field-label">{{ __('Password') }}</span>
                                    <input id="password" class="auth-input" type="password" name="password" required autocomplete="current-password" />
                                </label>

                                <div class="auth-inline-row">
                                    <label for="remember_me" class="auth-check">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-sky-600 shadow-sm focus:border-sky-300 focus:ring focus:ring-sky-200 focus:ring-opacity-50" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>{{ __('Remember me') }}</span>
                                    </label>
                                    @if (Route::has('password.request'))
                                        <a class="underline hover:text-slate-900" href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a>
                                    @endif
                                </div>

                                <button type="submit" class="auth-submit">{{ __('Sign in') }}</button>
                            </form>

                            @if(($oauthProviders['google'] ?? false) || ($oauthProviders['github'] ?? false) || true)
                                <div class="auth-divider">{{ __('or continue with') }}</div>

                                <div class="auth-alt-buttons">
                                    @if($oauthProviders['google'] ?? false)
                                        <a href="{{ route('oauth.redirect', ['provider' => 'google']) }}" class="auth-alt-btn">
                                            <i class="fab fa-google"></i>Google
                                        </a>
                                    @endif

                                    @if($oauthProviders['github'] ?? false)
                                        <a href="{{ route('oauth.redirect', ['provider' => 'github']) }}" class="auth-alt-btn">
                                            <i class="fab fa-github"></i>GitHub
                                        </a>
                                    @endif

                                    <button type="button" class="auth-alt-btn" disabled id="passkey-entry">
                                        <i class="fas fa-fingerprint"></i><span id="passkey-entry-label">Passkey</span>
                                    </button>
                                </div>
                            @endif

                            <div class="auth-links">
                                @if(\App\Utils::config(\App\Enums\ConfigKey::IsEnableRegistration))
                                    {{ __("Don't have an account?") }} <a href="javascript:void(0)" onclick="flipToRegister()">{{ __('Create one') }}</a>
                                @endif
                            </div>
                        </section>
                    </div>

                    {{-- ====== BACK FACE: Register ====== --}}
                    @if(\App\Utils::config(\App\Enums\ConfigKey::IsEnableRegistration))
                    <div class="auth-flip-back" id="authFlipBack">
                        <section class="auth-matrix-panel">
                            <div class="auth-matrix-panel-head">
                                <div class="auth-matrix-title" style="color: #92400e;">{{ __('Create Account') }}</div>
                                <div class="auth-matrix-sub">{{ __('Register a new account to start uploading') }}</div>
                            </div>

                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                                @csrf

                                <label class="auth-field">
                                    <span class="auth-field-label">{{ __('Username') }}</span>
                                    <input class="auth-input" type="text" name="name" value="{{ old('name') }}" required placeholder="{{ __('用户名') }}" />
                                </label>

                                <label class="auth-field">
                                    <span class="auth-field-label">{{ __('Email') }}</span>
                                    <input class="auth-input" type="email" name="email" value="{{ old('email') }}" required placeholder="{{ __('邮箱地址') }}" />
                                </label>

                                <label class="auth-field">
                                    <span class="auth-field-label">{{ __('Password') }}</span>
                                    <input class="auth-input" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('登录密码') }}" />
                                </label>

                                <label class="auth-field">
                                    <span class="auth-field-label">{{ __('Confirm Password') }}</span>
                                    <input class="auth-input" type="password" name="password_confirmation" required placeholder="{{ __('确认密码') }}" />
                                </label>

                                <button type="submit" class="auth-submit-register">{{ __('Create Account') }}</button>
                            </form>

                            <div class="auth-links">
                                {{ __('Already have an account?') }} <a href="javascript:void(0)" onclick="flipToLogin()">{{ __('返回登录') }}</a>
                            </div>
                        </section>
                    </div>
                    @endif

                </div>
            </div>
        </main>
    </div>

    @push('scripts')
        <script>
            // ===== Flip Card Logic =====
            (function() {
                var flipInner = document.getElementById('authFlipInner');
                var flipFront = document.getElementById('authFlipFront');
                var flipBack = document.getElementById('authFlipBack');
                var isFlipped = false;

                function syncHeight() {
                    if (!flipInner || !flipFront || !flipBack) return;
                    if (isFlipped) {
                        flipInner.style.height = flipBack.scrollHeight + 'px';
                    } else {
                        flipInner.style.height = flipFront.scrollHeight + 'px';
                    }
                }

                window.flipToRegister = function() {
                    if (!flipInner || !flipBack) return;
                    isFlipped = true;
                    flipInner.classList.add('flipped');
                    syncHeight();
                };

                window.flipToLogin = function() {
                    if (!flipInner) return;
                    isFlipped = false;
                    flipInner.classList.remove('flipped');
                    syncHeight();
                };

                // Set initial height
                syncHeight();

                // Re-sync on resize
                window.addEventListener('resize', syncHeight);

                // If there are validation errors and the URL has a register hash, flip to register
                @if($errors->any() && old('password_confirmation') !== null)
                    window.flipToRegister();
                @endif
            })();
        </script>

        <script>
            (() => {
                const optionsEndpoint = @json(route('passkeys.login.options'));
                const fallbackVerifyEndpoint = @json(route('passkeys.login.verify'));
                const isSupported = Boolean(
                    window.PublicKeyCredential
                    && navigator.credentials
                    && typeof navigator.credentials.get === 'function'
                );
                const entryButton = document.getElementById('passkey-entry');
                const entryLabel = document.getElementById('passkey-entry-label');
                let inFlight = false;

                const setButton = (message, disabled = false) => {
                    if (!entryButton) return;
                    entryButton.disabled = disabled;
                    if (entryLabel) entryLabel.textContent = message;
                };

                const csrfToken = () => {
                    const t = document.querySelector('meta[name="csrf-token"]');
                    return t ? t.getAttribute('content') || '' : '';
                };

                const toArrayBuffer = (v) => {
                    const n = String(v || '').replace(/-/g, '+').replace(/_/g, '/');
                    const p = n + '='.repeat((4 - n.length % 4) % 4);
                    const b = window.atob(p);
                    const u = new Uint8Array(b.length);
                    for (let i = 0; i < b.length; i++) u[i] = b.charCodeAt(i);
                    return u.buffer;
                };

                const toBase64Url = (v) => {
                    const bytes = v instanceof ArrayBuffer ? new Uint8Array(v) : new Uint8Array(v.buffer || v);
                    let binary = '';
                    bytes.forEach(b => binary += String.fromCharCode(b));
                    return window.btoa(binary).replace(/\+/g, '-').replace(/\//g, '_').replace(/=+$/g, '');
                };

                const prepareRequestOptions = (o) => {
                    const pk = Object.assign({}, o || {});
                    pk.challenge = toArrayBuffer(pk.challenge);
                    pk.allowCredentials = Array.isArray(pk.allowCredentials)
                        ? pk.allowCredentials.map(i => Object.assign({}, i, { id: toArrayBuffer(i.id) }))
                        : [];
                    return pk;
                };

                const serializeAssertion = (c) => ({
                    id: c.id,
                    rawId: toBase64Url(c.rawId),
                    type: c.type,
                    response: {
                        clientDataJSON: toBase64Url(c.response.clientDataJSON),
                        authenticatorData: toBase64Url(c.response.authenticatorData),
                        signature: toBase64Url(c.response.signature),
                        userHandle: c.response.userHandle ? toBase64Url(c.response.userHandle) : '',
                    },
                });

                const requestJson = async (url, payload = {}) => {
                    const r = await fetch(url, {
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
                    return r.json();
                };

                const setReadyState = () => {
                    if (!isSupported) { setButton('Passkey unavailable', true); return; }
                    setButton('Passkey', false);
                };

                const handleLogin = async () => {
                    if (!isSupported || inFlight) return;
                    inFlight = true;
                    setButton('Verifying...', true);
                    try {
                        const opts = await requestJson(optionsEndpoint);
                        if (!opts || opts.status !== true) throw new Error((opts && opts.message) || 'Challenge failed.');
                        const cred = await navigator.credentials.get({ publicKey: prepareRequestOptions(opts.data.options || {}) });
                        if (!cred) throw new Error('No credential returned.');
                        setButton('Authenticating...', true);
                        const verify = await requestJson((opts.data && opts.data.verify_route) || fallbackVerifyEndpoint, serializeAssertion(cred));
                        if (!verify || verify.status !== true) throw new Error((verify && verify.message) || 'Login failed.');
                        setButton('Redirecting...', true);
                        window.location.assign((verify.data && verify.data.redirect_to) || '/dashboard');
                    } catch (e) {
                        setButton(e && e.name === 'NotAllowedError' ? 'Passkey' : 'Retry Passkey', false);
                    } finally { inFlight = false; }
                };

                if (entryButton) entryButton.addEventListener('click', handleLogin);
                setReadyState();
            })();
        </script>
    @endpush
</x-guest-layout>
