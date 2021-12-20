<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerKioskCustomizationStatusBar File
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
* AndroidDeviceOwnerKioskCustomizationStatusBar class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerKioskCustomizationStatusBar extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerKioskCustomizationStatusBar
    */
    const NOT_CONFIGURED = "notConfigured";
    const NOTIFICATIONS_AND_SYSTEM_INFO_ENABLED = "notificationsAndSystemInfoEnabled";
    const SYSTEM_INFO_ONLY = "systemInfoOnly";
}