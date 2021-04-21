<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;
use Beta\Microsoft\Graph\Model\User as BetaUser;
use Beta\Microsoft\Graph\Model as BetaModel;

class UserTest extends TestCase
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
	public function testFilterByStartsWith()
	{
    	$users = $this->_client->createRequest("GET", "/users?\$filter=startswith(displayName, 'A')")
    					       ->setReturnType(Model\User::class)
    					       ->execute();
    	foreach ($users as $user)
    	{
    		$this->assertEquals("A", substr($user->getDisplayName(), 0,1));
    	}
    }

    /**
    * @group functional
    */
    public function testGetPhoto()
    {
    	$photo = $this->_client->createRequest("GET", "/me/photo/\$value")
    					       ->execute();
    	$this->assertNotNull($photo->getRawBody());
    }

    /**
    * @group functional
    */
    public function testGetUser()
    {
    	$user = $this->_client->createRequest("GET", "/me")
    				          ->setReturnType(Model\User::class)
    				          ->execute();
    	$this->assertNotNull($user->getUserPrincipalName());
	}
	
	/**
    * @group functional
    */
    public function testBetaGetUser()
    {
		$user = $this->_client->setApiVersion("beta")
							  ->createRequest("GET", "/me")
    				          ->setReturnType(BetaUser::class)
    				          ->execute();
    	$this->assertNotNull($user->getUserPrincipalName());
    }

    /**
    * @group functional
    */
    public function testGetManager()
    {
    	$manager = $this->_client->createRequest("GET", "/me/manager")
    				             ->setReturnType(Model\User::class)
    				             ->execute();
    	$this->assertNotNull($manager->getDisplayName());
	}
	
	/**
    * @group functional
    */
    public function testBetaGetManager()
    {
		$manager = $this->_client->setApiVersion("beta")
								 ->createRequest("GET", "/me/manager")
    				             ->setReturnType(BetaModel\User::class)
    				             ->execute();
    	$this->assertNotNull($manager->getDisplayName());
    }

    /**
    * @group functional
    */
    public function testUpdateManager()
    {
    	$manager = $this->_client->createRequest("GET", "/me/manager")
    				             ->setReturnType(Model\User::class)
    				             ->execute();

    	$this->_client->createRequest("PUT", "/me/manager/\$ref")
    		          ->attachBody('{"@odata.id": "https://graph.microsoft.com/v1.0/users/'.$manager->getId().'"}')
    		          ->execute();
    	$newManager = $this->_client->createRequest("GET", "/me/manager")
    				                ->setReturnType(Model\User::class)
    				                ->execute();
    	$this->assertEquals($manager, $newManager);
    }

    /**
    * @group functional
    */
    public function testGetMemberGroupsWithSecurityEnabled()
    {
    	$groups = $this->_client->createRequest("POST", "/me/getMemberGroups")
    					        ->attachBody("{securityEnabledOnly: true}")
    				            ->setReturnType(Model\Group::class)
    				            ->execute();
    	$this->assertNotNull($groups);
    }

    /**
    * @group functional
    */
    public function testUpdateUser()
    {
    	$user = $this->getCurrentUser();

    	$newUser = new Model\User();
    	$newUser->setGivenName("Katherine");

    	$this->_client->createRequest("PATCH", "/me")
    				  ->attachBody($newUser)
    				  ->execute();
    	$updatedUser = $this->getCurrentUser();

    	$this->assertEquals("Katherine", $updatedUser->getGivenName());
    	$this->assertEquals($user->getMail(), $updatedUser->getMail());

    	$this->_client->createRequest("PATCH", "/me")
    		          ->attachBody($user)
    		          ->setReturnType(Model\User::class)
    		          ->execute();
    	$restoredUser = $this->getCurrentUser();
    	$this->assertEquals($user->getGivenName(), $restoredUser->getGivenName());
    }

    private function getCurrentUser()
    {
    	return $this->_client->createRequest("GET", "/me")
    				      ->setReturnType(Model\User::class)
    				      ->execute();
    }
}