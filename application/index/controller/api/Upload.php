<?php
/**
 * User: Wisp X
 * Date: 2018-12-05
 * Time: 16:33
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\api;

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

    public function index()
    {

    }
}
