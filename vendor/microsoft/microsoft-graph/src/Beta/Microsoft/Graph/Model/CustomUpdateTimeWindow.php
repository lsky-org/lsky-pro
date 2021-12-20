<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomUpdateTimeWindow File
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
* CustomUpdateTimeWindow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomUpdateTimeWindow extends Entity
{

    /**
    * Gets the endDay
    * End day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @return DayOfWeek The endDay
    */
    public function getEndDay()
    {
        if (array_key_exists("endDay", $this->_propDict)) {
            if (is_a($this->_propDict["endDay"], "\Beta\Microsoft\Graph\Model\DayOfWeek")) {
                return $this->_propDict["endDay"];
            } else {
                $this->_propDict["endDay"] = new DayOfWeek($this->_propDict["endDay"]);
                return $this->_propDict["endDay"];
            }
        }
        return null;
    }

    /**
    * Sets the endDay
    * End day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @param DayOfWeek $val The value to assign to the endDay
    *
    * @return CustomUpdateTimeWindow The CustomUpdateTimeWindow
    */
    public function setEndDay($val)
    {
        $this->_propDict["endDay"] = $val;
         return $this;
    }

    /**
    * Gets the endTime
    * End time of the time window
    *
    * @return TimeOfDay The endTime
    */
    public function getEndTime()
    {
        if (array_key_exists("endTime", $this->_propDict)) {
            if (is_a($this->_propDict["endTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["endTime"];
            } else {
                $this->_propDict["endTime"] = new TimeOfDay($this->_propDict["endTime"]);
                return $this->_propDict["endTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endTime
    * End time of the time window
    *
    * @param TimeOfDay $val The value to assign to the endTime
    *
    * @return CustomUpdateTimeWindow The CustomUpdateTimeWindow
    */
    public function setEndTime($val)
    {
        $this->_propDict["endTime"] = $val;
         return $this;
    }

    /**
    * Gets the startDay
    * Start day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @return DayOfWeek The startDay
    */
    public function getStartDay()
    {
        if (array_key_exists("startDay", $this->_propDict)) {
            if (is_a($this->_propDict["startDay"], "\Beta\Microsoft\Graph\Model\DayOfWeek")) {
                return $this->_propDict["startDay"];
            } else {
                $this->_propDict["startDay"] = new DayOfWeek($this->_propDict["startDay"]);
                return $this->_propDict["startDay"];
            }
        }
        return null;
    }

    /**
    * Sets the startDay
    * Start day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @param DayOfWeek $val The value to assign to the startDay
    *
    * @return CustomUpdateTimeWindow The CustomUpdateTimeWindow
    */
    public function setStartDay($val)
    {
        $this->_propDict["startDay"] = $val;
         return $this;
    }

    /**
    * Gets the startTime
    * Start time of the time window
    *
    * @return TimeOfDay The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["startTime"];
            } else {
                $this->_propDict["startTime"] = new TimeOfDay($this->_propDict["startTime"]);
                return $this->_propDict["startTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startTime
    * Start time of the time window
    *
    * @param TimeOfDay $val The value to assign to the startTime
    *
    * @return CustomUpdateTimeWindow The CustomUpdateTimeWindow
    */
    public function setStartTime($val)
    {
        $this->_propDict["startTime"] = $val;
         return $this;
    }
}
