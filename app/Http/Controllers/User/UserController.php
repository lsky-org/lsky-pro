<?php

namespace App\Http\Controllers\User;

use App\Enums\ConfigKey;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserSettingRequest;
use App\Models\User;
use App\Utils;
use Illuminate\Auth\Events\PasswordReset;
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

        // 组配置
        $configs = Utils::config(ConfigKey::GroupConfigs);
        if ($user->group) {
            $configs = $user->group->configs;
        }

        $strategies = $user->group ? $user->group->strategies()->get() : [];
        return view('user.dashboard', compact('strategies', 'configs', 'user'));
    }

    public function settings(): View
    {
        return view('user.settings');
    }

    public function gallery(): View
    {
        return view('user.gallery');
    }

    public function works(): Response
    {
        return $this->success();
    }

    public function update(UserSettingRequest $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $user->name = $request->validated('name');
        $user->url = $request->validated('url');
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
}
