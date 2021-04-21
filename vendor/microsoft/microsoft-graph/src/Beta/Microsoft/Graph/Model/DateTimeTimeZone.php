<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DateTimeTimeZone File
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
* DateTimeTimeZone class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DateTimeTimeZone extends Entity
{
    /**
    * Gets the dateTime
    * A single point of time in a combined date and time representation ({date}T{time}). For example, '2019-04-16T09:00:00'.
    *
    * @return string The dateTime
    */
    public function getDateTime()
    {
        if (array_key_exists("dateTime", $this->_propDict)) {
            return $this->_propDict["dateTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dateTime
    * A single point of time in a combined date and time representation ({date}T{time}). For example, '2019-04-16T09:00:00'.
    *
    * @param string $val The value of the dateTime
    *
    * @return DateTimeTimeZone
    */
    public function setDateTime($val)
    {
        $this->_propDict["dateTime"] = $val;
        return $this;
    }
    /**
    * Gets the timeZone
    * Represents a time zone, for example, 'Pacific Standard Time'. See below for possible values.
    *
    * @return string The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    * Represents a time zone, for example, 'Pacific Standard Time'. See below for possible values.
    *
    * @param string $val The value of the timeZone
    *
    * @return DateTimeTimeZone
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }
}
