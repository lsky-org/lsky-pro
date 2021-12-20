<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSCompliancePolicy File
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
* MacOSCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSCompliancePolicy extends DeviceCompliancePolicy
{
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
    * @return MacOSCompliancePolicy
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
    * @return MacOSCompliancePolicy
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallBlockAllIncoming
    * Corresponds to the 'Block all incoming connections' option.
    *
    * @return bool The firewallBlockAllIncoming
    */
    public function getFirewallBlockAllIncoming()
    {
        if (array_key_exists("firewallBlockAllIncoming", $this->_propDict)) {
            return $this->_propDict["firewallBlockAllIncoming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallBlockAllIncoming
    * Corresponds to the 'Block all incoming connections' option.
    *
    * @param bool $val The firewallBlockAllIncoming
    *
    * @return MacOSCompliancePolicy
    */
    public function setFirewallBlockAllIncoming($val)
    {
        $this->_propDict["firewallBlockAllIncoming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnabled
    * Whether the firewall should be enabled or not.
    *
    * @return bool The firewallEnabled
    */
    public function getFirewallEnabled()
    {
        if (array_key_exists("firewallEnabled", $this->_propDict)) {
            return $this->_propDict["firewallEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnabled
    * Whether the firewall should be enabled or not.
    *
    * @param bool $val The firewallEnabled
    *
    * @return MacOSCompliancePolicy
    */
    public function setFirewallEnabled($val)
    {
        $this->_propDict["firewallEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnableStealthMode
    * Corresponds to 'Enable stealth mode.'
    *
    * @return bool The firewallEnableStealthMode
    */
    public function getFirewallEnableStealthMode()
    {
        if (array_key_exists("firewallEnableStealthMode", $this->_propDict)) {
            return $this->_propDict["firewallEnableStealthMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnableStealthMode
    * Corresponds to 'Enable stealth mode.'
    *
    * @param bool $val The firewallEnableStealthMode
    *
    * @return MacOSCompliancePolicy
    */
    public function setFirewallEnableStealthMode($val)
    {
        $this->_propDict["firewallEnableStealthMode"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the gatekeeperAllowedAppSource
    * System and Privacy setting that determines which download locations apps can be run from on a macOS device. Possible values are: notConfigured, macAppStore, macAppStoreAndIdentifiedDevelopers, anywhere.
    *
    * @return MacOSGatekeeperAppSources The gatekeeperAllowedAppSource
    */
    public function getGatekeeperAllowedAppSource()
    {
        if (array_key_exists("gatekeeperAllowedAppSource", $this->_propDict)) {
            if (is_a($this->_propDict["gatekeeperAllowedAppSource"], "\Beta\Microsoft\Graph\Model\MacOSGatekeeperAppSources")) {
                return $this->_propDict["gatekeeperAllowedAppSource"];
            } else {
                $this->_propDict["gatekeeperAllowedAppSource"] = new MacOSGatekeeperAppSources($this->_propDict["gatekeeperAllowedAppSource"]);
                return $this->_propDict["gatekeeperAllowedAppSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the gatekeeperAllowedAppSource
    * System and Privacy setting that determines which download locations apps can be run from on a macOS device. Possible values are: notConfigured, macAppStore, macAppStoreAndIdentifiedDevelopers, anywhere.
    *
    * @param MacOSGatekeeperAppSources $val The gatekeeperAllowedAppSource
    *
    * @return MacOSCompliancePolicy
    */
    public function setGatekeeperAllowedAppSource($val)
    {
        $this->_propDict["gatekeeperAllowedAppSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMaximumBuildVersion
    * Maximum MacOS build version.
    *
    * @return string The osMaximumBuildVersion
    */
    public function getOsMaximumBuildVersion()
    {
        if (array_key_exists("osMaximumBuildVersion", $this->_propDict)) {
            return $this->_propDict["osMaximumBuildVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osMaximumBuildVersion
    * Maximum MacOS build version.
    *
    * @param string $val The osMaximumBuildVersion
    *
    * @return MacOSCompliancePolicy
    */
    public function setOsMaximumBuildVersion($val)
    {
        $this->_propDict["osMaximumBuildVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMaximumVersion
    * Maximum MacOS version.
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
    * Maximum MacOS version.
    *
    * @param string $val The osMaximumVersion
    *
    * @return MacOSCompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMinimumBuildVersion
    * Minimum MacOS build version.
    *
    * @return string The osMinimumBuildVersion
    */
    public function getOsMinimumBuildVersion()
    {
        if (array_key_exists("osMinimumBuildVersion", $this->_propDict)) {
            return $this->_propDict["osMinimumBuildVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osMinimumBuildVersion
    * Minimum MacOS build version.
    *
    * @param string $val The osMinimumBuildVersion
    *
    * @return MacOSCompliancePolicy
    */
    public function setOsMinimumBuildVersion($val)
    {
        $this->_propDict["osMinimumBuildVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMinimumVersion
    * Minimum MacOS version.
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
    * Minimum MacOS version.
    *
    * @param string $val The osMinimumVersion
    *
    * @return MacOSCompliancePolicy
    */
    public function setOsMinimumVersion($val)
    {
        $this->_propDict["osMinimumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordBlockSimple
    * Indicates whether or not to block simple passwords.
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
    * Indicates whether or not to block simple passwords.
    *
    * @param bool $val The passwordBlockSimple
    *
    * @return MacOSCompliancePolicy
    */
    public function setPasswordBlockSimple($val)
    {
        $this->_propDict["passwordBlockSimple"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    * Number of days before the password expires. Valid values 1 to 65535
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
    * Number of days before the password expires. Valid values 1 to 65535
    *
    * @param int $val The passwordExpirationDays
    *
    * @return MacOSCompliancePolicy
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
    * @return MacOSCompliancePolicy
    */
    public function setPasswordMinimumCharacterSetCount($val)
    {
        $this->_propDict["passwordMinimumCharacterSetCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    * Minimum length of password. Valid values 4 to 14
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
    * Minimum length of password. Valid values 4 to 14
    *
    * @param int $val The passwordMinimumLength
    *
    * @return MacOSCompliancePolicy
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
    * @return MacOSCompliancePolicy
    */
    public function setPasswordMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    * Number of previous passwords to block. Valid values 1 to 24
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
    * Number of previous passwords to block. Valid values 1 to 24
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return MacOSCompliancePolicy
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequired
    * Whether or not to require a password.
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
    * Whether or not to require a password.
    *
    * @param bool $val The passwordRequired
    *
    * @return MacOSCompliancePolicy
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
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
    * @return MacOSCompliancePolicy
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the storageRequireEncryption
    * Require encryption on Mac OS devices.
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
    * Require encryption on Mac OS devices.
    *
    * @param bool $val The storageRequireEncryption
    *
    * @return MacOSCompliancePolicy
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the systemIntegrityProtectionEnabled
    * Require that devices have enabled system integrity protection.
    *
    * @return bool The systemIntegrityProtectionEnabled
    */
    public function getSystemIntegrityProtectionEnabled()
    {
        if (array_key_exists("systemIntegrityProtectionEnabled", $this->_propDict)) {
            return $this->_propDict["systemIntegrityProtectionEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemIntegrityProtectionEnabled
    * Require that devices have enabled system integrity protection.
    *
    * @param bool $val The systemIntegrityProtectionEnabled
    *
    * @return MacOSCompliancePolicy
    */
    public function setSystemIntegrityProtectionEnabled($val)
    {
        $this->_propDict["systemIntegrityProtectionEnabled"] = boolval($val);
        return $this;
    }
    
}
