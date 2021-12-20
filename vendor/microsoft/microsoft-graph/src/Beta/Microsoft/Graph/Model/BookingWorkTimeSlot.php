<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingWorkTimeSlot File
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
* BookingWorkTimeSlot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingWorkTimeSlot extends Entity
{

    /**
    * Gets the end
    * The time of the day that work starts. For example, 08:00:00.0000000.
    *
    * @return TimeOfDay The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["end"];
            } else {
                $this->_propDict["end"] = new TimeOfDay($this->_propDict["end"]);
                return $this->_propDict["end"];
            }
        }
        return null;
    }

    /**
    * Sets the end
    * The time of the day that work starts. For example, 08:00:00.0000000.
    *
    * @param TimeOfDay $val The value to assign to the end
    *
    * @return BookingWorkTimeSlot The BookingWorkTimeSlot
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
         return $this;
    }

    /**
    * Gets the start
    * The time of the day that work stops. For example, 17:00:00.0000000.
    *
    * @return TimeOfDay The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["start"];
            } else {
                $this->_propDict["start"] = new TimeOfDay($this->_propDict["start"]);
                return $this->_propDict["start"];
            }
        }
        return null;
    }

    /**
    * Sets the start
    * The time of the day that work stops. For example, 17:00:00.0000000.
    *
    * @param TimeOfDay $val The value to assign to the start
    *
    * @return BookingWorkTimeSlot The BookingWorkTimeSlot
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
         return $this;
    }
}
