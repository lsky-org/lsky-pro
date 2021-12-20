<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeConstraint File
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
* TimeConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeConstraint extends Entity
{

    /**
    * Gets the activityDomain
    * The nature of the activity, optional. Possible values are: work, personal, unrestricted, or unknown.
    *
    * @return ActivityDomain The activityDomain
    */
    public function getActivityDomain()
    {
        if (array_key_exists("activityDomain", $this->_propDict)) {
            if (is_a($this->_propDict["activityDomain"], "\Beta\Microsoft\Graph\Model\ActivityDomain")) {
                return $this->_propDict["activityDomain"];
            } else {
                $this->_propDict["activityDomain"] = new ActivityDomain($this->_propDict["activityDomain"]);
                return $this->_propDict["activityDomain"];
            }
        }
        return null;
    }

    /**
    * Sets the activityDomain
    * The nature of the activity, optional. Possible values are: work, personal, unrestricted, or unknown.
    *
    * @param ActivityDomain $val The value to assign to the activityDomain
    *
    * @return TimeConstraint The TimeConstraint
    */
    public function setActivityDomain($val)
    {
        $this->_propDict["activityDomain"] = $val;
         return $this;
    }

    /**
    * Gets the timeSlots
    *
    * @return TimeSlot The timeSlots
    */
    public function getTimeSlots()
    {
        if (array_key_exists("timeSlots", $this->_propDict)) {
            if (is_a($this->_propDict["timeSlots"], "\Beta\Microsoft\Graph\Model\TimeSlot")) {
                return $this->_propDict["timeSlots"];
            } else {
                $this->_propDict["timeSlots"] = new TimeSlot($this->_propDict["timeSlots"]);
                return $this->_propDict["timeSlots"];
            }
        }
        return null;
    }

    /**
    * Sets the timeSlots
    *
    * @param TimeSlot $val The value to assign to the timeSlots
    *
    * @return TimeConstraint The TimeConstraint
    */
    public function setTimeSlots($val)
    {
        $this->_propDict["timeSlots"] = $val;
         return $this;
    }
}
