<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RequestSchedule File
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
* RequestSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RequestSchedule extends Entity
{

    /**
    * Gets the expiration
    * When the access should expire.
    *
    * @return ExpirationPattern The expiration
    */
    public function getExpiration()
    {
        if (array_key_exists("expiration", $this->_propDict)) {
            if (is_a($this->_propDict["expiration"], "\Beta\Microsoft\Graph\Model\ExpirationPattern")) {
                return $this->_propDict["expiration"];
            } else {
                $this->_propDict["expiration"] = new ExpirationPattern($this->_propDict["expiration"]);
                return $this->_propDict["expiration"];
            }
        }
        return null;
    }

    /**
    * Sets the expiration
    * When the access should expire.
    *
    * @param ExpirationPattern $val The value to assign to the expiration
    *
    * @return RequestSchedule The RequestSchedule
    */
    public function setExpiration($val)
    {
        $this->_propDict["expiration"] = $val;
         return $this;
    }

    /**
    * Gets the recurrence
    * For recurring access. Not used at present.
    *
    * @return PatternedRecurrence The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "\Beta\Microsoft\Graph\Model\PatternedRecurrence")) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrence
    * For recurring access. Not used at present.
    *
    * @param PatternedRecurrence $val The value to assign to the recurrence
    *
    * @return RequestSchedule The RequestSchedule
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
         return $this;
    }

    /**
    * Gets the startDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return RequestSchedule The RequestSchedule
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
}
