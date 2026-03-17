<?php

namespace Tests\Feature\Intelligence;

use App\Jobs\AnalyzeImageIntelligenceJob;
use App\Models\Config;
use App\Models\Image;
use App\Models\Tag;
use App\Models\User;
use App\Enums\ConfigKey;
use App\Services\ImageIntelligence\ImageIntelligenceService;
use App\Services\ImageIntelligence\ImageIntelligenceTermProjectionService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class ImageIntelligenceWriteSideTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_image_intelligence_service_creates_structured_record_and_syncs_legacy_ocr(): void
    {
        $user = User::factory()->create();
        $strategyId = (int) DB::table('strategies')->value('id');
        $key = 'intel'.substr(sha1((string) microtime(true)), 0, 20);

        DB::table('images')->insert([
            'user_id' => $user->id,
            'album_id' => null,
            'group_id' => $user->group_id,
            'strategy_id' => $strategyId,
            'key' => $key,
            'path' => '',
            'name' => $key.'.png',
            'origin_name' => 'intelligence-test.png',
            'alias_name' => 'hero-banner',
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
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /** @var Image $image */
        $image = Image::query()->where('key', $key)->firstOrFail();
        $tagA = Tag::query()->create(['name' => 'banner']);
        $tagB = Tag::query()->create(['name' => 'marketing']);
        $image->tags()->sync([$tagA->id, $tagB->id]);

        $record = app(ImageIntelligenceService::class)->analyzeAndStore((int) $image->id);

        $this->assertNotNull($record);
        $this->assertDatabaseHas('image_intelligence_records', [
            'image_id' => $image->id,
            'status' => 'ready',
            'source' => 'metadata_placeholder',
        ]);
        $this->assertDatabaseHas('image_intelligence_terms', [
            'image_id' => $image->id,
            'normalized_term' => 'banner',
            'source' => 'label',
        ]);
        $this->assertDatabaseHas('image_intelligence_terms', [
            'image_id' => $image->id,
            'normalized_term' => 'marketing',
            'source' => 'label',
        ]);

        $image->refresh();
        $record->refresh();

        $this->assertContains('banner', $record->labels ?? []);
        $this->assertContains('marketing', $record->labels ?? []);
        $this->assertNotEmpty($record->caption);
        $this->assertNotEmpty($record->summary);
        $this->assertNotEmpty($record->prompt_hint);
        $this->assertStringContainsString('ocr-placeholder', (string) $record->ocr_text);
        $this->assertSame($record->ocr_text, $image->ocr_text);
        $this->assertSame(true, data_get($record->metadata, 'fallback'));
        $this->assertSame('provider_not_ready', data_get($record->metadata, 'fallback_reason'));
    }

    public function test_term_projection_sync_does_not_clear_existing_terms_for_non_projectable_status(): void
    {
        $user = User::factory()->create();
        $strategyId = (int) DB::table('strategies')->value('id');
        $key = 'hold'.substr(sha1((string) microtime(true)), 0, 21);

        DB::table('images')->insert([
            'user_id' => $user->id,
            'album_id' => null,
            'group_id' => $user->group_id,
            'strategy_id' => $strategyId,
            'key' => $key,
            'path' => '',
            'name' => $key.'.png',
            'origin_name' => 'term-projection-stability.png',
            'alias_name' => '',
            'size' => 12,
            'mimetype' => 'image/png',
            'extension' => 'png',
            'md5' => md5($key),
            'sha1' => sha1($key),
            'width' => 512,
            'height' => 512,
            'permission' => 0,
            'is_unhealthy' => false,
            'uploaded_ip' => '127.0.0.1',
            'ocr_text' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /** @var Image $image */
        $image = Image::query()->where('key', $key)->firstOrFail();

        DB::table('image_intelligence_terms')->insert([
            'image_id' => $image->id,
            'user_id' => $user->id,
            'source' => 'label',
            'term' => 'stable term',
            'normalized_term' => 'stable term',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('image_intelligence_records')->insert([
            'image_id' => $image->id,
            'user_id' => $user->id,
            'status' => 'processing',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'caption' => 'reanalysis in progress',
            'summary' => 'should not clear stable projection',
            'prompt_hint' => 'processing',
            'ocr_text' => '',
            'labels' => json_encode(['new term'], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode(['next keyword'], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode(['generated_by' => 'test'], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        app(ImageIntelligenceTermProjectionService::class)->syncForImage(
            $image,
            \App\Models\ImageIntelligenceRecord::query()->where('image_id', $image->id)->firstOrFail()
        );

        $this->assertDatabaseHas('image_intelligence_terms', [
            'image_id' => $image->id,
            'normalized_term' => 'stable term',
        ]);
        $this->assertDatabaseMissing('image_intelligence_terms', [
            'image_id' => $image->id,
            'normalized_term' => 'new term',
        ]);
        $this->assertDatabaseMissing('image_intelligence_terms', [
            'image_id' => $image->id,
            'normalized_term' => 'next keyword',
        ]);
    }

    public function test_dispatch_skips_duplicate_queueing_for_same_image_while_lock_is_active(): void
    {
        Queue::fake();

        $user = User::factory()->create();
        $strategyId = (int) DB::table('strategies')->value('id');
        $key = 'lock'.substr(sha1((string) microtime(true)), 0, 21);

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
            'width' => 1024,
            'height' => 768,
            'permission' => 0,
            'is_unhealthy' => false,
            'uploaded_ip' => '127.0.0.1',
            'ocr_text' => null,
            'created_at' => now()->subHour(),
            'updated_at' => now()->subHour(),
        ]);

        /** @var Image $image */
        $image = Image::query()->where('key', $key)->firstOrFail();
        $service = app(ImageIntelligenceService::class);

        $this->assertTrue($service->dispatch($image));
        $this->assertFalse($service->dispatch($image->fresh()));

        Queue::assertPushed(AnalyzeImageIntelligenceJob::class, 1);
        $this->assertDatabaseHas('image_intelligence_records', [
            'image_id' => $image->id,
            'status' => 'pending',
        ]);
    }

    public function test_image_intelligence_service_prefers_provider_backed_analysis_when_ai_provider_is_ready(): void
    {
        Http::fake([
            'https://api.openai.com/v1/chat/completions' => Http::response([
                'choices' => [[
                    'message' => [
                        'content' => json_encode([
                            'caption' => '一只橙色猫坐在窗边。',
                            'summary' => '画面主体是一只橙色猫，窗边光线柔和，整体氛围安静温暖。',
                            'prompt_hint' => '橙色猫，窗边，柔和自然光，安静室内场景，温暖色调，写实摄影风格。',
                            'labels' => ['橙猫', '室内', '窗边'],
                            'keywords' => ['猫', '窗边', '自然光', '室内', '温暖色调'],
                            'ocr_text' => '',
                        ], JSON_UNESCAPED_UNICODE),
                    ],
                ]],
            ]),
        ]);

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

        $user = User::factory()->create();
        $strategyId = (int) DB::table('strategies')->value('id');
        $key = 'provider'.substr(sha1((string) microtime(true)), 0, 17);

        DB::table('images')->insert([
            'user_id' => $user->id,
            'album_id' => null,
            'group_id' => $user->group_id,
            'strategy_id' => $strategyId,
            'key' => $key,
            'path' => '',
            'name' => $key.'.png',
            'origin_name' => 'cat-window.png',
            'alias_name' => 'orange-cat',
            'size' => 12,
            'mimetype' => 'image/png',
            'extension' => 'png',
            'md5' => md5($key),
            'sha1' => sha1($key),
            'width' => 1440,
            'height' => 960,
            'permission' => 0,
            'is_unhealthy' => false,
            'uploaded_ip' => '127.0.0.1',
            'ocr_text' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /** @var Image $image */
        $image = Image::query()->where('key', $key)->firstOrFail();
        $image->filesystem()->write(
            $image->pathname,
            (string) base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAusB9Wn0T6kAAAAASUVORK5CYII=')
        );

        $record = app(ImageIntelligenceService::class)->analyzeAndStore((int) $image->id);

        $this->assertNotNull($record);
        $this->assertSame('ai_provider:gpt', $record->source);
        $this->assertSame(2, (int) $record->source_version);
        $this->assertSame(false, data_get($record->metadata, 'fallback'));
        $this->assertSame('gpt', data_get($record->metadata, 'provider'));
        $this->assertSame('gpt-4.1-mini', data_get($record->metadata, 'model'));
        $this->assertContains('橙猫', $record->labels ?? []);
        $this->assertContains('窗边', $record->keywords ?? []);
        $this->assertDatabaseHas('image_intelligence_terms', [
            'image_id' => $image->id,
            'normalized_term' => '橙猫',
        ]);
    }
}
