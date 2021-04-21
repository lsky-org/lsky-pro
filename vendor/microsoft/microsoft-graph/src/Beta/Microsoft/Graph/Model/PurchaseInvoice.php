<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PurchaseInvoice File
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
* PurchaseInvoice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PurchaseInvoice extends Entity
{
    /**
    * Gets the buyFromAddress
    *
    * @return PostalAddressType The buyFromAddress
    */
    public function getBuyFromAddress()
    {
        if (array_key_exists("buyFromAddress", $this->_propDict)) {
            if (is_a($this->_propDict["buyFromAddress"], "\Beta\Microsoft\Graph\Model\PostalAddressType")) {
                return $this->_propDict["buyFromAddress"];
            } else {
                $this->_propDict["buyFromAddress"] = new PostalAddressType($this->_propDict["buyFromAddress"]);
                return $this->_propDict["buyFromAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the buyFromAddress
    *
    * @param PostalAddressType $val The buyFromAddress
    *
    * @return PurchaseInvoice
    */
    public function setBuyFromAddress($val)
    {
        $this->_propDict["buyFromAddress"] = $val;
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
    */
    public function setCurrencyId($val)
    {
        $this->_propDict["currencyId"] = $val;
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
    */
    public function setDueDate($val)
    {
        $this->_propDict["dueDate"] = $val;
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    
    /**
    * Gets the payToAddress
    *
    * @return PostalAddressType The payToAddress
    */
    public function getPayToAddress()
    {
        if (array_key_exists("payToAddress", $this->_propDict)) {
            if (is_a($this->_propDict["payToAddress"], "\Beta\Microsoft\Graph\Model\PostalAddressType")) {
                return $this->_propDict["payToAddress"];
            } else {
                $this->_propDict["payToAddress"] = new PostalAddressType($this->_propDict["payToAddress"]);
                return $this->_propDict["payToAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the payToAddress
    *
    * @param PostalAddressType $val The payToAddress
    *
    * @return PurchaseInvoice
    */
    public function setPayToAddress($val)
    {
        $this->_propDict["payToAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the payToContact
    *
    * @return string The payToContact
    */
    public function getPayToContact()
    {
        if (array_key_exists("payToContact", $this->_propDict)) {
            return $this->_propDict["payToContact"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payToContact
    *
    * @param string $val The payToContact
    *
    * @return PurchaseInvoice
    */
    public function setPayToContact($val)
    {
        $this->_propDict["payToContact"] = $val;
        return $this;
    }
    
    /**
    * Gets the payToName
    *
    * @return string The payToName
    */
    public function getPayToName()
    {
        if (array_key_exists("payToName", $this->_propDict)) {
            return $this->_propDict["payToName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payToName
    *
    * @param string $val The payToName
    *
    * @return PurchaseInvoice
    */
    public function setPayToName($val)
    {
        $this->_propDict["payToName"] = $val;
        return $this;
    }
    
    /**
    * Gets the payToVendorId
    *
    * @return string The payToVendorId
    */
    public function getPayToVendorId()
    {
        if (array_key_exists("payToVendorId", $this->_propDict)) {
            return $this->_propDict["payToVendorId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payToVendorId
    *
    * @param string $val The payToVendorId
    *
    * @return PurchaseInvoice
    */
    public function setPayToVendorId($val)
    {
        $this->_propDict["payToVendorId"] = $val;
        return $this;
    }
    
    /**
    * Gets the payToVendorNumber
    *
    * @return string The payToVendorNumber
    */
    public function getPayToVendorNumber()
    {
        if (array_key_exists("payToVendorNumber", $this->_propDict)) {
            return $this->_propDict["payToVendorNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payToVendorNumber
    *
    * @param string $val The payToVendorNumber
    *
    * @return PurchaseInvoice
    */
    public function setPayToVendorNumber($val)
    {
        $this->_propDict["payToVendorNumber"] = $val;
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
    * @return PurchaseInvoice
    */
    public function setPricesIncludeTax($val)
    {
        $this->_propDict["pricesIncludeTax"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the shipToAddress
    *
    * @return PostalAddressType The shipToAddress
    */
    public function getShipToAddress()
    {
        if (array_key_exists("shipToAddress", $this->_propDict)) {
            if (is_a($this->_propDict["shipToAddress"], "\Beta\Microsoft\Graph\Model\PostalAddressType")) {
                return $this->_propDict["shipToAddress"];
            } else {
                $this->_propDict["shipToAddress"] = new PostalAddressType($this->_propDict["shipToAddress"]);
                return $this->_propDict["shipToAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the shipToAddress
    *
    * @param PostalAddressType $val The shipToAddress
    *
    * @return PurchaseInvoice
    */
    public function setShipToAddress($val)
    {
        $this->_propDict["shipToAddress"] = $val;
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
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
    * @return PurchaseInvoice
    */
    public function setTotalTaxAmount($val)
    {
        $this->_propDict["totalTaxAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorId
    *
    * @return string The vendorId
    */
    public function getVendorId()
    {
        if (array_key_exists("vendorId", $this->_propDict)) {
            return $this->_propDict["vendorId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vendorId
    *
    * @param string $val The vendorId
    *
    * @return PurchaseInvoice
    */
    public function setVendorId($val)
    {
        $this->_propDict["vendorId"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorInvoiceNumber
    *
    * @return string The vendorInvoiceNumber
    */
    public function getVendorInvoiceNumber()
    {
        if (array_key_exists("vendorInvoiceNumber", $this->_propDict)) {
            return $this->_propDict["vendorInvoiceNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vendorInvoiceNumber
    *
    * @param string $val The vendorInvoiceNumber
    *
    * @return PurchaseInvoice
    */
    public function setVendorInvoiceNumber($val)
    {
        $this->_propDict["vendorInvoiceNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorName
    *
    * @return string The vendorName
    */
    public function getVendorName()
    {
        if (array_key_exists("vendorName", $this->_propDict)) {
            return $this->_propDict["vendorName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vendorName
    *
    * @param string $val The vendorName
    *
    * @return PurchaseInvoice
    */
    public function setVendorName($val)
    {
        $this->_propDict["vendorName"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorNumber
    *
    * @return string The vendorNumber
    */
    public function getVendorNumber()
    {
        if (array_key_exists("vendorNumber", $this->_propDict)) {
            return $this->_propDict["vendorNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vendorNumber
    *
    * @param string $val The vendorNumber
    *
    * @return PurchaseInvoice
    */
    public function setVendorNumber($val)
    {
        $this->_propDict["vendorNumber"] = $val;
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
    * @return PurchaseInvoice
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    

     /** 
     * Gets the purchaseInvoiceLines
     *
     * @return array The purchaseInvoiceLines
     */
    public function getPurchaseInvoiceLines()
    {
        if (array_key_exists("purchaseInvoiceLines", $this->_propDict)) {
           return $this->_propDict["purchaseInvoiceLines"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the purchaseInvoiceLines
    *
    * @param PurchaseInvoiceLine $val The purchaseInvoiceLines
    *
    * @return PurchaseInvoice
    */
    public function setPurchaseInvoiceLines($val)
    {
		$this->_propDict["purchaseInvoiceLines"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendor
    *
    * @return Vendor The vendor
    */
    public function getVendor()
    {
        if (array_key_exists("vendor", $this->_propDict)) {
            if (is_a($this->_propDict["vendor"], "\Beta\Microsoft\Graph\Model\Vendor")) {
                return $this->_propDict["vendor"];
            } else {
                $this->_propDict["vendor"] = new Vendor($this->_propDict["vendor"]);
                return $this->_propDict["vendor"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vendor
    *
    * @param Vendor $val The vendor
    *
    * @return PurchaseInvoice
    */
    public function setVendor($val)
    {
        $this->_propDict["vendor"] = $val;
        return $this;
    }
    
}
