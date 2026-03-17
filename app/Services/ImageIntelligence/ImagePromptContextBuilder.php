<?php

namespace App\Services\ImageIntelligence;

use App\Models\Image;
use App\Models\ImageIntelligenceRecord;

class ImagePromptContextBuilder
{
    /**
     * @return array<string, mixed>
     */
    public function build(Image $image): array
    {
        $image->loadMissing('tags:id,name', 'intelligenceRecord');

        $legacyContext = $this->buildLegacyContext($image);
        $record = $image->intelligenceRecord;

        if (! $record) {
            return $legacyContext;
        }

        return array_merge($legacyContext, $this->buildIntelligenceOverrides($record, $legacyContext));
    }

    /**
     * @return array<string, mixed>
     */
    private function buildLegacyContext(Image $image): array
    {
        $tags = $this->normalizeList($image->tags->pluck('name')->all());
        $filename = trim((string) ($image->alias_name ?: $image->origin_name ?: $image->name));
        $dimensions = sprintf('%dx%d', (int) $image->width, (int) $image->height);
        $orientation = $this->resolveOrientation((int) $image->width, (int) $image->height);
        $ocrText = $this->truncate($image->ocr_text, 500);
        $keywords = $this->normalizeList([
            $filename,
            trim((string) $image->origin_name),
            trim((string) $image->alias_name),
            trim((string) $image->extension),
            trim((string) $image->mimetype),
            ...$tags,
        ]);
        $caption = $this->buildLegacyCaption($filename, (string) $image->extension, $dimensions);
        $summary = $this->buildLegacySummary($caption, $tags, $ocrText);
        $promptHint = $this->buildLegacyPromptHint(
            $filename,
            (string) $image->mimetype,
            $dimensions,
            (string) $orientation['label'],
            $tags,
            $ocrText
        );

        return [
            'key' => (string) $image->key,
            'filename' => $filename,
            'origin_name' => (string) $image->origin_name,
            'mimetype' => (string) $image->mimetype,
            'size_kb' => (float) $image->size,
            'dimensions' => $dimensions,
            'orientation' => $orientation['key'],
            'orientation_label' => $orientation['label'],
            'orientation_hint' => $orientation['hint'],
            'tags' => $tags,
            'labels' => $tags,
            'keywords' => $keywords,
            'caption' => $caption,
            'summary' => $summary,
            'prompt_hint' => $promptHint,
            'analysis_status' => 'missing',
            'analysis_source' => 'legacy',
            'analysis_mode' => 'legacy',
            'analysis_fallback' => false,
            'analysis_fallback_reason' => null,
            'analysis_provider' => '',
            'analysis_model' => '',
            'analysis_source_version' => null,
            'analysis_last_error' => null,
            'context_source' => 'legacy',
            'analysis_hint' => '未找到 intelligence 记录，当前仅根据文件名、尺寸、方向、标签和 OCR 等基础信息生成上下文。',
            'ocr_text' => $ocrText,
            'analyzed_at' => null,
            'url' => (string) $image->url,
        ];
    }

    /**
     * @param  array<string, mixed>  $legacyContext
     * @return array<string, mixed>
     */
    private function buildIntelligenceOverrides(ImageIntelligenceRecord $record, array $legacyContext): array
    {
        $labels = $this->normalizeList($record->labels);
        $keywords = $this->normalizeList($record->keywords);
        $caption = $this->truncate($record->caption, 500);
        $summary = $this->truncate($record->summary, 800);
        $promptHint = $this->truncate($record->prompt_hint, 1000);
        $ocrText = $this->truncate($record->ocr_text, 500);
        $analysisStatus = trim((string) $record->status);
        $analysisSource = trim((string) $record->source);
        $status = $analysisStatus !== '' ? $analysisStatus : 'missing';
        $metadata = is_array($record->metadata) ? $record->metadata : [];
        $fallback = $this->isFallbackRecord($analysisSource, $metadata);
        $hasStructuredContent = $this->hasStructuredContent([
            $labels,
            $keywords,
            $caption,
            $summary,
            $promptHint,
            $ocrText,
        ]);
        $contextSource = $this->resolveContextSource($status, $hasStructuredContent);

        return [
            'labels' => $labels !== [] ? $labels : $legacyContext['labels'],
            'keywords' => $keywords !== [] ? $keywords : $legacyContext['keywords'],
            'caption' => $caption !== '' ? $caption : $legacyContext['caption'],
            'summary' => $summary !== '' ? $summary : $legacyContext['summary'],
            'prompt_hint' => $promptHint !== '' ? $promptHint : $legacyContext['prompt_hint'],
            'analysis_status' => $status,
            'analysis_source' => $analysisSource !== '' ? $analysisSource : $legacyContext['analysis_source'],
            'analysis_mode' => $this->resolveAnalysisMode($analysisSource, $fallback),
            'analysis_fallback' => $fallback,
            'analysis_fallback_reason' => $this->truncate((string) ($metadata['fallback_reason'] ?? ''), 200) ?: null,
            'analysis_provider' => $this->truncate((string) ($metadata['provider'] ?? ''), 100),
            'analysis_model' => $this->truncate((string) ($metadata['model'] ?? ''), 200),
            'analysis_source_version' => $record->source_version ? (int) $record->source_version : null,
            'analysis_last_error' => $this->truncate($record->last_error, 500) ?: null,
            'context_source' => $contextSource,
            'analysis_hint' => $this->resolveAnalysisHint($status, $hasStructuredContent, $fallback),
            'ocr_text' => $ocrText !== '' ? $ocrText : $legacyContext['ocr_text'],
            'analyzed_at' => optional($record->analyzed_at)->toDateTimeString(),
        ];
    }

    /**
     * @param  iterable<mixed>|mixed  $values
     * @return array<int, string>
     */
    private function normalizeList($values): array
    {
        return collect(is_iterable($values) ? $values : [])
            ->map(fn (mixed $item) => trim((string) $item))
            ->filter()
            ->unique()
            ->values()
            ->all();
    }

    private function buildLegacyCaption(string $filename, string $extension, string $dimensions): string
    {
        $caption = trim(sprintf(
            '%s，格式 %s，尺寸 %s。',
            $filename !== '' ? $filename : '未命名图片',
            $extension !== '' ? $extension : 'unknown',
            $dimensions
        ));

        return $this->truncate($caption, 500);
    }

    /**
     * @param  array<int, string>  $tags
     */
    private function buildLegacySummary(string $caption, array $tags, string $ocrText): string
    {
        $summary = trim(implode(' ', array_filter([
            $caption,
            $tags !== [] ? '标签：'.implode('、', $tags).'。' : '标签：暂无。',
            $ocrText !== '' ? 'OCR：'.$ocrText : null,
        ])));

        return $this->truncate($summary, 800);
    }

    /**
     * @param  array<int, string>  $tags
     */
    private function buildLegacyPromptHint(
        string $filename,
        string $mimetype,
        string $dimensions,
        string $orientationLabel,
        array $tags,
        string $ocrText
    ): string {
        $hint = trim(implode("\n", array_filter([
            '文件名：'.($filename !== '' ? $filename : '未命名图片'),
            '类型：'.($mimetype !== '' ? $mimetype : 'unknown'),
            '尺寸：'.$dimensions,
            '方向：'.($orientationLabel !== '' ? $orientationLabel : '未知方向'),
            $tags !== [] ? '标签：'.implode('、', $tags) : '标签：暂无',
            $ocrText !== '' ? 'OCR/历史文本：'.$ocrText : null,
        ])));

        return $this->truncate($hint, 1000);
    }

    /**
     * @return array{key: string, label: string, hint: string}
     */
    private function resolveOrientation(int $width, int $height): array
    {
        if ($width <= 0 || $height <= 0) {
            return [
                'key' => 'unknown',
                'label' => '未知方向',
                'hint' => '图片方向未知，请结合主体构图和目标场景自行判断版式。',
            ];
        }

        if ($width === $height) {
            return [
                'key' => 'square',
                'label' => '方图',
                'hint' => '当前为方图，适合居中主体、头像、卡片封面或电商主图场景。',
            ];
        }

        if ($width > $height) {
            return [
                'key' => 'landscape',
                'label' => '横图',
                'hint' => '当前为横图，适合横幅、场景叙事、封面头图或宽画幅构图。',
            ];
        }

        return [
            'key' => 'portrait',
            'label' => '竖图',
            'hint' => '当前为竖图，适合人物主体、海报、移动端封面或纵向叙事构图。',
        ];
    }

    /**
     * @param  array<int, mixed>  $values
     */
    private function hasStructuredContent(array $values): bool
    {
        foreach ($values as $value) {
            if (is_array($value) && $value !== []) {
                return true;
            }

            if (! is_array($value) && trim((string) $value) !== '') {
                return true;
            }
        }

        return false;
    }

    private function resolveContextSource(string $status, bool $hasStructuredContent): string
    {
        if ($status === 'ready') {
            return 'intelligence+legacy';
        }

        if ($hasStructuredContent) {
            return 'legacy+partial_intelligence';
        }

        return 'legacy_fallback';
    }

    private function resolveAnalysisHint(string $status, bool $hasStructuredContent, bool $fallback): string
    {
        return match ($status) {
            'ready' => $fallback
                ? 'intelligence 已就绪，但当前结果来自占位/回退内容；系统会优先使用已有结构化字段，并继续依赖 legacy 元数据补齐缺口。'
                : 'intelligence 已就绪，当前优先使用结构化描述、摘要、提示词线索与标签，并用 legacy 元数据补齐缺口。',
            'pending' => 'intelligence 已进入待处理队列，当前先使用 legacy 元数据；后续生成完成后会获得更完整上下文。',
            'processing' => $hasStructuredContent
                ? 'intelligence 正在处理中，当前会合并已写入的 intelligence 片段与 legacy 元数据。'
                : 'intelligence 正在处理中，当前先使用 legacy 元数据；处理完成后会获得更完整上下文。',
            'failed' => $hasStructuredContent
                ? 'intelligence 最近一次生成失败，当前会尽量保留已有 intelligence 片段，并用 legacy 元数据兜底。'
                : 'intelligence 最近一次生成失败，当前已回退到 legacy 元数据，请按现有标签、OCR 与文件信息继续推理。',
            default => '未识别到可用 intelligence 状态，当前回退到 legacy 元数据生成上下文。',
        };
    }

    /**
     * @param  array<string, mixed>  $metadata
     */
    private function isFallbackRecord(string $analysisSource, array $metadata): bool
    {
        if ((bool) ($metadata['fallback'] ?? false)) {
            return true;
        }

        return trim($analysisSource) === 'metadata_placeholder';
    }

    private function resolveAnalysisMode(string $analysisSource, bool $fallback): string
    {
        if ($fallback) {
            return 'placeholder';
        }

        return str_starts_with(trim($analysisSource), 'ai_provider:')
            ? 'provider_backed'
            : 'intelligence';
    }

    private function truncate(?string $value, int $limit): string
    {
        return mb_substr(trim((string) $value), 0, $limit);
    }
}
