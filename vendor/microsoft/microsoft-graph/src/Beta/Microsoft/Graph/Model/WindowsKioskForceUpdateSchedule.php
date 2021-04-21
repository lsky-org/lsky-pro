<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskForceUpdateSchedule File
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
* WindowsKioskForceUpdateSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskForceUpdateSchedule extends Entity
{
    /**
    * Gets the dayofMonth
    * Day of month. Valid values 1 to 31
    *
    * @return int The dayofMonth
    */
    public function getDayofMonth()
    {
        if (array_key_exists("dayofMonth", $this->_propDict)) {
            return $this->_propDict["dayofMonth"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dayofMonth
    * Day of month. Valid values 1 to 31
    *
    * @param int $val The value of the dayofMonth
    *
    * @return WindowsKioskForceUpdateSchedule
    */
    public function setDayofMonth($val)
    {
        $this->_propDict["dayofMonth"] = $val;
        return $this;
    }

    /**
    * Gets the dayofWeek
    * Day of week. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @return DayOfWeek The dayofWeek
    */
    public function getDayofWeek()
    {
        if (array_key_exists("dayofWeek", $this->_propDict)) {
            if (is_a($this->_propDict["dayofWeek"], "\Beta\Microsoft\Graph\Model\DayOfWeek")) {
                return $this->_propDict["dayofWeek"];
            } else {
                $this->_propDict["dayofWeek"] = new DayOfWeek($this->_propDict["dayofWeek"]);
                return $this->_propDict["dayofWeek"];
            }
        }
        return null;
    }

    /**
    * Sets the dayofWeek
    * Day of week. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @param DayOfWeek $val The value to assign to the dayofWeek
    *
    * @return WindowsKioskForceUpdateSchedule The WindowsKioskForceUpdateSchedule
    */
    public function setDayofWeek($val)
    {
        $this->_propDict["dayofWeek"] = $val;
         return $this;
    }

    /**
    * Gets the recurrence
    * Recurrence schedule. Possible values are: none, daily, weekly, monthly.
    *
    * @return Windows10AppsUpdateRecurrence The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "\Beta\Microsoft\Graph\Model\Windows10AppsUpdateRecurrence")) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new Windows10AppsUpdateRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrence
    * Recurrence schedule. Possible values are: none, daily, weekly, monthly.
    *
    * @param Windows10AppsUpdateRecurrence $val The value to assign to the recurrence
    *
    * @return WindowsKioskForceUpdateSchedule The WindowsKioskForceUpdateSchedule
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
         return $this;
    }
    /**
    * Gets the runImmediatelyIfAfterStartDateTime
    * If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
    *
    * @return bool The runImmediatelyIfAfterStartDateTime
    */
    public function getRunImmediatelyIfAfterStartDateTime()
    {
        if (array_key_exists("runImmediatelyIfAfterStartDateTime", $this->_propDict)) {
            return $this->_propDict["runImmediatelyIfAfterStartDateTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the runImmediatelyIfAfterStartDateTime
    * If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
    *
    * @param bool $val The value of the runImmediatelyIfAfterStartDateTime
    *
    * @return WindowsKioskForceUpdateSchedule
    */
    public function setRunImmediatelyIfAfterStartDateTime($val)
    {
        $this->_propDict["runImmediatelyIfAfterStartDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The start time for the force restart.
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The start time for the force restart.
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return WindowsKioskForceUpdateSchedule The WindowsKioskForceUpdateSchedule
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
}
