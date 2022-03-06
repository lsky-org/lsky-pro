<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Strategy;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class StrategyController extends Controller
{
    public function index(): Response
    {
        /** @var Group $group */
        $group = Auth::check() ? Auth::user()->group : Group::query()->where('is_guest', true)->first();
        $strategies = $group->strategies()->get()->each(fn (Strategy $strategy) => $strategy->setVisible(['id', 'name']));
        return $this->success('success', compact('strategies'));
    }
}
