<?php

namespace Tests\Feature\Intelligence;

use App\Jobs\AnalyzeImageIntelligenceJob;
use App\Models\User;
use App\Services\ImageIntelligence\ImageIntelligenceBackfillService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class ImageIntelligenceBackfillCommandTest extends TestCase
{
    use RefreshDatabase;

    public function test_backfill_command_dispatches_missing_and_incomplete_images_only(): void
    {
        Queue::fake();

        $user = User::factory()->create();
        $missingId = $this->insertImage($user, 'backfill-missing', now()->subHours(2));
        $failedId = $this->insertImage($user, 'backfill-failed', now()->subHours(2));
        $readyId = $this->insertImage($user, 'backfill-ready', now()->subHours(2));
        $recentId = $this->insertImage($user, 'backfill-recent', now()->subMinutes(5));

        DB::table('image_intelligence_records')->insert([
            [
                'image_id' => $failedId,
                'user_id' => $user->id,
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
            ],
            [
                'image_id' => $readyId,
                'user_id' => $user->id,
                'status' => 'ready',
                'source' => 'metadata_placeholder',
                'source_version' => 1,
                'ocr_text' => 'ready text',
                'caption' => 'ready caption',
                'summary' => 'ready summary',
                'prompt_hint' => 'ready prompt',
                'labels' => json_encode(['ready'], JSON_UNESCAPED_UNICODE),
                'keywords' => json_encode(['ready'], JSON_UNESCAPED_UNICODE),
                'metadata' => json_encode(['generated_by' => 'test']),
                'analyzed_at' => now()->subHours(2),
                'last_error' => null,
                'created_at' => now()->subHours(2),
                'updated_at' => now()->subHours(2),
            ],
        ]);

        $this->artisan('images:backfill-intelligence', [
            '--dispatch' => true,
            '--chunk' => 2,
            '--limit' => 10,
            '--older-than-minutes' => 30,
        ])->assertExitCode(0);

        $runId = (int) DB::table('image_intelligence_runs')->value('id');
        $this->assertGreaterThan(0, $runId);

        Queue::assertPushed(AnalyzeImageIntelligenceJob::class, 2);
        Queue::assertPushed(AnalyzeImageIntelligenceJob::class, fn (AnalyzeImageIntelligenceJob $job) => $job->imageId === $missingId && $job->runId === $runId);
        Queue::assertPushed(AnalyzeImageIntelligenceJob::class, fn (AnalyzeImageIntelligenceJob $job) => $job->imageId === $failedId && $job->runId === $runId);
        Queue::assertNotPushed(AnalyzeImageIntelligenceJob::class, fn (AnalyzeImageIntelligenceJob $job) => $job->imageId === $readyId);
        Queue::assertNotPushed(AnalyzeImageIntelligenceJob::class, fn (AnalyzeImageIntelligenceJob $job) => $job->imageId === $recentId);

        $this->assertDatabaseHas('image_intelligence_records', [
            'image_id' => $missingId,
            'status' => 'pending',
        ]);
        $this->assertDatabaseHas('image_intelligence_records', [
            'image_id' => $failedId,
            'status' => 'pending',
        ]);
        $this->assertDatabaseHas('image_intelligence_runs', [
            'id' => $runId,
            'mode' => 'dispatch',
            'trigger_source' => 'artisan',
            'status' => 'processing',
            'matched' => 2,
            'processed' => 2,
            'dispatched' => 2,
            'skipped' => 0,
        ]);
    }

    public function test_backfill_service_missing_only_dry_run_only_counts_missing_records(): void
    {
        Queue::fake();

        $user = User::factory()->create();
        $missingId = $this->insertImage($user, 'dry-missing', now()->subHours(3));
        $failedId = $this->insertImage($user, 'dry-failed', now()->subHours(3));

        DB::table('image_intelligence_records')->insert([
            'image_id' => $failedId,
            'user_id' => $user->id,
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
            'created_at' => now()->subHours(3),
            'updated_at' => now()->subHours(3),
        ]);

        $result = app(ImageIntelligenceBackfillService::class)->run([
            'missing_only' => true,
            'older_than_minutes' => 30,
            'sample_limit' => 5,
        ]);

        $this->assertSame('dry-run', $result['mode']);
        $this->assertSame(1, $result['matched']);
        $this->assertSame(1, $result['processed']);
        $this->assertSame(1, $result['skipped']);
        $this->assertSame($missingId, $result['last_image_id']);
        $this->assertSame($missingId, (int) ($result['samples'][0]['image_id'] ?? 0));
        $this->assertSame('missing_record', (string) ($result['samples'][0]['reason'] ?? ''));

        Queue::assertNothingPushed();
    }

    public function test_backfill_command_retry_run_reuses_stored_normalized_options(): void
    {
        Queue::fake();

        $user = User::factory()->create();
        $missingId = $this->insertImage($user, 'retry-missing', now()->subHours(4));
        $failedId = $this->insertImage($user, 'retry-failed', now()->subHours(4));

        DB::table('image_intelligence_records')->insert([
            'image_id' => $failedId,
            'user_id' => $user->id,
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
            'created_at' => now()->subHours(4),
            'updated_at' => now()->subHours(4),
        ]);

        $retryRunId = (int) DB::table('image_intelligence_runs')->insertGetId([
            'mode' => 'dispatch',
            'status' => 'completed',
            'initiator_user_id' => null,
            'trigger_source' => 'artisan',
            'options' => json_encode([
                'image_id' => 0,
                'from_id' => 0,
                'chunk' => 25,
                'limit' => 25,
                'older_than_minutes' => 30,
                'missing_only' => true,
                'force' => false,
                'sample_limit' => 10,
                'retry_run_id' => 0,
            ], JSON_UNESCAPED_UNICODE),
            'matched' => 1,
            'processed' => 1,
            'dispatched' => 1,
            'skipped' => 0,
            'succeeded' => 1,
            'failed' => 0,
            'last_image_id' => $missingId,
            'created_at' => now()->subHour(),
            'updated_at' => now()->subHour(),
            'started_at' => now()->subHour(),
            'finished_at' => now()->subHour(),
        ]);

        $this->artisan('images:backfill-intelligence', [
            '--dispatch' => true,
            '--retry-run-id' => $retryRunId,
        ])->assertExitCode(0);

        Queue::assertPushed(AnalyzeImageIntelligenceJob::class, 1);
        Queue::assertPushed(AnalyzeImageIntelligenceJob::class, fn (AnalyzeImageIntelligenceJob $job) => $job->imageId === $missingId);
        Queue::assertNotPushed(AnalyzeImageIntelligenceJob::class, fn (AnalyzeImageIntelligenceJob $job) => $job->imageId === $failedId);
        $this->assertDatabaseHas('image_intelligence_runs', [
            'trigger_source' => 'artisan',
            'retry_of_run_id' => $retryRunId,
            'matched' => 1,
            'processed' => 1,
            'dispatched' => 1,
            'skipped' => 0,
        ]);
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
