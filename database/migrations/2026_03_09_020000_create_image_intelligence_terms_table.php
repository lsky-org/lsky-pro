<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (Schema::hasTable('image_intelligence_terms')) {
            return;
        }

        Schema::create('image_intelligence_terms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_id')->constrained('images')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('source', 32)->default('label')->index();
            $table->string('term', 120);
            $table->string('normalized_term', 120)->index();
            $table->timestamps();

            $table->unique(['image_id', 'normalized_term'], 'image_intelligence_terms_image_term_unique');
        });
    }

    public function down()
    {
        Schema::dropIfExists('image_intelligence_terms');
    }
};
