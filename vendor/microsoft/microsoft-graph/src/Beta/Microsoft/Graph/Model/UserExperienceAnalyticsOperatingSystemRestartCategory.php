<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsOperatingSystemRestartCategory File
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
* UserExperienceAnalyticsOperatingSystemRestartCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsOperatingSystemRestartCategory extends Enum
{
    /**
    * The Enum UserExperienceAnalyticsOperatingSystemRestartCategory
    */
    const UNKNOWN = "unknown";
    const RESTART_WITH_UPDATE = "restartWithUpdate";
    const RESTART_WITHOUT_UPDATE = "restartWithoutUpdate";
    const BLUE_SCREEN = "blueScreen";
    const SHUTDOWN_WITH_UPDATE = "shutdownWithUpdate";
    const SHUTDOWN_WITHOUT_UPDATE = "shutdownWithoutUpdate";
    const LONG_POWER_BUTTON_PRESS = "longPowerButtonPress";
    const BOOT_ERROR = "bootError";
    const UPDATE = "update";
}