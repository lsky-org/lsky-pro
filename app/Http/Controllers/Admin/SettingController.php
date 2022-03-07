<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ConfigKey;
use App\Http\Controllers\Controller;
use App\Mail\Test;
use App\Models\Config;
use App\Services\UpgradeService;
use App\Utils;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function index(): View
    {
        $configs = Utils::config();
        return view('admin.setting.index', compact('configs'));
    }

    public function save(Request $request): Response
    {
        foreach ($request->all() as $key => $value) {
            Config::query()->where('name', $key)->update(['value' => $value]);
        }
        Cache::flush();
        return $this->success('保存成功');
    }

    public function mailTest(Request $request): Response
    {
        try {
            Mail::to($request->post('email'))->send(new Test());
        } catch (\Throwable $e) {
            return $this->fail($e->getMessage());
        }
        return $this->success('发送成功');
    }

    public function checkUpdate(): Response
    {
        $version = Utils::config(ConfigKey::AppVersion);
        $service = new UpgradeService($version);
        try {
            $data = [
                'is_update' => $service->check(),
            ];
            if ($data['is_update']) {
                $data['version'] = $service->getVersions()->first();
            }
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }

        return $this->success('success', $data);
    }

    public function upgrade()
    {
        ignore_user_abort(true);
        set_time_limit(0);

        $version = Utils::config(ConfigKey::AppVersion);
        $service = new UpgradeService($version);
        $this->success()->send();
        $service->upgrade();
        flush();
    }

    public function upgradeProgress(): Response
    {
        return $this->success('success', Cache::get('upgrade_progress'));
    }
}
