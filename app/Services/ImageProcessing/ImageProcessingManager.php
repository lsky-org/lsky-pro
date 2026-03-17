<?php

namespace App\Services\ImageProcessing;

use App\Services\ImageProcessing\Contracts\ImageProcessorDriver;
use App\Services\ImageProcessing\Drivers\ImagickImageProcessorDriver;
use App\Services\ImageProcessing\Drivers\LibvipsImageProcessorDriver;
use InvalidArgumentException;
use RuntimeException;

class ImageProcessingManager
{
    private const SUPPORTED_DRIVERS = [
        'imagick' => ImagickImageProcessorDriver::class,
        'libvips' => LibvipsImageProcessorDriver::class,
    ];

    public function configuredDriverName(): string
    {
        return strtolower((string) config('image_processing.driver', 'imagick'));
    }

    /**
     * @return array{
     *   configured: string,
     *   strict: bool,
     *   drivers: array<string, array{available: bool, reason: string|null}>
     * }
     */
    public function status(): array
    {
        $drivers = [];
        foreach (self::SUPPORTED_DRIVERS as $name => $class) {
            $drivers[$name] = [
                'available' => $class::isAvailable(),
                'reason' => $class::unavailableReason(),
            ];
        }

        return [
            'configured' => $this->configuredDriverName(),
            'strict' => true,
            'drivers' => $drivers,
        ];
    }

    /**
     * @param  array{
     *   resize?: array{width?: int|null, height?: int|null, fit?: string|null},
     *   filters?: array{grayscale?: bool, blur?: float|int|null, sharpen?: float|int|null, contrast?: int|float|null},
     *   watermark?: array{text?: string|null, position?: string|null, size?: int|null, color?: string|null}
     * }  $operations
     * @return array{contents: string, mimetype: string, width: int, height: int}
     */
    public function process(string $contents, string $mimetype, array $operations): array
    {
        return $this->driver()->process($contents, $mimetype, $operations);
    }

    private function driver(): ImageProcessorDriver
    {
        $driverName = $this->configuredDriverName();
        $driverClass = self::SUPPORTED_DRIVERS[$driverName] ?? null;
        if (! $driverClass) {
            throw new InvalidArgumentException(
                sprintf(
                    'Unsupported IMAGE_PROCESS_DRIVER "%s". Supported: %s',
                    $driverName,
                    implode('|', array_keys(self::SUPPORTED_DRIVERS))
                )
            );
        }

        if (! $driverClass::isAvailable()) {
            $reason = $driverClass::unavailableReason() ?: 'unknown reason';
            throw new RuntimeException(sprintf(
                'Configured image processing driver "%s" is unavailable: %s',
                $driverName,
                $reason
            ));
        }

        return new $driverClass();
    }
}
