<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScheduleInformation File
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
* ScheduleInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ScheduleInformation extends Entity
{
    /**
    * Gets the availabilityView
    * Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free, 1= tentative, 2= busy, 3= out of office, 4= working elsewhere.
    *
    * @return string The availabilityView
    */
    public function getAvailabilityView()
    {
        if (array_key_exists("availabilityView", $this->_propDict)) {
            return $this->_propDict["availabilityView"];
        } else {
            return null;
        }
    }

    /**
    * Sets the availabilityView
    * Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free, 1= tentative, 2= busy, 3= out of office, 4= working elsewhere.
    *
    * @param string $val The value of the availabilityView
    *
    * @return ScheduleInformation
    */
    public function setAvailabilityView($val)
    {
        $this->_propDict["availabilityView"] = $val;
        return $this;
    }

    /**
    * Gets the error
    * Error information from attempting to get the availability of the user, distribution list, or resource.
    *
    * @return FreeBusyError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Microsoft\Graph\Model\FreeBusyError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new FreeBusyError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    * Error information from attempting to get the availability of the user, distribution list, or resource.
    *
    * @param FreeBusyError $val The value to assign to the error
    *
    * @return ScheduleInformation The ScheduleInformation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }
    /**
    * Gets the scheduleId
    * An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation.
    *
    * @return string The scheduleId
    */
    public function getScheduleId()
    {
        if (array_key_exists("scheduleId", $this->_propDict)) {
            return $this->_propDict["scheduleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scheduleId
    * An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation.
    *
    * @param string $val The value of the scheduleId
    *
    * @return ScheduleInformation
    */
    public function setScheduleId($val)
    {
        $this->_propDict["scheduleId"] = $val;
        return $this;
    }

    /**
    * Gets the scheduleItems
    * Contains the items that describe the availability of the user or resource.
    *
    * @return ScheduleItem The scheduleItems
    */
    public function getScheduleItems()
    {
        if (array_key_exists("scheduleItems", $this->_propDict)) {
            if (is_a($this->_propDict["scheduleItems"], "\Microsoft\Graph\Model\ScheduleItem")) {
                return $this->_propDict["scheduleItems"];
            } else {
                $this->_propDict["scheduleItems"] = new ScheduleItem($this->_propDict["scheduleItems"]);
                return $this->_propDict["scheduleItems"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduleItems
    * Contains the items that describe the availability of the user or resource.
    *
    * @param ScheduleItem $val The value to assign to the scheduleItems
    *
    * @return ScheduleInformation The ScheduleInformation
    */
    public function setScheduleItems($val)
    {
        $this->_propDict["scheduleItems"] = $val;
         return $this;
    }

    /**
    * Gets the workingHours
    * The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings.
    *
    * @return WorkingHours The workingHours
    */
    public function getWorkingHours()
    {
        if (array_key_exists("workingHours", $this->_propDict)) {
            if (is_a($this->_propDict["workingHours"], "\Microsoft\Graph\Model\WorkingHours")) {
                return $this->_propDict["workingHours"];
            } else {
                $this->_propDict["workingHours"] = new WorkingHours($this->_propDict["workingHours"]);
                return $this->_propDict["workingHours"];
            }
        }
        return null;
    }

    /**
    * Sets the workingHours
    * The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings.
    *
    * @param WorkingHours $val The value to assign to the workingHours
    *
    * @return ScheduleInformation The ScheduleInformation
    */
    public function setWorkingHours($val)
    {
        $this->_propDict["workingHours"] = $val;
         return $this;
    }
}
