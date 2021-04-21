<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidGeneralDeviceConfiguration File
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
* AndroidGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidGeneralDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the appsBlockClipboardSharing
    * Indicates whether or not to block clipboard sharing to copy and paste between applications.
    *
    * @return bool The appsBlockClipboardSharing
    */
    public function getAppsBlockClipboardSharing()
    {
        if (array_key_exists("appsBlockClipboardSharing", $this->_propDict)) {
            return $this->_propDict["appsBlockClipboardSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appsBlockClipboardSharing
    * Indicates whether or not to block clipboard sharing to copy and paste between applications.
    *
    * @param bool $val The appsBlockClipboardSharing
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsBlockClipboardSharing($val)
    {
        $this->_propDict["appsBlockClipboardSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appsBlockCopyPaste
    * Indicates whether or not to block copy and paste within applications.
    *
    * @return bool The appsBlockCopyPaste
    */
    public function getAppsBlockCopyPaste()
    {
        if (array_key_exists("appsBlockCopyPaste", $this->_propDict)) {
            return $this->_propDict["appsBlockCopyPaste"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appsBlockCopyPaste
    * Indicates whether or not to block copy and paste within applications.
    *
    * @param bool $val The appsBlockCopyPaste
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsBlockCopyPaste($val)
    {
        $this->_propDict["appsBlockCopyPaste"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appsBlockYouTube
    * Indicates whether or not to block the YouTube app.
    *
    * @return bool The appsBlockYouTube
    */
    public function getAppsBlockYouTube()
    {
        if (array_key_exists("appsBlockYouTube", $this->_propDict)) {
            return $this->_propDict["appsBlockYouTube"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appsBlockYouTube
    * Indicates whether or not to block the YouTube app.
    *
    * @param bool $val The appsBlockYouTube
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsBlockYouTube($val)
    {
        $this->_propDict["appsBlockYouTube"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the appsHideList
    * List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements.
     *
     * @return array The appsHideList
     */
    public function getAppsHideList()
    {
        if (array_key_exists("appsHideList", $this->_propDict)) {
           return $this->_propDict["appsHideList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsHideList
    * List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem $val The appsHideList
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsHideList($val)
    {
		$this->_propDict["appsHideList"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appsInstallAllowList
    * List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements.
     *
     * @return array The appsInstallAllowList
     */
    public function getAppsInstallAllowList()
    {
        if (array_key_exists("appsInstallAllowList", $this->_propDict)) {
           return $this->_propDict["appsInstallAllowList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsInstallAllowList
    * List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem $val The appsInstallAllowList
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsInstallAllowList($val)
    {
		$this->_propDict["appsInstallAllowList"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appsLaunchBlockList
    * List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements.
     *
     * @return array The appsLaunchBlockList
     */
    public function getAppsLaunchBlockList()
    {
        if (array_key_exists("appsLaunchBlockList", $this->_propDict)) {
           return $this->_propDict["appsLaunchBlockList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsLaunchBlockList
    * List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem $val The appsLaunchBlockList
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setAppsLaunchBlockList($val)
    {
		$this->_propDict["appsLaunchBlockList"] = $val;
        return $this;
    }
    
    /**
    * Gets the bluetoothBlocked
    * Indicates whether or not to block Bluetooth.
    *
    * @return bool The bluetoothBlocked
    */
    public function getBluetoothBlocked()
    {
        if (array_key_exists("bluetoothBlocked", $this->_propDict)) {
            return $this->_propDict["bluetoothBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothBlocked
    * Indicates whether or not to block Bluetooth.
    *
    * @param bool $val The bluetoothBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setBluetoothBlocked($val)
    {
        $this->_propDict["bluetoothBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cameraBlocked
    * Indicates whether or not to block the use of the camera.
    *
    * @return bool The cameraBlocked
    */
    public function getCameraBlocked()
    {
        if (array_key_exists("cameraBlocked", $this->_propDict)) {
            return $this->_propDict["cameraBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cameraBlocked
    * Indicates whether or not to block the use of the camera.
    *
    * @param bool $val The cameraBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockDataRoaming
    * Indicates whether or not to block data roaming.
    *
    * @return bool The cellularBlockDataRoaming
    */
    public function getCellularBlockDataRoaming()
    {
        if (array_key_exists("cellularBlockDataRoaming", $this->_propDict)) {
            return $this->_propDict["cellularBlockDataRoaming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockDataRoaming
    * Indicates whether or not to block data roaming.
    *
    * @param bool $val The cellularBlockDataRoaming
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCellularBlockDataRoaming($val)
    {
        $this->_propDict["cellularBlockDataRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockMessaging
    * Indicates whether or not to block SMS/MMS messaging.
    *
    * @return bool The cellularBlockMessaging
    */
    public function getCellularBlockMessaging()
    {
        if (array_key_exists("cellularBlockMessaging", $this->_propDict)) {
            return $this->_propDict["cellularBlockMessaging"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockMessaging
    * Indicates whether or not to block SMS/MMS messaging.
    *
    * @param bool $val The cellularBlockMessaging
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCellularBlockMessaging($val)
    {
        $this->_propDict["cellularBlockMessaging"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockVoiceRoaming
    * Indicates whether or not to block voice roaming.
    *
    * @return bool The cellularBlockVoiceRoaming
    */
    public function getCellularBlockVoiceRoaming()
    {
        if (array_key_exists("cellularBlockVoiceRoaming", $this->_propDict)) {
            return $this->_propDict["cellularBlockVoiceRoaming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockVoiceRoaming
    * Indicates whether or not to block voice roaming.
    *
    * @param bool $val The cellularBlockVoiceRoaming
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCellularBlockVoiceRoaming($val)
    {
        $this->_propDict["cellularBlockVoiceRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockWiFiTethering
    * Indicates whether or not to block syncing Wi-Fi tethering.
    *
    * @return bool The cellularBlockWiFiTethering
    */
    public function getCellularBlockWiFiTethering()
    {
        if (array_key_exists("cellularBlockWiFiTethering", $this->_propDict)) {
            return $this->_propDict["cellularBlockWiFiTethering"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockWiFiTethering
    * Indicates whether or not to block syncing Wi-Fi tethering.
    *
    * @param bool $val The cellularBlockWiFiTethering
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCellularBlockWiFiTethering($val)
    {
        $this->_propDict["cellularBlockWiFiTethering"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the compliantAppListType
    * Type of list that is in the CompliantAppsList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
    *
    * @return AppListType The compliantAppListType
    */
    public function getCompliantAppListType()
    {
        if (array_key_exists("compliantAppListType", $this->_propDict)) {
            if (is_a($this->_propDict["compliantAppListType"], "\Microsoft\Graph\Model\AppListType")) {
                return $this->_propDict["compliantAppListType"];
            } else {
                $this->_propDict["compliantAppListType"] = new AppListType($this->_propDict["compliantAppListType"]);
                return $this->_propDict["compliantAppListType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the compliantAppListType
    * Type of list that is in the CompliantAppsList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
    *
    * @param AppListType $val The compliantAppListType
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCompliantAppListType($val)
    {
        $this->_propDict["compliantAppListType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the compliantAppsList
    * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     *
     * @return array The compliantAppsList
     */
    public function getCompliantAppsList()
    {
        if (array_key_exists("compliantAppsList", $this->_propDict)) {
           return $this->_propDict["compliantAppsList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the compliantAppsList
    * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
    *
    * @param AppListItem $val The compliantAppsList
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setCompliantAppsList($val)
    {
		$this->_propDict["compliantAppsList"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceSharingAllowed
    * Indicates whether or not to allow device sharing mode.
    *
    * @return bool The deviceSharingAllowed
    */
    public function getDeviceSharingAllowed()
    {
        if (array_key_exists("deviceSharingAllowed", $this->_propDict)) {
            return $this->_propDict["deviceSharingAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceSharingAllowed
    * Indicates whether or not to allow device sharing mode.
    *
    * @param bool $val The deviceSharingAllowed
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setDeviceSharingAllowed($val)
    {
        $this->_propDict["deviceSharingAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the diagnosticDataBlockSubmission
    * Indicates whether or not to block diagnostic data submission.
    *
    * @return bool The diagnosticDataBlockSubmission
    */
    public function getDiagnosticDataBlockSubmission()
    {
        if (array_key_exists("diagnosticDataBlockSubmission", $this->_propDict)) {
            return $this->_propDict["diagnosticDataBlockSubmission"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the diagnosticDataBlockSubmission
    * Indicates whether or not to block diagnostic data submission.
    *
    * @param bool $val The diagnosticDataBlockSubmission
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setDiagnosticDataBlockSubmission($val)
    {
        $this->_propDict["diagnosticDataBlockSubmission"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the factoryResetBlocked
    * Indicates whether or not to block user performing a factory reset.
    *
    * @return bool The factoryResetBlocked
    */
    public function getFactoryResetBlocked()
    {
        if (array_key_exists("factoryResetBlocked", $this->_propDict)) {
            return $this->_propDict["factoryResetBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the factoryResetBlocked
    * Indicates whether or not to block user performing a factory reset.
    *
    * @param bool $val The factoryResetBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setFactoryResetBlocked($val)
    {
        $this->_propDict["factoryResetBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the googleAccountBlockAutoSync
    * Indicates whether or not to block Google account auto sync.
    *
    * @return bool The googleAccountBlockAutoSync
    */
    public function getGoogleAccountBlockAutoSync()
    {
        if (array_key_exists("googleAccountBlockAutoSync", $this->_propDict)) {
            return $this->_propDict["googleAccountBlockAutoSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the googleAccountBlockAutoSync
    * Indicates whether or not to block Google account auto sync.
    *
    * @param bool $val The googleAccountBlockAutoSync
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setGoogleAccountBlockAutoSync($val)
    {
        $this->_propDict["googleAccountBlockAutoSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the googlePlayStoreBlocked
    * Indicates whether or not to block the Google Play store.
    *
    * @return bool The googlePlayStoreBlocked
    */
    public function getGooglePlayStoreBlocked()
    {
        if (array_key_exists("googlePlayStoreBlocked", $this->_propDict)) {
            return $this->_propDict["googlePlayStoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the googlePlayStoreBlocked
    * Indicates whether or not to block the Google Play store.
    *
    * @param bool $val The googlePlayStoreBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setGooglePlayStoreBlocked($val)
    {
        $this->_propDict["googlePlayStoreBlocked"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the kioskModeApps
    * A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *
     * @return array The kioskModeApps
     */
    public function getKioskModeApps()
    {
        if (array_key_exists("kioskModeApps", $this->_propDict)) {
           return $this->_propDict["kioskModeApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the kioskModeApps
    * A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem $val The kioskModeApps
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setKioskModeApps($val)
    {
		$this->_propDict["kioskModeApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskModeBlockSleepButton
    * Indicates whether or not to block the screen sleep button while in Kiosk Mode.
    *
    * @return bool The kioskModeBlockSleepButton
    */
    public function getKioskModeBlockSleepButton()
    {
        if (array_key_exists("kioskModeBlockSleepButton", $this->_propDict)) {
            return $this->_propDict["kioskModeBlockSleepButton"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeBlockSleepButton
    * Indicates whether or not to block the screen sleep button while in Kiosk Mode.
    *
    * @param bool $val The kioskModeBlockSleepButton
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setKioskModeBlockSleepButton($val)
    {
        $this->_propDict["kioskModeBlockSleepButton"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeBlockVolumeButtons
    * Indicates whether or not to block the volume buttons while in Kiosk Mode.
    *
    * @return bool The kioskModeBlockVolumeButtons
    */
    public function getKioskModeBlockVolumeButtons()
    {
        if (array_key_exists("kioskModeBlockVolumeButtons", $this->_propDict)) {
            return $this->_propDict["kioskModeBlockVolumeButtons"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeBlockVolumeButtons
    * Indicates whether or not to block the volume buttons while in Kiosk Mode.
    *
    * @param bool $val The kioskModeBlockVolumeButtons
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setKioskModeBlockVolumeButtons($val)
    {
        $this->_propDict["kioskModeBlockVolumeButtons"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the locationServicesBlocked
    * Indicates whether or not to block location services.
    *
    * @return bool The locationServicesBlocked
    */
    public function getLocationServicesBlocked()
    {
        if (array_key_exists("locationServicesBlocked", $this->_propDict)) {
            return $this->_propDict["locationServicesBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locationServicesBlocked
    * Indicates whether or not to block location services.
    *
    * @param bool $val The locationServicesBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setLocationServicesBlocked($val)
    {
        $this->_propDict["locationServicesBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the nfcBlocked
    * Indicates whether or not to block Near-Field Communication.
    *
    * @return bool The nfcBlocked
    */
    public function getNfcBlocked()
    {
        if (array_key_exists("nfcBlocked", $this->_propDict)) {
            return $this->_propDict["nfcBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nfcBlocked
    * Indicates whether or not to block Near-Field Communication.
    *
    * @param bool $val The nfcBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setNfcBlocked($val)
    {
        $this->_propDict["nfcBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockFingerprintUnlock
    * Indicates whether or not to block fingerprint unlock.
    *
    * @return bool The passwordBlockFingerprintUnlock
    */
    public function getPasswordBlockFingerprintUnlock()
    {
        if (array_key_exists("passwordBlockFingerprintUnlock", $this->_propDict)) {
            return $this->_propDict["passwordBlockFingerprintUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockFingerprintUnlock
    * Indicates whether or not to block fingerprint unlock.
    *
    * @param bool $val The passwordBlockFingerprintUnlock
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordBlockFingerprintUnlock($val)
    {
        $this->_propDict["passwordBlockFingerprintUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockTrustAgents
    * Indicates whether or not to block Smart Lock and other trust agents.
    *
    * @return bool The passwordBlockTrustAgents
    */
    public function getPasswordBlockTrustAgents()
    {
        if (array_key_exists("passwordBlockTrustAgents", $this->_propDict)) {
            return $this->_propDict["passwordBlockTrustAgents"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockTrustAgents
    * Indicates whether or not to block Smart Lock and other trust agents.
    *
    * @param bool $val The passwordBlockTrustAgents
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordBlockTrustAgents($val)
    {
        $this->_propDict["passwordBlockTrustAgents"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    * Number of days before the password expires. Valid values 1 to 365
    *
    * @return int The passwordExpirationDays
    */
    public function getPasswordExpirationDays()
    {
        if (array_key_exists("passwordExpirationDays", $this->_propDict)) {
            return $this->_propDict["passwordExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordExpirationDays
    * Number of days before the password expires. Valid values 1 to 365
    *
    * @param int $val The passwordExpirationDays
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    * Minimum length of passwords. Valid values 4 to 16
    *
    * @return int The passwordMinimumLength
    */
    public function getPasswordMinimumLength()
    {
        if (array_key_exists("passwordMinimumLength", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumLength
    * Minimum length of passwords. Valid values 4 to 16
    *
    * @param int $val The passwordMinimumLength
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @return int The passwordMinutesOfInactivityBeforeScreenTimeout
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    * Number of previous passwords to block. Valid values 0 to 24
    *
    * @return int The passwordPreviousPasswordBlockCount
    */
    public function getPasswordPreviousPasswordBlockCount()
    {
        if (array_key_exists("passwordPreviousPasswordBlockCount", $this->_propDict)) {
            return $this->_propDict["passwordPreviousPasswordBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordPreviousPasswordBlockCount
    * Number of previous passwords to block. Valid values 0 to 24
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequired
    * Indicates whether or not to require a password.
    *
    * @return bool The passwordRequired
    */
    public function getPasswordRequired()
    {
        if (array_key_exists("passwordRequired", $this->_propDict)) {
            return $this->_propDict["passwordRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordRequired
    * Indicates whether or not to require a password.
    *
    * @param bool $val The passwordRequired
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    * Type of password that is required. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
    *
    * @return AndroidRequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "\Microsoft\Graph\Model\AndroidRequiredPasswordType")) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new AndroidRequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordRequiredType
    * Type of password that is required. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
    *
    * @param AndroidRequiredPasswordType $val The passwordRequiredType
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordSignInFailureCountBeforeFactoryReset
    * Number of sign in failures allowed before factory reset. Valid values 1 to 16
    *
    * @return int The passwordSignInFailureCountBeforeFactoryReset
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset()
    {
        if (array_key_exists("passwordSignInFailureCountBeforeFactoryReset", $this->_propDict)) {
            return $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordSignInFailureCountBeforeFactoryReset
    * Number of sign in failures allowed before factory reset. Valid values 1 to 16
    *
    * @param int $val The passwordSignInFailureCountBeforeFactoryReset
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the powerOffBlocked
    * Indicates whether or not to block powering off the device.
    *
    * @return bool The powerOffBlocked
    */
    public function getPowerOffBlocked()
    {
        if (array_key_exists("powerOffBlocked", $this->_propDict)) {
            return $this->_propDict["powerOffBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the powerOffBlocked
    * Indicates whether or not to block powering off the device.
    *
    * @param bool $val The powerOffBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setPowerOffBlocked($val)
    {
        $this->_propDict["powerOffBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the screenCaptureBlocked
    * Indicates whether or not to block screenshots.
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
    * Indicates whether or not to block screenshots.
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireVerifyApps
    * Require the Android Verify apps feature is turned on.
    *
    * @return bool The securityRequireVerifyApps
    */
    public function getSecurityRequireVerifyApps()
    {
        if (array_key_exists("securityRequireVerifyApps", $this->_propDict)) {
            return $this->_propDict["securityRequireVerifyApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireVerifyApps
    * Require the Android Verify apps feature is turned on.
    *
    * @param bool $val The securityRequireVerifyApps
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setSecurityRequireVerifyApps($val)
    {
        $this->_propDict["securityRequireVerifyApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageBlockGoogleBackup
    * Indicates whether or not to block Google Backup.
    *
    * @return bool The storageBlockGoogleBackup
    */
    public function getStorageBlockGoogleBackup()
    {
        if (array_key_exists("storageBlockGoogleBackup", $this->_propDict)) {
            return $this->_propDict["storageBlockGoogleBackup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageBlockGoogleBackup
    * Indicates whether or not to block Google Backup.
    *
    * @param bool $val The storageBlockGoogleBackup
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setStorageBlockGoogleBackup($val)
    {
        $this->_propDict["storageBlockGoogleBackup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageBlockRemovableStorage
    * Indicates whether or not to block removable storage usage.
    *
    * @return bool The storageBlockRemovableStorage
    */
    public function getStorageBlockRemovableStorage()
    {
        if (array_key_exists("storageBlockRemovableStorage", $this->_propDict)) {
            return $this->_propDict["storageBlockRemovableStorage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageBlockRemovableStorage
    * Indicates whether or not to block removable storage usage.
    *
    * @param bool $val The storageBlockRemovableStorage
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setStorageBlockRemovableStorage($val)
    {
        $this->_propDict["storageBlockRemovableStorage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireDeviceEncryption
    * Indicates whether or not to require device encryption.
    *
    * @return bool The storageRequireDeviceEncryption
    */
    public function getStorageRequireDeviceEncryption()
    {
        if (array_key_exists("storageRequireDeviceEncryption", $this->_propDict)) {
            return $this->_propDict["storageRequireDeviceEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRequireDeviceEncryption
    * Indicates whether or not to require device encryption.
    *
    * @param bool $val The storageRequireDeviceEncryption
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setStorageRequireDeviceEncryption($val)
    {
        $this->_propDict["storageRequireDeviceEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireRemovableStorageEncryption
    * Indicates whether or not to require removable storage encryption.
    *
    * @return bool The storageRequireRemovableStorageEncryption
    */
    public function getStorageRequireRemovableStorageEncryption()
    {
        if (array_key_exists("storageRequireRemovableStorageEncryption", $this->_propDict)) {
            return $this->_propDict["storageRequireRemovableStorageEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRequireRemovableStorageEncryption
    * Indicates whether or not to require removable storage encryption.
    *
    * @param bool $val The storageRequireRemovableStorageEncryption
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setStorageRequireRemovableStorageEncryption($val)
    {
        $this->_propDict["storageRequireRemovableStorageEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the voiceAssistantBlocked
    * Indicates whether or not to block the use of the Voice Assistant.
    *
    * @return bool The voiceAssistantBlocked
    */
    public function getVoiceAssistantBlocked()
    {
        if (array_key_exists("voiceAssistantBlocked", $this->_propDict)) {
            return $this->_propDict["voiceAssistantBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the voiceAssistantBlocked
    * Indicates whether or not to block the use of the Voice Assistant.
    *
    * @param bool $val The voiceAssistantBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setVoiceAssistantBlocked($val)
    {
        $this->_propDict["voiceAssistantBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the voiceDialingBlocked
    * Indicates whether or not to block voice dialing.
    *
    * @return bool The voiceDialingBlocked
    */
    public function getVoiceDialingBlocked()
    {
        if (array_key_exists("voiceDialingBlocked", $this->_propDict)) {
            return $this->_propDict["voiceDialingBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the voiceDialingBlocked
    * Indicates whether or not to block voice dialing.
    *
    * @param bool $val The voiceDialingBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setVoiceDialingBlocked($val)
    {
        $this->_propDict["voiceDialingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserBlockAutofill
    * Indicates whether or not to block the web browser's auto fill feature.
    *
    * @return bool The webBrowserBlockAutofill
    */
    public function getWebBrowserBlockAutofill()
    {
        if (array_key_exists("webBrowserBlockAutofill", $this->_propDict)) {
            return $this->_propDict["webBrowserBlockAutofill"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webBrowserBlockAutofill
    * Indicates whether or not to block the web browser's auto fill feature.
    *
    * @param bool $val The webBrowserBlockAutofill
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserBlockAutofill($val)
    {
        $this->_propDict["webBrowserBlockAutofill"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserBlocked
    * Indicates whether or not to block the web browser.
    *
    * @return bool The webBrowserBlocked
    */
    public function getWebBrowserBlocked()
    {
        if (array_key_exists("webBrowserBlocked", $this->_propDict)) {
            return $this->_propDict["webBrowserBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webBrowserBlocked
    * Indicates whether or not to block the web browser.
    *
    * @param bool $val The webBrowserBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserBlocked($val)
    {
        $this->_propDict["webBrowserBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserBlockJavaScript
    * Indicates whether or not to block JavaScript within the web browser.
    *
    * @return bool The webBrowserBlockJavaScript
    */
    public function getWebBrowserBlockJavaScript()
    {
        if (array_key_exists("webBrowserBlockJavaScript", $this->_propDict)) {
            return $this->_propDict["webBrowserBlockJavaScript"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webBrowserBlockJavaScript
    * Indicates whether or not to block JavaScript within the web browser.
    *
    * @param bool $val The webBrowserBlockJavaScript
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserBlockJavaScript($val)
    {
        $this->_propDict["webBrowserBlockJavaScript"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserBlockPopups
    * Indicates whether or not to block popups within the web browser.
    *
    * @return bool The webBrowserBlockPopups
    */
    public function getWebBrowserBlockPopups()
    {
        if (array_key_exists("webBrowserBlockPopups", $this->_propDict)) {
            return $this->_propDict["webBrowserBlockPopups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webBrowserBlockPopups
    * Indicates whether or not to block popups within the web browser.
    *
    * @param bool $val The webBrowserBlockPopups
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserBlockPopups($val)
    {
        $this->_propDict["webBrowserBlockPopups"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webBrowserCookieSettings
    * Cookie settings within the web browser. Possible values are: browserDefault, blockAlways, allowCurrentWebSite, allowFromWebsitesVisited, allowAlways.
    *
    * @return WebBrowserCookieSettings The webBrowserCookieSettings
    */
    public function getWebBrowserCookieSettings()
    {
        if (array_key_exists("webBrowserCookieSettings", $this->_propDict)) {
            if (is_a($this->_propDict["webBrowserCookieSettings"], "\Microsoft\Graph\Model\WebBrowserCookieSettings")) {
                return $this->_propDict["webBrowserCookieSettings"];
            } else {
                $this->_propDict["webBrowserCookieSettings"] = new WebBrowserCookieSettings($this->_propDict["webBrowserCookieSettings"]);
                return $this->_propDict["webBrowserCookieSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the webBrowserCookieSettings
    * Cookie settings within the web browser. Possible values are: browserDefault, blockAlways, allowCurrentWebSite, allowFromWebsitesVisited, allowAlways.
    *
    * @param WebBrowserCookieSettings $val The webBrowserCookieSettings
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWebBrowserCookieSettings($val)
    {
        $this->_propDict["webBrowserCookieSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the wiFiBlocked
    * Indicates whether or not to block syncing Wi-Fi.
    *
    * @return bool The wiFiBlocked
    */
    public function getWiFiBlocked()
    {
        if (array_key_exists("wiFiBlocked", $this->_propDict)) {
            return $this->_propDict["wiFiBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wiFiBlocked
    * Indicates whether or not to block syncing Wi-Fi.
    *
    * @param bool $val The wiFiBlocked
    *
    * @return AndroidGeneralDeviceConfiguration
    */
    public function setWiFiBlocked($val)
    {
        $this->_propDict["wiFiBlocked"] = boolval($val);
        return $this;
    }
    
}
