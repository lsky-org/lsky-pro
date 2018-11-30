<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 上午10:23
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\admin;

use app\common\model\Users as UserModel;
use think\Exception;

/**
 * 用户管理
 *
 * Class Users
 * @package app\index\controller\admin
 */
class Users extends Base
{
    public function index($state = '', $keyword = '', $limit = 15)
    {
        $model = new UserModel();
        if (!empty($state)) {
            $model = $model->where('state', $state);
        }
        if (!empty($keyword)) {
            $model = $model->where('username|nickname|email', 'like', "%{$keyword}%");
        }
        $users = $model->order('id', 'desc')->paginate($limit, false, [
            'query' => [
                'state' => $state,
                'keyword' => $keyword
            ]
        ]);
        $this->assign([
            'users' => $users,
            'state' => $state,
            'keyword' => $keyword
        ]);
        return $this->fetch();
    }

    public function delete()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            if (is_array($id)) {
                if (in_array($this->user->id, $id)) {
                    return $this->error('不能删除自己的账号！');
                }
            } else {
                if ($id == $this->user->id) {
                    return $this->error('不能删除自己的账号！');
                }
            }
            if (!UserModel::destroy($id)) {
                return $this->error('删除失败');
            }
            return $this->success('删除成功');
        }
    }

    public function frozen()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            if (is_array($id)) {
                if (in_array($this->user->id, $id)) {
                    return $this->error('不能冻结自己的账号！');
                }
            } else {
                if ($id == $this->user->id) {
                    return $this->error('不能冻结自己的账号！');
                }
            }
            $model = new UserModel();
            if (!$model->where('id', 'in', $id)->update(['state' => 0])) {
                return $this->error('冻结失败');
            }
            return $this->success('冻结成功');
        }
    }

    public function getUser()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            if (!$user = UserModel::get($id)) {
                return $this->error('数据获取失败');
            }
            $user->use_quota = $user->use_quota;
            unset($user->password);
            return $this->success('成功', null, $user);
        }
    }

    public function edit()
    {
        if ($this->request->isPost()) {
            try {
                $data = $this->request->post();
                $validate = $this->validate($data, 'Users.AdminEdit');
                if (true !== $validate) {
                    throw new Exception($validate);
                }
                if (!$data['password']) unset($data['password']);
                UserModel::update($data);
            } catch (Exception $e) {
                return $this->error($e->getMessage());
            }
            return $this->success('保存成功');
        }
    }

    public function setState()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            $state = $this->request->post('state');
            if (!$user = UserModel::get($id)) {
                return $this->error('数据获取失败');
            }
            if ($user->id === $this->user->id) {
                return $this->error('不可修改自己的状态');
            }
            if (!$user->where('id', $id)->setField('state', $state)) {
                return $this->error('状态修改失败');
            }
            return $this->success('状态修改成功');
        }
    }
}
