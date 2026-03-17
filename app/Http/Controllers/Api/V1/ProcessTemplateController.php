<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Jobs\RunImageProcessTemplateJob;
use App\Models\ImageProcessJob;
use App\Models\ImageProcessTemplate;
use App\Models\User;
use App\Services\ImageProcessing\ImageProcessExecutor;
use App\Services\ImageProcessing\ImageProcessingManager;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ProcessTemplateController extends Controller
{
    use AuditsOperations;

    public function index(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();

        $items = ImageProcessTemplate::query()
            ->where(function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->orWhere('is_shared', true);
            })
            ->orderByDesc('id')
            ->get(['id', 'user_id', 'name', 'definition', 'is_shared', 'created_at', 'updated_at'])
            ->map(function (ImageProcessTemplate $template) use ($user) {
                return [
                    'id' => $template->id,
                    'name' => $template->name,
                    'definition' => $template->definition ?: [],
                    'is_shared' => (bool) $template->is_shared,
                    'is_owner' => (int) $template->user_id === (int) $user->id,
                    'created_at' => optional($template->created_at)->toDateTimeString(),
                    'updated_at' => optional($template->updated_at)->toDateTimeString(),
                ];
            })
            ->values();

        return $this->success('success', ['items' => $items]);
    }

    public function store(Request $request, ImageProcessExecutor $processExecutor): Response
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:128',
                'definition' => 'required|array',
                'is_shared' => 'nullable|boolean',
            ]);

            $definition = $processExecutor->validatePayload((array) $validated['definition']);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User $user */
        $user = Auth::user();

        $template = ImageProcessTemplate::query()->create([
            'user_id' => $user->id,
            'name' => trim((string) $validated['name']),
            'definition' => $definition,
            'is_shared' => array_key_exists('is_shared', $validated) ? (bool) $validated['is_shared'] : false,
        ]);

        $this->auditOperation($request, 'api.process_template.create', 'process_template', 'success', [
            'target' => $template->id,
            'name' => $template->name,
            'is_shared' => (bool) $template->is_shared,
        ]);

        return $this->success('创建成功', [
            'id' => $template->id,
            'name' => $template->name,
            'definition' => $template->definition,
            'is_shared' => (bool) $template->is_shared,
            'created_at' => optional($template->created_at)->toDateTimeString(),
        ]);
    }

    public function run(
        Request $request,
        int $id,
        ImageProcessExecutor $processExecutor,
        ImageProcessingManager $processingManager
    ): Response {
        try {
            $validated = $request->validate([
                'keys' => 'required|array|min:1|max:500',
                'keys.*' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);
        $keys = $this->normalizeKeys((array) $validated['keys']);

        /** @var ImageProcessTemplate|null $template */
        $template = ImageProcessTemplate::query()
            ->where('id', $id)
            ->where(function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->orWhere('is_shared', true);
            })
            ->first();

        if (! $template) {
            return $this->fail('模板不存在');
        }

        try {
            $definition = $processExecutor->validatePayload((array) $template->definition);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        $successes = [];
        $failures = [];

        foreach ($keys as $key) {
            $result = $processExecutor->execute($user, $key, $spaceId, $definition, $processingManager);
            if ($result['ok']) {
                $successes[] = $result['data'];
                continue;
            }

            $failures[] = [
                'key' => $key,
                'message' => $result['message'],
            ];
        }

        $this->auditOperation($request, 'api.process_template.run', 'process_template', 'success', [
            'target' => $id,
            'template_name' => $template->name,
            'requested_count' => count($keys),
            'success_count' => count($successes),
            'failure_count' => count($failures),
        ]);

        return $this->success('批处理执行完成', [
            'template' => [
                'id' => $template->id,
                'name' => $template->name,
            ],
            'requested_count' => count($keys),
            'success_count' => count($successes),
            'failure_count' => count($failures),
            'successes' => $successes,
            'failures' => $failures,
        ]);
    }

    public function dispatchTemplate(Request $request, int $id): Response
    {
        try {
            $validated = $request->validate([
                'keys' => 'required|array|min:1|max:500',
                'keys.*' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);
        $keys = $this->normalizeKeys((array) $validated['keys']);

        /** @var ImageProcessTemplate|null $template */
        $template = ImageProcessTemplate::query()
            ->where('id', $id)
            ->where(function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->orWhere('is_shared', true);
            })
            ->first();

        if (! $template) {
            return $this->fail('模板不存在');
        }

        $jobId = (string) Str::uuid();
        $job = ImageProcessJob::query()->create([
            'job_id' => $jobId,
            'user_id' => $user->id,
            'template_id' => $template->id,
            'status' => 'pending',
            'total' => count($keys),
            'processed' => 0,
            'success' => 0,
            'failed' => 0,
            'result' => [
                'keys' => $keys,
                'space_id' => $spaceId,
                'successes' => [],
                'failures' => [],
            ],
        ]);

        RunImageProcessTemplateJob::dispatch($jobId);

        $this->auditOperation($request, 'api.process_template.dispatch', 'process_template_job', 'success', [
            'target' => $jobId,
            'template_id' => $template->id,
            'template_name' => $template->name,
            'requested_count' => count($keys),
        ]);

        return $this->success('任务已提交', $this->formatJobPayload($job, $template));
    }

    public function jobs(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();

        $status = trim((string) $request->query('status', ''));
        $allowed = [
            ImageProcessJob::STATUS_PENDING,
            ImageProcessJob::STATUS_RETRYING,
            ImageProcessJob::STATUS_PROCESSING,
            ImageProcessJob::STATUS_SUCCESS,
            ImageProcessJob::STATUS_FAILED,
            ImageProcessJob::STATUS_PARTIAL_SUCCESS,
            ImageProcessJob::STATUS_CANCELLED,
        ];

        $query = ImageProcessJob::query()
            ->with(['template:id,name'])
            ->where('user_id', $user->id);
        if ($status !== '' && in_array($status, $allowed, true)) {
            $query->where('status', $status);
        }

        $items = $query->orderByDesc('id')->limit(50)->get()->map(function (ImageProcessJob $job) {
            return $this->formatJobPayload($job, $job->template);
        })->values();

        return $this->success('success', ['items' => $items]);
    }

    public function job(Request $request, string $jobId): Response
    {
        /** @var User $user */
        $user = Auth::user();

        /** @var ImageProcessJob|null $job */
        $job = ImageProcessJob::query()
            ->with(['template:id,name'])
            ->where('job_id', $jobId)
            ->where('user_id', $user->id)
            ->first();

        if (! $job) {
            return $this->fail('任务不存在');
        }

        return $this->success('success', $this->formatJobPayload($job, $job->template));
    }

    public function retry(Request $request, string $jobId): Response
    {
        /** @var User $user */
        $user = Auth::user();

        /** @var ImageProcessJob|null $job */
        $job = ImageProcessJob::query()
            ->with(['template:id,name'])
            ->where('job_id', $jobId)
            ->where('user_id', $user->id)
            ->first();
        if (! $job) {
            return $this->fail('任务不存在');
        }
        if (! in_array($job->status, [
            ImageProcessJob::STATUS_FAILED,
            ImageProcessJob::STATUS_PARTIAL_SUCCESS,
            ImageProcessJob::STATUS_CANCELLED,
        ], true)) {
            return $this->fail('当前任务状态不可重试');
        }

        $job->forceFill([
            'status' => ImageProcessJob::STATUS_RETRYING,
            'processed' => 0,
            'success' => 0,
            'failed' => 0,
            'error_message' => null,
            'started_at' => null,
            'finished_at' => null,
        ])->save();

        RunImageProcessTemplateJob::dispatch($job->job_id);

        $this->auditOperation($request, 'api.process_job.retry', 'process_template_job', 'success', [
            'target' => $job->job_id,
            'template_id' => $job->template_id,
        ]);

        return $this->success('任务已重试', $this->formatJobPayload($job->fresh(), $job->template));
    }

    public function cancel(Request $request, string $jobId): Response
    {
        /** @var User $user */
        $user = Auth::user();

        /** @var ImageProcessJob|null $job */
        $job = ImageProcessJob::query()
            ->with(['template:id,name'])
            ->where('job_id', $jobId)
            ->where('user_id', $user->id)
            ->first();
        if (! $job) {
            return $this->fail('任务不存在');
        }
        if (! in_array($job->status, [
            ImageProcessJob::STATUS_PENDING,
            ImageProcessJob::STATUS_RETRYING,
            ImageProcessJob::STATUS_PROCESSING,
        ], true)) {
            return $this->fail('当前任务状态不可取消');
        }

        $job->forceFill([
            'status' => ImageProcessJob::STATUS_CANCELLED,
            'finished_at' => now(),
        ])->save();

        $this->auditOperation($request, 'api.process_job.cancel', 'process_template_job', 'success', [
            'target' => $job->job_id,
            'template_id' => $job->template_id,
        ]);

        return $this->success('任务已取消', $this->formatJobPayload($job->fresh(), $job->template));
    }

    private function currentSpaceId(Request $request): ?int
    {
        $spaceId = (int) $request->attributes->get('space_id', 0);

        return $spaceId > 0 ? $spaceId : null;
    }

    /**
     * @param  array<int, mixed>  $keys
     * @return array<int, string>
     */
    private function normalizeKeys(array $keys): array
    {
        $keys = array_map(static fn ($key) => trim((string) $key), $keys);
        $keys = array_filter($keys, static fn ($key) => $key !== '');

        return array_values(array_unique($keys));
    }

    private function formatJobPayload(ImageProcessJob $job, ?ImageProcessTemplate $template): array
    {
        $total = max(0, (int) $job->total);
        $processed = max(0, (int) $job->processed);
        $progress = $total > 0 ? (int) floor(($processed / $total) * 100) : 0;

        return [
            'job_id' => $job->job_id,
            'status' => (string) $job->status,
            'template' => [
                'id' => optional($template)->id ? (int) $template->id : null,
                'name' => optional($template)->name,
            ],
            'total' => $total,
            'processed' => $processed,
            'success' => (int) $job->success,
            'failed' => (int) $job->failed,
            'progress' => min(100, $progress),
            'result' => (array) ($job->result ?? []),
            'error_message' => $job->error_message,
            'started_at' => optional($job->started_at)->toDateTimeString(),
            'finished_at' => optional($job->finished_at)->toDateTimeString(),
            'created_at' => optional($job->created_at)->toDateTimeString(),
            'updated_at' => optional($job->updated_at)->toDateTimeString(),
        ];
    }
}
