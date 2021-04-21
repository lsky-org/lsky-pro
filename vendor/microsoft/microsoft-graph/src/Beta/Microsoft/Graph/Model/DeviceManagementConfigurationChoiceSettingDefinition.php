<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationChoiceSettingDefinition File
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
* DeviceManagementConfigurationChoiceSettingDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationChoiceSettingDefinition extends DeviceManagementConfigurationSettingDefinition
{
    /**
    * Gets the defaultOptionId
    * Default option for choice setting
    *
    * @return string The defaultOptionId
    */
    public function getDefaultOptionId()
    {
        if (array_key_exists("defaultOptionId", $this->_propDict)) {
            return $this->_propDict["defaultOptionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultOptionId
    * Default option for choice setting
    *
    * @param string $val The defaultOptionId
    *
    * @return DeviceManagementConfigurationChoiceSettingDefinition
    */
    public function setDefaultOptionId($val)
    {
        $this->_propDict["defaultOptionId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the options
    * Options for the setting that can be selected
     *
     * @return array The options
     */
    public function getOptions()
    {
        if (array_key_exists("options", $this->_propDict)) {
           return $this->_propDict["options"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the options
    * Options for the setting that can be selected
    *
    * @param DeviceManagementConfigurationOptionDefinition $val The options
    *
    * @return DeviceManagementConfigurationChoiceSettingDefinition
    */
    public function setOptions($val)
    {
		$this->_propDict["options"] = $val;
        return $this;
    }
    
}
