<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectedApp File
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
* DetectedApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DetectedApp extends Entity
{
    /**
    * Gets the deviceCount
    * The number of devices that have installed this application
    *
    * @return int The deviceCount
    */
    public function getDeviceCount()
    {
        if (array_key_exists("deviceCount", $this->_propDict)) {
            return $this->_propDict["deviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceCount
    * The number of devices that have installed this application
    *
    * @param int $val The deviceCount
    *
    * @return DetectedApp
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the discovered application. Read-only
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Name of the discovered application. Read-only
    *
    * @param string $val The displayName
    *
    * @return DetectedApp
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the sizeInByte
    * Discovered application size in bytes. Read-only
    *
    * @return int The sizeInByte
    */
    public function getSizeInByte()
    {
        if (array_key_exists("sizeInByte", $this->_propDict)) {
            return $this->_propDict["sizeInByte"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sizeInByte
    * Discovered application size in bytes. Read-only
    *
    * @param int $val The sizeInByte
    *
    * @return DetectedApp
    */
    public function setSizeInByte($val)
    {
        $this->_propDict["sizeInByte"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the version
    * Version of the discovered application. Read-only
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * Version of the discovered application. Read-only
    *
    * @param string $val The version
    *
    * @return DetectedApp
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDevices
    * The devices that have the discovered application installed
     *
     * @return array The managedDevices
     */
    public function getManagedDevices()
    {
        if (array_key_exists("managedDevices", $this->_propDict)) {
           return $this->_propDict["managedDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDevices
    * The devices that have the discovered application installed
    *
    * @param ManagedDevice $val The managedDevices
    *
    * @return DetectedApp
    */
    public function setManagedDevices($val)
    {
		$this->_propDict["managedDevices"] = $val;
        return $this;
    }
    
}
