<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationDependentOn File
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
* DeviceManagementConfigurationDependentOn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationDependentOn extends Entity
{
    /**
    * Gets the dependentOn
    * Identifier of parent setting/ parent setting option dependent on
    *
    * @return string The dependentOn
    */
    public function getDependentOn()
    {
        if (array_key_exists("dependentOn", $this->_propDict)) {
            return $this->_propDict["dependentOn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dependentOn
    * Identifier of parent setting/ parent setting option dependent on
    *
    * @param string $val The value of the dependentOn
    *
    * @return DeviceManagementConfigurationDependentOn
    */
    public function setDependentOn($val)
    {
        $this->_propDict["dependentOn"] = $val;
        return $this;
    }
    /**
    * Gets the parentSettingId
    * Identifier of parent setting/ parent setting id dependent on
    *
    * @return string The parentSettingId
    */
    public function getParentSettingId()
    {
        if (array_key_exists("parentSettingId", $this->_propDict)) {
            return $this->_propDict["parentSettingId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentSettingId
    * Identifier of parent setting/ parent setting id dependent on
    *
    * @param string $val The value of the parentSettingId
    *
    * @return DeviceManagementConfigurationDependentOn
    */
    public function setParentSettingId($val)
    {
        $this->_propDict["parentSettingId"] = $val;
        return $this;
    }
}
