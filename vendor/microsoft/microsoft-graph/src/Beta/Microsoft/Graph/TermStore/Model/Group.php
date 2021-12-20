<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Group File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\TermStore\Model;

/**
* Group class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Group extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the createdDateTime
    * Date and time of group creation. Read-only.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Date and time of group creation. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Group
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description giving details on the term usage.
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
    * Description giving details on the term usage.
    *
    * @param string $val The description
    *
    * @return Group
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of group.
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
    * Name of group.
    *
    * @param string $val The displayName
    *
    * @return Group
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentSiteId
    * Id of the parent site of this group.
    *
    * @return string The parentSiteId
    */
    public function getParentSiteId()
    {
        if (array_key_exists("parentSiteId", $this->_propDict)) {
            return $this->_propDict["parentSiteId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentSiteId
    * Id of the parent site of this group.
    *
    * @param string $val The parentSiteId
    *
    * @return Group
    */
    public function setParentSiteId($val)
    {
        $this->_propDict["parentSiteId"] = $val;
        return $this;
    }
    
    /**
    * Gets the scope
    * Returns type of group. Possible values are 'global', 'system' and 'siteCollection'.
    *
    * @return TermGroupScope The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "\Beta\Microsoft\Graph\TermStore\Model\TermGroupScope")) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new TermGroupScope($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scope
    * Returns type of group. Possible values are 'global', 'system' and 'siteCollection'.
    *
    * @param TermGroupScope $val The scope
    *
    * @return Group
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sets
    * All sets under the group in a term [store].
     *
     * @return array The sets
     */
    public function getSets()
    {
        if (array_key_exists("sets", $this->_propDict)) {
           return $this->_propDict["sets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sets
    * All sets under the group in a term [store].
    *
    * @param Set $val The sets
    *
    * @return Group
    */
    public function setSets($val)
    {
		$this->_propDict["sets"] = $val;
        return $this;
    }
    
}
