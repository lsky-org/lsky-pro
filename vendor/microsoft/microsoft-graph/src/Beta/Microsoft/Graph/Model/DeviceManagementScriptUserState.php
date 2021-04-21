<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementScriptUserState File
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
* DeviceManagementScriptUserState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementScriptUserState extends Entity
{
    /**
    * Gets the errorDeviceCount
    * Error device count for specific user.
    *
    * @return int The errorDeviceCount
    */
    public function getErrorDeviceCount()
    {
        if (array_key_exists("errorDeviceCount", $this->_propDict)) {
            return $this->_propDict["errorDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorDeviceCount
    * Error device count for specific user.
    *
    * @param int $val The errorDeviceCount
    *
    * @return DeviceManagementScriptUserState
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successDeviceCount
    * Success device count for specific user.
    *
    * @return int The successDeviceCount
    */
    public function getSuccessDeviceCount()
    {
        if (array_key_exists("successDeviceCount", $this->_propDict)) {
            return $this->_propDict["successDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successDeviceCount
    * Success device count for specific user.
    *
    * @param int $val The successDeviceCount
    *
    * @return DeviceManagementScriptUserState
    */
    public function setSuccessDeviceCount($val)
    {
        $this->_propDict["successDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * User principle name of specific user.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    * User principle name of specific user.
    *
    * @param string $val The userPrincipalName
    *
    * @return DeviceManagementScriptUserState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceRunStates
    * List of run states for this script across all devices of specific user.
     *
     * @return array The deviceRunStates
     */
    public function getDeviceRunStates()
    {
        if (array_key_exists("deviceRunStates", $this->_propDict)) {
           return $this->_propDict["deviceRunStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceRunStates
    * List of run states for this script across all devices of specific user.
    *
    * @param DeviceManagementScriptDeviceState $val The deviceRunStates
    *
    * @return DeviceManagementScriptUserState
    */
    public function setDeviceRunStates($val)
    {
		$this->_propDict["deviceRunStates"] = $val;
        return $this;
    }
    
}
