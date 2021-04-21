<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationWindowsSettingApplicability File
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
* DeviceManagementConfigurationWindowsSettingApplicability class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationWindowsSettingApplicability extends DeviceManagementConfigurationSettingApplicability
{
    /**
    * Gets the configurationServiceProviderVersion
    * Version of CSP setting is a part of
    *
    * @return string The configurationServiceProviderVersion
    */
    public function getConfigurationServiceProviderVersion()
    {
        if (array_key_exists("configurationServiceProviderVersion", $this->_propDict)) {
            return $this->_propDict["configurationServiceProviderVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the configurationServiceProviderVersion
    * Version of CSP setting is a part of
    *
    * @param string $val The value of the configurationServiceProviderVersion
    *
    * @return DeviceManagementConfigurationWindowsSettingApplicability
    */
    public function setConfigurationServiceProviderVersion($val)
    {
        $this->_propDict["configurationServiceProviderVersion"] = $val;
        return $this;
    }
    /**
    * Gets the maximumSupportedVersion
    * Maximum supported version of Windows
    *
    * @return string The maximumSupportedVersion
    */
    public function getMaximumSupportedVersion()
    {
        if (array_key_exists("maximumSupportedVersion", $this->_propDict)) {
            return $this->_propDict["maximumSupportedVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumSupportedVersion
    * Maximum supported version of Windows
    *
    * @param string $val The value of the maximumSupportedVersion
    *
    * @return DeviceManagementConfigurationWindowsSettingApplicability
    */
    public function setMaximumSupportedVersion($val)
    {
        $this->_propDict["maximumSupportedVersion"] = $val;
        return $this;
    }
    /**
    * Gets the minimumSupportedVersion
    * Minimum supported version of Windows
    *
    * @return string The minimumSupportedVersion
    */
    public function getMinimumSupportedVersion()
    {
        if (array_key_exists("minimumSupportedVersion", $this->_propDict)) {
            return $this->_propDict["minimumSupportedVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumSupportedVersion
    * Minimum supported version of Windows
    *
    * @param string $val The value of the minimumSupportedVersion
    *
    * @return DeviceManagementConfigurationWindowsSettingApplicability
    */
    public function setMinimumSupportedVersion($val)
    {
        $this->_propDict["minimumSupportedVersion"] = $val;
        return $this;
    }

    /**
    * Gets the requiredAzureAdTrustType
    * Required AzureAD trust type. Possible values are: none, azureAdJoined, addWorkAccount, mdmOnly.
    *
    * @return DeviceManagementConfigurationAzureAdTrustType The requiredAzureAdTrustType
    */
    public function getRequiredAzureAdTrustType()
    {
        if (array_key_exists("requiredAzureAdTrustType", $this->_propDict)) {
            if (is_a($this->_propDict["requiredAzureAdTrustType"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationAzureAdTrustType")) {
                return $this->_propDict["requiredAzureAdTrustType"];
            } else {
                $this->_propDict["requiredAzureAdTrustType"] = new DeviceManagementConfigurationAzureAdTrustType($this->_propDict["requiredAzureAdTrustType"]);
                return $this->_propDict["requiredAzureAdTrustType"];
            }
        }
        return null;
    }

    /**
    * Sets the requiredAzureAdTrustType
    * Required AzureAD trust type. Possible values are: none, azureAdJoined, addWorkAccount, mdmOnly.
    *
    * @param DeviceManagementConfigurationAzureAdTrustType $val The value to assign to the requiredAzureAdTrustType
    *
    * @return DeviceManagementConfigurationWindowsSettingApplicability The DeviceManagementConfigurationWindowsSettingApplicability
    */
    public function setRequiredAzureAdTrustType($val)
    {
        $this->_propDict["requiredAzureAdTrustType"] = $val;
         return $this;
    }
    /**
    * Gets the requiresAzureAd
    * AzureAD setting requirement
    *
    * @return bool The requiresAzureAd
    */
    public function getRequiresAzureAd()
    {
        if (array_key_exists("requiresAzureAd", $this->_propDict)) {
            return $this->_propDict["requiresAzureAd"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requiresAzureAd
    * AzureAD setting requirement
    *
    * @param bool $val The value of the requiresAzureAd
    *
    * @return DeviceManagementConfigurationWindowsSettingApplicability
    */
    public function setRequiresAzureAd($val)
    {
        $this->_propDict["requiresAzureAd"] = $val;
        return $this;
    }

    /**
    * Gets the windowsSkus
    * List of Windows SKUs that the setting is applicable for
    *
    * @return DeviceManagementConfigurationWindowsSkus The windowsSkus
    */
    public function getWindowsSkus()
    {
        if (array_key_exists("windowsSkus", $this->_propDict)) {
            if (is_a($this->_propDict["windowsSkus"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationWindowsSkus")) {
                return $this->_propDict["windowsSkus"];
            } else {
                $this->_propDict["windowsSkus"] = new DeviceManagementConfigurationWindowsSkus($this->_propDict["windowsSkus"]);
                return $this->_propDict["windowsSkus"];
            }
        }
        return null;
    }

    /**
    * Sets the windowsSkus
    * List of Windows SKUs that the setting is applicable for
    *
    * @param DeviceManagementConfigurationWindowsSkus $val The value to assign to the windowsSkus
    *
    * @return DeviceManagementConfigurationWindowsSettingApplicability The DeviceManagementConfigurationWindowsSettingApplicability
    */
    public function setWindowsSkus($val)
    {
        $this->_propDict["windowsSkus"] = $val;
         return $this;
    }
}
