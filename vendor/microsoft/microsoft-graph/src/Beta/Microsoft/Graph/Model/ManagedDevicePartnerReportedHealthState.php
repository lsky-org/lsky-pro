<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDevicePartnerReportedHealthState File
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
* ManagedDevicePartnerReportedHealthState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDevicePartnerReportedHealthState extends Enum
{
    /**
    * The Enum ManagedDevicePartnerReportedHealthState
    */
    const UNKNOWN = "unknown";
    const ACTIVATED = "activated";
    const DEACTIVATED = "deactivated";
    const SECURED = "secured";
    const LOW_SEVERITY = "lowSeverity";
    const MEDIUM_SEVERITY = "mediumSeverity";
    const HIGH_SEVERITY = "highSeverity";
    const UNRESPONSIVE = "unresponsive";
    const COMPROMISED = "compromised";
    const MISCONFIGURED = "misconfigured";
}