<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Beta\Microsoft\Graph\TermStore\Model\Store as BetaStore;

class TermStoreTest extends TestCase
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
    public function testBetaGetStore()
    {
		$store = $this->_client->setApiVersion("beta")
							  ->createRequest("GET", "/termstore")
    				          ->setReturnType(BetaStore::class)
    				          ->execute();
    	$this->assertNotNull($store->getDefaultLanguageTag());
    }
}