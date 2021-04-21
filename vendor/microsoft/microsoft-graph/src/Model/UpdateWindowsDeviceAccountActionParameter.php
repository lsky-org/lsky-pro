<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UpdateWindowsDeviceAccountActionParameter File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* UpdateWindowsDeviceAccountActionParameter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UpdateWindowsDeviceAccountActionParameter extends Entity
{
    /**
    * Gets the calendarSyncEnabled
    * Not yet documented
    *
    * @return bool The calendarSyncEnabled
    */
    public function getCalendarSyncEnabled()
    {
        if (array_key_exists("calendarSyncEnabled", $this->_propDict)) {
            return $this->_propDict["calendarSyncEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the calendarSyncEnabled
    * Not yet documented
    *
    * @param bool $val The value of the calendarSyncEnabled
    *
    * @return UpdateWindowsDeviceAccountActionParameter
    */
    public function setCalendarSyncEnabled($val)
    {
        $this->_propDict["calendarSyncEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the deviceAccount
    * Not yet documented
    *
    * @return WindowsDeviceAccount The deviceAccount
    */
    public function getDeviceAccount()
    {
        if (array_key_exists("deviceAccount", $this->_propDict)) {
            if (is_a($this->_propDict["deviceAccount"], "\Microsoft\Graph\Model\WindowsDeviceAccount")) {
                return $this->_propDict["deviceAccount"];
            } else {
                $this->_propDict["deviceAccount"] = new WindowsDeviceAccount($this->_propDict["deviceAccount"]);
                return $this->_propDict["deviceAccount"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceAccount
    * Not yet documented
    *
    * @param WindowsDeviceAccount $val The value to assign to the deviceAccount
    *
    * @return UpdateWindowsDeviceAccountActionParameter The UpdateWindowsDeviceAccountActionParameter
    */
    public function setDeviceAccount($val)
    {
        $this->_propDict["deviceAccount"] = $val;
         return $this;
    }
    /**
    * Gets the deviceAccountEmail
    * Not yet documented
    *
    * @return string The deviceAccountEmail
    */
    public function getDeviceAccountEmail()
    {
        if (array_key_exists("deviceAccountEmail", $this->_propDict)) {
            return $this->_propDict["deviceAccountEmail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceAccountEmail
    * Not yet documented
    *
    * @param string $val The value of the deviceAccountEmail
    *
    * @return UpdateWindowsDeviceAccountActionParameter
    */
    public function setDeviceAccountEmail($val)
    {
        $this->_propDict["deviceAccountEmail"] = $val;
        return $this;
    }
    /**
    * Gets the exchangeServer
    * Not yet documented
    *
    * @return string The exchangeServer
    */
    public function getExchangeServer()
    {
        if (array_key_exists("exchangeServer", $this->_propDict)) {
            return $this->_propDict["exchangeServer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exchangeServer
    * Not yet documented
    *
    * @param string $val The value of the exchangeServer
    *
    * @return UpdateWindowsDeviceAccountActionParameter
    */
    public function setExchangeServer($val)
    {
        $this->_propDict["exchangeServer"] = $val;
        return $this;
    }
    /**
    * Gets the passwordRotationEnabled
    * Not yet documented
    *
    * @return bool The passwordRotationEnabled
    */
    public function getPasswordRotationEnabled()
    {
        if (array_key_exists("passwordRotationEnabled", $this->_propDict)) {
            return $this->_propDict["passwordRotationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordRotationEnabled
    * Not yet documented
    *
    * @param bool $val The value of the passwordRotationEnabled
    *
    * @return UpdateWindowsDeviceAccountActionParameter
    */
    public function setPasswordRotationEnabled($val)
    {
        $this->_propDict["passwordRotationEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the sessionInitiationProtocalAddress
    * Not yet documented
    *
    * @return string The sessionInitiationProtocalAddress
    */
    public function getSessionInitiationProtocalAddress()
    {
        if (array_key_exists("sessionInitiationProtocalAddress", $this->_propDict)) {
            return $this->_propDict["sessionInitiationProtocalAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sessionInitiationProtocalAddress
    * Not yet documented
    *
    * @param string $val The value of the sessionInitiationProtocalAddress
    *
    * @return UpdateWindowsDeviceAccountActionParameter
    */
    public function setSessionInitiationProtocalAddress($val)
    {
        $this->_propDict["sessionInitiationProtocalAddress"] = $val;
        return $this;
    }
}
