<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailboxSettings File
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
* MailboxSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailboxSettings extends Entity
{
    /**
    * Gets the archiveFolder
    * Folder ID of an archive folder for the user. Read only.
    *
    * @return string The archiveFolder
    */
    public function getArchiveFolder()
    {
        if (array_key_exists("archiveFolder", $this->_propDict)) {
            return $this->_propDict["archiveFolder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the archiveFolder
    * Folder ID of an archive folder for the user. Read only.
    *
    * @param string $val The value of the archiveFolder
    *
    * @return MailboxSettings
    */
    public function setArchiveFolder($val)
    {
        $this->_propDict["archiveFolder"] = $val;
        return $this;
    }

    /**
    * Gets the automaticRepliesSetting
    * Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
    *
    * @return AutomaticRepliesSetting The automaticRepliesSetting
    */
    public function getAutomaticRepliesSetting()
    {
        if (array_key_exists("automaticRepliesSetting", $this->_propDict)) {
            if (is_a($this->_propDict["automaticRepliesSetting"], "\Microsoft\Graph\Model\AutomaticRepliesSetting")) {
                return $this->_propDict["automaticRepliesSetting"];
            } else {
                $this->_propDict["automaticRepliesSetting"] = new AutomaticRepliesSetting($this->_propDict["automaticRepliesSetting"]);
                return $this->_propDict["automaticRepliesSetting"];
            }
        }
        return null;
    }

    /**
    * Sets the automaticRepliesSetting
    * Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
    *
    * @param AutomaticRepliesSetting $val The value to assign to the automaticRepliesSetting
    *
    * @return MailboxSettings The MailboxSettings
    */
    public function setAutomaticRepliesSetting($val)
    {
        $this->_propDict["automaticRepliesSetting"] = $val;
         return $this;
    }
    /**
    * Gets the dateFormat
    * The date format for the user's mailbox.
    *
    * @return string The dateFormat
    */
    public function getDateFormat()
    {
        if (array_key_exists("dateFormat", $this->_propDict)) {
            return $this->_propDict["dateFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dateFormat
    * The date format for the user's mailbox.
    *
    * @param string $val The value of the dateFormat
    *
    * @return MailboxSettings
    */
    public function setDateFormat($val)
    {
        $this->_propDict["dateFormat"] = $val;
        return $this;
    }

    /**
    * Gets the delegateMeetingMessageDeliveryOptions
    * If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly. The default is sendToDelegateOnly.
    *
    * @return DelegateMeetingMessageDeliveryOptions The delegateMeetingMessageDeliveryOptions
    */
    public function getDelegateMeetingMessageDeliveryOptions()
    {
        if (array_key_exists("delegateMeetingMessageDeliveryOptions", $this->_propDict)) {
            if (is_a($this->_propDict["delegateMeetingMessageDeliveryOptions"], "\Microsoft\Graph\Model\DelegateMeetingMessageDeliveryOptions")) {
                return $this->_propDict["delegateMeetingMessageDeliveryOptions"];
            } else {
                $this->_propDict["delegateMeetingMessageDeliveryOptions"] = new DelegateMeetingMessageDeliveryOptions($this->_propDict["delegateMeetingMessageDeliveryOptions"]);
                return $this->_propDict["delegateMeetingMessageDeliveryOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the delegateMeetingMessageDeliveryOptions
    * If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly. The default is sendToDelegateOnly.
    *
    * @param DelegateMeetingMessageDeliveryOptions $val The value to assign to the delegateMeetingMessageDeliveryOptions
    *
    * @return MailboxSettings The MailboxSettings
    */
    public function setDelegateMeetingMessageDeliveryOptions($val)
    {
        $this->_propDict["delegateMeetingMessageDeliveryOptions"] = $val;
         return $this;
    }

    /**
    * Gets the language
    * The locale information for the user, including the preferred language and country/region.
    *
    * @return LocaleInfo The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            if (is_a($this->_propDict["language"], "\Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["language"];
            } else {
                $this->_propDict["language"] = new LocaleInfo($this->_propDict["language"]);
                return $this->_propDict["language"];
            }
        }
        return null;
    }

    /**
    * Sets the language
    * The locale information for the user, including the preferred language and country/region.
    *
    * @param LocaleInfo $val The value to assign to the language
    *
    * @return MailboxSettings The MailboxSettings
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
         return $this;
    }
    /**
    * Gets the timeFormat
    * The time format for the user's mailbox.
    *
    * @return string The timeFormat
    */
    public function getTimeFormat()
    {
        if (array_key_exists("timeFormat", $this->_propDict)) {
            return $this->_propDict["timeFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeFormat
    * The time format for the user's mailbox.
    *
    * @param string $val The value of the timeFormat
    *
    * @return MailboxSettings
    */
    public function setTimeFormat($val)
    {
        $this->_propDict["timeFormat"] = $val;
        return $this;
    }
    /**
    * Gets the timeZone
    * The default time zone for the user's mailbox.
    *
    * @return string The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    * The default time zone for the user's mailbox.
    *
    * @param string $val The value of the timeZone
    *
    * @return MailboxSettings
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }

    /**
    * Gets the workingHours
    * The days of the week and hours in a specific time zone that the user works.
    *
    * @return WorkingHours The workingHours
    */
    public function getWorkingHours()
    {
        if (array_key_exists("workingHours", $this->_propDict)) {
            if (is_a($this->_propDict["workingHours"], "\Microsoft\Graph\Model\WorkingHours")) {
                return $this->_propDict["workingHours"];
            } else {
                $this->_propDict["workingHours"] = new WorkingHours($this->_propDict["workingHours"]);
                return $this->_propDict["workingHours"];
            }
        }
        return null;
    }

    /**
    * Sets the workingHours
    * The days of the week and hours in a specific time zone that the user works.
    *
    * @param WorkingHours $val The value to assign to the workingHours
    *
    * @return MailboxSettings The MailboxSettings
    */
    public function setWorkingHours($val)
    {
        $this->_propDict["workingHours"] = $val;
         return $this;
    }
}
