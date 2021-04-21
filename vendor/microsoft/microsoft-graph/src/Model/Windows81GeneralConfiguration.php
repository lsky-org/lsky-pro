<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows81GeneralConfiguration File
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
* Windows81GeneralConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows81GeneralConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountsBlockAddingNonMicrosoftAccountEmail
    * Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
    *
    * @return bool The accountsBlockAddingNonMicrosoftAccountEmail
    */
    public function getAccountsBlockAddingNonMicrosoftAccountEmail()
    {
        if (array_key_exists("accountsBlockAddingNonMicrosoftAccountEmail", $this->_propDict)) {
            return $this->_propDict["accountsBlockAddingNonMicrosoftAccountEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountsBlockAddingNonMicrosoftAccountEmail
    * Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
    *
    * @param bool $val The accountsBlockAddingNonMicrosoftAccountEmail
    *
    * @return Windows81GeneralConfiguration
    */
    public function setAccountsBlockAddingNonMicrosoftAccountEmail($val)
    {
        $this->_propDict["accountsBlockAddingNonMicrosoftAccountEmail"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applyOnlyToWindows81
    * Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
    *
    * @return bool The applyOnlyToWindows81
    */
    public function getApplyOnlyToWindows81()
    {
        if (array_key_exists("applyOnlyToWindows81", $this->_propDict)) {
            return $this->_propDict["applyOnlyToWindows81"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applyOnlyToWindows81
    * Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
    *
    * @param bool $val The applyOnlyToWindows81
    *
    * @return Windows81GeneralConfiguration
    */
    public function setApplyOnlyToWindows81($val)
    {
        $this->_propDict["applyOnlyToWindows81"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserBlockAutofill
    * Indicates whether or not to block auto fill.
    *
    * @return bool The browserBlockAutofill
    */
    public function getBrowserBlockAutofill()
    {
        if (array_key_exists("browserBlockAutofill", $this->_propDict)) {
            return $this->_propDict["browserBlockAutofill"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserBlockAutofill
    * Indicates whether or not to block auto fill.
    *
    * @param bool $val The browserBlockAutofill
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserBlockAutofill($val)
    {
        $this->_propDict["browserBlockAutofill"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserBlockAutomaticDetectionOfIntranetSites
    * Indicates whether or not to block automatic detection of Intranet sites.
    *
    * @return bool The browserBlockAutomaticDetectionOfIntranetSites
    */
    public function getBrowserBlockAutomaticDetectionOfIntranetSites()
    {
        if (array_key_exists("browserBlockAutomaticDetectionOfIntranetSites", $this->_propDict)) {
            return $this->_propDict["browserBlockAutomaticDetectionOfIntranetSites"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserBlockAutomaticDetectionOfIntranetSites
    * Indicates whether or not to block automatic detection of Intranet sites.
    *
    * @param bool $val The browserBlockAutomaticDetectionOfIntranetSites
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserBlockAutomaticDetectionOfIntranetSites($val)
    {
        $this->_propDict["browserBlockAutomaticDetectionOfIntranetSites"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserBlockEnterpriseModeAccess
    * Indicates whether or not to block enterprise mode access.
    *
    * @return bool The browserBlockEnterpriseModeAccess
    */
    public function getBrowserBlockEnterpriseModeAccess()
    {
        if (array_key_exists("browserBlockEnterpriseModeAccess", $this->_propDict)) {
            return $this->_propDict["browserBlockEnterpriseModeAccess"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserBlockEnterpriseModeAccess
    * Indicates whether or not to block enterprise mode access.
    *
    * @param bool $val The browserBlockEnterpriseModeAccess
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserBlockEnterpriseModeAccess($val)
    {
        $this->_propDict["browserBlockEnterpriseModeAccess"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserBlockJavaScript
    * Indicates whether or not to Block the user from using JavaScript.
    *
    * @return bool The browserBlockJavaScript
    */
    public function getBrowserBlockJavaScript()
    {
        if (array_key_exists("browserBlockJavaScript", $this->_propDict)) {
            return $this->_propDict["browserBlockJavaScript"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserBlockJavaScript
    * Indicates whether or not to Block the user from using JavaScript.
    *
    * @param bool $val The browserBlockJavaScript
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserBlockJavaScript($val)
    {
        $this->_propDict["browserBlockJavaScript"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserBlockPlugins
    * Indicates whether or not to block plug-ins.
    *
    * @return bool The browserBlockPlugins
    */
    public function getBrowserBlockPlugins()
    {
        if (array_key_exists("browserBlockPlugins", $this->_propDict)) {
            return $this->_propDict["browserBlockPlugins"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserBlockPlugins
    * Indicates whether or not to block plug-ins.
    *
    * @param bool $val The browserBlockPlugins
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserBlockPlugins($val)
    {
        $this->_propDict["browserBlockPlugins"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserBlockPopups
    * Indicates whether or not to block popups.
    *
    * @return bool The browserBlockPopups
    */
    public function getBrowserBlockPopups()
    {
        if (array_key_exists("browserBlockPopups", $this->_propDict)) {
            return $this->_propDict["browserBlockPopups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserBlockPopups
    * Indicates whether or not to block popups.
    *
    * @param bool $val The browserBlockPopups
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserBlockPopups($val)
    {
        $this->_propDict["browserBlockPopups"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserBlockSendingDoNotTrackHeader
    * Indicates whether or not to Block the user from sending the do not track header.
    *
    * @return bool The browserBlockSendingDoNotTrackHeader
    */
    public function getBrowserBlockSendingDoNotTrackHeader()
    {
        if (array_key_exists("browserBlockSendingDoNotTrackHeader", $this->_propDict)) {
            return $this->_propDict["browserBlockSendingDoNotTrackHeader"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserBlockSendingDoNotTrackHeader
    * Indicates whether or not to Block the user from sending the do not track header.
    *
    * @param bool $val The browserBlockSendingDoNotTrackHeader
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserBlockSendingDoNotTrackHeader($val)
    {
        $this->_propDict["browserBlockSendingDoNotTrackHeader"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserBlockSingleWordEntryOnIntranetSites
    * Indicates whether or not to block a single word entry on Intranet sites.
    *
    * @return bool The browserBlockSingleWordEntryOnIntranetSites
    */
    public function getBrowserBlockSingleWordEntryOnIntranetSites()
    {
        if (array_key_exists("browserBlockSingleWordEntryOnIntranetSites", $this->_propDict)) {
            return $this->_propDict["browserBlockSingleWordEntryOnIntranetSites"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserBlockSingleWordEntryOnIntranetSites
    * Indicates whether or not to block a single word entry on Intranet sites.
    *
    * @param bool $val The browserBlockSingleWordEntryOnIntranetSites
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserBlockSingleWordEntryOnIntranetSites($val)
    {
        $this->_propDict["browserBlockSingleWordEntryOnIntranetSites"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserEnterpriseModeSiteListLocation
    * The enterprise mode site list location. Could be a local file, local network or http location.
    *
    * @return string The browserEnterpriseModeSiteListLocation
    */
    public function getBrowserEnterpriseModeSiteListLocation()
    {
        if (array_key_exists("browserEnterpriseModeSiteListLocation", $this->_propDict)) {
            return $this->_propDict["browserEnterpriseModeSiteListLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserEnterpriseModeSiteListLocation
    * The enterprise mode site list location. Could be a local file, local network or http location.
    *
    * @param string $val The browserEnterpriseModeSiteListLocation
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserEnterpriseModeSiteListLocation($val)
    {
        $this->_propDict["browserEnterpriseModeSiteListLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the browserInternetSecurityLevel
    * The internet security level. Possible values are: userDefined, medium, mediumHigh, high.
    *
    * @return InternetSiteSecurityLevel The browserInternetSecurityLevel
    */
    public function getBrowserInternetSecurityLevel()
    {
        if (array_key_exists("browserInternetSecurityLevel", $this->_propDict)) {
            if (is_a($this->_propDict["browserInternetSecurityLevel"], "\Microsoft\Graph\Model\InternetSiteSecurityLevel")) {
                return $this->_propDict["browserInternetSecurityLevel"];
            } else {
                $this->_propDict["browserInternetSecurityLevel"] = new InternetSiteSecurityLevel($this->_propDict["browserInternetSecurityLevel"]);
                return $this->_propDict["browserInternetSecurityLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the browserInternetSecurityLevel
    * The internet security level. Possible values are: userDefined, medium, mediumHigh, high.
    *
    * @param InternetSiteSecurityLevel $val The browserInternetSecurityLevel
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserInternetSecurityLevel($val)
    {
        $this->_propDict["browserInternetSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the browserIntranetSecurityLevel
    * The Intranet security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
    *
    * @return SiteSecurityLevel The browserIntranetSecurityLevel
    */
    public function getBrowserIntranetSecurityLevel()
    {
        if (array_key_exists("browserIntranetSecurityLevel", $this->_propDict)) {
            if (is_a($this->_propDict["browserIntranetSecurityLevel"], "\Microsoft\Graph\Model\SiteSecurityLevel")) {
                return $this->_propDict["browserIntranetSecurityLevel"];
            } else {
                $this->_propDict["browserIntranetSecurityLevel"] = new SiteSecurityLevel($this->_propDict["browserIntranetSecurityLevel"]);
                return $this->_propDict["browserIntranetSecurityLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the browserIntranetSecurityLevel
    * The Intranet security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
    *
    * @param SiteSecurityLevel $val The browserIntranetSecurityLevel
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserIntranetSecurityLevel($val)
    {
        $this->_propDict["browserIntranetSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the browserLoggingReportLocation
    * The logging report location.
    *
    * @return string The browserLoggingReportLocation
    */
    public function getBrowserLoggingReportLocation()
    {
        if (array_key_exists("browserLoggingReportLocation", $this->_propDict)) {
            return $this->_propDict["browserLoggingReportLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserLoggingReportLocation
    * The logging report location.
    *
    * @param string $val The browserLoggingReportLocation
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserLoggingReportLocation($val)
    {
        $this->_propDict["browserLoggingReportLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the browserRequireFirewall
    * Indicates whether or not to require a firewall.
    *
    * @return bool The browserRequireFirewall
    */
    public function getBrowserRequireFirewall()
    {
        if (array_key_exists("browserRequireFirewall", $this->_propDict)) {
            return $this->_propDict["browserRequireFirewall"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserRequireFirewall
    * Indicates whether or not to require a firewall.
    *
    * @param bool $val The browserRequireFirewall
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserRequireFirewall($val)
    {
        $this->_propDict["browserRequireFirewall"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserRequireFraudWarning
    * Indicates whether or not to require fraud warning.
    *
    * @return bool The browserRequireFraudWarning
    */
    public function getBrowserRequireFraudWarning()
    {
        if (array_key_exists("browserRequireFraudWarning", $this->_propDict)) {
            return $this->_propDict["browserRequireFraudWarning"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserRequireFraudWarning
    * Indicates whether or not to require fraud warning.
    *
    * @param bool $val The browserRequireFraudWarning
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserRequireFraudWarning($val)
    {
        $this->_propDict["browserRequireFraudWarning"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserRequireHighSecurityForRestrictedSites
    * Indicates whether or not to require high security for restricted sites.
    *
    * @return bool The browserRequireHighSecurityForRestrictedSites
    */
    public function getBrowserRequireHighSecurityForRestrictedSites()
    {
        if (array_key_exists("browserRequireHighSecurityForRestrictedSites", $this->_propDict)) {
            return $this->_propDict["browserRequireHighSecurityForRestrictedSites"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserRequireHighSecurityForRestrictedSites
    * Indicates whether or not to require high security for restricted sites.
    *
    * @param bool $val The browserRequireHighSecurityForRestrictedSites
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserRequireHighSecurityForRestrictedSites($val)
    {
        $this->_propDict["browserRequireHighSecurityForRestrictedSites"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserRequireSmartScreen
    * Indicates whether or not to require the user to use the smart screen filter.
    *
    * @return bool The browserRequireSmartScreen
    */
    public function getBrowserRequireSmartScreen()
    {
        if (array_key_exists("browserRequireSmartScreen", $this->_propDict)) {
            return $this->_propDict["browserRequireSmartScreen"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the browserRequireSmartScreen
    * Indicates whether or not to require the user to use the smart screen filter.
    *
    * @param bool $val The browserRequireSmartScreen
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserRequireSmartScreen($val)
    {
        $this->_propDict["browserRequireSmartScreen"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the browserTrustedSitesSecurityLevel
    * The trusted sites security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
    *
    * @return SiteSecurityLevel The browserTrustedSitesSecurityLevel
    */
    public function getBrowserTrustedSitesSecurityLevel()
    {
        if (array_key_exists("browserTrustedSitesSecurityLevel", $this->_propDict)) {
            if (is_a($this->_propDict["browserTrustedSitesSecurityLevel"], "\Microsoft\Graph\Model\SiteSecurityLevel")) {
                return $this->_propDict["browserTrustedSitesSecurityLevel"];
            } else {
                $this->_propDict["browserTrustedSitesSecurityLevel"] = new SiteSecurityLevel($this->_propDict["browserTrustedSitesSecurityLevel"]);
                return $this->_propDict["browserTrustedSitesSecurityLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the browserTrustedSitesSecurityLevel
    * The trusted sites security level. Possible values are: userDefined, low, mediumLow, medium, mediumHigh, high.
    *
    * @param SiteSecurityLevel $val The browserTrustedSitesSecurityLevel
    *
    * @return Windows81GeneralConfiguration
    */
    public function setBrowserTrustedSitesSecurityLevel($val)
    {
        $this->_propDict["browserTrustedSitesSecurityLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the cellularBlockDataRoaming
    * Indicates whether or not to block data roaming.
    *
    * @return bool The cellularBlockDataRoaming
    */
    public function getCellularBlockDataRoaming()
    {
        if (array_key_exists("cellularBlockDataRoaming", $this->_propDict)) {
            return $this->_propDict["cellularBlockDataRoaming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellularBlockDataRoaming
    * Indicates whether or not to block data roaming.
    *
    * @param bool $val The cellularBlockDataRoaming
    *
    * @return Windows81GeneralConfiguration
    */
    public function setCellularBlockDataRoaming($val)
    {
        $this->_propDict["cellularBlockDataRoaming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the diagnosticsBlockDataSubmission
    * Indicates whether or not to block diagnostic data submission.
    *
    * @return bool The diagnosticsBlockDataSubmission
    */
    public function getDiagnosticsBlockDataSubmission()
    {
        if (array_key_exists("diagnosticsBlockDataSubmission", $this->_propDict)) {
            return $this->_propDict["diagnosticsBlockDataSubmission"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the diagnosticsBlockDataSubmission
    * Indicates whether or not to block diagnostic data submission.
    *
    * @param bool $val The diagnosticsBlockDataSubmission
    *
    * @return Windows81GeneralConfiguration
    */
    public function setDiagnosticsBlockDataSubmission($val)
    {
        $this->_propDict["diagnosticsBlockDataSubmission"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockPicturePasswordAndPin
    * Indicates whether or not to Block the user from using a pictures password and pin.
    *
    * @return bool The passwordBlockPicturePasswordAndPin
    */
    public function getPasswordBlockPicturePasswordAndPin()
    {
        if (array_key_exists("passwordBlockPicturePasswordAndPin", $this->_propDict)) {
            return $this->_propDict["passwordBlockPicturePasswordAndPin"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockPicturePasswordAndPin
    * Indicates whether or not to Block the user from using a pictures password and pin.
    *
    * @param bool $val The passwordBlockPicturePasswordAndPin
    *
    * @return Windows81GeneralConfiguration
    */
    public function setPasswordBlockPicturePasswordAndPin($val)
    {
        $this->_propDict["passwordBlockPicturePasswordAndPin"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    * Password expiration in days.
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
    * Password expiration in days.
    *
    * @param int $val The passwordExpirationDays
    *
    * @return Windows81GeneralConfiguration
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
    * @return Windows81GeneralConfiguration
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
    * @return Windows81GeneralConfiguration
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    * The minutes of inactivity before the screen times out.
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
    * The minutes of inactivity before the screen times out.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return Windows81GeneralConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    * The number of previous passwords to prevent re-use of. Valid values 0 to 24
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
    * The number of previous passwords to prevent re-use of. Valid values 0 to 24
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return Windows81GeneralConfiguration
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
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
            if (is_a($this->_propDict["passwordRequiredType"], "\Microsoft\Graph\Model\RequiredPasswordType")) {
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
    * @return Windows81GeneralConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordSignInFailureCountBeforeFactoryReset
    * The number of sign in failures before factory reset.
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
    * The number of sign in failures before factory reset.
    *
    * @param int $val The passwordSignInFailureCountBeforeFactoryReset
    *
    * @return Windows81GeneralConfiguration
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset($val)
    {
        $this->_propDict["passwordSignInFailureCountBeforeFactoryReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the storageRequireDeviceEncryption
    * Indicates whether or not to require encryption on a mobile device.
    *
    * @return bool The storageRequireDeviceEncryption
    */
    public function getStorageRequireDeviceEncryption()
    {
        if (array_key_exists("storageRequireDeviceEncryption", $this->_propDict)) {
            return $this->_propDict["storageRequireDeviceEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageRequireDeviceEncryption
    * Indicates whether or not to require encryption on a mobile device.
    *
    * @param bool $val The storageRequireDeviceEncryption
    *
    * @return Windows81GeneralConfiguration
    */
    public function setStorageRequireDeviceEncryption($val)
    {
        $this->_propDict["storageRequireDeviceEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the updatesRequireAutomaticUpdates
    * Indicates whether or not to require automatic updates.
    *
    * @return bool The updatesRequireAutomaticUpdates
    */
    public function getUpdatesRequireAutomaticUpdates()
    {
        if (array_key_exists("updatesRequireAutomaticUpdates", $this->_propDict)) {
            return $this->_propDict["updatesRequireAutomaticUpdates"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the updatesRequireAutomaticUpdates
    * Indicates whether or not to require automatic updates.
    *
    * @param bool $val The updatesRequireAutomaticUpdates
    *
    * @return Windows81GeneralConfiguration
    */
    public function setUpdatesRequireAutomaticUpdates($val)
    {
        $this->_propDict["updatesRequireAutomaticUpdates"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userAccountControlSettings
    * The user account control settings. Possible values are: userDefined, alwaysNotify, notifyOnAppChanges, notifyOnAppChangesWithoutDimming, neverNotify.
    *
    * @return WindowsUserAccountControlSettings The userAccountControlSettings
    */
    public function getUserAccountControlSettings()
    {
        if (array_key_exists("userAccountControlSettings", $this->_propDict)) {
            if (is_a($this->_propDict["userAccountControlSettings"], "\Microsoft\Graph\Model\WindowsUserAccountControlSettings")) {
                return $this->_propDict["userAccountControlSettings"];
            } else {
                $this->_propDict["userAccountControlSettings"] = new WindowsUserAccountControlSettings($this->_propDict["userAccountControlSettings"]);
                return $this->_propDict["userAccountControlSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userAccountControlSettings
    * The user account control settings. Possible values are: userDefined, alwaysNotify, notifyOnAppChanges, notifyOnAppChangesWithoutDimming, neverNotify.
    *
    * @param WindowsUserAccountControlSettings $val The userAccountControlSettings
    *
    * @return Windows81GeneralConfiguration
    */
    public function setUserAccountControlSettings($val)
    {
        $this->_propDict["userAccountControlSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the workFoldersUrl
    * The work folders url.
    *
    * @return string The workFoldersUrl
    */
    public function getWorkFoldersUrl()
    {
        if (array_key_exists("workFoldersUrl", $this->_propDict)) {
            return $this->_propDict["workFoldersUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workFoldersUrl
    * The work folders url.
    *
    * @param string $val The workFoldersUrl
    *
    * @return Windows81GeneralConfiguration
    */
    public function setWorkFoldersUrl($val)
    {
        $this->_propDict["workFoldersUrl"] = $val;
        return $this;
    }
    
}
