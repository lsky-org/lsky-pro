<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsHealthMonitoringConfiguration File
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
* WindowsHealthMonitoringConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsHealthMonitoringConfiguration extends DeviceConfiguration
{
    /**
    * Gets the allowDeviceHealthMonitoring
    * Enables device health monitoring on the device. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The allowDeviceHealthMonitoring
    */
    public function getAllowDeviceHealthMonitoring()
    {
        if (array_key_exists("allowDeviceHealthMonitoring", $this->_propDict)) {
            if (is_a($this->_propDict["allowDeviceHealthMonitoring"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["allowDeviceHealthMonitoring"];
            } else {
                $this->_propDict["allowDeviceHealthMonitoring"] = new Enablement($this->_propDict["allowDeviceHealthMonitoring"]);
                return $this->_propDict["allowDeviceHealthMonitoring"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowDeviceHealthMonitoring
    * Enables device health monitoring on the device. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The allowDeviceHealthMonitoring
    *
    * @return WindowsHealthMonitoringConfiguration
    */
    public function setAllowDeviceHealthMonitoring($val)
    {
        $this->_propDict["allowDeviceHealthMonitoring"] = $val;
        return $this;
    }
    
    /**
    * Gets the configDeviceHealthMonitoringCustomScope
    * Specifies custom set of events collected from the device where health monitoring is enabled
    *
    * @return string The configDeviceHealthMonitoringCustomScope
    */
    public function getConfigDeviceHealthMonitoringCustomScope()
    {
        if (array_key_exists("configDeviceHealthMonitoringCustomScope", $this->_propDict)) {
            return $this->_propDict["configDeviceHealthMonitoringCustomScope"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configDeviceHealthMonitoringCustomScope
    * Specifies custom set of events collected from the device where health monitoring is enabled
    *
    * @param string $val The configDeviceHealthMonitoringCustomScope
    *
    * @return WindowsHealthMonitoringConfiguration
    */
    public function setConfigDeviceHealthMonitoringCustomScope($val)
    {
        $this->_propDict["configDeviceHealthMonitoringCustomScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the configDeviceHealthMonitoringScope
    * Specifies set of events collected from the device where health monitoring is enabled. Possible values are: undefined, healthMonitoring, bootPerformance, windowsUpdates.
    *
    * @return WindowsHealthMonitoringScope The configDeviceHealthMonitoringScope
    */
    public function getConfigDeviceHealthMonitoringScope()
    {
        if (array_key_exists("configDeviceHealthMonitoringScope", $this->_propDict)) {
            if (is_a($this->_propDict["configDeviceHealthMonitoringScope"], "\Beta\Microsoft\Graph\Model\WindowsHealthMonitoringScope")) {
                return $this->_propDict["configDeviceHealthMonitoringScope"];
            } else {
                $this->_propDict["configDeviceHealthMonitoringScope"] = new WindowsHealthMonitoringScope($this->_propDict["configDeviceHealthMonitoringScope"]);
                return $this->_propDict["configDeviceHealthMonitoringScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configDeviceHealthMonitoringScope
    * Specifies set of events collected from the device where health monitoring is enabled. Possible values are: undefined, healthMonitoring, bootPerformance, windowsUpdates.
    *
    * @param WindowsHealthMonitoringScope $val The configDeviceHealthMonitoringScope
    *
    * @return WindowsHealthMonitoringConfiguration
    */
    public function setConfigDeviceHealthMonitoringScope($val)
    {
        $this->_propDict["configDeviceHealthMonitoringScope"] = $val;
        return $this;
    }
    
}
