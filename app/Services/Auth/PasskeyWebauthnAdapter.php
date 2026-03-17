<?php

namespace App\Services\Auth;

use App\Models\User;
use App\Models\WebauthnCredential;
use Illuminate\Http\Request;
use lbuchs\WebAuthn\Binary\ByteBuffer;
use lbuchs\WebAuthn\WebAuthn;

class PasskeyWebauthnAdapter
{
    /**
     * @param  array<int, string>  $excludeCredentialIds
     * @return array{challenge: string, options: array<string, mixed>}
     */
    public function createRegistrationOptions(Request $request, User $user, array $excludeCredentialIds = []): array
    {
        $server = $this->makeServer($request);
        $args = $server->getCreateArgs(
            $this->userHandleFor($user),
            (string) $user->email,
            (string) $user->name,
            60,
            'required',
            'required',
            null,
            $this->toByteBuffers($excludeCredentialIds)
        );

        $payload = json_decode(json_encode($args->publicKey, JSON_UNESCAPED_UNICODE), true);

        return [
            'challenge' => (string) data_get($payload, 'challenge', ''),
            'options' => is_array($payload) ? $payload : [],
        ];
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array<string, mixed>
     */
    public function verifyRegistration(Request $request, array $payload, string $challenge): array
    {
        $server = $this->makeServer($request);
        $response = is_array($payload['response'] ?? null) ? $payload['response'] : [];

        $result = $server->processCreate(
            $this->decodeBase64Url((string) ($response['clientDataJSON'] ?? '')),
            $this->decodeBase64Url((string) ($response['attestationObject'] ?? '')),
            ByteBuffer::fromBase64Url($challenge),
            true,
            true,
            false,
            false
        );

        return [
            'credential_id' => $this->encodeBase64Url((string) $result->credentialId),
            'public_key' => (string) $result->credentialPublicKey,
            'aaguid' => bin2hex((string) ($result->AAGUID ?? '')),
            'sign_count' => (int) ($result->signatureCounter ?? 0),
            'type' => trim((string) ($payload['type'] ?? 'public-key')) ?: 'public-key',
            'attestation_format' => (string) ($result->attestationFormat ?? ''),
            'root_valid' => $result->rootValid,
            'user_present' => (bool) ($result->userPresent ?? false),
            'user_verified' => (bool) ($result->userVerified ?? false),
            'is_backup_eligible' => (bool) ($result->isBackupEligible ?? false),
            'is_backed_up' => (bool) ($result->isBackedUp ?? false),
        ];
    }

    /**
     * @param  array<int, string>  $credentialIds
     * @return array{challenge: string, options: array<string, mixed>}
     */
    public function createAuthenticationOptions(Request $request, array $credentialIds = []): array
    {
        $server = $this->makeServer($request);
        $allowCredentials = $this->toByteBuffers($credentialIds);
        $args = $server->getGetArgs(
            $allowCredentials,
            60,
            true,
            true,
            true,
            true,
            true,
            'required'
        );

        $payload = json_decode(json_encode($args->publicKey, JSON_UNESCAPED_UNICODE), true);

        return [
            'challenge' => (string) data_get($payload, 'challenge', ''),
            'options' => is_array($payload) ? $payload : [],
        ];
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array<string, mixed>
     */
    public function verifyAuthentication(
        Request $request,
        WebauthnCredential $credential,
        array $payload,
        string $challenge
    ): array {
        $server = $this->makeServer($request);
        $response = is_array($payload['response'] ?? null) ? $payload['response'] : [];

        $server->processGet(
            $this->decodeBase64Url((string) ($response['clientDataJSON'] ?? '')),
            $this->decodeBase64Url((string) ($response['authenticatorData'] ?? '')),
            $this->decodeBase64Url((string) ($response['signature'] ?? '')),
            (string) $credential->public_key,
            ByteBuffer::fromBase64Url($challenge),
            $credential->sign_count ? (int) $credential->sign_count : null,
            true,
            true
        );

        return [
            'sign_count' => (int) ($server->getSignatureCounter() ?? $credential->sign_count ?? 0),
        ];
    }

    private function makeServer(Request $request): WebAuthn
    {
        return new WebAuthn(
            (string) config('app.name', 'Lsky Pro'),
            $this->resolveRpId($request),
            ['none'],
            true
        );
    }

    private function resolveRpId(Request $request): string
    {
        $host = parse_url((string) config('app.url'), PHP_URL_HOST);
        $host = is_string($host) && $host !== '' ? $host : $request->getHost();

        return (string) $host;
    }

    private function userHandleFor(User $user): string
    {
        return (string) $user->getKey();
    }

    private function encodeBase64Url(string $value): string
    {
        return rtrim(strtr(base64_encode($value), '+/', '-_'), '=');
    }

    private function decodeBase64Url(string $value): string
    {
        $value = trim($value);
        if ($value === '') {
            throw new \RuntimeException('Passkey 响应缺少必需的二进制字段');
        }

        $decoded = base64_decode(strtr($value, '-_', '+/').str_repeat('=', (4 - strlen($value) % 4) % 4), true);
        if ($decoded === false) {
            throw new \RuntimeException('Passkey 响应包含非法的 base64url 数据');
        }

        return $decoded;
    }

    /**
     * @param  array<int, string>  $credentialIds
     * @return array<int, ByteBuffer>
     */
    private function toByteBuffers(array $credentialIds): array
    {
        $buffers = [];

        foreach ($credentialIds as $credentialId) {
            $credentialId = trim((string) $credentialId);
            if ($credentialId === '') {
                continue;
            }

            try {
                $buffers[] = ByteBuffer::fromBase64Url($credentialId);
            } catch (\Throwable) {
                // Ignore legacy or malformed ids so existing accounts can still issue ceremonies.
            }
        }

        return $buffers;
    }
}
