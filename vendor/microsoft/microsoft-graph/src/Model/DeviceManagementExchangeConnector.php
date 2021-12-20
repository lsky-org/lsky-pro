<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExchangeConnector File
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
* DeviceManagementExchangeConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementExchangeConnector extends Entity
{
    /**
    * Gets the connectorServerName
    * The name of the server hosting the Exchange Connector.
    *
    * @return string The connectorServerName
    */
    public function getConnectorServerName()
    {
        if (array_key_exists("connectorServerName", $this->_propDict)) {
            return $this->_propDict["connectorServerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectorServerName
    * The name of the server hosting the Exchange Connector.
    *
    * @param string $val The connectorServerName
    *
    * @return DeviceManagementExchangeConnector
    */
    public function setConnectorServerName($val)
    {
        $this->_propDict["connectorServerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeAlias
    * An alias assigned to the Exchange server
    *
    * @return string The exchangeAlias
    */
    public function getExchangeAlias()
    {
        if (array_key_exists("exchangeAlias", $this->_propDict)) {
            return $this->_propDict["exchangeAlias"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeAlias
    * An alias assigned to the Exchange server
    *
    * @param string $val The exchangeAlias
    *
    * @return DeviceManagementExchangeConnector
    */
    public function setExchangeAlias($val)
    {
        $this->_propDict["exchangeAlias"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeConnectorType
    * The type of Exchange Connector Configured. Possible values are: onPremises, hosted, serviceToService, dedicated.
    *
    * @return DeviceManagementExchangeConnectorType The exchangeConnectorType
    */
    public function getExchangeConnectorType()
    {
        if (array_key_exists("exchangeConnectorType", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeConnectorType"], "\Microsoft\Graph\Model\DeviceManagementExchangeConnectorType")) {
                return $this->_propDict["exchangeConnectorType"];
            } else {
                $this->_propDict["exchangeConnectorType"] = new DeviceManagementExchangeConnectorType($this->_propDict["exchangeConnectorType"]);
                return $this->_propDict["exchangeConnectorType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeConnectorType
    * The type of Exchange Connector Configured. Possible values are: onPremises, hosted, serviceToService, dedicated.
    *
    * @param DeviceManagementExchangeConnectorType $val The exchangeConnectorType
    *
    * @return DeviceManagementExchangeConnector
    */
    public function setExchangeConnectorType($val)
    {
        $this->_propDict["exchangeConnectorType"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeOrganization
    * Exchange Organization to the Exchange server
    *
    * @return string The exchangeOrganization
    */
    public function getExchangeOrganization()
    {
        if (array_key_exists("exchangeOrganization", $this->_propDict)) {
            return $this->_propDict["exchangeOrganization"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the exchangeOrganization
    * Exchange Organization to the Exchange server
    *
    * @param string $val The exchangeOrganization
    *
    * @return DeviceManagementExchangeConnector
    */
    public function setExchangeOrganization($val)
    {
        $this->_propDict["exchangeOrganization"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    * Last sync time for the Exchange Connector
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
    * Last sync time for the Exchange Connector
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return DeviceManagementExchangeConnector
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the primarySmtpAddress
    * Email address used to configure the Service To Service Exchange Connector.
    *
    * @return string The primarySmtpAddress
    */
    public function getPrimarySmtpAddress()
    {
        if (array_key_exists("primarySmtpAddress", $this->_propDict)) {
            return $this->_propDict["primarySmtpAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the primarySmtpAddress
    * Email address used to configure the Service To Service Exchange Connector.
    *
    * @param string $val The primarySmtpAddress
    *
    * @return DeviceManagementExchangeConnector
    */
    public function setPrimarySmtpAddress($val)
    {
        $this->_propDict["primarySmtpAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the serverName
    * The name of the Exchange server.
    *
    * @return string The serverName
    */
    public function getServerName()
    {
        if (array_key_exists("serverName", $this->_propDict)) {
            return $this->_propDict["serverName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serverName
    * The name of the Exchange server.
    *
    * @param string $val The serverName
    *
    * @return DeviceManagementExchangeConnector
    */
    public function setServerName($val)
    {
        $this->_propDict["serverName"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Exchange Connector Status. Possible values are: none, connectionPending, connected, disconnected.
    *
    * @return DeviceManagementExchangeConnectorStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\DeviceManagementExchangeConnectorStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DeviceManagementExchangeConnectorStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Exchange Connector Status. Possible values are: none, connectionPending, connected, disconnected.
    *
    * @param DeviceManagementExchangeConnectorStatus $val The status
    *
    * @return DeviceManagementExchangeConnector
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * The version of the ExchangeConnectorAgent
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
    * The version of the ExchangeConnectorAgent
    *
    * @param string $val The version
    *
    * @return DeviceManagementExchangeConnector
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}
