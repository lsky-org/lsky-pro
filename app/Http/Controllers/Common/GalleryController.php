<?php

namespace App\Http\Controllers\Common;

use App\Enums\ImagePermission;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\AlbumShare;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        return view('common.gallery');
    }

    /**
     * Gallery images (AJAX)
     */
    public function images(Request $request)
    {
        $user = $request->user();
        $albumId = $request->input('album_id');

        // Get shared album IDs: shared-to-me + shared-by-me (my albums that have shares)
        $sharedToMe = $user->sharedAlbums()->pluck('albums.id')->toArray();
        $sharedByMe = Album::where('user_id', $user->id)
            ->whereHas('shares')
            ->pluck('id')
            ->toArray();
        $sharedAlbumIds = array_unique(array_merge($sharedToMe, $sharedByMe));

        if (empty($sharedAlbumIds)) {
            return response()->json([
                'data' => [],
                'current_page' => 1,
                'last_page' => 1,
                'total' => 0,
            ]);
        }

        $query = Image::whereIn('album_id', $sharedAlbumIds)
            ->where('is_unhealthy', false);

        if ($albumId) {
            // Verify the user has access to this album
            if (!in_array((int)$albumId, $sharedAlbumIds)) {
                return response()->json(['message' => '无权访问此相册'], 403);
            }
            $query->where('album_id', $albumId);
        }

        // Keyword search
        if ($keyword = $request->input('keyword')) {
            $keywords = explode(',', $keyword);
            $query->where(function ($q) use ($keywords) {
                foreach ($keywords as $kw) {
                    $kw = trim($kw);
                    if ($kw) {
                        $q->orWhere('origin_name', 'like', "%{$kw}%")
                          ->orWhere('alias_name', 'like', "%{$kw}%");
                    }
                }
            });
        }

        // Order
        $order = $request->input('order', 'newest');
        switch ($order) {
            case 'earliest': $query->oldest(); break;
            case 'utmost': $query->orderByDesc('size'); break;
            case 'least': $query->orderBy('size'); break;
            default: $query->latest(); break;
        }

        $perPage = min((int) $request->input('per_page', 50), 200);
        $images = $query->paginate($perPage);

        // Transform to match the format expected by the frontend
        $items = $images->map(function ($image) {
            return [
                'id' => $image->id,
                'key' => $image->key,
                'filename' => $image->filename,
                'origin_name' => $image->origin_name,
                'alias_name' => $image->alias_name,
                'url' => $image->url,
                'thumb_url' => $image->thumb_url,
                'preview_url' => $image->preview_url,
                'mimetype' => $image->mimetype,
                'extension' => $image->extension,
                'width' => max($image->width, 200),
                'height' => max($image->height, 200),
                'size' => $image->size,
                'human_date' => $image->created_at->diffForHumans(),
                'date' => $image->created_at->format('Y-m-d H:i'),
                'document_viewer_url' => $image->document_viewer_url,
                'permission' => $image->permission,
            ];
        });

        $payload = [
            'data' => $items,
            'current_page' => $images->currentPage(),
            'last_page' => $images->lastPage(),
            'total' => $images->total(),
        ];

        return $this->cachedJson($request, $payload);
    }

    /**
     * Gallery shared albums tree
     */
    public function albums(Request $request)
    {
        $user = $request->user();

        // Shared-to-me
        $sharedToMe = $user->sharedAlbums()
            ->withCount('images')
            ->get(['albums.id', 'albums.name', 'albums.intro', 'albums.user_id']);

        // Shared-by-me (my albums that have any shares)
        $sharedByMe = Album::where('user_id', $user->id)
            ->whereHas('shares')
            ->withCount('images')
            ->get(['id', 'name', 'intro', 'user_id']);

        // Merge and deduplicate by album ID
        $merged = $sharedToMe->concat($sharedByMe)->unique('id')->values();

        $albums = $merged->map(function ($album) use ($user) {
            $isOwner = $album->user_id == $user->id;
            return [
                'id' => $album->id,
                'name' => $album->name,
                'intro' => $album->intro,
                'image_num' => $album->images_count,
                'is_owner' => $isOwner,
            ];
        });

        return $this->cachedJson($request, ['data' => $albums]);
    }

    /**
     * 返回带 ETag + Cache-Control 的 JSON 响应
     * 浏览器会自动缓存，后续请求带 If-None-Match，数据不变则返回 304
     */
    private function cachedJson(Request $request, array $data)
    {
        $json = json_encode($data);
        $etag = '"' . md5($json) . '"';

        // 浏览器带了 If-None-Match 且匹配 -> 304 Not Modified
        if ($request->header('If-None-Match') === $etag) {
            return response('', 304)
                ->header('ETag', $etag)
                ->header('Cache-Control', "private, no-cache");
        }

        return response($json, 200)
            ->header('Content-Type', 'application/json')
            ->header('ETag', $etag)
            ->header('Cache-Control', "private, no-cache");
    }
}
