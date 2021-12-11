<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id();
            $table->foreignId('group_id')->nullable()->comment('角色组')->constrained('groups')->onDelete('set null');
            $table->string('name')->comment('姓名');
            $table->string('email')->unique()->comment('邮箱');
            $table->string('password')->comment('密码');
            $table->rememberToken();
            $table->boolean('is_adminer')->default(false)->comment('是否为管理员');
            $table->decimal('capacity', 20)->default(0)->comment('总容量(kb)');
            $table->json('configs')->comment('配置');
            $table->unsignedBigInteger('image_num')->default(0)->comment('图片数量');
            $table->unsignedBigInteger('album_num')->default(0)->comment('相册数量');
            $table->string('registered_ip')->default('')->comment('注册IP');
            $table->enum('status', ['normal', 'frozen'])->default('normal');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
