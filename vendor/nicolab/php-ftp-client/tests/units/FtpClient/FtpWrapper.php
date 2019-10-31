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
    FtpClient\FtpWrapper as TestedClass
;

/**
 * Tests the FtpClient\FtpWrapper class.
 * @author Nicolas Tallefourtane <dev@nicolab.net>
 */
class FtpWrapper extends atoum\test
{

    public function test__construct()
    {
        $conn = null;

        $this
            ->given($wrapper = new TestedClass($conn))
                ->object($wrapper)
                    ->isInstanceOf('\FtpClient\FtpWrapper')
        ;
    }

    public function test__call()
    {
        $conn = null;

        $this
            ->given($wrapper = new TestedClass($conn))
                ->exception(function () use ($wrapper) {
                    $wrapper->doNotExist();
                })
                    ->isInstanceOf('\FtpClient\FtpException')
                    ->isInstanceOf('\Exception')

                ->variable(array($wrapper, 'alloc'))
                    ->isCallable()
        ;
    }
}
