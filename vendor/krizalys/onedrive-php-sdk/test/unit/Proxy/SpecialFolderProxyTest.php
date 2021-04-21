<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\SpecialFolderProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\SpecialFolder;
use PHPUnit\Framework\TestCase;

class SpecialFolderProxyTest extends TestCase
{
    public function testNameShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $specialFolder = $this->createMock(SpecialFolder::class);

        $specialFolder
            ->expects($this->atLeastOnce())
            ->method('getName')
            ->willReturn('Name');

        $sut = new SpecialFolderProxy($graph, $specialFolder);
        $this->assertInternalType('string', $sut->name);
        $this->assertSame('Name', $sut->name);
    }
}
