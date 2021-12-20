<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppIntentAndState File
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
* MobileAppIntentAndState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppIntentAndState extends Entity
{
    /**
    * Gets the managedDeviceIdentifier
    * Device identifier created or collected by Intune.
    *
    * @return string The managedDeviceIdentifier
    */
    public function getManagedDeviceIdentifier()
    {
        if (array_key_exists("managedDeviceIdentifier", $this->_propDict)) {
            return $this->_propDict["managedDeviceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceIdentifier
    * Device identifier created or collected by Intune.
    *
    * @param string $val The managedDeviceIdentifier
    *
    * @return MobileAppIntentAndState
    */
    public function setManagedDeviceIdentifier($val)
    {
        $this->_propDict["managedDeviceIdentifier"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppList
    * The list of payload intents and states for the tenant.
     *
     * @return array The mobileAppList
     */
    public function getMobileAppList()
    {
        if (array_key_exists("mobileAppList", $this->_propDict)) {
           return $this->_propDict["mobileAppList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileAppList
    * The list of payload intents and states for the tenant.
    *
    * @param MobileAppIntentAndStateDetail $val The mobileAppList
    *
    * @return MobileAppIntentAndState
    */
    public function setMobileAppList($val)
    {
		$this->_propDict["mobileAppList"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * Identifier for the user that tried to enroll the device.
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * Identifier for the user that tried to enroll the device.
    *
    * @param string $val The userId
    *
    * @return MobileAppIntentAndState
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
}
