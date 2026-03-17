<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('webauthn_credentials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('credential_id', 500)->unique();
            $table->string('label', 120)->nullable();
            $table->longText('public_key');
            $table->json('transports')->nullable();
            $table->string('aaguid', 64)->nullable();
            $table->unsignedBigInteger('sign_count')->default(0);
            $table->string('type', 32)->default('public-key');
            $table->timestamp('last_used_at')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'last_used_at']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('webauthn_credentials');
    }
};
