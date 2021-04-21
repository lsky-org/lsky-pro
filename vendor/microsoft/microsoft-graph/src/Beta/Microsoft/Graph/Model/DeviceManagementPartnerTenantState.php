<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementPartnerTenantState File
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
* DeviceManagementPartnerTenantState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementPartnerTenantState extends Enum
{
    /**
    * The Enum DeviceManagementPartnerTenantState
    */
    const UNKNOWN = "unknown";
    const UNAVAILABLE = "unavailable";
    const ENABLED = "enabled";
    const TERMINATED = "terminated";
    const REJECTED = "rejected";
    const UNRESPONSIVE = "unresponsive";
}