<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IntuneBrand File
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
* IntuneBrand class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IntuneBrand extends Entity
{
    /**
    * Gets the contactITEmailAddress
    * Email address of the person/organization responsible for IT support.
    *
    * @return string The contactITEmailAddress
    */
    public function getContactITEmailAddress()
    {
        if (array_key_exists("contactITEmailAddress", $this->_propDict)) {
            return $this->_propDict["contactITEmailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contactITEmailAddress
    * Email address of the person/organization responsible for IT support.
    *
    * @param string $val The value of the contactITEmailAddress
    *
    * @return IntuneBrand
    */
    public function setContactITEmailAddress($val)
    {
        $this->_propDict["contactITEmailAddress"] = $val;
        return $this;
    }
    /**
    * Gets the contactITName
    * Name of the person/organization responsible for IT support.
    *
    * @return string The contactITName
    */
    public function getContactITName()
    {
        if (array_key_exists("contactITName", $this->_propDict)) {
            return $this->_propDict["contactITName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contactITName
    * Name of the person/organization responsible for IT support.
    *
    * @param string $val The value of the contactITName
    *
    * @return IntuneBrand
    */
    public function setContactITName($val)
    {
        $this->_propDict["contactITName"] = $val;
        return $this;
    }
    /**
    * Gets the contactITNotes
    * Text comments regarding the person/organization responsible for IT support.
    *
    * @return string The contactITNotes
    */
    public function getContactITNotes()
    {
        if (array_key_exists("contactITNotes", $this->_propDict)) {
            return $this->_propDict["contactITNotes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contactITNotes
    * Text comments regarding the person/organization responsible for IT support.
    *
    * @param string $val The value of the contactITNotes
    *
    * @return IntuneBrand
    */
    public function setContactITNotes($val)
    {
        $this->_propDict["contactITNotes"] = $val;
        return $this;
    }
    /**
    * Gets the contactITPhoneNumber
    * Phone number of the person/organization responsible for IT support.
    *
    * @return string The contactITPhoneNumber
    */
    public function getContactITPhoneNumber()
    {
        if (array_key_exists("contactITPhoneNumber", $this->_propDict)) {
            return $this->_propDict["contactITPhoneNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contactITPhoneNumber
    * Phone number of the person/organization responsible for IT support.
    *
    * @param string $val The value of the contactITPhoneNumber
    *
    * @return IntuneBrand
    */
    public function setContactITPhoneNumber($val)
    {
        $this->_propDict["contactITPhoneNumber"] = $val;
        return $this;
    }

    /**
    * Gets the darkBackgroundLogo
    * Logo image displayed in Company Portal apps which have a dark background behind the logo.
    *
    * @return MimeContent The darkBackgroundLogo
    */
    public function getDarkBackgroundLogo()
    {
        if (array_key_exists("darkBackgroundLogo", $this->_propDict)) {
            if (is_a($this->_propDict["darkBackgroundLogo"], "\Microsoft\Graph\Model\MimeContent")) {
                return $this->_propDict["darkBackgroundLogo"];
            } else {
                $this->_propDict["darkBackgroundLogo"] = new MimeContent($this->_propDict["darkBackgroundLogo"]);
                return $this->_propDict["darkBackgroundLogo"];
            }
        }
        return null;
    }

    /**
    * Sets the darkBackgroundLogo
    * Logo image displayed in Company Portal apps which have a dark background behind the logo.
    *
    * @param MimeContent $val The value to assign to the darkBackgroundLogo
    *
    * @return IntuneBrand The IntuneBrand
    */
    public function setDarkBackgroundLogo($val)
    {
        $this->_propDict["darkBackgroundLogo"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * Company/organization name that is displayed to end users.
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
    * Company/organization name that is displayed to end users.
    *
    * @param string $val The value of the displayName
    *
    * @return IntuneBrand
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lightBackgroundLogo
    * Logo image displayed in Company Portal apps which have a light background behind the logo.
    *
    * @return MimeContent The lightBackgroundLogo
    */
    public function getLightBackgroundLogo()
    {
        if (array_key_exists("lightBackgroundLogo", $this->_propDict)) {
            if (is_a($this->_propDict["lightBackgroundLogo"], "\Microsoft\Graph\Model\MimeContent")) {
                return $this->_propDict["lightBackgroundLogo"];
            } else {
                $this->_propDict["lightBackgroundLogo"] = new MimeContent($this->_propDict["lightBackgroundLogo"]);
                return $this->_propDict["lightBackgroundLogo"];
            }
        }
        return null;
    }

    /**
    * Sets the lightBackgroundLogo
    * Logo image displayed in Company Portal apps which have a light background behind the logo.
    *
    * @param MimeContent $val The value to assign to the lightBackgroundLogo
    *
    * @return IntuneBrand The IntuneBrand
    */
    public function setLightBackgroundLogo($val)
    {
        $this->_propDict["lightBackgroundLogo"] = $val;
         return $this;
    }
    /**
    * Gets the onlineSupportSiteName
    * Display name of the company/organization’s IT helpdesk site.
    *
    * @return string The onlineSupportSiteName
    */
    public function getOnlineSupportSiteName()
    {
        if (array_key_exists("onlineSupportSiteName", $this->_propDict)) {
            return $this->_propDict["onlineSupportSiteName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onlineSupportSiteName
    * Display name of the company/organization’s IT helpdesk site.
    *
    * @param string $val The value of the onlineSupportSiteName
    *
    * @return IntuneBrand
    */
    public function setOnlineSupportSiteName($val)
    {
        $this->_propDict["onlineSupportSiteName"] = $val;
        return $this;
    }
    /**
    * Gets the onlineSupportSiteUrl
    * URL to the company/organization’s IT helpdesk site.
    *
    * @return string The onlineSupportSiteUrl
    */
    public function getOnlineSupportSiteUrl()
    {
        if (array_key_exists("onlineSupportSiteUrl", $this->_propDict)) {
            return $this->_propDict["onlineSupportSiteUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onlineSupportSiteUrl
    * URL to the company/organization’s IT helpdesk site.
    *
    * @param string $val The value of the onlineSupportSiteUrl
    *
    * @return IntuneBrand
    */
    public function setOnlineSupportSiteUrl($val)
    {
        $this->_propDict["onlineSupportSiteUrl"] = $val;
        return $this;
    }
    /**
    * Gets the privacyUrl
    * URL to the company/organization’s privacy policy.
    *
    * @return string The privacyUrl
    */
    public function getPrivacyUrl()
    {
        if (array_key_exists("privacyUrl", $this->_propDict)) {
            return $this->_propDict["privacyUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the privacyUrl
    * URL to the company/organization’s privacy policy.
    *
    * @param string $val The value of the privacyUrl
    *
    * @return IntuneBrand
    */
    public function setPrivacyUrl($val)
    {
        $this->_propDict["privacyUrl"] = $val;
        return $this;
    }
    /**
    * Gets the showDisplayNameNextToLogo
    * Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
    *
    * @return bool The showDisplayNameNextToLogo
    */
    public function getShowDisplayNameNextToLogo()
    {
        if (array_key_exists("showDisplayNameNextToLogo", $this->_propDict)) {
            return $this->_propDict["showDisplayNameNextToLogo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showDisplayNameNextToLogo
    * Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
    *
    * @param bool $val The value of the showDisplayNameNextToLogo
    *
    * @return IntuneBrand
    */
    public function setShowDisplayNameNextToLogo($val)
    {
        $this->_propDict["showDisplayNameNextToLogo"] = $val;
        return $this;
    }
    /**
    * Gets the showLogo
    * Boolean that represents whether the administrator-supplied logo images are shown or not shown.
    *
    * @return bool The showLogo
    */
    public function getShowLogo()
    {
        if (array_key_exists("showLogo", $this->_propDict)) {
            return $this->_propDict["showLogo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showLogo
    * Boolean that represents whether the administrator-supplied logo images are shown or not shown.
    *
    * @param bool $val The value of the showLogo
    *
    * @return IntuneBrand
    */
    public function setShowLogo($val)
    {
        $this->_propDict["showLogo"] = $val;
        return $this;
    }
    /**
    * Gets the showNameNextToLogo
    * Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
    *
    * @return bool The showNameNextToLogo
    */
    public function getShowNameNextToLogo()
    {
        if (array_key_exists("showNameNextToLogo", $this->_propDict)) {
            return $this->_propDict["showNameNextToLogo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showNameNextToLogo
    * Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
    *
    * @param bool $val The value of the showNameNextToLogo
    *
    * @return IntuneBrand
    */
    public function setShowNameNextToLogo($val)
    {
        $this->_propDict["showNameNextToLogo"] = $val;
        return $this;
    }

    /**
    * Gets the themeColor
    * Primary theme color used in the Company Portal applications and web portal.
    *
    * @return RgbColor The themeColor
    */
    public function getThemeColor()
    {
        if (array_key_exists("themeColor", $this->_propDict)) {
            if (is_a($this->_propDict["themeColor"], "\Microsoft\Graph\Model\RgbColor")) {
                return $this->_propDict["themeColor"];
            } else {
                $this->_propDict["themeColor"] = new RgbColor($this->_propDict["themeColor"]);
                return $this->_propDict["themeColor"];
            }
        }
        return null;
    }

    /**
    * Sets the themeColor
    * Primary theme color used in the Company Portal applications and web portal.
    *
    * @param RgbColor $val The value to assign to the themeColor
    *
    * @return IntuneBrand The IntuneBrand
    */
    public function setThemeColor($val)
    {
        $this->_propDict["themeColor"] = $val;
         return $this;
    }
}
