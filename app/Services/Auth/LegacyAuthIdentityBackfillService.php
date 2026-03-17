<?php

namespace App\Services\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use RuntimeException;

class LegacyAuthIdentityBackfillService
{
    public function syncFromLegacyUsers(): void
    {
        if (! Schema::hasTable('auth_identities')) {
            return;
        }

        $this->assertNoDuplicateLegacySubjects();

        DB::table('users')
            ->whereNotNull('provider')
            ->where('provider', '!=', '')
            ->whereNotNull('provider_id')
            ->where('provider_id', '!=', '')
            ->orderBy('id')
            ->chunkById(100, function ($users) {
                $rows = [];
                $now = now();

                foreach ($users as $user) {
                    $rows[] = [
                        'user_id' => (int) $user->id,
                        'provider' => (string) $user->provider,
                        'provider_subject' => (string) $user->provider_id,
                        'provider_email' => filled($user->email ?? null) ? (string) $user->email : null,
                        'avatar_url' => filled($user->provider_avatar ?? null) ? (string) $user->provider_avatar : null,
                        'meta' => json_encode([
                            'migrated_from_legacy_user_columns' => true,
                        ], JSON_UNESCAPED_UNICODE),
                        'last_used_at' => $user->updated_at ?? $now,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ];
                }

                if ($rows !== []) {
                    DB::table('auth_identities')->upsert(
                        $rows,
                        ['provider', 'provider_subject'],
                        ['user_id', 'provider_email', 'avatar_url', 'meta', 'last_used_at', 'updated_at']
                    );
                }
            });
    }

    private function assertNoDuplicateLegacySubjects(): void
    {
        $conflict = DB::table('users')
            ->select('provider', 'provider_id', DB::raw('COUNT(*) as aggregate'))
            ->whereNotNull('provider')
            ->where('provider', '!=', '')
            ->whereNotNull('provider_id')
            ->where('provider_id', '!=', '')
            ->groupBy('provider', 'provider_id')
            ->havingRaw('COUNT(*) > 1')
            ->orderBy('provider')
            ->orderBy('provider_id')
            ->first();

        if (! $conflict) {
            return;
        }

        throw new RuntimeException(sprintf(
            'Legacy auth identity conflict detected for provider [%s] subject [%s]; resolve duplicate users before migrating auth_identities.',
            (string) $conflict->provider,
            (string) $conflict->provider_id
        ));
    }
}
