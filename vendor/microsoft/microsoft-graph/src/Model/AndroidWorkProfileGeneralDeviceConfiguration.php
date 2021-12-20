<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidWorkProfileGeneralDeviceConfiguration File
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
* AndroidWorkProfileGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidWorkProfileGeneralDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the passwordBlockFingerprintUnlock
    * Indicates whether or not to block fingerprint unlock.
    *
    * @return bool The passwordBlockFingerprintUnlock
    */
    public function getPasswordBlockFingerprintUnlock()
    {
        if (array_key_exists("passwordBlockFingerprintUnlock", $this->_propDict)) {
            return $this->_propDict["passwordBlockFingerprintUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockFingerprintUnlock
    * Indicates whether or not to block fingerprint unlock.
    *
    * @param bool $val The passwordBlockFingerprintUnlock
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setPasswordBlockFingerprintUnlock($val)
    {
        $this->_propDict["passwordBlockFingerprintUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockTrustAgents
    * Indicates whether or not to block Smart Lock and other trust agents.
    *
    * @return bool The passwordBlockTrustAgents
    */
    public function getPasswordBlockTrustAgents()
    {
        if (array_key_exists("passwordBlockTrustAgents", $this->_propDict)) {
            return $this->_propDict["passwordBlockTrustAgents"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockTrustAgents
    * Indicates whether or not to block Smart Lock and other trust agents.
    *
    * @param bool $val The passwordBlockTrustAgents
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setPasswordBlockTrustAgents($val)
    {
        $this->_propDict["passwordBlockTrustAgents"] = boolval($val);
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
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    * Minimum length of passwords. Valid values 4 to 16
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
    * Minimum length of passwords. Valid values 4 to 16
    *
    * @param int $val The passwordMinimumLength
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @return int The passwordMinutesOfInactivityBeforeScreenTimeout
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    * Number of previous passwords to block. Valid values 0 to 24
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
    * Number of previous passwords to block. Valid values 0 to 24
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    * Type of password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
    *
    * @return AndroidWorkProfileRequiredPasswordType The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "\Microsoft\Graph\Model\AndroidWorkProfileRequiredPasswordType")) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new AndroidWorkProfileRequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordRequiredType
    * Type of password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
    *
    * @param AndroidWorkProfileRequiredPasswordType $val The passwordRequiredType
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordSignInFailureCountBeforeFactoryReset
    * Number of sign in failures allowed before factory reset. Valid values 1 to 16
    *
    * @return int The passwordSignInFailureCountBeforeFactoryReset
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset()
    {
        if (array_key_exists("passwordSignInFailureCountBeforeFactoryReset", $this->_propDict)) {
            return $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordSignInFailureCountBeforeFactoryReset
    * Number of sign in failures allowed before factory reset. Valid values 1 to 16
    *
    * @param int $val The passwordSignInFailureCountBeforeFactoryReset
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the securityRequireVerifyApps
    * Require the Android Verify apps feature is turned on.
    *
    * @return bool The securityRequireVerifyApps
    */
    public function getSecurityRequireVerifyApps()
    {
        if (array_key_exists("securityRequireVerifyApps", $this->_propDict)) {
            return $this->_propDict["securityRequireVerifyApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityRequireVerifyApps
    * Require the Android Verify apps feature is turned on.
    *
    * @param bool $val The securityRequireVerifyApps
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setSecurityRequireVerifyApps($val)
    {
        $this->_propDict["securityRequireVerifyApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBlockAddingAccounts
    * Block users from adding/removing accounts in work profile.
    *
    * @return bool The workProfileBlockAddingAccounts
    */
    public function getWorkProfileBlockAddingAccounts()
    {
        if (array_key_exists("workProfileBlockAddingAccounts", $this->_propDict)) {
            return $this->_propDict["workProfileBlockAddingAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockAddingAccounts
    * Block users from adding/removing accounts in work profile.
    *
    * @param bool $val The workProfileBlockAddingAccounts
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockAddingAccounts($val)
    {
        $this->_propDict["workProfileBlockAddingAccounts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBlockCamera
    * Block work profile camera.
    *
    * @return bool The workProfileBlockCamera
    */
    public function getWorkProfileBlockCamera()
    {
        if (array_key_exists("workProfileBlockCamera", $this->_propDict)) {
            return $this->_propDict["workProfileBlockCamera"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockCamera
    * Block work profile camera.
    *
    * @param bool $val The workProfileBlockCamera
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockCamera($val)
    {
        $this->_propDict["workProfileBlockCamera"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBlockCrossProfileCallerId
    * Block display work profile caller ID in personal profile.
    *
    * @return bool The workProfileBlockCrossProfileCallerId
    */
    public function getWorkProfileBlockCrossProfileCallerId()
    {
        if (array_key_exists("workProfileBlockCrossProfileCallerId", $this->_propDict)) {
            return $this->_propDict["workProfileBlockCrossProfileCallerId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockCrossProfileCallerId
    * Block display work profile caller ID in personal profile.
    *
    * @param bool $val The workProfileBlockCrossProfileCallerId
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockCrossProfileCallerId($val)
    {
        $this->_propDict["workProfileBlockCrossProfileCallerId"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBlockCrossProfileContactsSearch
    * Block work profile contacts availability in personal profile.
    *
    * @return bool The workProfileBlockCrossProfileContactsSearch
    */
    public function getWorkProfileBlockCrossProfileContactsSearch()
    {
        if (array_key_exists("workProfileBlockCrossProfileContactsSearch", $this->_propDict)) {
            return $this->_propDict["workProfileBlockCrossProfileContactsSearch"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockCrossProfileContactsSearch
    * Block work profile contacts availability in personal profile.
    *
    * @param bool $val The workProfileBlockCrossProfileContactsSearch
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockCrossProfileContactsSearch($val)
    {
        $this->_propDict["workProfileBlockCrossProfileContactsSearch"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBlockCrossProfileCopyPaste
    * Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
    *
    * @return bool The workProfileBlockCrossProfileCopyPaste
    */
    public function getWorkProfileBlockCrossProfileCopyPaste()
    {
        if (array_key_exists("workProfileBlockCrossProfileCopyPaste", $this->_propDict)) {
            return $this->_propDict["workProfileBlockCrossProfileCopyPaste"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockCrossProfileCopyPaste
    * Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
    *
    * @param bool $val The workProfileBlockCrossProfileCopyPaste
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockCrossProfileCopyPaste($val)
    {
        $this->_propDict["workProfileBlockCrossProfileCopyPaste"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBlockNotificationsWhileDeviceLocked
    * Indicates whether or not to block notifications while device locked.
    *
    * @return bool The workProfileBlockNotificationsWhileDeviceLocked
    */
    public function getWorkProfileBlockNotificationsWhileDeviceLocked()
    {
        if (array_key_exists("workProfileBlockNotificationsWhileDeviceLocked", $this->_propDict)) {
            return $this->_propDict["workProfileBlockNotificationsWhileDeviceLocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockNotificationsWhileDeviceLocked
    * Indicates whether or not to block notifications while device locked.
    *
    * @param bool $val The workProfileBlockNotificationsWhileDeviceLocked
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockNotificationsWhileDeviceLocked($val)
    {
        $this->_propDict["workProfileBlockNotificationsWhileDeviceLocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBlockScreenCapture
    * Block screen capture in work profile.
    *
    * @return bool The workProfileBlockScreenCapture
    */
    public function getWorkProfileBlockScreenCapture()
    {
        if (array_key_exists("workProfileBlockScreenCapture", $this->_propDict)) {
            return $this->_propDict["workProfileBlockScreenCapture"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBlockScreenCapture
    * Block screen capture in work profile.
    *
    * @param bool $val The workProfileBlockScreenCapture
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileBlockScreenCapture($val)
    {
        $this->_propDict["workProfileBlockScreenCapture"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileBluetoothEnableContactSharing
    * Allow bluetooth devices to access enterprise contacts.
    *
    * @return bool The workProfileBluetoothEnableContactSharing
    */
    public function getWorkProfileBluetoothEnableContactSharing()
    {
        if (array_key_exists("workProfileBluetoothEnableContactSharing", $this->_propDict)) {
            return $this->_propDict["workProfileBluetoothEnableContactSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileBluetoothEnableContactSharing
    * Allow bluetooth devices to access enterprise contacts.
    *
    * @param bool $val The workProfileBluetoothEnableContactSharing
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileBluetoothEnableContactSharing($val)
    {
        $this->_propDict["workProfileBluetoothEnableContactSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileDataSharingType
    * Type of data sharing that is allowed. Possible values are: deviceDefault, preventAny, allowPersonalToWork, noRestrictions.
    *
    * @return AndroidWorkProfileCrossProfileDataSharingType The workProfileDataSharingType
    */
    public function getWorkProfileDataSharingType()
    {
        if (array_key_exists("workProfileDataSharingType", $this->_propDict)) {
            if (is_a($this->_propDict["workProfileDataSharingType"], "\Microsoft\Graph\Model\AndroidWorkProfileCrossProfileDataSharingType")) {
                return $this->_propDict["workProfileDataSharingType"];
            } else {
                $this->_propDict["workProfileDataSharingType"] = new AndroidWorkProfileCrossProfileDataSharingType($this->_propDict["workProfileDataSharingType"]);
                return $this->_propDict["workProfileDataSharingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the workProfileDataSharingType
    * Type of data sharing that is allowed. Possible values are: deviceDefault, preventAny, allowPersonalToWork, noRestrictions.
    *
    * @param AndroidWorkProfileCrossProfileDataSharingType $val The workProfileDataSharingType
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileDataSharingType($val)
    {
        $this->_propDict["workProfileDataSharingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the workProfileDefaultAppPermissionPolicy
    * Type of password that is required. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
    *
    * @return AndroidWorkProfileDefaultAppPermissionPolicyType The workProfileDefaultAppPermissionPolicy
    */
    public function getWorkProfileDefaultAppPermissionPolicy()
    {
        if (array_key_exists("workProfileDefaultAppPermissionPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["workProfileDefaultAppPermissionPolicy"], "\Microsoft\Graph\Model\AndroidWorkProfileDefaultAppPermissionPolicyType")) {
                return $this->_propDict["workProfileDefaultAppPermissionPolicy"];
            } else {
                $this->_propDict["workProfileDefaultAppPermissionPolicy"] = new AndroidWorkProfileDefaultAppPermissionPolicyType($this->_propDict["workProfileDefaultAppPermissionPolicy"]);
                return $this->_propDict["workProfileDefaultAppPermissionPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the workProfileDefaultAppPermissionPolicy
    * Type of password that is required. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
    *
    * @param AndroidWorkProfileDefaultAppPermissionPolicyType $val The workProfileDefaultAppPermissionPolicy
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileDefaultAppPermissionPolicy($val)
    {
        $this->_propDict["workProfileDefaultAppPermissionPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordBlockFingerprintUnlock
    * Indicates whether or not to block fingerprint unlock for work profile.
    *
    * @return bool The workProfilePasswordBlockFingerprintUnlock
    */
    public function getWorkProfilePasswordBlockFingerprintUnlock()
    {
        if (array_key_exists("workProfilePasswordBlockFingerprintUnlock", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordBlockFingerprintUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordBlockFingerprintUnlock
    * Indicates whether or not to block fingerprint unlock for work profile.
    *
    * @param bool $val The workProfilePasswordBlockFingerprintUnlock
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordBlockFingerprintUnlock($val)
    {
        $this->_propDict["workProfilePasswordBlockFingerprintUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordBlockTrustAgents
    * Indicates whether or not to block Smart Lock and other trust agents for work profile.
    *
    * @return bool The workProfilePasswordBlockTrustAgents
    */
    public function getWorkProfilePasswordBlockTrustAgents()
    {
        if (array_key_exists("workProfilePasswordBlockTrustAgents", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordBlockTrustAgents"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordBlockTrustAgents
    * Indicates whether or not to block Smart Lock and other trust agents for work profile.
    *
    * @param bool $val The workProfilePasswordBlockTrustAgents
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordBlockTrustAgents($val)
    {
        $this->_propDict["workProfilePasswordBlockTrustAgents"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordExpirationDays
    * Number of days before the work profile password expires. Valid values 1 to 365
    *
    * @return int The workProfilePasswordExpirationDays
    */
    public function getWorkProfilePasswordExpirationDays()
    {
        if (array_key_exists("workProfilePasswordExpirationDays", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordExpirationDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordExpirationDays
    * Number of days before the work profile password expires. Valid values 1 to 365
    *
    * @param int $val The workProfilePasswordExpirationDays
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordExpirationDays($val)
    {
        $this->_propDict["workProfilePasswordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinimumLength
    * Minimum length of work profile password. Valid values 4 to 16
    *
    * @return int The workProfilePasswordMinimumLength
    */
    public function getWorkProfilePasswordMinimumLength()
    {
        if (array_key_exists("workProfilePasswordMinimumLength", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinimumLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinimumLength
    * Minimum length of work profile password. Valid values 4 to 16
    *
    * @param int $val The workProfilePasswordMinimumLength
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinimumLength($val)
    {
        $this->_propDict["workProfilePasswordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinLetterCharacters
    * Minimum # of letter characters required in work profile password. Valid values 1 to 10
    *
    * @return int The workProfilePasswordMinLetterCharacters
    */
    public function getWorkProfilePasswordMinLetterCharacters()
    {
        if (array_key_exists("workProfilePasswordMinLetterCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinLetterCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinLetterCharacters
    * Minimum # of letter characters required in work profile password. Valid values 1 to 10
    *
    * @param int $val The workProfilePasswordMinLetterCharacters
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinLetterCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinLetterCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinLowerCaseCharacters
    * Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
    *
    * @return int The workProfilePasswordMinLowerCaseCharacters
    */
    public function getWorkProfilePasswordMinLowerCaseCharacters()
    {
        if (array_key_exists("workProfilePasswordMinLowerCaseCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinLowerCaseCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinLowerCaseCharacters
    * Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
    *
    * @param int $val The workProfilePasswordMinLowerCaseCharacters
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinLowerCaseCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinLowerCaseCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinNonLetterCharacters
    * Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
    *
    * @return int The workProfilePasswordMinNonLetterCharacters
    */
    public function getWorkProfilePasswordMinNonLetterCharacters()
    {
        if (array_key_exists("workProfilePasswordMinNonLetterCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinNonLetterCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinNonLetterCharacters
    * Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
    *
    * @param int $val The workProfilePasswordMinNonLetterCharacters
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinNonLetterCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinNonLetterCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinNumericCharacters
    * Minimum # of numeric characters required in work profile password. Valid values 1 to 10
    *
    * @return int The workProfilePasswordMinNumericCharacters
    */
    public function getWorkProfilePasswordMinNumericCharacters()
    {
        if (array_key_exists("workProfilePasswordMinNumericCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinNumericCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinNumericCharacters
    * Minimum # of numeric characters required in work profile password. Valid values 1 to 10
    *
    * @param int $val The workProfilePasswordMinNumericCharacters
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinNumericCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinNumericCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinSymbolCharacters
    * Minimum # of symbols required in work profile password. Valid values 1 to 10
    *
    * @return int The workProfilePasswordMinSymbolCharacters
    */
    public function getWorkProfilePasswordMinSymbolCharacters()
    {
        if (array_key_exists("workProfilePasswordMinSymbolCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinSymbolCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinSymbolCharacters
    * Minimum # of symbols required in work profile password. Valid values 1 to 10
    *
    * @param int $val The workProfilePasswordMinSymbolCharacters
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinSymbolCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinSymbolCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinUpperCaseCharacters
    * Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
    *
    * @return int The workProfilePasswordMinUpperCaseCharacters
    */
    public function getWorkProfilePasswordMinUpperCaseCharacters()
    {
        if (array_key_exists("workProfilePasswordMinUpperCaseCharacters", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinUpperCaseCharacters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinUpperCaseCharacters
    * Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
    *
    * @param int $val The workProfilePasswordMinUpperCaseCharacters
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinUpperCaseCharacters($val)
    {
        $this->_propDict["workProfilePasswordMinUpperCaseCharacters"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @return int The workProfilePasswordMinutesOfInactivityBeforeScreenTimeout
    */
    public function getWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout()
    {
        if (array_key_exists("workProfilePasswordMinutesOfInactivityBeforeScreenTimeout", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordMinutesOfInactivityBeforeScreenTimeout"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity before the screen times out.
    *
    * @param int $val The workProfilePasswordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["workProfilePasswordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordPreviousPasswordBlockCount
    * Number of previous work profile passwords to block. Valid values 0 to 24
    *
    * @return int The workProfilePasswordPreviousPasswordBlockCount
    */
    public function getWorkProfilePasswordPreviousPasswordBlockCount()
    {
        if (array_key_exists("workProfilePasswordPreviousPasswordBlockCount", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordPreviousPasswordBlockCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordPreviousPasswordBlockCount
    * Number of previous work profile passwords to block. Valid values 0 to 24
    *
    * @param int $val The workProfilePasswordPreviousPasswordBlockCount
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["workProfilePasswordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordRequiredType
    * Type of work profile password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
    *
    * @return AndroidWorkProfileRequiredPasswordType The workProfilePasswordRequiredType
    */
    public function getWorkProfilePasswordRequiredType()
    {
        if (array_key_exists("workProfilePasswordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["workProfilePasswordRequiredType"], "\Microsoft\Graph\Model\AndroidWorkProfileRequiredPasswordType")) {
                return $this->_propDict["workProfilePasswordRequiredType"];
            } else {
                $this->_propDict["workProfilePasswordRequiredType"] = new AndroidWorkProfileRequiredPasswordType($this->_propDict["workProfilePasswordRequiredType"]);
                return $this->_propDict["workProfilePasswordRequiredType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the workProfilePasswordRequiredType
    * Type of work profile password that is required. Possible values are: deviceDefault, lowSecurityBiometric, required, atLeastNumeric, numericComplex, atLeastAlphabetic, atLeastAlphanumeric, alphanumericWithSymbols.
    *
    * @param AndroidWorkProfileRequiredPasswordType $val The workProfilePasswordRequiredType
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordRequiredType($val)
    {
        $this->_propDict["workProfilePasswordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the workProfilePasswordSignInFailureCountBeforeFactoryReset
    * Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
    *
    * @return int The workProfilePasswordSignInFailureCountBeforeFactoryReset
    */
    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset()
    {
        if (array_key_exists("workProfilePasswordSignInFailureCountBeforeFactoryReset", $this->_propDict)) {
            return $this->_propDict["workProfilePasswordSignInFailureCountBeforeFactoryReset"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfilePasswordSignInFailureCountBeforeFactoryReset
    * Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
    *
    * @param int $val The workProfilePasswordSignInFailureCountBeforeFactoryReset
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["workProfilePasswordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the workProfileRequirePassword
    * Password is required or not for work profile
    *
    * @return bool The workProfileRequirePassword
    */
    public function getWorkProfileRequirePassword()
    {
        if (array_key_exists("workProfileRequirePassword", $this->_propDict)) {
            return $this->_propDict["workProfileRequirePassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workProfileRequirePassword
    * Password is required or not for work profile
    *
    * @param bool $val The workProfileRequirePassword
    *
    * @return AndroidWorkProfileGeneralDeviceConfiguration
    */
    public function setWorkProfileRequirePassword($val)
    {
        $this->_propDict["workProfileRequirePassword"] = boolval($val);
        return $this;
    }
    
}
