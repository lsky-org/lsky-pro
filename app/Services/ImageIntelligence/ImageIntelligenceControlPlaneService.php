<?php

namespace App\Services\ImageIntelligence;

use App\Console\Commands\BackfillImageIntelligence;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ImageIntelligenceControlPlaneService
{
    public function __construct(
        private readonly ImageIntelligenceBackfillService $backfillService,
        private readonly ImageIntelligenceRunLedgerService $runLedgerService
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function buildUserStatus(User $user): array
    {
        $hasIntelligenceTable = Schema::hasTable('image_intelligence_records');

        $imagesTotal = 0;
        $analyzedCount = 0;
        $missingCount = 0;
        $pendingCount = 0;
        $latestAnalyzedAt = null;

        if (Schema::hasTable('images')) {
            $imagesTotal = DB::table('images')
                ->where('user_id', $user->id)
                ->count();
        }

        if ($hasIntelligenceTable) {
            $analyzedCount = DB::table('images')
                ->join('image_intelligence_records as intelligence_records', 'intelligence_records.image_id', '=', 'images.id')
                ->where('images.user_id', $user->id)
                ->where('intelligence_records.status', 'ready')
                ->whereNotNull('intelligence_records.analyzed_at')
                ->count();

            $missingCount = DB::table('images')
                ->leftJoin('image_intelligence_records as intelligence_records', 'intelligence_records.image_id', '=', 'images.id')
                ->where('images.user_id', $user->id)
                ->whereNull('intelligence_records.id')
                ->count();

            $pendingCount = DB::table('images')
                ->join('image_intelligence_records as intelligence_records', 'intelligence_records.image_id', '=', 'images.id')
                ->where('images.user_id', $user->id)
                ->where(function ($query) {
                    $query->whereNull('intelligence_records.analyzed_at')
                        ->orWhere('intelligence_records.status', '!=', 'ready');
                })
                ->count();

            $latestAnalyzedAt = DB::table('images')
                ->join('image_intelligence_records as intelligence_records', 'intelligence_records.image_id', '=', 'images.id')
                ->where('images.user_id', $user->id)
                ->max('intelligence_records.analyzed_at');
        }

        $coverageRate = $imagesTotal > 0
            ? round(($analyzedCount / $imagesTotal) * 100, 1)
            : 0.0;

        $hasControlPlane = (bool) ($user->is_adminer ?? false) && $hasIntelligenceTable;
        $controlPlane = [
            'status_endpoint' => route('advanced.api.intelligence.status'),
            'preview_endpoint' => route('advanced.api.intelligence.backfill.preview'),
            'dispatch_endpoint' => route('advanced.api.intelligence.backfill.dispatch'),
            'preview_enabled' => (bool) ($user->is_adminer ?? false),
            'dispatch_enabled' => (bool) ($user->is_adminer ?? false),
            'default_options' => [
                'limit' => 25,
                'chunk' => 25,
                'older_than_minutes' => 30,
                'missing_only' => false,
                'force' => false,
                'sample_limit' => 10,
            ],
            'scheduler_registered' => class_exists(BackfillImageIntelligence::class),
            'scheduler' => [
                'cadence' => 'hourly',
                'command' => 'php artisan images:backfill-intelligence --dispatch --trigger-source=scheduler --limit=25 --chunk=25 --older-than-minutes=30',
            ],
            'latest_run' => $this->runLedgerService->latestRunSummary(),
            'retry_supported' => true,
        ];

        if ($hasControlPlane) {
            $controlPlane = array_merge($this->buildGlobalSummary(), $controlPlane);
        }

        return [
            'images_total' => $imagesTotal,
            'analyzed_count' => $analyzedCount,
            'missing_count' => $missingCount,
            'pending_count' => $pendingCount,
            'coverage_rate' => $coverageRate,
            'coverage_label' => $this->formatCoverage($coverageRate),
            'latest_analyzed_at' => $latestAnalyzedAt
                ? Carbon::parse((string) $latestAnalyzedAt)->format('Y-m-d H:i:s')
                : '暂无',
            'has_frontend_backfill_entry' => $hasControlPlane,
            'has_backfill_command' => class_exists(BackfillImageIntelligence::class),
            'backfill_command' => 'php artisan images:backfill-intelligence --dispatch --trigger-source=scheduler --limit=25 --chunk=25 --older-than-minutes=30',
            'backfill_description' => $hasControlPlane
                ? '当前管理员可在本页直接预览和派发 intelligence 回填，仍建议先做 preview，再执行 dispatch。'
                : (class_exists(BackfillImageIntelligence::class)
                    ? '当前没有独立前端回填入口。旧图片 intelligence 回填仍依赖服务端命令和系统定时任务分批处理。'
                    : '当前没有检测到独立回填入口，请先完成后端回填链路接入。'),
            'control_plane' => $controlPlane,
        ];
    }

    /**
     * @param  array<string, mixed>  $options
     * @return array<string, mixed>
     */
    public function previewBackfill(array $options = []): array
    {
        return $this->backfillService->run($this->normalizeOptions($options, false));
    }

    /**
     * @param  array<string, mixed>  $options
     * @return array<string, mixed>
     */
    public function dispatchBackfill(array $options = [], array $context = []): array
    {
        return $this->backfillService->run($this->normalizeOptions($options, true), $context);
    }

    /**
     * @return array<string, mixed>
     */
    private function buildGlobalSummary(): array
    {
        $imagesTotal = Schema::hasTable('images') ? DB::table('images')->count() : 0;
        $hasIntelligenceTable = Schema::hasTable('image_intelligence_records');

        $analyzedCount = 0;
        $missingCount = $imagesTotal;
        $pendingCount = 0;
        $latestAnalyzedAt = null;

        if ($hasIntelligenceTable) {
            $analyzedCount = DB::table('images')
                ->join('image_intelligence_records as intelligence_records', 'intelligence_records.image_id', '=', 'images.id')
                ->where('intelligence_records.status', 'ready')
                ->whereNotNull('intelligence_records.analyzed_at')
                ->count();

            $missingCount = DB::table('images')
                ->leftJoin('image_intelligence_records as intelligence_records', 'intelligence_records.image_id', '=', 'images.id')
                ->whereNull('intelligence_records.id')
                ->count();

            $pendingCount = DB::table('images')
                ->join('image_intelligence_records as intelligence_records', 'intelligence_records.image_id', '=', 'images.id')
                ->where(function ($query) {
                    $query->whereNull('intelligence_records.analyzed_at')
                        ->orWhere('intelligence_records.status', '!=', 'ready');
                })
                ->count();

            $latestAnalyzedAt = DB::table('images')
                ->join('image_intelligence_records as intelligence_records', 'intelligence_records.image_id', '=', 'images.id')
                ->max('intelligence_records.analyzed_at');
        }

        $coverageRate = $imagesTotal > 0
            ? round(($analyzedCount / $imagesTotal) * 100, 1)
            : 0.0;

        return [
            'scope' => 'global',
            'images_total' => $imagesTotal,
            'analyzed_count' => $analyzedCount,
            'missing_count' => $missingCount,
            'pending_count' => $pendingCount,
            'coverage_rate' => $coverageRate,
            'coverage_label' => $this->formatCoverage($coverageRate),
            'latest_analyzed_at' => $latestAnalyzedAt
                ? Carbon::parse((string) $latestAnalyzedAt)->format('Y-m-d H:i:s')
                : '暂无',
            'backfill_command' => 'php artisan images:backfill-intelligence --dispatch --trigger-source=scheduler --limit=25 --chunk=25 --older-than-minutes=30',
            'latest_run' => $this->runLedgerService->latestRunSummary(),
        ];
    }

    /**
     * @param  array<string, mixed>  $options
     * @return array<string, mixed>
     */
    private function normalizeOptions(array $options, bool $dispatch): array
    {
        return [
            'dispatch' => $dispatch,
            'image_id' => max((int) ($options['image_id'] ?? 0), 0),
            'from_id' => max((int) ($options['from_id'] ?? 0), 0),
            'chunk' => $this->clamp((int) ($options['chunk'] ?? 25), 1, 100, 25),
            'limit' => $this->clamp((int) ($options['limit'] ?? 25), 1, 200, 25),
            'older_than_minutes' => $this->clamp((int) ($options['older_than_minutes'] ?? 30), 0, 10080, 30),
            'missing_only' => (bool) ($options['missing_only'] ?? false),
            'force' => (bool) ($options['force'] ?? false),
            'sample_limit' => $this->clamp((int) ($options['sample_limit'] ?? 10), 0, 50, 10),
            'retry_run_id' => max((int) ($options['retry_run_id'] ?? 0), 0),
        ];
    }

    private function formatCoverage(float $coverage): string
    {
        return $coverage === (float) ((int) $coverage)
            ? number_format($coverage, 0).'%'
            : number_format($coverage, 1).'%';
    }

    private function clamp(int $value, int $min, int $max, int $default): int
    {
        if ($value < $min || $value > $max) {
            return $default;
        }

        return $value;
    }
}
