<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PaymentTerm File
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
* PaymentTerm class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PaymentTerm extends Entity
{
    /**
    * Gets the calculateDiscountOnCreditMemos
    *
    * @return bool The calculateDiscountOnCreditMemos
    */
    public function getCalculateDiscountOnCreditMemos()
    {
        if (array_key_exists("calculateDiscountOnCreditMemos", $this->_propDict)) {
            return $this->_propDict["calculateDiscountOnCreditMemos"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the calculateDiscountOnCreditMemos
    *
    * @param bool $val The calculateDiscountOnCreditMemos
    *
    * @return PaymentTerm
    */
    public function setCalculateDiscountOnCreditMemos($val)
    {
        $this->_propDict["calculateDiscountOnCreditMemos"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the code
    *
    * @return string The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the code
    *
    * @param string $val The code
    *
    * @return PaymentTerm
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    
    /**
    * Gets the discountDateCalculation
    *
    * @return string The discountDateCalculation
    */
    public function getDiscountDateCalculation()
    {
        if (array_key_exists("discountDateCalculation", $this->_propDict)) {
            return $this->_propDict["discountDateCalculation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the discountDateCalculation
    *
    * @param string $val The discountDateCalculation
    *
    * @return PaymentTerm
    */
    public function setDiscountDateCalculation($val)
    {
        $this->_propDict["discountDateCalculation"] = $val;
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
    * @return PaymentTerm
    */
    public function setDiscountPercent($val)
    {
        $this->_propDict["discountPercent"] = $val;
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
    * @return PaymentTerm
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the dueDateCalculation
    *
    * @return string The dueDateCalculation
    */
    public function getDueDateCalculation()
    {
        if (array_key_exists("dueDateCalculation", $this->_propDict)) {
            return $this->_propDict["dueDateCalculation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dueDateCalculation
    *
    * @param string $val The dueDateCalculation
    *
    * @return PaymentTerm
    */
    public function setDueDateCalculation($val)
    {
        $this->_propDict["dueDateCalculation"] = $val;
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
    * @return PaymentTerm
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
}
