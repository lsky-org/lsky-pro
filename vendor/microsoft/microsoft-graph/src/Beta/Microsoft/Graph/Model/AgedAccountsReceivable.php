<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgedAccountsReceivable File
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
* AgedAccountsReceivable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgedAccountsReceivable extends Entity
{
    /**
    * Gets the agedAsOfDate
    *
    * @return \DateTime The agedAsOfDate
    */
    public function getAgedAsOfDate()
    {
        if (array_key_exists("agedAsOfDate", $this->_propDict)) {
            if (is_a($this->_propDict["agedAsOfDate"], "\DateTime")) {
                return $this->_propDict["agedAsOfDate"];
            } else {
                $this->_propDict["agedAsOfDate"] = new \DateTime($this->_propDict["agedAsOfDate"]);
                return $this->_propDict["agedAsOfDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the agedAsOfDate
    *
    * @param \DateTime $val The agedAsOfDate
    *
    * @return AgedAccountsReceivable
    */
    public function setAgedAsOfDate($val)
    {
        $this->_propDict["agedAsOfDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the balanceDue
    *
    * @return Decimal The balanceDue
    */
    public function getBalanceDue()
    {
        if (array_key_exists("balanceDue", $this->_propDict)) {
            if (is_a($this->_propDict["balanceDue"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["balanceDue"];
            } else {
                $this->_propDict["balanceDue"] = new Decimal($this->_propDict["balanceDue"]);
                return $this->_propDict["balanceDue"];
            }
        }
        return null;
    }
    
    /**
    * Sets the balanceDue
    *
    * @param Decimal $val The balanceDue
    *
    * @return AgedAccountsReceivable
    */
    public function setBalanceDue($val)
    {
        $this->_propDict["balanceDue"] = $val;
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
    * @return AgedAccountsReceivable
    */
    public function setCurrencyCode($val)
    {
        $this->_propDict["currencyCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the currentAmount
    *
    * @return Decimal The currentAmount
    */
    public function getCurrentAmount()
    {
        if (array_key_exists("currentAmount", $this->_propDict)) {
            if (is_a($this->_propDict["currentAmount"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["currentAmount"];
            } else {
                $this->_propDict["currentAmount"] = new Decimal($this->_propDict["currentAmount"]);
                return $this->_propDict["currentAmount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the currentAmount
    *
    * @param Decimal $val The currentAmount
    *
    * @return AgedAccountsReceivable
    */
    public function setCurrentAmount($val)
    {
        $this->_propDict["currentAmount"] = $val;
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
    * @return AgedAccountsReceivable
    */
    public function setCustomerNumber($val)
    {
        $this->_propDict["customerNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return AgedAccountsReceivable
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the period1Amount
    *
    * @return Decimal The period1Amount
    */
    public function getPeriod1Amount()
    {
        if (array_key_exists("period1Amount", $this->_propDict)) {
            if (is_a($this->_propDict["period1Amount"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["period1Amount"];
            } else {
                $this->_propDict["period1Amount"] = new Decimal($this->_propDict["period1Amount"]);
                return $this->_propDict["period1Amount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the period1Amount
    *
    * @param Decimal $val The period1Amount
    *
    * @return AgedAccountsReceivable
    */
    public function setPeriod1Amount($val)
    {
        $this->_propDict["period1Amount"] = $val;
        return $this;
    }
    
    /**
    * Gets the period2Amount
    *
    * @return Decimal The period2Amount
    */
    public function getPeriod2Amount()
    {
        if (array_key_exists("period2Amount", $this->_propDict)) {
            if (is_a($this->_propDict["period2Amount"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["period2Amount"];
            } else {
                $this->_propDict["period2Amount"] = new Decimal($this->_propDict["period2Amount"]);
                return $this->_propDict["period2Amount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the period2Amount
    *
    * @param Decimal $val The period2Amount
    *
    * @return AgedAccountsReceivable
    */
    public function setPeriod2Amount($val)
    {
        $this->_propDict["period2Amount"] = $val;
        return $this;
    }
    
    /**
    * Gets the period3Amount
    *
    * @return Decimal The period3Amount
    */
    public function getPeriod3Amount()
    {
        if (array_key_exists("period3Amount", $this->_propDict)) {
            if (is_a($this->_propDict["period3Amount"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["period3Amount"];
            } else {
                $this->_propDict["period3Amount"] = new Decimal($this->_propDict["period3Amount"]);
                return $this->_propDict["period3Amount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the period3Amount
    *
    * @param Decimal $val The period3Amount
    *
    * @return AgedAccountsReceivable
    */
    public function setPeriod3Amount($val)
    {
        $this->_propDict["period3Amount"] = $val;
        return $this;
    }
    
    /**
    * Gets the periodLengthFilter
    *
    * @return string The periodLengthFilter
    */
    public function getPeriodLengthFilter()
    {
        if (array_key_exists("periodLengthFilter", $this->_propDict)) {
            return $this->_propDict["periodLengthFilter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the periodLengthFilter
    *
    * @param string $val The periodLengthFilter
    *
    * @return AgedAccountsReceivable
    */
    public function setPeriodLengthFilter($val)
    {
        $this->_propDict["periodLengthFilter"] = $val;
        return $this;
    }
    
}
