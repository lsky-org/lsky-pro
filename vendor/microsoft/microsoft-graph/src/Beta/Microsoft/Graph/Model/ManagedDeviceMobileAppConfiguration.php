<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceMobileAppConfiguration File
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
* ManagedDeviceMobileAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceMobileAppConfiguration extends Entity
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
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
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this App configuration entity.
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
    * List of Scope Tags for this App configuration entity.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetedMobileApps
    * the associated app.
    *
    * @return string The targetedMobileApps
    */
    public function getTargetedMobileApps()
    {
        if (array_key_exists("targetedMobileApps", $this->_propDict)) {
            return $this->_propDict["targetedMobileApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedMobileApps
    * the associated app.
    *
    * @param string $val The targetedMobileApps
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setTargetedMobileApps($val)
    {
        $this->_propDict["targetedMobileApps"] = $val;
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
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of group assignemenets for app configration.
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
    * The list of group assignemenets for app configration.
    *
    * @param ManagedDeviceMobileAppConfigurationAssignment $val The assignments
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStatuses
    * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
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
    * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
    *
    * @param ManagedDeviceMobileAppConfigurationDeviceStatus $val The deviceStatuses
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setDeviceStatuses($val)
    {
		$this->_propDict["deviceStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceStatusSummary
    * App configuration device status summary.
    *
    * @return ManagedDeviceMobileAppConfigurationDeviceSummary The deviceStatusSummary
    */
    public function getDeviceStatusSummary()
    {
        if (array_key_exists("deviceStatusSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStatusSummary"], "\Beta\Microsoft\Graph\Model\ManagedDeviceMobileAppConfigurationDeviceSummary")) {
                return $this->_propDict["deviceStatusSummary"];
            } else {
                $this->_propDict["deviceStatusSummary"] = new ManagedDeviceMobileAppConfigurationDeviceSummary($this->_propDict["deviceStatusSummary"]);
                return $this->_propDict["deviceStatusSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceStatusSummary
    * App configuration device status summary.
    *
    * @param ManagedDeviceMobileAppConfigurationDeviceSummary $val The deviceStatusSummary
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setDeviceStatusSummary($val)
    {
        $this->_propDict["deviceStatusSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStatuses
    * List of ManagedDeviceMobileAppConfigurationUserStatus.
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
    * List of ManagedDeviceMobileAppConfigurationUserStatus.
    *
    * @param ManagedDeviceMobileAppConfigurationUserStatus $val The userStatuses
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setUserStatuses($val)
    {
		$this->_propDict["userStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the userStatusSummary
    * App configuration user status summary.
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary The userStatusSummary
    */
    public function getUserStatusSummary()
    {
        if (array_key_exists("userStatusSummary", $this->_propDict)) {
            if (is_a($this->_propDict["userStatusSummary"], "\Beta\Microsoft\Graph\Model\ManagedDeviceMobileAppConfigurationUserSummary")) {
                return $this->_propDict["userStatusSummary"];
            } else {
                $this->_propDict["userStatusSummary"] = new ManagedDeviceMobileAppConfigurationUserSummary($this->_propDict["userStatusSummary"]);
                return $this->_propDict["userStatusSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userStatusSummary
    * App configuration user status summary.
    *
    * @param ManagedDeviceMobileAppConfigurationUserSummary $val The userStatusSummary
    *
    * @return ManagedDeviceMobileAppConfiguration
    */
    public function setUserStatusSummary($val)
    {
        $this->_propDict["userStatusSummary"] = $val;
        return $this;
    }
    
}
