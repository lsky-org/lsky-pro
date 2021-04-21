<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\SharepointIdsProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\SharepointIds;
use PHPUnit\Framework\TestCase;

class SharepointIdsProxyTest extends TestCase
{
    public function testListIdShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharepointIds = $this->createMock(SharepointIds::class);

        $sharepointIds
            ->expects($this->atLeastOnce())
            ->method('getListId')
            ->willReturn('1234');

        $sut = new SharepointIdsProxy($graph, $sharepointIds);
        $this->assertInternalType('string', $sut->listId);
        $this->assertSame('1234', $sut->listId);
    }

    public function testListItemIdShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharepointIds = $this->createMock(SharepointIds::class);

        $sharepointIds
            ->expects($this->atLeastOnce())
            ->method('getListItemId')
            ->willReturn('1234');

        $sut = new SharepointIdsProxy($graph, $sharepointIds);
        $this->assertInternalType('string', $sut->listItemId);
        $this->assertSame('1234', $sut->listItemId);
    }

    public function testListItemUniqueIdShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharepointIds = $this->createMock(SharepointIds::class);

        $sharepointIds
            ->expects($this->atLeastOnce())
            ->method('getListItemUniqueId')
            ->willReturn('1234');

        $sut = new SharepointIdsProxy($graph, $sharepointIds);
        $this->assertInternalType('string', $sut->listItemUniqueId);
        $this->assertSame('1234', $sut->listItemUniqueId);
    }

    public function testSiteIdShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharepointIds = $this->createMock(SharepointIds::class);

        $sharepointIds
            ->expects($this->atLeastOnce())
            ->method('getSiteId')
            ->willReturn('1234');

        $sut = new SharepointIdsProxy($graph, $sharepointIds);
        $this->assertInternalType('string', $sut->siteId);
        $this->assertSame('1234', $sut->siteId);
    }

    public function testSiteUrlShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharepointIds = $this->createMock(SharepointIds::class);

        $sharepointIds
            ->expects($this->atLeastOnce())
            ->method('getSiteUrl')
            ->willReturn('http://si.te/url');

        $sut = new SharepointIdsProxy($graph, $sharepointIds);
        $this->assertInternalType('string', $sut->siteUrl);
        $this->assertSame('http://si.te/url', $sut->siteUrl);
    }

    public function testWebIdShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharepointIds = $this->createMock(SharepointIds::class);

        $sharepointIds
            ->expects($this->atLeastOnce())
            ->method('getWebId')
            ->willReturn('1234');

        $sut = new SharepointIdsProxy($graph, $sharepointIds);
        $this->assertInternalType('string', $sut->webId);
        $this->assertSame('1234', $sut->webId);
    }
}
