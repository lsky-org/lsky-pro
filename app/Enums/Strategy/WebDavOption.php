<?php

namespace App\Enums\Strategy;

final class WebDavOption
{
    /** @var string 访问url */
    const Url = 'url';

    /** @var string baseUri */
    const BaseUri = 'base_uri';

    /** @var string 用户名 */
    const Username = 'username';

    /** @var string 密码 */
    const Password = 'password';

    /** @var string 认证方式 */
    const AuthType = 'auth_type';

    /** @var string 地址前缀 */
    const Prefix = 'prefix';
}
