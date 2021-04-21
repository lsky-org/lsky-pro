<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ShiftActivity File
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
* ShiftActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ShiftActivity extends Entity
{
    /**
    * Gets the code
    * Customer defined code for the shiftActivity. Required.
    *
    * @return string The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    * Customer defined code for the shiftActivity. Required.
    *
    * @param string $val The value of the code
    *
    * @return ShiftActivity
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The name of the shiftActivity. Required.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The name of the shiftActivity. Required.
    *
    * @param string $val The value of the displayName
    *
    * @return ShiftActivity
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    * The end date and time for the shiftActivity. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
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
    * The end date and time for the shiftActivity. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return ShiftActivity The ShiftActivity
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the isPaid
    * Indicates whether the microsoft.graph.user should be paid for the activity during their shift. Required.
    *
    * @return bool The isPaid
    */
    public function getIsPaid()
    {
        if (array_key_exists("isPaid", $this->_propDict)) {
            return $this->_propDict["isPaid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPaid
    * Indicates whether the microsoft.graph.user should be paid for the activity during their shift. Required.
    *
    * @param bool $val The value of the isPaid
    *
    * @return ShiftActivity
    */
    public function setIsPaid($val)
    {
        $this->_propDict["isPaid"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * The start date and time for the shiftActivity. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
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
    * The start date and time for the shiftActivity. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return ShiftActivity The ShiftActivity
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the theme
    *
    * @return ScheduleEntityTheme The theme
    */
    public function getTheme()
    {
        if (array_key_exists("theme", $this->_propDict)) {
            if (is_a($this->_propDict["theme"], "\Beta\Microsoft\Graph\Model\ScheduleEntityTheme")) {
                return $this->_propDict["theme"];
            } else {
                $this->_propDict["theme"] = new ScheduleEntityTheme($this->_propDict["theme"]);
                return $this->_propDict["theme"];
            }
        }
        return null;
    }

    /**
    * Sets the theme
    *
    * @param ScheduleEntityTheme $val The value to assign to the theme
    *
    * @return ShiftActivity The ShiftActivity
    */
    public function setTheme($val)
    {
        $this->_propDict["theme"] = $val;
         return $this;
    }
}
