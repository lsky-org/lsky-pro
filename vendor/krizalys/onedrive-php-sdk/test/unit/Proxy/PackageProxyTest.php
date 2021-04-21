<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Constant\PackageType;
use Krizalys\Onedrive\Proxy\PackageProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Package;
use PHPUnit\Framework\TestCase;

class PackageProxyTest extends TestCase
{
    public function testTypeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $package = $this->createMock(Package::class);

        $package
            ->expects($this->atLeastOnce())
            ->method('getType')
            ->willReturn(PackageType::ONENOTE);

        $sut = new PackageProxy($graph, $package);
        $this->assertInternalType('string', $sut->type);
        $this->assertSame(PackageType::ONENOTE, $sut->type);
    }
}
