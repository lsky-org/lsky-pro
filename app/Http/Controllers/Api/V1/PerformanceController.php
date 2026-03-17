<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\SystemPerformanceService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PerformanceController extends Controller
{
    public function summary(SystemPerformanceService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();

        if (! $user->is_adminer) {
            return $this->fail('仅管理员可查看系统性能');
        }

        return $this->success('success', $service->summary());
    }
}
