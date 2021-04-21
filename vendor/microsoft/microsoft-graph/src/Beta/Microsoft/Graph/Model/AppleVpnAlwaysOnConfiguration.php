<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleVpnAlwaysOnConfiguration File
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
* AppleVpnAlwaysOnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleVpnAlwaysOnConfiguration extends Entity
{

    /**
    * Gets the airPrintExceptionAction
    * Determine whether AirPrint service will be exempt from the always-on VPN connection. Possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
    *
    * @return VpnServiceExceptionAction The airPrintExceptionAction
    */
    public function getAirPrintExceptionAction()
    {
        if (array_key_exists("airPrintExceptionAction", $this->_propDict)) {
            if (is_a($this->_propDict["airPrintExceptionAction"], "\Beta\Microsoft\Graph\Model\VpnServiceExceptionAction")) {
                return $this->_propDict["airPrintExceptionAction"];
            } else {
                $this->_propDict["airPrintExceptionAction"] = new VpnServiceExceptionAction($this->_propDict["airPrintExceptionAction"]);
                return $this->_propDict["airPrintExceptionAction"];
            }
        }
        return null;
    }

    /**
    * Sets the airPrintExceptionAction
    * Determine whether AirPrint service will be exempt from the always-on VPN connection. Possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
    *
    * @param VpnServiceExceptionAction $val The value to assign to the airPrintExceptionAction
    *
    * @return AppleVpnAlwaysOnConfiguration The AppleVpnAlwaysOnConfiguration
    */
    public function setAirPrintExceptionAction($val)
    {
        $this->_propDict["airPrintExceptionAction"] = $val;
         return $this;
    }
    /**
    * Gets the allowAllCaptiveNetworkPlugins
    * Specifies whether traffic from all captive network plugins should be allowed outside the vpn
    *
    * @return bool The allowAllCaptiveNetworkPlugins
    */
    public function getAllowAllCaptiveNetworkPlugins()
    {
        if (array_key_exists("allowAllCaptiveNetworkPlugins", $this->_propDict)) {
            return $this->_propDict["allowAllCaptiveNetworkPlugins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAllCaptiveNetworkPlugins
    * Specifies whether traffic from all captive network plugins should be allowed outside the vpn
    *
    * @param bool $val The value of the allowAllCaptiveNetworkPlugins
    *
    * @return AppleVpnAlwaysOnConfiguration
    */
    public function setAllowAllCaptiveNetworkPlugins($val)
    {
        $this->_propDict["allowAllCaptiveNetworkPlugins"] = $val;
        return $this;
    }
    /**
    * Gets the allowCaptiveWebSheet
    * Determines whether traffic from the Websheet app is allowed outside of the VPN
    *
    * @return bool The allowCaptiveWebSheet
    */
    public function getAllowCaptiveWebSheet()
    {
        if (array_key_exists("allowCaptiveWebSheet", $this->_propDict)) {
            return $this->_propDict["allowCaptiveWebSheet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCaptiveWebSheet
    * Determines whether traffic from the Websheet app is allowed outside of the VPN
    *
    * @param bool $val The value of the allowCaptiveWebSheet
    *
    * @return AppleVpnAlwaysOnConfiguration
    */
    public function setAllowCaptiveWebSheet($val)
    {
        $this->_propDict["allowCaptiveWebSheet"] = $val;
        return $this;
    }

    /**
    * Gets the allowedCaptiveNetworkPlugins
    * Determines whether all, some, or no non-native captive networking apps are allowed
    *
    * @return SpecifiedCaptiveNetworkPlugins The allowedCaptiveNetworkPlugins
    */
    public function getAllowedCaptiveNetworkPlugins()
    {
        if (array_key_exists("allowedCaptiveNetworkPlugins", $this->_propDict)) {
            if (is_a($this->_propDict["allowedCaptiveNetworkPlugins"], "\Beta\Microsoft\Graph\Model\SpecifiedCaptiveNetworkPlugins")) {
                return $this->_propDict["allowedCaptiveNetworkPlugins"];
            } else {
                $this->_propDict["allowedCaptiveNetworkPlugins"] = new SpecifiedCaptiveNetworkPlugins($this->_propDict["allowedCaptiveNetworkPlugins"]);
                return $this->_propDict["allowedCaptiveNetworkPlugins"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedCaptiveNetworkPlugins
    * Determines whether all, some, or no non-native captive networking apps are allowed
    *
    * @param SpecifiedCaptiveNetworkPlugins $val The value to assign to the allowedCaptiveNetworkPlugins
    *
    * @return AppleVpnAlwaysOnConfiguration The AppleVpnAlwaysOnConfiguration
    */
    public function setAllowedCaptiveNetworkPlugins($val)
    {
        $this->_propDict["allowedCaptiveNetworkPlugins"] = $val;
         return $this;
    }

    /**
    * Gets the cellularExceptionAction
    * Determine whether Cellular service will be exempt from the always-on VPN connection. Possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
    *
    * @return VpnServiceExceptionAction The cellularExceptionAction
    */
    public function getCellularExceptionAction()
    {
        if (array_key_exists("cellularExceptionAction", $this->_propDict)) {
            if (is_a($this->_propDict["cellularExceptionAction"], "\Beta\Microsoft\Graph\Model\VpnServiceExceptionAction")) {
                return $this->_propDict["cellularExceptionAction"];
            } else {
                $this->_propDict["cellularExceptionAction"] = new VpnServiceExceptionAction($this->_propDict["cellularExceptionAction"]);
                return $this->_propDict["cellularExceptionAction"];
            }
        }
        return null;
    }

    /**
    * Sets the cellularExceptionAction
    * Determine whether Cellular service will be exempt from the always-on VPN connection. Possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
    *
    * @param VpnServiceExceptionAction $val The value to assign to the cellularExceptionAction
    *
    * @return AppleVpnAlwaysOnConfiguration The AppleVpnAlwaysOnConfiguration
    */
    public function setCellularExceptionAction($val)
    {
        $this->_propDict["cellularExceptionAction"] = $val;
         return $this;
    }
    /**
    * Gets the natKeepAliveIntervalInSeconds
    * Specifies how often in seconds to send a network address translation keepalive package through the VPN
    *
    * @return int The natKeepAliveIntervalInSeconds
    */
    public function getNatKeepAliveIntervalInSeconds()
    {
        if (array_key_exists("natKeepAliveIntervalInSeconds", $this->_propDict)) {
            return $this->_propDict["natKeepAliveIntervalInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natKeepAliveIntervalInSeconds
    * Specifies how often in seconds to send a network address translation keepalive package through the VPN
    *
    * @param int $val The value of the natKeepAliveIntervalInSeconds
    *
    * @return AppleVpnAlwaysOnConfiguration
    */
    public function setNatKeepAliveIntervalInSeconds($val)
    {
        $this->_propDict["natKeepAliveIntervalInSeconds"] = $val;
        return $this;
    }
    /**
    * Gets the natKeepAliveOffloadEnable
    * Enable hardware offloading of NAT keepalive signals when the device is asleep
    *
    * @return bool The natKeepAliveOffloadEnable
    */
    public function getNatKeepAliveOffloadEnable()
    {
        if (array_key_exists("natKeepAliveOffloadEnable", $this->_propDict)) {
            return $this->_propDict["natKeepAliveOffloadEnable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natKeepAliveOffloadEnable
    * Enable hardware offloading of NAT keepalive signals when the device is asleep
    *
    * @param bool $val The value of the natKeepAliveOffloadEnable
    *
    * @return AppleVpnAlwaysOnConfiguration
    */
    public function setNatKeepAliveOffloadEnable($val)
    {
        $this->_propDict["natKeepAliveOffloadEnable"] = $val;
        return $this;
    }

    /**
    * Gets the tunnelConfiguration
    * Determines what connections the specific tunnel configuration applies to. Possible values are: wifiAndCellular, cellular, wifi.
    *
    * @return VpnTunnelConfigurationType The tunnelConfiguration
    */
    public function getTunnelConfiguration()
    {
        if (array_key_exists("tunnelConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["tunnelConfiguration"], "\Beta\Microsoft\Graph\Model\VpnTunnelConfigurationType")) {
                return $this->_propDict["tunnelConfiguration"];
            } else {
                $this->_propDict["tunnelConfiguration"] = new VpnTunnelConfigurationType($this->_propDict["tunnelConfiguration"]);
                return $this->_propDict["tunnelConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the tunnelConfiguration
    * Determines what connections the specific tunnel configuration applies to. Possible values are: wifiAndCellular, cellular, wifi.
    *
    * @param VpnTunnelConfigurationType $val The value to assign to the tunnelConfiguration
    *
    * @return AppleVpnAlwaysOnConfiguration The AppleVpnAlwaysOnConfiguration
    */
    public function setTunnelConfiguration($val)
    {
        $this->_propDict["tunnelConfiguration"] = $val;
         return $this;
    }
    /**
    * Gets the userToggleEnabled
    * Allow the user to toggle the VPN configuration using the UI
    *
    * @return bool The userToggleEnabled
    */
    public function getUserToggleEnabled()
    {
        if (array_key_exists("userToggleEnabled", $this->_propDict)) {
            return $this->_propDict["userToggleEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userToggleEnabled
    * Allow the user to toggle the VPN configuration using the UI
    *
    * @param bool $val The value of the userToggleEnabled
    *
    * @return AppleVpnAlwaysOnConfiguration
    */
    public function setUserToggleEnabled($val)
    {
        $this->_propDict["userToggleEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the voicemailExceptionAction
    * Determine whether voicemail service will be exempt from the always-on VPN connection. Possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
    *
    * @return VpnServiceExceptionAction The voicemailExceptionAction
    */
    public function getVoicemailExceptionAction()
    {
        if (array_key_exists("voicemailExceptionAction", $this->_propDict)) {
            if (is_a($this->_propDict["voicemailExceptionAction"], "\Beta\Microsoft\Graph\Model\VpnServiceExceptionAction")) {
                return $this->_propDict["voicemailExceptionAction"];
            } else {
                $this->_propDict["voicemailExceptionAction"] = new VpnServiceExceptionAction($this->_propDict["voicemailExceptionAction"]);
                return $this->_propDict["voicemailExceptionAction"];
            }
        }
        return null;
    }

    /**
    * Sets the voicemailExceptionAction
    * Determine whether voicemail service will be exempt from the always-on VPN connection. Possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
    *
    * @param VpnServiceExceptionAction $val The value to assign to the voicemailExceptionAction
    *
    * @return AppleVpnAlwaysOnConfiguration The AppleVpnAlwaysOnConfiguration
    */
    public function setVoicemailExceptionAction($val)
    {
        $this->_propDict["voicemailExceptionAction"] = $val;
         return $this;
    }
}
