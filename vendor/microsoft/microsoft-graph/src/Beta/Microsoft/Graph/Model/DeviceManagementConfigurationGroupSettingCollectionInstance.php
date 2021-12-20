<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationGroupSettingCollectionInstance File
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
* DeviceManagementConfigurationGroupSettingCollectionInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationGroupSettingCollectionInstance extends DeviceManagementConfigurationSettingInstance
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationGroupSettingCollectionInstance");
    }


    /**
    * Gets the groupSettingCollectionValue
    * A collection of GroupSetting values
    *
    * @return DeviceManagementConfigurationGroupSettingValue The groupSettingCollectionValue
    */
    public function getGroupSettingCollectionValue()
    {
        if (array_key_exists("groupSettingCollectionValue", $this->_propDict)) {
            if (is_a($this->_propDict["groupSettingCollectionValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationGroupSettingValue")) {
                return $this->_propDict["groupSettingCollectionValue"];
            } else {
                $this->_propDict["groupSettingCollectionValue"] = new DeviceManagementConfigurationGroupSettingValue($this->_propDict["groupSettingCollectionValue"]);
                return $this->_propDict["groupSettingCollectionValue"];
            }
        }
        return null;
    }

    /**
    * Sets the groupSettingCollectionValue
    * A collection of GroupSetting values
    *
    * @param DeviceManagementConfigurationGroupSettingValue $val The value to assign to the groupSettingCollectionValue
    *
    * @return DeviceManagementConfigurationGroupSettingCollectionInstance The DeviceManagementConfigurationGroupSettingCollectionInstance
    */
    public function setGroupSettingCollectionValue($val)
    {
        $this->_propDict["groupSettingCollectionValue"] = $val;
         return $this;
    }
}
