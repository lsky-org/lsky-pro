<?php

use App\Enums\ConfigKey;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $defaults = config('convention.app');

        DB::table('configs')->updateOrInsert(
            ['name' => ConfigKey::AiProvider],
            ['value' => (string) ($defaults[ConfigKey::AiProvider] ?? 'gpt'), 'updated_at' => $now, 'created_at' => $now]
        );

        DB::table('configs')->updateOrInsert(
            ['name' => ConfigKey::AiProviderSettings],
            [
                'value' => json_encode($defaults[ConfigKey::AiProviderSettings] ?? [], JSON_UNESCAPED_UNICODE),
                'updated_at' => $now,
                'created_at' => $now,
            ]
        );
    }

    public function down(): void
    {
        DB::table('configs')->whereIn('name', [
            ConfigKey::AiProvider,
            ConfigKey::AiProviderSettings,
        ])->delete();
    }
};
