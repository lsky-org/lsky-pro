<?php

namespace Test\Functional\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\DriveItemProxy;
use PHPUnit\Framework\TestCase;
use Test\Functional\Krizalys\Onedrive\Traits\AssertionsTrait;
use Test\Functional\Krizalys\Onedrive\Traits\ClientFactoryTrait;
use Test\Functional\Krizalys\Onedrive\Traits\ConfigurationTrait;
use Test\Functional\Krizalys\Onedrive\Traits\OnedriveSandboxTrait;

class DriveProxyTest extends TestCase
{
    use AssertionsTrait;
    use ClientFactoryTrait;
    use ConfigurationTrait;
    use OnedriveSandboxTrait;

    private static $defaultDrive;

    private static $root;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        $clientId = self::getConfig('CLIENT_ID');
        $username = self::getConfig('USERNAME');
        $password = self::getConfig('PASSWORD');
        $secret   = self::getConfig('SECRET');

        $client = self::createClient(
            $clientId,
            $username,
            $password,
            $secret
        );

        self::$defaultDrive = $client->getMyDrive();
        self::$root         = self::$defaultDrive->getRoot();
    }

    public function testGetDriveItemById()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $driveItem = self::$defaultDrive->getDriveItemById($driveItem->id);
            $this->assertDriveItemProxy($driveItem);
            $this->assertEquals('Test file', $driveItem->name);
        });
    }

    public function testGetDriveItemByPath()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $driveItem = self::$defaultDrive->getDriveItemByPath("/{$sandbox->name}/Test file");
            $this->assertDriveItemProxy($driveItem);
            $this->assertEquals('Test file', $driveItem->name);
        });
    }
}
