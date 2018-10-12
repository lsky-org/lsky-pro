<?php
namespace Upyun\Tests;

use Upyun\Config;
use Upyun\Upyun;

class UpyunTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Upyun
     */
    public static $upyun;


    protected static $taskId;

    protected static $tempFilePath;

    public static function setUpBeforeClass()
    {
        $config = new Config(BUCKET, USER_NAME, PWD);
        $config->setFormApiKey('Mv83tlocuzkmfKKUFbz2s04FzTw=');
        $config->processNotifyUrl = 'http://localhost:9999';
        self::$upyun        = new Upyun($config);
        self::$tempFilePath = __DIR__ . '/assets/test.txt';
        touch(self::$tempFilePath);
    }

    public static function tearDownAfterClass()
    {
        unlink(self::$tempFilePath);
    }

    public function testWriteString()
    {
        $filename = '/中文/测试 +.txt';
        $content = 'test file content';
        self::$upyun->write($filename, $content);
        $size = getUpyunFileSize($filename);
        $this->assertEquals($size, strlen($content));
    }

    public function testWriteStream()
    {
        $filename = 'test.jpeg';
        $f = fopen(__DIR__ . '/assets/sample.jpeg', 'rb');
        if (!$f) {
            throw new \Exception('open test file failed!');
        }
        self::$upyun->write($filename, $f);
        $size = getUpyunFileSize($filename);
        $this->assertEquals($size, PIC_SIZE);
    }

    public function testWriteWithAsyncProcess()
    {
        $filename = 'test_async.jpeg';
        $newFilename = 'test_async.png';
        $f = fopen(__DIR__ . '/assets/sample.jpeg', 'rb');
        if (!$f) {
            throw new \Exception('open test file failed!');
        }
        $result = self::$upyun->write($filename, $f, array(
            'apps' => array(
                array(
                    'name' => 'thumb',
                    'x-gmkerl-thumb' => '/format/png/fw/50',
                    'save_as' => $newFilename,
                )
            )
        ), true);
        $size = getUpyunFileSize($filename);
        $this->assertEquals($size, PIC_SIZE);
        $this->assertEquals($result, true);
    }

    public function testWriteWithException()
    {
        $fs = new Upyun(new Config(BUCKET, USER_NAME, 'error-password'));
        try {
            $fs->write('test.txt', 'test file content');
        } catch (\Exception $e) {
            return ;
        }
        throw new \Exception('should get sign error.');
    }

    /**
     * @depends testWriteString
     */
    public function testReadFile()
    {
        $name = 'test-read.txt';
        $str = 'test file content 2';
        self::$upyun->write($name, $str);

        //读取内容写入字符串
        $content = self::$upyun->read($name);
        $this->assertEquals($content, $str);

        //读取内容写入文件流
        $this->assertTrue(self::$upyun->read($name, fopen(self::$tempFilePath, 'wb')));
        $this->assertEquals($str, file_get_contents(self::$tempFilePath));
    }

    /**
     * @depends testWriteString
     * @depends testReadFile
     */
    public function testDeleteFile()
    {
        self::$upyun->write('test-delete.txt', 'test file content 3');
        self::$upyun->delete('test-delete.txt');
        try {
            self::$upyun->read('test-delete.txt');
        } catch (\Exception $e) {
            return ;
        }
        throw new \Exception('delete file failed');
    }

    /**
     * @expectedException \Exception
     */
    public function testDeleteNotExistsFile()
    {
        self::$upyun->delete('not-exists-test.txt');
    }

    /**
     */
    public function testHas()
    {
        $name = 'test-has.txt';
        self::$upyun->write($name, 'test file content 4');
        $this->assertEquals(self::$upyun->has($name), true);
        self::$upyun->delete($name);
        sleep(5);
        $this->assertEquals(self::$upyun->has($name), false);
    }

    /**
     * @depends testWriteString
     * @depends testDeleteFile
     */
    public function testInfo()
    {
        self::$upyun->write('test-info.txt', 'test file content 4');
        $info = self::$upyun->info('test-info.txt');
        $this->assertEquals($info['x-upyun-file-type'], 'file');
        $this->assertEquals($info['x-upyun-file-size'], 19);
    }

    /**
     * @depends testInfo
     */
    public function testGetMimetype()
    {
        $type = self::$upyun->getMimetype('test-info.txt');
        $this->assertEquals($type, 'text/plain');
    }

    /**
     */
    public function testCreateDir()
    {
        self::$upyun->createDir('/test-dir');
        $this->assertEquals(self::$upyun->has('/test-dir'), true);
        self::$upyun->createDir('/test-dir2/');
        $this->assertEquals(self::$upyun->has('/test-dir2'), true);
    }

    public function testReadDir()
    {
        $list = self::$upyun->read('/test-dir2/');
        $this->assertEquals($list['is_end'], true);
        self::$upyun->write('/test-dir2/test.txt', 'test file content 5');
        $list = self::$upyun->read('/test-dir2/');
        $this->assertEquals($list['is_end'], true);
        $this->assertEquals(count($list['files']), 1);
        $file = $list['files'][0];
        $this->assertEquals($file['name'], 'test.txt');
        $this->assertEquals($file['type'], 'N');
        $this->assertEquals($file['size'], 19);
    }

    /**
     * @depends testCreateDir
     */
    public function testDeleteDir()
    {
        $result = self::$upyun->createDir('/test-delete-dir');
        $this->assertEquals($result, true);
        sleep(5);
        $result = self::$upyun->deleteDir('/test-delete-dir');
        $this->assertEquals($result, true);
    }

    public function testUsage()
    {
        $size = self::$upyun->usage();
        $this->assertTrue($size > 0);
    }

    public function testPurge()
    {
        $urls = self::$upyun->purge(getFileUrl('test.txt'));
        $this->assertTrue(empty($urls));

        $invalidUrl = 'http://xxxx.b0.xxxxxxxx-upyun.com/test.txt';
        $urls = self::$upyun->purge($invalidUrl);
        $this->assertTrue(count($urls) === 1);
        $this->assertTrue($urls[0] === $invalidUrl);
    }

    public function testProcess()
    {
        $source = 'php-sdk-sample.mp4';
        self::$upyun->write($source, fopen(__DIR__ . '/assets/SampleVideo_640x360_1mb.mp4', 'r'));
        $result = self::$upyun->process(array(
            array('type' => 'video', 'avopts' => '/s/240p(4:3)/as/1/r/30', 'return_info' => true, 'save_as' => '/video/result.mp4')
        ), Upyun::$PROCESS_TYPE_MEDIA, $source);
        $this->assertTrue(strlen($result[0]) === 32);
        self::$taskId = $result[0];

        // test zip
        $result2 = self::$upyun->process(array(array(
            'sources' => ['./php-sdk-sample.mp4'],
            'save_as' => '/php-sdk-sample-mp4.zip'
        )), Upyun::$PROCESS_TYPE_ZIP);
        $this->assertTrue(strlen($result2[0]) === 32);
    }

    /**
     * @depends testProcess
     */
    public function testQueryProcessStatus()
    {
        sleep(5);
        $status = self::$upyun->queryProcessStatus(array(self::$taskId));
        $this->assertTrue(array_key_exists(self::$taskId, $status));
    }

    /**
     * @depends testProcess
     */
    public function testQueryProcessResult()
    {
        sleep(5);
        $result = self::$upyun->queryProcessResult(array(self::$taskId));
        $this->assertTrue($result[self::$taskId]['path'][0] === '/video/result.mp4');
        $this->assertTrue($result[self::$taskId]['status_code'] === 200);
    }

    public function testAvMeta()
    {
        $source = 'php-sdk-sample.mp4';
        self::$upyun->write($source, fopen(__DIR__ . '/assets/SampleVideo_640x360_1mb.mp4', 'r'));
        $result = self::$upyun->avMeta('/php-sdk-sample.mp4');
        $this->assertTrue(count($result) === 2);
        $this->assertTrue($result['streams'][0]['type'] === 'video');
    }

    public function testSnapshot()
    {
        $source = 'php-sdk-sample.mp4';
        self::$upyun->write($source, fopen(__DIR__ . '/assets/SampleVideo_640x360_1mb.mp4', 'r'));
        $result = self::$upyun->snapshot('/php-sdk-sample.mp4', '/snapshot.jpg', '00:00:01', '720x480', 'jpg');
        $this->assertTrue($result['status_code'] === 200);
    }
}
