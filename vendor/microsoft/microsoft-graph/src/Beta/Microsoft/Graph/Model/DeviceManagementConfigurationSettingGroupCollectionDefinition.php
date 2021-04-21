<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingGroupCollectionDefinition File
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
* DeviceManagementConfigurationSettingGroupCollectionDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingGroupCollectionDefinition extends DeviceManagementConfigurationSettingGroupDefinition
{
    /**
    * Gets the maximumCount
    * Maximum number of setting group count in the collection. Valid values 1 to 100
    *
    * @return int The maximumCount
    */
    public function getMaximumCount()
    {
        if (array_key_exists("maximumCount", $this->_propDict)) {
            return $this->_propDict["maximumCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumCount
    * Maximum number of setting group count in the collection. Valid values 1 to 100
    *
    * @param int $val The maximumCount
    *
    * @return DeviceManagementConfigurationSettingGroupCollectionDefinition
    */
    public function setMaximumCount($val)
    {
        $this->_propDict["maximumCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumCount
    * Minimum number of setting group count in the collection. Valid values 1 to 100
    *
    * @return int The minimumCount
    */
    public function getMinimumCount()
    {
        if (array_key_exists("minimumCount", $this->_propDict)) {
            return $this->_propDict["minimumCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumCount
    * Minimum number of setting group count in the collection. Valid values 1 to 100
    *
    * @param int $val The minimumCount
    *
    * @return DeviceManagementConfigurationSettingGroupCollectionDefinition
    */
    public function setMinimumCount($val)
    {
        $this->_propDict["minimumCount"] = intval($val);
        return $this;
    }
    
}
