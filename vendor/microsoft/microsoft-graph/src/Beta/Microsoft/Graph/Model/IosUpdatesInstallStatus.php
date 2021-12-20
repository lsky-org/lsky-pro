<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosUpdatesInstallStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* IosUpdatesInstallStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosUpdatesInstallStatus extends Enum
{
    /**
    * The Enum IosUpdatesInstallStatus
    */
    const UPDATE_SCAN_FAILED = "updateScanFailed";
    const DEVICE_OS_HIGHER_THAN_DESIRED_OS_VERSION = "deviceOsHigherThanDesiredOsVersion";
    const UPDATE_ERROR = "updateError";
    const SHARED_DEVICE_USER_LOGGED_IN_ERROR = "sharedDeviceUserLoggedInError";
    const NOT_SUPPORTED_OPERATION = "notSupportedOperation";
    const INSTALL_FAILED = "installFailed";
    const INSTALL_PHONE_CALL_IN_PROGRESS = "installPhoneCallInProgress";
    const INSTALL_INSUFFICIENT_POWER = "installInsufficientPower";
    const INSTALL_INSUFFICIENT_SPACE = "installInsufficientSpace";
    const INSTALLING = "installing";
    const DOWNLOAD_INSUFFICIENT_NETWORK = "downloadInsufficientNetwork";
    const DOWNLOAD_INSUFFICIENT_POWER = "downloadInsufficientPower";
    const DOWNLOAD_INSUFFICIENT_SPACE = "downloadInsufficientSpace";
    const DOWNLOAD_REQUIRES_COMPUTER = "downloadRequiresComputer";
    const DOWNLOAD_FAILED = "downloadFailed";
    const DOWNLOADING = "downloading";
    const TIMEOUT = "timeout";
    const MDM_CLIENT_CRASHED = "mdmClientCrashed";
    const SUCCESS = "success";
    const AVAILABLE = "available";
    const IDLE = "idle";
    const UNKNOWN = "unknown";
}