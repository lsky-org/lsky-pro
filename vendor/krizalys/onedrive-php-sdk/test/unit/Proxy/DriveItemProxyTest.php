<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use GuzzleHttp\Psr7\Stream;
use Krizalys\Onedrive\Constant\SharingLinkScope;
use Krizalys\Onedrive\Constant\SharingLinkType;
use Krizalys\Onedrive\Definition\OperationDefinitionInterface;
use Krizalys\Onedrive\Definition\ResourceDefinitionInterface;
use Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface;
use Krizalys\Onedrive\Proxy\AudioProxy;
use Krizalys\Onedrive\Proxy\DeletedProxy;
use Krizalys\Onedrive\Proxy\DriveItemProxy;
use Krizalys\Onedrive\Proxy\DriveItemVersionProxy;
use Krizalys\Onedrive\Proxy\FileProxy;
use Krizalys\Onedrive\Proxy\FileSystemInfoProxy;
use Krizalys\Onedrive\Proxy\FolderProxy;
use Krizalys\Onedrive\Proxy\GeoCoordinatesProxy;
use Krizalys\Onedrive\Proxy\ImageProxy;
use Krizalys\Onedrive\Proxy\ListItemProxy;
use Krizalys\Onedrive\Proxy\PackageProxy;
use Krizalys\Onedrive\Proxy\PermissionProxy;
use Krizalys\Onedrive\Proxy\PhotoProxy;
use Krizalys\Onedrive\Proxy\PublicationFacetProxy;
use Krizalys\Onedrive\Proxy\RemoteItemProxy;
use Krizalys\Onedrive\Proxy\RootProxy;
use Krizalys\Onedrive\Proxy\SearchResultProxy;
use Krizalys\Onedrive\Proxy\SharedProxy;
use Krizalys\Onedrive\Proxy\SharepointIdsProxy;
use Krizalys\Onedrive\Proxy\SharingLinkProxy;
use Krizalys\Onedrive\Proxy\SpecialFolderProxy;
use Krizalys\Onedrive\Proxy\ThumbnailProxy;
use Krizalys\Onedrive\Proxy\UploadSessionProxy;
use Krizalys\Onedrive\Proxy\VideoProxy;
use Krizalys\Onedrive\Proxy\WorkbookProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use Microsoft\Graph\Http\GraphResponse;
use Microsoft\Graph\Model\Audio;
use Microsoft\Graph\Model\Deleted;
use Microsoft\Graph\Model\DriveItem;
use Microsoft\Graph\Model\DriveItemVersion;
use Microsoft\Graph\Model\File;
use Microsoft\Graph\Model\FileSystemInfo;
use Microsoft\Graph\Model\Folder;
use Microsoft\Graph\Model\GeoCoordinates;
use Microsoft\Graph\Model\Image;
use Microsoft\Graph\Model\ItemReference;
use Microsoft\Graph\Model\ListItem;
use Microsoft\Graph\Model\Package;
use Microsoft\Graph\Model\Permission;
use Microsoft\Graph\Model\Photo;
use Microsoft\Graph\Model\PublicationFacet;
use Microsoft\Graph\Model\RemoteItem;
use Microsoft\Graph\Model\Root;
use Microsoft\Graph\Model\SearchResult;
use Microsoft\Graph\Model\Shared;
use Microsoft\Graph\Model\SharepointIds;
use Microsoft\Graph\Model\SharingLink;
use Microsoft\Graph\Model\SpecialFolder;
use Microsoft\Graph\Model\Thumbnail;
use Microsoft\Graph\Model\UploadSession;
use Microsoft\Graph\Model\Video;
use Microsoft\Graph\Model\Workbook;
use PHPUnit\Framework\TestCase;

class DriveItemProxyTest extends TestCase
{
    const DRIVE_ITEM_ID     = '0123';
    const UPLOAD_SESSION_ID = '4567';

    public function testAudioShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getAudio')
            ->willReturn($audio);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(AudioProxy::class, $sut->audio);
    }

    public function testContentShouldReturnExpectedValue()
    {
        $this->testDownloadShouldReturnExpectedValue();
    }

    public function testCTagShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getCTag')
            ->willReturn('1234');

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInternalType('string', $sut->cTag);
        $this->assertSame('1234', $sut->cTag);
    }

    public function testDeletedShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $deleted = $this->createMock(Deleted::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getDeleted')
            ->willReturn($deleted);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(DeletedProxy::class, $sut->deleted);
    }

    public function testFileShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $file = $this->createMock(File::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getFile')
            ->willReturn($file);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(FileProxy::class, $sut->file);
    }

    public function testFileSystemInfoShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $fileSystemInfo = $this->createMock(FileSystemInfo::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getFileSystemInfo')
            ->willReturn($fileSystemInfo);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(FileSystemInfoProxy::class, $sut->fileSystemInfo);
    }

    public function testFolderShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $folder = $this->createMock(Folder::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getFolder')
            ->willReturn($folder);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(FolderProxy::class, $sut->folder);
    }

    public function testImageShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $image = $this->createMock(Image::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getImage')
            ->willReturn($image);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(ImageProxy::class, $sut->image);
    }

    public function testLocationShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $geoCoordinates = $this->createMock(GeoCoordinates::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getLocation')
            ->willReturn($geoCoordinates);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(GeoCoordinatesProxy::class, $sut->location);
    }

    public function testPackageShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $package = $this->createMock(Package::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getPackage')
            ->willReturn($package);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(PackageProxy::class, $sut->package);
    }

    public function testPhotoShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $photo = $this->createMock(Photo::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getPhoto')
            ->willReturn($photo);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(PhotoProxy::class, $sut->photo);
    }

    public function testPublicationShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $publicationFacet = $this->createMock(PublicationFacet::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getPublication')
            ->willReturn($publicationFacet);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(PublicationFacetProxy::class, $sut->publication);
    }

    public function testRemoteItemShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $remoteItem = $this->createMock(RemoteItem::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getRemoteItem')
            ->willReturn($remoteItem);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(RemoteItemProxy::class, $sut->remoteItem);
    }

    public function testRootShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $root = $this->createMock(Root::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getRoot')
            ->willReturn($root);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(RootProxy::class, $sut->root);
    }

    public function testSearchResultShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $searchResult = $this->createMock(SearchResult::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getSearchResult')
            ->willReturn($searchResult);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(SearchResultProxy::class, $sut->searchResult);
    }

    public function testSharedShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $shared = $this->createMock(Shared::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getShared')
            ->willReturn($shared);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(SharedProxy::class, $sut->shared);
    }

    public function testSharepointIdsShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $sharepointIds = $this->createMock(SharepointIds::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getSharepointIds')
            ->willReturn($sharepointIds);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(SharepointIdsProxy::class, $sut->sharepointIds);
    }

    public function testSizeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getSize')
            ->willReturn(1234);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInternalType('int', $sut->size);
        $this->assertSame(1234, $sut->size);
    }

    public function testSpecialFolderShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $specialFolder = $this->createMock(SpecialFolder::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getSpecialFolder')
            ->willReturn($specialFolder);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(SpecialFolderProxy::class, $sut->specialFolder);
    }

    public function testVideoShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getVideo')
            ->willReturn($video);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(VideoProxy::class, $sut->video);
    }

    public function testWebDavUrlShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getWebDavUrl')
            ->willReturn('http://webd.av/url');

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInternalType('string', $sut->webDavUrl);
        $this->assertSame('http://webd.av/url', $sut->webDavUrl);
    }

    public function testChildrenShouldReturnExpectedValue()
    {
        $this->testGetChildrenShouldReturnExpectedValue();
    }

    public function testListItemShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $listItem = $this->createMock(ListItem::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getListItem')
            ->willReturn($listItem);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(ListItemProxy::class, $sut->listItem);
    }

    public function testPermissionsShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $permissions = [
            $this->createMock(Permission::class),
            $this->createMock(Permission::class),
        ];

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getPermissions')
            ->willReturn($permissions);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $actual = $sut->permissions;
        $this->assertInternalType('array', $actual);
        $this->assertCount(2, $actual);

        foreach ($actual as $permission) {
            $this->assertInstanceOf(PermissionProxy::class, $permission);
        }
    }

    public function testThumbnailsShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $thumbnails = [
            $this->createMock(Thumbnail::class),
            $this->createMock(Thumbnail::class),
        ];

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getThumbnails')
            ->willReturn($thumbnails);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $actual = $sut->thumbnails;
        $this->assertInternalType('array', $actual);
        $this->assertCount(2, $actual);

        foreach ($actual as $thumbnail) {
            $this->assertInstanceOf(ThumbnailProxy::class, $thumbnail);
        }
    }

    public function testVersionsShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $driveItemVersions = [
            $this->createMock(DriveItemVersion::class),
            $this->createMock(DriveItemVersion::class),
        ];

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getVersions')
            ->willReturn($driveItemVersions);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $actual = $sut->versions;
        $this->assertInternalType('array', $actual);
        $this->assertCount(2, $actual);

        foreach ($actual as $driveItemVersion) {
            $this->assertInstanceOf(DriveItemVersionProxy::class, $driveItemVersion);
        }
    }

    public function testWorkbookShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $workbook = $this->createMock(Workbook::class);

        $driveItem = $this->createMock(DriveItem::class);

        $driveItem
            ->expects($this->atLeastOnce())
            ->method('getWorkbook')
            ->willReturn($workbook);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new DriveItemProxy($graph, $driveItem, $resourceDefinition);
        $this->assertInstanceOf(WorkbookProxy::class, $sut->workbook);
    }

    public function testCreateFolderShouldReturnExpectedValue()
    {
        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $itemReference = $this->createMock(ItemReference::class);

        $childItem = $this->createMock(DriveItem::class);

        $childItem
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('201');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($childItem);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $parameterDefinitions = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $parameterDefinitions
            ->expects($this->atLeastOnce())
            ->method('buildOptions')
            ->willReturn([]);

        $operationDefinition = $this->createMock(OperationDefinitionInterface::class);

        $operationDefinition
            ->expects($this->atLeastOnce())
            ->method('getBodyParameterDefinitions')
            ->willReturn($parameterDefinitions);

        $childrenResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $childrenResourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getOperationDefinition')
            ->willReturn($operationDefinition);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $resourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($childrenResourceDefinition);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->createFolder('Irrelevant', []);
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame(self::DRIVE_ITEM_ID, $actual->id);
    }

    public function testGetChildrenShouldReturnExpectedValue()
    {
        $itemReference = $this->createMock(ItemReference::class);

        $childItem1 = $this->createMock(DriveItem::class);

        $childItem1
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('0001');

        $childItem2 = $this->createMock(DriveItem::class);

        $childItem2
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('0002');

        $childItems = [
            $childItem1,
            $childItem2,
        ];

        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($childItems);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createCollectionRequest')
            ->willReturn($request);

        $parameterDefinitions = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $operationDefinition = $this->createMock(OperationDefinitionInterface::class);

        $operationDefinition
            ->expects($this->atLeastOnce())
            ->method('getQueryStringParameterDefinitions')
            ->willReturn($parameterDefinitions);

        $subresourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $subresourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getOperationDefinition')
            ->willReturn($operationDefinition);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $resourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($subresourceDefinition);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->getChildren();
        $this->assertInternalType('array', $actual);
        $this->assertCount(2, $actual);

        foreach ($actual as $child) {
            $this->assertInstanceOf(DriveItemProxy::class, $child);
        }

        $this->assertSame('0001', $actual[0]->id);
        $this->assertSame('0002', $actual[1]->id);
    }

    public function testUploadShouldReturnExpectedValue()
    {
        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $itemReference = $this->createMock(ItemReference::class);

        $childItem = $this->createMock(DriveItem::class);

        $childItem
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('201');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($childItem);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('addHeaders')->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $parameterDefinitions = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $operationDefinition = $this->createMock(OperationDefinitionInterface::class);

        $operationDefinition
            ->expects($this->atLeastOnce())
            ->method('getHeaderParameterDefinitions')
            ->willReturn($parameterDefinitions);

        $operationDefinition
            ->expects($this->atLeastOnce())
            ->method('getQueryStringParameterDefinitions')
            ->willReturn($parameterDefinitions);

        $contentResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $contentResourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getOperationDefinition')
            ->willReturn($operationDefinition);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $resourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($contentResourceDefinition);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->upload('Irrelevant', 'Test content', []);
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame(self::DRIVE_ITEM_ID, $actual->id);
    }

    public function testStartUploadShouldReturnExpectedValue()
    {
        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $uploadSession = $this->createMock(UploadSession::class);

        $uploadSession
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::UPLOAD_SESSION_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($uploadSession);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $parameterDefinitions = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $operationDefinition = $this->createMock(OperationDefinitionInterface::class);

        $operationDefinition
            ->expects($this->atLeastOnce())
            ->method('getBodyParameterDefinitions')
            ->willReturn($parameterDefinitions);

        $createUploadSessionResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $createUploadSessionResourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getOperationDefinition')
            ->willReturn($operationDefinition);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $resourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($createUploadSessionResourceDefinition);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->startUpload('Irrelevant', 'Test content', []);
        $this->assertInstanceOf(UploadSessionProxy::class, $actual);
        $this->assertSame(self::UPLOAD_SESSION_ID, $actual->id);
    }

    public function testDownloadShouldReturnExpectedValue()
    {
        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $stream = $this->createMock(Stream::class);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('setReturnType')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($stream);

        $graph = $this->createMock(Graph::class);
        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->download();
        $this->assertSame($stream, $actual);
    }

    public function testRenameShouldReturnExpectedValue()
    {
        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $itemReference = $this->createMock(ItemReference::class);

        $renamedItem = $this->createMock(DriveItem::class);

        $renamedItem
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
            ->willReturn($renamedItem);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->rename('Irrelevant', []);
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame($actual->id, self::DRIVE_ITEM_ID);
    }

    public function testMoveShouldReturnExpectedValue()
    {
        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $itemReference = $this->createMock(ItemReference::class);

        $movedItem = $this->createMock(DriveItem::class);

        $movedItem
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $destinationItem = $this->createMock(DriveItemProxy::class);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($movedItem);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->move($destinationItem, []);
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame($actual->id, self::DRIVE_ITEM_ID);
    }

    public function testCopyShouldReturnExpectedValue()
    {
        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $destinationItem = $this->createMock(DriveItemProxy::class);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('202');

        $response
            ->expects($this->atLeastOnce())
            ->method('getHeaders')
            ->willReturn(['Location' => ['http://progre.ss/url']]);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->copy($destinationItem, []);
        $this->assertInternalType('string', $actual);
        $this->assertSame('http://progre.ss/url', $actual);
    }

    public function testCreateLinkShouldReturnExpectedValue()
    {
        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $sharingLink = $this->createMock(SharingLink::class);

        $sharingLink
            ->expects($this->atLeastOnce())
            ->method('getScope')
            ->willReturn(SharingLinkScope::ANONYMOUS);

        $permission = $this->createMock(Permission::class);

        $permission
            ->expects($this->atLeastOnce())
            ->method('getLink')
            ->willReturn($sharingLink);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('201');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($permission);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);
        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->createLink(SharingLinkType::VIEW, []);
        $this->assertInstanceOf(PermissionProxy::class, $actual);
        $this->assertInstanceOf(SharingLinkProxy::class, $actual->link);
        $this->assertInternalType('string', $actual->link->scope);
        $this->assertSame(SharingLinkScope::ANONYMOUS, $actual->link->scope);
    }

    public function testInviteShouldReturnExpectedValue()
    {
        $permissionId1 = '1234';
        $permissionId2 = '5678';

        $permission1 = $this->createMock(Permission::class);

        $permission1
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn($permissionId1);

        $permission2 = $this->createMock(Permission::class);

        $permission2
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn($permissionId2);

        $permissions = [
            $permission1,
            $permission2,
        ];

        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('');

        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getParentReference')
            ->willReturn($itemReference);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($permissions);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createCollectionRequest')
            ->willReturn($request);

        $parameterDefinitions = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $parameterDefinitions
            ->expects($this->atLeastOnce())
            ->method('buildOptions')
            ->willReturn([]);

        $operationDefinition = $this->createMock(OperationDefinitionInterface::class);

        $operationDefinition
            ->expects($this->atLeastOnce())
            ->method('getBodyParameterDefinitions')
            ->willReturn($parameterDefinitions);

        $inviteResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $inviteResourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getOperationDefinition')
            ->willReturn($operationDefinition);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $resourceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($inviteResourceDefinition);

        $sut    = new DriveItemProxy($graph, $item, $resourceDefinition);
        $actual = $sut->invite([], [], []);
        $this->assertInternalType('array', $actual);
        $this->assertCount(2, $actual);

        $this->assertInstanceOf(PermissionProxy::class, $actual[0]);
        $this->assertSame($permissionId1, $actual[0]->id);

        $this->assertInstanceOf(PermissionProxy::class, $actual[1]);
        $this->assertSame($permissionId2, $actual[1]->id);
    }
}
