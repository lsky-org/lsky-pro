<?php
/**
 * User: Wisp X
 * Date: 2018/9/29
 * Time: 下午1:50
 * Link: https://github.com/wisp-x
 */

namespace strategy\driver;

use strategy\Driver;

/**
 * 又拍云对象储存驱动
 *
 * Class Upyun
 * @package strategy\driver
 */
class Uss implements Driver
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
     * Upyun实例
     *
     * @var null
     */
    protected $uss = null;

    /**
     * Upyun constructor.
     *
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->options = $options;
        try {
            $serviceConfig = new \Upyun\Config(
                $this->options['uss_service_name'],
                $this->options['uss_operator_name'],
                $this->options['uss_operator_pwd']
            );
            $this->uss = new \Upyun\Upyun($serviceConfig);
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
            $this->uss->write($pathname, fopen($file, 'r'));
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
            $this->uss->delete($pathname);
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
            foreach ($list as $value) {
                if (is_string($value)) {
                    // 异步删除
                    $this->uss->delete($value, true);
                }
            }
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }

    public function getError()
    {
        return 'Uss：' . $this->error;
    }
}
