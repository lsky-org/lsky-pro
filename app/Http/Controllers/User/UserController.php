<?php

namespace App\Http\Controllers\User;

use App\Enums\UserConfigKey;
use App\Enums\UserStatus;
use App\Enums\ConfigKey;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserSettingRequest;
use App\Models\Album;
use App\Models\Image;
use App\Models\User;
use App\Services\AiProviderConfigService;
use App\Services\Auth\AuthIdentityGovernanceService;
use App\Services\ImageIntelligence\ImageIntelligenceControlPlaneService;
use App\Services\ImageProcessing\ImageProcessingManager;
use App\Services\SystemPerformanceService;
use App\Utils;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UserController extends Controller
{
    public function dashboard(): View
    {
        /** @var User $user */
        $user = Auth::user();
        $configs = $user->group->configs;
        $strategies = $user->group->strategies()->get();
        return view('user.dashboard', compact('strategies', 'configs', 'user'));
    }


    public function adminConsole(): View
    {
        /** @var User $user */
        $user = Auth::user();
        abort_unless((bool) $user->is_adminer, 403);

        $carbon = Carbon::now();
        $format = 'Y-m-d H:i:s';

        $numbers = [
            'today' => Image::query()->whereBetween('created_at', [$carbon->copy()->startOfDay()->format($format), $carbon->copy()->endOfDay()->format($format)])->count(),
            'yesterday' => Image::query()->whereBetween('created_at', [$carbon->copy()->subDay()->startOfDay()->format($format), $carbon->copy()->subDay()->endOfDay()->format($format)])->count(),
            'week' => Image::query()->whereBetween('created_at', [$carbon->copy()->startOfWeek()->format($format), $carbon->copy()->endOfWeek()->format($format)])->count(),
            'month' => Image::query()->whereBetween('created_at', [$carbon->copy()->startOfMonth()->format($format), $carbon->copy()->endOfMonth()->format($format)])->count(),
        ];

        $start = Carbon::now()->subDays(30)->startOfDay();
        $end = Carbon::now()->endOfDay();
        $dates = Utils::makeDateRange($start->format('Y-m-d'), $end->format('Y-m-d'));
        $fields = ['游客上传', '用户上传', '新用户'];

        $images = Image::query()
            ->whereBetween('created_at', [$start->format($format), $end->format($format)])
            ->get(['user_id', 'created_at'])
            ->transform(function (Image $image) {
                $image['date'] = $image->created_at->format('Y-m-d');
                return $image;
            })->groupBy('date');

        $users = User::query()
            ->whereBetween('created_at', [$start->format($format), $end->format($format)])
            ->get(['created_at'])
            ->transform(function (User $item) {
                $item['date'] = $item->created_at->format('Y-m-d');
                return $item;
            })->groupBy('date');

        $data = collect(array_map(fn() => 0, array_flip($dates)));
        $array = [
            $data->merge($images->map(fn(Collection $items) => $items->whereNull('user_id')->count())),
            $data->merge($images->map(fn(Collection $items) => $items->whereNotNull('user_id')->count())),
            $data->merge($users->map(fn(Collection $items) => $items->count())),
        ];
        $datasets = collect($fields)->transform(function ($item, $index) use ($array) {
            return [
                'name' => $item,
                'type' => 'line',
                'data' => $array[$index]->values(),
            ];
        });

        $adminConsole = [
            'overview' => [
                'images' => Image::query()->count(),
                'albums' => Album::query()->count(),
                'users' => User::query()->count(),
                'storage' => Image::query()->sum('size'),
            ],
            'numbers' => $numbers,
            'dates' => $dates,
            'datasets' => $datasets,
            'fields' => $fields,
        ];

        return view('admin.console', compact('adminConsole'));
    }
    public function settings(): View
    {
        return view('user.settings');
    }

    public function advanced(): View
    {
        return view('user.advanced_overview', $this->advancedOverviewPayload());
    }

    public function advancedFeature(string $feature): View
    {
        /** @var User $user */
        $user = Auth::user();

        $allowed = [
            'overview',
            'image-process',
            'ai-search',
            'ai-prompt',
            'ai-config',
            'performance',
            'drivers',
            'reviews',
            'jobs',
            'team-permissions',
        ];

        abort_unless(in_array($feature, $allowed, true), 404);

        if ($feature === 'overview') {
            return view('user.advanced_overview', $this->advancedOverviewPayload());
        }

        if ($feature === 'performance') {
            abort_unless((bool) ($user->is_adminer ?? false), 403);
            return view('user.advanced_pages.performance', $this->performancePayload());
        }

        return view('user.advanced_pages.'.$feature);
    }

    protected function advancedOverviewPayload(): array
    {
        /** @var User $user */
        $user = Auth::user();

        $tableExists = [
            'upload_tasks' => Schema::hasTable('upload_tasks'),
            'webhook_subscriptions' => Schema::hasTable('webhook_subscriptions'),
            'team_memberships' => Schema::hasTable('team_memberships'),
            'image_batch_operations' => Schema::hasTable('image_batch_operations'),
            'tags' => Schema::hasTable('tags'),
            'image_intelligence_records' => Schema::hasTable('image_intelligence_records'),
            'image_intelligence_runs' => Schema::hasTable('image_intelligence_runs'),
        ];

        $features = [
            'upload_pipeline_async' => (bool) Utils::config(ConfigKey::UploadPipelineAsyncEnabled, false),
            'signed_url_enabled' => (bool) config('download.signed_url.enabled', false),
            'signed_url_private_only' => (bool) config('download.signed_url.private_only', false),
            'ttl_enabled' => (bool) config('lifecycle.ttl.enabled', false),
            'recycle_bin_enabled' => (bool) config('lifecycle.recycle_bin.enabled', false),
        ];

        $overview = [
            'upload_tasks' => $tableExists['upload_tasks']
                ? DB::table('upload_tasks')->where('user_id', $user->id)->count()
                : 0,
            'batch_operations' => $tableExists['image_batch_operations']
                ? DB::table('image_batch_operations')->where('user_id', $user->id)->count()
                : 0,
            'spaces' => $tableExists['team_memberships']
                ? DB::table('team_memberships')->where('user_id', $user->id)->count()
                : 0,
            'webhooks' => ($user->is_adminer && $tableExists['webhook_subscriptions'])
                ? DB::table('webhook_subscriptions')->count()
                : 0,
            'tags' => $tableExists['tags'] ? DB::table('tags')->count() : 0,
        ];

        $intelligence = app(ImageIntelligenceControlPlaneService::class)->buildUserStatus($user);
        $intelligenceControl = is_array($intelligence['control_plane'] ?? null)
            ? $intelligence['control_plane']
            : null;

        $aiConfig = app(AiProviderConfigService::class)->allForUser($user);
        $activeAiProvider = (string) ($aiConfig['active_provider'] ?? 'gpt');
        $activeAiProviderConfig = $aiConfig['providers'][$activeAiProvider] ?? null;
        $aiConfigReady = is_array($activeAiProviderConfig)
            && trim((string) ($activeAiProviderConfig['api_key'] ?? '')) !== ''
            && trim((string) ($activeAiProviderConfig['default_model'] ?? '')) !== '';

        $pages = [
            'image-process' => '图片编辑',
            'ai-search' => 'AI 检索',
            'ai-prompt' => 'AI 提示词',
            'ai-config' => 'AI 配置',
            'drivers' => '处理驱动',
            'reviews' => '审核中心',
            'jobs' => '作业中心',
            'team-permissions' => '团队权限',
        ];

        if ($user->is_adminer) {
            $pages['performance'] = '系统性能';
        }

        return compact('user', 'tableExists', 'features', 'overview', 'pages', 'aiConfigReady', 'activeAiProvider', 'intelligence', 'intelligenceControl');
    }

    protected function performancePayload(): array
    {
        /** @var User $user */
        $user = Auth::user();
        $summary = app(SystemPerformanceService::class)->summary();
        $processingStatus = $summary['processing'] ?? app(ImageProcessingManager::class)->status();
        $overview = $summary['overview'] ?? [];
        $appSummary = $summary['app'] ?? [];
        $runtime = array_merge(
            [
                'app_version' => $appSummary['app_version'] ?? (string) Utils::config(ConfigKey::AppVersion, '-'),
                'app_env' => $appSummary['environment'] ?? app()->environment(),
                'php_version' => $appSummary['php_version'] ?? PHP_VERSION,
                'laravel_version' => $appSummary['laravel_version'] ?? app()->version(),
                'timezone' => $appSummary['timezone'] ?? (string) config('app.timezone', 'UTC'),
                'debug' => $appSummary['debug'] ?? (bool) config('app.debug'),
            ],
            $summary['runtime'] ?? [],
        );

        return compact('user', 'processingStatus', 'overview', 'runtime');
    }

    public function update(UserSettingRequest $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $user->name = $request->validated('name');
        $user->url = $request->validated('url') ?: '';
        $user->configs = $user->configs->merge(collect($request->validated('configs'))->transform(function ($value) {
            return (int)$value;
        }));
        $passwordEventType = null;
        if ($password = $request->validated('password')) {
            $passwordEventType = $user->hasPasswordLoginReady() ? 'password_updated' : 'password_enabled';
            $user->forceFill([
                'password' => Hash::make($password),
                'remember_token' => Str::random(60),
            ]);
            $user->configs = $user->configs->put(User::CONFIG_PASSWORD_LOGIN_READY, true);

            event(new PasswordReset($user));
        }
        $user->save();
        if ($passwordEventType) {
            app(AuthIdentityGovernanceService::class)->record($user, $passwordEventType, [
                'provider' => 'password',
            ]);
        }
        return $this->success('保存成功');
    }

    public function setStrategy(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        if (! $strategy = $user->group->strategies()->find($request->id)) {
            return $this->fail('没有找到该策略');
        }
        $user->update(['configs->'.UserConfigKey::DefaultStrategy => $strategy->id]);
        return $this->success('设置成功');
    }

    public function saveHeaderTabs(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();

        $items = collect($request->input('tabs', []))
            ->take(20)
            ->map(function ($item) {
                $title = trim((string) data_get($item, 'title', ''));
                $url = trim((string) data_get($item, 'url', ''));

                if ($title === '' || $url === '') {
                    return null;
                }

                if (! str_starts_with($url, '/')) {
                    return null;
                }

                return [
                    'title' => mb_substr($title, 0, 30),
                    'url' => strtok($url, '?') ?: $url,
                ];
            })
            ->filter()
            ->unique('url')
            ->values();

        $dashboardUrl = route('dashboard', [], false);
        if (! $items->contains(fn ($item) => $item['url'] === $dashboardUrl)) {
            $items->prepend([
                'title' => '仪表盘',
                'url' => $dashboardUrl,
            ]);
        }

        $user->update([
            'configs->'.UserConfigKey::HeaderPinnedTabs => $items->values()->toArray(),
        ]);

        return $this->success('保存成功');
    }

    public function issueApiToken(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();

        $request->validate([
            'password' => 'required|string',
        ], [], [
            'password' => '密码',
        ]);

        if (! Hash::check((string) $request->input('password'), (string) $user->password)) {
            return $this->fail('密码错误，请重试');
        }

        if ((int) $user->status === UserStatus::Frozen) {
            return $this->fail('当前账号已冻结，无法获取 Token');
        }

        $token = $user->createToken($user->email)->plainTextToken;

        return $this->success('获取成功', [
            'token' => $token,
            'bearer_token' => 'Bearer '.$token,
        ]);
    }
}
