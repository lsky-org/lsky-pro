<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementComplexSettingInstance File
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
* DeviceManagementComplexSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementComplexSettingInstance extends DeviceManagementSettingInstance
{

     /** 
     * Gets the value
    * The values that make up the complex setting
     *
     * @return array The value
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
    * The values that make up the complex setting
    *
    * @param DeviceManagementSettingInstance $val The value
    *
    * @return DeviceManagementComplexSettingInstance
    */
    public function setValue($val)
    {
		$this->_propDict["value"] = $val;
        return $this;
    }
    
}
