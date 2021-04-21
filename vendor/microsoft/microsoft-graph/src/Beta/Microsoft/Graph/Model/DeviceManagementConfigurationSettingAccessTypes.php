<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingAccessTypes File
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
* DeviceManagementConfigurationSettingAccessTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingAccessTypes extends Enum
{
    /**
    * The Enum DeviceManagementConfigurationSettingAccessTypes
    */
    const NONE = "none";
    const ADD = "add";
    const COPY = "copy";
    const DELETE = "delete";
    const GET = "get";
    const REPLACE = "replace";
    const EXECUTE = "execute";
}