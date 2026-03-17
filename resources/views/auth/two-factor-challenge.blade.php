<x-guest-layout>
    @push('styles')
        <style>
            .tfa-shell {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1.5rem;
                background:
                    radial-gradient(circle at 18% 18%, rgba(125,211,252,.35) 0, transparent 28%),
                    linear-gradient(145deg, #f8fafc 0%, #eef6ff 42%, #f4f7fb 100%);
            }
            .tfa-card {
                width: 100%;
                max-width: 420px;
                border: 1px solid rgba(148,163,184,.24);
                border-radius: 24px;
                background: rgba(255,255,255,.92);
                box-shadow: 0 24px 64px rgba(15,23,42,.12);
                backdrop-filter: blur(10px);
                padding: 2.5rem 2rem;
            }
            .tfa-icon {
                width: 56px; height: 56px;
                border-radius: 16px;
                background: linear-gradient(135deg, #0284c7, #0369a1);
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                font-size: 1.4rem;
                margin: 0 auto 1.25rem;
            }
            .tfa-title {
                text-align: center;
                font-size: 1.4rem;
                font-weight: 800;
                color: #0f172a;
            }
            .tfa-sub {
                text-align: center;
                margin-top: .4rem;
                color: #64748b;
                font-size: .85rem;
                line-height: 1.6;
            }
            .tfa-input {
                width: 100%;
                min-height: 48px;
                border: 1.5px solid #cbd5e1;
                border-radius: 14px;
                padding: 0 1rem;
                font-size: 1.3rem;
                font-weight: 700;
                letter-spacing: .35em;
                text-align: center;
                color: #0f172a;
                background: #fff;
            }
            .tfa-input:focus {
                border-color: #0ea5e9;
                outline: none;
                box-shadow: 0 0 0 3px rgba(14,165,233,.16);
            }
            .tfa-submit {
                appearance: none;
                width: 100%;
                min-height: 46px;
                border: 0;
                border-radius: 14px;
                color: #fff;
                font-weight: 700;
                cursor: pointer;
                background: linear-gradient(95deg, #0284c7, #0369a1);
                box-shadow: 0 10px 20px rgba(2,132,199,.25);
            }
            .tfa-submit:hover { filter: brightness(1.05); }
            .tfa-toggle {
                text-align: center;
                margin-top: 1rem;
                font-size: .82rem;
            }
            .tfa-toggle a {
                color: #0284c7;
                cursor: pointer;
                text-decoration: underline;
            }
            .tfa-error {
                background: #fef2f2;
                border: 1px solid #fecaca;
                color: #dc2626;
                border-radius: 10px;
                padding: .6rem 1rem;
                font-size: .82rem;
                margin-bottom: 1rem;
            }
            .tfa-field { display: grid; gap: 6px; }
            .tfa-label {
                font-size: 12px;
                font-weight: 700;
                color: #334155;
            }
            .hidden { display: none; }
        </style>
    @endpush

    <div class="tfa-shell">
        <div class="tfa-card">
            <div class="tfa-icon"><i class="fas fa-shield-alt"></i></div>
            <div class="tfa-title">{{ __('Two-Factor Verification') }}</div>
            <div class="tfa-sub">{{ __('Open your authenticator app and enter the 6-digit code') }}</div>

            @if($errors->any())
                <div class="tfa-error" style="margin-top:1rem">
                    {{ $errors->first() }}
                </div>
            @endif

            {{-- TOTP code form --}}
            <form method="POST" action="{{ route('two-factor.verify') }}" id="totp-form" class="space-y-4" style="margin-top:1.5rem">
                @csrf
                <div class="tfa-field">
                    <span class="tfa-label">{{ __('Verification Code') }}</span>
                    <input type="text" name="code" class="tfa-input" maxlength="6" inputmode="numeric" pattern="[0-9]*" autofocus autocomplete="one-time-code" placeholder="000000" />
                </div>
                <button type="submit" class="tfa-submit">{{ __('Verify') }}</button>
            </form>

            {{-- Recovery code form --}}
            <form method="POST" action="{{ route('two-factor.verify') }}" id="recovery-form" class="hidden space-y-4" style="margin-top:1.5rem">
                @csrf
                <div class="tfa-field">
                    <span class="tfa-label">{{ __('Recovery Code') }}</span>
                    <input type="text" name="recovery_code" class="tfa-input" style="letter-spacing:.1em;font-size:1rem" placeholder="{{ __('Enter recovery code') }}" />
                </div>
                <button type="submit" class="tfa-submit">{{ __('Verify') }}</button>
            </form>

            <div class="tfa-toggle">
                <a id="toggle-recovery" onclick="document.getElementById('totp-form').classList.toggle('hidden');document.getElementById('recovery-form').classList.toggle('hidden');this.textContent = this.textContent.includes('recovery') ? '{{ __("Use authenticator code") }}' : '{{ __("Use recovery code") }}'">
                    {{ __('Use recovery code') }}
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
