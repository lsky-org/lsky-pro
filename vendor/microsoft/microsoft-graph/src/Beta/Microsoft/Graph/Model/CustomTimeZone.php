<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomTimeZone File
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
* CustomTimeZone class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomTimeZone extends TimeZoneBase
{
    /**
    * Gets the bias
    * The time offset of the time zone from Coordinated Universal Time (UTC). This value is in minutes. Time zones that are ahead of UTC have a positive offset; time zones that are behind UTC have a negative offset.
    *
    * @return int The bias
    */
    public function getBias()
    {
        if (array_key_exists("bias", $this->_propDict)) {
            return $this->_propDict["bias"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bias
    * The time offset of the time zone from Coordinated Universal Time (UTC). This value is in minutes. Time zones that are ahead of UTC have a positive offset; time zones that are behind UTC have a negative offset.
    *
    * @param int $val The value of the bias
    *
    * @return CustomTimeZone
    */
    public function setBias($val)
    {
        $this->_propDict["bias"] = $val;
        return $this;
    }

    /**
    * Gets the daylightOffset
    * Specifies when the time zone switches from standard time to daylight saving time.
    *
    * @return DaylightTimeZoneOffset The daylightOffset
    */
    public function getDaylightOffset()
    {
        if (array_key_exists("daylightOffset", $this->_propDict)) {
            if (is_a($this->_propDict["daylightOffset"], "\Beta\Microsoft\Graph\Model\DaylightTimeZoneOffset")) {
                return $this->_propDict["daylightOffset"];
            } else {
                $this->_propDict["daylightOffset"] = new DaylightTimeZoneOffset($this->_propDict["daylightOffset"]);
                return $this->_propDict["daylightOffset"];
            }
        }
        return null;
    }

    /**
    * Sets the daylightOffset
    * Specifies when the time zone switches from standard time to daylight saving time.
    *
    * @param DaylightTimeZoneOffset $val The value to assign to the daylightOffset
    *
    * @return CustomTimeZone The CustomTimeZone
    */
    public function setDaylightOffset($val)
    {
        $this->_propDict["daylightOffset"] = $val;
         return $this;
    }

    /**
    * Gets the standardOffset
    * Specifies when the time zone switches from daylight saving time to standard time.
    *
    * @return StandardTimeZoneOffset The standardOffset
    */
    public function getStandardOffset()
    {
        if (array_key_exists("standardOffset", $this->_propDict)) {
            if (is_a($this->_propDict["standardOffset"], "\Beta\Microsoft\Graph\Model\StandardTimeZoneOffset")) {
                return $this->_propDict["standardOffset"];
            } else {
                $this->_propDict["standardOffset"] = new StandardTimeZoneOffset($this->_propDict["standardOffset"]);
                return $this->_propDict["standardOffset"];
            }
        }
        return null;
    }

    /**
    * Sets the standardOffset
    * Specifies when the time zone switches from daylight saving time to standard time.
    *
    * @param StandardTimeZoneOffset $val The value to assign to the standardOffset
    *
    * @return CustomTimeZone The CustomTimeZone
    */
    public function setStandardOffset($val)
    {
        $this->_propDict["standardOffset"] = $val;
         return $this;
    }
}
