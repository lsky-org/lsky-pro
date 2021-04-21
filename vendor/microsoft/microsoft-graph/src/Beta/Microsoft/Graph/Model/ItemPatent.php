<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemPatent File
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
* ItemPatent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemPatent extends ItemFacet
{
    /**
    * Gets the description
    * Descpription of the patent or filing.
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
    * Descpription of the patent or filing.
    *
    * @param string $val The description
    *
    * @return ItemPatent
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Title of the patent or filing.
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
    * Title of the patent or filing.
    *
    * @param string $val The displayName
    *
    * @return ItemPatent
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isPending
    * Indicates the patent is pending.
    *
    * @return bool The isPending
    */
    public function getIsPending()
    {
        if (array_key_exists("isPending", $this->_propDict)) {
            return $this->_propDict["isPending"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isPending
    * Indicates the patent is pending.
    *
    * @param bool $val The isPending
    *
    * @return ItemPatent
    */
    public function setIsPending($val)
    {
        $this->_propDict["isPending"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the issuedDate
    * The date that the patent was granted.
    *
    * @return \DateTime The issuedDate
    */
    public function getIssuedDate()
    {
        if (array_key_exists("issuedDate", $this->_propDict)) {
            if (is_a($this->_propDict["issuedDate"], "\DateTime")) {
                return $this->_propDict["issuedDate"];
            } else {
                $this->_propDict["issuedDate"] = new \DateTime($this->_propDict["issuedDate"]);
                return $this->_propDict["issuedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the issuedDate
    * The date that the patent was granted.
    *
    * @param \DateTime $val The issuedDate
    *
    * @return ItemPatent
    */
    public function setIssuedDate($val)
    {
        $this->_propDict["issuedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the issuingAuthority
    * Authority which granted the patent.
    *
    * @return string The issuingAuthority
    */
    public function getIssuingAuthority()
    {
        if (array_key_exists("issuingAuthority", $this->_propDict)) {
            return $this->_propDict["issuingAuthority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issuingAuthority
    * Authority which granted the patent.
    *
    * @param string $val The issuingAuthority
    *
    * @return ItemPatent
    */
    public function setIssuingAuthority($val)
    {
        $this->_propDict["issuingAuthority"] = $val;
        return $this;
    }
    
    /**
    * Gets the number
    * The patent number.
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
    * The patent number.
    *
    * @param string $val The number
    *
    * @return ItemPatent
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    * URL referencing the patent or filing.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    * URL referencing the patent or filing.
    *
    * @param string $val The webUrl
    *
    * @return ItemPatent
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
}
