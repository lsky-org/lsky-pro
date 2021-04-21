<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceActionType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* DeviceComplianceActionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceActionType extends Enum
{
    /**
    * The Enum DeviceComplianceActionType
    */
    const NO_ACTION = "noAction";
    const NOTIFICATION = "notification";
    const BLOCK = "block";
    const RETIRE = "retire";
    const WIPE = "wipe";
    const REMOVE_RESOURCE_ACCESS_PROFILES = "removeResourceAccessProfiles";
    const PUSH_NOTIFICATION = "pushNotification";
}