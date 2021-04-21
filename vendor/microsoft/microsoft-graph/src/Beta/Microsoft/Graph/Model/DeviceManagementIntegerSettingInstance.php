<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementIntegerSettingInstance File
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
* DeviceManagementIntegerSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementIntegerSettingInstance extends DeviceManagementSettingInstance
{
    /**
    * Gets the value
    * The integer value
    *
    * @return int The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the value
    * The integer value
    *
    * @param int $val The value
    *
    * @return DeviceManagementIntegerSettingInstance
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = intval($val);
        return $this;
    }
    
}
