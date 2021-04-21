<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTunnelServer File
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
* MicrosoftTunnelServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTunnelServer extends Entity
{
    /**
    * Gets the displayName
    * The MicrosoftTunnelServer's display name
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
    * The MicrosoftTunnelServer's display name
    *
    * @param string $val The displayName
    *
    * @return MicrosoftTunnelServer
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastCheckinDateTime
    * When the MicrosoftTunnelServer last checked in
    *
    * @return \DateTime The lastCheckinDateTime
    */
    public function getLastCheckinDateTime()
    {
        if (array_key_exists("lastCheckinDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCheckinDateTime"], "\DateTime")) {
                return $this->_propDict["lastCheckinDateTime"];
            } else {
                $this->_propDict["lastCheckinDateTime"] = new \DateTime($this->_propDict["lastCheckinDateTime"]);
                return $this->_propDict["lastCheckinDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastCheckinDateTime
    * When the MicrosoftTunnelServer last checked in
    *
    * @param \DateTime $val The lastCheckinDateTime
    *
    * @return MicrosoftTunnelServer
    */
    public function setLastCheckinDateTime($val)
    {
        $this->_propDict["lastCheckinDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the tunnelServerHealthStatus
    * The MicrosoftTunnelServer's health status. Possible values are: unknown, healthy, unhealthy, warning, offline, upgradeInProgress, upgradeFailed.
    *
    * @return MicrosoftTunnelServerHealthStatus The tunnelServerHealthStatus
    */
    public function getTunnelServerHealthStatus()
    {
        if (array_key_exists("tunnelServerHealthStatus", $this->_propDict)) {
            if (is_a($this->_propDict["tunnelServerHealthStatus"], "\Beta\Microsoft\Graph\Model\MicrosoftTunnelServerHealthStatus")) {
                return $this->_propDict["tunnelServerHealthStatus"];
            } else {
                $this->_propDict["tunnelServerHealthStatus"] = new MicrosoftTunnelServerHealthStatus($this->_propDict["tunnelServerHealthStatus"]);
                return $this->_propDict["tunnelServerHealthStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tunnelServerHealthStatus
    * The MicrosoftTunnelServer's health status. Possible values are: unknown, healthy, unhealthy, warning, offline, upgradeInProgress, upgradeFailed.
    *
    * @param MicrosoftTunnelServerHealthStatus $val The tunnelServerHealthStatus
    *
    * @return MicrosoftTunnelServer
    */
    public function setTunnelServerHealthStatus($val)
    {
        $this->_propDict["tunnelServerHealthStatus"] = $val;
        return $this;
    }
    
}
