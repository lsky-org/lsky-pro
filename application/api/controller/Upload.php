<?php
/**
 * User: Wisp X
 * Date: 2018-12-05
 * Time: 16:33
 * Link: https://github.com/wisp-x
 */

namespace app\api\controller;

use think\Db;
use think\Exception;

class Upload extends Base
{
    public function initialize()
    {
        if (!$this->config['open_api']) {
            $this->response('API is not open yet.', [], 500);
        }

        // 是否允许游客上传
        $token = $this->request->header('token', $this->param('token'));
        if (!$this->config['allowed_tourist_upload']) {
            $token && $this->auth($token);
        } else {
            $this->auth($token);
        }
    }

    /**
     * 上传
     */
    public function index()
    {
        Db::startTrans();
        try {

            $data = (new \app\index\controller\Upload)->execute($this->user);

            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
            return $this->response($e->getMessage(), [], 500);
        }
        return $this->response('success', $data);
    }
}
