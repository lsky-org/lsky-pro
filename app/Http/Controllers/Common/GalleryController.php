<?php

namespace App\Http\Controllers\Common;

use App\Enums\ConfigKey;
use App\Enums\ImagePermission;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Utils;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function __construct()
    {
        if (! Utils::config(ConfigKey::IsEnableGallery)) {
            abort(404);
        }
    }

    public function index(): View
    {
        $images = Image::query()
            ->with('user')
            ->where('is_unhealthy', false)
            ->where('permission', ImagePermission::Public)
            ->latest()
            ->simplePaginate(40);
        return view('common.gallery', compact('images'));
    }
}
