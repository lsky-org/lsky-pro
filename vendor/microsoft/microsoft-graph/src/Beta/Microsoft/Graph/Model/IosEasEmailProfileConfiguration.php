<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosEasEmailProfileConfiguration File
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
* IosEasEmailProfileConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosEasEmailProfileConfiguration extends EasEmailProfileConfigurationBase
{
    /**
    * Gets the accountName
    * Account name.
    *
    * @return string The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountName
    * Account name.
    *
    * @param string $val The accountName
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    * Authentication method for this Email profile. Possible values are: usernameAndPassword, certificate, derivedCredential.
    *
    * @return EasAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\EasAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new EasAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    * Authentication method for this Email profile. Possible values are: usernameAndPassword, certificate, derivedCredential.
    *
    * @param EasAuthenticationMethod $val The authenticationMethod
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the blockMovingMessagesToOtherEmailAccounts
    * Indicates whether or not to block moving messages to other email accounts.
    *
    * @return bool The blockMovingMessagesToOtherEmailAccounts
    */
    public function getBlockMovingMessagesToOtherEmailAccounts()
    {
        if (array_key_exists("blockMovingMessagesToOtherEmailAccounts", $this->_propDict)) {
            return $this->_propDict["blockMovingMessagesToOtherEmailAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockMovingMessagesToOtherEmailAccounts
    * Indicates whether or not to block moving messages to other email accounts.
    *
    * @param bool $val The blockMovingMessagesToOtherEmailAccounts
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setBlockMovingMessagesToOtherEmailAccounts($val)
    {
        $this->_propDict["blockMovingMessagesToOtherEmailAccounts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the blockSendingEmailFromThirdPartyApps
    * Indicates whether or not to block sending email from third party apps.
    *
    * @return bool The blockSendingEmailFromThirdPartyApps
    */
    public function getBlockSendingEmailFromThirdPartyApps()
    {
        if (array_key_exists("blockSendingEmailFromThirdPartyApps", $this->_propDict)) {
            return $this->_propDict["blockSendingEmailFromThirdPartyApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockSendingEmailFromThirdPartyApps
    * Indicates whether or not to block sending email from third party apps.
    *
    * @param bool $val The blockSendingEmailFromThirdPartyApps
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setBlockSendingEmailFromThirdPartyApps($val)
    {
        $this->_propDict["blockSendingEmailFromThirdPartyApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the blockSyncingRecentlyUsedEmailAddresses
    * Indicates whether or not to block syncing recently used email addresses, for instance - when composing new email.
    *
    * @return bool The blockSyncingRecentlyUsedEmailAddresses
    */
    public function getBlockSyncingRecentlyUsedEmailAddresses()
    {
        if (array_key_exists("blockSyncingRecentlyUsedEmailAddresses", $this->_propDict)) {
            return $this->_propDict["blockSyncingRecentlyUsedEmailAddresses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockSyncingRecentlyUsedEmailAddresses
    * Indicates whether or not to block syncing recently used email addresses, for instance - when composing new email.
    *
    * @param bool $val The blockSyncingRecentlyUsedEmailAddresses
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setBlockSyncingRecentlyUsedEmailAddresses($val)
    {
        $this->_propDict["blockSyncingRecentlyUsedEmailAddresses"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the durationOfEmailToSync
    * Duration of time email should be synced back to. . Possible values are: userDefined, oneDay, threeDays, oneWeek, twoWeeks, oneMonth, unlimited.
    *
    * @return EmailSyncDuration The durationOfEmailToSync
    */
    public function getDurationOfEmailToSync()
    {
        if (array_key_exists("durationOfEmailToSync", $this->_propDict)) {
            if (is_a($this->_propDict["durationOfEmailToSync"], "\Beta\Microsoft\Graph\Model\EmailSyncDuration")) {
                return $this->_propDict["durationOfEmailToSync"];
            } else {
                $this->_propDict["durationOfEmailToSync"] = new EmailSyncDuration($this->_propDict["durationOfEmailToSync"]);
                return $this->_propDict["durationOfEmailToSync"];
            }
        }
        return null;
    }
    
    /**
    * Sets the durationOfEmailToSync
    * Duration of time email should be synced back to. . Possible values are: userDefined, oneDay, threeDays, oneWeek, twoWeeks, oneMonth, unlimited.
    *
    * @param EmailSyncDuration $val The durationOfEmailToSync
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setDurationOfEmailToSync($val)
    {
        $this->_propDict["durationOfEmailToSync"] = $val;
        return $this;
    }
    
    /**
    * Gets the easServices
    * Exchange data to sync. Possible values are: none, calendars, contacts, email, notes, reminders.
    *
    * @return EasServices The easServices
    */
    public function getEasServices()
    {
        if (array_key_exists("easServices", $this->_propDict)) {
            if (is_a($this->_propDict["easServices"], "\Beta\Microsoft\Graph\Model\EasServices")) {
                return $this->_propDict["easServices"];
            } else {
                $this->_propDict["easServices"] = new EasServices($this->_propDict["easServices"]);
                return $this->_propDict["easServices"];
            }
        }
        return null;
    }
    
    /**
    * Sets the easServices
    * Exchange data to sync. Possible values are: none, calendars, contacts, email, notes, reminders.
    *
    * @param EasServices $val The easServices
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setEasServices($val)
    {
        $this->_propDict["easServices"] = $val;
        return $this;
    }
    
    /**
    * Gets the easServicesUserOverrideEnabled
    * Allow users to change sync settings.
    *
    * @return bool The easServicesUserOverrideEnabled
    */
    public function getEasServicesUserOverrideEnabled()
    {
        if (array_key_exists("easServicesUserOverrideEnabled", $this->_propDict)) {
            return $this->_propDict["easServicesUserOverrideEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the easServicesUserOverrideEnabled
    * Allow users to change sync settings.
    *
    * @param bool $val The easServicesUserOverrideEnabled
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setEasServicesUserOverrideEnabled($val)
    {
        $this->_propDict["easServicesUserOverrideEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the emailAddressSource
    * Email attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
    *
    * @return UserEmailSource The emailAddressSource
    */
    public function getEmailAddressSource()
    {
        if (array_key_exists("emailAddressSource", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddressSource"], "\Beta\Microsoft\Graph\Model\UserEmailSource")) {
                return $this->_propDict["emailAddressSource"];
            } else {
                $this->_propDict["emailAddressSource"] = new UserEmailSource($this->_propDict["emailAddressSource"]);
                return $this->_propDict["emailAddressSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailAddressSource
    * Email attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
    *
    * @param UserEmailSource $val The emailAddressSource
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setEmailAddressSource($val)
    {
        $this->_propDict["emailAddressSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptionCertificateType
    * Encryption Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
    *
    * @return EmailCertificateType The encryptionCertificateType
    */
    public function getEncryptionCertificateType()
    {
        if (array_key_exists("encryptionCertificateType", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionCertificateType"], "\Beta\Microsoft\Graph\Model\EmailCertificateType")) {
                return $this->_propDict["encryptionCertificateType"];
            } else {
                $this->_propDict["encryptionCertificateType"] = new EmailCertificateType($this->_propDict["encryptionCertificateType"]);
                return $this->_propDict["encryptionCertificateType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the encryptionCertificateType
    * Encryption Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
    *
    * @param EmailCertificateType $val The encryptionCertificateType
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setEncryptionCertificateType($val)
    {
        $this->_propDict["encryptionCertificateType"] = $val;
        return $this;
    }
    
    /**
    * Gets the hostName
    * Exchange location that (URL) that the native mail app connects to.
    *
    * @return string The hostName
    */
    public function getHostName()
    {
        if (array_key_exists("hostName", $this->_propDict)) {
            return $this->_propDict["hostName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hostName
    * Exchange location that (URL) that the native mail app connects to.
    *
    * @param string $val The hostName
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setHostName($val)
    {
        $this->_propDict["hostName"] = $val;
        return $this;
    }
    
    /**
    * Gets the perAppVPNProfileId
    * Profile ID of the Per-App VPN policy to be used to access emails from the native Mail client
    *
    * @return string The perAppVPNProfileId
    */
    public function getPerAppVPNProfileId()
    {
        if (array_key_exists("perAppVPNProfileId", $this->_propDict)) {
            return $this->_propDict["perAppVPNProfileId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the perAppVPNProfileId
    * Profile ID of the Per-App VPN policy to be used to access emails from the native Mail client
    *
    * @param string $val The perAppVPNProfileId
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setPerAppVPNProfileId($val)
    {
        $this->_propDict["perAppVPNProfileId"] = $val;
        return $this;
    }
    
    /**
    * Gets the requireSmime
    * Indicates whether or not to use S/MIME certificate.
    *
    * @return bool The requireSmime
    */
    public function getRequireSmime()
    {
        if (array_key_exists("requireSmime", $this->_propDict)) {
            return $this->_propDict["requireSmime"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireSmime
    * Indicates whether or not to use S/MIME certificate.
    *
    * @param bool $val The requireSmime
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setRequireSmime($val)
    {
        $this->_propDict["requireSmime"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requireSsl
    * Indicates whether or not to use SSL.
    *
    * @return bool The requireSsl
    */
    public function getRequireSsl()
    {
        if (array_key_exists("requireSsl", $this->_propDict)) {
            return $this->_propDict["requireSsl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireSsl
    * Indicates whether or not to use SSL.
    *
    * @param bool $val The requireSsl
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setRequireSsl($val)
    {
        $this->_propDict["requireSsl"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the signingCertificateType
    * Signing Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
    *
    * @return EmailCertificateType The signingCertificateType
    */
    public function getSigningCertificateType()
    {
        if (array_key_exists("signingCertificateType", $this->_propDict)) {
            if (is_a($this->_propDict["signingCertificateType"], "\Beta\Microsoft\Graph\Model\EmailCertificateType")) {
                return $this->_propDict["signingCertificateType"];
            } else {
                $this->_propDict["signingCertificateType"] = new EmailCertificateType($this->_propDict["signingCertificateType"]);
                return $this->_propDict["signingCertificateType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the signingCertificateType
    * Signing Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
    *
    * @param EmailCertificateType $val The signingCertificateType
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSigningCertificateType($val)
    {
        $this->_propDict["signingCertificateType"] = $val;
        return $this;
    }
    
    /**
    * Gets the smimeEnablePerMessageSwitch
    * Indicates whether or not to allow unencrypted emails.
    *
    * @return bool The smimeEnablePerMessageSwitch
    */
    public function getSmimeEnablePerMessageSwitch()
    {
        if (array_key_exists("smimeEnablePerMessageSwitch", $this->_propDict)) {
            return $this->_propDict["smimeEnablePerMessageSwitch"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smimeEnablePerMessageSwitch
    * Indicates whether or not to allow unencrypted emails.
    *
    * @param bool $val The smimeEnablePerMessageSwitch
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeEnablePerMessageSwitch($val)
    {
        $this->_propDict["smimeEnablePerMessageSwitch"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smimeEncryptByDefaultEnabled
    * If set to true S/MIME encryption is enabled by default.
    *
    * @return bool The smimeEncryptByDefaultEnabled
    */
    public function getSmimeEncryptByDefaultEnabled()
    {
        if (array_key_exists("smimeEncryptByDefaultEnabled", $this->_propDict)) {
            return $this->_propDict["smimeEncryptByDefaultEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smimeEncryptByDefaultEnabled
    * If set to true S/MIME encryption is enabled by default.
    *
    * @param bool $val The smimeEncryptByDefaultEnabled
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeEncryptByDefaultEnabled($val)
    {
        $this->_propDict["smimeEncryptByDefaultEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smimeEncryptByDefaultUserOverrideEnabled
    * If set to true, the user can toggle the encryption by default setting.
    *
    * @return bool The smimeEncryptByDefaultUserOverrideEnabled
    */
    public function getSmimeEncryptByDefaultUserOverrideEnabled()
    {
        if (array_key_exists("smimeEncryptByDefaultUserOverrideEnabled", $this->_propDict)) {
            return $this->_propDict["smimeEncryptByDefaultUserOverrideEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smimeEncryptByDefaultUserOverrideEnabled
    * If set to true, the user can toggle the encryption by default setting.
    *
    * @param bool $val The smimeEncryptByDefaultUserOverrideEnabled
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeEncryptByDefaultUserOverrideEnabled($val)
    {
        $this->_propDict["smimeEncryptByDefaultUserOverrideEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smimeEncryptionCertificateUserOverrideEnabled
    * If set to true the user can select the S/MIME encryption identity.
    *
    * @return bool The smimeEncryptionCertificateUserOverrideEnabled
    */
    public function getSmimeEncryptionCertificateUserOverrideEnabled()
    {
        if (array_key_exists("smimeEncryptionCertificateUserOverrideEnabled", $this->_propDict)) {
            return $this->_propDict["smimeEncryptionCertificateUserOverrideEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smimeEncryptionCertificateUserOverrideEnabled
    * If set to true the user can select the S/MIME encryption identity.
    *
    * @param bool $val The smimeEncryptionCertificateUserOverrideEnabled
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeEncryptionCertificateUserOverrideEnabled($val)
    {
        $this->_propDict["smimeEncryptionCertificateUserOverrideEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smimeSigningCertificateUserOverrideEnabled
    * If set to true, the user can select the signing identity.
    *
    * @return bool The smimeSigningCertificateUserOverrideEnabled
    */
    public function getSmimeSigningCertificateUserOverrideEnabled()
    {
        if (array_key_exists("smimeSigningCertificateUserOverrideEnabled", $this->_propDict)) {
            return $this->_propDict["smimeSigningCertificateUserOverrideEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smimeSigningCertificateUserOverrideEnabled
    * If set to true, the user can select the signing identity.
    *
    * @param bool $val The smimeSigningCertificateUserOverrideEnabled
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeSigningCertificateUserOverrideEnabled($val)
    {
        $this->_propDict["smimeSigningCertificateUserOverrideEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smimeSigningEnabled
    * If set to true S/MIME signing is enabled for this account
    *
    * @return bool The smimeSigningEnabled
    */
    public function getSmimeSigningEnabled()
    {
        if (array_key_exists("smimeSigningEnabled", $this->_propDict)) {
            return $this->_propDict["smimeSigningEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smimeSigningEnabled
    * If set to true S/MIME signing is enabled for this account
    *
    * @param bool $val The smimeSigningEnabled
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeSigningEnabled($val)
    {
        $this->_propDict["smimeSigningEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smimeSigningUserOverrideEnabled
    * If set to true, the user can toggle S/MIME signing on or off.
    *
    * @return bool The smimeSigningUserOverrideEnabled
    */
    public function getSmimeSigningUserOverrideEnabled()
    {
        if (array_key_exists("smimeSigningUserOverrideEnabled", $this->_propDict)) {
            return $this->_propDict["smimeSigningUserOverrideEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smimeSigningUserOverrideEnabled
    * If set to true, the user can toggle S/MIME signing on or off.
    *
    * @param bool $val The smimeSigningUserOverrideEnabled
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeSigningUserOverrideEnabled($val)
    {
        $this->_propDict["smimeSigningUserOverrideEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the useOAuth
    * Specifies whether the connection should use OAuth for authentication.
    *
    * @return bool The useOAuth
    */
    public function getUseOAuth()
    {
        if (array_key_exists("useOAuth", $this->_propDict)) {
            return $this->_propDict["useOAuth"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the useOAuth
    * Specifies whether the connection should use OAuth for authentication.
    *
    * @param bool $val The useOAuth
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setUseOAuth($val)
    {
        $this->_propDict["useOAuth"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the derivedCredentialSettings
    * Tenant level settings for the Derived Credentials to be used for authentication.
    *
    * @return DeviceManagementDerivedCredentialSettings The derivedCredentialSettings
    */
    public function getDerivedCredentialSettings()
    {
        if (array_key_exists("derivedCredentialSettings", $this->_propDict)) {
            if (is_a($this->_propDict["derivedCredentialSettings"], "\Beta\Microsoft\Graph\Model\DeviceManagementDerivedCredentialSettings")) {
                return $this->_propDict["derivedCredentialSettings"];
            } else {
                $this->_propDict["derivedCredentialSettings"] = new DeviceManagementDerivedCredentialSettings($this->_propDict["derivedCredentialSettings"]);
                return $this->_propDict["derivedCredentialSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the derivedCredentialSettings
    * Tenant level settings for the Derived Credentials to be used for authentication.
    *
    * @param DeviceManagementDerivedCredentialSettings $val The derivedCredentialSettings
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setDerivedCredentialSettings($val)
    {
        $this->_propDict["derivedCredentialSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate.
    *
    * @return IosCertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "\Beta\Microsoft\Graph\Model\IosCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new IosCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate.
    *
    * @param IosCertificateProfileBase $val The identityCertificate
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the smimeEncryptionCertificate
    * S/MIME encryption certificate.
    *
    * @return IosCertificateProfile The smimeEncryptionCertificate
    */
    public function getSmimeEncryptionCertificate()
    {
        if (array_key_exists("smimeEncryptionCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["smimeEncryptionCertificate"], "\Beta\Microsoft\Graph\Model\IosCertificateProfile")) {
                return $this->_propDict["smimeEncryptionCertificate"];
            } else {
                $this->_propDict["smimeEncryptionCertificate"] = new IosCertificateProfile($this->_propDict["smimeEncryptionCertificate"]);
                return $this->_propDict["smimeEncryptionCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the smimeEncryptionCertificate
    * S/MIME encryption certificate.
    *
    * @param IosCertificateProfile $val The smimeEncryptionCertificate
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeEncryptionCertificate($val)
    {
        $this->_propDict["smimeEncryptionCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the smimeSigningCertificate
    * S/MIME signing certificate.
    *
    * @return IosCertificateProfile The smimeSigningCertificate
    */
    public function getSmimeSigningCertificate()
    {
        if (array_key_exists("smimeSigningCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["smimeSigningCertificate"], "\Beta\Microsoft\Graph\Model\IosCertificateProfile")) {
                return $this->_propDict["smimeSigningCertificate"];
            } else {
                $this->_propDict["smimeSigningCertificate"] = new IosCertificateProfile($this->_propDict["smimeSigningCertificate"]);
                return $this->_propDict["smimeSigningCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the smimeSigningCertificate
    * S/MIME signing certificate.
    *
    * @param IosCertificateProfile $val The smimeSigningCertificate
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeSigningCertificate($val)
    {
        $this->_propDict["smimeSigningCertificate"] = $val;
        return $this;
    }
    
}
