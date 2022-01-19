<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserSettingRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function settings(): View
    {
        return view('user.settings');
    }

    public function update(UserSettingRequest $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $user->name = $request->validated('name');
        $user->configs = $user->configs->merge(collect($request->validated('configs'))->transform(function ($value) {
            return (int)$value;
        }));
        if ($password = $request->validated('password')) {
            $user->forceFill([
                'password' => Hash::make($password),
                'remember_token' => Str::random(60),
            ])->save();

            event(new PasswordReset($user));
        }
        $user->save();
        return $this->success('保存成功');
    }
}
