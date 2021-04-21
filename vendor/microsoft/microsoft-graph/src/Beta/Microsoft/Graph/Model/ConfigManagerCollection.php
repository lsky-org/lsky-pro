<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigManagerCollection File
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
* ConfigManagerCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigManagerCollection extends Entity
{
    /**
    * Gets the collectionIdentifier
    * The collection identifier in SCCM.
    *
    * @return string The collectionIdentifier
    */
    public function getCollectionIdentifier()
    {
        if (array_key_exists("collectionIdentifier", $this->_propDict)) {
            return $this->_propDict["collectionIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the collectionIdentifier
    * The collection identifier in SCCM.
    *
    * @param string $val The collectionIdentifier
    *
    * @return ConfigManagerCollection
    */
    public function setCollectionIdentifier($val)
    {
        $this->_propDict["collectionIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The created date.
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
    * The created date.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ConfigManagerCollection
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The DisplayName.
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
    * The DisplayName.
    *
    * @param string $val The displayName
    *
    * @return ConfigManagerCollection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the hierarchyIdentifier
    * The Hierarchy Identifier.
    *
    * @return string The hierarchyIdentifier
    */
    public function getHierarchyIdentifier()
    {
        if (array_key_exists("hierarchyIdentifier", $this->_propDict)) {
            return $this->_propDict["hierarchyIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hierarchyIdentifier
    * The Hierarchy Identifier.
    *
    * @param string $val The hierarchyIdentifier
    *
    * @return ConfigManagerCollection
    */
    public function setHierarchyIdentifier($val)
    {
        $this->_propDict["hierarchyIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the hierarchyName
    * The HierarchyName.
    *
    * @return string The hierarchyName
    */
    public function getHierarchyName()
    {
        if (array_key_exists("hierarchyName", $this->_propDict)) {
            return $this->_propDict["hierarchyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hierarchyName
    * The HierarchyName.
    *
    * @param string $val The hierarchyName
    *
    * @return ConfigManagerCollection
    */
    public function setHierarchyName($val)
    {
        $this->_propDict["hierarchyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The last modified date.
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
    * The last modified date.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ConfigManagerCollection
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
}
