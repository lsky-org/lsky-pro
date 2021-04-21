<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppPolicySetItem File
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
* MobileAppPolicySetItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppPolicySetItem extends PolicySetItem
{
    /**
    * Gets the intent
    * Install intent of the MobileAppPolicySetItem. Possible values are: available, required, uninstall, availableWithoutEnrollment.
    *
    * @return InstallIntent The intent
    */
    public function getIntent()
    {
        if (array_key_exists("intent", $this->_propDict)) {
            if (is_a($this->_propDict["intent"], "\Beta\Microsoft\Graph\Model\InstallIntent")) {
                return $this->_propDict["intent"];
            } else {
                $this->_propDict["intent"] = new InstallIntent($this->_propDict["intent"]);
                return $this->_propDict["intent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intent
    * Install intent of the MobileAppPolicySetItem. Possible values are: available, required, uninstall, availableWithoutEnrollment.
    *
    * @param InstallIntent $val The intent
    *
    * @return MobileAppPolicySetItem
    */
    public function setIntent($val)
    {
        $this->_propDict["intent"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    * Settings of the MobileAppPolicySetItem.
    *
    * @return MobileAppAssignmentSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\MobileAppAssignmentSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new MobileAppAssignmentSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * Settings of the MobileAppPolicySetItem.
    *
    * @param MobileAppAssignmentSettings $val The settings
    *
    * @return MobileAppPolicySetItem
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
}
