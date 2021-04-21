<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingCategory File
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
* DeviceManagementSettingCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingCategory extends Entity
{
    /**
    * Gets the displayName
    * The category name
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The category name
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementSettingCategory
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasRequiredSetting
    * The category contains top level required setting
    *
    * @return bool The hasRequiredSetting
    */
    public function getHasRequiredSetting()
    {
        if (array_key_exists("hasRequiredSetting", $this->_propDict)) {
            return $this->_propDict["hasRequiredSetting"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasRequiredSetting
    * The category contains top level required setting
    *
    * @param bool $val The hasRequiredSetting
    *
    * @return DeviceManagementSettingCategory
    */
    public function setHasRequiredSetting($val)
    {
        $this->_propDict["hasRequiredSetting"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the settingDefinitions
    * The setting definitions this category contains
     *
     * @return array The settingDefinitions
     */
    public function getSettingDefinitions()
    {
        if (array_key_exists("settingDefinitions", $this->_propDict)) {
           return $this->_propDict["settingDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the settingDefinitions
    * The setting definitions this category contains
    *
    * @param DeviceManagementSettingDefinition $val The settingDefinitions
    *
    * @return DeviceManagementSettingCategory
    */
    public function setSettingDefinitions($val)
    {
		$this->_propDict["settingDefinitions"] = $val;
        return $this;
    }
    
}
