<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerClientEnabledFeatures File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ConfigurationManagerClientEnabledFeatures class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigurationManagerClientEnabledFeatures extends Entity
{
    /**
    * Gets the compliancePolicy
    * Whether compliance policy is managed by Intune
    *
    * @return bool The compliancePolicy
    */
    public function getCompliancePolicy()
    {
        if (array_key_exists("compliancePolicy", $this->_propDict)) {
            return $this->_propDict["compliancePolicy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliancePolicy
    * Whether compliance policy is managed by Intune
    *
    * @param bool $val The value of the compliancePolicy
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setCompliancePolicy($val)
    {
        $this->_propDict["compliancePolicy"] = $val;
        return $this;
    }
    /**
    * Gets the deviceConfiguration
    * Whether device configuration is managed by Intune
    *
    * @return bool The deviceConfiguration
    */
    public function getDeviceConfiguration()
    {
        if (array_key_exists("deviceConfiguration", $this->_propDict)) {
            return $this->_propDict["deviceConfiguration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceConfiguration
    * Whether device configuration is managed by Intune
    *
    * @param bool $val The value of the deviceConfiguration
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setDeviceConfiguration($val)
    {
        $this->_propDict["deviceConfiguration"] = $val;
        return $this;
    }
    /**
    * Gets the inventory
    * Whether inventory is managed by Intune
    *
    * @return bool The inventory
    */
    public function getInventory()
    {
        if (array_key_exists("inventory", $this->_propDict)) {
            return $this->_propDict["inventory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inventory
    * Whether inventory is managed by Intune
    *
    * @param bool $val The value of the inventory
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setInventory($val)
    {
        $this->_propDict["inventory"] = $val;
        return $this;
    }
    /**
    * Gets the modernApps
    * Whether modern application is managed by Intune
    *
    * @return bool The modernApps
    */
    public function getModernApps()
    {
        if (array_key_exists("modernApps", $this->_propDict)) {
            return $this->_propDict["modernApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modernApps
    * Whether modern application is managed by Intune
    *
    * @param bool $val The value of the modernApps
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setModernApps($val)
    {
        $this->_propDict["modernApps"] = $val;
        return $this;
    }
    /**
    * Gets the resourceAccess
    * Whether resource access is managed by Intune
    *
    * @return bool The resourceAccess
    */
    public function getResourceAccess()
    {
        if (array_key_exists("resourceAccess", $this->_propDict)) {
            return $this->_propDict["resourceAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceAccess
    * Whether resource access is managed by Intune
    *
    * @param bool $val The value of the resourceAccess
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setResourceAccess($val)
    {
        $this->_propDict["resourceAccess"] = $val;
        return $this;
    }
    /**
    * Gets the windowsUpdateForBusiness
    * Whether Windows Update for Business is managed by Intune
    *
    * @return bool The windowsUpdateForBusiness
    */
    public function getWindowsUpdateForBusiness()
    {
        if (array_key_exists("windowsUpdateForBusiness", $this->_propDict)) {
            return $this->_propDict["windowsUpdateForBusiness"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsUpdateForBusiness
    * Whether Windows Update for Business is managed by Intune
    *
    * @param bool $val The value of the windowsUpdateForBusiness
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setWindowsUpdateForBusiness($val)
    {
        $this->_propDict["windowsUpdateForBusiness"] = $val;
        return $this;
    }
}
