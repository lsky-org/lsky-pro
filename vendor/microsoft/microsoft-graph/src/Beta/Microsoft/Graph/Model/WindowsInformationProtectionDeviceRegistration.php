<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionDeviceRegistration File
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
* WindowsInformationProtectionDeviceRegistration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionDeviceRegistration extends Entity
{
    /**
    * Gets the deviceMacAddress
    * Device Mac address.
    *
    * @return string The deviceMacAddress
    */
    public function getDeviceMacAddress()
    {
        if (array_key_exists("deviceMacAddress", $this->_propDict)) {
            return $this->_propDict["deviceMacAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceMacAddress
    * Device Mac address.
    *
    * @param string $val The deviceMacAddress
    *
    * @return WindowsInformationProtectionDeviceRegistration
    */
    public function setDeviceMacAddress($val)
    {
        $this->_propDict["deviceMacAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * Device name.
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
    * Device name.
    *
    * @param string $val The deviceName
    *
    * @return WindowsInformationProtectionDeviceRegistration
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceRegistrationId
    * Device identifier for this device registration record.
    *
    * @return string The deviceRegistrationId
    */
    public function getDeviceRegistrationId()
    {
        if (array_key_exists("deviceRegistrationId", $this->_propDict)) {
            return $this->_propDict["deviceRegistrationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceRegistrationId
    * Device identifier for this device registration record.
    *
    * @param string $val The deviceRegistrationId
    *
    * @return WindowsInformationProtectionDeviceRegistration
    */
    public function setDeviceRegistrationId($val)
    {
        $this->_propDict["deviceRegistrationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceType
    * Device type, for example, Windows laptop VS Windows phone.
    *
    * @return string The deviceType
    */
    public function getDeviceType()
    {
        if (array_key_exists("deviceType", $this->_propDict)) {
            return $this->_propDict["deviceType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceType
    * Device type, for example, Windows laptop VS Windows phone.
    *
    * @param string $val The deviceType
    *
    * @return WindowsInformationProtectionDeviceRegistration
    */
    public function setDeviceType($val)
    {
        $this->_propDict["deviceType"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastCheckInDateTime
    * Last checkin time of the device.
    *
    * @return \DateTime The lastCheckInDateTime
    */
    public function getLastCheckInDateTime()
    {
        if (array_key_exists("lastCheckInDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCheckInDateTime"], "\DateTime")) {
                return $this->_propDict["lastCheckInDateTime"];
            } else {
                $this->_propDict["lastCheckInDateTime"] = new \DateTime($this->_propDict["lastCheckInDateTime"]);
                return $this->_propDict["lastCheckInDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastCheckInDateTime
    * Last checkin time of the device.
    *
    * @param \DateTime $val The lastCheckInDateTime
    *
    * @return WindowsInformationProtectionDeviceRegistration
    */
    public function setLastCheckInDateTime($val)
    {
        $this->_propDict["lastCheckInDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * UserId associated with this device registration record.
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
    * UserId associated with this device registration record.
    *
    * @param string $val The userId
    *
    * @return WindowsInformationProtectionDeviceRegistration
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
}
