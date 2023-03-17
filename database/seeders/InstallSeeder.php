<?php

namespace Database\Seeders;

use App\Enums\StrategyKey;
use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class InstallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $array = collect(config('convention.app'))->transform(function ($value, $key) use ($date) {
            return [
                'name' => $key,
                'value' => is_array($value) ? json_encode($value, JSON_UNESCAPED_UNICODE) : $value,
                'updated_at' => $date,
                'created_at' => $date,
            ];
        })->values()->toArray();
        DB::transaction(function () use ($array) {
            DB::table('configs')->insert($array);
            // 创建默认组和默认策略
            /** @var Group $group */
            $group = Group::query()->create([
                'name' => '系统默认组&游客组',
                'is_default' => true,
                'is_guest' => true,
                'configs' => config('convention.group'),
            ]);
            // 创建默认策略
            $group->strategies()->create([
                'key' => StrategyKey::Local,
                'name' => '默认本地策略',
                'intro' => '系统默认的本地策略',
                'configs' => config('filesystems.disks.uploads'),
            ]);
        });
    }
}
