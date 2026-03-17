<?php

namespace App\Services\ImageIntelligence;

use App\Models\Image;

class LocalImageIntelligenceAnalyzer
{
    private const SCRIPT_PATH = '/opt/models/classify_ocr.py';
    private const UPLOADS_ROOT = '/var/www/html/storage/app/uploads';

    /**
     * @return array<string, mixed>
     */
    public function analyze(Image $image): array
    {
        $filePath = $this->resolveFilePath($image);

        if (! file_exists($filePath)) {
            throw new \RuntimeException("图片文件不存在: {$filePath}");
        }

        // Use proc_open for safe execution without shell interpolation
        $process = proc_open(
            ['python3', self::SCRIPT_PATH, $filePath, '--top', '3'],
            [
                0 => ['pipe', 'r'],
                1 => ['pipe', 'w'],
                2 => ['pipe', 'w'],
            ],
            $pipes
        );

        if (! is_resource($process)) {
            throw new \RuntimeException('无法启动本地图像分析进程');
        }

        fclose($pipes[0]);
        $output = stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        $exitCode = proc_close($process);

        if ($exitCode !== 0 || empty($output)) {
            throw new \RuntimeException('本地图像分析脚本未返回结果');
        }

        $decoded = json_decode(trim($output), true);
        if (! is_array($decoded) || isset($decoded['error'])) {
            throw new \RuntimeException('本地图像分析失败: ' . ($decoded['error'] ?? '未知错误'));
        }

        $labels = $this->normalizeList($decoded['labels'] ?? []);
        $keywords = $this->normalizeList($decoded['keywords'] ?? []);
        $caption = $this->truncate((string) ($decoded['caption'] ?? ''), 5000);
        $ocrText = $this->truncate((string) ($decoded['ocr_text'] ?? ''), 10000);
        $elapsedMs = (int) ($decoded['elapsed_ms'] ?? 0);

        // Build summary from classification results
        $summary = '';
        if (! empty($decoded['classifications'])) {
            $parts = [];
            foreach (array_slice($decoded['classifications'], 0, 3) as $cls) {
                $parts[] = sprintf('%s(%s) %.1f%%', $cls['zh'] ?? $cls['en'], $cls['en'], ($cls['confidence'] ?? 0) * 100);
            }
            $summary = '识别结果：' . implode('、', $parts);
        }

        return [
            'status' => 'ready',
            'source' => 'local_intelligence',
            'source_version' => 1,
            'ocr_text' => $ocrText,
            'caption' => $caption,
            'summary' => $this->truncate($summary, 5000),
            'prompt_hint' => '',
            'labels' => $labels,
            'keywords' => $keywords,
            'metadata' => [
                'provider' => 'local',
                'provider_label' => 'BLIP-base + Tesseract',
                'model' => 'blip-image-captioning-base',
                'transport' => 'proc_open',
                'base_url' => '',
                'fallback' => false,
                'fallback_reason' => null,
                'elapsed_ms' => $elapsedMs,
                'generated_by' => 'image_intelligence.local.v1',
            ],
            'analyzed_at' => now(),
            'last_error' => null,
        ];
    }

    private function resolveFilePath(Image $image): string
    {
        $path = $image->path ? rtrim($image->path, '/') . '/' : '';
        return self::UPLOADS_ROOT . '/' . $path . $image->name;
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
