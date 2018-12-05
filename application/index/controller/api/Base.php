<?php

namespace app\index\controller\api;

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
     * @param bool $auth 是否认证
     *
     * @throws \think\Exception\DbException
     */
    public function initialize($auth = true)
    {
        parent::initialize();

        $this->token = $this->param('token');

        $configs = \app\common\model\Config::all();
        foreach ($configs as $key => &$value) {
            $this->config[$value->name] = $value->value;
        }

        if (!$this->config['open_api']) {
            $this->response('API is not open yet.', 500);
        }

        $format = $this->param('format');
        if ($format && in_array(strtolower($format), ['json', 'jsonp', 'xml'])) {
            $this->format = $format;
        }

        $auth && $this->auth();
    }

    /**
     * 权限认证
     *
     * @param null $token
     *
     * @throws \think\Exception\DbException
     */
    protected function auth($token = null)
    {
        $token = $token ? $token : $this->token;
        if ($token) {
            $this->user = Users::get(['token' => $token]);
        } else {
            return $this->response('Token does not exist.', 500);
        }
        if (!$this->user) {
            return $this->response('Authentication failed', 500);
        }
    }

    /**
     * 返回数据给客户端并中断输出
     *
     * @param       $msg  提示信息
     * @param int   $code 状态码
     * @param array $data 数据
     *
     */
    protected function response($msg, $code = 200, $data = [])
    {
        $response = Response::create([
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ], $this->format, $code);

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
