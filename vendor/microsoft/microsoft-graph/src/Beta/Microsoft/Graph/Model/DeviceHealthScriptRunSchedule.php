<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptRunSchedule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* DeviceHealthScriptRunSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptRunSchedule extends Entity
{
    /**
    * Gets the interval
    * The x value of every x hours for hourly schedule, every x days for Daily Schedule, every x weeks for weekly schedule, every x months for Monthly Schedule. Valid values 1 to 23
    *
    * @return int The interval
    */
    public function getInterval()
    {
        if (array_key_exists("interval", $this->_propDict)) {
            return $this->_propDict["interval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the interval
    * The x value of every x hours for hourly schedule, every x days for Daily Schedule, every x weeks for weekly schedule, every x months for Monthly Schedule. Valid values 1 to 23
    *
    * @param int $val The value of the interval
    *
    * @return DeviceHealthScriptRunSchedule
    */
    public function setInterval($val)
    {
        $this->_propDict["interval"] = $val;
        return $this;
    }
}
