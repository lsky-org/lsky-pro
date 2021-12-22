<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function index(): View
    {
        return view('images');
    }

    public function images(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();

        $images = $user->images()->latest()->paginate(40);
        $images->getCollection()->each(function (Image $image) {
            $image->human_date = $image->created_at->diffForHumans();
            $image->date = $image->created_at->format('Y-m-d H:i:s');
            $image->append(['url', 'filename'])->setVisible([
                'id', 'filename', 'url', 'human_date', 'date', 'human_date', 'width', 'height'
            ]);
        });
        return $this->success('success', compact('images'));
    }

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
}
