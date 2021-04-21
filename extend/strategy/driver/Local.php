<?php
/**
 * User: Wisp X
 * Date: 2018/9/29
 * Time: 下午1:44
 * Link: https://github.com/wisp-x
 */

namespace strategy\driver;

use strategy\Driver;
use think\facade\Env;

/**
 * 本地储存驱动
 *
 * Class Local
 * @package strategy\driver
 */
class Local implements Driver
{
    /**
     * 根目录路径(结尾加斜杠)
     */
    protected $rootPath = null;

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
     * Driver constructor.
     *
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->rootPath = ROOT_PATH;
        $this->options = $options;
    }

    /**
     * 创建本地文件
     *
     * @param $pathname 文件路径加文件名
     * @param $file     文件资源路径
     *
     * @return bool
     */
    public function create($pathname, $file)
    {
        $path = $this->rootPath . dirname($pathname) . DIRECTORY_SEPARATOR;
        if (true === $this->checkPath($path)) {
            if (rename($file, $pathname)) {
                return true;
            }
        }
        $this->error = '文件移动失败';

        return false;
    }

    /**
     * 删除本地文件
     *
     * @param $pathname 文件路径加文件名
     *
     * @return bool
     */
    public function delete($pathname)
    {
        $delete = @unlink($this->rootPath . ltrim($pathname, DIRECTORY_SEPARATOR));
        if (!$delete) {
            $this->error = '文件删除失败';
        }

        return $delete;
    }

    /**
     * 批量删除本地文件
     *
     * @param array $list
     * @return bool|mixed
     */
    public function deletes(array $list)
    {
        foreach ($list as $value) {
            if (is_string($value)) {
                @unlink($this->rootPath . ltrim($value, DIRECTORY_SEPARATOR));
            }
        }

        return true;
    }

    /**
     * 检测目录是否可写，不存在则创建
     *
     * @param $path 路径
     *
     * @return bool
     */
    protected function checkPath($path)
    {
        if (is_dir($path)) {
            return true;
        }

        if (mkdir($path, 0755, true)) {
            return true;
        }
        $this->error = '目录[' . $path . ']无写入权限';

        return false;
    }

    public function getError()
    {
        return 'Local：' . $this->error;
    }
}
