<?php

namespace Database\Seeders;

use App\Enums\ConfigKey;
use App\Enums\Mail\SmtpOption;
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
        $array = collect([
            ConfigKey::SiteName => 'Lsky Pro',
            ConfigKey::SiteKeywords => 'Lsky Pro,lsky,兰空图床',
            ConfigKey::SiteDescription => 'Lsky Pro, Your photo album on the cloud.',
            ConfigKey::IcpNo => '',
            ConfigKey::IsEnableRegistration => 1,
            ConfigKey::IsEnableGallery => 1,
            ConfigKey::IsAllowGuestUpload => 1,
            ConfigKey::UserInitialCapacity => 512000,
            ConfigKey::MailConfigs => json_encode([
                'default' => 'smtp',
                'mailers' => [
                    SmtpOption::Host => '',
                    SmtpOption::Port => 25,
                    SmtpOption::Encryption => 'tls',
                    SmtpOption::Username => '',
                    SmtpOption::Password => '',
                    SmtpOption::Timeout => null,
                    SmtpOption::AuthMode => null,
                ],
            ]),
            ConfigKey::GuestGroupConfigs => Group::getDefaultConfig()->toJson(),
        ])->transform(function ($value, $key) use ($date) {
            return ['name' => $key, 'value' => $value, 'updated_at' => $date, 'created_at' => $date];
        })->values()->toArray();
        DB::table('configs')->insert($array);
    }
}
