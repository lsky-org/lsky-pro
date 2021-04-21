<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserInstallStateSummary File
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
* UserInstallStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserInstallStateSummary extends Entity
{
    /**
    * Gets the failedDeviceCount
    * Failed Device Count.
    *
    * @return int The failedDeviceCount
    */
    public function getFailedDeviceCount()
    {
        if (array_key_exists("failedDeviceCount", $this->_propDict)) {
            return $this->_propDict["failedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedDeviceCount
    * Failed Device Count.
    *
    * @param int $val The failedDeviceCount
    *
    * @return UserInstallStateSummary
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the installedDeviceCount
    * Installed Device Count.
    *
    * @return int The installedDeviceCount
    */
    public function getInstalledDeviceCount()
    {
        if (array_key_exists("installedDeviceCount", $this->_propDict)) {
            return $this->_propDict["installedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the installedDeviceCount
    * Installed Device Count.
    *
    * @param int $val The installedDeviceCount
    *
    * @return UserInstallStateSummary
    */
    public function setInstalledDeviceCount($val)
    {
        $this->_propDict["installedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notInstalledDeviceCount
    * Not installed device count.
    *
    * @return int The notInstalledDeviceCount
    */
    public function getNotInstalledDeviceCount()
    {
        if (array_key_exists("notInstalledDeviceCount", $this->_propDict)) {
            return $this->_propDict["notInstalledDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notInstalledDeviceCount
    * Not installed device count.
    *
    * @param int $val The notInstalledDeviceCount
    *
    * @return UserInstallStateSummary
    */
    public function setNotInstalledDeviceCount($val)
    {
        $this->_propDict["notInstalledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the userName
    * User name.
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    * User name.
    *
    * @param string $val The userName
    *
    * @return UserInstallStateSummary
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStates
    * The install state of the eBook.
     *
     * @return array The deviceStates
     */
    public function getDeviceStates()
    {
        if (array_key_exists("deviceStates", $this->_propDict)) {
           return $this->_propDict["deviceStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStates
    * The install state of the eBook.
    *
    * @param DeviceInstallState $val The deviceStates
    *
    * @return UserInstallStateSummary
    */
    public function setDeviceStates($val)
    {
		$this->_propDict["deviceStates"] = $val;
        return $this;
    }
    
}
