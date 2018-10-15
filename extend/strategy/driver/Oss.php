<?php
/**
 * User: Wisp X
 * Date: 2018/9/29
 * Time: 下午1:48
 * Link: https://github.com/wisp-x
 */

namespace strategy\driver;

use OSS\Core\OssException;
use OSS\OssClient;
use strategy\Driver;

/**
 * 阿里云OSS对象储存驱动
 *
 * Class Oss
 * @package strategy\driver
 */
class Oss implements Driver
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
     * Oss实例
     *
     * @var null
     */
    protected $oss = null;

    /**
     * Oss constructor.
     *
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->options = $options;
        try {
            $this->oss = new OssClient(
                $this->options['oss_access_key_id'],
                $this->options['oss_access_key_secret'],
                $this->options['oss_endpoint'],
                false,
                null,
                null
            );
        } catch (OssException $e) {
            $this->error = $e->getMessage();
        }
    }

    /**
     * 创建文件
     *
     * @param $pathname
     * @param $file
     *
     * @return bool
     */
    public function create($pathname, $file)
    {
        try {
            $this->oss->uploadFile($this->options['oss_bucket'], $pathname, $file);
        } catch (OssException $e) {
            $this->error = $e->getMessage();
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
        try {
            $this->oss->deleteObject($this->options['oss_bucket'], $pathname);
        } catch (OssException $e) {
            $this->error = $e->getMessage();
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
        try {
            $this->oss->deleteObjects($this->options['oss_bucket'], $list);
        } catch (OssException $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }

    public function getError()
    {
        return 'Oss：' . $this->error;
    }
}