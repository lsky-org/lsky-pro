<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceScriptRunSummary File
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
* DeviceComplianceScriptRunSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceScriptRunSummary extends Entity
{
    /**
    * Gets the detectionScriptErrorDeviceCount
    * Number of devices on which the detection script execution encountered an error and did not complete. Valid values -2147483648 to 2147483647
    *
    * @return int The detectionScriptErrorDeviceCount
    */
    public function getDetectionScriptErrorDeviceCount()
    {
        if (array_key_exists("detectionScriptErrorDeviceCount", $this->_propDict)) {
            return $this->_propDict["detectionScriptErrorDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the detectionScriptErrorDeviceCount
    * Number of devices on which the detection script execution encountered an error and did not complete. Valid values -2147483648 to 2147483647
    *
    * @param int $val The detectionScriptErrorDeviceCount
    *
    * @return DeviceComplianceScriptRunSummary
    */
    public function setDetectionScriptErrorDeviceCount($val)
    {
        $this->_propDict["detectionScriptErrorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the detectionScriptPendingDeviceCount
    * Number of devices which have not yet run the latest version of the device compliance script. Valid values -2147483648 to 2147483647
    *
    * @return int The detectionScriptPendingDeviceCount
    */
    public function getDetectionScriptPendingDeviceCount()
    {
        if (array_key_exists("detectionScriptPendingDeviceCount", $this->_propDict)) {
            return $this->_propDict["detectionScriptPendingDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the detectionScriptPendingDeviceCount
    * Number of devices which have not yet run the latest version of the device compliance script. Valid values -2147483648 to 2147483647
    *
    * @param int $val The detectionScriptPendingDeviceCount
    *
    * @return DeviceComplianceScriptRunSummary
    */
    public function setDetectionScriptPendingDeviceCount($val)
    {
        $this->_propDict["detectionScriptPendingDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the issueDetectedDeviceCount
    * Number of devices for which the detection script found an issue. Valid values -2147483648 to 2147483647
    *
    * @return int The issueDetectedDeviceCount
    */
    public function getIssueDetectedDeviceCount()
    {
        if (array_key_exists("issueDetectedDeviceCount", $this->_propDict)) {
            return $this->_propDict["issueDetectedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issueDetectedDeviceCount
    * Number of devices for which the detection script found an issue. Valid values -2147483648 to 2147483647
    *
    * @param int $val The issueDetectedDeviceCount
    *
    * @return DeviceComplianceScriptRunSummary
    */
    public function setIssueDetectedDeviceCount($val)
    {
        $this->_propDict["issueDetectedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the lastScriptRunDateTime
    * Last run time for the script across all devices
    *
    * @return \DateTime The lastScriptRunDateTime
    */
    public function getLastScriptRunDateTime()
    {
        if (array_key_exists("lastScriptRunDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastScriptRunDateTime"], "\DateTime")) {
                return $this->_propDict["lastScriptRunDateTime"];
            } else {
                $this->_propDict["lastScriptRunDateTime"] = new \DateTime($this->_propDict["lastScriptRunDateTime"]);
                return $this->_propDict["lastScriptRunDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastScriptRunDateTime
    * Last run time for the script across all devices
    *
    * @param \DateTime $val The lastScriptRunDateTime
    *
    * @return DeviceComplianceScriptRunSummary
    */
    public function setLastScriptRunDateTime($val)
    {
        $this->_propDict["lastScriptRunDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the noIssueDetectedDeviceCount
    * Number of devices for which the detection script did not find an issue and the device is healthy. Valid values -2147483648 to 2147483647
    *
    * @return int The noIssueDetectedDeviceCount
    */
    public function getNoIssueDetectedDeviceCount()
    {
        if (array_key_exists("noIssueDetectedDeviceCount", $this->_propDict)) {
            return $this->_propDict["noIssueDetectedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the noIssueDetectedDeviceCount
    * Number of devices for which the detection script did not find an issue and the device is healthy. Valid values -2147483648 to 2147483647
    *
    * @param int $val The noIssueDetectedDeviceCount
    *
    * @return DeviceComplianceScriptRunSummary
    */
    public function setNoIssueDetectedDeviceCount($val)
    {
        $this->_propDict["noIssueDetectedDeviceCount"] = intval($val);
        return $this;
    }
    
}
