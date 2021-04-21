<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Attendee File
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
* Attendee class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Attendee extends AttendeeBase
{

    /**
    * Gets the proposedNewTime
    * An alternate date/time proposed by the attendee for a meeting request to start and end. If the attendee hasn't proposed another time, then this property is not included in a response of a GET event.
    *
    * @return TimeSlot The proposedNewTime
    */
    public function getProposedNewTime()
    {
        if (array_key_exists("proposedNewTime", $this->_propDict)) {
            if (is_a($this->_propDict["proposedNewTime"], "\Microsoft\Graph\Model\TimeSlot")) {
                return $this->_propDict["proposedNewTime"];
            } else {
                $this->_propDict["proposedNewTime"] = new TimeSlot($this->_propDict["proposedNewTime"]);
                return $this->_propDict["proposedNewTime"];
            }
        }
        return null;
    }

    /**
    * Sets the proposedNewTime
    * An alternate date/time proposed by the attendee for a meeting request to start and end. If the attendee hasn't proposed another time, then this property is not included in a response of a GET event.
    *
    * @param TimeSlot $val The value to assign to the proposedNewTime
    *
    * @return Attendee The Attendee
    */
    public function setProposedNewTime($val)
    {
        $this->_propDict["proposedNewTime"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * The attendee's response (none, accepted, declined, etc.) for the event and date-time that the response was sent.
    *
    * @return ResponseStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\ResponseStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ResponseStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The attendee's response (none, accepted, declined, etc.) for the event and date-time that the response was sent.
    *
    * @param ResponseStatus $val The value to assign to the status
    *
    * @return Attendee The Attendee
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
