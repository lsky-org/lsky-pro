<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExchangeOnPremisesPolicy File
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
* DeviceManagementExchangeOnPremisesPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementExchangeOnPremisesPolicy extends Entity
{

     /** 
     * Gets the accessRules
    * The list of device access rules in Exchange. The access rules apply globally to the entire Exchange organization
     *
     * @return array The accessRules
     */
    public function getAccessRules()
    {
        if (array_key_exists("accessRules", $this->_propDict)) {
           return $this->_propDict["accessRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessRules
    * The list of device access rules in Exchange. The access rules apply globally to the entire Exchange organization
    *
    * @param DeviceManagementExchangeAccessRule $val The accessRules
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setAccessRules($val)
    {
		$this->_propDict["accessRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultAccessLevel
    * Default access state in Exchange. This rule applies globally to the entire Exchange organization. Possible values are: none, allow, block, quarantine.
    *
    * @return DeviceManagementExchangeAccessLevel The defaultAccessLevel
    */
    public function getDefaultAccessLevel()
    {
        if (array_key_exists("defaultAccessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["defaultAccessLevel"], "\Beta\Microsoft\Graph\Model\DeviceManagementExchangeAccessLevel")) {
                return $this->_propDict["defaultAccessLevel"];
            } else {
                $this->_propDict["defaultAccessLevel"] = new DeviceManagementExchangeAccessLevel($this->_propDict["defaultAccessLevel"]);
                return $this->_propDict["defaultAccessLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultAccessLevel
    * Default access state in Exchange. This rule applies globally to the entire Exchange organization. Possible values are: none, allow, block, quarantine.
    *
    * @param DeviceManagementExchangeAccessLevel $val The defaultAccessLevel
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setDefaultAccessLevel($val)
    {
        $this->_propDict["defaultAccessLevel"] = $val;
        return $this;
    }
    

     /** 
     * Gets the knownDeviceClasses
    * The list of device classes known to Exchange
     *
     * @return array The knownDeviceClasses
     */
    public function getKnownDeviceClasses()
    {
        if (array_key_exists("knownDeviceClasses", $this->_propDict)) {
           return $this->_propDict["knownDeviceClasses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the knownDeviceClasses
    * The list of device classes known to Exchange
    *
    * @param DeviceManagementExchangeDeviceClass $val The knownDeviceClasses
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setKnownDeviceClasses($val)
    {
		$this->_propDict["knownDeviceClasses"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationContent
    * Notification text that will be sent to users quarantined by this policy. This is UTF8 encoded byte array HTML.
    *
    * @return \GuzzleHttp\Psr7\Stream The notificationContent
    */
    public function getNotificationContent()
    {
        if (array_key_exists("notificationContent", $this->_propDict)) {
            if (is_a($this->_propDict["notificationContent"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["notificationContent"];
            } else {
                $this->_propDict["notificationContent"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["notificationContent"]);
                return $this->_propDict["notificationContent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the notificationContent
    * Notification text that will be sent to users quarantined by this policy. This is UTF8 encoded byte array HTML.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The notificationContent
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setNotificationContent($val)
    {
        $this->_propDict["notificationContent"] = $val;
        return $this;
    }
    
    /**
    * Gets the conditionalAccessSettings
    * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
    *
    * @return OnPremisesConditionalAccessSettings The conditionalAccessSettings
    */
    public function getConditionalAccessSettings()
    {
        if (array_key_exists("conditionalAccessSettings", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessSettings"], "\Beta\Microsoft\Graph\Model\OnPremisesConditionalAccessSettings")) {
                return $this->_propDict["conditionalAccessSettings"];
            } else {
                $this->_propDict["conditionalAccessSettings"] = new OnPremisesConditionalAccessSettings($this->_propDict["conditionalAccessSettings"]);
                return $this->_propDict["conditionalAccessSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditionalAccessSettings
    * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
    *
    * @param OnPremisesConditionalAccessSettings $val The conditionalAccessSettings
    *
    * @return DeviceManagementExchangeOnPremisesPolicy
    */
    public function setConditionalAccessSettings($val)
    {
        $this->_propDict["conditionalAccessSettings"] = $val;
        return $this;
    }
    
}
