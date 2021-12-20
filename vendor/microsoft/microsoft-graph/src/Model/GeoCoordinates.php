<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GeoCoordinates File
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
* GeoCoordinates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GeoCoordinates extends Entity
{
    /**
    * Gets the altitude
    * Optional. The altitude (height), in feet,  above sea level for the item. Read-only.
    *
    * @return float The altitude
    */
    public function getAltitude()
    {
        if (array_key_exists("altitude", $this->_propDict)) {
            return $this->_propDict["altitude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the altitude
    * Optional. The altitude (height), in feet,  above sea level for the item. Read-only.
    *
    * @param float $val The value of the altitude
    *
    * @return GeoCoordinates
    */
    public function setAltitude($val)
    {
        $this->_propDict["altitude"] = $val;
        return $this;
    }
    /**
    * Gets the latitude
    * Optional. The latitude, in decimal, for the item. Writable on OneDrive Personal.
    *
    * @return float The latitude
    */
    public function getLatitude()
    {
        if (array_key_exists("latitude", $this->_propDict)) {
            return $this->_propDict["latitude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the latitude
    * Optional. The latitude, in decimal, for the item. Writable on OneDrive Personal.
    *
    * @param float $val The value of the latitude
    *
    * @return GeoCoordinates
    */
    public function setLatitude($val)
    {
        $this->_propDict["latitude"] = $val;
        return $this;
    }
    /**
    * Gets the longitude
    * Optional. The longitude, in decimal, for the item. Writable on OneDrive Personal.
    *
    * @return float The longitude
    */
    public function getLongitude()
    {
        if (array_key_exists("longitude", $this->_propDict)) {
            return $this->_propDict["longitude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the longitude
    * Optional. The longitude, in decimal, for the item. Writable on OneDrive Personal.
    *
    * @param float $val The value of the longitude
    *
    * @return GeoCoordinates
    */
    public function setLongitude($val)
    {
        $this->_propDict["longitude"] = $val;
        return $this;
    }
}
