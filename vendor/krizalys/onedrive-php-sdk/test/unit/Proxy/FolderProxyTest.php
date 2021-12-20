<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\FolderProxy;
use Krizalys\Onedrive\Proxy\FolderViewProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Folder;
use Microsoft\Graph\Model\FolderView;
use PHPUnit\Framework\TestCase;

class FolderProxyTest extends TestCase
{
    public function testChildCountShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $folder = $this->createMock(Folder::class);

        $folder
            ->expects($this->atLeastOnce())
            ->method('getChildCount')
            ->willReturn(1);

        $sut = new FolderProxy($graph, $folder);
        $this->assertInternalType('int', $sut->childCount);
        $this->assertSame(1, $sut->childCount);
    }

    public function testViewShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $folderView = $this->createMock(FolderView::class);

        $folderView
            ->expects($this->atLeastOnce())
            ->method('getSortBy')
            ->willReturn('sort_by');

        $folder = $this->createMock(Folder::class);

        $folder
            ->expects($this->atLeastOnce())
            ->method('getView')
            ->willReturn($folderView);

        $sut = new FolderProxy($graph, $folder);
        $this->assertInstanceOf(FolderViewProxy::class, $sut->view);
        $this->assertSame('sort_by', $sut->view->sortBy);
    }
}
