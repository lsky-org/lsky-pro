<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Tag File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

/**
* Tag class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Tag extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the childSelectability
    * Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
    *
    * @return ChildSelectability The childSelectability
    */
    public function getChildSelectability()
    {
        if (array_key_exists("childSelectability", $this->_propDict)) {
            if (is_a($this->_propDict["childSelectability"], "\Beta\Microsoft\Graph\Ediscovery\Model\ChildSelectability")) {
                return $this->_propDict["childSelectability"];
            } else {
                $this->_propDict["childSelectability"] = new ChildSelectability($this->_propDict["childSelectability"]);
                return $this->_propDict["childSelectability"];
            }
        }
        return null;
    }
    
    /**
    * Sets the childSelectability
    * Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
    *
    * @param ChildSelectability $val The childSelectability
    *
    * @return Tag
    */
    public function setChildSelectability($val)
    {
        $this->_propDict["childSelectability"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * The user who created the tag.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * The user who created the tag.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The createdBy
    *
    * @return Tag
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description for the tag.
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
    * The description for the tag.
    *
    * @param string $val The description
    *
    * @return Tag
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Display name of the tag.
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
    * Display name of the tag.
    *
    * @param string $val The displayName
    *
    * @return Tag
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time the tag was last modified.
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
    * The date and time the tag was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Tag
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the childTags
    * Returns the tags that are a child of a tag.
     *
     * @return array The childTags
     */
    public function getChildTags()
    {
        if (array_key_exists("childTags", $this->_propDict)) {
           return $this->_propDict["childTags"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the childTags
    * Returns the tags that are a child of a tag.
    *
    * @param Tag $val The childTags
    *
    * @return Tag
    */
    public function setChildTags($val)
    {
		$this->_propDict["childTags"] = $val;
        return $this;
    }
    
    /**
    * Gets the parent
    * Returns the parent tag of the specified tag.
    *
    * @return Tag The parent
    */
    public function getParent()
    {
        if (array_key_exists("parent", $this->_propDict)) {
            if (is_a($this->_propDict["parent"], "\Beta\Microsoft\Graph\Ediscovery\Model\Tag")) {
                return $this->_propDict["parent"];
            } else {
                $this->_propDict["parent"] = new Tag($this->_propDict["parent"]);
                return $this->_propDict["parent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parent
    * Returns the parent tag of the specified tag.
    *
    * @param Tag $val The parent
    *
    * @return Tag
    */
    public function setParent($val)
    {
        $this->_propDict["parent"] = $val;
        return $this;
    }
    
}
