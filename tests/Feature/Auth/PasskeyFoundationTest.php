<?php

namespace Tests\Feature\Auth;

use App\Models\AuthIdentity;
use App\Models\User;
use App\Models\WebauthnCredential;
use App\Services\Auth\PasskeyWebauthnAdapter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use Tests\TestCase;

class PasskeyFoundationTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_fetch_passkey_status_with_identity_and_credential_summary(): void
    {
        $user = User::factory()->create([
            'provider' => 'google',
            'provider_id' => 'google-user-legacy',
        ]);

        AuthIdentity::query()->create([
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-legacy',
            'provider_email' => $user->email,
            'avatar_url' => 'https://example.test/avatar.png',
            'last_used_at' => now(),
        ]);

        WebauthnCredential::query()->create([
            'user_id' => $user->id,
            'credential_id' => 'cred-1',
            'label' => 'MacBook Touch ID',
            'public_key' => 'test-public-key',
            'transports' => ['internal'],
            'sign_count' => 7,
            'type' => 'public-key',
            'last_used_at' => now(),
        ]);

        $this->actingAs($user)
            ->get('/auth/passkeys/status')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.identities.0.provider', 'google')
            ->assertJsonPath('data.legacy.provider', 'google')
            ->assertJsonPath('data.passkeys.foundation_ready', true)
            ->assertJsonPath('data.passkeys.verification_enabled', true)
            ->assertJsonPath('data.passkeys.registration.verify_route', route('passkeys.register.verify'))
            ->assertJsonPath('data.passkeys.authentication.options_route', route('passkeys.login.options'))
            ->assertJsonPath('data.passkeys.credential_count', 1)
            ->assertJsonPath('data.passkeys.credentials.0.label', 'MacBook Touch ID')
            ->assertJsonPath('data.passkeys.credentials.0.update_route', route('passkeys.credentials.update', ['credential' => 1]))
            ->assertJsonPath('data.passkeys.credentials.0.delete_route', route('passkeys.credentials.destroy', ['credential' => 1]));
    }

    public function test_authenticated_user_can_request_passkey_registration_options(): void
    {
        $user = User::factory()->create();
        $adapter = Mockery::mock(PasskeyWebauthnAdapter::class);
        $adapter->shouldReceive('createRegistrationOptions')
            ->once()
            ->andReturn([
                'challenge' => 'challenge-registration-1',
                'options' => [
                    'challenge' => 'challenge-registration-1',
                    'rp' => ['name' => 'Lsky Pro', 'id' => 'localhost'],
                    'user' => ['name' => $user->email, 'displayName' => $user->name],
                ],
            ]);
        $this->app->instance(PasskeyWebauthnAdapter::class, $adapter);

        $response = $this->actingAs($user)
            ->post('/auth/passkeys/register/options');

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.foundation_ready', true)
            ->assertJsonPath('data.verification_enabled', true)
            ->assertJsonPath('data.challenge_state.pending', true)
            ->assertJsonPath('data.verify_route', route('passkeys.register.verify'))
            ->assertJsonPath('data.options.user.name', $user->email)
            ->assertJsonPath('data.options.user.displayName', $user->name);

        $this->assertTrue(session()->has('passkey.registration'));
        $this->assertSame('challenge-registration-1', data_get(session('passkey.registration'), 'challenge'));
    }

    public function test_authenticated_user_can_verify_passkey_registration_and_persist_credential(): void
    {
        $user = User::factory()->create();
        $adapter = Mockery::mock(PasskeyWebauthnAdapter::class);
        $adapter->shouldReceive('verifyRegistration')
            ->once()
            ->andReturn([
                'credential_id' => 'Y3JlZGVudGlhbC0x',
                'public_key' => 'test-public-key',
                'aaguid' => 'aaguid-1',
                'sign_count' => 3,
                'type' => 'public-key',
                'attestation_format' => 'none',
                'root_valid' => null,
                'user_present' => true,
                'user_verified' => true,
                'is_backup_eligible' => true,
                'is_backed_up' => false,
            ]);
        $this->app->instance(PasskeyWebauthnAdapter::class, $adapter);

        $response = $this->actingAs($user)
            ->withSession([
                'passkey.registration' => [
                    'user_id' => $user->id,
                    'challenge' => 'challenge-registration-verify',
                    'expires_at' => now()->addMinutes(5)->toDateTimeString(),
                ],
            ])
            ->post('/auth/passkeys/register/verify', [
                'label' => 'Office Mac',
                'transports' => ['internal', 'hybrid'],
                'id' => 'Y3JlZGVudGlhbC0x',
                'response' => [
                    'clientDataJSON' => 'ignored-by-mock',
                    'attestationObject' => 'ignored-by-mock',
                ],
            ]);

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.verification_enabled', true)
            ->assertJsonPath('data.credential_count', 1)
            ->assertJsonPath('data.credential.label', 'Office Mac')
            ->assertJsonPath('data.credential.credential_id', 'Y3JlZGVudGlhbC0x');

        $this->assertFalse(session()->has('passkey.registration'));
        $this->assertDatabaseHas('webauthn_credentials', [
            'user_id' => $user->id,
            'credential_id' => 'Y3JlZGVudGlhbC0x',
            'label' => 'Office Mac',
            'sign_count' => 3,
        ]);
        $this->assertDatabaseHas('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'passkey',
            'provider_subject' => 'user:'.$user->id,
        ]);
        $this->assertDatabaseHas('auth_identity_events', [
            'user_id' => $user->id,
            'provider' => 'passkey',
            'event_type' => 'passkey_registered',
            'status' => 'success',
        ]);
    }

    public function test_guest_can_request_passkey_login_options(): void
    {
        $adapter = Mockery::mock(PasskeyWebauthnAdapter::class);
        $adapter->shouldReceive('createAuthenticationOptions')
            ->once()
            ->andReturn([
                'challenge' => 'challenge-authentication-1',
                'options' => [
                    'challenge' => 'challenge-authentication-1',
                    'rpId' => 'localhost',
                    'userVerification' => 'required',
                ],
            ]);
        $this->app->instance(PasskeyWebauthnAdapter::class, $adapter);

        $response = $this->post('/auth/passkeys/login/options');

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.verification_enabled', true)
            ->assertJsonPath('data.verify_route', route('passkeys.login.verify'))
            ->assertJsonPath('data.options.challenge', 'challenge-authentication-1');

        $this->assertSame('challenge-authentication-1', data_get(session('passkey.authentication'), 'challenge'));
    }

    public function test_guest_can_verify_passkey_login_and_create_session(): void
    {
        $user = User::factory()->create();
        $credential = WebauthnCredential::query()->create([
            'user_id' => $user->id,
            'credential_id' => 'Y3JlZGVudGlhbC0y',
            'label' => 'Travel Key',
            'public_key' => 'test-public-key',
            'transports' => ['internal'],
            'sign_count' => 4,
            'type' => 'public-key',
        ]);

        $adapter = Mockery::mock(PasskeyWebauthnAdapter::class);
        $adapter->shouldReceive('verifyAuthentication')
            ->once()
            ->withArgs(function ($request, $resolvedCredential, $payload, $challenge) use ($credential) {
                return $resolvedCredential->is($credential)
                    && data_get($payload, 'id') === 'Y3JlZGVudGlhbC0y'
                    && $challenge === 'challenge-authentication-verify';
            })
            ->andReturn([
                'sign_count' => 8,
            ]);
        $this->app->instance(PasskeyWebauthnAdapter::class, $adapter);

        $response = $this->withSession([
            'passkey.authentication' => [
                'challenge' => 'challenge-authentication-verify',
                'expires_at' => now()->addMinutes(5)->toDateTimeString(),
            ],
        ])->post('/auth/passkeys/login/verify', [
            'id' => 'Y3JlZGVudGlhbC0y',
            'response' => [
                'clientDataJSON' => 'ignored-by-mock',
                'authenticatorData' => 'ignored-by-mock',
                'signature' => 'ignored-by-mock',
                'userHandle' => rtrim(strtr(base64_encode((string) $user->id), '+/', '-_'), '='),
            ],
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.verification_enabled', true)
            ->assertJsonPath('data.redirect_to', route('dashboard'))
            ->assertJsonPath('data.user.email', $user->email)
            ->assertJsonPath('data.credential.label', 'Travel Key');

        $this->assertAuthenticatedAs($user->fresh());
        $this->assertFalse(session()->has('passkey.authentication'));
        $this->assertDatabaseHas('webauthn_credentials', [
            'id' => $credential->id,
            'sign_count' => 8,
        ]);
        $this->assertDatabaseHas('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'passkey',
            'provider_subject' => 'user:'.$user->id,
        ]);
    }

    public function test_passkey_login_rejects_expired_or_missing_challenge(): void
    {
        $user = User::factory()->create();
        WebauthnCredential::query()->create([
            'user_id' => $user->id,
            'credential_id' => 'Y3JlZGVudGlhbC0z',
            'label' => 'Desk Key',
            'public_key' => 'test-public-key',
            'type' => 'public-key',
        ]);

        $this->withSession([
            'passkey.authentication' => [
                'challenge' => 'expired-challenge',
                'expires_at' => now()->subMinute()->toDateTimeString(),
            ],
        ])->post('/auth/passkeys/login/verify', [
            'id' => 'Y3JlZGVudGlhbC0z',
            'response' => [
                'userHandle' => rtrim(strtr(base64_encode((string) $user->id), '+/', '-_'), '='),
            ],
        ])
            ->assertOk()
            ->assertJsonPath('status', false)
            ->assertJsonPath('message', 'Passkey challenge 不存在或已过期，请刷新后重试。');
    }

    public function test_authenticated_user_can_rename_and_delete_passkey_credentials(): void
    {
        $user = User::factory()->create();
        $credential = WebauthnCredential::query()->create([
            'user_id' => $user->id,
            'credential_id' => 'Y3JlZGVudGlhbC00',
            'label' => 'Old Label',
            'public_key' => 'test-public-key',
            'type' => 'public-key',
        ]);
        AuthIdentity::query()->create([
            'user_id' => $user->id,
            'provider' => 'passkey',
            'provider_subject' => 'user:'.$user->id,
            'provider_email' => $user->email,
            'last_used_at' => now(),
        ]);

        $this->actingAs($user)
            ->patch(route('passkeys.credentials.update', ['credential' => $credential->id]), [
                'label' => 'Renamed Key',
            ])
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.credential.label', 'Renamed Key');

        $this->assertDatabaseHas('webauthn_credentials', [
            'id' => $credential->id,
            'label' => 'Renamed Key',
        ]);

        $this->actingAs($user)
            ->delete(route('passkeys.credentials.destroy', ['credential' => $credential->id]))
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.credential_count', 0);

        $this->assertDatabaseMissing('webauthn_credentials', [
            'id' => $credential->id,
        ]);
        $this->assertDatabaseMissing('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'passkey',
        ]);
    }

    public function test_guest_can_not_access_passkey_foundation_routes(): void
    {
        $this->get('/auth/passkeys/status')
            ->assertRedirect('/login');

        $this->post('/auth/passkeys/register/options')
            ->assertRedirect('/login');

        $this->post('/auth/passkeys/register/verify')
            ->assertRedirect('/login');
    }
}
