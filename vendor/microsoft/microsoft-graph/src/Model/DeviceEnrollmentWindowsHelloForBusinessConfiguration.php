<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentWindowsHelloForBusinessConfiguration File
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
* DeviceEnrollmentWindowsHelloForBusinessConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentWindowsHelloForBusinessConfiguration extends DeviceEnrollmentConfiguration
{
    /**
    * Gets the enhancedBiometricsState
    * Controls the ability to use the anti-spoofing features for facial recognition on devices which support it. If set to disabled, anti-spoofing features are not allowed. If set to Not Configured, the user can choose whether they want to use anti-spoofing. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The enhancedBiometricsState
    */
    public function getEnhancedBiometricsState()
    {
        if (array_key_exists("enhancedBiometricsState", $this->_propDict)) {
            if (is_a($this->_propDict["enhancedBiometricsState"], "\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["enhancedBiometricsState"];
            } else {
                $this->_propDict["enhancedBiometricsState"] = new Enablement($this->_propDict["enhancedBiometricsState"]);
                return $this->_propDict["enhancedBiometricsState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enhancedBiometricsState
    * Controls the ability to use the anti-spoofing features for facial recognition on devices which support it. If set to disabled, anti-spoofing features are not allowed. If set to Not Configured, the user can choose whether they want to use anti-spoofing. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The enhancedBiometricsState
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setEnhancedBiometricsState($val)
    {
        $this->_propDict["enhancedBiometricsState"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinExpirationInDays
    * Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user's PIN will never expire
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
    * Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user's PIN will never expire
    *
    * @param int $val The pinExpirationInDays
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinExpirationInDays($val)
    {
        $this->_propDict["pinExpirationInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinLowercaseCharactersUsage
    * Controls the ability to use lowercase letters in the Windows Hello for Business PIN.  Allowed permits the use of lowercase letter(s), whereas Required ensures they are present. If set to Not Allowed, lowercase letters will not be permitted. Possible values are: allowed, required, disallowed.
    *
    * @return WindowsHelloForBusinessPinUsage The pinLowercaseCharactersUsage
    */
    public function getPinLowercaseCharactersUsage()
    {
        if (array_key_exists("pinLowercaseCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinLowercaseCharactersUsage"], "\Microsoft\Graph\Model\WindowsHelloForBusinessPinUsage")) {
                return $this->_propDict["pinLowercaseCharactersUsage"];
            } else {
                $this->_propDict["pinLowercaseCharactersUsage"] = new WindowsHelloForBusinessPinUsage($this->_propDict["pinLowercaseCharactersUsage"]);
                return $this->_propDict["pinLowercaseCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinLowercaseCharactersUsage
    * Controls the ability to use lowercase letters in the Windows Hello for Business PIN.  Allowed permits the use of lowercase letter(s), whereas Required ensures they are present. If set to Not Allowed, lowercase letters will not be permitted. Possible values are: allowed, required, disallowed.
    *
    * @param WindowsHelloForBusinessPinUsage $val The pinLowercaseCharactersUsage
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinLowercaseCharactersUsage($val)
    {
        $this->_propDict["pinLowercaseCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinMaximumLength
    * Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN.
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
    * Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN.
    *
    * @param int $val The pinMaximumLength
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinMaximumLength($val)
    {
        $this->_propDict["pinMaximumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinMinimumLength
    * Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN.
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
    * Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN.
    *
    * @param int $val The pinMinimumLength
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinMinimumLength($val)
    {
        $this->_propDict["pinMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinPreviousBlockCount
    * Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset.
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
    * Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset.
    *
    * @param int $val The pinPreviousBlockCount
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinPreviousBlockCount($val)
    {
        $this->_propDict["pinPreviousBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinSpecialCharactersUsage
    * Controls the ability to use special characters in the Windows Hello for Business PIN.  Allowed permits the use of special character(s), whereas Required ensures they are present. If set to Not Allowed, special character(s) will not be permitted. Possible values are: allowed, required, disallowed.
    *
    * @return WindowsHelloForBusinessPinUsage The pinSpecialCharactersUsage
    */
    public function getPinSpecialCharactersUsage()
    {
        if (array_key_exists("pinSpecialCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinSpecialCharactersUsage"], "\Microsoft\Graph\Model\WindowsHelloForBusinessPinUsage")) {
                return $this->_propDict["pinSpecialCharactersUsage"];
            } else {
                $this->_propDict["pinSpecialCharactersUsage"] = new WindowsHelloForBusinessPinUsage($this->_propDict["pinSpecialCharactersUsage"]);
                return $this->_propDict["pinSpecialCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinSpecialCharactersUsage
    * Controls the ability to use special characters in the Windows Hello for Business PIN.  Allowed permits the use of special character(s), whereas Required ensures they are present. If set to Not Allowed, special character(s) will not be permitted. Possible values are: allowed, required, disallowed.
    *
    * @param WindowsHelloForBusinessPinUsage $val The pinSpecialCharactersUsage
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinSpecialCharactersUsage($val)
    {
        $this->_propDict["pinSpecialCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinUppercaseCharactersUsage
    * Controls the ability to use uppercase letters in the Windows Hello for Business PIN.  Allowed permits the use of uppercase letter(s), whereas Required ensures they are present. If set to Not Allowed, uppercase letters will not be permitted. Possible values are: allowed, required, disallowed.
    *
    * @return WindowsHelloForBusinessPinUsage The pinUppercaseCharactersUsage
    */
    public function getPinUppercaseCharactersUsage()
    {
        if (array_key_exists("pinUppercaseCharactersUsage", $this->_propDict)) {
            if (is_a($this->_propDict["pinUppercaseCharactersUsage"], "\Microsoft\Graph\Model\WindowsHelloForBusinessPinUsage")) {
                return $this->_propDict["pinUppercaseCharactersUsage"];
            } else {
                $this->_propDict["pinUppercaseCharactersUsage"] = new WindowsHelloForBusinessPinUsage($this->_propDict["pinUppercaseCharactersUsage"]);
                return $this->_propDict["pinUppercaseCharactersUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinUppercaseCharactersUsage
    * Controls the ability to use uppercase letters in the Windows Hello for Business PIN.  Allowed permits the use of uppercase letter(s), whereas Required ensures they are present. If set to Not Allowed, uppercase letters will not be permitted. Possible values are: allowed, required, disallowed.
    *
    * @param WindowsHelloForBusinessPinUsage $val The pinUppercaseCharactersUsage
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setPinUppercaseCharactersUsage($val)
    {
        $this->_propDict["pinUppercaseCharactersUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the remotePassportEnabled
    * Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN.
    *
    * @return bool The remotePassportEnabled
    */
    public function getRemotePassportEnabled()
    {
        if (array_key_exists("remotePassportEnabled", $this->_propDict)) {
            return $this->_propDict["remotePassportEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remotePassportEnabled
    * Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN.
    *
    * @param bool $val The remotePassportEnabled
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setRemotePassportEnabled($val)
    {
        $this->_propDict["remotePassportEnabled"] = boolval($val);
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
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setSecurityDeviceRequired($val)
    {
        $this->_propDict["securityDeviceRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the state
    * Controls whether to allow the device to be configured for Windows Hello for Business. If set to disabled, the user cannot provision Windows Hello for Business except on Azure Active Directory joined mobile phones if otherwise required. If set to Not Configured, Intune will not override client defaults. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new Enablement($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * Controls whether to allow the device to be configured for Windows Hello for Business. If set to disabled, the user cannot provision Windows Hello for Business except on Azure Active Directory joined mobile phones if otherwise required. If set to Not Configured, Intune will not override client defaults. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The state
    *
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
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
    * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public function setUnlockWithBiometricsEnabled($val)
    {
        $this->_propDict["unlockWithBiometricsEnabled"] = boolval($val);
        return $this;
    }
    
}
