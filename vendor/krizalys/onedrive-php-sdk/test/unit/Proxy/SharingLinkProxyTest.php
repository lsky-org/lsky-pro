<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Constant\SharingLinkScope;
use Krizalys\Onedrive\Constant\SharingLinkType;
use Krizalys\Onedrive\Proxy\IdentityProxy;
use Krizalys\Onedrive\Proxy\SharingLinkProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Identity;
use Microsoft\Graph\Model\SharingLink;
use PHPUnit\Framework\TestCase;

class SharingLinkProxyTest extends TestCase
{
    public function testApplicationShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $identity = $this->createMock(Identity::class);

        $identity
            ->expects($this->atLeastOnce())
            ->method('getDisplayName')
            ->willReturn('Display Name');

        $sharingLink = $this->createMock(SharingLink::class);

        $sharingLink
            ->expects($this->atLeastOnce())
            ->method('getApplication')
            ->willReturn($identity);

        $sut = new SharingLinkProxy($graph, $sharingLink);
        $this->assertInstanceOf(IdentityProxy::class, $sut->application);
        $this->assertSame('Display Name', $sut->application->displayName);
    }

    public function testScopeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharingLink = $this->createMock(SharingLink::class);

        $sharingLink
            ->expects($this->atLeastOnce())
            ->method('getScope')
            ->willReturn(SharingLinkScope::ANONYMOUS);

        $sut = new SharingLinkProxy($graph, $sharingLink);
        $this->assertInternalType('string', $sut->scope);
        $this->assertSame(SharingLinkScope::ANONYMOUS, $sut->scope);
    }

    public function testTypeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharingLink = $this->createMock(SharingLink::class);

        $sharingLink
            ->expects($this->atLeastOnce())
            ->method('getType')
            ->willReturn(SharingLinkType::VIEW);

        $sut = new SharingLinkProxy($graph, $sharingLink);
        $this->assertInternalType('string', $sut->type);
        $this->assertSame(SharingLinkType::VIEW, $sut->type);
    }

    public function testWebUrlShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharingLink = $this->createMock(SharingLink::class);

        $sharingLink
            ->expects($this->atLeastOnce())
            ->method('getWebUrl')
            ->willReturn('http://ho.st/web-url');

        $sut = new SharingLinkProxy($graph, $sharingLink);
        $this->assertInternalType('string', $sut->webUrl);
        $this->assertSame('http://ho.st/web-url', $sut->webUrl);
    }
}
