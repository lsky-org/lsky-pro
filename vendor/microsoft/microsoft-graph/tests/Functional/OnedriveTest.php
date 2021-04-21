<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class OnedriveTest extends TestCase
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
	public function testNextPageRequest()
	{
    	$driveItemsPageIterator = $this->_client->createCollectionRequest("GET", "/me/drive/root/children")
    							 		        ->setPageSize(4)
    							 		        ->setReturnType(Model\DriveItem::class);
    	$driveItemsPage = $driveItemsPageIterator->getPage();
    	$this->assertNotNull($driveItemsPage);

    	while (!$driveItemsPageIterator->isEnd())
    	{
    		$driveItemsPage = $driveItemsPageIterator->getPage();
    	}

    	$this->assertNotNull($driveItemsPage);
    }

    /**
    * @group functional
    */
    public function testGetContent()
    {
    	$driveItems = $this->_client->createRequest("GET", "/me/drive/root/children")
    						        ->setReturnType(Model\DriveItem::class)
    						        ->execute();
    	foreach ($driveItems as $item)
    	{
    		if ($item->getFile())
    		{
    			$itemId = $item->getId();
    			$driveItemContent = $this->_client->createRequest("GET", "/me/drive/items/$itemId/content")
    									          ->setReturnType(GuzzleHttp\Psr7\Stream::class)
    									          ->execute();
				$this->assertNotEmpty((String)$driveItemContent);
    		}
    	}
    }

    /**
    * @group functional
    */
    public function testDownloadFile()
    {
        $driveItems = $this->_client->createRequest("GET", "/me/drive/root/children")
                                    ->setReturnType(Model\DriveItem::class)
                                    ->execute();
        foreach ($driveItems as $item)
        {
            //Find the first non-folder resource to download
            if ($item->getFile())
            {
                $itemId = $item->getId();
                $itemName = $item->getName();
                $itemName = str_replace(" ", "_", $itemName);

                $driveItemContent = $this->_client->createRequest("GET", "/me/drive/items/$itemId/content")
                                                  ->download("D:\\".$itemName);
                $this->assertTrue(file_exists("D:\\".$itemName));
                unlink("D:\\".$itemName);
                break;
            }
        }
    }


    /**
    * @group functional
    */
    public function testGetSetPermissions()
    {
    	$driveItems = $this->_client->createRequest("GET", "/me/drive/root/children")
    						        ->setReturnType(Model\DriveItem::class)
    						        ->execute();

    	foreach ($driveItems as $item)
    	{
    		if ($item->getFile())
    		{
    			$itemId = $item->getId();
    			$driveItem = $this->_client->createRequest("GET", "/me/drive/items/$itemId?\$expand=permissions")
    								       ->setReturnType(Model\DriveItem::class)
    								       ->execute();
    			$this->assertNotNull($driveItem);

    			$perm = new Model\Permission();
    			$perm->setRoles(array("write"));
    			if (count($driveItem->getPermissions()) > 0)
    			{
    				$permId = $driveItem->getPermissions()[0]["id"];

    				$this->_client->createRequest("PATCH", "/me/drive/items/$itemId/permissions/$permId")
    							  ->addHeaders(array("if-match" => $driveItem->getCTag()))
    							  ->attachBody($perm)
    							  ->execute();
    				$permission = $this->_client->createRequest("GET", "/me/drive/items/$itemId/permissions/$permId")
    									        ->setReturnType(Model\Permission::class)
    									        ->execute();

    				$this->assertNotNull($permission);
    				$this->assertEquals("write", $permission->getRoles()[0]);
    			}
    			break;
    		}
    	}
    }

    /**
    * @group functional
    */
    public function testSearchFile()
    {
        $rareName = "zyxwvutsrqponmlkjihgfedcba";
        $rareSearchItem = new Model\DriveItem();
        $rareSearchItem->setName($rareName);

        $folder = new Model\Folder();
        $folder->setChildCount(0);
        
        $rareSearchItem->setFolder($folder);
        $rareSearchItem = $this->_client->createRequest("POST", "/me/drive/root/children")
                                ->attachBody($rareSearchItem)
                                ->setReturnType(Model\DriveItem::class)
                                ->execute();

    	$driveItems = $this->_client->createRequest("GET", "/me/drive/search(q='" . $rareName . "')")
    						        ->setReturnType(Model\DriveItem::class)
    						        ->execute();
        try {
    	   $this->assertEquals(1, count($driveItems));
        } finally {
            $this->_client->createRequest("DELETE", "/me/drive/items/" . $rareSearchItem->getId())
                          ->execute();
        }
    }

    /**
    * @group functional
    */
    public function testCreateSharingLink()
    {
    	$itemsToShare = $this->_client->createRequest("GET", "/me/drive/root/children?\$filter=startswith(name, 'Timesheet')")
    						          ->setReturnType(Model\DriveItem::class)
    						          ->execute();
    	$itemToShare = $itemsToShare[0];
    	$this->assertEquals("Timesheet", substr($itemToShare->getName(), 0, 9));

    	$itemId = $itemToShare->getId();
    	$permission = $this->_client->createRequest("POST", "/me/drive/items/$itemId/createLink")
    						        ->attachBody(array("type" => "edit", "scope" => "organization"))
    						        ->setReturnType(Model\Permission::class)
    						        ->execute();
    	$link = $permission->getLink();
    	$this->assertEquals("organization", $link->getScope());
    	$this->assertEquals("edit", $link->getType());
    	$this->assertNotNull($link->getWebUrl());
    }

    /**
    * @group functional
    */
    public function testInvite()
    {
    	$itemsToShare = $this->_client->createRequest("GET", "/me/drive/root/children?\$filter=startswith(name, 'Timesheet')")
    						          ->setReturnType(Model\DriveItem::class)
    						          ->execute();
    	$itemToShare = $itemsToShare[0];
    	$itemId = $itemToShare->getId();

    	$me = $this->_client->createRequest("GET", "/me")
    				        ->setReturnType(Model\User::class)
    				        ->execute();
    	$domain = explode("@", $me->getMail())[1];
    	$recipient = new Model\DriveRecipient();
    	$recipient->setEmail("alexd@".$domain);

    	$roles = array("write");

    	$body = array(
    		"recipients" => array($recipient), 
    		"requireSignIn" => true,
    		"sendInvitation" => true,
    		"roles" => $roles, 
    		"message" => "Check out the Invite feature!");

    	$inviteCollection = $this->_client->createRequest("POST", "/me/drive/items/$itemId/invite")
    							          ->attachBody($body)
    							          ->setReturnType(Model\Permission::class)
    							          ->execute();
    	$this->assertEquals("Alex Darrow", $inviteCollection[0]->getGrantedTo()->getUser()->getDisplayName());
    }
}