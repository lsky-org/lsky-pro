<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PostalAddressType File
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
* PostalAddressType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PostalAddressType extends Entity
{
    /**
    * Gets the city
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
    *
    * @param string $val The value of the city
    *
    * @return PostalAddressType
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    /**
    * Gets the countryLetterCode
    *
    * @return string The countryLetterCode
    */
    public function getCountryLetterCode()
    {
        if (array_key_exists("countryLetterCode", $this->_propDict)) {
            return $this->_propDict["countryLetterCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryLetterCode
    *
    * @param string $val The value of the countryLetterCode
    *
    * @return PostalAddressType
    */
    public function setCountryLetterCode($val)
    {
        $this->_propDict["countryLetterCode"] = $val;
        return $this;
    }
    /**
    * Gets the postalCode
    *
    * @return string The postalCode
    */
    public function getPostalCode()
    {
        if (array_key_exists("postalCode", $this->_propDict)) {
            return $this->_propDict["postalCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the postalCode
    *
    * @param string $val The value of the postalCode
    *
    * @return PostalAddressType
    */
    public function setPostalCode($val)
    {
        $this->_propDict["postalCode"] = $val;
        return $this;
    }
    /**
    * Gets the state
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
    *
    * @param string $val The value of the state
    *
    * @return PostalAddressType
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    /**
    * Gets the street
    *
    * @return string The street
    */
    public function getStreet()
    {
        if (array_key_exists("street", $this->_propDict)) {
            return $this->_propDict["street"];
        } else {
            return null;
        }
    }

    /**
    * Sets the street
    *
    * @param string $val The value of the street
    *
    * @return PostalAddressType
    */
    public function setStreet($val)
    {
        $this->_propDict["street"] = $val;
        return $this;
    }
}
