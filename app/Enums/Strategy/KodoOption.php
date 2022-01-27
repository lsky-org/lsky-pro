<?php

namespace App\Enums\Strategy;

final class KodoOption
{
    /** @var string 访问域名 */
    const Url = 'url';

    /** @var string AccessKey */
    const AccessKey = 'access_key';

    /** @var string SecretKey */
    const SecretKey = 'secret_key';

    /** @var string Bucket */
    const Bucket = 'bucket';

    /** @var string 根目录 */
    const Root = 'root';
}
