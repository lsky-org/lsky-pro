<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 下午4:00
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller;

use app\common\model\Images;

class Index extends Base
{
    public function index()
    {
        $this->assign('images_count', Images::cache(120)->count());
        return $this->fetch();
    }

    public function api()
    {
        $this->assign('domain', $this->request->domain());
        return $this->fetch();
    }
}
