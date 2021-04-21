<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceThreatProtectionLevel File
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
* DeviceThreatProtectionLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceThreatProtectionLevel extends Enum
{
    /**
    * The Enum DeviceThreatProtectionLevel
    */
    const UNAVAILABLE = "unavailable";
    const SECURED = "secured";
    const LOW = "low";
    const MEDIUM = "medium";
    const HIGH = "high";
    const NOT_SET = "notSet";
}