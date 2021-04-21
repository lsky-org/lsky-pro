Change log
==========

[2.7.0] - 2021-02-12
--------------------

### Changed

- Unified PHPUnit configuration files into a single configuration.
- Refactoring.

[2.6.0] - 2020-02-02
--------------------

### Added

- Coding style documentation.
- Support for PHP 7.4.

### Changed

- Reduced unit tests interdependencies.
- Revised the CONTRIBUTING file and now using it as pull request template.
- Removed unused stubbed methods.
- `\Krizalys\Onedrive\Proxy\DriveItemProxy::startUpload()`: The `'type'` option
  is ignored by OneDrive & reports a notice. Omit this option.
- `\Krizalys\Onedrive\Proxy\DriveItemProxy::upload()`: The `'contentType'`
  option is ignored by OneDrive & reports a notice. Omit this option.
- Updated Krizalys\Onedrive\Proxy\ImageProxy.
- Updated Krizalys\Onedrive\Proxy\PhotoProxy.
- Updated Krizalys\Onedrive\Proxy\AudioProxy.
- Updated Krizalys\Onedrive\Proxy\VideoProxy.
- Updated dependency on facebook/webdriver to php-webdriver/webdriver.

[2.5.1] - 2019-10-06
--------------------

### Changed

- Using full error reporting when running test suites.
- Removed the use of the Yoda style.
- Refactored functional tests.

### Fixed

- All PHP notices.
- Passing a state via `Krizalys\Onedrive\Client::__construct()`' `'state'`
  option did not set properly the Microsoft Graph access token.

[2.5.0] - 2019-09-23
--------------------

### Added

- Support for redirect URI state: see `$state` parameter in
  `Krizalys\Onedrive\Client::getLogInUrl()`.
- Support for sending invites: see
  `Krizalys\Onedrive\Proxy\DriveItemProxy::invite()`.
- `Krizalys\Onedrive\Proxy\HashesProxy`.
- `Krizalys\Onedrive\Proxy\FolderViewProxy`.

### Changed

- Refactored parameter definition support.
- Updated `Krizalys\Onedrive\Proxy\FileProxy`.
- Updated `Krizalys\Onedrive\Proxy\FolderProxy`.
- Updated `Krizalys\Onedrive\Proxy\FileSystemInfoProxy`.
- Updated `Krizalys\Onedrive\Proxy\PackageProxy`.
- Updated `Krizalys\Onedrive\Proxy\SharedProxy`.
- Updated `Krizalys\Onedrive\Proxy\SharepointIdsProxy`.
- Updated `Krizalys\Onedrive\Proxy\RemoteItemProxy`.

[2.4.2] - 2019-09-16
--------------------

### Added

- Composer scripts.

### Changed

- Updated test suites to support newer PHPUnit versions.
- Upgraded to PHPUnit 7 on compatible platforms.

### Fixed

- `Krizalys\Onedrive\Serializer\ScalarSerializer::serialize()`: did not
  serialize boolean values as expected.

[2.4.1] - 2019-09-08
--------------------

### Added

- Some functional test assertions.

### Changed

- Deprecated `Krizalys\Onedrive\ConflictBehavior` in favor of
  `Krizalys\Onedrive\Constant\ConflictBehavior`.
- Refactored functional tests.
- Made functional tests less flaky.

[2.4.0] - 2019-09-01
--------------------

### Added

- Support for creating sharing links to drive items: see
  `Krizalys\Onedrive\Proxy\DriveItemProxy::createLink()`
- Support for conflict behavior.
- Support for description in
  `Krizalys\Onedrive\Proxy\DriveItemProxy::startUpload()`.
- Class constants: `Krizalys\Onedrive\Constant\AccessTokenStatus`,
  `Krizalys\Onedrive\Constant\DriveType`,
  `Krizalys\Onedrive\Constant\QuotaStatus` and
  `Krizalys\Onedrive\Constant\SpecialFolderName`.

### Changed

- Modularized the functional test suite.
- Improved usefulness of some assertions in unit tests.

### Deprecated

- `Krizalys\Onedrive\Proxy\DriveItemProxy::upload()`: The `'Content-Type'`
  option is now deprecated & reports a notice. Use `'contentType'` instead.

[2.3.0] - 2019-08-18
--------------------

### Added

- More PHPDoc details & examples.
- A facade to expose main OneDrive functionality while hiding implementation
  details: see `Krizalys\Onedrive\Onedrive`
- `Krizalys\Onedrive\Proxy\DriveItemProxy::getChildren()` now accepts an
  optional `$options` parameter to refine the retrieved result set.
- `Krizalys\Onedrive\Proxy\DriveItemProxy::upload()`: the `'Content-Type'`
  option is now deprecated & reports a notice; use `'contentType'` instead.

### Changed

- `Krizalys\Onedrive\Client::__construct()`: not passing a
  `Krizalys\Onedrive\Parameter\DriveItemParameterDirectorInterface` instance via
  `$driveItemParameterDirector` is deprecated & reports a notice. Pass this
  parameter.

[2.2.0] - 2019-08-07
--------------------

### Added

- Support for retrieving drive items by path: see
  `Krizalys\Onedrive\Client::getDriveItemByPath()`
- Support for retrieving drive items by path from a drive: see
  `Krizalys\Onedrive\Proxy\DriveProxy::getDriveItemByPath()`
- Support for retrieving drive items by ID from a drive: see
  `Krizalys\Onedrive\Proxy\DriveProxy::getDriveItemById()`
- Complete PHPDoc on all public & maintained interfaces.
- Online [API reference][api-reference].
- Some unit test cases.
- Messages to all exceptions.

### Deprecated

- `Krizalys\Onedrive\Client::getDriveItemById()`: the $driveId argument is
  now deprecated. Omit it to retrieve a drive item by ID from the default drive,
  or use `Krizalys\Onedrive\Proxy\DriveProxy::getDriveItemById()` to retrieve a
  drive item by ID from a given drive.

[2.1.2] - 2019-07-21
--------------------

### Fixed

- `Krizalys\Onedrive\Client::renewAccessToken()`: was not updating the access
  token on its Microsoft Graph client.
- `Krizalys\Onedrive\Proxy\DriveItem::download()`: was treating the response
  obtained from executing its request as a `Microsoft\Graph\Http\GraphResponse`;
  it is always a `GuzzleHttp\Psr7\Stream` since `1.7.0`.

[2.1.1] - 2019-03-24
--------------------

### Fixed

- `Krizalys\Onedrive\Proxy\UploadSessionProxy::complete()`: was ignoring the
  `range_size` option.

[2.1.0] - 2019-03-13
--------------------

### Added

- Support for large file uploads.

### Changed

- Deprecated usages are now reported using `trigger_error`; A
  `Psr\Log\LoggerInterface` instance is not needed anymore.
- `Krizalys\Onedrive\Client::__construct()`: passing a logger instance via
  `$logger` is now deprecated & reports a notice. Omit this parameter, or pass
  `null` or options instead.

### Fixed

- `composer install` was failing on platforms without PHP's Zip extension, such
as the official PHP Docker image.

[2.0.2] - 2019-02-23
--------------------

### Added

- `Krizalys\Onedrive\Proxy\BaseItemVersionProxy`.
- `Krizalys\Onedrive\Proxy\DriveItemVersionProxy`.
- `Krizalys\Onedrive\Proxy\ItemReferenceProxy::path`.
- Some unit test cases.
- Some functional test cases.

### Changed

- `Krizalys\Onedrive\Proxy\DriveItem::versions`: returns an array of
  `Krizalys\Onedrive\Proxy\DriveItemVersionProxy` instances.
- `Krizalys\Onedrive\Proxy\SharePointIdsProxy`: renamed into
  `SharepointIdsProxy` to match its Microsoft Graph model.

### Fixed

- `Krizalys\Onedrive\Proxy\DriveItemProxy::createFolder()` was throwing an
  exception when a folder with the same name already existed despite the
  conflict behavior being set to `replace`.
- `Krizalys\Onedrive\Proxy\DriveItemProxy::upload()` was throwing an exception
  when a file with the same name already existed despite the conflict behavior
  being set to `replace`.
- `Krizalys\Onedrive\Proxy\BaseItemProxy::lastModifiedByUser` was causing a
  fatal error.
- `Krizalys\Onedrive\Proxy\SystemFacetProxy::__construct()` was causing a fatal
  error.

[2.0.1] - 2018-11-11
--------------------

### Added

- Some unit test cases.

### Fixed

- `Krizalys\Onedrive\Client::renewAccessToken()` was not setting its instance'
  token data as expected.
- `Krizalys\Onedrive\Proxy\DriveProxy::getRoot()` was sending a collection
  request instead of a normal request.

[2.0.0] - 2018-11-01
--------------------

### Added

- Support for logging, using [monolog/monolog][monolog] by default.
- Additional functional test cases.

### Changed

- License: GNU General Public License v3.0 => BSD 3-Clause License.
- `Krizalys\Onedrive\Client::createFolder()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::createFile()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::createFile()`: `$content` is automatically closed
  if it is a resource.
- `Krizalys\Onedrive\Client::fetchDriveItem()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::fetchRoot()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::fetchCameraRoll()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::fetchDocs()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::fetchPics()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::fetchProperties()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::fetchDriveItems()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::updateDriveItem()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::moveDriveItem()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::copyFile()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::deleteDriveItem()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::fetchQuota()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::fetchRecentDocs()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Client::fetchShared()`: deprecated & logs a warning.
- `Krizalys\Onedrive\DriveItem::move()`: deprecated & logs a warning.
- `Krizalys\Onedrive\File::fetchContent()`: deprecated & logs a warning.
- `Krizalys\Onedrive\File::copy()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Folder::fetchDriveItems()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Folder::fetchChildDriveItems()`: deprecated & logs a
  warning.
- `Krizalys\Onedrive\Folder::createFolder()`: deprecated & logs a warning.
- `Krizalys\Onedrive\Folder::createFile()`: deprecated & logs a warning.

### Removed

- Support for PHP 5.4 and PHP 5.5.
- Example application.
- `Krizalys\Onedrive\Folder::fetchDescendantDriveItems()`.
- `Krizalys\Onedrive\Client::apiDelete()`.
- `Krizalys\Onedrive\Client::apiPost()`.
- `Krizalys\Onedrive\Client::apiPut()`.
- `Krizalys\Onedrive\Client::apiMove()`.
- `Krizalys\Onedrive\Client::apiCopy()`.
- `Krizalys\Onedrive\Client::fetchPublicDocs`.
- `Krizalys\Onedrive\Client::fetchAccountInfo`.

[1.2.0] - 2017-12-09
--------------------

### Added

- Support for PHP 7.1.
- Support for PHP 7.2.
- Functional test suite.

[1.1.1] - 2017-03-26
--------------------

### Fixed

- Support for SSL.

[1.1.0] - 2016-07-10
--------------------

### Added

- Support for refresh tokens.
- Support for multiple naming conflict behaviors when uploading files.
- Support for multiple PHP stream back ends when uploading files.
- Standalone autoloader.
- Unit test suite & code coverage.

### Removed

- Support for PHP 5.3.

[1.0.1] - 2017-03-26
--------------------

### Fixed

- Support for SSL.

[unreleased]:    https://github.com/krizalys/onedrive-php-sdk/compare/2.7.0...HEAD
[2.7.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.6.0...2.7.0
[2.6.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.5.1...2.6.0
[2.5.1]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.5.0...2.5.1
[2.5.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.4.2...2.5.0
[2.4.2]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.4.1...2.4.2
[2.4.1]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.4.0...2.4.1
[2.4.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.3.0...2.4.0
[2.3.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.2.0...2.3.0
[2.2.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.1.2...2.2.0
[2.1.2]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.1.1...2.1.2
[2.1.1]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.1.0...2.1.1
[2.1.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.0.2...2.1.0
[2.0.2]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.0.1...2.0.2
[2.0.1]:         https://github.com/krizalys/onedrive-php-sdk/compare/2.0.0...2.0.1
[2.0.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/1.2.0...2.0.0
[1.2.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/1.1.1...1.2.0
[1.1.1]:         https://github.com/krizalys/onedrive-php-sdk/compare/1.1.0...1.1.1
[1.1.0]:         https://github.com/krizalys/onedrive-php-sdk/compare/1.0.0...1.1.0
[1.0.1]:         https://github.com/krizalys/onedrive-php-sdk/compare/1.0.0...1.0.1
[api-reference]: https://github.com/krizalys/onedrive-php-sdk/wiki/ApiIndex
[monolog]:       https://github.com/seldaek/monolog
