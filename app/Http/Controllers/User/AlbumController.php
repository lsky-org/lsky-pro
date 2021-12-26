<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function albums(Request $request): Response
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
        if ($user->albums()->create(array_filter($request->validated()))) {
            return $this->success('创建成功');
        }
        return $this->error('创建失败');
    }
}
