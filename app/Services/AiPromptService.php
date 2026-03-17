<?php

namespace App\Services;

use App\Models\Image;
use App\Services\ImageIntelligence\ImagePromptContextBuilder;
use League\Flysystem\FilesystemException;

class AiPromptService
{
    private AiMultimodalContentService $multimodalService;
    private ImagePromptContextBuilder $contextBuilder;

    public function __construct(
        AiMultimodalContentService $multimodalService,
        ImagePromptContextBuilder $contextBuilder
    )
    {
        $this->multimodalService = $multimodalService;
        $this->contextBuilder = $contextBuilder;
    }

    /**
     * @return array{
     *     prompt: string,
     *     metadata: array<string, mixed>,
     *     template_used: string,
     *     provider: array<string, mixed>,
     *     language: string,
     *     style: string
     * }
     */
    public function buildPrompt(
        Image $image,
        string $intent,
        ?string $template,
        string $language = 'zh-CN',
        string $style = '专业、简洁、可执行'
    ): array {
        $metadata = $this->contextBuilder->build($image);
        $templateUsed = trim((string) $template) !== ''
            ? (string) $template
            : (string) config('image_processing.ai_prompt_template');
        $instruction = trim(strtr($templateUsed, [
            '{{intent}}' => trim($intent),
            '{{language}}' => trim($language) !== '' ? trim($language) : 'zh-CN',
            '{{style}}' => trim($style) !== '' ? trim($style) : '专业、简洁、可执行',
            '{{metadata_block}}' => $this->toMetadataBlock($metadata),
        ]));

        [$mimeType, $base64Contents] = $this->loadImagePayload($image);
        $response = $this->multimodalService->generateTextFromImage($instruction, $mimeType, $base64Contents, [
            'temperature' => 0.2,
            'max_output_tokens' => 1200,
        ]);
        $provider = is_array($response['provider'] ?? null) ? $response['provider'] : [];

        return [
            'prompt' => (string) ($response['text'] ?? ''),
            'metadata' => $metadata,
            'template_used' => $templateUsed,
            'provider' => [
                'provider' => (string) ($provider['provider'] ?? 'gpt'),
                'label' => (string) ($provider['label'] ?? 'AI Provider'),
                'transport' => (string) ($provider['transport'] ?? 'openai_compatible'),
                'model' => (string) ($provider['model'] ?? ''),
                'base_url' => (string) ($provider['base_url'] ?? ''),
            ],
            'language' => trim($language) !== '' ? trim($language) : 'zh-CN',
            'style' => trim($style) !== '' ? trim($style) : '专业、简洁、可执行',
        ];
    }

    /**
     * @return array{0: string, 1: string}
     */
    private function loadImagePayload(Image $image): array
    {
        $mimeType = trim((string) $image->mimetype);
        if (! str_starts_with($mimeType, 'image/')) {
            throw new \RuntimeException('AI 提示词当前仅支持图片资源，请选择图片后再执行');
        }

        try {
            $contents = $image->filesystem()->read($image->pathname);
        } catch (FilesystemException $e) {
            throw new \RuntimeException('读取图片源文件失败', 0, $e);
        } catch (\Throwable $e) {
            throw new \RuntimeException('读取图片源文件失败', 0, $e);
        }

        if ($contents === '') {
            throw new \RuntimeException('图片内容为空，无法生成 AI 提示词');
        }

        return [$mimeType, base64_encode($contents)];
    }
    /**
     * @param  array<string, mixed>  $metadata
     */
    private function toMetadataBlock(array $metadata): string
    {
        $lines = [];
        foreach ($metadata as $key => $value) {
            if (is_array($value)) {
                $value = implode(', ', $value);
            } elseif (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            }
            $lines[] = sprintf('- %s: %s', $key, (string) $value);
        }

        return implode(PHP_EOL, $lines);
    }
}
