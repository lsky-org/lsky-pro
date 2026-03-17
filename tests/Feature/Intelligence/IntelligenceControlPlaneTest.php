<?php

namespace Tests\Feature\Intelligence;

use App\Jobs\AnalyzeImageIntelligenceJob;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class IntelligenceControlPlaneTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_admin_can_preview_and_dispatch_intelligence_backfill_via_control_plane_api(): void
    {
        Queue::fake();

        $admin = User::factory()->create([
            'is_adminer' => true,
        ]);
        $owner = User::factory()->create();

        $missingId = $this->insertImage($owner, 'icp-missing', now()->subHours(2));
        $failedId = $this->insertImage($owner, 'icp-failed', now()->subHours(2));
        $this->insertImage($owner, 'icp-recent', now()->subMinutes(5));

        DB::table('image_intelligence_records')->insert([
            'image_id' => $failedId,
            'user_id' => $owner->id,
            'status' => 'failed',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'ocr_text' => null,
            'caption' => null,
            'summary' => null,
            'prompt_hint' => null,
            'labels' => null,
            'keywords' => null,
            'metadata' => json_encode(['generated_by' => 'test']),
            'analyzed_at' => null,
            'last_error' => 'temporary error',
            'created_at' => now()->subHours(2),
            'updated_at' => now()->subHours(2),
        ]);

        $this->actingAs($admin)
            ->getJson('/advanced-api/intelligence/status')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.intelligence.has_frontend_backfill_entry', true)
            ->assertJsonPath('data.intelligence.control_plane.images_total', 3)
            ->assertJsonPath('data.intelligence.control_plane.missing_count', 2)
            ->assertJsonPath('data.intelligence.control_plane.pending_count', 1)
            ->assertJsonPath('data.intelligence.control_plane.default_options.limit', 25)
            ->assertJsonPath('data.intelligence.control_plane.latest_run', null);

        $payload = [
            'limit' => 10,
            'chunk' => 10,
            'older_than_minutes' => 30,
            'sample_limit' => 5,
        ];

        $this->actingAs($admin)
            ->postJson('/advanced-api/intelligence/backfill-preview', $payload)
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.result.mode', 'dry-run')
            ->assertJsonPath('data.result.matched', 2)
            ->assertJsonPath('data.result.processed', 2)
            ->assertJsonPath('data.result.dispatched', 0)
            ->assertJsonPath('data.result.samples.0.image_id', $missingId);

        $response = $this->actingAs($admin)
            ->postJson('/advanced-api/intelligence/backfill-dispatch', $payload)
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.result.mode', 'dispatch')
            ->assertJsonPath('data.result.dispatched', 2)
            ->assertJsonPath('data.result.run.trigger_source', 'web')
            ->assertJsonPath('data.result.run.initiator_user_id', $admin->id)
            ->assertJsonPath('data.result.run.status', 'processing')
            ->assertJsonPath('data.intelligence.control_plane.latest_run.status', 'processing')
            ->assertJsonPath('data.intelligence.control_plane.pending_count', 2);

        $runId = (int) data_get($response->json(), 'data.result.run.run_id', 0);
        $this->assertGreaterThan(0, $runId);
        $response->assertJsonPath('data.intelligence.control_plane.latest_run.run_id', $runId);

        Queue::assertPushed(AnalyzeImageIntelligenceJob::class, 2);
        Queue::assertPushed(AnalyzeImageIntelligenceJob::class, fn (AnalyzeImageIntelligenceJob $job) => $job->imageId === $missingId && $job->runId === $runId);
        Queue::assertPushed(AnalyzeImageIntelligenceJob::class, fn (AnalyzeImageIntelligenceJob $job) => $job->imageId === $failedId && $job->runId === $runId);
        $this->assertDatabaseHas('image_intelligence_runs', [
            'id' => $runId,
            'mode' => 'dispatch',
            'initiator_user_id' => $admin->id,
            'trigger_source' => 'web',
            'status' => 'processing',
            'matched' => 2,
            'processed' => 2,
            'dispatched' => 2,
            'skipped' => 0,
        ]);
    }

    public function test_non_admin_cannot_preview_or_dispatch_intelligence_backfill(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->postJson('/advanced-api/intelligence/backfill-preview', [])
            ->assertOk()
            ->assertJsonPath('status', false)
            ->assertJsonPath('message', '仅管理员可预览回填任务');

        $this->actingAs($user)
            ->postJson('/advanced-api/intelligence/backfill-dispatch', [])
            ->assertOk()
            ->assertJsonPath('status', false)
            ->assertJsonPath('message', '仅管理员可执行回填任务');
    }

    public function test_admin_can_retry_previous_run_with_stored_normalized_options(): void
    {
        Queue::fake();

        $admin = User::factory()->create([
            'is_adminer' => true,
        ]);
        $owner = User::factory()->create();

        $firstImageId = $this->insertImage($owner, 'icp-retry-a', now()->subHours(2));
        $this->insertImage($owner, 'icp-retry-b', now()->subHours(2));

        $firstResponse = $this->actingAs($admin)
            ->postJson('/advanced-api/intelligence/backfill-dispatch', [
                'limit' => 1,
                'chunk' => 10,
                'older_than_minutes' => 30,
                'sample_limit' => 5,
            ])
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.result.processed', 1)
            ->assertJsonPath('data.result.dispatched', 1);

        $firstRunId = (int) data_get($firstResponse->json(), 'data.result.run.run_id', 0);
        $this->assertGreaterThan(0, $firstRunId);

        app(\App\Services\ImageIntelligence\ImageIntelligenceService::class)->releaseDispatchLock($firstImageId);

        $retryResponse = $this->actingAs($admin)
            ->postJson('/advanced-api/intelligence/backfill-dispatch', [
                'retry_run_id' => $firstRunId,
                'limit' => 10,
                'chunk' => 10,
                'older_than_minutes' => 30,
                'sample_limit' => 5,
            ])
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.result.processed', 1)
            ->assertJsonPath('data.result.run.retry_of_run_id', $firstRunId);

        $retryRunId = (int) data_get($retryResponse->json(), 'data.result.run.run_id', 0);
        $this->assertGreaterThan(0, $retryRunId);

        $this->assertDatabaseHas('image_intelligence_runs', [
            'id' => $retryRunId,
            'retry_of_run_id' => $firstRunId,
            'matched' => 1,
            'processed' => 1,
            'dispatched' => 1,
        ]);
        $this->assertSame(1, (int) DB::table('image_intelligence_runs')->where('id', $retryRunId)->value('options->limit'));
    }

    private function insertImage(User $user, string $key, \Illuminate\Support\Carbon $createdAt): int
    {
        $strategyId = (int) DB::table('strategies')->value('id');

        DB::table('images')->insert([
            'user_id' => $user->id,
            'album_id' => null,
            'group_id' => $user->group_id,
            'strategy_id' => $strategyId,
            'key' => $key,
            'path' => '',
            'name' => $key.'.png',
            'origin_name' => $key.'.png',
            'alias_name' => '',
            'size' => 12,
            'mimetype' => 'image/png',
            'extension' => 'png',
            'md5' => md5($key),
            'sha1' => sha1($key),
            'width' => 1280,
            'height' => 720,
            'permission' => 0,
            'is_unhealthy' => false,
            'uploaded_ip' => '127.0.0.1',
            'ocr_text' => null,
            'created_at' => $createdAt,
            'updated_at' => $createdAt,
        ]);

        return (int) DB::table('images')->where('key', $key)->value('id');
    }
}
