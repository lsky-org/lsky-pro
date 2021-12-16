<?php

namespace Tests\Unit;

use App\Enums\ConfigKey;
use App\Utils;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class UtilTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_config()
    {
        Cache::forget('configs');

        if (is_array(Utils::config())) {
            $this->assertTrue(true);
        }

        if (is_string(Utils::config(ConfigKey::SiteName))) {
            $this->assertTrue(true);
        }

        if (is_array(Utils::config(ConfigKey::MailConfigs))) {
            $this->assertTrue(true);
        }

        if (is_array(Utils::config(ConfigKey::MailConfigs.'.mailers'))) {
            $this->assertTrue(true);
        }
    }
}
