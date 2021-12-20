<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10CompliancePolicy File
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
* Windows10CompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10CompliancePolicy extends DeviceCompliancePolicy
{
    /**
    * Gets the activeFirewallRequired
    * Require active firewall on Windows devices.
    *
    * @return bool The activeFirewallRequired
    */
    public function getActiveFirewallRequired()
    {
        if (array_key_exists("activeFirewallRequired", $this->_propDict)) {
            return $this->_propDict["activeFirewallRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeFirewallRequired
    * Require active firewall on Windows devices.
    *
    * @param bool $val The activeFirewallRequired
    *
    * @return Windows10CompliancePolicy
    */
    public function setActiveFirewallRequired($val)
    {
        $this->_propDict["activeFirewallRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the antiSpywareRequired
    * Require any AntiSpyware solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
    *
    * @return bool The antiSpywareRequired
    */
    public function getAntiSpywareRequired()
    {
        if (array_key_exists("antiSpywareRequired", $this->_propDict)) {
            return $this->_propDict["antiSpywareRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the antiSpywareRequired
    * Require any AntiSpyware solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
    *
    * @param bool $val The antiSpywareRequired
    *
    * @return Windows10CompliancePolicy
    */
    public function setAntiSpywareRequired($val)
    {
        $this->_propDict["antiSpywareRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the antivirusRequired
    * Require any Antivirus solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
    *
    * @return bool The antivirusRequired
    */
    public function getAntivirusRequired()
    {
        if (array_key_exists("antivirusRequired", $this->_propDict)) {
            return $this->_propDict["antivirusRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the antivirusRequired
    * Require any Antivirus solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
    *
    * @param bool $val The antivirusRequired
    *
    * @return Windows10CompliancePolicy
    */
    public function setAntivirusRequired($val)
    {
        $this->_propDict["antivirusRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerEnabled
    * Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
    *
    * @return bool The bitLockerEnabled
    */
    public function getBitLockerEnabled()
    {
        if (array_key_exists("bitLockerEnabled", $this->_propDict)) {
            return $this->_propDict["bitLockerEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerEnabled
    * Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
    *
    * @param bool $val The bitLockerEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setBitLockerEnabled($val)
    {
        $this->_propDict["bitLockerEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the codeIntegrityEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation.
    *
    * @return bool The codeIntegrityEnabled
    */
    public function getCodeIntegrityEnabled()
    {
        if (array_key_exists("codeIntegrityEnabled", $this->_propDict)) {
            return $this->_propDict["codeIntegrityEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the codeIntegrityEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation.
    *
    * @param bool $val The codeIntegrityEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setCodeIntegrityEnabled($val)
    {
        $this->_propDict["codeIntegrityEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the configurationManagerComplianceRequired
    * Require to consider SCCM Compliance state into consideration for Intune Compliance State.
    *
    * @return bool The configurationManagerComplianceRequired
    */
    public function getConfigurationManagerComplianceRequired()
    {
        if (array_key_exists("configurationManagerComplianceRequired", $this->_propDict)) {
            return $this->_propDict["configurationManagerComplianceRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationManagerComplianceRequired
    * Require to consider SCCM Compliance state into consideration for Intune Compliance State.
    *
    * @param bool $val The configurationManagerComplianceRequired
    *
    * @return Windows10CompliancePolicy
    */
    public function setConfigurationManagerComplianceRequired($val)
    {
        $this->_propDict["configurationManagerComplianceRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderEnabled
    * Require Windows Defender Antimalware on Windows devices.
    *
    * @return bool The defenderEnabled
    */
    public function getDefenderEnabled()
    {
        if (array_key_exists("defenderEnabled", $this->_propDict)) {
            return $this->_propDict["defenderEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderEnabled
    * Require Windows Defender Antimalware on Windows devices.
    *
    * @param bool $val The defenderEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setDefenderEnabled($val)
    {
        $this->_propDict["defenderEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defenderVersion
    * Require Windows Defender Antimalware minimum version on Windows devices.
    *
    * @return string The defenderVersion
    */
    public function getDefenderVersion()
    {
        if (array_key_exists("defenderVersion", $this->_propDict)) {
            return $this->_propDict["defenderVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderVersion
    * Require Windows Defender Antimalware minimum version on Windows devices.
    *
    * @param string $val The defenderVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setDefenderVersion($val)
    {
        $this->_propDict["defenderVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCompliancePolicyScript
    * Not yet documented
    *
    * @return DeviceCompliancePolicyScript The deviceCompliancePolicyScript
    */
    public function getDeviceCompliancePolicyScript()
    {
        if (array_key_exists("deviceCompliancePolicyScript", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCompliancePolicyScript"], "\Beta\Microsoft\Graph\Model\DeviceCompliancePolicyScript")) {
                return $this->_propDict["deviceCompliancePolicyScript"];
            } else {
                $this->_propDict["deviceCompliancePolicyScript"] = new DeviceCompliancePolicyScript($this->_propDict["deviceCompliancePolicyScript"]);
                return $this->_propDict["deviceCompliancePolicyScript"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceCompliancePolicyScript
    * Not yet documented
    *
    * @param DeviceCompliancePolicyScript $val The deviceCompliancePolicyScript
    *
    * @return Windows10CompliancePolicy
    */
    public function setDeviceCompliancePolicyScript($val)
    {
        $this->_propDict["deviceCompliancePolicyScript"] = $val;
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
    * @return Windows10CompliancePolicy
    */
    public function setDeviceThreatProtectionEnabled($val)
    {
        $this->_propDict["deviceThreatProtectionEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceThreatProtectionRequiredSecurityLevel
    * Require Device Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
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
    * Require Device Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    *
    * @param DeviceThreatProtectionLevel $val The deviceThreatProtectionRequiredSecurityLevel
    *
    * @return Windows10CompliancePolicy
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the earlyLaunchAntiMalwareDriverEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
    *
    * @return bool The earlyLaunchAntiMalwareDriverEnabled
    */
    public function getEarlyLaunchAntiMalwareDriverEnabled()
    {
        if (array_key_exists("earlyLaunchAntiMalwareDriverEnabled", $this->_propDict)) {
            return $this->_propDict["earlyLaunchAntiMalwareDriverEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the earlyLaunchAntiMalwareDriverEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
    *
    * @param bool $val The earlyLaunchAntiMalwareDriverEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setEarlyLaunchAntiMalwareDriverEnabled($val)
    {
        $this->_propDict["earlyLaunchAntiMalwareDriverEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the mobileOsMaximumVersion
    * Maximum Windows Phone version.
    *
    * @return string The mobileOsMaximumVersion
    */
    public function getMobileOsMaximumVersion()
    {
        if (array_key_exists("mobileOsMaximumVersion", $this->_propDict)) {
            return $this->_propDict["mobileOsMaximumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mobileOsMaximumVersion
    * Maximum Windows Phone version.
    *
    * @param string $val The mobileOsMaximumVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setMobileOsMaximumVersion($val)
    {
        $this->_propDict["mobileOsMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobileOsMinimumVersion
    * Minimum Windows Phone version.
    *
    * @return string The mobileOsMinimumVersion
    */
    public function getMobileOsMinimumVersion()
    {
        if (array_key_exists("mobileOsMinimumVersion", $this->_propDict)) {
            return $this->_propDict["mobileOsMinimumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mobileOsMinimumVersion
    * Minimum Windows Phone version.
    *
    * @param string $val The mobileOsMinimumVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setMobileOsMinimumVersion($val)
    {
        $this->_propDict["mobileOsMinimumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMaximumVersion
    * Maximum Windows 10 version.
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
    * Maximum Windows 10 version.
    *
    * @param string $val The osMaximumVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMinimumVersion
    * Minimum Windows 10 version.
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
    * Minimum Windows 10 version.
    *
    * @param string $val The osMinimumVersion
    *
    * @return Windows10CompliancePolicy
    */
    public function setOsMinimumVersion($val)
    {
        $this->_propDict["osMinimumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordBlockSimple
    * Indicates whether or not to block simple password.
    *
    * @return bool The passwordBlockSimple
    */
    public function getPasswordBlockSimple()
    {
        if (array_key_exists("passwordBlockSimple", $this->_propDict)) {
            return $this->_propDict["passwordBlockSimple"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockSimple
    * Indicates whether or not to block simple password.
    *
    * @param bool $val The passwordBlockSimple
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordBlockSimple($val)
    {
        $this->_propDict["passwordBlockSimple"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    * The password expiration in days.
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
    * The password expiration in days.
    *
    * @param int $val The passwordExpirationDays
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumCharacterSetCount
    * The number of character sets required in the password.
    *
    * @return int The passwordMinimumCharacterSetCount
    */
    public function getPasswordMinimumCharacterSetCount()
    {
        if (array_key_exists("passwordMinimumCharacterSetCount", $this->_propDict)) {
            return $this->_propDict["passwordMinimumCharacterSetCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinimumCharacterSetCount
    * The number of character sets required in the password.
    *
    * @param int $val The passwordMinimumCharacterSetCount
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordMinimumCharacterSetCount($val)
    {
        $this->_propDict["passwordMinimumCharacterSetCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    * The minimum password length.
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
    * The minimum password length.
    *
    * @param int $val The passwordMinimumLength
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
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
    * @return Windows10CompliancePolicy
    */
    public function setPasswordMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    * The number of previous passwords to prevent re-use of.
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
    * The number of previous passwords to prevent re-use of.
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequired
    * Require a password to unlock Windows device.
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
    * Require a password to unlock Windows device.
    *
    * @param bool $val The passwordRequired
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredToUnlockFromIdle
    * Require a password to unlock an idle device.
    *
    * @return bool The passwordRequiredToUnlockFromIdle
    */
    public function getPasswordRequiredToUnlockFromIdle()
    {
        if (array_key_exists("passwordRequiredToUnlockFromIdle", $this->_propDict)) {
            return $this->_propDict["passwordRequiredToUnlockFromIdle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordRequiredToUnlockFromIdle
    * Require a password to unlock an idle device.
    *
    * @param bool $val The passwordRequiredToUnlockFromIdle
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordRequiredToUnlockFromIdle($val)
    {
        $this->_propDict["passwordRequiredToUnlockFromIdle"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    * The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @return RequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "\Beta\Microsoft\Graph\Model\RequiredPasswordType")) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new RequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordRequiredType
    * The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @param RequiredPasswordType $val The passwordRequiredType
    *
    * @return Windows10CompliancePolicy
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the requireHealthyDeviceReport
    * Require devices to be reported as healthy by Windows Device Health Attestation.
    *
    * @return bool The requireHealthyDeviceReport
    */
    public function getRequireHealthyDeviceReport()
    {
        if (array_key_exists("requireHealthyDeviceReport", $this->_propDict)) {
            return $this->_propDict["requireHealthyDeviceReport"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireHealthyDeviceReport
    * Require devices to be reported as healthy by Windows Device Health Attestation.
    *
    * @param bool $val The requireHealthyDeviceReport
    *
    * @return Windows10CompliancePolicy
    */
    public function setRequireHealthyDeviceReport($val)
    {
        $this->_propDict["requireHealthyDeviceReport"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the rtpEnabled
    * Require Windows Defender Antimalware Real-Time Protection on Windows devices.
    *
    * @return bool The rtpEnabled
    */
    public function getRtpEnabled()
    {
        if (array_key_exists("rtpEnabled", $this->_propDict)) {
            return $this->_propDict["rtpEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rtpEnabled
    * Require Windows Defender Antimalware Real-Time Protection on Windows devices.
    *
    * @param bool $val The rtpEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setRtpEnabled($val)
    {
        $this->_propDict["rtpEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the secureBootEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
    *
    * @return bool The secureBootEnabled
    */
    public function getSecureBootEnabled()
    {
        if (array_key_exists("secureBootEnabled", $this->_propDict)) {
            return $this->_propDict["secureBootEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the secureBootEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
    *
    * @param bool $val The secureBootEnabled
    *
    * @return Windows10CompliancePolicy
    */
    public function setSecureBootEnabled($val)
    {
        $this->_propDict["secureBootEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the signatureOutOfDate
    * Require Windows Defender Antimalware Signature to be up to date on Windows devices.
    *
    * @return bool The signatureOutOfDate
    */
    public function getSignatureOutOfDate()
    {
        if (array_key_exists("signatureOutOfDate", $this->_propDict)) {
            return $this->_propDict["signatureOutOfDate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signatureOutOfDate
    * Require Windows Defender Antimalware Signature to be up to date on Windows devices.
    *
    * @param bool $val The signatureOutOfDate
    *
    * @return Windows10CompliancePolicy
    */
    public function setSignatureOutOfDate($val)
    {
        $this->_propDict["signatureOutOfDate"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireEncryption
    * Require encryption on windows devices.
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
    * Require encryption on windows devices.
    *
    * @param bool $val The storageRequireEncryption
    *
    * @return Windows10CompliancePolicy
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the tpmRequired
    * Require Trusted Platform Module(TPM) to be present.
    *
    * @return bool The tpmRequired
    */
    public function getTpmRequired()
    {
        if (array_key_exists("tpmRequired", $this->_propDict)) {
            return $this->_propDict["tpmRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tpmRequired
    * Require Trusted Platform Module(TPM) to be present.
    *
    * @param bool $val The tpmRequired
    *
    * @return Windows10CompliancePolicy
    */
    public function setTpmRequired($val)
    {
        $this->_propDict["tpmRequired"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the validOperatingSystemBuildRanges
    * The valid operating system build ranges on Windows devices. This collection can contain a maximum of 10000 elements.
     *
     * @return array The validOperatingSystemBuildRanges
     */
    public function getValidOperatingSystemBuildRanges()
    {
        if (array_key_exists("validOperatingSystemBuildRanges", $this->_propDict)) {
           return $this->_propDict["validOperatingSystemBuildRanges"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the validOperatingSystemBuildRanges
    * The valid operating system build ranges on Windows devices. This collection can contain a maximum of 10000 elements.
    *
    * @param OperatingSystemVersionRange $val The validOperatingSystemBuildRanges
    *
    * @return Windows10CompliancePolicy
    */
    public function setValidOperatingSystemBuildRanges($val)
    {
		$this->_propDict["validOperatingSystemBuildRanges"] = $val;
        return $this;
    }
    
}
