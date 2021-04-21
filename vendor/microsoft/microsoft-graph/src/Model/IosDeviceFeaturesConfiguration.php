<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosDeviceFeaturesConfiguration File
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
* IosDeviceFeaturesConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase
{
    /**
    * Gets the assetTagTemplate
    * Asset tag information for the device, displayed on the login window and lock screen.
    *
    * @return string The assetTagTemplate
    */
    public function getAssetTagTemplate()
    {
        if (array_key_exists("assetTagTemplate", $this->_propDict)) {
            return $this->_propDict["assetTagTemplate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assetTagTemplate
    * Asset tag information for the device, displayed on the login window and lock screen.
    *
    * @param string $val The assetTagTemplate
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setAssetTagTemplate($val)
    {
        $this->_propDict["assetTagTemplate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeScreenDockIcons
    * A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     *
     * @return array The homeScreenDockIcons
     */
    public function getHomeScreenDockIcons()
    {
        if (array_key_exists("homeScreenDockIcons", $this->_propDict)) {
           return $this->_propDict["homeScreenDockIcons"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the homeScreenDockIcons
    * A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
    *
    * @param IosHomeScreenItem $val The homeScreenDockIcons
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setHomeScreenDockIcons($val)
    {
		$this->_propDict["homeScreenDockIcons"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeScreenPages
    * A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     *
     * @return array The homeScreenPages
     */
    public function getHomeScreenPages()
    {
        if (array_key_exists("homeScreenPages", $this->_propDict)) {
           return $this->_propDict["homeScreenPages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the homeScreenPages
    * A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
    *
    * @param IosHomeScreenPage $val The homeScreenPages
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setHomeScreenPages($val)
    {
		$this->_propDict["homeScreenPages"] = $val;
        return $this;
    }
    
    /**
    * Gets the lockScreenFootnote
    * A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
    *
    * @return string The lockScreenFootnote
    */
    public function getLockScreenFootnote()
    {
        if (array_key_exists("lockScreenFootnote", $this->_propDict)) {
            return $this->_propDict["lockScreenFootnote"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lockScreenFootnote
    * A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
    *
    * @param string $val The lockScreenFootnote
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setLockScreenFootnote($val)
    {
        $this->_propDict["lockScreenFootnote"] = $val;
        return $this;
    }
    

     /** 
     * Gets the notificationSettings
    * Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     *
     * @return array The notificationSettings
     */
    public function getNotificationSettings()
    {
        if (array_key_exists("notificationSettings", $this->_propDict)) {
           return $this->_propDict["notificationSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the notificationSettings
    * Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
    *
    * @param IosNotificationSettings $val The notificationSettings
    *
    * @return IosDeviceFeaturesConfiguration
    */
    public function setNotificationSettings($val)
    {
		$this->_propDict["notificationSettings"] = $val;
        return $this;
    }
    
}
