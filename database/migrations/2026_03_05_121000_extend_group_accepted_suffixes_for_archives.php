<?php

use App\Enums\GroupConfigKey;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $extra = ['zip', 'rar'];

        DB::table('groups')->select('id', 'configs')->orderBy('id')->chunkById(100, function ($groups) use ($extra) {
            foreach ($groups as $group) {
                $configs = json_decode($group->configs, true) ?: [];
                $current = array_map('strtolower', (array) ($configs[GroupConfigKey::AcceptedFileSuffixes] ?? []));
                $configs[GroupConfigKey::AcceptedFileSuffixes] = array_values(array_unique(array_merge($current, $extra)));
                DB::table('groups')->where('id', $group->id)->update(['configs' => json_encode($configs, JSON_UNESCAPED_UNICODE)]);
            }
        });
    }

    public function down(): void
    {
        $remove = ['zip', 'rar'];

        DB::table('groups')->select('id', 'configs')->orderBy('id')->chunkById(100, function ($groups) use ($remove) {
            foreach ($groups as $group) {
                $configs = json_decode($group->configs, true) ?: [];
                $current = array_map('strtolower', (array) ($configs[GroupConfigKey::AcceptedFileSuffixes] ?? []));
                $configs[GroupConfigKey::AcceptedFileSuffixes] = array_values(array_diff($current, $remove));
                DB::table('groups')->where('id', $group->id)->update(['configs' => json_encode($configs, JSON_UNESCAPED_UNICODE)]);
            }
        });
    }
};

