<?php

namespace Database\Seeders;

use App\Enums\ConfigKey;
use App\Enums\GroupConfigKey;
use App\Enums\Mail\SmtpOption;
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
        $array = collect([
            ConfigKey::SiteName => 'Lsky Pro',
            ConfigKey::SiteKeywords => 'Lsky Pro,lsky,兰空图床',
            ConfigKey::SiteDescription => 'Lsky Pro, Your photo album on the cloud.',
            ConfigKey::IcpNo => '',
            ConfigKey::IsEnableRegistration => 1,
            ConfigKey::IsEnableGallery => 1,
            ConfigKey::IsAllowGuestUpload => 1,
            ConfigKey::UserInitialCapacity => 512000,
            ConfigKey::IsUserNeedVerify => 1,
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
            ConfigKey::GuestGroupConfigs => collect([
                GroupConfigKey::MaximumFileSize => 5120,
                GroupConfigKey::ConcurrentUploadNum => 3,
                GroupConfigKey::IsEnableReview => false,
                GroupConfigKey::IsEnableWatermark => false,
                GroupConfigKey::IsEnableOriginalProtection => false,
                GroupConfigKey::WatermarkConfigs => [
                    'driver' => 'font',
                    'drivers' => [
                        'font' => [
                            FontOption::Text => 'Lsky Pro',
                            FontOption::Position => 'bottom-right',
                            FontOption::Angle => 0,
                            FontOption::Size => 50,
                            FontOption::Font => '',
                            FontOption::Color => '#000000',
                            FontOption::X => 10,
                            FontOption::Y => 10,
                        ],
                        'image' => [
                            ImageOption::Image => '',
                            ImageOption::Position => 'bottom-right',
                            ImageOption::Opacity => 100,
                            ImageOption::Rotate => 0,
                            ImageOption::Width => 0,
                            ImageOption::Height => 0,
                            ImageOption::X => 10,
                            ImageOption::Y => 10,
                        ]
                    ],
                ],
                GroupConfigKey::LimitPerMinute => 20,
                GroupConfigKey::LimitPerHour => 100,
                GroupConfigKey::LimitPerDay => 300,
                GroupConfigKey::LimitPerWeek => 600,
                GroupConfigKey::LimitPerMonth => 999,
                GroupConfigKey::AcceptedFileSuffixes => ['jpg', 'jpeg', 'gif', 'png', 'apng', 'bmp', 'ico'],
                GroupConfigKey::PathNamingRule => '{Y}/{m}/{d}',
                GroupConfigKey::FileNamingRule => '{uniqid}',
            ])->toJson(),
        ])->transform(function ($value, $key) use ($date) {
            return ['name' => $key, 'value' => $value, 'updated_at' => $date, 'created_at' => $date];
        })->values()->toArray();
        DB::table('configs')->insert($array);
    }
}
