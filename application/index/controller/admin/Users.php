<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 上午10:23
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\admin;

use app\common\model\Users as UsersModel;
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
        $model = new UsersModel();
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
            'keyword' => $keyword,
            'groups' => \app\common\model\Group::select()
        ]);
        return $this->fetch();
    }

    public function delete()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            if (is_array($id)) {
                if (in_array($this->user->id, $id)) {
                    $this->error(lang('You cannot delete your account!'));
                }
            } else {
                if ($id == $this->user->id) {
                    $this->error(lang('You cannot delete your account!'));
                }
            }
            if (!UsersModel::destroy($id)) {
                $this->error(lang('Deletion failed'));
            }
            $this->success(lang('Delete succeeded'));
        }
    }

    public function frozen()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            if (is_array($id)) {
                if (in_array($this->user->id, $id)) {
                    $this->error(lang('You can\'t freeze your account!'));
                }
            } else {
                if ($id == $this->user->id) {
                    $this->error(lang('You can\'t freeze your account!'));
                }
            }
            $model = new UsersModel();
            if (!$model->where('id', 'in', $id)->update(['state' => 0])) {
                $this->error(lang('Freeze failed'));
            }
            $this->success(lang('Freeze succeeded'));
        }
    }

    public function getUser()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            if (!$user = UsersModel::get($id)) {
                $this->error(lang('Data acquisition failed'));
            }
            unset($user->password);
            $this->success(lang('Success'), null, $user);
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
                if (!$data['password']) unset($data['password'], $data['password_confirm']);
                if (!UsersModel::update($data)) {
                    throw new Exception(lang('Modification failed'));
                }
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            $this->success(lang('Saved successfully'));
        }
    }

    public function setState()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            $state = $this->request->post('state');
            if (!$user = UsersModel::get($id)) {
                $this->error(lang('Data acquisition failed'));
            }
            if ($user->id === $this->user->id) {
                $this->error(lang('You cannot modify your status'));
            }
            if (!$user->where('id', $id)->setField('state', $state)) {
                $this->error(lang('Status modification failed'));
            }
            $this->success(lang('Status modification succeeded'));
        }
    }

    public function setGroup()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            $groupId = $this->request->post('group_id');
            if (!$group = \app\common\model\Group::find($groupId)) {
                $this->error('Data acquisition failed');
            }
            if (!UsersModel::where('id', $id)->setField('group_id', $groupId)) {
                $this->error(lang('Modification failed'));
            }
            $this->success(lang('Modified successfully'));
        }
    }
}
