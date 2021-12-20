<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceDetail File
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
* DeviceDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceDetail extends Entity
{
    /**
    * Gets the browser
    * Indicates the browser information of the used for signing-in.
    *
    * @return string The browser
    */
    public function getBrowser()
    {
        if (array_key_exists("browser", $this->_propDict)) {
            return $this->_propDict["browser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the browser
    * Indicates the browser information of the used for signing-in.
    *
    * @param string $val The value of the browser
    *
    * @return DeviceDetail
    */
    public function setBrowser($val)
    {
        $this->_propDict["browser"] = $val;
        return $this;
    }
    /**
    * Gets the browserId
    *
    * @return string The browserId
    */
    public function getBrowserId()
    {
        if (array_key_exists("browserId", $this->_propDict)) {
            return $this->_propDict["browserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the browserId
    *
    * @param string $val The value of the browserId
    *
    * @return DeviceDetail
    */
    public function setBrowserId($val)
    {
        $this->_propDict["browserId"] = $val;
        return $this;
    }
    /**
    * Gets the deviceId
    * Refers to the UniqueID of the device used for signing-in.
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * Refers to the UniqueID of the device used for signing-in.
    *
    * @param string $val The value of the deviceId
    *
    * @return DeviceDetail
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Refers to the name of the device used for signing-in.
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
    * Refers to the name of the device used for signing-in.
    *
    * @param string $val The value of the displayName
    *
    * @return DeviceDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the isCompliant
    * Indicates whether the device is compliant or not.
    *
    * @return bool The isCompliant
    */
    public function getIsCompliant()
    {
        if (array_key_exists("isCompliant", $this->_propDict)) {
            return $this->_propDict["isCompliant"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCompliant
    * Indicates whether the device is compliant or not.
    *
    * @param bool $val The value of the isCompliant
    *
    * @return DeviceDetail
    */
    public function setIsCompliant($val)
    {
        $this->_propDict["isCompliant"] = $val;
        return $this;
    }
    /**
    * Gets the isManaged
    * Indicates if the device is managed or not.
    *
    * @return bool The isManaged
    */
    public function getIsManaged()
    {
        if (array_key_exists("isManaged", $this->_propDict)) {
            return $this->_propDict["isManaged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isManaged
    * Indicates if the device is managed or not.
    *
    * @param bool $val The value of the isManaged
    *
    * @return DeviceDetail
    */
    public function setIsManaged($val)
    {
        $this->_propDict["isManaged"] = $val;
        return $this;
    }
    /**
    * Gets the operatingSystem
    * Indicates the OS name and version used for signing-in.
    *
    * @return string The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystem
    * Indicates the OS name and version used for signing-in.
    *
    * @param string $val The value of the operatingSystem
    *
    * @return DeviceDetail
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }
    /**
    * Gets the trustType
    * Indicates information on whether the signed-in device is Workplace Joined, AzureAD Joined, Domain Joined.
    *
    * @return string The trustType
    */
    public function getTrustType()
    {
        if (array_key_exists("trustType", $this->_propDict)) {
            return $this->_propDict["trustType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trustType
    * Indicates information on whether the signed-in device is Workplace Joined, AzureAD Joined, Domain Joined.
    *
    * @param string $val The value of the trustType
    *
    * @return DeviceDetail
    */
    public function setTrustType($val)
    {
        $this->_propDict["trustType"] = $val;
        return $this;
    }
}
