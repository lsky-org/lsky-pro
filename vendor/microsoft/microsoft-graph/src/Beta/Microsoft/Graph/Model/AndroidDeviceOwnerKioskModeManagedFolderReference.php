<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerKioskModeManagedFolderReference File
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
* AndroidDeviceOwnerKioskModeManagedFolderReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerKioskModeManagedFolderReference extends AndroidDeviceOwnerKioskModeHomeScreenItem
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
    * @return AndroidDeviceOwnerKioskModeManagedFolderReference
    */
    public function setFolderIdentifier($val)
    {
        $this->_propDict["folderIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the folderName
    * Name of the folder
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
    * Name of the folder
    *
    * @param string $val The value of the folderName
    *
    * @return AndroidDeviceOwnerKioskModeManagedFolderReference
    */
    public function setFolderName($val)
    {
        $this->_propDict["folderName"] = $val;
        return $this;
    }
}
