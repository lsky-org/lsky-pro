<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationTargetedUserAndDevice File
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
* DeviceConfigurationTargetedUserAndDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceConfigurationTargetedUserAndDevice extends Entity
{
    /**
    * Gets the deviceId
    * The id of the device in the checkin.
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * The id of the device in the checkin.
    *
    * @param string $val The value of the deviceId
    *
    * @return DeviceConfigurationTargetedUserAndDevice
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    /**
    * Gets the deviceName
    * The name of the device in the checkin.
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * The name of the device in the checkin.
    *
    * @param string $val The value of the deviceName
    *
    * @return DeviceConfigurationTargetedUserAndDevice
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the lastCheckinDateTime
    * Last checkin time for this user/device pair.
    *
    * @return \DateTime The lastCheckinDateTime
    */
    public function getLastCheckinDateTime()
    {
        if (array_key_exists("lastCheckinDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCheckinDateTime"], "\DateTime")) {
                return $this->_propDict["lastCheckinDateTime"];
            } else {
                $this->_propDict["lastCheckinDateTime"] = new \DateTime($this->_propDict["lastCheckinDateTime"]);
                return $this->_propDict["lastCheckinDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastCheckinDateTime
    * Last checkin time for this user/device pair.
    *
    * @param \DateTime $val The value to assign to the lastCheckinDateTime
    *
    * @return DeviceConfigurationTargetedUserAndDevice The DeviceConfigurationTargetedUserAndDevice
    */
    public function setLastCheckinDateTime($val)
    {
        $this->_propDict["lastCheckinDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the userDisplayName
    * The display name of the user in the checkin
    *
    * @return string The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDisplayName
    * The display name of the user in the checkin
    *
    * @param string $val The value of the userDisplayName
    *
    * @return DeviceConfigurationTargetedUserAndDevice
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * The id of the user in the checkin.
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * The id of the user in the checkin.
    *
    * @param string $val The value of the userId
    *
    * @return DeviceConfigurationTargetedUserAndDevice
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * The UPN of the user in the checkin.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * The UPN of the user in the checkin.
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return DeviceConfigurationTargetedUserAndDevice
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
