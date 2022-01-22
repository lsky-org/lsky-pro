<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ConfigKey;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GroupRequest;
use App\Models\Group;
use App\Utils;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class GroupController extends Controller
{
    public function __construct()
    {
        \Illuminate\Support\Facades\View::share([
            'default' => collect(config('convention.app.'.ConfigKey::GroupConfigs)),
            'positions' => [
                'top-left' => '左上角',
                'top' => '上中',
                'top-right' => '右上角',
                'left' => '左边',
                'center' => '中间',
                'right' => '右边',
                'bottom-left' => '左下角',
                'bottom' => '下中',
                'bottom-right' => '右下角',
                'tiled' => '平铺',
            ],
            'scanAliyunScenes' => [
                'porn' => '智能鉴黄',
                'terrorism' => '暴恐涉政',
                'ad' => '暴恐涉政',
                'qrcode' => '二维码',
                'live' => '不良场景',
                'logo' => 'Logo',
            ]
        ]);
    }

    public function index(Request $request): View
    {
        $groups = Group::query()->when($request->query('keywords'), function (Builder $builder, $keywords) {
            $builder->where('name', 'like', "%{$keywords}%");
        })->withCount('users')->withCount('strategies')->latest()->paginate();
        return view('admin.group.index', compact('groups'));
    }

    public function add(): View
    {
        return view('admin.group.add');
    }

    public function edit(Request $request): View
    {
        if ($request->route('id') == 0) {
            $group = new Group([
                'id' => 0,
                'name' => '系统默认组',
                'configs' => Utils::config(ConfigKey::GroupConfigs),
            ]);
        } else {
            $group = Group::query()->findOrFail($request->route('id'));
        }
        return view('admin.group.edit', compact('group'));
    }

    public function create(GroupRequest $request): Response
    {
        return $this->success('success', $request->validated());
    }

    public function update(GroupRequest $request): Response
    {
        return $this->success('success', $request->validated());
    }

    public function delete(Request $request): Response
    {
        return $this->success('success', $request->all());
    }
}
