<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomerPayment File
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
* CustomerPayment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomerPayment extends Entity
{
    /**
    * Gets the amount
    *
    * @return Decimal The amount
    */
    public function getAmount()
    {
        if (array_key_exists("amount", $this->_propDict)) {
            if (is_a($this->_propDict["amount"], "\Beta\Microsoft\Graph\Model\Decimal")) {
                return $this->_propDict["amount"];
            } else {
                $this->_propDict["amount"] = new Decimal($this->_propDict["amount"]);
                return $this->_propDict["amount"];
            }
        }
        return null;
    }
    
    /**
    * Sets the amount
    *
    * @param Decimal $val The amount
    *
    * @return CustomerPayment
    */
    public function setAmount($val)
    {
        $this->_propDict["amount"] = $val;
        return $this;
    }
    
    /**
    * Gets the appliesToInvoiceId
    *
    * @return string The appliesToInvoiceId
    */
    public function getAppliesToInvoiceId()
    {
        if (array_key_exists("appliesToInvoiceId", $this->_propDict)) {
            return $this->_propDict["appliesToInvoiceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appliesToInvoiceId
    *
    * @param string $val The appliesToInvoiceId
    *
    * @return CustomerPayment
    */
    public function setAppliesToInvoiceId($val)
    {
        $this->_propDict["appliesToInvoiceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appliesToInvoiceNumber
    *
    * @return string The appliesToInvoiceNumber
    */
    public function getAppliesToInvoiceNumber()
    {
        if (array_key_exists("appliesToInvoiceNumber", $this->_propDict)) {
            return $this->_propDict["appliesToInvoiceNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appliesToInvoiceNumber
    *
    * @param string $val The appliesToInvoiceNumber
    *
    * @return CustomerPayment
    */
    public function setAppliesToInvoiceNumber($val)
    {
        $this->_propDict["appliesToInvoiceNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the comment
    *
    * @return string The comment
    */
    public function getComment()
    {
        if (array_key_exists("comment", $this->_propDict)) {
            return $this->_propDict["comment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the comment
    *
    * @param string $val The comment
    *
    * @return CustomerPayment
    */
    public function setComment($val)
    {
        $this->_propDict["comment"] = $val;
        return $this;
    }
    
    /**
    * Gets the contactId
    *
    * @return string The contactId
    */
    public function getContactId()
    {
        if (array_key_exists("contactId", $this->_propDict)) {
            return $this->_propDict["contactId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contactId
    *
    * @param string $val The contactId
    *
    * @return CustomerPayment
    */
    public function setContactId($val)
    {
        $this->_propDict["contactId"] = $val;
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
    * @return CustomerPayment
    */
    public function setCustomerId($val)
    {
        $this->_propDict["customerId"] = $val;
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
    * @return CustomerPayment
    */
    public function setCustomerNumber($val)
    {
        $this->_propDict["customerNumber"] = $val;
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
    * @return CustomerPayment
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the documentNumber
    *
    * @return string The documentNumber
    */
    public function getDocumentNumber()
    {
        if (array_key_exists("documentNumber", $this->_propDict)) {
            return $this->_propDict["documentNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the documentNumber
    *
    * @param string $val The documentNumber
    *
    * @return CustomerPayment
    */
    public function setDocumentNumber($val)
    {
        $this->_propDict["documentNumber"] = $val;
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
    * @return CustomerPayment
    */
    public function setExternalDocumentNumber($val)
    {
        $this->_propDict["externalDocumentNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the journalDisplayName
    *
    * @return string The journalDisplayName
    */
    public function getJournalDisplayName()
    {
        if (array_key_exists("journalDisplayName", $this->_propDict)) {
            return $this->_propDict["journalDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the journalDisplayName
    *
    * @param string $val The journalDisplayName
    *
    * @return CustomerPayment
    */
    public function setJournalDisplayName($val)
    {
        $this->_propDict["journalDisplayName"] = $val;
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
    * @return CustomerPayment
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lineNumber
    *
    * @return int The lineNumber
    */
    public function getLineNumber()
    {
        if (array_key_exists("lineNumber", $this->_propDict)) {
            return $this->_propDict["lineNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lineNumber
    *
    * @param int $val The lineNumber
    *
    * @return CustomerPayment
    */
    public function setLineNumber($val)
    {
        $this->_propDict["lineNumber"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the postingDate
    *
    * @return \DateTime The postingDate
    */
    public function getPostingDate()
    {
        if (array_key_exists("postingDate", $this->_propDict)) {
            if (is_a($this->_propDict["postingDate"], "\DateTime")) {
                return $this->_propDict["postingDate"];
            } else {
                $this->_propDict["postingDate"] = new \DateTime($this->_propDict["postingDate"]);
                return $this->_propDict["postingDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the postingDate
    *
    * @param \DateTime $val The postingDate
    *
    * @return CustomerPayment
    */
    public function setPostingDate($val)
    {
        $this->_propDict["postingDate"] = $val;
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
    * @return CustomerPayment
    */
    public function setCustomer($val)
    {
        $this->_propDict["customer"] = $val;
        return $this;
    }
    
}
