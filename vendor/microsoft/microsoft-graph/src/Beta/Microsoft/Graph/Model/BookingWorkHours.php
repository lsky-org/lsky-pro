<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingWorkHours File
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
* BookingWorkHours class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingWorkHours extends Entity
{

    /**
    * Gets the day
    * The day of the week represented by this instance. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @return DayOfWeek The day
    */
    public function getDay()
    {
        if (array_key_exists("day", $this->_propDict)) {
            if (is_a($this->_propDict["day"], "\Beta\Microsoft\Graph\Model\DayOfWeek")) {
                return $this->_propDict["day"];
            } else {
                $this->_propDict["day"] = new DayOfWeek($this->_propDict["day"]);
                return $this->_propDict["day"];
            }
        }
        return null;
    }

    /**
    * Sets the day
    * The day of the week represented by this instance. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    *
    * @param DayOfWeek $val The value to assign to the day
    *
    * @return BookingWorkHours The BookingWorkHours
    */
    public function setDay($val)
    {
        $this->_propDict["day"] = $val;
         return $this;
    }

    /**
    * Gets the timeSlots
    * A list of start/end times during a day.
    *
    * @return BookingWorkTimeSlot The timeSlots
    */
    public function getTimeSlots()
    {
        if (array_key_exists("timeSlots", $this->_propDict)) {
            if (is_a($this->_propDict["timeSlots"], "\Beta\Microsoft\Graph\Model\BookingWorkTimeSlot")) {
                return $this->_propDict["timeSlots"];
            } else {
                $this->_propDict["timeSlots"] = new BookingWorkTimeSlot($this->_propDict["timeSlots"]);
                return $this->_propDict["timeSlots"];
            }
        }
        return null;
    }

    /**
    * Sets the timeSlots
    * A list of start/end times during a day.
    *
    * @param BookingWorkTimeSlot $val The value to assign to the timeSlots
    *
    * @return BookingWorkHours The BookingWorkHours
    */
    public function setTimeSlots($val)
    {
        $this->_propDict["timeSlots"] = $val;
         return $this;
    }
}
