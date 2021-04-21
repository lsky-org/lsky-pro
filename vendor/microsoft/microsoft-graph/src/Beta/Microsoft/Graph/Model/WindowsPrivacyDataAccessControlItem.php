<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPrivacyDataAccessControlItem File
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
* WindowsPrivacyDataAccessControlItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPrivacyDataAccessControlItem extends Entity
{
    /**
    * Gets the accessLevel
    * This indicates an access level for the privacy data category to which the specified application will be given to. Possible values are: notConfigured, forceAllow, forceDeny, userInControl.
    *
    * @return WindowsPrivacyDataAccessLevel The accessLevel
    */
    public function getAccessLevel()
    {
        if (array_key_exists("accessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["accessLevel"], "\Beta\Microsoft\Graph\Model\WindowsPrivacyDataAccessLevel")) {
                return $this->_propDict["accessLevel"];
            } else {
                $this->_propDict["accessLevel"] = new WindowsPrivacyDataAccessLevel($this->_propDict["accessLevel"]);
                return $this->_propDict["accessLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessLevel
    * This indicates an access level for the privacy data category to which the specified application will be given to. Possible values are: notConfigured, forceAllow, forceDeny, userInControl.
    *
    * @param WindowsPrivacyDataAccessLevel $val The accessLevel
    *
    * @return WindowsPrivacyDataAccessControlItem
    */
    public function setAccessLevel($val)
    {
        $this->_propDict["accessLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    * The Package Family Name of a Windows app. When set, the access level applies to the specified application.
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    * The Package Family Name of a Windows app. When set, the access level applies to the specified application.
    *
    * @param string $val The appDisplayName
    *
    * @return WindowsPrivacyDataAccessControlItem
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appPackageFamilyName
    * The Package Family Name of a Windows app. When set, the access level applies to the specified application.
    *
    * @return string The appPackageFamilyName
    */
    public function getAppPackageFamilyName()
    {
        if (array_key_exists("appPackageFamilyName", $this->_propDict)) {
            return $this->_propDict["appPackageFamilyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appPackageFamilyName
    * The Package Family Name of a Windows app. When set, the access level applies to the specified application.
    *
    * @param string $val The appPackageFamilyName
    *
    * @return WindowsPrivacyDataAccessControlItem
    */
    public function setAppPackageFamilyName($val)
    {
        $this->_propDict["appPackageFamilyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataCategory
    * This indicates a privacy data category to which the specific access control will apply. Possible values are: notConfigured, accountInfo, appsRunInBackground, calendar, callHistory, camera, contacts, diagnosticsInfo, email, location, messaging, microphone, motion, notifications, phone, radios, tasks, syncWithDevices, trustedDevices.
    *
    * @return WindowsPrivacyDataCategory The dataCategory
    */
    public function getDataCategory()
    {
        if (array_key_exists("dataCategory", $this->_propDict)) {
            if (is_a($this->_propDict["dataCategory"], "\Beta\Microsoft\Graph\Model\WindowsPrivacyDataCategory")) {
                return $this->_propDict["dataCategory"];
            } else {
                $this->_propDict["dataCategory"] = new WindowsPrivacyDataCategory($this->_propDict["dataCategory"]);
                return $this->_propDict["dataCategory"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataCategory
    * This indicates a privacy data category to which the specific access control will apply. Possible values are: notConfigured, accountInfo, appsRunInBackground, calendar, callHistory, camera, contacts, diagnosticsInfo, email, location, messaging, microphone, motion, notifications, phone, radios, tasks, syncWithDevices, trustedDevices.
    *
    * @param WindowsPrivacyDataCategory $val The dataCategory
    *
    * @return WindowsPrivacyDataAccessControlItem
    */
    public function setDataCategory($val)
    {
        $this->_propDict["dataCategory"] = $val;
        return $this;
    }
    
}
