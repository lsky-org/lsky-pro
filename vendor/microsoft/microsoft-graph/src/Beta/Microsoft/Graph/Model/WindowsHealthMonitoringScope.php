<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsHealthMonitoringScope File
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
* WindowsHealthMonitoringScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsHealthMonitoringScope extends Enum
{
    /**
    * The Enum WindowsHealthMonitoringScope
    */
    const UNDEFINED = "undefined";
    const HEALTH_MONITORING = "healthMonitoring";
    const BOOT_PERFORMANCE = "bootPerformance";
    const WINDOWS_UPDATES = "windowsUpdates";
}