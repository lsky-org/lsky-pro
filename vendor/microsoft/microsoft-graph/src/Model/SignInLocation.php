<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInLocation File
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
* SignInLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInLocation extends Entity
{
    /**
    * Gets the city
    * Provides the city where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
    *
    * @return string The city
    */
    public function getCity()
    {
        if (array_key_exists("city", $this->_propDict)) {
            return $this->_propDict["city"];
        } else {
            return null;
        }
    }

    /**
    * Sets the city
    * Provides the city where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
    *
    * @param string $val The value of the city
    *
    * @return SignInLocation
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    /**
    * Gets the countryOrRegion
    * Provides the country code info (2 letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity.
    *
    * @return string The countryOrRegion
    */
    public function getCountryOrRegion()
    {
        if (array_key_exists("countryOrRegion", $this->_propDict)) {
            return $this->_propDict["countryOrRegion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryOrRegion
    * Provides the country code info (2 letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity.
    *
    * @param string $val The value of the countryOrRegion
    *
    * @return SignInLocation
    */
    public function setCountryOrRegion($val)
    {
        $this->_propDict["countryOrRegion"] = $val;
        return $this;
    }

    /**
    * Gets the geoCoordinates
    * Provides the latitude, longitude and altitude where the sign-in originated.
    *
    * @return GeoCoordinates The geoCoordinates
    */
    public function getGeoCoordinates()
    {
        if (array_key_exists("geoCoordinates", $this->_propDict)) {
            if (is_a($this->_propDict["geoCoordinates"], "\Microsoft\Graph\Model\GeoCoordinates")) {
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
    * Provides the latitude, longitude and altitude where the sign-in originated.
    *
    * @param GeoCoordinates $val The value to assign to the geoCoordinates
    *
    * @return SignInLocation The SignInLocation
    */
    public function setGeoCoordinates($val)
    {
        $this->_propDict["geoCoordinates"] = $val;
         return $this;
    }
    /**
    * Gets the state
    * Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    * Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
    *
    * @param string $val The value of the state
    *
    * @return SignInLocation
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
}
