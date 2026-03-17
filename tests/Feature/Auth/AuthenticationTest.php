<?php

namespace Tests\Feature\Auth;

use App\Enums\UserStatus;
use App\Models\AuthIdentity;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Socialite\Facades\Socialite;
use Mockery;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_can_request_remember_me_on_password_login()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
            'remember' => 'on',
        ]);

        $this->assertAuthenticatedAs($user->fresh());
        $response->assertRedirect(RouteServiceProvider::HOME);

        $rememberCookies = array_filter(
            $response->headers->getCookies(),
            static fn ($cookie) => str_starts_with($cookie->getName(), 'remember_')
        );

        $this->assertGreaterThan(0, count($rememberCookies));
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }

    public function test_frozen_users_can_not_authenticate_using_the_login_screen()
    {
        $user = User::factory()->create([
            'status' => UserStatus::Frozen,
        ]);

        $response = $this->from('/login')->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors(['email' => 'This account has been frozen.']);
        $this->assertGuest();
    }

    public function test_frozen_users_can_not_authenticate_via_social_login()
    {
        config([
            'services.google.client_id' => 'test-client-id',
            'services.google.client_secret' => 'test-client-secret',
            'services.google.redirect' => 'http://localhost/auth/google/callback',
        ]);

        $user = User::factory()->create([
            'email' => 'frozen-social@example.com',
            'status' => UserStatus::Frozen,
        ]);
        AuthIdentity::query()->create([
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-1',
            'provider_email' => $user->email,
            'avatar_url' => 'https://example.test/avatar.png',
            'last_used_at' => now()->subMinute(),
        ]);

        $provider = Mockery::mock();
        $socialUser = Mockery::mock();

        $provider->shouldReceive('user')->once()->andReturn($socialUser);
        $socialUser->shouldReceive('getId')->andReturn('google-user-1');
        $socialUser->shouldReceive('getEmail')->andReturn($user->email);
        $socialUser->shouldReceive('getName')->andReturn('Frozen Social');
        $socialUser->shouldReceive('getAvatar')->andReturn('https://example.test/avatar.png');

        Socialite::shouldReceive('driver')->with('google')->andReturn($provider);

        $response = $this->get('/auth/google/callback');

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors(['email' => 'This account has been frozen.']);
        $this->assertGuest();
    }

    public function test_social_login_uses_non_remember_session()
    {
        config([
            'services.google.client_id' => 'test-client-id',
            'services.google.client_secret' => 'test-client-secret',
            'services.google.redirect' => 'http://localhost/auth/google/callback',
        ]);

        $user = User::factory()->create([
            'email' => 'social-active@example.com',
        ]);
        AuthIdentity::query()->create([
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-2',
            'provider_email' => $user->email,
            'avatar_url' => 'https://example.test/avatar-old.png',
            'last_used_at' => now()->subMinute(),
        ]);

        $provider = Mockery::mock();
        $socialUser = Mockery::mock();

        $provider->shouldReceive('user')->once()->andReturn($socialUser);
        $socialUser->shouldReceive('getId')->andReturn('google-user-2');
        $socialUser->shouldReceive('getEmail')->andReturn($user->email);
        $socialUser->shouldReceive('getName')->andReturn('Active Social');
        $socialUser->shouldReceive('getAvatar')->andReturn('https://example.test/avatar-2.png');

        Socialite::shouldReceive('driver')->with('google')->andReturn($provider);

        $response = $this->get('/auth/google/callback');

        $response->assertRedirect(RouteServiceProvider::HOME);
        $this->assertAuthenticatedAs($user->fresh());
        $this->assertDatabaseHas('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-2',
        ]);

        $rememberCookies = array_filter(
            $response->headers->getCookies(),
            static fn ($cookie) => str_starts_with($cookie->getName(), 'remember_')
        );

        $this->assertCount(0, $rememberCookies);
    }

    public function test_social_login_rejects_existing_email_without_linked_identity()
    {
        config([
            'services.google.client_id' => 'test-client-id',
            'services.google.client_secret' => 'test-client-secret',
            'services.google.redirect' => 'http://localhost/auth/google/callback',
        ]);

        $user = User::factory()->create([
            'email' => 'existing-email@example.com',
        ]);

        $provider = Mockery::mock();
        $socialUser = Mockery::mock();

        $provider->shouldReceive('user')->once()->andReturn($socialUser);
        $socialUser->shouldReceive('getId')->andReturn('google-user-unlinked');
        $socialUser->shouldReceive('getEmail')->andReturn($user->email);
        $socialUser->shouldReceive('getName')->andReturn('Unlinked User');
        $socialUser->shouldReceive('getAvatar')->andReturn('https://example.test/avatar-unlinked.png');

        Socialite::shouldReceive('driver')->with('google')->andReturn($provider);

        $response = $this->get('/auth/google/callback');

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors([
            'email' => '该邮箱已存在，请先使用现有方式登录后再绑定第三方身份。',
        ]);
        $this->assertGuest();
        $this->assertDatabaseCount('users', 1);
    }

    public function test_social_login_prefers_existing_auth_identity_over_email_merge()
    {
        config([
            'services.google.client_id' => 'test-client-id',
            'services.google.client_secret' => 'test-client-secret',
            'services.google.redirect' => 'http://localhost/auth/google/callback',
        ]);

        $user = User::factory()->create([
            'email' => 'identity-owner@example.com',
        ]);

        AuthIdentity::query()->create([
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-3',
            'provider_email' => $user->email,
            'avatar_url' => 'https://example.test/old-avatar.png',
            'last_used_at' => now()->subDay(),
        ]);

        $provider = Mockery::mock();
        $socialUser = Mockery::mock();

        $provider->shouldReceive('user')->once()->andReturn($socialUser);
        $socialUser->shouldReceive('getId')->andReturn('google-user-3');
        $socialUser->shouldReceive('getEmail')->andReturn('changed-email@example.com');
        $socialUser->shouldReceive('getName')->andReturn('Identity Owner');
        $socialUser->shouldReceive('getAvatar')->andReturn('https://example.test/new-avatar.png');

        Socialite::shouldReceive('driver')->with('google')->andReturn($provider);

        $response = $this->get('/auth/google/callback');

        $response->assertRedirect(RouteServiceProvider::HOME);
        $this->assertAuthenticatedAs($user->fresh());
        $this->assertDatabaseCount('auth_identities', 1);
        $this->assertDatabaseHas('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-3',
            'provider_email' => 'changed-email@example.com',
        ]);
    }

    public function test_github_redirect_route_remains_available_when_configured()
    {
        config([
            'services.github.client_id' => 'github-client-id',
            'services.github.client_secret' => 'github-client-secret',
            'services.github.redirect' => 'http://localhost/auth/github/callback',
        ]);

        $provider = Mockery::mock();
        $provider->shouldReceive('redirect')
            ->once()
            ->andReturn(redirect()->away('https://github.com/login/oauth/authorize'));

        Socialite::shouldReceive('driver')->with('github')->andReturn($provider);

        $response = $this->get('/auth/github/redirect');

        $response->assertRedirect('https://github.com/login/oauth/authorize');
    }

    public function test_authenticated_user_can_start_social_link_flow_from_settings()
    {
        config([
            'services.google.client_id' => 'test-client-id',
            'services.google.client_secret' => 'test-client-secret',
            'services.google.redirect' => 'http://localhost/auth/google/callback',
        ]);

        $user = User::factory()->create();

        $provider = Mockery::mock();
        $provider->shouldReceive('redirect')
            ->once()
            ->andReturn(redirect()->away('https://accounts.google.com/o/oauth2/auth'));

        Socialite::shouldReceive('driver')->with('google')->andReturn($provider);

        $response = $this->actingAs($user)->get(route('oauth.link.redirect', ['provider' => 'google']));

        $response->assertRedirect('https://accounts.google.com/o/oauth2/auth');
        $this->assertSame('google', data_get(session('oauth.linking'), 'provider'));
        $this->assertSame($user->id, data_get(session('oauth.linking'), 'user_id'));
    }

    public function test_authenticated_user_can_link_google_identity_from_settings_callback()
    {
        config([
            'services.google.client_id' => 'test-client-id',
            'services.google.client_secret' => 'test-client-secret',
            'services.google.redirect' => 'http://localhost/auth/google/callback',
        ]);

        $user = User::factory()->create();

        $provider = Mockery::mock();
        $socialUser = Mockery::mock();

        $provider->shouldReceive('user')->once()->andReturn($socialUser);
        $socialUser->shouldReceive('getId')->andReturn('google-user-link-1');
        $socialUser->shouldReceive('getEmail')->andReturn($user->email);
        $socialUser->shouldReceive('getName')->andReturn('Linked User');
        $socialUser->shouldReceive('getAvatar')->andReturn('https://example.test/avatar-link-1.png');

        Socialite::shouldReceive('driver')->with('google')->andReturn($provider);

        $response = $this->actingAs($user)
            ->withSession([
                'oauth.linking' => [
                    'provider' => 'google',
                    'user_id' => $user->id,
                    'expires_at' => now()->addMinutes(5)->toDateTimeString(),
                ],
            ])
            ->get('/auth/google/callback');

        $response->assertRedirect(route('settings'));
        $response->assertSessionHas('settings_identity_notice.message', 'Google 已绑定到当前账户。');
        $this->assertDatabaseHas('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-link-1',
        ]);
        $this->assertFalse(session()->has('oauth.linking'));
    }

    public function test_authenticated_user_callback_without_pending_link_request_is_rejected_back_to_settings(): void
    {
        config([
            'services.google.client_id' => 'test-client-id',
            'services.google.client_secret' => 'test-client-secret',
            'services.google.redirect' => 'http://localhost/auth/google/callback',
        ]);

        $user = User::factory()->create();

        $provider = Mockery::mock();
        $socialUser = Mockery::mock();

        $provider->shouldReceive('user')->once()->andReturn($socialUser);
        $socialUser->shouldReceive('getId')->andReturn('google-user-no-link-intent');
        $socialUser->shouldReceive('getEmail')->andReturn($user->email);
        $socialUser->shouldReceive('getName')->andReturn('No Link Intent');
        $socialUser->shouldReceive('getAvatar')->andReturn('https://example.test/avatar-no-link-intent.png');

        Socialite::shouldReceive('driver')->with('google')->andReturn($provider);

        $response = $this->actingAs($user)->get('/auth/google/callback');

        $response->assertRedirect(route('settings'));
        $response->assertSessionHas('settings_identity_notice.message', '未找到待完成的第三方绑定请求。');
        $this->assertAuthenticatedAs($user->fresh());
        $this->assertDatabaseCount('auth_identities', 0);
    }

    public function test_authenticated_user_can_unlink_social_identity_when_other_login_method_exists()
    {
        $user = User::factory()->create([
            'provider' => 'google',
            'provider_id' => 'google-user-unlink-1',
        ]);

        AuthIdentity::query()->create([
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-unlink-1',
            'provider_email' => $user->email,
            'last_used_at' => now(),
        ]);

        $response = $this->actingAs($user)
            ->delete(route('oauth.link.destroy', ['provider' => 'google']));

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.provider', 'google');

        $this->assertDatabaseMissing('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'google',
        ]);
        $this->assertDatabaseHas('auth_identity_events', [
            'user_id' => $user->id,
            'provider' => 'google',
            'event_type' => 'social_unlinked',
            'status' => 'success',
        ]);

        $user->refresh();
        $this->assertNull($user->provider);
        $this->assertNull($user->provider_id);
    }

    public function test_authenticated_user_can_not_unlink_last_social_identity_without_other_login_method()
    {
        $user = User::factory()->create([
            'password' => '',
            'provider' => 'google',
            'provider_id' => 'google-user-unlink-2',
        ]);

        AuthIdentity::query()->create([
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-unlink-2',
            'provider_email' => $user->email,
            'last_used_at' => now(),
        ]);

        $response = $this->actingAs($user)
            ->delete(route('oauth.link.destroy', ['provider' => 'google']));

        $response
            ->assertOk()
            ->assertJsonPath('status', false)
            ->assertJsonPath('message', '请先设置密码、绑定其他第三方身份或登记 Passkey，再解绑最后一个第三方登录。');

        $this->assertDatabaseHas('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-unlink-2',
        ]);
        $this->assertDatabaseHas('auth_identity_events', [
            'user_id' => $user->id,
            'provider' => 'google',
            'event_type' => 'social_unlink_blocked',
            'status' => 'blocked',
        ]);
    }

    public function test_authenticated_user_can_not_unlink_last_social_identity_when_password_is_only_social_placeholder()
    {
        $user = User::factory()->create([
            'configs' => [
                User::CONFIG_PASSWORD_LOGIN_READY => false,
            ],
            'provider' => 'google',
            'provider_id' => 'google-user-unlink-3',
        ]);

        AuthIdentity::query()->create([
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-unlink-3',
            'provider_email' => $user->email,
            'last_used_at' => now(),
        ]);

        $response = $this->actingAs($user)
            ->delete(route('oauth.link.destroy', ['provider' => 'google']));

        $response
            ->assertOk()
            ->assertJsonPath('status', false)
            ->assertJsonPath('message', '请先设置密码、绑定其他第三方身份或登记 Passkey，再解绑最后一个第三方登录。');

        $this->assertDatabaseHas('auth_identities', [
            'user_id' => $user->id,
            'provider' => 'google',
            'provider_subject' => 'google-user-unlink-3',
        ]);
        $this->assertDatabaseHas('auth_identity_events', [
            'user_id' => $user->id,
            'provider' => 'google',
            'event_type' => 'social_unlink_blocked',
            'status' => 'blocked',
        ]);
    }
}
