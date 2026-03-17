<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Services\Auth\LegacyAuthIdentityBackfillService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class LegacyAuthIdentityBackfillServiceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_legacy_backfill_service_is_safe_to_rerun_and_upserts_existing_rows(): void
    {
        $user = User::factory()->create([
            'email' => 'legacy-a@example.com',
            'provider' => 'google',
            'provider_id' => 'google-legacy-a',
        ]);

        $service = app(LegacyAuthIdentityBackfillService::class);

        $service->syncFromLegacyUsers();

        $this->assertDatabaseHas('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-legacy-a',
            'provider_email' => 'legacy-a@example.com',
        ]);

        $user->forceFill([
            'email' => 'legacy-a-updated@example.com',
        ])->save();

        $service->syncFromLegacyUsers();

        $this->assertDatabaseCount('auth_identities', 1);
        $this->assertDatabaseHas('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-legacy-a',
            'provider_email' => 'legacy-a-updated@example.com',
        ]);
    }

    public function test_legacy_backfill_service_rejects_duplicate_provider_subject_conflicts(): void
    {
        User::factory()->create([
            'email' => 'legacy-conflict-a@example.com',
            'provider' => 'google',
            'provider_id' => 'shared-google-subject',
        ]);

        User::factory()->create([
            'email' => 'legacy-conflict-b@example.com',
            'provider' => 'google',
            'provider_id' => 'shared-google-subject',
        ]);

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Legacy auth identity conflict detected');

        app(LegacyAuthIdentityBackfillService::class)->syncFromLegacyUsers();
    }
}
