<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class SettingsPageTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_admin_settings_page_renders_sections_and_operational_selectors(): void
    {
        $admin = User::factory()->create(['is_adminer' => true]);

        $response = $this->actingAs($admin)->get('/admin/settings');

        $response
            ->assertOk()
            ->assertSeeText('系统升级')
            ->assertSeeText('保存更改')
            ->assertSeeText('测试');
    }
}
