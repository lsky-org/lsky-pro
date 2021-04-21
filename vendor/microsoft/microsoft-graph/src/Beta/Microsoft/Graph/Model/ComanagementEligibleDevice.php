<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComanagementEligibleDevice File
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
* ComanagementEligibleDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComanagementEligibleDevice extends Entity
{
    /**
    * Gets the clientRegistrationStatus
    * ClientRegistrationStatus. Possible values are: notRegistered, registered, revoked, keyConflict, approvalPending, certificateReset, notRegisteredPendingEnrollment, unknown.
    *
    * @return DeviceRegistrationState The clientRegistrationStatus
    */
    public function getClientRegistrationStatus()
    {
        if (array_key_exists("clientRegistrationStatus", $this->_propDict)) {
            if (is_a($this->_propDict["clientRegistrationStatus"], "\Beta\Microsoft\Graph\Model\DeviceRegistrationState")) {
                return $this->_propDict["clientRegistrationStatus"];
            } else {
                $this->_propDict["clientRegistrationStatus"] = new DeviceRegistrationState($this->_propDict["clientRegistrationStatus"]);
                return $this->_propDict["clientRegistrationStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the clientRegistrationStatus
    * ClientRegistrationStatus. Possible values are: notRegistered, registered, revoked, keyConflict, approvalPending, certificateReset, notRegisteredPendingEnrollment, unknown.
    *
    * @param DeviceRegistrationState $val The clientRegistrationStatus
    *
    * @return ComanagementEligibleDevice
    */
    public function setClientRegistrationStatus($val)
    {
        $this->_propDict["clientRegistrationStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * DeviceName
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
    * DeviceName
    *
    * @param string $val The deviceName
    *
    * @return ComanagementEligibleDevice
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceType
    * DeviceType. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, linux, blackberry, palm, unknown, cloudPC.
    *
    * @return DeviceType The deviceType
    */
    public function getDeviceType()
    {
        if (array_key_exists("deviceType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceType"], "\Beta\Microsoft\Graph\Model\DeviceType")) {
                return $this->_propDict["deviceType"];
            } else {
                $this->_propDict["deviceType"] = new DeviceType($this->_propDict["deviceType"]);
                return $this->_propDict["deviceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceType
    * DeviceType. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, linux, blackberry, palm, unknown, cloudPC.
    *
    * @param DeviceType $val The deviceType
    *
    * @return ComanagementEligibleDevice
    */
    public function setDeviceType($val)
    {
        $this->_propDict["deviceType"] = $val;
        return $this;
    }
    
    /**
    * Gets the entitySource
    * EntitySource
    *
    * @return int The entitySource
    */
    public function getEntitySource()
    {
        if (array_key_exists("entitySource", $this->_propDict)) {
            return $this->_propDict["entitySource"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the entitySource
    * EntitySource
    *
    * @param int $val The entitySource
    *
    * @return ComanagementEligibleDevice
    */
    public function setEntitySource($val)
    {
        $this->_propDict["entitySource"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the managementAgents
    * ManagementAgents. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController, microsoft365ManagedMdm.
    *
    * @return ManagementAgentType The managementAgents
    */
    public function getManagementAgents()
    {
        if (array_key_exists("managementAgents", $this->_propDict)) {
            if (is_a($this->_propDict["managementAgents"], "\Beta\Microsoft\Graph\Model\ManagementAgentType")) {
                return $this->_propDict["managementAgents"];
            } else {
                $this->_propDict["managementAgents"] = new ManagementAgentType($this->_propDict["managementAgents"]);
                return $this->_propDict["managementAgents"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managementAgents
    * ManagementAgents. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController, microsoft365ManagedMdm.
    *
    * @param ManagementAgentType $val The managementAgents
    *
    * @return ComanagementEligibleDevice
    */
    public function setManagementAgents($val)
    {
        $this->_propDict["managementAgents"] = $val;
        return $this;
    }
    
    /**
    * Gets the managementState
    * ManagementState. Possible values are: managed, retirePending, retireFailed, wipePending, wipeFailed, unhealthy, deletePending, retireIssued, wipeIssued, wipeCanceled, retireCanceled, discovered.
    *
    * @return ManagementState The managementState
    */
    public function getManagementState()
    {
        if (array_key_exists("managementState", $this->_propDict)) {
            if (is_a($this->_propDict["managementState"], "\Beta\Microsoft\Graph\Model\ManagementState")) {
                return $this->_propDict["managementState"];
            } else {
                $this->_propDict["managementState"] = new ManagementState($this->_propDict["managementState"]);
                return $this->_propDict["managementState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managementState
    * ManagementState. Possible values are: managed, retirePending, retireFailed, wipePending, wipeFailed, unhealthy, deletePending, retireIssued, wipeIssued, wipeCanceled, retireCanceled, discovered.
    *
    * @param ManagementState $val The managementState
    *
    * @return ComanagementEligibleDevice
    */
    public function setManagementState($val)
    {
        $this->_propDict["managementState"] = $val;
        return $this;
    }
    
    /**
    * Gets the manufacturer
    * Manufacturer
    *
    * @return string The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the manufacturer
    * Manufacturer
    *
    * @param string $val The manufacturer
    *
    * @return ComanagementEligibleDevice
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    
    /**
    * Gets the mdmStatus
    * MDMStatus
    *
    * @return string The mdmStatus
    */
    public function getMdmStatus()
    {
        if (array_key_exists("mdmStatus", $this->_propDict)) {
            return $this->_propDict["mdmStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mdmStatus
    * MDMStatus
    *
    * @param string $val The mdmStatus
    *
    * @return ComanagementEligibleDevice
    */
    public function setMdmStatus($val)
    {
        $this->_propDict["mdmStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the model
    * Model
    *
    * @return string The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the model
    * Model
    *
    * @param string $val The model
    *
    * @return ComanagementEligibleDevice
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    
    /**
    * Gets the osDescription
    * OSDescription
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
    * OSDescription
    *
    * @param string $val The osDescription
    *
    * @return ComanagementEligibleDevice
    */
    public function setOsDescription($val)
    {
        $this->_propDict["osDescription"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    * OSVersion
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
    * OSVersion
    *
    * @param string $val The osVersion
    *
    * @return ComanagementEligibleDevice
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerType
    * OwnerType. Possible values are: unknown, company, personal.
    *
    * @return OwnerType The ownerType
    */
    public function getOwnerType()
    {
        if (array_key_exists("ownerType", $this->_propDict)) {
            if (is_a($this->_propDict["ownerType"], "\Beta\Microsoft\Graph\Model\OwnerType")) {
                return $this->_propDict["ownerType"];
            } else {
                $this->_propDict["ownerType"] = new OwnerType($this->_propDict["ownerType"]);
                return $this->_propDict["ownerType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the ownerType
    * OwnerType. Possible values are: unknown, company, personal.
    *
    * @param OwnerType $val The ownerType
    *
    * @return ComanagementEligibleDevice
    */
    public function setOwnerType($val)
    {
        $this->_propDict["ownerType"] = $val;
        return $this;
    }
    
    /**
    * Gets the referenceId
    * ReferenceId
    *
    * @return string The referenceId
    */
    public function getReferenceId()
    {
        if (array_key_exists("referenceId", $this->_propDict)) {
            return $this->_propDict["referenceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the referenceId
    * ReferenceId
    *
    * @param string $val The referenceId
    *
    * @return ComanagementEligibleDevice
    */
    public function setReferenceId($val)
    {
        $this->_propDict["referenceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the serialNumber
    * SerialNumber
    *
    * @return string The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serialNumber
    * SerialNumber
    *
    * @param string $val The serialNumber
    *
    * @return ComanagementEligibleDevice
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * ComanagementEligibleStatus. Possible values are: comanaged, eligible, eligibleButNotAzureAdJoined, needsOsUpdate, ineligible.
    *
    * @return ComanagementEligibleType The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\ComanagementEligibleType")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ComanagementEligibleType($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * ComanagementEligibleStatus. Possible values are: comanaged, eligible, eligibleButNotAzureAdJoined, needsOsUpdate, ineligible.
    *
    * @param ComanagementEligibleType $val The status
    *
    * @return ComanagementEligibleDevice
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the upn
    * UPN
    *
    * @return string The upn
    */
    public function getUpn()
    {
        if (array_key_exists("upn", $this->_propDict)) {
            return $this->_propDict["upn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the upn
    * UPN
    *
    * @param string $val The upn
    *
    * @return ComanagementEligibleDevice
    */
    public function setUpn($val)
    {
        $this->_propDict["upn"] = $val;
        return $this;
    }
    
    /**
    * Gets the userEmail
    * UserEmail
    *
    * @return string The userEmail
    */
    public function getUserEmail()
    {
        if (array_key_exists("userEmail", $this->_propDict)) {
            return $this->_propDict["userEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userEmail
    * UserEmail
    *
    * @param string $val The userEmail
    *
    * @return ComanagementEligibleDevice
    */
    public function setUserEmail($val)
    {
        $this->_propDict["userEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * UserId
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
    * UserId
    *
    * @param string $val The userId
    *
    * @return ComanagementEligibleDevice
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    * UserName
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
    * UserName
    *
    * @param string $val The userName
    *
    * @return ComanagementEligibleDevice
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
}
