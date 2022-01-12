<?php

namespace App\Enums\Mail;

final class SmtpOption
{
    /** @var string 主机地址 */
    const Host = 'host';

    /** @var string 连接端口 */
    const Port = 'port';

    /** @var string 加密方式 */
    const Encryption = 'encryption';

    /** @var string 用户名 */
    const Username = 'username';

    /** @var string 密码 */
    const Password = 'password';

    /** @var string 超时时间 */
    const Timeout = 'timeout';

    /** @var string 认证模式 */
    const AuthMode = 'auth_mode';
}
