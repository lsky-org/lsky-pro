<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('webhook_subscriptions')) {
            return;
        }

        Schema::create('webhook_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('url', 2048);
            $table->string('secret')->nullable();
            $table->json('events');
            $table->boolean('enabled')->default(true)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('webhook_subscriptions');
    }
};
