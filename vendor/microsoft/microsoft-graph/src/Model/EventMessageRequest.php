<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventMessageRequest File
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
* EventMessageRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EventMessageRequest extends EventMessage
{
    /**
    * Gets the allowNewTimeProposals
    * True if the meeting organizer allows invitees to propose a new time when responding, false otherwise. Optional. Default is true.
    *
    * @return bool The allowNewTimeProposals
    */
    public function getAllowNewTimeProposals()
    {
        if (array_key_exists("allowNewTimeProposals", $this->_propDict)) {
            return $this->_propDict["allowNewTimeProposals"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowNewTimeProposals
    * True if the meeting organizer allows invitees to propose a new time when responding, false otherwise. Optional. Default is true.
    *
    * @param bool $val The allowNewTimeProposals
    *
    * @return EventMessageRequest
    */
    public function setAllowNewTimeProposals($val)
    {
        $this->_propDict["allowNewTimeProposals"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the meetingRequestType
    *
    * @return MeetingRequestType The meetingRequestType
    */
    public function getMeetingRequestType()
    {
        if (array_key_exists("meetingRequestType", $this->_propDict)) {
            if (is_a($this->_propDict["meetingRequestType"], "\Microsoft\Graph\Model\MeetingRequestType")) {
                return $this->_propDict["meetingRequestType"];
            } else {
                $this->_propDict["meetingRequestType"] = new MeetingRequestType($this->_propDict["meetingRequestType"]);
                return $this->_propDict["meetingRequestType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meetingRequestType
    *
    * @param MeetingRequestType $val The meetingRequestType
    *
    * @return EventMessageRequest
    */
    public function setMeetingRequestType($val)
    {
        $this->_propDict["meetingRequestType"] = $val;
        return $this;
    }
    
    /**
    * Gets the previousEndDateTime
    * If the meeting update changes the meeting end time, this property specifies the previous meeting end time.
    *
    * @return DateTimeTimeZone The previousEndDateTime
    */
    public function getPreviousEndDateTime()
    {
        if (array_key_exists("previousEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["previousEndDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["previousEndDateTime"];
            } else {
                $this->_propDict["previousEndDateTime"] = new DateTimeTimeZone($this->_propDict["previousEndDateTime"]);
                return $this->_propDict["previousEndDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previousEndDateTime
    * If the meeting update changes the meeting end time, this property specifies the previous meeting end time.
    *
    * @param DateTimeTimeZone $val The previousEndDateTime
    *
    * @return EventMessageRequest
    */
    public function setPreviousEndDateTime($val)
    {
        $this->_propDict["previousEndDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the previousLocation
    * If the meeting update changes the meeting location, this property specifies the previous meeting location.
    *
    * @return Location The previousLocation
    */
    public function getPreviousLocation()
    {
        if (array_key_exists("previousLocation", $this->_propDict)) {
            if (is_a($this->_propDict["previousLocation"], "\Microsoft\Graph\Model\Location")) {
                return $this->_propDict["previousLocation"];
            } else {
                $this->_propDict["previousLocation"] = new Location($this->_propDict["previousLocation"]);
                return $this->_propDict["previousLocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previousLocation
    * If the meeting update changes the meeting location, this property specifies the previous meeting location.
    *
    * @param Location $val The previousLocation
    *
    * @return EventMessageRequest
    */
    public function setPreviousLocation($val)
    {
        $this->_propDict["previousLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the previousStartDateTime
    * If the meeting update changes the meeting start time, this property specifies the previous meeting start time.
    *
    * @return DateTimeTimeZone The previousStartDateTime
    */
    public function getPreviousStartDateTime()
    {
        if (array_key_exists("previousStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["previousStartDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["previousStartDateTime"];
            } else {
                $this->_propDict["previousStartDateTime"] = new DateTimeTimeZone($this->_propDict["previousStartDateTime"]);
                return $this->_propDict["previousStartDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previousStartDateTime
    * If the meeting update changes the meeting start time, this property specifies the previous meeting start time.
    *
    * @param DateTimeTimeZone $val The previousStartDateTime
    *
    * @return EventMessageRequest
    */
    public function setPreviousStartDateTime($val)
    {
        $this->_propDict["previousStartDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the responseRequested
    * Set to true if the sender would like the invitee to send a response to the requested meeting.
    *
    * @return bool The responseRequested
    */
    public function getResponseRequested()
    {
        if (array_key_exists("responseRequested", $this->_propDict)) {
            return $this->_propDict["responseRequested"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the responseRequested
    * Set to true if the sender would like the invitee to send a response to the requested meeting.
    *
    * @param bool $val The responseRequested
    *
    * @return EventMessageRequest
    */
    public function setResponseRequested($val)
    {
        $this->_propDict["responseRequested"] = boolval($val);
        return $this;
    }
    
}
