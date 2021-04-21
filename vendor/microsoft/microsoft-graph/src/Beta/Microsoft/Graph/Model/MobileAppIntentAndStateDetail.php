<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppIntentAndStateDetail File
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
* MobileAppIntentAndStateDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppIntentAndStateDetail extends Entity
{
    /**
    * Gets the applicationId
    * MobieApp identifier.
    *
    * @return string The applicationId
    */
    public function getApplicationId()
    {
        if (array_key_exists("applicationId", $this->_propDict)) {
            return $this->_propDict["applicationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationId
    * MobieApp identifier.
    *
    * @param string $val The value of the applicationId
    *
    * @return MobileAppIntentAndStateDetail
    */
    public function setApplicationId($val)
    {
        $this->_propDict["applicationId"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The admin provided or imported title of the app.
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
    * The admin provided or imported title of the app.
    *
    * @param string $val The value of the displayName
    *
    * @return MobileAppIntentAndStateDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the displayVersion
    * Human readable version of the application
    *
    * @return string The displayVersion
    */
    public function getDisplayVersion()
    {
        if (array_key_exists("displayVersion", $this->_propDict)) {
            return $this->_propDict["displayVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayVersion
    * Human readable version of the application
    *
    * @param string $val The value of the displayVersion
    *
    * @return MobileAppIntentAndStateDetail
    */
    public function setDisplayVersion($val)
    {
        $this->_propDict["displayVersion"] = $val;
        return $this;
    }

    /**
    * Gets the installState
    * The install state of the app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
    *
    * @return ResultantAppState The installState
    */
    public function getInstallState()
    {
        if (array_key_exists("installState", $this->_propDict)) {
            if (is_a($this->_propDict["installState"], "\Beta\Microsoft\Graph\Model\ResultantAppState")) {
                return $this->_propDict["installState"];
            } else {
                $this->_propDict["installState"] = new ResultantAppState($this->_propDict["installState"]);
                return $this->_propDict["installState"];
            }
        }
        return null;
    }

    /**
    * Sets the installState
    * The install state of the app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
    *
    * @param ResultantAppState $val The value to assign to the installState
    *
    * @return MobileAppIntentAndStateDetail The MobileAppIntentAndStateDetail
    */
    public function setInstallState($val)
    {
        $this->_propDict["installState"] = $val;
         return $this;
    }

    /**
    * Gets the mobileAppIntent
    * Mobile App Intent. Possible values are: available, notAvailable, requiredInstall, requiredUninstall, requiredAndAvailableInstall, availableInstallWithoutEnrollment, exclude.
    *
    * @return MobileAppIntent The mobileAppIntent
    */
    public function getMobileAppIntent()
    {
        if (array_key_exists("mobileAppIntent", $this->_propDict)) {
            if (is_a($this->_propDict["mobileAppIntent"], "\Beta\Microsoft\Graph\Model\MobileAppIntent")) {
                return $this->_propDict["mobileAppIntent"];
            } else {
                $this->_propDict["mobileAppIntent"] = new MobileAppIntent($this->_propDict["mobileAppIntent"]);
                return $this->_propDict["mobileAppIntent"];
            }
        }
        return null;
    }

    /**
    * Sets the mobileAppIntent
    * Mobile App Intent. Possible values are: available, notAvailable, requiredInstall, requiredUninstall, requiredAndAvailableInstall, availableInstallWithoutEnrollment, exclude.
    *
    * @param MobileAppIntent $val The value to assign to the mobileAppIntent
    *
    * @return MobileAppIntentAndStateDetail The MobileAppIntentAndStateDetail
    */
    public function setMobileAppIntent($val)
    {
        $this->_propDict["mobileAppIntent"] = $val;
         return $this;
    }

    /**
    * Gets the supportedDeviceTypes
    * The supported platforms for the app.
    *
    * @return MobileAppSupportedDeviceType The supportedDeviceTypes
    */
    public function getSupportedDeviceTypes()
    {
        if (array_key_exists("supportedDeviceTypes", $this->_propDict)) {
            if (is_a($this->_propDict["supportedDeviceTypes"], "\Beta\Microsoft\Graph\Model\MobileAppSupportedDeviceType")) {
                return $this->_propDict["supportedDeviceTypes"];
            } else {
                $this->_propDict["supportedDeviceTypes"] = new MobileAppSupportedDeviceType($this->_propDict["supportedDeviceTypes"]);
                return $this->_propDict["supportedDeviceTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedDeviceTypes
    * The supported platforms for the app.
    *
    * @param MobileAppSupportedDeviceType $val The value to assign to the supportedDeviceTypes
    *
    * @return MobileAppIntentAndStateDetail The MobileAppIntentAndStateDetail
    */
    public function setSupportedDeviceTypes($val)
    {
        $this->_propDict["supportedDeviceTypes"] = $val;
         return $this;
    }
}
