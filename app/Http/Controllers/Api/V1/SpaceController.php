<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Models\TeamMembership;
use App\Models\TeamSpace;
use App\Models\User;
use App\Services\TeamSpaceService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SpaceController extends Controller
{
    use AuditsOperations;

    public function index(Request $request, TeamSpaceService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $currentSpaceId = (int) $request->attributes->get('space_id', 0);
        $spaces = $service->listSpaces($user)->map(function ($space) use ($currentSpaceId) {
            return [
                'id' => (int) $space->id,
                'name' => (string) $space->name,
                'is_personal' => (bool) $space->is_personal,
                'role' => (string) $space->pivot->role,
                'is_current' => $currentSpaceId > 0 && (int) $space->id === $currentSpaceId,
                'owner_user_id' => (int) $space->owner_user_id,
            ];
        })->values();

        return $this->success('success', [
            'current_space_id' => $currentSpaceId,
            'spaces' => $spaces,
        ]);
    }

    public function switchContext(Request $request, TeamSpaceService $service): Response
    {
        /** @var User $user */
        $user = Auth::user();

        try {
            $validated = $request->validate([
                'space_id' => 'required|integer|min:1',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        $spaceId = (int) $validated['space_id'];
        if (! $service->isMember($user, $spaceId)) {
            $this->auditOperation($request, 'api.space.switch', 'space', 'failed', [
                'target' => $spaceId,
                'reason' => 'forbidden',
            ], 'warning');

            return $this->fail('无权限访问该空间');
        }

        $token = $user->currentAccessToken();
        if ($token) {
            $token->current_space_id = $spaceId;
            $token->save();
        }

        $request->attributes->set('space_id', $spaceId);

        $this->auditOperation($request, 'api.space.switch', 'space', 'success', [
            'target' => $spaceId,
        ]);

        return $this->success('切换成功', [
            'current_space_id' => $spaceId,
        ]);
    }

    public function members(Request $request, int $id): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $spaceId = (int) $id;

        $operatorMembership = TeamMembership::query()
            ->where('team_space_id', $spaceId)
            ->where('user_id', $user->id)
            ->first();
        if (! $operatorMembership || ! $operatorMembership->can('member.read')) {
            return $this->fail('无权限查看空间成员');
        }

        $space = TeamSpace::query()->find($spaceId);
        if (! $space) {
            return $this->fail('空间不存在');
        }

        $members = TeamMembership::query()
            ->where('team_space_id', $spaceId)
            ->with(['user:id,name,email'])
            ->orderBy('id')
            ->get()
            ->map(function (TeamMembership $membership) use ($user) {
                return [
                    'id' => (int) $membership->id,
                    'user_id' => (int) $membership->user_id,
                    'name' => (string) ($membership->user?->name ?: ''),
                    'email' => (string) ($membership->user?->email ?: ''),
                    'role' => (string) $membership->role,
                    'permissions' => $membership->resolvedPermissions(),
                    'is_self' => (int) $membership->user_id === (int) $user->id,
                ];
            })
            ->values();

        return $this->success('success', [
            'space' => [
                'id' => (int) $space->id,
                'name' => (string) $space->name,
            ],
            'operator' => [
                'user_id' => (int) $operatorMembership->user_id,
                'role' => (string) $operatorMembership->role,
                'permissions' => $operatorMembership->resolvedPermissions(),
            ],
            'members' => $members,
        ]);
    }

    public function updateMemberRole(Request $request, int $id, int $userId): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $spaceId = (int) $id;
        $targetUserId = (int) $userId;

        try {
            $validated = $request->validate([
                'role' => 'required|string|in:owner,admin,member',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        $operatorMembership = TeamMembership::query()
            ->where('team_space_id', $spaceId)
            ->where('user_id', $user->id)
            ->first();
        if (! $operatorMembership || ! $operatorMembership->can('member.update_role')) {
            return $this->fail('无权限更新成员角色');
        }

        $membership = TeamMembership::query()
            ->where('team_space_id', $spaceId)
            ->where('user_id', $targetUserId)
            ->first();
        if (! $membership) {
            return $this->fail('成员不存在');
        }

        $nextRole = (string) $validated['role'];
        if ($membership->role === TeamMembership::ROLE_OWNER) {
            return $this->fail('空间拥有者角色不可修改');
        }
        if ($nextRole === TeamMembership::ROLE_OWNER) {
            return $this->fail('不支持通过该接口提升为 owner');
        }

        $membership->role = $nextRole;
        $membership->permissions = TeamMembership::rolePermissions($nextRole);
        $membership->save();

        $this->auditOperation($request, 'api.space.member.update_role', 'space_member', 'success', [
            'target' => $membership->id,
            'space_id' => $spaceId,
            'target_user_id' => $targetUserId,
            'operator_user_id' => $user->id,
            'role' => $nextRole,
        ]);

        return $this->success('角色更新成功', [
            'space_id' => $spaceId,
            'member' => [
                'user_id' => (int) $membership->user_id,
                'role' => (string) $membership->role,
                'permissions' => $membership->resolvedPermissions(),
            ],
        ]);
    }
}
