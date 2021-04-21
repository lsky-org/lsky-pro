<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicyState File
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
* DeviceCompliancePolicyState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceCompliancePolicyState extends Entity
{
    /**
    * Gets the displayName
    * The name of the policy for this policyBase
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
    * The name of the policy for this policyBase
    *
    * @param string $val The displayName
    *
    * @return DeviceCompliancePolicyState
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the platformType
    * Platform type that the policy applies to
    *
    * @return PolicyPlatformType The platformType
    */
    public function getPlatformType()
    {
        if (array_key_exists("platformType", $this->_propDict)) {
            if (is_a($this->_propDict["platformType"], "\Beta\Microsoft\Graph\Model\PolicyPlatformType")) {
                return $this->_propDict["platformType"];
            } else {
                $this->_propDict["platformType"] = new PolicyPlatformType($this->_propDict["platformType"]);
                return $this->_propDict["platformType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platformType
    * Platform type that the policy applies to
    *
    * @param PolicyPlatformType $val The platformType
    *
    * @return DeviceCompliancePolicyState
    */
    public function setPlatformType($val)
    {
        $this->_propDict["platformType"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingCount
    * Count of how many setting a policy holds
    *
    * @return int The settingCount
    */
    public function getSettingCount()
    {
        if (array_key_exists("settingCount", $this->_propDict)) {
            return $this->_propDict["settingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingCount
    * Count of how many setting a policy holds
    *
    * @param int $val The settingCount
    *
    * @return DeviceCompliancePolicyState
    */
    public function setSettingCount($val)
    {
        $this->_propDict["settingCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the settingStates
     *
     * @return array The settingStates
     */
    public function getSettingStates()
    {
        if (array_key_exists("settingStates", $this->_propDict)) {
           return $this->_propDict["settingStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the settingStates
    *
    * @param DeviceCompliancePolicySettingState $val The settingStates
    *
    * @return DeviceCompliancePolicyState
    */
    public function setSettingStates($val)
    {
		$this->_propDict["settingStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The compliance state of the policy
    *
    * @return ComplianceStatus The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\ComplianceStatus")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ComplianceStatus($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * The compliance state of the policy
    *
    * @param ComplianceStatus $val The state
    *
    * @return DeviceCompliancePolicyState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * User unique identifier, must be Guid
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * User unique identifier, must be Guid
    *
    * @param string $val The userId
    *
    * @return DeviceCompliancePolicyState
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * User Principal Name
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    * User Principal Name
    *
    * @param string $val The userPrincipalName
    *
    * @return DeviceCompliancePolicyState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * The version of the policy
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
    * The version of the policy
    *
    * @param int $val The version
    *
    * @return DeviceCompliancePolicyState
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    
}
