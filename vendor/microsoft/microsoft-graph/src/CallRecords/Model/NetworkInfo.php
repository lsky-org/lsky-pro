<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;
/**
* NetworkInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkInfo extends \Microsoft\Graph\Model\Entity
{

    /**
    * Gets the bandwidthLowEventRatio
    * Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent.
    *
    * @return \Microsoft\Graph\Model\Single The bandwidthLowEventRatio
    */
    public function getBandwidthLowEventRatio()
    {
        if (array_key_exists("bandwidthLowEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["bandwidthLowEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["bandwidthLowEventRatio"];
            } else {
                $this->_propDict["bandwidthLowEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["bandwidthLowEventRatio"]);
                return $this->_propDict["bandwidthLowEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the bandwidthLowEventRatio
    * Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the bandwidthLowEventRatio
    *
    * @return NetworkInfo The NetworkInfo
    */
    public function setBandwidthLowEventRatio($val)
    {
        $this->_propDict["bandwidthLowEventRatio"] = $val;
         return $this;
    }
    /**
    * Gets the basicServiceSetIdentifier
    * The wireless LAN basic service set identifier of the media endpoint used to connect to the network.
    *
    * @return string The basicServiceSetIdentifier
    */
    public function getBasicServiceSetIdentifier()
    {
        if (array_key_exists("basicServiceSetIdentifier", $this->_propDict)) {
            return $this->_propDict["basicServiceSetIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the basicServiceSetIdentifier
    * The wireless LAN basic service set identifier of the media endpoint used to connect to the network.
    *
    * @param string $val The value of the basicServiceSetIdentifier
    *
    * @return NetworkInfo
    */
    public function setBasicServiceSetIdentifier($val)
    {
        $this->_propDict["basicServiceSetIdentifier"] = $val;
        return $this;
    }

    /**
    * Gets the connectionType
    * Type of network used by the media endpoint. Possible values are: unknown, wired, wifi, mobile, tunnel, unknownFutureValue.
    *
    * @return NetworkConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "\Microsoft\Graph\CallRecords\Model\NetworkConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new NetworkConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }

    /**
    * Sets the connectionType
    * Type of network used by the media endpoint. Possible values are: unknown, wired, wifi, mobile, tunnel, unknownFutureValue.
    *
    * @param NetworkConnectionType $val The value to assign to the connectionType
    *
    * @return NetworkInfo The NetworkInfo
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
         return $this;
    }

    /**
    * Gets the delayEventRatio
    * Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication.
    *
    * @return \Microsoft\Graph\Model\Single The delayEventRatio
    */
    public function getDelayEventRatio()
    {
        if (array_key_exists("delayEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["delayEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["delayEventRatio"];
            } else {
                $this->_propDict["delayEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["delayEventRatio"]);
                return $this->_propDict["delayEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the delayEventRatio
    * Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the delayEventRatio
    *
    * @return NetworkInfo The NetworkInfo
    */
    public function setDelayEventRatio($val)
    {
        $this->_propDict["delayEventRatio"] = $val;
         return $this;
    }
    /**
    * Gets the dnsSuffix
    * DNS suffix associated with the network adapter of the media endpoint.
    *
    * @return string The dnsSuffix
    */
    public function getDnsSuffix()
    {
        if (array_key_exists("dnsSuffix", $this->_propDict)) {
            return $this->_propDict["dnsSuffix"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dnsSuffix
    * DNS suffix associated with the network adapter of the media endpoint.
    *
    * @param string $val The value of the dnsSuffix
    *
    * @return NetworkInfo
    */
    public function setDnsSuffix($val)
    {
        $this->_propDict["dnsSuffix"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    * IP address of the media endpoint.
    *
    * @return string The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * IP address of the media endpoint.
    *
    * @param string $val The value of the ipAddress
    *
    * @return NetworkInfo
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the linkSpeed
    * Link speed in bits per second reported by the network adapter used by the media endpoint.
    *
    * @return int The linkSpeed
    */
    public function getLinkSpeed()
    {
        if (array_key_exists("linkSpeed", $this->_propDict)) {
            return $this->_propDict["linkSpeed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the linkSpeed
    * Link speed in bits per second reported by the network adapter used by the media endpoint.
    *
    * @param int $val The value of the linkSpeed
    *
    * @return NetworkInfo
    */
    public function setLinkSpeed($val)
    {
        $this->_propDict["linkSpeed"] = $val;
        return $this;
    }
    /**
    * Gets the macAddress
    * The media access control (MAC) address of the media endpoint's network device.
    *
    * @return string The macAddress
    */
    public function getMacAddress()
    {
        if (array_key_exists("macAddress", $this->_propDict)) {
            return $this->_propDict["macAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the macAddress
    * The media access control (MAC) address of the media endpoint's network device.
    *
    * @param string $val The value of the macAddress
    *
    * @return NetworkInfo
    */
    public function setMacAddress($val)
    {
        $this->_propDict["macAddress"] = $val;
        return $this;
    }
    /**
    * Gets the port
    * Network port number used by media endpoint.
    *
    * @return int The port
    */
    public function getPort()
    {
        if (array_key_exists("port", $this->_propDict)) {
            return $this->_propDict["port"];
        } else {
            return null;
        }
    }

    /**
    * Sets the port
    * Network port number used by media endpoint.
    *
    * @param int $val The value of the port
    *
    * @return NetworkInfo
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = $val;
        return $this;
    }

    /**
    * Gets the receivedQualityEventRatio
    * Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received.
    *
    * @return \Microsoft\Graph\Model\Single The receivedQualityEventRatio
    */
    public function getReceivedQualityEventRatio()
    {
        if (array_key_exists("receivedQualityEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["receivedQualityEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["receivedQualityEventRatio"];
            } else {
                $this->_propDict["receivedQualityEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["receivedQualityEventRatio"]);
                return $this->_propDict["receivedQualityEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the receivedQualityEventRatio
    * Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the receivedQualityEventRatio
    *
    * @return NetworkInfo The NetworkInfo
    */
    public function setReceivedQualityEventRatio($val)
    {
        $this->_propDict["receivedQualityEventRatio"] = $val;
         return $this;
    }
    /**
    * Gets the reflexiveIPAddress
    * IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint.
    *
    * @return string The reflexiveIPAddress
    */
    public function getReflexiveIPAddress()
    {
        if (array_key_exists("reflexiveIPAddress", $this->_propDict)) {
            return $this->_propDict["reflexiveIPAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reflexiveIPAddress
    * IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint.
    *
    * @param string $val The value of the reflexiveIPAddress
    *
    * @return NetworkInfo
    */
    public function setReflexiveIPAddress($val)
    {
        $this->_propDict["reflexiveIPAddress"] = $val;
        return $this;
    }
    /**
    * Gets the relayIPAddress
    * IP address of the media relay server allocated by the media endpoint.
    *
    * @return string The relayIPAddress
    */
    public function getRelayIPAddress()
    {
        if (array_key_exists("relayIPAddress", $this->_propDict)) {
            return $this->_propDict["relayIPAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the relayIPAddress
    * IP address of the media relay server allocated by the media endpoint.
    *
    * @param string $val The value of the relayIPAddress
    *
    * @return NetworkInfo
    */
    public function setRelayIPAddress($val)
    {
        $this->_propDict["relayIPAddress"] = $val;
        return $this;
    }
    /**
    * Gets the relayPort
    * Network port number allocated on the media relay server by the media endpoint.
    *
    * @return int The relayPort
    */
    public function getRelayPort()
    {
        if (array_key_exists("relayPort", $this->_propDict)) {
            return $this->_propDict["relayPort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the relayPort
    * Network port number allocated on the media relay server by the media endpoint.
    *
    * @param int $val The value of the relayPort
    *
    * @return NetworkInfo
    */
    public function setRelayPort($val)
    {
        $this->_propDict["relayPort"] = $val;
        return $this;
    }

    /**
    * Gets the sentQualityEventRatio
    * Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent.
    *
    * @return \Microsoft\Graph\Model\Single The sentQualityEventRatio
    */
    public function getSentQualityEventRatio()
    {
        if (array_key_exists("sentQualityEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["sentQualityEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["sentQualityEventRatio"];
            } else {
                $this->_propDict["sentQualityEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["sentQualityEventRatio"]);
                return $this->_propDict["sentQualityEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the sentQualityEventRatio
    * Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the sentQualityEventRatio
    *
    * @return NetworkInfo The NetworkInfo
    */
    public function setSentQualityEventRatio($val)
    {
        $this->_propDict["sentQualityEventRatio"] = $val;
         return $this;
    }
    /**
    * Gets the subnet
    * Subnet used for media stream by the media endpoint.
    *
    * @return string The subnet
    */
    public function getSubnet()
    {
        if (array_key_exists("subnet", $this->_propDict)) {
            return $this->_propDict["subnet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subnet
    * Subnet used for media stream by the media endpoint.
    *
    * @param string $val The value of the subnet
    *
    * @return NetworkInfo
    */
    public function setSubnet($val)
    {
        $this->_propDict["subnet"] = $val;
        return $this;
    }

    /**
    * Gets the wifiBand
    * WiFi band used by the media endpoint. Possible values are: unknown, frequency24GHz, frequency50GHz, frequency60GHz, unknownFutureValue.
    *
    * @return WifiBand The wifiBand
    */
    public function getWifiBand()
    {
        if (array_key_exists("wifiBand", $this->_propDict)) {
            if (is_a($this->_propDict["wifiBand"], "\Microsoft\Graph\CallRecords\Model\WifiBand")) {
                return $this->_propDict["wifiBand"];
            } else {
                $this->_propDict["wifiBand"] = new WifiBand($this->_propDict["wifiBand"]);
                return $this->_propDict["wifiBand"];
            }
        }
        return null;
    }

    /**
    * Sets the wifiBand
    * WiFi band used by the media endpoint. Possible values are: unknown, frequency24GHz, frequency50GHz, frequency60GHz, unknownFutureValue.
    *
    * @param WifiBand $val The value to assign to the wifiBand
    *
    * @return NetworkInfo The NetworkInfo
    */
    public function setWifiBand($val)
    {
        $this->_propDict["wifiBand"] = $val;
         return $this;
    }
    /**
    * Gets the wifiBatteryCharge
    * Estimated remaining battery charge in percentage reported by the media endpoint.
    *
    * @return int The wifiBatteryCharge
    */
    public function getWifiBatteryCharge()
    {
        if (array_key_exists("wifiBatteryCharge", $this->_propDict)) {
            return $this->_propDict["wifiBatteryCharge"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiBatteryCharge
    * Estimated remaining battery charge in percentage reported by the media endpoint.
    *
    * @param int $val The value of the wifiBatteryCharge
    *
    * @return NetworkInfo
    */
    public function setWifiBatteryCharge($val)
    {
        $this->_propDict["wifiBatteryCharge"] = $val;
        return $this;
    }
    /**
    * Gets the wifiChannel
    * WiFi channel used by the media endpoint.
    *
    * @return int The wifiChannel
    */
    public function getWifiChannel()
    {
        if (array_key_exists("wifiChannel", $this->_propDict)) {
            return $this->_propDict["wifiChannel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiChannel
    * WiFi channel used by the media endpoint.
    *
    * @param int $val The value of the wifiChannel
    *
    * @return NetworkInfo
    */
    public function setWifiChannel($val)
    {
        $this->_propDict["wifiChannel"] = $val;
        return $this;
    }
    /**
    * Gets the wifiMicrosoftDriver
    * Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
    *
    * @return string The wifiMicrosoftDriver
    */
    public function getWifiMicrosoftDriver()
    {
        if (array_key_exists("wifiMicrosoftDriver", $this->_propDict)) {
            return $this->_propDict["wifiMicrosoftDriver"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiMicrosoftDriver
    * Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
    *
    * @param string $val The value of the wifiMicrosoftDriver
    *
    * @return NetworkInfo
    */
    public function setWifiMicrosoftDriver($val)
    {
        $this->_propDict["wifiMicrosoftDriver"] = $val;
        return $this;
    }
    /**
    * Gets the wifiMicrosoftDriverVersion
    * Version of the Microsoft WiFi driver used by the media endpoint.
    *
    * @return string The wifiMicrosoftDriverVersion
    */
    public function getWifiMicrosoftDriverVersion()
    {
        if (array_key_exists("wifiMicrosoftDriverVersion", $this->_propDict)) {
            return $this->_propDict["wifiMicrosoftDriverVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiMicrosoftDriverVersion
    * Version of the Microsoft WiFi driver used by the media endpoint.
    *
    * @param string $val The value of the wifiMicrosoftDriverVersion
    *
    * @return NetworkInfo
    */
    public function setWifiMicrosoftDriverVersion($val)
    {
        $this->_propDict["wifiMicrosoftDriverVersion"] = $val;
        return $this;
    }

    /**
    * Gets the wifiRadioType
    * Type of WiFi radio used by the media endpoint. Possible values are: unknown, wifi80211a, wifi80211b, wifi80211g, wifi80211n, wifi80211ac, wifi80211ax, unknownFutureValue.
    *
    * @return WifiRadioType The wifiRadioType
    */
    public function getWifiRadioType()
    {
        if (array_key_exists("wifiRadioType", $this->_propDict)) {
            if (is_a($this->_propDict["wifiRadioType"], "\Microsoft\Graph\CallRecords\Model\WifiRadioType")) {
                return $this->_propDict["wifiRadioType"];
            } else {
                $this->_propDict["wifiRadioType"] = new WifiRadioType($this->_propDict["wifiRadioType"]);
                return $this->_propDict["wifiRadioType"];
            }
        }
        return null;
    }

    /**
    * Sets the wifiRadioType
    * Type of WiFi radio used by the media endpoint. Possible values are: unknown, wifi80211a, wifi80211b, wifi80211g, wifi80211n, wifi80211ac, wifi80211ax, unknownFutureValue.
    *
    * @param WifiRadioType $val The value to assign to the wifiRadioType
    *
    * @return NetworkInfo The NetworkInfo
    */
    public function setWifiRadioType($val)
    {
        $this->_propDict["wifiRadioType"] = $val;
         return $this;
    }
    /**
    * Gets the wifiSignalStrength
    * WiFi signal strength in percentage reported by the media endpoint.
    *
    * @return int The wifiSignalStrength
    */
    public function getWifiSignalStrength()
    {
        if (array_key_exists("wifiSignalStrength", $this->_propDict)) {
            return $this->_propDict["wifiSignalStrength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiSignalStrength
    * WiFi signal strength in percentage reported by the media endpoint.
    *
    * @param int $val The value of the wifiSignalStrength
    *
    * @return NetworkInfo
    */
    public function setWifiSignalStrength($val)
    {
        $this->_propDict["wifiSignalStrength"] = $val;
        return $this;
    }
    /**
    * Gets the wifiVendorDriver
    * Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
    *
    * @return string The wifiVendorDriver
    */
    public function getWifiVendorDriver()
    {
        if (array_key_exists("wifiVendorDriver", $this->_propDict)) {
            return $this->_propDict["wifiVendorDriver"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiVendorDriver
    * Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
    *
    * @param string $val The value of the wifiVendorDriver
    *
    * @return NetworkInfo
    */
    public function setWifiVendorDriver($val)
    {
        $this->_propDict["wifiVendorDriver"] = $val;
        return $this;
    }
    /**
    * Gets the wifiVendorDriverVersion
    * Version of the WiFi driver used by the media endpoint.
    *
    * @return string The wifiVendorDriverVersion
    */
    public function getWifiVendorDriverVersion()
    {
        if (array_key_exists("wifiVendorDriverVersion", $this->_propDict)) {
            return $this->_propDict["wifiVendorDriverVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiVendorDriverVersion
    * Version of the WiFi driver used by the media endpoint.
    *
    * @param string $val The value of the wifiVendorDriverVersion
    *
    * @return NetworkInfo
    */
    public function setWifiVendorDriverVersion($val)
    {
        $this->_propDict["wifiVendorDriverVersion"] = $val;
        return $this;
    }
}
