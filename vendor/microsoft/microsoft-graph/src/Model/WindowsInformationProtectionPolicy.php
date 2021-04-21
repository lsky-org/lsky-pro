<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionPolicy File
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
* WindowsInformationProtectionPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionPolicy extends WindowsInformationProtection
{
    /**
    * Gets the daysWithoutContactBeforeUnenroll
    * Offline interval before app data is wiped (days)
    *
    * @return int The daysWithoutContactBeforeUnenroll
    */
    public function getDaysWithoutContactBeforeUnenroll()
    {
        if (array_key_exists("daysWithoutContactBeforeUnenroll", $this->_propDict)) {
            return $this->_propDict["daysWithoutContactBeforeUnenroll"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the daysWithoutContactBeforeUnenroll
    * Offline interval before app data is wiped (days)
    *
    * @param int $val The daysWithoutContactBeforeUnenroll
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setDaysWithoutContactBeforeUnenroll($val)
    {
        $this->_propDict["daysWithoutContactBeforeUnenroll"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the mdmEnrollmentUrl
    * Enrollment url for the MDM
    *
    * @return string The mdmEnrollmentUrl
    */
    public function getMdmEnrollmentUrl()
    {
        if (array_key_exists("mdmEnrollmentUrl", $this->_propDict)) {
            return $this->_propDict["mdmEnrollmentUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mdmEnrollmentUrl
    * Enrollment url for the MDM
    *
    * @param string $val The mdmEnrollmentUrl
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setMdmEnrollmentUrl($val)
    {
        $this->_propDict["mdmEnrollmentUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the minutesOfInactivityBeforeDeviceLock
    * Specifies the maximum amount of time (in minutes) allowed after the device is idle that will cause the device to become PIN or password locked.   Range is an integer X where 0 &amp;lt;= X &amp;lt;= 999.
    *
    * @return int The minutesOfInactivityBeforeDeviceLock
    */
    public function getMinutesOfInactivityBeforeDeviceLock()
    {
        if (array_key_exists("minutesOfInactivityBeforeDeviceLock", $this->_propDict)) {
            return $this->_propDict["minutesOfInactivityBeforeDeviceLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minutesOfInactivityBeforeDeviceLock
    * Specifies the maximum amount of time (in minutes) allowed after the device is idle that will cause the device to become PIN or password locked.   Range is an integer X where 0 &amp;lt;= X &amp;lt;= 999.
    *
    * @param int $val The minutesOfInactivityBeforeDeviceLock
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setMinutesOfInactivityBeforeDeviceLock($val)
    {
        $this->_propDict["minutesOfInactivityBeforeDeviceLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberOfPastPinsRemembered
    * Integer value that specifies the number of past PINs that can be associated to a user account that can't be reused. The largest number you can configure for this policy setting is 50. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then storage of previous PINs is not required. This node was added in Windows 10, version 1511. Default is 0.
    *
    * @return int The numberOfPastPinsRemembered
    */
    public function getNumberOfPastPinsRemembered()
    {
        if (array_key_exists("numberOfPastPinsRemembered", $this->_propDict)) {
            return $this->_propDict["numberOfPastPinsRemembered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberOfPastPinsRemembered
    * Integer value that specifies the number of past PINs that can be associated to a user account that can't be reused. The largest number you can configure for this policy setting is 50. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then storage of previous PINs is not required. This node was added in Windows 10, version 1511. Default is 0.
    *
    * @param int $val The numberOfPastPinsRemembered
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setNumberOfPastPinsRemembered($val)
    {
        $this->_propDict["numberOfPastPinsRemembered"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMaximumAttemptCount
    * The number of authentication failures allowed before the device will be wiped. A value of 0 disables device wipe functionality. Range is an integer X where 4 &amp;lt;= X &amp;lt;= 16 for desktop and 0 &amp;lt;= X &amp;lt;= 999 for mobile devices.
    *
    * @return int The passwordMaximumAttemptCount
    */
    public function getPasswordMaximumAttemptCount()
    {
        if (array_key_exists("passwordMaximumAttemptCount", $this->_propDict)) {
            return $this->_propDict["passwordMaximumAttemptCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMaximumAttemptCount
    * The number of authentication failures allowed before the device will be wiped. A value of 0 disables device wipe functionality. Range is an integer X where 4 &amp;lt;= X &amp;lt;= 16 for desktop and 0 &amp;lt;= X &amp;lt;= 999 for mobile devices.
    *
    * @param int $val The passwordMaximumAttemptCount
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPasswordMaximumAttemptCount($val)
    {
        $this->_propDict["passwordMaximumAttemptCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinExpirationDays
    * Integer value specifies the period of time (in days) that a PIN can be used before the system requires the user to change it. The largest number you can configure for this policy setting is 730. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then the user's PIN will never expire. This node was added in Windows 10, version 1511. Default is 0.
    *
    * @return int The pinExpirationDays
    */
    public function getPinExpirationDays()
    {
        if (array_key_exists("pinExpirationDays", $this->_propDict)) {
            return $this->_propDict["pinExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pinExpirationDays
    * Integer value specifies the period of time (in days) that a PIN can be used before the system requires the user to change it. The largest number you can configure for this policy setting is 730. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then the user's PIN will never expire. This node was added in Windows 10, version 1511. Default is 0.
    *
    * @param int $val The pinExpirationDays
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinExpirationDays($val)
    {
        $this->_propDict["pinExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinLowercaseLetters
    * Integer value that configures the use of lowercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
    *
    * @return WindowsInformationProtectionPinCharacterRequirements The pinLowercaseLetters
    */
    public function getPinLowercaseLetters()
    {
        if (array_key_exists("pinLowercaseLetters", $this->_propDict)) {
            if (is_a($this->_propDict["pinLowercaseLetters"], "\Microsoft\Graph\Model\WindowsInformationProtectionPinCharacterRequirements")) {
                return $this->_propDict["pinLowercaseLetters"];
            } else {
                $this->_propDict["pinLowercaseLetters"] = new WindowsInformationProtectionPinCharacterRequirements($this->_propDict["pinLowercaseLetters"]);
                return $this->_propDict["pinLowercaseLetters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinLowercaseLetters
    * Integer value that configures the use of lowercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
    *
    * @param WindowsInformationProtectionPinCharacterRequirements $val The pinLowercaseLetters
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinLowercaseLetters($val)
    {
        $this->_propDict["pinLowercaseLetters"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinMinimumLength
    * Integer value that sets the minimum number of characters required for the PIN. Default value is 4. The lowest number you can configure for this policy setting is 4. The largest number you can configure must be less than the number configured in the Maximum PIN length policy setting or the number 127, whichever is the lowest.
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
    * Integer value that sets the minimum number of characters required for the PIN. Default value is 4. The lowest number you can configure for this policy setting is 4. The largest number you can configure must be less than the number configured in the Maximum PIN length policy setting or the number 127, whichever is the lowest.
    *
    * @param int $val The pinMinimumLength
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinMinimumLength($val)
    {
        $this->_propDict["pinMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pinSpecialCharacters
    * Integer value that configures the use of special characters in the Windows Hello for Business PIN. Valid special characters for Windows Hello for Business PIN gestures include: ! ' # $ % &amp; ' ( )  + , - . / : ; &amp;lt; = &amp;gt; ? @ [ / ] ^  ` {
    *
    * @return WindowsInformationProtectionPinCharacterRequirements The pinSpecialCharacters
    */
    public function getPinSpecialCharacters()
    {
        if (array_key_exists("pinSpecialCharacters", $this->_propDict)) {
            if (is_a($this->_propDict["pinSpecialCharacters"], "\Microsoft\Graph\Model\WindowsInformationProtectionPinCharacterRequirements")) {
                return $this->_propDict["pinSpecialCharacters"];
            } else {
                $this->_propDict["pinSpecialCharacters"] = new WindowsInformationProtectionPinCharacterRequirements($this->_propDict["pinSpecialCharacters"]);
                return $this->_propDict["pinSpecialCharacters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinSpecialCharacters
    * Integer value that configures the use of special characters in the Windows Hello for Business PIN. Valid special characters for Windows Hello for Business PIN gestures include: ! ' # $ % &amp; ' ( )  + , - . / : ; &amp;lt; = &amp;gt; ? @ [ / ] ^  ` {
    *
    * @param WindowsInformationProtectionPinCharacterRequirements $val The pinSpecialCharacters
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinSpecialCharacters($val)
    {
        $this->_propDict["pinSpecialCharacters"] = $val;
        return $this;
    }
    
    /**
    * Gets the pinUppercaseLetters
    * Integer value that configures the use of uppercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
    *
    * @return WindowsInformationProtectionPinCharacterRequirements The pinUppercaseLetters
    */
    public function getPinUppercaseLetters()
    {
        if (array_key_exists("pinUppercaseLetters", $this->_propDict)) {
            if (is_a($this->_propDict["pinUppercaseLetters"], "\Microsoft\Graph\Model\WindowsInformationProtectionPinCharacterRequirements")) {
                return $this->_propDict["pinUppercaseLetters"];
            } else {
                $this->_propDict["pinUppercaseLetters"] = new WindowsInformationProtectionPinCharacterRequirements($this->_propDict["pinUppercaseLetters"]);
                return $this->_propDict["pinUppercaseLetters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pinUppercaseLetters
    * Integer value that configures the use of uppercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
    *
    * @param WindowsInformationProtectionPinCharacterRequirements $val The pinUppercaseLetters
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setPinUppercaseLetters($val)
    {
        $this->_propDict["pinUppercaseLetters"] = $val;
        return $this;
    }
    
    /**
    * Gets the revokeOnMdmHandoffDisabled
    * New property in RS2, pending documentation
    *
    * @return bool The revokeOnMdmHandoffDisabled
    */
    public function getRevokeOnMdmHandoffDisabled()
    {
        if (array_key_exists("revokeOnMdmHandoffDisabled", $this->_propDict)) {
            return $this->_propDict["revokeOnMdmHandoffDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the revokeOnMdmHandoffDisabled
    * New property in RS2, pending documentation
    *
    * @param bool $val The revokeOnMdmHandoffDisabled
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setRevokeOnMdmHandoffDisabled($val)
    {
        $this->_propDict["revokeOnMdmHandoffDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsHelloForBusinessBlocked
    * Boolean value that sets Windows Hello for Business as a method for signing into Windows.
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
    * Boolean value that sets Windows Hello for Business as a method for signing into Windows.
    *
    * @param bool $val The windowsHelloForBusinessBlocked
    *
    * @return WindowsInformationProtectionPolicy
    */
    public function setWindowsHelloForBusinessBlocked($val)
    {
        $this->_propDict["windowsHelloForBusinessBlocked"] = boolval($val);
        return $this;
    }
    
}
