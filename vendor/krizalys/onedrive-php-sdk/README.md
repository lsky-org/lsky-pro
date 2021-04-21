OneDrive SDK for PHP
====================

[![Latest Stable Version](https://poser.pugx.org/krizalys/onedrive-php-sdk/v/stable)](https://packagist.org/packages/krizalys/onedrive-php-sdk)
[![Total Downloads](https://poser.pugx.org/krizalys/onedrive-php-sdk/d/total.svg)](https://packagist.org/packages/krizalys/onedrive-php-sdk)
[![Build Status](https://travis-ci.org/krizalys/onedrive-php-sdk.svg?branch=master)](https://travis-ci.org/krizalys/onedrive-php-sdk)
[![Code Coverage](https://codecov.io/gh/krizalys/onedrive-php-sdk/branch/master/graph/badge.svg)](https://codecov.io/gh/krizalys/onedrive-php-sdk)
[![StyleCI](https://styleci.io/repos/23994489/shield?style=flat)](https://styleci.io/repos/23994489)

The **OneDrive SDK for PHP** is an open source library that allows [PHP][php]
applications to interact programmatically with the [OneDrive REST
API][onedrive-rest-api].

It supports operations such as creating, reading, updating, deleting (CRUD)
files and folders, as well as moving or copying them to other folders.

Requirements
------------

Using the OneDrive SDK for PHP requires the following:

* [PHP][php] 5.6 or newer ;
* [Composer][composer] or a manual install of the dependencies mentioned in
  `composer.json`.

### Testing

Running its functional tests also require:

* A OneDrive web application configured with `http://localhost:7777/` as its
  redirect URI ;
* A WebDriver server, for example the [Selenium's Java standalone
  server][selenium-server-standalone] ;
* A Chrome browser & ChromeDriver, and they must be usable by the WebDriver
  server.

Installation
------------

The recommended way to install OneDrive SDK for PHP is to install it using
[Composer][composer]:

```sh
composer require krizalys/onedrive-php-sdk
```

If you are not already using Composer in your PHP project, refer to [the
Composer documentation][composer] to learn how to set it up.

Quick start
-----------

To use the OneDrive SDK for PHP, you require a web application exposing a URL
initiating the authorization flow. Typically, this URL, referred to as your web
application's ***Redirect URI***, is a PHP script requesting an authorization
token. This token is required whenever your web application interacts with your
users' OneDrive contents and may be reused across multiple calls. An example of
such a web application is our [functional test suite][functional-test-suite].

You also require a OneDrive application. To register such an application, first
[sign in to Microsoft Azure][microsoft-azure-login], then visit [App
registrations][app-registration-portal] and add a *registration* for your
application. While registering your application, you need to set its *Redirect
URI*, explained above. **We currently only support *Web* redirect
URIs.**

Once created, your application is assigned an *Application (client) ID*,
referred to as its ***Client ID***. In *Certificate & secrets*, you also need to
add at least one ***Client secret***. **Warning: *Client Secrets* are similar to
passwords or private keys by allowing an application to identify as yours:
therefore, *Client Secrets* should be kept private.**

Once you have a *Redirect URI*, a *Client ID*, and a *Client Secret*, your web
application can start using the OneDrive SDK for PHP in three steps.

### Step 1: create your configuration

As you may need them from several scripts, we recommend saving your *Client ID*,
*Client secret* and *Redirect URI* in a configuration file, for example:

#### `config.php`

```php
<?php

return [
    /**
     * Your OneDrive client ID.
     */
    'ONEDRIVE_CLIENT_ID' => '<YOUR_CLIENT_ID>',

    /**
     * Your OneDrive client secret.
     */
    'ONEDRIVE_CLIENT_SECRET' => '<YOUR_CLIENT_SECRET>',

    /**
     * Your OneDrive redirect URI.
     */
    'ONEDRIVE_REDIRECT_URI' => 'http://your.domain.com/redirect.php',
];
```

### Step 2: direct your users to the sign in page

This script is responsible for, given a set of privileges, fetching a log in URL
from the OneDrive API. It needs to direct users to this URL to initiate their
log in and privilege granting process. The script should look like this:

#### `index.php`

```php
<?php

($config = include __DIR__ . '/config.php') or die('Configuration file not found');
require_once __DIR__ . '/vendor/autoload.php';

use Krizalys\Onedrive\Onedrive;

// Instantiates a OneDrive client bound to your OneDrive application.
$client = Onedrive::client($config['ONEDRIVE_CLIENT_ID']);

// Gets a log in URL with sufficient privileges from the OneDrive API.
$url = $client->getLogInUrl([
    'files.read',
    'files.read.all',
    'files.readwrite',
    'files.readwrite.all',
    'offline_access',
], $config['ONEDRIVE_REDIRECT_URI']);

session_start();

// Persist the OneDrive client' state for next API requests.
$_SESSION['onedrive.client.state'] = $client->getState();

// Redirect the user to the log in URL.
header('HTTP/1.1 302 Found', true, 302);
header("Location: $url");
```

### Step 3: get an OAuth access token

After the users follow this URL, they are required to sign into their
Microsoft account, and they are asked whether they agree to allow your web
application to access their OneDrive account.

If they do, they are redirected to your *Redirect URI* and a `code` is passed in
the query string of this URL. The script at this URL essentially:

1. Instantiates a `Client` from your configuration and the state from previous
   instantiations ;
2. Obtains an OAuth access token using `Client::obtainAccessToken()`,
   passing it the `code` received ;
3. Starts interacting with the files and folders stored in their OneDrive
   account, or delegates this responsibility to other scripts which in turn may
   spawn other `Client` instances from the same state.

It typically looks like this (replace `/path/to` by the appropriate values):

#### `redirect.php`

```php
<?php

($config = include __DIR__ . '/config.php') or die('Configuration file not found');
require_once __DIR__ . '/vendor/autoload.php';

use Krizalys\Onedrive\Onedrive;

// If we don't have a code in the query string (meaning that the user did not
// log in successfully or did not grant privileges requested), we cannot proceed
// in obtaining an access token.
if (!array_key_exists('code', $_GET)) {
    throw new \Exception('code undefined in $_GET');
}

session_start();

// Attempt to load the OneDrive client' state persisted from the previous
// request.
if (!array_key_exists('onedrive.client.state', $_SESSION)) {
    throw new \Exception('onedrive.client.state undefined in $_SESSION');
}

$client = Onedrive::client(
    $config['ONEDRIVE_CLIENT_ID'],
    [
        // Restore the previous state while instantiating this client to proceed
        // in obtaining an access token.
        'state' => $_SESSION['onedrive.client.state'],
    ]
);

// Obtain the token using the code received by the OneDrive API.
$client->obtainAccessToken($config['ONEDRIVE_CLIENT_SECRET'], $_GET['code']);

// Persist the OneDrive client' state for next API requests.
$_SESSION['onedrive.client.state'] = $client->getState();

// Past this point, you can start using file/folder functions from the SDK, eg:
$file = $client->getRoot()->upload('hello.txt', 'Hello World!');
echo $file->download();
// => Hello World!

$file->delete();
```

For details about classes and methods available, see the [API
reference][api-reference] or the [project page][onedrive-php-sdk] on
[Krizalys][krizalys].

Versioning
----------

OneDrive SDK for PHP adheres to [Semantic Versioning][semver]: we are committed
not to introduce breaking changes to the public API without incrementing the
major version number. We also try to document such changes in the
[changelog][changelog].

However, we only consider symbols marked with the `@api` annotation to be
part of the public API and subject to Semantic Versioning requirements. **Other
symbols are considered internal and may change or get removed without a major
version increment.** To avoid breaking changes, use only symbols from the public
API in your code.

Testing
-------

To run the functional test suite:

1. Set your application configuration at `test/functional/config.php` ;
2. Run your WebDriver server, for example:

   ```sh
   java -jar selenium-server-standalone-3.141.59.jar
   ```

3. Run the functional test suite (it assumes that WebDriver listening on port
   4444):

   ```sh
   vendor/bin/phpunit --configuration test --testsuite 'Functional tests' --bootstrap test/functional/bootstrap.php
   ```

4. Repeat step 3 as needed.

License
-------

The OneDrive SDK for PHP is licensed under the [3-Clause
BSD License][bsd-3-clause].

Credits
-------

The OneDrive SDK for PHP is developed and maintained by Christophe Vidal.

[php]:                        http://php.net/
[onedrive-rest-api]:          https://docs.microsoft.com/en-us/onedrive/developer/rest-api/?view=odsp-graph-online
[composer]:                   https://getcomposer.org/
[selenium-server-standalone]: http://selenium-release.storage.googleapis.com/index.html
[functional-test-suite]:      https://github.com/krizalys/onedrive-php-sdk/tree/readme/test/functional
[microsoft-azure-login]:      https://login.microsoftonline.com/
[app-registration-portal]:    https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps/ApplicationsListBlade
[api-reference]:              https://github.com/krizalys/onedrive-php-sdk/wiki/ApiIndex
[onedrive-php-sdk]:           http://www.krizalys.com/software/onedrive-php-sdk
[krizalys]:                   http://www.krizalys.com/
[semver]:                     https://semver.org/
[changelog]:                  https://github.com/krizalys/onedrive-php-sdk/blob/master/CHANGELOG.md
[bsd-3-clause]:               https://opensource.org/licenses/BSD-3-Clause
