<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosNotificationSettings File
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
* IosNotificationSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosNotificationSettings extends Entity
{

    /**
    * Gets the alertType
    * Indicates the type of alert for notifications for this app. Possible values are: deviceDefault, banner, modal, none.
    *
    * @return IosNotificationAlertType The alertType
    */
    public function getAlertType()
    {
        if (array_key_exists("alertType", $this->_propDict)) {
            if (is_a($this->_propDict["alertType"], "\Beta\Microsoft\Graph\Model\IosNotificationAlertType")) {
                return $this->_propDict["alertType"];
            } else {
                $this->_propDict["alertType"] = new IosNotificationAlertType($this->_propDict["alertType"]);
                return $this->_propDict["alertType"];
            }
        }
        return null;
    }

    /**
    * Sets the alertType
    * Indicates the type of alert for notifications for this app. Possible values are: deviceDefault, banner, modal, none.
    *
    * @param IosNotificationAlertType $val The value to assign to the alertType
    *
    * @return IosNotificationSettings The IosNotificationSettings
    */
    public function setAlertType($val)
    {
        $this->_propDict["alertType"] = $val;
         return $this;
    }
    /**
    * Gets the appName
    * Application name to be associated with the bundleID.
    *
    * @return string The appName
    */
    public function getAppName()
    {
        if (array_key_exists("appName", $this->_propDict)) {
            return $this->_propDict["appName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appName
    * Application name to be associated with the bundleID.
    *
    * @param string $val The value of the appName
    *
    * @return IosNotificationSettings
    */
    public function setAppName($val)
    {
        $this->_propDict["appName"] = $val;
        return $this;
    }
    /**
    * Gets the badgesEnabled
    * Indicates whether badges are allowed for this app.
    *
    * @return bool The badgesEnabled
    */
    public function getBadgesEnabled()
    {
        if (array_key_exists("badgesEnabled", $this->_propDict)) {
            return $this->_propDict["badgesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the badgesEnabled
    * Indicates whether badges are allowed for this app.
    *
    * @param bool $val The value of the badgesEnabled
    *
    * @return IosNotificationSettings
    */
    public function setBadgesEnabled($val)
    {
        $this->_propDict["badgesEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the bundleID
    * Bundle id of app to which to apply these notification settings.
    *
    * @return string The bundleID
    */
    public function getBundleID()
    {
        if (array_key_exists("bundleID", $this->_propDict)) {
            return $this->_propDict["bundleID"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleID
    * Bundle id of app to which to apply these notification settings.
    *
    * @param string $val The value of the bundleID
    *
    * @return IosNotificationSettings
    */
    public function setBundleID($val)
    {
        $this->_propDict["bundleID"] = $val;
        return $this;
    }
    /**
    * Gets the enabled
    * Indicates whether notifications are allowed for this app.
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    * Indicates whether notifications are allowed for this app.
    *
    * @param bool $val The value of the enabled
    *
    * @return IosNotificationSettings
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = $val;
        return $this;
    }

    /**
    * Gets the previewVisibility
    * Overrides the notification preview policy set by the user on an iOS device. Possible values are: notConfigured, alwaysShow, hideWhenLocked, neverShow.
    *
    * @return IosNotificationPreviewVisibility The previewVisibility
    */
    public function getPreviewVisibility()
    {
        if (array_key_exists("previewVisibility", $this->_propDict)) {
            if (is_a($this->_propDict["previewVisibility"], "\Beta\Microsoft\Graph\Model\IosNotificationPreviewVisibility")) {
                return $this->_propDict["previewVisibility"];
            } else {
                $this->_propDict["previewVisibility"] = new IosNotificationPreviewVisibility($this->_propDict["previewVisibility"]);
                return $this->_propDict["previewVisibility"];
            }
        }
        return null;
    }

    /**
    * Sets the previewVisibility
    * Overrides the notification preview policy set by the user on an iOS device. Possible values are: notConfigured, alwaysShow, hideWhenLocked, neverShow.
    *
    * @param IosNotificationPreviewVisibility $val The value to assign to the previewVisibility
    *
    * @return IosNotificationSettings The IosNotificationSettings
    */
    public function setPreviewVisibility($val)
    {
        $this->_propDict["previewVisibility"] = $val;
         return $this;
    }
    /**
    * Gets the publisher
    * Publisher to be associated with the bundleID.
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    * Publisher to be associated with the bundleID.
    *
    * @param string $val The value of the publisher
    *
    * @return IosNotificationSettings
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    /**
    * Gets the showInNotificationCenter
    * Indicates whether notifications can be shown in notification center.
    *
    * @return bool The showInNotificationCenter
    */
    public function getShowInNotificationCenter()
    {
        if (array_key_exists("showInNotificationCenter", $this->_propDict)) {
            return $this->_propDict["showInNotificationCenter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showInNotificationCenter
    * Indicates whether notifications can be shown in notification center.
    *
    * @param bool $val The value of the showInNotificationCenter
    *
    * @return IosNotificationSettings
    */
    public function setShowInNotificationCenter($val)
    {
        $this->_propDict["showInNotificationCenter"] = $val;
        return $this;
    }
    /**
    * Gets the showOnLockScreen
    * Indicates whether notifications can be shown on the lock screen.
    *
    * @return bool The showOnLockScreen
    */
    public function getShowOnLockScreen()
    {
        if (array_key_exists("showOnLockScreen", $this->_propDict)) {
            return $this->_propDict["showOnLockScreen"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showOnLockScreen
    * Indicates whether notifications can be shown on the lock screen.
    *
    * @param bool $val The value of the showOnLockScreen
    *
    * @return IosNotificationSettings
    */
    public function setShowOnLockScreen($val)
    {
        $this->_propDict["showOnLockScreen"] = $val;
        return $this;
    }
    /**
    * Gets the soundsEnabled
    * Indicates whether sounds are allowed for this app.
    *
    * @return bool The soundsEnabled
    */
    public function getSoundsEnabled()
    {
        if (array_key_exists("soundsEnabled", $this->_propDict)) {
            return $this->_propDict["soundsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the soundsEnabled
    * Indicates whether sounds are allowed for this app.
    *
    * @param bool $val The value of the soundsEnabled
    *
    * @return IosNotificationSettings
    */
    public function setSoundsEnabled($val)
    {
        $this->_propDict["soundsEnabled"] = $val;
        return $this;
    }
}
