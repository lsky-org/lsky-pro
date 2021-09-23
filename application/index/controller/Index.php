<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 下午4:00
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller;

use app\common\model\Images;
use app\common\model\Users;
use think\Collection;
use think\Exception;

class Index extends Base
{
    public function index()
    {
        // 是否是单用户模式
        if (env('system.single_user_mode') && !request()->user) {
            if ($this->request->isPost()) {
                try {
                    $account = $this->request->post('account');
                    $password = $this->request->post('password');
                    $field = filter_var($account, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
                    Users::login($account, $password, $field);
                } catch (Exception $e) {
                    $this->error($e->getMessage());
                }
                $this->success(lang('Welcome back'));
            }
            return view('index/home');
        }

        $this->assign('images_count', Images::cache(120)->count());
        return $this->fetch();
    }

    public function gallery()
    {
        if (!$this->getConfig('open_gallery')) {
            abort(404, lang('Gallery feature is off'));
        }
        $images = [];
        Images::order('id', 'desc')
            ->where('user_id', 0)
            ->paginate($this->request->limit ? $this->request->limit : 30)
            ->each(function (Images $item) use (&$images) {
            $images[] = [
               'url' => $item->url,
               'date' => $item->date,
            ];
        });
        if ($this->request->isPost()) {
            $this->success('success', null, $images);
        }
        $this->assign('images', $images);
        return $this->fetch();
    }

    public function api()
    {
        if (!$this->getConfig('open_api')) {
            abort(404, lang('API interface closed'));
        }
        $this->assign('domain', $this->request->domain());
        return $this->fetch();
    }
}
