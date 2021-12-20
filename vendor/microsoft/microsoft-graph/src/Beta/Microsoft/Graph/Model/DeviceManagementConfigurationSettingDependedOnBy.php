<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingDependedOnBy File
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
* DeviceManagementConfigurationSettingDependedOnBy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingDependedOnBy extends Entity
{
    /**
    * Gets the dependedOnBy
    * Identifier of child setting that is dependent on the current setting
    *
    * @return string The dependedOnBy
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
    * Identifier of child setting that is dependent on the current setting
    *
    * @param string $val The value of the dependedOnBy
    *
    * @return DeviceManagementConfigurationSettingDependedOnBy
    */
    public function setDependedOnBy($val)
    {
        $this->_propDict["dependedOnBy"] = $val;
        return $this;
    }
    /**
    * Gets the required
    * Value that determines if the child setting is required based on the parent setting's selection
    *
    * @return bool The required
    */
    public function getRequired()
    {
        if (array_key_exists("required", $this->_propDict)) {
            return $this->_propDict["required"];
        } else {
            return null;
        }
    }

    /**
    * Sets the required
    * Value that determines if the child setting is required based on the parent setting's selection
    *
    * @param bool $val The value of the required
    *
    * @return DeviceManagementConfigurationSettingDependedOnBy
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = $val;
        return $this;
    }
}
