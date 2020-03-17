<?php
/**
 * User: Wisp X
 * Date: 2018/9/29
 * Time: 下午2:17
 * Link: https://github.com/wisp-x
 */

namespace strategy;

/**
 * 对象储存接口
 *
 * Interface Driver
 * @package strategy
 */
interface Driver
{
    public function __construct($options = []);

    /**
     * 创建文件
     *
     * @param string $pathname
     * @param string $file
     * @return mixed
     */
    public function create($pathname, $file);

    /**
     * 删除单个文件
     *
     * @param string $pathname
     * @return mixed
     */
    public function delete($pathname);

    /**
     * 删除多个文件
     *
     * @param array $list   一维数组
     * @return mixed
     */
    public function deletes(array $list);

    /**
     * 获取出错信息
     *
     * @return string
     */
    public function getError();
}
