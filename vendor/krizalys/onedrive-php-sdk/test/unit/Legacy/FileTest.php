<?php

namespace Test\Unit\Krizalys\Onedrive\Legacy;

use Krizalys\Onedrive\File;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Mockery as m;

/**
 * @group legacy
 */
class FileTest extends MockeryTestCase
{
    private function mockClient(array $expectations = [])
    {
        $names = implode(',', array_keys($expectations));

        $client = m::mock("Krizalys\Onedrive\Client[$names]", [
            [
                'state' => (object) [
                    'token' => (object) [
                        'data' => (object) [
                            'access_token' => 'TeSt/AcCeSs+ToKeN',
                        ],
                    ],
                ],
            ],
        ]);

        foreach ($expectations as $name => $callback) {
            $expectation = $client->shouldReceive($name);
            $callback($expectation);
        }

        return $client;
    }

    public function testFetchContentShouldCallOnceClientApiGet()
    {
        $client = $this->mockClient([
            'apiGet' => function ($expectation) {
                $expectation->once();
            },
        ]);

        $file = new File($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $file->fetchContent();
    }

    public function testCopyShouldCallOnceClientCopyFile()
    {
        $client = $this->mockClient([
            'copyFile' => function ($expectation) {
                $expectation->once();
            },
        ]);

        $file = new File($client, 'file.ffffffffffffffff.FFFFFFFFFFFFFFFF!123');
        $file->copy('path/to/file');
    }
}
