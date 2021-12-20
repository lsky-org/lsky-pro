<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsWifiConfiguration File
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
* WindowsWifiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsWifiConfiguration extends DeviceConfiguration
{
    /**
    * Gets the connectAutomatically
    * Specify whether the wifi connection should connect automatically when in range.
    *
    * @return bool The connectAutomatically
    */
    public function getConnectAutomatically()
    {
        if (array_key_exists("connectAutomatically", $this->_propDict)) {
            return $this->_propDict["connectAutomatically"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectAutomatically
    * Specify whether the wifi connection should connect automatically when in range.
    *
    * @param bool $val The connectAutomatically
    *
    * @return WindowsWifiConfiguration
    */
    public function setConnectAutomatically($val)
    {
        $this->_propDict["connectAutomatically"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectToPreferredNetwork
    * Specify whether the wifi connection should connect to more preferred networks when already connected to this one.  Requires ConnectAutomatically to be true.
    *
    * @return bool The connectToPreferredNetwork
    */
    public function getConnectToPreferredNetwork()
    {
        if (array_key_exists("connectToPreferredNetwork", $this->_propDict)) {
            return $this->_propDict["connectToPreferredNetwork"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectToPreferredNetwork
    * Specify whether the wifi connection should connect to more preferred networks when already connected to this one.  Requires ConnectAutomatically to be true.
    *
    * @param bool $val The connectToPreferredNetwork
    *
    * @return WindowsWifiConfiguration
    */
    public function setConnectToPreferredNetwork($val)
    {
        $this->_propDict["connectToPreferredNetwork"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectWhenNetworkNameIsHidden
    * Specify whether the wifi connection should connect automatically even when the SSID is not broadcasting.
    *
    * @return bool The connectWhenNetworkNameIsHidden
    */
    public function getConnectWhenNetworkNameIsHidden()
    {
        if (array_key_exists("connectWhenNetworkNameIsHidden", $this->_propDict)) {
            return $this->_propDict["connectWhenNetworkNameIsHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectWhenNetworkNameIsHidden
    * Specify whether the wifi connection should connect automatically even when the SSID is not broadcasting.
    *
    * @param bool $val The connectWhenNetworkNameIsHidden
    *
    * @return WindowsWifiConfiguration
    */
    public function setConnectWhenNetworkNameIsHidden($val)
    {
        $this->_propDict["connectWhenNetworkNameIsHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the forceFIPSCompliance
    * Specify whether to force FIPS compliance.
    *
    * @return bool The forceFIPSCompliance
    */
    public function getForceFIPSCompliance()
    {
        if (array_key_exists("forceFIPSCompliance", $this->_propDict)) {
            return $this->_propDict["forceFIPSCompliance"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the forceFIPSCompliance
    * Specify whether to force FIPS compliance.
    *
    * @param bool $val The forceFIPSCompliance
    *
    * @return WindowsWifiConfiguration
    */
    public function setForceFIPSCompliance($val)
    {
        $this->_propDict["forceFIPSCompliance"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the meteredConnectionLimit
    * Specify the metered connection limit type for the wifi connection. Possible values are: unrestricted, fixed, variable.
    *
    * @return MeteredConnectionLimitType The meteredConnectionLimit
    */
    public function getMeteredConnectionLimit()
    {
        if (array_key_exists("meteredConnectionLimit", $this->_propDict)) {
            if (is_a($this->_propDict["meteredConnectionLimit"], "\Beta\Microsoft\Graph\Model\MeteredConnectionLimitType")) {
                return $this->_propDict["meteredConnectionLimit"];
            } else {
                $this->_propDict["meteredConnectionLimit"] = new MeteredConnectionLimitType($this->_propDict["meteredConnectionLimit"]);
                return $this->_propDict["meteredConnectionLimit"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meteredConnectionLimit
    * Specify the metered connection limit type for the wifi connection. Possible values are: unrestricted, fixed, variable.
    *
    * @param MeteredConnectionLimitType $val The meteredConnectionLimit
    *
    * @return WindowsWifiConfiguration
    */
    public function setMeteredConnectionLimit($val)
    {
        $this->_propDict["meteredConnectionLimit"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkName
    * Specify the network configuration name.
    *
    * @return string The networkName
    */
    public function getNetworkName()
    {
        if (array_key_exists("networkName", $this->_propDict)) {
            return $this->_propDict["networkName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkName
    * Specify the network configuration name.
    *
    * @param string $val The networkName
    *
    * @return WindowsWifiConfiguration
    */
    public function setNetworkName($val)
    {
        $this->_propDict["networkName"] = $val;
        return $this;
    }
    
    /**
    * Gets the preSharedKey
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @return string The preSharedKey
    */
    public function getPreSharedKey()
    {
        if (array_key_exists("preSharedKey", $this->_propDict)) {
            return $this->_propDict["preSharedKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preSharedKey
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @param string $val The preSharedKey
    *
    * @return WindowsWifiConfiguration
    */
    public function setPreSharedKey($val)
    {
        $this->_propDict["preSharedKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyAutomaticConfigurationUrl
    * Specify the URL for the proxy server configuration script.
    *
    * @return string The proxyAutomaticConfigurationUrl
    */
    public function getProxyAutomaticConfigurationUrl()
    {
        if (array_key_exists("proxyAutomaticConfigurationUrl", $this->_propDict)) {
            return $this->_propDict["proxyAutomaticConfigurationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyAutomaticConfigurationUrl
    * Specify the URL for the proxy server configuration script.
    *
    * @param string $val The proxyAutomaticConfigurationUrl
    *
    * @return WindowsWifiConfiguration
    */
    public function setProxyAutomaticConfigurationUrl($val)
    {
        $this->_propDict["proxyAutomaticConfigurationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyManualAddress
    * Specify the IP address for the proxy server.
    *
    * @return string The proxyManualAddress
    */
    public function getProxyManualAddress()
    {
        if (array_key_exists("proxyManualAddress", $this->_propDict)) {
            return $this->_propDict["proxyManualAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyManualAddress
    * Specify the IP address for the proxy server.
    *
    * @param string $val The proxyManualAddress
    *
    * @return WindowsWifiConfiguration
    */
    public function setProxyManualAddress($val)
    {
        $this->_propDict["proxyManualAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyManualPort
    * Specify the port for the proxy server.
    *
    * @return int The proxyManualPort
    */
    public function getProxyManualPort()
    {
        if (array_key_exists("proxyManualPort", $this->_propDict)) {
            return $this->_propDict["proxyManualPort"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyManualPort
    * Specify the port for the proxy server.
    *
    * @param int $val The proxyManualPort
    *
    * @return WindowsWifiConfiguration
    */
    public function setProxyManualPort($val)
    {
        $this->_propDict["proxyManualPort"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the proxySetting
    * Specify the proxy setting for Wi-Fi configuration. Possible values are: none, manual, automatic.
    *
    * @return WiFiProxySetting The proxySetting
    */
    public function getProxySetting()
    {
        if (array_key_exists("proxySetting", $this->_propDict)) {
            if (is_a($this->_propDict["proxySetting"], "\Beta\Microsoft\Graph\Model\WiFiProxySetting")) {
                return $this->_propDict["proxySetting"];
            } else {
                $this->_propDict["proxySetting"] = new WiFiProxySetting($this->_propDict["proxySetting"]);
                return $this->_propDict["proxySetting"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxySetting
    * Specify the proxy setting for Wi-Fi configuration. Possible values are: none, manual, automatic.
    *
    * @param WiFiProxySetting $val The proxySetting
    *
    * @return WindowsWifiConfiguration
    */
    public function setProxySetting($val)
    {
        $this->_propDict["proxySetting"] = $val;
        return $this;
    }
    
    /**
    * Gets the ssid
    * Specify the SSID of the wifi connection.
    *
    * @return string The ssid
    */
    public function getSsid()
    {
        if (array_key_exists("ssid", $this->_propDict)) {
            return $this->_propDict["ssid"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ssid
    * Specify the SSID of the wifi connection.
    *
    * @param string $val The ssid
    *
    * @return WindowsWifiConfiguration
    */
    public function setSsid($val)
    {
        $this->_propDict["ssid"] = $val;
        return $this;
    }
    
    /**
    * Gets the wifiSecurityType
    * Specify the Wifi Security Type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
    *
    * @return WiFiSecurityType The wifiSecurityType
    */
    public function getWifiSecurityType()
    {
        if (array_key_exists("wifiSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["wifiSecurityType"], "\Beta\Microsoft\Graph\Model\WiFiSecurityType")) {
                return $this->_propDict["wifiSecurityType"];
            } else {
                $this->_propDict["wifiSecurityType"] = new WiFiSecurityType($this->_propDict["wifiSecurityType"]);
                return $this->_propDict["wifiSecurityType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the wifiSecurityType
    * Specify the Wifi Security Type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
    *
    * @param WiFiSecurityType $val The wifiSecurityType
    *
    * @return WindowsWifiConfiguration
    */
    public function setWifiSecurityType($val)
    {
        $this->_propDict["wifiSecurityType"] = $val;
        return $this;
    }
    
}
