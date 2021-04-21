<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExpirationPattern File
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
* ExpirationPattern class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExpirationPattern extends Entity
{

    /**
    * Gets the duration
    * The requestor's desired duration of access. If specified in a request, endDateTime should not be present.
    *
    * @return Duration The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            if (is_a($this->_propDict["duration"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["duration"];
            } else {
                $this->_propDict["duration"] = new Duration($this->_propDict["duration"]);
                return $this->_propDict["duration"];
            }
        }
        return null;
    }

    /**
    * Sets the duration
    * The requestor's desired duration of access. If specified in a request, endDateTime should not be present.
    *
    * @param Duration $val The value to assign to the duration
    *
    * @return ExpirationPattern The ExpirationPattern
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
         return $this;
    }

    /**
    * Gets the endDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return ExpirationPattern The ExpirationPattern
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the type
    * The requestor's desired expiration pattern type.
    *
    * @return ExpirationPatternType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\ExpirationPatternType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new ExpirationPatternType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The requestor's desired expiration pattern type.
    *
    * @param ExpirationPatternType $val The value to assign to the type
    *
    * @return ExpirationPattern The ExpirationPattern
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
