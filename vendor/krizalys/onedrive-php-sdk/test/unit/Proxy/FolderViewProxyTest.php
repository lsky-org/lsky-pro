<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\FolderViewProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\FolderView;
use PHPUnit\Framework\TestCase;

class FolderViewProxyTest extends TestCase
{
    public function testSortByShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $folderView = $this->createMock(FolderView::class);

        $folderView
            ->expects($this->atLeastOnce())
            ->method('getSortBy')
            ->willReturn('sort_by');

        $sut = new FolderViewProxy($graph, $folderView);
        $this->assertInternalType('string', $sut->sortBy);
        $this->assertSame('sort_by', $sut->sortBy);
    }

    public function testSortOrderShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $folderView = $this->createMock(FolderView::class);

        $folderView
            ->expects($this->atLeastOnce())
            ->method('getSortOrder')
            ->willReturn('sort_order');

        $sut = new FolderViewProxy($graph, $folderView);
        $this->assertInternalType('string', $sut->sortOrder);
        $this->assertSame('sort_order', $sut->sortOrder);
    }

    public function testViewTypeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $folderView = $this->createMock(FolderView::class);

        $folderView
            ->expects($this->atLeastOnce())
            ->method('getViewType')
            ->willReturn('view_type');

        $sut = new FolderViewProxy($graph, $folderView);
        $this->assertInternalType('string', $sut->viewType);
        $this->assertSame('view_type', $sut->viewType);
    }
}
