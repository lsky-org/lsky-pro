<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosSoftwareUpdateScheduleType File
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
* IosSoftwareUpdateScheduleType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosSoftwareUpdateScheduleType extends Enum
{
    /**
    * The Enum IosSoftwareUpdateScheduleType
    */
    const UPDATE_OUTSIDE_OF_ACTIVE_HOURS = "updateOutsideOfActiveHours";
    const ALWAYS_UPDATE = "alwaysUpdate";
    const UPDATE_DURING_TIME_WINDOWS = "updateDuringTimeWindows";
    const UPDATE_OUTSIDE_OF_TIME_WINDOWS = "updateOutsideOfTimeWindows";
}