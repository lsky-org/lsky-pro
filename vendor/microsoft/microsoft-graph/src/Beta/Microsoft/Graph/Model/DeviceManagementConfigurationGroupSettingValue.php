<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationGroupSettingValue File
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
* DeviceManagementConfigurationGroupSettingValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationGroupSettingValue extends DeviceManagementConfigurationSettingValue
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationGroupSettingValue");
    }


    /**
    * Gets the children
    * Collection of child setting instances contained within this GroupSetting
    *
    * @return DeviceManagementConfigurationSettingInstance The children
    */
    public function getChildren()
    {
        if (array_key_exists("children", $this->_propDict)) {
            if (is_a($this->_propDict["children"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingInstance")) {
                return $this->_propDict["children"];
            } else {
                $this->_propDict["children"] = new DeviceManagementConfigurationSettingInstance($this->_propDict["children"]);
                return $this->_propDict["children"];
            }
        }
        return null;
    }

    /**
    * Sets the children
    * Collection of child setting instances contained within this GroupSetting
    *
    * @param DeviceManagementConfigurationSettingInstance $val The value to assign to the children
    *
    * @return DeviceManagementConfigurationGroupSettingValue The DeviceManagementConfigurationGroupSettingValue
    */
    public function setChildren($val)
    {
        $this->_propDict["children"] = $val;
         return $this;
    }
}
