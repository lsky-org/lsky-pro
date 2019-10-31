<?php
/*
 * This file is part of the `nicolab/php-ftp-client` package.
 *
 * (c) Nicolas Tallefourtane <dev@nicolab.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Nicolas Tallefourtane http://nicolab.net
 */
namespace tests\units\FtpClient;

use
    mageekguy\atoum,
    FtpClient\FtpClient as TestedClass
;

/**
 * Tests the FtpClient\FtpClient class.
 * @author Nicolas Tallefourtane <dev@nicolab.net>
 */
class FtpClient extends atoum\test
{

    public function test__construct()
    {
        $this
            ->given($ftp = new TestedClass())
                ->object($ftp)
                    ->isInstanceOf('\FtpClient\FtpClient')
        ;
    }
}
