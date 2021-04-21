<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Account File
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
* Account class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Account extends Entity
{
    /**
    * Gets the blocked
    *
    * @return bool The blocked
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
    * @param bool $val The blocked
    *
    * @return Account
    */
    public function setBlocked($val)
    {
        $this->_propDict["blocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the category
    *
    * @return string The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the category
    *
    * @param string $val The category
    *
    * @return Account
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
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
    * @return Account
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
    * @return Account
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
    * @return Account
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    
    /**
    * Gets the subCategory
    *
    * @return string The subCategory
    */
    public function getSubCategory()
    {
        if (array_key_exists("subCategory", $this->_propDict)) {
            return $this->_propDict["subCategory"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subCategory
    *
    * @param string $val The subCategory
    *
    * @return Account
    */
    public function setSubCategory($val)
    {
        $this->_propDict["subCategory"] = $val;
        return $this;
    }
    
}
