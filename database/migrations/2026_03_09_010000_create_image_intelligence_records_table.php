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
        if (Schema::hasTable('image_intelligence_records')) {
            return;
        }

        Schema::create('image_intelligence_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_id')->constrained('images')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('status', 32)->default('ready')->index()->comment('分析状态');
            $table->string('source', 64)->default('metadata_placeholder')->comment('分析来源');
            $table->unsignedSmallInteger('source_version')->default(1)->comment('分析来源版本');
            $table->text('ocr_text')->nullable()->comment('结构化 OCR 文本');
            $table->text('caption')->nullable()->comment('图片描述');
            $table->text('summary')->nullable()->comment('摘要');
            $table->text('prompt_hint')->nullable()->comment('提示词辅助上下文');
            $table->json('labels')->nullable()->comment('标签列表');
            $table->json('keywords')->nullable()->comment('关键词列表');
            $table->json('metadata')->nullable()->comment('分析附加元数据');
            $table->timestamp('analyzed_at')->nullable()->index()->comment('分析完成时间');
            $table->text('last_error')->nullable()->comment('最后一次错误');
            $table->timestamps();

            $table->unique('image_id', 'image_intelligence_records_image_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_intelligence_records');
    }
};
