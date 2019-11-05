<?php

namespace app\api\controller;

use app\common\model\Users;
use think\Controller;
use think\exception\HttpResponseException;
use think\facade\Response;

class Base extends Controller
{
    protected $format = 'json';

    protected $token = null;

    protected $user = null;

    protected $config = null;

    /**
     * 构造方法
     *
     * @throws \think\Exception\DbException
     */
    public function initialize()
    {
        parent::initialize();

        $configs = \app\common\model\Config::all();
        foreach ($configs as $key => &$value) {
            $this->config[$value->name] = $value->value;
        }

        if (!$this->config['open_api']) {
            $this->response('API is not open yet.', [], 500);
        }

        $this->token = $this->request->header('token', $this->param('token'));
        $this->auth($this->token);

        $format = $this->param('format');
        if ($format && in_array(strtolower($format), ['json', 'jsonp', 'xml'])) {
            $this->format = $format;
        }
    }

    /**
     * 权限认证，成功设置成员属性user的数据，否则直接返回失败数据
     *
     * @param $token
     *
     * @throws \think\Exception\DbException
     */
    protected function auth($token)
    {
        if (!$token) {
            $this->response('Token does not exist.', [], 401);
        }
        $this->user = Users::get(['token' => $token]);
        if (!$this->user) {
            $this->response('Authentication failed', [], 401);
        }
    }

    /**
     * 返回数据给客户端并中断输出
     *
     * @param string $msg  提示信息
     * @param array  $data 数据
     * @param int    $code 状态码
     *
     * @throws HttpResponseException
     */
    protected function response($msg = '', $data = [], $code = 200)
    {
        $response = Response::create([
            'code' => $code,
            'msg' => $msg,
            'data' => $data ?: new \stdClass(),
            'time' => time()
        ], $this->format, 200);

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
        $data = $this->request->param($name, $default, $filter);

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
