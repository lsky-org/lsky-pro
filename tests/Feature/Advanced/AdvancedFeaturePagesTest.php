<?php

namespace Tests\Feature\Advanced;

use App\Models\TeamMembership;
use App\Models\User;
use App\Services\AiProviderConfigService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class AdvancedFeaturePagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\InstallSeeder::class);
        Cache::forget('configs');
    }

    public function test_advanced_pages_can_be_rendered_for_authenticated_user(): void
    {
        $user = User::factory()->create();
        $admin = User::factory()->create([
            'is_adminer' => true,
        ]);

        $this->actingAs($user)
            ->get('/advanced')
            ->assertOk()
            ->assertSeeText('Intelligence 运行')
            ->assertDontSeeText('Control Plane')
            ->assertDontSeeText('管理员可操作')
            ->assertDontSee('id="ic-preview"', false)
            ->assertDontSee('id="ic-dispatch"', false);

        $this->actingAs($admin)
            ->get('/advanced')
            ->assertOk()
            ->assertSeeText('Control Plane')
            ->assertSeeText('管理员可操作')
            ->assertSee('id="ic-preview"', false)
            ->assertSee('id="ic-dispatch"', false);

        $features = [
            'image-process',
            'ai-search',
            'ai-prompt',
            'ai-config',
            'drivers',
            'reviews',
            'jobs',
            'team-permissions',
        ];

        foreach ($features as $feature) {
            $this->actingAs($user)
                ->get('/advanced/'.$feature)
                ->assertOk();
        }

        $this->actingAs($admin)
            ->get('/advanced/performance')
            ->assertOk();
    }

    public function test_advanced_api_core_endpoints_return_expected_shape(): void
    {
        $owner = User::factory()->create();
        $member = User::factory()->create();

        /** @var TeamMembership $ownerMembership */
        $ownerMembership = $owner->teamMemberships()->firstOrFail();
        $spaceId = (int) $ownerMembership->team_space_id;

        TeamMembership::query()->create([
            'team_space_id' => $spaceId,
            'user_id' => $member->id,
            'role' => TeamMembership::ROLE_MEMBER,
            'permissions' => TeamMembership::rolePermissions(TeamMembership::ROLE_MEMBER),
        ]);

        $owner->forceFill(['is_adminer' => true])->save();

        $this->actingAs($owner)
            ->getJson('/advanced-api/system/performance')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonStructure(['status', 'message', 'data' => ['overview', 'app', 'runtime', 'extensions', 'database', 'queue', 'schedule', 'storage', 'processing']]);

        $this->actingAs($owner)
            ->getJson('/advanced-api/processing/drivers/status')
            ->assertOk()
            ->assertJsonStructure(['status', 'message', 'data']);

        $this->actingAs($owner)
            ->getJson('/advanced-api/process-templates')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonStructure(['status', 'message', 'data' => ['items']]);

        $this->actingAs($owner)
            ->getJson('/advanced-api/process-jobs')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonStructure(['status', 'message', 'data' => ['items']]);

        $this->actingAs($owner)
            ->getJson('/advanced-api/spaces')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonStructure(['status', 'message', 'data' => ['current_space_id', 'spaces']]);

        $this->actingAs($owner)
            ->getJson('/advanced-api/spaces/'.$spaceId.'/members')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.space.id', $spaceId);

        $this->actingAs($owner)
            ->getJson('/advanced-api/intelligence/status')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.intelligence.control_plane.status_endpoint', url('/advanced-api/intelligence/status'))
            ->assertJsonPath('data.intelligence.control_plane.preview_endpoint', url('/advanced-api/intelligence/backfill-preview'))
            ->assertJsonPath('data.intelligence.control_plane.dispatch_endpoint', url('/advanced-api/intelligence/backfill-dispatch'))
            ->assertJsonPath('data.intelligence.control_plane.preview_enabled', true)
            ->assertJsonPath('data.intelligence.control_plane.dispatch_enabled', true)
            ->assertJsonStructure(['status', 'message', 'data' => ['intelligence' => ['images_total', 'analyzed_count', 'missing_count', 'pending_count', 'coverage_label', 'control_plane']]]);

        $this->actingAs($owner)
            ->putJson('/advanced-api/spaces/'.$spaceId.'/members/'.$member->id.'/role', [
                'role' => TeamMembership::ROLE_ADMIN,
            ])
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.member.role', TeamMembership::ROLE_ADMIN);
    }

    public function test_ai_prompt_task_api_flow_returns_expected_shape(): void
    {
        $user = User::factory()->create();
        $aiConfig = $this->seedAiConfig();
        config([
            'queue.default' => 'sync',
            'queue.ai_prompt.connection' => 'sync',
        ]);

        Http::fake([
            rtrim((string) $aiConfig['providers']['gpt']['base_url'], '/').'/*' => Http::response([
                'model' => 'gpt-4.1-mini',
                'choices' => [[
                    'message' => [
                        'content' => '海报设计提示词：干净构图、强对比灯光、突出主体。',
                    ],
                ]],
            ], 200),
        ]);

        $strategyId = (int) DB::table('strategies')->value('id');
        $key = 'p'.substr(sha1((string) microtime(true)), 0, 23);
        $uploadRoot = storage_path('app/uploads');
        if (! is_dir($uploadRoot)) {
            mkdir($uploadRoot, 0777, true);
        }
        File::put($uploadRoot.'/'.$key.'.png', base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO9pXWQAAAAASUVORK5CYII='));

        DB::table('images')->insert([
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
        ]);

        $imageId = (int) DB::table('images')->where('key', $key)->value('id');
        DB::table('image_intelligence_records')->insert([
            'image_id' => $imageId,
            'user_id' => $user->id,
            'status' => 'ready',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'ocr_text' => '主视觉海报 金属材质 高对比灯光',
            'caption' => '产品主视觉海报，主体居中，金属质感明显。',
            'summary' => '适合电商海报和视觉 KV 的主视觉图。',
            'prompt_hint' => '突出主视觉层次、金属反光和冷色灯光。',
            'labels' => json_encode(['poster', 'metal'], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode(['kv', 'hero'], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode(['generated_by' => 'test'], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $createResponse = $this->actingAs($user)
            ->postJson('/advanced-api/ai/prompt-tasks', [
                'key' => $key,
                'intent' => '请生成用于海报设计的提示词',
                'language' => 'zh-CN',
                'style' => '专业、简洁、可执行',
            ]);

        $createResponse
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    'task_id',
                    'task' => ['task_id', 'status'],
                ],
            ]);

        $taskId = (string) $createResponse->json('data.task_id');
        $this->assertNotEmpty($taskId);

        $showResponse = $this->actingAs($user)
            ->getJson('/advanced-api/ai/prompt-tasks/'.$taskId);

        $showResponse
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.task.status', 'success')
            ->assertJsonPath('data.task.result.provider.provider', 'gpt')
            ->assertJsonPath('data.task.result.provider.model', 'gpt-4.1-mini')
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    'task' => [
                        'task_id',
                        'status',
                        'result' => [
                            'prompt',
                            'metadata',
                            'template_used',
                            'provider',
                            'language',
                            'style',
                        ],
                        'error_message',
                    ],
                ],
            ]);

        Http::assertSent(function ($request) {
            $content = collect((array) data_get($request->data(), 'messages.0.content', []))
                ->map(function ($chunk) {
                    if (! is_array($chunk) || ($chunk['type'] ?? '') !== 'text') {
                        return '';
                    }

                    return (string) ($chunk['text'] ?? '');
                })
                ->filter()
                ->implode("\n");

            return $request->url() === 'https://ai-gateway.example.test/v1/chat/completions'
                && $request['model'] === 'gpt-4.1-mini'
                && str_contains($content, '突出主视觉层次、金属反光和冷色灯光');
        });
    }

    public function test_admin_can_fetch_remote_models_for_active_provider(): void
    {
        $admin = User::factory()->create([
            'is_adminer' => true,
        ]);

        Http::fake([
            'https://ai-gateway.example.test/v1/models' => Http::response([
                'data' => [
                    ['id' => 'gpt-4.1-mini'],
                    ['id' => 'gpt-4.1'],
                    ['id' => 'gpt-4o-mini'],
                ],
            ], 200),
        ]);

        $this->actingAs($admin)
            ->postJson('/advanced-api/ai/config/providers/gpt/models:fetch', [
                'api_key' => 'test-openai-key',
                'base_url' => 'https://ai-gateway.example.test/v1',
            ])
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.provider', 'gpt')
            ->assertJsonPath('data.base_url', 'https://ai-gateway.example.test/v1')
            ->assertJsonPath('data.default_model', 'gpt-4.1-mini')
            ->assertJsonCount(3, 'data.models')
            ->assertJsonPath('data.models.0', 'gpt-4.1')
            ->assertJsonCount(3, 'data.selected_models');
    }

    public function test_ai_search_uses_image_intelligence_record_fields(): void
    {
        $user = User::factory()->create();
        $strategyId = (int) DB::table('strategies')->value('id');
        $key = 's'.substr(sha1((string) microtime(true)), 0, 23);

        DB::table('images')->insert([
            'user_id' => $user->id,
            'album_id' => null,
            'group_id' => $user->group_id,
            'strategy_id' => $strategyId,
            'key' => $key,
            'path' => '',
            'name' => $key.'.png',
            'origin_name' => 'landscape.png',
            'alias_name' => 'mountain-view',
            'size' => 128,
            'mimetype' => 'image/png',
            'extension' => 'png',
            'md5' => md5($key),
            'sha1' => sha1($key),
            'width' => 640,
            'height' => 480,
            'permission' => 0,
            'is_unhealthy' => false,
            'uploaded_ip' => '127.0.0.1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $imageId = (int) DB::table('images')->where('key', $key)->value('id');

        DB::table('image_intelligence_records')->insert([
            'image_id' => $imageId,
            'user_id' => $user->id,
            'status' => 'ready',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'ocr_text' => 'sunset ridge',
            'caption' => 'golden sunset over mountain ridge',
            'summary' => 'travel landscape with warm sunset light',
            'prompt_hint' => 'mountain ridge with sunset glow',
            'labels' => json_encode(['sunset', 'mountain'], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode(['ridge', 'golden hour'], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode(['generated_by' => 'test'], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->actingAs($user)
            ->getJson('/advanced-api/images/ai-search?q=sunset')
            ->assertOk()
            ->assertJsonPath('status', true)
            ->assertJsonPath('data.data.0.key', $key)
            ->assertJsonPath('data.data.0.ai_score', fn ($value) => is_numeric($value) && $value > 0);
    }

    public function test_advanced_overview_shows_intelligence_metrics_and_backfill_status(): void
    {
        $user = User::factory()->create();
        $strategyId = (int) DB::table('strategies')->value('id');
        $analyzedAt = now()->startOfMinute();

        foreach ([
            ['key' => 'ov-int-ready', 'name' => 'ready.png'],
            ['key' => 'ov-int-missing', 'name' => 'missing.png'],
        ] as $item) {
            DB::table('images')->insert([
                'user_id' => $user->id,
                'album_id' => null,
                'group_id' => $user->group_id,
                'strategy_id' => $strategyId,
                'key' => $item['key'],
                'path' => '',
                'name' => $item['key'].'.png',
                'origin_name' => $item['name'],
                'alias_name' => '',
                'size' => 128,
                'mimetype' => 'image/png',
                'extension' => 'png',
                'md5' => md5($item['key']),
                'sha1' => sha1($item['key']),
                'width' => 640,
                'height' => 480,
                'permission' => 0,
                'is_unhealthy' => false,
                'uploaded_ip' => '127.0.0.1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $readyImageId = (int) DB::table('images')->where('key', 'ov-int-ready')->value('id');

        DB::table('image_intelligence_records')->insert([
            'image_id' => $readyImageId,
            'user_id' => $user->id,
            'status' => 'ready',
            'source' => 'metadata_placeholder',
            'source_version' => 1,
            'ocr_text' => 'overview metrics ready',
            'caption' => 'overview metrics ready image',
            'summary' => 'ready intelligence record for overview',
            'prompt_hint' => 'focus on readiness',
            'labels' => json_encode(['overview'], JSON_UNESCAPED_UNICODE),
            'keywords' => json_encode(['ready'], JSON_UNESCAPED_UNICODE),
            'metadata' => json_encode(['generated_by' => 'test'], JSON_UNESCAPED_UNICODE),
            'analyzed_at' => $analyzedAt,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->actingAs($user)
            ->get('/advanced')
            ->assertOk()
            ->assertViewHas('intelligence', function (array $intelligence) use ($analyzedAt) {
                return $intelligence['images_total'] === 2
                    && $intelligence['analyzed_count'] === 1
                    && $intelligence['missing_count'] === 1
                    && $intelligence['pending_count'] === 0
                    && $intelligence['coverage_label'] === '50%'
                    && $intelligence['latest_analyzed_at'] === $analyzedAt->format('Y-m-d H:i:s')
                    && $intelligence['has_frontend_backfill_entry'] === false
                    && $intelligence['has_backfill_command'] === true;
            })
            ->assertSeeText('Intelligence 运行')
            ->assertSeeText('50%')
            ->assertSeeText('当前没有独立前端回填入口');
    }

    public function test_admin_advanced_overview_exposes_latest_intelligence_run_summary(): void
    {
        $admin = User::factory()->create([
            'is_adminer' => true,
        ]);

        $startedAt = now()->subMinutes(5)->startOfMinute();
        $runId = (int) DB::table('image_intelligence_runs')->insertGetId([
            'mode' => 'dispatch',
            'status' => 'queued',
            'initiator_user_id' => $admin->id,
            'trigger_source' => 'web',
            'options' => json_encode([
                'limit' => 25,
                'chunk' => 25,
                'older_than_minutes' => 30,
                'missing_only' => false,
                'force' => false,
                'sample_limit' => 10,
            ], JSON_UNESCAPED_UNICODE),
            'matched' => 3,
            'processed' => 3,
            'dispatched' => 2,
            'skipped' => 1,
            'succeeded' => 0,
            'failed' => 0,
            'last_image_id' => 42,
            'request_id' => 'req-overview-latest-run',
            'trace_id' => 'trace-overview-latest-run',
            'ip' => '127.0.0.1',
            'started_at' => $startedAt,
            'created_at' => $startedAt,
            'updated_at' => $startedAt,
        ]);

        $this->actingAs($admin)
            ->get('/advanced')
            ->assertOk()
            ->assertViewHas('tableExists', function (array $tableExists) {
                return $tableExists['image_intelligence_runs'] === true;
            })
            ->assertViewHas('intelligenceControl', function (array $control) use ($runId, $admin, $startedAt) {
                return data_get($control, 'latest_run.id') === $runId
                    && data_get($control, 'latest_run.status') === 'queued'
                    && data_get($control, 'latest_run.requested_by') === $admin->name
                    && data_get($control, 'latest_run.requested_at') === $startedAt->format('Y-m-d H:i:s');
            })
            ->assertSeeText('重试上次 Dispatch')
            ->assertSeeText('#'.$runId)
            ->assertSeeText($admin->name);
    }

    private function seedAiConfig(): array
    {
        return app(AiProviderConfigService::class)->save([
            'active_provider' => 'gpt',
            'providers' => [
                'gpt' => [
                    'api_key' => 'test-openai-key',
                    'base_url' => 'https://ai-gateway.example.test/v1',
                    'default_model' => 'gpt-4.1-mini',
                    'models' => ['gpt-4.1-mini', 'gpt-4.1'],
                ],
                'deepseek' => [
                    'api_key' => '',
                    'base_url' => 'https://api.deepseek.com/v1',
                    'default_model' => 'deepseek-chat',
                    'models' => ['deepseek-chat', 'deepseek-reasoner'],
                ],
                'qwen' => [
                    'api_key' => '',
                    'base_url' => 'https://dashscope.aliyuncs.com/compatible-mode/v1',
                    'default_model' => 'qwen-vl-max',
                    'models' => ['qwen-vl-max', 'qwen-vl-plus'],
                ],
                'gemini' => [
                    'api_key' => '',
                    'base_url' => 'https://generativelanguage.googleapis.com/v1beta',
                    'default_model' => 'gemini-2.0-flash',
                    'models' => ['gemini-2.0-flash', 'gemini-2.5-flash'],
                ],
            ],
        ]);
    }
}
