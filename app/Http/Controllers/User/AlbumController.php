<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    public function albums(): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $albums = $user->albums()->latest()->paginate(40);
        $albums->getCollection()->each(function (Album $album) {
            $album->setVisible(['id', 'name', 'intro', 'image_num']);
        });
        return $this->success('success', compact('albums'));
    }

    public function create(AlbumRequest $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        DB::transaction(function () use ($user, $request) {
            $user->albums()->create(array_filter($request->validated()));
            $user->album_num = $user->albums()->count();
            $user->save();
        });

        return $this->success('创建成功');
    }

    public function update(AlbumRequest $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $album = $user->albums()->find($request->route('id'));
        if (is_null($album)) {
            return $this->fail('不存在的相册');
        }
        $album->update(array_filter($request->validated()));
        return $this->success('修改成功');
    }

    public function delete(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        /** @var Album|null $album */
        $album = $user->albums()->find($request->route('id'));
        if (is_null($album)) {
            return $this->fail('不存在的相册');
        }
        DB::transaction(function () use ($user, $album) {
            $album->images()->update(['album_id' => null]);
            $album->delete();
            $user->album_num = $user->albums()->count();
            $user->save();
        });
        return $this->success('删除成功');
    }
}
