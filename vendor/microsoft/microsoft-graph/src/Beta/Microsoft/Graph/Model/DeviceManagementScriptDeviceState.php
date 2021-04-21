<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementScriptDeviceState File
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
* DeviceManagementScriptDeviceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementScriptDeviceState extends Entity
{
    /**
    * Gets the errorCode
    * Error code corresponding to erroneous execution of the device management script.
    *
    * @return int The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCode
    * Error code corresponding to erroneous execution of the device management script.
    *
    * @param int $val The errorCode
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorDescription
    * Error description corresponding to erroneous execution of the device management script.
    *
    * @return string The errorDescription
    */
    public function getErrorDescription()
    {
        if (array_key_exists("errorDescription", $this->_propDict)) {
            return $this->_propDict["errorDescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorDescription
    * Error description corresponding to erroneous execution of the device management script.
    *
    * @param string $val The errorDescription
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setErrorDescription($val)
    {
        $this->_propDict["errorDescription"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastStateUpdateDateTime
    * Latest time the device management script executes.
    *
    * @return \DateTime The lastStateUpdateDateTime
    */
    public function getLastStateUpdateDateTime()
    {
        if (array_key_exists("lastStateUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastStateUpdateDateTime"], "\DateTime")) {
                return $this->_propDict["lastStateUpdateDateTime"];
            } else {
                $this->_propDict["lastStateUpdateDateTime"] = new \DateTime($this->_propDict["lastStateUpdateDateTime"]);
                return $this->_propDict["lastStateUpdateDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastStateUpdateDateTime
    * Latest time the device management script executes.
    *
    * @param \DateTime $val The lastStateUpdateDateTime
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setLastStateUpdateDateTime($val)
    {
        $this->_propDict["lastStateUpdateDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the resultMessage
    * Details of execution output.
    *
    * @return string The resultMessage
    */
    public function getResultMessage()
    {
        if (array_key_exists("resultMessage", $this->_propDict)) {
            return $this->_propDict["resultMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resultMessage
    * Details of execution output.
    *
    * @param string $val The resultMessage
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setResultMessage($val)
    {
        $this->_propDict["resultMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the runState
    * State of latest run of the device management script. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @return RunState The runState
    */
    public function getRunState()
    {
        if (array_key_exists("runState", $this->_propDict)) {
            if (is_a($this->_propDict["runState"], "\Beta\Microsoft\Graph\Model\RunState")) {
                return $this->_propDict["runState"];
            } else {
                $this->_propDict["runState"] = new RunState($this->_propDict["runState"]);
                return $this->_propDict["runState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the runState
    * State of latest run of the device management script. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @param RunState $val The runState
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setRunState($val)
    {
        $this->_propDict["runState"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDevice
    * The managed devices that executes the device management script.
    *
    * @return ManagedDevice The managedDevice
    */
    public function getManagedDevice()
    {
        if (array_key_exists("managedDevice", $this->_propDict)) {
            if (is_a($this->_propDict["managedDevice"], "\Beta\Microsoft\Graph\Model\ManagedDevice")) {
                return $this->_propDict["managedDevice"];
            } else {
                $this->_propDict["managedDevice"] = new ManagedDevice($this->_propDict["managedDevice"]);
                return $this->_propDict["managedDevice"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedDevice
    * The managed devices that executes the device management script.
    *
    * @param ManagedDevice $val The managedDevice
    *
    * @return DeviceManagementScriptDeviceState
    */
    public function setManagedDevice($val)
    {
        $this->_propDict["managedDevice"] = $val;
        return $this;
    }
    
}
