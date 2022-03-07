<?php

namespace App\Http\Controllers\User;

use App\Enums\UserConfigKey;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserSettingRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UserController extends Controller
{
    public function dashboard(): View
    {
        /** @var User $user */
        $user = Auth::user();
        $configs = $user->group->configs;
        $strategies = $user->group->strategies()->get();
        return view('user.dashboard', compact('strategies', 'configs', 'user'));
    }

    public function settings(): View
    {
        return view('user.settings');
    }

    public function update(UserSettingRequest $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $user->name = $request->validated('name');
        $user->url = $request->validated('url') ?: '';
        $user->configs = $user->configs->merge(collect($request->validated('configs'))->transform(function ($value) {
            return (int)$value;
        }));
        if ($password = $request->validated('password')) {
            $user->forceFill([
                'password' => Hash::make($password),
                'remember_token' => Str::random(60),
            ]);

            event(new PasswordReset($user));
        }
        $user->save();
        return $this->success('保存成功');
    }

    public function setStrategy(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        if (! $strategy = $user->group->strategies()->find($request->id)) {
            return $this->fail('没有找到该策略');
        }
        $user->update(['configs->'.UserConfigKey::DefaultStrategy => $strategy->id]);
        return $this->success('设置成功');
    }
}
