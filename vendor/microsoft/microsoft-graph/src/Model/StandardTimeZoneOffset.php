<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StandardTimeZoneOffset File
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
* StandardTimeZoneOffset class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StandardTimeZoneOffset extends Entity
{
    /**
    * Gets the dayOccurrence
    * Represents the nth occurrence of the day of week that the transition from daylight saving time to standard time occurs.
    *
    * @return int The dayOccurrence
    */
    public function getDayOccurrence()
    {
        if (array_key_exists("dayOccurrence", $this->_propDict)) {
            return $this->_propDict["dayOccurrence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dayOccurrence
    * Represents the nth occurrence of the day of week that the transition from daylight saving time to standard time occurs.
    *
    * @param int $val The value of the dayOccurrence
    *
    * @return StandardTimeZoneOffset
    */
    public function setDayOccurrence($val)
    {
        $this->_propDict["dayOccurrence"] = $val;
        return $this;
    }

    /**
    * Gets the dayOfWeek
    * Represents the day of the week when the transition from daylight saving time to standard time.
    *
    * @return DayOfWeek The dayOfWeek
    */
    public function getDayOfWeek()
    {
        if (array_key_exists("dayOfWeek", $this->_propDict)) {
            if (is_a($this->_propDict["dayOfWeek"], "\Microsoft\Graph\Model\DayOfWeek")) {
                return $this->_propDict["dayOfWeek"];
            } else {
                $this->_propDict["dayOfWeek"] = new DayOfWeek($this->_propDict["dayOfWeek"]);
                return $this->_propDict["dayOfWeek"];
            }
        }
        return null;
    }

    /**
    * Sets the dayOfWeek
    * Represents the day of the week when the transition from daylight saving time to standard time.
    *
    * @param DayOfWeek $val The value to assign to the dayOfWeek
    *
    * @return StandardTimeZoneOffset The StandardTimeZoneOffset
    */
    public function setDayOfWeek($val)
    {
        $this->_propDict["dayOfWeek"] = $val;
         return $this;
    }
    /**
    * Gets the month
    * Represents the month of the year when the transition from daylight saving time to standard time occurs.
    *
    * @return int The month
    */
    public function getMonth()
    {
        if (array_key_exists("month", $this->_propDict)) {
            return $this->_propDict["month"];
        } else {
            return null;
        }
    }

    /**
    * Sets the month
    * Represents the month of the year when the transition from daylight saving time to standard time occurs.
    *
    * @param int $val The value of the month
    *
    * @return StandardTimeZoneOffset
    */
    public function setMonth($val)
    {
        $this->_propDict["month"] = $val;
        return $this;
    }

    /**
    * Gets the time
    * Represents the time of day when the transition from daylight saving time to standard time occurs.
    *
    * @return TimeOfDay The time
    */
    public function getTime()
    {
        if (array_key_exists("time", $this->_propDict)) {
            if (is_a($this->_propDict["time"], "\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["time"];
            } else {
                $this->_propDict["time"] = new TimeOfDay($this->_propDict["time"]);
                return $this->_propDict["time"];
            }
        }
        return null;
    }

    /**
    * Sets the time
    * Represents the time of day when the transition from daylight saving time to standard time occurs.
    *
    * @param TimeOfDay $val The value to assign to the time
    *
    * @return StandardTimeZoneOffset The StandardTimeZoneOffset
    */
    public function setTime($val)
    {
        $this->_propDict["time"] = $val;
         return $this;
    }
    /**
    * Gets the year
    * Represents how frequently in terms of years the change from daylight saving time to standard time occurs. For example, a value of 0 means every year.
    *
    * @return int The year
    */
    public function getYear()
    {
        if (array_key_exists("year", $this->_propDict)) {
            return $this->_propDict["year"];
        } else {
            return null;
        }
    }

    /**
    * Sets the year
    * Represents how frequently in terms of years the change from daylight saving time to standard time occurs. For example, a value of 0 means every year.
    *
    * @param int $val The value of the year
    *
    * @return StandardTimeZoneOffset
    */
    public function setYear($val)
    {
        $this->_propDict["year"] = $val;
        return $this;
    }
}
