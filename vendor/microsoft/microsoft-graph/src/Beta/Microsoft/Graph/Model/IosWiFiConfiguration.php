<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosWiFiConfiguration File
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
* IosWiFiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosWiFiConfiguration extends DeviceConfiguration
{
    /**
    * Gets the connectAutomatically
    * Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
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
    * Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    *
    * @param bool $val The connectAutomatically
    *
    * @return IosWiFiConfiguration
    */
    public function setConnectAutomatically($val)
    {
        $this->_propDict["connectAutomatically"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectWhenNetworkNameIsHidden
    * Connect when the network is not broadcasting its name (SSID). When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
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
    * Connect when the network is not broadcasting its name (SSID). When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
    *
    * @param bool $val The connectWhenNetworkNameIsHidden
    *
    * @return IosWiFiConfiguration
    */
    public function setConnectWhenNetworkNameIsHidden($val)
    {
        $this->_propDict["connectWhenNetworkNameIsHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableMacAddressRandomization
    * If set to true, forces devices connecting using this Wi-Fi profile to present their actual Wi-Fi MAC address instead of a random MAC address. Applies to iOS 14 and later.
    *
    * @return bool The disableMacAddressRandomization
    */
    public function getDisableMacAddressRandomization()
    {
        if (array_key_exists("disableMacAddressRandomization", $this->_propDict)) {
            return $this->_propDict["disableMacAddressRandomization"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableMacAddressRandomization
    * If set to true, forces devices connecting using this Wi-Fi profile to present their actual Wi-Fi MAC address instead of a random MAC address. Applies to iOS 14 and later.
    *
    * @param bool $val The disableMacAddressRandomization
    *
    * @return IosWiFiConfiguration
    */
    public function setDisableMacAddressRandomization($val)
    {
        $this->_propDict["disableMacAddressRandomization"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the networkName
    * Network Name
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
    * Network Name
    *
    * @param string $val The networkName
    *
    * @return IosWiFiConfiguration
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
    * @return IosWiFiConfiguration
    */
    public function setPreSharedKey($val)
    {
        $this->_propDict["preSharedKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyAutomaticConfigurationUrl
    * URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
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
    * URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
    *
    * @param string $val The proxyAutomaticConfigurationUrl
    *
    * @return IosWiFiConfiguration
    */
    public function setProxyAutomaticConfigurationUrl($val)
    {
        $this->_propDict["proxyAutomaticConfigurationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyManualAddress
    * IP Address or DNS hostname of the proxy server when manual configuration is selected.
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
    * IP Address or DNS hostname of the proxy server when manual configuration is selected.
    *
    * @param string $val The proxyManualAddress
    *
    * @return IosWiFiConfiguration
    */
    public function setProxyManualAddress($val)
    {
        $this->_propDict["proxyManualAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyManualPort
    * Port of the proxy server when manual configuration is selected.
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
    * Port of the proxy server when manual configuration is selected.
    *
    * @param int $val The proxyManualPort
    *
    * @return IosWiFiConfiguration
    */
    public function setProxyManualPort($val)
    {
        $this->_propDict["proxyManualPort"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the proxySettings
    * Proxy Type for this Wi-Fi connection. Possible values are: none, manual, automatic.
    *
    * @return WiFiProxySetting The proxySettings
    */
    public function getProxySettings()
    {
        if (array_key_exists("proxySettings", $this->_propDict)) {
            if (is_a($this->_propDict["proxySettings"], "\Beta\Microsoft\Graph\Model\WiFiProxySetting")) {
                return $this->_propDict["proxySettings"];
            } else {
                $this->_propDict["proxySettings"] = new WiFiProxySetting($this->_propDict["proxySettings"]);
                return $this->_propDict["proxySettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxySettings
    * Proxy Type for this Wi-Fi connection. Possible values are: none, manual, automatic.
    *
    * @param WiFiProxySetting $val The proxySettings
    *
    * @return IosWiFiConfiguration
    */
    public function setProxySettings($val)
    {
        $this->_propDict["proxySettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the ssid
    * This is the name of the Wi-Fi network that is broadcast to all devices.
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
    * This is the name of the Wi-Fi network that is broadcast to all devices.
    *
    * @param string $val The ssid
    *
    * @return IosWiFiConfiguration
    */
    public function setSsid($val)
    {
        $this->_propDict["ssid"] = $val;
        return $this;
    }
    
    /**
    * Gets the wiFiSecurityType
    * Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
    *
    * @return WiFiSecurityType The wiFiSecurityType
    */
    public function getWiFiSecurityType()
    {
        if (array_key_exists("wiFiSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["wiFiSecurityType"], "\Beta\Microsoft\Graph\Model\WiFiSecurityType")) {
                return $this->_propDict["wiFiSecurityType"];
            } else {
                $this->_propDict["wiFiSecurityType"] = new WiFiSecurityType($this->_propDict["wiFiSecurityType"]);
                return $this->_propDict["wiFiSecurityType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the wiFiSecurityType
    * Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
    *
    * @param WiFiSecurityType $val The wiFiSecurityType
    *
    * @return IosWiFiConfiguration
    */
    public function setWiFiSecurityType($val)
    {
        $this->_propDict["wiFiSecurityType"] = $val;
        return $this;
    }
    
}
