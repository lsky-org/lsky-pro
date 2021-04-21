<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class DeltaQueryTest extends TestCase
{
    private $_client;
    private $graphTestBase;

    protected function setUp(): void
    {
        $this->graphTestBase = new GraphTestBase();
        $this->_client = $this->graphTestBase->graphClient;
    }

    /**
    * @group functional
    */
	public function testDeltaQuery()
    {
        $this->_client->setApiVersion("beta");
        $deltaPageRequest = $this->_client->createCollectionRequest("GET", "/groups/delta")
            ->setReturnType(Model\Group::class);
        while (!$deltaPageRequest->isEnd()) {
            $groups = $deltaPageRequest->getPage();
            foreach ($groups as $group) {
                // Deserialize members@delta into user array
                $properties = $group->getProperties();
                if (array_key_exists("members@delta", $properties))
                {
                    $members = array();
                    foreach ($properties["members@delta"] as $member) {
                        $members[] = new Model\User($member);
                    }
                    $this->assertNotNull($members[0]->getId());
                }
            }
        }
        $deltaLink = $deltaPageRequest->getDeltaLink();
        $this->assertNotNull($deltaLink);

        $deltaPageRequest2 = $this->_client->createCollectionRequest("GET", $deltaLink)
            ->setReturnType(Model\Group::class);
        $groups = $deltaPageRequest2->getPage();

        // Count is likely 0 but collection should not be null
        $this->assertNotNull($groups);
    }

    /**
    * @group functional
    */
    public function testSetAccessToken()
    {
        $this->_client->setApiVersion("beta");
        $deltaPageRequest = $this->_client->createCollectionRequest("GET", "/groups/delta")
            ->setReturnType(Model\Group::class);

        // Test if we can change the accessToken
        while (!$deltaPageRequest->isEnd()) {
            // Store authentication-header
            $oldAuthenticationHeader = $deltaPageRequest->getHeaders()['Authorization'];
            // Set a new delta-token
            $deltaPageRequest->setAccessToken($this->graphTestBase->getAccessToken());
            // Get the new authentication-header
            $newAuthenticationHeader = $deltaPageRequest->getHeaders()['Authorization'];
            // Do the actual request
            $groups = $deltaPageRequest->getPage();

            $this->assertNotSame($oldAuthenticationHeader,$newAuthenticationHeader);
            $this->assertNotNull($groups);
        }
    }
}
