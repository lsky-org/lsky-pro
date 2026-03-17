<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('provider', 32)->nullable()->after('remember_token');
            $table->string('provider_id', 191)->nullable()->after('provider');
            $table->string('provider_avatar', 500)->nullable()->after('provider_id');
            $table->index(['provider', 'provider_id']);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['provider', 'provider_id']);
            $table->dropColumn(['provider', 'provider_id', 'provider_avatar']);
        });
    }
};
