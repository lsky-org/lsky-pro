<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Place File
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
* Place class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Place extends Entity
{
    /**
    * Gets the address
    * The street address of the place.
    *
    * @return PhysicalAddress The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "\Beta\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new PhysicalAddress($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }
    
    /**
    * Sets the address
    * The street address of the place.
    *
    * @param PhysicalAddress $val The address
    *
    * @return Place
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name associated with the place.
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
    * The name associated with the place.
    *
    * @param string $val The displayName
    *
    * @return Place
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the geoCoordinates
    * Specifies the place location in latitude, longitude and (optionally) altitude coordinates.
    *
    * @return OutlookGeoCoordinates The geoCoordinates
    */
    public function getGeoCoordinates()
    {
        if (array_key_exists("geoCoordinates", $this->_propDict)) {
            if (is_a($this->_propDict["geoCoordinates"], "\Beta\Microsoft\Graph\Model\OutlookGeoCoordinates")) {
                return $this->_propDict["geoCoordinates"];
            } else {
                $this->_propDict["geoCoordinates"] = new OutlookGeoCoordinates($this->_propDict["geoCoordinates"]);
                return $this->_propDict["geoCoordinates"];
            }
        }
        return null;
    }
    
    /**
    * Sets the geoCoordinates
    * Specifies the place location in latitude, longitude and (optionally) altitude coordinates.
    *
    * @param OutlookGeoCoordinates $val The geoCoordinates
    *
    * @return Place
    */
    public function setGeoCoordinates($val)
    {
        $this->_propDict["geoCoordinates"] = $val;
        return $this;
    }
    
    /**
    * Gets the phone
    * The phone number of the place.
    *
    * @return string The phone
    */
    public function getPhone()
    {
        if (array_key_exists("phone", $this->_propDict)) {
            return $this->_propDict["phone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phone
    * The phone number of the place.
    *
    * @param string $val The phone
    *
    * @return Place
    */
    public function setPhone($val)
    {
        $this->_propDict["phone"] = $val;
        return $this;
    }
    
}
