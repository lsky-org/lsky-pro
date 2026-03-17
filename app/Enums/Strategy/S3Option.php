<?php

namespace App\Enums\Strategy;

final class S3Option
{
    /** @var string 访问url */
    const Url = 'url';

    /** @var string AccessKeyId */
    const AccessKeyId = 'access_key_id';

    /** @var string SecretAccessKey */
    const SecretAccessKey = 'secret_access_key';

    /** @var string Endpoint */
    const Endpoint = 'endpoint';

    /** @var string 区域 */
    const Region = 'region';

    /** @var string Bucket */
    const Bucket = 'bucket';
}
