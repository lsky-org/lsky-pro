<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComanagementAuthorityConfiguration File
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
* DeviceComanagementAuthorityConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComanagementAuthorityConfiguration extends DeviceEnrollmentConfiguration
{
    /**
    * Gets the configurationManagerAgentCommandLineArgument
    * CoManagement Authority configuration ConfigurationManagerAgentCommandLineArgument
    *
    * @return string The configurationManagerAgentCommandLineArgument
    */
    public function getConfigurationManagerAgentCommandLineArgument()
    {
        if (array_key_exists("configurationManagerAgentCommandLineArgument", $this->_propDict)) {
            return $this->_propDict["configurationManagerAgentCommandLineArgument"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationManagerAgentCommandLineArgument
    * CoManagement Authority configuration ConfigurationManagerAgentCommandLineArgument
    *
    * @param string $val The configurationManagerAgentCommandLineArgument
    *
    * @return DeviceComanagementAuthorityConfiguration
    */
    public function setConfigurationManagerAgentCommandLineArgument($val)
    {
        $this->_propDict["configurationManagerAgentCommandLineArgument"] = $val;
        return $this;
    }
    
    /**
    * Gets the installConfigurationManagerAgent
    * CoManagement Authority configuration InstallConfigurationManagerAgent
    *
    * @return bool The installConfigurationManagerAgent
    */
    public function getInstallConfigurationManagerAgent()
    {
        if (array_key_exists("installConfigurationManagerAgent", $this->_propDict)) {
            return $this->_propDict["installConfigurationManagerAgent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the installConfigurationManagerAgent
    * CoManagement Authority configuration InstallConfigurationManagerAgent
    *
    * @param bool $val The installConfigurationManagerAgent
    *
    * @return DeviceComanagementAuthorityConfiguration
    */
    public function setInstallConfigurationManagerAgent($val)
    {
        $this->_propDict["installConfigurationManagerAgent"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the managedDeviceAuthority
    * CoManagement Authority configuration ManagedDeviceAuthority
    *
    * @return int The managedDeviceAuthority
    */
    public function getManagedDeviceAuthority()
    {
        if (array_key_exists("managedDeviceAuthority", $this->_propDict)) {
            return $this->_propDict["managedDeviceAuthority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceAuthority
    * CoManagement Authority configuration ManagedDeviceAuthority
    *
    * @param int $val The managedDeviceAuthority
    *
    * @return DeviceComanagementAuthorityConfiguration
    */
    public function setManagedDeviceAuthority($val)
    {
        $this->_propDict["managedDeviceAuthority"] = intval($val);
        return $this;
    }
    
}
