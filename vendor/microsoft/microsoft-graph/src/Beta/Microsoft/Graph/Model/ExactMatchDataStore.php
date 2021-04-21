<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchDataStore File
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
* ExactMatchDataStore class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchDataStore extends Entity
{

     /** 
     * Gets the columns
     *
     * @return array The columns
     */
    public function getColumns()
    {
        if (array_key_exists("columns", $this->_propDict)) {
           return $this->_propDict["columns"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the columns
    *
    * @param ExactDataMatchStoreColumn $val The columns
    *
    * @return ExactMatchDataStore
    */
    public function setColumns($val)
    {
		$this->_propDict["columns"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataLastUpdatedDateTime
    *
    * @return \DateTime The dataLastUpdatedDateTime
    */
    public function getDataLastUpdatedDateTime()
    {
        if (array_key_exists("dataLastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dataLastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["dataLastUpdatedDateTime"];
            } else {
                $this->_propDict["dataLastUpdatedDateTime"] = new \DateTime($this->_propDict["dataLastUpdatedDateTime"]);
                return $this->_propDict["dataLastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataLastUpdatedDateTime
    *
    * @param \DateTime $val The dataLastUpdatedDateTime
    *
    * @return ExactMatchDataStore
    */
    public function setDataLastUpdatedDateTime($val)
    {
        $this->_propDict["dataLastUpdatedDateTime"] = $val;
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
    * @return ExactMatchDataStore
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return ExactMatchDataStore
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sessions
     *
     * @return array The sessions
     */
    public function getSessions()
    {
        if (array_key_exists("sessions", $this->_propDict)) {
           return $this->_propDict["sessions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sessions
    *
    * @param ExactMatchSession $val The sessions
    *
    * @return ExactMatchDataStore
    */
    public function setSessions($val)
    {
		$this->_propDict["sessions"] = $val;
        return $this;
    }
    
}
