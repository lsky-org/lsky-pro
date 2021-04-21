<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Device File
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
* Device class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Device extends DirectoryObject
{
    /**
    * Gets the accountEnabled
    * true if the account is enabled; otherwise, false. default is true.
    *
    * @return bool The accountEnabled
    */
    public function getAccountEnabled()
    {
        if (array_key_exists("accountEnabled", $this->_propDict)) {
            return $this->_propDict["accountEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountEnabled
    * true if the account is enabled; otherwise, false. default is true.
    *
    * @param bool $val The accountEnabled
    *
    * @return Device
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the alternativeSecurityIds
    * For internal use only. Not nullable.
     *
     * @return array The alternativeSecurityIds
     */
    public function getAlternativeSecurityIds()
    {
        if (array_key_exists("alternativeSecurityIds", $this->_propDict)) {
           return $this->_propDict["alternativeSecurityIds"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the alternativeSecurityIds
    * For internal use only. Not nullable.
    *
    * @param AlternativeSecurityId $val The alternativeSecurityIds
    *
    * @return Device
    */
    public function setAlternativeSecurityIds($val)
    {
		$this->_propDict["alternativeSecurityIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the approximateLastSignInDateTime
    * The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime The approximateLastSignInDateTime
    */
    public function getApproximateLastSignInDateTime()
    {
        if (array_key_exists("approximateLastSignInDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["approximateLastSignInDateTime"], "\DateTime")) {
                return $this->_propDict["approximateLastSignInDateTime"];
            } else {
                $this->_propDict["approximateLastSignInDateTime"] = new \DateTime($this->_propDict["approximateLastSignInDateTime"]);
                return $this->_propDict["approximateLastSignInDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the approximateLastSignInDateTime
    * The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The approximateLastSignInDateTime
    *
    * @return Device
    */
    public function setApproximateLastSignInDateTime($val)
    {
        $this->_propDict["approximateLastSignInDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the complianceExpirationDateTime
    * The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime The complianceExpirationDateTime
    */
    public function getComplianceExpirationDateTime()
    {
        if (array_key_exists("complianceExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["complianceExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["complianceExpirationDateTime"];
            } else {
                $this->_propDict["complianceExpirationDateTime"] = new \DateTime($this->_propDict["complianceExpirationDateTime"]);
                return $this->_propDict["complianceExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the complianceExpirationDateTime
    * The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The complianceExpirationDateTime
    *
    * @return Device
    */
    public function setComplianceExpirationDateTime($val)
    {
        $this->_propDict["complianceExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCategory
    * User-defined property set by Intune to automatically add devices to groups and simplify managing devices.
    *
    * @return string The deviceCategory
    */
    public function getDeviceCategory()
    {
        if (array_key_exists("deviceCategory", $this->_propDict)) {
            return $this->_propDict["deviceCategory"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceCategory
    * User-defined property set by Intune to automatically add devices to groups and simplify managing devices.
    *
    * @param string $val The deviceCategory
    *
    * @return Device
    */
    public function setDeviceCategory($val)
    {
        $this->_propDict["deviceCategory"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    * Identifier set by Azure Device Registration Service at the time of registration.
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
    * Identifier set by Azure Device Registration Service at the time of registration.
    *
    * @param string $val The deviceId
    *
    * @return Device
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceMetadata
    * For internal use only. Set to null.
    *
    * @return string The deviceMetadata
    */
    public function getDeviceMetadata()
    {
        if (array_key_exists("deviceMetadata", $this->_propDict)) {
            return $this->_propDict["deviceMetadata"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceMetadata
    * For internal use only. Set to null.
    *
    * @param string $val The deviceMetadata
    *
    * @return Device
    */
    public function setDeviceMetadata($val)
    {
        $this->_propDict["deviceMetadata"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOwnership
    * Ownership of the device. This property is set by Intune. Possible values are: unknown, company, personal.
    *
    * @return string The deviceOwnership
    */
    public function getDeviceOwnership()
    {
        if (array_key_exists("deviceOwnership", $this->_propDict)) {
            return $this->_propDict["deviceOwnership"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceOwnership
    * Ownership of the device. This property is set by Intune. Possible values are: unknown, company, personal.
    *
    * @param string $val The deviceOwnership
    *
    * @return Device
    */
    public function setDeviceOwnership($val)
    {
        $this->_propDict["deviceOwnership"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceVersion
    * For internal use only.
    *
    * @return int The deviceVersion
    */
    public function getDeviceVersion()
    {
        if (array_key_exists("deviceVersion", $this->_propDict)) {
            return $this->_propDict["deviceVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceVersion
    * For internal use only.
    *
    * @param int $val The deviceVersion
    *
    * @return Device
    */
    public function setDeviceVersion($val)
    {
        $this->_propDict["deviceVersion"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the device. Required.
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
    * The display name for the device. Required.
    *
    * @param string $val The displayName
    *
    * @return Device
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the domainName
    * The on-premises domain name of Hybrid Azure AD joined devices. This property is set by Intune.
    *
    * @return string The domainName
    */
    public function getDomainName()
    {
        if (array_key_exists("domainName", $this->_propDict)) {
            return $this->_propDict["domainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the domainName
    * The on-premises domain name of Hybrid Azure AD joined devices. This property is set by Intune.
    *
    * @param string $val The domainName
    *
    * @return Device
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrollmentProfileName
    * Enrollment profile applied to the device. For example, Apple Device Enrollment Profile, Device enrollment - Corporate device identifiers, or Windows Autopilot profile name. This property is set by Intune.
    *
    * @return string The enrollmentProfileName
    */
    public function getEnrollmentProfileName()
    {
        if (array_key_exists("enrollmentProfileName", $this->_propDict)) {
            return $this->_propDict["enrollmentProfileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enrollmentProfileName
    * Enrollment profile applied to the device. For example, Apple Device Enrollment Profile, Device enrollment - Corporate device identifiers, or Windows Autopilot profile name. This property is set by Intune.
    *
    * @param string $val The enrollmentProfileName
    *
    * @return Device
    */
    public function setEnrollmentProfileName($val)
    {
        $this->_propDict["enrollmentProfileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrollmentType
    * Enrollment type of the device. This property is set by Intune. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement.
    *
    * @return string The enrollmentType
    */
    public function getEnrollmentType()
    {
        if (array_key_exists("enrollmentType", $this->_propDict)) {
            return $this->_propDict["enrollmentType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enrollmentType
    * Enrollment type of the device. This property is set by Intune. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement.
    *
    * @param string $val The enrollmentType
    *
    * @return Device
    */
    public function setEnrollmentType($val)
    {
        $this->_propDict["enrollmentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the extensionAttributes
    *
    * @return OnPremisesExtensionAttributes The extensionAttributes
    */
    public function getExtensionAttributes()
    {
        if (array_key_exists("extensionAttributes", $this->_propDict)) {
            if (is_a($this->_propDict["extensionAttributes"], "\Beta\Microsoft\Graph\Model\OnPremisesExtensionAttributes")) {
                return $this->_propDict["extensionAttributes"];
            } else {
                $this->_propDict["extensionAttributes"] = new OnPremisesExtensionAttributes($this->_propDict["extensionAttributes"]);
                return $this->_propDict["extensionAttributes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the extensionAttributes
    *
    * @param OnPremisesExtensionAttributes $val The extensionAttributes
    *
    * @return Device
    */
    public function setExtensionAttributes($val)
    {
        $this->_propDict["extensionAttributes"] = $val;
        return $this;
    }
    
    /**
    * Gets the hostnames
    * List of hostNames for the device.
    *
    * @return string The hostnames
    */
    public function getHostnames()
    {
        if (array_key_exists("hostnames", $this->_propDict)) {
            return $this->_propDict["hostnames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hostnames
    * List of hostNames for the device.
    *
    * @param string $val The hostnames
    *
    * @return Device
    */
    public function setHostnames($val)
    {
        $this->_propDict["hostnames"] = $val;
        return $this;
    }
    
    /**
    * Gets the isCompliant
    * true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices.
    *
    * @return bool The isCompliant
    */
    public function getIsCompliant()
    {
        if (array_key_exists("isCompliant", $this->_propDict)) {
            return $this->_propDict["isCompliant"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isCompliant
    * true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices.
    *
    * @param bool $val The isCompliant
    *
    * @return Device
    */
    public function setIsCompliant($val)
    {
        $this->_propDict["isCompliant"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isManaged
    * true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices.
    *
    * @return bool The isManaged
    */
    public function getIsManaged()
    {
        if (array_key_exists("isManaged", $this->_propDict)) {
            return $this->_propDict["isManaged"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isManaged
    * true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices.
    *
    * @param bool $val The isManaged
    *
    * @return Device
    */
    public function setIsManaged($val)
    {
        $this->_propDict["isManaged"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isRooted
    * true if device is rooted; false if device is jail-broken. This can only be updated by Intune.
    *
    * @return bool The isRooted
    */
    public function getIsRooted()
    {
        if (array_key_exists("isRooted", $this->_propDict)) {
            return $this->_propDict["isRooted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRooted
    * true if device is rooted; false if device is jail-broken. This can only be updated by Intune.
    *
    * @param bool $val The isRooted
    *
    * @return Device
    */
    public function setIsRooted($val)
    {
        $this->_propDict["isRooted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the managementType
    * Management channel of the device.  This property is set by Intune. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController.
    *
    * @return string The managementType
    */
    public function getManagementType()
    {
        if (array_key_exists("managementType", $this->_propDict)) {
            return $this->_propDict["managementType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managementType
    * Management channel of the device.  This property is set by Intune. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController.
    *
    * @param string $val The managementType
    *
    * @return Device
    */
    public function setManagementType($val)
    {
        $this->_propDict["managementType"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesLastSyncDateTime
    * The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only.
    *
    * @return \DateTime The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["onPremisesLastSyncDateTime"];
            } else {
                $this->_propDict["onPremisesLastSyncDateTime"] = new \DateTime($this->_propDict["onPremisesLastSyncDateTime"]);
                return $this->_propDict["onPremisesLastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onPremisesLastSyncDateTime
    * The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only.
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return Device
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only.
    *
    * @return bool The onPremisesSyncEnabled
    */
    public function getOnPremisesSyncEnabled()
    {
        if (array_key_exists("onPremisesSyncEnabled", $this->_propDict)) {
            return $this->_propDict["onPremisesSyncEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only.
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return Device
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the operatingSystem
    * The type of operating system on the device. Required.
    *
    * @return string The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operatingSystem
    * The type of operating system on the device. Required.
    *
    * @param string $val The operatingSystem
    *
    * @return Device
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the operatingSystemVersion
    * Operating system version of the device. Required.
    *
    * @return string The operatingSystemVersion
    */
    public function getOperatingSystemVersion()
    {
        if (array_key_exists("operatingSystemVersion", $this->_propDict)) {
            return $this->_propDict["operatingSystemVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operatingSystemVersion
    * Operating system version of the device. Required.
    *
    * @param string $val The operatingSystemVersion
    *
    * @return Device
    */
    public function setOperatingSystemVersion($val)
    {
        $this->_propDict["operatingSystemVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the physicalIds
    * For internal use only. Not nullable.
    *
    * @return string The physicalIds
    */
    public function getPhysicalIds()
    {
        if (array_key_exists("physicalIds", $this->_propDict)) {
            return $this->_propDict["physicalIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the physicalIds
    * For internal use only. Not nullable.
    *
    * @param string $val The physicalIds
    *
    * @return Device
    */
    public function setPhysicalIds($val)
    {
        $this->_propDict["physicalIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the profileType
    * The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
    *
    * @return string The profileType
    */
    public function getProfileType()
    {
        if (array_key_exists("profileType", $this->_propDict)) {
            return $this->_propDict["profileType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profileType
    * The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
    *
    * @param string $val The profileType
    *
    * @return Device
    */
    public function setProfileType($val)
    {
        $this->_propDict["profileType"] = $val;
        return $this;
    }
    
    /**
    * Gets the registrationDateTime
    * Date and time of when the device was registered. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime The registrationDateTime
    */
    public function getRegistrationDateTime()
    {
        if (array_key_exists("registrationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["registrationDateTime"], "\DateTime")) {
                return $this->_propDict["registrationDateTime"];
            } else {
                $this->_propDict["registrationDateTime"] = new \DateTime($this->_propDict["registrationDateTime"]);
                return $this->_propDict["registrationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the registrationDateTime
    * Date and time of when the device was registered. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The registrationDateTime
    *
    * @return Device
    */
    public function setRegistrationDateTime($val)
    {
        $this->_propDict["registrationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the systemLabels
    * List of labels applied to the device by the system.
    *
    * @return string The systemLabels
    */
    public function getSystemLabels()
    {
        if (array_key_exists("systemLabels", $this->_propDict)) {
            return $this->_propDict["systemLabels"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemLabels
    * List of labels applied to the device by the system.
    *
    * @param string $val The systemLabels
    *
    * @return Device
    */
    public function setSystemLabels($val)
    {
        $this->_propDict["systemLabels"] = $val;
        return $this;
    }
    
    /**
    * Gets the trustType
    * Type of trust for the joined device. Read-only. Possible values: Workplace (indicates bring your own personal devices), AzureAd (Cloud only joined devices), ServerAd (on-premises domain joined devices joined to Azure AD). For more details, see Introduction to device management in Azure Active Directory
    *
    * @return string The trustType
    */
    public function getTrustType()
    {
        if (array_key_exists("trustType", $this->_propDict)) {
            return $this->_propDict["trustType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the trustType
    * Type of trust for the joined device. Read-only. Possible values: Workplace (indicates bring your own personal devices), AzureAd (Cloud only joined devices), ServerAd (on-premises domain joined devices joined to Azure AD). For more details, see Introduction to device management in Azure Active Directory
    *
    * @param string $val The trustType
    *
    * @return Device
    */
    public function setTrustType($val)
    {
        $this->_propDict["trustType"] = $val;
        return $this;
    }
    
    /**
    * Gets the kind
    * Form factor of device. Only returned if user signs in with a Microsoft account as part of Project Rome.
    *
    * @return string The kind
    */
    public function getKind()
    {
        if (array_key_exists("kind", $this->_propDict)) {
            return $this->_propDict["kind"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kind
    * Form factor of device. Only returned if user signs in with a Microsoft account as part of Project Rome.
    *
    * @param string $val The kind
    *
    * @return Device
    */
    public function setKind($val)
    {
        $this->_propDict["kind"] = $val;
        return $this;
    }
    
    /**
    * Gets the manufacturer
    * Manufacturer of the device. Read-only.
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
    * Manufacturer of the device. Read-only.
    *
    * @param string $val The manufacturer
    *
    * @return Device
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    
    /**
    * Gets the model
    * Model of the device. Read-only.
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
    * Model of the device. Read-only.
    *
    * @param string $val The model
    *
    * @return Device
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * Friendly name of a device. Only returned if user signs in with a Microsoft account as part of Project Rome.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * Friendly name of a device. Only returned if user signs in with a Microsoft account as part of Project Rome.
    *
    * @param string $val The name
    *
    * @return Device
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the platform
    * Platform of device. Only returned if user signs in with a Microsoft account as part of Project Rome. Only returned if user signs in with a Microsoft account as part of Project Rome.
    *
    * @return string The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            return $this->_propDict["platform"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the platform
    * Platform of device. Only returned if user signs in with a Microsoft account as part of Project Rome. Only returned if user signs in with a Microsoft account as part of Project Rome.
    *
    * @param string $val The platform
    *
    * @return Device
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Device is online or offline. Only returned if user signs in with a Microsoft account as part of Project Rome.
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    * Device is online or offline. Only returned if user signs in with a Microsoft account as part of Project Rome.
    *
    * @param string $val The status
    *
    * @return Device
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the usageRights
     *
     * @return array The usageRights
     */
    public function getUsageRights()
    {
        if (array_key_exists("usageRights", $this->_propDict)) {
           return $this->_propDict["usageRights"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the usageRights
    *
    * @param UsageRight $val The usageRights
    *
    * @return Device
    */
    public function setUsageRights($val)
    {
		$this->_propDict["usageRights"] = $val;
        return $this;
    }
    

     /** 
     * Gets the memberOf
    * Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable.
     *
     * @return array The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists("memberOf", $this->_propDict)) {
           return $this->_propDict["memberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the memberOf
    * Groups that this group is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable.
    *
    * @param DirectoryObject $val The memberOf
    *
    * @return Device
    */
    public function setMemberOf($val)
    {
		$this->_propDict["memberOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registeredOwners
    * The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Currently, there can be only one owner. Read-only. Nullable.
     *
     * @return array The registeredOwners
     */
    public function getRegisteredOwners()
    {
        if (array_key_exists("registeredOwners", $this->_propDict)) {
           return $this->_propDict["registeredOwners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the registeredOwners
    * The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Currently, there can be only one owner. Read-only. Nullable.
    *
    * @param DirectoryObject $val The registeredOwners
    *
    * @return Device
    */
    public function setRegisteredOwners($val)
    {
		$this->_propDict["registeredOwners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registeredUsers
    * Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable.
     *
     * @return array The registeredUsers
     */
    public function getRegisteredUsers()
    {
        if (array_key_exists("registeredUsers", $this->_propDict)) {
           return $this->_propDict["registeredUsers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the registeredUsers
    * Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable.
    *
    * @param DirectoryObject $val The registeredUsers
    *
    * @return Device
    */
    public function setRegisteredUsers($val)
    {
		$this->_propDict["registeredUsers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the transitiveMemberOf
     *
     * @return array The transitiveMemberOf
     */
    public function getTransitiveMemberOf()
    {
        if (array_key_exists("transitiveMemberOf", $this->_propDict)) {
           return $this->_propDict["transitiveMemberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the transitiveMemberOf
    *
    * @param DirectoryObject $val The transitiveMemberOf
    *
    * @return Device
    */
    public function setTransitiveMemberOf($val)
    {
		$this->_propDict["transitiveMemberOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
    * The collection of open extensions defined for the device. Read-only. Nullable.
     *
     * @return array The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    * The collection of open extensions defined for the device. Read-only. Nullable.
    *
    * @param Extension $val The extensions
    *
    * @return Device
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the commands
    * Set of commands sent to this device
     *
     * @return array The commands
     */
    public function getCommands()
    {
        if (array_key_exists("commands", $this->_propDict)) {
           return $this->_propDict["commands"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the commands
    * Set of commands sent to this device
    *
    * @param Command $val The commands
    *
    * @return Device
    */
    public function setCommands($val)
    {
		$this->_propDict["commands"] = $val;
        return $this;
    }
    
}
