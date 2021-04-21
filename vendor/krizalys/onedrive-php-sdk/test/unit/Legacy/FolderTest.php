<?php

namespace Test\Unit\Krizalys\Onedrive\Legacy;

use Krizalys\Onedrive\Folder;
use Krizalys\Onedrive\NameConflictBehavior;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Mockery as m;
use Psr\Log\LogLevel;

/**
 * @group legacy
 */
class FolderTest extends MockeryTestCase
{
    private $folder;

    private $client;

    protected function setUp()
    {
        parent::setUp();
        $client       = $this->mockClient();
        $this->folder = new Folder($client);
        $this->client = $client;
    }

    private function mockClient(array $expectations = [])
    {
        $names  = implode(',', array_keys($expectations));
        $client = m::mock("Krizalys\Onedrive\Client[$names]");

        foreach ($expectations as $name => $callback) {
            $expectation = $client->shouldReceive($name);

            if (is_callable($callback)) {
                $callback($expectation);
            }
        }

        return $client;
    }

    public function testIsFolderShouldReturnExpectedValue()
    {
        $actual = $this
            ->folder
            ->isFolder();

        $this->assertEquals(true, $actual);
    }

    public function testFetchDriveItemsShouldCallOnceClientLogWithExpectedLevel()
    {
        $client = $this->mockClient([
            'log' => function ($expectation) {
                $expectation
                    ->once()
                    ->withArgs(function ($level, $message, $context = []) {
                        return $level == LogLevel::WARNING;
                    });
            },

            'fetchDriveItems' => null,
        ]);

        $folder = new Folder($client);
        $folder->fetchDriveItems();
    }

    public function testFetchDriveItemsShouldCallOnceClientFetchDriveItems()
    {
        $client = $this->mockClient([
            'log' => null,

            'fetchDriveItems' => function ($expectation) {
                $expectation->once();
            },
        ]);

        $folder = new Folder($client);
        $folder->fetchDriveItems();
    }

    public function testFetchChildDriveItemsShouldCallOnceClientFetchDriveItems()
    {
        $client = $this->mockClient([
            'fetchDriveItems' => function ($expectation) {
                $expectation->once();
            },
        ]);

        $folder = new Folder($client);
        $folder->fetchChildDriveItems();
    }

    public function testCreateFolderShouldCallOnceClientCreateFolder()
    {
        $client = $this->mockClient([
            'createFolder' => function ($expectation) {
                $expectation->once();
            },
        ]);

        $folder = new Folder($client);
        $folder->createFolder('test-folder', 'Some test description');
    }

    public function testCreateFileShouldCallOnceClientCreateFile()
    {
        $client = $this->mockClient([
            'createFile' => function ($expectation) {
                $expectation->once();
            },
        ]);

        $folder = new Folder($client);

        $folder->createFile(
            'test-file',
            'Some test content',
            ['name_conflict_behavior', NameConflictBehavior::REPLACE]
        );
    }
}
