<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSLaunchItem File
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
* MacOSLaunchItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSLaunchItem extends Entity
{
    /**
    * Gets the hide
    * Whether or not to hide the item from the Users and Groups List.
    *
    * @return bool The hide
    */
    public function getHide()
    {
        if (array_key_exists("hide", $this->_propDict)) {
            return $this->_propDict["hide"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hide
    * Whether or not to hide the item from the Users and Groups List.
    *
    * @param bool $val The value of the hide
    *
    * @return MacOSLaunchItem
    */
    public function setHide($val)
    {
        $this->_propDict["hide"] = $val;
        return $this;
    }
    /**
    * Gets the path
    * Path to the launch item.
    *
    * @return string The path
    */
    public function getPath()
    {
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }

    /**
    * Sets the path
    * Path to the launch item.
    *
    * @param string $val The value of the path
    *
    * @return MacOSLaunchItem
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
}
