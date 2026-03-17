<?php

use App\Enums\ConfigKey;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        DB::table('configs')->updateOrInsert(
            ['name' => ConfigKey::UploadPipelineAsyncEnabled],
            ['value' => '0', 'updated_at' => $now, 'created_at' => $now]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('configs')->where('name', ConfigKey::UploadPipelineAsyncEnabled)->delete();
    }
};
