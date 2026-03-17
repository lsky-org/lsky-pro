<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('ai_prompt_tasks')) {
            return;
        }

        Schema::create('ai_prompt_tasks', function (Blueprint $table) {
            $table->id();
            $table->uuid('task_id')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('image_id')->nullable()->constrained('images')->nullOnDelete();
            $table->string('image_key', 64)->index();
            $table->text('intent');
            $table->text('template')->nullable();
            $table->string('language', 32)->default('zh-CN');
            $table->string('style', 200)->nullable();
            $table->string('status', 32)->default('pending')->index();
            $table->json('result')->nullable();
            $table->text('error_message')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_prompt_tasks');
    }
};
