<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows81VpnConfiguration File
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
* Windows81VpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows81VpnConfiguration extends WindowsVpnConfiguration
{
    /**
    * Gets the applyOnlyToWindows81
    * Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
    *
    * @return bool The applyOnlyToWindows81
    */
    public function getApplyOnlyToWindows81()
    {
        if (array_key_exists("applyOnlyToWindows81", $this->_propDict)) {
            return $this->_propDict["applyOnlyToWindows81"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applyOnlyToWindows81
    * Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
    *
    * @param bool $val The applyOnlyToWindows81
    *
    * @return Windows81VpnConfiguration
    */
    public function setApplyOnlyToWindows81($val)
    {
        $this->_propDict["applyOnlyToWindows81"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectionType
    * Connection type. Possible values are: pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn.
    *
    * @return WindowsVpnConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "\Beta\Microsoft\Graph\Model\WindowsVpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new WindowsVpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    * Connection type. Possible values are: pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn.
    *
    * @param WindowsVpnConnectionType $val The connectionType
    *
    * @return Windows81VpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableSplitTunneling
    * Enable split tunneling for the VPN.
    *
    * @return bool The enableSplitTunneling
    */
    public function getEnableSplitTunneling()
    {
        if (array_key_exists("enableSplitTunneling", $this->_propDict)) {
            return $this->_propDict["enableSplitTunneling"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSplitTunneling
    * Enable split tunneling for the VPN.
    *
    * @param bool $val The enableSplitTunneling
    *
    * @return Windows81VpnConfiguration
    */
    public function setEnableSplitTunneling($val)
    {
        $this->_propDict["enableSplitTunneling"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the loginGroupOrDomain
    * Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
    *
    * @return string The loginGroupOrDomain
    */
    public function getLoginGroupOrDomain()
    {
        if (array_key_exists("loginGroupOrDomain", $this->_propDict)) {
            return $this->_propDict["loginGroupOrDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loginGroupOrDomain
    * Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
    *
    * @param string $val The loginGroupOrDomain
    *
    * @return Windows81VpnConfiguration
    */
    public function setLoginGroupOrDomain($val)
    {
        $this->_propDict["loginGroupOrDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyServer
    * Proxy Server.
    *
    * @return Windows81VpnProxyServer The proxyServer
    */
    public function getProxyServer()
    {
        if (array_key_exists("proxyServer", $this->_propDict)) {
            if (is_a($this->_propDict["proxyServer"], "\Beta\Microsoft\Graph\Model\Windows81VpnProxyServer")) {
                return $this->_propDict["proxyServer"];
            } else {
                $this->_propDict["proxyServer"] = new Windows81VpnProxyServer($this->_propDict["proxyServer"]);
                return $this->_propDict["proxyServer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxyServer
    * Proxy Server.
    *
    * @param Windows81VpnProxyServer $val The proxyServer
    *
    * @return Windows81VpnConfiguration
    */
    public function setProxyServer($val)
    {
        $this->_propDict["proxyServer"] = $val;
        return $this;
    }
    
}
