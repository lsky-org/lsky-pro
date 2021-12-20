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
namespace Beta\Microsoft\Graph\Model;
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
    * Gets the companyPortalBlockedActions
    * Collection of blocked actions on the company portal as per platform and device ownership types.
    *
    * @return CompanyPortalBlockedAction The companyPortalBlockedActions
    */
    public function getCompanyPortalBlockedActions()
    {
        if (array_key_exists("companyPortalBlockedActions", $this->_propDict)) {
            if (is_a($this->_propDict["companyPortalBlockedActions"], "\Beta\Microsoft\Graph\Model\CompanyPortalBlockedAction")) {
                return $this->_propDict["companyPortalBlockedActions"];
            } else {
                $this->_propDict["companyPortalBlockedActions"] = new CompanyPortalBlockedAction($this->_propDict["companyPortalBlockedActions"]);
                return $this->_propDict["companyPortalBlockedActions"];
            }
        }
        return null;
    }

    /**
    * Sets the companyPortalBlockedActions
    * Collection of blocked actions on the company portal as per platform and device ownership types.
    *
    * @param CompanyPortalBlockedAction $val The value to assign to the companyPortalBlockedActions
    *
    * @return IntuneBrand The IntuneBrand
    */
    public function setCompanyPortalBlockedActions($val)
    {
        $this->_propDict["companyPortalBlockedActions"] = $val;
         return $this;
    }
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
    * Gets the customCanSeePrivacyMessage
    * The custom privacy message used to explain what the organization can see and do on managed devices.
    *
    * @return string The customCanSeePrivacyMessage
    */
    public function getCustomCanSeePrivacyMessage()
    {
        if (array_key_exists("customCanSeePrivacyMessage", $this->_propDict)) {
            return $this->_propDict["customCanSeePrivacyMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customCanSeePrivacyMessage
    * The custom privacy message used to explain what the organization can see and do on managed devices.
    *
    * @param string $val The value of the customCanSeePrivacyMessage
    *
    * @return IntuneBrand
    */
    public function setCustomCanSeePrivacyMessage($val)
    {
        $this->_propDict["customCanSeePrivacyMessage"] = $val;
        return $this;
    }
    /**
    * Gets the customCantSeePrivacyMessage
    * The custom privacy message used to explain what the organization can’t see or do on managed devices.
    *
    * @return string The customCantSeePrivacyMessage
    */
    public function getCustomCantSeePrivacyMessage()
    {
        if (array_key_exists("customCantSeePrivacyMessage", $this->_propDict)) {
            return $this->_propDict["customCantSeePrivacyMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customCantSeePrivacyMessage
    * The custom privacy message used to explain what the organization can’t see or do on managed devices.
    *
    * @param string $val The value of the customCantSeePrivacyMessage
    *
    * @return IntuneBrand
    */
    public function setCustomCantSeePrivacyMessage($val)
    {
        $this->_propDict["customCantSeePrivacyMessage"] = $val;
        return $this;
    }
    /**
    * Gets the customPrivacyMessage
    * The custom privacy message used to explain what the organization can’t see or do on managed devices.
    *
    * @return string The customPrivacyMessage
    */
    public function getCustomPrivacyMessage()
    {
        if (array_key_exists("customPrivacyMessage", $this->_propDict)) {
            return $this->_propDict["customPrivacyMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customPrivacyMessage
    * The custom privacy message used to explain what the organization can’t see or do on managed devices.
    *
    * @param string $val The value of the customPrivacyMessage
    *
    * @return IntuneBrand
    */
    public function setCustomPrivacyMessage($val)
    {
        $this->_propDict["customPrivacyMessage"] = $val;
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
            if (is_a($this->_propDict["darkBackgroundLogo"], "\Beta\Microsoft\Graph\Model\MimeContent")) {
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
    * Gets the disableClientTelemetry
    * Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
    *
    * @return bool The disableClientTelemetry
    */
    public function getDisableClientTelemetry()
    {
        if (array_key_exists("disableClientTelemetry", $this->_propDict)) {
            return $this->_propDict["disableClientTelemetry"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disableClientTelemetry
    * Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
    *
    * @param bool $val The value of the disableClientTelemetry
    *
    * @return IntuneBrand
    */
    public function setDisableClientTelemetry($val)
    {
        $this->_propDict["disableClientTelemetry"] = $val;
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
    * Gets the enrollmentAvailability
    * Customized device enrollment flow displayed to the end user . Possible values are: availableWithPrompts, availableWithoutPrompts, unavailable.
    *
    * @return EnrollmentAvailabilityOptions The enrollmentAvailability
    */
    public function getEnrollmentAvailability()
    {
        if (array_key_exists("enrollmentAvailability", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentAvailability"], "\Beta\Microsoft\Graph\Model\EnrollmentAvailabilityOptions")) {
                return $this->_propDict["enrollmentAvailability"];
            } else {
                $this->_propDict["enrollmentAvailability"] = new EnrollmentAvailabilityOptions($this->_propDict["enrollmentAvailability"]);
                return $this->_propDict["enrollmentAvailability"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentAvailability
    * Customized device enrollment flow displayed to the end user . Possible values are: availableWithPrompts, availableWithoutPrompts, unavailable.
    *
    * @param EnrollmentAvailabilityOptions $val The value to assign to the enrollmentAvailability
    *
    * @return IntuneBrand The IntuneBrand
    */
    public function setEnrollmentAvailability($val)
    {
        $this->_propDict["enrollmentAvailability"] = $val;
         return $this;
    }
    /**
    * Gets the isFactoryResetDisabled
    * Boolean that represents whether the adminsistrator has disabled the 'Factory Reset' action on corporate owned devices.
    *
    * @return bool The isFactoryResetDisabled
    */
    public function getIsFactoryResetDisabled()
    {
        if (array_key_exists("isFactoryResetDisabled", $this->_propDict)) {
            return $this->_propDict["isFactoryResetDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isFactoryResetDisabled
    * Boolean that represents whether the adminsistrator has disabled the 'Factory Reset' action on corporate owned devices.
    *
    * @param bool $val The value of the isFactoryResetDisabled
    *
    * @return IntuneBrand
    */
    public function setIsFactoryResetDisabled($val)
    {
        $this->_propDict["isFactoryResetDisabled"] = $val;
        return $this;
    }
    /**
    * Gets the isRemoveDeviceDisabled
    * Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices.
    *
    * @return bool The isRemoveDeviceDisabled
    */
    public function getIsRemoveDeviceDisabled()
    {
        if (array_key_exists("isRemoveDeviceDisabled", $this->_propDict)) {
            return $this->_propDict["isRemoveDeviceDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRemoveDeviceDisabled
    * Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices.
    *
    * @param bool $val The value of the isRemoveDeviceDisabled
    *
    * @return IntuneBrand
    */
    public function setIsRemoveDeviceDisabled($val)
    {
        $this->_propDict["isRemoveDeviceDisabled"] = $val;
        return $this;
    }

    /**
    * Gets the landingPageCustomizedImage
    * Customized image displayed in Company Portal app landing page
    *
    * @return MimeContent The landingPageCustomizedImage
    */
    public function getLandingPageCustomizedImage()
    {
        if (array_key_exists("landingPageCustomizedImage", $this->_propDict)) {
            if (is_a($this->_propDict["landingPageCustomizedImage"], "\Beta\Microsoft\Graph\Model\MimeContent")) {
                return $this->_propDict["landingPageCustomizedImage"];
            } else {
                $this->_propDict["landingPageCustomizedImage"] = new MimeContent($this->_propDict["landingPageCustomizedImage"]);
                return $this->_propDict["landingPageCustomizedImage"];
            }
        }
        return null;
    }

    /**
    * Sets the landingPageCustomizedImage
    * Customized image displayed in Company Portal app landing page
    *
    * @param MimeContent $val The value to assign to the landingPageCustomizedImage
    *
    * @return IntuneBrand The IntuneBrand
    */
    public function setLandingPageCustomizedImage($val)
    {
        $this->_propDict["landingPageCustomizedImage"] = $val;
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
            if (is_a($this->_propDict["lightBackgroundLogo"], "\Beta\Microsoft\Graph\Model\MimeContent")) {
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
    * Gets the roleScopeTagIds
    * List of scope tags assigned to the default branding profile
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagIds
    * List of scope tags assigned to the default branding profile
    *
    * @param string $val The value of the roleScopeTagIds
    *
    * @return IntuneBrand
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    /**
    * Gets the sendDeviceOwnershipChangePushNotification
    * Boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
    *
    * @return bool The sendDeviceOwnershipChangePushNotification
    */
    public function getSendDeviceOwnershipChangePushNotification()
    {
        if (array_key_exists("sendDeviceOwnershipChangePushNotification", $this->_propDict)) {
            return $this->_propDict["sendDeviceOwnershipChangePushNotification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sendDeviceOwnershipChangePushNotification
    * Boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
    *
    * @param bool $val The value of the sendDeviceOwnershipChangePushNotification
    *
    * @return IntuneBrand
    */
    public function setSendDeviceOwnershipChangePushNotification($val)
    {
        $this->_propDict["sendDeviceOwnershipChangePushNotification"] = $val;
        return $this;
    }
    /**
    * Gets the showAzureADEnterpriseApps
    * Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal
    *
    * @return bool The showAzureADEnterpriseApps
    */
    public function getShowAzureADEnterpriseApps()
    {
        if (array_key_exists("showAzureADEnterpriseApps", $this->_propDict)) {
            return $this->_propDict["showAzureADEnterpriseApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showAzureADEnterpriseApps
    * Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal
    *
    * @param bool $val The value of the showAzureADEnterpriseApps
    *
    * @return IntuneBrand
    */
    public function setShowAzureADEnterpriseApps($val)
    {
        $this->_propDict["showAzureADEnterpriseApps"] = $val;
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
    * Gets the showOfficeWebApps
    * Boolean that indicates if Office WebApps will be shown in Company Portal
    *
    * @return bool The showOfficeWebApps
    */
    public function getShowOfficeWebApps()
    {
        if (array_key_exists("showOfficeWebApps", $this->_propDict)) {
            return $this->_propDict["showOfficeWebApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showOfficeWebApps
    * Boolean that indicates if Office WebApps will be shown in Company Portal
    *
    * @param bool $val The value of the showOfficeWebApps
    *
    * @return IntuneBrand
    */
    public function setShowOfficeWebApps($val)
    {
        $this->_propDict["showOfficeWebApps"] = $val;
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
            if (is_a($this->_propDict["themeColor"], "\Beta\Microsoft\Graph\Model\RgbColor")) {
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
