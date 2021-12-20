<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Location File
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
* Location class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Location extends Entity
{

    /**
    * Gets the address
    * The street address of the location.
    *
    * @return PhysicalAddress The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "\Microsoft\Graph\Model\PhysicalAddress")) {
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
    * The street address of the location.
    *
    * @param PhysicalAddress $val The value to assign to the address
    *
    * @return Location The Location
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
         return $this;
    }

    /**
    * Gets the coordinates
    * The geographic coordinates and elevation of the location.
    *
    * @return OutlookGeoCoordinates The coordinates
    */
    public function getCoordinates()
    {
        if (array_key_exists("coordinates", $this->_propDict)) {
            if (is_a($this->_propDict["coordinates"], "\Microsoft\Graph\Model\OutlookGeoCoordinates")) {
                return $this->_propDict["coordinates"];
            } else {
                $this->_propDict["coordinates"] = new OutlookGeoCoordinates($this->_propDict["coordinates"]);
                return $this->_propDict["coordinates"];
            }
        }
        return null;
    }

    /**
    * Sets the coordinates
    * The geographic coordinates and elevation of the location.
    *
    * @param OutlookGeoCoordinates $val The value to assign to the coordinates
    *
    * @return Location The Location
    */
    public function setCoordinates($val)
    {
        $this->_propDict["coordinates"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * The name associated with the location.
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
    * The name associated with the location.
    *
    * @param string $val The value of the displayName
    *
    * @return Location
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the locationEmailAddress
    * Optional email address of the location.
    *
    * @return string The locationEmailAddress
    */
    public function getLocationEmailAddress()
    {
        if (array_key_exists("locationEmailAddress", $this->_propDict)) {
            return $this->_propDict["locationEmailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locationEmailAddress
    * Optional email address of the location.
    *
    * @param string $val The value of the locationEmailAddress
    *
    * @return Location
    */
    public function setLocationEmailAddress($val)
    {
        $this->_propDict["locationEmailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the locationType
    * The type of location. Possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only.
    *
    * @return LocationType The locationType
    */
    public function getLocationType()
    {
        if (array_key_exists("locationType", $this->_propDict)) {
            if (is_a($this->_propDict["locationType"], "\Microsoft\Graph\Model\LocationType")) {
                return $this->_propDict["locationType"];
            } else {
                $this->_propDict["locationType"] = new LocationType($this->_propDict["locationType"]);
                return $this->_propDict["locationType"];
            }
        }
        return null;
    }

    /**
    * Sets the locationType
    * The type of location. Possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only.
    *
    * @param LocationType $val The value to assign to the locationType
    *
    * @return Location The Location
    */
    public function setLocationType($val)
    {
        $this->_propDict["locationType"] = $val;
         return $this;
    }
    /**
    * Gets the locationUri
    * Optional URI representing the location.
    *
    * @return string The locationUri
    */
    public function getLocationUri()
    {
        if (array_key_exists("locationUri", $this->_propDict)) {
            return $this->_propDict["locationUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locationUri
    * Optional URI representing the location.
    *
    * @param string $val The value of the locationUri
    *
    * @return Location
    */
    public function setLocationUri($val)
    {
        $this->_propDict["locationUri"] = $val;
        return $this;
    }
    /**
    * Gets the uniqueId
    * For internal use only.
    *
    * @return string The uniqueId
    */
    public function getUniqueId()
    {
        if (array_key_exists("uniqueId", $this->_propDict)) {
            return $this->_propDict["uniqueId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uniqueId
    * For internal use only.
    *
    * @param string $val The value of the uniqueId
    *
    * @return Location
    */
    public function setUniqueId($val)
    {
        $this->_propDict["uniqueId"] = $val;
        return $this;
    }

    /**
    * Gets the uniqueIdType
    * For internal use only.
    *
    * @return LocationUniqueIdType The uniqueIdType
    */
    public function getUniqueIdType()
    {
        if (array_key_exists("uniqueIdType", $this->_propDict)) {
            if (is_a($this->_propDict["uniqueIdType"], "\Microsoft\Graph\Model\LocationUniqueIdType")) {
                return $this->_propDict["uniqueIdType"];
            } else {
                $this->_propDict["uniqueIdType"] = new LocationUniqueIdType($this->_propDict["uniqueIdType"]);
                return $this->_propDict["uniqueIdType"];
            }
        }
        return null;
    }

    /**
    * Sets the uniqueIdType
    * For internal use only.
    *
    * @param LocationUniqueIdType $val The value to assign to the uniqueIdType
    *
    * @return Location The Location
    */
    public function setUniqueIdType($val)
    {
        $this->_propDict["uniqueIdType"] = $val;
         return $this;
    }
}
