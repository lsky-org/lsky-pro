<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SalesQuote File
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
* SalesQuote class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SalesQuote extends Entity
{
    /**
    * Gets the acceptedDate
    *
    * @return \DateTime The acceptedDate
    */
    public function getAcceptedDate()
    {
        if (array_key_exists("acceptedDate", $this->_propDict)) {
            if (is_a($this->_propDict["acceptedDate"], "\DateTime")) {
                return $this->_propDict["acceptedDate"];
            } else {
                $this->_propDict["acceptedDate"] = new \DateTime($this->_propDict["acceptedDate"]);
                return $this->_propDict["acceptedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the acceptedDate
    *
    * @param \DateTime $val The acceptedDate
    *
    * @return SalesQuote
    */
    public function setAcceptedDate($val)
    {
        $this->_propDict["acceptedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the billingPostalAddress
    *
    * @return PostalAddressType The billingPostalAddress
    */
    public function getBillingPostalAddress()
    {
        if (array_key_exists("billingPostalAddress", $this->_propDict)) {
            if (is_a($this->_propDict["billingPostalAddress"], "\Beta\Microsoft\Graph\Model\PostalAddressType")) {
                return $this->_propDict["billingPostalAddress"];
            } else {
                $this->_propDict["billingPostalAddress"] = new PostalAddressType($this->_propDict["billingPostalAddress"]);
                return $this->_propDict["billingPostalAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the billingPostalAddress
    *
    * @param PostalAddressType $val The billingPostalAddress
    *
    * @return SalesQuote
    */
    public function setBillingPostalAddress($val)
    {
        $this->_propDict["billingPostalAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the billToCustomerId
    *
    * @return string The billToCustomerId
    */
    public function getBillToCustomerId()
    {
        if (array_key_exists("billToCustomerId", $this->_propDict)) {
            return $this->_propDict["billToCustomerId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the billToCustomerId
    *
    * @param string $val The billToCustomerId
    *
    * @return SalesQuote
    */
    public function setBillToCustomerId($val)
    {
        $this->_propDict["billToCustomerId"] = $val;
        return $this;
    }
    
    /**
    * Gets the billToCustomerNumber
    *
    * @return string The billToCustomerNumber
    */
    public function getBillToCustomerNumber()
    {
        if (array_key_exists("billToCustomerNumber", $this->_propDict)) {
            return $this->_propDict["billToCustomerNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the billToCustomerNumber
    *
    * @param string $val The billToCustomerNumber
    *
    * @return SalesQuote
    */
    public function setBillToCustomerNumber($val)
    {
        $this->_propDict["billToCustomerNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the billToName
    *
    * @return string The billToName
    */
    public function getBillToName()
    {
        if (array_key_exists("billToName", $this->_propDict)) {
            return $this->_propDict["billToName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the billToName
    *
    * @param string $val The billToName
    *
    * @return SalesQuote
    */
    public function setBillToName($val)
    {
        $this->_propDict["billToName"] = $val;
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
    * @return SalesQuote
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
    * @return SalesQuote
    */
    public function setCurrencyId($val)
    {
        $this->_propDict["currencyId"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerId
    *
    * @return string The customerId
    */
    public function getCustomerId()
    {
        if (array_key_exists("customerId", $this->_propDict)) {
            return $this->_propDict["customerId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerId
    *
    * @param string $val The customerId
    *
    * @return SalesQuote
    */
    public function setCustomerId($val)
    {
        $this->_propDict["customerId"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerName
    *
    * @return string The customerName
    */
    public function getCustomerName()
    {
        if (array_key_exists("customerName", $this->_propDict)) {
            return $this->_propDict["customerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerName
    *
    * @param string $val The customerName
    *
    * @return SalesQuote
    */
    public function setCustomerName($val)
    {
        $this->_propDict["customerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerNumber
    *
    * @return string The customerNumber
    */
    public function getCustomerNumber()
    {
        if (array_key_exists("customerNumber", $this->_propDict)) {
            return $this->_propDict["customerNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerNumber
    *
    * @param string $val The customerNumber
    *
    * @return SalesQuote
    */
    public function setCustomerNumber($val)
    {
        $this->_propDict["customerNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the discountAmount
    *
    * @return Decimal The discountAmount
    */
    public function getDiscountAmount()
    {
        if (array_key_exists("discountAmount", $this->_propDict)) {
            if (is_a($this->_propDict["discountAmount"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["discountAmount"];
            } else {
                $this->_propDict["discountAmount"] = new Decimal($this->_propDict["discountAmount"]);
                return $this->_propDict["discountAmount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the discountAmount
    *
    * @param Decimal $val The discountAmount
    *
    * @return SalesQuote
    */
    public function setDiscountAmount($val)
    {
        $this->_propDict["discountAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the documentDate
    *
    * @return \DateTime The documentDate
    */
    public function getDocumentDate()
    {
        if (array_key_exists("documentDate", $this->_propDict)) {
            if (is_a($this->_propDict["documentDate"], "\DateTime")) {
                return $this->_propDict["documentDate"];
            } else {
                $this->_propDict["documentDate"] = new \DateTime($this->_propDict["documentDate"]);
                return $this->_propDict["documentDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the documentDate
    *
    * @param \DateTime $val The documentDate
    *
    * @return SalesQuote
    */
    public function setDocumentDate($val)
    {
        $this->_propDict["documentDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the dueDate
    *
    * @return \DateTime The dueDate
    */
    public function getDueDate()
    {
        if (array_key_exists("dueDate", $this->_propDict)) {
            if (is_a($this->_propDict["dueDate"], "\DateTime")) {
                return $this->_propDict["dueDate"];
            } else {
                $this->_propDict["dueDate"] = new \DateTime($this->_propDict["dueDate"]);
                return $this->_propDict["dueDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dueDate
    *
    * @param \DateTime $val The dueDate
    *
    * @return SalesQuote
    */
    public function setDueDate($val)
    {
        $this->_propDict["dueDate"] = $val;
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
    * @return SalesQuote
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalDocumentNumber
    *
    * @return string The externalDocumentNumber
    */
    public function getExternalDocumentNumber()
    {
        if (array_key_exists("externalDocumentNumber", $this->_propDict)) {
            return $this->_propDict["externalDocumentNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalDocumentNumber
    *
    * @param string $val The externalDocumentNumber
    *
    * @return SalesQuote
    */
    public function setExternalDocumentNumber($val)
    {
        $this->_propDict["externalDocumentNumber"] = $val;
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
    * @return SalesQuote
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
    * @return SalesQuote
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
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
    * @return SalesQuote
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
    * @return SalesQuote
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the salesperson
    *
    * @return string The salesperson
    */
    public function getSalesperson()
    {
        if (array_key_exists("salesperson", $this->_propDict)) {
            return $this->_propDict["salesperson"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the salesperson
    *
    * @param string $val The salesperson
    *
    * @return SalesQuote
    */
    public function setSalesperson($val)
    {
        $this->_propDict["salesperson"] = $val;
        return $this;
    }
    
    /**
    * Gets the sellingPostalAddress
    *
    * @return PostalAddressType The sellingPostalAddress
    */
    public function getSellingPostalAddress()
    {
        if (array_key_exists("sellingPostalAddress", $this->_propDict)) {
            if (is_a($this->_propDict["sellingPostalAddress"], "\Beta\Microsoft\Graph\Model\PostalAddressType")) {
                return $this->_propDict["sellingPostalAddress"];
            } else {
                $this->_propDict["sellingPostalAddress"] = new PostalAddressType($this->_propDict["sellingPostalAddress"]);
                return $this->_propDict["sellingPostalAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sellingPostalAddress
    *
    * @param PostalAddressType $val The sellingPostalAddress
    *
    * @return SalesQuote
    */
    public function setSellingPostalAddress($val)
    {
        $this->_propDict["sellingPostalAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the sentDate
    *
    * @return \DateTime The sentDate
    */
    public function getSentDate()
    {
        if (array_key_exists("sentDate", $this->_propDict)) {
            if (is_a($this->_propDict["sentDate"], "\DateTime")) {
                return $this->_propDict["sentDate"];
            } else {
                $this->_propDict["sentDate"] = new \DateTime($this->_propDict["sentDate"]);
                return $this->_propDict["sentDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sentDate
    *
    * @param \DateTime $val The sentDate
    *
    * @return SalesQuote
    */
    public function setSentDate($val)
    {
        $this->_propDict["sentDate"] = $val;
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
    * @return SalesQuote
    */
    public function setShipmentMethodId($val)
    {
        $this->_propDict["shipmentMethodId"] = $val;
        return $this;
    }
    
    /**
    * Gets the shippingPostalAddress
    *
    * @return PostalAddressType The shippingPostalAddress
    */
    public function getShippingPostalAddress()
    {
        if (array_key_exists("shippingPostalAddress", $this->_propDict)) {
            if (is_a($this->_propDict["shippingPostalAddress"], "\Beta\Microsoft\Graph\Model\PostalAddressType")) {
                return $this->_propDict["shippingPostalAddress"];
            } else {
                $this->_propDict["shippingPostalAddress"] = new PostalAddressType($this->_propDict["shippingPostalAddress"]);
                return $this->_propDict["shippingPostalAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the shippingPostalAddress
    *
    * @param PostalAddressType $val The shippingPostalAddress
    *
    * @return SalesQuote
    */
    public function setShippingPostalAddress($val)
    {
        $this->_propDict["shippingPostalAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the shipToContact
    *
    * @return string The shipToContact
    */
    public function getShipToContact()
    {
        if (array_key_exists("shipToContact", $this->_propDict)) {
            return $this->_propDict["shipToContact"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shipToContact
    *
    * @param string $val The shipToContact
    *
    * @return SalesQuote
    */
    public function setShipToContact($val)
    {
        $this->_propDict["shipToContact"] = $val;
        return $this;
    }
    
    /**
    * Gets the shipToName
    *
    * @return string The shipToName
    */
    public function getShipToName()
    {
        if (array_key_exists("shipToName", $this->_propDict)) {
            return $this->_propDict["shipToName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shipToName
    *
    * @param string $val The shipToName
    *
    * @return SalesQuote
    */
    public function setShipToName($val)
    {
        $this->_propDict["shipToName"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return SalesQuote
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalAmountExcludingTax
    *
    * @return Decimal The totalAmountExcludingTax
    */
    public function getTotalAmountExcludingTax()
    {
        if (array_key_exists("totalAmountExcludingTax", $this->_propDict)) {
            if (is_a($this->_propDict["totalAmountExcludingTax"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["totalAmountExcludingTax"];
            } else {
                $this->_propDict["totalAmountExcludingTax"] = new Decimal($this->_propDict["totalAmountExcludingTax"]);
                return $this->_propDict["totalAmountExcludingTax"];
            }
        }
        return null;
    }
    
    /**
    * Sets the totalAmountExcludingTax
    *
    * @param Decimal $val The totalAmountExcludingTax
    *
    * @return SalesQuote
    */
    public function setTotalAmountExcludingTax($val)
    {
        $this->_propDict["totalAmountExcludingTax"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalAmountIncludingTax
    *
    * @return Decimal The totalAmountIncludingTax
    */
    public function getTotalAmountIncludingTax()
    {
        if (array_key_exists("totalAmountIncludingTax", $this->_propDict)) {
            if (is_a($this->_propDict["totalAmountIncludingTax"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["totalAmountIncludingTax"];
            } else {
                $this->_propDict["totalAmountIncludingTax"] = new Decimal($this->_propDict["totalAmountIncludingTax"]);
                return $this->_propDict["totalAmountIncludingTax"];
            }
        }
        return null;
    }
    
    /**
    * Sets the totalAmountIncludingTax
    *
    * @param Decimal $val The totalAmountIncludingTax
    *
    * @return SalesQuote
    */
    public function setTotalAmountIncludingTax($val)
    {
        $this->_propDict["totalAmountIncludingTax"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalTaxAmount
    *
    * @return Decimal The totalTaxAmount
    */
    public function getTotalTaxAmount()
    {
        if (array_key_exists("totalTaxAmount", $this->_propDict)) {
            if (is_a($this->_propDict["totalTaxAmount"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["totalTaxAmount"];
            } else {
                $this->_propDict["totalTaxAmount"] = new Decimal($this->_propDict["totalTaxAmount"]);
                return $this->_propDict["totalTaxAmount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the totalTaxAmount
    *
    * @param Decimal $val The totalTaxAmount
    *
    * @return SalesQuote
    */
    public function setTotalTaxAmount($val)
    {
        $this->_propDict["totalTaxAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the validUntilDate
    *
    * @return \DateTime The validUntilDate
    */
    public function getValidUntilDate()
    {
        if (array_key_exists("validUntilDate", $this->_propDict)) {
            if (is_a($this->_propDict["validUntilDate"], "\DateTime")) {
                return $this->_propDict["validUntilDate"];
            } else {
                $this->_propDict["validUntilDate"] = new \DateTime($this->_propDict["validUntilDate"]);
                return $this->_propDict["validUntilDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the validUntilDate
    *
    * @param \DateTime $val The validUntilDate
    *
    * @return SalesQuote
    */
    public function setValidUntilDate($val)
    {
        $this->_propDict["validUntilDate"] = $val;
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
    * @return SalesQuote
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    
    /**
    * Gets the customer
    *
    * @return Customer The customer
    */
    public function getCustomer()
    {
        if (array_key_exists("customer", $this->_propDict)) {
            if (is_a($this->_propDict["customer"], "\Beta\Microsoft\Graph\Model\Customer")) {
                return $this->_propDict["customer"];
            } else {
                $this->_propDict["customer"] = new Customer($this->_propDict["customer"]);
                return $this->_propDict["customer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the customer
    *
    * @param Customer $val The customer
    *
    * @return SalesQuote
    */
    public function setCustomer($val)
    {
        $this->_propDict["customer"] = $val;
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
    * @return SalesQuote
    */
    public function setPaymentTerm($val)
    {
        $this->_propDict["paymentTerm"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesQuoteLines
     *
     * @return array The salesQuoteLines
     */
    public function getSalesQuoteLines()
    {
        if (array_key_exists("salesQuoteLines", $this->_propDict)) {
           return $this->_propDict["salesQuoteLines"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesQuoteLines
    *
    * @param SalesQuoteLine $val The salesQuoteLines
    *
    * @return SalesQuote
    */
    public function setSalesQuoteLines($val)
    {
		$this->_propDict["salesQuoteLines"] = $val;
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
    * @return SalesQuote
    */
    public function setShipmentMethod($val)
    {
        $this->_propDict["shipmentMethod"] = $val;
        return $this;
    }
    
}
