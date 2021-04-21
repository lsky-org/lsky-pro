<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecurrencePattern File
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
* RecurrencePattern class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecurrencePattern extends Entity
{
    /**
    * Gets the dayOfMonth
    * The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly.
    *
    * @return int The dayOfMonth
    */
    public function getDayOfMonth()
    {
        if (array_key_exists("dayOfMonth", $this->_propDict)) {
            return $this->_propDict["dayOfMonth"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dayOfMonth
    * The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly.
    *
    * @param int $val The value of the dayOfMonth
    *
    * @return RecurrencePattern
    */
    public function setDayOfMonth($val)
    {
        $this->_propDict["dayOfMonth"] = $val;
        return $this;
    }

    /**
    * Gets the daysOfWeek
    * A collection of the days of the week on which the event occurs. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly.
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
    * A collection of the days of the week on which the event occurs. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly.
    *
    * @param DayOfWeek $val The value to assign to the daysOfWeek
    *
    * @return RecurrencePattern The RecurrencePattern
    */
    public function setDaysOfWeek($val)
    {
        $this->_propDict["daysOfWeek"] = $val;
         return $this;
    }

    /**
    * Gets the firstDayOfWeek
    * The first day of the week. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. Default is sunday. Required if type is weekly.
    *
    * @return DayOfWeek The firstDayOfWeek
    */
    public function getFirstDayOfWeek()
    {
        if (array_key_exists("firstDayOfWeek", $this->_propDict)) {
            if (is_a($this->_propDict["firstDayOfWeek"], "\Microsoft\Graph\Model\DayOfWeek")) {
                return $this->_propDict["firstDayOfWeek"];
            } else {
                $this->_propDict["firstDayOfWeek"] = new DayOfWeek($this->_propDict["firstDayOfWeek"]);
                return $this->_propDict["firstDayOfWeek"];
            }
        }
        return null;
    }

    /**
    * Sets the firstDayOfWeek
    * The first day of the week. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. Default is sunday. Required if type is weekly.
    *
    * @param DayOfWeek $val The value to assign to the firstDayOfWeek
    *
    * @return RecurrencePattern The RecurrencePattern
    */
    public function setFirstDayOfWeek($val)
    {
        $this->_propDict["firstDayOfWeek"] = $val;
         return $this;
    }

    /**
    * Gets the index
    * Specifies on which instance of the allowed days specified in daysOfsWeek the event occurs, counted from the first instance in the month. Possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly.
    *
    * @return WeekIndex The index
    */
    public function getIndex()
    {
        if (array_key_exists("index", $this->_propDict)) {
            if (is_a($this->_propDict["index"], "\Microsoft\Graph\Model\WeekIndex")) {
                return $this->_propDict["index"];
            } else {
                $this->_propDict["index"] = new WeekIndex($this->_propDict["index"]);
                return $this->_propDict["index"];
            }
        }
        return null;
    }

    /**
    * Sets the index
    * Specifies on which instance of the allowed days specified in daysOfsWeek the event occurs, counted from the first instance in the month. Possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly.
    *
    * @param WeekIndex $val The value to assign to the index
    *
    * @return RecurrencePattern The RecurrencePattern
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = $val;
         return $this;
    }
    /**
    * Gets the interval
    * The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required.
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
    * The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required.
    *
    * @param int $val The value of the interval
    *
    * @return RecurrencePattern
    */
    public function setInterval($val)
    {
        $this->_propDict["interval"] = $val;
        return $this;
    }
    /**
    * Gets the month
    * The month in which the event occurs.  This is a number from 1 to 12.
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
    * The month in which the event occurs.  This is a number from 1 to 12.
    *
    * @param int $val The value of the month
    *
    * @return RecurrencePattern
    */
    public function setMonth($val)
    {
        $this->_propDict["month"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required.
    *
    * @return RecurrencePatternType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Microsoft\Graph\Model\RecurrencePatternType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new RecurrencePatternType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required.
    *
    * @param RecurrencePatternType $val The value to assign to the type
    *
    * @return RecurrencePattern The RecurrencePattern
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
