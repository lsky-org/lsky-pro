<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosGeneralDeviceConfiguration File
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
* IosGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosGeneralDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountBlockModification
    * Indicates whether or not to allow account modification when the device is in supervised mode.
    *
    * @return bool The accountBlockModification
    */
    public function getAccountBlockModification()
    {
        if (array_key_exists("accountBlockModification", $this->_propDict)) {
            return $this->_propDict["accountBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountBlockModification
    * Indicates whether or not to allow account modification when the device is in supervised mode.
    *
    * @param bool $val The accountBlockModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAccountBlockModification($val)
    {
        $this->_propDict["accountBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the activationLockAllowWhenSupervised
    * Indicates whether or not to allow activation lock when the device is in the supervised mode.
    *
    * @return bool The activationLockAllowWhenSupervised
    */
    public function getActivationLockAllowWhenSupervised()
    {
        if (array_key_exists("activationLockAllowWhenSupervised", $this->_propDict)) {
            return $this->_propDict["activationLockAllowWhenSupervised"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activationLockAllowWhenSupervised
    * Indicates whether or not to allow activation lock when the device is in the supervised mode.
    *
    * @param bool $val The activationLockAllowWhenSupervised
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setActivationLockAllowWhenSupervised($val)
    {
        $this->_propDict["activationLockAllowWhenSupervised"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airDropBlocked
    * Indicates whether or not to allow AirDrop when the device is in supervised mode.
    *
    * @return bool The airDropBlocked
    */
    public function getAirDropBlocked()
    {
        if (array_key_exists("airDropBlocked", $this->_propDict)) {
            return $this->_propDict["airDropBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airDropBlocked
    * Indicates whether or not to allow AirDrop when the device is in supervised mode.
    *
    * @param bool $val The airDropBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAirDropBlocked($val)
    {
        $this->_propDict["airDropBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airDropForceUnmanagedDropTarget
    * Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later).
    *
    * @return bool The airDropForceUnmanagedDropTarget
    */
    public function getAirDropForceUnmanagedDropTarget()
    {
        if (array_key_exists("airDropForceUnmanagedDropTarget", $this->_propDict)) {
            return $this->_propDict["airDropForceUnmanagedDropTarget"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airDropForceUnmanagedDropTarget
    * Indicates whether or not to cause AirDrop to be considered an unmanaged drop target (iOS 9.0 and later).
    *
    * @param bool $val The airDropForceUnmanagedDropTarget
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAirDropForceUnmanagedDropTarget($val)
    {
        $this->_propDict["airDropForceUnmanagedDropTarget"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airPlayForcePairingPasswordForOutgoingRequests
    * Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password.
    *
    * @return bool The airPlayForcePairingPasswordForOutgoingRequests
    */
    public function getAirPlayForcePairingPasswordForOutgoingRequests()
    {
        if (array_key_exists("airPlayForcePairingPasswordForOutgoingRequests", $this->_propDict)) {
            return $this->_propDict["airPlayForcePairingPasswordForOutgoingRequests"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airPlayForcePairingPasswordForOutgoingRequests
    * Indicates whether or not to enforce all devices receiving AirPlay requests from this device to use a pairing password.
    *
    * @param bool $val The airPlayForcePairingPasswordForOutgoingRequests
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAirPlayForcePairingPasswordForOutgoingRequests($val)
    {
        $this->_propDict["airPlayForcePairingPasswordForOutgoingRequests"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appleNewsBlocked
    * Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later).
    *
    * @return bool The appleNewsBlocked
    */
    public function getAppleNewsBlocked()
    {
        if (array_key_exists("appleNewsBlocked", $this->_propDict)) {
            return $this->_propDict["appleNewsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleNewsBlocked
    * Indicates whether or not to block the user from using News when the device is in supervised mode (iOS 9.0 and later).
    *
    * @param bool $val The appleNewsBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppleNewsBlocked($val)
    {
        $this->_propDict["appleNewsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appleWatchBlockPairing
    * Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later).
    *
    * @return bool The appleWatchBlockPairing
    */
    public function getAppleWatchBlockPairing()
    {
        if (array_key_exists("appleWatchBlockPairing", $this->_propDict)) {
            return $this->_propDict["appleWatchBlockPairing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleWatchBlockPairing
    * Indicates whether or not to allow Apple Watch pairing when the device is in supervised mode (iOS 9.0 and later).
    *
    * @param bool $val The appleWatchBlockPairing
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppleWatchBlockPairing($val)
    {
        $this->_propDict["appleWatchBlockPairing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appleWatchForceWristDetection
    * Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later).
    *
    * @return bool The appleWatchForceWristDetection
    */
    public function getAppleWatchForceWristDetection()
    {
        if (array_key_exists("appleWatchForceWristDetection", $this->_propDict)) {
            return $this->_propDict["appleWatchForceWristDetection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleWatchForceWristDetection
    * Indicates whether or not to force a paired Apple Watch to use Wrist Detection (iOS 8.2 and later).
    *
    * @param bool $val The appleWatchForceWristDetection
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppleWatchForceWristDetection($val)
    {
        $this->_propDict["appleWatchForceWristDetection"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the appsSingleAppModeList
    * Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements.
     *
     * @return array The appsSingleAppModeList
     */
    public function getAppsSingleAppModeList()
    {
        if (array_key_exists("appsSingleAppModeList", $this->_propDict)) {
           return $this->_propDict["appsSingleAppModeList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsSingleAppModeList
    * Gets or sets the list of iOS apps allowed to autonomously enter Single App Mode. Supervised only. iOS 7.0 and later. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem $val The appsSingleAppModeList
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppsSingleAppModeList($val)
    {
		$this->_propDict["appsSingleAppModeList"] = $val;
        return $this;
    }
    
    /**
    * Gets the appStoreBlockAutomaticDownloads
    * Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later).
    *
    * @return bool The appStoreBlockAutomaticDownloads
    */
    public function getAppStoreBlockAutomaticDownloads()
    {
        if (array_key_exists("appStoreBlockAutomaticDownloads", $this->_propDict)) {
            return $this->_propDict["appStoreBlockAutomaticDownloads"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreBlockAutomaticDownloads
    * Indicates whether or not to block the automatic downloading of apps purchased on other devices when the device is in supervised mode (iOS 9.0 and later).
    *
    * @param bool $val The appStoreBlockAutomaticDownloads
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreBlockAutomaticDownloads($val)
    {
        $this->_propDict["appStoreBlockAutomaticDownloads"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreBlocked
    * Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later.
    *
    * @return bool The appStoreBlocked
    */
    public function getAppStoreBlocked()
    {
        if (array_key_exists("appStoreBlocked", $this->_propDict)) {
            return $this->_propDict["appStoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreBlocked
    * Indicates whether or not to block the user from using the App Store. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The appStoreBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreBlocked($val)
    {
        $this->_propDict["appStoreBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreBlockInAppPurchases
    * Indicates whether or not to block the user from making in app purchases.
    *
    * @return bool The appStoreBlockInAppPurchases
    */
    public function getAppStoreBlockInAppPurchases()
    {
        if (array_key_exists("appStoreBlockInAppPurchases", $this->_propDict)) {
            return $this->_propDict["appStoreBlockInAppPurchases"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreBlockInAppPurchases
    * Indicates whether or not to block the user from making in app purchases.
    *
    * @param bool $val The appStoreBlockInAppPurchases
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreBlockInAppPurchases($val)
    {
        $this->_propDict["appStoreBlockInAppPurchases"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreBlockUIAppInstallation
    * Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later).
    *
    * @return bool The appStoreBlockUIAppInstallation
    */
    public function getAppStoreBlockUIAppInstallation()
    {
        if (array_key_exists("appStoreBlockUIAppInstallation", $this->_propDict)) {
            return $this->_propDict["appStoreBlockUIAppInstallation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreBlockUIAppInstallation
    * Indicates whether or not to block the App Store app, not restricting installation through Host apps. Applies to supervised mode only (iOS 9.0 and later).
    *
    * @param bool $val The appStoreBlockUIAppInstallation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreBlockUIAppInstallation($val)
    {
        $this->_propDict["appStoreBlockUIAppInstallation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appStoreRequirePassword
    * Indicates whether or not to require a password when using the app store.
    *
    * @return bool The appStoreRequirePassword
    */
    public function getAppStoreRequirePassword()
    {
        if (array_key_exists("appStoreRequirePassword", $this->_propDict)) {
            return $this->_propDict["appStoreRequirePassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreRequirePassword
    * Indicates whether or not to require a password when using the app store.
    *
    * @param bool $val The appStoreRequirePassword
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppStoreRequirePassword($val)
    {
        $this->_propDict["appStoreRequirePassword"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the appsVisibilityList
    * List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements.
     *
     * @return array The appsVisibilityList
     */
    public function getAppsVisibilityList()
    {
        if (array_key_exists("appsVisibilityList", $this->_propDict)) {
           return $this->_propDict["appsVisibilityList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appsVisibilityList
    * List of apps in the visibility list (either visible/launchable apps list or hidden/unlaunchable apps list, controlled by AppsVisibilityListType) (iOS 9.3 and later). This collection can contain a maximum of 10000 elements.
    *
    * @param AppListItem $val The appsVisibilityList
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppsVisibilityList($val)
    {
		$this->_propDict["appsVisibilityList"] = $val;
        return $this;
    }
    
    /**
    * Gets the appsVisibilityListType
    * Type of list that is in the AppsVisibilityList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
    *
    * @return AppListType The appsVisibilityListType
    */
    public function getAppsVisibilityListType()
    {
        if (array_key_exists("appsVisibilityListType", $this->_propDict)) {
            if (is_a($this->_propDict["appsVisibilityListType"], "\Microsoft\Graph\Model\AppListType")) {
                return $this->_propDict["appsVisibilityListType"];
            } else {
                $this->_propDict["appsVisibilityListType"] = new AppListType($this->_propDict["appsVisibilityListType"]);
                return $this->_propDict["appsVisibilityListType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appsVisibilityListType
    * Type of list that is in the AppsVisibilityList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
    *
    * @param AppListType $val The appsVisibilityListType
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setAppsVisibilityListType($val)
    {
        $this->_propDict["appsVisibilityListType"] = $val;
        return $this;
    }
    
    /**
    * Gets the bluetoothBlockModification
    * Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later).
    *
    * @return bool The bluetoothBlockModification
    */
    public function getBluetoothBlockModification()
    {
        if (array_key_exists("bluetoothBlockModification", $this->_propDict)) {
            return $this->_propDict["bluetoothBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bluetoothBlockModification
    * Indicates whether or not to allow modification of Bluetooth settings when the device is in supervised mode (iOS 10.0 and later).
    *
    * @param bool $val The bluetoothBlockModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setBluetoothBlockModification($val)
    {
        $this->_propDict["bluetoothBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cameraBlocked
    * Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later.
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
    * Indicates whether or not to block the user from accessing the camera of the device. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The cameraBlocked
    *
    * @return IosGeneralDeviceConfiguration
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockDataRoaming($val)
    {
        $this->_propDict["cellularBlockDataRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockGlobalBackgroundFetchWhileRoaming
    * Indicates whether or not to block global background fetch while roaming.
    *
    * @return bool The cellularBlockGlobalBackgroundFetchWhileRoaming
    */
    public function getCellularBlockGlobalBackgroundFetchWhileRoaming()
    {
        if (array_key_exists("cellularBlockGlobalBackgroundFetchWhileRoaming", $this->_propDict)) {
            return $this->_propDict["cellularBlockGlobalBackgroundFetchWhileRoaming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockGlobalBackgroundFetchWhileRoaming
    * Indicates whether or not to block global background fetch while roaming.
    *
    * @param bool $val The cellularBlockGlobalBackgroundFetchWhileRoaming
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockGlobalBackgroundFetchWhileRoaming($val)
    {
        $this->_propDict["cellularBlockGlobalBackgroundFetchWhileRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockPerAppDataModification
    * Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode.
    *
    * @return bool The cellularBlockPerAppDataModification
    */
    public function getCellularBlockPerAppDataModification()
    {
        if (array_key_exists("cellularBlockPerAppDataModification", $this->_propDict)) {
            return $this->_propDict["cellularBlockPerAppDataModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockPerAppDataModification
    * Indicates whether or not to allow changes to cellular app data usage settings when the device is in supervised mode.
    *
    * @param bool $val The cellularBlockPerAppDataModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockPerAppDataModification($val)
    {
        $this->_propDict["cellularBlockPerAppDataModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cellularBlockPersonalHotspot
    * Indicates whether or not to block Personal Hotspot.
    *
    * @return bool The cellularBlockPersonalHotspot
    */
    public function getCellularBlockPersonalHotspot()
    {
        if (array_key_exists("cellularBlockPersonalHotspot", $this->_propDict)) {
            return $this->_propDict["cellularBlockPersonalHotspot"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockPersonalHotspot
    * Indicates whether or not to block Personal Hotspot.
    *
    * @param bool $val The cellularBlockPersonalHotspot
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockPersonalHotspot($val)
    {
        $this->_propDict["cellularBlockPersonalHotspot"] = boolval($val);
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setCellularBlockVoiceRoaming($val)
    {
        $this->_propDict["cellularBlockVoiceRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the certificatesBlockUntrustedTlsCertificates
    * Indicates whether or not to block untrusted TLS certificates.
    *
    * @return bool The certificatesBlockUntrustedTlsCertificates
    */
    public function getCertificatesBlockUntrustedTlsCertificates()
    {
        if (array_key_exists("certificatesBlockUntrustedTlsCertificates", $this->_propDict)) {
            return $this->_propDict["certificatesBlockUntrustedTlsCertificates"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificatesBlockUntrustedTlsCertificates
    * Indicates whether or not to block untrusted TLS certificates.
    *
    * @param bool $val The certificatesBlockUntrustedTlsCertificates
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setCertificatesBlockUntrustedTlsCertificates($val)
    {
        $this->_propDict["certificatesBlockUntrustedTlsCertificates"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the classroomAppBlockRemoteScreenObservation
    * Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later).
    *
    * @return bool The classroomAppBlockRemoteScreenObservation
    */
    public function getClassroomAppBlockRemoteScreenObservation()
    {
        if (array_key_exists("classroomAppBlockRemoteScreenObservation", $this->_propDict)) {
            return $this->_propDict["classroomAppBlockRemoteScreenObservation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomAppBlockRemoteScreenObservation
    * Indicates whether or not to allow remote screen observation by Classroom app when the device is in supervised mode (iOS 9.3 and later).
    *
    * @param bool $val The classroomAppBlockRemoteScreenObservation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setClassroomAppBlockRemoteScreenObservation($val)
    {
        $this->_propDict["classroomAppBlockRemoteScreenObservation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the classroomAppForceUnpromptedScreenObservation
    * Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode.
    *
    * @return bool The classroomAppForceUnpromptedScreenObservation
    */
    public function getClassroomAppForceUnpromptedScreenObservation()
    {
        if (array_key_exists("classroomAppForceUnpromptedScreenObservation", $this->_propDict)) {
            return $this->_propDict["classroomAppForceUnpromptedScreenObservation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomAppForceUnpromptedScreenObservation
    * Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting when the device is in supervised mode.
    *
    * @param bool $val The classroomAppForceUnpromptedScreenObservation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setClassroomAppForceUnpromptedScreenObservation($val)
    {
        $this->_propDict["classroomAppForceUnpromptedScreenObservation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the compliantAppListType
    * List that is in the AppComplianceList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
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
    * List that is in the AppComplianceList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
    *
    * @param AppListType $val The compliantAppListType
    *
    * @return IosGeneralDeviceConfiguration
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setCompliantAppsList($val)
    {
		$this->_propDict["compliantAppsList"] = $val;
        return $this;
    }
    
    /**
    * Gets the configurationProfileBlockChanges
    * Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode.
    *
    * @return bool The configurationProfileBlockChanges
    */
    public function getConfigurationProfileBlockChanges()
    {
        if (array_key_exists("configurationProfileBlockChanges", $this->_propDict)) {
            return $this->_propDict["configurationProfileBlockChanges"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationProfileBlockChanges
    * Indicates whether or not to block the user from installing configuration profiles and certificates interactively when the device is in supervised mode.
    *
    * @param bool $val The configurationProfileBlockChanges
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setConfigurationProfileBlockChanges($val)
    {
        $this->_propDict["configurationProfileBlockChanges"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the definitionLookupBlocked
    * Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ).
    *
    * @return bool The definitionLookupBlocked
    */
    public function getDefinitionLookupBlocked()
    {
        if (array_key_exists("definitionLookupBlocked", $this->_propDict)) {
            return $this->_propDict["definitionLookupBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the definitionLookupBlocked
    * Indicates whether or not to block definition lookup when the device is in supervised mode (iOS 8.1.3 and later ).
    *
    * @param bool $val The definitionLookupBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDefinitionLookupBlocked($val)
    {
        $this->_propDict["definitionLookupBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceBlockEnableRestrictions
    * Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode.
    *
    * @return bool The deviceBlockEnableRestrictions
    */
    public function getDeviceBlockEnableRestrictions()
    {
        if (array_key_exists("deviceBlockEnableRestrictions", $this->_propDict)) {
            return $this->_propDict["deviceBlockEnableRestrictions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceBlockEnableRestrictions
    * Indicates whether or not to allow the user to enables restrictions in the device settings when the device is in supervised mode.
    *
    * @param bool $val The deviceBlockEnableRestrictions
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDeviceBlockEnableRestrictions($val)
    {
        $this->_propDict["deviceBlockEnableRestrictions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceBlockEraseContentAndSettings
    * Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode.
    *
    * @return bool The deviceBlockEraseContentAndSettings
    */
    public function getDeviceBlockEraseContentAndSettings()
    {
        if (array_key_exists("deviceBlockEraseContentAndSettings", $this->_propDict)) {
            return $this->_propDict["deviceBlockEraseContentAndSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceBlockEraseContentAndSettings
    * Indicates whether or not to allow the use of the 'Erase all content and settings' option on the device when the device is in supervised mode.
    *
    * @param bool $val The deviceBlockEraseContentAndSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDeviceBlockEraseContentAndSettings($val)
    {
        $this->_propDict["deviceBlockEraseContentAndSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceBlockNameModification
    * Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later).
    *
    * @return bool The deviceBlockNameModification
    */
    public function getDeviceBlockNameModification()
    {
        if (array_key_exists("deviceBlockNameModification", $this->_propDict)) {
            return $this->_propDict["deviceBlockNameModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceBlockNameModification
    * Indicates whether or not to allow device name modification when the device is in supervised mode (iOS 9.0 and later).
    *
    * @param bool $val The deviceBlockNameModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDeviceBlockNameModification($val)
    {
        $this->_propDict["deviceBlockNameModification"] = boolval($val);
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setDiagnosticDataBlockSubmission($val)
    {
        $this->_propDict["diagnosticDataBlockSubmission"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the diagnosticDataBlockSubmissionModification
    * Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later).
    *
    * @return bool The diagnosticDataBlockSubmissionModification
    */
    public function getDiagnosticDataBlockSubmissionModification()
    {
        if (array_key_exists("diagnosticDataBlockSubmissionModification", $this->_propDict)) {
            return $this->_propDict["diagnosticDataBlockSubmissionModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the diagnosticDataBlockSubmissionModification
    * Indicates whether or not to allow diagnostics submission settings modification when the device is in supervised mode (iOS 9.3.2 and later).
    *
    * @param bool $val The diagnosticDataBlockSubmissionModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDiagnosticDataBlockSubmissionModification($val)
    {
        $this->_propDict["diagnosticDataBlockSubmissionModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the documentsBlockManagedDocumentsInUnmanagedApps
    * Indicates whether or not to block the user from viewing managed documents in unmanaged apps.
    *
    * @return bool The documentsBlockManagedDocumentsInUnmanagedApps
    */
    public function getDocumentsBlockManagedDocumentsInUnmanagedApps()
    {
        if (array_key_exists("documentsBlockManagedDocumentsInUnmanagedApps", $this->_propDict)) {
            return $this->_propDict["documentsBlockManagedDocumentsInUnmanagedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the documentsBlockManagedDocumentsInUnmanagedApps
    * Indicates whether or not to block the user from viewing managed documents in unmanaged apps.
    *
    * @param bool $val The documentsBlockManagedDocumentsInUnmanagedApps
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDocumentsBlockManagedDocumentsInUnmanagedApps($val)
    {
        $this->_propDict["documentsBlockManagedDocumentsInUnmanagedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the documentsBlockUnmanagedDocumentsInManagedApps
    * Indicates whether or not to block the user from viewing unmanaged documents in managed apps.
    *
    * @return bool The documentsBlockUnmanagedDocumentsInManagedApps
    */
    public function getDocumentsBlockUnmanagedDocumentsInManagedApps()
    {
        if (array_key_exists("documentsBlockUnmanagedDocumentsInManagedApps", $this->_propDict)) {
            return $this->_propDict["documentsBlockUnmanagedDocumentsInManagedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the documentsBlockUnmanagedDocumentsInManagedApps
    * Indicates whether or not to block the user from viewing unmanaged documents in managed apps.
    *
    * @param bool $val The documentsBlockUnmanagedDocumentsInManagedApps
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setDocumentsBlockUnmanagedDocumentsInManagedApps($val)
    {
        $this->_propDict["documentsBlockUnmanagedDocumentsInManagedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the emailInDomainSuffixes
    * An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
    *
    * @return string The emailInDomainSuffixes
    */
    public function getEmailInDomainSuffixes()
    {
        if (array_key_exists("emailInDomainSuffixes", $this->_propDict)) {
            return $this->_propDict["emailInDomainSuffixes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailInDomainSuffixes
    * An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
    *
    * @param string $val The emailInDomainSuffixes
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setEmailInDomainSuffixes($val)
    {
        $this->_propDict["emailInDomainSuffixes"] = $val;
        return $this;
    }
    
    /**
    * Gets the enterpriseAppBlockTrust
    * Indicates whether or not to block the user from trusting an enterprise app.
    *
    * @return bool The enterpriseAppBlockTrust
    */
    public function getEnterpriseAppBlockTrust()
    {
        if (array_key_exists("enterpriseAppBlockTrust", $this->_propDict)) {
            return $this->_propDict["enterpriseAppBlockTrust"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseAppBlockTrust
    * Indicates whether or not to block the user from trusting an enterprise app.
    *
    * @param bool $val The enterpriseAppBlockTrust
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setEnterpriseAppBlockTrust($val)
    {
        $this->_propDict["enterpriseAppBlockTrust"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enterpriseAppBlockTrustModification
    * [Deprecated] Configuring this setting and setting the value to 'true' has no effect on the device.
    *
    * @return bool The enterpriseAppBlockTrustModification
    */
    public function getEnterpriseAppBlockTrustModification()
    {
        if (array_key_exists("enterpriseAppBlockTrustModification", $this->_propDict)) {
            return $this->_propDict["enterpriseAppBlockTrustModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enterpriseAppBlockTrustModification
    * [Deprecated] Configuring this setting and setting the value to 'true' has no effect on the device.
    *
    * @param bool $val The enterpriseAppBlockTrustModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setEnterpriseAppBlockTrustModification($val)
    {
        $this->_propDict["enterpriseAppBlockTrustModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the faceTimeBlocked
    * Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later.
    *
    * @return bool The faceTimeBlocked
    */
    public function getFaceTimeBlocked()
    {
        if (array_key_exists("faceTimeBlocked", $this->_propDict)) {
            return $this->_propDict["faceTimeBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the faceTimeBlocked
    * Indicates whether or not to block the user from using FaceTime. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The faceTimeBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setFaceTimeBlocked($val)
    {
        $this->_propDict["faceTimeBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the findMyFriendsBlocked
    * Indicates whether or not to block changes to Find My Friends when the device is in supervised mode.
    *
    * @return bool The findMyFriendsBlocked
    */
    public function getFindMyFriendsBlocked()
    {
        if (array_key_exists("findMyFriendsBlocked", $this->_propDict)) {
            return $this->_propDict["findMyFriendsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the findMyFriendsBlocked
    * Indicates whether or not to block changes to Find My Friends when the device is in supervised mode.
    *
    * @param bool $val The findMyFriendsBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setFindMyFriendsBlocked($val)
    {
        $this->_propDict["findMyFriendsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the gameCenterBlocked
    * Indicates whether or not to block the user from using Game Center when the device is in supervised mode.
    *
    * @return bool The gameCenterBlocked
    */
    public function getGameCenterBlocked()
    {
        if (array_key_exists("gameCenterBlocked", $this->_propDict)) {
            return $this->_propDict["gameCenterBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gameCenterBlocked
    * Indicates whether or not to block the user from using Game Center when the device is in supervised mode.
    *
    * @param bool $val The gameCenterBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setGameCenterBlocked($val)
    {
        $this->_propDict["gameCenterBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the gamingBlockGameCenterFriends
    * Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later.
    *
    * @return bool The gamingBlockGameCenterFriends
    */
    public function getGamingBlockGameCenterFriends()
    {
        if (array_key_exists("gamingBlockGameCenterFriends", $this->_propDict)) {
            return $this->_propDict["gamingBlockGameCenterFriends"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gamingBlockGameCenterFriends
    * Indicates whether or not to block the user from having friends in Game Center. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The gamingBlockGameCenterFriends
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setGamingBlockGameCenterFriends($val)
    {
        $this->_propDict["gamingBlockGameCenterFriends"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the gamingBlockMultiplayer
    * Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later.
    *
    * @return bool The gamingBlockMultiplayer
    */
    public function getGamingBlockMultiplayer()
    {
        if (array_key_exists("gamingBlockMultiplayer", $this->_propDict)) {
            return $this->_propDict["gamingBlockMultiplayer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gamingBlockMultiplayer
    * Indicates whether or not to block the user from using multiplayer gaming. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The gamingBlockMultiplayer
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setGamingBlockMultiplayer($val)
    {
        $this->_propDict["gamingBlockMultiplayer"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hostPairingBlocked
    * indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode.
    *
    * @return bool The hostPairingBlocked
    */
    public function getHostPairingBlocked()
    {
        if (array_key_exists("hostPairingBlocked", $this->_propDict)) {
            return $this->_propDict["hostPairingBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hostPairingBlocked
    * indicates whether or not to allow host pairing to control the devices an iOS device can pair with when the iOS device is in supervised mode.
    *
    * @param bool $val The hostPairingBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setHostPairingBlocked($val)
    {
        $this->_propDict["hostPairingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iBooksStoreBlocked
    * Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode.
    *
    * @return bool The iBooksStoreBlocked
    */
    public function getIBooksStoreBlocked()
    {
        if (array_key_exists("iBooksStoreBlocked", $this->_propDict)) {
            return $this->_propDict["iBooksStoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iBooksStoreBlocked
    * Indicates whether or not to block the user from using the iBooks Store when the device is in supervised mode.
    *
    * @param bool $val The iBooksStoreBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setIBooksStoreBlocked($val)
    {
        $this->_propDict["iBooksStoreBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iBooksStoreBlockErotica
    * Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica.
    *
    * @return bool The iBooksStoreBlockErotica
    */
    public function getIBooksStoreBlockErotica()
    {
        if (array_key_exists("iBooksStoreBlockErotica", $this->_propDict)) {
            return $this->_propDict["iBooksStoreBlockErotica"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iBooksStoreBlockErotica
    * Indicates whether or not to block the user from downloading media from the iBookstore that has been tagged as erotica.
    *
    * @param bool $val The iBooksStoreBlockErotica
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setIBooksStoreBlockErotica($val)
    {
        $this->_propDict["iBooksStoreBlockErotica"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockActivityContinuation
    * Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device.
    *
    * @return bool The iCloudBlockActivityContinuation
    */
    public function getICloudBlockActivityContinuation()
    {
        if (array_key_exists("iCloudBlockActivityContinuation", $this->_propDict)) {
            return $this->_propDict["iCloudBlockActivityContinuation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockActivityContinuation
    * Indicates whether or not to block the user from continuing work they started on iOS device to another iOS or macOS device.
    *
    * @param bool $val The iCloudBlockActivityContinuation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockActivityContinuation($val)
    {
        $this->_propDict["iCloudBlockActivityContinuation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockBackup
    * Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later.
    *
    * @return bool The iCloudBlockBackup
    */
    public function getICloudBlockBackup()
    {
        if (array_key_exists("iCloudBlockBackup", $this->_propDict)) {
            return $this->_propDict["iCloudBlockBackup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockBackup
    * Indicates whether or not to block iCloud backup. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The iCloudBlockBackup
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockBackup($val)
    {
        $this->_propDict["iCloudBlockBackup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockDocumentSync
    * Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later.
    *
    * @return bool The iCloudBlockDocumentSync
    */
    public function getICloudBlockDocumentSync()
    {
        if (array_key_exists("iCloudBlockDocumentSync", $this->_propDict)) {
            return $this->_propDict["iCloudBlockDocumentSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockDocumentSync
    * Indicates whether or not to block iCloud document sync. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The iCloudBlockDocumentSync
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockDocumentSync($val)
    {
        $this->_propDict["iCloudBlockDocumentSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockManagedAppsSync
    * Indicates whether or not to block Managed Apps Cloud Sync.
    *
    * @return bool The iCloudBlockManagedAppsSync
    */
    public function getICloudBlockManagedAppsSync()
    {
        if (array_key_exists("iCloudBlockManagedAppsSync", $this->_propDict)) {
            return $this->_propDict["iCloudBlockManagedAppsSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockManagedAppsSync
    * Indicates whether or not to block Managed Apps Cloud Sync.
    *
    * @param bool $val The iCloudBlockManagedAppsSync
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockManagedAppsSync($val)
    {
        $this->_propDict["iCloudBlockManagedAppsSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockPhotoLibrary
    * Indicates whether or not to block iCloud Photo Library.
    *
    * @return bool The iCloudBlockPhotoLibrary
    */
    public function getICloudBlockPhotoLibrary()
    {
        if (array_key_exists("iCloudBlockPhotoLibrary", $this->_propDict)) {
            return $this->_propDict["iCloudBlockPhotoLibrary"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockPhotoLibrary
    * Indicates whether or not to block iCloud Photo Library.
    *
    * @param bool $val The iCloudBlockPhotoLibrary
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockPhotoLibrary($val)
    {
        $this->_propDict["iCloudBlockPhotoLibrary"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockPhotoStreamSync
    * Indicates whether or not to block iCloud Photo Stream Sync.
    *
    * @return bool The iCloudBlockPhotoStreamSync
    */
    public function getICloudBlockPhotoStreamSync()
    {
        if (array_key_exists("iCloudBlockPhotoStreamSync", $this->_propDict)) {
            return $this->_propDict["iCloudBlockPhotoStreamSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockPhotoStreamSync
    * Indicates whether or not to block iCloud Photo Stream Sync.
    *
    * @param bool $val The iCloudBlockPhotoStreamSync
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockPhotoStreamSync($val)
    {
        $this->_propDict["iCloudBlockPhotoStreamSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockSharedPhotoStream
    * Indicates whether or not to block Shared Photo Stream.
    *
    * @return bool The iCloudBlockSharedPhotoStream
    */
    public function getICloudBlockSharedPhotoStream()
    {
        if (array_key_exists("iCloudBlockSharedPhotoStream", $this->_propDict)) {
            return $this->_propDict["iCloudBlockSharedPhotoStream"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockSharedPhotoStream
    * Indicates whether or not to block Shared Photo Stream.
    *
    * @param bool $val The iCloudBlockSharedPhotoStream
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudBlockSharedPhotoStream($val)
    {
        $this->_propDict["iCloudBlockSharedPhotoStream"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudRequireEncryptedBackup
    * Indicates whether or not to require backups to iCloud be encrypted.
    *
    * @return bool The iCloudRequireEncryptedBackup
    */
    public function getICloudRequireEncryptedBackup()
    {
        if (array_key_exists("iCloudRequireEncryptedBackup", $this->_propDict)) {
            return $this->_propDict["iCloudRequireEncryptedBackup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudRequireEncryptedBackup
    * Indicates whether or not to require backups to iCloud be encrypted.
    *
    * @param bool $val The iCloudRequireEncryptedBackup
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setICloudRequireEncryptedBackup($val)
    {
        $this->_propDict["iCloudRequireEncryptedBackup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockExplicitContent
    * Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later.
    *
    * @return bool The iTunesBlockExplicitContent
    */
    public function getITunesBlockExplicitContent()
    {
        if (array_key_exists("iTunesBlockExplicitContent", $this->_propDict)) {
            return $this->_propDict["iTunesBlockExplicitContent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockExplicitContent
    * Indicates whether or not to block the user from accessing explicit content in iTunes and the App Store. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The iTunesBlockExplicitContent
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setITunesBlockExplicitContent($val)
    {
        $this->_propDict["iTunesBlockExplicitContent"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockMusicService
    * Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later).
    *
    * @return bool The iTunesBlockMusicService
    */
    public function getITunesBlockMusicService()
    {
        if (array_key_exists("iTunesBlockMusicService", $this->_propDict)) {
            return $this->_propDict["iTunesBlockMusicService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockMusicService
    * Indicates whether or not to block Music service and revert Music app to classic mode when the device is in supervised mode (iOS 9.3 and later and macOS 10.12 and later).
    *
    * @param bool $val The iTunesBlockMusicService
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setITunesBlockMusicService($val)
    {
        $this->_propDict["iTunesBlockMusicService"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockRadio
    * Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later).
    *
    * @return bool The iTunesBlockRadio
    */
    public function getITunesBlockRadio()
    {
        if (array_key_exists("iTunesBlockRadio", $this->_propDict)) {
            return $this->_propDict["iTunesBlockRadio"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockRadio
    * Indicates whether or not to block the user from using iTunes Radio when the device is in supervised mode (iOS 9.3 and later).
    *
    * @param bool $val The iTunesBlockRadio
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setITunesBlockRadio($val)
    {
        $this->_propDict["iTunesBlockRadio"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockAutoCorrect
    * Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later).
    *
    * @return bool The keyboardBlockAutoCorrect
    */
    public function getKeyboardBlockAutoCorrect()
    {
        if (array_key_exists("keyboardBlockAutoCorrect", $this->_propDict)) {
            return $this->_propDict["keyboardBlockAutoCorrect"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockAutoCorrect
    * Indicates whether or not to block keyboard auto-correction when the device is in supervised mode (iOS 8.1.3 and later).
    *
    * @param bool $val The keyboardBlockAutoCorrect
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockAutoCorrect($val)
    {
        $this->_propDict["keyboardBlockAutoCorrect"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockDictation
    * Indicates whether or not to block the user from using dictation input when the device is in supervised mode.
    *
    * @return bool The keyboardBlockDictation
    */
    public function getKeyboardBlockDictation()
    {
        if (array_key_exists("keyboardBlockDictation", $this->_propDict)) {
            return $this->_propDict["keyboardBlockDictation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockDictation
    * Indicates whether or not to block the user from using dictation input when the device is in supervised mode.
    *
    * @param bool $val The keyboardBlockDictation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockDictation($val)
    {
        $this->_propDict["keyboardBlockDictation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockPredictive
    * Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later).
    *
    * @return bool The keyboardBlockPredictive
    */
    public function getKeyboardBlockPredictive()
    {
        if (array_key_exists("keyboardBlockPredictive", $this->_propDict)) {
            return $this->_propDict["keyboardBlockPredictive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockPredictive
    * Indicates whether or not to block predictive keyboards when device is in supervised mode (iOS 8.1.3 and later).
    *
    * @param bool $val The keyboardBlockPredictive
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockPredictive($val)
    {
        $this->_propDict["keyboardBlockPredictive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockShortcuts
    * Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later).
    *
    * @return bool The keyboardBlockShortcuts
    */
    public function getKeyboardBlockShortcuts()
    {
        if (array_key_exists("keyboardBlockShortcuts", $this->_propDict)) {
            return $this->_propDict["keyboardBlockShortcuts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockShortcuts
    * Indicates whether or not to block keyboard shortcuts when the device is in supervised mode (iOS 9.0 and later).
    *
    * @param bool $val The keyboardBlockShortcuts
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockShortcuts($val)
    {
        $this->_propDict["keyboardBlockShortcuts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockSpellCheck
    * Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later).
    *
    * @return bool The keyboardBlockSpellCheck
    */
    public function getKeyboardBlockSpellCheck()
    {
        if (array_key_exists("keyboardBlockSpellCheck", $this->_propDict)) {
            return $this->_propDict["keyboardBlockSpellCheck"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockSpellCheck
    * Indicates whether or not to block keyboard spell-checking when the device is in supervised mode (iOS 8.1.3 and later).
    *
    * @param bool $val The keyboardBlockSpellCheck
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKeyboardBlockSpellCheck($val)
    {
        $this->_propDict["keyboardBlockSpellCheck"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowAssistiveSpeak
    * Indicates whether or not to allow assistive speak while in kiosk mode.
    *
    * @return bool The kioskModeAllowAssistiveSpeak
    */
    public function getKioskModeAllowAssistiveSpeak()
    {
        if (array_key_exists("kioskModeAllowAssistiveSpeak", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowAssistiveSpeak"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowAssistiveSpeak
    * Indicates whether or not to allow assistive speak while in kiosk mode.
    *
    * @param bool $val The kioskModeAllowAssistiveSpeak
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowAssistiveSpeak($val)
    {
        $this->_propDict["kioskModeAllowAssistiveSpeak"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowAssistiveTouchSettings
    * Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode.
    *
    * @return bool The kioskModeAllowAssistiveTouchSettings
    */
    public function getKioskModeAllowAssistiveTouchSettings()
    {
        if (array_key_exists("kioskModeAllowAssistiveTouchSettings", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowAssistiveTouchSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowAssistiveTouchSettings
    * Indicates whether or not to allow access to the Assistive Touch Settings while in kiosk mode.
    *
    * @param bool $val The kioskModeAllowAssistiveTouchSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowAssistiveTouchSettings($val)
    {
        $this->_propDict["kioskModeAllowAssistiveTouchSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowAutoLock
    * Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead.
    *
    * @return bool The kioskModeAllowAutoLock
    */
    public function getKioskModeAllowAutoLock()
    {
        if (array_key_exists("kioskModeAllowAutoLock", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowAutoLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowAutoLock
    * Indicates whether or not to allow device auto lock while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockAutoLock instead.
    *
    * @param bool $val The kioskModeAllowAutoLock
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowAutoLock($val)
    {
        $this->_propDict["kioskModeAllowAutoLock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowColorInversionSettings
    * Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode.
    *
    * @return bool The kioskModeAllowColorInversionSettings
    */
    public function getKioskModeAllowColorInversionSettings()
    {
        if (array_key_exists("kioskModeAllowColorInversionSettings", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowColorInversionSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowColorInversionSettings
    * Indicates whether or not to allow access to the Color Inversion Settings while in kiosk mode.
    *
    * @param bool $val The kioskModeAllowColorInversionSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowColorInversionSettings($val)
    {
        $this->_propDict["kioskModeAllowColorInversionSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowRingerSwitch
    * Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead.
    *
    * @return bool The kioskModeAllowRingerSwitch
    */
    public function getKioskModeAllowRingerSwitch()
    {
        if (array_key_exists("kioskModeAllowRingerSwitch", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowRingerSwitch"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowRingerSwitch
    * Indicates whether or not to allow use of the ringer switch while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockRingerSwitch instead.
    *
    * @param bool $val The kioskModeAllowRingerSwitch
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowRingerSwitch($val)
    {
        $this->_propDict["kioskModeAllowRingerSwitch"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowScreenRotation
    * Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead.
    *
    * @return bool The kioskModeAllowScreenRotation
    */
    public function getKioskModeAllowScreenRotation()
    {
        if (array_key_exists("kioskModeAllowScreenRotation", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowScreenRotation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowScreenRotation
    * Indicates whether or not to allow screen rotation while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockScreenRotation instead.
    *
    * @param bool $val The kioskModeAllowScreenRotation
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowScreenRotation($val)
    {
        $this->_propDict["kioskModeAllowScreenRotation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowSleepButton
    * Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead.
    *
    * @return bool The kioskModeAllowSleepButton
    */
    public function getKioskModeAllowSleepButton()
    {
        if (array_key_exists("kioskModeAllowSleepButton", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowSleepButton"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowSleepButton
    * Indicates whether or not to allow use of the sleep button while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockSleepButton instead.
    *
    * @param bool $val The kioskModeAllowSleepButton
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowSleepButton($val)
    {
        $this->_propDict["kioskModeAllowSleepButton"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowTouchscreen
    * Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead.
    *
    * @return bool The kioskModeAllowTouchscreen
    */
    public function getKioskModeAllowTouchscreen()
    {
        if (array_key_exists("kioskModeAllowTouchscreen", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowTouchscreen"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowTouchscreen
    * Indicates whether or not to allow use of the touchscreen while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockTouchscreen instead.
    *
    * @param bool $val The kioskModeAllowTouchscreen
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowTouchscreen($val)
    {
        $this->_propDict["kioskModeAllowTouchscreen"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowVoiceOverSettings
    * Indicates whether or not to allow access to the voice over settings while in kiosk mode.
    *
    * @return bool The kioskModeAllowVoiceOverSettings
    */
    public function getKioskModeAllowVoiceOverSettings()
    {
        if (array_key_exists("kioskModeAllowVoiceOverSettings", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowVoiceOverSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowVoiceOverSettings
    * Indicates whether or not to allow access to the voice over settings while in kiosk mode.
    *
    * @param bool $val The kioskModeAllowVoiceOverSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowVoiceOverSettings($val)
    {
        $this->_propDict["kioskModeAllowVoiceOverSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowVolumeButtons
    * Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead.
    *
    * @return bool The kioskModeAllowVolumeButtons
    */
    public function getKioskModeAllowVolumeButtons()
    {
        if (array_key_exists("kioskModeAllowVolumeButtons", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowVolumeButtons"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowVolumeButtons
    * Indicates whether or not to allow use of the volume buttons while in kiosk mode. This property's functionality is redundant with the OS default and is deprecated. Use KioskModeBlockVolumeButtons instead.
    *
    * @param bool $val The kioskModeAllowVolumeButtons
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowVolumeButtons($val)
    {
        $this->_propDict["kioskModeAllowVolumeButtons"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAllowZoomSettings
    * Indicates whether or not to allow access to the zoom settings while in kiosk mode.
    *
    * @return bool The kioskModeAllowZoomSettings
    */
    public function getKioskModeAllowZoomSettings()
    {
        if (array_key_exists("kioskModeAllowZoomSettings", $this->_propDict)) {
            return $this->_propDict["kioskModeAllowZoomSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAllowZoomSettings
    * Indicates whether or not to allow access to the zoom settings while in kiosk mode.
    *
    * @param bool $val The kioskModeAllowZoomSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAllowZoomSettings($val)
    {
        $this->_propDict["kioskModeAllowZoomSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeAppStoreUrl
    * URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known.
    *
    * @return string The kioskModeAppStoreUrl
    */
    public function getKioskModeAppStoreUrl()
    {
        if (array_key_exists("kioskModeAppStoreUrl", $this->_propDict)) {
            return $this->_propDict["kioskModeAppStoreUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeAppStoreUrl
    * URL in the app store to the app to use for kiosk mode. Use if KioskModeManagedAppId is not known.
    *
    * @param string $val The kioskModeAppStoreUrl
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeAppStoreUrl($val)
    {
        $this->_propDict["kioskModeAppStoreUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskModeBuiltInAppId
    * ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set.
    *
    * @return string The kioskModeBuiltInAppId
    */
    public function getKioskModeBuiltInAppId()
    {
        if (array_key_exists("kioskModeBuiltInAppId", $this->_propDict)) {
            return $this->_propDict["kioskModeBuiltInAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeBuiltInAppId
    * ID for built-in apps to use for kiosk mode. Used when KioskModeManagedAppId and KioskModeAppStoreUrl are not set.
    *
    * @param string $val The kioskModeBuiltInAppId
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeBuiltInAppId($val)
    {
        $this->_propDict["kioskModeBuiltInAppId"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskModeManagedAppId
    * Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored.
    *
    * @return string The kioskModeManagedAppId
    */
    public function getKioskModeManagedAppId()
    {
        if (array_key_exists("kioskModeManagedAppId", $this->_propDict)) {
            return $this->_propDict["kioskModeManagedAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeManagedAppId
    * Managed app id of the app to use for kiosk mode. If KioskModeManagedAppId is specified then KioskModeAppStoreUrl will be ignored.
    *
    * @param string $val The kioskModeManagedAppId
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeManagedAppId($val)
    {
        $this->_propDict["kioskModeManagedAppId"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireAssistiveTouch
    * Indicates whether or not to require assistive touch while in kiosk mode.
    *
    * @return bool The kioskModeRequireAssistiveTouch
    */
    public function getKioskModeRequireAssistiveTouch()
    {
        if (array_key_exists("kioskModeRequireAssistiveTouch", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireAssistiveTouch"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireAssistiveTouch
    * Indicates whether or not to require assistive touch while in kiosk mode.
    *
    * @param bool $val The kioskModeRequireAssistiveTouch
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireAssistiveTouch($val)
    {
        $this->_propDict["kioskModeRequireAssistiveTouch"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireColorInversion
    * Indicates whether or not to require color inversion while in kiosk mode.
    *
    * @return bool The kioskModeRequireColorInversion
    */
    public function getKioskModeRequireColorInversion()
    {
        if (array_key_exists("kioskModeRequireColorInversion", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireColorInversion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireColorInversion
    * Indicates whether or not to require color inversion while in kiosk mode.
    *
    * @param bool $val The kioskModeRequireColorInversion
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireColorInversion($val)
    {
        $this->_propDict["kioskModeRequireColorInversion"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireMonoAudio
    * Indicates whether or not to require mono audio while in kiosk mode.
    *
    * @return bool The kioskModeRequireMonoAudio
    */
    public function getKioskModeRequireMonoAudio()
    {
        if (array_key_exists("kioskModeRequireMonoAudio", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireMonoAudio"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireMonoAudio
    * Indicates whether or not to require mono audio while in kiosk mode.
    *
    * @param bool $val The kioskModeRequireMonoAudio
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireMonoAudio($val)
    {
        $this->_propDict["kioskModeRequireMonoAudio"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireVoiceOver
    * Indicates whether or not to require voice over while in kiosk mode.
    *
    * @return bool The kioskModeRequireVoiceOver
    */
    public function getKioskModeRequireVoiceOver()
    {
        if (array_key_exists("kioskModeRequireVoiceOver", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireVoiceOver"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireVoiceOver
    * Indicates whether or not to require voice over while in kiosk mode.
    *
    * @param bool $val The kioskModeRequireVoiceOver
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireVoiceOver($val)
    {
        $this->_propDict["kioskModeRequireVoiceOver"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kioskModeRequireZoom
    * Indicates whether or not to require zoom while in kiosk mode.
    *
    * @return bool The kioskModeRequireZoom
    */
    public function getKioskModeRequireZoom()
    {
        if (array_key_exists("kioskModeRequireZoom", $this->_propDict)) {
            return $this->_propDict["kioskModeRequireZoom"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskModeRequireZoom
    * Indicates whether or not to require zoom while in kiosk mode.
    *
    * @param bool $val The kioskModeRequireZoom
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setKioskModeRequireZoom($val)
    {
        $this->_propDict["kioskModeRequireZoom"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockControlCenter
    * Indicates whether or not to block the user from using control center on the lock screen.
    *
    * @return bool The lockScreenBlockControlCenter
    */
    public function getLockScreenBlockControlCenter()
    {
        if (array_key_exists("lockScreenBlockControlCenter", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockControlCenter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockControlCenter
    * Indicates whether or not to block the user from using control center on the lock screen.
    *
    * @param bool $val The lockScreenBlockControlCenter
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setLockScreenBlockControlCenter($val)
    {
        $this->_propDict["lockScreenBlockControlCenter"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockNotificationView
    * Indicates whether or not to block the user from using the notification view on the lock screen.
    *
    * @return bool The lockScreenBlockNotificationView
    */
    public function getLockScreenBlockNotificationView()
    {
        if (array_key_exists("lockScreenBlockNotificationView", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockNotificationView"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockNotificationView
    * Indicates whether or not to block the user from using the notification view on the lock screen.
    *
    * @param bool $val The lockScreenBlockNotificationView
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setLockScreenBlockNotificationView($val)
    {
        $this->_propDict["lockScreenBlockNotificationView"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockPassbook
    * Indicates whether or not to block the user from using passbook when the device is locked.
    *
    * @return bool The lockScreenBlockPassbook
    */
    public function getLockScreenBlockPassbook()
    {
        if (array_key_exists("lockScreenBlockPassbook", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockPassbook"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockPassbook
    * Indicates whether or not to block the user from using passbook when the device is locked.
    *
    * @param bool $val The lockScreenBlockPassbook
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setLockScreenBlockPassbook($val)
    {
        $this->_propDict["lockScreenBlockPassbook"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lockScreenBlockTodayView
    * Indicates whether or not to block the user from using the Today View on the lock screen.
    *
    * @return bool The lockScreenBlockTodayView
    */
    public function getLockScreenBlockTodayView()
    {
        if (array_key_exists("lockScreenBlockTodayView", $this->_propDict)) {
            return $this->_propDict["lockScreenBlockTodayView"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenBlockTodayView
    * Indicates whether or not to block the user from using the Today View on the lock screen.
    *
    * @param bool $val The lockScreenBlockTodayView
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setLockScreenBlockTodayView($val)
    {
        $this->_propDict["lockScreenBlockTodayView"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingApps
    * Media content rating settings for Apps. Possible values are: allAllowed, allBlocked, agesAbove4, agesAbove9, agesAbove12, agesAbove17.
    *
    * @return RatingAppsType The mediaContentRatingApps
    */
    public function getMediaContentRatingApps()
    {
        if (array_key_exists("mediaContentRatingApps", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingApps"], "\Microsoft\Graph\Model\RatingAppsType")) {
                return $this->_propDict["mediaContentRatingApps"];
            } else {
                $this->_propDict["mediaContentRatingApps"] = new RatingAppsType($this->_propDict["mediaContentRatingApps"]);
                return $this->_propDict["mediaContentRatingApps"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingApps
    * Media content rating settings for Apps. Possible values are: allAllowed, allBlocked, agesAbove4, agesAbove9, agesAbove12, agesAbove17.
    *
    * @param RatingAppsType $val The mediaContentRatingApps
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingApps($val)
    {
        $this->_propDict["mediaContentRatingApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingAustralia
    * Media content rating settings for Australia
    *
    * @return MediaContentRatingAustralia The mediaContentRatingAustralia
    */
    public function getMediaContentRatingAustralia()
    {
        if (array_key_exists("mediaContentRatingAustralia", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingAustralia"], "\Microsoft\Graph\Model\MediaContentRatingAustralia")) {
                return $this->_propDict["mediaContentRatingAustralia"];
            } else {
                $this->_propDict["mediaContentRatingAustralia"] = new MediaContentRatingAustralia($this->_propDict["mediaContentRatingAustralia"]);
                return $this->_propDict["mediaContentRatingAustralia"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingAustralia
    * Media content rating settings for Australia
    *
    * @param MediaContentRatingAustralia $val The mediaContentRatingAustralia
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingAustralia($val)
    {
        $this->_propDict["mediaContentRatingAustralia"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingCanada
    * Media content rating settings for Canada
    *
    * @return MediaContentRatingCanada The mediaContentRatingCanada
    */
    public function getMediaContentRatingCanada()
    {
        if (array_key_exists("mediaContentRatingCanada", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingCanada"], "\Microsoft\Graph\Model\MediaContentRatingCanada")) {
                return $this->_propDict["mediaContentRatingCanada"];
            } else {
                $this->_propDict["mediaContentRatingCanada"] = new MediaContentRatingCanada($this->_propDict["mediaContentRatingCanada"]);
                return $this->_propDict["mediaContentRatingCanada"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingCanada
    * Media content rating settings for Canada
    *
    * @param MediaContentRatingCanada $val The mediaContentRatingCanada
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingCanada($val)
    {
        $this->_propDict["mediaContentRatingCanada"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingFrance
    * Media content rating settings for France
    *
    * @return MediaContentRatingFrance The mediaContentRatingFrance
    */
    public function getMediaContentRatingFrance()
    {
        if (array_key_exists("mediaContentRatingFrance", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingFrance"], "\Microsoft\Graph\Model\MediaContentRatingFrance")) {
                return $this->_propDict["mediaContentRatingFrance"];
            } else {
                $this->_propDict["mediaContentRatingFrance"] = new MediaContentRatingFrance($this->_propDict["mediaContentRatingFrance"]);
                return $this->_propDict["mediaContentRatingFrance"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingFrance
    * Media content rating settings for France
    *
    * @param MediaContentRatingFrance $val The mediaContentRatingFrance
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingFrance($val)
    {
        $this->_propDict["mediaContentRatingFrance"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingGermany
    * Media content rating settings for Germany
    *
    * @return MediaContentRatingGermany The mediaContentRatingGermany
    */
    public function getMediaContentRatingGermany()
    {
        if (array_key_exists("mediaContentRatingGermany", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingGermany"], "\Microsoft\Graph\Model\MediaContentRatingGermany")) {
                return $this->_propDict["mediaContentRatingGermany"];
            } else {
                $this->_propDict["mediaContentRatingGermany"] = new MediaContentRatingGermany($this->_propDict["mediaContentRatingGermany"]);
                return $this->_propDict["mediaContentRatingGermany"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingGermany
    * Media content rating settings for Germany
    *
    * @param MediaContentRatingGermany $val The mediaContentRatingGermany
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingGermany($val)
    {
        $this->_propDict["mediaContentRatingGermany"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingIreland
    * Media content rating settings for Ireland
    *
    * @return MediaContentRatingIreland The mediaContentRatingIreland
    */
    public function getMediaContentRatingIreland()
    {
        if (array_key_exists("mediaContentRatingIreland", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingIreland"], "\Microsoft\Graph\Model\MediaContentRatingIreland")) {
                return $this->_propDict["mediaContentRatingIreland"];
            } else {
                $this->_propDict["mediaContentRatingIreland"] = new MediaContentRatingIreland($this->_propDict["mediaContentRatingIreland"]);
                return $this->_propDict["mediaContentRatingIreland"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingIreland
    * Media content rating settings for Ireland
    *
    * @param MediaContentRatingIreland $val The mediaContentRatingIreland
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingIreland($val)
    {
        $this->_propDict["mediaContentRatingIreland"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingJapan
    * Media content rating settings for Japan
    *
    * @return MediaContentRatingJapan The mediaContentRatingJapan
    */
    public function getMediaContentRatingJapan()
    {
        if (array_key_exists("mediaContentRatingJapan", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingJapan"], "\Microsoft\Graph\Model\MediaContentRatingJapan")) {
                return $this->_propDict["mediaContentRatingJapan"];
            } else {
                $this->_propDict["mediaContentRatingJapan"] = new MediaContentRatingJapan($this->_propDict["mediaContentRatingJapan"]);
                return $this->_propDict["mediaContentRatingJapan"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingJapan
    * Media content rating settings for Japan
    *
    * @param MediaContentRatingJapan $val The mediaContentRatingJapan
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingJapan($val)
    {
        $this->_propDict["mediaContentRatingJapan"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingNewZealand
    * Media content rating settings for New Zealand
    *
    * @return MediaContentRatingNewZealand The mediaContentRatingNewZealand
    */
    public function getMediaContentRatingNewZealand()
    {
        if (array_key_exists("mediaContentRatingNewZealand", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingNewZealand"], "\Microsoft\Graph\Model\MediaContentRatingNewZealand")) {
                return $this->_propDict["mediaContentRatingNewZealand"];
            } else {
                $this->_propDict["mediaContentRatingNewZealand"] = new MediaContentRatingNewZealand($this->_propDict["mediaContentRatingNewZealand"]);
                return $this->_propDict["mediaContentRatingNewZealand"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingNewZealand
    * Media content rating settings for New Zealand
    *
    * @param MediaContentRatingNewZealand $val The mediaContentRatingNewZealand
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingNewZealand($val)
    {
        $this->_propDict["mediaContentRatingNewZealand"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingUnitedKingdom
    * Media content rating settings for United Kingdom
    *
    * @return MediaContentRatingUnitedKingdom The mediaContentRatingUnitedKingdom
    */
    public function getMediaContentRatingUnitedKingdom()
    {
        if (array_key_exists("mediaContentRatingUnitedKingdom", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingUnitedKingdom"], "\Microsoft\Graph\Model\MediaContentRatingUnitedKingdom")) {
                return $this->_propDict["mediaContentRatingUnitedKingdom"];
            } else {
                $this->_propDict["mediaContentRatingUnitedKingdom"] = new MediaContentRatingUnitedKingdom($this->_propDict["mediaContentRatingUnitedKingdom"]);
                return $this->_propDict["mediaContentRatingUnitedKingdom"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingUnitedKingdom
    * Media content rating settings for United Kingdom
    *
    * @param MediaContentRatingUnitedKingdom $val The mediaContentRatingUnitedKingdom
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingUnitedKingdom($val)
    {
        $this->_propDict["mediaContentRatingUnitedKingdom"] = $val;
        return $this;
    }
    
    /**
    * Gets the mediaContentRatingUnitedStates
    * Media content rating settings for United States
    *
    * @return MediaContentRatingUnitedStates The mediaContentRatingUnitedStates
    */
    public function getMediaContentRatingUnitedStates()
    {
        if (array_key_exists("mediaContentRatingUnitedStates", $this->_propDict)) {
            if (is_a($this->_propDict["mediaContentRatingUnitedStates"], "\Microsoft\Graph\Model\MediaContentRatingUnitedStates")) {
                return $this->_propDict["mediaContentRatingUnitedStates"];
            } else {
                $this->_propDict["mediaContentRatingUnitedStates"] = new MediaContentRatingUnitedStates($this->_propDict["mediaContentRatingUnitedStates"]);
                return $this->_propDict["mediaContentRatingUnitedStates"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mediaContentRatingUnitedStates
    * Media content rating settings for United States
    *
    * @param MediaContentRatingUnitedStates $val The mediaContentRatingUnitedStates
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMediaContentRatingUnitedStates($val)
    {
        $this->_propDict["mediaContentRatingUnitedStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the messagesBlocked
    * Indicates whether or not to block the user from using the Messages app on the supervised device.
    *
    * @return bool The messagesBlocked
    */
    public function getMessagesBlocked()
    {
        if (array_key_exists("messagesBlocked", $this->_propDict)) {
            return $this->_propDict["messagesBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the messagesBlocked
    * Indicates whether or not to block the user from using the Messages app on the supervised device.
    *
    * @param bool $val The messagesBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setMessagesBlocked($val)
    {
        $this->_propDict["messagesBlocked"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the networkUsageRules
    * List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements.
     *
     * @return array The networkUsageRules
     */
    public function getNetworkUsageRules()
    {
        if (array_key_exists("networkUsageRules", $this->_propDict)) {
           return $this->_propDict["networkUsageRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the networkUsageRules
    * List of managed apps and the network rules that applies to them. This collection can contain a maximum of 1000 elements.
    *
    * @param IosNetworkUsageRule $val The networkUsageRules
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setNetworkUsageRules($val)
    {
		$this->_propDict["networkUsageRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationsBlockSettingsModification
    * Indicates whether or not to allow notifications settings modification (iOS 9.3 and later).
    *
    * @return bool The notificationsBlockSettingsModification
    */
    public function getNotificationsBlockSettingsModification()
    {
        if (array_key_exists("notificationsBlockSettingsModification", $this->_propDict)) {
            return $this->_propDict["notificationsBlockSettingsModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationsBlockSettingsModification
    * Indicates whether or not to allow notifications settings modification (iOS 9.3 and later).
    *
    * @param bool $val The notificationsBlockSettingsModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setNotificationsBlockSettingsModification($val)
    {
        $this->_propDict["notificationsBlockSettingsModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeBlockFingerprintModification
    * Block modification of registered Touch ID fingerprints when in supervised mode.
    *
    * @return bool The passcodeBlockFingerprintModification
    */
    public function getPasscodeBlockFingerprintModification()
    {
        if (array_key_exists("passcodeBlockFingerprintModification", $this->_propDict)) {
            return $this->_propDict["passcodeBlockFingerprintModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeBlockFingerprintModification
    * Block modification of registered Touch ID fingerprints when in supervised mode.
    *
    * @param bool $val The passcodeBlockFingerprintModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeBlockFingerprintModification($val)
    {
        $this->_propDict["passcodeBlockFingerprintModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeBlockFingerprintUnlock
    * Indicates whether or not to block fingerprint unlock.
    *
    * @return bool The passcodeBlockFingerprintUnlock
    */
    public function getPasscodeBlockFingerprintUnlock()
    {
        if (array_key_exists("passcodeBlockFingerprintUnlock", $this->_propDict)) {
            return $this->_propDict["passcodeBlockFingerprintUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeBlockFingerprintUnlock
    * Indicates whether or not to block fingerprint unlock.
    *
    * @param bool $val The passcodeBlockFingerprintUnlock
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeBlockFingerprintUnlock($val)
    {
        $this->_propDict["passcodeBlockFingerprintUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeBlockModification
    * Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later).
    *
    * @return bool The passcodeBlockModification
    */
    public function getPasscodeBlockModification()
    {
        if (array_key_exists("passcodeBlockModification", $this->_propDict)) {
            return $this->_propDict["passcodeBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeBlockModification
    * Indicates whether or not to allow passcode modification on the supervised device (iOS 9.0 and later).
    *
    * @param bool $val The passcodeBlockModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeBlockModification($val)
    {
        $this->_propDict["passcodeBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeBlockSimple
    * Indicates whether or not to block simple passcodes.
    *
    * @return bool The passcodeBlockSimple
    */
    public function getPasscodeBlockSimple()
    {
        if (array_key_exists("passcodeBlockSimple", $this->_propDict)) {
            return $this->_propDict["passcodeBlockSimple"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeBlockSimple
    * Indicates whether or not to block simple passcodes.
    *
    * @param bool $val The passcodeBlockSimple
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeBlockSimple($val)
    {
        $this->_propDict["passcodeBlockSimple"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeExpirationDays
    * Number of days before the passcode expires. Valid values 1 to 65535
    *
    * @return int The passcodeExpirationDays
    */
    public function getPasscodeExpirationDays()
    {
        if (array_key_exists("passcodeExpirationDays", $this->_propDict)) {
            return $this->_propDict["passcodeExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeExpirationDays
    * Number of days before the passcode expires. Valid values 1 to 65535
    *
    * @param int $val The passcodeExpirationDays
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeExpirationDays($val)
    {
        $this->_propDict["passcodeExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinimumCharacterSetCount
    * Number of character sets a passcode must contain. Valid values 0 to 4
    *
    * @return int The passcodeMinimumCharacterSetCount
    */
    public function getPasscodeMinimumCharacterSetCount()
    {
        if (array_key_exists("passcodeMinimumCharacterSetCount", $this->_propDict)) {
            return $this->_propDict["passcodeMinimumCharacterSetCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinimumCharacterSetCount
    * Number of character sets a passcode must contain. Valid values 0 to 4
    *
    * @param int $val The passcodeMinimumCharacterSetCount
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeMinimumCharacterSetCount($val)
    {
        $this->_propDict["passcodeMinimumCharacterSetCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinimumLength
    * Minimum length of passcode. Valid values 4 to 14
    *
    * @return int The passcodeMinimumLength
    */
    public function getPasscodeMinimumLength()
    {
        if (array_key_exists("passcodeMinimumLength", $this->_propDict)) {
            return $this->_propDict["passcodeMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinimumLength
    * Minimum length of passcode. Valid values 4 to 14
    *
    * @param int $val The passcodeMinimumLength
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeMinimumLength($val)
    {
        $this->_propDict["passcodeMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinutesOfInactivityBeforeLock
    * Minutes of inactivity before a passcode is required.
    *
    * @return int The passcodeMinutesOfInactivityBeforeLock
    */
    public function getPasscodeMinutesOfInactivityBeforeLock()
    {
        if (array_key_exists("passcodeMinutesOfInactivityBeforeLock", $this->_propDict)) {
            return $this->_propDict["passcodeMinutesOfInactivityBeforeLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinutesOfInactivityBeforeLock
    * Minutes of inactivity before a passcode is required.
    *
    * @param int $val The passcodeMinutesOfInactivityBeforeLock
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passcodeMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @return int The passcodeMinutesOfInactivityBeforeScreenTimeout
    */
    public function getPasscodeMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("passcodeMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["passcodeMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @param int $val The passcodeMinutesOfInactivityBeforeScreenTimeout
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passcodeMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodePreviousPasscodeBlockCount
    * Number of previous passcodes to block. Valid values 1 to 24
    *
    * @return int The passcodePreviousPasscodeBlockCount
    */
    public function getPasscodePreviousPasscodeBlockCount()
    {
        if (array_key_exists("passcodePreviousPasscodeBlockCount", $this->_propDict)) {
            return $this->_propDict["passcodePreviousPasscodeBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodePreviousPasscodeBlockCount
    * Number of previous passcodes to block. Valid values 1 to 24
    *
    * @param int $val The passcodePreviousPasscodeBlockCount
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodePreviousPasscodeBlockCount($val)
    {
        $this->_propDict["passcodePreviousPasscodeBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeRequired
    * Indicates whether or not to require a passcode.
    *
    * @return bool The passcodeRequired
    */
    public function getPasscodeRequired()
    {
        if (array_key_exists("passcodeRequired", $this->_propDict)) {
            return $this->_propDict["passcodeRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeRequired
    * Indicates whether or not to require a passcode.
    *
    * @param bool $val The passcodeRequired
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeRequired($val)
    {
        $this->_propDict["passcodeRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeRequiredType
    * Type of passcode that is required. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @return RequiredPasswordType The passcodeRequiredType
    */
    public function getPasscodeRequiredType()
    {
        if (array_key_exists("passcodeRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passcodeRequiredType"], "\Microsoft\Graph\Model\RequiredPasswordType")) {
                return $this->_propDict["passcodeRequiredType"];
            } else {
                $this->_propDict["passcodeRequiredType"] = new RequiredPasswordType($this->_propDict["passcodeRequiredType"]);
                return $this->_propDict["passcodeRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passcodeRequiredType
    * Type of passcode that is required. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @param RequiredPasswordType $val The passcodeRequiredType
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeRequiredType($val)
    {
        $this->_propDict["passcodeRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passcodeSignInFailureCountBeforeWipe
    * Number of sign in failures allowed before wiping the device. Valid values 2 to 11
    *
    * @return int The passcodeSignInFailureCountBeforeWipe
    */
    public function getPasscodeSignInFailureCountBeforeWipe()
    {
        if (array_key_exists("passcodeSignInFailureCountBeforeWipe", $this->_propDict)) {
            return $this->_propDict["passcodeSignInFailureCountBeforeWipe"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeSignInFailureCountBeforeWipe
    * Number of sign in failures allowed before wiping the device. Valid values 2 to 11
    *
    * @param int $val The passcodeSignInFailureCountBeforeWipe
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPasscodeSignInFailureCountBeforeWipe($val)
    {
        $this->_propDict["passcodeSignInFailureCountBeforeWipe"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the podcastsBlocked
    * Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later).
    *
    * @return bool The podcastsBlocked
    */
    public function getPodcastsBlocked()
    {
        if (array_key_exists("podcastsBlocked", $this->_propDict)) {
            return $this->_propDict["podcastsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the podcastsBlocked
    * Indicates whether or not to block the user from using podcasts on the supervised device (iOS 8.0 and later).
    *
    * @param bool $val The podcastsBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setPodcastsBlocked($val)
    {
        $this->_propDict["podcastsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariBlockAutofill
    * Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later.
    *
    * @return bool The safariBlockAutofill
    */
    public function getSafariBlockAutofill()
    {
        if (array_key_exists("safariBlockAutofill", $this->_propDict)) {
            return $this->_propDict["safariBlockAutofill"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlockAutofill
    * Indicates whether or not to block the user from using Auto fill in Safari. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The safariBlockAutofill
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariBlockAutofill($val)
    {
        $this->_propDict["safariBlockAutofill"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariBlocked
    * Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later.
    *
    * @return bool The safariBlocked
    */
    public function getSafariBlocked()
    {
        if (array_key_exists("safariBlocked", $this->_propDict)) {
            return $this->_propDict["safariBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlocked
    * Indicates whether or not to block the user from using Safari. Requires a supervised device for iOS 13 and later.
    *
    * @param bool $val The safariBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariBlocked($val)
    {
        $this->_propDict["safariBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariBlockJavaScript
    * Indicates whether or not to block JavaScript in Safari.
    *
    * @return bool The safariBlockJavaScript
    */
    public function getSafariBlockJavaScript()
    {
        if (array_key_exists("safariBlockJavaScript", $this->_propDict)) {
            return $this->_propDict["safariBlockJavaScript"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlockJavaScript
    * Indicates whether or not to block JavaScript in Safari.
    *
    * @param bool $val The safariBlockJavaScript
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariBlockJavaScript($val)
    {
        $this->_propDict["safariBlockJavaScript"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariBlockPopups
    * Indicates whether or not to block popups in Safari.
    *
    * @return bool The safariBlockPopups
    */
    public function getSafariBlockPopups()
    {
        if (array_key_exists("safariBlockPopups", $this->_propDict)) {
            return $this->_propDict["safariBlockPopups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlockPopups
    * Indicates whether or not to block popups in Safari.
    *
    * @param bool $val The safariBlockPopups
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariBlockPopups($val)
    {
        $this->_propDict["safariBlockPopups"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariCookieSettings
    * Cookie settings for Safari. Possible values are: browserDefault, blockAlways, allowCurrentWebSite, allowFromWebsitesVisited, allowAlways.
    *
    * @return WebBrowserCookieSettings The safariCookieSettings
    */
    public function getSafariCookieSettings()
    {
        if (array_key_exists("safariCookieSettings", $this->_propDict)) {
            if (is_a($this->_propDict["safariCookieSettings"], "\Microsoft\Graph\Model\WebBrowserCookieSettings")) {
                return $this->_propDict["safariCookieSettings"];
            } else {
                $this->_propDict["safariCookieSettings"] = new WebBrowserCookieSettings($this->_propDict["safariCookieSettings"]);
                return $this->_propDict["safariCookieSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the safariCookieSettings
    * Cookie settings for Safari. Possible values are: browserDefault, blockAlways, allowCurrentWebSite, allowFromWebsitesVisited, allowAlways.
    *
    * @param WebBrowserCookieSettings $val The safariCookieSettings
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariCookieSettings($val)
    {
        $this->_propDict["safariCookieSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the safariManagedDomains
    * URLs matching the patterns listed here will be considered managed.
    *
    * @return string The safariManagedDomains
    */
    public function getSafariManagedDomains()
    {
        if (array_key_exists("safariManagedDomains", $this->_propDict)) {
            return $this->_propDict["safariManagedDomains"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariManagedDomains
    * URLs matching the patterns listed here will be considered managed.
    *
    * @param string $val The safariManagedDomains
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariManagedDomains($val)
    {
        $this->_propDict["safariManagedDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the safariPasswordAutoFillDomains
    * Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later).
    *
    * @return string The safariPasswordAutoFillDomains
    */
    public function getSafariPasswordAutoFillDomains()
    {
        if (array_key_exists("safariPasswordAutoFillDomains", $this->_propDict)) {
            return $this->_propDict["safariPasswordAutoFillDomains"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariPasswordAutoFillDomains
    * Users can save passwords in Safari only from URLs matching the patterns listed here. Applies to devices in supervised mode (iOS 9.3 and later).
    *
    * @param string $val The safariPasswordAutoFillDomains
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariPasswordAutoFillDomains($val)
    {
        $this->_propDict["safariPasswordAutoFillDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the safariRequireFraudWarning
    * Indicates whether or not to require fraud warning in Safari.
    *
    * @return bool The safariRequireFraudWarning
    */
    public function getSafariRequireFraudWarning()
    {
        if (array_key_exists("safariRequireFraudWarning", $this->_propDict)) {
            return $this->_propDict["safariRequireFraudWarning"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariRequireFraudWarning
    * Indicates whether or not to require fraud warning in Safari.
    *
    * @param bool $val The safariRequireFraudWarning
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSafariRequireFraudWarning($val)
    {
        $this->_propDict["safariRequireFraudWarning"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the screenCaptureBlocked
    * Indicates whether or not to block the user from taking Screenshots.
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
    * Indicates whether or not to block the user from taking Screenshots.
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriBlocked
    * Indicates whether or not to block the user from using Siri.
    *
    * @return bool The siriBlocked
    */
    public function getSiriBlocked()
    {
        if (array_key_exists("siriBlocked", $this->_propDict)) {
            return $this->_propDict["siriBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriBlocked
    * Indicates whether or not to block the user from using Siri.
    *
    * @param bool $val The siriBlocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSiriBlocked($val)
    {
        $this->_propDict["siriBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriBlockedWhenLocked
    * Indicates whether or not to block the user from using Siri when locked.
    *
    * @return bool The siriBlockedWhenLocked
    */
    public function getSiriBlockedWhenLocked()
    {
        if (array_key_exists("siriBlockedWhenLocked", $this->_propDict)) {
            return $this->_propDict["siriBlockedWhenLocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriBlockedWhenLocked
    * Indicates whether or not to block the user from using Siri when locked.
    *
    * @param bool $val The siriBlockedWhenLocked
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSiriBlockedWhenLocked($val)
    {
        $this->_propDict["siriBlockedWhenLocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriBlockUserGeneratedContent
    * Indicates whether or not to block Siri from querying user-generated content when used on a supervised device.
    *
    * @return bool The siriBlockUserGeneratedContent
    */
    public function getSiriBlockUserGeneratedContent()
    {
        if (array_key_exists("siriBlockUserGeneratedContent", $this->_propDict)) {
            return $this->_propDict["siriBlockUserGeneratedContent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriBlockUserGeneratedContent
    * Indicates whether or not to block Siri from querying user-generated content when used on a supervised device.
    *
    * @param bool $val The siriBlockUserGeneratedContent
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSiriBlockUserGeneratedContent($val)
    {
        $this->_propDict["siriBlockUserGeneratedContent"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriRequireProfanityFilter
    * Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device.
    *
    * @return bool The siriRequireProfanityFilter
    */
    public function getSiriRequireProfanityFilter()
    {
        if (array_key_exists("siriRequireProfanityFilter", $this->_propDict)) {
            return $this->_propDict["siriRequireProfanityFilter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriRequireProfanityFilter
    * Indicates whether or not to prevent Siri from dictating, or speaking profane language on supervised device.
    *
    * @param bool $val The siriRequireProfanityFilter
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSiriRequireProfanityFilter($val)
    {
        $this->_propDict["siriRequireProfanityFilter"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the spotlightBlockInternetResults
    * Indicates whether or not to block Spotlight search from returning internet results on supervised device.
    *
    * @return bool The spotlightBlockInternetResults
    */
    public function getSpotlightBlockInternetResults()
    {
        if (array_key_exists("spotlightBlockInternetResults", $this->_propDict)) {
            return $this->_propDict["spotlightBlockInternetResults"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the spotlightBlockInternetResults
    * Indicates whether or not to block Spotlight search from returning internet results on supervised device.
    *
    * @param bool $val The spotlightBlockInternetResults
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setSpotlightBlockInternetResults($val)
    {
        $this->_propDict["spotlightBlockInternetResults"] = boolval($val);
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
    * @return IosGeneralDeviceConfiguration
    */
    public function setVoiceDialingBlocked($val)
    {
        $this->_propDict["voiceDialingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wallpaperBlockModification
    * Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) .
    *
    * @return bool The wallpaperBlockModification
    */
    public function getWallpaperBlockModification()
    {
        if (array_key_exists("wallpaperBlockModification", $this->_propDict)) {
            return $this->_propDict["wallpaperBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wallpaperBlockModification
    * Indicates whether or not to allow wallpaper modification on supervised device (iOS 9.0 and later) .
    *
    * @param bool $val The wallpaperBlockModification
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setWallpaperBlockModification($val)
    {
        $this->_propDict["wallpaperBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wiFiConnectOnlyToConfiguredNetworks
    * Indicates whether or not to force the device to use only Wi-Fi networks from configuration profiles when the device is in supervised mode.
    *
    * @return bool The wiFiConnectOnlyToConfiguredNetworks
    */
    public function getWiFiConnectOnlyToConfiguredNetworks()
    {
        if (array_key_exists("wiFiConnectOnlyToConfiguredNetworks", $this->_propDict)) {
            return $this->_propDict["wiFiConnectOnlyToConfiguredNetworks"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wiFiConnectOnlyToConfiguredNetworks
    * Indicates whether or not to force the device to use only Wi-Fi networks from configuration profiles when the device is in supervised mode.
    *
    * @param bool $val The wiFiConnectOnlyToConfiguredNetworks
    *
    * @return IosGeneralDeviceConfiguration
    */
    public function setWiFiConnectOnlyToConfiguredNetworks($val)
    {
        $this->_propDict["wiFiConnectOnlyToConfiguredNetworks"] = boolval($val);
        return $this;
    }
    
}
