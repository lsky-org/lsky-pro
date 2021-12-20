<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementUserRightsSetting File
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
* DeviceManagementUserRightsSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementUserRightsSetting extends Entity
{

    /**
    * Gets the localUsersOrGroups
    * Representing a collection of local users or groups which will be set on device if the state of this setting is Allowed. This collection can contain a maximum of 500 elements.
    *
    * @return DeviceManagementUserRightsLocalUserOrGroup The localUsersOrGroups
    */
    public function getLocalUsersOrGroups()
    {
        if (array_key_exists("localUsersOrGroups", $this->_propDict)) {
            if (is_a($this->_propDict["localUsersOrGroups"], "\Beta\Microsoft\Graph\Model\DeviceManagementUserRightsLocalUserOrGroup")) {
                return $this->_propDict["localUsersOrGroups"];
            } else {
                $this->_propDict["localUsersOrGroups"] = new DeviceManagementUserRightsLocalUserOrGroup($this->_propDict["localUsersOrGroups"]);
                return $this->_propDict["localUsersOrGroups"];
            }
        }
        return null;
    }

    /**
    * Sets the localUsersOrGroups
    * Representing a collection of local users or groups which will be set on device if the state of this setting is Allowed. This collection can contain a maximum of 500 elements.
    *
    * @param DeviceManagementUserRightsLocalUserOrGroup $val The value to assign to the localUsersOrGroups
    *
    * @return DeviceManagementUserRightsSetting The DeviceManagementUserRightsSetting
    */
    public function setLocalUsersOrGroups($val)
    {
        $this->_propDict["localUsersOrGroups"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Representing the current state of this user rights setting. Possible values are: notConfigured, blocked, allowed.
    *
    * @return StateManagementSetting The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\StateManagementSetting")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new StateManagementSetting($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Representing the current state of this user rights setting. Possible values are: notConfigured, blocked, allowed.
    *
    * @param StateManagementSetting $val The value to assign to the state
    *
    * @return DeviceManagementUserRightsSetting The DeviceManagementUserRightsSetting
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
