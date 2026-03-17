<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $user->used_capacity = $user->images()->sum('size') + 0;
        $user->setVisible([
            'name', 'avatar', 'email', 'capacity', 'used_capacity', 'url', 'image_num', 'album_num', 'registered_ip'
        ]);
        return $this->success('success', $user);
    }
}
