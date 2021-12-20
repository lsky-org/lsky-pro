<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepIOSEnrollmentProfile File
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
* DepIOSEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DepIOSEnrollmentProfile extends DepEnrollmentBaseProfile
{
    /**
    * Gets the appearanceScreenDisabled
    * Indicates if Apperance screen is disabled
    *
    * @return bool The appearanceScreenDisabled
    */
    public function getAppearanceScreenDisabled()
    {
        if (array_key_exists("appearanceScreenDisabled", $this->_propDict)) {
            return $this->_propDict["appearanceScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appearanceScreenDisabled
    * Indicates if Apperance screen is disabled
    *
    * @param bool $val The appearanceScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setAppearanceScreenDisabled($val)
    {
        $this->_propDict["appearanceScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the awaitDeviceConfiguredConfirmation
    * Indicates if the device will need to wait for configured confirmation
    *
    * @return bool The awaitDeviceConfiguredConfirmation
    */
    public function getAwaitDeviceConfiguredConfirmation()
    {
        if (array_key_exists("awaitDeviceConfiguredConfirmation", $this->_propDict)) {
            return $this->_propDict["awaitDeviceConfiguredConfirmation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the awaitDeviceConfiguredConfirmation
    * Indicates if the device will need to wait for configured confirmation
    *
    * @param bool $val The awaitDeviceConfiguredConfirmation
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setAwaitDeviceConfiguredConfirmation($val)
    {
        $this->_propDict["awaitDeviceConfiguredConfirmation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the companyPortalVppTokenId
    * If set, indicates which Vpp token should be used to deploy the Company Portal w/ device licensing. 'enableAuthenticationViaCompanyPortal' must be set in order for this property to be set.
    *
    * @return string The companyPortalVppTokenId
    */
    public function getCompanyPortalVppTokenId()
    {
        if (array_key_exists("companyPortalVppTokenId", $this->_propDict)) {
            return $this->_propDict["companyPortalVppTokenId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the companyPortalVppTokenId
    * If set, indicates which Vpp token should be used to deploy the Company Portal w/ device licensing. 'enableAuthenticationViaCompanyPortal' must be set in order for this property to be set.
    *
    * @param string $val The companyPortalVppTokenId
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setCompanyPortalVppTokenId($val)
    {
        $this->_propDict["companyPortalVppTokenId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceToDeviceMigrationDisabled
    * Indicates if Device To Device Migration is disabled
    *
    * @return bool The deviceToDeviceMigrationDisabled
    */
    public function getDeviceToDeviceMigrationDisabled()
    {
        if (array_key_exists("deviceToDeviceMigrationDisabled", $this->_propDict)) {
            return $this->_propDict["deviceToDeviceMigrationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceToDeviceMigrationDisabled
    * Indicates if Device To Device Migration is disabled
    *
    * @param bool $val The deviceToDeviceMigrationDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setDeviceToDeviceMigrationDisabled($val)
    {
        $this->_propDict["deviceToDeviceMigrationDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableSharedIPad
    * This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
    *
    * @return bool The enableSharedIPad
    */
    public function getEnableSharedIPad()
    {
        if (array_key_exists("enableSharedIPad", $this->_propDict)) {
            return $this->_propDict["enableSharedIPad"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSharedIPad
    * This indicates whether the device is to be enrolled in a mode which enables multi user scenarios. Only applicable in shared iPads.
    *
    * @param bool $val The enableSharedIPad
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setEnableSharedIPad($val)
    {
        $this->_propDict["enableSharedIPad"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableSingleAppEnrollmentMode
    * Tells the device to enable single app mode and apply app-lock during enrollment. Default is false. 'enableAuthenticationViaCompanyPortal' and 'companyPortalVppTokenId' must be set for this property to be set.
    *
    * @return bool The enableSingleAppEnrollmentMode
    */
    public function getEnableSingleAppEnrollmentMode()
    {
        if (array_key_exists("enableSingleAppEnrollmentMode", $this->_propDict)) {
            return $this->_propDict["enableSingleAppEnrollmentMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSingleAppEnrollmentMode
    * Tells the device to enable single app mode and apply app-lock during enrollment. Default is false. 'enableAuthenticationViaCompanyPortal' and 'companyPortalVppTokenId' must be set for this property to be set.
    *
    * @param bool $val The enableSingleAppEnrollmentMode
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setEnableSingleAppEnrollmentMode($val)
    {
        $this->_propDict["enableSingleAppEnrollmentMode"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the expressLanguageScreenDisabled
    * Indicates if Express Language screen is disabled
    *
    * @return bool The expressLanguageScreenDisabled
    */
    public function getExpressLanguageScreenDisabled()
    {
        if (array_key_exists("expressLanguageScreenDisabled", $this->_propDict)) {
            return $this->_propDict["expressLanguageScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the expressLanguageScreenDisabled
    * Indicates if Express Language screen is disabled
    *
    * @param bool $val The expressLanguageScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setExpressLanguageScreenDisabled($val)
    {
        $this->_propDict["expressLanguageScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the homeButtonScreenDisabled
    * Indicates if home button sensitivity screen is disabled
    *
    * @return bool The homeButtonScreenDisabled
    */
    public function getHomeButtonScreenDisabled()
    {
        if (array_key_exists("homeButtonScreenDisabled", $this->_propDict)) {
            return $this->_propDict["homeButtonScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the homeButtonScreenDisabled
    * Indicates if home button sensitivity screen is disabled
    *
    * @param bool $val The homeButtonScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setHomeButtonScreenDisabled($val)
    {
        $this->_propDict["homeButtonScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iMessageAndFaceTimeScreenDisabled
    * Indicates if iMessage and FaceTime screen is disabled
    *
    * @return bool The iMessageAndFaceTimeScreenDisabled
    */
    public function getIMessageAndFaceTimeScreenDisabled()
    {
        if (array_key_exists("iMessageAndFaceTimeScreenDisabled", $this->_propDict)) {
            return $this->_propDict["iMessageAndFaceTimeScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iMessageAndFaceTimeScreenDisabled
    * Indicates if iMessage and FaceTime screen is disabled
    *
    * @param bool $val The iMessageAndFaceTimeScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setIMessageAndFaceTimeScreenDisabled($val)
    {
        $this->_propDict["iMessageAndFaceTimeScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesPairingMode
    * Indicates the iTunes pairing mode. Possible values are: disallow, allow, requiresCertificate.
    *
    * @return ITunesPairingMode The iTunesPairingMode
    */
    public function getITunesPairingMode()
    {
        if (array_key_exists("iTunesPairingMode", $this->_propDict)) {
            if (is_a($this->_propDict["iTunesPairingMode"], "\Beta\Microsoft\Graph\Model\ITunesPairingMode")) {
                return $this->_propDict["iTunesPairingMode"];
            } else {
                $this->_propDict["iTunesPairingMode"] = new ITunesPairingMode($this->_propDict["iTunesPairingMode"]);
                return $this->_propDict["iTunesPairingMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the iTunesPairingMode
    * Indicates the iTunes pairing mode. Possible values are: disallow, allow, requiresCertificate.
    *
    * @param ITunesPairingMode $val The iTunesPairingMode
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setITunesPairingMode($val)
    {
        $this->_propDict["iTunesPairingMode"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementCertificates
    * Management certificates for Apple Configurator
     *
     * @return array The managementCertificates
     */
    public function getManagementCertificates()
    {
        if (array_key_exists("managementCertificates", $this->_propDict)) {
           return $this->_propDict["managementCertificates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementCertificates
    * Management certificates for Apple Configurator
    *
    * @param ManagementCertificateWithThumbprint $val The managementCertificates
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setManagementCertificates($val)
    {
		$this->_propDict["managementCertificates"] = $val;
        return $this;
    }
    
    /**
    * Gets the onBoardingScreenDisabled
    * Indicates if onboarding setup screen is disabled
    *
    * @return bool The onBoardingScreenDisabled
    */
    public function getOnBoardingScreenDisabled()
    {
        if (array_key_exists("onBoardingScreenDisabled", $this->_propDict)) {
            return $this->_propDict["onBoardingScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onBoardingScreenDisabled
    * Indicates if onboarding setup screen is disabled
    *
    * @param bool $val The onBoardingScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setOnBoardingScreenDisabled($val)
    {
        $this->_propDict["onBoardingScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passCodeDisabled
    * Indicates if Passcode setup pane is disabled
    *
    * @return bool The passCodeDisabled
    */
    public function getPassCodeDisabled()
    {
        if (array_key_exists("passCodeDisabled", $this->_propDict)) {
            return $this->_propDict["passCodeDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passCodeDisabled
    * Indicates if Passcode setup pane is disabled
    *
    * @param bool $val The passCodeDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setPassCodeDisabled($val)
    {
        $this->_propDict["passCodeDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the preferredLanguageScreenDisabled
    * Indicates if Preferred language screen is disabled
    *
    * @return bool The preferredLanguageScreenDisabled
    */
    public function getPreferredLanguageScreenDisabled()
    {
        if (array_key_exists("preferredLanguageScreenDisabled", $this->_propDict)) {
            return $this->_propDict["preferredLanguageScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredLanguageScreenDisabled
    * Indicates if Preferred language screen is disabled
    *
    * @param bool $val The preferredLanguageScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setPreferredLanguageScreenDisabled($val)
    {
        $this->_propDict["preferredLanguageScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the restoreCompletedScreenDisabled
    * Indicates if Weclome screen is disabled
    *
    * @return bool The restoreCompletedScreenDisabled
    */
    public function getRestoreCompletedScreenDisabled()
    {
        if (array_key_exists("restoreCompletedScreenDisabled", $this->_propDict)) {
            return $this->_propDict["restoreCompletedScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restoreCompletedScreenDisabled
    * Indicates if Weclome screen is disabled
    *
    * @param bool $val The restoreCompletedScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setRestoreCompletedScreenDisabled($val)
    {
        $this->_propDict["restoreCompletedScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the restoreFromAndroidDisabled
    * Indicates if Restore from Android is disabled
    *
    * @return bool The restoreFromAndroidDisabled
    */
    public function getRestoreFromAndroidDisabled()
    {
        if (array_key_exists("restoreFromAndroidDisabled", $this->_propDict)) {
            return $this->_propDict["restoreFromAndroidDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restoreFromAndroidDisabled
    * Indicates if Restore from Android is disabled
    *
    * @param bool $val The restoreFromAndroidDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setRestoreFromAndroidDisabled($val)
    {
        $this->_propDict["restoreFromAndroidDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the sharedIPadMaximumUserCount
    * This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
    *
    * @return int The sharedIPadMaximumUserCount
    */
    public function getSharedIPadMaximumUserCount()
    {
        if (array_key_exists("sharedIPadMaximumUserCount", $this->_propDict)) {
            return $this->_propDict["sharedIPadMaximumUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharedIPadMaximumUserCount
    * This specifies the maximum number of users that can use a shared iPad. Only applicable in shared iPad mode.
    *
    * @param int $val The sharedIPadMaximumUserCount
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setSharedIPadMaximumUserCount($val)
    {
        $this->_propDict["sharedIPadMaximumUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the simSetupScreenDisabled
    * Indicates if the SIMSetup screen is disabled
    *
    * @return bool The simSetupScreenDisabled
    */
    public function getSimSetupScreenDisabled()
    {
        if (array_key_exists("simSetupScreenDisabled", $this->_propDict)) {
            return $this->_propDict["simSetupScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the simSetupScreenDisabled
    * Indicates if the SIMSetup screen is disabled
    *
    * @param bool $val The simSetupScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setSimSetupScreenDisabled($val)
    {
        $this->_propDict["simSetupScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the softwareUpdateScreenDisabled
    * Indicates if the mandatory sofware update screen is disabled
    *
    * @return bool The softwareUpdateScreenDisabled
    */
    public function getSoftwareUpdateScreenDisabled()
    {
        if (array_key_exists("softwareUpdateScreenDisabled", $this->_propDict)) {
            return $this->_propDict["softwareUpdateScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the softwareUpdateScreenDisabled
    * Indicates if the mandatory sofware update screen is disabled
    *
    * @param bool $val The softwareUpdateScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setSoftwareUpdateScreenDisabled($val)
    {
        $this->_propDict["softwareUpdateScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the updateCompleteScreenDisabled
    * Indicates if Weclome screen is disabled
    *
    * @return bool The updateCompleteScreenDisabled
    */
    public function getUpdateCompleteScreenDisabled()
    {
        if (array_key_exists("updateCompleteScreenDisabled", $this->_propDict)) {
            return $this->_propDict["updateCompleteScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the updateCompleteScreenDisabled
    * Indicates if Weclome screen is disabled
    *
    * @param bool $val The updateCompleteScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setUpdateCompleteScreenDisabled($val)
    {
        $this->_propDict["updateCompleteScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the watchMigrationScreenDisabled
    * Indicates if the watch migration screen is disabled
    *
    * @return bool The watchMigrationScreenDisabled
    */
    public function getWatchMigrationScreenDisabled()
    {
        if (array_key_exists("watchMigrationScreenDisabled", $this->_propDict)) {
            return $this->_propDict["watchMigrationScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the watchMigrationScreenDisabled
    * Indicates if the watch migration screen is disabled
    *
    * @param bool $val The watchMigrationScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setWatchMigrationScreenDisabled($val)
    {
        $this->_propDict["watchMigrationScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the welcomeScreenDisabled
    * Indicates if Weclome screen is disabled
    *
    * @return bool The welcomeScreenDisabled
    */
    public function getWelcomeScreenDisabled()
    {
        if (array_key_exists("welcomeScreenDisabled", $this->_propDict)) {
            return $this->_propDict["welcomeScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the welcomeScreenDisabled
    * Indicates if Weclome screen is disabled
    *
    * @param bool $val The welcomeScreenDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setWelcomeScreenDisabled($val)
    {
        $this->_propDict["welcomeScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the zoomDisabled
    * Indicates if zoom setup pane is disabled
    *
    * @return bool The zoomDisabled
    */
    public function getZoomDisabled()
    {
        if (array_key_exists("zoomDisabled", $this->_propDict)) {
            return $this->_propDict["zoomDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the zoomDisabled
    * Indicates if zoom setup pane is disabled
    *
    * @param bool $val The zoomDisabled
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setZoomDisabled($val)
    {
        $this->_propDict["zoomDisabled"] = boolval($val);
        return $this;
    }
    
}
