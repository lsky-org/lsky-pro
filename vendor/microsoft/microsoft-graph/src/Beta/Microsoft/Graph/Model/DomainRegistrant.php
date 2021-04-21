<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainRegistrant File
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
* DomainRegistrant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DomainRegistrant extends Entity
{
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
    * @return DomainRegistrant
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
    * @return DomainRegistrant
    */
    public function setOrganization($val)
    {
        $this->_propDict["organization"] = $val;
        return $this;
    }
    /**
    * Gets the url
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    *
    * @param string $val The value of the url
    *
    * @return DomainRegistrant
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
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
    * @return DomainRegistrant
    */
    public function setVendor($val)
    {
        $this->_propDict["vendor"] = $val;
        return $this;
    }
}
