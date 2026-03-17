<?php

namespace App\Services;

use App\Enums\ImagePermission;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SignedUrlService
{
    public function signImageUrl(Image $image, string $url, ?int $ttl = null): string
    {
        if (! $this->shouldSignImage($image)) {
            return $url;
        }

        $ttl = $this->normalizeTtl($ttl);
        $expires = Carbon::now()->addSeconds($ttl)->timestamp;

        return $this->signUrl($url, $expires);
    }

    public function shouldSignImage(Image $image): bool
    {
        if (! $this->isEnabled()) {
            return false;
        }

        if ((bool) config('download.signed_url.private_only', false)) {
            return (int) $image->permission === ImagePermission::Private;
        }

        return true;
    }

    public function validateRequest(Request $request): bool
    {
        $expiresKey = (string) config('download.signed_url.expires_query_key', 'expires');
        $signatureKey = (string) config('download.signed_url.signature_query_key', 'signature');

        $expires = $request->query($expiresKey);
        $signature = (string) $request->query($signatureKey, '');

        if (! is_numeric($expires) || $signature === '') {
            return false;
        }

        if ((int) $expires < Carbon::now()->timestamp) {
            return false;
        }

        $expected = $this->calculateSignatureFromRequest($request, (int) $expires);

        return hash_equals($expected, $signature);
    }

    public function isEnabled(): bool
    {
        return (bool) config('download.signed_url.enabled', false);
    }

    public function signUrl(string $url, int $expires): string
    {
        $expiresKey = (string) config('download.signed_url.expires_query_key', 'expires');
        $signatureKey = (string) config('download.signed_url.signature_query_key', 'signature');

        $path = parse_url($url, PHP_URL_PATH) ?: '/';
        $query = [];
        parse_str((string) parse_url($url, PHP_URL_QUERY), $query);

        $query[$expiresKey] = $expires;
        unset($query[$signatureKey]);

        $signature = $this->calculateSignature($path, $query, $expires);
        $query[$signatureKey] = $signature;

        $queryString = http_build_query($query, '', '&', PHP_QUERY_RFC3986);

        return preg_replace('/\?.*/', '', $url).($queryString ? "?{$queryString}" : '');
    }

    public function extractExpiresFromUrl(string $url): ?int
    {
        $expiresKey = (string) config('download.signed_url.expires_query_key', 'expires');
        $query = [];
        parse_str((string) parse_url($url, PHP_URL_QUERY), $query);

        $expires = $query[$expiresKey] ?? null;

        return is_numeric($expires) ? (int) $expires : null;
    }

    private function calculateSignatureFromRequest(Request $request, int $expires): string
    {
        $signatureKey = (string) config('download.signed_url.signature_query_key', 'signature');

        $path = '/'.ltrim($request->decodedPath(), '/');
        $query = $request->query();

        unset($query[$signatureKey]);

        return $this->calculateSignature($path, $query, $expires);
    }

    private function calculateSignature(string $path, array $query, int $expires): string
    {
        ksort($query);

        $payload = $path.'\n'.http_build_query($query, '', '&', PHP_QUERY_RFC3986).'\n'.$expires;

        return hash_hmac('sha256', $payload, $this->secret());
    }

    private function secret(): string
    {
        $key = (string) config('download.signed_url.key', '');

        if (str_starts_with($key, 'base64:')) {
            $decoded = base64_decode(substr($key, 7), true);
            if ($decoded !== false) {
                $key = $decoded;
            }
        }

        if ($key === '') {
            throw new \RuntimeException('Signed URL key is not configured. Set SIGNED_URL_KEY in .env');
        }

        return $key;
    }

    private function normalizeTtl(?int $ttl): int
    {
        $value = $ttl ?? (int) config('download.signed_url.ttl', 300);
        $value = max(1, $value);

        return min($value, 86400 * 7);
    }
}
