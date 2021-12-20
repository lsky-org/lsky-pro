<?php

namespace Test\Functional\Krizalys\Onedrive\Traits;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

trait WebdriverTrait
{
    private static $arguments = [
        '--headless',
        '--incognito',
    ];

    private static function withWebdriver($webdriverBaseUri, callable $callback)
    {
        $opts = new ChromeOptions();
        $opts->addArguments(self::$arguments);
        $caps = DesiredCapabilities::chrome();
        $caps->setCapability(ChromeOptions::CAPABILITY, $opts);
        $webdriver = RemoteWebDriver::create($webdriverBaseUri, $caps);

        try {
            return $callback($webdriver);
        } catch (\Exception $exception) {
            throw $exception;
        } finally {
            $webdriver->quit();
        }
    }
}
