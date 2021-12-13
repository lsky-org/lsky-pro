<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Public()
 * @method static static Private()
 */
final class ImagePermission extends Enum
{
    const Public  = 1; // 公开
    const Private = 0; // 私有
}
