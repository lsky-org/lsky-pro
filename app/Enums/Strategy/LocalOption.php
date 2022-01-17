<?php

namespace App\Enums\Strategy;

final class LocalOption
{
    /** @var string 访问域名 */
    const Domain = 'domain';

    /** @var string 根目录 */
    const Root = 'root';

    /** @var string 是否启用原图保护功能 */
    const IsEnableOriginalProtection = 'is_enable_original_protection';
}
