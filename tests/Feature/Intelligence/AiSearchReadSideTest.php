<?php

namespace Tests\Feature\Intelligence;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AiSearchReadSideTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Cache::forget('configs');
    }

    public function test_ai_search_matches_intelligence_record_fields(): void
    {
        $user = User::factory()->create();
        $key = $this->insertImage($user, [
            'origin_name' => 'legacy-name.png',
        ]);
        $imageId = (int) DB::table('images')->where('key', $key)->value('id');

        DB::table('image_intelligence_records')->insert([
            'image_id' => $imageId,
            'user_id' => $user->id,
            'status' => 'ready',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'caption' => '海边日落主视觉海报',
            'summary' => '黄昏海边，暖色调，适合作为视觉主图。',
            'prompt_hint' => '强调海边日落和电影感色彩。',
            'ocr_text' => 'sunset hero key visual',
            'labels' => json_encode(['sunset', 'beach'], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode(['poster', 'hero'], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode(['generated_by' => 'test'], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $response = $this->actingAs($user)
            ->getJson('/advanced-api/images/ai-search?q=日落');

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.data.0.key', $key);

        $this->assertGreaterThan(0, (int) $response->json('data.data.0.ai_score'));
    }

    public function test_ai_search_falls_back_to_legacy_ocr_text_when_no_intelligence_record_exists(): void
    {
        $user = User::factory()->create();
        $key = $this->insertImage($user, [
            'origin_name' => 'legacy-only.png',
            'ocr_text' => 'archive invoice fallback keyword',
        ]);

        $response = $this->actingAs($user)
            ->getJson('/advanced-api/images/ai-search?q=fallback keyword');

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.data.0.key', $key);

        $this->assertGreaterThan(0, (int) $response->json('data.data.0.ai_score'));
    }

    public function test_ai_search_does_not_match_unprojected_record_terms(): void
    {
        $user = User::factory()->create();
        $key = $this->insertImage($user, [
            'origin_name' => 'record-only.png',
        ]);
        $imageId = (int) DB::table('images')->where('key', $key)->value('id');

        DB::table('image_intelligence_records')->insert([
            'image_id' => $imageId,
            'user_id' => $user->id,
            'status' => 'ready',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'caption' => 'record-only caption',
            'summary' => 'record-only summary',
            'prompt_hint' => 'record-only hint',
            'ocr_text' => '',
            'labels' => json_encode(['latent term'], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode(['shadow keyword'], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode(['generated_by' => 'test'], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $response = $this->actingAs($user)
            ->getJson('/advanced-api/images/ai-search?q=latent term');

        $response
            ->assertOk()
            ->assertJsonPath('status', true);

        $this->assertSame([], $response->json('data.data'));
    }

    public function test_ai_search_matches_projected_intelligence_terms_even_when_record_status_is_processing(): void
    {
        $user = User::factory()->create();
        $key = $this->insertImage($user, [
            'origin_name' => 'projection-only.png',
        ]);
        $imageId = (int) DB::table('images')->where('key', $key)->value('id');

        DB::table('image_intelligence_records')->insert([
            'image_id' => $imageId,
            'user_id' => $user->id,
            'status' => 'processing',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'caption' => '投影测试图',
            'summary' => '通过独立 intelligence term projection 验证搜索。',
            'prompt_hint' => 'projection verification',
            'ocr_text' => '',
            'labels' => json_encode([], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode([], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode(['generated_by' => 'test'], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('image_intelligence_terms')->insert([
            'image_id' => $imageId,
            'user_id' => $user->id,
            'source' => 'label',
            'term' => 'projected term',
            'normalized_term' => 'projected term',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $response = $this->actingAs($user)
            ->getJson('/advanced-api/images/ai-search?q=projected term');

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.data.0.key', $key);

        $this->assertGreaterThan(0, (int) $response->json('data.data.0.ai_score'));
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function insertImage(User $user, array $overrides = []): string
    {
        $strategyId = (int) DB::table('strategies')->value('id');
        $key = (string) ($overrides['key'] ?? ('s'.substr(sha1((string) microtime(true).random_int(1000, 9999)), 0, 23)));

        DB::table('images')->insert(array_merge([
            'user_id' => $user->id,
            'album_id' => null,
            'group_id' => $user->group_id,
            'strategy_id' => $strategyId,
            'key' => $key,
            'path' => '',
            'name' => $key.'.png',
            'origin_name' => 'search-test.png',
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
            'ocr_text' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ], $overrides));

        return $key;
    }
}
