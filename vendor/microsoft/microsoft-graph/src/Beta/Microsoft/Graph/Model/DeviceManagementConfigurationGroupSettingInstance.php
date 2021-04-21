<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationGroupSettingInstance File
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
* DeviceManagementConfigurationGroupSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationGroupSettingInstance extends DeviceManagementConfigurationSettingInstance
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationGroupSettingInstance");
    }


    /**
    * Gets the groupSettingValue
    * GroupSetting value
    *
    * @return DeviceManagementConfigurationGroupSettingValue The groupSettingValue
    */
    public function getGroupSettingValue()
    {
        if (array_key_exists("groupSettingValue", $this->_propDict)) {
            if (is_a($this->_propDict["groupSettingValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationGroupSettingValue")) {
                return $this->_propDict["groupSettingValue"];
            } else {
                $this->_propDict["groupSettingValue"] = new DeviceManagementConfigurationGroupSettingValue($this->_propDict["groupSettingValue"]);
                return $this->_propDict["groupSettingValue"];
            }
        }
        return null;
    }

    /**
    * Sets the groupSettingValue
    * GroupSetting value
    *
    * @param DeviceManagementConfigurationGroupSettingValue $val The value to assign to the groupSettingValue
    *
    * @return DeviceManagementConfigurationGroupSettingInstance The DeviceManagementConfigurationGroupSettingInstance
    */
    public function setGroupSettingValue($val)
    {
        $this->_propDict["groupSettingValue"] = $val;
         return $this;
    }
}
