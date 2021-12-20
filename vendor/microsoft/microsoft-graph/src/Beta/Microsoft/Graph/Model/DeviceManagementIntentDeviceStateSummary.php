<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementIntentDeviceStateSummary File
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
* DeviceManagementIntentDeviceStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementIntentDeviceStateSummary extends Entity
{
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
    * @return DeviceManagementIntentDeviceStateSummary
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
    * @return DeviceManagementIntentDeviceStateSummary
    */
    public function setErrorCount($val)
    {
        $this->_propDict["errorCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedCount
    * Number of failed devices
    *
    * @return int The failedCount
    */
    public function getFailedCount()
    {
        if (array_key_exists("failedCount", $this->_propDict)) {
            return $this->_propDict["failedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedCount
    * Number of failed devices
    *
    * @param int $val The failedCount
    *
    * @return DeviceManagementIntentDeviceStateSummary
    */
    public function setFailedCount($val)
    {
        $this->_propDict["failedCount"] = intval($val);
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
    * @return DeviceManagementIntentDeviceStateSummary
    */
    public function setNotApplicableCount($val)
    {
        $this->_propDict["notApplicableCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicablePlatformCount
    * Number of not applicable devices due to mismatch platform and policy
    *
    * @return int The notApplicablePlatformCount
    */
    public function getNotApplicablePlatformCount()
    {
        if (array_key_exists("notApplicablePlatformCount", $this->_propDict)) {
            return $this->_propDict["notApplicablePlatformCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicablePlatformCount
    * Number of not applicable devices due to mismatch platform and policy
    *
    * @param int $val The notApplicablePlatformCount
    *
    * @return DeviceManagementIntentDeviceStateSummary
    */
    public function setNotApplicablePlatformCount($val)
    {
        $this->_propDict["notApplicablePlatformCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successCount
    * Number of succeeded devices
    *
    * @return int The successCount
    */
    public function getSuccessCount()
    {
        if (array_key_exists("successCount", $this->_propDict)) {
            return $this->_propDict["successCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successCount
    * Number of succeeded devices
    *
    * @param int $val The successCount
    *
    * @return DeviceManagementIntentDeviceStateSummary
    */
    public function setSuccessCount($val)
    {
        $this->_propDict["successCount"] = intval($val);
        return $this;
    }
    
}
