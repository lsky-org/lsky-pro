<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceScriptDeviceState File
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
* DeviceComplianceScriptDeviceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceScriptDeviceState extends Entity
{
    /**
    * Gets the detectionState
    * Detection state from the lastest device compliance script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @return RunState The detectionState
    */
    public function getDetectionState()
    {
        if (array_key_exists("detectionState", $this->_propDict)) {
            if (is_a($this->_propDict["detectionState"], "\Beta\Microsoft\Graph\Model\RunState")) {
                return $this->_propDict["detectionState"];
            } else {
                $this->_propDict["detectionState"] = new RunState($this->_propDict["detectionState"]);
                return $this->_propDict["detectionState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the detectionState
    * Detection state from the lastest device compliance script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @param RunState $val The detectionState
    *
    * @return DeviceComplianceScriptDeviceState
    */
    public function setDetectionState($val)
    {
        $this->_propDict["detectionState"] = $val;
        return $this;
    }
    
    /**
    * Gets the expectedStateUpdateDateTime
    * The next timestamp of when the device compliance script is expected to execute
    *
    * @return \DateTime The expectedStateUpdateDateTime
    */
    public function getExpectedStateUpdateDateTime()
    {
        if (array_key_exists("expectedStateUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expectedStateUpdateDateTime"], "\DateTime")) {
                return $this->_propDict["expectedStateUpdateDateTime"];
            } else {
                $this->_propDict["expectedStateUpdateDateTime"] = new \DateTime($this->_propDict["expectedStateUpdateDateTime"]);
                return $this->_propDict["expectedStateUpdateDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expectedStateUpdateDateTime
    * The next timestamp of when the device compliance script is expected to execute
    *
    * @param \DateTime $val The expectedStateUpdateDateTime
    *
    * @return DeviceComplianceScriptDeviceState
    */
    public function setExpectedStateUpdateDateTime($val)
    {
        $this->_propDict["expectedStateUpdateDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastStateUpdateDateTime
    * The last timestamp of when the device compliance script executed
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
    * The last timestamp of when the device compliance script executed
    *
    * @param \DateTime $val The lastStateUpdateDateTime
    *
    * @return DeviceComplianceScriptDeviceState
    */
    public function setLastStateUpdateDateTime($val)
    {
        $this->_propDict["lastStateUpdateDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    * The last time that Intune Managment Extension synced with Intune
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    * The last time that Intune Managment Extension synced with Intune
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return DeviceComplianceScriptDeviceState
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the scriptError
    * Error from the detection script
    *
    * @return string The scriptError
    */
    public function getScriptError()
    {
        if (array_key_exists("scriptError", $this->_propDict)) {
            return $this->_propDict["scriptError"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scriptError
    * Error from the detection script
    *
    * @param string $val The scriptError
    *
    * @return DeviceComplianceScriptDeviceState
    */
    public function setScriptError($val)
    {
        $this->_propDict["scriptError"] = $val;
        return $this;
    }
    
    /**
    * Gets the scriptOutput
    * Output of the detection script
    *
    * @return string The scriptOutput
    */
    public function getScriptOutput()
    {
        if (array_key_exists("scriptOutput", $this->_propDict)) {
            return $this->_propDict["scriptOutput"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scriptOutput
    * Output of the detection script
    *
    * @param string $val The scriptOutput
    *
    * @return DeviceComplianceScriptDeviceState
    */
    public function setScriptOutput($val)
    {
        $this->_propDict["scriptOutput"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDevice
    * The managed device on which the device compliance script executed
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
    * The managed device on which the device compliance script executed
    *
    * @param ManagedDevice $val The managedDevice
    *
    * @return DeviceComplianceScriptDeviceState
    */
    public function setManagedDevice($val)
    {
        $this->_propDict["managedDevice"] = $val;
        return $this;
    }
    
}
