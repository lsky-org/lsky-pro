<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingGroupDefinition File
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
* DeviceManagementConfigurationSettingGroupDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingGroupDefinition extends DeviceManagementConfigurationSettingDefinition
{
    /**
    * Gets the childIds
    * Dependent child settings to this group of settings
    *
    * @return string The childIds
    */
    public function getChildIds()
    {
        if (array_key_exists("childIds", $this->_propDict)) {
            return $this->_propDict["childIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the childIds
    * Dependent child settings to this group of settings
    *
    * @param string $val The childIds
    *
    * @return DeviceManagementConfigurationSettingGroupDefinition
    */
    public function setChildIds($val)
    {
        $this->_propDict["childIds"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dependedOnBy
    * List of child settings that depend on this setting
     *
     * @return array The dependedOnBy
     */
    public function getDependedOnBy()
    {
        if (array_key_exists("dependedOnBy", $this->_propDict)) {
           return $this->_propDict["dependedOnBy"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dependedOnBy
    * List of child settings that depend on this setting
    *
    * @param DeviceManagementConfigurationSettingDependedOnBy $val The dependedOnBy
    *
    * @return DeviceManagementConfigurationSettingGroupDefinition
    */
    public function setDependedOnBy($val)
    {
		$this->_propDict["dependedOnBy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dependentOn
    * List of Dependencies for the setting group
     *
     * @return array The dependentOn
     */
    public function getDependentOn()
    {
        if (array_key_exists("dependentOn", $this->_propDict)) {
           return $this->_propDict["dependentOn"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dependentOn
    * List of Dependencies for the setting group
    *
    * @param DeviceManagementConfigurationDependentOn $val The dependentOn
    *
    * @return DeviceManagementConfigurationSettingGroupDefinition
    */
    public function setDependentOn($val)
    {
		$this->_propDict["dependentOn"] = $val;
        return $this;
    }
    
}
