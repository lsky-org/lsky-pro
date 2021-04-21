<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Term File
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
* Term class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Term extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the createdDateTime
    * Date and time of term creation. Read-only
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
    * Date and time of term creation. Read-only
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Term
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the descriptions
    * Description about term that is dependent on the languageTag
     *
     * @return array The descriptions
     */
    public function getDescriptions()
    {
        if (array_key_exists("descriptions", $this->_propDict)) {
           return $this->_propDict["descriptions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the descriptions
    * Description about term that is dependent on the languageTag
    *
    * @param LocalizedDescription $val The descriptions
    *
    * @return Term
    */
    public function setDescriptions($val)
    {
		$this->_propDict["descriptions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the labels
    * Label metadata for a term
     *
     * @return array The labels
     */
    public function getLabels()
    {
        if (array_key_exists("labels", $this->_propDict)) {
           return $this->_propDict["labels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the labels
    * Label metadata for a term
    *
    * @param LocalizedLabel $val The labels
    *
    * @return Term
    */
    public function setLabels($val)
    {
		$this->_propDict["labels"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Last date and time of term modification. Read-only
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
    * Last date and time of term modification. Read-only
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Term
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the termProperties
    * Collection of properties on the term
     *
     * @return array The termProperties
     */
    public function getTermProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
           return $this->_propDict["properties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the termProperties
    * Collection of properties on the term
    *
    * @param \Beta\Microsoft\Graph\Model\KeyValue $val The termProperties
    *
    * @return Term
    */
    public function setTermProperties($val)
    {
		$this->_propDict["properties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the children
    * Children of current term
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
    * Children of current term
    *
    * @param Term $val The children
    *
    * @return Term
    */
    public function setChildren($val)
    {
		$this->_propDict["children"] = $val;
        return $this;
    }
    

     /** 
     * Gets the relations
    * To indicate which terms are related to the current term as either pinned or reused
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
    * To indicate which terms are related to the current term as either pinned or reused
    *
    * @param Relation $val The relations
    *
    * @return Term
    */
    public function setRelations($val)
    {
		$this->_propDict["relations"] = $val;
        return $this;
    }
    
    /**
    * Gets the set
    * The [set] in which the term is created
    *
    * @return Set The set
    */
    public function getSet()
    {
        if (array_key_exists("set", $this->_propDict)) {
            if (is_a($this->_propDict["set"], "\Beta\Microsoft\Graph\TermStore\Model\Set")) {
                return $this->_propDict["set"];
            } else {
                $this->_propDict["set"] = new Set($this->_propDict["set"]);
                return $this->_propDict["set"];
            }
        }
        return null;
    }
    
    /**
    * Sets the set
    * The [set] in which the term is created
    *
    * @param Set $val The set
    *
    * @return Term
    */
    public function setSet($val)
    {
        $this->_propDict["set"] = $val;
        return $this;
    }
    
}
