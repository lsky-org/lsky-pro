<?php

namespace App\Services;

use App\Models\Image;

class ImagePlaceholderService
{
    public function urlForMissingSource(Image $image): string
    {
        $this->ensureMissingSourcePlaceholder($image);

        return asset($this->pathnameForMissingSource($image));
    }

    public function pathForMissingSource(Image $image): string
    {
        return public_path($this->pathnameForMissingSource($image));
    }

    public function pathnameForMissingSource(Image $image): string
    {
        $base = trim((string) config('app.thumbnail_path'), '/');

        return $base.'/missing/'.$image->md5.'.png';
    }

    public function ensureMissingSourcePlaceholder(Image $image): string
    {
        $outputPath = $this->pathForMissingSource($image);

        if (file_exists($outputPath)) {
            return $outputPath;
        }

        if (! is_dir(dirname($outputPath))) {
            @mkdir(dirname($outputPath), 0755, true);
        }

        if (class_exists(\Imagick::class)) {
            $this->renderWithImagick($outputPath, $image);

            return $outputPath;
        }

        $this->renderWithGd($outputPath, $image);

        return $outputPath;
    }

    private function renderWithImagick(string $outputPath, Image $image): void
    {
        $canvas = new \Imagick();
        $canvas->newImage(1280, 840, new \ImagickPixel('#f8fafc'));
        $canvas->setImageFormat('png');

        $frame = new \ImagickDraw();
        $frame->setStrokeColor(new \ImagickPixel('#cbd5e1'));
        $frame->setStrokeWidth(4);
        $frame->setFillColor(new \ImagickPixel('#ffffff'));
        $frame->rectangle(64, 64, 1216, 776);
        $canvas->drawImage($frame);

        $bar = new \ImagickDraw();
        $bar->setFillColor(new \ImagickPixel('#0f172a'));
        $bar->roundRectangle(112, 120, 1168, 212, 18, 18);
        $canvas->drawImage($bar);

        $font = '/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf';
        $title = new \ImagickDraw();
        if (file_exists($font)) {
            $title->setFont($font);
        }
        $title->setFillColor(new \ImagickPixel('#ffffff'));
        $title->setFontSize(34);
        $canvas->annotateImage($title, 150, 173, 0, 'Source file missing');

        $body = new \ImagickDraw();
        if (file_exists($font)) {
            $body->setFont($font);
        }
        $body->setFillColor(new \ImagickPixel('#0f172a'));
        $body->setFontSize(30);

        $lines = [
            'Record: '.$image->key.'.'.$image->extension,
            'File: '.mb_strimwidth((string) ($image->filename ?: $image->origin_name), 0, 72, '...'),
            'Path: '.mb_strimwidth((string) $image->pathname, 0, 88, '...'),
        ];

        $y = 318;
        foreach ($lines as $line) {
            $canvas->annotateImage($body, 132, $y, 0, $line);
            $y += 82;
        }

        $badge = new \ImagickDraw();
        $badge->setFillColor(new \ImagickPixel('#e2e8f0'));
        $badge->roundRectangle(132, 620, 396, 688, 14, 14);
        $canvas->drawImage($badge);

        $meta = new \ImagickDraw();
        if (file_exists($font)) {
            $meta->setFont($font);
        }
        $meta->setFillColor(new \ImagickPixel('#334155'));
        $meta->setFontSize(26);
        $canvas->annotateImage($meta, 164, 665, 0, strtoupper((string) $image->extension));

        $canvas->writeImage($outputPath);
        $canvas->clear();
        $canvas->destroy();
    }

    private function renderWithGd(string $outputPath, Image $image): void
    {
        if (! function_exists('imagecreatetruecolor')) {
            throw new \RuntimeException('Neither Imagick nor GD is available for missing-source placeholders.');
        }

        $width = 1280;
        $height = 840;
        $im = imagecreatetruecolor($width, $height);

        $bg = imagecolorallocate($im, 248, 250, 252);
        $panel = imagecolorallocate($im, 255, 255, 255);
        $ink = imagecolorallocate($im, 15, 23, 42);
        $muted = imagecolorallocate($im, 51, 65, 85);
        $accent = imagecolorallocate($im, 226, 232, 240);

        imagefilledrectangle($im, 0, 0, $width, $height, $bg);
        imagefilledrectangle($im, 64, 64, 1216, 776, $panel);
        imagefilledrectangle($im, 112, 120, 1168, 212, $ink);

        imagestring($im, 5, 148, 152, 'Source file missing', imagecolorallocate($im, 255, 255, 255));
        imagestring($im, 5, 132, 302, 'Record: '.$image->key.'.'.$image->extension, $ink);
        imagestring($im, 5, 132, 372, 'File: '.substr((string) ($image->filename ?: $image->origin_name), 0, 72), $ink);
        imagestring($im, 5, 132, 442, 'Path: '.substr((string) $image->pathname, 0, 88), $muted);
        imagefilledrectangle($im, 132, 620, 396, 688, $accent);
        imagestring($im, 5, 164, 646, strtoupper((string) $image->extension), $muted);

        imagepng($im, $outputPath, 7);
        imagedestroy($im);
    }
}
