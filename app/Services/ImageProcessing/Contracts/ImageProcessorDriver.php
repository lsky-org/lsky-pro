<?php

namespace App\Services\ImageProcessing\Contracts;

interface ImageProcessorDriver
{
    public static function isAvailable(): bool;

    public static function unavailableReason(): ?string;

    /**
     * @param  array{
     *   crop?: array{x?: int|null, y?: int|null, width?: int|null, height?: int|null},
     *   transform?: array{rotate?: int|float|null, flip?: string|null},
     *   resize?: array{width?: int|null, height?: int|null, fit?: string|null},
     *   filters?: array{grayscale?: bool, blur?: float|int|null, sharpen?: float|int|null, contrast?: int|float|null},
     *   watermark?: array{text?: string|null, position?: string|null, size?: int|null, color?: string|null}
     * }  $operations
     * @return array{contents: string, mimetype: string, width: int, height: int}
     */
    public function process(string $contents, string $mimetype, array $operations): array;
}
