<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DateTimeTimeZoneType File
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
* DateTimeTimeZoneType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DateTimeTimeZoneType extends Entity
{
    /**
    * Gets the dateTime
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
    *
    * @param string $val The value of the dateTime
    *
    * @return DateTimeTimeZoneType
    */
    public function setDateTime($val)
    {
        $this->_propDict["dateTime"] = $val;
        return $this;
    }
}
