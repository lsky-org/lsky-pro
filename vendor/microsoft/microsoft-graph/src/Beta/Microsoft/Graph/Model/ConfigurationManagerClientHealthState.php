<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerClientHealthState File
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
* ConfigurationManagerClientHealthState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigurationManagerClientHealthState extends Entity
{
    /**
    * Gets the errorCode
    * Error code for failed state.
    *
    * @return int The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCode
    * Error code for failed state.
    *
    * @param int $val The value of the errorCode
    *
    * @return ConfigurationManagerClientHealthState
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }

    /**
    * Gets the lastSyncDateTime
    * Datetime for last sync with configuration manager management point.
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSyncDateTime
    * Datetime for last sync with configuration manager management point.
    *
    * @param \DateTime $val The value to assign to the lastSyncDateTime
    *
    * @return ConfigurationManagerClientHealthState The ConfigurationManagerClientHealthState
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Current configuration manager client state. Possible values are: unknown, installed, healthy, installFailed, updateFailed, communicationError.
    *
    * @return ConfigurationManagerClientState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\ConfigurationManagerClientState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ConfigurationManagerClientState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Current configuration manager client state. Possible values are: unknown, installed, healthy, installFailed, updateFailed, communicationError.
    *
    * @param ConfigurationManagerClientState $val The value to assign to the state
    *
    * @return ConfigurationManagerClientHealthState The ConfigurationManagerClientHealthState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
