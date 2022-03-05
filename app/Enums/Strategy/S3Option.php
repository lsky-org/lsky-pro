<?php

namespace App\Enums\Strategy;

final class S3Option
{
    /** @var string 访问url */
    const Url = 'url';

    /** @var string 根目录 */
    const Root = 'root';

    /** @var string Key */
    const Key = 'access_key_id';

    /** @var string Secret */
    const Secret = 'secret_access_key';

    /** @var string 区域 */
    const Region = 'region';

    /** @var string Bucket */
    const Bucket = 'bucket';
}
