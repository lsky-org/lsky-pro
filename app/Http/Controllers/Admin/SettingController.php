<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Test;
use App\Models\Config;
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
            return $this->error($e->getMessage());
        }
        return $this->success('发送成功');
    }
}
