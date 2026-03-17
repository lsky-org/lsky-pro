<?php

namespace App\Services;

use Illuminate\Http\Client\Response as HttpResponse;
use Illuminate\Support\Facades\Http;

class AiMultimodalContentService
{
    public function __construct(
        private readonly AiProviderConfigService $providerConfigService
    ) {
    }

    /**
     * @param  array{temperature?: float|int, max_output_tokens?: int}  $options
     * @return array{text: string, provider: array<string, mixed>}
     */
    public function generateTextFromImage(
        string $instruction,
        string $mimeType,
        string $base64Contents,
        array $options = []
    ): array {
        $provider = $this->providerConfigService->active();
        $providerMeta = $this->normalizeProviderMeta($provider);

        if (! $providerMeta['ready']) {
            throw new \RuntimeException('AI 配置未完成，请先在高级功能 - AI 配置中填写 API Key 和默认模型');
        }

        $temperature = isset($options['temperature']) ? (float) $options['temperature'] : 0.2;
        $maxOutputTokens = isset($options['max_output_tokens']) ? max((int) $options['max_output_tokens'], 1) : 1200;

        $text = match ((string) ($providerMeta['transport'] ?? 'openai_compatible')) {
            'gemini' => $this->callGemini($provider, $providerMeta['model'], $instruction, $mimeType, $base64Contents, $temperature, $maxOutputTokens),
            default => $this->callOpenAiCompatible($provider, $providerMeta['model'], $instruction, $mimeType, $base64Contents, $temperature),
        };

        return [
            'text' => $this->normalizeText($text),
            'provider' => $providerMeta,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function activeProviderSnapshot(): array
    {
        try {
            return $this->normalizeProviderMeta($this->providerConfigService->active());
        } catch (\Throwable $e) {
            $config = $this->providerConfigService->all();
            $activeProvider = (string) ($config['active_provider'] ?? 'gpt');
            $provider = is_array($config['providers'][$activeProvider] ?? null)
                ? $config['providers'][$activeProvider]
                : [];

            return $this->normalizeProviderMeta(array_merge($provider, [
                'provider' => $provider['provider'] ?? $activeProvider,
            ]));
        }
    }

    private function callOpenAiCompatible(
        array $provider,
        string $model,
        string $instruction,
        string $mimeType,
        string $base64Contents,
        float $temperature
    ): string {
        $baseUrl = rtrim((string) ($provider['base_url'] ?? ''), '/');
        if ($baseUrl === '') {
            throw new \RuntimeException('AI Base URL 未配置');
        }

        $response = Http::acceptJson()
            ->withToken((string) $provider['api_key'])
            ->timeout(90)
            ->post($baseUrl.'/chat/completions', [
                'model' => $model,
                'temperature' => $temperature,
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => [
                            ['type' => 'text', 'text' => $instruction],
                            [
                                'type' => 'image_url',
                                'image_url' => [
                                    'url' => sprintf('data:%s;base64,%s', $mimeType, $base64Contents),
                                    'detail' => 'high',
                                ],
                            ],
                        ],
                    ],
                ],
            ]);

        if ($response->failed()) {
            throw new \RuntimeException($this->extractProviderError($response, 'AI 模型调用失败'));
        }

        $text = $this->extractTextContent($response->json('choices.0.message.content'))
            ?: $this->extractTextContent($response->json('choices.0.text'));
        if ($text === '') {
            throw new \RuntimeException('AI 模型未返回可用内容');
        }

        return $text;
    }

    private function callGemini(
        array $provider,
        string $model,
        string $instruction,
        string $mimeType,
        string $base64Contents,
        float $temperature,
        int $maxOutputTokens
    ): string {
        $baseUrl = rtrim((string) ($provider['base_url'] ?? ''), '/');
        if ($baseUrl === '') {
            throw new \RuntimeException('Gemini Base URL 未配置');
        }

        $response = Http::acceptJson()
            ->timeout(90)
            ->post($baseUrl.'/models/'.rawurlencode($model).':generateContent?key='.rawurlencode((string) $provider['api_key']), [
                'contents' => [
                    [
                        'role' => 'user',
                        'parts' => [
                            ['text' => $instruction],
                            [
                                'inline_data' => [
                                    'mime_type' => $mimeType,
                                    'data' => $base64Contents,
                                ],
                            ],
                        ],
                    ],
                ],
                'generationConfig' => [
                    'temperature' => $temperature,
                    'maxOutputTokens' => $maxOutputTokens,
                ],
            ]);

        if ($response->failed()) {
            throw new \RuntimeException($this->extractProviderError($response, 'Gemini 调用失败'));
        }

        $parts = (array) $response->json('candidates.0.content.parts', []);
        $text = collect($parts)
            ->map(fn (mixed $part) => is_array($part) ? trim((string) ($part['text'] ?? '')) : '')
            ->filter()
            ->implode("\n\n");
        if ($text === '') {
            throw new \RuntimeException('Gemini 未返回可用内容');
        }

        return $text;
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

    private function extractTextContent(mixed $content): string
    {
        if (is_string($content)) {
            return trim($content);
        }

        if (! is_array($content)) {
            return '';
        }

        return collect($content)
            ->map(function (mixed $chunk) {
                if (is_string($chunk)) {
                    return trim($chunk);
                }

                if (! is_array($chunk)) {
                    return '';
                }

                return trim((string) ($chunk['text'] ?? ''));
            })
            ->filter()
            ->implode("\n\n");
    }

    /**
     * @param  array<string, mixed>  $provider
     * @return array<string, mixed>
     */
    private function normalizeProviderMeta(array $provider): array
    {
        $model = trim((string) ($provider['default_model'] ?? ''));
        $apiKey = trim((string) ($provider['api_key'] ?? ''));

        return [
            'provider' => (string) ($provider['provider'] ?? 'gpt'),
            'label' => (string) ($provider['label'] ?? 'AI Provider'),
            'transport' => (string) ($provider['transport'] ?? 'openai_compatible'),
            'model' => $model,
            'base_url' => (string) ($provider['base_url'] ?? ''),
            'ready' => $apiKey !== '' && $model !== '',
        ];
    }

    private function normalizeText(string $text): string
    {
        $normalized = preg_replace("/\n{3,}/", "\n\n", trim($text)) ?: '';
        if ($normalized === '') {
            throw new \RuntimeException('AI 返回内容为空');
        }

        return $normalized;
    }
}
