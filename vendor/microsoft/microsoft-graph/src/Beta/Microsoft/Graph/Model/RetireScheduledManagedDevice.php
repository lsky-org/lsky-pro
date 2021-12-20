<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RetireScheduledManagedDevice File
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
* RetireScheduledManagedDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RetireScheduledManagedDevice extends Entity
{

    /**
    * Gets the complianceState
    * Managed Device ComplianceStatus. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    *
    * @return ComplianceStatus The complianceState
    */
    public function getComplianceState()
    {
        if (array_key_exists("complianceState", $this->_propDict)) {
            if (is_a($this->_propDict["complianceState"], "\Beta\Microsoft\Graph\Model\ComplianceStatus")) {
                return $this->_propDict["complianceState"];
            } else {
                $this->_propDict["complianceState"] = new ComplianceStatus($this->_propDict["complianceState"]);
                return $this->_propDict["complianceState"];
            }
        }
        return null;
    }

    /**
    * Sets the complianceState
    * Managed Device ComplianceStatus. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    *
    * @param ComplianceStatus $val The value to assign to the complianceState
    *
    * @return RetireScheduledManagedDevice The RetireScheduledManagedDevice
    */
    public function setComplianceState($val)
    {
        $this->_propDict["complianceState"] = $val;
         return $this;
    }
    /**
    * Gets the deviceCompliancePolicyId
    * Device Compliance PolicyId
    *
    * @return string The deviceCompliancePolicyId
    */
    public function getDeviceCompliancePolicyId()
    {
        if (array_key_exists("deviceCompliancePolicyId", $this->_propDict)) {
            return $this->_propDict["deviceCompliancePolicyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceCompliancePolicyId
    * Device Compliance PolicyId
    *
    * @param string $val The value of the deviceCompliancePolicyId
    *
    * @return RetireScheduledManagedDevice
    */
    public function setDeviceCompliancePolicyId($val)
    {
        $this->_propDict["deviceCompliancePolicyId"] = $val;
        return $this;
    }
    /**
    * Gets the deviceCompliancePolicyName
    * Device Compliance Policy Name
    *
    * @return string The deviceCompliancePolicyName
    */
    public function getDeviceCompliancePolicyName()
    {
        if (array_key_exists("deviceCompliancePolicyName", $this->_propDict)) {
            return $this->_propDict["deviceCompliancePolicyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceCompliancePolicyName
    * Device Compliance Policy Name
    *
    * @param string $val The value of the deviceCompliancePolicyName
    *
    * @return RetireScheduledManagedDevice
    */
    public function setDeviceCompliancePolicyName($val)
    {
        $this->_propDict["deviceCompliancePolicyName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceType
    * Managed Device Device Type. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, cloudPC, blackberry, palm, unknown.
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
    * Managed Device Device Type. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, cloudPC, blackberry, palm, unknown.
    *
    * @param DeviceType $val The value to assign to the deviceType
    *
    * @return RetireScheduledManagedDevice The RetireScheduledManagedDevice
    */
    public function setDeviceType($val)
    {
        $this->_propDict["deviceType"] = $val;
         return $this;
    }
    /**
    * Gets the id
    * Key of the entity.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Key of the entity.
    *
    * @param string $val The value of the id
    *
    * @return RetireScheduledManagedDevice
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the managedDeviceId
    * Managed DeviceId
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
    * Managed DeviceId
    *
    * @param string $val The value of the managedDeviceId
    *
    * @return RetireScheduledManagedDevice
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    /**
    * Gets the managedDeviceName
    * Managed Device Name
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
    * Managed Device Name
    *
    * @param string $val The value of the managedDeviceName
    *
    * @return RetireScheduledManagedDevice
    */
    public function setManagedDeviceName($val)
    {
        $this->_propDict["managedDeviceName"] = $val;
        return $this;
    }

    /**
    * Gets the managementAgent
    * Managed Device ManagementAgentType. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController, microsoft365ManagedMdm, windowsManagementCloudApi.
    *
    * @return ManagementAgentType The managementAgent
    */
    public function getManagementAgent()
    {
        if (array_key_exists("managementAgent", $this->_propDict)) {
            if (is_a($this->_propDict["managementAgent"], "\Beta\Microsoft\Graph\Model\ManagementAgentType")) {
                return $this->_propDict["managementAgent"];
            } else {
                $this->_propDict["managementAgent"] = new ManagementAgentType($this->_propDict["managementAgent"]);
                return $this->_propDict["managementAgent"];
            }
        }
        return null;
    }

    /**
    * Sets the managementAgent
    * Managed Device ManagementAgentType. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController, microsoft365ManagedMdm, windowsManagementCloudApi.
    *
    * @param ManagementAgentType $val The value to assign to the managementAgent
    *
    * @return RetireScheduledManagedDevice The RetireScheduledManagedDevice
    */
    public function setManagementAgent($val)
    {
        $this->_propDict["managementAgent"] = $val;
         return $this;
    }

    /**
    * Gets the ownerType
    * Managed Device ManagedDeviceOwnerType. Possible values are: unknown, company, personal.
    *
    * @return ManagedDeviceOwnerType The ownerType
    */
    public function getOwnerType()
    {
        if (array_key_exists("ownerType", $this->_propDict)) {
            if (is_a($this->_propDict["ownerType"], "\Beta\Microsoft\Graph\Model\ManagedDeviceOwnerType")) {
                return $this->_propDict["ownerType"];
            } else {
                $this->_propDict["ownerType"] = new ManagedDeviceOwnerType($this->_propDict["ownerType"]);
                return $this->_propDict["ownerType"];
            }
        }
        return null;
    }

    /**
    * Sets the ownerType
    * Managed Device ManagedDeviceOwnerType. Possible values are: unknown, company, personal.
    *
    * @param ManagedDeviceOwnerType $val The value to assign to the ownerType
    *
    * @return RetireScheduledManagedDevice The RetireScheduledManagedDevice
    */
    public function setOwnerType($val)
    {
        $this->_propDict["ownerType"] = $val;
         return $this;
    }

    /**
    * Gets the retireAfterDateTime
    * Managed Device Retire After DateTime
    *
    * @return \DateTime The retireAfterDateTime
    */
    public function getRetireAfterDateTime()
    {
        if (array_key_exists("retireAfterDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["retireAfterDateTime"], "\DateTime")) {
                return $this->_propDict["retireAfterDateTime"];
            } else {
                $this->_propDict["retireAfterDateTime"] = new \DateTime($this->_propDict["retireAfterDateTime"]);
                return $this->_propDict["retireAfterDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the retireAfterDateTime
    * Managed Device Retire After DateTime
    *
    * @param \DateTime $val The value to assign to the retireAfterDateTime
    *
    * @return RetireScheduledManagedDevice The RetireScheduledManagedDevice
    */
    public function setRetireAfterDateTime($val)
    {
        $this->_propDict["retireAfterDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The value of the roleScopeTagIds
    *
    * @return RetireScheduledManagedDevice
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
}
