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
        Schema::create('group_strategy', function (Blueprint $table) {
            $table->foreignId('group_id')->comment('角色组')->constrained('groups')->onDelete('cascade');
            $table->foreignId('strategy_id')->comment('策略')->constrained('strategies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_strategy');
    }
};
