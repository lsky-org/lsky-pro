<?php

use App\Models\TeamMembership;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (! Schema::hasColumn('team_memberships', 'permissions')) {
            Schema::table('team_memberships', function (Blueprint $table) {
                $table->json('permissions')->nullable()->after('role');
            });
        }

        DB::table('team_memberships')
            ->select(['id', 'role'])
            ->orderBy('id')
            ->chunkById(200, function ($memberships): void {
                foreach ($memberships as $membership) {
                    DB::table('team_memberships')
                        ->where('id', $membership->id)
                        ->whereNull('permissions')
                        ->update([
                            'permissions' => json_encode(TeamMembership::rolePermissions((string) $membership->role), JSON_UNESCAPED_UNICODE),
                        ]);
                }
            });
    }

    public function down(): void
    {
        Schema::table('team_memberships', function (Blueprint $table) {
            $table->dropColumn('permissions');
        });
    }
};
