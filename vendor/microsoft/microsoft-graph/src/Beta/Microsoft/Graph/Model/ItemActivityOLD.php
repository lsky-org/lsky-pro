<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActivityOLD File
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
* ItemActivityOLD class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemActivityOLD extends Entity
{
    /**
    * Gets the action
    *
    * @return ItemActionSet The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\ItemActionSet")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new ItemActionSet($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }
    
    /**
    * Sets the action
    *
    * @param ItemActionSet $val The action
    *
    * @return ItemActivityOLD
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
        return $this;
    }
    
    /**
    * Gets the actor
    *
    * @return IdentitySet The actor
    */
    public function getActor()
    {
        if (array_key_exists("actor", $this->_propDict)) {
            if (is_a($this->_propDict["actor"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["actor"];
            } else {
                $this->_propDict["actor"] = new IdentitySet($this->_propDict["actor"]);
                return $this->_propDict["actor"];
            }
        }
        return null;
    }
    
    /**
    * Sets the actor
    *
    * @param IdentitySet $val The actor
    *
    * @return ItemActivityOLD
    */
    public function setActor($val)
    {
        $this->_propDict["actor"] = $val;
        return $this;
    }
    
    /**
    * Gets the times
    *
    * @return ItemActivityTimeSet The times
    */
    public function getTimes()
    {
        if (array_key_exists("times", $this->_propDict)) {
            if (is_a($this->_propDict["times"], "\Beta\Microsoft\Graph\Model\ItemActivityTimeSet")) {
                return $this->_propDict["times"];
            } else {
                $this->_propDict["times"] = new ItemActivityTimeSet($this->_propDict["times"]);
                return $this->_propDict["times"];
            }
        }
        return null;
    }
    
    /**
    * Sets the times
    *
    * @param ItemActivityTimeSet $val The times
    *
    * @return ItemActivityOLD
    */
    public function setTimes($val)
    {
        $this->_propDict["times"] = $val;
        return $this;
    }
    
    /**
    * Gets the driveItem
    *
    * @return DriveItem The driveItem
    */
    public function getDriveItem()
    {
        if (array_key_exists("driveItem", $this->_propDict)) {
            if (is_a($this->_propDict["driveItem"], "\Beta\Microsoft\Graph\Model\DriveItem")) {
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
    *
    * @param DriveItem $val The driveItem
    *
    * @return ItemActivityOLD
    */
    public function setDriveItem($val)
    {
        $this->_propDict["driveItem"] = $val;
        return $this;
    }
    
    /**
    * Gets the listItem
    *
    * @return ListItem The listItem
    */
    public function getListItem()
    {
        if (array_key_exists("listItem", $this->_propDict)) {
            if (is_a($this->_propDict["listItem"], "\Beta\Microsoft\Graph\Model\ListItem")) {
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
    *
    * @param ListItem $val The listItem
    *
    * @return ItemActivityOLD
    */
    public function setListItem($val)
    {
        $this->_propDict["listItem"] = $val;
        return $this;
    }
    
}
