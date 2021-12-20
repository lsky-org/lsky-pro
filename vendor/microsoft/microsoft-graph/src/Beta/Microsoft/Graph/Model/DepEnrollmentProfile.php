<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepEnrollmentProfile File
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
* DepEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DepEnrollmentProfile extends EnrollmentProfile
{
    /**
    * Gets the appleIdDisabled
    * Indicates if Apple id setup pane is disabled
    *
    * @return bool The appleIdDisabled
    */
    public function getAppleIdDisabled()
    {
        if (array_key_exists("appleIdDisabled", $this->_propDict)) {
            return $this->_propDict["appleIdDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleIdDisabled
    * Indicates if Apple id setup pane is disabled
    *
    * @param bool $val The appleIdDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setAppleIdDisabled($val)
    {
        $this->_propDict["appleIdDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applePayDisabled
    * Indicates if Apple pay setup pane is disabled
    *
    * @return bool The applePayDisabled
    */
    public function getApplePayDisabled()
    {
        if (array_key_exists("applePayDisabled", $this->_propDict)) {
            return $this->_propDict["applePayDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applePayDisabled
    * Indicates if Apple pay setup pane is disabled
    *
    * @param bool $val The applePayDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setApplePayDisabled($val)
    {
        $this->_propDict["applePayDisabled"] = boolval($val);
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
    * @return DepEnrollmentProfile
    */
    public function setAwaitDeviceConfiguredConfirmation($val)
    {
        $this->_propDict["awaitDeviceConfiguredConfirmation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the diagnosticsDisabled
    * Indicates if diagnostics setup pane is disabled
    *
    * @return bool The diagnosticsDisabled
    */
    public function getDiagnosticsDisabled()
    {
        if (array_key_exists("diagnosticsDisabled", $this->_propDict)) {
            return $this->_propDict["diagnosticsDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the diagnosticsDisabled
    * Indicates if diagnostics setup pane is disabled
    *
    * @param bool $val The diagnosticsDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setDiagnosticsDisabled($val)
    {
        $this->_propDict["diagnosticsDisabled"] = boolval($val);
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
    * @return DepEnrollmentProfile
    */
    public function setEnableSharedIPad($val)
    {
        $this->_propDict["enableSharedIPad"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDefault
    * Indicates if this is the default profile
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    * Indicates if this is the default profile
    *
    * @param bool $val The isDefault
    *
    * @return DepEnrollmentProfile
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isMandatory
    * Indicates if the profile is mandatory
    *
    * @return bool The isMandatory
    */
    public function getIsMandatory()
    {
        if (array_key_exists("isMandatory", $this->_propDict)) {
            return $this->_propDict["isMandatory"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isMandatory
    * Indicates if the profile is mandatory
    *
    * @param bool $val The isMandatory
    *
    * @return DepEnrollmentProfile
    */
    public function setIsMandatory($val)
    {
        $this->_propDict["isMandatory"] = boolval($val);
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
    * @return DepEnrollmentProfile
    */
    public function setITunesPairingMode($val)
    {
        $this->_propDict["iTunesPairingMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the locationDisabled
    * Indicates if Location service setup pane is disabled
    *
    * @return bool The locationDisabled
    */
    public function getLocationDisabled()
    {
        if (array_key_exists("locationDisabled", $this->_propDict)) {
            return $this->_propDict["locationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locationDisabled
    * Indicates if Location service setup pane is disabled
    *
    * @param bool $val The locationDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setLocationDisabled($val)
    {
        $this->_propDict["locationDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the macOSFileVaultDisabled
    * Indicates if Mac OS file vault is disabled
    *
    * @return bool The macOSFileVaultDisabled
    */
    public function getMacOSFileVaultDisabled()
    {
        if (array_key_exists("macOSFileVaultDisabled", $this->_propDict)) {
            return $this->_propDict["macOSFileVaultDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the macOSFileVaultDisabled
    * Indicates if Mac OS file vault is disabled
    *
    * @param bool $val The macOSFileVaultDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setMacOSFileVaultDisabled($val)
    {
        $this->_propDict["macOSFileVaultDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the macOSRegistrationDisabled
    * Indicates if Mac OS registration is disabled
    *
    * @return bool The macOSRegistrationDisabled
    */
    public function getMacOSRegistrationDisabled()
    {
        if (array_key_exists("macOSRegistrationDisabled", $this->_propDict)) {
            return $this->_propDict["macOSRegistrationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the macOSRegistrationDisabled
    * Indicates if Mac OS registration is disabled
    *
    * @param bool $val The macOSRegistrationDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setMacOSRegistrationDisabled($val)
    {
        $this->_propDict["macOSRegistrationDisabled"] = boolval($val);
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
    * @return DepEnrollmentProfile
    */
    public function setManagementCertificates($val)
    {
		$this->_propDict["managementCertificates"] = $val;
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
    * @return DepEnrollmentProfile
    */
    public function setPassCodeDisabled($val)
    {
        $this->_propDict["passCodeDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the profileRemovalDisabled
    * Indicates if the profile removal option is disabled
    *
    * @return bool The profileRemovalDisabled
    */
    public function getProfileRemovalDisabled()
    {
        if (array_key_exists("profileRemovalDisabled", $this->_propDict)) {
            return $this->_propDict["profileRemovalDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profileRemovalDisabled
    * Indicates if the profile removal option is disabled
    *
    * @param bool $val The profileRemovalDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setProfileRemovalDisabled($val)
    {
        $this->_propDict["profileRemovalDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the restoreBlocked
    * Indicates if Restore setup pane is blocked
    *
    * @return bool The restoreBlocked
    */
    public function getRestoreBlocked()
    {
        if (array_key_exists("restoreBlocked", $this->_propDict)) {
            return $this->_propDict["restoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restoreBlocked
    * Indicates if Restore setup pane is blocked
    *
    * @param bool $val The restoreBlocked
    *
    * @return DepEnrollmentProfile
    */
    public function setRestoreBlocked($val)
    {
        $this->_propDict["restoreBlocked"] = boolval($val);
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
    * @return DepEnrollmentProfile
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
    * @return DepEnrollmentProfile
    */
    public function setSharedIPadMaximumUserCount($val)
    {
        $this->_propDict["sharedIPadMaximumUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the siriDisabled
    * Indicates if siri setup pane is disabled
    *
    * @return bool The siriDisabled
    */
    public function getSiriDisabled()
    {
        if (array_key_exists("siriDisabled", $this->_propDict)) {
            return $this->_propDict["siriDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriDisabled
    * Indicates if siri setup pane is disabled
    *
    * @param bool $val The siriDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setSiriDisabled($val)
    {
        $this->_propDict["siriDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the supervisedModeEnabled
    * Supervised mode, True to enable, false otherwise. See https://docs.microsoft.com/intune/deploy-use/enroll-devices-in-microsoft-intune for additional information.
    *
    * @return bool The supervisedModeEnabled
    */
    public function getSupervisedModeEnabled()
    {
        if (array_key_exists("supervisedModeEnabled", $this->_propDict)) {
            return $this->_propDict["supervisedModeEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supervisedModeEnabled
    * Supervised mode, True to enable, false otherwise. See https://docs.microsoft.com/intune/deploy-use/enroll-devices-in-microsoft-intune for additional information.
    *
    * @param bool $val The supervisedModeEnabled
    *
    * @return DepEnrollmentProfile
    */
    public function setSupervisedModeEnabled($val)
    {
        $this->_propDict["supervisedModeEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the supportDepartment
    * Support department information
    *
    * @return string The supportDepartment
    */
    public function getSupportDepartment()
    {
        if (array_key_exists("supportDepartment", $this->_propDict)) {
            return $this->_propDict["supportDepartment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportDepartment
    * Support department information
    *
    * @param string $val The supportDepartment
    *
    * @return DepEnrollmentProfile
    */
    public function setSupportDepartment($val)
    {
        $this->_propDict["supportDepartment"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportPhoneNumber
    * Support phone number
    *
    * @return string The supportPhoneNumber
    */
    public function getSupportPhoneNumber()
    {
        if (array_key_exists("supportPhoneNumber", $this->_propDict)) {
            return $this->_propDict["supportPhoneNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportPhoneNumber
    * Support phone number
    *
    * @param string $val The supportPhoneNumber
    *
    * @return DepEnrollmentProfile
    */
    public function setSupportPhoneNumber($val)
    {
        $this->_propDict["supportPhoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the termsAndConditionsDisabled
    * Indicates if 'Terms and Conditions' setup pane is disabled
    *
    * @return bool The termsAndConditionsDisabled
    */
    public function getTermsAndConditionsDisabled()
    {
        if (array_key_exists("termsAndConditionsDisabled", $this->_propDict)) {
            return $this->_propDict["termsAndConditionsDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the termsAndConditionsDisabled
    * Indicates if 'Terms and Conditions' setup pane is disabled
    *
    * @param bool $val The termsAndConditionsDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setTermsAndConditionsDisabled($val)
    {
        $this->_propDict["termsAndConditionsDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the touchIdDisabled
    * Indicates if touch id setup pane is disabled
    *
    * @return bool The touchIdDisabled
    */
    public function getTouchIdDisabled()
    {
        if (array_key_exists("touchIdDisabled", $this->_propDict)) {
            return $this->_propDict["touchIdDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the touchIdDisabled
    * Indicates if touch id setup pane is disabled
    *
    * @param bool $val The touchIdDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setTouchIdDisabled($val)
    {
        $this->_propDict["touchIdDisabled"] = boolval($val);
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
    * @return DepEnrollmentProfile
    */
    public function setZoomDisabled($val)
    {
        $this->_propDict["zoomDisabled"] = boolval($val);
        return $this;
    }
    
}
