<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSimpleSettingInstance File
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
* DeviceManagementConfigurationSimpleSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSimpleSettingInstance extends DeviceManagementConfigurationSettingInstance
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationSimpleSettingInstance");
    }


    /**
    * Gets the simpleSettingValue
    * Simple setting instance value
    *
    * @return DeviceManagementConfigurationSimpleSettingValue The simpleSettingValue
    */
    public function getSimpleSettingValue()
    {
        if (array_key_exists("simpleSettingValue", $this->_propDict)) {
            if (is_a($this->_propDict["simpleSettingValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSimpleSettingValue")) {
                return $this->_propDict["simpleSettingValue"];
            } else {
                $this->_propDict["simpleSettingValue"] = new DeviceManagementConfigurationSimpleSettingValue($this->_propDict["simpleSettingValue"]);
                return $this->_propDict["simpleSettingValue"];
            }
        }
        return null;
    }

    /**
    * Sets the simpleSettingValue
    * Simple setting instance value
    *
    * @param DeviceManagementConfigurationSimpleSettingValue $val The value to assign to the simpleSettingValue
    *
    * @return DeviceManagementConfigurationSimpleSettingInstance The DeviceManagementConfigurationSimpleSettingInstance
    */
    public function setSimpleSettingValue($val)
    {
        $this->_propDict["simpleSettingValue"] = $val;
         return $this;
    }
}
