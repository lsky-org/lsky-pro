<?php
/**
 * User: Wisp X
 * Date: 2018/9/30
 * Time: 下午4:28
 * Link: https://github.com/wisp-x
 */

namespace strategy\driver;

use Qcloud\Cos\Client;
use strategy\Driver;

/**
 * 腾讯云COS储存驱动
 *
 * Class Cos
 * @package strategy\driver
 */
class Cos implements Driver
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
     * Cos实例
     *
     * @var null
     */
    protected $cos = null;

    /**
     * Cos constructor.
     *
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->options = $options;
        try {
            $this->cos = new Client([
                'region' => $this->options['cos_region'],
                'credentials' => [
                    'secretId' => $this->options['cos_secret_id'],
                    'secretKey' => $this->options['cos_secret_key'],
                ],
            ]);
        } catch (\Exception $e) {
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
            $this->cos->putObject(array(
                'Bucket' => $this->options['cos_bucket'],
                'Key' => $pathname,
                'Body' => fopen($file, 'rb')
            ));
        } catch (\Exception $e) {
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
            $this->cos->deleteObject([
                'Bucket' => $this->options['cos_bucket'],
                'Key' => $pathname,
            ]);
        } catch (\Exception $e) {
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
            $objects = [];
            foreach ($list as $value) {
                $objects[] = ['Key' => $value ];
            }
            $this->cos->deleteObjects([
                'Bucket' => $this->options['cos_bucket'],
                'Objects' => $objects,
            ]);
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }

    public function getError()
    {
        return 'Cos：' . $this->error;
    }
}