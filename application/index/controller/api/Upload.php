<?php
/**
 * User: Wisp X
 * Date: 2018-12-05
 * Time: 16:33
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\api;

use think\Db;
use think\Exception;

class Upload extends Base
{
    public function initialize($auth = false)
    {
        parent::initialize($auth);
        // 是否允许游客上传
        if ($this->config['allowed_tourist_upload']) {
            $this->token && $this->auth($this->token);
        } else {
            $this->auth($this->token);
        }
    }

    /**
     * 上传
     */
    public function index()
    {
        Db::startTrans();
        try {

            $data = (new \app\index\controller\Upload)->execute();

            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
            return $this->response($e->getMessage(), 500);
        }
        return $this->response('success', 200, $data);
    }
}
