<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedDriveItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* SharedDriveItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharedDriveItem extends BaseItem
{
    /**
    * Gets the owner
    * Information about the owner of the shared item being referenced.
    *
    * @return IdentitySet The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["owner"];
            } else {
                $this->_propDict["owner"] = new IdentitySet($this->_propDict["owner"]);
                return $this->_propDict["owner"];
            }
        }
        return null;
    }
    
    /**
    * Sets the owner
    * Information about the owner of the shared item being referenced.
    *
    * @param IdentitySet $val The owner
    *
    * @return SharedDriveItem
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }
    
    /**
    * Gets the driveItem
    * Used to access the underlying driveItem
    *
    * @return DriveItem The driveItem
    */
    public function getDriveItem()
    {
        if (array_key_exists("driveItem", $this->_propDict)) {
            if (is_a($this->_propDict["driveItem"], "\Microsoft\Graph\Model\DriveItem")) {
                return $this->_propDict["driveItem"];
            } else {
                $this->_propDict["driveItem"] = new DriveItem($this->_propDict["driveItem"]);
                return $this->_propDict["driveItem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the driveItem
    * Used to access the underlying driveItem
    *
    * @param DriveItem $val The driveItem
    *
    * @return SharedDriveItem
    */
    public function setDriveItem($val)
    {
        $this->_propDict["driveItem"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
    * All driveItems contained in the sharing root. This collection cannot be enumerated.
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
    * All driveItems contained in the sharing root. This collection cannot be enumerated.
    *
    * @param DriveItem $val The items
    *
    * @return SharedDriveItem
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    
    /**
    * Gets the list
    * Used to access the underlying list
    *
    * @return GraphList The list
    */
    public function getList()
    {
        if (array_key_exists("list", $this->_propDict)) {
            if (is_a($this->_propDict["list"], "\Microsoft\Graph\Model\GraphList")) {
                return $this->_propDict["list"];
            } else {
                $this->_propDict["list"] = new GraphList($this->_propDict["list"]);
                return $this->_propDict["list"];
            }
        }
        return null;
    }
    
    /**
    * Sets the list
    * Used to access the underlying list
    *
    * @param GraphList $val The list
    *
    * @return SharedDriveItem
    */
    public function setList($val)
    {
        $this->_propDict["list"] = $val;
        return $this;
    }
    
    /**
    * Gets the listItem
    * Used to access the underlying listItem
    *
    * @return ListItem The listItem
    */
    public function getListItem()
    {
        if (array_key_exists("listItem", $this->_propDict)) {
            if (is_a($this->_propDict["listItem"], "\Microsoft\Graph\Model\ListItem")) {
                return $this->_propDict["listItem"];
            } else {
                $this->_propDict["listItem"] = new ListItem($this->_propDict["listItem"]);
                return $this->_propDict["listItem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the listItem
    * Used to access the underlying listItem
    *
    * @param ListItem $val The listItem
    *
    * @return SharedDriveItem
    */
    public function setListItem($val)
    {
        $this->_propDict["listItem"] = $val;
        return $this;
    }
    
    /**
    * Gets the permission
    * Used to access the permission representing the underlying sharing link
    *
    * @return Permission The permission
    */
    public function getPermission()
    {
        if (array_key_exists("permission", $this->_propDict)) {
            if (is_a($this->_propDict["permission"], "\Microsoft\Graph\Model\Permission")) {
                return $this->_propDict["permission"];
            } else {
                $this->_propDict["permission"] = new Permission($this->_propDict["permission"]);
                return $this->_propDict["permission"];
            }
        }
        return null;
    }
    
    /**
    * Sets the permission
    * Used to access the permission representing the underlying sharing link
    *
    * @param Permission $val The permission
    *
    * @return SharedDriveItem
    */
    public function setPermission($val)
    {
        $this->_propDict["permission"] = $val;
        return $this;
    }
    
    /**
    * Gets the root
    * Used to access the underlying driveItem. Deprecated -- use driveItem instead.
    *
    * @return DriveItem The root
    */
    public function getRoot()
    {
        if (array_key_exists("root", $this->_propDict)) {
            if (is_a($this->_propDict["root"], "\Microsoft\Graph\Model\DriveItem")) {
                return $this->_propDict["root"];
            } else {
                $this->_propDict["root"] = new DriveItem($this->_propDict["root"]);
                return $this->_propDict["root"];
            }
        }
        return null;
    }
    
    /**
    * Sets the root
    * Used to access the underlying driveItem. Deprecated -- use driveItem instead.
    *
    * @param DriveItem $val The root
    *
    * @return SharedDriveItem
    */
    public function setRoot($val)
    {
        $this->_propDict["root"] = $val;
        return $this;
    }
    
    /**
    * Gets the site
    * Used to access the underlying site
    *
    * @return Site The site
    */
    public function getSite()
    {
        if (array_key_exists("site", $this->_propDict)) {
            if (is_a($this->_propDict["site"], "\Microsoft\Graph\Model\Site")) {
                return $this->_propDict["site"];
            } else {
                $this->_propDict["site"] = new Site($this->_propDict["site"]);
                return $this->_propDict["site"];
            }
        }
        return null;
    }
    
    /**
    * Sets the site
    * Used to access the underlying site
    *
    * @param Site $val The site
    *
    * @return SharedDriveItem
    */
    public function setSite($val)
    {
        $this->_propDict["site"] = $val;
        return $this;
    }
    
}
