<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (! Schema::hasTable('team_spaces')) {
            Schema::create('team_spaces', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('owner_user_id');
                $table->string('name', 120);
                $table->boolean('is_personal')->default(false)->index();
                $table->timestamps();

                $table->index('owner_user_id');
                $table->foreign('owner_user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        if (! Schema::hasTable('team_memberships')) {
            Schema::create('team_memberships', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('team_space_id');
                $table->unsignedBigInteger('user_id');
                $table->string('role', 20); // owner/admin/member
                $table->timestamps();

                $table->unique(['team_space_id', 'user_id']);
                $table->index(['user_id', 'role']);
                $table->foreign('team_space_id')->references('id')->on('team_spaces')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        if (! Schema::hasColumn('images', 'space_id')) {
            Schema::table('images', function (Blueprint $table) {
                $table->unsignedBigInteger('space_id')->nullable()->after('strategy_id')->index();
                $table->foreign('space_id')->references('id')->on('team_spaces')->nullOnDelete();
            });
        }

        if (! Schema::hasColumn('personal_access_tokens', 'current_space_id')) {
            Schema::table('personal_access_tokens', function (Blueprint $table) {
                $table->unsignedBigInteger('current_space_id')->nullable()->after('ip_whitelist')->index();
            });
        }

        // Backfill: create personal space + owner membership for existing users.
        $users = DB::table('users')->select('id', 'name')->orderBy('id')->get();
        foreach ($users as $user) {
            $existing = DB::table('team_spaces')
                ->where('owner_user_id', $user->id)
                ->where('is_personal', 1)
                ->first();

            if (! $existing) {
                $spaceId = DB::table('team_spaces')->insertGetId([
                    'owner_user_id' => $user->id,
                    'name' => ($user->name ?: 'User').' 的个人空间',
                    'is_personal' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                $spaceId = $existing->id;
            }

            $membership = DB::table('team_memberships')
                ->where('team_space_id', $spaceId)
                ->where('user_id', $user->id)
                ->first();

            if (! $membership) {
                DB::table('team_memberships')->insert([
                    'team_space_id' => $spaceId,
                    'user_id' => $user->id,
                    'role' => 'owner',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            if (Schema::hasColumn('images', 'space_id')) {
                DB::table('images')
                    ->where('user_id', $user->id)
                    ->whereNull('space_id')
                    ->update(['space_id' => $spaceId]);
            }
        }
    }

    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['space_id']);
            $table->dropColumn('space_id');
        });

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->dropColumn('current_space_id');
        });

        Schema::dropIfExists('team_memberships');
        Schema::dropIfExists('team_spaces');
    }
};
