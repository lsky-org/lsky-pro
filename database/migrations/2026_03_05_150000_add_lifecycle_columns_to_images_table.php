<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->timestamp('expire_at')->nullable()->after('uploaded_ip')->comment('过期时间');
            $table->softDeletes();
            $table->index('expire_at', 'images_expire_at_idx');
            $table->index(['deleted_at', 'expire_at'], 'images_deleted_at_expire_at_idx');
        });
    }

    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropIndex('images_expire_at_idx');
            $table->dropIndex('images_deleted_at_expire_at_idx');
            $table->dropSoftDeletes();
            $table->dropColumn('expire_at');
        });
    }
};
