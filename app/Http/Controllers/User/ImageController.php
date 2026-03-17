<?php

namespace App\Http\Controllers\User;

use App\Enums\ImagePermission;
use App\Enums\ImageReviewStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRenameRequest;
use App\Models\Album;
use App\Models\Image;
use App\Models\ImageIntelligenceRecord;
use App\Models\User;
use App\Services\AiSearchService;
use App\Services\ImageIntelligence\ImageTagVisibilityBridgeService;
use App\Services\UserService;
use App\Utils;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Intervention\Image\Facades\Image as InterventionImage;

class ImageController extends Controller
{
    public function index(): View
    {
        return view('user.images');
    }

    public function images(
        Request $request,
        AiSearchService $searchService,
        ImageTagVisibilityBridgeService $tagVisibilityBridge
    ): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $allowedPerPage = [50, 100, 150, 200];
        $perPage = (int) $request->input('per_page', 50);
        if (! in_array($perPage, $allowedPerPage, true)) {
            $perPage = 50;
        }

        $query = $user->images()
            ->select([
                'images.id', 'images.user_id', 'images.album_id', 'images.group_id', 'images.strategy_id', 'images.key', 'images.path', 'images.name',
                'images.origin_name', 'images.alias_name', 'images.md5', 'images.size', 'images.width', 'images.height', 'images.extension',
                'images.permission', 'images.review_status', 'images.review_reason', 'images.reviewed_at', 'images.reviewed_by', 'images.ocr_text', 'images.created_at',
            ]);

        $searchMode = strtolower(trim((string) $request->query('search_mode', 'normal')));
        $q = trim((string) $request->query('q', ''));
        $decorateVisibleTags = $searchMode === 'ai' && $q !== '';

        if ($decorateVisibleTags) {
            $searchService->applyVisibilitySearch($query, $q);

            $query
                ->when($request->query('permission') ?: 'all', function ($builder, $permission) {
                    switch ($permission) {
                        case 'public':
                            $builder->where('permission', ImagePermission::Public);
                            break;
                        case 'private':
                            $builder->where('permission', ImagePermission::Private);
                            break;
                    }
                })
                ->when((int) $request->query('album_id'), function ($builder, $albumId) {
                    $builder->where('album_id', $albumId);
                }, function ($builder) {
                    $builder->whereNull('album_id');
                })
                ->when($request->query('review_status'), function ($builder, $reviewStatus) {
                    if (in_array($reviewStatus, ImageReviewStatus::values(), true)) {
                        $builder->where('review_status', $reviewStatus);
                    }
                });
        } else {
            $query->filter($request);
        }

        $images = $query
            // 列表仅依赖 group/strategy 的配置计算 URL，避免加载无关列。
            ->with([
                'group:id,configs',
                'strategy:id,key,configs',
                ...($decorateVisibleTags ? [
                    'tags:id,name',
                    'intelligenceTerms:id,image_id,source,term,normalized_term',
                ] : []),
            ])
            ->paginate($perPage);

        $images->getCollection()->each(function (Image $image) use ($decorateVisibleTags, $tagVisibilityBridge) {
            // 图片宽高过小会导致前端排版异常
            $image->width = max($image->width, 200);
            $image->height = max($image->height, 200);

            if ($decorateVisibleTags) {
                $tagVisibilityBridge->decorate($image);
            }

            $image->human_date = $image->created_at->diffForHumans();
            $image->date = $image->created_at->format('Y-m-d H:i:s');
            $visible = [
                'id', 'key', 'filename', 'url', 'thumb_url', 'preview_url', 'human_date', 'date', 'size', 'width', 'height', 'extension',
                'review_status', 'review_reason', 'reviewed_at', 'reviewed_by', 'links', 'ai_score',
            ];

            if ($decorateVisibleTags) {
                $visible = array_merge($visible, ['tags', 'manual_tags', 'intelligence_tags', 'visible_tags']);
            }

            $image->append(['url', 'thumb_url', 'preview_url', 'filename', 'links'])->setVisible($visible);
        });
        return $this->success('success', compact('images'));
    }

    public function image(Request $request, ImageTagVisibilityBridgeService $tagVisibilityBridge): Response
    {
        /** @var User $user */
        $user = Auth::user();
        /** @var Image $image */
        if (!$image = $user->images()
            ->with([
                'strategy:id,key,name,configs',
                'album:id,user_id,name',
                'tags:id,name',
                'intelligenceRecord:image_id,status,source,source_version,ocr_text,caption,summary,prompt_hint,labels,keywords,metadata,analyzed_at,last_error',
                'intelligenceTerms:id,image_id,source,term,normalized_term',
            ])->find($request->route('id'))) {
            return $this->fail('未找到该图片');
        }
        if ($image->strategy) {
            $image->strategy->setVisible(['name']);
        }
        if ($image->album) {
            $image->album->setVisible(['name']);
        }
        $tagVisibilityBridge->decorate($image);
        $image->setAttribute('intelligence', $this->buildIntelligencePayload($image->intelligenceRecord));
        $image->append(['url', 'thumb_url', 'preview_url', 'filename', 'links'])->setVisible([
            'id', 'key', 'filename', 'origin_name', 'url', 'thumb_url', 'preview_url', 'width', 'height', 'size', 'mimetype', 'md5', 'sha1',
            'permission', 'review_status', 'review_reason', 'reviewed_at', 'reviewed_by', 'strategy', 'album', 'uploaded_ip', 'links', 'created_at',
            'ocr_text', 'tags', 'manual_tags', 'intelligence_tags', 'visible_tags', 'intelligence', 'is_unhealthy',
        ]);
        return $this->success('success', compact('image'));
    }

    public function preview(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
        /** @var Image|null $image */
        $image = $user->images()
            ->with(['group:id,configs', 'strategy:id,key,configs'])
            ->find($request->route('id'));
        if (! $image) {
            abort(404);
        }

        $ext = strtolower((string) $image->extension);
        $previewExtensions = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'csv', 'ppt', 'pptx', 'raw', 'psd', 'tif', 'bmp', 'zip', 'rar'];
        if (! in_array($ext, $previewExtensions, true)) {
            return redirect($image->thumb_url);
        }

        try {
            $previewPath = $this->buildPreviewImage($image, $ext);
            if ($previewPath && file_exists($previewPath)) {
                return response()->file($previewPath, [
                    'Content-Type' => 'image/png',
                    'Cache-Control' => 'public, max-age=86400',
                ]);
            }
        } catch (\Throwable $e) {
            Utils::e($e, '生成文件预览时出现异常');
        }
        try {
            $fallbackPath = public_path(trim(config('app.thumbnail_path'), '/').'/previews/'.$image->md5.'.png');
            $this->renderTextPreviewPng($fallbackPath, [
                '预览生成失败',
                $image->filename ?: $image->origin_name,
                strtoupper((string) $image->extension),
            ]);
            if (file_exists($fallbackPath)) {
                return response()->file($fallbackPath, [
                    'Content-Type' => 'image/png',
                    'Cache-Control' => 'public, max-age=86400',
                ]);
            }
        } catch (\Throwable $e) {
            Utils::e($e, '生成预览兜底图时出现异常');
        }

        return redirect($image->url);
    }

    public function permission(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $permission = $request->input('permission');
        $permissions = ['public' => ImagePermission::Public, 'private' => ImagePermission::Private];
        if (!in_array($permission, array_keys($permissions))) {
            return $this->fail('设置失败');
        }
        $user->images()->whereIn('id', (array) $request->input('ids'))->update([
            'permission' => $permissions[$permission],
        ]);
        return $this->success('设置成功');
    }

    public function rename(ImageRenameRequest $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        /** @var Image $image */
        if ($image = $user->images()->find($request->input('id'))) {
            $image->alias_name = $request->input('name');
            $image->save();
        }

        return $this->success('重命名成功', $image->only('id', 'filename'));
    }

    public function movement(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        DB::transaction(function () use ($user, $request) {
            /** @var null|Album $album */
            $album = $user->albums()->find((int) $request->input('id'));
            $user->images()->whereIn('id', $request->input('selected'))->update([
                'album_id' => $album->id ?? null,
            ]);
            if ($album) {
                $album->image_num = $album->images()->count();
                $album->save();
            }
            if ($albumId = (int) $request->input('album_id')) {
                /** @var Album $originAlbum */
                $originAlbum = $user->albums()->find($albumId);
                $originAlbum->image_num = $originAlbum->images()->count();
                $originAlbum->save();
            }
        });
        return $this->success('移动成功');
    }

    public function delete(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        (new UserService())->deleteImages($request->all() ?: [], $user);
        return $this->success('删除成功');
    }

    /**
     * @return array<string, mixed>
     */
    private function buildIntelligencePayload(?ImageIntelligenceRecord $record): array
    {
        if (! $record) {
            return [
                'available' => false,
                'status' => 'missing',
                'source' => 'legacy',
                'mode' => 'legacy',
                'source_version' => null,
                'analyzed_at' => null,
                'fallback' => true,
                'fallback_reason' => 'missing_record',
                'provider' => null,
                'model' => null,
                'caption' => null,
                'summary' => null,
                'prompt_hint' => null,
                'ocr_text' => null,
                'labels' => [],
                'keywords' => [],
                'metadata' => [],
                'last_error' => null,
            ];
        }

        $metadata = is_array($record->metadata) ? $record->metadata : [];
        $fallback = (bool) ($metadata['fallback'] ?? false) || trim((string) $record->source) === 'metadata_placeholder';

        return [
            'available' => true,
            'status' => (string) ($record->status ?? ''),
            'source' => (string) ($record->source ?? ''),
            'mode' => $fallback
                ? 'placeholder'
                : (str_starts_with(trim((string) $record->source), 'ai_provider:') ? 'provider_backed' : 'intelligence'),
            'source_version' => $record->source_version ? (int) $record->source_version : null,
            'analyzed_at' => optional($record->analyzed_at)->toDateTimeString(),
            'fallback' => $fallback,
            'fallback_reason' => trim((string) ($metadata['fallback_reason'] ?? '')) ?: null,
            'provider' => trim((string) ($metadata['provider'] ?? '')) ?: null,
            'model' => trim((string) ($metadata['model'] ?? '')) ?: null,
            'caption' => $record->caption ? (string) $record->caption : null,
            'summary' => $record->summary ? (string) $record->summary : null,
            'prompt_hint' => $record->prompt_hint ? (string) $record->prompt_hint : null,
            'ocr_text' => $record->ocr_text ? (string) $record->ocr_text : null,
            'labels' => is_array($record->labels) ? array_values($record->labels) : [],
            'keywords' => is_array($record->keywords) ? array_values($record->keywords) : [],
            'metadata' => $metadata,
            'last_error' => $record->last_error ? (string) $record->last_error : null,
        ];
    }

    private function buildPreviewImage(Image $image, string $ext): ?string
    {
        $cacheDir = public_path(trim(config('app.thumbnail_path'), '/').'/previews');
        if (! is_dir($cacheDir)) {
            @mkdir($cacheDir, 0755, true);
        }

        $outputPath = $cacheDir.'/'.$image->md5.'.png';
        if (file_exists($outputPath)) {
            return $outputPath;
        }

        $tmpRoot = storage_path('app/tmp/previews');
        $tmpDir = $tmpRoot.'/'.$image->md5;
        if (! is_dir($tmpDir)) {
            @mkdir($tmpDir, 0755, true);
        }

        $sourcePath = $tmpDir.'/source.'.$ext;
        file_put_contents($sourcePath, $image->filesystem()->read($image->pathname));

        try {
            if ($ext === 'pdf') {
                $this->convertPdfFirstPageToPng($sourcePath, $outputPath);
            } elseif (in_array($ext, ['doc', 'docx', 'xls', 'xlsx', 'csv', 'ppt', 'pptx'], true)) {
                $pdfPath = $this->convertOfficeToPdf($sourcePath, $tmpDir);
                $this->convertPdfFirstPageToPng($pdfPath, $outputPath);
            } elseif ($ext === 'raw') {
                $ok = $this->convertRawToPng($sourcePath, $outputPath);
                if (! $ok) {
                    InterventionImage::make($sourcePath)->encode('png', 88)->save($outputPath);
                }
            } elseif (in_array($ext, ['zip', 'rar'], true)) {
                $this->renderArchiveIconPreviewPng($outputPath, $ext);
            } else {
                InterventionImage::make($sourcePath)->encode('png', 88)->save($outputPath);
            }
        } finally {
            @unlink($sourcePath);
        }

        return file_exists($outputPath) ? $outputPath : null;
    }

    private function convertOfficeToPdf(string $sourcePath, string $tmpDir): string
    {
        $cmd = sprintf(
            'soffice --headless --convert-to pdf --outdir %s %s 2>&1',
            escapeshellarg($tmpDir),
            escapeshellarg($sourcePath),
        );
        exec($cmd, $out, $status);
        if ($status !== 0) {
            throw new \RuntimeException('Office 转换预览失败');
        }

        $target = $tmpDir.'/'.pathinfo($sourcePath, PATHINFO_FILENAME).'.pdf';
        if (! file_exists($target)) {
            $files = glob($tmpDir.'/*.pdf') ?: [];
            $target = $files[0] ?? '';
        }

        if (! $target || ! file_exists($target)) {
            throw new \RuntimeException('Office 预览 PDF 未生成');
        }

        return $target;
    }

    private function convertPdfFirstPageToPng(string $pdfPath, string $outputPath): void
    {
        $cmd = sprintf(
            'gs -dSAFER -dBATCH -dNOPAUSE -sDEVICE=pngalpha -dFirstPage=1 -dLastPage=1 -r144 -o %s %s 2>&1',
            escapeshellarg($outputPath),
            escapeshellarg($pdfPath),
        );
        exec($cmd, $out, $status);
        if ($status !== 0 || ! file_exists($outputPath)) {
            throw new \RuntimeException('PDF 转换预览失败');
        }
    }

    private function convertRawToPng(string $rawPath, string $outputPath): bool
    {
        if (! function_exists('exif_thumbnail') || ! function_exists('imagecreatefromstring') || ! function_exists('imagepng')) {
            return false;
        }
        $thumb = @exif_thumbnail($rawPath, $w, $h, $type);
        if (! $thumb) {
            return false;
        }

        $im = @imagecreatefromstring($thumb);
        if (! $im) {
            return false;
        }

        $ok = imagepng($im, $outputPath, 7);
        imagedestroy($im);
        return (bool) $ok && file_exists($outputPath);
    }

    private function renderArchiveIconPreviewPng(string $outputPath, string $ext): void
    {
        $iconPath = public_path('static/app/images/file-icons/archive.png');
        if (! file_exists($iconPath)) {
            throw new \RuntimeException('压缩包图标资源不存在: '.$iconPath);
        }
        if (! is_dir(dirname($outputPath))) {
            @mkdir(dirname($outputPath), 0755, true);
        }
        if (! @copy($iconPath, $outputPath)) {
            throw new \RuntimeException('压缩包图标拷贝失败');
        }
    }

    private function renderTextPreviewPng(string $outputPath, array $lines): void
    {
        if (! class_exists(\Imagick::class)) {
            throw new \RuntimeException('Imagick 不可用，无法生成文本预览图');
        }

        $width = 1280;
        $lineHeight = 34;
        $padding = 36;
        $height = max(420, $padding * 2 + max(1, count($lines)) * $lineHeight);

        $image = new \Imagick();
        $image->newImage($width, $height, new \ImagickPixel('white'));
        $image->setImageFormat('png');

        $draw = new \ImagickDraw();
        $draw->setFillColor(new \ImagickPixel('#0f172a'));
        $draw->setFontSize(24);

        $y = $padding + 20;
        foreach ($lines as $line) {
            $image->annotateImage($draw, $padding, $y, 0, mb_substr((string) $line, 0, 150));
            $y += $lineHeight;
        }

        if (! is_dir(dirname($outputPath))) {
            @mkdir(dirname($outputPath), 0755, true);
        }
        $image->writeImage($outputPath);
        $image->clear();
        $image->destroy();
    }

}
