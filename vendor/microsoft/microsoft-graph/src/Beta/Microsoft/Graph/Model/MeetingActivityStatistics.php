<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingActivityStatistics File
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
* MeetingActivityStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingActivityStatistics extends ActivityStatistics
{
    /**
    * Gets the afterHours
    * Time spent on meetings outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
    *
    * @return Duration The afterHours
    */
    public function getAfterHours()
    {
        if (array_key_exists("afterHours", $this->_propDict)) {
            if (is_a($this->_propDict["afterHours"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["afterHours"];
            } else {
                $this->_propDict["afterHours"] = new Duration($this->_propDict["afterHours"]);
                return $this->_propDict["afterHours"];
            }
        }
        return null;
    }
    
    /**
    * Sets the afterHours
    * Time spent on meetings outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
    *
    * @param Duration $val The afterHours
    *
    * @return MeetingActivityStatistics
    */
    public function setAfterHours($val)
    {
        $this->_propDict["afterHours"] = $val;
        return $this;
    }
    
    /**
    * Gets the conflicting
    * Time spent in conflicting meetings (meetings that overlap with other meetings that the person accepted and where the person’s status is set to Busy). The value is represented in ISO 8601 format for durations.
    *
    * @return Duration The conflicting
    */
    public function getConflicting()
    {
        if (array_key_exists("conflicting", $this->_propDict)) {
            if (is_a($this->_propDict["conflicting"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["conflicting"];
            } else {
                $this->_propDict["conflicting"] = new Duration($this->_propDict["conflicting"]);
                return $this->_propDict["conflicting"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conflicting
    * Time spent in conflicting meetings (meetings that overlap with other meetings that the person accepted and where the person’s status is set to Busy). The value is represented in ISO 8601 format for durations.
    *
    * @param Duration $val The conflicting
    *
    * @return MeetingActivityStatistics
    */
    public function setConflicting($val)
    {
        $this->_propDict["conflicting"] = $val;
        return $this;
    }
    
    /**
    * Gets the long
    * Time spent in long meetings (more than an hour in duration). The value is represented in ISO 8601 format for durations.
    *
    * @return Duration The long
    */
    public function getLong()
    {
        if (array_key_exists("long", $this->_propDict)) {
            if (is_a($this->_propDict["long"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["long"];
            } else {
                $this->_propDict["long"] = new Duration($this->_propDict["long"]);
                return $this->_propDict["long"];
            }
        }
        return null;
    }
    
    /**
    * Sets the long
    * Time spent in long meetings (more than an hour in duration). The value is represented in ISO 8601 format for durations.
    *
    * @param Duration $val The long
    *
    * @return MeetingActivityStatistics
    */
    public function setLong($val)
    {
        $this->_propDict["long"] = $val;
        return $this;
    }
    
    /**
    * Gets the multitasking
    * Time spent in meetings where the person was multitasking (read/sent more than a minimum number of emails and/or sent more than a minimum number of messages in Teams or in Skype for Business). The value is represented in ISO 8601 format for durations.
    *
    * @return Duration The multitasking
    */
    public function getMultitasking()
    {
        if (array_key_exists("multitasking", $this->_propDict)) {
            if (is_a($this->_propDict["multitasking"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["multitasking"];
            } else {
                $this->_propDict["multitasking"] = new Duration($this->_propDict["multitasking"]);
                return $this->_propDict["multitasking"];
            }
        }
        return null;
    }
    
    /**
    * Sets the multitasking
    * Time spent in meetings where the person was multitasking (read/sent more than a minimum number of emails and/or sent more than a minimum number of messages in Teams or in Skype for Business). The value is represented in ISO 8601 format for durations.
    *
    * @param Duration $val The multitasking
    *
    * @return MeetingActivityStatistics
    */
    public function setMultitasking($val)
    {
        $this->_propDict["multitasking"] = $val;
        return $this;
    }
    
    /**
    * Gets the organized
    * Time spent in meetings organized by the user. The value is represented in ISO 8601 format for durations.
    *
    * @return Duration The organized
    */
    public function getOrganized()
    {
        if (array_key_exists("organized", $this->_propDict)) {
            if (is_a($this->_propDict["organized"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["organized"];
            } else {
                $this->_propDict["organized"] = new Duration($this->_propDict["organized"]);
                return $this->_propDict["organized"];
            }
        }
        return null;
    }
    
    /**
    * Sets the organized
    * Time spent in meetings organized by the user. The value is represented in ISO 8601 format for durations.
    *
    * @param Duration $val The organized
    *
    * @return MeetingActivityStatistics
    */
    public function setOrganized($val)
    {
        $this->_propDict["organized"] = $val;
        return $this;
    }
    
    /**
    * Gets the recurring
    * Time spent on recurring meetings. The value is represented in ISO 8601 format for durations.
    *
    * @return Duration The recurring
    */
    public function getRecurring()
    {
        if (array_key_exists("recurring", $this->_propDict)) {
            if (is_a($this->_propDict["recurring"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["recurring"];
            } else {
                $this->_propDict["recurring"] = new Duration($this->_propDict["recurring"]);
                return $this->_propDict["recurring"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recurring
    * Time spent on recurring meetings. The value is represented in ISO 8601 format for durations.
    *
    * @param Duration $val The recurring
    *
    * @return MeetingActivityStatistics
    */
    public function setRecurring($val)
    {
        $this->_propDict["recurring"] = $val;
        return $this;
    }
    
}
