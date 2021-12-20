<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CircularGeofenceManagementCondition File
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
* CircularGeofenceManagementCondition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CircularGeofenceManagementCondition extends LocationManagementCondition
{
    /**
    * Gets the latitude
    * Latitude in degrees, between -90 and +90 inclusive.
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
    * Latitude in degrees, between -90 and +90 inclusive.
    *
    * @param float $val The latitude
    *
    * @return CircularGeofenceManagementCondition
    */
    public function setLatitude($val)
    {
        $this->_propDict["latitude"] = $val;
        return $this;
    }
    
    /**
    * Gets the longitude
    * Longitude in degrees, between -180 and +180 inclusive.
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
    * Longitude in degrees, between -180 and +180 inclusive.
    *
    * @param float $val The longitude
    *
    * @return CircularGeofenceManagementCondition
    */
    public function setLongitude($val)
    {
        $this->_propDict["longitude"] = $val;
        return $this;
    }
    
    /**
    * Gets the radiusInMeters
    * Radius in meters.
    *
    * @return Single The radiusInMeters
    */
    public function getRadiusInMeters()
    {
        if (array_key_exists("radiusInMeters", $this->_propDict)) {
            if (is_a($this->_propDict["radiusInMeters"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["radiusInMeters"];
            } else {
                $this->_propDict["radiusInMeters"] = new Single($this->_propDict["radiusInMeters"]);
                return $this->_propDict["radiusInMeters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the radiusInMeters
    * Radius in meters.
    *
    * @param Single $val The radiusInMeters
    *
    * @return CircularGeofenceManagementCondition
    */
    public function setRadiusInMeters($val)
    {
        $this->_propDict["radiusInMeters"] = $val;
        return $this;
    }
    
}
