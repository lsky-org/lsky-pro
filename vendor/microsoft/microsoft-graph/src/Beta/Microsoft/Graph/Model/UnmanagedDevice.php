<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnmanagedDevice File
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
* UnmanagedDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnmanagedDevice extends Entity
{
    /**
    * Gets the deviceName
    * Device name.
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * Device name.
    *
    * @param string $val The value of the deviceName
    *
    * @return UnmanagedDevice
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    /**
    * Gets the domain
    * Domain.
    *
    * @return string The domain
    */
    public function getDomain()
    {
        if (array_key_exists("domain", $this->_propDict)) {
            return $this->_propDict["domain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domain
    * Domain.
    *
    * @param string $val The value of the domain
    *
    * @return UnmanagedDevice
    */
    public function setDomain($val)
    {
        $this->_propDict["domain"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    * IP address.
    *
    * @return string The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * IP address.
    *
    * @param string $val The value of the ipAddress
    *
    * @return UnmanagedDevice
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the lastLoggedOnUser
    * Last logged on user.
    *
    * @return string The lastLoggedOnUser
    */
    public function getLastLoggedOnUser()
    {
        if (array_key_exists("lastLoggedOnUser", $this->_propDict)) {
            return $this->_propDict["lastLoggedOnUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastLoggedOnUser
    * Last logged on user.
    *
    * @param string $val The value of the lastLoggedOnUser
    *
    * @return UnmanagedDevice
    */
    public function setLastLoggedOnUser($val)
    {
        $this->_propDict["lastLoggedOnUser"] = $val;
        return $this;
    }

    /**
    * Gets the lastSeenDateTime
    * Last seen date and time.
    *
    * @return \DateTime The lastSeenDateTime
    */
    public function getLastSeenDateTime()
    {
        if (array_key_exists("lastSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSeenDateTime"], "\DateTime")) {
                return $this->_propDict["lastSeenDateTime"];
            } else {
                $this->_propDict["lastSeenDateTime"] = new \DateTime($this->_propDict["lastSeenDateTime"]);
                return $this->_propDict["lastSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSeenDateTime
    * Last seen date and time.
    *
    * @param \DateTime $val The value to assign to the lastSeenDateTime
    *
    * @return UnmanagedDevice The UnmanagedDevice
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the location
    * Location.
    *
    * @return string The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            return $this->_propDict["location"];
        } else {
            return null;
        }
    }

    /**
    * Sets the location
    * Location.
    *
    * @param string $val The value of the location
    *
    * @return UnmanagedDevice
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    /**
    * Gets the macAddress
    * MAC address.
    *
    * @return string The macAddress
    */
    public function getMacAddress()
    {
        if (array_key_exists("macAddress", $this->_propDict)) {
            return $this->_propDict["macAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the macAddress
    * MAC address.
    *
    * @param string $val The value of the macAddress
    *
    * @return UnmanagedDevice
    */
    public function setMacAddress($val)
    {
        $this->_propDict["macAddress"] = $val;
        return $this;
    }
    /**
    * Gets the manufacturer
    * Manufacturer.
    *
    * @return string The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the manufacturer
    * Manufacturer.
    *
    * @param string $val The value of the manufacturer
    *
    * @return UnmanagedDevice
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    /**
    * Gets the model
    * Model.
    *
    * @return string The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }

    /**
    * Sets the model
    * Model.
    *
    * @param string $val The value of the model
    *
    * @return UnmanagedDevice
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    /**
    * Gets the os
    * Operating system.
    *
    * @return string The os
    */
    public function getOs()
    {
        if (array_key_exists("os", $this->_propDict)) {
            return $this->_propDict["os"];
        } else {
            return null;
        }
    }

    /**
    * Sets the os
    * Operating system.
    *
    * @param string $val The value of the os
    *
    * @return UnmanagedDevice
    */
    public function setOs($val)
    {
        $this->_propDict["os"] = $val;
        return $this;
    }
    /**
    * Gets the osVersion
    * Operating system version.
    *
    * @return string The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osVersion
    * Operating system version.
    *
    * @param string $val The value of the osVersion
    *
    * @return UnmanagedDevice
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
}
