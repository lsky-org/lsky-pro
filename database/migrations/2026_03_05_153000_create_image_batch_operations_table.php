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
        if (Schema::hasTable('image_batch_operations')) {
            return;
        }

        Schema::create('image_batch_operations', function (Blueprint $table) {
            $table->id();
            $table->string('batch_id', 64)->unique()->comment('批次ID');
            $table->unsignedBigInteger('user_id')->index()->comment('操作用户ID');
            $table->string('operation', 32)->default('batch_delete')->comment('操作类型');
            $table->string('status', 32)->default('executed')->comment('状态: executed|rolled_back|partial_rollback');
            $table->unsignedInteger('total_count')->default(0)->comment('批次总数');
            $table->json('image_ids')->nullable()->comment('图片ID列表');
            $table->json('image_keys')->nullable()->comment('图片Key列表');
            $table->timestamp('executed_at')->nullable()->comment('执行时间');
            $table->timestamp('rolled_back_at')->nullable()->comment('回滚时间');
            $table->json('meta')->nullable()->comment('扩展信息');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_batch_operations');
    }
};
