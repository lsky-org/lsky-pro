<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationChoiceSettingCollectionInstance File
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
* DeviceManagementConfigurationChoiceSettingCollectionInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationChoiceSettingCollectionInstance extends DeviceManagementConfigurationSettingInstance
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationChoiceSettingCollectionInstance");
    }


    /**
    * Gets the choiceSettingCollectionValue
    * Choice setting collection value
    *
    * @return DeviceManagementConfigurationChoiceSettingValue The choiceSettingCollectionValue
    */
    public function getChoiceSettingCollectionValue()
    {
        if (array_key_exists("choiceSettingCollectionValue", $this->_propDict)) {
            if (is_a($this->_propDict["choiceSettingCollectionValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationChoiceSettingValue")) {
                return $this->_propDict["choiceSettingCollectionValue"];
            } else {
                $this->_propDict["choiceSettingCollectionValue"] = new DeviceManagementConfigurationChoiceSettingValue($this->_propDict["choiceSettingCollectionValue"]);
                return $this->_propDict["choiceSettingCollectionValue"];
            }
        }
        return null;
    }

    /**
    * Sets the choiceSettingCollectionValue
    * Choice setting collection value
    *
    * @param DeviceManagementConfigurationChoiceSettingValue $val The value to assign to the choiceSettingCollectionValue
    *
    * @return DeviceManagementConfigurationChoiceSettingCollectionInstance The DeviceManagementConfigurationChoiceSettingCollectionInstance
    */
    public function setChoiceSettingCollectionValue($val)
    {
        $this->_propDict["choiceSettingCollectionValue"] = $val;
         return $this;
    }
}
