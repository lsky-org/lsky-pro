<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\IdentityProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Identity;
use PHPUnit\Framework\TestCase;

class IdentityProxyTest extends TestCase
{
    public function testDisplayNameShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $identity = $this->createMock(Identity::class);

        $identity
            ->expects($this->atLeastOnce())
            ->method('getDisplayName')
            ->willReturn('Display Name');

        $sut = new IdentityProxy($graph, $identity);
        $this->assertInternalType('string', $sut->displayName);
        $this->assertSame('Display Name', $sut->displayName);
    }
}
