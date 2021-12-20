<?php
namespace Qiniu\Tests;

use phpDocumentor\Reflection\DocBlock\Tags\Version;
use Qiniu\Region;
use Qiniu\Storage\ResumeUploader;
use Qiniu\Storage\UploadManager;
use Qiniu\Http\Client;
use Qiniu\Config;
use Qiniu\Zone;

class ResumeUpTest extends \PHPUnit_Framework_TestCase
{
    protected $bucketName;
    protected $auth;

    protected function setUp()
    {
        global $bucketName;
        $this->bucketName = $bucketName;

        global $testAuth;
        $this->auth = $testAuth;
    }

    public function test4ML()
    {
        $key = "resumePutFile4ML_".rand();
        $upManager = new UploadManager();
        $token = $this->auth->uploadToken($this->bucketName, $key);
        $tempFile = qiniuTempFile(4 * 1024 * 1024 + 10);
        $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
        $this->assertNotFalse($resumeFile);
        list($ret, $error) = $upManager->putFile(
            $token,
            $key,
            $tempFile,
            null,
            'application/octet-stream',
            false,
            $resumeFile
        );
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
        unlink($resumeFile);

        $domain = getenv('QINIU_TEST_DOMAIN');
        $response = Client::get("http://$domain/$key");
        $this->assertEquals(200, $response->statusCode);
        $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
        unlink($tempFile);
    }

    public function test4ML2()
    {
        $key = 'resumePutFile4ML_'.rand();
        $zone = new Zone(array('upload.fake.qiniu.com'), array('upload.qiniup.com'));
        $cfg = new Config($zone);
        $upManager = new UploadManager($cfg);
        $token = $this->auth->uploadToken($this->bucketName, $key);
        $tempFile = qiniuTempFile(4 * 1024 * 1024 + 10);
        $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
        $this->assertNotFalse($resumeFile);
        list($ret, $error) = $upManager->putFile(
            $token,
            $key,
            $tempFile,
            null,
            'application/octet-stream',
            false,
            $resumeFile
        );
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
        unlink($resumeFile);

        $domain = getenv('QINIU_TEST_DOMAIN');
        $response = Client::get("http://$domain/$key");
        $this->assertEquals(200, $response->statusCode);
        $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
        unlink($tempFile);
    }

    // public function test8M()
    // {
    //     $key = 'resumePutFile8M';
    //     $upManager = new UploadManager();
    //     $token = $this->auth->uploadToken($this->bucketName, $key);
    //     $tempFile = qiniuTempFile(8*1024*1024+10);
    //     list($ret, $error) = $upManager->putFile($token, $key, $tempFile);
    //     $this->assertNull($error);
    //     $this->assertNotNull($ret['hash']);
    //     unlink($tempFile);
    // }

    public function testResumeUploadWithParams()
    {
        $key = "resumePutFile4ML_".rand();
        $upManager = new UploadManager();
        $policy = array('returnBody' => '{"hash":$(etag),"fname":$(fname),"var_1":$(x:var_1),"var_2":$(x:var_2)}');
        $token = $this->auth->uploadToken($this->bucketName, $key, 3600, $policy);
        $tempFile = qiniuTempFile(4 * 1024 * 1024 + 10);
        $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
        $this->assertNotFalse($resumeFile);
        list($ret, $error) = $upManager->putFile(
            $token,
            $key,
            $tempFile,
            ["x:var_1" => "val_1", "x:var_2" => "val_2", "x-qn-meta-m1" => "val_1", "x-qn-meta-m2" => "val_2"],
            'application/octet-stream',
            false,
            $resumeFile
        );
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
        $this->assertEquals("val_1", $ret['var_1']);
        $this->assertEquals("val_2", $ret['var_2']);
        $this->assertEquals(basename($tempFile), $ret['fname']);
        unlink($resumeFile);

        $domain = getenv('QINIU_TEST_DOMAIN');
        $response = Client::get("http://$domain/$key");
        $this->assertEquals(200, $response->statusCode);
        $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
        $this->assertEquals("val_1", $response->headers()["X-Qn-Meta-M1"]);
        $this->assertEquals("val_2", $response->headers()["X-Qn-Meta-M2"]);
        unlink($tempFile);
    }

    public function testResumeUploadV2()
    {
        $zone = new Zone(array('up.qiniup.com'));
        $cfg = new Config($zone);
        $upManager = new UploadManager($cfg);
        $testFileSize = array(
            config::BLOCK_SIZE / 2,
            config::BLOCK_SIZE,
            config::BLOCK_SIZE + 10,
            config::BLOCK_SIZE * 2,
            config::BLOCK_SIZE * 2.5
        );
        $partSize = 5 * 1024 * 1024;
        foreach ($testFileSize as $item) {
            $key = 'resumePutFile4ML_'.rand()."_";
            $token = $this->auth->uploadToken($this->bucketName, $key);
            $tempFile = qiniuTempFile($item);
            $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
            $this->assertNotFalse($resumeFile);
            list($ret, $error) = $upManager->putFile(
                $token,
                $key,
                $tempFile,
                null,
                'application/octet-stream',
                false,
                $resumeFile,
                'v2',
                $partSize
            );
            $this->assertNull($error);
            $this->assertNotNull($ret['hash']);
            unlink($resumeFile);

            $domain = getenv('QINIU_TEST_DOMAIN');
            $response = Client::get("http://$domain/$key");
            $this->assertEquals(200, $response->statusCode);
            $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
            unlink($tempFile);
        }
    }

    public function testResumeUploadV2WithParams()
    {
        $key = "resumePutFile4ML_".rand();
        $upManager = new UploadManager();
        $policy = array('returnBody' => '{"hash":$(etag),"fname":$(fname),"var_1":$(x:var_1),"var_2":$(x:var_2)}');
        $token = $this->auth->uploadToken($this->bucketName, $key, 3600, $policy);
        $tempFile = qiniuTempFile(4 * 1024 * 1024 + 10);
        $resumeFile = tempnam(sys_get_temp_dir(), 'resume_file');
        $this->assertNotFalse($resumeFile);
        list($ret, $error) = $upManager->putFile(
            $token,
            $key,
            $tempFile,
            ["x:var_1" => "val_1", "x:var_2" => "val_2", "x-qn-meta-m1" => "val_1", "x-qn-meta-m2" => "val_2"],
            'application/octet-stream',
            false,
            $resumeFile,
            'v2'
        );
        $this->assertNull($error);
        $this->assertNotNull($ret['hash']);
        $this->assertEquals("val_1", $ret['var_1']);
        $this->assertEquals("val_2", $ret['var_2']);
        $this->assertEquals(basename($tempFile), $ret['fname']);
        unlink($resumeFile);

        $domain = getenv('QINIU_TEST_DOMAIN');
        $response = Client::get("http://$domain/$key");
        $this->assertEquals(200, $response->statusCode);
        $this->assertEquals(md5_file($tempFile, true), md5($response->body(), true));
        $this->assertEquals("val_1", $response->headers()["X-Qn-Meta-M1"]);
        $this->assertEquals("val_2", $response->headers()["X-Qn-Meta-M2"]);
        unlink($tempFile);
    }
}
