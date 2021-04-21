<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPrivacyDataCategory File
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
* WindowsPrivacyDataCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPrivacyDataCategory extends Enum
{
    /**
    * The Enum WindowsPrivacyDataCategory
    */
    const NOT_CONFIGURED = "notConfigured";
    const ACCOUNT_INFO = "accountInfo";
    const APPS_RUN_IN_BACKGROUND = "appsRunInBackground";
    const CALENDAR = "calendar";
    const CALL_HISTORY = "callHistory";
    const CAMERA = "camera";
    const CONTACTS = "contacts";
    const DIAGNOSTICS_INFO = "diagnosticsInfo";
    const EMAIL = "email";
    const LOCATION = "location";
    const MESSAGING = "messaging";
    const MICROPHONE = "microphone";
    const MOTION = "motion";
    const NOTIFICATIONS = "notifications";
    const PHONE = "phone";
    const RADIOS = "radios";
    const TASKS = "tasks";
    const SYNC_WITH_DEVICES = "syncWithDevices";
    const TRUSTED_DEVICES = "trustedDevices";
}