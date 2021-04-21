<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class EventTest extends TestCase
{
    /**
    * @group functional
    */
	public function testGetCalendarView()
	{
		$graphTestBase = new GraphTestBase();
    	$client = $graphTestBase->graphClient;
    	
    	$startTime = new DateTime('today midnight');
    	$startTime = $startTime->format('Y-m-d H:i:s');
    	$endTime = new DateTime('tomorrow midnight');
    	$endTime = $endTime->format('Y-m-d H:i:s');

    	$todaysEvents = $client->createRequest("GET", "/me/calendarView?startDateTime=$startTime&endDateTime=$endTime")
    						   ->setReturnType(Model\Event::class)
    						   ->execute();

    	$this->assertNotNull($todaysEvents);
	}
}