<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementAutopilotPolicyComplianceStatus File
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
* DeviceManagementAutopilotPolicyComplianceStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementAutopilotPolicyComplianceStatus extends Enum
{
    /**
    * The Enum DeviceManagementAutopilotPolicyComplianceStatus
    */
    const UNKNOWN = "unknown";
    const COMPLIANT = "compliant";
    const INSTALLED = "installed";
    const NOT_COMPLIANT = "notCompliant";
    const NOT_INSTALLED = "notInstalled";
    const ERROR = "error";
}