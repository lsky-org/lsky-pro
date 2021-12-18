<?php

namespace App\Http\Controllers\User;

use App\Enums\ConfigKey;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utils;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserController extends Controller
{
    public function dashboard(): View
    {
        /** @var User $user */
        $user = Auth::user();

        // 组配置
        $configs = Utils::config(ConfigKey::GuestGroupConfigs);
        if ($user->group) {
            $configs = $user->group->configs;
        }

        $strategies = $user->group ? $user->group->strategies()->get() : [];
        return view('dashboard', compact('strategies', 'configs', 'user'));
    }
}
