<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemAddress File
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
* ItemAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemAddress extends ItemFacet
{
    /**
    * Gets the detail
    * Details about the address itself.
    *
    * @return PhysicalAddress The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "\Beta\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new PhysicalAddress($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the detail
    * Details about the address itself.
    *
    * @param PhysicalAddress $val The detail
    *
    * @return ItemAddress
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Friendly name the user has assigned to this address.
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
    * Friendly name the user has assigned to this address.
    *
    * @param string $val The displayName
    *
    * @return ItemAddress
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the geoCoordinates
    * The geocoordinates of the address.
    *
    * @return GeoCoordinates The geoCoordinates
    */
    public function getGeoCoordinates()
    {
        if (array_key_exists("geoCoordinates", $this->_propDict)) {
            if (is_a($this->_propDict["geoCoordinates"], "\Beta\Microsoft\Graph\Model\GeoCoordinates")) {
                return $this->_propDict["geoCoordinates"];
            } else {
                $this->_propDict["geoCoordinates"] = new GeoCoordinates($this->_propDict["geoCoordinates"]);
                return $this->_propDict["geoCoordinates"];
            }
        }
        return null;
    }
    
    /**
    * Sets the geoCoordinates
    * The geocoordinates of the address.
    *
    * @param GeoCoordinates $val The geoCoordinates
    *
    * @return ItemAddress
    */
    public function setGeoCoordinates($val)
    {
        $this->_propDict["geoCoordinates"] = $val;
        return $this;
    }
    
}
