<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerCompliancePolicy File
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
* AndroidDeviceOwnerCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerCompliancePolicy extends DeviceCompliancePolicy
{
    /**
    * Gets the advancedThreatProtectionRequiredSecurityLevel
    * MDATP Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    *
    * @return DeviceThreatProtectionLevel The advancedThreatProtectionRequiredSecurityLevel
    */
    public function getAdvancedThreatProtectionRequiredSecurityLevel()
    {
        if (array_key_exists("advancedThreatProtectionRequiredSecurityLevel", $this->_propDict)) {
            if (is_a($this->_propDict["advancedThreatProtectionRequiredSecurityLevel"], "\Beta\Microsoft\Graph\Model\DeviceThreatProtectionLevel")) {
                return $this->_propDict["advancedThreatProtectionRequiredSecurityLevel"];
            } else {
                $this->_propDict["advancedThreatProtectionRequiredSecurityLevel"] = new DeviceThreatProtectionLevel($this->_propDict["advancedThreatProtectionRequiredSecurityLevel"]);
                return $this->_propDict["advancedThreatProtectionRequiredSecurityLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the advancedThreatProtectionRequiredSecurityLevel
    * MDATP Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    *
    * @param DeviceThreatProtectionLevel $val The advancedThreatProtectionRequiredSecurityLevel
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setAdvancedThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["advancedThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceThreatProtectionEnabled
    * Require that devices have enabled device threat protection.
    *
    * @return bool The deviceThreatProtectionEnabled
    */
    public function getDeviceThreatProtectionEnabled()
    {
        if (array_key_exists("deviceThreatProtectionEnabled", $this->_propDict)) {
            return $this->_propDict["deviceThreatProtectionEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceThreatProtectionEnabled
    * Require that devices have enabled device threat protection.
    *
    * @param bool $val The deviceThreatProtectionEnabled
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setDeviceThreatProtectionEnabled($val)
    {
        $this->_propDict["deviceThreatProtectionEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceThreatProtectionRequiredSecurityLevel
    * Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    *
    * @return DeviceThreatProtectionLevel The deviceThreatProtectionRequiredSecurityLevel
    */
    public function getDeviceThreatProtectionRequiredSecurityLevel()
    {
        if (array_key_exists("deviceThreatProtectionRequiredSecurityLevel", $this->_propDict)) {
            if (is_a($this->_propDict["deviceThreatProtectionRequiredSecurityLevel"], "\Beta\Microsoft\Graph\Model\DeviceThreatProtectionLevel")) {
                return $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"];
            } else {
                $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = new DeviceThreatProtectionLevel($this->_propDict["deviceThreatProtectionRequiredSecurityLevel"]);
                return $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceThreatProtectionRequiredSecurityLevel
    * Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    *
    * @param DeviceThreatProtectionLevel $val The deviceThreatProtectionRequiredSecurityLevel
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the minAndroidSecurityPatchLevel
    * Minimum Android security patch level.
    *
    * @return string The minAndroidSecurityPatchLevel
    */
    public function getMinAndroidSecurityPatchLevel()
    {
        if (array_key_exists("minAndroidSecurityPatchLevel", $this->_propDict)) {
            return $this->_propDict["minAndroidSecurityPatchLevel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minAndroidSecurityPatchLevel
    * Minimum Android security patch level.
    *
    * @param string $val The minAndroidSecurityPatchLevel
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setMinAndroidSecurityPatchLevel($val)
    {
        $this->_propDict["minAndroidSecurityPatchLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMaximumVersion
    * Maximum Android version.
    *
    * @return string The osMaximumVersion
    */
    public function getOsMaximumVersion()
    {
        if (array_key_exists("osMaximumVersion", $this->_propDict)) {
            return $this->_propDict["osMaximumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osMaximumVersion
    * Maximum Android version.
    *
    * @param string $val The osMaximumVersion
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMinimumVersion
    * Minimum Android version.
    *
    * @return string The osMinimumVersion
    */
    public function getOsMinimumVersion()
    {
        if (array_key_exists("osMinimumVersion", $this->_propDict)) {
            return $this->_propDict["osMinimumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osMinimumVersion
    * Minimum Android version.
    *
    * @param string $val The osMinimumVersion
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setOsMinimumVersion($val)
    {
        $this->_propDict["osMinimumVersion"] = $val;
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
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    * Minimum password length. Valid values 4 to 16
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
    * Minimum password length. Valid values 4 to 16
    *
    * @param int $val The passwordMinimumLength
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLetterCharacters
    * Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumLetterCharacters
    */
    public function getPasswordMinimumLetterCharacters()
    {
        if (array_key_exists("passwordMinimumLetterCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLetterCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumLetterCharacters
    * Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumLetterCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumLetterCharacters($val)
    {
        $this->_propDict["passwordMinimumLetterCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLowerCaseCharacters
    * Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumLowerCaseCharacters
    */
    public function getPasswordMinimumLowerCaseCharacters()
    {
        if (array_key_exists("passwordMinimumLowerCaseCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLowerCaseCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumLowerCaseCharacters
    * Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumLowerCaseCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumLowerCaseCharacters($val)
    {
        $this->_propDict["passwordMinimumLowerCaseCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumNonLetterCharacters
    * Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumNonLetterCharacters
    */
    public function getPasswordMinimumNonLetterCharacters()
    {
        if (array_key_exists("passwordMinimumNonLetterCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumNonLetterCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumNonLetterCharacters
    * Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumNonLetterCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumNonLetterCharacters($val)
    {
        $this->_propDict["passwordMinimumNonLetterCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumNumericCharacters
    * Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumNumericCharacters
    */
    public function getPasswordMinimumNumericCharacters()
    {
        if (array_key_exists("passwordMinimumNumericCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumNumericCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumNumericCharacters
    * Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumNumericCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumNumericCharacters($val)
    {
        $this->_propDict["passwordMinimumNumericCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumSymbolCharacters
    * Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumSymbolCharacters
    */
    public function getPasswordMinimumSymbolCharacters()
    {
        if (array_key_exists("passwordMinimumSymbolCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumSymbolCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumSymbolCharacters
    * Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumSymbolCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumSymbolCharacters($val)
    {
        $this->_propDict["passwordMinimumSymbolCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumUpperCaseCharacters
    * Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
    *
    * @return int The passwordMinimumUpperCaseCharacters
    */
    public function getPasswordMinimumUpperCaseCharacters()
    {
        if (array_key_exists("passwordMinimumUpperCaseCharacters", $this->_propDict)) {
            return $this->_propDict["passwordMinimumUpperCaseCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumUpperCaseCharacters
    * Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
    *
    * @param int $val The passwordMinimumUpperCaseCharacters
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinimumUpperCaseCharacters($val)
    {
        $this->_propDict["passwordMinimumUpperCaseCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeLock
    * Minutes of inactivity before a password is required.
    *
    * @return int The passwordMinutesOfInactivityBeforeLock
    */
    public function getPasswordMinutesOfInactivityBeforeLock()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeLock", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinutesOfInactivityBeforeLock
    * Minutes of inactivity before a password is required.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeLock
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordCountToBlock
    * Number of previous passwords to block. Valid values 1 to 24
    *
    * @return int The passwordPreviousPasswordCountToBlock
    */
    public function getPasswordPreviousPasswordCountToBlock()
    {
        if (array_key_exists("passwordPreviousPasswordCountToBlock", $this->_propDict)) {
            return $this->_propDict["passwordPreviousPasswordCountToBlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordPreviousPasswordCountToBlock
    * Number of previous passwords to block. Valid values 1 to 24
    *
    * @param int $val The passwordPreviousPasswordCountToBlock
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordPreviousPasswordCountToBlock($val)
    {
        $this->_propDict["passwordPreviousPasswordCountToBlock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequired
    * Require a password to unlock device.
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
    * Require a password to unlock device.
    *
    * @param bool $val The passwordRequired
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    * Type of characters in password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    *
    * @return AndroidDeviceOwnerRequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerRequiredPasswordType")) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new AndroidDeviceOwnerRequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordRequiredType
    * Type of characters in password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    *
    * @param AndroidDeviceOwnerRequiredPasswordType $val The passwordRequiredType
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityRequireSafetyNetAttestationBasicIntegrity
    * Require the device to pass the SafetyNet basic integrity check.
    *
    * @return bool The securityRequireSafetyNetAttestationBasicIntegrity
    */
    public function getSecurityRequireSafetyNetAttestationBasicIntegrity()
    {
        if (array_key_exists("securityRequireSafetyNetAttestationBasicIntegrity", $this->_propDict)) {
            return $this->_propDict["securityRequireSafetyNetAttestationBasicIntegrity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireSafetyNetAttestationBasicIntegrity
    * Require the device to pass the SafetyNet basic integrity check.
    *
    * @param bool $val The securityRequireSafetyNetAttestationBasicIntegrity
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity($val)
    {
        $this->_propDict["securityRequireSafetyNetAttestationBasicIntegrity"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireSafetyNetAttestationCertifiedDevice
    * Require the device to pass the SafetyNet certified device check.
    *
    * @return bool The securityRequireSafetyNetAttestationCertifiedDevice
    */
    public function getSecurityRequireSafetyNetAttestationCertifiedDevice()
    {
        if (array_key_exists("securityRequireSafetyNetAttestationCertifiedDevice", $this->_propDict)) {
            return $this->_propDict["securityRequireSafetyNetAttestationCertifiedDevice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireSafetyNetAttestationCertifiedDevice
    * Require the device to pass the SafetyNet certified device check.
    *
    * @param bool $val The securityRequireSafetyNetAttestationCertifiedDevice
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice($val)
    {
        $this->_propDict["securityRequireSafetyNetAttestationCertifiedDevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireEncryption
    * Require encryption on Android devices.
    *
    * @return bool The storageRequireEncryption
    */
    public function getStorageRequireEncryption()
    {
        if (array_key_exists("storageRequireEncryption", $this->_propDict)) {
            return $this->_propDict["storageRequireEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRequireEncryption
    * Require encryption on Android devices.
    *
    * @param bool $val The storageRequireEncryption
    *
    * @return AndroidDeviceOwnerCompliancePolicy
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
        return $this;
    }
    
}
