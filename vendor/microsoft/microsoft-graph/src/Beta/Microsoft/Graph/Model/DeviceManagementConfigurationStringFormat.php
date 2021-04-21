<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationStringFormat File
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
* DeviceManagementConfigurationStringFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationStringFormat extends Enum
{
    /**
    * The Enum DeviceManagementConfigurationStringFormat
    */
    const NONE = "none";
    const EMAIL = "email";
    const GUID = "guid";
    const IP = "ip";
    const BASE64 = "base64";
    const URL = "url";
    const VERSION = "version";
    const XML = "xml";
    const DATE = "date";
    const TIME = "time";
    const BINARY = "binary";
    const REG_EX = "regEx";
    const JSON = "json";
    const DATE_TIME = "dateTime";
    const SURFACE_HUB = "surfaceHub";
}