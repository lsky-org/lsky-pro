<?php

namespace App\Services;

use App\Enums\ConfigKey;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InstallStateService
{
    private const CORE_REQUIRED_TABLES = [
        'migrations',
        'password_resets',
        'failed_jobs',
        'personal_access_tokens',
        'groups',
        'users',
        'strategies',
        'albums',
        'images',
        'configs',
        'group_strategy',
    ];

    private const FEATURE_TABLES = [
        'upload_tasks',
        'image_batch_operations',
        'tags',
        'webhook_subscriptions',
        'image_tag',
        'team_spaces',
        'team_memberships',
        'image_process_templates',
        'image_process_jobs',
        'ai_prompt_tasks',
    ];

    /**
     * @return array{
     *     lock_exists: bool,
     *     db_ready: bool,
     *     config_exists: bool,
     *     admin_exists: bool,
     *     missing_core_tables: array<int, string>,
     *     missing_feature_tables: array<int, string>,
     *     missing_tables: array<int, string>,
     *     healthy: bool,
     *     error: string|null
     * }
     */
    public function inspect(): array
    {
        $state = [
            'lock_exists' => file_exists(base_path('installed.lock')),
            'db_ready' => false,
            'config_exists' => false,
            'admin_exists' => false,
            'missing_core_tables' => self::CORE_REQUIRED_TABLES,
            'missing_feature_tables' => self::FEATURE_TABLES,
            'missing_tables' => array_merge(self::CORE_REQUIRED_TABLES, self::FEATURE_TABLES),
            'healthy' => false,
            'error' => null,
        ];

        try {
            DB::connection()->getPdo();
            $state['db_ready'] = true;

            $existingTables = [];
            foreach (array_merge(self::CORE_REQUIRED_TABLES, self::FEATURE_TABLES) as $table) {
                if (Schema::hasTable($table)) {
                    $existingTables[] = $table;
                }
            }

            $state['missing_core_tables'] = array_values(array_diff(self::CORE_REQUIRED_TABLES, $existingTables));
            $state['missing_feature_tables'] = array_values(array_diff(self::FEATURE_TABLES, $existingTables));
            $state['missing_tables'] = array_values(array_diff(
                array_merge(self::CORE_REQUIRED_TABLES, self::FEATURE_TABLES),
                $existingTables
            ));

            if ($state['missing_core_tables'] === []) {
                $state['config_exists'] = DB::table('configs')
                    ->where('name', ConfigKey::AppName)
                    ->exists();

                $state['admin_exists'] = DB::table('users')
                    ->where('is_adminer', true)
                    ->exists();
            }
        } catch (\Throwable $e) {
            $state['error'] = $e->getMessage();
        }

        $coreHealthy = $state['db_ready']
            && $state['missing_core_tables'] === []
            && $state['config_exists']
            && $state['admin_exists'];

        if ($coreHealthy && ! $state['lock_exists']) {
            try {
                file_put_contents(base_path('installed.lock'), '');
                $state['lock_exists'] = true;
            } catch (\Throwable) {
                // The lock file is advisory only. A healthy database-backed install
                // must not regress into the installer just because the container
                // filesystem was rebuilt.
            }
        }

        $state['healthy'] = $coreHealthy;

        return $state;
    }

    public function isInstalled(): bool
    {
        return $this->inspect()['healthy'];
    }
}
