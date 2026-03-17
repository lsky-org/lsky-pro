<?php

namespace App\Services\ImageIntelligence;

use App\Models\Image;
use App\Services\AiMultimodalContentService;
use League\Flysystem\FilesystemException;

class ProviderBackedImageIntelligenceAnalyzer
{
    public function __construct(
        private readonly AiMultimodalContentService $multimodalService
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function analyze(Image $image): array
    {
        [$mimeType, $base64Contents] = $this->loadImagePayload($image);
        $response = $this->multimodalService->generateTextFromImage(
            $this->buildInstruction($image),
            $mimeType,
            $base64Contents,
            [
                'temperature' => 0.1,
                'max_output_tokens' => 1400,
            ]
        );
        $decoded = $this->decodePayload((string) $response['text']);
        $provider = is_array($response['provider'] ?? null) ? $response['provider'] : [];

        $labels = $this->normalizeList($decoded['labels'] ?? []);
        $keywords = $this->normalizeList($decoded['keywords'] ?? []);
        $caption = $this->truncate((string) ($decoded['caption'] ?? ''), 5000);
        $summary = $this->truncate((string) ($decoded['summary'] ?? ''), 5000);
        $promptHint = $this->truncate((string) ($decoded['prompt_hint'] ?? ''), 5000);
        $ocrText = $this->truncate((string) ($decoded['ocr_text'] ?? ''), 10000);

        if ($labels === [] && $keywords === [] && $caption === '' && $summary === '' && $promptHint === '' && $ocrText === '') {
            throw new \RuntimeException('AI 图像分析未返回可用结构化内容');
        }

        return [
            'status' => 'ready',
            'source' => 'ai_provider:'.((string) ($provider['provider'] ?? 'gpt')),
            'source_version' => 2,
            'ocr_text' => $ocrText,
            'caption' => $caption,
            'summary' => $summary,
            'prompt_hint' => $promptHint,
            'labels' => $labels,
            'keywords' => $keywords,
            'metadata' => [
                'provider' => (string) ($provider['provider'] ?? ''),
                'provider_label' => (string) ($provider['label'] ?? ''),
                'model' => (string) ($provider['model'] ?? ''),
                'transport' => (string) ($provider['transport'] ?? ''),
                'base_url' => (string) ($provider['base_url'] ?? ''),
                'fallback' => false,
                'fallback_reason' => null,
                'generated_by' => 'image_intelligence.provider_backed.v2',
            ],
            'analyzed_at' => now(),
            'last_error' => null,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function activeProviderSnapshot(): array
    {
        return $this->multimodalService->activeProviderSnapshot();
    }

    /**
     * @return array{0: string, 1: string}
     */
    private function loadImagePayload(Image $image): array
    {
        $mimeType = trim((string) $image->mimetype);
        if (! str_starts_with($mimeType, 'image/')) {
            throw new \RuntimeException('AI 图像分析当前仅支持图片资源');
        }

        try {
            $contents = $image->filesystem()->read($image->pathname);
        } catch (FilesystemException $e) {
            throw new \RuntimeException('读取图片源文件失败', 0, $e);
        } catch (\Throwable $e) {
            throw new \RuntimeException('读取图片源文件失败', 0, $e);
        }

        if ($contents === '') {
            throw new \RuntimeException('图片内容为空，无法执行 AI 图像分析');
        }

        return [$mimeType, base64_encode($contents)];
    }

    private function buildInstruction(Image $image): string
    {
        $filename = trim((string) ($image->alias_name ?: $image->origin_name ?: $image->name));
        $tags = $image->tags->pluck('name')
            ->map(fn (mixed $item) => trim((string) $item))
            ->filter()
            ->unique()
            ->values()
            ->implode('、');
        $dimensions = ((int) $image->width > 0 && (int) $image->height > 0)
            ? sprintf('%dx%d', (int) $image->width, (int) $image->height)
            : 'unknown';

        return trim(implode("\n", [
            '你是图片智能分析器。请根据图片内容输出严格 JSON，不要输出 Markdown，不要输出额外说明。',
            '返回 schema: {"caption":"","summary":"","prompt_hint":"","labels":[],"keywords":[],"ocr_text":""}',
            '规则：',
            '- 全部使用 zh-CN。',
            '- caption: 1 句简洁图片描述。',
            '- summary: 1-2 句补充主体、场景、构图、风格和用途。',
            '- prompt_hint: 生成更详细的图片提示词线索，强调主体、色彩、风格、构图、氛围和适用场景。',
            '- labels: 3-8 个简短标签。',
            '- keywords: 5-12 个关键词，允许补充风格、对象、场景和主题词。',
            '- ocr_text: 仅填写图片里真正看得到的文字；如果没有文字，返回空字符串。',
            '- 如果信息不确定，宁可保守，不要编造不存在的对象或文字。',
            '辅助信息：',
            '- filename: '.($filename !== '' ? $filename : '未命名图片'),
            '- extension: '.((string) ($image->extension ?: 'unknown')),
            '- mimetype: '.((string) ($image->mimetype ?: 'unknown')),
            '- dimensions: '.$dimensions,
            '- manual_tags: '.($tags !== '' ? $tags : '暂无'),
        ]));
    }

    /**
     * @return array<string, mixed>
     */
    private function decodePayload(string $text): array
    {
        $normalized = trim($text);
        $normalized = preg_replace('/^```(?:json)?\s*|\s*```$/iu', '', $normalized) ?: $normalized;

        $decoded = json_decode($normalized, true);
        if (is_array($decoded)) {
            return $decoded;
        }

        $start = strpos($normalized, '{');
        $end = strrpos($normalized, '}');
        if ($start !== false && $end !== false && $end > $start) {
            $decoded = json_decode(substr($normalized, $start, $end - $start + 1), true);
            if (is_array($decoded)) {
                return $decoded;
            }
        }

        throw new \RuntimeException('AI 图像分析未返回可解析 JSON');
    }

    /**
     * @param  iterable<mixed>|mixed  $values
     * @return array<int, string>
     */
    private function normalizeList($values): array
    {
        return collect(is_iterable($values) ? $values : [])
            ->map(fn (mixed $value) => trim((string) $value))
            ->filter()
            ->unique()
            ->values()
            ->take(12)
            ->all();
    }

    private function truncate(string $value, int $limit): string
    {
        return mb_substr(trim($value), 0, $limit);
    }
}
