<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateNotificationDisplayOption File
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
* WindowsUpdateNotificationDisplayOption class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUpdateNotificationDisplayOption extends Enum
{
    /**
    * The Enum WindowsUpdateNotificationDisplayOption
    */
    const NOT_CONFIGURED = "notConfigured";
    const DEFAULT_NOTIFICATIONS = "defaultNotifications";
    const RESTART_WARNINGS_ONLY = "restartWarningsOnly";
    const DISABLE_ALL_NOTIFICATIONS = "disableAllNotifications";
}