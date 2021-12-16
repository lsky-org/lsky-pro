<?php

namespace App\Enums\Strategy;

use BenSampo\Enum\Enum;

/**
 * @method static static Domain()
 * @method static static Root()
 */
final class LocalOption extends Enum
{
    /** @var string 访问域名 */
    const Domain = 'domain';

    /** @var string 根目录 */
    const Root = 'root';
}
