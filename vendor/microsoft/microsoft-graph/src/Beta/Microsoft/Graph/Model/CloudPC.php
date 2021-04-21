<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPC File
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
* CloudPC class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPC extends Entity
{
    /**
    * Gets the displayName
    * The cloud PC display name.
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
    * The cloud PC display name.
    *
    * @param string $val The displayName
    *
    * @return CloudPC
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the imageDisplayName
    * Name of the OS image that's on the cloud PC.
    *
    * @return string The imageDisplayName
    */
    public function getImageDisplayName()
    {
        if (array_key_exists("imageDisplayName", $this->_propDict)) {
            return $this->_propDict["imageDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the imageDisplayName
    * Name of the OS image that's on the cloud PC.
    *
    * @param string $val The imageDisplayName
    *
    * @return CloudPC
    */
    public function setImageDisplayName($val)
    {
        $this->_propDict["imageDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The cloud PC's last modified date and time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The cloud PC's last modified date and time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return CloudPC
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceId
    * The cloud PC’s Intune device ID.
    *
    * @return string The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceId
    * The cloud PC’s Intune device ID.
    *
    * @param string $val The managedDeviceId
    *
    * @return CloudPC
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceName
    * The cloud PC’s Intune device name.
    *
    * @return string The managedDeviceName
    */
    public function getManagedDeviceName()
    {
        if (array_key_exists("managedDeviceName", $this->_propDict)) {
            return $this->_propDict["managedDeviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceName
    * The cloud PC’s Intune device name.
    *
    * @param string $val The managedDeviceName
    *
    * @return CloudPC
    */
    public function setManagedDeviceName($val)
    {
        $this->_propDict["managedDeviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the provisioningPolicyId
    * The cloud PC's provisioning policy ID.
    *
    * @return string The provisioningPolicyId
    */
    public function getProvisioningPolicyId()
    {
        if (array_key_exists("provisioningPolicyId", $this->_propDict)) {
            return $this->_propDict["provisioningPolicyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the provisioningPolicyId
    * The cloud PC's provisioning policy ID.
    *
    * @param string $val The provisioningPolicyId
    *
    * @return CloudPC
    */
    public function setProvisioningPolicyId($val)
    {
        $this->_propDict["provisioningPolicyId"] = $val;
        return $this;
    }
    
    /**
    * Gets the servicePlanId
    * The cloud PC's service plan ID.
    *
    * @return string The servicePlanId
    */
    public function getServicePlanId()
    {
        if (array_key_exists("servicePlanId", $this->_propDict)) {
            return $this->_propDict["servicePlanId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the servicePlanId
    * The cloud PC's service plan ID.
    *
    * @param string $val The servicePlanId
    *
    * @return CloudPC
    */
    public function setServicePlanId($val)
    {
        $this->_propDict["servicePlanId"] = $val;
        return $this;
    }
    
    /**
    * Gets the servicePlanName
    * The cloud PC's service plan name.
    *
    * @return string The servicePlanName
    */
    public function getServicePlanName()
    {
        if (array_key_exists("servicePlanName", $this->_propDict)) {
            return $this->_propDict["servicePlanName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the servicePlanName
    * The cloud PC's service plan name.
    *
    * @param string $val The servicePlanName
    *
    * @return CloudPC
    */
    public function setServicePlanName($val)
    {
        $this->_propDict["servicePlanName"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Status of the cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed.
    *
    * @return CloudPcStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CloudPcStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Status of the cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed.
    *
    * @param CloudPcStatus $val The status
    *
    * @return CloudPC
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the statusDetails
    * The details of the cloud PC status.
    *
    * @return CloudPcStatusDetails The statusDetails
    */
    public function getStatusDetails()
    {
        if (array_key_exists("statusDetails", $this->_propDict)) {
            if (is_a($this->_propDict["statusDetails"], "\Beta\Microsoft\Graph\Model\CloudPcStatusDetails")) {
                return $this->_propDict["statusDetails"];
            } else {
                $this->_propDict["statusDetails"] = new CloudPcStatusDetails($this->_propDict["statusDetails"]);
                return $this->_propDict["statusDetails"];
            }
        }
        return null;
    }
    
    /**
    * Sets the statusDetails
    * The details of the cloud PC status.
    *
    * @param CloudPcStatusDetails $val The statusDetails
    *
    * @return CloudPC
    */
    public function setStatusDetails($val)
    {
        $this->_propDict["statusDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The user principal name (UPN) of the user assigned to the cloud PC.
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
    * The user principal name (UPN) of the user assigned to the cloud PC.
    *
    * @param string $val The userPrincipalName
    *
    * @return CloudPC
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
