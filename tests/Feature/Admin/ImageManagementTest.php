<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ImageManagementTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_admin_can_rename_image_from_management_endpoint(): void
    {
        $admin = User::factory()->create(['is_adminer' => true]);
        $strategyId = (int) DB::table('strategies')->value('id');
        $imageId = (int) DB::table('images')->insertGetId([
            'user_id' => $admin->id,
            'album_id' => null,
            'group_id' => $admin->group_id,
            'strategy_id' => $strategyId,
            'key' => 'adm'.substr(sha1((string) microtime(true)), 0, 20),
            'path' => '',
            'name' => 'admin-image.png',
            'origin_name' => 'admin-image.png',
            'alias_name' => '',
            'size' => 12,
            'mimetype' => 'image/png',
            'extension' => 'png',
            'md5' => md5('admin-image'),
            'sha1' => sha1('admin-image'),
            'width' => 100,
            'height' => 80,
            'permission' => 0,
            'is_unhealthy' => false,
            'uploaded_ip' => '127.0.0.1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->actingAs($admin)
            ->putJson('/admin/images/'.$imageId, [
                'alias_name' => '系统首页横幅',
            ])
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.image.alias_name', '系统首页横幅')
            ->assertJsonPath('data.image.filename', '系统首页横幅');

        $this->assertDatabaseHas('images', [
            'id' => $imageId,
            'alias_name' => '系统首页横幅',
        ]);
    }
}
