<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Constant\DriveType;
use Krizalys\Onedrive\Definition\ResourceDefinitionInterface;
use Krizalys\Onedrive\Proxy\DriveItemProxy;
use Krizalys\Onedrive\Proxy\DriveProxy;
use Krizalys\Onedrive\Proxy\GraphListProxy;
use Krizalys\Onedrive\Proxy\IdentitySetProxy;
use Krizalys\Onedrive\Proxy\QuotaProxy;
use Krizalys\Onedrive\Proxy\SharepointIdsProxy;
use Krizalys\Onedrive\Proxy\SystemFacetProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use Microsoft\Graph\Http\GraphResponse;
use Microsoft\Graph\Model\Drive;
use Microsoft\Graph\Model\DriveItem;
use Microsoft\Graph\Model\GraphList;
use Microsoft\Graph\Model\Identity;
use Microsoft\Graph\Model\IdentitySet;
use Microsoft\Graph\Model\Quota;
use Microsoft\Graph\Model\SharepointIds;
use Microsoft\Graph\Model\SystemFacet;
use PHPUnit\Framework\TestCase;

class DriveProxyTest extends TestCase
{
    const DRIVE_ITEM_ID = '0123';

    public function testDriveTypeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getDriveType')
            ->willReturn(DriveType::PERSONAL);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $this->assertInternalType('string', $sut->driveType);
        $this->assertSame(DriveType::PERSONAL, $sut->driveType);
    }

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
            ->method('getUser')
            ->willReturn($identity);

        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getOwner')
            ->willReturn($identitySet);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $this->assertInstanceOf(IdentitySetProxy::class, $sut->owner);
        $this->assertSame('Display Name', $sut->owner->user->displayName);
    }

    public function testQuotaShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $quota = $this->createMock(Quota::class);

        $quota
            ->expects($this->atLeastOnce())
            ->method('getTotal')
            ->willReturn(1234);

        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getQuota')
            ->willReturn($quota);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $this->assertInstanceOf(QuotaProxy::class, $sut->quota);
        $this->assertSame(1234, $sut->quota->total);
    }

    public function testSharePointIdsShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharepointIds = $this->createMock(SharepointIds::class);

        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getSharePointIds')
            ->willReturn($sharepointIds);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $this->assertInstanceOf(SharepointIdsProxy::class, $sut->sharePointIds);
    }

    public function testSystemShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $systemFacet = $this->createMock(SystemFacet::class);

        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getSystem')
            ->willReturn($systemFacet);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $this->assertInstanceOf(SystemFacetProxy::class, $sut->system);
    }

    public function testItemsShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $item1 = $this->createMock(DriveItem::class);

        $item1
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('0001');

        $item2 = $this->createMock(DriveItem::class);

        $item2
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('0002');

        $items = [
            $item1,
            $item2,
        ];

        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getItems')
            ->willReturn($items);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $actual = $sut->items;
        $this->assertInternalType('array', $actual);
        $this->assertCount(2, $actual);

        foreach ($actual as $item) {
            $this->assertInstanceOf(DriveItemProxy::class, $item);
        }

        $this->assertSame('0001', $actual[0]->id);
        $this->assertSame('0002', $actual[1]->id);
    }

    public function testListShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $graphList = $this->createMock(GraphList::class);

        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getList')
            ->willReturn($graphList);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $this->assertInstanceOf(GraphListProxy::class, $sut->list);
    }

    public function testRootShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('1234');

        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getRoot')
            ->willReturn($driveItem);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $this->assertInstanceOf(DriveItemProxy::class, $sut->root);
        $this->assertSame('1234', $sut->root->id);
    }

    public function testSpecialShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('1234');

        $drive = $this->createMock(Drive::class);
        $drive
            ->expects($this->atLeastOnce())
            ->method('getSpecial')
            ->willReturn($driveItem);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $this->assertInstanceOf(DriveItemProxy::class, $sut->special);
        $this->assertSame('1234', $sut->special->id);
    }

    public function testGetDriveItemByIdShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($item);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $drive  = $this->createMock(Drive::class);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $actual = $sut->getDriveItemById('1234');
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame(self::DRIVE_ITEM_ID, $actual->id);
    }

    public function testGetDriveItemByPathShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($item);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $drive = $this->createMock(Drive::class);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $actual = $sut->getDriveItemByPath('/path');
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame(self::DRIVE_ITEM_ID, $actual->id);
    }

    public function testGetRootShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($item);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $drive = $this->createMock(Drive::class);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveProxy($graph, $drive, $driveItemResourceDefinition);
        $actual = $sut->getRoot();
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame(self::DRIVE_ITEM_ID, $actual->id);
    }
}
