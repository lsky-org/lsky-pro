<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\IdentityProxy;
use Krizalys\Onedrive\Proxy\IdentitySetProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Identity;
use Microsoft\Graph\Model\IdentitySet;
use PHPUnit\Framework\TestCase;

class IdentitySetProxyTest extends TestCase
{
    public function testApplicationShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $identity = $this->createMock(Identity::class);

        $identity
            ->expects($this->atLeastOnce())
            ->method('getDisplayName')
            ->willReturn('Display Name');

        $identitySet = $this->createMock(IdentitySet::class);

        $identitySet
            ->expects($this->atLeastOnce())
            ->method('getApplication')
            ->willReturn($identity);

        $sut = new IdentitySetProxy($graph, $identitySet);
        $this->assertInstanceOf(IdentityProxy::class, $sut->application);
        $this->assertSame('Display Name', $sut->application->displayName);
    }

    public function testDeviceShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $identity = $this->createMock(Identity::class);

        $identity
            ->expects($this->atLeastOnce())
            ->method('getDisplayName')
            ->willReturn('Display Name');

        $identitySet = $this->createMock(IdentitySet::class);

        $identitySet
            ->expects($this->atLeastOnce())
            ->method('getDevice')
            ->willReturn($identity);

        $sut = new IdentitySetProxy($graph, $identitySet);
        $this->assertInstanceOf(IdentityProxy::class, $sut->device);
        $this->assertSame('Display Name', $sut->device->displayName);
    }

    public function testUserShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $identity = $this->createMock(Identity::class);

        $identity
            ->expects($this->atLeastOnce())
            ->method('getDisplayName')
            ->willReturn('Display Name');

        $identitySet = $this->createMock(IdentitySet::class);

        $identitySet
            ->expects($this->atLeastOnce())
            ->method('getUser')
            ->willReturn($identity);

        $sut = new IdentitySetProxy($graph, $identitySet);
        $this->assertInstanceOf(IdentityProxy::class, $sut->user);
        $this->assertSame('Display Name', $sut->user->displayName);
    }
}
