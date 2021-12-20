<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SalesCreditMemoLine File
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
* SalesCreditMemoLine class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SalesCreditMemoLine extends Entity
{
    /**
    * Gets the accountId
    *
    * @return string The accountId
    */
    public function getAccountId()
    {
        if (array_key_exists("accountId", $this->_propDict)) {
            return $this->_propDict["accountId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountId
    *
    * @param string $val The accountId
    *
    * @return SalesCreditMemoLine
    */
    public function setAccountId($val)
    {
        $this->_propDict["accountId"] = $val;
        return $this;
    }
    
    /**
    * Gets the amountExcludingTax
    *
    * @return Decimal The amountExcludingTax
    */
    public function getAmountExcludingTax()
    {
        if (array_key_exists("amountExcludingTax", $this->_propDict)) {
            if (is_a($this->_propDict["amountExcludingTax"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["amountExcludingTax"];
            } else {
                $this->_propDict["amountExcludingTax"] = new Decimal($this->_propDict["amountExcludingTax"]);
                return $this->_propDict["amountExcludingTax"];
            }
        }
        return null;
    }
    
    /**
    * Sets the amountExcludingTax
    *
    * @param Decimal $val The amountExcludingTax
    *
    * @return SalesCreditMemoLine
    */
    public function setAmountExcludingTax($val)
    {
        $this->_propDict["amountExcludingTax"] = $val;
        return $this;
    }
    
    /**
    * Gets the amountIncludingTax
    *
    * @return Decimal The amountIncludingTax
    */
    public function getAmountIncludingTax()
    {
        if (array_key_exists("amountIncludingTax", $this->_propDict)) {
            if (is_a($this->_propDict["amountIncludingTax"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["amountIncludingTax"];
            } else {
                $this->_propDict["amountIncludingTax"] = new Decimal($this->_propDict["amountIncludingTax"]);
                return $this->_propDict["amountIncludingTax"];
            }
        }
        return null;
    }
    
    /**
    * Sets the amountIncludingTax
    *
    * @param Decimal $val The amountIncludingTax
    *
    * @return SalesCreditMemoLine
    */
    public function setAmountIncludingTax($val)
    {
        $this->_propDict["amountIncludingTax"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return SalesCreditMemoLine
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return SalesCreditMemoLine
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
    * @return SalesCreditMemoLine
    */
    public function setDiscountAppliedBeforeTax($val)
    {
        $this->_propDict["discountAppliedBeforeTax"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the discountPercent
    *
    * @return Decimal The discountPercent
    */
    public function getDiscountPercent()
    {
        if (array_key_exists("discountPercent", $this->_propDict)) {
            if (is_a($this->_propDict["discountPercent"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["discountPercent"];
            } else {
                $this->_propDict["discountPercent"] = new Decimal($this->_propDict["discountPercent"]);
                return $this->_propDict["discountPercent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the discountPercent
    *
    * @param Decimal $val The discountPercent
    *
    * @return SalesCreditMemoLine
    */
    public function setDiscountPercent($val)
    {
        $this->_propDict["discountPercent"] = $val;
        return $this;
    }
    
    /**
    * Gets the documentId
    *
    * @return string The documentId
    */
    public function getDocumentId()
    {
        if (array_key_exists("documentId", $this->_propDict)) {
            return $this->_propDict["documentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the documentId
    *
    * @param string $val The documentId
    *
    * @return SalesCreditMemoLine
    */
    public function setDocumentId($val)
    {
        $this->_propDict["documentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the invoiceDiscountAllocation
    *
    * @return Decimal The invoiceDiscountAllocation
    */
    public function getInvoiceDiscountAllocation()
    {
        if (array_key_exists("invoiceDiscountAllocation", $this->_propDict)) {
            if (is_a($this->_propDict["invoiceDiscountAllocation"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["invoiceDiscountAllocation"];
            } else {
                $this->_propDict["invoiceDiscountAllocation"] = new Decimal($this->_propDict["invoiceDiscountAllocation"]);
                return $this->_propDict["invoiceDiscountAllocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the invoiceDiscountAllocation
    *
    * @param Decimal $val The invoiceDiscountAllocation
    *
    * @return SalesCreditMemoLine
    */
    public function setInvoiceDiscountAllocation($val)
    {
        $this->_propDict["invoiceDiscountAllocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the itemId
    *
    * @return string The itemId
    */
    public function getItemId()
    {
        if (array_key_exists("itemId", $this->_propDict)) {
            return $this->_propDict["itemId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the itemId
    *
    * @param string $val The itemId
    *
    * @return SalesCreditMemoLine
    */
    public function setItemId($val)
    {
        $this->_propDict["itemId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lineType
    *
    * @return string The lineType
    */
    public function getLineType()
    {
        if (array_key_exists("lineType", $this->_propDict)) {
            return $this->_propDict["lineType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lineType
    *
    * @param string $val The lineType
    *
    * @return SalesCreditMemoLine
    */
    public function setLineType($val)
    {
        $this->_propDict["lineType"] = $val;
        return $this;
    }
    
    /**
    * Gets the netAmount
    *
    * @return Decimal The netAmount
    */
    public function getNetAmount()
    {
        if (array_key_exists("netAmount", $this->_propDict)) {
            if (is_a($this->_propDict["netAmount"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["netAmount"];
            } else {
                $this->_propDict["netAmount"] = new Decimal($this->_propDict["netAmount"]);
                return $this->_propDict["netAmount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the netAmount
    *
    * @param Decimal $val The netAmount
    *
    * @return SalesCreditMemoLine
    */
    public function setNetAmount($val)
    {
        $this->_propDict["netAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the netAmountIncludingTax
    *
    * @return Decimal The netAmountIncludingTax
    */
    public function getNetAmountIncludingTax()
    {
        if (array_key_exists("netAmountIncludingTax", $this->_propDict)) {
            if (is_a($this->_propDict["netAmountIncludingTax"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["netAmountIncludingTax"];
            } else {
                $this->_propDict["netAmountIncludingTax"] = new Decimal($this->_propDict["netAmountIncludingTax"]);
                return $this->_propDict["netAmountIncludingTax"];
            }
        }
        return null;
    }
    
    /**
    * Sets the netAmountIncludingTax
    *
    * @param Decimal $val The netAmountIncludingTax
    *
    * @return SalesCreditMemoLine
    */
    public function setNetAmountIncludingTax($val)
    {
        $this->_propDict["netAmountIncludingTax"] = $val;
        return $this;
    }
    
    /**
    * Gets the netTaxAmount
    *
    * @return Decimal The netTaxAmount
    */
    public function getNetTaxAmount()
    {
        if (array_key_exists("netTaxAmount", $this->_propDict)) {
            if (is_a($this->_propDict["netTaxAmount"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["netTaxAmount"];
            } else {
                $this->_propDict["netTaxAmount"] = new Decimal($this->_propDict["netTaxAmount"]);
                return $this->_propDict["netTaxAmount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the netTaxAmount
    *
    * @param Decimal $val The netTaxAmount
    *
    * @return SalesCreditMemoLine
    */
    public function setNetTaxAmount($val)
    {
        $this->_propDict["netTaxAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the quantity
    *
    * @return Decimal The quantity
    */
    public function getQuantity()
    {
        if (array_key_exists("quantity", $this->_propDict)) {
            if (is_a($this->_propDict["quantity"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["quantity"];
            } else {
                $this->_propDict["quantity"] = new Decimal($this->_propDict["quantity"]);
                return $this->_propDict["quantity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the quantity
    *
    * @param Decimal $val The quantity
    *
    * @return SalesCreditMemoLine
    */
    public function setQuantity($val)
    {
        $this->_propDict["quantity"] = $val;
        return $this;
    }
    
    /**
    * Gets the sequence
    *
    * @return int The sequence
    */
    public function getSequence()
    {
        if (array_key_exists("sequence", $this->_propDict)) {
            return $this->_propDict["sequence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sequence
    *
    * @param int $val The sequence
    *
    * @return SalesCreditMemoLine
    */
    public function setSequence($val)
    {
        $this->_propDict["sequence"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the shipmentDate
    *
    * @return \DateTime The shipmentDate
    */
    public function getShipmentDate()
    {
        if (array_key_exists("shipmentDate", $this->_propDict)) {
            if (is_a($this->_propDict["shipmentDate"], "\DateTime")) {
                return $this->_propDict["shipmentDate"];
            } else {
                $this->_propDict["shipmentDate"] = new \DateTime($this->_propDict["shipmentDate"]);
                return $this->_propDict["shipmentDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the shipmentDate
    *
    * @param \DateTime $val The shipmentDate
    *
    * @return SalesCreditMemoLine
    */
    public function setShipmentDate($val)
    {
        $this->_propDict["shipmentDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the taxCode
    *
    * @return string The taxCode
    */
    public function getTaxCode()
    {
        if (array_key_exists("taxCode", $this->_propDict)) {
            return $this->_propDict["taxCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the taxCode
    *
    * @param string $val The taxCode
    *
    * @return SalesCreditMemoLine
    */
    public function setTaxCode($val)
    {
        $this->_propDict["taxCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the taxPercent
    *
    * @return Decimal The taxPercent
    */
    public function getTaxPercent()
    {
        if (array_key_exists("taxPercent", $this->_propDict)) {
            if (is_a($this->_propDict["taxPercent"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["taxPercent"];
            } else {
                $this->_propDict["taxPercent"] = new Decimal($this->_propDict["taxPercent"]);
                return $this->_propDict["taxPercent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the taxPercent
    *
    * @param Decimal $val The taxPercent
    *
    * @return SalesCreditMemoLine
    */
    public function setTaxPercent($val)
    {
        $this->_propDict["taxPercent"] = $val;
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
    * @return SalesCreditMemoLine
    */
    public function setTotalTaxAmount($val)
    {
        $this->_propDict["totalTaxAmount"] = $val;
        return $this;
    }
    
    /**
    * Gets the unitOfMeasureId
    *
    * @return string The unitOfMeasureId
    */
    public function getUnitOfMeasureId()
    {
        if (array_key_exists("unitOfMeasureId", $this->_propDict)) {
            return $this->_propDict["unitOfMeasureId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unitOfMeasureId
    *
    * @param string $val The unitOfMeasureId
    *
    * @return SalesCreditMemoLine
    */
    public function setUnitOfMeasureId($val)
    {
        $this->_propDict["unitOfMeasureId"] = $val;
        return $this;
    }
    
    /**
    * Gets the unitPrice
    *
    * @return Decimal The unitPrice
    */
    public function getUnitPrice()
    {
        if (array_key_exists("unitPrice", $this->_propDict)) {
            if (is_a($this->_propDict["unitPrice"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["unitPrice"];
            } else {
                $this->_propDict["unitPrice"] = new Decimal($this->_propDict["unitPrice"]);
                return $this->_propDict["unitPrice"];
            }
        }
        return null;
    }
    
    /**
    * Sets the unitPrice
    *
    * @param Decimal $val The unitPrice
    *
    * @return SalesCreditMemoLine
    */
    public function setUnitPrice($val)
    {
        $this->_propDict["unitPrice"] = $val;
        return $this;
    }
    
    /**
    * Gets the account
    *
    * @return Account The account
    */
    public function getAccount()
    {
        if (array_key_exists("account", $this->_propDict)) {
            if (is_a($this->_propDict["account"], "\Beta\Microsoft\Graph\Model\Account")) {
                return $this->_propDict["account"];
            } else {
                $this->_propDict["account"] = new Account($this->_propDict["account"]);
                return $this->_propDict["account"];
            }
        }
        return null;
    }
    
    /**
    * Sets the account
    *
    * @param Account $val The account
    *
    * @return SalesCreditMemoLine
    */
    public function setAccount($val)
    {
        $this->_propDict["account"] = $val;
        return $this;
    }
    
    /**
    * Gets the item
    *
    * @return Item The item
    */
    public function getItem()
    {
        if (array_key_exists("item", $this->_propDict)) {
            if (is_a($this->_propDict["item"], "\Beta\Microsoft\Graph\Model\Item")) {
                return $this->_propDict["item"];
            } else {
                $this->_propDict["item"] = new Item($this->_propDict["item"]);
                return $this->_propDict["item"];
            }
        }
        return null;
    }
    
    /**
    * Sets the item
    *
    * @param Item $val The item
    *
    * @return SalesCreditMemoLine
    */
    public function setItem($val)
    {
        $this->_propDict["item"] = $val;
        return $this;
    }
    
}
