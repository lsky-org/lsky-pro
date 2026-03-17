<?php

namespace App\Services;

use App\Enums\ConfigKey;
use App\Models\User;
use App\Models\Config;
use App\Utils;
use Illuminate\Http\Client\Response as HttpResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AiProviderConfigService
{
    private const PROVIDER_META = [
        'gpt' => [
            'label' => 'OpenAI GPT',
            'transport' => 'openai_compatible',
            'base_url' => 'https://api.openai.com/v1',
            'models' => ['gpt-4.1-mini', 'gpt-4.1', 'gpt-4o-mini'],
        ],
        'deepseek' => [
            'label' => 'DeepSeek',
            'transport' => 'openai_compatible',
            'base_url' => 'https://api.deepseek.com/v1',
            'models' => ['deepseek-chat', 'deepseek-reasoner'],
        ],
        'qwen' => [
            'label' => '阿里千问',
            'transport' => 'openai_compatible',
            'base_url' => 'https://dashscope.aliyuncs.com/compatible-mode/v1',
            'models' => ['qwen-vl-max', 'qwen-vl-plus', 'qwen2.5-vl-72b-instruct'],
        ],
        'gemini' => [
            'label' => 'Google Gemini',
            'transport' => 'gemini',
            'base_url' => 'https://generativelanguage.googleapis.com/v1beta',
            'models' => ['gemini-2.0-flash', 'gemini-2.5-flash', 'gemini-2.5-pro'],
        ],
    ];

    public function all(): array
    {
        $activeProvider = strtolower(trim((string) Utils::config(ConfigKey::AiProvider, 'gpt')));
        $stored = Utils::config(ConfigKey::AiProviderSettings, collect());
        $storedArray = is_array($stored) ? $stored : (method_exists($stored, 'toArray') ? $stored->toArray() : []);

        $providers = [];
        foreach (self::PROVIDER_META as $provider => $meta) {
            $saved = Arr::get($storedArray, $provider, []);
            $models = $this->normalizeModels($saved['models'] ?? $meta['models']);
            if ($models === []) {
                $models = $meta['models'];
            }

            $defaultModel = trim((string) ($saved['default_model'] ?? ''));
            if ($defaultModel === '' || ! in_array($defaultModel, $models, true)) {
                $defaultModel = $models[0] ?? '';
            }

            $providers[$provider] = [
                'provider' => $provider,
                'label' => $meta['label'],
                'transport' => $meta['transport'],
                'base_url' => trim((string) ($saved['base_url'] ?? $meta['base_url'])) ?: $meta['base_url'],
                'api_key' => trim((string) ($saved['api_key'] ?? '')),
                'default_model' => $defaultModel,
                'models' => $models,
                'remote_models' => $this->normalizeModels($saved['remote_models'] ?? []),
                'remote_models_synced_at' => trim((string) ($saved['remote_models_synced_at'] ?? '')) ?: null,
                'ready' => trim((string) ($saved['api_key'] ?? '')) !== '' && $defaultModel !== '',
            ];
        }

        if (! isset($providers[$activeProvider])) {
            $activeProvider = array_key_first($providers) ?: 'gpt';
        }

        return [
            'active_provider' => $activeProvider,
            'providers' => $providers,
            'provider_options' => collect($providers)->map(fn (array $item) => [
                'provider' => $item['provider'],
                'label' => $item['label'],
                'ready' => $item['ready'],
            ])->values()->all(),
        ];
    }

    public function active(): array
    {
        return $this->activeForUser();
    }

    public function save(array $payload): array
    {
        $activeProvider = strtolower(trim((string) ($payload['active_provider'] ?? 'gpt')));
        if (! isset(self::PROVIDER_META[$activeProvider])) {
            throw new \InvalidArgumentException('不支持的 AI 提供商');
        }

        $providersInput = is_array($payload['providers'] ?? null) ? $payload['providers'] : [];
        $existingProviders = $this->all()['providers'] ?? [];
        $providers = [];
        foreach (self::PROVIDER_META as $provider => $meta) {
            $item = is_array($providersInput[$provider] ?? null) ? $providersInput[$provider] : [];
            $existing = is_array($existingProviders[$provider] ?? null) ? $existingProviders[$provider] : [];
            $models = $this->normalizeModels($item['models'] ?? $meta['models']);
            if ($models === []) {
                $models = $meta['models'];
            }

            $defaultModel = trim((string) ($item['default_model'] ?? ''));
            if ($defaultModel === '' || ! in_array($defaultModel, $models, true)) {
                $defaultModel = $models[0] ?? '';
            }

            $providers[$provider] = [
                'label' => $meta['label'],
                'base_url' => trim((string) ($item['base_url'] ?? $meta['base_url'])) ?: $meta['base_url'],
                'api_key' => trim((string) ($item['api_key'] ?? '')),
                'default_model' => $defaultModel,
                'models' => $models,
                'remote_models' => $this->normalizeModels($item['remote_models'] ?? ($existing['remote_models'] ?? [])),
                'remote_models_synced_at' => trim((string) ($item['remote_models_synced_at'] ?? ($existing['remote_models_synced_at'] ?? ''))) ?: null,
            ];
        }

        $now = now()->format('Y-m-d H:i:s');
        Config::query()->upsert([
            [
                'name' => ConfigKey::AiProvider,
                'value' => $activeProvider,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => ConfigKey::AiProviderSettings,
                'value' => json_encode($providers, JSON_UNESCAPED_UNICODE),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ], ['name'], ['value', 'updated_at']);

        Cache::forget('configs');

        return $this->all();
    }

    public function fetchModels(?string $provider = null, ?string $apiKey = null, ?string $baseUrl = null): array
    {
        $config = $this->all();
        $provider = strtolower(trim((string) ($provider ?: $config['active_provider'] ?? 'gpt')));
        $item = $config['providers'][$provider] ?? null;
        if (! is_array($item)) {
            throw new \RuntimeException('AI 提供商配置不存在');
        }

        $baseUrl = rtrim(trim((string) ($baseUrl ?: ($item['base_url'] ?? ''))), '/');
        $apiKey = trim((string) ($apiKey ?: ($item['api_key'] ?? '')));
        if ($baseUrl === '' || $apiKey === '') {
            throw new \RuntimeException('请先配置当前提供商的 Base URL 和 API Key');
        }

        $models = match ((string) ($item['transport'] ?? 'openai_compatible')) {
            'gemini' => $this->fetchGeminiModels($baseUrl, $apiKey),
            default => $this->fetchOpenAiCompatibleModels($baseUrl, $apiKey),
        };

        if ($models === []) {
            throw new \RuntimeException('未从远端接口获取到可用模型');
        }

        $selectedModels = $this->normalizeModels($item['models'] ?? []);
        $selectedModels = array_values(array_filter(
            $models,
            static fn (string $model) => in_array($model, $selectedModels, true)
        ));
        if ($selectedModels === []) {
            $selectedModels = $models;
        }

        $defaultModel = trim((string) ($item['default_model'] ?? ''));
        if ($defaultModel === '' || ! in_array($defaultModel, $selectedModels, true)) {
            $defaultModel = $selectedModels[0] ?? $models[0] ?? '';
        }

        return [
            'provider' => $provider,
            'label' => (string) ($item['label'] ?? $provider),
            'transport' => (string) ($item['transport'] ?? 'openai_compatible'),
            'base_url' => $baseUrl,
            'models' => $models,
            'selected_models' => $selectedModels,
            'default_model' => $defaultModel,
            'count' => count($models),
            'fetched_at' => now()->toDateTimeString(),
        ];
    }


    /**
     * Get all AI provider configs for a specific user.
     * Falls back to global config if user has no personal settings.
     */
    public function allForUser(User $user): array
    {
        $userConfigs = $user->configs;
        $storedArray = $userConfigs->get('ai_provider_settings');

        // If user has no personal AI config, fall back to global config
        if (empty($storedArray) || !is_array($storedArray)) {
            return $this->all();
        }

        $activeProvider = strtolower(trim((string) $userConfigs->get('ai_provider', 'gpt')));

        $providers = [];
        foreach (self::PROVIDER_META as $provider => $meta) {
            $saved = is_array($storedArray[$provider] ?? null) ? $storedArray[$provider] : [];
            $models = $this->normalizeModels($saved['models'] ?? $meta['models']);
            if ($models === []) {
                $models = $meta['models'];
            }

            $defaultModel = trim((string) ($saved['default_model'] ?? ''));
            if ($defaultModel === '' || ! in_array($defaultModel, $models, true)) {
                $defaultModel = $models[0] ?? '';
            }

            $providers[$provider] = [
                'provider' => $provider,
                'label' => $meta['label'],
                'transport' => $meta['transport'],
                'base_url' => trim((string) ($saved['base_url'] ?? $meta['base_url'])) ?: $meta['base_url'],
                'api_key' => trim((string) ($saved['api_key'] ?? '')),
                'default_model' => $defaultModel,
                'models' => $models,
                'remote_models' => $this->normalizeModels($saved['remote_models'] ?? []),
                'remote_models_synced_at' => trim((string) ($saved['remote_models_synced_at'] ?? '')) ?: null,
                'ready' => trim((string) ($saved['api_key'] ?? '')) !== '' && $defaultModel !== '',
            ];
        }

        if (! isset($providers[$activeProvider])) {
            $activeProvider = array_key_first($providers) ?: 'gpt';
        }

        return [
            'active_provider' => $activeProvider,
            'providers' => $providers,
            'provider_options' => collect($providers)->map(fn (array $item) => [
                'provider' => $item['provider'],
                'label' => $item['label'],
                'ready' => $item['ready'],
            ])->values()->all(),
        ];
    }

    /**
     * Save a single provider's config for a specific user.
     */
    public function saveProviderForUser(User $user, string $providerKey, array $providerData): array
    {
        if (! isset(self::PROVIDER_META[$providerKey])) {
            throw new \InvalidArgumentException('不支持的 AI 提供商');
        }

        $meta = self::PROVIDER_META[$providerKey];
        $configs = $user->configs->toArray();
        $settings = is_array($configs['ai_provider_settings'] ?? null) ? $configs['ai_provider_settings'] : [];

        $existing = is_array($settings[$providerKey] ?? null) ? $settings[$providerKey] : [];

        $models = $this->normalizeModels($providerData['models'] ?? $existing['models'] ?? $meta['models']);
        if ($models === []) {
            $models = $meta['models'];
        }

        $defaultModel = trim((string) ($providerData['default_model'] ?? ''));
        if ($defaultModel === '' || ! in_array($defaultModel, $models, true)) {
            $defaultModel = $models[0] ?? '';
        }

        $settings[$providerKey] = [
            'api_key' => trim((string) ($providerData['api_key'] ?? '')),
            'base_url' => trim((string) ($providerData['base_url'] ?? $meta['base_url'])) ?: $meta['base_url'],
            'default_model' => $defaultModel,
            'models' => $models,
            'remote_models' => $this->normalizeModels($providerData['remote_models'] ?? ($existing['remote_models'] ?? [])),
            'remote_models_synced_at' => trim((string) ($providerData['remote_models_synced_at'] ?? ($existing['remote_models_synced_at'] ?? ''))) ?: null,
        ];

        if (empty($configs['ai_provider'])) {
            $configs['ai_provider'] = $providerKey;
        }

        $configs['ai_provider_settings'] = $settings;
        $user->configs = collect($configs);
        $user->save();

        return $this->allForUser($user);
    }

    /**
     * Set the active AI provider for a specific user.
     */
    public function setActiveProviderForUser(User $user, string $providerKey): array
    {
        if (! isset(self::PROVIDER_META[$providerKey])) {
            throw new \InvalidArgumentException('不支持的 AI 提供商');
        }

        $configs = $user->configs->toArray();
        $configs['ai_provider'] = $providerKey;

        // Initialize settings from global if user has none yet
        if (empty($configs['ai_provider_settings'])) {
            $globalConfig = $this->all();
            $settings = [];
            foreach ($globalConfig['providers'] as $p => $item) {
                $settings[$p] = [
                    'api_key' => $item['api_key'] ?? '',
                    'base_url' => $item['base_url'] ?? '',
                    'default_model' => $item['default_model'] ?? '',
                    'models' => $item['models'] ?? [],
                    'remote_models' => $item['remote_models'] ?? [],
                ];
            }
            $configs['ai_provider_settings'] = $settings;
        }

        $user->configs = collect($configs);
        $user->save();

        return $this->allForUser($user);
    }

    /**
     * Get the active provider config, user-aware.
     * Falls back to global config when no user is authenticated.
     */
    public function activeForUser(?User $user = null): array
    {
        $user = $user ?? Auth::user();
        if ($user) {
            $config = $this->allForUser($user);
        } else {
            $config = $this->all();
        }

        $activeProvider = (string) $config['active_provider'];
        $provider = $config['providers'][$activeProvider] ?? null;
        if (! $provider) {
            throw new \RuntimeException('AI 提供商配置不存在');
        }

        return $provider;
    }

    private function fetchOpenAiCompatibleModels(string $baseUrl, string $apiKey): array
    {
        $response = Http::acceptJson()
            ->withToken($apiKey)
            ->timeout(30)
            ->get($baseUrl.'/models');

        if ($response->failed()) {
            throw new \RuntimeException($this->extractProviderError($response, '模型列表获取失败'));
        }

        $models = collect((array) $response->json('data', []))
            ->map(fn (mixed $item) => is_array($item) ? trim((string) ($item['id'] ?? '')) : '')
            ->filter()
            ->unique()
            ->values()
            ->all();

        sort($models, SORT_NATURAL);

        return $models;
    }

    private function fetchGeminiModels(string $baseUrl, string $apiKey): array
    {
        $response = Http::acceptJson()
            ->timeout(30)
            ->get($baseUrl.'/models', [
                'key' => $apiKey,
            ]);

        if ($response->failed()) {
            throw new \RuntimeException($this->extractProviderError($response, 'Gemini 模型列表获取失败'));
        }

        $models = collect((array) $response->json('models', []))
            ->filter(function (mixed $item) {
                if (! is_array($item)) {
                    return false;
                }

                $methods = collect((array) ($item['supportedGenerationMethods'] ?? []))
                    ->map(fn (mixed $method) => trim((string) $method))
                    ->filter()
                    ->values()
                    ->all();

                return $methods === [] || in_array('generateContent', $methods, true);
            })
            ->map(function (mixed $item) {
                $name = is_array($item) ? trim((string) ($item['name'] ?? '')) : '';
                return preg_replace('/^models\//', '', $name) ?: '';
            })
            ->filter()
            ->unique()
            ->values()
            ->all();

        sort($models, SORT_NATURAL);

        return $models;
    }

    private function extractProviderError(HttpResponse $response, string $fallback): string
    {
        $message = trim((string) (
            $response->json('error.message')
            ?? $response->json('message')
            ?? ''
        ));

        if ($message !== '') {
            return $message;
        }

        $body = trim((string) $response->body());
        if ($body !== '') {
            return mb_substr($body, 0, 300);
        }

        return $fallback.'（HTTP '.$response->status().'）';
    }

    private function normalizeModels(mixed $models): array
    {
        if (! is_array($models)) {
            return [];
        }

        $normalized = [];
        foreach ($models as $model) {
            $value = trim((string) $model);
            if ($value === '' || in_array($value, $normalized, true)) {
                continue;
            }
            $normalized[] = $value;
        }

        return $normalized;
    }
}
