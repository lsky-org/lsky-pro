<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementAbstractComplexSettingInstance File
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
* DeviceManagementAbstractComplexSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementAbstractComplexSettingInstance extends DeviceManagementSettingInstance
{
    /**
    * Gets the implementationId
    * The definition ID for the chosen implementation of this complex setting
    *
    * @return string The implementationId
    */
    public function getImplementationId()
    {
        if (array_key_exists("implementationId", $this->_propDict)) {
            return $this->_propDict["implementationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the implementationId
    * The definition ID for the chosen implementation of this complex setting
    *
    * @param string $val The implementationId
    *
    * @return DeviceManagementAbstractComplexSettingInstance
    */
    public function setImplementationId($val)
    {
        $this->_propDict["implementationId"] = $val;
        return $this;
    }
    

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
    * @return DeviceManagementAbstractComplexSettingInstance
    */
    public function setValue($val)
    {
		$this->_propDict["value"] = $val;
        return $this;
    }
    
}
