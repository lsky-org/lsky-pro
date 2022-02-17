<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function index(Request $request): View
    {
        $statuses = [];
        $images = Image::query()->with('user')->latest()->paginate(40);
        return view('admin.image.index', compact('images', 'statuses'));
    }

    public function update(): Response
    {
        return $this->success();
    }

    public function delete(): Response
    {
        return $this->success();
    }
}
