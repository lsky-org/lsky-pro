<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class TokenController extends Controller
{
    public function store(Request $request): Response
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User|null $user */
        $user = User::query()->where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return $this->fail('The email address or password is incorrect.');
        }

        $token = $user->createToken($user->email)->plainTextToken;

        return $this->success('success', compact('token'));
    }

    public function clear(): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $user->tokens()->delete();
        return $this->success();
    }
}
