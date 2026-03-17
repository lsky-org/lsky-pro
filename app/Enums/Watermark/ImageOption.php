<?php

namespace App\Enums\Watermark;

final class ImageOption
{
    /** @var string 水印图片 */
    const Image = 'image';

    /** @var string 水印位置 */
    const Position = 'position';

    /** @var string 水印图片宽 */
    const Width = 'width';

    /** @var string 水印图片高 */
    const Height = 'height';

    /** @var string 旋转角度 */
    const Rotate = 'rotate';

    /** @var string 不透明度 */
    const Opacity = 'opacity';

    /** @var string X轴偏移量 */
    const X = 'x';

    /** @var string Y轴偏移量 */
    const Y = 'y';
}
