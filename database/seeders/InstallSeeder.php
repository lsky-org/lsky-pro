<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class InstallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $array = collect(config('convention.app'))->transform(function ($value, $key) use ($date) {
            return [
                'name' => $key,
                'value' => is_array($value) ? json_encode($value, JSON_UNESCAPED_UNICODE) : $value,
                'updated_at' => $date,
                'created_at' => $date,
            ];
        })->values()->toArray();
        DB::table('configs')->insert($array);
    }
}
