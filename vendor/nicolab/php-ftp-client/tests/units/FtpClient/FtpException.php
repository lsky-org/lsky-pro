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
    FtpClient\FtpException as TestedClass
;

/**
 * Tests the FtpClient\FtpException class.
 * @author Nicolas Tallefourtane <dev@nicolab.net>
 */
class FtpException extends atoum\test
{

    public function test__instance()
    {
        $ftp = new \FtpClient\FtpClient();

        $this
            ->given($e = new TestedClass())
                ->object($e)
                    ->isInstanceOf('\FtpClient\FtpException')
                    ->isInstanceOf('\Exception')

                ->exception(function () use ($ftp) {
                    $ftp->doNotExist();
                })
                    ->isInstanceOf('\FtpClient\FtpException')
                    ->isInstanceOf('\Exception')
        ;
    }
}
