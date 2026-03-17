<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GroupRequest;
use App\Models\Group;
use App\Models\Image;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class GroupController extends Controller
{
    use AuditsOperations;

    private function share()
    {
        \Illuminate\Support\Facades\View::share([
            'default' => Group::getDefaultConfigs(),
            'positions' => Group::POSITIONS,
            'scenes' => Group::SCENES,
        ]);
    }

    public function index(Request $request): View
    {
        $keywords = $request->query('keywords');
        $groups = Group::query()->when($keywords, function (Builder $builder, $keywords) {
            $builder->where('name', 'like', "%{$keywords}%");
        })->withCount('users')->withCount('strategies')->latest()->paginate();

        $groups->appends(compact('keywords'));

        $this->share();

        return view('admin.group.index', compact('groups'));
    }

    public function add(): View
    {
        $this->share();

        return view('admin.group.add');
    }

    public function edit(Request $request): View
    {
        $group = Group::query()->findOrFail($request->route('id'));

        $this->share();

        return view('admin.group.edit', compact('group'));
    }

    public function create(GroupRequest $request): Response
    {
        $groupId = null;

        DB::transaction(function () use ($request, &$groupId) {
            $group = new Group();
            $group->fill($request->validated());
            $group->save();

            $groupId = $group->id;
        });

        $this->auditOperation($request, 'admin.group.create', 'group', 'success', [
            'target' => $groupId,
        ]);

        $this->share();

        return $this->success('创建成功');
    }

    public function update(GroupRequest $request): Response
    {
        DB::beginTransaction();

        try {
            /** @var Group $group */
            $group = Group::query()->findOrFail($request->route('id'));
            $group->fill($request->validated());

            if ($group->isDirty('is_default') && ! $group->is_default) {
                if (! Group::query()->where('is_default', true)->where('id', '<>', $group->id)->exists()) {
                    $this->auditOperation($request, 'admin.group.update', 'group', 'failed', [
                        'target' => $group->id,
                        'reason' => 'missing_default_group',
                    ], 'warning');

                    return $this->fail('系统至少需要保留一个默认组');
                }
            }

            if ($group->isDirty('is_guest') && ! $group->is_guest) {
                if (! Group::query()->where('is_guest', true)->where('id', '<>', $group->id)->exists()) {
                    $this->auditOperation($request, 'admin.group.update', 'group', 'failed', [
                        'target' => $group->id,
                        'reason' => 'missing_guest_group',
                    ], 'warning');

                    return $this->fail('系统至少需要保留一个游客组');
                }
            }

            $group->save();
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();

            $this->auditOperation($request, 'admin.group.update', 'group', 'failed', [
                'target' => $request->route('id'),
                'error' => $e->getMessage(),
            ], 'error');

            return $this->fail('保存失败');
        }

        $this->auditOperation($request, 'admin.group.update', 'group', 'success', [
            'target' => $group->id,
        ]);

        return $this->success('保存成功');
    }

    public function delete(Request $request): Response
    {
        $groupId = $request->route('id');

        /** @var Group|null $group */
        $group = Group::query()->find($groupId);

        if ($group) {
            if ($group->is_default || $group->is_guest) {
                $this->auditOperation($request, 'admin.group.delete', 'group', 'failed', [
                    'target' => $group->id,
                    'reason' => 'protected_group',
                ], 'warning');

                return $this->fail('默认组和游客组无法删除');
            }

            DB::transaction(function () use ($group) {
                $group->users()->update(['group_id' => Group::query()->where('is_default', true)->value('id')]);
                $group->delete();
            });
        }

        $this->auditOperation($request, 'admin.group.delete', 'group', 'success', [
            'target' => $group ? $group->id : $groupId,
            'found' => (bool) $group,
        ]);

        return $this->success('删除成功');
    }

    public function clearCache(Request $request): Response
    {
        $groupId = $request->route('id');
        $cleared = 0;

        /** @var Group|null $group */
        $group = Group::query()->find($groupId);
        if ($group) {
            /** @var Image $image */
            foreach ($group->images()->select('key')->cursor() as $image) {
                Cache::forget('image_'.$image->key);
                $cleared++;
            }
        }

        $this->auditOperation($request, 'admin.group.clear_cache', 'group_cache', 'success', [
            'target' => $group ? $group->id : $groupId,
            'found' => (bool) $group,
            'cleared_count' => $cleared,
        ]);

        return $this->success('清除成功');
    }
}
