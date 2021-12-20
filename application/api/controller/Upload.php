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
use think\exception\ErrorException;

class Upload extends Base
{
    public function initialize()
    {
        parent::initialize();

        // 是否允许游客上传
        if (!$this->getConfig('allowed_tourist_upload') && !request()->user) {
            $this->response('管理员关闭了游客上传通道');
        }
    }

    /**
     * 上传
     */
    public function index()
    {
        $data = null;
        Db::startTrans();
        try {

            $data = (new \app\common\controller\Upload)->exec();

            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
            $this->response($e->getMessage(), [], 500);
        } catch (ErrorException $e) {
            Db::rollback();
            $this->response($e->getMessage(), [], 500);
        } catch (\Throwable $e) {
            Db::rollback();
            $this->response($e->getMessage(), [], 500);
        }
        $this->response('success', $data);
    }
}
