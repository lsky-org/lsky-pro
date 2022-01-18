<?php

namespace App\Enums\Watermark;

final class FontOption
{
    /** @var string 文本内容 */
    const Text = 'text';

    /** @var string 文字颜色 */
    const Color = 'color';

    /** @var string 字体大小 */
    const Size = 'size';

    /** @var string 字体文件路径 */
    const Font = 'font';

    /** @var string 水印位置 */
    const Position = 'position';

    /** @var string 旋转角度 */
    const Angle = 'angle';

    /** @var string X轴偏移量 */
    const X = 'x';

    /** @var string Y轴偏移量 */
    const Y = 'y';
}
