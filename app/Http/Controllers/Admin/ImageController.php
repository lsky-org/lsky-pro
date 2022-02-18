<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Services\UserService;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function index(Request $request): View
    {
        $statuses = [];
        $images = Image::query()->with(['user' => function (BelongsTo $belongsTo) {
            $belongsTo->withSum('images', 'size');
        }, 'album', 'group', 'strategy'])->latest()->paginate(40);
        $images->getCollection()->each(function (Image $image) {
            $image->append('url', 'pathname');
            $image->album?->setVisible(['name']);
            $image->group?->setVisible(['name']);
            $image->strategy?->setVisible(['name']);
        });
        return view('admin.image.index', compact('images', 'statuses'));
    }

    public function update(): Response
    {
        return $this->success();
    }

    public function delete(Request $request): Response
    {
        /** @var Image $image */
        $image = Image::with('user', 'strategy', 'album')->find($request->route('id'));
        (new UserService())->deleteImages([$image->id]);
        return $this->success('删除成功');
    }
}
