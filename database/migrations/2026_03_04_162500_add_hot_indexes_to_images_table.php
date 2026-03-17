<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $table->index(['strategy_id', 'md5', 'sha1'], 'idx_images_strategy_md5_sha1');
            $table->index(['user_id', 'created_at'], 'idx_images_user_created_at');
            $table->index(['uploaded_ip', 'created_at'], 'idx_images_uploaded_ip_created_at');
            $table->index(['album_id', 'created_at'], 'idx_images_album_created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Keep no-op on rollback: these composite indexes can be selected by FK planner
        // on some MySQL versions, and force-dropping them may break migrate:refresh in tests.
    }
};
