<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Constant\SharedScope;
use Krizalys\Onedrive\Proxy\SharedProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Identity;
use Microsoft\Graph\Model\IdentitySet;
use Microsoft\Graph\Model\Shared;
use PHPUnit\Framework\TestCase;

class SharedProxyTest extends TestCase
{
    public function testOwnerShouldReturnExpectedValue()
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

        $shared = $this->createMock(Shared::class);

        $shared
            ->expects($this->atLeastOnce())
            ->method('getOwner')
            ->willReturn($identitySet);

        $sut = new SharedProxy($graph, $shared);
        $this->assertInternalType('string', $sut->owner->application->displayName);
        $this->assertSame('Display Name', $sut->owner->application->displayName);
    }

    public function testScopeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $shared = $this->createMock(Shared::class);

        $shared
            ->expects($this->atLeastOnce())
            ->method('getScope')
            ->willReturn(SharedScope::ANONYMOUS);

        $sut = new SharedProxy($graph, $shared);
        $this->assertInternalType('string', $sut->scope);
        $this->assertSame(SharedScope::ANONYMOUS, $sut->scope);
    }

    public function testSharedByShouldReturnExpectedValue()
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

        $shared = $this->createMock(Shared::class);

        $shared
            ->expects($this->atLeastOnce())
            ->method('getSharedBy')
            ->willReturn($identitySet);

        $sut = new SharedProxy($graph, $shared);
        $this->assertInternalType('string', $sut->sharedBy->application->displayName);
        $this->assertSame('Display Name', $sut->sharedBy->application->displayName);
    }

    public function testSharedDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $shared = $this->createMock(Shared::class);

        $shared
            ->expects($this->atLeastOnce())
            ->method('getSharedDateTime')
            ->willReturn($dateTime);

        $sut = new SharedProxy($graph, $shared);
        $this->assertSame($dateTime, $sut->sharedDateTime);
    }
}
