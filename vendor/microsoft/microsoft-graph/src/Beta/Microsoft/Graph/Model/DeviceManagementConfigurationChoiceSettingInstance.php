<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationChoiceSettingInstance File
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
* DeviceManagementConfigurationChoiceSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationChoiceSettingInstance extends DeviceManagementConfigurationSettingInstance
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationChoiceSettingInstance");
    }


    /**
    * Gets the choiceSettingValue
    * Choice setting value
    *
    * @return DeviceManagementConfigurationChoiceSettingValue The choiceSettingValue
    */
    public function getChoiceSettingValue()
    {
        if (array_key_exists("choiceSettingValue", $this->_propDict)) {
            if (is_a($this->_propDict["choiceSettingValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationChoiceSettingValue")) {
                return $this->_propDict["choiceSettingValue"];
            } else {
                $this->_propDict["choiceSettingValue"] = new DeviceManagementConfigurationChoiceSettingValue($this->_propDict["choiceSettingValue"]);
                return $this->_propDict["choiceSettingValue"];
            }
        }
        return null;
    }

    /**
    * Sets the choiceSettingValue
    * Choice setting value
    *
    * @param DeviceManagementConfigurationChoiceSettingValue $val The value to assign to the choiceSettingValue
    *
    * @return DeviceManagementConfigurationChoiceSettingInstance The DeviceManagementConfigurationChoiceSettingInstance
    */
    public function setChoiceSettingValue($val)
    {
        $this->_propDict["choiceSettingValue"] = $val;
         return $this;
    }
}
