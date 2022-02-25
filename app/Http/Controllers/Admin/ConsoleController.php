<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use App\Utils;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class ConsoleController extends Controller
{
    public function index(): View
    {
        $carbon = Carbon::now();

        $numbers = [
            'today' => Image::query()->whereBetween('created_at', [$carbon->startOfDay(), $carbon->endOfDay()])->count(),
            'yesterday' => Image::query()->whereBetween('created_at', [$carbon->yesterday()->startOfDay(), $carbon->yesterday()->endOfDay()])->count(),
            'week' => Image::query()->whereBetween('created_at', [$carbon->startOfWeek(), $carbon->endOfWeek()])->count(),
            'month' => Image::query()->whereBetween('created_at', [$carbon->startOfMonth(), $carbon->endOfMonth()])->count(),
        ];

        $start = Carbon::now()->parse('-30 day')->startOfDay();
        $end = Carbon::now()->endOfDay();
        $dates = Utils::makeDateRange($start->format('Y-m-d'), $end->format('Y-m-d'));

        $fields = ['游客上传', '用户上传', '新用户'];

        $images = Image::query()
            ->whereBetween('created_at', [$start, $end])
            ->get()
            ->transform(function (Image $image) {
                $image['date'] = $image->created_at->format('Y-m-d');
                return $image;
            })->groupBy('date');

        $users = User::query()
            ->whereBetween('created_at', [$start, $end])
            ->get()
            ->transform(function (User $user) {
                $user['date'] = $user->created_at->format('Y-m-d');
                return $user;
            })->groupBy('date');

        $data = collect(array_map(fn() => 0, array_flip($dates)));
        $array = [
            $data->merge($images->map(fn(Collection $items) => $items->whereNull('user_id')->count())),
            $data->merge($images->map(fn(Collection $items) => $items->whereNotNull('user_id')->count())),
            $data->merge($users->map(fn(Collection $items) => $items->count())),
        ];
        $datasets = collect($fields)->transform(function ($item, $index) use ($dates, $array) {
            return [
                'name' => $item,
                'type' => 'line',
                'data' => $array[$index]->values(),
            ];
        });

        return view('admin.console.index', compact('fields', 'numbers', 'dates', 'datasets'));
    }
}
