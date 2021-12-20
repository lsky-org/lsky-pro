<?php
/**
 * User: Wisp X
 * Date: 2018/9/26
 * Time: 21:51
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller;

use think\Db;
use think\Exception;
use think\exception\ErrorException;

class Upload extends Base
{
    public function upload()
    {
        Db::startTrans();
        try {

            $data = (new \app\common\controller\Upload)->exec();

            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
            return json(['error' => $e->getMessage()]);
        } catch (ErrorException $e) {
            Db::rollback();
            return json(['error' => $e->getMessage()]);
        } catch (\Throwable $e) {
            Db::rollback();
            return json(['error' => $e->getMessage()]);
        }

        $this->result($data, 200, '上传成功');
    }
}
