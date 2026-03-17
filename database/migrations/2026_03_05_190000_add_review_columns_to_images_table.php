<?php

use App\Enums\ImageReviewStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('images', function (Blueprint $table) {
            if (! Schema::hasColumn('images', 'review_status')) {
                $table->string('review_status', 32)
                    ->default(ImageReviewStatus::Pending)
                    ->after('is_unhealthy')
                    ->comment('审核状态');
            }
            if (! Schema::hasColumn('images', 'review_reason')) {
                $table->text('review_reason')
                    ->nullable()
                    ->after('review_status')
                    ->comment('审核原因');
            }
            if (! Schema::hasColumn('images', 'reviewed_at')) {
                $table->timestamp('reviewed_at')
                    ->nullable()
                    ->after('review_reason')
                    ->comment('审核时间');
            }
            if (! Schema::hasColumn('images', 'reviewed_by')) {
                $table->foreignId('reviewed_by')
                    ->nullable()
                    ->after('reviewed_at')
                    ->comment('审核人')
                    ->constrained('users')
                    ->nullOnDelete();
            }

            $table->index(['review_status', 'created_at'], 'images_review_status_created_at_idx');
            $table->index('reviewed_by', 'images_reviewed_by_idx');
        });
    }

    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['reviewed_by']);
            $table->dropIndex('images_review_status_created_at_idx');
            $table->dropIndex('images_reviewed_by_idx');
            $table->dropColumn(['review_status', 'review_reason', 'reviewed_at', 'reviewed_by']);
        });
    }
};
