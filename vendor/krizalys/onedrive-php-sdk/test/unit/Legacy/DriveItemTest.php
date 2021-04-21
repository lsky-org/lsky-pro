<?php

namespace Test\Unit\Krizalys\Onedrive\Legacy;

use Krizalys\Onedrive\DriveItem;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Mockery as m;

class TestDriveItem extends DriveItem
{
}

/**
 * @group legacy
 */
class DriveItemTest extends MockeryTestCase
{
    private $driveItem;

    private $client;

    protected function setUp()
    {
        parent::setUp();
        $client          = $this->mockClient();
        $this->driveItem = new TestDriveItem($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $this->client    = $client;
    }

    private function mockPayloadFolder(array $values = [])
    {
        return (object) array_merge([
            'parent_id'    => 'folder.0000000000000000.0000000000000000!000',
            'name'         => '',
            'description'  => '',
            'size'         => 0,
            'source'       => 'http://localhost/',
            'created_time' => '1970-01-01T00:00:00+0000',
            'updated_time' => '1970-01-01T00:00:00+0000',
        ], $values);
    }

    private function mockClient(array $expectations = [])
    {
        $names  = implode(',', array_keys($expectations));
        $client = m::mock("Krizalys\Onedrive\Client[$names]");

        foreach ($expectations as $name => $callback) {
            $expectation = $client->shouldReceive($name);
            $callback($expectation);
        }

        return $client;
    }

    public function testIsFolderShouldReturnFalse()
    {
        $actual = $this
            ->driveItem
            ->isFolder();

        $this->assertFalse($actual);
    }

    public function testGetIdShouldReturnExpectedValue()
    {
        $actual = $this
            ->driveItem
            ->getId();

        $this->assertEquals('file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', $actual);
    }

    public function testGetParentIdWithParentIdShouldReturnExpectedValue()
    {
        $driveItem = new TestDriveItem($this->client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', [
            'parent_id' => 'folder.ffffffffffffffff.FFFFFFFFFFFFFFFF!123',
        ]);

        $actual = $driveItem->getParentId();
        $this->assertEquals('folder.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', $actual);
    }

    public function testGetParentIdWithoutParentIdShouldReturnExpectedValue()
    {
        $payload = $this->mockPayloadFolder([
            'parent_id' => 'folder.ffffffffffffffff.FFFFFFFFFFFFFFFF!123',
        ]);

        $client = $this->mockClient([
            'fetchProperties' => function ($expectation) use ($payload) {
                $expectation->andReturn($payload);
            },
        ]);

        $driveItem = new TestDriveItem($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $actual    = $driveItem->getParentId();
        $this->assertEquals('folder.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', $actual);
    }

    public function testGetNameWithNameShouldReturnExpectedValue()
    {
        $driveItem = new TestDriveItem($this->client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', [
            'name' => 'test-drive-item',
        ]);

        $actual = $driveItem->getName();
        $this->assertEquals('test-drive-item', $actual);
    }

    public function testGetNameWithoutNameShouldReturnExpectedValue()
    {
        $payload = $this->mockPayloadFolder([
            'name' => 'test-drive-item',
        ]);

        $client = $this->mockClient([
            'fetchProperties' => function ($expectation) use ($payload) {
                $expectation->andReturn($payload);
            },
        ]);

        $driveItem = new TestDriveItem($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $actual    = $driveItem->getName();
        $this->assertEquals('test-drive-item', $actual);
    }

    public function testGetDescriptionWithDescriptionShouldReturnExpectedValue()
    {
        $driveItem = new TestDriveItem($this->client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', [
            'description' => 'Some test description',
        ]);

        $actual = $driveItem->getDescription();
        $this->assertEquals('Some test description', $actual);
    }

    public function testGetDescriptionWithoutDescriptionShouldReturnExpectedValue()
    {
        $payload = $this->mockPayloadFolder([
            'description' => 'Some test description',
        ]);

        $client = $this->mockClient([
            'fetchProperties' => function ($expectation) use ($payload) {
                $expectation->andReturn($payload);
            },
        ]);

        $driveItem = new TestDriveItem($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $actual    = $driveItem->getDescription();
        $this->assertEquals('Some test description', $actual);
    }

    public function testGetSizeWithSizeShouldReturnExpectedValue()
    {
        $driveItem = new TestDriveItem($this->client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', [
            'size' => 123,
        ]);

        $actual = $driveItem->getSize();
        $this->assertEquals(123, $actual);
    }

    public function testGetSizeWithoutSizeShouldReturnExpectedValue()
    {
        $payload = $this->mockPayloadFolder([
            'size' => 123,
        ]);

        $client = $this->mockClient([
            'fetchProperties' => function ($expectation) use ($payload) {
                $expectation->andReturn($payload);
            },
        ]);

        $driveItem = new TestDriveItem($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $actual    = $driveItem->getSize();
        $this->assertEquals(123, $actual);
    }

    public function testGetSourceWithSourceShouldReturnExpectedValue()
    {
        $driveItem = new TestDriveItem($this->client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', [
            'source' => 'http://te.st/123/source',
        ]);

        $actual = $driveItem->getSource();
        $this->assertEquals('http://te.st/123/source', $actual);
    }

    public function testGetSourceWithoutSourceShouldReturnExpectedValue()
    {
        $payload = $this->mockPayloadFolder([
            'source' => 'http://te.st/123/source',
        ]);

        $client = $this->mockClient([
            'fetchProperties' => function ($expectation) use ($payload) {
                $expectation->andReturn($payload);
            },
        ]);

        $driveItem = new TestDriveItem($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $actual    = $driveItem->getSource();
        $this->assertEquals('http://te.st/123/source', $actual);
    }

    public function testGetCreatedTimeWithCreatedTimeShouldReturnExpectedValue()
    {
        $driveItem = new TestDriveItem($this->client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', [
            'created_time' => '1999-12-31T23:59:59+0000',
        ]);

        $actual = $driveItem->getCreatedTime();
        $this->assertEquals(strtotime('1999-12-31T23:59:59+0000'), $actual);
    }

    public function testGetCreatedTimeWithoutCreatedTimeShouldReturnExpectedValue()
    {
        $payload = $this->mockPayloadFolder([
            'created_time' => '1999-12-31T23:59:59+0000',
        ]);

        $client = $this->mockClient([
            'fetchProperties' => function ($expectation) use ($payload) {
                $expectation->andReturn($payload);
            },
        ]);

        $driveItem = new TestDriveItem($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $actual    = $driveItem->getCreatedTime();
        $this->assertEquals(strtotime('1999-12-31T23:59:59+0000'), $actual);
    }

    public function testGetUpdatedTimeWithUpdatedTimeShouldReturnExpectedValue()
    {
        $driveItem = new TestDriveItem($this->client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123', [
            'updated_time' => '1999-12-31T23:59:59+0000',
        ]);

        $actual = $driveItem->getUpdatedTime();
        $this->assertEquals(strtotime('1999-12-31T23:59:59+0000'), $actual);
    }

    public function testGetUpdatedTimeWithoutUpdatedTimeShouldReturnExpectedValue()
    {
        $payload = $this->mockPayloadFolder([
            'updated_time' => '1999-12-31T23:59:59+0000',
        ]);

        $client = $this->mockClient([
            'fetchProperties' => function ($expectation) use ($payload) {
                $expectation->andReturn($payload);
            },
        ]);

        $driveItem = new TestDriveItem($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $actual    = $driveItem->getUpdatedTime();
        $this->assertEquals(strtotime('1999-12-31T23:59:59+0000'), $actual);
    }

    public function testMoveShouldCallOnceClientMoveDriveItem()
    {
        $client = $this->mockClient([
            'moveDriveItem' => function ($expectation) {
                $expectation->once();
            },
        ]);

        $driveItem = new TestDriveItem($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $driveItem->move('path/to/file');
    }
}
