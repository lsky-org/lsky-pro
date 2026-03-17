<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Concerns\AuditsOperations;
use App\Models\User;
use App\Services\ImageIntelligence\ImageIntelligenceControlPlaneService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class IntelligenceController extends Controller
{
    use AuditsOperations;

    public function status(ImageIntelligenceControlPlaneService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();

        return $this->success('success', [
            'intelligence' => $service->buildUserStatus($user),
        ]);
    }

    public function preview(Request $request, ImageIntelligenceControlPlaneService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();
        if (! $user->is_adminer) {
            return $this->fail('仅管理员可预览回填任务');
        }

        try {
            $validated = $request->validate([
                'image_id' => 'nullable|integer|min:1',
                'from_id' => 'nullable|integer|min:1',
                'chunk' => 'nullable|integer|min:1|max:100',
                'limit' => 'nullable|integer|min:1|max:200',
                'older_than_minutes' => 'nullable|integer|min:0|max:10080',
                'missing_only' => 'nullable|boolean',
                'force' => 'nullable|boolean',
                'sample_limit' => 'nullable|integer|min:0|max:50',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        try {
            $result = $service->previewBackfill($validated);
        } catch (\Throwable $e) {
            $this->auditOperation($request, 'api.intelligence.backfill.preview', 'image_intelligence', 'failed', [
                'target' => 'preview',
                'error_message' => $e->getMessage(),
            ], 'warning');

            return $this->fail($e->getMessage());
        }

        $this->auditOperation($request, 'api.intelligence.backfill.preview', 'image_intelligence', 'success', [
            'target' => 'preview',
            'matched' => (int) ($result['matched'] ?? 0),
            'processed' => (int) ($result['processed'] ?? 0),
            'dispatched' => (int) ($result['dispatched'] ?? 0),
        ]);

        return $this->success('success', [
            'result' => $result,
            'intelligence' => $service->buildUserStatus($user),
        ]);
    }

    public function dispatchBackfill(Request $request, ImageIntelligenceControlPlaneService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();
        if (! $user->is_adminer) {
            return $this->fail('仅管理员可执行回填任务');
        }

        try {
            $validated = $request->validate([
                'image_id' => 'nullable|integer|min:1',
                'from_id' => 'nullable|integer|min:1',
                'chunk' => 'nullable|integer|min:1|max:100',
                'limit' => 'nullable|integer|min:1|max:200',
                'older_than_minutes' => 'nullable|integer|min:0|max:10080',
                'missing_only' => 'nullable|boolean',
                'force' => 'nullable|boolean',
                'sample_limit' => 'nullable|integer|min:0|max:50',
                'retry_run_id' => 'nullable|integer|min:1',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        try {
            $result = $service->dispatchBackfill($validated, [
                'initiator_user_id' => (int) $user->id,
                'trigger_source' => 'web',
                'request_id' => $request->attributes->get('request_id'),
                'trace_id' => $request->attributes->get('trace_id'),
                'ip' => $request->ip(),
            ]);
        } catch (\Throwable $e) {
            $this->auditOperation($request, 'api.intelligence.backfill.dispatch', 'image_intelligence', 'failed', [
                'target' => 'dispatch',
                'retry_run_id' => max((int) ($validated['retry_run_id'] ?? 0), 0) ?: null,
                'error_message' => $e->getMessage(),
            ], 'warning');

            return $this->fail($e->getMessage());
        }

        $this->auditOperation($request, 'api.intelligence.backfill.dispatch', 'image_intelligence', 'success', [
            'target' => 'dispatch',
            'run_id' => data_get($result, 'run.run_id', data_get($result, 'run.id')),
            'retry_run_id' => max((int) ($validated['retry_run_id'] ?? 0), 0) ?: null,
            'matched' => (int) ($result['matched'] ?? 0),
            'dispatched' => (int) ($result['dispatched'] ?? 0),
        ]);

        return $this->success('回填任务已派发', [
            'result' => $result,
            'intelligence' => $service->buildUserStatus($user),
        ]);
    }
}
