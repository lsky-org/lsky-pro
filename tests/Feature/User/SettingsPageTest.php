<?php

namespace Tests\Feature\User;

use App\Models\AuthIdentityEvent;
use App\Models\AuthIdentity;
use App\Models\User;
use App\Models\WebauthnCredential;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class SettingsPageTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_user_settings_page_renders_account_security_shell(): void
    {
        $user = User::factory()->create([
            'provider' => 'google',
            'provider_id' => 'google-user-1',
        ]);

        $this->actingAs($user)
            ->get('/settings')
            ->assertOk()
            ->assertSee('账户设置工作台')
            ->assertSee('账户安全入口')
            ->assertSee('Google')
            ->assertSee('GitHub')
            ->assertSee('Passkey 状态')
            ->assertSee('后端身份快照')
            ->assertSee('正在读取后端状态')
            ->assertSee(route('passkeys.status'))
            ->assertSee('正在同步后端状态')
            ->assertDontSee('账户绑定入口待补充');
    }

    public function test_passkey_status_endpoint_returns_identity_and_foundation_payload_for_settings_page(): void
    {
        $user = User::factory()->create([
            'provider' => 'google',
            'provider_id' => 'google-user-1',
        ]);

        AuthIdentity::query()->create([
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-1',
            'provider_email' => $user->email,
            'avatar_url' => 'https://example.com/avatar.png',
            'meta' => ['source' => 'test'],
            'last_used_at' => now(),
        ]);

        WebauthnCredential::query()->create([
            'user_id' => $user->id,
            'credential_id' => 'cred-google-user-1',
            'label' => 'MacBook Pro',
            'public_key' => 'test-public-key',
            'transports' => ['internal'],
            'sign_count' => 0,
            'type' => 'public-key',
            'last_used_at' => now(),
        ]);

        AuthIdentityEvent::query()->create([
            'user_id' => $user->id,
            'actor_user_id' => $user->id,
            'provider' => 'google',
            'event_type' => 'social_linked',
            'status' => 'success',
            'summary' => '已绑定 Google：'.$user->email,
            'context' => [
                'provider' => 'google',
                'provider_email' => $user->email,
            ],
        ]);

        $this->actingAs($user)
            ->withSession([
                'passkey.registration' => [
                    'user_id' => $user->id,
                    'challenge' => 'test-challenge',
                    'expires_at' => now()->addMinutes(5)->toDateTimeString(),
                ],
            ])
            ->get(route('passkeys.status'))
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.legacy.provider', 'google')
            ->assertJsonPath('data.legacy.provider_id_present', true)
            ->assertJsonPath('data.identities.0.provider', 'google')
            ->assertJsonPath('data.identities.0.provider_email', $user->email)
            ->assertJsonPath('data.identity_matrix.google.provider', 'google')
            ->assertJsonPath('data.identity_matrix.google.linked', true)
            ->assertJsonPath('data.identity_matrix.google.disconnect_route', route('oauth.link.destroy', ['provider' => 'google']))
            ->assertJsonPath('data.identity_matrix.google.can_disconnect', true)
            ->assertJsonPath('data.identity_matrix.github.linked', false)
            ->assertJsonPath('data.passkeys.foundation_ready', true)
            ->assertJsonPath('data.passkeys.verification_enabled', true)
            ->assertJsonPath('data.passkeys.registration.pending', true)
            ->assertJsonPath('data.passkeys.registration.verify_route', route('passkeys.register.verify'))
            ->assertJsonPath('data.passkeys.credential_count', 1)
            ->assertJsonPath('data.passkeys.credentials.0.label', 'MacBook Pro')
            ->assertJsonPath('data.passkeys.credentials.0.update_route', route('passkeys.credentials.update', ['credential' => 1]))
            ->assertJsonPath('data.passkeys.credentials.0.delete_route', route('passkeys.credentials.destroy', ['credential' => 1]))
            ->assertJsonPath('data.governance.recovery.level', 'resilient')
            ->assertJsonPath('data.governance.recovery.ready_method_count', 3)
            ->assertJsonPath('data.governance.legacy_snapshot.consistent', true)
            ->assertJsonPath('data.governance.method_inventory.0.provider', 'password')
            ->assertJsonPath('data.governance.recent_events.0.event_type', 'social_linked');
    }
}
