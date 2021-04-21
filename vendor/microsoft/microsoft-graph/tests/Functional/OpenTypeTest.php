<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class OpenTypeTest extends TestCase
{
    private $_client;

    protected function setUp(): void
    {
        $graphTestBase = new GraphTestBase();
        $this->_client = $graphTestBase->graphClient;
    }

	/**
	* @group functional
	*/
	public function testOpenExtensions()
    {
    	$extension = new Model\Extension(array("theme" => "dark", "extensionName" => "Extension 1"));

    	$this->_client->setApiVersion("beta");
    	$eResult = $this->_client->createRequest("POST", "/me/extensions")
    		->attachBody($extension)
    		->setReturnType(Model\Extension::class)
    		->execute();

    	$this->assertEquals("Extension 1", $eResult->getProperties()["extensionName"]);

    	$this->_client->createRequest("DELETE", "/me/extensions/" . $eResult->getId())
    		->execute();
    }

    /**
    * @group functional
    */
    public function testSchemaExtensions()
    {
        $this->markTestSkipped();
        $extension = new Model\SchemaExtension();
        $extension->setId("schematest");
        $extension->setDescription("PHP Graph SDK test");
        $extension->setTargetTypes(array("Group"));

        $property = new Model\ExtensionSchemaProperty();
        $property->setName("courseId");
        $property->setType("Integer");

        $extension->setSchemaExtensionProperties(array($property));

        $newExtension = $this->_client
            ->createRequest("POST", "/schemaExtensions")
            ->attachBody($extension)
            ->setReturnType(Model\SchemaExtension::class)
            ->execute();
        $this->assertEquals($extension->getDescription(), $newExtension->getDescription());
    }
}