<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class GroupController extends Controller
{
    protected array $extensions = ['jpeg', 'jpg', 'png', 'gif', 'tif', 'bmp', 'ico', 'psd', 'webp'];

    public function index(Request $request): View
    {
        $groups = Group::query()->when($request->query('keywords'), function (Builder $builder, $keywords) {
            $builder->where('name', 'like', "%{$keywords}%");
        })->withCount('users')->withCount('strategies')->latest()->paginate();
        return view('admin.group.index', compact('groups'));
    }

    public function add(): View
    {
        return view('admin.group.add', ['extensions' => $this->extensions]);
    }

    public function edit(Request $request): View
    {
        $group = Group::query()->findOrFail($request->route('id'));
        $extensions = $this->extensions;
        return view('admin.group.edit', compact('group', 'extensions'));
    }

    public function create(): Response
    {

    }

    public function update(): Response
    {

    }

    public function delete(Request $request): Response
    {

    }
}
