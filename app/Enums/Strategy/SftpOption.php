<?php

namespace App\Enums\Strategy;

final class SftpOption
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

    /** @var string 私钥 */
    const PrivateKey = 'private_key';

    /** @var string 密钥口令 */
    const Passphrase = 'passphrase';

    /** @var string 连接端口 */
    const Port = 'port';

    /** @var string 使用代理 */
    const UseAgent = 'use_agent';
}
