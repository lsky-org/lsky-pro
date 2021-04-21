<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptDeviceState File
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
* DeviceHealthScriptDeviceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptDeviceState extends Entity
{
    /**
    * Gets the detectionState
    * Detection state from the lastest device health script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
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
    * Detection state from the lastest device health script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @param RunState $val The detectionState
    *
    * @return DeviceHealthScriptDeviceState
    */
    public function setDetectionState($val)
    {
        $this->_propDict["detectionState"] = $val;
        return $this;
    }
    
    /**
    * Gets the expectedStateUpdateDateTime
    * The next timestamp of when the device health script is expected to execute
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
    * The next timestamp of when the device health script is expected to execute
    *
    * @param \DateTime $val The expectedStateUpdateDateTime
    *
    * @return DeviceHealthScriptDeviceState
    */
    public function setExpectedStateUpdateDateTime($val)
    {
        $this->_propDict["expectedStateUpdateDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastStateUpdateDateTime
    * The last timestamp of when the device health script executed
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
    * The last timestamp of when the device health script executed
    *
    * @param \DateTime $val The lastStateUpdateDateTime
    *
    * @return DeviceHealthScriptDeviceState
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
    * @return DeviceHealthScriptDeviceState
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the postRemediationDetectionScriptError
    * Error from the detection script after remediation
    *
    * @return string The postRemediationDetectionScriptError
    */
    public function getPostRemediationDetectionScriptError()
    {
        if (array_key_exists("postRemediationDetectionScriptError", $this->_propDict)) {
            return $this->_propDict["postRemediationDetectionScriptError"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the postRemediationDetectionScriptError
    * Error from the detection script after remediation
    *
    * @param string $val The postRemediationDetectionScriptError
    *
    * @return DeviceHealthScriptDeviceState
    */
    public function setPostRemediationDetectionScriptError($val)
    {
        $this->_propDict["postRemediationDetectionScriptError"] = $val;
        return $this;
    }
    
    /**
    * Gets the postRemediationDetectionScriptOutput
    * Detection script output after remediation
    *
    * @return string The postRemediationDetectionScriptOutput
    */
    public function getPostRemediationDetectionScriptOutput()
    {
        if (array_key_exists("postRemediationDetectionScriptOutput", $this->_propDict)) {
            return $this->_propDict["postRemediationDetectionScriptOutput"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the postRemediationDetectionScriptOutput
    * Detection script output after remediation
    *
    * @param string $val The postRemediationDetectionScriptOutput
    *
    * @return DeviceHealthScriptDeviceState
    */
    public function setPostRemediationDetectionScriptOutput($val)
    {
        $this->_propDict["postRemediationDetectionScriptOutput"] = $val;
        return $this;
    }
    
    /**
    * Gets the preRemediationDetectionScriptError
    * Error from the detection script before remediation
    *
    * @return string The preRemediationDetectionScriptError
    */
    public function getPreRemediationDetectionScriptError()
    {
        if (array_key_exists("preRemediationDetectionScriptError", $this->_propDict)) {
            return $this->_propDict["preRemediationDetectionScriptError"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preRemediationDetectionScriptError
    * Error from the detection script before remediation
    *
    * @param string $val The preRemediationDetectionScriptError
    *
    * @return DeviceHealthScriptDeviceState
    */
    public function setPreRemediationDetectionScriptError($val)
    {
        $this->_propDict["preRemediationDetectionScriptError"] = $val;
        return $this;
    }
    
    /**
    * Gets the preRemediationDetectionScriptOutput
    * Output of the detection script before remediation
    *
    * @return string The preRemediationDetectionScriptOutput
    */
    public function getPreRemediationDetectionScriptOutput()
    {
        if (array_key_exists("preRemediationDetectionScriptOutput", $this->_propDict)) {
            return $this->_propDict["preRemediationDetectionScriptOutput"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preRemediationDetectionScriptOutput
    * Output of the detection script before remediation
    *
    * @param string $val The preRemediationDetectionScriptOutput
    *
    * @return DeviceHealthScriptDeviceState
    */
    public function setPreRemediationDetectionScriptOutput($val)
    {
        $this->_propDict["preRemediationDetectionScriptOutput"] = $val;
        return $this;
    }
    
    /**
    * Gets the remediationScriptError
    * Error output of the remediation script
    *
    * @return string The remediationScriptError
    */
    public function getRemediationScriptError()
    {
        if (array_key_exists("remediationScriptError", $this->_propDict)) {
            return $this->_propDict["remediationScriptError"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediationScriptError
    * Error output of the remediation script
    *
    * @param string $val The remediationScriptError
    *
    * @return DeviceHealthScriptDeviceState
    */
    public function setRemediationScriptError($val)
    {
        $this->_propDict["remediationScriptError"] = $val;
        return $this;
    }
    
    /**
    * Gets the remediationState
    * Remediation state from the lastest device health script execution. Possible values are: unknown, skipped, success, remediationFailed, scriptError.
    *
    * @return RemediationState The remediationState
    */
    public function getRemediationState()
    {
        if (array_key_exists("remediationState", $this->_propDict)) {
            if (is_a($this->_propDict["remediationState"], "\Beta\Microsoft\Graph\Model\RemediationState")) {
                return $this->_propDict["remediationState"];
            } else {
                $this->_propDict["remediationState"] = new RemediationState($this->_propDict["remediationState"]);
                return $this->_propDict["remediationState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the remediationState
    * Remediation state from the lastest device health script execution. Possible values are: unknown, skipped, success, remediationFailed, scriptError.
    *
    * @param RemediationState $val The remediationState
    *
    * @return DeviceHealthScriptDeviceState
    */
    public function setRemediationState($val)
    {
        $this->_propDict["remediationState"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDevice
    * The managed device on which the device health script executed
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
    * The managed device on which the device health script executed
    *
    * @param ManagedDevice $val The managedDevice
    *
    * @return DeviceHealthScriptDeviceState
    */
    public function setManagedDevice($val)
    {
        $this->_propDict["managedDevice"] = $val;
        return $this;
    }
    
}
