<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementDomainJoinConnector File
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
* DeviceManagementDomainJoinConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementDomainJoinConnector extends Entity
{
    /**
    * Gets the displayName
    * The connector display name.
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
    * The connector display name.
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementDomainJoinConnector
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastConnectionDateTime
    * Last time connector contacted Intune.
    *
    * @return \DateTime The lastConnectionDateTime
    */
    public function getLastConnectionDateTime()
    {
        if (array_key_exists("lastConnectionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastConnectionDateTime"], "\DateTime")) {
                return $this->_propDict["lastConnectionDateTime"];
            } else {
                $this->_propDict["lastConnectionDateTime"] = new \DateTime($this->_propDict["lastConnectionDateTime"]);
                return $this->_propDict["lastConnectionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastConnectionDateTime
    * Last time connector contacted Intune.
    *
    * @param \DateTime $val The lastConnectionDateTime
    *
    * @return DeviceManagementDomainJoinConnector
    */
    public function setLastConnectionDateTime($val)
    {
        $this->_propDict["lastConnectionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The connector state. Possible values are: active, error, inactive.
    *
    * @return DeviceManagementDomainJoinConnectorState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\DeviceManagementDomainJoinConnectorState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new DeviceManagementDomainJoinConnectorState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * The connector state. Possible values are: active, error, inactive.
    *
    * @param DeviceManagementDomainJoinConnectorState $val The state
    *
    * @return DeviceManagementDomainJoinConnector
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * The version of the connector.
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
    * The version of the connector.
    *
    * @param string $val The version
    *
    * @return DeviceManagementDomainJoinConnector
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}
