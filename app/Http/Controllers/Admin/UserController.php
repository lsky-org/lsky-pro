<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->query('status');
        $users = User::query()->when($status > -1, function (Builder $builder) use ($status) {
            $builder->where('status', $status);
        })->when($request->query('keywords'), function (Builder $builder, $keywords) {
            $builder->whereRaw("concat(name, email) like ?",["%{$keywords}%"]);
        })->with('group')->withSum('images', 'size')->latest()->paginate();
        $statuses = [-1 => '全部', 1 => '正常', 0 => '冻结'];
        return view('admin.user.index', compact('users', 'statuses'));
    }
}
