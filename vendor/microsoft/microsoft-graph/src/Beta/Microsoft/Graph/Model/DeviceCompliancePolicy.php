<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicy File
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
* DeviceCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceCompliancePolicy extends Entity
{
    /**
    * Gets the createdDateTime
    * DateTime the object was created.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * DateTime the object was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceCompliancePolicy
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Admin provided description of the Device Configuration.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Admin provided description of the Device Configuration.
    *
    * @param string $val The description
    *
    * @return DeviceCompliancePolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Admin provided name of the device configuration.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Admin provided name of the device configuration.
    *
    * @param string $val The displayName
    *
    * @return DeviceCompliancePolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceCompliancePolicy
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return DeviceCompliancePolicy
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Version of the device configuration.
    *
    * @return int The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * Version of the device configuration.
    *
    * @param int $val The version
    *
    * @return DeviceCompliancePolicy
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The collection of assignments for this compliance policy.
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    * The collection of assignments for this compliance policy.
    *
    * @param DeviceCompliancePolicyAssignment $val The assignments
    *
    * @return DeviceCompliancePolicy
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceSettingStateSummaries
    * Compliance Setting State Device Summary
     *
     * @return array The deviceSettingStateSummaries
     */
    public function getDeviceSettingStateSummaries()
    {
        if (array_key_exists("deviceSettingStateSummaries", $this->_propDict)) {
           return $this->_propDict["deviceSettingStateSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceSettingStateSummaries
    * Compliance Setting State Device Summary
    *
    * @param SettingStateDeviceSummary $val The deviceSettingStateSummaries
    *
    * @return DeviceCompliancePolicy
    */
    public function setDeviceSettingStateSummaries($val)
    {
		$this->_propDict["deviceSettingStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStatuses
    * List of DeviceComplianceDeviceStatus.
     *
     * @return array The deviceStatuses
     */
    public function getDeviceStatuses()
    {
        if (array_key_exists("deviceStatuses", $this->_propDict)) {
           return $this->_propDict["deviceStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStatuses
    * List of DeviceComplianceDeviceStatus.
    *
    * @param DeviceComplianceDeviceStatus $val The deviceStatuses
    *
    * @return DeviceCompliancePolicy
    */
    public function setDeviceStatuses($val)
    {
		$this->_propDict["deviceStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceStatusOverview
    * Device compliance devices status overview
    *
    * @return DeviceComplianceDeviceOverview The deviceStatusOverview
    */
    public function getDeviceStatusOverview()
    {
        if (array_key_exists("deviceStatusOverview", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStatusOverview"], "\Beta\Microsoft\Graph\Model\DeviceComplianceDeviceOverview")) {
                return $this->_propDict["deviceStatusOverview"];
            } else {
                $this->_propDict["deviceStatusOverview"] = new DeviceComplianceDeviceOverview($this->_propDict["deviceStatusOverview"]);
                return $this->_propDict["deviceStatusOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceStatusOverview
    * Device compliance devices status overview
    *
    * @param DeviceComplianceDeviceOverview $val The deviceStatusOverview
    *
    * @return DeviceCompliancePolicy
    */
    public function setDeviceStatusOverview($val)
    {
        $this->_propDict["deviceStatusOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the scheduledActionsForRule
    * The list of scheduled action for this rule
     *
     * @return array The scheduledActionsForRule
     */
    public function getScheduledActionsForRule()
    {
        if (array_key_exists("scheduledActionsForRule", $this->_propDict)) {
           return $this->_propDict["scheduledActionsForRule"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the scheduledActionsForRule
    * The list of scheduled action for this rule
    *
    * @param DeviceComplianceScheduledActionForRule $val The scheduledActionsForRule
    *
    * @return DeviceCompliancePolicy
    */
    public function setScheduledActionsForRule($val)
    {
		$this->_propDict["scheduledActionsForRule"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStatuses
    * List of DeviceComplianceUserStatus.
     *
     * @return array The userStatuses
     */
    public function getUserStatuses()
    {
        if (array_key_exists("userStatuses", $this->_propDict)) {
           return $this->_propDict["userStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userStatuses
    * List of DeviceComplianceUserStatus.
    *
    * @param DeviceComplianceUserStatus $val The userStatuses
    *
    * @return DeviceCompliancePolicy
    */
    public function setUserStatuses($val)
    {
		$this->_propDict["userStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the userStatusOverview
    * Device compliance users status overview
    *
    * @return DeviceComplianceUserOverview The userStatusOverview
    */
    public function getUserStatusOverview()
    {
        if (array_key_exists("userStatusOverview", $this->_propDict)) {
            if (is_a($this->_propDict["userStatusOverview"], "\Beta\Microsoft\Graph\Model\DeviceComplianceUserOverview")) {
                return $this->_propDict["userStatusOverview"];
            } else {
                $this->_propDict["userStatusOverview"] = new DeviceComplianceUserOverview($this->_propDict["userStatusOverview"]);
                return $this->_propDict["userStatusOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userStatusOverview
    * Device compliance users status overview
    *
    * @param DeviceComplianceUserOverview $val The userStatusOverview
    *
    * @return DeviceCompliancePolicy
    */
    public function setUserStatusOverview($val)
    {
        $this->_propDict["userStatusOverview"] = $val;
        return $this;
    }
    
}
