<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function index(Request $request): View|Response
    {
        /** @var User $user */
        $user = Auth::user();

        if ($request->method() === 'POST') {
            $images = $user->images()->latest()->paginate(40);
            $images->getCollection()->each(function (Image $image) {
                $image->human_date = $image->created_at->diffForHumans();
                $image->date = $image->created_at->format('Y-m-d H:i:s');
                $image->append(['url', 'filename'])->setVisible([
                    'id', 'filename', 'url', 'human_date', 'date', 'human_date'
                ]);
            });
            return $this->success('success', compact('images'));
        }

        return view('images');
    }
}
