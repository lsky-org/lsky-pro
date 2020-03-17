<?php

namespace app\common\traits;

use strategy\Driver;
use think\exception\HttpResponseException;
use think\facade\Config;
use think\facade\Response;

trait Core
{
    /**
     * 获取指定储存策略的对象实例
     *
     * @param $strategy
     * @return Driver
     */
    public function getStrategyInstance($strategy)
    {
        $strategy = strtolower($strategy);
        $configs = \app\common\model\Config::where('key', $strategy)->column('value', 'name');
        // 驱动
        $driver = Config::get('strategy.' . $strategy . '.class');
        $class = new $driver($configs);
        $class->configs = $configs;
        // 获取该储存策略配置
        return $class;
    }

    /**
     * 获取系统配置信息
     *
     * @param string $name
     * @return array|mixed|null
     */
    public function getConfig($name = '')
    {
        $configs = [];
        $data = \app\common\model\Config::all();
        foreach ($data as $key => &$value) {
            $configs[$value->name] = $value->value;
        }
        if ($name) {
            return isset($configs[$name]) ? $configs[$name] : null;
        }
        return $configs;
    }

    /**
     * 返回数据给客户端并中断输出
     *
     * @param string $msg  提示信息
     * @param array  $data 数据
     * @param int    $code 状态码
     * @param string $type 返回数据类型
     *
     * @throws HttpResponseException
     */
    protected function response($msg = '', $data = [], $code = 200, $type = 'json')
    {
        $response = Response::create([
            'code' => $code,
            'msg' => $msg,
            'data' => $data ?: new \stdClass(),
            'time' => time()
        ], $type, 200);

        throw new HttpResponseException($response);
    }

    /**
     * 获取客户端传过来的参数
     *
     * @param string $name 参数名
     * @param null   $default 默认值
     * @param string $filter 过滤方法
     *
     * @return mixed|string
     */
    protected function param($name = '', $default = null, $filter = '')
    {
        $data = request()->param($name, $default, $filter);

        if (is_array($data)) {
            foreach ($data as &$value) {
                if (is_string($value)) {
                    $value = trim($value);
                }
            }
        }

        if (is_string($data)) {
            return trim($data);
        }

        return $data;
    }
}
