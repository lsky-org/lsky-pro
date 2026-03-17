<?php

namespace App\Services;

use App\Models\TeamSpace;
use App\Models\TeamMembership;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class TeamSpaceService
{
    public function listSpaces(User $user): Collection
    {
        return $user->teamSpaces()
            ->select(['team_spaces.id', 'team_spaces.owner_user_id', 'team_spaces.name', 'team_spaces.is_personal', 'team_spaces.created_at', 'team_spaces.updated_at'])
            ->orderByDesc('team_spaces.is_personal')
            ->orderBy('team_spaces.id')
            ->get();
    }

    public function ensurePersonalSpace(User $user): TeamSpace
    {
        $space = TeamSpace::query()
            ->where('owner_user_id', $user->id)
            ->where('is_personal', true)
            ->first();

        if ($space) {
            return $space;
        }

        $space = TeamSpace::query()->create([
            'owner_user_id' => $user->id,
            'name' => $user->name.' 的个人空间',
            'is_personal' => true,
        ]);

        $user->teamMemberships()->create([
            'team_space_id' => $space->id,
            'role' => TeamMembership::ROLE_OWNER,
            'permissions' => TeamMembership::rolePermissions(TeamMembership::ROLE_OWNER),
        ]);

        return $space;
    }

    public function isMember(User $user, int $spaceId): bool
    {
        return $user->teamMemberships()->where('team_space_id', $spaceId)->exists();
    }

    public function resolveCurrentSpaceId(User $user, ?int $requestSpaceId = null): int
    {
        if ($requestSpaceId && $this->isMember($user, $requestSpaceId)) {
            return $requestSpaceId;
        }

        $token = $user->currentAccessToken();
        if ($token && ! empty($token->current_space_id)) {
            $spaceId = (int) $token->current_space_id;
            if ($spaceId > 0 && $this->isMember($user, $spaceId)) {
                return $spaceId;
            }
        }

        return (int) $this->ensurePersonalSpace($user)->id;
    }
}
