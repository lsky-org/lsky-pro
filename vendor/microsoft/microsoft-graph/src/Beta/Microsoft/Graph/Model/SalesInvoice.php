<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SalesInvoice File
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
* SalesInvoice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SalesInvoice extends Entity
{
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
    */
    public function setCustomerNumber($val)
    {
        $this->_propDict["customerNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerPurchaseOrderReference
    *
    * @return string The customerPurchaseOrderReference
    */
    public function getCustomerPurchaseOrderReference()
    {
        if (array_key_exists("customerPurchaseOrderReference", $this->_propDict)) {
            return $this->_propDict["customerPurchaseOrderReference"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerPurchaseOrderReference
    *
    * @param string $val The customerPurchaseOrderReference
    *
    * @return SalesInvoice
    */
    public function setCustomerPurchaseOrderReference($val)
    {
        $this->_propDict["customerPurchaseOrderReference"] = $val;
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
    * @return SalesInvoice
    */
    public function setDiscountAmount($val)
    {
        $this->_propDict["discountAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the discountAppliedBeforeTax
    *
    * @return bool The discountAppliedBeforeTax
    */
    public function getDiscountAppliedBeforeTax()
    {
        if (array_key_exists("discountAppliedBeforeTax", $this->_propDict)) {
            return $this->_propDict["discountAppliedBeforeTax"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the discountAppliedBeforeTax
    *
    * @param bool $val The discountAppliedBeforeTax
    *
    * @return SalesInvoice
    */
    public function setDiscountAppliedBeforeTax($val)
    {
        $this->_propDict["discountAppliedBeforeTax"] = boolval($val);
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
    */
    public function setExternalDocumentNumber($val)
    {
        $this->_propDict["externalDocumentNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the invoiceDate
    *
    * @return \DateTime The invoiceDate
    */
    public function getInvoiceDate()
    {
        if (array_key_exists("invoiceDate", $this->_propDict)) {
            if (is_a($this->_propDict["invoiceDate"], "\DateTime")) {
                return $this->_propDict["invoiceDate"];
            } else {
                $this->_propDict["invoiceDate"] = new \DateTime($this->_propDict["invoiceDate"]);
                return $this->_propDict["invoiceDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the invoiceDate
    *
    * @param \DateTime $val The invoiceDate
    *
    * @return SalesInvoice
    */
    public function setInvoiceDate($val)
    {
        $this->_propDict["invoiceDate"] = $val;
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
    * @return SalesInvoice
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
    * @return SalesInvoice
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    
    /**
    * Gets the orderId
    *
    * @return string The orderId
    */
    public function getOrderId()
    {
        if (array_key_exists("orderId", $this->_propDict)) {
            return $this->_propDict["orderId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the orderId
    *
    * @param string $val The orderId
    *
    * @return SalesInvoice
    */
    public function setOrderId($val)
    {
        $this->_propDict["orderId"] = $val;
        return $this;
    }
    
    /**
    * Gets the orderNumber
    *
    * @return string The orderNumber
    */
    public function getOrderNumber()
    {
        if (array_key_exists("orderNumber", $this->_propDict)) {
            return $this->_propDict["orderNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the orderNumber
    *
    * @param string $val The orderNumber
    *
    * @return SalesInvoice
    */
    public function setOrderNumber($val)
    {
        $this->_propDict["orderNumber"] = $val;
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
    * @return SalesInvoice
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
    * @return SalesInvoice
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the pricesIncludeTax
    *
    * @return bool The pricesIncludeTax
    */
    public function getPricesIncludeTax()
    {
        if (array_key_exists("pricesIncludeTax", $this->_propDict)) {
            return $this->_propDict["pricesIncludeTax"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pricesIncludeTax
    *
    * @param bool $val The pricesIncludeTax
    *
    * @return SalesInvoice
    */
    public function setPricesIncludeTax($val)
    {
        $this->_propDict["pricesIncludeTax"] = boolval($val);
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
    * @return SalesInvoice
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
    * @return SalesInvoice
    */
    public function setSellingPostalAddress($val)
    {
        $this->_propDict["sellingPostalAddress"] = $val;
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
    */
    public function setTotalTaxAmount($val)
    {
        $this->_propDict["totalTaxAmount"] = $val;
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
    * @return SalesInvoice
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
    * @return SalesInvoice
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
    * @return SalesInvoice
    */
    public function setPaymentTerm($val)
    {
        $this->_propDict["paymentTerm"] = $val;
        return $this;
    }
    

     /** 
     * Gets the salesInvoiceLines
     *
     * @return array The salesInvoiceLines
     */
    public function getSalesInvoiceLines()
    {
        if (array_key_exists("salesInvoiceLines", $this->_propDict)) {
           return $this->_propDict["salesInvoiceLines"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the salesInvoiceLines
    *
    * @param SalesInvoiceLine $val The salesInvoiceLines
    *
    * @return SalesInvoice
    */
    public function setSalesInvoiceLines($val)
    {
		$this->_propDict["salesInvoiceLines"] = $val;
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
    * @return SalesInvoice
    */
    public function setShipmentMethod($val)
    {
        $this->_propDict["shipmentMethod"] = $val;
        return $this;
    }
    
}
