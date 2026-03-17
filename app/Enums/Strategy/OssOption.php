<?php

namespace App\Enums\Strategy;

final class OssOption
{
    /** @var string 访问地址 */
    const Url = 'url';

    /** @var string AccessKeyId */
    const AccessKeyId = 'access_key_id';

    /** @var string AccessKeySecret */
    const AccessKeySecret = 'access_key_secret';

    /** @var string Endpoint */
    const Endpoint = 'endpoint';

    /** @var string 储存桶名称 */
    const Bucket = 'bucket';
}
