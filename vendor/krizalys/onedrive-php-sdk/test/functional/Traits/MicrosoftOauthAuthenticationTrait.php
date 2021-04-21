<?php

namespace Test\Functional\Krizalys\Onedrive\Traits;

use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

trait MicrosoftOauthAuthenticationTrait
{
    private static $usernameElementId = 'i0116';

    private static $passwordElementId = 'i0118';

    private static $nextElementId = 'idSIButton9';

    private static function authenticate(
        WebDriver $webdriver,
        $authorizationRequestUri,
        $redirectUri,
        $username,
        $password
    ) {
        $webdriver->get($authorizationRequestUri);

        $nextElementLocator = WebDriverBy::id(self::$nextElementId);

        $usernameElementLocator = WebDriverBy::id(self::$usernameElementId);
        self::findElement($webdriver, $usernameElementLocator)->sendKeys($username);

        self::findElement($webdriver, $nextElementLocator)->click();

        $passwordElementLocator = WebDriverBy::id(self::$passwordElementId);
        self::findElement($webdriver, $passwordElementLocator)->sendKeys($password);

        self::findElement($webdriver, $nextElementLocator)->click();

        $expectedUri = preg_quote($redirectUri);
        $isMatching  = WebDriverExpectedCondition::urlMatches("|^$expectedUri|");
        $webdriver->wait()->until($isMatching);
    }

    private static function findElement(WebDriver $webdriver, WebDriverBy $locator)
    {
        $isPresent = WebDriverExpectedCondition::presenceOfElementLocated($locator);
        $webdriver->wait()->until($isPresent);

        $isVisible = WebDriverExpectedCondition::visibilityOfElementLocated($locator);
        $webdriver->wait()->until($isVisible);

        return $webdriver->findElement($locator);
    }
}
