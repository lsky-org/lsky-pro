<?php

namespace Tests\Feature\Smoke;

use App\Enums\ImageReviewStatus;
use App\Enums\UserStatus;
use App\Models\Image;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UploadMainlineTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_upload_mainline_works(): void
    {
        $path = tempnam(sys_get_temp_dir(), 'lsky-smoke-').'.png';
        $image = new \Imagick();
        $image->newImage(64, 64, new \ImagickPixel('white'));
        $image->setImageFormat('png');
        $image->writeImage($path);
        $image->clear();
        $image->destroy();
        $file = new UploadedFile($path, 'smoke.png', 'image/png', null, true);

        $response = $this->post('/upload', [
            'file' => $file,
        ]);

        $response->assertOk();
        $this->assertTrue((bool) $response->json('status'), (string) $response->json('message'));
        $response->assertJsonStructure([
            'status',
            'message',
            'data' => ['key', 'pathname', 'origin_name', 'size', 'mimetype', 'extension', 'md5', 'sha1', 'links'],
        ]);

        $this->assertSame(1, Image::query()->count());
        @unlink($path);
    }

    public function test_user_image_detail_returns_ai_and_review_metadata(): void
    {
        $path = tempnam(sys_get_temp_dir(), 'lsky-smoke-detail-').'.png';
        $image = new \Imagick();
        $image->newImage(64, 64, new \ImagickPixel('white'));
        $image->setImageFormat('png');
        $image->writeImage($path);
        $image->clear();
        $image->destroy();
        $file = new UploadedFile($path, 'detail-smoke.png', 'image/png', null, true);

        $upload = $this->post('/upload', [
            'file' => $file,
        ]);

        $upload->assertOk();
        $this->assertTrue((bool) $upload->json('status'), (string) $upload->json('message'));

        $user = User::factory()->create();
        $stored = Image::query()->findOrFail((int) $upload->json('data.id'));
        $stored->forceFill([
            'user_id' => $user->id,
            'ocr_text' => 'invoice 2026 quarterly summary',
            'is_unhealthy' => false,
            'review_status' => ImageReviewStatus::Approved,
            'review_reason' => 'manual approve',
            'reviewed_at' => now(),
            'reviewed_by' => $user->id,
        ])->save();

        $tag = Tag::query()->create(['name' => 'finance']);
        $stored->tags()->attach($tag->id);
        DB::table('image_intelligence_records')->updateOrInsert(
            ['image_id' => $stored->id],
            [
                'user_id' => $user->id,
                'status' => 'ready',
                'source' => 'ai_provider:gpt',
                'source_version' => 2,
                'ocr_text' => 'invoice 2026 quarterly summary',
                'caption' => '财务票据扫描图',
                'summary' => '发票摘要与季度结算信息。',
                'prompt_hint' => '财务票据，扫描件，整洁排版。',
                'labels' => json_encode(['invoice', 'finance'], JSON_UNESCAPED_UNICODE),
                'keywords' => json_encode(['quarterly', 'summary'], JSON_UNESCAPED_UNICODE),
                'metadata' => json_encode([
                    'provider' => 'gpt',
                    'model' => 'gpt-4.1-mini',
                    'fallback' => false,
                ], JSON_UNESCAPED_UNICODE),
                'analyzed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        $response = $this->actingAs($user)->get('/user/images/'.$stored->id);

        $response->assertOk();
        $response->assertJsonPath('status', true);
        $response->assertJsonPath('data.image.is_unhealthy', false);
        $response->assertJsonPath('data.image.ocr_text', 'invoice 2026 quarterly summary');
        $response->assertJsonPath('data.image.review_status', ImageReviewStatus::Approved);
        $response->assertJsonPath('data.image.review_reason', 'manual approve');
        $response->assertJsonPath('data.image.tags.0.name', 'finance');
        $response->assertJsonPath('data.image.intelligence.available', true);
        $response->assertJsonPath('data.image.intelligence.source', 'ai_provider:gpt');
        $response->assertJsonPath('data.image.intelligence.mode', 'provider_backed');
        $response->assertJsonPath('data.image.intelligence.provider', 'gpt');
        $response->assertJsonPath('data.image.intelligence.model', 'gpt-4.1-mini');
        $response->assertJsonPath('data.image.intelligence.fallback', false);
        $response->assertJsonPath('data.image.intelligence.labels.0', 'invoice');

        @unlink($path);
    }

    public function test_authenticated_user_can_preview_transform_process_result(): void
    {
        $user = User::factory()->create([
            'status' => UserStatus::Normal,
        ]);
        $path = tempnam(sys_get_temp_dir(), 'lsky-smoke-process-').'.png';
        $image = new \Imagick();
        $image->newImage(80, 40, new \ImagickPixel('white'));
        $image->setImageFormat('png');
        $image->writeImage($path);
        $image->clear();
        $image->destroy();
        $file = new UploadedFile($path, 'process-smoke.png', 'image/png', null, true);

        $upload = $this->actingAs($user)->post('/upload', [
            'file' => $file,
        ]);

        $upload->assertOk();
        $this->assertTrue((bool) $upload->json('status'), (string) $upload->json('message'));

        $stored = Image::query()->findOrFail((int) $upload->json('data.id'));

        $response = $this->actingAs($user)->post('/advanced-api/images/'.$stored->key.'/process', [
            'transform' => [
                'rotate' => 90,
            ],
        ]);

        $response->assertOk();
        $this->assertTrue((bool) $response->json('status'), (string) $response->json('message'));
        $response->assertJsonPath('data.key', $stored->key);
        $response->assertJsonPath('data.width', 40);
        $response->assertJsonPath('data.height', 80);
        $response->assertJsonPath('data.operations.transform.rotate', 90);
        $this->assertNotEmpty((string) $response->json('data.content_base64'));

        @unlink($path);
    }
}
