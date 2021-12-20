<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedAppProtection File
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
* AndroidManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedAppProtection extends TargetedManagedAppProtection
{
    /**
    * Gets the allowedAndroidDeviceManufacturers
    * Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work.
    *
    * @return string The allowedAndroidDeviceManufacturers
    */
    public function getAllowedAndroidDeviceManufacturers()
    {
        if (array_key_exists("allowedAndroidDeviceManufacturers", $this->_propDict)) {
            return $this->_propDict["allowedAndroidDeviceManufacturers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedAndroidDeviceManufacturers
    * Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work.
    *
    * @param string $val The allowedAndroidDeviceManufacturers
    *
    * @return AndroidManagedAppProtection
    */
    public function setAllowedAndroidDeviceManufacturers($val)
    {
        $this->_propDict["allowedAndroidDeviceManufacturers"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowedAndroidDeviceModels
    * List of device models allowed, as a string, for the managed app to work.
    *
    * @return string The allowedAndroidDeviceModels
    */
    public function getAllowedAndroidDeviceModels()
    {
        if (array_key_exists("allowedAndroidDeviceModels", $this->_propDict)) {
            return $this->_propDict["allowedAndroidDeviceModels"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedAndroidDeviceModels
    * List of device models allowed, as a string, for the managed app to work.
    *
    * @param string $val The allowedAndroidDeviceModels
    *
    * @return AndroidManagedAppProtection
    */
    public function setAllowedAndroidDeviceModels($val)
    {
        $this->_propDict["allowedAndroidDeviceModels"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfAndroidDeviceManufacturerNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction The appActionIfAndroidDeviceManufacturerNotAllowed
    */
    public function getAppActionIfAndroidDeviceManufacturerNotAllowed()
    {
        if (array_key_exists("appActionIfAndroidDeviceManufacturerNotAllowed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"];
            } else {
                $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"]);
                return $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfAndroidDeviceManufacturerNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidDeviceManufacturerNotAllowed
    *
    * @return AndroidManagedAppProtection
    */
    public function setAppActionIfAndroidDeviceManufacturerNotAllowed($val)
    {
        $this->_propDict["appActionIfAndroidDeviceManufacturerNotAllowed"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfAndroidDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed.
    *
    * @return ManagedAppRemediationAction The appActionIfAndroidDeviceModelNotAllowed
    */
    public function getAppActionIfAndroidDeviceModelNotAllowed()
    {
        if (array_key_exists("appActionIfAndroidDeviceModelNotAllowed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidDeviceModelNotAllowed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfAndroidDeviceModelNotAllowed"];
            } else {
                $this->_propDict["appActionIfAndroidDeviceModelNotAllowed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidDeviceModelNotAllowed"]);
                return $this->_propDict["appActionIfAndroidDeviceModelNotAllowed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfAndroidDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidDeviceModelNotAllowed
    *
    * @return AndroidManagedAppProtection
    */
    public function setAppActionIfAndroidDeviceModelNotAllowed($val)
    {
        $this->_propDict["appActionIfAndroidDeviceModelNotAllowed"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfAndroidSafetyNetAppsVerificationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android App Verification requirment fails. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction The appActionIfAndroidSafetyNetAppsVerificationFailed
    */
    public function getAppActionIfAndroidSafetyNetAppsVerificationFailed()
    {
        if (array_key_exists("appActionIfAndroidSafetyNetAppsVerificationFailed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"];
            } else {
                $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"]);
                return $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfAndroidSafetyNetAppsVerificationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android App Verification requirment fails. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidSafetyNetAppsVerificationFailed
    *
    * @return AndroidManagedAppProtection
    */
    public function setAppActionIfAndroidSafetyNetAppsVerificationFailed($val)
    {
        $this->_propDict["appActionIfAndroidSafetyNetAppsVerificationFailed"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfAndroidSafetyNetDeviceAttestationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android SafetyNet Attestation requirment fails. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction The appActionIfAndroidSafetyNetDeviceAttestationFailed
    */
    public function getAppActionIfAndroidSafetyNetDeviceAttestationFailed()
    {
        if (array_key_exists("appActionIfAndroidSafetyNetDeviceAttestationFailed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"];
            } else {
                $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"]);
                return $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfAndroidSafetyNetDeviceAttestationFailed
    * Defines a managed app behavior, either warn or block, if the specified Android SafetyNet Attestation requirment fails. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfAndroidSafetyNetDeviceAttestationFailed
    *
    * @return AndroidManagedAppProtection
    */
    public function setAppActionIfAndroidSafetyNetDeviceAttestationFailed($val)
    {
        $this->_propDict["appActionIfAndroidSafetyNetDeviceAttestationFailed"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfDeviceLockNotSet
    * Defines a managed app behavior, either warn, block or wipe, if the screen lock is required on android device but is not set.
    *
    * @return ManagedAppRemediationAction The appActionIfDeviceLockNotSet
    */
    public function getAppActionIfDeviceLockNotSet()
    {
        if (array_key_exists("appActionIfDeviceLockNotSet", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfDeviceLockNotSet"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfDeviceLockNotSet"];
            } else {
                $this->_propDict["appActionIfDeviceLockNotSet"] = new ManagedAppRemediationAction($this->_propDict["appActionIfDeviceLockNotSet"]);
                return $this->_propDict["appActionIfDeviceLockNotSet"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfDeviceLockNotSet
    * Defines a managed app behavior, either warn, block or wipe, if the screen lock is required on android device but is not set.
    *
    * @param ManagedAppRemediationAction $val The appActionIfDeviceLockNotSet
    *
    * @return AndroidManagedAppProtection
    */
    public function setAppActionIfDeviceLockNotSet($val)
    {
        $this->_propDict["appActionIfDeviceLockNotSet"] = $val;
        return $this;
    }
    

     /** 
     * Gets the approvedKeyboards
    * If Keyboard Restriction is enabled, only keyboards in this approved list will be allowed. A key should be Android package id for a keyboard and value should be a friendly name
     *
     * @return array The approvedKeyboards
     */
    public function getApprovedKeyboards()
    {
        if (array_key_exists("approvedKeyboards", $this->_propDict)) {
           return $this->_propDict["approvedKeyboards"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the approvedKeyboards
    * If Keyboard Restriction is enabled, only keyboards in this approved list will be allowed. A key should be Android package id for a keyboard and value should be a friendly name
    *
    * @param KeyValuePair $val The approvedKeyboards
    *
    * @return AndroidManagedAppProtection
    */
    public function setApprovedKeyboards($val)
    {
		$this->_propDict["approvedKeyboards"] = $val;
        return $this;
    }
    
    /**
    * Gets the biometricAuthenticationBlocked
    * Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True.
    *
    * @return bool The biometricAuthenticationBlocked
    */
    public function getBiometricAuthenticationBlocked()
    {
        if (array_key_exists("biometricAuthenticationBlocked", $this->_propDict)) {
            return $this->_propDict["biometricAuthenticationBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the biometricAuthenticationBlocked
    * Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True.
    *
    * @param bool $val The biometricAuthenticationBlocked
    *
    * @return AndroidManagedAppProtection
    */
    public function setBiometricAuthenticationBlocked($val)
    {
        $this->_propDict["biometricAuthenticationBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the blockAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
    *
    * @return int The blockAfterCompanyPortalUpdateDeferralInDays
    */
    public function getBlockAfterCompanyPortalUpdateDeferralInDays()
    {
        if (array_key_exists("blockAfterCompanyPortalUpdateDeferralInDays", $this->_propDict)) {
            return $this->_propDict["blockAfterCompanyPortalUpdateDeferralInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
    *
    * @param int $val The blockAfterCompanyPortalUpdateDeferralInDays
    *
    * @return AndroidManagedAppProtection
    */
    public function setBlockAfterCompanyPortalUpdateDeferralInDays($val)
    {
        $this->_propDict["blockAfterCompanyPortalUpdateDeferralInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the customBrowserDisplayName
    * Friendly name of the preferred custom browser to open weblink on Android.
    *
    * @return string The customBrowserDisplayName
    */
    public function getCustomBrowserDisplayName()
    {
        if (array_key_exists("customBrowserDisplayName", $this->_propDict)) {
            return $this->_propDict["customBrowserDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customBrowserDisplayName
    * Friendly name of the preferred custom browser to open weblink on Android.
    *
    * @param string $val The customBrowserDisplayName
    *
    * @return AndroidManagedAppProtection
    */
    public function setCustomBrowserDisplayName($val)
    {
        $this->_propDict["customBrowserDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the customBrowserPackageId
    * Unique identifier of a custom browser to open weblink on Android.
    *
    * @return string The customBrowserPackageId
    */
    public function getCustomBrowserPackageId()
    {
        if (array_key_exists("customBrowserPackageId", $this->_propDict)) {
            return $this->_propDict["customBrowserPackageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customBrowserPackageId
    * Unique identifier of a custom browser to open weblink on Android.
    *
    * @param string $val The customBrowserPackageId
    *
    * @return AndroidManagedAppProtection
    */
    public function setCustomBrowserPackageId($val)
    {
        $this->_propDict["customBrowserPackageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the customDialerAppDisplayName
    * Friendly name of a custom dialer app to click-to-open a phone number on Android.
    *
    * @return string The customDialerAppDisplayName
    */
    public function getCustomDialerAppDisplayName()
    {
        if (array_key_exists("customDialerAppDisplayName", $this->_propDict)) {
            return $this->_propDict["customDialerAppDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customDialerAppDisplayName
    * Friendly name of a custom dialer app to click-to-open a phone number on Android.
    *
    * @param string $val The customDialerAppDisplayName
    *
    * @return AndroidManagedAppProtection
    */
    public function setCustomDialerAppDisplayName($val)
    {
        $this->_propDict["customDialerAppDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the customDialerAppPackageId
    * PackageId of a custom dialer app to click-to-open a phone number on Android.
    *
    * @return string The customDialerAppPackageId
    */
    public function getCustomDialerAppPackageId()
    {
        if (array_key_exists("customDialerAppPackageId", $this->_propDict)) {
            return $this->_propDict["customDialerAppPackageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customDialerAppPackageId
    * PackageId of a custom dialer app to click-to-open a phone number on Android.
    *
    * @param string $val The customDialerAppPackageId
    *
    * @return AndroidManagedAppProtection
    */
    public function setCustomDialerAppPackageId($val)
    {
        $this->_propDict["customDialerAppPackageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deployedAppCount
    * Count of apps to which the current policy is deployed.
    *
    * @return int The deployedAppCount
    */
    public function getDeployedAppCount()
    {
        if (array_key_exists("deployedAppCount", $this->_propDict)) {
            return $this->_propDict["deployedAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deployedAppCount
    * Count of apps to which the current policy is deployed.
    *
    * @param int $val The deployedAppCount
    *
    * @return AndroidManagedAppProtection
    */
    public function setDeployedAppCount($val)
    {
        $this->_propDict["deployedAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the deviceLockRequired
    * Defines if any kind of lock must be required on android device
    *
    * @return bool The deviceLockRequired
    */
    public function getDeviceLockRequired()
    {
        if (array_key_exists("deviceLockRequired", $this->_propDict)) {
            return $this->_propDict["deviceLockRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceLockRequired
    * Defines if any kind of lock must be required on android device
    *
    * @param bool $val The deviceLockRequired
    *
    * @return AndroidManagedAppProtection
    */
    public function setDeviceLockRequired($val)
    {
        $this->_propDict["deviceLockRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled
    * When this setting is enabled, app level encryption is disabled if device level encryption is enabled
    *
    * @return bool The disableAppEncryptionIfDeviceEncryptionIsEnabled
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled()
    {
        if (array_key_exists("disableAppEncryptionIfDeviceEncryptionIsEnabled", $this->_propDict)) {
            return $this->_propDict["disableAppEncryptionIfDeviceEncryptionIsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled
    * When this setting is enabled, app level encryption is disabled if device level encryption is enabled
    *
    * @param bool $val The disableAppEncryptionIfDeviceEncryptionIsEnabled
    *
    * @return AndroidManagedAppProtection
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled($val)
    {
        $this->_propDict["disableAppEncryptionIfDeviceEncryptionIsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the encryptAppData
    * Indicates whether application data for managed apps should be encrypted
    *
    * @return bool The encryptAppData
    */
    public function getEncryptAppData()
    {
        if (array_key_exists("encryptAppData", $this->_propDict)) {
            return $this->_propDict["encryptAppData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the encryptAppData
    * Indicates whether application data for managed apps should be encrypted
    *
    * @param bool $val The encryptAppData
    *
    * @return AndroidManagedAppProtection
    */
    public function setEncryptAppData($val)
    {
        $this->_propDict["encryptAppData"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the exemptedAppPackages
    * App packages in this list will be exempt from the policy and will be able to receive data from managed apps.
     *
     * @return array The exemptedAppPackages
     */
    public function getExemptedAppPackages()
    {
        if (array_key_exists("exemptedAppPackages", $this->_propDict)) {
           return $this->_propDict["exemptedAppPackages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exemptedAppPackages
    * App packages in this list will be exempt from the policy and will be able to receive data from managed apps.
    *
    * @param KeyValuePair $val The exemptedAppPackages
    *
    * @return AndroidManagedAppProtection
    */
    public function setExemptedAppPackages($val)
    {
		$this->_propDict["exemptedAppPackages"] = $val;
        return $this;
    }
    
    /**
    * Gets the keyboardsRestricted
    * Indicates if keyboard restriction is enabled. If enabled list of approved keyboards must be provided as well.
    *
    * @return bool The keyboardsRestricted
    */
    public function getKeyboardsRestricted()
    {
        if (array_key_exists("keyboardsRestricted", $this->_propDict)) {
            return $this->_propDict["keyboardsRestricted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardsRestricted
    * Indicates if keyboard restriction is enabled. If enabled list of approved keyboards must be provided as well.
    *
    * @param bool $val The keyboardsRestricted
    *
    * @return AndroidManagedAppProtection
    */
    public function setKeyboardsRestricted($val)
    {
        $this->_propDict["keyboardsRestricted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the minimumRequiredCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or app access will be blocked
    *
    * @return string The minimumRequiredCompanyPortalVersion
    */
    public function getMinimumRequiredCompanyPortalVersion()
    {
        if (array_key_exists("minimumRequiredCompanyPortalVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredCompanyPortalVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRequiredCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or app access will be blocked
    *
    * @param string $val The minimumRequiredCompanyPortalVersion
    *
    * @return AndroidManagedAppProtection
    */
    public function setMinimumRequiredCompanyPortalVersion($val)
    {
        $this->_propDict["minimumRequiredCompanyPortalVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumRequiredPatchVersion
    * Define the oldest required Android security patch level a user can have to gain secure access to the app.
    *
    * @return string The minimumRequiredPatchVersion
    */
    public function getMinimumRequiredPatchVersion()
    {
        if (array_key_exists("minimumRequiredPatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredPatchVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRequiredPatchVersion
    * Define the oldest required Android security patch level a user can have to gain secure access to the app.
    *
    * @param string $val The minimumRequiredPatchVersion
    *
    * @return AndroidManagedAppProtection
    */
    public function setMinimumRequiredPatchVersion($val)
    {
        $this->_propDict["minimumRequiredPatchVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWarningCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or the user will receive a warning
    *
    * @return string The minimumWarningCompanyPortalVersion
    */
    public function getMinimumWarningCompanyPortalVersion()
    {
        if (array_key_exists("minimumWarningCompanyPortalVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningCompanyPortalVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWarningCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or the user will receive a warning
    *
    * @param string $val The minimumWarningCompanyPortalVersion
    *
    * @return AndroidManagedAppProtection
    */
    public function setMinimumWarningCompanyPortalVersion($val)
    {
        $this->_propDict["minimumWarningCompanyPortalVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWarningPatchVersion
    * Define the oldest recommended Android security patch level a user can have for secure access to the app.
    *
    * @return string The minimumWarningPatchVersion
    */
    public function getMinimumWarningPatchVersion()
    {
        if (array_key_exists("minimumWarningPatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningPatchVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWarningPatchVersion
    * Define the oldest recommended Android security patch level a user can have for secure access to the app.
    *
    * @param string $val The minimumWarningPatchVersion
    *
    * @return AndroidManagedAppProtection
    */
    public function setMinimumWarningPatchVersion($val)
    {
        $this->_propDict["minimumWarningPatchVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWipeCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
    *
    * @return string The minimumWipeCompanyPortalVersion
    */
    public function getMinimumWipeCompanyPortalVersion()
    {
        if (array_key_exists("minimumWipeCompanyPortalVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeCompanyPortalVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWipeCompanyPortalVersion
    * Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
    *
    * @param string $val The minimumWipeCompanyPortalVersion
    *
    * @return AndroidManagedAppProtection
    */
    public function setMinimumWipeCompanyPortalVersion($val)
    {
        $this->_propDict["minimumWipeCompanyPortalVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWipePatchVersion
    * Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data.
    *
    * @return string The minimumWipePatchVersion
    */
    public function getMinimumWipePatchVersion()
    {
        if (array_key_exists("minimumWipePatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipePatchVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWipePatchVersion
    * Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data.
    *
    * @param string $val The minimumWipePatchVersion
    *
    * @return AndroidManagedAppProtection
    */
    public function setMinimumWipePatchVersion($val)
    {
        $this->_propDict["minimumWipePatchVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the requiredAndroidSafetyNetAppsVerificationType
    * Defines the Android SafetyNet Apps Verification requirement for a managed app to work. Possible values are: none, enabled.
    *
    * @return AndroidManagedAppSafetyNetAppsVerificationType The requiredAndroidSafetyNetAppsVerificationType
    */
    public function getRequiredAndroidSafetyNetAppsVerificationType()
    {
        if (array_key_exists("requiredAndroidSafetyNetAppsVerificationType", $this->_propDict)) {
            if (is_a($this->_propDict["requiredAndroidSafetyNetAppsVerificationType"], "\Beta\Microsoft\Graph\Model\AndroidManagedAppSafetyNetAppsVerificationType")) {
                return $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"];
            } else {
                $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"] = new AndroidManagedAppSafetyNetAppsVerificationType($this->_propDict["requiredAndroidSafetyNetAppsVerificationType"]);
                return $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requiredAndroidSafetyNetAppsVerificationType
    * Defines the Android SafetyNet Apps Verification requirement for a managed app to work. Possible values are: none, enabled.
    *
    * @param AndroidManagedAppSafetyNetAppsVerificationType $val The requiredAndroidSafetyNetAppsVerificationType
    *
    * @return AndroidManagedAppProtection
    */
    public function setRequiredAndroidSafetyNetAppsVerificationType($val)
    {
        $this->_propDict["requiredAndroidSafetyNetAppsVerificationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the requiredAndroidSafetyNetDeviceAttestationType
    * Defines the Android SafetyNet Device Attestation requirement for a managed app to work. Possible values are: none, basicIntegrity, basicIntegrityAndDeviceCertification.
    *
    * @return AndroidManagedAppSafetyNetDeviceAttestationType The requiredAndroidSafetyNetDeviceAttestationType
    */
    public function getRequiredAndroidSafetyNetDeviceAttestationType()
    {
        if (array_key_exists("requiredAndroidSafetyNetDeviceAttestationType", $this->_propDict)) {
            if (is_a($this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"], "\Beta\Microsoft\Graph\Model\AndroidManagedAppSafetyNetDeviceAttestationType")) {
                return $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"];
            } else {
                $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"] = new AndroidManagedAppSafetyNetDeviceAttestationType($this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"]);
                return $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requiredAndroidSafetyNetDeviceAttestationType
    * Defines the Android SafetyNet Device Attestation requirement for a managed app to work. Possible values are: none, basicIntegrity, basicIntegrityAndDeviceCertification.
    *
    * @param AndroidManagedAppSafetyNetDeviceAttestationType $val The requiredAndroidSafetyNetDeviceAttestationType
    *
    * @return AndroidManagedAppProtection
    */
    public function setRequiredAndroidSafetyNetDeviceAttestationType($val)
    {
        $this->_propDict["requiredAndroidSafetyNetDeviceAttestationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the requiredAndroidSafetyNetEvaluationType
    * Defines the Android SafetyNet evaluation type requirement for a managed app to work.
    *
    * @return AndroidManagedAppSafetyNetEvaluationType The requiredAndroidSafetyNetEvaluationType
    */
    public function getRequiredAndroidSafetyNetEvaluationType()
    {
        if (array_key_exists("requiredAndroidSafetyNetEvaluationType", $this->_propDict)) {
            if (is_a($this->_propDict["requiredAndroidSafetyNetEvaluationType"], "\Beta\Microsoft\Graph\Model\AndroidManagedAppSafetyNetEvaluationType")) {
                return $this->_propDict["requiredAndroidSafetyNetEvaluationType"];
            } else {
                $this->_propDict["requiredAndroidSafetyNetEvaluationType"] = new AndroidManagedAppSafetyNetEvaluationType($this->_propDict["requiredAndroidSafetyNetEvaluationType"]);
                return $this->_propDict["requiredAndroidSafetyNetEvaluationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requiredAndroidSafetyNetEvaluationType
    * Defines the Android SafetyNet evaluation type requirement for a managed app to work.
    *
    * @param AndroidManagedAppSafetyNetEvaluationType $val The requiredAndroidSafetyNetEvaluationType
    *
    * @return AndroidManagedAppProtection
    */
    public function setRequiredAndroidSafetyNetEvaluationType($val)
    {
        $this->_propDict["requiredAndroidSafetyNetEvaluationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the screenCaptureBlocked
    * Indicates whether a managed user can take screen captures of managed apps
    *
    * @return bool The screenCaptureBlocked
    */
    public function getScreenCaptureBlocked()
    {
        if (array_key_exists("screenCaptureBlocked", $this->_propDict)) {
            return $this->_propDict["screenCaptureBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the screenCaptureBlocked
    * Indicates whether a managed user can take screen captures of managed apps
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return AndroidManagedAppProtection
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the warnAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
    *
    * @return int The warnAfterCompanyPortalUpdateDeferralInDays
    */
    public function getWarnAfterCompanyPortalUpdateDeferralInDays()
    {
        if (array_key_exists("warnAfterCompanyPortalUpdateDeferralInDays", $this->_propDict)) {
            return $this->_propDict["warnAfterCompanyPortalUpdateDeferralInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the warnAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
    *
    * @param int $val The warnAfterCompanyPortalUpdateDeferralInDays
    *
    * @return AndroidManagedAppProtection
    */
    public function setWarnAfterCompanyPortalUpdateDeferralInDays($val)
    {
        $this->_propDict["warnAfterCompanyPortalUpdateDeferralInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the wipeAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
    *
    * @return int The wipeAfterCompanyPortalUpdateDeferralInDays
    */
    public function getWipeAfterCompanyPortalUpdateDeferralInDays()
    {
        if (array_key_exists("wipeAfterCompanyPortalUpdateDeferralInDays", $this->_propDict)) {
            return $this->_propDict["wipeAfterCompanyPortalUpdateDeferralInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wipeAfterCompanyPortalUpdateDeferralInDays
    * Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
    *
    * @param int $val The wipeAfterCompanyPortalUpdateDeferralInDays
    *
    * @return AndroidManagedAppProtection
    */
    public function setWipeAfterCompanyPortalUpdateDeferralInDays($val)
    {
        $this->_propDict["wipeAfterCompanyPortalUpdateDeferralInDays"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the apps
    * List of apps to which the policy is deployed.
     *
     * @return array The apps
     */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
           return $this->_propDict["apps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the apps
    * List of apps to which the policy is deployed.
    *
    * @param ManagedMobileApp $val The apps
    *
    * @return AndroidManagedAppProtection
    */
    public function setApps($val)
    {
		$this->_propDict["apps"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @return ManagedAppPolicyDeploymentSummary The deploymentSummary
    */
    public function getDeploymentSummary()
    {
        if (array_key_exists("deploymentSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentSummary"], "\Beta\Microsoft\Graph\Model\ManagedAppPolicyDeploymentSummary")) {
                return $this->_propDict["deploymentSummary"];
            } else {
                $this->_propDict["deploymentSummary"] = new ManagedAppPolicyDeploymentSummary($this->_propDict["deploymentSummary"]);
                return $this->_propDict["deploymentSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @param ManagedAppPolicyDeploymentSummary $val The deploymentSummary
    *
    * @return AndroidManagedAppProtection
    */
    public function setDeploymentSummary($val)
    {
        $this->_propDict["deploymentSummary"] = $val;
        return $this;
    }
    
}
