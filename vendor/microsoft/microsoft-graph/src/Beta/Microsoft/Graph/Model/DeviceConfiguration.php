<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfiguration File
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
* DeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceConfiguration extends Entity
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
    * @return DeviceConfiguration
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
    * @return DeviceConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceManagementApplicabilityRuleDeviceMode
    * The device mode applicability rule for this Policy.
    *
    * @return DeviceManagementApplicabilityRuleDeviceMode The deviceManagementApplicabilityRuleDeviceMode
    */
    public function getDeviceManagementApplicabilityRuleDeviceMode()
    {
        if (array_key_exists("deviceManagementApplicabilityRuleDeviceMode", $this->_propDict)) {
            if (is_a($this->_propDict["deviceManagementApplicabilityRuleDeviceMode"], "\Beta\Microsoft\Graph\Model\DeviceManagementApplicabilityRuleDeviceMode")) {
                return $this->_propDict["deviceManagementApplicabilityRuleDeviceMode"];
            } else {
                $this->_propDict["deviceManagementApplicabilityRuleDeviceMode"] = new DeviceManagementApplicabilityRuleDeviceMode($this->_propDict["deviceManagementApplicabilityRuleDeviceMode"]);
                return $this->_propDict["deviceManagementApplicabilityRuleDeviceMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceManagementApplicabilityRuleDeviceMode
    * The device mode applicability rule for this Policy.
    *
    * @param DeviceManagementApplicabilityRuleDeviceMode $val The deviceManagementApplicabilityRuleDeviceMode
    *
    * @return DeviceConfiguration
    */
    public function setDeviceManagementApplicabilityRuleDeviceMode($val)
    {
        $this->_propDict["deviceManagementApplicabilityRuleDeviceMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceManagementApplicabilityRuleOsEdition
    * The OS edition applicability for this Policy.
    *
    * @return DeviceManagementApplicabilityRuleOsEdition The deviceManagementApplicabilityRuleOsEdition
    */
    public function getDeviceManagementApplicabilityRuleOsEdition()
    {
        if (array_key_exists("deviceManagementApplicabilityRuleOsEdition", $this->_propDict)) {
            if (is_a($this->_propDict["deviceManagementApplicabilityRuleOsEdition"], "\Beta\Microsoft\Graph\Model\DeviceManagementApplicabilityRuleOsEdition")) {
                return $this->_propDict["deviceManagementApplicabilityRuleOsEdition"];
            } else {
                $this->_propDict["deviceManagementApplicabilityRuleOsEdition"] = new DeviceManagementApplicabilityRuleOsEdition($this->_propDict["deviceManagementApplicabilityRuleOsEdition"]);
                return $this->_propDict["deviceManagementApplicabilityRuleOsEdition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceManagementApplicabilityRuleOsEdition
    * The OS edition applicability for this Policy.
    *
    * @param DeviceManagementApplicabilityRuleOsEdition $val The deviceManagementApplicabilityRuleOsEdition
    *
    * @return DeviceConfiguration
    */
    public function setDeviceManagementApplicabilityRuleOsEdition($val)
    {
        $this->_propDict["deviceManagementApplicabilityRuleOsEdition"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceManagementApplicabilityRuleOsVersion
    * The OS version applicability rule for this Policy.
    *
    * @return DeviceManagementApplicabilityRuleOsVersion The deviceManagementApplicabilityRuleOsVersion
    */
    public function getDeviceManagementApplicabilityRuleOsVersion()
    {
        if (array_key_exists("deviceManagementApplicabilityRuleOsVersion", $this->_propDict)) {
            if (is_a($this->_propDict["deviceManagementApplicabilityRuleOsVersion"], "\Beta\Microsoft\Graph\Model\DeviceManagementApplicabilityRuleOsVersion")) {
                return $this->_propDict["deviceManagementApplicabilityRuleOsVersion"];
            } else {
                $this->_propDict["deviceManagementApplicabilityRuleOsVersion"] = new DeviceManagementApplicabilityRuleOsVersion($this->_propDict["deviceManagementApplicabilityRuleOsVersion"]);
                return $this->_propDict["deviceManagementApplicabilityRuleOsVersion"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceManagementApplicabilityRuleOsVersion
    * The OS version applicability rule for this Policy.
    *
    * @param DeviceManagementApplicabilityRuleOsVersion $val The deviceManagementApplicabilityRuleOsVersion
    *
    * @return DeviceConfiguration
    */
    public function setDeviceManagementApplicabilityRuleOsVersion($val)
    {
        $this->_propDict["deviceManagementApplicabilityRuleOsVersion"] = $val;
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
    * @return DeviceConfiguration
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
    * @return DeviceConfiguration
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
    * @return DeviceConfiguration
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportsScopeTags
    * Indicates whether or not the underlying Device Configuration supports the assignment of scope tags. Assigning to the ScopeTags property is not allowed when this value is false and entities will not be visible to scoped users. This occurs for Legacy policies created in Silverlight and can be resolved by deleting and recreating the policy in the Azure Portal. This property is read-only.
    *
    * @return bool The supportsScopeTags
    */
    public function getSupportsScopeTags()
    {
        if (array_key_exists("supportsScopeTags", $this->_propDict)) {
            return $this->_propDict["supportsScopeTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportsScopeTags
    * Indicates whether or not the underlying Device Configuration supports the assignment of scope tags. Assigning to the ScopeTags property is not allowed when this value is false and entities will not be visible to scoped users. This occurs for Legacy policies created in Silverlight and can be resolved by deleting and recreating the policy in the Azure Portal. This property is read-only.
    *
    * @param bool $val The supportsScopeTags
    *
    * @return DeviceConfiguration
    */
    public function setSupportsScopeTags($val)
    {
        $this->_propDict["supportsScopeTags"] = boolval($val);
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
    * @return DeviceConfiguration
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of assignments for the device configuration profile.
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
    * The list of assignments for the device configuration profile.
    *
    * @param DeviceConfigurationAssignment $val The assignments
    *
    * @return DeviceConfiguration
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceSettingStateSummaries
    * Device Configuration Setting State Device Summary
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
    * Device Configuration Setting State Device Summary
    *
    * @param SettingStateDeviceSummary $val The deviceSettingStateSummaries
    *
    * @return DeviceConfiguration
    */
    public function setDeviceSettingStateSummaries($val)
    {
		$this->_propDict["deviceSettingStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStatuses
    * Device configuration installation status by device.
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
    * Device configuration installation status by device.
    *
    * @param DeviceConfigurationDeviceStatus $val The deviceStatuses
    *
    * @return DeviceConfiguration
    */
    public function setDeviceStatuses($val)
    {
		$this->_propDict["deviceStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceStatusOverview
    * Device Configuration devices status overview
    *
    * @return DeviceConfigurationDeviceOverview The deviceStatusOverview
    */
    public function getDeviceStatusOverview()
    {
        if (array_key_exists("deviceStatusOverview", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStatusOverview"], "\Beta\Microsoft\Graph\Model\DeviceConfigurationDeviceOverview")) {
                return $this->_propDict["deviceStatusOverview"];
            } else {
                $this->_propDict["deviceStatusOverview"] = new DeviceConfigurationDeviceOverview($this->_propDict["deviceStatusOverview"]);
                return $this->_propDict["deviceStatusOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceStatusOverview
    * Device Configuration devices status overview
    *
    * @param DeviceConfigurationDeviceOverview $val The deviceStatusOverview
    *
    * @return DeviceConfiguration
    */
    public function setDeviceStatusOverview($val)
    {
        $this->_propDict["deviceStatusOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupAssignments
    * The list of group assignments for the device configuration profile.
     *
     * @return array The groupAssignments
     */
    public function getGroupAssignments()
    {
        if (array_key_exists("groupAssignments", $this->_propDict)) {
           return $this->_propDict["groupAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupAssignments
    * The list of group assignments for the device configuration profile.
    *
    * @param DeviceConfigurationGroupAssignment $val The groupAssignments
    *
    * @return DeviceConfiguration
    */
    public function setGroupAssignments($val)
    {
		$this->_propDict["groupAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStatuses
    * Device configuration installation status by user.
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
    * Device configuration installation status by user.
    *
    * @param DeviceConfigurationUserStatus $val The userStatuses
    *
    * @return DeviceConfiguration
    */
    public function setUserStatuses($val)
    {
		$this->_propDict["userStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the userStatusOverview
    * Device Configuration users status overview
    *
    * @return DeviceConfigurationUserOverview The userStatusOverview
    */
    public function getUserStatusOverview()
    {
        if (array_key_exists("userStatusOverview", $this->_propDict)) {
            if (is_a($this->_propDict["userStatusOverview"], "\Beta\Microsoft\Graph\Model\DeviceConfigurationUserOverview")) {
                return $this->_propDict["userStatusOverview"];
            } else {
                $this->_propDict["userStatusOverview"] = new DeviceConfigurationUserOverview($this->_propDict["userStatusOverview"]);
                return $this->_propDict["userStatusOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userStatusOverview
    * Device Configuration users status overview
    *
    * @param DeviceConfigurationUserOverview $val The userStatusOverview
    *
    * @return DeviceConfiguration
    */
    public function setUserStatusOverview($val)
    {
        $this->_propDict["userStatusOverview"] = $val;
        return $this;
    }
    
}
