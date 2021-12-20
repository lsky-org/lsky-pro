<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationConflictSummary File
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
* DeviceConfigurationConflictSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceConfigurationConflictSummary extends Entity
{

     /** 
     * Gets the conflictingDeviceConfigurations
    * The set of policies in conflict with the given setting
     *
     * @return array The conflictingDeviceConfigurations
     */
    public function getConflictingDeviceConfigurations()
    {
        if (array_key_exists("conflictingDeviceConfigurations", $this->_propDict)) {
           return $this->_propDict["conflictingDeviceConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the conflictingDeviceConfigurations
    * The set of policies in conflict with the given setting
    *
    * @param SettingSource $val The conflictingDeviceConfigurations
    *
    * @return DeviceConfigurationConflictSummary
    */
    public function setConflictingDeviceConfigurations($val)
    {
		$this->_propDict["conflictingDeviceConfigurations"] = $val;
        return $this;
    }
    
    /**
    * Gets the contributingSettings
    * The set of settings in conflict with the given policies
    *
    * @return string The contributingSettings
    */
    public function getContributingSettings()
    {
        if (array_key_exists("contributingSettings", $this->_propDict)) {
            return $this->_propDict["contributingSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contributingSettings
    * The set of settings in conflict with the given policies
    *
    * @param string $val The contributingSettings
    *
    * @return DeviceConfigurationConflictSummary
    */
    public function setContributingSettings($val)
    {
        $this->_propDict["contributingSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCheckinsImpacted
    * The count of checkins impacted by the conflicting policies and settings
    *
    * @return int The deviceCheckinsImpacted
    */
    public function getDeviceCheckinsImpacted()
    {
        if (array_key_exists("deviceCheckinsImpacted", $this->_propDict)) {
            return $this->_propDict["deviceCheckinsImpacted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceCheckinsImpacted
    * The count of checkins impacted by the conflicting policies and settings
    *
    * @param int $val The deviceCheckinsImpacted
    *
    * @return DeviceConfigurationConflictSummary
    */
    public function setDeviceCheckinsImpacted($val)
    {
        $this->_propDict["deviceCheckinsImpacted"] = intval($val);
        return $this;
    }
    
}
