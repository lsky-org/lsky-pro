<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function index(): View
    {
        /** @var User $user */
        $user = Auth::user();

        return view('images');
    }
}
