<?php
/**
 * User: Wisp X
 * Date: 2018/9/29
 * Time: 下午1:50
 * Link: https://github.com/wisp-x
 */

namespace strategy\driver;

use Qiniu\Auth;
use Qiniu\Config;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;
use strategy\Driver;

/**
 * 七牛云对象储存驱动
 *
 * Class Qiniu
 * @package strategy\driver
 */
class Kodo implements Driver
{
    /**
     * 当前储存策略参数
     *
     * @var array
     */
    protected $options = [];

    /**
     * 错误信息
     *
     * @var null
     */
    protected $error = null;

    /**
     * UploadManager实例
     *
     * @var null
     */
    protected $uploadMgr = null;

    /**
     * BucketManager实例
     *
     * @var null
     */
    protected $bucketMgr = null;

    /**
     * 上传凭证
     *
     * @var null
     */
    protected $uploadToken = null;

    /**
     * Qiniu constructor.
     *
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->options = $options;
        try {
            $auth = new Auth($this->options['kodo_access_key'], $this->options['kodo_secret_key']);
            $this->uploadToken = $auth->uploadToken($this->options['kodo_bucket']);
            $config = new Config();
            $this->uploadMgr = new UploadManager();
            $this->bucketMgr = new BucketManager($auth, $config);
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
        }
    }

    /**
     * 创建一个文件
     *
     * @param $pathname
     * @param $file
     *
     * @return bool
     * @throws \Exception
     */
    public function create($pathname, $file)
    {
        list($ret, $err) = $this->uploadMgr->putFile($this->uploadToken, $pathname, $file);
        if (null !== $err) {
            $this->error = $err;
            return false;
        }

        return true;
    }

    /**
     * 删除文件
     *
     * @param $pathname
     *
     * @return bool
     */
    public function delete($pathname)
    {
        $err = $this->bucketMgr->delete($this->options['kodo_bucket'], $pathname);
        if ($err) {
            $this->error = $err;
            return false;
        }

        return true;
    }

    /**
     * 删除多个文件
     *
     * @param array $list
     * @return bool|mixed
     */
    public function deletes(array $list)
    {
        $ops = $this->bucketMgr->buildBatchDelete($this->options['kodo_bucket'], $list);
        list($ret, $err) = $this->bucketMgr->batch($ops);
        if ($err) {
            $this->error = $err;
            return false;
        }
        return true;
    }

    public function getError()
    {
        return 'Kodo：' . $this->error;
    }
}
