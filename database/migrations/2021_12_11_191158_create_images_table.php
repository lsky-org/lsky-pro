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
        Schema::create('images', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id();
            $table->foreignId('user_id')->nullable()->comment('用户')->constrained('users')->onDelete('set null');
            $table->foreignId('album_id')->nullable()->comment('相册')->constrained('albums')->onDelete('set null');
            $table->foreignId('group_id')->nullable()->comment('角色组')->constrained('groups')->onDelete('set null');
            $table->foreignId('strategy_id')->nullable()->comment('策略')->constrained('strategies')->onDelete('set null');
            $table->string('key')->unique()->comment('key');
            $table->string('path')->comment('保存路径');
            $table->string('name')->comment('保存名称');
            $table->string('origin_name')->default('')->comment('原始名称');
            $table->string('alias_name')->default('')->comment('别名');
            $table->decimal('size')->default(0)->comment('图片大小(kb)');
            $table->string('mimetype', 32)->comment('文件类型');
            $table->string('extension', 32)->comment('文件后缀');
            $table->string('md5', 32)->comment('文件MD5');
            $table->string('sha1')->comment('文件SHA1');
            $table->unsignedInteger('width')->default(0)->comment('宽');
            $table->unsignedInteger('height')->default(0)->comment('高');
            $table->tinyInteger('permission')->default(0)->comment('访问权限');
            $table->boolean('is_unhealthy')->default(false)->comment('是否为不健康的');
            $table->string('uploaded_ip')->default('')->comment('上传IP');
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
        Schema::dropIfExists('images');
    }
};
