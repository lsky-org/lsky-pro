<?php

namespace App\Enums\Strategy;

final class FtpOption
{
    /** @var string 访问url */
    const Url = 'url';

    /** @var string 根目录 */
    const Root = 'root';

    /** @var string 主机地址 */
    const Host = 'host';

    /** @var string 连接名称 */
    const Username = 'username';

    /** @var string 密码 */
    const Password = 'password';

    /** @var string 连接端口 */
    const Port = 'port';

    /** @var string 加密连接 */
    const Ssl = 'ssl';

    /** @var string 被动模式 */
    const Passive = 'passive';
}
