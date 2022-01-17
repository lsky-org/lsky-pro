<?php

namespace App\Enums\Strategy;

final class KodoOption
{
    /** @var string 访问域名 */
    const Domain = 'domain';

    /** @var string AccessKey */
    const AccessKey = 'access_key';

    /** @var string SecretKey */
    const SecretKey = 'secret_key';

    /** @var string Bucket */
    const Bucket = 'bucket';

    /** @var string 是否启用获取原始 url 功能 */
    const IsEnableOriginUrl = 'is_enable_origin_url';
}
