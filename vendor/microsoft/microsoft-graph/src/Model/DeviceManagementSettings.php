<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* DeviceManagementSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettings extends Entity
{
    /**
    * Gets the deviceComplianceCheckinThresholdDays
    * The number of days a device is allowed to go without checking in to remain compliant.
    *
    * @return int The deviceComplianceCheckinThresholdDays
    */
    public function getDeviceComplianceCheckinThresholdDays()
    {
        if (array_key_exists("deviceComplianceCheckinThresholdDays", $this->_propDict)) {
            return $this->_propDict["deviceComplianceCheckinThresholdDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceComplianceCheckinThresholdDays
    * The number of days a device is allowed to go without checking in to remain compliant.
    *
    * @param int $val The value of the deviceComplianceCheckinThresholdDays
    *
    * @return DeviceManagementSettings
    */
    public function setDeviceComplianceCheckinThresholdDays($val)
    {
        $this->_propDict["deviceComplianceCheckinThresholdDays"] = $val;
        return $this;
    }
    /**
    * Gets the isScheduledActionEnabled
    * Is feature enabled or not for scheduled action for rule.
    *
    * @return bool The isScheduledActionEnabled
    */
    public function getIsScheduledActionEnabled()
    {
        if (array_key_exists("isScheduledActionEnabled", $this->_propDict)) {
            return $this->_propDict["isScheduledActionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isScheduledActionEnabled
    * Is feature enabled or not for scheduled action for rule.
    *
    * @param bool $val The value of the isScheduledActionEnabled
    *
    * @return DeviceManagementSettings
    */
    public function setIsScheduledActionEnabled($val)
    {
        $this->_propDict["isScheduledActionEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the secureByDefault
    * Device should be noncompliant when there is no compliance policy targeted when this is true
    *
    * @return bool The secureByDefault
    */
    public function getSecureByDefault()
    {
        if (array_key_exists("secureByDefault", $this->_propDict)) {
            return $this->_propDict["secureByDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureByDefault
    * Device should be noncompliant when there is no compliance policy targeted when this is true
    *
    * @param bool $val The value of the secureByDefault
    *
    * @return DeviceManagementSettings
    */
    public function setSecureByDefault($val)
    {
        $this->_propDict["secureByDefault"] = $val;
        return $this;
    }
}
