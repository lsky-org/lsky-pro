<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CompanyDetail File
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
* CompanyDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CompanyDetail extends Entity
{

    /**
    * Gets the address
    * Address of the company.
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
    * Address of the company.
    *
    * @param PhysicalAddress $val The value to assign to the address
    *
    * @return CompanyDetail The CompanyDetail
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
         return $this;
    }
    /**
    * Gets the department
    * Department Name within a company.
    *
    * @return string The department
    */
    public function getDepartment()
    {
        if (array_key_exists("department", $this->_propDict)) {
            return $this->_propDict["department"];
        } else {
            return null;
        }
    }

    /**
    * Sets the department
    * Department Name within a company.
    *
    * @param string $val The value of the department
    *
    * @return CompanyDetail
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Company name.
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
    * Company name.
    *
    * @param string $val The value of the displayName
    *
    * @return CompanyDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the officeLocation
    * Office Location of the person referred to.
    *
    * @return string The officeLocation
    */
    public function getOfficeLocation()
    {
        if (array_key_exists("officeLocation", $this->_propDict)) {
            return $this->_propDict["officeLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the officeLocation
    * Office Location of the person referred to.
    *
    * @param string $val The value of the officeLocation
    *
    * @return CompanyDetail
    */
    public function setOfficeLocation($val)
    {
        $this->_propDict["officeLocation"] = $val;
        return $this;
    }
    /**
    * Gets the pronunciation
    * Pronunciation guide for the company name.
    *
    * @return string The pronunciation
    */
    public function getPronunciation()
    {
        if (array_key_exists("pronunciation", $this->_propDict)) {
            return $this->_propDict["pronunciation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pronunciation
    * Pronunciation guide for the company name.
    *
    * @param string $val The value of the pronunciation
    *
    * @return CompanyDetail
    */
    public function setPronunciation($val)
    {
        $this->_propDict["pronunciation"] = $val;
        return $this;
    }
    /**
    * Gets the webUrl
    * Link to the company home page.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * Link to the company home page.
    *
    * @param string $val The value of the webUrl
    *
    * @return CompanyDetail
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
}
