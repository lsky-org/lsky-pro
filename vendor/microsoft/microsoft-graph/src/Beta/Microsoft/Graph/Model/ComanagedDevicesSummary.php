<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComanagedDevicesSummary File
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
* ComanagedDevicesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComanagedDevicesSummary extends Entity
{
    /**
    * Gets the compliancePolicyCount
    * Number of devices with CompliancePolicy swung-over. This property is read-only.
    *
    * @return int The compliancePolicyCount
    */
    public function getCompliancePolicyCount()
    {
        if (array_key_exists("compliancePolicyCount", $this->_propDict)) {
            return $this->_propDict["compliancePolicyCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliancePolicyCount
    * Number of devices with CompliancePolicy swung-over. This property is read-only.
    *
    * @param int $val The value of the compliancePolicyCount
    *
    * @return ComanagedDevicesSummary
    */
    public function setCompliancePolicyCount($val)
    {
        $this->_propDict["compliancePolicyCount"] = $val;
        return $this;
    }
    /**
    * Gets the configurationSettingsCount
    * Number of devices with ConfigurationSettings swung-over. This property is read-only.
    *
    * @return int The configurationSettingsCount
    */
    public function getConfigurationSettingsCount()
    {
        if (array_key_exists("configurationSettingsCount", $this->_propDict)) {
            return $this->_propDict["configurationSettingsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the configurationSettingsCount
    * Number of devices with ConfigurationSettings swung-over. This property is read-only.
    *
    * @param int $val The value of the configurationSettingsCount
    *
    * @return ComanagedDevicesSummary
    */
    public function setConfigurationSettingsCount($val)
    {
        $this->_propDict["configurationSettingsCount"] = $val;
        return $this;
    }
    /**
    * Gets the endpointProtectionCount
    * Number of devices with EndpointProtection swung-over. This property is read-only.
    *
    * @return int The endpointProtectionCount
    */
    public function getEndpointProtectionCount()
    {
        if (array_key_exists("endpointProtectionCount", $this->_propDict)) {
            return $this->_propDict["endpointProtectionCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endpointProtectionCount
    * Number of devices with EndpointProtection swung-over. This property is read-only.
    *
    * @param int $val The value of the endpointProtectionCount
    *
    * @return ComanagedDevicesSummary
    */
    public function setEndpointProtectionCount($val)
    {
        $this->_propDict["endpointProtectionCount"] = $val;
        return $this;
    }
    /**
    * Gets the inventoryCount
    * Number of devices with Inventory swung-over. This property is read-only.
    *
    * @return int The inventoryCount
    */
    public function getInventoryCount()
    {
        if (array_key_exists("inventoryCount", $this->_propDict)) {
            return $this->_propDict["inventoryCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inventoryCount
    * Number of devices with Inventory swung-over. This property is read-only.
    *
    * @param int $val The value of the inventoryCount
    *
    * @return ComanagedDevicesSummary
    */
    public function setInventoryCount($val)
    {
        $this->_propDict["inventoryCount"] = $val;
        return $this;
    }
    /**
    * Gets the modernAppsCount
    * Number of devices with ModernApps swung-over. This property is read-only.
    *
    * @return int The modernAppsCount
    */
    public function getModernAppsCount()
    {
        if (array_key_exists("modernAppsCount", $this->_propDict)) {
            return $this->_propDict["modernAppsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modernAppsCount
    * Number of devices with ModernApps swung-over. This property is read-only.
    *
    * @param int $val The value of the modernAppsCount
    *
    * @return ComanagedDevicesSummary
    */
    public function setModernAppsCount($val)
    {
        $this->_propDict["modernAppsCount"] = $val;
        return $this;
    }
    /**
    * Gets the officeAppsCount
    * Number of devices with OfficeApps swung-over. This property is read-only.
    *
    * @return int The officeAppsCount
    */
    public function getOfficeAppsCount()
    {
        if (array_key_exists("officeAppsCount", $this->_propDict)) {
            return $this->_propDict["officeAppsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the officeAppsCount
    * Number of devices with OfficeApps swung-over. This property is read-only.
    *
    * @param int $val The value of the officeAppsCount
    *
    * @return ComanagedDevicesSummary
    */
    public function setOfficeAppsCount($val)
    {
        $this->_propDict["officeAppsCount"] = $val;
        return $this;
    }
    /**
    * Gets the resourceAccessCount
    * Number of devices with ResourceAccess swung-over. This property is read-only.
    *
    * @return int The resourceAccessCount
    */
    public function getResourceAccessCount()
    {
        if (array_key_exists("resourceAccessCount", $this->_propDict)) {
            return $this->_propDict["resourceAccessCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceAccessCount
    * Number of devices with ResourceAccess swung-over. This property is read-only.
    *
    * @param int $val The value of the resourceAccessCount
    *
    * @return ComanagedDevicesSummary
    */
    public function setResourceAccessCount($val)
    {
        $this->_propDict["resourceAccessCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalComanagedCount
    * Number of Co-Managed Devices. This property is read-only.
    *
    * @return int The totalComanagedCount
    */
    public function getTotalComanagedCount()
    {
        if (array_key_exists("totalComanagedCount", $this->_propDict)) {
            return $this->_propDict["totalComanagedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalComanagedCount
    * Number of Co-Managed Devices. This property is read-only.
    *
    * @param int $val The value of the totalComanagedCount
    *
    * @return ComanagedDevicesSummary
    */
    public function setTotalComanagedCount($val)
    {
        $this->_propDict["totalComanagedCount"] = $val;
        return $this;
    }
    /**
    * Gets the windowsUpdateForBusinessCount
    * Number of devices with WindowsUpdateForBusiness swung-over. This property is read-only.
    *
    * @return int The windowsUpdateForBusinessCount
    */
    public function getWindowsUpdateForBusinessCount()
    {
        if (array_key_exists("windowsUpdateForBusinessCount", $this->_propDict)) {
            return $this->_propDict["windowsUpdateForBusinessCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsUpdateForBusinessCount
    * Number of devices with WindowsUpdateForBusiness swung-over. This property is read-only.
    *
    * @param int $val The value of the windowsUpdateForBusinessCount
    *
    * @return ComanagedDevicesSummary
    */
    public function setWindowsUpdateForBusinessCount($val)
    {
        $this->_propDict["windowsUpdateForBusinessCount"] = $val;
        return $this;
    }
}
