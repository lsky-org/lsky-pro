<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_id')->nullable()->after('user_id');
            $table->foreign('parent_id')->references('id')->on('albums')->onDelete('cascade');
            $table->index(['user_id', 'parent_id']);
        });
    }

    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropIndex(['user_id', 'parent_id']);
            $table->dropColumn('parent_id');
        });
    }
};
