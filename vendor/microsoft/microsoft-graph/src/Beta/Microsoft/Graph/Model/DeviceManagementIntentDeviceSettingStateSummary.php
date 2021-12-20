<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementIntentDeviceSettingStateSummary File
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
* DeviceManagementIntentDeviceSettingStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementIntentDeviceSettingStateSummary extends Entity
{
    /**
    * Gets the compliantCount
    * Number of compliant devices
    *
    * @return int The compliantCount
    */
    public function getCompliantCount()
    {
        if (array_key_exists("compliantCount", $this->_propDict)) {
            return $this->_propDict["compliantCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the compliantCount
    * Number of compliant devices
    *
    * @param int $val The compliantCount
    *
    * @return DeviceManagementIntentDeviceSettingStateSummary
    */
    public function setCompliantCount($val)
    {
        $this->_propDict["compliantCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictCount
    * Number of devices in conflict
    *
    * @return int The conflictCount
    */
    public function getConflictCount()
    {
        if (array_key_exists("conflictCount", $this->_propDict)) {
            return $this->_propDict["conflictCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictCount
    * Number of devices in conflict
    *
    * @param int $val The conflictCount
    *
    * @return DeviceManagementIntentDeviceSettingStateSummary
    */
    public function setConflictCount($val)
    {
        $this->_propDict["conflictCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorCount
    * Number of error devices
    *
    * @return int The errorCount
    */
    public function getErrorCount()
    {
        if (array_key_exists("errorCount", $this->_propDict)) {
            return $this->_propDict["errorCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCount
    * Number of error devices
    *
    * @param int $val The errorCount
    *
    * @return DeviceManagementIntentDeviceSettingStateSummary
    */
    public function setErrorCount($val)
    {
        $this->_propDict["errorCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the nonCompliantCount
    * Number of non compliant devices
    *
    * @return int The nonCompliantCount
    */
    public function getNonCompliantCount()
    {
        if (array_key_exists("nonCompliantCount", $this->_propDict)) {
            return $this->_propDict["nonCompliantCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nonCompliantCount
    * Number of non compliant devices
    *
    * @param int $val The nonCompliantCount
    *
    * @return DeviceManagementIntentDeviceSettingStateSummary
    */
    public function setNonCompliantCount($val)
    {
        $this->_propDict["nonCompliantCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableCount
    * Number of not applicable devices
    *
    * @return int The notApplicableCount
    */
    public function getNotApplicableCount()
    {
        if (array_key_exists("notApplicableCount", $this->_propDict)) {
            return $this->_propDict["notApplicableCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableCount
    * Number of not applicable devices
    *
    * @param int $val The notApplicableCount
    *
    * @return DeviceManagementIntentDeviceSettingStateSummary
    */
    public function setNotApplicableCount($val)
    {
        $this->_propDict["notApplicableCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediatedCount
    * Number of remediated devices
    *
    * @return int The remediatedCount
    */
    public function getRemediatedCount()
    {
        if (array_key_exists("remediatedCount", $this->_propDict)) {
            return $this->_propDict["remediatedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediatedCount
    * Number of remediated devices
    *
    * @param int $val The remediatedCount
    *
    * @return DeviceManagementIntentDeviceSettingStateSummary
    */
    public function setRemediatedCount($val)
    {
        $this->_propDict["remediatedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the settingName
    * Name of a setting
    *
    * @return string The settingName
    */
    public function getSettingName()
    {
        if (array_key_exists("settingName", $this->_propDict)) {
            return $this->_propDict["settingName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingName
    * Name of a setting
    *
    * @param string $val The settingName
    *
    * @return DeviceManagementIntentDeviceSettingStateSummary
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }
    
}
