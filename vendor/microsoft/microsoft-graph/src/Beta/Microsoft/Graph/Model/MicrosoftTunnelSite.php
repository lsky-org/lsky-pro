<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTunnelSite File
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
* MicrosoftTunnelSite class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTunnelSite extends Entity
{
    /**
    * Gets the description
    * The MicrosoftTunnelSite's description
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
    * The MicrosoftTunnelSite's description
    *
    * @param string $val The description
    *
    * @return MicrosoftTunnelSite
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The MicrosoftTunnelSite's display name
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
    * The MicrosoftTunnelSite's display name
    *
    * @param string $val The displayName
    *
    * @return MicrosoftTunnelSite
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the publicAddress
    * The MicrosoftTunnelSite's public domain name or IP address
    *
    * @return string The publicAddress
    */
    public function getPublicAddress()
    {
        if (array_key_exists("publicAddress", $this->_propDict)) {
            return $this->_propDict["publicAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publicAddress
    * The MicrosoftTunnelSite's public domain name or IP address
    *
    * @param string $val The publicAddress
    *
    * @return MicrosoftTunnelSite
    */
    public function setPublicAddress($val)
    {
        $this->_propDict["publicAddress"] = $val;
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
    * @return MicrosoftTunnelSite
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftTunnelConfiguration
    * The MicrosoftTunnelConfiguration that has been applied to this MicrosoftTunnelSite
    *
    * @return MicrosoftTunnelConfiguration The microsoftTunnelConfiguration
    */
    public function getMicrosoftTunnelConfiguration()
    {
        if (array_key_exists("microsoftTunnelConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftTunnelConfiguration"], "\Beta\Microsoft\Graph\Model\MicrosoftTunnelConfiguration")) {
                return $this->_propDict["microsoftTunnelConfiguration"];
            } else {
                $this->_propDict["microsoftTunnelConfiguration"] = new MicrosoftTunnelConfiguration($this->_propDict["microsoftTunnelConfiguration"]);
                return $this->_propDict["microsoftTunnelConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftTunnelConfiguration
    * The MicrosoftTunnelConfiguration that has been applied to this MicrosoftTunnelSite
    *
    * @param MicrosoftTunnelConfiguration $val The microsoftTunnelConfiguration
    *
    * @return MicrosoftTunnelSite
    */
    public function setMicrosoftTunnelConfiguration($val)
    {
        $this->_propDict["microsoftTunnelConfiguration"] = $val;
        return $this;
    }
    

     /** 
     * Gets the microsoftTunnelServers
    * A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
     *
     * @return array The microsoftTunnelServers
     */
    public function getMicrosoftTunnelServers()
    {
        if (array_key_exists("microsoftTunnelServers", $this->_propDict)) {
           return $this->_propDict["microsoftTunnelServers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the microsoftTunnelServers
    * A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
    *
    * @param MicrosoftTunnelServer $val The microsoftTunnelServers
    *
    * @return MicrosoftTunnelSite
    */
    public function setMicrosoftTunnelServers($val)
    {
		$this->_propDict["microsoftTunnelServers"] = $val;
        return $this;
    }
    
}
