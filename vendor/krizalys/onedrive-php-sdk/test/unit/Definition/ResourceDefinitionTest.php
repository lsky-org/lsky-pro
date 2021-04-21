<?php

namespace Test\Unit\Krizalys\Onedrive\Definition;

use Krizalys\Onedrive\Definition\OperationDefinitionInterface;
use Krizalys\Onedrive\Definition\ResourceDefinition;
use Krizalys\Onedrive\Definition\ResourceDefinitionInterface;
use PHPUnit\Framework\TestCase;

class ResourceDefinitionTest extends TestCase
{
    public function testGetOperationDefinitionShouldReturnExpectedValue()
    {
        $operationDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $operationDefinitions = [
            'name1' => $operationDefinition,
            'name2' => $this->createMock(ResourceDefinitionInterface::class),
        ];

        $resourceDefinitions = [
            'name' => $this->createMock(OperationDefinitionInterface::class),
        ];

        $sut = new ResourceDefinition($operationDefinitions, $resourceDefinitions);

        $actual = $sut->getOperationDefinition('name1');
        $this->assertSame($operationDefinition, $actual);
    }

    public function testGetResourceDefinitionShouldReturnExpectedValue()
    {
        $operationDefinitions = [
            'name' => $this->createMock(ResourceDefinitionInterface::class),
        ];

        $resourceDefinition = $this->createMock(OperationDefinitionInterface::class);

        $resourceDefinitions = [
            'name1' => $resourceDefinition,
            'name2' => $this->createMock(OperationDefinitionInterface::class),
        ];

        $sut = new ResourceDefinition($operationDefinitions, $resourceDefinitions);

        $actual = $sut->getResourceDefinition('name1');
        $this->assertSame($resourceDefinition, $actual);
    }
}
