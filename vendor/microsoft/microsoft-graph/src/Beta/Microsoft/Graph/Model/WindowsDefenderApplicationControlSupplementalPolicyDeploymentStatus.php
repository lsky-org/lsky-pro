<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus File
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
* WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus extends Entity
{
    /**
    * Gets the deploymentStatus
    * The deployment state of the policy. Possible values are: unknown, success, tokenError, notAuthorizedByToken, policyNotFound.
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyStatuses The deploymentStatus
    */
    public function getDeploymentStatus()
    {
        if (array_key_exists("deploymentStatus", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentStatus"], "\Beta\Microsoft\Graph\Model\WindowsDefenderApplicationControlSupplementalPolicyStatuses")) {
                return $this->_propDict["deploymentStatus"];
            } else {
                $this->_propDict["deploymentStatus"] = new WindowsDefenderApplicationControlSupplementalPolicyStatuses($this->_propDict["deploymentStatus"]);
                return $this->_propDict["deploymentStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploymentStatus
    * The deployment state of the policy. Possible values are: unknown, success, tokenError, notAuthorizedByToken, policyNotFound.
    *
    * @param WindowsDefenderApplicationControlSupplementalPolicyStatuses $val The deploymentStatus
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setDeploymentStatus($val)
    {
        $this->_propDict["deploymentStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    * Device ID.
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceId
    * Device ID.
    *
    * @param string $val The deviceId
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * Device name.
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    * Device name.
    *
    * @param string $val The deviceName
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    * Last sync date time.
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    * Last sync date time.
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the osDescription
    * Windows OS Version Description.
    *
    * @return string The osDescription
    */
    public function getOsDescription()
    {
        if (array_key_exists("osDescription", $this->_propDict)) {
            return $this->_propDict["osDescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osDescription
    * Windows OS Version Description.
    *
    * @param string $val The osDescription
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setOsDescription($val)
    {
        $this->_propDict["osDescription"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    * Windows OS Version.
    *
    * @return string The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersion
    * Windows OS Version.
    *
    * @param string $val The osVersion
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the policyVersion
    * Human readable version of the WindowsDefenderApplicationControl supplemental policy.
    *
    * @return string The policyVersion
    */
    public function getPolicyVersion()
    {
        if (array_key_exists("policyVersion", $this->_propDict)) {
            return $this->_propDict["policyVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the policyVersion
    * Human readable version of the WindowsDefenderApplicationControl supplemental policy.
    *
    * @param string $val The policyVersion
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setPolicyVersion($val)
    {
        $this->_propDict["policyVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    * The name of the user of this device.
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    * The name of the user of this device.
    *
    * @param string $val The userName
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * User Principal Name.
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
    * User Principal Name.
    *
    * @param string $val The userPrincipalName
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the policy
    * The navigation link to the WindowsDefenderApplicationControl supplemental policy.
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicy The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "\Beta\Microsoft\Graph\Model\WindowsDefenderApplicationControlSupplementalPolicy")) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new WindowsDefenderApplicationControlSupplementalPolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policy
    * The navigation link to the WindowsDefenderApplicationControl supplemental policy.
    *
    * @param WindowsDefenderApplicationControlSupplementalPolicy $val The policy
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }
    
}
