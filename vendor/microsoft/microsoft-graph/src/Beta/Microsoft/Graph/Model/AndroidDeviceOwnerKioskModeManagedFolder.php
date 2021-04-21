<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerKioskModeManagedFolder File
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
* AndroidDeviceOwnerKioskModeManagedFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerKioskModeManagedFolder extends Entity
{
    /**
    * Gets the folderIdentifier
    * Unique identifier for the folder
    *
    * @return string The folderIdentifier
    */
    public function getFolderIdentifier()
    {
        if (array_key_exists("folderIdentifier", $this->_propDict)) {
            return $this->_propDict["folderIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the folderIdentifier
    * Unique identifier for the folder
    *
    * @param string $val The value of the folderIdentifier
    *
    * @return AndroidDeviceOwnerKioskModeManagedFolder
    */
    public function setFolderIdentifier($val)
    {
        $this->_propDict["folderIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the folderName
    * Display name for the folder
    *
    * @return string The folderName
    */
    public function getFolderName()
    {
        if (array_key_exists("folderName", $this->_propDict)) {
            return $this->_propDict["folderName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the folderName
    * Display name for the folder
    *
    * @param string $val The value of the folderName
    *
    * @return AndroidDeviceOwnerKioskModeManagedFolder
    */
    public function setFolderName($val)
    {
        $this->_propDict["folderName"] = $val;
        return $this;
    }

    /**
    * Gets the items
    * Items to be added to managed folder. This collection can contain a maximum of 500 elements.
    *
    * @return AndroidDeviceOwnerKioskModeFolderItem The items
    */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
            if (is_a($this->_propDict["items"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerKioskModeFolderItem")) {
                return $this->_propDict["items"];
            } else {
                $this->_propDict["items"] = new AndroidDeviceOwnerKioskModeFolderItem($this->_propDict["items"]);
                return $this->_propDict["items"];
            }
        }
        return null;
    }

    /**
    * Sets the items
    * Items to be added to managed folder. This collection can contain a maximum of 500 elements.
    *
    * @param AndroidDeviceOwnerKioskModeFolderItem $val The value to assign to the items
    *
    * @return AndroidDeviceOwnerKioskModeManagedFolder The AndroidDeviceOwnerKioskModeManagedFolder
    */
    public function setItems($val)
    {
        $this->_propDict["items"] = $val;
         return $this;
    }
}
