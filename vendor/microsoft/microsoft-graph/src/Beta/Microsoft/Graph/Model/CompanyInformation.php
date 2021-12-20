<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CompanyInformation File
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
* CompanyInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CompanyInformation extends Entity
{
    /**
    * Gets the address
    *
    * @return PostalAddressType The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "\Beta\Microsoft\Graph\Model\PostalAddressType")) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new PostalAddressType($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }
    
    /**
    * Sets the address
    *
    * @param PostalAddressType $val The address
    *
    * @return CompanyInformation
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    
    /**
    * Gets the currencyCode
    *
    * @return string The currencyCode
    */
    public function getCurrencyCode()
    {
        if (array_key_exists("currencyCode", $this->_propDict)) {
            return $this->_propDict["currencyCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the currencyCode
    *
    * @param string $val The currencyCode
    *
    * @return CompanyInformation
    */
    public function setCurrencyCode($val)
    {
        $this->_propDict["currencyCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the currentFiscalYearStartDate
    *
    * @return \DateTime The currentFiscalYearStartDate
    */
    public function getCurrentFiscalYearStartDate()
    {
        if (array_key_exists("currentFiscalYearStartDate", $this->_propDict)) {
            if (is_a($this->_propDict["currentFiscalYearStartDate"], "\DateTime")) {
                return $this->_propDict["currentFiscalYearStartDate"];
            } else {
                $this->_propDict["currentFiscalYearStartDate"] = new \DateTime($this->_propDict["currentFiscalYearStartDate"]);
                return $this->_propDict["currentFiscalYearStartDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the currentFiscalYearStartDate
    *
    * @param \DateTime $val The currentFiscalYearStartDate
    *
    * @return CompanyInformation
    */
    public function setCurrentFiscalYearStartDate($val)
    {
        $this->_propDict["currentFiscalYearStartDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return CompanyInformation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the email
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    *
    * @param string $val The email
    *
    * @return CompanyInformation
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the faxNumber
    *
    * @return string The faxNumber
    */
    public function getFaxNumber()
    {
        if (array_key_exists("faxNumber", $this->_propDict)) {
            return $this->_propDict["faxNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the faxNumber
    *
    * @param string $val The faxNumber
    *
    * @return CompanyInformation
    */
    public function setFaxNumber($val)
    {
        $this->_propDict["faxNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the industry
    *
    * @return string The industry
    */
    public function getIndustry()
    {
        if (array_key_exists("industry", $this->_propDict)) {
            return $this->_propDict["industry"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the industry
    *
    * @param string $val The industry
    *
    * @return CompanyInformation
    */
    public function setIndustry($val)
    {
        $this->_propDict["industry"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return CompanyInformation
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the phoneNumber
    *
    * @return string The phoneNumber
    */
    public function getPhoneNumber()
    {
        if (array_key_exists("phoneNumber", $this->_propDict)) {
            return $this->_propDict["phoneNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phoneNumber
    *
    * @param string $val The phoneNumber
    *
    * @return CompanyInformation
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the picture
    *
    * @return \GuzzleHttp\Psr7\Stream The picture
    */
    public function getPicture()
    {
        if (array_key_exists("picture", $this->_propDict)) {
            if (is_a($this->_propDict["picture"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["picture"];
            } else {
                $this->_propDict["picture"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["picture"]);
                return $this->_propDict["picture"];
            }
        }
        return null;
    }
    
    /**
    * Sets the picture
    *
    * @param \GuzzleHttp\Psr7\Stream $val The picture
    *
    * @return CompanyInformation
    */
    public function setPicture($val)
    {
        $this->_propDict["picture"] = $val;
        return $this;
    }
    
    /**
    * Gets the taxRegistrationNumber
    *
    * @return string The taxRegistrationNumber
    */
    public function getTaxRegistrationNumber()
    {
        if (array_key_exists("taxRegistrationNumber", $this->_propDict)) {
            return $this->_propDict["taxRegistrationNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the taxRegistrationNumber
    *
    * @param string $val The taxRegistrationNumber
    *
    * @return CompanyInformation
    */
    public function setTaxRegistrationNumber($val)
    {
        $this->_propDict["taxRegistrationNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the website
    *
    * @return string The website
    */
    public function getWebsite()
    {
        if (array_key_exists("website", $this->_propDict)) {
            return $this->_propDict["website"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the website
    *
    * @param string $val The website
    *
    * @return CompanyInformation
    */
    public function setWebsite($val)
    {
        $this->_propDict["website"] = $val;
        return $this;
    }
    
}
