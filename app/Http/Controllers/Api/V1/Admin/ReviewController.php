<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Enums\ImageReviewStatus;
use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class ReviewController extends Controller
{
    use AuditsOperations;

    public function index(Request $request): Response
    {
        if ($deny = $this->ensureAdmin($request)) {
            return $deny;
        }

        $status = (string) $request->query('status', ImageReviewStatus::Pending);
        if (! in_array($status, ImageReviewStatus::values(), true)) {
            return $this->fail('status 参数无效');
        }

        $perPage = (int) $request->query('per_page', 40);
        if (! in_array($perPage, [20, 40, 100], true)) {
            $perPage = 40;
        }

        $images = Image::query()
            ->select([
                'id', 'user_id', 'album_id', 'key', 'origin_name', 'alias_name', 'size', 'mimetype', 'extension',
                'review_status', 'review_reason', 'reviewed_at', 'reviewed_by', 'created_at',
            ])
            ->where('review_status', $status)
            ->with([
                'user:id,name,email',
                'album:id,name',
            ])
            ->latest()
            ->paginate($perPage)
            ->withQueryString();

        return $this->success('success', $images);
    }

    public function approve(Request $request, string $key): Response
    {
        if ($deny = $this->ensureAdmin($request)) {
            return $deny;
        }

        /** @var Image|null $image */
        $image = Image::query()->where('key', $key)->first();
        if (! $image) {
            $this->auditOperation($request, 'api.admin.review.approve', 'image_review', 'failed', [
                'target' => $key,
                'reason' => 'not_found',
            ], 'warning');

            return $this->fail('图片不存在');
        }

        $reviewer = $request->user();
        $image->review_status = ImageReviewStatus::Approved;
        $image->review_reason = null;
        $image->reviewed_at = now();
        $image->reviewed_by = $reviewer?->id;
        $image->save();

        $this->auditOperation($request, 'api.admin.review.approve', 'image_review', 'success', [
            'target' => $image->key,
            'review_status' => $image->review_status,
            'reviewed_by' => $image->reviewed_by,
        ]);

        return $this->success('审核通过', [
            'key' => $image->key,
            'review_status' => $image->review_status,
            'review_reason' => $image->review_reason,
            'reviewed_at' => optional($image->reviewed_at)->toDateTimeString(),
            'reviewed_by' => $image->reviewed_by,
        ]);
    }

    public function reject(Request $request, string $key): Response
    {
        if ($deny = $this->ensureAdmin($request)) {
            return $deny;
        }

        try {
            $validated = $request->validate([
                'review_reason' => 'required|string|max:2000',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var Image|null $image */
        $image = Image::query()->where('key', $key)->first();
        if (! $image) {
            $this->auditOperation($request, 'api.admin.review.reject', 'image_review', 'failed', [
                'target' => $key,
                'reason' => 'not_found',
            ], 'warning');

            return $this->fail('图片不存在');
        }

        $reviewer = $request->user();
        $image->review_status = ImageReviewStatus::Rejected;
        $image->review_reason = trim((string) $validated['review_reason']);
        $image->reviewed_at = now();
        $image->reviewed_by = $reviewer?->id;
        $image->save();

        $this->auditOperation($request, 'api.admin.review.reject', 'image_review', 'success', [
            'target' => $image->key,
            'review_status' => $image->review_status,
            'reviewed_by' => $image->reviewed_by,
            'review_reason' => $image->review_reason,
        ]);

        return $this->success('审核驳回', [
            'key' => $image->key,
            'review_status' => $image->review_status,
            'review_reason' => $image->review_reason,
            'reviewed_at' => optional($image->reviewed_at)->toDateTimeString(),
            'reviewed_by' => $image->reviewed_by,
        ]);
    }

    private function ensureAdmin(Request $request): ?Response
    {
        $user = $request->user();
        if (! $user || ! $user->is_adminer) {
            $this->auditOperation($request, 'api.admin.review.access', 'image_review', 'failed', [
                'reason' => 'forbidden',
            ], 'warning');

            return $this->fail('无权限操作');
        }

        return null;
    }
}
