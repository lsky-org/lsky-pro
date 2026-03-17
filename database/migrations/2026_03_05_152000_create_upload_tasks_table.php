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
        if (Schema::hasTable('upload_tasks')) {
            return;
        }

        Schema::create('upload_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_id', 64)->unique()->comment('任务ID');
            $table->string('status', 32)->default('pending')->comment('任务状态: pending|processing|success|failed');
            $table->unsignedBigInteger('user_id')->nullable()->index()->comment('提交用户');
            $table->unsignedBigInteger('image_id')->nullable()->index()->comment('成功后图片ID');
            $table->string('request_ip', 45)->nullable()->comment('请求IP');
            $table->unsignedBigInteger('strategy_id')->nullable()->comment('上传策略ID');
            $table->string('temp_path')->comment('临时文件路径');
            $table->string('origin_name')->comment('原始文件名');
            $table->string('mime_type')->nullable()->comment('MIME类型');
            $table->longText('payload')->nullable()->comment('额外请求参数JSON');
            $table->longText('result')->nullable()->comment('成功结果JSON');
            $table->text('error_message')->nullable()->comment('失败信息');
            $table->timestamp('started_at')->nullable()->comment('开始处理时间');
            $table->timestamp('finished_at')->nullable()->comment('结束处理时间');
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
        Schema::dropIfExists('upload_tasks');
    }
};
