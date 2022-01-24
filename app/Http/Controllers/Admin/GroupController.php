<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\ConfigKey;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GroupRequest;
use App\Models\Config;
use App\Models\Group;
use App\Utils;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class GroupController extends Controller
{
    public function __construct()
    {
        \Illuminate\Support\Facades\View::share([
            'default' => Group::getDefaultConfigs(),
            'positions' => Group::POSITIONS,
            'scanAliyunScenes' => Group::SCENES,
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
        $group = new Group();
        $group->fill($request->validated());
        $group->save();
        return $this->success('创建成功');
    }

    public function update(GroupRequest $request): Response
    {
        if ($request->route('id') == 0) {
            $configs = Utils::parseConfigs(Group::getDefaultConfigs()->toArray(), $request->validated('configs'));
            if (! Config::query()->where('name', ConfigKey::GroupConfigs)->update([
                'value' => collect($configs)->toJson(),
            ])) {
                return $this->error('保存失败');
            }
            // 删除配置缓存
            Cache::forget('configs');
        } else {
            /** @var Group $group */
            $group = Group::query()->findOrFail($request->route('id'));
            $group->fill($request->validated());
            if (!$group->save()) {
                return $this->error('保存失败');
            }
        }

        return $this->success('保存成功');
    }

    public function delete(Request $request): Response
    {
        if ($group = Group::query()->find($request->route('id'))) {
            $group->delete();
        }
        return $this->success('删除成功');
    }
}
