<?php

namespace OSS\Tests;

use OSS\Result\GetBucketStatResult;
use OSS\Core\OssException;
use OSS\Http\ResponseCore;

class GetBucketStatResultTest extends \PHPUnit_Framework_TestCase
{

    private $validXml = <<<BBBB
        <?xml version="1.0" ?>
        <BucketStat>
            <Storage>100</Storage>
            <ObjectCount>200</ObjectCount>
            <MultipartUploadCount>10</MultipartUploadCount>
        </BucketStat>
        BBBB;

    private $invalidXml = <<<BBBB
        <?xml version="1.0" ?>
        <BucketStat>
        </BucketStat>
        BBBB;

    public function testParseValidXml()
    {
        $response = new ResponseCore(array(), $this->validXml, 200);
        $result = new GetBucketStatResult($response);
        $this->assertTrue($result->isOK());
        $this->assertNotNull($result->getData());
        $this->assertNotNull($result->getRawResponse());
        $stat = $result->getData();
        $this->assertEquals(100, $stat->getStorage());
        $this->assertEquals(200, $stat->getObjectCount());
        $this->assertEquals(10, $stat->getMultipartUploadCount());
    }

    public function testParseNullXml()
    {
        $response = new ResponseCore(array(), "", 200);
        $result = new GetBucketStatResult($response);
        $stat = $result->getData();
        $this->assertEquals(0, $stat->getStorage());
        $this->assertEquals(0, $stat->getObjectCount());
        $this->assertEquals(0, $stat->getMultipartUploadCount());
    }

    public function testParseInvalidXml()
    {
        $response = new ResponseCore(array(), $this->invalidXml, 200);
        $result = new GetBucketStatResult($response);
        $stat = $result->getData();
        $this->assertEquals(0, $stat->getStorage());
        $this->assertEquals(0, $stat->getObjectCount());
        $this->assertEquals(0, $stat->getMultipartUploadCount());
    }
}
