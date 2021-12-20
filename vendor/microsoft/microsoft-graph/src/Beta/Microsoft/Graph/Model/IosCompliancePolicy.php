<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosCompliancePolicy File
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
* IosCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosCompliancePolicy extends DeviceCompliancePolicy
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
    * @return IosCompliancePolicy
    */
    public function setAdvancedThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["advancedThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceThreatProtectionEnabled
    * Require that devices have enabled device threat protection .
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
    * Require that devices have enabled device threat protection .
    *
    * @param bool $val The deviceThreatProtectionEnabled
    *
    * @return IosCompliancePolicy
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
    * @return IosCompliancePolicy
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel($val)
    {
        $this->_propDict["deviceThreatProtectionRequiredSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedEmailProfileRequired
    * Indicates whether or not to require a managed email profile.
    *
    * @return bool The managedEmailProfileRequired
    */
    public function getManagedEmailProfileRequired()
    {
        if (array_key_exists("managedEmailProfileRequired", $this->_propDict)) {
            return $this->_propDict["managedEmailProfileRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedEmailProfileRequired
    * Indicates whether or not to require a managed email profile.
    *
    * @param bool $val The managedEmailProfileRequired
    *
    * @return IosCompliancePolicy
    */
    public function setManagedEmailProfileRequired($val)
    {
        $this->_propDict["managedEmailProfileRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the osMaximumBuildVersion
    * Maximum IOS build version.
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
    * Maximum IOS build version.
    *
    * @param string $val The osMaximumBuildVersion
    *
    * @return IosCompliancePolicy
    */
    public function setOsMaximumBuildVersion($val)
    {
        $this->_propDict["osMaximumBuildVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMaximumVersion
    * Maximum IOS version.
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
    * Maximum IOS version.
    *
    * @param string $val The osMaximumVersion
    *
    * @return IosCompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMinimumBuildVersion
    * Minimum IOS build version.
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
    * Minimum IOS build version.
    *
    * @param string $val The osMinimumBuildVersion
    *
    * @return IosCompliancePolicy
    */
    public function setOsMinimumBuildVersion($val)
    {
        $this->_propDict["osMinimumBuildVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osMinimumVersion
    * Minimum IOS version.
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
    * Minimum IOS version.
    *
    * @param string $val The osMinimumVersion
    *
    * @return IosCompliancePolicy
    */
    public function setOsMinimumVersion($val)
    {
        $this->_propDict["osMinimumVersion"] = $val;
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
    * @return IosCompliancePolicy
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
    * @return IosCompliancePolicy
    */
    public function setPasscodeExpirationDays($val)
    {
        $this->_propDict["passcodeExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeMinimumCharacterSetCount
    * The number of character sets required in the password.
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
    * The number of character sets required in the password.
    *
    * @param int $val The passcodeMinimumCharacterSetCount
    *
    * @return IosCompliancePolicy
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
    * @return IosCompliancePolicy
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
    * @return IosCompliancePolicy
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
    * @return IosCompliancePolicy
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
    * @return IosCompliancePolicy
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
    * @return IosCompliancePolicy
    */
    public function setPasscodeRequired($val)
    {
        $this->_propDict["passcodeRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passcodeRequiredType
    * The required passcode type. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @return RequiredPasswordType The passcodeRequiredType
    */
    public function getPasscodeRequiredType()
    {
        if (array_key_exists("passcodeRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passcodeRequiredType"], "\Beta\Microsoft\Graph\Model\RequiredPasswordType")) {
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
    * The required passcode type. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @param RequiredPasswordType $val The passcodeRequiredType
    *
    * @return IosCompliancePolicy
    */
    public function setPasscodeRequiredType($val)
    {
        $this->_propDict["passcodeRequiredType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the restrictedApps
    * Require the device to not have the specified apps installed. This collection can contain a maximum of 100 elements.
     *
     * @return array The restrictedApps
     */
    public function getRestrictedApps()
    {
        if (array_key_exists("restrictedApps", $this->_propDict)) {
           return $this->_propDict["restrictedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the restrictedApps
    * Require the device to not have the specified apps installed. This collection can contain a maximum of 100 elements.
    *
    * @param AppListItem $val The restrictedApps
    *
    * @return IosCompliancePolicy
    */
    public function setRestrictedApps($val)
    {
		$this->_propDict["restrictedApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityBlockJailbrokenDevices
    * Devices must not be jailbroken or rooted.
    *
    * @return bool The securityBlockJailbrokenDevices
    */
    public function getSecurityBlockJailbrokenDevices()
    {
        if (array_key_exists("securityBlockJailbrokenDevices", $this->_propDict)) {
            return $this->_propDict["securityBlockJailbrokenDevices"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityBlockJailbrokenDevices
    * Devices must not be jailbroken or rooted.
    *
    * @param bool $val The securityBlockJailbrokenDevices
    *
    * @return IosCompliancePolicy
    */
    public function setSecurityBlockJailbrokenDevices($val)
    {
        $this->_propDict["securityBlockJailbrokenDevices"] = boolval($val);
        return $this;
    }
    
}
