<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyCategory File
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
* GroupPolicyCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyCategory extends Entity
{
    /**
    * Gets the displayName
    * The string id of the category's display name
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
    * The string id of the category's display name
    *
    * @param string $val The displayName
    *
    * @return GroupPolicyCategory
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isRoot
    * Defines if the category is a root category
    *
    * @return bool The isRoot
    */
    public function getIsRoot()
    {
        if (array_key_exists("isRoot", $this->_propDict)) {
            return $this->_propDict["isRoot"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRoot
    * Defines if the category is a root category
    *
    * @param bool $val The isRoot
    *
    * @return GroupPolicyCategory
    */
    public function setIsRoot($val)
    {
        $this->_propDict["isRoot"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time the entity was last modified.
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
    * The date and time the entity was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return GroupPolicyCategory
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the children
    * The children categories
     *
     * @return array The children
     */
    public function getChildren()
    {
        if (array_key_exists("children", $this->_propDict)) {
           return $this->_propDict["children"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the children
    * The children categories
    *
    * @param GroupPolicyCategory $val The children
    *
    * @return GroupPolicyCategory
    */
    public function setChildren($val)
    {
		$this->_propDict["children"] = $val;
        return $this;
    }
    
    /**
    * Gets the definitionFile
    * The id of the definition file the category came from
    *
    * @return GroupPolicyDefinitionFile The definitionFile
    */
    public function getDefinitionFile()
    {
        if (array_key_exists("definitionFile", $this->_propDict)) {
            if (is_a($this->_propDict["definitionFile"], "\Beta\Microsoft\Graph\Model\GroupPolicyDefinitionFile")) {
                return $this->_propDict["definitionFile"];
            } else {
                $this->_propDict["definitionFile"] = new GroupPolicyDefinitionFile($this->_propDict["definitionFile"]);
                return $this->_propDict["definitionFile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the definitionFile
    * The id of the definition file the category came from
    *
    * @param GroupPolicyDefinitionFile $val The definitionFile
    *
    * @return GroupPolicyCategory
    */
    public function setDefinitionFile($val)
    {
        $this->_propDict["definitionFile"] = $val;
        return $this;
    }
    

     /** 
     * Gets the definitions
    * The immediate GroupPolicyDefinition children of the category
     *
     * @return array The definitions
     */
    public function getDefinitions()
    {
        if (array_key_exists("definitions", $this->_propDict)) {
           return $this->_propDict["definitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the definitions
    * The immediate GroupPolicyDefinition children of the category
    *
    * @param GroupPolicyDefinition $val The definitions
    *
    * @return GroupPolicyCategory
    */
    public function setDefinitions($val)
    {
		$this->_propDict["definitions"] = $val;
        return $this;
    }
    
    /**
    * Gets the parent
    * The parent category
    *
    * @return GroupPolicyCategory The parent
    */
    public function getParent()
    {
        if (array_key_exists("parent", $this->_propDict)) {
            if (is_a($this->_propDict["parent"], "\Beta\Microsoft\Graph\Model\GroupPolicyCategory")) {
                return $this->_propDict["parent"];
            } else {
                $this->_propDict["parent"] = new GroupPolicyCategory($this->_propDict["parent"]);
                return $this->_propDict["parent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parent
    * The parent category
    *
    * @param GroupPolicyCategory $val The parent
    *
    * @return GroupPolicyCategory
    */
    public function setParent($val)
    {
        $this->_propDict["parent"] = $val;
        return $this;
    }
    
}
