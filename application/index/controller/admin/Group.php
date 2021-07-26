<?php
/**
 * User: Wisp X
 * Date: 2019-01-19
 * Time: 11:59
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\admin;

use app\common\model\Group as GroupModel;
use think\Db;
use think\Exception;
use think\facade\Config;

class Group extends Base
{
    protected $strategyList;

    protected function initialize()
    {
        parent::initialize();
        $this->strategyList = Config::pull('strategy');
    }

    public function index()
    {
        $groups = GroupModel::select()->order('id', 'desc')->each(function ($item) {
            $item->strategy_str = isset($this->strategyList[$item->strategy]) ? $this->strategyList[$item->strategy]['name'] : lang('Unknown');
            return $item;
        });
        $this->assign([
            'groups' => $groups,
            'strategy_list' => $this->strategyList
        ]);

        return $this->fetch();
    }

    public function add()
    {
        if ($this->request->isPost()) {
            try {
                $data = $this->request->post();
                $validate = $this->validate($data, 'Group');
                if (true !== $validate) {
                    throw new Exception($validate);
                }
                if (!GroupModel::create($data)) {
                    throw new Exception(lang('Add failed'));
                }
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }

            $this->success(lang('Added successfully'));
        }
    }

    public function edit()
    {
        if ($this->request->isPost()) {
            try {
                $data = $this->request->post();
                $validate = $this->validate($data, 'Group');
                if (true !== $validate) {
                    throw new Exception($validate);
                }
                $data['default'] = array_key_exists('default', $data) ? 1 : 0;
                if ($data['default'] === 0) {
                    if (!GroupModel::where('default', 1)->where('id', 'neq', $data['id'])->count()) {
                        throw new Exception(lang('Keep at least one default group'));
                    }
                }
                if (!GroupModel::update($data)) {
                    throw new Exception(lang('Edit failed'));
                }
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            $this->success(lang('Edit succeeded'));
        }
    }

    public function del()
    {
        if ($this->request->isPost()) {
            Db::startTrans();
            try {
                $id = $this->request->post('id');
                if (1 == $id) {
                    throw new Exception(lang('The default group cannot be deleted'));
                }
                $group = GroupModel::find($id);
                // 至少保留一个默认分组
                $defaultId = GroupModel::where('default', 1)->where('id', 'neq', $id)->value('id');
                if (!$defaultId) {
                    throw new Exception(lang('Keep at least one default group'));
                }
                // 转移该组下的用户到默认分组
                \app\common\model\Users::where('group_id', $group->id)->setField('group_id', $defaultId);
                $group->delete();
                Db::commit();
            } catch (Exception $e) {
                Db::rollback();
                $this->error($e->getMessage());
            }
            $this->success(lang('Delete succeeded'));
        }
    }

    public function getGroup()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            $this->success('success', null, GroupModel::find($id));
        }
    }

    public function setDefault()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            $value = $this->request->post('value');
            if (1 != $value) {
                if (!GroupModel::where('default', 1)->where('id', 'neq', $id)->count()) {
                    $this->error(lang('Keep at least one default group'));
                }
            }
            if (!GroupModel::update([
                'id' => $id,
                'default' => $value
            ])) {
                $this->error(lang('Setting failed'));
            }
            $this->success(lang('Setting succeeded'));
        }
    }

    public function setStrategy()
    {
        if ($this->request->isPost()) {
            $id = $this->request->post('id');
            $strategy = $this->request->post('strategy');
            if (!array_key_exists($strategy, $this->strategyList)) {
                $this->error(lang('Storage policy does not exist'));
            }
            if (!GroupModel::update([
                'id' => $id,
                'strategy' => $strategy
            ])) {
                $this->error(lang('Setting failed'));
            }
            $this->success(lang('Setting succeeded'));
        }
    }
}
