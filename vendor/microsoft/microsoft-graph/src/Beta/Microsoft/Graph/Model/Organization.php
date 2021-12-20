<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Organization File
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
* Organization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Organization extends DirectoryObject
{

     /** 
     * Gets the assignedPlans
    * The collection of service plans associated with the tenant. Not nullable.
     *
     * @return array The assignedPlans
     */
    public function getAssignedPlans()
    {
        if (array_key_exists("assignedPlans", $this->_propDict)) {
           return $this->_propDict["assignedPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedPlans
    * The collection of service plans associated with the tenant. Not nullable.
    *
    * @param AssignedPlan $val The assignedPlans
    *
    * @return Organization
    */
    public function setAssignedPlans($val)
    {
		$this->_propDict["assignedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessPhones
    * Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
    *
    * @return string The businessPhones
    */
    public function getBusinessPhones()
    {
        if (array_key_exists("businessPhones", $this->_propDict)) {
            return $this->_propDict["businessPhones"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessPhones
    * Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
    *
    * @param string $val The businessPhones
    *
    * @return Organization
    */
    public function setBusinessPhones($val)
    {
        $this->_propDict["businessPhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the city
    * City name of the address for the organization.
    *
    * @return string The city
    */
    public function getCity()
    {
        if (array_key_exists("city", $this->_propDict)) {
            return $this->_propDict["city"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the city
    * City name of the address for the organization.
    *
    * @param string $val The city
    *
    * @return Organization
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    
    /**
    * Gets the country
    * Country/region name of the address for the organization.
    *
    * @return string The country
    */
    public function getCountry()
    {
        if (array_key_exists("country", $this->_propDict)) {
            return $this->_propDict["country"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the country
    * Country/region name of the address for the organization.
    *
    * @param string $val The country
    *
    * @return Organization
    */
    public function setCountry($val)
    {
        $this->_propDict["country"] = $val;
        return $this;
    }
    
    /**
    * Gets the countryLetterCode
    * Country/region abbreviation for the organization.
    *
    * @return string The countryLetterCode
    */
    public function getCountryLetterCode()
    {
        if (array_key_exists("countryLetterCode", $this->_propDict)) {
            return $this->_propDict["countryLetterCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countryLetterCode
    * Country/region abbreviation for the organization.
    *
    * @param string $val The countryLetterCode
    *
    * @return Organization
    */
    public function setCountryLetterCode($val)
    {
        $this->_propDict["countryLetterCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Organization
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the directorySizeQuota
    * The directory size quota information of an organization.
    *
    * @return DirectorySizeQuota The directorySizeQuota
    */
    public function getDirectorySizeQuota()
    {
        if (array_key_exists("directorySizeQuota", $this->_propDict)) {
            if (is_a($this->_propDict["directorySizeQuota"], "\Beta\Microsoft\Graph\Model\DirectorySizeQuota")) {
                return $this->_propDict["directorySizeQuota"];
            } else {
                $this->_propDict["directorySizeQuota"] = new DirectorySizeQuota($this->_propDict["directorySizeQuota"]);
                return $this->_propDict["directorySizeQuota"];
            }
        }
        return null;
    }
    
    /**
    * Sets the directorySizeQuota
    * The directory size quota information of an organization.
    *
    * @param DirectorySizeQuota $val The directorySizeQuota
    *
    * @return Organization
    */
    public function setDirectorySizeQuota($val)
    {
        $this->_propDict["directorySizeQuota"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the tenant.
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
    * The display name for the tenant.
    *
    * @param string $val The displayName
    *
    * @return Organization
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isMultipleDataLocationsForServicesEnabled
    * true if organization is Multi-Geo enabled; false if organization is not Multi-Geo enabled; null (default). Read-only. For more information, see OneDrive Online Multi-Geo.
    *
    * @return bool The isMultipleDataLocationsForServicesEnabled
    */
    public function getIsMultipleDataLocationsForServicesEnabled()
    {
        if (array_key_exists("isMultipleDataLocationsForServicesEnabled", $this->_propDict)) {
            return $this->_propDict["isMultipleDataLocationsForServicesEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isMultipleDataLocationsForServicesEnabled
    * true if organization is Multi-Geo enabled; false if organization is not Multi-Geo enabled; null (default). Read-only. For more information, see OneDrive Online Multi-Geo.
    *
    * @param bool $val The isMultipleDataLocationsForServicesEnabled
    *
    * @return Organization
    */
    public function setIsMultipleDataLocationsForServicesEnabled($val)
    {
        $this->_propDict["isMultipleDataLocationsForServicesEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the marketingNotificationEmails
    * Not nullable.
    *
    * @return string The marketingNotificationEmails
    */
    public function getMarketingNotificationEmails()
    {
        if (array_key_exists("marketingNotificationEmails", $this->_propDict)) {
            return $this->_propDict["marketingNotificationEmails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the marketingNotificationEmails
    * Not nullable.
    *
    * @param string $val The marketingNotificationEmails
    *
    * @return Organization
    */
    public function setMarketingNotificationEmails($val)
    {
        $this->_propDict["marketingNotificationEmails"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesLastSyncDateTime
    * The time and date at which the tenant was last synced with the on-premise directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The time and date at which the tenant was last synced with the on-premise directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return Organization
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; Nullable. null if this object has never been synced from an on-premises directory (default).
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
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; Nullable. null if this object has never been synced from an on-premises directory (default).
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return Organization
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the postalCode
    * Postal code of the address for the organization.
    *
    * @return string The postalCode
    */
    public function getPostalCode()
    {
        if (array_key_exists("postalCode", $this->_propDict)) {
            return $this->_propDict["postalCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the postalCode
    * Postal code of the address for the organization.
    *
    * @param string $val The postalCode
    *
    * @return Organization
    */
    public function setPostalCode($val)
    {
        $this->_propDict["postalCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredLanguage
    * The preferred language for the organization. Should follow ISO 639-1 Code; for example en.
    *
    * @return string The preferredLanguage
    */
    public function getPreferredLanguage()
    {
        if (array_key_exists("preferredLanguage", $this->_propDict)) {
            return $this->_propDict["preferredLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredLanguage
    * The preferred language for the organization. Should follow ISO 639-1 Code; for example en.
    *
    * @param string $val The preferredLanguage
    *
    * @return Organization
    */
    public function setPreferredLanguage($val)
    {
        $this->_propDict["preferredLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the privacyProfile
    * The privacy profile of an organization.
    *
    * @return PrivacyProfile The privacyProfile
    */
    public function getPrivacyProfile()
    {
        if (array_key_exists("privacyProfile", $this->_propDict)) {
            if (is_a($this->_propDict["privacyProfile"], "\Beta\Microsoft\Graph\Model\PrivacyProfile")) {
                return $this->_propDict["privacyProfile"];
            } else {
                $this->_propDict["privacyProfile"] = new PrivacyProfile($this->_propDict["privacyProfile"]);
                return $this->_propDict["privacyProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the privacyProfile
    * The privacy profile of an organization.
    *
    * @param PrivacyProfile $val The privacyProfile
    *
    * @return Organization
    */
    public function setPrivacyProfile($val)
    {
        $this->_propDict["privacyProfile"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisionedPlans
    * Not nullable.
     *
     * @return array The provisionedPlans
     */
    public function getProvisionedPlans()
    {
        if (array_key_exists("provisionedPlans", $this->_propDict)) {
           return $this->_propDict["provisionedPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the provisionedPlans
    * Not nullable.
    *
    * @param ProvisionedPlan $val The provisionedPlans
    *
    * @return Organization
    */
    public function setProvisionedPlans($val)
    {
		$this->_propDict["provisionedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityComplianceNotificationMails
    *
    * @return string The securityComplianceNotificationMails
    */
    public function getSecurityComplianceNotificationMails()
    {
        if (array_key_exists("securityComplianceNotificationMails", $this->_propDict)) {
            return $this->_propDict["securityComplianceNotificationMails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityComplianceNotificationMails
    *
    * @param string $val The securityComplianceNotificationMails
    *
    * @return Organization
    */
    public function setSecurityComplianceNotificationMails($val)
    {
        $this->_propDict["securityComplianceNotificationMails"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityComplianceNotificationPhones
    *
    * @return string The securityComplianceNotificationPhones
    */
    public function getSecurityComplianceNotificationPhones()
    {
        if (array_key_exists("securityComplianceNotificationPhones", $this->_propDict)) {
            return $this->_propDict["securityComplianceNotificationPhones"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityComplianceNotificationPhones
    *
    * @param string $val The securityComplianceNotificationPhones
    *
    * @return Organization
    */
    public function setSecurityComplianceNotificationPhones($val)
    {
        $this->_propDict["securityComplianceNotificationPhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * State name of the address for the organization.
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the state
    * State name of the address for the organization.
    *
    * @param string $val The state
    *
    * @return Organization
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the street
    * Street name of the address for organization.
    *
    * @return string The street
    */
    public function getStreet()
    {
        if (array_key_exists("street", $this->_propDict)) {
            return $this->_propDict["street"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the street
    * Street name of the address for organization.
    *
    * @param string $val The street
    *
    * @return Organization
    */
    public function setStreet($val)
    {
        $this->_propDict["street"] = $val;
        return $this;
    }
    
    /**
    * Gets the technicalNotificationMails
    * Not nullable.
    *
    * @return string The technicalNotificationMails
    */
    public function getTechnicalNotificationMails()
    {
        if (array_key_exists("technicalNotificationMails", $this->_propDict)) {
            return $this->_propDict["technicalNotificationMails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the technicalNotificationMails
    * Not nullable.
    *
    * @param string $val The technicalNotificationMails
    *
    * @return Organization
    */
    public function setTechnicalNotificationMails($val)
    {
        $this->_propDict["technicalNotificationMails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the verifiedDomains
    * The collection of domains associated with this tenant. Not nullable.
     *
     * @return array The verifiedDomains
     */
    public function getVerifiedDomains()
    {
        if (array_key_exists("verifiedDomains", $this->_propDict)) {
           return $this->_propDict["verifiedDomains"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the verifiedDomains
    * The collection of domains associated with this tenant. Not nullable.
    *
    * @param VerifiedDomain $val The verifiedDomains
    *
    * @return Organization
    */
    public function setVerifiedDomains($val)
    {
		$this->_propDict["verifiedDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateConnectorSetting
    * Certificate connector setting.
    *
    * @return CertificateConnectorSetting The certificateConnectorSetting
    */
    public function getCertificateConnectorSetting()
    {
        if (array_key_exists("certificateConnectorSetting", $this->_propDict)) {
            if (is_a($this->_propDict["certificateConnectorSetting"], "\Beta\Microsoft\Graph\Model\CertificateConnectorSetting")) {
                return $this->_propDict["certificateConnectorSetting"];
            } else {
                $this->_propDict["certificateConnectorSetting"] = new CertificateConnectorSetting($this->_propDict["certificateConnectorSetting"]);
                return $this->_propDict["certificateConnectorSetting"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateConnectorSetting
    * Certificate connector setting.
    *
    * @param CertificateConnectorSetting $val The certificateConnectorSetting
    *
    * @return Organization
    */
    public function setCertificateConnectorSetting($val)
    {
        $this->_propDict["certificateConnectorSetting"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobileDeviceManagementAuthority
    * Mobile device management authority. Possible values are: unknown, intune, sccm, office365.
    *
    * @return MdmAuthority The mobileDeviceManagementAuthority
    */
    public function getMobileDeviceManagementAuthority()
    {
        if (array_key_exists("mobileDeviceManagementAuthority", $this->_propDict)) {
            if (is_a($this->_propDict["mobileDeviceManagementAuthority"], "\Beta\Microsoft\Graph\Model\MdmAuthority")) {
                return $this->_propDict["mobileDeviceManagementAuthority"];
            } else {
                $this->_propDict["mobileDeviceManagementAuthority"] = new MdmAuthority($this->_propDict["mobileDeviceManagementAuthority"]);
                return $this->_propDict["mobileDeviceManagementAuthority"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mobileDeviceManagementAuthority
    * Mobile device management authority. Possible values are: unknown, intune, sccm, office365.
    *
    * @param MdmAuthority $val The mobileDeviceManagementAuthority
    *
    * @return Organization
    */
    public function setMobileDeviceManagementAuthority($val)
    {
        $this->_propDict["mobileDeviceManagementAuthority"] = $val;
        return $this;
    }
    
    /**
    * Gets the branding
    *
    * @return OrganizationalBranding The branding
    */
    public function getBranding()
    {
        if (array_key_exists("branding", $this->_propDict)) {
            if (is_a($this->_propDict["branding"], "\Beta\Microsoft\Graph\Model\OrganizationalBranding")) {
                return $this->_propDict["branding"];
            } else {
                $this->_propDict["branding"] = new OrganizationalBranding($this->_propDict["branding"]);
                return $this->_propDict["branding"];
            }
        }
        return null;
    }
    
    /**
    * Sets the branding
    *
    * @param OrganizationalBranding $val The branding
    *
    * @return Organization
    */
    public function setBranding($val)
    {
        $this->_propDict["branding"] = $val;
        return $this;
    }
    

     /** 
     * Gets the certificateBasedAuthConfiguration
    * Navigation property to manage  certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     *
     * @return array The certificateBasedAuthConfiguration
     */
    public function getCertificateBasedAuthConfiguration()
    {
        if (array_key_exists("certificateBasedAuthConfiguration", $this->_propDict)) {
           return $this->_propDict["certificateBasedAuthConfiguration"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the certificateBasedAuthConfiguration
    * Navigation property to manage  certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
    *
    * @param CertificateBasedAuthConfiguration $val The certificateBasedAuthConfiguration
    *
    * @return Organization
    */
    public function setCertificateBasedAuthConfiguration($val)
    {
		$this->_propDict["certificateBasedAuthConfiguration"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
    * The collection of open extensions defined for the organization resource. Nullable.
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
    * The collection of open extensions defined for the organization resource. Nullable.
    *
    * @param Extension $val The extensions
    *
    * @return Organization
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    * Retrieve the properties and relationships of organizationSettings object. Nullable.
    *
    * @return OrganizationSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\OrganizationSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new OrganizationSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * Retrieve the properties and relationships of organizationSettings object. Nullable.
    *
    * @param OrganizationSettings $val The settings
    *
    * @return Organization
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
}
