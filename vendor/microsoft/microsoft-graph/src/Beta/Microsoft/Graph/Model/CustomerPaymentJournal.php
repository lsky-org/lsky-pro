<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomerPaymentJournal File
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
* CustomerPaymentJournal class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomerPaymentJournal extends Entity
{
    /**
    * Gets the balancingAccountId
    *
    * @return string The balancingAccountId
    */
    public function getBalancingAccountId()
    {
        if (array_key_exists("balancingAccountId", $this->_propDict)) {
            return $this->_propDict["balancingAccountId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the balancingAccountId
    *
    * @param string $val The balancingAccountId
    *
    * @return CustomerPaymentJournal
    */
    public function setBalancingAccountId($val)
    {
        $this->_propDict["balancingAccountId"] = $val;
        return $this;
    }
    
    /**
    * Gets the balancingAccountNumber
    *
    * @return string The balancingAccountNumber
    */
    public function getBalancingAccountNumber()
    {
        if (array_key_exists("balancingAccountNumber", $this->_propDict)) {
            return $this->_propDict["balancingAccountNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the balancingAccountNumber
    *
    * @param string $val The balancingAccountNumber
    *
    * @return CustomerPaymentJournal
    */
    public function setBalancingAccountNumber($val)
    {
        $this->_propDict["balancingAccountNumber"] = $val;
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
    * @return CustomerPaymentJournal
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
    * @return CustomerPaymentJournal
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
    * @return CustomerPaymentJournal
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
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
    * @return CustomerPaymentJournal
    */
    public function setAccount($val)
    {
        $this->_propDict["account"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customerPayments
     *
     * @return array The customerPayments
     */
    public function getCustomerPayments()
    {
        if (array_key_exists("customerPayments", $this->_propDict)) {
           return $this->_propDict["customerPayments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customerPayments
    *
    * @param CustomerPayment $val The customerPayments
    *
    * @return CustomerPaymentJournal
    */
    public function setCustomerPayments($val)
    {
		$this->_propDict["customerPayments"] = $val;
        return $this;
    }
    
}
