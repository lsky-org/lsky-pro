<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DriveItemSourceApplication File
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
* DriveItemSourceApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DriveItemSourceApplication extends Enum
{
    /**
    * The Enum DriveItemSourceApplication
    */
    const TEAMS = "teams";
    const YAMMER = "yammer";
    const SHARE_POINT = "sharePoint";
    const ONE_DRIVE = "oneDrive";
    const STREAM = "stream";
    const POWER_POINT = "powerPoint";
    const OFFICE = "office";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}