<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 初始化系统默认配置
        foreach (config('convention.app') as $key => $value) {
            $content = is_array($value) ? json_encode($value, JSON_UNESCAPED_UNICODE) : $value;
            Config::query()->firstOrCreate(['name' => $key], ['value' => $content]);
        }
    }
}
