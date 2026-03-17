<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\ConfigKey;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use App\Utils;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class AnalyticsController extends Controller
{
    public function overview(): Response
    {
        /** @var User $user */
        $user = Auth::user();

        $totalStorageKb = (float) $user->images()->sum('size');
        $totalStorageBytes = (int) round($totalStorageKb * 1024);

        $unitPricePerGbMonth = max(0, (float) Utils::config(ConfigKey::StorageCostPerGbMonth, 0));
        $currency = (string) Utils::config(ConfigKey::StorageCostCurrency, 'CNY');
        $storageGb = $totalStorageKb / 1024 / 1024;
        $estimatedMonthlyCost = round($storageGb * $unitPricePerGbMonth, 4);

        return $this->success('success', [
            'recent_uploads' => [
                'last_7_days' => $this->buildUploadStats($user, 7),
                'last_30_days' => $this->buildUploadStats($user, 30),
            ],
            'storage' => [
                'used_kb' => round($totalStorageKb, 2),
                'used_bytes' => $totalStorageBytes,
                'used_human' => Utils::formatSize($totalStorageBytes),
            ],
            'distribution' => [
                'by_strategy' => $this->buildStrategyDistribution($user),
                'by_mimetype' => $this->buildMimetypeDistribution($user),
            ],
            'cost_estimate' => [
                'currency' => strtoupper(trim($currency)) ?: 'CNY',
                'unit_price_per_gb_month' => $unitPricePerGbMonth,
                'storage_gb' => round($storageGb, 6),
                'estimated_monthly_storage_cost' => $estimatedMonthlyCost,
            ],
            'generated_at' => now()->toDateTimeString(),
        ]);
    }

    private function buildUploadStats(User $user, int $days): array
    {
        $end = now();
        $start = now()->startOfDay()->subDays(max(0, $days - 1));

        /** @var Collection<string, int|string> $rawDaily */
        $rawDaily = $user->images()
            ->where('created_at', '>=', $start)
            ->selectRaw('DATE(created_at) as day, COUNT(*) as upload_count')
            ->groupBy('day')
            ->orderBy('day')
            ->pluck('upload_count', 'day');

        $daily = collect(Utils::makeDateRange($start->toDateString(), $end->toDateString()))
            ->map(function (string $date) use ($rawDaily) {
                return [
                    'date' => $date,
                    'upload_count' => (int) ($rawDaily->get($date, 0)),
                ];
            })
            ->values();

        return [
            'days' => $days,
            'start_date' => $start->toDateString(),
            'end_date' => $end->toDateString(),
            'upload_count' => (int) $daily->sum('upload_count'),
            'daily_uploads' => $daily,
        ];
    }

    private function buildStrategyDistribution(User $user): Collection
    {
        return Image::query()
            ->where('images.user_id', $user->id)
            ->leftJoin('strategies as s', 'images.strategy_id', '=', 's.id')
            ->selectRaw("images.strategy_id as strategy_id, COALESCE(s.name, '未分配策略') as strategy_name, COUNT(*) as upload_count, COALESCE(SUM(images.size), 0) as storage_kb")
            ->groupBy('images.strategy_id', 's.name')
            ->orderByDesc('upload_count')
            ->get()
            ->map(function ($item) {
                $storageKb = (float) $item->storage_kb;
                $storageBytes = (int) round($storageKb * 1024);

                return [
                    'strategy_id' => $item->strategy_id ? (int) $item->strategy_id : null,
                    'strategy_name' => (string) $item->strategy_name,
                    'upload_count' => (int) $item->upload_count,
                    'storage_kb' => round($storageKb, 2),
                    'storage_bytes' => $storageBytes,
                    'storage_human' => Utils::formatSize($storageBytes),
                ];
            })
            ->values();
    }

    private function buildMimetypeDistribution(User $user): Collection
    {
        return Image::query()
            ->where('user_id', $user->id)
            ->selectRaw('mimetype, COUNT(*) as upload_count, COALESCE(SUM(size), 0) as storage_kb')
            ->groupBy('mimetype')
            ->orderByDesc('upload_count')
            ->get()
            ->map(function ($item) {
                $storageKb = (float) $item->storage_kb;
                $storageBytes = (int) round($storageKb * 1024);

                return [
                    'mimetype' => (string) $item->mimetype,
                    'upload_count' => (int) $item->upload_count,
                    'storage_kb' => round($storageKb, 2),
                    'storage_bytes' => $storageBytes,
                    'storage_human' => Utils::formatSize($storageBytes),
                ];
            })
            ->values();
    }
}
