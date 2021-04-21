<?php

namespace Test\Functional\Krizalys\Onedrive\Traits;

use Krizalys\Onedrive\Onedrive;

trait ClientFactoryTrait
{
    use OauthAuthorizationTrait;

    private static function createClient($clientId, $username, $password, $secret)
    {
        $client = Onedrive::client($clientId);
        $values = self::authorize($client, $username, $password, null);

        if (!array_key_exists('code', $values)) {
            throw new \Exception();
        }

        $code = $values['code'];
        $client->obtainAccessToken($secret, $code);

        return $client;
    }
}
