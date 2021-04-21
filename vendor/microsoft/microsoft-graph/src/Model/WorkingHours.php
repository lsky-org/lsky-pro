<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkingHours File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* WorkingHours class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkingHours extends Entity
{

    /**
    * Gets the daysOfWeek
    * The days of the week on which the user works.
    *
    * @return DayOfWeek The daysOfWeek
    */
    public function getDaysOfWeek()
    {
        if (array_key_exists("daysOfWeek", $this->_propDict)) {
            if (is_a($this->_propDict["daysOfWeek"], "\Microsoft\Graph\Model\DayOfWeek")) {
                return $this->_propDict["daysOfWeek"];
            } else {
                $this->_propDict["daysOfWeek"] = new DayOfWeek($this->_propDict["daysOfWeek"]);
                return $this->_propDict["daysOfWeek"];
            }
        }
        return null;
    }

    /**
    * Sets the daysOfWeek
    * The days of the week on which the user works.
    *
    * @param DayOfWeek $val The value to assign to the daysOfWeek
    *
    * @return WorkingHours The WorkingHours
    */
    public function setDaysOfWeek($val)
    {
        $this->_propDict["daysOfWeek"] = $val;
         return $this;
    }

    /**
    * Gets the endTime
    * The time of the day that the user stops working.
    *
    * @return TimeOfDay The endTime
    */
    public function getEndTime()
    {
        if (array_key_exists("endTime", $this->_propDict)) {
            if (is_a($this->_propDict["endTime"], "\Microsoft\Graph\Model\TimeOfDay")) {
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
    * The time of the day that the user stops working.
    *
    * @param TimeOfDay $val The value to assign to the endTime
    *
    * @return WorkingHours The WorkingHours
    */
    public function setEndTime($val)
    {
        $this->_propDict["endTime"] = $val;
         return $this;
    }

    /**
    * Gets the startTime
    * The time of the day that the user starts working.
    *
    * @return TimeOfDay The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\Microsoft\Graph\Model\TimeOfDay")) {
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
    * The time of the day that the user starts working.
    *
    * @param TimeOfDay $val The value to assign to the startTime
    *
    * @return WorkingHours The WorkingHours
    */
    public function setStartTime($val)
    {
        $this->_propDict["startTime"] = $val;
         return $this;
    }

    /**
    * Gets the timeZone
    * The time zone to which the working hours apply.
    *
    * @return TimeZoneBase The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            if (is_a($this->_propDict["timeZone"], "\Microsoft\Graph\Model\TimeZoneBase")) {
                return $this->_propDict["timeZone"];
            } else {
                $this->_propDict["timeZone"] = new TimeZoneBase($this->_propDict["timeZone"]);
                return $this->_propDict["timeZone"];
            }
        }
        return null;
    }

    /**
    * Sets the timeZone
    * The time zone to which the working hours apply.
    *
    * @param TimeZoneBase $val The value to assign to the timeZone
    *
    * @return WorkingHours The WorkingHours
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
         return $this;
    }
}
