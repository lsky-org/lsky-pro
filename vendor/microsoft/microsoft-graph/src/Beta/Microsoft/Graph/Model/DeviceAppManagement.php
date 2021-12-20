<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAppManagement File
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
* DeviceAppManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAppManagement extends Entity
{
    /**
    * Gets the isEnabledForMicrosoftStoreForBusiness
    * Whether the account is enabled for syncing applications from the Microsoft Store for Business.
    *
    * @return bool The isEnabledForMicrosoftStoreForBusiness
    */
    public function getIsEnabledForMicrosoftStoreForBusiness()
    {
        if (array_key_exists("isEnabledForMicrosoftStoreForBusiness", $this->_propDict)) {
            return $this->_propDict["isEnabledForMicrosoftStoreForBusiness"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabledForMicrosoftStoreForBusiness
    * Whether the account is enabled for syncing applications from the Microsoft Store for Business.
    *
    * @param bool $val The isEnabledForMicrosoftStoreForBusiness
    *
    * @return DeviceAppManagement
    */
    public function setIsEnabledForMicrosoftStoreForBusiness($val)
    {
        $this->_propDict["isEnabledForMicrosoftStoreForBusiness"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessLanguage
    * The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -&amp;lt;country/regioncode2&amp;gt;, where  is a lowercase two-letter code derived from ISO 639-1 and &amp;lt;country/regioncode2&amp;gt; is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
    *
    * @return string The microsoftStoreForBusinessLanguage
    */
    public function getMicrosoftStoreForBusinessLanguage()
    {
        if (array_key_exists("microsoftStoreForBusinessLanguage", $this->_propDict)) {
            return $this->_propDict["microsoftStoreForBusinessLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftStoreForBusinessLanguage
    * The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -&amp;lt;country/regioncode2&amp;gt;, where  is a lowercase two-letter code derived from ISO 639-1 and &amp;lt;country/regioncode2&amp;gt; is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
    *
    * @param string $val The microsoftStoreForBusinessLanguage
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLanguage($val)
    {
        $this->_propDict["microsoftStoreForBusinessLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessLastCompletedApplicationSyncTime
    * The last time an application sync from the Microsoft Store for Business was completed.
    *
    * @return \DateTime The microsoftStoreForBusinessLastCompletedApplicationSyncTime
    */
    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime()
    {
        if (array_key_exists("microsoftStoreForBusinessLastCompletedApplicationSyncTime", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"], "\DateTime")) {
                return $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"];
            } else {
                $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"] = new \DateTime($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"]);
                return $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftStoreForBusinessLastCompletedApplicationSyncTime
    * The last time an application sync from the Microsoft Store for Business was completed.
    *
    * @param \DateTime $val The microsoftStoreForBusinessLastCompletedApplicationSyncTime
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime($val)
    {
        $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessLastSuccessfulSyncDateTime
    * The last time the apps from the Microsoft Store for Business were synced successfully for the account.
    *
    * @return \DateTime The microsoftStoreForBusinessLastSuccessfulSyncDateTime
    */
    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("microsoftStoreForBusinessLastSuccessfulSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"], "\DateTime")) {
                return $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"];
            } else {
                $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"] = new \DateTime($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"]);
                return $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftStoreForBusinessLastSuccessfulSyncDateTime
    * The last time the apps from the Microsoft Store for Business were synced successfully for the account.
    *
    * @param \DateTime $val The microsoftStoreForBusinessLastSuccessfulSyncDateTime
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime($val)
    {
        $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessPortalSelection
    * The end user portal information is used to sync applications from the Microsoft Store for Business to Intune Company Portal. There are three options to pick from ['Company portal only', 'Company portal and private store', 'Private store only']. Possible values are: none, companyPortal, privateStore.
    *
    * @return MicrosoftStoreForBusinessPortalSelectionOptions The microsoftStoreForBusinessPortalSelection
    */
    public function getMicrosoftStoreForBusinessPortalSelection()
    {
        if (array_key_exists("microsoftStoreForBusinessPortalSelection", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftStoreForBusinessPortalSelection"], "\Beta\Microsoft\Graph\Model\MicrosoftStoreForBusinessPortalSelectionOptions")) {
                return $this->_propDict["microsoftStoreForBusinessPortalSelection"];
            } else {
                $this->_propDict["microsoftStoreForBusinessPortalSelection"] = new MicrosoftStoreForBusinessPortalSelectionOptions($this->_propDict["microsoftStoreForBusinessPortalSelection"]);
                return $this->_propDict["microsoftStoreForBusinessPortalSelection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftStoreForBusinessPortalSelection
    * The end user portal information is used to sync applications from the Microsoft Store for Business to Intune Company Portal. There are three options to pick from ['Company portal only', 'Company portal and private store', 'Private store only']. Possible values are: none, companyPortal, privateStore.
    *
    * @param MicrosoftStoreForBusinessPortalSelectionOptions $val The microsoftStoreForBusinessPortalSelection
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessPortalSelection($val)
    {
        $this->_propDict["microsoftStoreForBusinessPortalSelection"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedEBookCategories
    * The mobile eBook categories.
     *
     * @return array The managedEBookCategories
     */
    public function getManagedEBookCategories()
    {
        if (array_key_exists("managedEBookCategories", $this->_propDict)) {
           return $this->_propDict["managedEBookCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedEBookCategories
    * The mobile eBook categories.
    *
    * @param ManagedEBookCategory $val The managedEBookCategories
    *
    * @return DeviceAppManagement
    */
    public function setManagedEBookCategories($val)
    {
		$this->_propDict["managedEBookCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseCodeSigningCertificates
    * The Windows Enterprise Code Signing Certificate.
     *
     * @return array The enterpriseCodeSigningCertificates
     */
    public function getEnterpriseCodeSigningCertificates()
    {
        if (array_key_exists("enterpriseCodeSigningCertificates", $this->_propDict)) {
           return $this->_propDict["enterpriseCodeSigningCertificates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enterpriseCodeSigningCertificates
    * The Windows Enterprise Code Signing Certificate.
    *
    * @param EnterpriseCodeSigningCertificate $val The enterpriseCodeSigningCertificates
    *
    * @return DeviceAppManagement
    */
    public function setEnterpriseCodeSigningCertificates($val)
    {
		$this->_propDict["enterpriseCodeSigningCertificates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosLobAppProvisioningConfigurations
    * The IOS Lob App Provisioning Configurations.
     *
     * @return array The iosLobAppProvisioningConfigurations
     */
    public function getIosLobAppProvisioningConfigurations()
    {
        if (array_key_exists("iosLobAppProvisioningConfigurations", $this->_propDict)) {
           return $this->_propDict["iosLobAppProvisioningConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the iosLobAppProvisioningConfigurations
    * The IOS Lob App Provisioning Configurations.
    *
    * @param IosLobAppProvisioningConfiguration $val The iosLobAppProvisioningConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setIosLobAppProvisioningConfigurations($val)
    {
		$this->_propDict["iosLobAppProvisioningConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppCategories
    * The mobile app categories.
     *
     * @return array The mobileAppCategories
     */
    public function getMobileAppCategories()
    {
        if (array_key_exists("mobileAppCategories", $this->_propDict)) {
           return $this->_propDict["mobileAppCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileAppCategories
    * The mobile app categories.
    *
    * @param MobileAppCategory $val The mobileAppCategories
    *
    * @return DeviceAppManagement
    */
    public function setMobileAppCategories($val)
    {
		$this->_propDict["mobileAppCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppConfigurations
    * The Managed Device Mobile Application Configurations.
     *
     * @return array The mobileAppConfigurations
     */
    public function getMobileAppConfigurations()
    {
        if (array_key_exists("mobileAppConfigurations", $this->_propDict)) {
           return $this->_propDict["mobileAppConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileAppConfigurations
    * The Managed Device Mobile Application Configurations.
    *
    * @param ManagedDeviceMobileAppConfiguration $val The mobileAppConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setMobileAppConfigurations($val)
    {
		$this->_propDict["mobileAppConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileApps
    * The mobile apps.
     *
     * @return array The mobileApps
     */
    public function getMobileApps()
    {
        if (array_key_exists("mobileApps", $this->_propDict)) {
           return $this->_propDict["mobileApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileApps
    * The mobile apps.
    *
    * @param MobileApp $val The mobileApps
    *
    * @return DeviceAppManagement
    */
    public function setMobileApps($val)
    {
		$this->_propDict["mobileApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the symantecCodeSigningCertificate
    * The WinPhone Symantec Code Signing Certificate.
    *
    * @return SymantecCodeSigningCertificate The symantecCodeSigningCertificate
    */
    public function getSymantecCodeSigningCertificate()
    {
        if (array_key_exists("symantecCodeSigningCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["symantecCodeSigningCertificate"], "\Beta\Microsoft\Graph\Model\SymantecCodeSigningCertificate")) {
                return $this->_propDict["symantecCodeSigningCertificate"];
            } else {
                $this->_propDict["symantecCodeSigningCertificate"] = new SymantecCodeSigningCertificate($this->_propDict["symantecCodeSigningCertificate"]);
                return $this->_propDict["symantecCodeSigningCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the symantecCodeSigningCertificate
    * The WinPhone Symantec Code Signing Certificate.
    *
    * @param SymantecCodeSigningCertificate $val The symantecCodeSigningCertificate
    *
    * @return DeviceAppManagement
    */
    public function setSymantecCodeSigningCertificate($val)
    {
        $this->_propDict["symantecCodeSigningCertificate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedEBooks
    * The Managed eBook.
     *
     * @return array The managedEBooks
     */
    public function getManagedEBooks()
    {
        if (array_key_exists("managedEBooks", $this->_propDict)) {
           return $this->_propDict["managedEBooks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedEBooks
    * The Managed eBook.
    *
    * @param ManagedEBook $val The managedEBooks
    *
    * @return DeviceAppManagement
    */
    public function setManagedEBooks($val)
    {
		$this->_propDict["managedEBooks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the policySets
    * The PolicySet of Policies and Applications
     *
     * @return array The policySets
     */
    public function getPolicySets()
    {
        if (array_key_exists("policySets", $this->_propDict)) {
           return $this->_propDict["policySets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the policySets
    * The PolicySet of Policies and Applications
    *
    * @param PolicySet $val The policySets
    *
    * @return DeviceAppManagement
    */
    public function setPolicySets($val)
    {
		$this->_propDict["policySets"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sideLoadingKeys
    * Side Loading Keys that are required for the Windows 8 and 8.1 Apps installation.
     *
     * @return array The sideLoadingKeys
     */
    public function getSideLoadingKeys()
    {
        if (array_key_exists("sideLoadingKeys", $this->_propDict)) {
           return $this->_propDict["sideLoadingKeys"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sideLoadingKeys
    * Side Loading Keys that are required for the Windows 8 and 8.1 Apps installation.
    *
    * @param SideLoadingKey $val The sideLoadingKeys
    *
    * @return DeviceAppManagement
    */
    public function setSideLoadingKeys($val)
    {
		$this->_propDict["sideLoadingKeys"] = $val;
        return $this;
    }
    

     /** 
     * Gets the vppTokens
    * List of Vpp tokens for this organization.
     *
     * @return array The vppTokens
     */
    public function getVppTokens()
    {
        if (array_key_exists("vppTokens", $this->_propDict)) {
           return $this->_propDict["vppTokens"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the vppTokens
    * List of Vpp tokens for this organization.
    *
    * @param VppToken $val The vppTokens
    *
    * @return DeviceAppManagement
    */
    public function setVppTokens($val)
    {
		$this->_propDict["vppTokens"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsManagementApp
    * Windows management app.
    *
    * @return WindowsManagementApp The windowsManagementApp
    */
    public function getWindowsManagementApp()
    {
        if (array_key_exists("windowsManagementApp", $this->_propDict)) {
            if (is_a($this->_propDict["windowsManagementApp"], "\Beta\Microsoft\Graph\Model\WindowsManagementApp")) {
                return $this->_propDict["windowsManagementApp"];
            } else {
                $this->_propDict["windowsManagementApp"] = new WindowsManagementApp($this->_propDict["windowsManagementApp"]);
                return $this->_propDict["windowsManagementApp"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsManagementApp
    * Windows management app.
    *
    * @param WindowsManagementApp $val The windowsManagementApp
    *
    * @return DeviceAppManagement
    */
    public function setWindowsManagementApp($val)
    {
        $this->_propDict["windowsManagementApp"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidManagedAppProtections
    * Android managed app policies.
     *
     * @return array The androidManagedAppProtections
     */
    public function getAndroidManagedAppProtections()
    {
        if (array_key_exists("androidManagedAppProtections", $this->_propDict)) {
           return $this->_propDict["androidManagedAppProtections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the androidManagedAppProtections
    * Android managed app policies.
    *
    * @param AndroidManagedAppProtection $val The androidManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setAndroidManagedAppProtections($val)
    {
		$this->_propDict["androidManagedAppProtections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the defaultManagedAppProtections
    * Default managed app policies.
     *
     * @return array The defaultManagedAppProtections
     */
    public function getDefaultManagedAppProtections()
    {
        if (array_key_exists("defaultManagedAppProtections", $this->_propDict)) {
           return $this->_propDict["defaultManagedAppProtections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the defaultManagedAppProtections
    * Default managed app policies.
    *
    * @param DefaultManagedAppProtection $val The defaultManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setDefaultManagedAppProtections($val)
    {
		$this->_propDict["defaultManagedAppProtections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosManagedAppProtections
    * iOS managed app policies.
     *
     * @return array The iosManagedAppProtections
     */
    public function getIosManagedAppProtections()
    {
        if (array_key_exists("iosManagedAppProtections", $this->_propDict)) {
           return $this->_propDict["iosManagedAppProtections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the iosManagedAppProtections
    * iOS managed app policies.
    *
    * @param IosManagedAppProtection $val The iosManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setIosManagedAppProtections($val)
    {
		$this->_propDict["iosManagedAppProtections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppPolicies
    * Managed app policies.
     *
     * @return array The managedAppPolicies
     */
    public function getManagedAppPolicies()
    {
        if (array_key_exists("managedAppPolicies", $this->_propDict)) {
           return $this->_propDict["managedAppPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedAppPolicies
    * Managed app policies.
    *
    * @param ManagedAppPolicy $val The managedAppPolicies
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppPolicies($val)
    {
		$this->_propDict["managedAppPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppRegistrations
    * The managed app registrations.
     *
     * @return array The managedAppRegistrations
     */
    public function getManagedAppRegistrations()
    {
        if (array_key_exists("managedAppRegistrations", $this->_propDict)) {
           return $this->_propDict["managedAppRegistrations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedAppRegistrations
    * The managed app registrations.
    *
    * @param ManagedAppRegistration $val The managedAppRegistrations
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppRegistrations($val)
    {
		$this->_propDict["managedAppRegistrations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppStatuses
    * The managed app statuses.
     *
     * @return array The managedAppStatuses
     */
    public function getManagedAppStatuses()
    {
        if (array_key_exists("managedAppStatuses", $this->_propDict)) {
           return $this->_propDict["managedAppStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedAppStatuses
    * The managed app statuses.
    *
    * @param ManagedAppStatus $val The managedAppStatuses
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppStatuses($val)
    {
		$this->_propDict["managedAppStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mdmWindowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are MDM enrolled.
     *
     * @return array The mdmWindowsInformationProtectionPolicies
     */
    public function getMdmWindowsInformationProtectionPolicies()
    {
        if (array_key_exists("mdmWindowsInformationProtectionPolicies", $this->_propDict)) {
           return $this->_propDict["mdmWindowsInformationProtectionPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mdmWindowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are MDM enrolled.
    *
    * @param MdmWindowsInformationProtectionPolicy $val The mdmWindowsInformationProtectionPolicies
    *
    * @return DeviceAppManagement
    */
    public function setMdmWindowsInformationProtectionPolicies($val)
    {
		$this->_propDict["mdmWindowsInformationProtectionPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the targetedManagedAppConfigurations
    * Targeted managed app configurations.
     *
     * @return array The targetedManagedAppConfigurations
     */
    public function getTargetedManagedAppConfigurations()
    {
        if (array_key_exists("targetedManagedAppConfigurations", $this->_propDict)) {
           return $this->_propDict["targetedManagedAppConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the targetedManagedAppConfigurations
    * Targeted managed app configurations.
    *
    * @param TargetedManagedAppConfiguration $val The targetedManagedAppConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setTargetedManagedAppConfigurations($val)
    {
		$this->_propDict["targetedManagedAppConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionDeviceRegistrations
    * Windows information protection device registrations that are not MDM enrolled.
     *
     * @return array The windowsInformationProtectionDeviceRegistrations
     */
    public function getWindowsInformationProtectionDeviceRegistrations()
    {
        if (array_key_exists("windowsInformationProtectionDeviceRegistrations", $this->_propDict)) {
           return $this->_propDict["windowsInformationProtectionDeviceRegistrations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsInformationProtectionDeviceRegistrations
    * Windows information protection device registrations that are not MDM enrolled.
    *
    * @param WindowsInformationProtectionDeviceRegistration $val The windowsInformationProtectionDeviceRegistrations
    *
    * @return DeviceAppManagement
    */
    public function setWindowsInformationProtectionDeviceRegistrations($val)
    {
		$this->_propDict["windowsInformationProtectionDeviceRegistrations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are not MDM enrolled.
     *
     * @return array The windowsInformationProtectionPolicies
     */
    public function getWindowsInformationProtectionPolicies()
    {
        if (array_key_exists("windowsInformationProtectionPolicies", $this->_propDict)) {
           return $this->_propDict["windowsInformationProtectionPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are not MDM enrolled.
    *
    * @param WindowsInformationProtectionPolicy $val The windowsInformationProtectionPolicies
    *
    * @return DeviceAppManagement
    */
    public function setWindowsInformationProtectionPolicies($val)
    {
		$this->_propDict["windowsInformationProtectionPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionWipeActions
    * Windows information protection wipe actions.
     *
     * @return array The windowsInformationProtectionWipeActions
     */
    public function getWindowsInformationProtectionWipeActions()
    {
        if (array_key_exists("windowsInformationProtectionWipeActions", $this->_propDict)) {
           return $this->_propDict["windowsInformationProtectionWipeActions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsInformationProtectionWipeActions
    * Windows information protection wipe actions.
    *
    * @param WindowsInformationProtectionWipeAction $val The windowsInformationProtectionWipeActions
    *
    * @return DeviceAppManagement
    */
    public function setWindowsInformationProtectionWipeActions($val)
    {
		$this->_propDict["windowsInformationProtectionWipeActions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceAppManagementTasks
    * Device app management tasks.
     *
     * @return array The deviceAppManagementTasks
     */
    public function getDeviceAppManagementTasks()
    {
        if (array_key_exists("deviceAppManagementTasks", $this->_propDict)) {
           return $this->_propDict["deviceAppManagementTasks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceAppManagementTasks
    * Device app management tasks.
    *
    * @param DeviceAppManagementTask $val The deviceAppManagementTasks
    *
    * @return DeviceAppManagement
    */
    public function setDeviceAppManagementTasks($val)
    {
		$this->_propDict["deviceAppManagementTasks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the wdacSupplementalPolicies
    * The collection of Windows Defender Application Control Supplemental Policies.
     *
     * @return array The wdacSupplementalPolicies
     */
    public function getWdacSupplementalPolicies()
    {
        if (array_key_exists("wdacSupplementalPolicies", $this->_propDict)) {
           return $this->_propDict["wdacSupplementalPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the wdacSupplementalPolicies
    * The collection of Windows Defender Application Control Supplemental Policies.
    *
    * @param WindowsDefenderApplicationControlSupplementalPolicy $val The wdacSupplementalPolicies
    *
    * @return DeviceAppManagement
    */
    public function setWdacSupplementalPolicies($val)
    {
		$this->_propDict["wdacSupplementalPolicies"] = $val;
        return $this;
    }
    
}
