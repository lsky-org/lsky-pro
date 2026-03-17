<?php

namespace App\Services\ImageProcessing;

use App\Models\Image;
use App\Models\User;
use App\Utils;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use League\Flysystem\FilesystemException;

class ImageProcessExecutor
{
    private const RULES = [
        'crop' => 'nullable|array',
        'crop.x' => 'required_with:crop|integer|min:0|max:20000',
        'crop.y' => 'required_with:crop|integer|min:0|max:20000',
        'crop.width' => 'required_with:crop|integer|min:1|max:20000',
        'crop.height' => 'required_with:crop|integer|min:1|max:20000',
        'transform' => 'nullable|array',
        'transform.rotate' => 'nullable|numeric|min:-360|max:360',
        'transform.flip' => 'nullable|string|in:horizontal,vertical,both',
        'resize' => 'nullable|array',
        'resize.width' => 'nullable|integer|min:1|max:10000',
        'resize.height' => 'nullable|integer|min:1|max:10000',
        'resize.fit' => 'nullable|string|in:contain,cover,fill,inside,outside',
        'filters' => 'nullable|array',
        'filters.grayscale' => 'nullable|boolean',
        'filters.blur' => 'nullable|numeric|min:0|max:50',
        'filters.sharpen' => 'nullable|numeric|min:0|max:10',
        'filters.contrast' => 'nullable|numeric|min:-100|max:100',
        'watermark' => 'nullable|array',
        'watermark.text' => 'nullable|string|max:500',
        'watermark.position' => 'nullable|string|in:top-left,top,top-right,left,center,right,bottom-left,bottom,bottom-right',
        'watermark.size' => 'nullable|integer|min:8|max:200',
        'watermark.color' => ['nullable', 'string', 'regex:/^#[0-9a-fA-F]{6}([0-9a-fA-F]{2})?$/'],
    ];

    /**
     * @throws ValidationException
     */
    public function validatePayload(array $payload): array
    {
        return Validator::make($payload, self::RULES)->validate();
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array{ok: bool, message: string, data: array<string, mixed>}
     */
    public function execute(
        User $user,
        string $imageKey,
        ?int $spaceId,
        array $payload,
        ImageProcessingManager $processingManager
    ): array {
        /** @var Image|null $image */
        // FIX-25: 始终限制 space_id，为 null 时使用用户个人空间
        $effectiveSpaceId = $spaceId ?? $user->teamSpaces()
            ->where('team_spaces.is_personal', true)
            ->value('team_spaces.id');
        $image = $user->images()
            ->where('space_id', $effectiveSpaceId)
            ->where('key', $imageKey)
            ->with(['group:id,configs', 'strategy:id,key,configs'])
            ->first();

        if (! $image) {
            return [
                'ok' => false,
                'message' => '图片不存在',
                'data' => [],
            ];
        }

        if (strpos((string) $image->mimetype, 'image/') !== 0) {
            return [
                'ok' => false,
                'message' => '仅支持处理图片类型资源',
                'data' => [],
            ];
        }

        try {
            $operations = $this->normalizeOperations($image, $this->buildOperations($payload));
        } catch (\RuntimeException $e) {
            return [
                'ok' => false,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }

        try {
            $contents = $image->filesystem()->read($image->pathname);
            $result = $processingManager->process($contents, (string) $image->mimetype, $operations);
        } catch (FilesystemException $e) {
            Utils::e($e, 'API 图片处理读取文件失败');

            return [
                'ok' => false,
                'message' => '读取图片失败',
                'data' => [],
            ];
        } catch (\Throwable $e) {
            Utils::e($e, 'API 图片处理失败');

            return [
                'ok' => false,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }

        return [
            'ok' => true,
            'message' => 'success',
            'data' => [
                'key' => $image->key,
                'driver' => $processingManager->configuredDriverName(),
                'operations' => $operations,
                'mimetype' => $result['mimetype'],
                'width' => $result['width'],
                'height' => $result['height'],
                'content_base64' => base64_encode($result['contents']),
            ],
        ];
    }

    /**
     * @param  array<string, mixed>  $payload
     * @return array<string, array<string, mixed>>
     */
    private function buildOperations(array $payload): array
    {
        return array_filter([
            'crop' => (array) ($payload['crop'] ?? []),
            'transform' => (array) ($payload['transform'] ?? []),
            'resize' => (array) ($payload['resize'] ?? []),
            'filters' => (array) ($payload['filters'] ?? []),
            'watermark' => (array) ($payload['watermark'] ?? []),
        ], fn ($value) => ! empty($value));
    }

    /**
     * @param  array<string, array<string, mixed>>  $operations
     * @return array<string, array<string, mixed>>
     */
    private function normalizeOperations(Image $image, array $operations): array
    {
        if (! isset($operations['crop'])) {
            return $operations;
        }

        $sourceWidth = max(1, (int) $image->width);
        $sourceHeight = max(1, (int) $image->height);
        $crop = (array) $operations['crop'];
        $x = isset($crop['x']) ? (int) $crop['x'] : 0;
        $y = isset($crop['y']) ? (int) $crop['y'] : 0;
        $width = isset($crop['width']) ? (int) $crop['width'] : 0;
        $height = isset($crop['height']) ? (int) $crop['height'] : 0;

        $x = max(0, min($x, $sourceWidth - 1));
        $y = max(0, min($y, $sourceHeight - 1));
        $width = min(max(1, $width), $sourceWidth - $x);
        $height = min(max(1, $height), $sourceHeight - $y);

        if ($width <= 0 || $height <= 0) {
            throw new \RuntimeException('裁剪区域超出图片边界');
        }

        $operations['crop'] = [
            'x' => $x,
            'y' => $y,
            'width' => $width,
            'height' => $height,
        ];

        return $operations;
    }
}
