<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdvancedThreatProtectionOnboardingStateSummary File
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
* AdvancedThreatProtectionOnboardingStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdvancedThreatProtectionOnboardingStateSummary extends Entity
{
    /**
    * Gets the compliantDeviceCount
    * Number of compliant devices
    *
    * @return int The compliantDeviceCount
    */
    public function getCompliantDeviceCount()
    {
        if (array_key_exists("compliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["compliantDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the compliantDeviceCount
    * Number of compliant devices
    *
    * @param int $val The compliantDeviceCount
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setCompliantDeviceCount($val)
    {
        $this->_propDict["compliantDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictDeviceCount
    * Number of conflict devices
    *
    * @return int The conflictDeviceCount
    */
    public function getConflictDeviceCount()
    {
        if (array_key_exists("conflictDeviceCount", $this->_propDict)) {
            return $this->_propDict["conflictDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictDeviceCount
    * Number of conflict devices
    *
    * @param int $val The conflictDeviceCount
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setConflictDeviceCount($val)
    {
        $this->_propDict["conflictDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorDeviceCount
    * Number of error devices
    *
    * @return int The errorDeviceCount
    */
    public function getErrorDeviceCount()
    {
        if (array_key_exists("errorDeviceCount", $this->_propDict)) {
            return $this->_propDict["errorDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorDeviceCount
    * Number of error devices
    *
    * @param int $val The errorDeviceCount
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the nonCompliantDeviceCount
    * Number of NonCompliant devices
    *
    * @return int The nonCompliantDeviceCount
    */
    public function getNonCompliantDeviceCount()
    {
        if (array_key_exists("nonCompliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["nonCompliantDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nonCompliantDeviceCount
    * Number of NonCompliant devices
    *
    * @param int $val The nonCompliantDeviceCount
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setNonCompliantDeviceCount($val)
    {
        $this->_propDict["nonCompliantDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableDeviceCount
    * Number of not applicable devices
    *
    * @return int The notApplicableDeviceCount
    */
    public function getNotApplicableDeviceCount()
    {
        if (array_key_exists("notApplicableDeviceCount", $this->_propDict)) {
            return $this->_propDict["notApplicableDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableDeviceCount
    * Number of not applicable devices
    *
    * @param int $val The notApplicableDeviceCount
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setNotApplicableDeviceCount($val)
    {
        $this->_propDict["notApplicableDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notAssignedDeviceCount
    * Number of not assigned devices
    *
    * @return int The notAssignedDeviceCount
    */
    public function getNotAssignedDeviceCount()
    {
        if (array_key_exists("notAssignedDeviceCount", $this->_propDict)) {
            return $this->_propDict["notAssignedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notAssignedDeviceCount
    * Number of not assigned devices
    *
    * @param int $val The notAssignedDeviceCount
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setNotAssignedDeviceCount($val)
    {
        $this->_propDict["notAssignedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediatedDeviceCount
    * Number of remediated devices
    *
    * @return int The remediatedDeviceCount
    */
    public function getRemediatedDeviceCount()
    {
        if (array_key_exists("remediatedDeviceCount", $this->_propDict)) {
            return $this->_propDict["remediatedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediatedDeviceCount
    * Number of remediated devices
    *
    * @param int $val The remediatedDeviceCount
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setRemediatedDeviceCount($val)
    {
        $this->_propDict["remediatedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unknownDeviceCount
    * Number of unknown devices
    *
    * @return int The unknownDeviceCount
    */
    public function getUnknownDeviceCount()
    {
        if (array_key_exists("unknownDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unknownDeviceCount
    * Number of unknown devices
    *
    * @param int $val The unknownDeviceCount
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the advancedThreatProtectionOnboardingDeviceSettingStates
    * Not yet documented
     *
     * @return array The advancedThreatProtectionOnboardingDeviceSettingStates
     */
    public function getAdvancedThreatProtectionOnboardingDeviceSettingStates()
    {
        if (array_key_exists("advancedThreatProtectionOnboardingDeviceSettingStates", $this->_propDict)) {
           return $this->_propDict["advancedThreatProtectionOnboardingDeviceSettingStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the advancedThreatProtectionOnboardingDeviceSettingStates
    * Not yet documented
    *
    * @param AdvancedThreatProtectionOnboardingDeviceSettingState $val The advancedThreatProtectionOnboardingDeviceSettingStates
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public function setAdvancedThreatProtectionOnboardingDeviceSettingStates($val)
    {
		$this->_propDict["advancedThreatProtectionOnboardingDeviceSettingStates"] = $val;
        return $this;
    }
    
}
