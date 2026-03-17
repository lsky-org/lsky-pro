<?php

namespace App\Enums\Strategy;

final class MinioOption
{
    /** @var string 访问url */
    const Url = 'url';

    /** @var string AccessKey */
    const AccessKey = 'access_key';

    /** @var string SecretKey */
    const SecretKey = 'secret_key';

    /** @var string Endpoint */
    const Endpoint = 'endpoint';

    /** @var string 区域 */
    const Region = 'region';

    /** @var string Bucket */
    const Bucket = 'bucket';

    /** @var string BucketEndpoint */
    const BucketEndpoint = 'bucket_endpoint';
}
