<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Set File
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
* Set class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Set extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the createdDateTime
    * Date and time of set creation. Read-only.
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
    * Date and time of set creation. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Set
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
    * @return Set
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    

     /** 
     * Gets the localizedNames
    * Name of the set for each languageTag.
     *
     * @return array The localizedNames
     */
    public function getLocalizedNames()
    {
        if (array_key_exists("localizedNames", $this->_propDict)) {
           return $this->_propDict["localizedNames"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the localizedNames
    * Name of the set for each languageTag.
    *
    * @param LocalizedName $val The localizedNames
    *
    * @return Set
    */
    public function setLocalizedNames($val)
    {
		$this->_propDict["localizedNames"] = $val;
        return $this;
    }
    

     /** 
     * Gets the setProperties
    * Custom properties for the set.
     *
     * @return array The setProperties
     */
    public function getSetProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
           return $this->_propDict["properties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the setProperties
    * Custom properties for the set.
    *
    * @param \Beta\Microsoft\Graph\Model\KeyValue $val The setProperties
    *
    * @return Set
    */
    public function setSetProperties($val)
    {
		$this->_propDict["properties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the children
    * Children terms of set in term [store].
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
    * Children terms of set in term [store].
    *
    * @param Term $val The children
    *
    * @return Set
    */
    public function setChildren($val)
    {
		$this->_propDict["children"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentGroup
    * The parent [group] that contains the set.
    *
    * @return Group The parentGroup
    */
    public function getParentGroup()
    {
        if (array_key_exists("parentGroup", $this->_propDict)) {
            if (is_a($this->_propDict["parentGroup"], "\Beta\Microsoft\Graph\TermStore\Model\Group")) {
                return $this->_propDict["parentGroup"];
            } else {
                $this->_propDict["parentGroup"] = new Group($this->_propDict["parentGroup"]);
                return $this->_propDict["parentGroup"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parentGroup
    * The parent [group] that contains the set.
    *
    * @param Group $val The parentGroup
    *
    * @return Set
    */
    public function setParentGroup($val)
    {
        $this->_propDict["parentGroup"] = $val;
        return $this;
    }
    

     /** 
     * Gets the relations
    * Indicates which terms have been pinned or reused directly under the set.
     *
     * @return array The relations
     */
    public function getRelations()
    {
        if (array_key_exists("relations", $this->_propDict)) {
           return $this->_propDict["relations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the relations
    * Indicates which terms have been pinned or reused directly under the set.
    *
    * @param Relation $val The relations
    *
    * @return Set
    */
    public function setRelations($val)
    {
		$this->_propDict["relations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the terms
    * All the terms under the set.
     *
     * @return array The terms
     */
    public function getTerms()
    {
        if (array_key_exists("terms", $this->_propDict)) {
           return $this->_propDict["terms"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the terms
    * All the terms under the set.
    *
    * @param Term $val The terms
    *
    * @return Set
    */
    public function setTerms($val)
    {
		$this->_propDict["terms"] = $val;
        return $this;
    }
    
}
