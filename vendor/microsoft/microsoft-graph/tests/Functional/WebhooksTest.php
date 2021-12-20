<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class WebhooksTest extends TestCase
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
	public function testWebhooks()
    {
        $sub = new Model\Subscription();
        $sub->setChangeType("created,updated");
        $sub->setNotificationUrl("https://webhook-sub-test.azurewebsites.net/api/WebhookTrigger");
        $sub->setResource("/me/mailfolders('inbox')/messages");
        $time = new \DateTime();
        $time->add(new DateInterval("PT1H"));
        $sub->setExpirationDateTime($time);

        $this->_client->setApiVersion("beta");
        $subResult = $this->_client->createRequest("POST", "/subscriptions")
            ->attachBody($sub)
            ->setReturnType(Model\Subscription::class)

            ->execute();
        $this->assertNotNull($subResult);
        $this->assertEquals($sub->getResource(), $subResult->getResource());
    }
}