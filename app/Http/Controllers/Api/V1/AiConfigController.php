<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AiProviderConfigService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AiConfigController extends Controller
{
    public function show(AiProviderConfigService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();

        return $this->success('success', $service->allForUser($user));
    }

    public function update(Request $request, AiProviderConfigService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();

        try {
            $validated = $request->validate([
                'provider' => 'required|string|in:gpt,deepseek,qwen,gemini',
                'api_key' => 'nullable|string|max:500',
                'base_url' => 'nullable|string|max:500',
                'default_model' => 'nullable|string|max:120',
                'models' => 'nullable|array|max:20',
                'models.*' => 'nullable|string|max:120',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        $provider = $validated['provider'];
        unset($validated['provider']);

        $config = $service->saveProviderForUser($user, $provider, $validated);

        return $this->success('配置已保存', $config);
    }

    public function setActive(Request $request, AiProviderConfigService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();

        try {
            $validated = $request->validate([
                'active_provider' => 'required|string|in:gpt,deepseek,qwen,gemini',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        $config = $service->setActiveProviderForUser($user, $validated['active_provider']);

        return $this->success('已切换启用提供商', $config);
    }

    public function models(Request $request, string $provider, AiProviderConfigService $service): Response
    {
        try {
            $validated = $request->validate([
                'api_key' => 'nullable|string|max:500',
                'base_url' => 'nullable|string|max:500',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        try {
            $payload = $service->fetchModels(
                $provider,
                $validated['api_key'] ?? null,
                $validated['base_url'] ?? null
            );
        } catch (\Throwable $e) {
            return $this->fail($e->getMessage());
        }

        return $this->success('模型列表获取成功', $payload);
    }
}