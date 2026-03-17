<?php

namespace Tests\Feature\Smoke;

use App\Enums\GroupConfigKey;
use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class MissingSourceFallbackTest extends TestCase
{
    use RefreshDatabase;

    public function test_missing_source_file_uses_placeholder_instead_of_404(): void
    {
        $path = tempnam(sys_get_temp_dir(), 'lsky-missing-source-').'.png';
        $image = new \Imagick();
        $image->newImage(80, 80, new \ImagickPixel('white'));
        $image->setImageFormat('png');
        $image->writeImage($path);
        $image->clear();
        $image->destroy();

        $file = new UploadedFile($path, 'missing-source.png', 'image/png', null, true);

        $upload = $this->post('/upload', [
            'file' => $file,
        ]);

        $upload->assertOk();
        $stored = Image::query()->with(['group', 'strategy'])->findOrFail((int) $upload->json('data.id'));

        $group = $stored->group;
        $configs = $group->configs;
        $configs[GroupConfigKey::IsEnableOriginalProtection] = true;
        $group->configs = $configs;
        $group->save();

        if (file_exists(public_path($stored->getThumbnailPathname()))) {
            @unlink(public_path($stored->getThumbnailPathname()));
        }

        try {
            $stored->filesystem()->delete($stored->pathname);
        } catch (\Throwable $e) {
        }

        $stored = $stored->fresh(['group', 'strategy']);

        $this->assertStringContainsString('/thumbnails/missing/', $stored->url);
        $this->assertStringContainsString('/thumbnails/missing/', $stored->thumb_url);
        $this->assertFileExists(public_path(trim(config('app.thumbnail_path'), '/').'/missing/'.$stored->md5.'.png'));

        $response = $this->get('/'.$stored->key.'.'.$stored->extension);

        $response->assertOk();
        $response->assertHeader('content-type', 'image/png');

        @unlink($path);
    }
}
