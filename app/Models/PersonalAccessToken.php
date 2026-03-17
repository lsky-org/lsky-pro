<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
    use HasFactory;

    protected $casts = [
        'abilities' => 'array',
        'expires_at' => 'datetime',
        'current_space_id' => 'integer',
    ];

    /**
     * Return IP whitelist as array of strings (supports comma-separated text or JSON array in DB).
     */
    protected function ipWhitelist(): Attribute
    {
        return Attribute::make(
            function ($value) {
                if ($value === null || $value === '') {
                    return [];
                }
                // Try JSON decode first
                $decoded = json_decode($value, true);
                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                    return array_values(array_filter(array_map('trim', $decoded)));
                }
                // Fallback: comma / whitespace separated list
                $parts = preg_split('/[\s,]+/', $value, -1, PREG_SPLIT_NO_EMPTY);
                return array_values(array_filter(array_map('trim', $parts)));
            },
            function ($value) {
                if ($value === null) {
                    return null;
                }
                if (is_string($value)) {
                    // Store as-is string
                    return $value;
                }
                if (is_array($value)) {
                    // Store JSON array for fidelity
                    return json_encode(array_values(array_filter(array_map('trim', $value))));
                }
                return $value;
            }
        );
    }

    public function isExpired(): bool
    {
        if ($this->expires_at === null) {
            return false;
        }
        return Carbon::now()->greaterThan($this->expires_at);
    }

    public function allowsIp(?string $ip): bool
    {
        $list = $this->ip_whitelist;
        if (empty($list)) {
            return true; // No whitelist configured => allow
        }
        foreach ($list as $rule) {
            if ($this->ipMatches($ip, $rule)) {
                return true;
            }
        }
        return false;
    }

    private function ipMatches(?string $ip, string $rule): bool
    {
        if ($ip === null || $ip === '') {
            return false;
        }
        $rule = trim($rule);
        if ($rule === '') {
            return false;
        }
        // CIDR
        if (str_contains($rule, '/')) {
            return $this->cidrMatch($ip, $rule);
        }
        // Exact match (supports IPv4/IPv6 strings)
        return strcmp($ip, $rule) === 0;
    }

    private function cidrMatch(string $ip, string $cidr): bool
    {
        [$subnet, $mask] = explode('/', $cidr, 2);
        $mask = (int) $mask;
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) && filter_var($subnet, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            $ipLong = ip2long($ip);
            $subnetLong = ip2long($subnet);
            $maskLong = -1 << (32 - $mask);
            $subnetLong &= $maskLong;
            return ($ipLong & $maskLong) === $subnetLong;
        }
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) && filter_var($subnet, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            // IPv6 matching
            $ipBin = inet_pton($ip);
            $subnetBin = inet_pton($subnet);
            if ($ipBin === false || $subnetBin === false) {
                return false;
            }
            $bytes = intdiv($mask, 8);
            $bits = $mask % 8;
            if (strncmp($ipBin, $subnetBin, $bytes) !== 0) {
                return false;
            }
            if ($bits === 0) {
                return true;
            }
            $maskByte = ~((1 << (8 - $bits)) - 1) & 0xFF;
            return (ord($ipBin[$bytes]) & $maskByte) === (ord($subnetBin[$bytes]) & $maskByte);
        }
        return false;
    }
}
