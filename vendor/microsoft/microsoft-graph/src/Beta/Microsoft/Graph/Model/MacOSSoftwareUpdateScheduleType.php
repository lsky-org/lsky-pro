<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSoftwareUpdateScheduleType File
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
* MacOSSoftwareUpdateScheduleType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSoftwareUpdateScheduleType extends Enum
{
    /**
    * The Enum MacOSSoftwareUpdateScheduleType
    */
    const ALWAYS_UPDATE = "alwaysUpdate";
    const UPDATE_DURING_TIME_WINDOWS = "updateDuringTimeWindows";
    const UPDATE_OUTSIDE_OF_TIME_WINDOWS = "updateOutsideOfTimeWindows";
}