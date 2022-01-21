<?php

namespace Database\Seeders;

use App\Enums\ConfigKey;
use App\Enums\GroupConfigKey;
use App\Enums\Mail\SmtpOption;
use App\Enums\Scan\AliyunOption;
use App\Enums\Watermark\FontOption;
use App\Enums\Watermark\ImageOption;
use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
