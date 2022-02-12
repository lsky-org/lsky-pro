<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use App\Utils;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class ConsoleController extends Controller
{
    public function index(): View
    {
        $carbon = Carbon::now();
        $numbers = Image::query()->selectRaw(collect([
            "count(if(created_at between '{$carbon->startOfDay()}' and '{$carbon->endOfDay()}',1,null)) as today",
            "count(if(created_at between '{$carbon->yesterday()->startOfDay()}' and '{$carbon->yesterday()->endOfDay()}',1,null)) as yesterday",
            "count(if(created_at between '{$carbon->startOfWeek()}' and '{$carbon->endOfWeek()}',1,null)) as week",
            "count(if(created_at between '{$carbon->startOfMonth()}' and '{$carbon->endOfMonth()}',1,null)) as month",
        ])->implode(','))->first();

        $start = Carbon::now()->parse('-30 day')->format('Y-m-d');
        $end = Carbon::now()->format('Y-m-d');
        $dates = Utils::makeDateRange($start, $end);

        $fields = ['游客上传', '用户上传', '新用户'];

        $images = Image::query()
            ->selectRaw(collect([
                "count(if(user_id is null,1,null)) as guest_num",
                "count(if(user_id is not null,1,null)) as user_num",
                "date_format(created_at, '%Y-%m-%d') as date"
            ])->implode(','))
            ->whereBetween('created_at', [$start, $end])
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $users = User::query()
            ->selectRaw(collect([
                "count(*) as num",
                "date_format(created_at, '%Y-%m-%d') as date"
            ])->implode(','))
            ->whereBetween('created_at', [$start, $end])
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $data = collect(array_map(fn () => 0, array_flip($dates)));
        $array = [
            $data->merge($images->pluck('guest_num', 'date')),
            $data->merge($images->pluck('user_num', 'date')),
            $data->merge($users->pluck('num', 'date')),
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
