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
namespace Microsoft\Graph\Model;

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
    
}
