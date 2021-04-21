<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptRunSummary File
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
* DeviceHealthScriptRunSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptRunSummary extends Entity
{
    /**
    * Gets the detectionScriptErrorDeviceCount
    * Number of devices on which the detection script execution encountered an error and did not complete
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
    * Number of devices on which the detection script execution encountered an error and did not complete
    *
    * @param int $val The detectionScriptErrorDeviceCount
    *
    * @return DeviceHealthScriptRunSummary
    */
    public function setDetectionScriptErrorDeviceCount($val)
    {
        $this->_propDict["detectionScriptErrorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the detectionScriptPendingDeviceCount
    * Number of devices which have not yet run the latest version of the device health script
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
    * Number of devices which have not yet run the latest version of the device health script
    *
    * @param int $val The detectionScriptPendingDeviceCount
    *
    * @return DeviceHealthScriptRunSummary
    */
    public function setDetectionScriptPendingDeviceCount($val)
    {
        $this->_propDict["detectionScriptPendingDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the issueDetectedDeviceCount
    * Number of devices for which the detection script found an issue
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
    * Number of devices for which the detection script found an issue
    *
    * @param int $val The issueDetectedDeviceCount
    *
    * @return DeviceHealthScriptRunSummary
    */
    public function setIssueDetectedDeviceCount($val)
    {
        $this->_propDict["issueDetectedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the issueRemediatedCumulativeDeviceCount
    * Number of devices that were remediated over the last 30 days
    *
    * @return int The issueRemediatedCumulativeDeviceCount
    */
    public function getIssueRemediatedCumulativeDeviceCount()
    {
        if (array_key_exists("issueRemediatedCumulativeDeviceCount", $this->_propDict)) {
            return $this->_propDict["issueRemediatedCumulativeDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issueRemediatedCumulativeDeviceCount
    * Number of devices that were remediated over the last 30 days
    *
    * @param int $val The issueRemediatedCumulativeDeviceCount
    *
    * @return DeviceHealthScriptRunSummary
    */
    public function setIssueRemediatedCumulativeDeviceCount($val)
    {
        $this->_propDict["issueRemediatedCumulativeDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the issueRemediatedDeviceCount
    * Number of devices for which the remediation script was able to resolve the detected issue
    *
    * @return int The issueRemediatedDeviceCount
    */
    public function getIssueRemediatedDeviceCount()
    {
        if (array_key_exists("issueRemediatedDeviceCount", $this->_propDict)) {
            return $this->_propDict["issueRemediatedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issueRemediatedDeviceCount
    * Number of devices for which the remediation script was able to resolve the detected issue
    *
    * @param int $val The issueRemediatedDeviceCount
    *
    * @return DeviceHealthScriptRunSummary
    */
    public function setIssueRemediatedDeviceCount($val)
    {
        $this->_propDict["issueRemediatedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the issueReoccurredDeviceCount
    * Number of devices for which the remediation script executed successfully but failed to resolve the detected issue
    *
    * @return int The issueReoccurredDeviceCount
    */
    public function getIssueReoccurredDeviceCount()
    {
        if (array_key_exists("issueReoccurredDeviceCount", $this->_propDict)) {
            return $this->_propDict["issueReoccurredDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issueReoccurredDeviceCount
    * Number of devices for which the remediation script executed successfully but failed to resolve the detected issue
    *
    * @param int $val The issueReoccurredDeviceCount
    *
    * @return DeviceHealthScriptRunSummary
    */
    public function setIssueReoccurredDeviceCount($val)
    {
        $this->_propDict["issueReoccurredDeviceCount"] = intval($val);
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
    * @return DeviceHealthScriptRunSummary
    */
    public function setLastScriptRunDateTime($val)
    {
        $this->_propDict["lastScriptRunDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the noIssueDetectedDeviceCount
    * Number of devices for which the detection script did not find an issue and the device is healthy
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
    * Number of devices for which the detection script did not find an issue and the device is healthy
    *
    * @param int $val The noIssueDetectedDeviceCount
    *
    * @return DeviceHealthScriptRunSummary
    */
    public function setNoIssueDetectedDeviceCount($val)
    {
        $this->_propDict["noIssueDetectedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediationScriptErrorDeviceCount
    * Number of devices for which the remediation script execution encountered an error and did not complete
    *
    * @return int The remediationScriptErrorDeviceCount
    */
    public function getRemediationScriptErrorDeviceCount()
    {
        if (array_key_exists("remediationScriptErrorDeviceCount", $this->_propDict)) {
            return $this->_propDict["remediationScriptErrorDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediationScriptErrorDeviceCount
    * Number of devices for which the remediation script execution encountered an error and did not complete
    *
    * @param int $val The remediationScriptErrorDeviceCount
    *
    * @return DeviceHealthScriptRunSummary
    */
    public function setRemediationScriptErrorDeviceCount($val)
    {
        $this->_propDict["remediationScriptErrorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediationSkippedDeviceCount
    * Number of devices for which remediation was skipped
    *
    * @return int The remediationSkippedDeviceCount
    */
    public function getRemediationSkippedDeviceCount()
    {
        if (array_key_exists("remediationSkippedDeviceCount", $this->_propDict)) {
            return $this->_propDict["remediationSkippedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediationSkippedDeviceCount
    * Number of devices for which remediation was skipped
    *
    * @param int $val The remediationSkippedDeviceCount
    *
    * @return DeviceHealthScriptRunSummary
    */
    public function setRemediationSkippedDeviceCount($val)
    {
        $this->_propDict["remediationSkippedDeviceCount"] = intval($val);
        return $this;
    }
    
}
