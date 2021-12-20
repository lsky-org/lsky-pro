<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceGuardVirtualizationBasedSecurityState File
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
* DeviceGuardVirtualizationBasedSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceGuardVirtualizationBasedSecurityState extends Enum
{
    /**
    * The Enum DeviceGuardVirtualizationBasedSecurityState
    */
    const RUNNING = "running";
    const REBOOT_REQUIRED = "rebootRequired";
    const REQUIRE64_BIT_ARCHITECTURE = "require64BitArchitecture";
    const NOT_LICENSED = "notLicensed";
    const NOT_CONFIGURED = "notConfigured";
    const DOES_NOT_MEET_HARDWARE_REQUIREMENTS = "doesNotMeetHardwareRequirements";
    const OTHER = "other";
}