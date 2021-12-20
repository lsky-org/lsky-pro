<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateCatalogItem File
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
* WindowsUpdateCatalogItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUpdateCatalogItem extends Entity
{
    /**
    * Gets the displayName
    * The display name for the catalog item.
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
    * The display name for the catalog item.
    *
    * @param string $val The displayName
    *
    * @return WindowsUpdateCatalogItem
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the releaseDateTime
    * The date the catalog item was released
    *
    * @return \DateTime The releaseDateTime
    */
    public function getReleaseDateTime()
    {
        if (array_key_exists("releaseDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["releaseDateTime"], "\DateTime")) {
                return $this->_propDict["releaseDateTime"];
            } else {
                $this->_propDict["releaseDateTime"] = new \DateTime($this->_propDict["releaseDateTime"]);
                return $this->_propDict["releaseDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the releaseDateTime
    * The date the catalog item was released
    *
    * @param \DateTime $val The releaseDateTime
    *
    * @return WindowsUpdateCatalogItem
    */
    public function setReleaseDateTime($val)
    {
        $this->_propDict["releaseDateTime"] = $val;
        return $this;
    }
    
}
