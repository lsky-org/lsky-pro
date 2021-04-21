<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsWorkFromAnywhereDevicesSummary File
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
* UserExperienceAnalyticsWorkFromAnywhereDevicesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsWorkFromAnywhereDevicesSummary extends Entity
{

    /**
    * Gets the autopilotDevicesSummary
    * The value of work from anywhere autopilot devices summary.
    *
    * @return UserExperienceAnalyticsAutopilotDevicesSummary The autopilotDevicesSummary
    */
    public function getAutopilotDevicesSummary()
    {
        if (array_key_exists("autopilotDevicesSummary", $this->_propDict)) {
            if (is_a($this->_propDict["autopilotDevicesSummary"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsAutopilotDevicesSummary")) {
                return $this->_propDict["autopilotDevicesSummary"];
            } else {
                $this->_propDict["autopilotDevicesSummary"] = new UserExperienceAnalyticsAutopilotDevicesSummary($this->_propDict["autopilotDevicesSummary"]);
                return $this->_propDict["autopilotDevicesSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the autopilotDevicesSummary
    * The value of work from anywhere autopilot devices summary.
    *
    * @param UserExperienceAnalyticsAutopilotDevicesSummary $val The value to assign to the autopilotDevicesSummary
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary The UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setAutopilotDevicesSummary($val)
    {
        $this->_propDict["autopilotDevicesSummary"] = $val;
         return $this;
    }

    /**
    * Gets the cloudManagementDevicesSummary
    * The user experience work from anywhere Cloud management devices summary.
    *
    * @return UserExperienceAnalyticsCloudManagementDevicesSummary The cloudManagementDevicesSummary
    */
    public function getCloudManagementDevicesSummary()
    {
        if (array_key_exists("cloudManagementDevicesSummary", $this->_propDict)) {
            if (is_a($this->_propDict["cloudManagementDevicesSummary"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCloudManagementDevicesSummary")) {
                return $this->_propDict["cloudManagementDevicesSummary"];
            } else {
                $this->_propDict["cloudManagementDevicesSummary"] = new UserExperienceAnalyticsCloudManagementDevicesSummary($this->_propDict["cloudManagementDevicesSummary"]);
                return $this->_propDict["cloudManagementDevicesSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudManagementDevicesSummary
    * The user experience work from anywhere Cloud management devices summary.
    *
    * @param UserExperienceAnalyticsCloudManagementDevicesSummary $val The value to assign to the cloudManagementDevicesSummary
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary The UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setCloudManagementDevicesSummary($val)
    {
        $this->_propDict["cloudManagementDevicesSummary"] = $val;
         return $this;
    }

    /**
    * Gets the windows10DevicesSummary
    * The user experience analytics work from anywhere Windows 10 devices summary.
    *
    * @return UserExperienceAnalyticsWindows10DevicesSummary The windows10DevicesSummary
    */
    public function getWindows10DevicesSummary()
    {
        if (array_key_exists("windows10DevicesSummary", $this->_propDict)) {
            if (is_a($this->_propDict["windows10DevicesSummary"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsWindows10DevicesSummary")) {
                return $this->_propDict["windows10DevicesSummary"];
            } else {
                $this->_propDict["windows10DevicesSummary"] = new UserExperienceAnalyticsWindows10DevicesSummary($this->_propDict["windows10DevicesSummary"]);
                return $this->_propDict["windows10DevicesSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the windows10DevicesSummary
    * The user experience analytics work from anywhere Windows 10 devices summary.
    *
    * @param UserExperienceAnalyticsWindows10DevicesSummary $val The value to assign to the windows10DevicesSummary
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereDevicesSummary The UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
    */
    public function setWindows10DevicesSummary($val)
    {
        $this->_propDict["windows10DevicesSummary"] = $val;
         return $this;
    }
}
