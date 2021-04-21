<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceExchangeAccessStateSummary File
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
* DeviceExchangeAccessStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceExchangeAccessStateSummary extends Entity
{
    /**
    * Gets the allowedDeviceCount
    * Total count of devices with Exchange Access State: Allowed.
    *
    * @return int The allowedDeviceCount
    */
    public function getAllowedDeviceCount()
    {
        if (array_key_exists("allowedDeviceCount", $this->_propDict)) {
            return $this->_propDict["allowedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedDeviceCount
    * Total count of devices with Exchange Access State: Allowed.
    *
    * @param int $val The value of the allowedDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setAllowedDeviceCount($val)
    {
        $this->_propDict["allowedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the blockedDeviceCount
    * Total count of devices with Exchange Access State: Blocked.
    *
    * @return int The blockedDeviceCount
    */
    public function getBlockedDeviceCount()
    {
        if (array_key_exists("blockedDeviceCount", $this->_propDict)) {
            return $this->_propDict["blockedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockedDeviceCount
    * Total count of devices with Exchange Access State: Blocked.
    *
    * @param int $val The value of the blockedDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setBlockedDeviceCount($val)
    {
        $this->_propDict["blockedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the quarantinedDeviceCount
    * Total count of devices with Exchange Access State: Quarantined.
    *
    * @return int The quarantinedDeviceCount
    */
    public function getQuarantinedDeviceCount()
    {
        if (array_key_exists("quarantinedDeviceCount", $this->_propDict)) {
            return $this->_propDict["quarantinedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the quarantinedDeviceCount
    * Total count of devices with Exchange Access State: Quarantined.
    *
    * @param int $val The value of the quarantinedDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setQuarantinedDeviceCount($val)
    {
        $this->_propDict["quarantinedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the unavailableDeviceCount
    * Total count of devices for which no Exchange Access State could be found.
    *
    * @return int The unavailableDeviceCount
    */
    public function getUnavailableDeviceCount()
    {
        if (array_key_exists("unavailableDeviceCount", $this->_propDict)) {
            return $this->_propDict["unavailableDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unavailableDeviceCount
    * Total count of devices for which no Exchange Access State could be found.
    *
    * @param int $val The value of the unavailableDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setUnavailableDeviceCount($val)
    {
        $this->_propDict["unavailableDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the unknownDeviceCount
    * Total count of devices with Exchange Access State: Unknown.
    *
    * @return int The unknownDeviceCount
    */
    public function getUnknownDeviceCount()
    {
        if (array_key_exists("unknownDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unknownDeviceCount
    * Total count of devices with Exchange Access State: Unknown.
    *
    * @param int $val The value of the unknownDeviceCount
    *
    * @return DeviceExchangeAccessStateSummary
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = $val;
        return $this;
    }
}
