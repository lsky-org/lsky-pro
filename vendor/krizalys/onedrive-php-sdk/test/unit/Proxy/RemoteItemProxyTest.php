<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\FileProxy;
use Krizalys\Onedrive\Proxy\FileSystemInfoProxy;
use Krizalys\Onedrive\Proxy\FolderProxy;
use Krizalys\Onedrive\Proxy\IdentitySetProxy;
use Krizalys\Onedrive\Proxy\ItemReferenceProxy;
use Krizalys\Onedrive\Proxy\RemoteItemProxy;
use Krizalys\Onedrive\Proxy\PackageProxy;
use Krizalys\Onedrive\Proxy\SharedProxy;
use Krizalys\Onedrive\Proxy\SharepointIdsProxy;
use Krizalys\Onedrive\Proxy\SpecialFolderProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\File;
use Microsoft\Graph\Model\FileSystemInfo;
use Microsoft\Graph\Model\Folder;
use Microsoft\Graph\Model\Identity;
use Microsoft\Graph\Model\IdentitySet;
use Microsoft\Graph\Model\ItemReference;
use Microsoft\Graph\Model\Package;
use Microsoft\Graph\Model\RemoteItem;
use Microsoft\Graph\Model\Shared;
use Microsoft\Graph\Model\SharepointIds;
use Microsoft\Graph\Model\SpecialFolder;
use PHPUnit\Framework\TestCase;

class RemoteItemProxyTest extends TestCase
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

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getCreatedBy')
            ->willReturn($identitySet);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(IdentitySetProxy::class, $sut->createdBy);
        $this->assertSame('Display Name', $sut->createdBy->user->displayName);
    }

    public function testCreatedDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getCreatedDateTime')
            ->willReturn($dateTime);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertSame($dateTime, $sut->createdDateTime);
    }

    public function testFileShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $file = $this->createMock(File::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getFile')
            ->willReturn($file);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(FileProxy::class, $sut->file);
    }

    public function testFileSystemInfoShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $fileSystemInfo = $this->createMock(FileSystemInfo::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getFileSystemInfo')
            ->willReturn($fileSystemInfo);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(FileSystemInfoProxy::class, $sut->fileSystemInfo);
    }

    public function testFolderShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $folder = $this->createMock(Folder::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getFolder')
            ->willReturn($folder);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(FolderProxy::class, $sut->folder);
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

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getLastModifiedBy')
            ->willReturn($identitySet);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(IdentitySetProxy::class, $sut->lastModifiedBy);
        $this->assertSame('Display Name', $sut->lastModifiedBy->user->displayName);
    }

    public function testLastModifiedDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getLastModifiedDateTime')
            ->willReturn($dateTime);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertSame($dateTime, $sut->lastModifiedDateTime);
    }

    public function testNameShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getName')
            ->willReturn('Name');

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInternalType('string', $sut->name);
        $this->assertSame('Name', $sut->name);
    }

    public function testPackageShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $package = $this->createMock(Package::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getPackage')
            ->willReturn($package);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(PackageProxy::class, $sut->package);
    }

    public function testParentReferenceShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('1234');

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(ItemReferenceProxy::class, $sut->parentReference);
        $this->assertSame('1234', $sut->parentReference->id);
    }

    public function testSharedShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $shared = $this->createMock(Shared::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getShared')
            ->willReturn($shared);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(SharedProxy::class, $sut->shared);
    }

    public function testSharepointIdsShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharepointIds = $this->createMock(SharepointIds::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getSharepointIds')
            ->willReturn($sharepointIds);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(SharepointIdsProxy::class, $sut->sharepointIds);
    }

    public function testSizeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getSize')
            ->willReturn(1234);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInternalType('int', $sut->size);
        $this->assertSame(1234, $sut->size);
    }

    public function testSpecialFolderShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $specialFolder = $this->createMock(SpecialFolder::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getSpecialFolder')
            ->willReturn($specialFolder);

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInstanceOf(SpecialFolderProxy::class, $sut->specialFolder);
    }

    public function testWebDavUrlShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getWebDavUrl')
            ->willReturn('http://webd.av/url');

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInternalType('string', $sut->webDavUrl);
        $this->assertSame('http://webd.av/url', $sut->webDavUrl);
    }

    public function testWebUrlShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $remoteItem
            ->expects($this->atLeastOnce())
            ->method('getWebUrl')
            ->willReturn('http://w.eb/url');

        $sut = new RemoteItemProxy($graph, $remoteItem);
        $this->assertInternalType('string', $sut->webUrl);
        $this->assertSame('http://w.eb/url', $sut->webUrl);
    }
}
