<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSettingOccurrence File
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
* DeviceManagementConfigurationSettingOccurrence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSettingOccurrence extends Entity
{
    /**
    * Gets the maxDeviceOccurrence
    * Maximum times setting can be set on device.
    *
    * @return int The maxDeviceOccurrence
    */
    public function getMaxDeviceOccurrence()
    {
        if (array_key_exists("maxDeviceOccurrence", $this->_propDict)) {
            return $this->_propDict["maxDeviceOccurrence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxDeviceOccurrence
    * Maximum times setting can be set on device.
    *
    * @param int $val The value of the maxDeviceOccurrence
    *
    * @return DeviceManagementConfigurationSettingOccurrence
    */
    public function setMaxDeviceOccurrence($val)
    {
        $this->_propDict["maxDeviceOccurrence"] = $val;
        return $this;
    }
    /**
    * Gets the minDeviceOccurrence
    * Minimum times setting can be set on device. A MinDeviceOccurrence of 0 means setting is optional
    *
    * @return int The minDeviceOccurrence
    */
    public function getMinDeviceOccurrence()
    {
        if (array_key_exists("minDeviceOccurrence", $this->_propDict)) {
            return $this->_propDict["minDeviceOccurrence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minDeviceOccurrence
    * Minimum times setting can be set on device. A MinDeviceOccurrence of 0 means setting is optional
    *
    * @param int $val The value of the minDeviceOccurrence
    *
    * @return DeviceManagementConfigurationSettingOccurrence
    */
    public function setMinDeviceOccurrence($val)
    {
        $this->_propDict["minDeviceOccurrence"] = $val;
        return $this;
    }
}
