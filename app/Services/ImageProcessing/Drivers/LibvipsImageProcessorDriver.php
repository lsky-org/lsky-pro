<?php

namespace App\Services\ImageProcessing\Drivers;

use App\Services\ImageProcessing\Contracts\ImageProcessorDriver;
use RuntimeException;

class LibvipsImageProcessorDriver implements ImageProcessorDriver
{
    public static function isAvailable(): bool
    {
        return extension_loaded('vips') || class_exists(\Jcupitt\Vips\Image::class);
    }

    public static function unavailableReason(): ?string
    {
        if (! extension_loaded('vips') && ! class_exists(\Jcupitt\Vips\Image::class)) {
            return 'libvips php binding is not available.';
        }

        return null;
    }

    public function process(string $contents, string $mimetype, array $operations): array
    {
        if (! class_exists(\Jcupitt\Vips\Image::class)) {
            throw new RuntimeException('libvips driver requires class Jcupitt\\Vips\\Image.');
        }

        $imageClass = \Jcupitt\Vips\Image::class;

        try {
            $image = $imageClass::newFromBuffer($contents, '', ['access' => 'sequential']);
            $image = $this->applyCrop($image, (array) ($operations['crop'] ?? []));
            $image = $this->applyTransform($image, (array) ($operations['transform'] ?? []));
            $image = $this->applyResize($imageClass, $image, (array) ($operations['resize'] ?? []));
            $image = $this->applyFilters($image, (array) ($operations['filters'] ?? []));
            $image = $this->applyWatermark($imageClass, $image, (array) ($operations['watermark'] ?? []));

            $format = $this->resolveOutputFormat($mimetype);
            $processed = $image->writeToBuffer('.'.$format);

            return [
                'contents' => $processed,
                'mimetype' => $this->resolveOutputMime($format),
                'width' => (int) $image->width,
                'height' => (int) $image->height,
            ];
        } catch (\Throwable $e) {
            throw new RuntimeException('libvips process failed: '.$e->getMessage(), 0, $e);
        }
    }

    private function applyCrop(mixed $image, array $crop): mixed
    {
        $x = isset($crop['x']) ? (int) $crop['x'] : -1;
        $y = isset($crop['y']) ? (int) $crop['y'] : -1;
        $width = isset($crop['width']) ? (int) $crop['width'] : 0;
        $height = isset($crop['height']) ? (int) $crop['height'] : 0;
        if ($x < 0 || $y < 0 || $width <= 0 || $height <= 0) {
            return $image;
        }

        $sourceWidth = max(1, (int) $image->width);
        $sourceHeight = max(1, (int) $image->height);
        $width = min($width, $sourceWidth - $x);
        $height = min($height, $sourceHeight - $y);
        if ($width <= 0 || $height <= 0) {
            throw new RuntimeException('Crop area is out of image bounds.');
        }

        return $image->crop($x, $y, $width, $height);
    }

    private function applyResize(string $imageClass, mixed $image, array $resize): mixed
    {
        $width = isset($resize['width']) ? (int) $resize['width'] : 0;
        $height = isset($resize['height']) ? (int) $resize['height'] : 0;
        if ($width <= 0 && $height <= 0) {
            return $image;
        }

        $fit = strtolower((string) ($resize['fit'] ?? 'contain'));
        $targetWidth = $width > 0 ? $width : (int) $image->width;
        $targetHeight = $height > 0 ? $height : (int) $image->height;
        $crop = $fit === 'cover' ? 'centre' : 'none';
        $buffer = $image->writeToBuffer('.png');

        return $imageClass::thumbnail_buffer($buffer, max(1, $targetWidth), [
            'height' => max(1, $targetHeight),
            'crop' => $crop,
            'size' => in_array($fit, ['outside', 'fill'], true) ? 'up' : 'both',
        ]);
    }

    private function applyTransform(mixed $image, array $transform): mixed
    {
        $rotate = isset($transform['rotate']) ? (float) $transform['rotate'] : 0.0;
        if ($rotate !== 0.0) {
            $normalized = ((int) round($rotate) % 360 + 360) % 360;
            if ($normalized === 90) {
                $image = $image->rot90();
            } elseif ($normalized === 180) {
                $image = $image->rot180();
            } elseif ($normalized === 270) {
                $image = $image->rot270();
            }
        }

        $flip = strtolower((string) ($transform['flip'] ?? ''));
        if ($flip === 'horizontal' || $flip === 'both') {
            $image = $image->fliphor();
        }
        if ($flip === 'vertical' || $flip === 'both') {
            $image = $image->flipver();
        }

        return $image;
    }

    private function applyFilters(mixed $image, array $filters): mixed
    {
        if (($filters['grayscale'] ?? false) === true) {
            $image = $image->colourspace('b-w');
        }

        $blur = isset($filters['blur']) ? (float) $filters['blur'] : 0.0;
        if ($blur > 0) {
            $image = $image->gaussblur($blur);
        }

        $sharpen = isset($filters['sharpen']) ? (float) $filters['sharpen'] : 0.0;
        if ($sharpen > 0) {
            $image = $image->sharpen(['sigma' => max(0.3, min($sharpen, 10.0))]);
        }

        $contrast = isset($filters['contrast']) ? (float) $filters['contrast'] : 0.0;
        if ($contrast !== 0.0) {
            $factor = max(0.1, 1.0 + ($contrast / 100.0));
            $image = $image->linear($factor, 0);
        }

        return $image;
    }

    private function applyWatermark(string $imageClass, mixed $image, array $watermark): mixed
    {
        $text = trim((string) ($watermark['text'] ?? ''));
        if ($text === '') {
            return $image;
        }

        $size = (int) ($watermark['size'] ?? 24);
        $size = max(8, min($size, 200));
        $color = $this->normalizeColor((string) ($watermark['color'] ?? '#ffffff'));
        $position = strtolower((string) ($watermark['position'] ?? 'bottom-right'));

        $textImage = $imageClass::text($text, [
            'dpi' => max(72, $size * 3),
            'align' => 'low',
            'rgba' => true,
        ])->newFromImage($color);

        $left = 16;
        $top = 16;
        $xMax = max(0, (int) $image->width - (int) $textImage->width - 16);
        $yMax = max(0, (int) $image->height - (int) $textImage->height - 16);

        [$left, $top] = $this->resolvePosition($position, $xMax, $yMax);

        return $image->composite2($textImage, 'over', [
            'x' => $left,
            'y' => $top,
        ]);
    }

    private function resolvePosition(string $position, int $xMax, int $yMax): array
    {
        return match ($position) {
            'top-left' => [16, 16],
            'top' => [max(0, (int) floor($xMax / 2)), 16],
            'top-right' => [$xMax, 16],
            'left' => [16, max(0, (int) floor($yMax / 2))],
            'center' => [max(0, (int) floor($xMax / 2)), max(0, (int) floor($yMax / 2))],
            'right' => [$xMax, max(0, (int) floor($yMax / 2))],
            'bottom-left' => [16, $yMax],
            'bottom' => [max(0, (int) floor($xMax / 2)), $yMax],
            default => [$xMax, $yMax],
        };
    }

    private function normalizeColor(string $raw): string
    {
        $value = trim($raw);
        if (preg_match('/^#[0-9a-fA-F]{6}([0-9a-fA-F]{2})?$/', $value) === 1) {
            return $value;
        }

        return '#ffffff';
    }

    private function resolveOutputFormat(string $mimetype): string
    {
        return match ($mimetype) {
            'image/png' => 'png',
            'image/webp' => 'webp',
            'image/gif' => 'gif',
            default => 'jpg',
        };
    }

    private function resolveOutputMime(string $format): string
    {
        return match (strtolower($format)) {
            'png' => 'image/png',
            'gif' => 'image/gif',
            'webp' => 'image/webp',
            default => 'image/jpeg',
        };
    }
}
