<?php

namespace Tests\Feature\User;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ImageDetailIntelligenceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_image_detail_response_exposes_normalized_intelligence_object(): void
    {
        $user = User::factory()->create();
        $strategyId = (int) DB::table('strategies')->value('id');
        $key = 'detail-intel';

        DB::table('images')->insert([
            'user_id' => $user->id,
            'album_id' => null,
            'group_id' => $user->group_id,
            'strategy_id' => $strategyId,
            'key' => $key,
            'path' => '',
            'name' => $key.'.png',
            'origin_name' => 'detail-intel.png',
            'alias_name' => 'detail-intel-final.png',
            'size' => 12,
            'mimetype' => 'image/png',
            'extension' => 'png',
            'md5' => md5($key),
            'sha1' => sha1($key),
            'width' => 1200,
            'height' => 800,
            'permission' => 0,
            'is_unhealthy' => false,
            'uploaded_ip' => '127.0.0.1',
            'ocr_text' => 'legacy text',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $imageId = (int) DB::table('images')->where('key', $key)->value('id');
        $tag = Tag::query()->create(['name' => 'manual-tag']);
        DB::table('image_tag')->insert([
            'image_id' => $imageId,
            'tag_id' => $tag->id,
        ]);

        DB::table('image_intelligence_records')->insert([
            'image_id' => $imageId,
            'user_id' => $user->id,
            'status' => 'ready',
            'source' => 'ai_provider:gpt',
            'source_version' => 2,
            'ocr_text' => '',
            'caption' => '一只橙色猫坐在窗边。',
            'summary' => '光线柔和，氛围安静。',
            'prompt_hint' => '橙色猫，窗边，自然光，写实摄影。',
            'labels' => json_encode(['橙猫', '窗边'], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode(['猫', '自然光'], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode([
                'provider' => 'gpt',
                'model' => 'gpt-4.1-mini',
                'fallback' => false,
            ], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
            'last_error' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->actingAs($user)
            ->getJson('/user/images/'.$imageId)
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.image.key', $key)
            ->assertJsonPath('data.image.intelligence.status', 'ready')
            ->assertJsonPath('data.image.intelligence.source', 'ai_provider:gpt')
            ->assertJsonPath('data.image.intelligence.source_version', 2)
            ->assertJsonPath('data.image.intelligence.fallback', false)
            ->assertJsonPath('data.image.intelligence.provider', 'gpt')
            ->assertJsonPath('data.image.intelligence.model', 'gpt-4.1-mini')
            ->assertJsonPath('data.image.intelligence.labels.0', '橙猫')
            ->assertJsonPath('data.image.manual_tags.0.name', 'manual-tag')
            ->assertJsonMissingPath('data.image.intelligenceRecord');
    }
}
