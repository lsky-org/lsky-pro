<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementComplexSettingDefinition File
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
* DeviceManagementComplexSettingDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementComplexSettingDefinition extends DeviceManagementSettingDefinition
{
    /**
    * Gets the propertyDefinitionIds
    * The definitions of each property of the complex setting
    *
    * @return string The propertyDefinitionIds
    */
    public function getPropertyDefinitionIds()
    {
        if (array_key_exists("propertyDefinitionIds", $this->_propDict)) {
            return $this->_propDict["propertyDefinitionIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the propertyDefinitionIds
    * The definitions of each property of the complex setting
    *
    * @param string $val The propertyDefinitionIds
    *
    * @return DeviceManagementComplexSettingDefinition
    */
    public function setPropertyDefinitionIds($val)
    {
        $this->_propDict["propertyDefinitionIds"] = $val;
        return $this;
    }
    
}
