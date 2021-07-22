<?php
namespace Qiniu\Tests;

use phpDocumentor\Reflection\DocBlock\Tags\Version;
use Qiniu\Region;
use Qiniu\Storage\ResumeUploader;
use Qiniu\Storage\UploadManager;
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
        $key = 'resumePutFile4ML';
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
        unlink($tempFile);
    }

    public function test4ML2()
    {
        $key = 'resumePutFile4ML';
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

    public function testResumeUploadV2()
    {
        $key = 'resumePutFile4ML';
        $zone = new Zone(array('up.qiniup.com'));
        $cfg = new Config($zone);
        $upManager = new UploadManager($cfg);
        $token = $this->auth->uploadToken($this->bucketName, $key);
        $testFileSize = array(
            config::BLOCK_SIZE / 2,
            config::BLOCK_SIZE,
            config::BLOCK_SIZE + 10,
            config::BLOCK_SIZE * 2,
            config::BLOCK_SIZE * 2.5
        );
        $partSize = 5 * 1024 * 1024;
        foreach ($testFileSize as $item) {
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
            unlink($tempFile);
        }
    }
}
