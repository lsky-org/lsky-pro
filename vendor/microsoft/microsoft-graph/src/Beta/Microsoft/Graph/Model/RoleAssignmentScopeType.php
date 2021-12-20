<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleAssignmentScopeType File
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
* RoleAssignmentScopeType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleAssignmentScopeType extends Enum
{
    /**
    * The Enum RoleAssignmentScopeType
    */
    const RESOURCE_SCOPE = "resourceScope";
    const ALL_DEVICES = "allDevices";
    const ALL_LICENSED_USERS = "allLicensedUsers";
    const ALL_DEVICES_AND_LICENSED_USERS = "allDevicesAndLicensedUsers";
}