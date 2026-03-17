<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\AlbumShare;
use App\Models\User;
use Illuminate\Http\Request;

class AlbumShareController extends Controller
{
    /**
     * List shares for an album
     */
    public function index(Request $request, $albumId)
    {
        $album = Album::findOrFail($albumId);
        $shares = $album->shares()
            ->with('user:id,name,email')
            ->with('sharedBy:id,name')
            ->get();
        return response()->json(['data' => $shares]);
    }

    /**
     * Share album with a user
     */
    public function store(Request $request, $albumId)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'permission' => 'in:view,download',
        ]);

        $album = Album::findOrFail($albumId);

        // Don't share with the album owner
        if ($album->user_id == $request->user_id) {
            return response()->json(['message' => '不能共享给相册所有者'], 422);
        }

        $share = AlbumShare::updateOrCreate(
            ['album_id' => $albumId, 'user_id' => $request->user_id],
            ['shared_by' => $request->user()->id, 'permission' => $request->input('permission', 'view')]
        );

        return response()->json(['data' => $share, 'message' => '共享成功']);
    }

    /**
     * Remove share
     */
    public function destroy(Request $request, $albumId, $userId)
    {
        AlbumShare::where('album_id', $albumId)
            ->where('user_id', $userId)
            ->delete();

        return response()->json(['message' => '已取消共享']);
    }

    /**
     * List all users (for share dialog)
     */
    public function users(Request $request)
    {
        $keyword = $request->input('keyword', '');
        $query = User::query()->select('id', 'name', 'email');
        if ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%")
                  ->orWhere('email', 'like', "%{$keyword}%");
            });
        }
        $users = $query->orderBy('name')->limit(50)->get();
        return response()->json(['data' => $users]);
    }
}
