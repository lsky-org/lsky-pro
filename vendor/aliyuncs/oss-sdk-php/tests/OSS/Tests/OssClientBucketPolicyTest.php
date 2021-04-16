<?php
namespace OSS\Tests;

use OSS\Core\OssException;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'TestOssClientBase.php';

class OssClientBucketPolicyTest extends TestOssClientBase
{
    public function testBucket()
    {
        $policy_str = <<< BBBB
        {
            "Version":"1",
            "Statement":[
              {
                "Action":[
                  "oss:PutObject",
                  "oss:GetObject"
                ],
                "Effect":"Deny",
                "Principal":["1234567890"],
                "Resource":["acs:oss:*:1234567890:*/*"]
              }
            ]
        }
        BBBB;

        try {
            $this->ossClient->deleteBucketPolicy($this->bucket);
            $policy = $this->ossClient->getBucketPolicy($this->bucket);
            $this->assertTrue(false);
        } catch (OssException $e) {
            $this->assertTrue(true);
            $this->assertEquals("NoSuchBucketPolicy", $e->getErrorCode());
        }

        try {
            $this->ossClient->putBucketPolicy($this->bucket, $policy_str);
            $policy = $this->ossClient->getBucketPolicy($this->bucket);
            $this->assertEquals($policy_str, $policy);
            $this->ossClient->deleteBucketPolicy($this->bucket);
        } catch (OssException $e) {
            $this->assertTrue(false);
        }
    }
}
