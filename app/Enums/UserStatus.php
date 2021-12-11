<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Normal()
 * @method static static Frozen()
 */
final class UserStatus extends Enum
{
    /** @var int 正常 */
    const Normal = 1;

    /** @var int 冻结 */
    const Frozen = 0;
}
