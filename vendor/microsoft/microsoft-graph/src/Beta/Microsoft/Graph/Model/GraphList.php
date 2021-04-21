<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GraphList File
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
* GraphList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GraphList extends BaseItem
{
    /**
    * Gets the displayName
    * The displayable title of the list.
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
    * The displayable title of the list.
    *
    * @param string $val The displayName
    *
    * @return List
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the list
    * Provides additional details about the list.
    *
    * @return ListInfo The list
    */
    public function getList()
    {
        if (array_key_exists("list", $this->_propDict)) {
            if (is_a($this->_propDict["list"], "\Beta\Microsoft\Graph\Model\ListInfo")) {
                return $this->_propDict["list"];
            } else {
                $this->_propDict["list"] = new ListInfo($this->_propDict["list"]);
                return $this->_propDict["list"];
            }
        }
        return null;
    }
    
    /**
    * Sets the list
    * Provides additional details about the list.
    *
    * @param ListInfo $val The list
    *
    * @return List
    */
    public function setList($val)
    {
        $this->_propDict["list"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharepointIds
    * Returns identifiers useful for SharePoint REST compatibility. Read-only.
    *
    * @return SharepointIds The sharepointIds
    */
    public function getSharepointIds()
    {
        if (array_key_exists("sharepointIds", $this->_propDict)) {
            if (is_a($this->_propDict["sharepointIds"], "\Beta\Microsoft\Graph\Model\SharepointIds")) {
                return $this->_propDict["sharepointIds"];
            } else {
                $this->_propDict["sharepointIds"] = new SharepointIds($this->_propDict["sharepointIds"]);
                return $this->_propDict["sharepointIds"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharepointIds
    * Returns identifiers useful for SharePoint REST compatibility. Read-only.
    *
    * @param SharepointIds $val The sharepointIds
    *
    * @return List
    */
    public function setSharepointIds($val)
    {
        $this->_propDict["sharepointIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the system
    * If present, indicates that this is a system-managed list. Read-only.
    *
    * @return SystemFacet The system
    */
    public function getSystem()
    {
        if (array_key_exists("system", $this->_propDict)) {
            if (is_a($this->_propDict["system"], "\Beta\Microsoft\Graph\Model\SystemFacet")) {
                return $this->_propDict["system"];
            } else {
                $this->_propDict["system"] = new SystemFacet($this->_propDict["system"]);
                return $this->_propDict["system"];
            }
        }
        return null;
    }
    
    /**
    * Sets the system
    * If present, indicates that this is a system-managed list. Read-only.
    *
    * @param SystemFacet $val The system
    *
    * @return List
    */
    public function setSystem($val)
    {
        $this->_propDict["system"] = $val;
        return $this;
    }
    

     /** 
     * Gets the activities
    * The recent activities that took place within this list.
     *
     * @return array The activities
     */
    public function getActivities()
    {
        if (array_key_exists("activities", $this->_propDict)) {
           return $this->_propDict["activities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activities
    * The recent activities that took place within this list.
    *
    * @param ItemActivityOLD $val The activities
    *
    * @return List
    */
    public function setActivities($val)
    {
		$this->_propDict["activities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the columns
    * The collection of field definitions for this list.
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
    * The collection of field definitions for this list.
    *
    * @param ColumnDefinition $val The columns
    *
    * @return List
    */
    public function setColumns($val)
    {
		$this->_propDict["columns"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contentTypes
    * The collection of content types present in this list.
     *
     * @return array The contentTypes
     */
    public function getContentTypes()
    {
        if (array_key_exists("contentTypes", $this->_propDict)) {
           return $this->_propDict["contentTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contentTypes
    * The collection of content types present in this list.
    *
    * @param ContentType $val The contentTypes
    *
    * @return List
    */
    public function setContentTypes($val)
    {
		$this->_propDict["contentTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the drive
    * Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem].
    *
    * @return Drive The drive
    */
    public function getDrive()
    {
        if (array_key_exists("drive", $this->_propDict)) {
            if (is_a($this->_propDict["drive"], "\Beta\Microsoft\Graph\Model\Drive")) {
                return $this->_propDict["drive"];
            } else {
                $this->_propDict["drive"] = new Drive($this->_propDict["drive"]);
                return $this->_propDict["drive"];
            }
        }
        return null;
    }
    
    /**
    * Sets the drive
    * Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem].
    *
    * @param Drive $val The drive
    *
    * @return List
    */
    public function setDrive($val)
    {
        $this->_propDict["drive"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
    * All items contained in the list.
     *
     * @return array The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the items
    * All items contained in the list.
    *
    * @param ListItem $val The items
    *
    * @return List
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    

     /** 
     * Gets the subscriptions
    * The set of subscriptions on the list.
     *
     * @return array The subscriptions
     */
    public function getSubscriptions()
    {
        if (array_key_exists("subscriptions", $this->_propDict)) {
           return $this->_propDict["subscriptions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the subscriptions
    * The set of subscriptions on the list.
    *
    * @param Subscription $val The subscriptions
    *
    * @return List
    */
    public function setSubscriptions($val)
    {
		$this->_propDict["subscriptions"] = $val;
        return $this;
    }
    
}
