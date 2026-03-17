<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('image_intelligence_runs')) {
            return;
        }

        Schema::create('image_intelligence_runs', function (Blueprint $table) {
            $table->id();
            $table->string('mode', 20);
            $table->string('status', 32)->index();
            $table->foreignId('initiator_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('trigger_source', 20)->default('web');
            $table->json('options')->nullable();
            $table->foreignId('retry_of_run_id')->nullable()->constrained('image_intelligence_runs')->nullOnDelete();
            $table->unsignedInteger('matched')->default(0);
            $table->unsignedInteger('processed')->default(0);
            $table->unsignedInteger('dispatched')->default(0);
            $table->unsignedInteger('skipped')->default(0);
            $table->unsignedInteger('succeeded')->default(0);
            $table->unsignedInteger('failed')->default(0);
            $table->unsignedBigInteger('last_image_id')->nullable()->index();
            $table->string('request_id', 128)->nullable();
            $table->string('trace_id', 128)->nullable();
            $table->string('ip', 45)->nullable();
            $table->text('error_message')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('image_intelligence_runs');
    }
};
