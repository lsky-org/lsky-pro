<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use App\Services\Auth\AuthIdentityGovernanceService;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UserController extends Controller
{
    use AuditsOperations;

    public function index(Request $request): View
    {
        $status = $request->query('status');
        $keywords = $request->query('keywords');
        $users = User::query()->when($status > -1, function (Builder $builder) use ($status) {
            $builder->where('status', $status);
        })->when($keywords, function (Builder $builder, $keywords) {
            $builder->where('name', 'like', "%{$keywords}%")->orWhere('email', 'like', "%{$keywords}%");
        })->with('group')->withSum('images', 'size')->latest()->paginate();
        $users->getCollection()->each(function (User $user) {
            $user->group->setVisible(['name']);
        });
        $statuses = [-1 => '全部', 1 => '正常', 0 => '冻结'];

        $users->appends(compact('status', 'keywords'));

        return view('admin.user.index', compact('users', 'statuses'));
    }

    public function edit(Request $request): View
    {
        $user = User::query()->findOrFail($request->route('id'));

        return view('admin.user.edit', compact('user'));
    }

    public function update(UserRequest $request): Response
    {
        /** @var User $user */
        $user = User::query()->findOrFail($request->route('id'));
        $validated = $request->validated();

        if (! empty($validated['password'])) {
            $user->forceFill([
                'password' => Hash::make($validated['password']),
                'remember_token' => Str::random(60),
            ]);
            $user->configs = $user->configs->put(User::CONFIG_PASSWORD_LOGIN_READY, true);
            app(AuthIdentityGovernanceService::class)->record($user, 'password_admin_reset', [
                'provider' => 'password',
            ], 'success', (int) optional($request->user())->id);

            event(new PasswordReset($user));
        }

        unset($validated['password']);
        $user->fill($validated);
        $user->group_id = $validated['group_id'];

        if (! $user->save()) {
            $this->auditOperation($request, 'admin.user.update', 'user', 'failed', [
                'target' => $user->id,
                'reason' => 'save_failed',
            ], 'warning');

            return $this->fail('保存失败');
        }

        $this->auditOperation($request, 'admin.user.update', 'user', 'success', [
            'target' => $user->id,
            'updated_fields' => array_keys($validated),
        ]);

        return $this->success('保存成功');
    }

    public function delete(Request $request): Response
    {
        $userId = $request->route('id');

        /** @var User|null $user */
        $user = User::query()->find($userId);
        if ($user) {
            DB::transaction(function () use ($user) {
                $user->images()->update(['user_id' => null]);
                $user->albums()->delete();
                $user->delete();
            });
        }

        $this->auditOperation($request, 'admin.user.delete', 'user', 'success', [
            'target' => $user ? $user->id : $userId,
            'found' => (bool) $user,
        ]);

        return $this->success('删除成功');
    }
}
