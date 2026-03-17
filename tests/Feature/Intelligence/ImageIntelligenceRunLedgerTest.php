<?php

namespace Tests\Feature\Intelligence;

use App\Enums\ConfigKey;
use App\Jobs\AnalyzeImageIntelligenceJob;
use App\Models\Config;
use App\Models\Image;
use App\Models\User;
use App\Services\ImageIntelligence\ImageIntelligenceRunLedgerService;
use App\Services\ImageIntelligence\ImageIntelligenceService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ImageIntelligenceRunLedgerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_successful_analysis_job_marks_run_completed(): void
    {
        Http::fake([
            'https://api.openai.com/v1/chat/completions' => Http::response([
                'choices' => [[
                    'message' => [
                        'content' => json_encode([
                            'caption' => '一只坐在窗边的猫。',
                            'summary' => '主体是一只猫，环境为室内窗边，光线柔和。',
                            'prompt_hint' => '猫，窗边，柔和自然光，室内安静场景，写实摄影风格。',
                            'labels' => ['猫', '窗边'],
                            'keywords' => ['猫', '窗边', '自然光'],
                            'ocr_text' => '',
                        ], JSON_UNESCAPED_UNICODE),
                    ],
                ]],
            ], 200),
        ]);

        $this->seedProviderConfig();

        $user = User::factory()->create();
        $image = $this->createImage($user, 'ledger-success');
        $image->filesystem()->write(
            $image->pathname,
            (string) base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAusB9Wn0T6kAAAAASUVORK5CYII=')
        );

        $run = app(ImageIntelligenceRunLedgerService::class)->startDispatchRun([
            'dispatch' => true,
            'limit' => 1,
            'chunk' => 1,
            'older_than_minutes' => 30,
        ], [
            'trigger_source' => 'artisan',
        ]);
        $run = app(ImageIntelligenceRunLedgerService::class)->finalizeDispatchRun($run->id, [
            'matched' => 1,
            'processed' => 1,
            'dispatched' => 1,
            'skipped' => 0,
            'last_image_id' => $image->id,
        ]);

        $job = new AnalyzeImageIntelligenceJob((int) $image->id, $run?->id);
        $job->handle(
            app(ImageIntelligenceService::class),
            app(ImageIntelligenceRunLedgerService::class)
        );

        $run?->refresh();
        $this->assertSame('completed', $run?->status);
        $this->assertSame(1, (int) $run?->succeeded);
        $this->assertSame(0, (int) $run?->failed);
        $this->assertNotNull($run?->finished_at);
        $this->assertDatabaseHas('image_intelligence_records', [
            'image_id' => $image->id,
            'source' => 'ai_provider:gpt',
            'status' => 'ready',
        ]);
    }

    public function test_failed_analysis_job_marks_run_failed_after_job_failure_hook(): void
    {
        $run = app(ImageIntelligenceRunLedgerService::class)->startDispatchRun([
            'dispatch' => true,
            'limit' => 1,
            'chunk' => 1,
            'older_than_minutes' => 30,
        ], [
            'trigger_source' => 'artisan',
        ]);
        $run = app(ImageIntelligenceRunLedgerService::class)->finalizeDispatchRun($run->id, [
            'matched' => 1,
            'processed' => 1,
            'dispatched' => 1,
            'skipped' => 0,
            'last_image_id' => 999999,
        ]);

        $job = new AnalyzeImageIntelligenceJob(999999, $run?->id);

        try {
            $job->handle(
                app(ImageIntelligenceService::class),
                app(ImageIntelligenceRunLedgerService::class)
            );
            $this->fail('Expected the job to throw for a missing image.');
        } catch (\RuntimeException $e) {
            $job->failed($e);
        }

        $run?->refresh();
        $this->assertSame('failed', $run?->status);
        $this->assertSame(0, (int) $run?->succeeded);
        $this->assertSame(1, (int) $run?->failed);
        $this->assertNotNull($run?->finished_at);
        $this->assertStringContainsString('图片不存在', (string) $run?->error_message);
    }

    private function seedProviderConfig(): void
    {
        $now = now()->format('Y-m-d H:i:s');

        Config::query()->upsert([
            [
                'name' => ConfigKey::AiProvider,
                'value' => 'gpt',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => ConfigKey::AiProviderSettings,
                'value' => json_encode([
                    'gpt' => [
                        'label' => 'OpenAI GPT',
                        'base_url' => 'https://api.openai.com/v1',
                        'api_key' => 'test-openai-key',
                        'default_model' => 'gpt-4.1-mini',
                        'models' => ['gpt-4.1-mini'],
                        'remote_models' => ['gpt-4.1-mini'],
                        'remote_models_synced_at' => $now,
                    ],
                ], JSON_UNESCAPED_UNICODE),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ], ['name'], ['value', 'updated_at']);

        Cache::forget('configs');
    }

    private function createImage(User $user, string $key): Image
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
            'alias_name' => 'ledger-image',
            'size' => 12,
            'mimetype' => 'image/png',
            'extension' => 'png',
            'md5' => md5($key),
            'sha1' => sha1($key),
            'width' => 1024,
            'height' => 768,
            'permission' => 0,
            'is_unhealthy' => false,
            'uploaded_ip' => '127.0.0.1',
            'ocr_text' => null,
            'created_at' => now()->subHours(2),
            'updated_at' => now()->subHours(2),
        ]);

        return Image::query()->where('key', $key)->firstOrFail();
    }
}
