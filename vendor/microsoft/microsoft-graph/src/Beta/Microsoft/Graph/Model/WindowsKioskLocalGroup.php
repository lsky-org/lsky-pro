<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskLocalGroup File
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
* WindowsKioskLocalGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskLocalGroup extends WindowsKioskUser
{
    /**
    * Gets the groupName
    * The name of the local group that will be locked to this kiosk configuration
    *
    * @return string The groupName
    */
    public function getGroupName()
    {
        if (array_key_exists("groupName", $this->_propDict)) {
            return $this->_propDict["groupName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groupName
    * The name of the local group that will be locked to this kiosk configuration
    *
    * @param string $val The value of the groupName
    *
    * @return WindowsKioskLocalGroup
    */
    public function setGroupName($val)
    {
        $this->_propDict["groupName"] = $val;
        return $this;
    }
}
