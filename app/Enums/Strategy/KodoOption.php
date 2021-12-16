<?php

namespace App\Enums\Strategy;

use BenSampo\Enum\Enum;

final class KodoOption extends Enum
{
    /** @var string 访问域名 */
    const Domain = 'domain';

    /** @var string AccessKey */
    const AccessKey = 'access_key';

    /** @var string SecretKey */
    const SecretKey = 'secret_key';

    /** @var string Bucket */
    const Bucket = 'bucket';
}
