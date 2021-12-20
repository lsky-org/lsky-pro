<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDeviceHealthState File
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
* WindowsDeviceHealthState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDeviceHealthState extends Enum
{
    /**
    * The Enum WindowsDeviceHealthState
    */
    const CLEAN = "clean";
    const FULL_SCAN_PENDING = "fullScanPending";
    const REBOOT_PENDING = "rebootPending";
    const MANUAL_STEPS_PENDING = "manualStepsPending";
    const OFFLINE_SCAN_PENDING = "offlineScanPending";
    const CRITICAL = "critical";
}