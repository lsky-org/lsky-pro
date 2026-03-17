<?php

namespace App\Http\Middleware;

use App\Models\TeamSpace;
use Closure;
use Illuminate\Http\Request;

class ResolveTeamSpaceContext
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if (! $user) {
            return $next($request);
        }

        $headerSpaceId = (int) $request->header('X-Space-Id', 0);
        if ($headerSpaceId > 0) {
            if (! $this->isUserInSpace((int) $user->id, $headerSpaceId)) {
                return response()->json([
                    'code' => 403,
                    'message' => 'Access denied for space context.',
                ], 403);
            }

            $request->attributes->set('space_id', $headerSpaceId);

            return $next($request);
        }

        $token = $user->currentAccessToken();
        if ($token && ! empty($token->current_space_id)) {
            $tokenSpaceId = (int) $token->current_space_id;
            if ($this->isUserInSpace((int) $user->id, $tokenSpaceId)) {
                $request->attributes->set('space_id', $tokenSpaceId);

                return $next($request);
            }
        }

        $personalSpaceId = (int) TeamSpace::query()
            ->where('owner_user_id', $user->id)
            ->where('is_personal', true)
            ->value('id');

        if ($personalSpaceId > 0) {
            $request->attributes->set('space_id', $personalSpaceId);
        }

        return $next($request);
    }

    private function isUserInSpace(int $userId, int $spaceId): bool
    {
        return TeamSpace::query()
            ->whereKey($spaceId)
            ->whereHas('memberships', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->exists();
    }
}
