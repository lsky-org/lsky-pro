<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->index('key');
            $table->index('md5');
            $table->index('sha1');
            $table->index('created_at');
            $table->index('uploaded_ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropIndex('key');
            $table->dropIndex('md5');
            $table->dropIndex('sha1');
            $table->dropIndex('created_at');
            $table->dropIndex('uploaded_ip');
        });
    }
};
