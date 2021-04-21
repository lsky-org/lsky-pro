<?php

namespace Test\Unit\Krizalys\Onedrive\Definition;

use Krizalys\Onedrive\Definition\ResourceDefinitionInterface;
use Krizalys\Onedrive\Definition\ServiceDefinition;
use PHPUnit\Framework\TestCase;

class ServiceDefinitionTest extends TestCase
{
    public function testGetResourceDefinitionShouldReturnExpectedValue()
    {
        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $resourceDefinitions = [
            'name1' => $resourceDefinition,
            'name2' => $this->createMock(ResourceDefinitionInterface::class),
        ];

        $sut = new ServiceDefinition($resourceDefinitions);

        $actual = $sut->getResourceDefinition('name1');
        $this->assertSame($resourceDefinition, $actual);
    }
}
