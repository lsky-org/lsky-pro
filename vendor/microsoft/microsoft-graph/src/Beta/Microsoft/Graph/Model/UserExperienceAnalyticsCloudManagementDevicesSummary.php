<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsCloudManagementDevicesSummary File
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
* UserExperienceAnalyticsCloudManagementDevicesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsCloudManagementDevicesSummary extends Entity
{
    /**
    * Gets the coManagedDeviceCount
    * Total number of  co-managed devices.
    *
    * @return int The coManagedDeviceCount
    */
    public function getCoManagedDeviceCount()
    {
        if (array_key_exists("coManagedDeviceCount", $this->_propDict)) {
            return $this->_propDict["coManagedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the coManagedDeviceCount
    * Total number of  co-managed devices.
    *
    * @param int $val The value of the coManagedDeviceCount
    *
    * @return UserExperienceAnalyticsCloudManagementDevicesSummary
    */
    public function setCoManagedDeviceCount($val)
    {
        $this->_propDict["coManagedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the intuneDeviceCount
    * The count of intune devices that are not autopilot registerd.
    *
    * @return int The intuneDeviceCount
    */
    public function getIntuneDeviceCount()
    {
        if (array_key_exists("intuneDeviceCount", $this->_propDict)) {
            return $this->_propDict["intuneDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the intuneDeviceCount
    * The count of intune devices that are not autopilot registerd.
    *
    * @param int $val The value of the intuneDeviceCount
    *
    * @return UserExperienceAnalyticsCloudManagementDevicesSummary
    */
    public function setIntuneDeviceCount($val)
    {
        $this->_propDict["intuneDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the tenantAttachDeviceCount
    * Total count of tenant attach devices.
    *
    * @return int The tenantAttachDeviceCount
    */
    public function getTenantAttachDeviceCount()
    {
        if (array_key_exists("tenantAttachDeviceCount", $this->_propDict)) {
            return $this->_propDict["tenantAttachDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantAttachDeviceCount
    * Total count of tenant attach devices.
    *
    * @param int $val The value of the tenantAttachDeviceCount
    *
    * @return UserExperienceAnalyticsCloudManagementDevicesSummary
    */
    public function setTenantAttachDeviceCount($val)
    {
        $this->_propDict["tenantAttachDeviceCount"] = $val;
        return $this;
    }
}
