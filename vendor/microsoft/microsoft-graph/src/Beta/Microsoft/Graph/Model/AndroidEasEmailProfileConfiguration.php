<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidEasEmailProfileConfiguration File
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
* AndroidEasEmailProfileConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidEasEmailProfileConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountName
    * Exchange ActiveSync account name, displayed to users as name of EAS (this) profile.
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
    * Exchange ActiveSync account name, displayed to users as name of EAS (this) profile.
    *
    * @param string $val The accountName
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    * Authentication method for Exchange ActiveSync. Possible values are: usernameAndPassword, certificate, derivedCredential.
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
    * Authentication method for Exchange ActiveSync. Possible values are: usernameAndPassword, certificate, derivedCredential.
    *
    * @param EasAuthenticationMethod $val The authenticationMethod
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the customDomainName
    * Custom domain name value used while generating an email profile before installing on the device.
    *
    * @return string The customDomainName
    */
    public function getCustomDomainName()
    {
        if (array_key_exists("customDomainName", $this->_propDict)) {
            return $this->_propDict["customDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customDomainName
    * Custom domain name value used while generating an email profile before installing on the device.
    *
    * @param string $val The customDomainName
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setCustomDomainName($val)
    {
        $this->_propDict["customDomainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the durationOfEmailToSync
    * Duration of time email should be synced to. Possible values are: userDefined, oneDay, threeDays, oneWeek, twoWeeks, oneMonth, unlimited.
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
    * Duration of time email should be synced to. Possible values are: userDefined, oneDay, threeDays, oneWeek, twoWeeks, oneMonth, unlimited.
    *
    * @param EmailSyncDuration $val The durationOfEmailToSync
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setDurationOfEmailToSync($val)
    {
        $this->_propDict["durationOfEmailToSync"] = $val;
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
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setEmailAddressSource($val)
    {
        $this->_propDict["emailAddressSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailSyncSchedule
    * Email sync schedule. Possible values are: userDefined, asMessagesArrive, manual, fifteenMinutes, thirtyMinutes, sixtyMinutes, basedOnMyUsage.
    *
    * @return EmailSyncSchedule The emailSyncSchedule
    */
    public function getEmailSyncSchedule()
    {
        if (array_key_exists("emailSyncSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["emailSyncSchedule"], "\Beta\Microsoft\Graph\Model\EmailSyncSchedule")) {
                return $this->_propDict["emailSyncSchedule"];
            } else {
                $this->_propDict["emailSyncSchedule"] = new EmailSyncSchedule($this->_propDict["emailSyncSchedule"]);
                return $this->_propDict["emailSyncSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailSyncSchedule
    * Email sync schedule. Possible values are: userDefined, asMessagesArrive, manual, fifteenMinutes, thirtyMinutes, sixtyMinutes, basedOnMyUsage.
    *
    * @param EmailSyncSchedule $val The emailSyncSchedule
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setEmailSyncSchedule($val)
    {
        $this->_propDict["emailSyncSchedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the hostName
    * Exchange location (URL) that the native mail app connects to.
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
    * Exchange location (URL) that the native mail app connects to.
    *
    * @param string $val The hostName
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setHostName($val)
    {
        $this->_propDict["hostName"] = $val;
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
    * @return AndroidEasEmailProfileConfiguration
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
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setRequireSsl($val)
    {
        $this->_propDict["requireSsl"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncCalendar
    * Toggles syncing the calendar. If set to false calendar is turned off on the device.
    *
    * @return bool The syncCalendar
    */
    public function getSyncCalendar()
    {
        if (array_key_exists("syncCalendar", $this->_propDict)) {
            return $this->_propDict["syncCalendar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncCalendar
    * Toggles syncing the calendar. If set to false calendar is turned off on the device.
    *
    * @param bool $val The syncCalendar
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setSyncCalendar($val)
    {
        $this->_propDict["syncCalendar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncContacts
    * Toggles syncing contacts. If set to false contacts are turned off on the device.
    *
    * @return bool The syncContacts
    */
    public function getSyncContacts()
    {
        if (array_key_exists("syncContacts", $this->_propDict)) {
            return $this->_propDict["syncContacts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncContacts
    * Toggles syncing contacts. If set to false contacts are turned off on the device.
    *
    * @param bool $val The syncContacts
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setSyncContacts($val)
    {
        $this->_propDict["syncContacts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncNotes
    * Toggles syncing notes. If set to false notes are turned off on the device.
    *
    * @return bool The syncNotes
    */
    public function getSyncNotes()
    {
        if (array_key_exists("syncNotes", $this->_propDict)) {
            return $this->_propDict["syncNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncNotes
    * Toggles syncing notes. If set to false notes are turned off on the device.
    *
    * @param bool $val The syncNotes
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setSyncNotes($val)
    {
        $this->_propDict["syncNotes"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncTasks
    * Toggles syncing tasks. If set to false tasks are turned off on the device.
    *
    * @return bool The syncTasks
    */
    public function getSyncTasks()
    {
        if (array_key_exists("syncTasks", $this->_propDict)) {
            return $this->_propDict["syncTasks"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncTasks
    * Toggles syncing tasks. If set to false tasks are turned off on the device.
    *
    * @param bool $val The syncTasks
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setSyncTasks($val)
    {
        $this->_propDict["syncTasks"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userDomainNameSource
    * UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
    *
    * @return DomainNameSource The userDomainNameSource
    */
    public function getUserDomainNameSource()
    {
        if (array_key_exists("userDomainNameSource", $this->_propDict)) {
            if (is_a($this->_propDict["userDomainNameSource"], "\Beta\Microsoft\Graph\Model\DomainNameSource")) {
                return $this->_propDict["userDomainNameSource"];
            } else {
                $this->_propDict["userDomainNameSource"] = new DomainNameSource($this->_propDict["userDomainNameSource"]);
                return $this->_propDict["userDomainNameSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userDomainNameSource
    * UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
    *
    * @param DomainNameSource $val The userDomainNameSource
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setUserDomainNameSource($val)
    {
        $this->_propDict["userDomainNameSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the usernameSource
    * Username attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: username, userPrincipalName, samAccountName, primarySmtpAddress.
    *
    * @return AndroidUsernameSource The usernameSource
    */
    public function getUsernameSource()
    {
        if (array_key_exists("usernameSource", $this->_propDict)) {
            if (is_a($this->_propDict["usernameSource"], "\Beta\Microsoft\Graph\Model\AndroidUsernameSource")) {
                return $this->_propDict["usernameSource"];
            } else {
                $this->_propDict["usernameSource"] = new AndroidUsernameSource($this->_propDict["usernameSource"]);
                return $this->_propDict["usernameSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the usernameSource
    * Username attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: username, userPrincipalName, samAccountName, primarySmtpAddress.
    *
    * @param AndroidUsernameSource $val The usernameSource
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setUsernameSource($val)
    {
        $this->_propDict["usernameSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate.
    *
    * @return AndroidCertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "\Beta\Microsoft\Graph\Model\AndroidCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new AndroidCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate.
    *
    * @param AndroidCertificateProfileBase $val The identityCertificate
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the smimeSigningCertificate
    * S/MIME signing certificate.
    *
    * @return AndroidCertificateProfileBase The smimeSigningCertificate
    */
    public function getSmimeSigningCertificate()
    {
        if (array_key_exists("smimeSigningCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["smimeSigningCertificate"], "\Beta\Microsoft\Graph\Model\AndroidCertificateProfileBase")) {
                return $this->_propDict["smimeSigningCertificate"];
            } else {
                $this->_propDict["smimeSigningCertificate"] = new AndroidCertificateProfileBase($this->_propDict["smimeSigningCertificate"]);
                return $this->_propDict["smimeSigningCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the smimeSigningCertificate
    * S/MIME signing certificate.
    *
    * @param AndroidCertificateProfileBase $val The smimeSigningCertificate
    *
    * @return AndroidEasEmailProfileConfiguration
    */
    public function setSmimeSigningCertificate($val)
    {
        $this->_propDict["smimeSigningCertificate"] = $val;
        return $this;
    }
    
}
