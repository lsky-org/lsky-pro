<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class AzureTest extends TestCase
{
    private $_client;

    protected function setUp(): void
    {
        $graphTestBase = new GraphTestBase();
        $this->_client = $graphTestBase->graphClient;
        $this->_client->setApiVersion("beta");
    }

    /**
    * @group functional
    *
    * Administrative units are not yet available on Graph v1
    */
	public function testAdminUnits()
    {
        // $adminUnits = $this->_client->createRequest("GET", "/administrativeUnits")
        //     ->setReturnType(Model\AdministrativeUnit::class)
        //     ->execute();

        // $this->assertNotNull($adminUnits);

        // $newUnit = new Model\AdministrativeUnit();
        // $newUnit->setDisplayName("Test admin unit");

        // $createdUnit = $this->_client->createRequest("POST", "/administrativeUnits")
        //     ->attachBody($newUnit)
        //     ->setReturnType(Model\AdministrativeUnit::class)
        //     ->execute();

        // $this->assertEquals($newUnit->getDisplayName(), $createdUnit->getDisplayName());

        // $this->_client->createRequest("DELETE", "/administrativeUnits/" . $createdUnit->getId())
        //     ->execute();
    }
}
