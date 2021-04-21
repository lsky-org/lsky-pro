<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EBookInstallSummary File
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
* EBookInstallSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EBookInstallSummary extends Entity
{
    /**
    * Gets the failedDeviceCount
    * Number of Devices that have failed to install this book.
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
    * Number of Devices that have failed to install this book.
    *
    * @param int $val The failedDeviceCount
    *
    * @return EBookInstallSummary
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedUserCount
    * Number of Users that have 1 or more device that failed to install this book.
    *
    * @return int The failedUserCount
    */
    public function getFailedUserCount()
    {
        if (array_key_exists("failedUserCount", $this->_propDict)) {
            return $this->_propDict["failedUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedUserCount
    * Number of Users that have 1 or more device that failed to install this book.
    *
    * @param int $val The failedUserCount
    *
    * @return EBookInstallSummary
    */
    public function setFailedUserCount($val)
    {
        $this->_propDict["failedUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the installedDeviceCount
    * Number of Devices that have successfully installed this book.
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
    * Number of Devices that have successfully installed this book.
    *
    * @param int $val The installedDeviceCount
    *
    * @return EBookInstallSummary
    */
    public function setInstalledDeviceCount($val)
    {
        $this->_propDict["installedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the installedUserCount
    * Number of Users whose devices have all succeeded to install this book.
    *
    * @return int The installedUserCount
    */
    public function getInstalledUserCount()
    {
        if (array_key_exists("installedUserCount", $this->_propDict)) {
            return $this->_propDict["installedUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the installedUserCount
    * Number of Users whose devices have all succeeded to install this book.
    *
    * @param int $val The installedUserCount
    *
    * @return EBookInstallSummary
    */
    public function setInstalledUserCount($val)
    {
        $this->_propDict["installedUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notInstalledDeviceCount
    * Number of Devices that does not have this book installed.
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
    * Number of Devices that does not have this book installed.
    *
    * @param int $val The notInstalledDeviceCount
    *
    * @return EBookInstallSummary
    */
    public function setNotInstalledDeviceCount($val)
    {
        $this->_propDict["notInstalledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notInstalledUserCount
    * Number of Users that did not install this book.
    *
    * @return int The notInstalledUserCount
    */
    public function getNotInstalledUserCount()
    {
        if (array_key_exists("notInstalledUserCount", $this->_propDict)) {
            return $this->_propDict["notInstalledUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notInstalledUserCount
    * Number of Users that did not install this book.
    *
    * @param int $val The notInstalledUserCount
    *
    * @return EBookInstallSummary
    */
    public function setNotInstalledUserCount($val)
    {
        $this->_propDict["notInstalledUserCount"] = intval($val);
        return $this;
    }
    
}
