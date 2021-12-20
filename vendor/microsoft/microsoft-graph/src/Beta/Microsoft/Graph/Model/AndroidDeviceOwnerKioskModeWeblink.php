<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerKioskModeWeblink File
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
* AndroidDeviceOwnerKioskModeWeblink class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerKioskModeWeblink extends AndroidDeviceOwnerKioskModeFolderItem
{
    /**
    * Gets the label
    * Display name for weblink
    *
    * @return string The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }

    /**
    * Sets the label
    * Display name for weblink
    *
    * @param string $val The value of the label
    *
    * @return AndroidDeviceOwnerKioskModeWeblink
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }
    /**
    * Gets the link
    * Link for weblink
    *
    * @return string The link
    */
    public function getLink()
    {
        if (array_key_exists("link", $this->_propDict)) {
            return $this->_propDict["link"];
        } else {
            return null;
        }
    }

    /**
    * Sets the link
    * Link for weblink
    *
    * @param string $val The value of the link
    *
    * @return AndroidDeviceOwnerKioskModeWeblink
    */
    public function setLink($val)
    {
        $this->_propDict["link"] = $val;
        return $this;
    }
}
