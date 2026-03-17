<?php

namespace App\Services\ImageProcessing\Drivers;

use App\Services\ImageProcessing\Contracts\ImageProcessorDriver;
use Imagick;
use ImagickDraw;
use ImagickException;
use ImagickPixel;
use RuntimeException;

class ImagickImageProcessorDriver implements ImageProcessorDriver
{
    public static function isAvailable(): bool
    {
        return extension_loaded('imagick') && class_exists(Imagick::class);
    }

    public static function unavailableReason(): ?string
    {
        if (! extension_loaded('imagick')) {
            return 'imagick extension is not loaded.';
        }

        if (! class_exists(Imagick::class)) {
            return 'Imagick class is unavailable.';
        }

        return null;
    }

    private const MAX_PIXEL_COUNT = 100_000_000; // 100MP 防止解压缩炸弹

    public function process(string $contents, string $mimetype, array $operations): array
    {
        $image = null;
        $original = null;
        try {
            $original = new Imagick();
            $original->readImageBlob($contents);

            // FIX-14: 尺寸限制防止解压缩炸弹
            $w = $original->getImageWidth();
            $h = $original->getImageHeight();
            if ($w * $h > self::MAX_PIXEL_COUNT) {
                throw new RuntimeException("Image too large: {$w}x{$h} exceeds limit");
            }

            $original->setImageOrientation(Imagick::ORIENTATION_UNDEFINED);
            $image = $original->mergeImageLayers(Imagick::LAYERMETHOD_FLATTEN);

            $this->applyCrop($image, (array) ($operations['crop'] ?? []));
            $this->applyTransform($image, (array) ($operations['transform'] ?? []));
            $this->applyResize($image, (array) ($operations['resize'] ?? []));
            $this->applyFilters($image, (array) ($operations['filters'] ?? []));
            $this->applyWatermark($image, (array) ($operations['watermark'] ?? []));

            $format = $this->resolveOutputFormat($mimetype, $image);
            $image->setImageFormat($format);
            $processed = $image->getImageBlob();

            return [
                'contents' => $processed,
                'mimetype' => $this->resolveOutputMime($format),
                'width' => (int) $image->getImageWidth(),
                'height' => (int) $image->getImageHeight(),
            ];
        } catch (ImagickException $e) {
            throw new RuntimeException('Imagick process failed: '.$e->getMessage(), 0, $e);
        } finally {
            // FIX-14: 确保释放 Imagick 资源
            if ($image instanceof Imagick) { $image->clear(); $image->destroy(); }
            if ($original instanceof Imagick && $original !== $image) { $original->clear(); $original->destroy(); }
        }
    }

    private function applyCrop(Imagick $image, array $crop): void
    {
        $x = isset($crop['x']) ? (int) $crop['x'] : -1;
        $y = isset($crop['y']) ? (int) $crop['y'] : -1;
        $width = isset($crop['width']) ? (int) $crop['width'] : 0;
        $height = isset($crop['height']) ? (int) $crop['height'] : 0;
        if ($x < 0 || $y < 0 || $width <= 0 || $height <= 0) {
            return;
        }

        $sourceWidth = max(1, (int) $image->getImageWidth());
        $sourceHeight = max(1, (int) $image->getImageHeight());
        $width = min($width, $sourceWidth - $x);
        $height = min($height, $sourceHeight - $y);
        if ($width <= 0 || $height <= 0) {
            throw new RuntimeException('Crop area is out of image bounds.');
        }

        $image->cropImage($width, $height, $x, $y);
        $image->setImagePage(0, 0, 0, 0);
    }

    private function applyResize(Imagick $image, array $resize): void
    {
        $width = isset($resize['width']) ? (int) $resize['width'] : 0;
        $height = isset($resize['height']) ? (int) $resize['height'] : 0;
        if ($width <= 0 && $height <= 0) {
            return;
        }

        $fit = strtolower((string) ($resize['fit'] ?? 'contain'));
        if ($fit === 'cover' && $width > 0 && $height > 0) {
            $image->cropThumbnailImage($width, $height);
            return;
        }

        if ($fit === 'outside') {
            $sourceWidth = max(1, $image->getImageWidth());
            $sourceHeight = max(1, $image->getImageHeight());
            if ($width <= 0) {
                $width = (int) round($sourceWidth * ($height / $sourceHeight));
            } elseif ($height <= 0) {
                $height = (int) round($sourceHeight * ($width / $sourceWidth));
            }
            $scale = max($width / $sourceWidth, $height / $sourceHeight);
            $targetWidth = (int) max(1, round($sourceWidth * $scale));
            $targetHeight = (int) max(1, round($sourceHeight * $scale));
            $image->resizeImage($targetWidth, $targetHeight, Imagick::FILTER_LANCZOS, 1, false);
            return;
        }

        if ($fit === 'fill' && $width > 0 && $height > 0) {
            $image->resizeImage($width, $height, Imagick::FILTER_LANCZOS, 1, false);
            return;
        }

        $targetWidth = max(1, $width > 0 ? $width : 99999);
        $targetHeight = max(1, $height > 0 ? $height : 99999);
        $image->resizeImage($targetWidth, $targetHeight, Imagick::FILTER_LANCZOS, 1, true);
    }

    private function applyTransform(Imagick $image, array $transform): void
    {
        $rotate = isset($transform['rotate']) ? (float) $transform['rotate'] : 0.0;
        if ($rotate !== 0.0) {
            $image->rotateImage(new ImagickPixel('transparent'), $rotate);
            $image->setImagePage(0, 0, 0, 0);
        }

        $flip = strtolower((string) ($transform['flip'] ?? ''));
        if ($flip === 'horizontal' || $flip === 'both') {
            $image->flopImage();
        }
        if ($flip === 'vertical' || $flip === 'both') {
            $image->flipImage();
        }
    }

    private function applyFilters(Imagick $image, array $filters): void
    {
        if (($filters['grayscale'] ?? false) === true) {
            $image->setImageType(Imagick::IMGTYPE_GRAYSCALE);
        }

        $blur = isset($filters['blur']) ? (float) $filters['blur'] : 0.0;
        if ($blur > 0) {
            $image->gaussianBlurImage($blur, $blur);
        }

        $sharpen = isset($filters['sharpen']) ? (float) $filters['sharpen'] : 0.0;
        if ($sharpen > 0) {
            $image->sharpenImage(0, $sharpen);
        }

        $contrast = isset($filters['contrast']) ? (int) $filters['contrast'] : 0;
        if ($contrast !== 0) {
            $steps = max(1, (int) round(abs($contrast) / 10));
            $increase = $contrast > 0;
            for ($i = 0; $i < $steps; $i++) {
                $image->contrastImage($increase);
            }
        }
    }

    private function applyWatermark(Imagick $image, array $watermark): void
    {
        $text = trim((string) ($watermark['text'] ?? ''));
        if ($text === '') {
            return;
        }

        $size = (int) ($watermark['size'] ?? 24);
        $size = max(8, min($size, 200));
        $color = (string) ($watermark['color'] ?? '#ffffff');
        $position = strtolower((string) ($watermark['position'] ?? 'bottom-right'));

        $draw = new ImagickDraw();
        $draw->setFillColor(new ImagickPixel($this->normalizeColor($color)));
        $draw->setFontSize($size);
        $draw->setGravity($this->toImagickGravity($position));

        $image->annotateImage($draw, 18, 18, 0, $text);
    }

    private function normalizeColor(string $raw): string
    {
        $value = trim($raw);
        if (preg_match('/^#[0-9a-fA-F]{6}([0-9a-fA-F]{2})?$/', $value) === 1) {
            return $value;
        }

        return '#ffffff';
    }

    private function toImagickGravity(string $position): int
    {
        return match ($position) {
            'top-left' => Imagick::GRAVITY_NORTHWEST,
            'top' => Imagick::GRAVITY_NORTH,
            'top-right' => Imagick::GRAVITY_NORTHEAST,
            'left' => Imagick::GRAVITY_WEST,
            'center' => Imagick::GRAVITY_CENTER,
            'right' => Imagick::GRAVITY_EAST,
            'bottom-left' => Imagick::GRAVITY_SOUTHWEST,
            'bottom' => Imagick::GRAVITY_SOUTH,
            default => Imagick::GRAVITY_SOUTHEAST,
        };
    }

    private function resolveOutputFormat(string $mimetype, Imagick $image): string
    {
        if ($mimetype === 'image/png') {
            return 'png';
        }

        if ($mimetype === 'image/webp') {
            return 'webp';
        }

        $format = strtolower((string) $image->getImageFormat());

        return in_array($format, ['jpeg', 'jpg', 'png', 'gif', 'webp'], true) ? $format : 'jpeg';
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
