<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\BaseItemProxy;
use Krizalys\Onedrive\Proxy\IdentitySetProxy;
use Krizalys\Onedrive\Proxy\ItemReferenceProxy;
use Krizalys\Onedrive\Proxy\UserProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\BaseItem;
use Microsoft\Graph\Model\Identity;
use Microsoft\Graph\Model\IdentitySet;
use Microsoft\Graph\Model\ItemReference;
use Microsoft\Graph\Model\User;
use PHPUnit\Framework\TestCase;

class BaseItemProxyTest extends TestCase
{
    public function testCreatedByShouldReturnExpectedValue()
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

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getCreatedBy')
            ->willReturn($identitySet);

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertInstanceOf(IdentitySetProxy::class, $sut->createdBy);
        $this->assertSame('Display Name', $sut->createdBy->user->displayName);
    }

    public function testCreatedDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getCreatedDateTime')
            ->willReturn($dateTime);

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertSame($dateTime, $sut->createdDateTime);
    }

    public function testDescriptionShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getDescription')
            ->willReturn('Description');

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertInternalType('string', $sut->description);
        $this->assertSame('Description', $sut->description);
    }

    public function testETagShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getETag')
            ->willReturn('1234');

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertInternalType('string', $sut->eTag);
        $this->assertSame('1234', $sut->eTag);
    }

    public function testLastModifiedByShouldReturnExpectedValue()
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

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getLastModifiedBy')
            ->willReturn($identitySet);

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertInstanceOf(IdentitySetProxy::class, $sut->lastModifiedBy);
        $this->assertSame('Display Name', $sut->lastModifiedBy->user->displayName);
    }

    public function testLastModifiedDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getLastModifiedDateTime')
            ->willReturn($dateTime);

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertSame($dateTime, $sut->lastModifiedDateTime);
    }

    public function testNameShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getName')
            ->willReturn('Name');

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertInternalType('string', $sut->name);
        $this->assertSame('Name', $sut->name);
    }

    public function testParentReferenceShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('1234');

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertInstanceOf(ItemReferenceProxy::class, $sut->parentReference);
        $this->assertSame('1234', $sut->parentReference->id);
    }

    public function testWebUrlShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getWebUrl')
            ->willReturn('http://w.eb/url');

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertInternalType('string', $sut->webUrl);
        $this->assertSame('http://w.eb/url', $sut->webUrl);
    }

    public function testCreatedByUserShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $user = $this->createMock(User::class);

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getCreatedByUser')
            ->willReturn($user);

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertInstanceOf(UserProxy::class, $sut->createdByUser);
    }

    public function testLastModifiedByUserShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $user = $this->createMock(User::class);

        $baseItem = $this->createMock(BaseItem::class);

        $baseItem
            ->expects($this->atLeastOnce())
            ->method('getLastModifiedByUser')
            ->willReturn($user);

        $sut = new BaseItemProxy($graph, $baseItem);
        $this->assertInstanceOf(UserProxy::class, $sut->lastModifiedByUser);
    }
}
