<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSGeneralDeviceConfiguration File
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
* MacOSGeneralDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSGeneralDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the airDropBlocked
    * Indicates whether or not to allow AirDrop.
    *
    * @return bool The airDropBlocked
    */
    public function getAirDropBlocked()
    {
        if (array_key_exists("airDropBlocked", $this->_propDict)) {
            return $this->_propDict["airDropBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airDropBlocked
    * Indicates whether or not to allow AirDrop.
    *
    * @param bool $val The airDropBlocked
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setAirDropBlocked($val)
    {
        $this->_propDict["airDropBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airPrintBlocked
    * Indicates whether or not AirPrint is blocked (macOS 10.12 and later).
    *
    * @return bool The airPrintBlocked
    */
    public function getAirPrintBlocked()
    {
        if (array_key_exists("airPrintBlocked", $this->_propDict)) {
            return $this->_propDict["airPrintBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airPrintBlocked
    * Indicates whether or not AirPrint is blocked (macOS 10.12 and later).
    *
    * @param bool $val The airPrintBlocked
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setAirPrintBlocked($val)
    {
        $this->_propDict["airPrintBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airPrintBlockiBeaconDiscovery
    * Indicates whether or not iBeacon discovery of AirPrint printers is blocked. This prevents spurious AirPrint Bluetooth beacons from phishing for network traffic (macOS 10.3 and later).
    *
    * @return bool The airPrintBlockiBeaconDiscovery
    */
    public function getAirPrintBlockiBeaconDiscovery()
    {
        if (array_key_exists("airPrintBlockiBeaconDiscovery", $this->_propDict)) {
            return $this->_propDict["airPrintBlockiBeaconDiscovery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airPrintBlockiBeaconDiscovery
    * Indicates whether or not iBeacon discovery of AirPrint printers is blocked. This prevents spurious AirPrint Bluetooth beacons from phishing for network traffic (macOS 10.3 and later).
    *
    * @param bool $val The airPrintBlockiBeaconDiscovery
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setAirPrintBlockiBeaconDiscovery($val)
    {
        $this->_propDict["airPrintBlockiBeaconDiscovery"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the airPrintForceTrustedTLS
    * Indicates if trusted certificates are required for TLS printing communication (macOS 10.13 and later).
    *
    * @return bool The airPrintForceTrustedTLS
    */
    public function getAirPrintForceTrustedTLS()
    {
        if (array_key_exists("airPrintForceTrustedTLS", $this->_propDict)) {
            return $this->_propDict["airPrintForceTrustedTLS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the airPrintForceTrustedTLS
    * Indicates if trusted certificates are required for TLS printing communication (macOS 10.13 and later).
    *
    * @param bool $val The airPrintForceTrustedTLS
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setAirPrintForceTrustedTLS($val)
    {
        $this->_propDict["airPrintForceTrustedTLS"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appleWatchBlockAutoUnlock
    * Indicates whether or to block users from unlocking their Mac with Apple Watch.
    *
    * @return bool The appleWatchBlockAutoUnlock
    */
    public function getAppleWatchBlockAutoUnlock()
    {
        if (array_key_exists("appleWatchBlockAutoUnlock", $this->_propDict)) {
            return $this->_propDict["appleWatchBlockAutoUnlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleWatchBlockAutoUnlock
    * Indicates whether or to block users from unlocking their Mac with Apple Watch.
    *
    * @param bool $val The appleWatchBlockAutoUnlock
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setAppleWatchBlockAutoUnlock($val)
    {
        $this->_propDict["appleWatchBlockAutoUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the cameraBlocked
    * Indicates whether or not to block the user from accessing the camera of the device.
    *
    * @return bool The cameraBlocked
    */
    public function getCameraBlocked()
    {
        if (array_key_exists("cameraBlocked", $this->_propDict)) {
            return $this->_propDict["cameraBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cameraBlocked
    * Indicates whether or not to block the user from accessing the camera of the device.
    *
    * @param bool $val The cameraBlocked
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setCameraBlocked($val)
    {
        $this->_propDict["cameraBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the classroomAppBlockRemoteScreenObservation
    * Indicates whether or not to allow remote screen observation by Classroom app. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @return bool The classroomAppBlockRemoteScreenObservation
    */
    public function getClassroomAppBlockRemoteScreenObservation()
    {
        if (array_key_exists("classroomAppBlockRemoteScreenObservation", $this->_propDict)) {
            return $this->_propDict["classroomAppBlockRemoteScreenObservation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomAppBlockRemoteScreenObservation
    * Indicates whether or not to allow remote screen observation by Classroom app. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @param bool $val The classroomAppBlockRemoteScreenObservation
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setClassroomAppBlockRemoteScreenObservation($val)
    {
        $this->_propDict["classroomAppBlockRemoteScreenObservation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the classroomAppForceUnpromptedScreenObservation
    * Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @return bool The classroomAppForceUnpromptedScreenObservation
    */
    public function getClassroomAppForceUnpromptedScreenObservation()
    {
        if (array_key_exists("classroomAppForceUnpromptedScreenObservation", $this->_propDict)) {
            return $this->_propDict["classroomAppForceUnpromptedScreenObservation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomAppForceUnpromptedScreenObservation
    * Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @param bool $val The classroomAppForceUnpromptedScreenObservation
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setClassroomAppForceUnpromptedScreenObservation($val)
    {
        $this->_propDict["classroomAppForceUnpromptedScreenObservation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the classroomForceAutomaticallyJoinClasses
    * Indicates whether or not to automatically give permission to the teacher's requests, without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @return bool The classroomForceAutomaticallyJoinClasses
    */
    public function getClassroomForceAutomaticallyJoinClasses()
    {
        if (array_key_exists("classroomForceAutomaticallyJoinClasses", $this->_propDict)) {
            return $this->_propDict["classroomForceAutomaticallyJoinClasses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomForceAutomaticallyJoinClasses
    * Indicates whether or not to automatically give permission to the teacher's requests, without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @param bool $val The classroomForceAutomaticallyJoinClasses
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setClassroomForceAutomaticallyJoinClasses($val)
    {
        $this->_propDict["classroomForceAutomaticallyJoinClasses"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the classroomForceRequestPermissionToLeaveClasses
    * Indicates whether a student enrolled in an unmanaged course via Classroom will be required to request permission from the teacher when attempting to leave the course. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @return bool The classroomForceRequestPermissionToLeaveClasses
    */
    public function getClassroomForceRequestPermissionToLeaveClasses()
    {
        if (array_key_exists("classroomForceRequestPermissionToLeaveClasses", $this->_propDict)) {
            return $this->_propDict["classroomForceRequestPermissionToLeaveClasses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomForceRequestPermissionToLeaveClasses
    * Indicates whether a student enrolled in an unmanaged course via Classroom will be required to request permission from the teacher when attempting to leave the course. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @param bool $val The classroomForceRequestPermissionToLeaveClasses
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setClassroomForceRequestPermissionToLeaveClasses($val)
    {
        $this->_propDict["classroomForceRequestPermissionToLeaveClasses"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the classroomForceUnpromptedAppAndDeviceLock
    * Indicates whether or not to allow the teacher to lock apps or the device without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @return bool The classroomForceUnpromptedAppAndDeviceLock
    */
    public function getClassroomForceUnpromptedAppAndDeviceLock()
    {
        if (array_key_exists("classroomForceUnpromptedAppAndDeviceLock", $this->_propDict)) {
            return $this->_propDict["classroomForceUnpromptedAppAndDeviceLock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomForceUnpromptedAppAndDeviceLock
    * Indicates whether or not to allow the teacher to lock apps or the device without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    *
    * @param bool $val The classroomForceUnpromptedAppAndDeviceLock
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setClassroomForceUnpromptedAppAndDeviceLock($val)
    {
        $this->_propDict["classroomForceUnpromptedAppAndDeviceLock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the compliantAppListType
    * List that is in the CompliantAppsList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
    *
    * @return AppListType The compliantAppListType
    */
    public function getCompliantAppListType()
    {
        if (array_key_exists("compliantAppListType", $this->_propDict)) {
            if (is_a($this->_propDict["compliantAppListType"], "\Beta\Microsoft\Graph\Model\AppListType")) {
                return $this->_propDict["compliantAppListType"];
            } else {
                $this->_propDict["compliantAppListType"] = new AppListType($this->_propDict["compliantAppListType"]);
                return $this->_propDict["compliantAppListType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the compliantAppListType
    * List that is in the CompliantAppsList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
    *
    * @param AppListType $val The compliantAppListType
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setCompliantAppListType($val)
    {
        $this->_propDict["compliantAppListType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the compliantAppsList
    * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     *
     * @return array The compliantAppsList
     */
    public function getCompliantAppsList()
    {
        if (array_key_exists("compliantAppsList", $this->_propDict)) {
           return $this->_propDict["compliantAppsList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the compliantAppsList
    * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
    *
    * @param AppListItem $val The compliantAppsList
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setCompliantAppsList($val)
    {
		$this->_propDict["compliantAppsList"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentCachingBlocked
    * Indicates whether or not to allow content caching.
    *
    * @return bool The contentCachingBlocked
    */
    public function getContentCachingBlocked()
    {
        if (array_key_exists("contentCachingBlocked", $this->_propDict)) {
            return $this->_propDict["contentCachingBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingBlocked
    * Indicates whether or not to allow content caching.
    *
    * @param bool $val The contentCachingBlocked
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setContentCachingBlocked($val)
    {
        $this->_propDict["contentCachingBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the definitionLookupBlocked
    * Indicates whether or not to block definition lookup.
    *
    * @return bool The definitionLookupBlocked
    */
    public function getDefinitionLookupBlocked()
    {
        if (array_key_exists("definitionLookupBlocked", $this->_propDict)) {
            return $this->_propDict["definitionLookupBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the definitionLookupBlocked
    * Indicates whether or not to block definition lookup.
    *
    * @param bool $val The definitionLookupBlocked
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setDefinitionLookupBlocked($val)
    {
        $this->_propDict["definitionLookupBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the emailInDomainSuffixes
    * An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
    *
    * @return string The emailInDomainSuffixes
    */
    public function getEmailInDomainSuffixes()
    {
        if (array_key_exists("emailInDomainSuffixes", $this->_propDict)) {
            return $this->_propDict["emailInDomainSuffixes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailInDomainSuffixes
    * An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
    *
    * @param string $val The emailInDomainSuffixes
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setEmailInDomainSuffixes($val)
    {
        $this->_propDict["emailInDomainSuffixes"] = $val;
        return $this;
    }
    
    /**
    * Gets the iCloudBlockActivityContinuation
    * Indicates whether or not to block the user from continuing work that they started on a MacOS device on another iOS or MacOS device (MacOS 10.15 or later).
    *
    * @return bool The iCloudBlockActivityContinuation
    */
    public function getICloudBlockActivityContinuation()
    {
        if (array_key_exists("iCloudBlockActivityContinuation", $this->_propDict)) {
            return $this->_propDict["iCloudBlockActivityContinuation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockActivityContinuation
    * Indicates whether or not to block the user from continuing work that they started on a MacOS device on another iOS or MacOS device (MacOS 10.15 or later).
    *
    * @param bool $val The iCloudBlockActivityContinuation
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockActivityContinuation($val)
    {
        $this->_propDict["iCloudBlockActivityContinuation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockAddressBook
    * Indicates whether or not to block iCloud from syncing contacts.
    *
    * @return bool The iCloudBlockAddressBook
    */
    public function getICloudBlockAddressBook()
    {
        if (array_key_exists("iCloudBlockAddressBook", $this->_propDict)) {
            return $this->_propDict["iCloudBlockAddressBook"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockAddressBook
    * Indicates whether or not to block iCloud from syncing contacts.
    *
    * @param bool $val The iCloudBlockAddressBook
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockAddressBook($val)
    {
        $this->_propDict["iCloudBlockAddressBook"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockBookmarks
    * Indicates whether or not to block iCloud from syncing bookmarks.
    *
    * @return bool The iCloudBlockBookmarks
    */
    public function getICloudBlockBookmarks()
    {
        if (array_key_exists("iCloudBlockBookmarks", $this->_propDict)) {
            return $this->_propDict["iCloudBlockBookmarks"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockBookmarks
    * Indicates whether or not to block iCloud from syncing bookmarks.
    *
    * @param bool $val The iCloudBlockBookmarks
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockBookmarks($val)
    {
        $this->_propDict["iCloudBlockBookmarks"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockCalendar
    * Indicates whether or not to block iCloud from syncing calendars.
    *
    * @return bool The iCloudBlockCalendar
    */
    public function getICloudBlockCalendar()
    {
        if (array_key_exists("iCloudBlockCalendar", $this->_propDict)) {
            return $this->_propDict["iCloudBlockCalendar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockCalendar
    * Indicates whether or not to block iCloud from syncing calendars.
    *
    * @param bool $val The iCloudBlockCalendar
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockCalendar($val)
    {
        $this->_propDict["iCloudBlockCalendar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockDocumentSync
    * Indicates whether or not to block iCloud document sync.
    *
    * @return bool The iCloudBlockDocumentSync
    */
    public function getICloudBlockDocumentSync()
    {
        if (array_key_exists("iCloudBlockDocumentSync", $this->_propDict)) {
            return $this->_propDict["iCloudBlockDocumentSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockDocumentSync
    * Indicates whether or not to block iCloud document sync.
    *
    * @param bool $val The iCloudBlockDocumentSync
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockDocumentSync($val)
    {
        $this->_propDict["iCloudBlockDocumentSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockMail
    * Indicates whether or not to block iCloud from syncing mail.
    *
    * @return bool The iCloudBlockMail
    */
    public function getICloudBlockMail()
    {
        if (array_key_exists("iCloudBlockMail", $this->_propDict)) {
            return $this->_propDict["iCloudBlockMail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockMail
    * Indicates whether or not to block iCloud from syncing mail.
    *
    * @param bool $val The iCloudBlockMail
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockMail($val)
    {
        $this->_propDict["iCloudBlockMail"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockNotes
    * Indicates whether or not to block iCloud from syncing notes.
    *
    * @return bool The iCloudBlockNotes
    */
    public function getICloudBlockNotes()
    {
        if (array_key_exists("iCloudBlockNotes", $this->_propDict)) {
            return $this->_propDict["iCloudBlockNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockNotes
    * Indicates whether or not to block iCloud from syncing notes.
    *
    * @param bool $val The iCloudBlockNotes
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockNotes($val)
    {
        $this->_propDict["iCloudBlockNotes"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockPhotoLibrary
    * Indicates whether or not to block iCloud Photo Library.
    *
    * @return bool The iCloudBlockPhotoLibrary
    */
    public function getICloudBlockPhotoLibrary()
    {
        if (array_key_exists("iCloudBlockPhotoLibrary", $this->_propDict)) {
            return $this->_propDict["iCloudBlockPhotoLibrary"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockPhotoLibrary
    * Indicates whether or not to block iCloud Photo Library.
    *
    * @param bool $val The iCloudBlockPhotoLibrary
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockPhotoLibrary($val)
    {
        $this->_propDict["iCloudBlockPhotoLibrary"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudBlockReminders
    * Indicates whether or not to block iCloud from syncing reminders.
    *
    * @return bool The iCloudBlockReminders
    */
    public function getICloudBlockReminders()
    {
        if (array_key_exists("iCloudBlockReminders", $this->_propDict)) {
            return $this->_propDict["iCloudBlockReminders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudBlockReminders
    * Indicates whether or not to block iCloud from syncing reminders.
    *
    * @param bool $val The iCloudBlockReminders
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setICloudBlockReminders($val)
    {
        $this->_propDict["iCloudBlockReminders"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockFileSharing
    * Indicates whether or not to block files from being transferred using iTunes.
    *
    * @return bool The iTunesBlockFileSharing
    */
    public function getITunesBlockFileSharing()
    {
        if (array_key_exists("iTunesBlockFileSharing", $this->_propDict)) {
            return $this->_propDict["iTunesBlockFileSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockFileSharing
    * Indicates whether or not to block files from being transferred using iTunes.
    *
    * @param bool $val The iTunesBlockFileSharing
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setITunesBlockFileSharing($val)
    {
        $this->_propDict["iTunesBlockFileSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iTunesBlockMusicService
    * Indicates whether or not to block Music service and revert Music app to classic mode.
    *
    * @return bool The iTunesBlockMusicService
    */
    public function getITunesBlockMusicService()
    {
        if (array_key_exists("iTunesBlockMusicService", $this->_propDict)) {
            return $this->_propDict["iTunesBlockMusicService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iTunesBlockMusicService
    * Indicates whether or not to block Music service and revert Music app to classic mode.
    *
    * @param bool $val The iTunesBlockMusicService
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setITunesBlockMusicService($val)
    {
        $this->_propDict["iTunesBlockMusicService"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyboardBlockDictation
    * Indicates whether or not to block the user from using dictation input.
    *
    * @return bool The keyboardBlockDictation
    */
    public function getKeyboardBlockDictation()
    {
        if (array_key_exists("keyboardBlockDictation", $this->_propDict)) {
            return $this->_propDict["keyboardBlockDictation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyboardBlockDictation
    * Indicates whether or not to block the user from using dictation input.
    *
    * @param bool $val The keyboardBlockDictation
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setKeyboardBlockDictation($val)
    {
        $this->_propDict["keyboardBlockDictation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keychainBlockCloudSync
    * Indicates whether or not iCloud keychain synchronization is blocked (macOS 10.12 and later).
    *
    * @return bool The keychainBlockCloudSync
    */
    public function getKeychainBlockCloudSync()
    {
        if (array_key_exists("keychainBlockCloudSync", $this->_propDict)) {
            return $this->_propDict["keychainBlockCloudSync"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keychainBlockCloudSync
    * Indicates whether or not iCloud keychain synchronization is blocked (macOS 10.12 and later).
    *
    * @param bool $val The keychainBlockCloudSync
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setKeychainBlockCloudSync($val)
    {
        $this->_propDict["keychainBlockCloudSync"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockAirDropSharing
    * Indicates whether or not to block sharing passwords with the AirDrop passwords feature.
    *
    * @return bool The passwordBlockAirDropSharing
    */
    public function getPasswordBlockAirDropSharing()
    {
        if (array_key_exists("passwordBlockAirDropSharing", $this->_propDict)) {
            return $this->_propDict["passwordBlockAirDropSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockAirDropSharing
    * Indicates whether or not to block sharing passwords with the AirDrop passwords feature.
    *
    * @param bool $val The passwordBlockAirDropSharing
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordBlockAirDropSharing($val)
    {
        $this->_propDict["passwordBlockAirDropSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockAutoFill
    * Indicates whether or not to block the AutoFill Passwords feature.
    *
    * @return bool The passwordBlockAutoFill
    */
    public function getPasswordBlockAutoFill()
    {
        if (array_key_exists("passwordBlockAutoFill", $this->_propDict)) {
            return $this->_propDict["passwordBlockAutoFill"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockAutoFill
    * Indicates whether or not to block the AutoFill Passwords feature.
    *
    * @param bool $val The passwordBlockAutoFill
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordBlockAutoFill($val)
    {
        $this->_propDict["passwordBlockAutoFill"] = boolval($val);
        return $this;
    }
    
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
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordBlockFingerprintUnlock($val)
    {
        $this->_propDict["passwordBlockFingerprintUnlock"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockModification
    * Indicates whether or not to allow passcode modification.
    *
    * @return bool The passwordBlockModification
    */
    public function getPasswordBlockModification()
    {
        if (array_key_exists("passwordBlockModification", $this->_propDict)) {
            return $this->_propDict["passwordBlockModification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockModification
    * Indicates whether or not to allow passcode modification.
    *
    * @param bool $val The passwordBlockModification
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordBlockModification($val)
    {
        $this->_propDict["passwordBlockModification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockProximityRequests
    * Indicates whether or not to block requesting passwords from nearby devices.
    *
    * @return bool The passwordBlockProximityRequests
    */
    public function getPasswordBlockProximityRequests()
    {
        if (array_key_exists("passwordBlockProximityRequests", $this->_propDict)) {
            return $this->_propDict["passwordBlockProximityRequests"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordBlockProximityRequests
    * Indicates whether or not to block requesting passwords from nearby devices.
    *
    * @param bool $val The passwordBlockProximityRequests
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordBlockProximityRequests($val)
    {
        $this->_propDict["passwordBlockProximityRequests"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordBlockSimple
    * Block simple passwords.
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
    * Block simple passwords.
    *
    * @param bool $val The passwordBlockSimple
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordBlockSimple($val)
    {
        $this->_propDict["passwordBlockSimple"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordExpirationDays
    * Number of days before the password expires.
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
    * Number of days before the password expires.
    *
    * @param int $val The passwordExpirationDays
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMaximumAttemptCount
    * The number of allowed failed attempts to enter the passcode at the device's lock screen. Valid values 2 to 11
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
    * The number of allowed failed attempts to enter the passcode at the device's lock screen. Valid values 2 to 11
    *
    * @param int $val The passwordMaximumAttemptCount
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMaximumAttemptCount($val)
    {
        $this->_propDict["passwordMaximumAttemptCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumCharacterSetCount
    * Number of character sets a password must contain. Valid values 0 to 4
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
    * Number of character sets a password must contain. Valid values 0 to 4
    *
    * @param int $val The passwordMinimumCharacterSetCount
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMinimumCharacterSetCount($val)
    {
        $this->_propDict["passwordMinimumCharacterSetCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinimumLength
    * Minimum length of passwords.
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
    * Minimum length of passwords.
    *
    * @param int $val The passwordMinimumLength
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeLock
    * Minutes of inactivity required before a password is required.
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
    * Minutes of inactivity required before a password is required.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeLock
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesOfInactivityBeforeScreenTimeout
    * Minutes of inactivity required before the screen times out.
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
    * Minutes of inactivity required before the screen times out.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeScreenTimeout
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeScreenTimeout"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordMinutesUntilFailedLoginReset
    * The number of minutes before the login is reset after the maximum number of unsuccessful login attempts is reached.
    *
    * @return int The passwordMinutesUntilFailedLoginReset
    */
    public function getPasswordMinutesUntilFailedLoginReset()
    {
        if (array_key_exists("passwordMinutesUntilFailedLoginReset", $this->_propDict)) {
            return $this->_propDict["passwordMinutesUntilFailedLoginReset"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordMinutesUntilFailedLoginReset
    * The number of minutes before the login is reset after the maximum number of unsuccessful login attempts is reached.
    *
    * @param int $val The passwordMinutesUntilFailedLoginReset
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordMinutesUntilFailedLoginReset($val)
    {
        $this->_propDict["passwordMinutesUntilFailedLoginReset"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPreviousPasswordBlockCount
    * Number of previous passwords to block.
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
    * Number of previous passwords to block.
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return MacOSGeneralDeviceConfiguration
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
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordRequiredType
    * Type of password that is required. Possible values are: deviceDefault, alphanumeric, numeric.
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
    * Type of password that is required. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @param RequiredPasswordType $val The passwordRequiredType
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the privacyAccessControls
    * List of privacy preference policy controls. This collection can contain a maximum of 10000 elements.
     *
     * @return array The privacyAccessControls
     */
    public function getPrivacyAccessControls()
    {
        if (array_key_exists("privacyAccessControls", $this->_propDict)) {
           return $this->_propDict["privacyAccessControls"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the privacyAccessControls
    * List of privacy preference policy controls. This collection can contain a maximum of 10000 elements.
    *
    * @param MacOSPrivacyAccessControlItem $val The privacyAccessControls
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setPrivacyAccessControls($val)
    {
		$this->_propDict["privacyAccessControls"] = $val;
        return $this;
    }
    
    /**
    * Gets the safariBlockAutofill
    * Indicates whether or not to block the user from using Auto fill in Safari.
    *
    * @return bool The safariBlockAutofill
    */
    public function getSafariBlockAutofill()
    {
        if (array_key_exists("safariBlockAutofill", $this->_propDict)) {
            return $this->_propDict["safariBlockAutofill"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariBlockAutofill
    * Indicates whether or not to block the user from using Auto fill in Safari.
    *
    * @param bool $val The safariBlockAutofill
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setSafariBlockAutofill($val)
    {
        $this->_propDict["safariBlockAutofill"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the screenCaptureBlocked
    * Indicates whether or not to block the user from taking Screenshots.
    *
    * @return bool The screenCaptureBlocked
    */
    public function getScreenCaptureBlocked()
    {
        if (array_key_exists("screenCaptureBlocked", $this->_propDict)) {
            return $this->_propDict["screenCaptureBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the screenCaptureBlocked
    * Indicates whether or not to block the user from taking Screenshots.
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the softwareUpdatesEnforcedDelayInDays
    * Sets how many days a software update will be delyed for a supervised device. Valid values 0 to 90
    *
    * @return int The softwareUpdatesEnforcedDelayInDays
    */
    public function getSoftwareUpdatesEnforcedDelayInDays()
    {
        if (array_key_exists("softwareUpdatesEnforcedDelayInDays", $this->_propDict)) {
            return $this->_propDict["softwareUpdatesEnforcedDelayInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the softwareUpdatesEnforcedDelayInDays
    * Sets how many days a software update will be delyed for a supervised device. Valid values 0 to 90
    *
    * @param int $val The softwareUpdatesEnforcedDelayInDays
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setSoftwareUpdatesEnforcedDelayInDays($val)
    {
        $this->_propDict["softwareUpdatesEnforcedDelayInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the spotlightBlockInternetResults
    * Indicates whether or not to block Spotlight from returning any results from an Internet search.
    *
    * @return bool The spotlightBlockInternetResults
    */
    public function getSpotlightBlockInternetResults()
    {
        if (array_key_exists("spotlightBlockInternetResults", $this->_propDict)) {
            return $this->_propDict["spotlightBlockInternetResults"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the spotlightBlockInternetResults
    * Indicates whether or not to block Spotlight from returning any results from an Internet search.
    *
    * @param bool $val The spotlightBlockInternetResults
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setSpotlightBlockInternetResults($val)
    {
        $this->_propDict["spotlightBlockInternetResults"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the updateDelayPolicy
    * Determines whether to delay OS and/or app updates for macOS. Possible values are: none, delayOSUpdateVisibility, delayAppUpdateVisibility.
    *
    * @return MacOSSoftwareUpdateDelayPolicy The updateDelayPolicy
    */
    public function getUpdateDelayPolicy()
    {
        if (array_key_exists("updateDelayPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["updateDelayPolicy"], "\Beta\Microsoft\Graph\Model\MacOSSoftwareUpdateDelayPolicy")) {
                return $this->_propDict["updateDelayPolicy"];
            } else {
                $this->_propDict["updateDelayPolicy"] = new MacOSSoftwareUpdateDelayPolicy($this->_propDict["updateDelayPolicy"]);
                return $this->_propDict["updateDelayPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the updateDelayPolicy
    * Determines whether to delay OS and/or app updates for macOS. Possible values are: none, delayOSUpdateVisibility, delayAppUpdateVisibility.
    *
    * @param MacOSSoftwareUpdateDelayPolicy $val The updateDelayPolicy
    *
    * @return MacOSGeneralDeviceConfiguration
    */
    public function setUpdateDelayPolicy($val)
    {
        $this->_propDict["updateDelayPolicy"] = $val;
        return $this;
    }
    
}
