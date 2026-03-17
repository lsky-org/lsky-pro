<?php

use App\Services\Auth\LegacyAuthIdentityBackfillService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('auth_identities')) {
            Schema::create('auth_identities', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->cascadeOnDelete();
                $table->string('provider', 32);
                $table->string('provider_subject', 191);
                $table->string('provider_email', 191)->nullable();
                $table->string('avatar_url', 500)->nullable();
                $table->json('meta')->nullable();
                $table->timestamp('last_used_at')->nullable();
                $table->timestamps();

                $table->unique(['provider', 'provider_subject']);
                $table->unique(['user_id', 'provider']);
                $table->index(['user_id', 'last_used_at']);
            });
        }

        app(LegacyAuthIdentityBackfillService::class)->syncFromLegacyUsers();
    }

    public function down()
    {
        Schema::dropIfExists('auth_identities');
    }
};
