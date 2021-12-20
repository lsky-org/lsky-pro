<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSPrivacyAccessControlItem File
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
* MacOSPrivacyAccessControlItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSPrivacyAccessControlItem extends Entity
{

    /**
    * Gets the accessibility
    * Allow the app or process to control the Mac via the Accessibility subsystem. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The accessibility
    */
    public function getAccessibility()
    {
        if (array_key_exists("accessibility", $this->_propDict)) {
            if (is_a($this->_propDict["accessibility"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["accessibility"];
            } else {
                $this->_propDict["accessibility"] = new Enablement($this->_propDict["accessibility"]);
                return $this->_propDict["accessibility"];
            }
        }
        return null;
    }

    /**
    * Sets the accessibility
    * Allow the app or process to control the Mac via the Accessibility subsystem. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the accessibility
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setAccessibility($val)
    {
        $this->_propDict["accessibility"] = $val;
         return $this;
    }

    /**
    * Gets the addressBook
    * Allow or block access to contact information managed by Contacts. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The addressBook
    */
    public function getAddressBook()
    {
        if (array_key_exists("addressBook", $this->_propDict)) {
            if (is_a($this->_propDict["addressBook"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["addressBook"];
            } else {
                $this->_propDict["addressBook"] = new Enablement($this->_propDict["addressBook"]);
                return $this->_propDict["addressBook"];
            }
        }
        return null;
    }

    /**
    * Sets the addressBook
    * Allow or block access to contact information managed by Contacts. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the addressBook
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setAddressBook($val)
    {
        $this->_propDict["addressBook"] = $val;
         return $this;
    }

    /**
    * Gets the appleEventsAllowedReceivers
    * Allow or deny the app or process to send a restricted Apple event to another app or process. You will need to know the identifier, identifier type, and code requirement of the receiving app or process. This collection can contain a maximum of 500 elements.
    *
    * @return MacOSAppleEventReceiver The appleEventsAllowedReceivers
    */
    public function getAppleEventsAllowedReceivers()
    {
        if (array_key_exists("appleEventsAllowedReceivers", $this->_propDict)) {
            if (is_a($this->_propDict["appleEventsAllowedReceivers"], "\Beta\Microsoft\Graph\Model\MacOSAppleEventReceiver")) {
                return $this->_propDict["appleEventsAllowedReceivers"];
            } else {
                $this->_propDict["appleEventsAllowedReceivers"] = new MacOSAppleEventReceiver($this->_propDict["appleEventsAllowedReceivers"]);
                return $this->_propDict["appleEventsAllowedReceivers"];
            }
        }
        return null;
    }

    /**
    * Sets the appleEventsAllowedReceivers
    * Allow or deny the app or process to send a restricted Apple event to another app or process. You will need to know the identifier, identifier type, and code requirement of the receiving app or process. This collection can contain a maximum of 500 elements.
    *
    * @param MacOSAppleEventReceiver $val The value to assign to the appleEventsAllowedReceivers
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setAppleEventsAllowedReceivers($val)
    {
        $this->_propDict["appleEventsAllowedReceivers"] = $val;
         return $this;
    }
    /**
    * Gets the blockCamera
    * Block access to camera app.
    *
    * @return bool The blockCamera
    */
    public function getBlockCamera()
    {
        if (array_key_exists("blockCamera", $this->_propDict)) {
            return $this->_propDict["blockCamera"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockCamera
    * Block access to camera app.
    *
    * @param bool $val The value of the blockCamera
    *
    * @return MacOSPrivacyAccessControlItem
    */
    public function setBlockCamera($val)
    {
        $this->_propDict["blockCamera"] = $val;
        return $this;
    }
    /**
    * Gets the blockListenEvent
    * Block the app or process from listening to events from input devices such as mouse, keyboard, and trackpad.Requires macOS 10.15 or later.
    *
    * @return bool The blockListenEvent
    */
    public function getBlockListenEvent()
    {
        if (array_key_exists("blockListenEvent", $this->_propDict)) {
            return $this->_propDict["blockListenEvent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockListenEvent
    * Block the app or process from listening to events from input devices such as mouse, keyboard, and trackpad.Requires macOS 10.15 or later.
    *
    * @param bool $val The value of the blockListenEvent
    *
    * @return MacOSPrivacyAccessControlItem
    */
    public function setBlockListenEvent($val)
    {
        $this->_propDict["blockListenEvent"] = $val;
        return $this;
    }
    /**
    * Gets the blockMicrophone
    * Block access to microphone.
    *
    * @return bool The blockMicrophone
    */
    public function getBlockMicrophone()
    {
        if (array_key_exists("blockMicrophone", $this->_propDict)) {
            return $this->_propDict["blockMicrophone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockMicrophone
    * Block access to microphone.
    *
    * @param bool $val The value of the blockMicrophone
    *
    * @return MacOSPrivacyAccessControlItem
    */
    public function setBlockMicrophone($val)
    {
        $this->_propDict["blockMicrophone"] = $val;
        return $this;
    }
    /**
    * Gets the blockScreenCapture
    * Block app from capturing contents of system display. Requires macOS 10.15 or later.
    *
    * @return bool The blockScreenCapture
    */
    public function getBlockScreenCapture()
    {
        if (array_key_exists("blockScreenCapture", $this->_propDict)) {
            return $this->_propDict["blockScreenCapture"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockScreenCapture
    * Block app from capturing contents of system display. Requires macOS 10.15 or later.
    *
    * @param bool $val The value of the blockScreenCapture
    *
    * @return MacOSPrivacyAccessControlItem
    */
    public function setBlockScreenCapture($val)
    {
        $this->_propDict["blockScreenCapture"] = $val;
        return $this;
    }

    /**
    * Gets the calendar
    * Allow or block access to event information managed by Calendar. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            if (is_a($this->_propDict["calendar"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["calendar"];
            } else {
                $this->_propDict["calendar"] = new Enablement($this->_propDict["calendar"]);
                return $this->_propDict["calendar"];
            }
        }
        return null;
    }

    /**
    * Sets the calendar
    * Allow or block access to event information managed by Calendar. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the calendar
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setCalendar($val)
    {
        $this->_propDict["calendar"] = $val;
         return $this;
    }
    /**
    * Gets the codeRequirement
    * Enter the code requirement, which can be obtained with the command 'codesign –display -r –' in the Terminal app. Include everything after '=&amp;gt;'.
    *
    * @return string The codeRequirement
    */
    public function getCodeRequirement()
    {
        if (array_key_exists("codeRequirement", $this->_propDict)) {
            return $this->_propDict["codeRequirement"];
        } else {
            return null;
        }
    }

    /**
    * Sets the codeRequirement
    * Enter the code requirement, which can be obtained with the command 'codesign –display -r –' in the Terminal app. Include everything after '=&amp;gt;'.
    *
    * @param string $val The value of the codeRequirement
    *
    * @return MacOSPrivacyAccessControlItem
    */
    public function setCodeRequirement($val)
    {
        $this->_propDict["codeRequirement"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name of the app, process, or executable.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of the app, process, or executable.
    *
    * @param string $val The value of the displayName
    *
    * @return MacOSPrivacyAccessControlItem
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the fileProviderPresence
    * Allow the app or process to access files managed by another app’s file provider extension. Requires macOS 10.15 or later. . Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The fileProviderPresence
    */
    public function getFileProviderPresence()
    {
        if (array_key_exists("fileProviderPresence", $this->_propDict)) {
            if (is_a($this->_propDict["fileProviderPresence"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["fileProviderPresence"];
            } else {
                $this->_propDict["fileProviderPresence"] = new Enablement($this->_propDict["fileProviderPresence"]);
                return $this->_propDict["fileProviderPresence"];
            }
        }
        return null;
    }

    /**
    * Sets the fileProviderPresence
    * Allow the app or process to access files managed by another app’s file provider extension. Requires macOS 10.15 or later. . Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the fileProviderPresence
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setFileProviderPresence($val)
    {
        $this->_propDict["fileProviderPresence"] = $val;
         return $this;
    }
    /**
    * Gets the identifier
    * The bundle ID or path of the app, process, or executable.
    *
    * @return string The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            return $this->_propDict["identifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identifier
    * The bundle ID or path of the app, process, or executable.
    *
    * @param string $val The value of the identifier
    *
    * @return MacOSPrivacyAccessControlItem
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
        return $this;
    }

    /**
    * Gets the identifierType
    * A bundle ID is used to identify an app. A path is used to identify a process or executable. Possible values are: bundleID, path.
    *
    * @return MacOSProcessIdentifierType The identifierType
    */
    public function getIdentifierType()
    {
        if (array_key_exists("identifierType", $this->_propDict)) {
            if (is_a($this->_propDict["identifierType"], "\Beta\Microsoft\Graph\Model\MacOSProcessIdentifierType")) {
                return $this->_propDict["identifierType"];
            } else {
                $this->_propDict["identifierType"] = new MacOSProcessIdentifierType($this->_propDict["identifierType"]);
                return $this->_propDict["identifierType"];
            }
        }
        return null;
    }

    /**
    * Sets the identifierType
    * A bundle ID is used to identify an app. A path is used to identify a process or executable. Possible values are: bundleID, path.
    *
    * @param MacOSProcessIdentifierType $val The value to assign to the identifierType
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setIdentifierType($val)
    {
        $this->_propDict["identifierType"] = $val;
         return $this;
    }

    /**
    * Gets the mediaLibrary
    * Allow or block access to music and the media library. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The mediaLibrary
    */
    public function getMediaLibrary()
    {
        if (array_key_exists("mediaLibrary", $this->_propDict)) {
            if (is_a($this->_propDict["mediaLibrary"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["mediaLibrary"];
            } else {
                $this->_propDict["mediaLibrary"] = new Enablement($this->_propDict["mediaLibrary"]);
                return $this->_propDict["mediaLibrary"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaLibrary
    * Allow or block access to music and the media library. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the mediaLibrary
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setMediaLibrary($val)
    {
        $this->_propDict["mediaLibrary"] = $val;
         return $this;
    }

    /**
    * Gets the photos
    * Allow or block access to images managed by Photos. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The photos
    */
    public function getPhotos()
    {
        if (array_key_exists("photos", $this->_propDict)) {
            if (is_a($this->_propDict["photos"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["photos"];
            } else {
                $this->_propDict["photos"] = new Enablement($this->_propDict["photos"]);
                return $this->_propDict["photos"];
            }
        }
        return null;
    }

    /**
    * Sets the photos
    * Allow or block access to images managed by Photos. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the photos
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setPhotos($val)
    {
        $this->_propDict["photos"] = $val;
         return $this;
    }

    /**
    * Gets the postEvent
    * Control access to CoreGraphics APIs, which are used to send CGEvents to the system event stream. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The postEvent
    */
    public function getPostEvent()
    {
        if (array_key_exists("postEvent", $this->_propDict)) {
            if (is_a($this->_propDict["postEvent"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["postEvent"];
            } else {
                $this->_propDict["postEvent"] = new Enablement($this->_propDict["postEvent"]);
                return $this->_propDict["postEvent"];
            }
        }
        return null;
    }

    /**
    * Sets the postEvent
    * Control access to CoreGraphics APIs, which are used to send CGEvents to the system event stream. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the postEvent
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setPostEvent($val)
    {
        $this->_propDict["postEvent"] = $val;
         return $this;
    }

    /**
    * Gets the reminders
    * Allow or block access to information managed by Reminders. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The reminders
    */
    public function getReminders()
    {
        if (array_key_exists("reminders", $this->_propDict)) {
            if (is_a($this->_propDict["reminders"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["reminders"];
            } else {
                $this->_propDict["reminders"] = new Enablement($this->_propDict["reminders"]);
                return $this->_propDict["reminders"];
            }
        }
        return null;
    }

    /**
    * Sets the reminders
    * Allow or block access to information managed by Reminders. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the reminders
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setReminders($val)
    {
        $this->_propDict["reminders"] = $val;
         return $this;
    }

    /**
    * Gets the speechRecognition
    * Allow or block access to system speech recognition facility. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The speechRecognition
    */
    public function getSpeechRecognition()
    {
        if (array_key_exists("speechRecognition", $this->_propDict)) {
            if (is_a($this->_propDict["speechRecognition"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["speechRecognition"];
            } else {
                $this->_propDict["speechRecognition"] = new Enablement($this->_propDict["speechRecognition"]);
                return $this->_propDict["speechRecognition"];
            }
        }
        return null;
    }

    /**
    * Sets the speechRecognition
    * Allow or block access to system speech recognition facility. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the speechRecognition
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setSpeechRecognition($val)
    {
        $this->_propDict["speechRecognition"] = $val;
         return $this;
    }
    /**
    * Gets the staticCodeValidation
    * Statically validates the code requirement. Use this setting if the process invalidates its dynamic code signature.
    *
    * @return bool The staticCodeValidation
    */
    public function getStaticCodeValidation()
    {
        if (array_key_exists("staticCodeValidation", $this->_propDict)) {
            return $this->_propDict["staticCodeValidation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the staticCodeValidation
    * Statically validates the code requirement. Use this setting if the process invalidates its dynamic code signature.
    *
    * @param bool $val The value of the staticCodeValidation
    *
    * @return MacOSPrivacyAccessControlItem
    */
    public function setStaticCodeValidation($val)
    {
        $this->_propDict["staticCodeValidation"] = $val;
        return $this;
    }

    /**
    * Gets the systemPolicyAllFiles
    * Control access to all protected files on a device. Files might be in locations such as emails, messages, apps, and administrative settings. Apply this setting with caution. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The systemPolicyAllFiles
    */
    public function getSystemPolicyAllFiles()
    {
        if (array_key_exists("systemPolicyAllFiles", $this->_propDict)) {
            if (is_a($this->_propDict["systemPolicyAllFiles"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["systemPolicyAllFiles"];
            } else {
                $this->_propDict["systemPolicyAllFiles"] = new Enablement($this->_propDict["systemPolicyAllFiles"]);
                return $this->_propDict["systemPolicyAllFiles"];
            }
        }
        return null;
    }

    /**
    * Sets the systemPolicyAllFiles
    * Control access to all protected files on a device. Files might be in locations such as emails, messages, apps, and administrative settings. Apply this setting with caution. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the systemPolicyAllFiles
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setSystemPolicyAllFiles($val)
    {
        $this->_propDict["systemPolicyAllFiles"] = $val;
         return $this;
    }

    /**
    * Gets the systemPolicyDesktopFolder
    * Allow or block access to Desktop folder. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The systemPolicyDesktopFolder
    */
    public function getSystemPolicyDesktopFolder()
    {
        if (array_key_exists("systemPolicyDesktopFolder", $this->_propDict)) {
            if (is_a($this->_propDict["systemPolicyDesktopFolder"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["systemPolicyDesktopFolder"];
            } else {
                $this->_propDict["systemPolicyDesktopFolder"] = new Enablement($this->_propDict["systemPolicyDesktopFolder"]);
                return $this->_propDict["systemPolicyDesktopFolder"];
            }
        }
        return null;
    }

    /**
    * Sets the systemPolicyDesktopFolder
    * Allow or block access to Desktop folder. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the systemPolicyDesktopFolder
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setSystemPolicyDesktopFolder($val)
    {
        $this->_propDict["systemPolicyDesktopFolder"] = $val;
         return $this;
    }

    /**
    * Gets the systemPolicyDocumentsFolder
    * Allow or block access to Documents folder. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The systemPolicyDocumentsFolder
    */
    public function getSystemPolicyDocumentsFolder()
    {
        if (array_key_exists("systemPolicyDocumentsFolder", $this->_propDict)) {
            if (is_a($this->_propDict["systemPolicyDocumentsFolder"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["systemPolicyDocumentsFolder"];
            } else {
                $this->_propDict["systemPolicyDocumentsFolder"] = new Enablement($this->_propDict["systemPolicyDocumentsFolder"]);
                return $this->_propDict["systemPolicyDocumentsFolder"];
            }
        }
        return null;
    }

    /**
    * Sets the systemPolicyDocumentsFolder
    * Allow or block access to Documents folder. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the systemPolicyDocumentsFolder
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setSystemPolicyDocumentsFolder($val)
    {
        $this->_propDict["systemPolicyDocumentsFolder"] = $val;
         return $this;
    }

    /**
    * Gets the systemPolicyDownloadsFolder
    * Allow or block access to Downloads folder. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The systemPolicyDownloadsFolder
    */
    public function getSystemPolicyDownloadsFolder()
    {
        if (array_key_exists("systemPolicyDownloadsFolder", $this->_propDict)) {
            if (is_a($this->_propDict["systemPolicyDownloadsFolder"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["systemPolicyDownloadsFolder"];
            } else {
                $this->_propDict["systemPolicyDownloadsFolder"] = new Enablement($this->_propDict["systemPolicyDownloadsFolder"]);
                return $this->_propDict["systemPolicyDownloadsFolder"];
            }
        }
        return null;
    }

    /**
    * Sets the systemPolicyDownloadsFolder
    * Allow or block access to Downloads folder. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the systemPolicyDownloadsFolder
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setSystemPolicyDownloadsFolder($val)
    {
        $this->_propDict["systemPolicyDownloadsFolder"] = $val;
         return $this;
    }

    /**
    * Gets the systemPolicyNetworkVolumes
    * Allow or block access to network volumes. Requires macOS 10.15 or later. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The systemPolicyNetworkVolumes
    */
    public function getSystemPolicyNetworkVolumes()
    {
        if (array_key_exists("systemPolicyNetworkVolumes", $this->_propDict)) {
            if (is_a($this->_propDict["systemPolicyNetworkVolumes"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["systemPolicyNetworkVolumes"];
            } else {
                $this->_propDict["systemPolicyNetworkVolumes"] = new Enablement($this->_propDict["systemPolicyNetworkVolumes"]);
                return $this->_propDict["systemPolicyNetworkVolumes"];
            }
        }
        return null;
    }

    /**
    * Sets the systemPolicyNetworkVolumes
    * Allow or block access to network volumes. Requires macOS 10.15 or later. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the systemPolicyNetworkVolumes
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setSystemPolicyNetworkVolumes($val)
    {
        $this->_propDict["systemPolicyNetworkVolumes"] = $val;
         return $this;
    }

    /**
    * Gets the systemPolicyRemovableVolumes
    * Control access to removable  volumes on the device, such as an external hard drive. Requires macOS 10.15 or later. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The systemPolicyRemovableVolumes
    */
    public function getSystemPolicyRemovableVolumes()
    {
        if (array_key_exists("systemPolicyRemovableVolumes", $this->_propDict)) {
            if (is_a($this->_propDict["systemPolicyRemovableVolumes"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["systemPolicyRemovableVolumes"];
            } else {
                $this->_propDict["systemPolicyRemovableVolumes"] = new Enablement($this->_propDict["systemPolicyRemovableVolumes"]);
                return $this->_propDict["systemPolicyRemovableVolumes"];
            }
        }
        return null;
    }

    /**
    * Sets the systemPolicyRemovableVolumes
    * Control access to removable  volumes on the device, such as an external hard drive. Requires macOS 10.15 or later. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the systemPolicyRemovableVolumes
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setSystemPolicyRemovableVolumes($val)
    {
        $this->_propDict["systemPolicyRemovableVolumes"] = $val;
         return $this;
    }

    /**
    * Gets the systemPolicySystemAdminFiles
    * Allow app or process to access files used in system administration. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The systemPolicySystemAdminFiles
    */
    public function getSystemPolicySystemAdminFiles()
    {
        if (array_key_exists("systemPolicySystemAdminFiles", $this->_propDict)) {
            if (is_a($this->_propDict["systemPolicySystemAdminFiles"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["systemPolicySystemAdminFiles"];
            } else {
                $this->_propDict["systemPolicySystemAdminFiles"] = new Enablement($this->_propDict["systemPolicySystemAdminFiles"]);
                return $this->_propDict["systemPolicySystemAdminFiles"];
            }
        }
        return null;
    }

    /**
    * Sets the systemPolicySystemAdminFiles
    * Allow app or process to access files used in system administration. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The value to assign to the systemPolicySystemAdminFiles
    *
    * @return MacOSPrivacyAccessControlItem The MacOSPrivacyAccessControlItem
    */
    public function setSystemPolicySystemAdminFiles($val)
    {
        $this->_propDict["systemPolicySystemAdminFiles"] = $val;
         return $this;
    }
}
