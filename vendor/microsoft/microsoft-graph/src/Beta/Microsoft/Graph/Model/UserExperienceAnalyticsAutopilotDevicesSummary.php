<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAutopilotDevicesSummary File
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
* UserExperienceAnalyticsAutopilotDevicesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAutopilotDevicesSummary extends Entity
{
    /**
    * Gets the devicesNotAutopilotRegistered
    * The count of intune devices that are not autopilot registerd.
    *
    * @return int The devicesNotAutopilotRegistered
    */
    public function getDevicesNotAutopilotRegistered()
    {
        if (array_key_exists("devicesNotAutopilotRegistered", $this->_propDict)) {
            return $this->_propDict["devicesNotAutopilotRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devicesNotAutopilotRegistered
    * The count of intune devices that are not autopilot registerd.
    *
    * @param int $val The value of the devicesNotAutopilotRegistered
    *
    * @return UserExperienceAnalyticsAutopilotDevicesSummary
    */
    public function setDevicesNotAutopilotRegistered($val)
    {
        $this->_propDict["devicesNotAutopilotRegistered"] = $val;
        return $this;
    }
    /**
    * Gets the devicesWithoutAutopilotProfileAssigned
    * The count of intune devices not autopilot profile assigned.
    *
    * @return int The devicesWithoutAutopilotProfileAssigned
    */
    public function getDevicesWithoutAutopilotProfileAssigned()
    {
        if (array_key_exists("devicesWithoutAutopilotProfileAssigned", $this->_propDict)) {
            return $this->_propDict["devicesWithoutAutopilotProfileAssigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devicesWithoutAutopilotProfileAssigned
    * The count of intune devices not autopilot profile assigned.
    *
    * @param int $val The value of the devicesWithoutAutopilotProfileAssigned
    *
    * @return UserExperienceAnalyticsAutopilotDevicesSummary
    */
    public function setDevicesWithoutAutopilotProfileAssigned($val)
    {
        $this->_propDict["devicesWithoutAutopilotProfileAssigned"] = $val;
        return $this;
    }
}
