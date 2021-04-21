<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttendeeAvailability File
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
* AttendeeAvailability class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttendeeAvailability extends Entity
{

    /**
    * Gets the attendee
    * The email address and type of attendee - whether it's a person or a resource, and whether required or optional if it's a person.
    *
    * @return AttendeeBase The attendee
    */
    public function getAttendee()
    {
        if (array_key_exists("attendee", $this->_propDict)) {
            if (is_a($this->_propDict["attendee"], "\Beta\Microsoft\Graph\Model\AttendeeBase")) {
                return $this->_propDict["attendee"];
            } else {
                $this->_propDict["attendee"] = new AttendeeBase($this->_propDict["attendee"]);
                return $this->_propDict["attendee"];
            }
        }
        return null;
    }

    /**
    * Sets the attendee
    * The email address and type of attendee - whether it's a person or a resource, and whether required or optional if it's a person.
    *
    * @param AttendeeBase $val The value to assign to the attendee
    *
    * @return AttendeeAvailability The AttendeeAvailability
    */
    public function setAttendee($val)
    {
        $this->_propDict["attendee"] = $val;
         return $this;
    }

    /**
    * Gets the availability
    * The availability status of the attendee. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    *
    * @return FreeBusyStatus The availability
    */
    public function getAvailability()
    {
        if (array_key_exists("availability", $this->_propDict)) {
            if (is_a($this->_propDict["availability"], "\Beta\Microsoft\Graph\Model\FreeBusyStatus")) {
                return $this->_propDict["availability"];
            } else {
                $this->_propDict["availability"] = new FreeBusyStatus($this->_propDict["availability"]);
                return $this->_propDict["availability"];
            }
        }
        return null;
    }

    /**
    * Sets the availability
    * The availability status of the attendee. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    *
    * @param FreeBusyStatus $val The value to assign to the availability
    *
    * @return AttendeeAvailability The AttendeeAvailability
    */
    public function setAvailability($val)
    {
        $this->_propDict["availability"] = $val;
         return $this;
    }
}
