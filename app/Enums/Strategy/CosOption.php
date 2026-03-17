<?php

namespace App\Enums\Strategy;

final class CosOption
{
    /** @var string 访问地址 */
    const Url = 'url';

    /** @var string AppId */
    const AppId = 'app_id';

    /** @var string SecretId */
    const SecretId = 'secret_id';

    /** @var string SecretKey */
    const SecretKey = 'secret_key';

    /** @var string 所属地域 */
    const Region = 'region';

    /** @var string 储存桶名称 */
    const Bucket = 'bucket';
}
