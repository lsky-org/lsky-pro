<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionWipeAction File
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
* WindowsInformationProtectionWipeAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionWipeAction extends Entity
{
    /**
    * Gets the lastCheckInDateTime
    * Last checkin time of the device that was targeted by this wipe action.
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
    * Last checkin time of the device that was targeted by this wipe action.
    *
    * @param \DateTime $val The lastCheckInDateTime
    *
    * @return WindowsInformationProtectionWipeAction
    */
    public function setLastCheckInDateTime($val)
    {
        $this->_propDict["lastCheckInDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Wipe action status. Possible values are: none, pending, canceled, active, done, failed, notSupported.
    *
    * @return ActionState The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\ActionState")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ActionState($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Wipe action status. Possible values are: none, pending, canceled, active, done, failed, notSupported.
    *
    * @param ActionState $val The status
    *
    * @return WindowsInformationProtectionWipeAction
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetedDeviceMacAddress
    * Targeted device Mac address.
    *
    * @return string The targetedDeviceMacAddress
    */
    public function getTargetedDeviceMacAddress()
    {
        if (array_key_exists("targetedDeviceMacAddress", $this->_propDict)) {
            return $this->_propDict["targetedDeviceMacAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedDeviceMacAddress
    * Targeted device Mac address.
    *
    * @param string $val The targetedDeviceMacAddress
    *
    * @return WindowsInformationProtectionWipeAction
    */
    public function setTargetedDeviceMacAddress($val)
    {
        $this->_propDict["targetedDeviceMacAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetedDeviceName
    * Targeted device name.
    *
    * @return string The targetedDeviceName
    */
    public function getTargetedDeviceName()
    {
        if (array_key_exists("targetedDeviceName", $this->_propDict)) {
            return $this->_propDict["targetedDeviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedDeviceName
    * Targeted device name.
    *
    * @param string $val The targetedDeviceName
    *
    * @return WindowsInformationProtectionWipeAction
    */
    public function setTargetedDeviceName($val)
    {
        $this->_propDict["targetedDeviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetedDeviceRegistrationId
    * The DeviceRegistrationId being targeted by this wipe action.
    *
    * @return string The targetedDeviceRegistrationId
    */
    public function getTargetedDeviceRegistrationId()
    {
        if (array_key_exists("targetedDeviceRegistrationId", $this->_propDict)) {
            return $this->_propDict["targetedDeviceRegistrationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedDeviceRegistrationId
    * The DeviceRegistrationId being targeted by this wipe action.
    *
    * @param string $val The targetedDeviceRegistrationId
    *
    * @return WindowsInformationProtectionWipeAction
    */
    public function setTargetedDeviceRegistrationId($val)
    {
        $this->_propDict["targetedDeviceRegistrationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetedUserId
    * The UserId being targeted by this wipe action.
    *
    * @return string The targetedUserId
    */
    public function getTargetedUserId()
    {
        if (array_key_exists("targetedUserId", $this->_propDict)) {
            return $this->_propDict["targetedUserId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedUserId
    * The UserId being targeted by this wipe action.
    *
    * @param string $val The targetedUserId
    *
    * @return WindowsInformationProtectionWipeAction
    */
    public function setTargetedUserId($val)
    {
        $this->_propDict["targetedUserId"] = $val;
        return $this;
    }
    
}
