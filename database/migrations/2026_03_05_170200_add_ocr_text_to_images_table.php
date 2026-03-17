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
            if (! Schema::hasColumn('images', 'ocr_text')) {
                $table->text('ocr_text')->nullable()->after('uploaded_ip')->comment('OCR 文本');
            }
            $table->index(['created_at'], 'images_created_at_idx');
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
            $table->dropIndex('images_created_at_idx');
            $table->dropColumn('ocr_text');
        });
    }
};
