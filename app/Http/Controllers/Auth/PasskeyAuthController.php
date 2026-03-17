<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WebauthnCredential;
use App\Services\Auth\AuthIdentityService;
use App\Services\Auth\AuthIdentityGovernanceService;
use App\Services\Auth\PasskeyChallengeService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Throwable;

class PasskeyAuthController extends Controller
{
    public function status(
        Request $request,
        AuthIdentityService $identityService,
        PasskeyChallengeService $passkeyService,
        AuthIdentityGovernanceService $governanceService
    ): Response
    {
        /** @var User $user */
        $user = $request->user();
        $providerStatuses = SocialAuthController::providersStatus();
        $identities = $identityService->statusPayload($user);
        $identityMatrix = $identityService->socialIdentityMatrix($user, $providerStatuses);
        $legacy = [
            'provider' => (string) ($user->provider ?? ''),
            'provider_id_present' => filled($user->provider_id ?? null),
        ];
        $passkeys = $passkeyService->status($request, $user);

        return $this->success('success', [
            'identities' => $identities,
            'identity_matrix' => $identityMatrix,
            'legacy' => $legacy,
            'passkeys' => $passkeys,
            'governance' => $governanceService->payload($user, $identityMatrix, $passkeys, $legacy),
        ]);
    }

    public function registerOptions(Request $request, PasskeyChallengeService $passkeyService): Response
    {
        /** @var User $user */
        $user = $request->user();

        return $this->attempt('Passkey 注册初始化失败。', fn () => $passkeyService->issueRegistrationOptions($request, $user));
    }

    public function registerVerify(Request $request, PasskeyChallengeService $passkeyService): Response
    {
        /** @var User $user */
        $user = $request->user();

        return $this->attempt('Passkey 注册失败。', fn () => $passkeyService->completeRegistration($request, $user, $request->all()));
    }

    public function loginOptions(Request $request, PasskeyChallengeService $passkeyService): Response
    {
        return $this->attempt('Passkey 登录初始化失败。', fn () => $passkeyService->issueAuthenticationOptions($request));
    }

    public function loginVerify(Request $request, PasskeyChallengeService $passkeyService): Response
    {
        return $this->attempt('Passkey 登录失败。', fn () => $passkeyService->completeAuthentication($request, $request->all()));
    }

    public function updateCredential(
        Request $request,
        WebauthnCredential $credential,
        PasskeyChallengeService $passkeyService
    ): Response {
        /** @var User $user */
        $user = $request->user();

        return $this->attempt(
            'Passkey 更新失败。',
            fn () => $passkeyService->renameCredential($user, $credential, (string) $request->input('label', ''))
        );
    }

    public function destroyCredential(
        Request $request,
        WebauthnCredential $credential,
        PasskeyChallengeService $passkeyService
    ): Response {
        /** @var User $user */
        $user = $request->user();

        return $this->attempt(
            'Passkey 删除失败。',
            fn () => $passkeyService->removeCredential($user, $credential)
        );
    }

    /**
     * @param  callable(): array<string, mixed>  $resolver
     */
    private function attempt(string $fallbackMessage, callable $resolver): Response
    {
        try {
            return $this->success('success', $resolver());
        } catch (ValidationException $e) {
            return $this->fail($this->firstValidationMessage($e));
        } catch (Throwable $e) {
            Log::warning($fallbackMessage, [
                'error' => $e->getMessage(),
            ]);

            return $this->fail(config('app.debug') ? $e->getMessage() : $fallbackMessage);
        }
    }

    private function firstValidationMessage(ValidationException $e): string
    {
        foreach ($e->errors() as $messages) {
            if (is_array($messages) && isset($messages[0]) && is_string($messages[0])) {
                return $messages[0];
            }
        }

        return '请求验证失败。';
    }
}
