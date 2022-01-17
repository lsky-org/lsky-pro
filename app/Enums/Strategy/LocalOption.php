<?php

namespace App\Enums\Strategy;

final class LocalOption
{
    /** @var string 访问域名 */
    const Domain = 'domain';

    /** @var string 根目录 */
    const Root = 'root';

    /** @var string 是否启用获取原始 url 功能 */
    const IsEnableOriginUrl = 'is_enable_origin_url';
}
