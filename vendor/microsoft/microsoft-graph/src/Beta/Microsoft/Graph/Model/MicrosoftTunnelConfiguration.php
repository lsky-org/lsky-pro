<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTunnelConfiguration File
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
* MicrosoftTunnelConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTunnelConfiguration extends Entity
{

     /** 
     * Gets the advancedSettings
    * Additional settings that may be applied to the server
     *
     * @return array The advancedSettings
     */
    public function getAdvancedSettings()
    {
        if (array_key_exists("advancedSettings", $this->_propDict)) {
           return $this->_propDict["advancedSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the advancedSettings
    * Additional settings that may be applied to the server
    *
    * @param KeyValuePair $val The advancedSettings
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setAdvancedSettings($val)
    {
		$this->_propDict["advancedSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultDomainSuffix
    * The Default Domain appendix that will be used by the clients
    *
    * @return string The defaultDomainSuffix
    */
    public function getDefaultDomainSuffix()
    {
        if (array_key_exists("defaultDomainSuffix", $this->_propDict)) {
            return $this->_propDict["defaultDomainSuffix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultDomainSuffix
    * The Default Domain appendix that will be used by the clients
    *
    * @param string $val The defaultDomainSuffix
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setDefaultDomainSuffix($val)
    {
        $this->_propDict["defaultDomainSuffix"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The MicrosoftTunnelConfiguration's description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The MicrosoftTunnelConfiguration's description
    *
    * @param string $val The description
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The MicrosoftTunnelConfiguration's display name
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
    * The MicrosoftTunnelConfiguration's display name
    *
    * @param string $val The displayName
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the dnsServers
    * The DNS servers that will be used by the clients
    *
    * @return string The dnsServers
    */
    public function getDnsServers()
    {
        if (array_key_exists("dnsServers", $this->_propDict)) {
            return $this->_propDict["dnsServers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dnsServers
    * The DNS servers that will be used by the clients
    *
    * @param string $val The dnsServers
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setDnsServers($val)
    {
        $this->_propDict["dnsServers"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdateDateTime
    * When the MicrosoftTunnelConfiguration was last updated
    *
    * @return \DateTime The lastUpdateDateTime
    */
    public function getLastUpdateDateTime()
    {
        if (array_key_exists("lastUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdateDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdateDateTime"];
            } else {
                $this->_propDict["lastUpdateDateTime"] = new \DateTime($this->_propDict["lastUpdateDateTime"]);
                return $this->_propDict["lastUpdateDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdateDateTime
    * When the MicrosoftTunnelConfiguration was last updated
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the listenPort
    * The port that both TCP and UPD will listen over on the server
    *
    * @return int The listenPort
    */
    public function getListenPort()
    {
        if (array_key_exists("listenPort", $this->_propDict)) {
            return $this->_propDict["listenPort"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the listenPort
    * The port that both TCP and UPD will listen over on the server
    *
    * @param int $val The listenPort
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setListenPort($val)
    {
        $this->_propDict["listenPort"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the network
    * The subnet that will be used to allocate virtual address for the clients
    *
    * @return string The network
    */
    public function getNetwork()
    {
        if (array_key_exists("network", $this->_propDict)) {
            return $this->_propDict["network"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the network
    * The subnet that will be used to allocate virtual address for the clients
    *
    * @param string $val The network
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setNetwork($val)
    {
        $this->_propDict["network"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the routesExclude
    * Subsets of the routes that will not be routed by the server
    *
    * @return string The routesExclude
    */
    public function getRoutesExclude()
    {
        if (array_key_exists("routesExclude", $this->_propDict)) {
            return $this->_propDict["routesExclude"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the routesExclude
    * Subsets of the routes that will not be routed by the server
    *
    * @param string $val The routesExclude
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setRoutesExclude($val)
    {
        $this->_propDict["routesExclude"] = $val;
        return $this;
    }
    
    /**
    * Gets the routesInclude
    * The routs that will be routed by the server
    *
    * @return string The routesInclude
    */
    public function getRoutesInclude()
    {
        if (array_key_exists("routesInclude", $this->_propDict)) {
            return $this->_propDict["routesInclude"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the routesInclude
    * The routs that will be routed by the server
    *
    * @param string $val The routesInclude
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setRoutesInclude($val)
    {
        $this->_propDict["routesInclude"] = $val;
        return $this;
    }
    
    /**
    * Gets the splitDNS
    * The domains that will be resolved using the provided dns servers
    *
    * @return string The splitDNS
    */
    public function getSplitDNS()
    {
        if (array_key_exists("splitDNS", $this->_propDict)) {
            return $this->_propDict["splitDNS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the splitDNS
    * The domains that will be resolved using the provided dns servers
    *
    * @param string $val The splitDNS
    *
    * @return MicrosoftTunnelConfiguration
    */
    public function setSplitDNS($val)
    {
        $this->_propDict["splitDNS"] = $val;
        return $this;
    }
    
}
