<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Customer File
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
* Customer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Customer extends Entity
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
    * @return Customer
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the shipmentMethodId
    *
    * @return string The shipmentMethodId
    */
    public function getShipmentMethodId()
    {
        if (array_key_exists("shipmentMethodId", $this->_propDict)) {
            return $this->_propDict["shipmentMethodId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shipmentMethodId
    *
    * @param string $val The shipmentMethodId
    *
    * @return Customer
    */
    public function setShipmentMethodId($val)
    {
        $this->_propDict["shipmentMethodId"] = $val;
        return $this;
    }
    
    /**
    * Gets the taxAreaDisplayName
    *
    * @return string The taxAreaDisplayName
    */
    public function getTaxAreaDisplayName()
    {
        if (array_key_exists("taxAreaDisplayName", $this->_propDict)) {
            return $this->_propDict["taxAreaDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the taxAreaDisplayName
    *
    * @param string $val The taxAreaDisplayName
    *
    * @return Customer
    */
    public function setTaxAreaDisplayName($val)
    {
        $this->_propDict["taxAreaDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the taxAreaId
    *
    * @return string The taxAreaId
    */
    public function getTaxAreaId()
    {
        if (array_key_exists("taxAreaId", $this->_propDict)) {
            return $this->_propDict["taxAreaId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the taxAreaId
    *
    * @param string $val The taxAreaId
    *
    * @return Customer
    */
    public function setTaxAreaId($val)
    {
        $this->_propDict["taxAreaId"] = $val;
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
    * @return Customer
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
    * @return Customer
    */
    public function setTaxRegistrationNumber($val)
    {
        $this->_propDict["taxRegistrationNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    *
    * @param string $val The type
    *
    * @return Customer
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
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
    * @return Customer
    */
    public function setPicture($val)
    {
		$this->_propDict["picture"] = $val;
        return $this;
    }
    
    /**
    * Gets the shipmentMethod
    *
    * @return ShipmentMethod The shipmentMethod
    */
    public function getShipmentMethod()
    {
        if (array_key_exists("shipmentMethod", $this->_propDict)) {
            if (is_a($this->_propDict["shipmentMethod"], "\Beta\Microsoft\Graph\Model\ShipmentMethod")) {
                return $this->_propDict["shipmentMethod"];
            } else {
                $this->_propDict["shipmentMethod"] = new ShipmentMethod($this->_propDict["shipmentMethod"]);
                return $this->_propDict["shipmentMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the shipmentMethod
    *
    * @param ShipmentMethod $val The shipmentMethod
    *
    * @return Customer
    */
    public function setShipmentMethod($val)
    {
        $this->_propDict["shipmentMethod"] = $val;
        return $this;
    }
    
}
