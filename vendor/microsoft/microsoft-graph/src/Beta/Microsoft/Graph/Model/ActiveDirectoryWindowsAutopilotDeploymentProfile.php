<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActiveDirectoryWindowsAutopilotDeploymentProfile File
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
* ActiveDirectoryWindowsAutopilotDeploymentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActiveDirectoryWindowsAutopilotDeploymentProfile extends WindowsAutopilotDeploymentProfile
{
    /**
    * Gets the hybridAzureADJoinSkipConnectivityCheck
    * The Autopilot Hybrid Azure AD join flow will continue even if it does not establish domain controller connectivity during OOBE.
    *
    * @return bool The hybridAzureADJoinSkipConnectivityCheck
    */
    public function getHybridAzureADJoinSkipConnectivityCheck()
    {
        if (array_key_exists("hybridAzureADJoinSkipConnectivityCheck", $this->_propDict)) {
            return $this->_propDict["hybridAzureADJoinSkipConnectivityCheck"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hybridAzureADJoinSkipConnectivityCheck
    * The Autopilot Hybrid Azure AD join flow will continue even if it does not establish domain controller connectivity during OOBE.
    *
    * @param bool $val The hybridAzureADJoinSkipConnectivityCheck
    *
    * @return ActiveDirectoryWindowsAutopilotDeploymentProfile
    */
    public function setHybridAzureADJoinSkipConnectivityCheck($val)
    {
        $this->_propDict["hybridAzureADJoinSkipConnectivityCheck"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the domainJoinConfiguration
    * Configuration to join Active Directory domain
    *
    * @return WindowsDomainJoinConfiguration The domainJoinConfiguration
    */
    public function getDomainJoinConfiguration()
    {
        if (array_key_exists("domainJoinConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["domainJoinConfiguration"], "\Beta\Microsoft\Graph\Model\WindowsDomainJoinConfiguration")) {
                return $this->_propDict["domainJoinConfiguration"];
            } else {
                $this->_propDict["domainJoinConfiguration"] = new WindowsDomainJoinConfiguration($this->_propDict["domainJoinConfiguration"]);
                return $this->_propDict["domainJoinConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the domainJoinConfiguration
    * Configuration to join Active Directory domain
    *
    * @param WindowsDomainJoinConfiguration $val The domainJoinConfiguration
    *
    * @return ActiveDirectoryWindowsAutopilotDeploymentProfile
    */
    public function setDomainJoinConfiguration($val)
    {
        $this->_propDict["domainJoinConfiguration"] = $val;
        return $this;
    }
    
}
