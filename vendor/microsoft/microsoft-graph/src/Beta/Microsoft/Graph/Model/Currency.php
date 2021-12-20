<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Currency File
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
* Currency class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Currency extends Entity
{
    /**
    * Gets the amountDecimalPlaces
    *
    * @return string The amountDecimalPlaces
    */
    public function getAmountDecimalPlaces()
    {
        if (array_key_exists("amountDecimalPlaces", $this->_propDict)) {
            return $this->_propDict["amountDecimalPlaces"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the amountDecimalPlaces
    *
    * @param string $val The amountDecimalPlaces
    *
    * @return Currency
    */
    public function setAmountDecimalPlaces($val)
    {
        $this->_propDict["amountDecimalPlaces"] = $val;
        return $this;
    }
    
    /**
    * Gets the amountRoundingPrecision
    *
    * @return Decimal The amountRoundingPrecision
    */
    public function getAmountRoundingPrecision()
    {
        if (array_key_exists("amountRoundingPrecision", $this->_propDict)) {
            if (is_a($this->_propDict["amountRoundingPrecision"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["amountRoundingPrecision"];
            } else {
                $this->_propDict["amountRoundingPrecision"] = new Decimal($this->_propDict["amountRoundingPrecision"]);
                return $this->_propDict["amountRoundingPrecision"];
            }
        }
        return null;
    }
    
    /**
    * Sets the amountRoundingPrecision
    *
    * @param Decimal $val The amountRoundingPrecision
    *
    * @return Currency
    */
    public function setAmountRoundingPrecision($val)
    {
        $this->_propDict["amountRoundingPrecision"] = $val;
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
    * @return Currency
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
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
    * @return Currency
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return Currency
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the symbol
    *
    * @return string The symbol
    */
    public function getSymbol()
    {
        if (array_key_exists("symbol", $this->_propDict)) {
            return $this->_propDict["symbol"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the symbol
    *
    * @param string $val The symbol
    *
    * @return Currency
    */
    public function setSymbol($val)
    {
        $this->_propDict["symbol"] = $val;
        return $this;
    }
    
}
