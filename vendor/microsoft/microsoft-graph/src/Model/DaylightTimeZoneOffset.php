<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DaylightTimeZoneOffset File
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
* DaylightTimeZoneOffset class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DaylightTimeZoneOffset extends StandardTimeZoneOffset
{
    /**
    * Gets the daylightBias
    * The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes.
    *
    * @return int The daylightBias
    */
    public function getDaylightBias()
    {
        if (array_key_exists("daylightBias", $this->_propDict)) {
            return $this->_propDict["daylightBias"];
        } else {
            return null;
        }
    }

    /**
    * Sets the daylightBias
    * The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes.
    *
    * @param int $val The value of the daylightBias
    *
    * @return DaylightTimeZoneOffset
    */
    public function setDaylightBias($val)
    {
        $this->_propDict["daylightBias"] = $val;
        return $this;
    }
}
