<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutOfBoxExperienceSettings File
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
* OutOfBoxExperienceSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutOfBoxExperienceSettings extends Entity
{

    /**
    * Gets the deviceUsageType
    * AAD join authentication type. Possible values are: singleUser, shared.
    *
    * @return WindowsDeviceUsageType The deviceUsageType
    */
    public function getDeviceUsageType()
    {
        if (array_key_exists("deviceUsageType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceUsageType"], "\Beta\Microsoft\Graph\Model\WindowsDeviceUsageType")) {
                return $this->_propDict["deviceUsageType"];
            } else {
                $this->_propDict["deviceUsageType"] = new WindowsDeviceUsageType($this->_propDict["deviceUsageType"]);
                return $this->_propDict["deviceUsageType"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceUsageType
    * AAD join authentication type. Possible values are: singleUser, shared.
    *
    * @param WindowsDeviceUsageType $val The value to assign to the deviceUsageType
    *
    * @return OutOfBoxExperienceSettings The OutOfBoxExperienceSettings
    */
    public function setDeviceUsageType($val)
    {
        $this->_propDict["deviceUsageType"] = $val;
         return $this;
    }
    /**
    * Gets the hideEscapeLink
    * If set to true, then the user can't start over with different account, on company sign-in
    *
    * @return bool The hideEscapeLink
    */
    public function getHideEscapeLink()
    {
        if (array_key_exists("hideEscapeLink", $this->_propDict)) {
            return $this->_propDict["hideEscapeLink"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideEscapeLink
    * If set to true, then the user can't start over with different account, on company sign-in
    *
    * @param bool $val The value of the hideEscapeLink
    *
    * @return OutOfBoxExperienceSettings
    */
    public function setHideEscapeLink($val)
    {
        $this->_propDict["hideEscapeLink"] = $val;
        return $this;
    }
    /**
    * Gets the hideEULA
    * Show or hide EULA to user
    *
    * @return bool The hideEULA
    */
    public function getHideEULA()
    {
        if (array_key_exists("hideEULA", $this->_propDict)) {
            return $this->_propDict["hideEULA"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideEULA
    * Show or hide EULA to user
    *
    * @param bool $val The value of the hideEULA
    *
    * @return OutOfBoxExperienceSettings
    */
    public function setHideEULA($val)
    {
        $this->_propDict["hideEULA"] = $val;
        return $this;
    }
    /**
    * Gets the hidePrivacySettings
    * Show or hide privacy settings to user
    *
    * @return bool The hidePrivacySettings
    */
    public function getHidePrivacySettings()
    {
        if (array_key_exists("hidePrivacySettings", $this->_propDict)) {
            return $this->_propDict["hidePrivacySettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hidePrivacySettings
    * Show or hide privacy settings to user
    *
    * @param bool $val The value of the hidePrivacySettings
    *
    * @return OutOfBoxExperienceSettings
    */
    public function setHidePrivacySettings($val)
    {
        $this->_propDict["hidePrivacySettings"] = $val;
        return $this;
    }
    /**
    * Gets the skipKeyboardSelectionPage
    * If set, then skip the keyboard selection page if Language and Region are set
    *
    * @return bool The skipKeyboardSelectionPage
    */
    public function getSkipKeyboardSelectionPage()
    {
        if (array_key_exists("skipKeyboardSelectionPage", $this->_propDict)) {
            return $this->_propDict["skipKeyboardSelectionPage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skipKeyboardSelectionPage
    * If set, then skip the keyboard selection page if Language and Region are set
    *
    * @param bool $val The value of the skipKeyboardSelectionPage
    *
    * @return OutOfBoxExperienceSettings
    */
    public function setSkipKeyboardSelectionPage($val)
    {
        $this->_propDict["skipKeyboardSelectionPage"] = $val;
        return $this;
    }

    /**
    * Gets the userType
    * Type of user. Possible values are: administrator, standard.
    *
    * @return WindowsUserType The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            if (is_a($this->_propDict["userType"], "\Beta\Microsoft\Graph\Model\WindowsUserType")) {
                return $this->_propDict["userType"];
            } else {
                $this->_propDict["userType"] = new WindowsUserType($this->_propDict["userType"]);
                return $this->_propDict["userType"];
            }
        }
        return null;
    }

    /**
    * Sets the userType
    * Type of user. Possible values are: administrator, standard.
    *
    * @param WindowsUserType $val The value to assign to the userType
    *
    * @return OutOfBoxExperienceSettings The OutOfBoxExperienceSettings
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
         return $this;
    }
}
