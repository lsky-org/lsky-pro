<?php

namespace Test\Unit\Krizalys\Onedrive\Definition;

use Krizalys\Onedrive\Definition\OperationDefinition;
use Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface;
use PHPUnit\Framework\TestCase;

class OperationDefinitionTest extends TestCase
{
    public function testGetBodyParameterDefinitionsShouldReturnExpectedValue()
    {
        $bodyParameterDefinitionCollection = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $parameterDefinitionCollection = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $sut = new OperationDefinition(
            $bodyParameterDefinitionCollection,
            $parameterDefinitionCollection,
            $parameterDefinitionCollection
        );

        $actual = $sut->getBodyParameterDefinitions();
        $this->assertSame($bodyParameterDefinitionCollection, $actual);
    }

    public function testGetHeaderParameterDefinitionsShouldReturnExpectedValue()
    {
        $headerParameterDefinitionCollection = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $parameterDefinitionCollection = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $sut = new OperationDefinition(
            $parameterDefinitionCollection,
            $headerParameterDefinitionCollection,
            $parameterDefinitionCollection
        );

        $actual = $sut->getHeaderParameterDefinitions();
        $this->assertSame($headerParameterDefinitionCollection, $actual);
    }

    public function testGetQueryStringParameterDefinitionsShouldReturnExpectedValue()
    {
        $parameterDefinitionCollection = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $queryStringParameterDefinitionCollection = $this->createMock(ParameterDefinitionCollectionInterface::class);

        $sut = new OperationDefinition(
            $parameterDefinitionCollection,
            $parameterDefinitionCollection,
            $queryStringParameterDefinitionCollection
        );

        $actual = $sut->getQueryStringParameterDefinitions();
        $this->assertSame($queryStringParameterDefinitionCollection, $actual);
    }
}
