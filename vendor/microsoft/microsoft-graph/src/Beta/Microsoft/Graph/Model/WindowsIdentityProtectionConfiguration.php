<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsIdentityProtectionConfiguration File
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
* WindowsIdentityProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsIdentityProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the enhancedAntiSpoofingForFacialFeaturesEnabled
    * Boolean value used to enable enhanced anti-spoofing for facial feature recognition on Windows Hello face authentication.
    *
    * @return bool The enhancedAntiSpoofingForFacialFeaturesEnabled
    */
    public function getEnhancedAntiSpoofingForFacialFeaturesEnabled()
    {
        if (array_key_exists("enhancedAntiSpoofingForFacialFeaturesEnabled", $this->_propDict)) {
            return $this->_propDict["enhancedAntiSpoofingForFacialFeaturesEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enhancedAntiSpoofingForFacialFeaturesEnabled
    * Boolean value used to enable enhanced anti-spoofing for facial feature recognition on Windows Hello face authentication.
    *
    * @param bool $val The enhancedAntiSpoofingForFacialFeaturesEnabled
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setEnhancedAntiSpoofingForFacialFeaturesEnabled($val)
    {
        $this->_propDict["enhancedAntiSpoofingForFacialFeaturesEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the pinExpirationInDays
    * Integer value specifies the period (in days) that a PIN can be used before the system requires the user to change it. Valid values are 0 to 730 inclusive. Valid values 0 to 730
    *
    * @return int The pinExpirationInDays
    */
    public function getPinExpirationInDays()
    {
        if (array_key_exists("pinExpirationInDays", $this->_propDict)) {
            return $this->_propDict["pinExpirationInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinExpirationInDays
    * Integer value specifies the period (in days) that a PIN can be used before the system requires the user to change it. Valid values are 0 to 730 inclusive. Valid values 0 to 730
    *
    * @param int $val The pinExpirationInDays
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinExpirationInDays($val)
    {
        $this->_propDict["pinExpirationInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinLowercaseCharactersUsage
    * This value configures the use of lowercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @return ConfigurationUsage The pinLowercaseCharactersUsage
    */
    public function getPinLowercaseCharactersUsage()
    {
        if (array_key_exists("pinLowercaseCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinLowercaseCharactersUsage"], "\Beta\Microsoft\Graph\Model\ConfigurationUsage")) {
                return $this->_propDict["pinLowercaseCharactersUsage"];
            } else {
                $this->_propDict["pinLowercaseCharactersUsage"] = new ConfigurationUsage($this->_propDict["pinLowercaseCharactersUsage"]);
                return $this->_propDict["pinLowercaseCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinLowercaseCharactersUsage
    * This value configures the use of lowercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @param ConfigurationUsage $val The pinLowercaseCharactersUsage
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinLowercaseCharactersUsage($val)
    {
        $this->_propDict["pinLowercaseCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinMaximumLength
    * Integer value that sets the maximum number of characters allowed for the work PIN. Valid values are 4 to 127 inclusive and greater than or equal to the value set for the minimum PIN. Valid values 4 to 127
    *
    * @return int The pinMaximumLength
    */
    public function getPinMaximumLength()
    {
        if (array_key_exists("pinMaximumLength", $this->_propDict)) {
            return $this->_propDict["pinMaximumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinMaximumLength
    * Integer value that sets the maximum number of characters allowed for the work PIN. Valid values are 4 to 127 inclusive and greater than or equal to the value set for the minimum PIN. Valid values 4 to 127
    *
    * @param int $val The pinMaximumLength
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinMaximumLength($val)
    {
        $this->_propDict["pinMaximumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinMinimumLength
    * Integer value that sets the minimum number of characters required for the Windows Hello for Business PIN. Valid values are 4 to 127 inclusive and less than or equal to the value set for the maximum PIN. Valid values 4 to 127
    *
    * @return int The pinMinimumLength
    */
    public function getPinMinimumLength()
    {
        if (array_key_exists("pinMinimumLength", $this->_propDict)) {
            return $this->_propDict["pinMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinMinimumLength
    * Integer value that sets the minimum number of characters required for the Windows Hello for Business PIN. Valid values are 4 to 127 inclusive and less than or equal to the value set for the maximum PIN. Valid values 4 to 127
    *
    * @param int $val The pinMinimumLength
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinMinimumLength($val)
    {
        $this->_propDict["pinMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinPreviousBlockCount
    * Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset. Valid values 0 to 50
    *
    * @return int The pinPreviousBlockCount
    */
    public function getPinPreviousBlockCount()
    {
        if (array_key_exists("pinPreviousBlockCount", $this->_propDict)) {
            return $this->_propDict["pinPreviousBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinPreviousBlockCount
    * Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset. Valid values 0 to 50
    *
    * @param int $val The pinPreviousBlockCount
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinPreviousBlockCount($val)
    {
        $this->_propDict["pinPreviousBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinRecoveryEnabled
    * Boolean value that enables a user to change their PIN by using the Windows Hello for Business PIN recovery service.
    *
    * @return bool The pinRecoveryEnabled
    */
    public function getPinRecoveryEnabled()
    {
        if (array_key_exists("pinRecoveryEnabled", $this->_propDict)) {
            return $this->_propDict["pinRecoveryEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinRecoveryEnabled
    * Boolean value that enables a user to change their PIN by using the Windows Hello for Business PIN recovery service.
    *
    * @param bool $val The pinRecoveryEnabled
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinRecoveryEnabled($val)
    {
        $this->_propDict["pinRecoveryEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the pinSpecialCharactersUsage
    * Controls the ability to use special characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @return ConfigurationUsage The pinSpecialCharactersUsage
    */
    public function getPinSpecialCharactersUsage()
    {
        if (array_key_exists("pinSpecialCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinSpecialCharactersUsage"], "\Beta\Microsoft\Graph\Model\ConfigurationUsage")) {
                return $this->_propDict["pinSpecialCharactersUsage"];
            } else {
                $this->_propDict["pinSpecialCharactersUsage"] = new ConfigurationUsage($this->_propDict["pinSpecialCharactersUsage"]);
                return $this->_propDict["pinSpecialCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinSpecialCharactersUsage
    * Controls the ability to use special characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @param ConfigurationUsage $val The pinSpecialCharactersUsage
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinSpecialCharactersUsage($val)
    {
        $this->_propDict["pinSpecialCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinUppercaseCharactersUsage
    * This value configures the use of uppercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @return ConfigurationUsage The pinUppercaseCharactersUsage
    */
    public function getPinUppercaseCharactersUsage()
    {
        if (array_key_exists("pinUppercaseCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinUppercaseCharactersUsage"], "\Beta\Microsoft\Graph\Model\ConfigurationUsage")) {
                return $this->_propDict["pinUppercaseCharactersUsage"];
            } else {
                $this->_propDict["pinUppercaseCharactersUsage"] = new ConfigurationUsage($this->_propDict["pinUppercaseCharactersUsage"]);
                return $this->_propDict["pinUppercaseCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinUppercaseCharactersUsage
    * This value configures the use of uppercase characters in the Windows Hello for Business PIN. Possible values are: blocked, required, allowed, notConfigured.
    *
    * @param ConfigurationUsage $val The pinUppercaseCharactersUsage
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setPinUppercaseCharactersUsage($val)
    {
        $this->_propDict["pinUppercaseCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityDeviceRequired
    * Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
    *
    * @return bool The securityDeviceRequired
    */
    public function getSecurityDeviceRequired()
    {
        if (array_key_exists("securityDeviceRequired", $this->_propDict)) {
            return $this->_propDict["securityDeviceRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityDeviceRequired
    * Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
    *
    * @param bool $val The securityDeviceRequired
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setSecurityDeviceRequired($val)
    {
        $this->_propDict["securityDeviceRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the unlockWithBiometricsEnabled
    * Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
    *
    * @return bool The unlockWithBiometricsEnabled
    */
    public function getUnlockWithBiometricsEnabled()
    {
        if (array_key_exists("unlockWithBiometricsEnabled", $this->_propDict)) {
            return $this->_propDict["unlockWithBiometricsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unlockWithBiometricsEnabled
    * Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
    *
    * @param bool $val The unlockWithBiometricsEnabled
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setUnlockWithBiometricsEnabled($val)
    {
        $this->_propDict["unlockWithBiometricsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the useCertificatesForOnPremisesAuthEnabled
    * Boolean value that enables Windows Hello for Business to use certificates to authenticate on-premise resources.
    *
    * @return bool The useCertificatesForOnPremisesAuthEnabled
    */
    public function getUseCertificatesForOnPremisesAuthEnabled()
    {
        if (array_key_exists("useCertificatesForOnPremisesAuthEnabled", $this->_propDict)) {
            return $this->_propDict["useCertificatesForOnPremisesAuthEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the useCertificatesForOnPremisesAuthEnabled
    * Boolean value that enables Windows Hello for Business to use certificates to authenticate on-premise resources.
    *
    * @param bool $val The useCertificatesForOnPremisesAuthEnabled
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setUseCertificatesForOnPremisesAuthEnabled($val)
    {
        $this->_propDict["useCertificatesForOnPremisesAuthEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the useSecurityKeyForSignin
    * Boolean value used to enable the Windows Hello security key as a logon credential.
    *
    * @return bool The useSecurityKeyForSignin
    */
    public function getUseSecurityKeyForSignin()
    {
        if (array_key_exists("useSecurityKeyForSignin", $this->_propDict)) {
            return $this->_propDict["useSecurityKeyForSignin"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the useSecurityKeyForSignin
    * Boolean value used to enable the Windows Hello security key as a logon credential.
    *
    * @param bool $val The useSecurityKeyForSignin
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setUseSecurityKeyForSignin($val)
    {
        $this->_propDict["useSecurityKeyForSignin"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsHelloForBusinessBlocked
    * Boolean value that blocks Windows Hello for Business as a method for signing into Windows.
    *
    * @return bool The windowsHelloForBusinessBlocked
    */
    public function getWindowsHelloForBusinessBlocked()
    {
        if (array_key_exists("windowsHelloForBusinessBlocked", $this->_propDict)) {
            return $this->_propDict["windowsHelloForBusinessBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsHelloForBusinessBlocked
    * Boolean value that blocks Windows Hello for Business as a method for signing into Windows.
    *
    * @param bool $val The windowsHelloForBusinessBlocked
    *
    * @return WindowsIdentityProtectionConfiguration
    */
    public function setWindowsHelloForBusinessBlocked($val)
    {
        $this->_propDict["windowsHelloForBusinessBlocked"] = boolval($val);
        return $this;
    }
    
}
