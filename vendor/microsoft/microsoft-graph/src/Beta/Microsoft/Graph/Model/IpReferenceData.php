<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpReferenceData File
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
* IpReferenceData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IpReferenceData extends Entity
{
    /**
    * Gets the asn
    *
    * @return int The asn
    */
    public function getAsn()
    {
        if (array_key_exists("asn", $this->_propDict)) {
            return $this->_propDict["asn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the asn
    *
    * @param int $val The value of the asn
    *
    * @return IpReferenceData
    */
    public function setAsn($val)
    {
        $this->_propDict["asn"] = $val;
        return $this;
    }
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
    * @return IpReferenceData
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    /**
    * Gets the countryOrRegionCode
    *
    * @return string The countryOrRegionCode
    */
    public function getCountryOrRegionCode()
    {
        if (array_key_exists("countryOrRegionCode", $this->_propDict)) {
            return $this->_propDict["countryOrRegionCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryOrRegionCode
    *
    * @param string $val The value of the countryOrRegionCode
    *
    * @return IpReferenceData
    */
    public function setCountryOrRegionCode($val)
    {
        $this->_propDict["countryOrRegionCode"] = $val;
        return $this;
    }
    /**
    * Gets the organization
    *
    * @return string The organization
    */
    public function getOrganization()
    {
        if (array_key_exists("organization", $this->_propDict)) {
            return $this->_propDict["organization"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organization
    *
    * @param string $val The value of the organization
    *
    * @return IpReferenceData
    */
    public function setOrganization($val)
    {
        $this->_propDict["organization"] = $val;
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
    * @return IpReferenceData
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    /**
    * Gets the vendor
    *
    * @return string The vendor
    */
    public function getVendor()
    {
        if (array_key_exists("vendor", $this->_propDict)) {
            return $this->_propDict["vendor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vendor
    *
    * @param string $val The value of the vendor
    *
    * @return IpReferenceData
    */
    public function setVendor($val)
    {
        $this->_propDict["vendor"] = $val;
        return $this;
    }
}
