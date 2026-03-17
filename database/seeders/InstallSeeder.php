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
        $rows = collect(config('convention.app'))->transform(function ($value, $key) use ($date) {
            return [
                'name' => $key,
                'value' => is_array($value) ? json_encode($value, JSON_UNESCAPED_UNICODE) : $value,
                'updated_at' => $date,
                'created_at' => $date,
            ];
        })->values()->toArray();

        DB::transaction(function () use ($rows) {
            DB::table('configs')->upsert($rows, ['name'], ['value', 'updated_at']);

            /** @var Group $group */
            $group = Group::query()->firstOrCreate(
                ['is_default' => true],
                [
                    'name' => '系统默认组&游客组',
                    'is_guest' => true,
                    'configs' => config('convention.group'),
                ]
            );

            if (! $group->is_guest) {
                $group->is_guest = true;
                $group->save();
            }

            $strategy = $group->strategies()->where('key', StrategyKey::Local)->first();
            if (! $strategy) {
                $strategy = $group->strategies()->create([
                    'key' => StrategyKey::Local,
                    'name' => '默认本地策略',
                    'intro' => '系统默认的本地策略',
                    'configs' => config('filesystems.disks.uploads'),
                ]);
            }

            $group->strategies()->syncWithoutDetaching([$strategy->id]);
        });
    }
}
