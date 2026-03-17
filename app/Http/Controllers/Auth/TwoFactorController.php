<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorController extends Controller
{
    private function g2fa(): Google2FA
    {
        return new Google2FA();
    }

    /**
     * Show 2FA setup page (QR code + secret).
     */
    public function setup(Request $request)
    {
        /** @var User $user */
        $user = $request->user();
        $g2fa = $this->g2fa();

        // Generate secret if not set yet
        $secret = $user->two_factor_secret ?: $g2fa->generateSecretKey(32);

        if (! $user->two_factor_secret) {
            $user->two_factor_secret = $secret;
            $user->save();
        }

        $appName = config('app.name', 'LskyPro');
        $otpauthUrl = $g2fa->getQRCodeUrl($appName, $user->email, $secret);

        // Generate SVG QR code
        $renderer = new ImageRenderer(
            new RendererStyle(250),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $svg = $writer->writeString($otpauthUrl);

        return view('auth.two-factor-setup', [
            'secret'  => $secret,
            'svg'     => $svg,
            'enabled' => (bool) $user->two_factor_enabled,
        ]);
    }

    /**
     * Enable 2FA after verifying a code.
     */
    public function enable(Request $request)
    {
        $request->validate(['code' => 'required|digits:6']);

        /** @var User $user */
        $user = $request->user();
        $g2fa = $this->g2fa();

        if (! $g2fa->verifyKey($user->two_factor_secret, $request->code)) {
            return back()->withErrors(['code' => __('Invalid verification code, please try again.')]);
        }

        // Generate recovery codes
        $codes = collect(range(1, 8))->map(fn () => Str::random(10))->toArray();

        $user->two_factor_enabled = true;
        $user->two_factor_recovery_codes = encrypt(json_encode($codes));
        $user->save();

        return back()->with('status', __('Two-factor authentication enabled successfully.'))
                     ->with('recovery_codes', $codes);
    }

    /**
     * Disable 2FA.
     */
    public function disable(Request $request)
    {
        $request->validate(['password' => 'required']);

        /** @var User $user */
        $user = $request->user();

        if (! \Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => __('Incorrect password.')]);
        }

        $user->two_factor_secret = null;
        $user->two_factor_enabled = false;
        $user->two_factor_recovery_codes = null;
        $user->save();

        return back()->with('status', __('Two-factor authentication disabled.'));
    }

    /**
     * Show the 2FA challenge page (during login).
     */
    public function challenge()
    {
        if (! session('2fa:user_id')) {
            return redirect()->route('login');
        }

        return view('auth.two-factor-challenge');
    }

    /**
     * Verify the 2FA code during login.
     */
    public function verify(Request $request)
    {
        $request->validate([
            'code'          => 'nullable|digits:6',
            'recovery_code' => 'nullable|string',
        ]);

        $userId = session('2fa:user_id');
        $remember = session('2fa:remember', false);

        if (! $userId) {
            return redirect()->route('login');
        }

        $user = User::findOrFail($userId);
        $g2fa = $this->g2fa();

        // Try TOTP code first
        if ($request->filled('code')) {
            if (! $g2fa->verifyKey($user->two_factor_secret, $request->code)) {
                return back()->withErrors(['code' => __('Invalid verification code.')]);
            }
        }
        // Try recovery code
        elseif ($request->filled('recovery_code')) {
            $codes = json_decode(decrypt($user->two_factor_recovery_codes), true) ?: [];
            $key = array_search($request->recovery_code, $codes);

            if ($key === false) {
                return back()->withErrors(['recovery_code' => __('Invalid recovery code.')]);
            }

            // Remove used code
            unset($codes[$key]);
            $user->two_factor_recovery_codes = encrypt(json_encode(array_values($codes)));
            $user->save();
        } else {
            return back()->withErrors(['code' => __('Please enter a verification code or recovery code.')]);
        }

        // Clear 2FA session and login
        session()->forget(['2fa:user_id', '2fa:remember']);
        auth()->login($user, $remember);

        return redirect()->intended('/dashboard');
    }
}
