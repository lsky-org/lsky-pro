<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;

class PlannerTest extends TestCase
{
    private $_client;

    //This test currently does not clean up after itself
    private $planId;
    private $planBucket;
    private $planTask;

    protected function setUp(): void
    {
        $graphTestBase = new GraphTestBase();
        $this->_client = $graphTestBase->graphClient;

        $this->planId = PLAN_ID;

        $bucket = new Model\PlannerBucket();
        $bucket->setName("Test Bucket");
        $bucket->setPlanId($this->planId);

        $this->planBucket = $this->_client->createRequest("POST", "/planner/buckets")
            ->attachBody($bucket)
            ->setReturnType(Model\PlannerBucket::class)
            ->execute();

        $task = new Model\PlannerTask();
        $task->setTitle("Test Task");
        $task->setPlanId($this->planId);
        $task->setBucketId($this->planBucket->getId());

        $this->planTask = $this->_client->createRequest("POST", "/planner/tasks")
            ->attachBody($task)
            ->setReturnType(Model\PlannerTask::class)
            ->execute();
    }

    /**
    * @group functional
    */
	public function testCreateTask()
    {
        $newTask = new Model\PlannerTask();
        $newTask->setTitle("Test 1");
        $newTask->setPlanId($this->planId);
        $newTask->setBucketId($this->planBucket->getId());

        $task = $this->_client->createRequest("POST", "/planner/tasks")
            ->attachBody($newTask)
            ->setReturnType(Model\PlannerTask::class)
            ->execute();

        $this->assertEquals($newTask->getTitle(), $task->getTitle());
    }

    /**
    * @group functional
    */
    public function testUpdateTask()
    {
        $me = $this->_client->createRequest("GET", "/me")
            ->setReturnType(Model\User::class)
            ->execute();
        $assignment = new Model\PlannerAssignment();
        $assignment->setOrderHint(" !");
        $assignment->setODataType("#microsoft.graph.plannerAssignment");

        $task = $this->_client->createRequest("GET", "/planner/tasks/" . $this->planTask->getId())
            ->setReturnType(Model\PlannerTask::class)
            ->execute();
        
        try {
            $this->_client->createRequest("PATCH", "/planner/tasks/" . $this->planTask->getId())
                ->attachBody(array("assignments" => array($me->getId() => $assignment)))
                ->addHeaders(array("If-Match" =>  $task->getProperties()["@odata.etag"]))
                ->execute();

            $updatedTask = $this->_client->createRequest("GET", "/planner/tasks/" . $this->planTask->getId())
            	->setReturnType(Model\PlannerTask::class)
            	->execute();

            $this->assertNotNull($updatedTask->getAssignments()->getProperties()[$me->getId()]);
        } catch (GuzzleHttp\Exception\ClientException $e) {
            print_r($e->getResponse()->getBody()->getContents());
        }

    }

    public function tearDown(): void
    {
        $task = $this->_client->createRequest("GET", "/planner/tasks/" . $this->planTask->getId())
            ->setReturnType(Model\PlannerTask::class)
            ->execute();
        $this->_client->createRequest("DELETE", "/planner/tasks/" . $this->planTask->getId())
            ->addHeaders(array("If-Match" => $task->getProperties()["@odata.etag"]))
            ->execute();

        $bucket = $this->_client->createRequest("GET", "/planner/buckets/" . $this->planBucket->getId())
            ->setReturnType(Model\PlannerBucket::class)
            ->execute();
        $this->_client->createRequest("DELETE", "/planner/buckets/" . $this->planBucket->getId())
            ->addHeaders(array("If-Match" => $bucket->getProperties()["@odata.etag"]))
            ->execute();
    }
}