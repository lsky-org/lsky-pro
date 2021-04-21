<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerSystemUpdateInstallType File
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
* AndroidDeviceOwnerSystemUpdateInstallType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerSystemUpdateInstallType extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerSystemUpdateInstallType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const POSTPONE = "postpone";
    const WINDOWED = "windowed";
    const AUTOMATIC = "automatic";
}