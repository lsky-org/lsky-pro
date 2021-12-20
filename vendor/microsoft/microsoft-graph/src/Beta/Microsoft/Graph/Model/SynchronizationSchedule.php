<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationSchedule File
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
* SynchronizationSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationSchedule extends Entity
{

    /**
    * Gets the expiration
    * Date and time when this job will expire. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The expiration
    */
    public function getExpiration()
    {
        if (array_key_exists("expiration", $this->_propDict)) {
            if (is_a($this->_propDict["expiration"], "\DateTime")) {
                return $this->_propDict["expiration"];
            } else {
                $this->_propDict["expiration"] = new \DateTime($this->_propDict["expiration"]);
                return $this->_propDict["expiration"];
            }
        }
        return null;
    }

    /**
    * Sets the expiration
    * Date and time when this job will expire. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the expiration
    *
    * @return SynchronizationSchedule The SynchronizationSchedule
    */
    public function setExpiration($val)
    {
        $this->_propDict["expiration"] = $val;
         return $this;
    }

    /**
    * Gets the interval
    * The interval between synchronization iterations.
    *
    * @return Duration The interval
    */
    public function getInterval()
    {
        if (array_key_exists("interval", $this->_propDict)) {
            if (is_a($this->_propDict["interval"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["interval"];
            } else {
                $this->_propDict["interval"] = new Duration($this->_propDict["interval"]);
                return $this->_propDict["interval"];
            }
        }
        return null;
    }

    /**
    * Sets the interval
    * The interval between synchronization iterations.
    *
    * @param Duration $val The value to assign to the interval
    *
    * @return SynchronizationSchedule The SynchronizationSchedule
    */
    public function setInterval($val)
    {
        $this->_propDict["interval"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Possible values are: Active, Disabled.
    *
    * @return SynchronizationScheduleState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\SynchronizationScheduleState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new SynchronizationScheduleState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Possible values are: Active, Disabled.
    *
    * @param SynchronizationScheduleState $val The value to assign to the state
    *
    * @return SynchronizationSchedule The SynchronizationSchedule
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
