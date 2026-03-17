<?php

namespace Tests\Feature\Intelligence;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ImageTagVisibilityBridgeTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_advanced_ai_search_exposes_visible_tags_without_creating_real_tags(): void
    {
        $user = User::factory()->create();
        $imageId = $this->insertImage($user, [
            'key' => 'bridge-advanced-search',
            'origin_name' => 'manual-finance-proof.png',
        ]);

        $manualTag = Tag::query()->create(['name' => 'finance']);
        DB::table('image_tag')->insert([
            'image_id' => $imageId,
            'tag_id' => $manualTag->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->insertIntelligenceRecord($imageId, $user->id, [
            'labels' => ['finance', 'receipt'],
            'keywords' => ['quarterly'],
        ]);

        $response = $this->actingAs($user)
            ->getJson('/advanced-api/images/ai-search?q=receipt');

        $response
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.data.0.key', 'bridge-advanced-search');

        $item = (array) $response->json('data.data.0');
        $visibleTagNames = collect((array) ($item['tags'] ?? []))->pluck('name')->all();
        $manualTagNames = collect((array) ($item['manual_tags'] ?? []))->pluck('name')->all();
        $intelligenceTagNames = collect((array) ($item['intelligence_tags'] ?? []))->pluck('name')->all();

        $this->assertSame(['finance', 'receipt', 'quarterly'], $visibleTagNames);
        $this->assertSame(['finance'], $manualTagNames);
        $this->assertSame(['receipt', 'quarterly'], $intelligenceTagNames);

        $this->assertDatabaseHas('tags', ['name' => 'finance']);
        $this->assertDatabaseHas('image_intelligence_terms', [
            'image_id' => $imageId,
            'normalized_term' => 'receipt',
            'source' => 'label',
        ]);
        $this->assertDatabaseHas('image_intelligence_terms', [
            'image_id' => $imageId,
            'normalized_term' => 'quarterly',
            'source' => 'keyword',
        ]);
        $this->assertDatabaseMissing('tags', ['name' => 'receipt']);
        $this->assertDatabaseMissing('tags', ['name' => 'quarterly']);
    }

    public function test_user_workspace_ai_search_and_detail_expose_intelligence_tags_without_manual_tag_pollution(): void
    {
        $user = User::factory()->create();
        $imageId = $this->insertImage($user, [
            'key' => 'bridge-workspace-search',
            'origin_name' => 'workspace-proof.png',
            'ocr_text' => null,
        ]);

        $this->insertIntelligenceRecord($imageId, $user->id, [
            'labels' => ['receipt'],
            'keywords' => ['invoice'],
            'ocr_text' => '',
        ]);

        $searchResponse = $this->actingAs($user)
            ->getJson('/user/images?search_mode=ai&q=invoice');

        $searchResponse
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.images.data.0.key', 'bridge-workspace-search');

        $searchImage = (array) $searchResponse->json('data.images.data.0');
        $searchVisibleTagNames = collect((array) ($searchImage['tags'] ?? []))->pluck('name')->all();
        $searchManualTagNames = collect((array) ($searchImage['manual_tags'] ?? []))->pluck('name')->all();
        $searchIntelligenceTagNames = collect((array) ($searchImage['intelligence_tags'] ?? []))->pluck('name')->all();

        $this->assertSame(['receipt', 'invoice'], $searchVisibleTagNames);
        $this->assertSame([], $searchManualTagNames);
        $this->assertSame(['receipt', 'invoice'], $searchIntelligenceTagNames);

        $detailResponse = $this->actingAs($user)
            ->getJson('/user/images/'.$imageId);

        $detailResponse
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.image.key', 'bridge-workspace-search');

        $image = (array) $detailResponse->json('data.image');
        $visibleTagNames = collect((array) ($image['tags'] ?? []))->pluck('name')->all();
        $manualTagNames = collect((array) ($image['manual_tags'] ?? []))->pluck('name')->all();
        $intelligenceTagNames = collect((array) ($image['intelligence_tags'] ?? []))->pluck('name')->all();

        $this->assertSame(['receipt', 'invoice'], $visibleTagNames);
        $this->assertSame([], $manualTagNames);
        $this->assertSame(['receipt', 'invoice'], $intelligenceTagNames);

        $this->assertDatabaseHas('image_intelligence_terms', [
            'image_id' => $imageId,
            'normalized_term' => 'receipt',
            'source' => 'label',
        ]);
        $this->assertDatabaseHas('image_intelligence_terms', [
            'image_id' => $imageId,
            'normalized_term' => 'invoice',
            'source' => 'keyword',
        ]);
        $this->assertDatabaseMissing('tags', ['name' => 'receipt']);
        $this->assertDatabaseMissing('tags', ['name' => 'invoice']);
        $this->assertDatabaseMissing('image_tag', ['image_id' => $imageId]);
    }

    public function test_detail_requires_projection_before_exposing_intelligence_terms(): void
    {
        $user = User::factory()->create();
        $imageId = $this->insertImage($user, [
            'key' => 'bridge-projection-gate',
            'origin_name' => 'projection-gate.png',
        ]);

        $this->insertIntelligenceRecord($imageId, $user->id, [
            'status' => 'ready',
            'labels' => ['latent label'],
            'keywords' => ['latent keyword'],
        ], false);

        $beforeProjection = $this->actingAs($user)
            ->getJson('/user/images/'.$imageId);

        $beforeProjection
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.image.key', 'bridge-projection-gate');

        $beforeImage = (array) $beforeProjection->json('data.image');
        $this->assertSame([], collect((array) ($beforeImage['tags'] ?? []))->pluck('name')->all());
        $this->assertSame([], collect((array) ($beforeImage['manual_tags'] ?? []))->pluck('name')->all());
        $this->assertSame([], collect((array) ($beforeImage['intelligence_tags'] ?? []))->pluck('name')->all());

        $this->syncProjection($imageId);

        DB::table('image_intelligence_records')
            ->where('image_id', $imageId)
            ->update([
                'status' => 'processing',
                'labels' => json_encode(['mutated label'], JSON_UNESCAPED_UNICODE),
                'keywords' => json_encode(['mutated keyword'], JSON_UNESCAPED_UNICODE),
                'updated_at' => now(),
            ]);

        $afterProjection = $this->actingAs($user)
            ->getJson('/user/images/'.$imageId);

        $afterProjection
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.image.key', 'bridge-projection-gate');

        $afterImage = (array) $afterProjection->json('data.image');
        $this->assertSame(['latent label', 'latent keyword'], collect((array) ($afterImage['tags'] ?? []))->pluck('name')->all());
        $this->assertSame([], collect((array) ($afterImage['manual_tags'] ?? []))->pluck('name')->all());
        $this->assertSame(['latent label', 'latent keyword'], collect((array) ($afterImage['intelligence_tags'] ?? []))->pluck('name')->all());
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function insertImage(User $user, array $overrides = []): int
    {
        $strategyId = (int) DB::table('strategies')->value('id');
        $key = (string) ($overrides['key'] ?? ('bridge-'.substr(sha1((string) microtime(true).random_int(1000, 9999)), 0, 18)));

        DB::table('images')->insert(array_merge([
            'user_id' => $user->id,
            'album_id' => null,
            'group_id' => $user->group_id,
            'strategy_id' => $strategyId,
            'key' => $key,
            'path' => '',
            'name' => $key.'.png',
            'origin_name' => 'bridge-test.png',
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

        return (int) DB::table('images')->where('key', $key)->value('id');
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    private function insertIntelligenceRecord(int $imageId, int $userId, array $overrides = [], bool $syncProjection = true): void
    {
        $payload = array_merge([
            'image_id' => $imageId,
            'user_id' => $userId,
            'status' => 'ready',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'caption' => '结构化标签桥接测试',
            'summary' => '用于验证 intelligence labels/keywords 的桥接可见性。',
            'prompt_hint' => '强调结构化标签桥接，不写入真实 tags 表。',
            'ocr_text' => '',
            'labels' => json_encode([], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode([], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode(['generated_by' => 'test'], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ], $overrides);

        $payload['labels'] = json_encode($overrides['labels'] ?? [], JSON_UNESCAPED_UNICODE);
        $payload['keywords'] = json_encode($overrides['keywords'] ?? [], JSON_UNESCAPED_UNICODE);
        $payload['ocr_text'] = (string) ($overrides['ocr_text'] ?? $payload['ocr_text']);

        DB::table('image_intelligence_records')->insert($payload);
        if ($syncProjection) {
            $this->syncProjection($imageId);
        }
    }

    private function syncProjection(int $imageId): void
    {
        app(\App\Services\ImageIntelligence\ImageIntelligenceTermProjectionService::class)
            ->syncForImage(
                \App\Models\Image::query()->findOrFail($imageId),
                \App\Models\ImageIntelligenceRecord::query()->where('image_id', $imageId)->firstOrFail()
            );
    }
}
