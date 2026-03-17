<x-app-layout>
    @push('styles')
    <style>
        .tfa-setup {
            max-width: 560px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        .tfa-setup-card {
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 4px 24px rgba(15,23,42,.06);
            padding: 2rem;
        }
        .tfa-setup-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: #0f172a;
        }
        .tfa-setup-sub {
            margin-top: .35rem;
            color: #64748b;
            font-size: .85rem;
            line-height: 1.6;
        }
        .tfa-qr-wrap {
            display: flex;
            justify-content: center;
            margin: 1.5rem 0;
            padding: 1.5rem;
            background: #f8fafc;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
        }
        .tfa-qr-wrap svg {
            width: 200px;
            height: 200px;
        }
        .tfa-secret-box {
            margin: 1rem 0;
            padding: .75rem 1rem;
            background: #f1f5f9;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            font-family: monospace;
            font-size: .85rem;
            color: #334155;
            word-break: break-all;
            text-align: center;
            letter-spacing: .1em;
        }
        .tfa-steps {
            margin: 1.25rem 0;
            padding-left: 0;
            list-style: none;
            counter-reset: step;
        }
        .tfa-steps li {
            counter-increment: step;
            display: flex;
            align-items: flex-start;
            gap: .75rem;
            margin-bottom: .75rem;
            font-size: .85rem;
            color: #475569;
            line-height: 1.5;
        }
        .tfa-steps li::before {
            content: counter(step);
            flex-shrink: 0;
            width: 24px; height: 24px;
            border-radius: 50%;
            background: #0284c7;
            color: #fff;
            font-size: .72rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .tfa-form-field {
            display: grid;
            gap: 6px;
            margin-top: 1rem;
        }
        .tfa-form-label {
            font-size: 12px;
            font-weight: 700;
            color: #334155;
        }
        .tfa-form-input {
            width: 100%;
            min-height: 44px;
            border: 1.5px solid #cbd5e1;
            border-radius: 12px;
            padding: 0 1rem;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: .3em;
            text-align: center;
            color: #0f172a;
        }
        .tfa-form-input:focus {
            border-color: #0ea5e9;
            outline: none;
            box-shadow: 0 0 0 3px rgba(14,165,233,.16);
        }
        .tfa-btn-primary {
            appearance: none;
            width: 100%;
            min-height: 44px;
            margin-top: 1rem;
            border: 0;
            border-radius: 12px;
            color: #fff;
            font-weight: 700;
            cursor: pointer;
            background: linear-gradient(95deg, #0284c7, #0369a1);
            box-shadow: 0 8px 20px rgba(2,132,199,.22);
        }
        .tfa-btn-primary:hover { filter: brightness(1.05); }
        .tfa-btn-danger {
            appearance: none;
            width: 100%;
            min-height: 44px;
            margin-top: .75rem;
            border: 1.5px solid #fca5a5;
            border-radius: 12px;
            color: #dc2626;
            font-weight: 700;
            cursor: pointer;
            background: #fff;
        }
        .tfa-btn-danger:hover { background: #fef2f2; }
        .tfa-status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 999px;
            font-size: .75rem;
            font-weight: 700;
        }
        .tfa-status-on {
            background: #dcfce7;
            color: #16a34a;
        }
        .tfa-status-off {
            background: #fef3c7;
            color: #d97706;
        }
        .tfa-alert {
            padding: .75rem 1rem;
            border-radius: 12px;
            font-size: .82rem;
            margin-bottom: 1rem;
        }
        .tfa-alert-success {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            color: #15803d;
        }
        .tfa-alert-error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #dc2626;
        }
        .tfa-recovery-codes {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: .5rem;
            margin: 1rem 0;
            padding: 1rem;
            background: #fffbeb;
            border: 1px solid #fde68a;
            border-radius: 12px;
        }
        .tfa-recovery-codes code {
            font-family: monospace;
            font-size: .85rem;
            color: #92400e;
            font-weight: 600;
        }
        .tfa-recovery-warn {
            font-size: .78rem;
            color: #b45309;
            line-height: 1.5;
        }
        .tfa-back {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 1.25rem;
            font-size: .85rem;
            color: #64748b;
            text-decoration: none;
        }
        .tfa-back:hover { color: #0f172a; }
    </style>
    @endpush

    <div class="tfa-setup">
        <a href="{{ route('settings') }}" class="tfa-back"><i class="fas fa-arrow-left"></i> {{ __('Back to Settings') }}</a>

        <div class="tfa-setup-card">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1rem">
                <div class="tfa-setup-title">{{ __('Two-Factor Authentication') }}</div>
                @if($enabled)
                    <span class="tfa-status-badge tfa-status-on"><i class="fas fa-check-circle"></i> {{ __('Enabled') }}</span>
                @else
                    <span class="tfa-status-badge tfa-status-off"><i class="fas fa-exclamation-circle"></i> {{ __('Disabled') }}</span>
                @endif
            </div>

            @if(session('status'))
                <div class="tfa-alert tfa-alert-success">{{ session('status') }}</div>
            @endif

            @if($errors->any())
                <div class="tfa-alert tfa-alert-error">{{ $errors->first() }}</div>
            @endif

            @if(session('recovery_codes'))
                <div style="margin-bottom:1.25rem">
                    <div class="tfa-recovery-warn" style="margin-bottom:.5rem">
                        <i class="fas fa-exclamation-triangle"></i>
                        <strong>{{ __('Save these recovery codes!') }}</strong>
                        {{ __('Each code can only be used once. Store them in a safe place.') }}
                    </div>
                    <div class="tfa-recovery-codes">
                        @foreach(session('recovery_codes') as $code)
                            <code>{{ $code }}</code>
                        @endforeach
                    </div>
                </div>
            @endif

            @if(! $enabled)
                <div class="tfa-setup-sub">
                    {{ __('Scan the QR code with Microsoft Authenticator, Google Authenticator, or any TOTP app.') }}
                </div>

                <ol class="tfa-steps">
                    <li>{{ __('Open your authenticator app') }}</li>
                    <li>{{ __('Scan the QR code or enter the secret key manually') }}</li>
                    <li>{{ __('Enter the 6-digit code shown in the app below') }}</li>
                </ol>

                <div class="tfa-qr-wrap">
                    {!! $svg !!}
                </div>

                <div style="font-size:.78rem;color:#64748b;text-align:center;margin-bottom:.25rem">{{ __('Or enter this key manually:') }}</div>
                <div class="tfa-secret-box">{{ $secret }}</div>

                <form method="POST" action="{{ route('two-factor.enable') }}">
                    @csrf
                    <div class="tfa-form-field">
                        <span class="tfa-form-label">{{ __('Verification Code') }}</span>
                        <input type="text" name="code" class="tfa-form-input" maxlength="6" inputmode="numeric" pattern="[0-9]*" autocomplete="one-time-code" placeholder="000000" required />
                    </div>
                    <button type="submit" class="tfa-btn-primary">{{ __('Enable Two-Factor') }}</button>
                </form>
            @else
                <div class="tfa-setup-sub">
                    {{ __('Two-factor authentication is active. Enter your password to disable it.') }}
                </div>

                <form method="POST" action="{{ route('two-factor.disable') }}">
                    @csrf
                    <div class="tfa-form-field">
                        <span class="tfa-form-label">{{ __('Current Password') }}</span>
                        <input type="password" name="password" class="tfa-form-input" style="letter-spacing:normal;font-size:.95rem;text-align:left" required />
                    </div>
                    <button type="submit" class="tfa-btn-danger"><i class="fas fa-shield-alt"></i> {{ __('Disable Two-Factor') }}</button>
                </form>
            @endif
        </div>
    </div>
</x-app-layout>
