<?php
/**
 * Created by WispX.
 * User: WispX <1591788658@qq.com>
 * Date: 2019/10/31
 * Time: 11:10 上午
 * Link: https://github.com/wisp-x
 */

namespace app\api\controller;

use app\common\model\Images;
use app\index\controller\User;

class Image extends Base
{
    private $model;

    public function initialize()
    {
        parent::initialize();
        $this->model = new Images();
        $this->model = $this->model->where('user_id', $this->user->id)->field(['user_id', 'folder_id'], true);
    }

    public function find()
    {
        $id = $this->param('id');
        $image = $this->model->where(['id' => $id])->find();
        $this->response('success', $this->parseData($image));
    }

    public function items()
    {
        $page = $this->param('page', 1);
        $rows = $this->param('rows', 20);
        $images = $this->model->paginate(null, false, [
            'page' => $page,
            'list_rows' => $rows,
        ])->each(function ($item) {
            $item = $this->parseData($item);
            unset($item['create_time']);
            return $item;
        });
        $this->response('success', $images);
    }

    public function delete()
    {
        $user = new User();
        $data = str_replace('，', ',', $this->param('id'));
        if (strpos($data, ',') !== false) {
            $data = explode(',', $data);
        }
        if ($user->deleteImages($data)) {
            return $this->response('删除成功!');
        }
        return $this->response('删除失败!', [], 500);
    }

    private function parseData($data)
    {
        $data['upload_time'] = $data->getData('create_time');
        $data['upload_date'] = $data->create_time;
        return $data;
    }
}