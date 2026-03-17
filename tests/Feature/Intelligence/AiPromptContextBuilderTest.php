<?php

namespace Tests\Feature\Intelligence;

use App\Models\Image;
use App\Models\User;
use App\Services\ImageIntelligence\ImagePromptContextBuilder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AiPromptContextBuilderTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Cache::forget('configs');
    }

    public function test_prompt_context_prefers_intelligence_record_but_keeps_legacy_fields(): void
    {
        $user = User::factory()->create();
        $imageId = $this->insertImage($user, [
            'key' => 'prompt-intelligence-case',
            'origin_name' => 'legacy-banner.png',
            'alias_name' => 'landing-banner.png',
            'ocr_text' => 'legacy OCR fallback',
            'width' => 1600,
            'height' => 900,
        ]);

        $this->insertIntelligenceRecord($imageId, $user->id, [
            'status' => 'ready',
            'caption' => '智能生成的主视觉描述',
            'summary' => '',
            'prompt_hint' => '突出产品主体与冷色氛围。',
            'ocr_text' => '',
            'labels' => ['hero', 'banner'],
            'keywords' => ['campaign', 'landing'],
            'metadata' => json_encode([
                'fallback' => true,
                'fallback_reason' => 'provider_not_ready',
            ], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
        ]);

        $image = Image::query()
            ->with(['tags:id,name', 'intelligenceRecord'])
            ->findOrFail($imageId);

        $context = app(ImagePromptContextBuilder::class)->build($image);

        $this->assertSame('智能生成的主视觉描述', $context['caption']);
        $this->assertSame(['hero', 'banner'], $context['labels']);
        $this->assertSame(['campaign', 'landing'], $context['keywords']);
        $this->assertSame('ready', $context['analysis_status']);
        $this->assertSame('metadata_placeholder', $context['analysis_source']);
        $this->assertSame('placeholder', $context['analysis_mode']);
        $this->assertSame(true, $context['analysis_fallback']);
        $this->assertSame('provider_not_ready', $context['analysis_fallback_reason']);
        $this->assertSame('intelligence+legacy', $context['context_source']);
        $this->assertSame('landscape', $context['orientation']);
        $this->assertSame('横图', $context['orientation_label']);
        $this->assertStringContainsString('占位/回退内容', (string) $context['analysis_hint']);
        $this->assertStringContainsString('landing-banner.png', (string) $context['summary']);
        $this->assertStringContainsString('legacy OCR fallback', (string) $context['ocr_text']);
    }

    public function test_prompt_context_exposes_provider_backed_intelligence_metadata(): void
    {
        $user = User::factory()->create();
        $imageId = $this->insertImage($user, [
            'key' => 'prompt-provider-case',
            'origin_name' => 'cat-window.png',
            'alias_name' => 'orange-cat.png',
            'ocr_text' => '',
            'width' => 1440,
            'height' => 960,
        ]);

        $this->insertIntelligenceRecord($imageId, $user->id, [
            'status' => 'ready',
            'source' => 'ai_provider:gpt',
            'source_version' => 2,
            'caption' => '一只橙色猫坐在窗边。',
            'summary' => '光线柔和，室内安静。',
            'prompt_hint' => '橙色猫，窗边，自然光，写实摄影。',
            'ocr_text' => '',
            'labels' => ['橙猫', '窗边'],
            'keywords' => ['猫', '自然光'],
            'metadata' => json_encode([
                'provider' => 'gpt',
                'model' => 'gpt-4.1-mini',
                'fallback' => false,
            ], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
        ]);

        $image = Image::query()
            ->with(['tags:id,name', 'intelligenceRecord'])
            ->findOrFail($imageId);

        $context = app(ImagePromptContextBuilder::class)->build($image);

        $this->assertSame('ai_provider:gpt', $context['analysis_source']);
        $this->assertSame('provider_backed', $context['analysis_mode']);
        $this->assertSame(false, $context['analysis_fallback']);
        $this->assertSame('gpt', $context['analysis_provider']);
        $this->assertSame('gpt-4.1-mini', $context['analysis_model']);
        $this->assertSame(2, $context['analysis_source_version']);
        $this->assertSame('一只橙色猫坐在窗边。', $context['caption']);
    }

    public function test_prompt_context_uses_legacy_metadata_when_intelligence_record_is_missing(): void
    {
        $user = User::factory()->create();
        $imageId = $this->insertImage($user, [
            'key' => 'prompt-legacy-case',
            'origin_name' => 'invoice-scan.png',
            'alias_name' => 'finance-invoice.png',
            'ocr_text' => 'invoice 2026 ACME total due',
            'width' => 1200,
            'height' => 800,
        ]);

        $image = Image::query()
            ->with('tags:id,name')
            ->findOrFail($imageId);

        $context = app(ImagePromptContextBuilder::class)->build($image);

        $this->assertSame('legacy', $context['analysis_source']);
        $this->assertSame('legacy', $context['analysis_mode']);
        $this->assertSame('missing', $context['analysis_status']);
        $this->assertSame(false, $context['analysis_fallback']);
        $this->assertSame('legacy', $context['context_source']);
        $this->assertSame('landscape', $context['orientation']);
        $this->assertSame('横图', $context['orientation_label']);
        $this->assertStringContainsString('未找到 intelligence 记录', (string) $context['analysis_hint']);
        $this->assertStringContainsString('方向：横图', (string) $context['prompt_hint']);
        $this->assertStringContainsString('finance-invoice.png', (string) $context['caption']);
        $this->assertStringContainsString('invoice 2026 ACME total due', (string) $context['prompt_hint']);
        $this->assertStringContainsString('invoice 2026 ACME total due', (string) $context['summary']);
    }

    public function test_prompt_context_marks_processing_state_and_portrait_orientation(): void
    {
        $user = User::factory()->create();
        $imageId = $this->insertImage($user, [
            'key' => 'prompt-processing-case',
            'origin_name' => 'portrait-editorial.png',
            'alias_name' => 'portrait-editorial-final.png',
            'ocr_text' => 'legacy portrait note',
            'width' => 720,
            'height' => 1280,
        ]);

        $this->insertIntelligenceRecord($imageId, $user->id, [
            'status' => 'processing',
            'caption' => '',
            'summary' => '',
            'prompt_hint' => '保留人物主体和纵向构图节奏。',
            'ocr_text' => '',
            'labels' => [],
            'keywords' => [],
            'analyzed_at' => null,
        ]);

        $image = Image::query()
            ->with(['tags:id,name', 'intelligenceRecord'])
            ->findOrFail($imageId);

        $context = app(ImagePromptContextBuilder::class)->build($image);

        $this->assertSame('processing', $context['analysis_status']);
        $this->assertSame('legacy+partial_intelligence', $context['context_source']);
        $this->assertSame('portrait', $context['orientation']);
        $this->assertSame('竖图', $context['orientation_label']);
        $this->assertStringContainsString('处理中', (string) $context['analysis_hint']);
        $this->assertStringContainsString('已写入的 intelligence 片段', (string) $context['analysis_hint']);
        $this->assertSame('保留人物主体和纵向构图节奏。', $context['prompt_hint']);
    }

    public function test_prompt_context_marks_failed_state_and_square_orientation(): void
    {
        $user = User::factory()->create();
        $imageId = $this->insertImage($user, [
            'key' => 'prompt-failed-case',
            'origin_name' => 'avatar-square.png',
            'alias_name' => 'avatar-square-final.png',
            'ocr_text' => 'square fallback note',
            'width' => 1080,
            'height' => 1080,
        ]);

        $this->insertIntelligenceRecord($imageId, $user->id, [
            'status' => 'failed',
            'caption' => '',
            'summary' => '',
            'prompt_hint' => '',
            'ocr_text' => '',
            'labels' => [],
            'keywords' => [],
            'analyzed_at' => null,
        ]);

        $image = Image::query()
            ->with(['tags:id,name', 'intelligenceRecord'])
            ->findOrFail($imageId);

        $context = app(ImagePromptContextBuilder::class)->build($image);

        $this->assertSame('failed', $context['analysis_status']);
        $this->assertSame('legacy_fallback', $context['context_source']);
        $this->assertSame('square', $context['orientation']);
        $this->assertSame('方图', $context['orientation_label']);
        $this->assertStringContainsString('生成失败', (string) $context['analysis_hint']);
        $this->assertStringContainsString('回退到 legacy', (string) $context['analysis_hint']);
        $this->assertStringContainsString('方向：方图', (string) $context['prompt_hint']);
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function insertIntelligenceRecord(int $imageId, int $userId, array $overrides = []): void
    {
        DB::table('image_intelligence_records')->insert(array_merge([
            'image_id' => $imageId,
            'user_id' => $userId,
            'status' => 'ready',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'caption' => '默认智能描述',
            'summary' => '默认智能摘要',
            'prompt_hint' => '默认智能提示词',
            'ocr_text' => '默认智能 OCR',
            'labels' => json_encode(['default-label'], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode(['default-keyword'], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode(['generated_by' => 'test'], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ], [
            'labels' => json_encode((array) ($overrides['labels'] ?? ['default-label']), JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode((array) ($overrides['keywords'] ?? ['default-keyword']), JSON_UNESCAPED_UNICODE),
        ], collect($overrides)
            ->except(['labels', 'keywords'])
            ->all()));
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function insertImage(User $user, array $overrides = []): int
    {
        $strategyId = (int) DB::table('strategies')->value('id');
        $key = (string) ($overrides['key'] ?? ('p'.substr(sha1((string) microtime(true).random_int(1000, 9999)), 0, 23)));

        DB::table('images')->insert(array_merge([
            'user_id' => $user->id,
            'album_id' => null,
            'group_id' => $user->group_id,
            'strategy_id' => $strategyId,
            'key' => $key,
            'path' => '',
            'name' => $key.'.png',
            'origin_name' => 'prompt-test.png',
            'alias_name' => '',
            'size' => 12,
            'mimetype' => 'image/png',
            'extension' => 'png',
            'md5' => md5($key),
            'sha1' => sha1($key),
            'width' => 100,
            'height' => 80,
            'permission' => 0,
            'is_unhealthy' => false,
            'uploaded_ip' => '127.0.0.1',
            'created_at' => now(),
            'updated_at' => now(),
        ], $overrides));

        return (int) DB::table('images')->where('key', $key)->value('id');
    }
}
