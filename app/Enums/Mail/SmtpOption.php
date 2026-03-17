<?php

namespace App\Enums\Mail;

final class SmtpOption
{
    const Transport = 'smtp';

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

    /** @var string 发件人地址 */
    const FromAddress = 'from_address';

    /** @var string 发件人名称 */
    const FromName = 'from_name';
}
