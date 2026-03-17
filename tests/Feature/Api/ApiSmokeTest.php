<?php

namespace Tests\Feature\Api;

use App\Models\TeamMembership;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class ApiSmokeTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_api_strategies_endpoint_returns_data(): void
    {
        $response = $this->getJson('/api/v1/strategies');

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => ['strategies'],
            ]);
    }

    public function test_api_token_and_profile_flow_works(): void
    {
        $user = User::factory()->create([
            'email' => 'smoke@example.com',
        ]);

        $tokenResponse = $this->postJson('/api/v1/tokens', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $tokenResponse
            ->assertOk()
            ->assertJsonPath('status', true);

        $token = $tokenResponse->json('data.token');
        $this->assertNotEmpty($token);

        $this->withHeader('Authorization', 'Bearer '.$token)
            ->getJson('/api/v1/profile')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.email', 'smoke@example.com');
    }

    public function test_space_members_read_and_role_update_flow_works(): void
    {
        $owner = User::factory()->create();
        $member = User::factory()->create();

        $spaceMembership = $owner->teamMemberships()->firstOrFail();
        $spaceId = (int) $spaceMembership->team_space_id;

        TeamMembership::query()->create([
            'team_space_id' => $spaceId,
            'user_id' => $member->id,
            'role' => TeamMembership::ROLE_MEMBER,
            'permissions' => TeamMembership::rolePermissions(TeamMembership::ROLE_MEMBER),
        ]);

        $token = $owner->createToken('smoke', [
            'spaces:members:read',
            'spaces:members:update',
        ])->plainTextToken;

        $this->withHeader('Authorization', 'Bearer '.$token)
            ->getJson('/api/v1/spaces/'.$spaceId.'/members')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.space.id', $spaceId);

        $this->withHeader('Authorization', 'Bearer '.$token)
            ->putJson('/api/v1/spaces/'.$spaceId.'/members/'.$member->id.'/role', [
                'role' => TeamMembership::ROLE_ADMIN,
            ])
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.member.role', TeamMembership::ROLE_ADMIN);
    }
}
