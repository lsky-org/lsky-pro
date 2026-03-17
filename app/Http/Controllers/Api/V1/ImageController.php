<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\ConfigKey;
use App\Exceptions\UploadException;
use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use App\Services\ImageProcessing\ImageProcessExecutor;
use App\Services\ImageProcessing\ImageProcessingManager;
use App\Services\AiSearchService;
use App\Services\ImageBatchOperationService;
use App\Services\ImageService;
use App\Services\SignedUrlService;
use App\Services\UploadTaskService;
use App\Services\UserService;
use App\Utils;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ImageController extends Controller
{
    use AuditsOperations;

    /**
     * @throws AuthenticationException
     */
    public function upload(Request $request, ImageService $service, UploadTaskService $uploadTaskService): Response
    {
        if ($request->hasHeader('Authorization')) {
            $guards = array_keys(config('auth.guards'));

            if (empty($guards)) {
                $guards = [null];
            }

            foreach ($guards as $guard) {
                if (Auth::guard($guard)->check()) {
                    Auth::shouldUse($guard);
                    break;
                }
            }

            if (! Auth::check()) {
                throw new AuthenticationException('Authentication failed.');
            }
        }

        try {
            if (Utils::config(ConfigKey::UploadPipelineAsyncEnabled, false)) {
                $task = $uploadTaskService->createTask($request);

                $this->auditOperation($request, 'api.image.upload', 'upload_task', 'success', [
                    'target' => $task->task_id,
                    'status' => $task->status,
                ]);

                return $this->success('上传任务已提交', $uploadTaskService->makeTaskResponse($task));
            }

            $image = $service->store($request);
        } catch (UploadException $e) {
            $this->auditOperation($request, 'api.image.upload', 'image', 'failed', [
                'target' => null,
                'error' => $e->getMessage(),
            ], 'warning');

            return $this->fail($e->getMessage());
        } catch (\Throwable $e) {
            Utils::e($e, 'Api 上传文件时发生异常');

            $this->auditOperation($request, 'api.image.upload', 'image', 'failed', [
                'target' => null,
                'error' => $e->getMessage(),
            ], 'error');

            if (config('app.debug')) {
                return $this->fail($e->getMessage());
            }

            return $this->fail('服务异常，请稍后再试');
        }

        $this->auditOperation($request, 'api.image.upload', 'image', 'success', [
            'target' => $image->key,
            'image_id' => $image->id,
        ]);

        return $this->success('上传成功', $uploadTaskService->makeImageResponse($image));
    }

    public function images(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);

        $images = $user->images()
            ->select([
                'id', 'user_id', 'album_id', 'group_id', 'strategy_id', 'space_id', 'key', 'path', 'name',
                'origin_name', 'alias_name', 'size', 'mimetype', 'extension', 'md5', 'sha1',
                'width', 'height', 'permission', 'review_status', 'review_reason', 'reviewed_at', 'reviewed_by', 'ocr_text', 'created_at',
            ])
            ->when(! is_null($spaceId), function ($query) use ($spaceId) {
                $query->where('space_id', $spaceId);
            })
            ->filter($request)
            ->with([
                'group:id,configs',
                'strategy:id,key,configs',
                'album:id,user_id,name,intro,image_num,created_at,updated_at',
                'tags:id,name',
            ])
            ->paginate(40)
            ->withQueryString();
        $images->getCollection()->each(function (Image $image) {
            $image->human_date = $image->created_at->diffForHumans();
            $image->date = $image->created_at->format('Y-m-d H:i:s');
            $image->append(['pathname', 'links'])->setVisible([
                'album', 'key', 'name', 'pathname', 'origin_name', 'size', 'mimetype', 'extension', 'md5', 'sha1',
                'width', 'height', 'review_status', 'review_reason', 'reviewed_at', 'reviewed_by', 'links', 'ocr_text', 'tags', 'human_date', 'date',
            ]);
        });

        return $this->success('success', $images);
    }

    public function search(Request $request): Response
    {
        return $this->images($request);
    }

    public function aiSearch(Request $request, AiSearchService $searchService): Response
    {
        try {
            $request->validate([
                'q' => 'required|string|max:255',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);
        $images = $searchService->search($user, $spaceId, (string) $request->query('q'));

        return $this->success('success', $images);
    }

    public function process(
        Request $request,
        ImageProcessingManager $processingManager,
        ImageProcessExecutor $processExecutor
    ): Response
    {
        try {
            $payload = $processExecutor->validatePayload($request->only([
                'crop', 'transform', 'resize', 'filters', 'watermark',
            ]));
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User $user */
        $user = Auth::user();
        $imageKey = (string) $request->route('key');
        $spaceId = $this->currentSpaceId($request);

        $result = $processExecutor->execute($user, $imageKey, $spaceId, $payload, $processingManager);
        if (! $result['ok']) {
            return $this->fail($result['message']);
        }

        $this->auditOperation($request, 'api.image.process', 'image', 'success', [
            'target' => $imageKey,
            'driver' => $processingManager->configuredDriverName(),
        ]);

        return $this->success('success', $result['data']);
    }

    public function destroy(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $imageKey = $request->route('key');
        $spaceId = $this->currentSpaceId($request);

        (new UserService())->deleteImages([$imageKey], $user, 'key', $spaceId);

        $this->auditOperation($request, 'api.image.delete', 'image', 'success', [
            'target' => $imageKey,
        ]);

        return $this->success('删除成功');
    }

    public function batchDeletePreview(Request $request, ImageBatchOperationService $service): Response
    {
        try {
            $request->validate([
                'keys' => 'required|array|min:1|max:500',
                'keys.*' => 'string',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);
        $keys = $service->normalizeKeys((array) $request->input('keys', []));
        $images = $service->resolveImagesByKeys($user, $keys, $spaceId);
        $preview = $service->makePreviewPayload($keys, $images);

        $this->auditOperation($request, 'api.image.batch_delete.preview', 'image', 'success', [
            'target' => $preview['preview_keys'],
            'affected_count' => $preview['affected_count'],
        ]);

        return $this->success('预演成功', $preview);
    }

    public function batchDelete(Request $request, ImageBatchOperationService $service): Response
    {
        try {
            $request->validate([
                'keys' => 'required|array|min:1|max:500',
                'keys.*' => 'string',
                'dry_run' => 'nullable|boolean',
                'execute' => 'nullable|boolean',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);
        $keys = $service->normalizeKeys((array) $request->input('keys', []));
        $execute = $request->boolean('execute', false);
        $dryRun = $request->boolean('dry_run', ! $execute);

        $images = $service->resolveImagesByKeys($user, $keys, $spaceId);
        $preview = $service->makePreviewPayload($keys, $images);

        if ($dryRun) {
            $this->auditOperation($request, 'api.image.batch_delete.dry_run', 'image', 'success', [
                'target' => $preview['preview_keys'],
                'affected_count' => $preview['affected_count'],
            ]);

            return $this->success('dry-run completed', array_merge($preview, [
                'dry_run' => true,
                'executed' => false,
                'batch_id' => null,
            ]));
        }

        $result = $service->executeBatchDelete($user, $keys, $spaceId);
        $batch = $result['batch'];

        if (! $batch) {
            $this->auditOperation($request, 'api.image.batch_delete.execute', 'image', 'failed', [
                'target' => $preview['preview_keys'],
                'reason' => 'not_found',
            ], 'warning');

            return $this->fail('未找到可删除图片', array_merge($preview, [
                'dry_run' => false,
                'executed' => false,
                'batch_id' => null,
            ]));
        }

        $this->auditOperation($request, 'api.image.batch_delete.execute', 'image', 'success', [
            'target' => $batch->batch_id,
            'affected_count' => $batch->total_count,
        ]);

        return $this->success('批量删除成功', array_merge($preview, [
            'dry_run' => false,
            'executed' => true,
            'batch_id' => $batch->batch_id,
            'deleted_count' => (int) $batch->total_count,
        ]));
    }

    public function batchDeleteRollback(Request $request, string $batchId, ImageBatchOperationService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);
        $result = $service->rollbackBatchDelete($user, $batchId, $spaceId);
        $batch = $result['batch'];

        if (! $batch) {
            $this->auditOperation($request, 'api.image.batch_delete.rollback', 'image', 'failed', [
                'target' => $batchId,
                'reason' => 'batch_not_found',
            ], 'warning');

            return $this->fail('批次不存在');
        }

        $this->auditOperation($request, 'api.image.batch_delete.rollback', 'image', 'success', [
            'target' => $batchId,
            'restored_count' => $result['restored_count'],
        ]);

        return $this->success('回滚完成', [
            'batch_id' => $batch->batch_id,
            'status' => $batch->status,
            'total_count' => $result['total_count'],
            'restored_count' => $result['restored_count'],
            'already_restored' => $result['already_restored'],
            'rolled_back_at' => optional($batch->rolled_back_at)->toDateTimeString(),
        ]);
    }

    public function signedUrl(Request $request, SignedUrlService $signedUrlService): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);

        /** @var Image|null $image */
        $image = $user->images()
            ->when(! is_null($spaceId), function ($query) use ($spaceId) {
                $query->where('space_id', $spaceId);
            })
            ->where('key', $request->route('key'))
            ->with(['group:id,configs', 'strategy:id,key,configs'])
            ->first();

        if (! $image) {
            return $this->fail('图片不存在');
        }

        $expiresIn = max(1, (int) $request->query('expires_in', (int) config('download.signed_url.ttl', 300)));
        $signedUrl = $signedUrlService->signImageUrl($image, $image->url, $expiresIn);

        return $this->success('success', [
            'key' => $image->key,
            'url' => $signedUrl,
            'expires_at' => $signedUrlService->extractExpiresFromUrl($signedUrl),
        ]);
    }

    private function currentSpaceId(Request $request): ?int
    {
        $spaceId = (int) $request->attributes->get('space_id', 0);

        return $spaceId > 0 ? $spaceId : null;
    }
}
