<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementScriptRunSummary File
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
* DeviceManagementScriptRunSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementScriptRunSummary extends Entity
{
    /**
    * Gets the errorDeviceCount
    * Error device count.
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
    * Error device count.
    *
    * @param int $val The errorDeviceCount
    *
    * @return DeviceManagementScriptRunSummary
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorUserCount
    * Error user count.
    *
    * @return int The errorUserCount
    */
    public function getErrorUserCount()
    {
        if (array_key_exists("errorUserCount", $this->_propDict)) {
            return $this->_propDict["errorUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorUserCount
    * Error user count.
    *
    * @param int $val The errorUserCount
    *
    * @return DeviceManagementScriptRunSummary
    */
    public function setErrorUserCount($val)
    {
        $this->_propDict["errorUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successDeviceCount
    * Success device count.
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
    * Success device count.
    *
    * @param int $val The successDeviceCount
    *
    * @return DeviceManagementScriptRunSummary
    */
    public function setSuccessDeviceCount($val)
    {
        $this->_propDict["successDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successUserCount
    * Success user count.
    *
    * @return int The successUserCount
    */
    public function getSuccessUserCount()
    {
        if (array_key_exists("successUserCount", $this->_propDict)) {
            return $this->_propDict["successUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successUserCount
    * Success user count.
    *
    * @param int $val The successUserCount
    *
    * @return DeviceManagementScriptRunSummary
    */
    public function setSuccessUserCount($val)
    {
        $this->_propDict["successUserCount"] = intval($val);
        return $this;
    }
    
}
