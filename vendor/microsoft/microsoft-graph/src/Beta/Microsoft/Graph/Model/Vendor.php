<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Vendor File
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
* Vendor class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Vendor extends Entity
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
    * @return Vendor
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    
    /**
    * Gets the balance
    *
    * @return Decimal The balance
    */
    public function getBalance()
    {
        if (array_key_exists("balance", $this->_propDict)) {
            if (is_a($this->_propDict["balance"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["balance"];
            } else {
                $this->_propDict["balance"] = new Decimal($this->_propDict["balance"]);
                return $this->_propDict["balance"];
            }
        }
        return null;
    }
    
    /**
    * Sets the balance
    *
    * @param Decimal $val The balance
    *
    * @return Vendor
    */
    public function setBalance($val)
    {
        $this->_propDict["balance"] = $val;
        return $this;
    }
    
    /**
    * Gets the blocked
    *
    * @return string The blocked
    */
    public function getBlocked()
    {
        if (array_key_exists("blocked", $this->_propDict)) {
            return $this->_propDict["blocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blocked
    *
    * @param string $val The blocked
    *
    * @return Vendor
    */
    public function setBlocked($val)
    {
        $this->_propDict["blocked"] = $val;
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
    * @return Vendor
    */
    public function setCurrencyCode($val)
    {
        $this->_propDict["currencyCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the currencyId
    *
    * @return string The currencyId
    */
    public function getCurrencyId()
    {
        if (array_key_exists("currencyId", $this->_propDict)) {
            return $this->_propDict["currencyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the currencyId
    *
    * @param string $val The currencyId
    *
    * @return Vendor
    */
    public function setCurrencyId($val)
    {
        $this->_propDict["currencyId"] = $val;
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
    * @return Vendor
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
    * @return Vendor
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
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
    * @return Vendor
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the number
    *
    * @return string The number
    */
    public function getNumber()
    {
        if (array_key_exists("number", $this->_propDict)) {
            return $this->_propDict["number"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the number
    *
    * @param string $val The number
    *
    * @return Vendor
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    
    /**
    * Gets the paymentMethodId
    *
    * @return string The paymentMethodId
    */
    public function getPaymentMethodId()
    {
        if (array_key_exists("paymentMethodId", $this->_propDict)) {
            return $this->_propDict["paymentMethodId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the paymentMethodId
    *
    * @param string $val The paymentMethodId
    *
    * @return Vendor
    */
    public function setPaymentMethodId($val)
    {
        $this->_propDict["paymentMethodId"] = $val;
        return $this;
    }
    
    /**
    * Gets the paymentTermsId
    *
    * @return string The paymentTermsId
    */
    public function getPaymentTermsId()
    {
        if (array_key_exists("paymentTermsId", $this->_propDict)) {
            return $this->_propDict["paymentTermsId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the paymentTermsId
    *
    * @param string $val The paymentTermsId
    *
    * @return Vendor
    */
    public function setPaymentTermsId($val)
    {
        $this->_propDict["paymentTermsId"] = $val;
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
    * @return Vendor
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the taxLiable
    *
    * @return bool The taxLiable
    */
    public function getTaxLiable()
    {
        if (array_key_exists("taxLiable", $this->_propDict)) {
            return $this->_propDict["taxLiable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the taxLiable
    *
    * @param bool $val The taxLiable
    *
    * @return Vendor
    */
    public function setTaxLiable($val)
    {
        $this->_propDict["taxLiable"] = boolval($val);
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
    * @return Vendor
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
    * @return Vendor
    */
    public function setWebsite($val)
    {
        $this->_propDict["website"] = $val;
        return $this;
    }
    
    /**
    * Gets the currency
    *
    * @return Currency The currency
    */
    public function getCurrency()
    {
        if (array_key_exists("currency", $this->_propDict)) {
            if (is_a($this->_propDict["currency"], "\Beta\Microsoft\Graph\Model\Currency")) {
                return $this->_propDict["currency"];
            } else {
                $this->_propDict["currency"] = new Currency($this->_propDict["currency"]);
                return $this->_propDict["currency"];
            }
        }
        return null;
    }
    
    /**
    * Sets the currency
    *
    * @param Currency $val The currency
    *
    * @return Vendor
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    
    /**
    * Gets the paymentMethod
    *
    * @return PaymentMethod The paymentMethod
    */
    public function getPaymentMethod()
    {
        if (array_key_exists("paymentMethod", $this->_propDict)) {
            if (is_a($this->_propDict["paymentMethod"], "\Beta\Microsoft\Graph\Model\PaymentMethod")) {
                return $this->_propDict["paymentMethod"];
            } else {
                $this->_propDict["paymentMethod"] = new PaymentMethod($this->_propDict["paymentMethod"]);
                return $this->_propDict["paymentMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the paymentMethod
    *
    * @param PaymentMethod $val The paymentMethod
    *
    * @return Vendor
    */
    public function setPaymentMethod($val)
    {
        $this->_propDict["paymentMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the paymentTerm
    *
    * @return PaymentTerm The paymentTerm
    */
    public function getPaymentTerm()
    {
        if (array_key_exists("paymentTerm", $this->_propDict)) {
            if (is_a($this->_propDict["paymentTerm"], "\Beta\Microsoft\Graph\Model\PaymentTerm")) {
                return $this->_propDict["paymentTerm"];
            } else {
                $this->_propDict["paymentTerm"] = new PaymentTerm($this->_propDict["paymentTerm"]);
                return $this->_propDict["paymentTerm"];
            }
        }
        return null;
    }
    
    /**
    * Sets the paymentTerm
    *
    * @param PaymentTerm $val The paymentTerm
    *
    * @return Vendor
    */
    public function setPaymentTerm($val)
    {
        $this->_propDict["paymentTerm"] = $val;
        return $this;
    }
    

     /** 
     * Gets the picture
     *
     * @return array The picture
     */
    public function getPicture()
    {
        if (array_key_exists("picture", $this->_propDict)) {
           return $this->_propDict["picture"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the picture
    *
    * @param Picture $val The picture
    *
    * @return Vendor
    */
    public function setPicture($val)
    {
		$this->_propDict["picture"] = $val;
        return $this;
    }
    
}
