<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeleconferenceDeviceMediaQuality File
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
* TeleconferenceDeviceMediaQuality class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeleconferenceDeviceMediaQuality extends Entity
{

    /**
    * Gets the averageInboundJitter
    * The average inbound stream network jitter.
    *
    * @return Duration The averageInboundJitter
    */
    public function getAverageInboundJitter()
    {
        if (array_key_exists("averageInboundJitter", $this->_propDict)) {
            if (is_a($this->_propDict["averageInboundJitter"], "\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["averageInboundJitter"];
            } else {
                $this->_propDict["averageInboundJitter"] = new Duration($this->_propDict["averageInboundJitter"]);
                return $this->_propDict["averageInboundJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the averageInboundJitter
    * The average inbound stream network jitter.
    *
    * @param Duration $val The value to assign to the averageInboundJitter
    *
    * @return TeleconferenceDeviceMediaQuality The TeleconferenceDeviceMediaQuality
    */
    public function setAverageInboundJitter($val)
    {
        $this->_propDict["averageInboundJitter"] = $val;
         return $this;
    }
    /**
    * Gets the averageInboundPacketLossRateInPercentage
    * The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
    *
    * @return float The averageInboundPacketLossRateInPercentage
    */
    public function getAverageInboundPacketLossRateInPercentage()
    {
        if (array_key_exists("averageInboundPacketLossRateInPercentage", $this->_propDict)) {
            return $this->_propDict["averageInboundPacketLossRateInPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageInboundPacketLossRateInPercentage
    * The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
    *
    * @param float $val The value of the averageInboundPacketLossRateInPercentage
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setAverageInboundPacketLossRateInPercentage($val)
    {
        $this->_propDict["averageInboundPacketLossRateInPercentage"] = $val;
        return $this;
    }

    /**
    * Gets the averageInboundRoundTripDelay
    * The average inbound stream network round trip delay.
    *
    * @return Duration The averageInboundRoundTripDelay
    */
    public function getAverageInboundRoundTripDelay()
    {
        if (array_key_exists("averageInboundRoundTripDelay", $this->_propDict)) {
            if (is_a($this->_propDict["averageInboundRoundTripDelay"], "\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["averageInboundRoundTripDelay"];
            } else {
                $this->_propDict["averageInboundRoundTripDelay"] = new Duration($this->_propDict["averageInboundRoundTripDelay"]);
                return $this->_propDict["averageInboundRoundTripDelay"];
            }
        }
        return null;
    }

    /**
    * Sets the averageInboundRoundTripDelay
    * The average inbound stream network round trip delay.
    *
    * @param Duration $val The value to assign to the averageInboundRoundTripDelay
    *
    * @return TeleconferenceDeviceMediaQuality The TeleconferenceDeviceMediaQuality
    */
    public function setAverageInboundRoundTripDelay($val)
    {
        $this->_propDict["averageInboundRoundTripDelay"] = $val;
         return $this;
    }

    /**
    * Gets the averageOutboundJitter
    * The average outbound stream network jitter.
    *
    * @return Duration The averageOutboundJitter
    */
    public function getAverageOutboundJitter()
    {
        if (array_key_exists("averageOutboundJitter", $this->_propDict)) {
            if (is_a($this->_propDict["averageOutboundJitter"], "\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["averageOutboundJitter"];
            } else {
                $this->_propDict["averageOutboundJitter"] = new Duration($this->_propDict["averageOutboundJitter"]);
                return $this->_propDict["averageOutboundJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the averageOutboundJitter
    * The average outbound stream network jitter.
    *
    * @param Duration $val The value to assign to the averageOutboundJitter
    *
    * @return TeleconferenceDeviceMediaQuality The TeleconferenceDeviceMediaQuality
    */
    public function setAverageOutboundJitter($val)
    {
        $this->_propDict["averageOutboundJitter"] = $val;
         return $this;
    }
    /**
    * Gets the averageOutboundPacketLossRateInPercentage
    * The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
    *
    * @return float The averageOutboundPacketLossRateInPercentage
    */
    public function getAverageOutboundPacketLossRateInPercentage()
    {
        if (array_key_exists("averageOutboundPacketLossRateInPercentage", $this->_propDict)) {
            return $this->_propDict["averageOutboundPacketLossRateInPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageOutboundPacketLossRateInPercentage
    * The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
    *
    * @param float $val The value of the averageOutboundPacketLossRateInPercentage
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setAverageOutboundPacketLossRateInPercentage($val)
    {
        $this->_propDict["averageOutboundPacketLossRateInPercentage"] = $val;
        return $this;
    }

    /**
    * Gets the averageOutboundRoundTripDelay
    * The average outbound stream network round trip delay.
    *
    * @return Duration The averageOutboundRoundTripDelay
    */
    public function getAverageOutboundRoundTripDelay()
    {
        if (array_key_exists("averageOutboundRoundTripDelay", $this->_propDict)) {
            if (is_a($this->_propDict["averageOutboundRoundTripDelay"], "\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["averageOutboundRoundTripDelay"];
            } else {
                $this->_propDict["averageOutboundRoundTripDelay"] = new Duration($this->_propDict["averageOutboundRoundTripDelay"]);
                return $this->_propDict["averageOutboundRoundTripDelay"];
            }
        }
        return null;
    }

    /**
    * Sets the averageOutboundRoundTripDelay
    * The average outbound stream network round trip delay.
    *
    * @param Duration $val The value to assign to the averageOutboundRoundTripDelay
    *
    * @return TeleconferenceDeviceMediaQuality The TeleconferenceDeviceMediaQuality
    */
    public function setAverageOutboundRoundTripDelay($val)
    {
        $this->_propDict["averageOutboundRoundTripDelay"] = $val;
         return $this;
    }
    /**
    * Gets the channelIndex
    * The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3.
    *
    * @return int The channelIndex
    */
    public function getChannelIndex()
    {
        if (array_key_exists("channelIndex", $this->_propDict)) {
            return $this->_propDict["channelIndex"];
        } else {
            return null;
        }
    }

    /**
    * Sets the channelIndex
    * The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3.
    *
    * @param int $val The value of the channelIndex
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setChannelIndex($val)
    {
        $this->_propDict["channelIndex"] = $val;
        return $this;
    }
    /**
    * Gets the inboundPackets
    * The total number of the inbound packets.
    *
    * @return int The inboundPackets
    */
    public function getInboundPackets()
    {
        if (array_key_exists("inboundPackets", $this->_propDict)) {
            return $this->_propDict["inboundPackets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inboundPackets
    * The total number of the inbound packets.
    *
    * @param int $val The value of the inboundPackets
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setInboundPackets($val)
    {
        $this->_propDict["inboundPackets"] = $val;
        return $this;
    }
    /**
    * Gets the localIPAddress
    * the local IP address for the media session.
    *
    * @return string The localIPAddress
    */
    public function getLocalIPAddress()
    {
        if (array_key_exists("localIPAddress", $this->_propDict)) {
            return $this->_propDict["localIPAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localIPAddress
    * the local IP address for the media session.
    *
    * @param string $val The value of the localIPAddress
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setLocalIPAddress($val)
    {
        $this->_propDict["localIPAddress"] = $val;
        return $this;
    }
    /**
    * Gets the localPort
    * The local media port.
    *
    * @return int The localPort
    */
    public function getLocalPort()
    {
        if (array_key_exists("localPort", $this->_propDict)) {
            return $this->_propDict["localPort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localPort
    * The local media port.
    *
    * @param int $val The value of the localPort
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setLocalPort($val)
    {
        $this->_propDict["localPort"] = $val;
        return $this;
    }

    /**
    * Gets the maximumInboundJitter
    * The maximum inbound stream network jitter.
    *
    * @return Duration The maximumInboundJitter
    */
    public function getMaximumInboundJitter()
    {
        if (array_key_exists("maximumInboundJitter", $this->_propDict)) {
            if (is_a($this->_propDict["maximumInboundJitter"], "\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["maximumInboundJitter"];
            } else {
                $this->_propDict["maximumInboundJitter"] = new Duration($this->_propDict["maximumInboundJitter"]);
                return $this->_propDict["maximumInboundJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the maximumInboundJitter
    * The maximum inbound stream network jitter.
    *
    * @param Duration $val The value to assign to the maximumInboundJitter
    *
    * @return TeleconferenceDeviceMediaQuality The TeleconferenceDeviceMediaQuality
    */
    public function setMaximumInboundJitter($val)
    {
        $this->_propDict["maximumInboundJitter"] = $val;
         return $this;
    }
    /**
    * Gets the maximumInboundPacketLossRateInPercentage
    * The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
    *
    * @return float The maximumInboundPacketLossRateInPercentage
    */
    public function getMaximumInboundPacketLossRateInPercentage()
    {
        if (array_key_exists("maximumInboundPacketLossRateInPercentage", $this->_propDict)) {
            return $this->_propDict["maximumInboundPacketLossRateInPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumInboundPacketLossRateInPercentage
    * The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
    *
    * @param float $val The value of the maximumInboundPacketLossRateInPercentage
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setMaximumInboundPacketLossRateInPercentage($val)
    {
        $this->_propDict["maximumInboundPacketLossRateInPercentage"] = $val;
        return $this;
    }

    /**
    * Gets the maximumInboundRoundTripDelay
    * The maximum inbound stream network round trip delay.
    *
    * @return Duration The maximumInboundRoundTripDelay
    */
    public function getMaximumInboundRoundTripDelay()
    {
        if (array_key_exists("maximumInboundRoundTripDelay", $this->_propDict)) {
            if (is_a($this->_propDict["maximumInboundRoundTripDelay"], "\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["maximumInboundRoundTripDelay"];
            } else {
                $this->_propDict["maximumInboundRoundTripDelay"] = new Duration($this->_propDict["maximumInboundRoundTripDelay"]);
                return $this->_propDict["maximumInboundRoundTripDelay"];
            }
        }
        return null;
    }

    /**
    * Sets the maximumInboundRoundTripDelay
    * The maximum inbound stream network round trip delay.
    *
    * @param Duration $val The value to assign to the maximumInboundRoundTripDelay
    *
    * @return TeleconferenceDeviceMediaQuality The TeleconferenceDeviceMediaQuality
    */
    public function setMaximumInboundRoundTripDelay($val)
    {
        $this->_propDict["maximumInboundRoundTripDelay"] = $val;
         return $this;
    }

    /**
    * Gets the maximumOutboundJitter
    * The maximum outbound stream network jitter.
    *
    * @return Duration The maximumOutboundJitter
    */
    public function getMaximumOutboundJitter()
    {
        if (array_key_exists("maximumOutboundJitter", $this->_propDict)) {
            if (is_a($this->_propDict["maximumOutboundJitter"], "\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["maximumOutboundJitter"];
            } else {
                $this->_propDict["maximumOutboundJitter"] = new Duration($this->_propDict["maximumOutboundJitter"]);
                return $this->_propDict["maximumOutboundJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the maximumOutboundJitter
    * The maximum outbound stream network jitter.
    *
    * @param Duration $val The value to assign to the maximumOutboundJitter
    *
    * @return TeleconferenceDeviceMediaQuality The TeleconferenceDeviceMediaQuality
    */
    public function setMaximumOutboundJitter($val)
    {
        $this->_propDict["maximumOutboundJitter"] = $val;
         return $this;
    }
    /**
    * Gets the maximumOutboundPacketLossRateInPercentage
    * The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
    *
    * @return float The maximumOutboundPacketLossRateInPercentage
    */
    public function getMaximumOutboundPacketLossRateInPercentage()
    {
        if (array_key_exists("maximumOutboundPacketLossRateInPercentage", $this->_propDict)) {
            return $this->_propDict["maximumOutboundPacketLossRateInPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumOutboundPacketLossRateInPercentage
    * The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
    *
    * @param float $val The value of the maximumOutboundPacketLossRateInPercentage
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setMaximumOutboundPacketLossRateInPercentage($val)
    {
        $this->_propDict["maximumOutboundPacketLossRateInPercentage"] = $val;
        return $this;
    }

    /**
    * Gets the maximumOutboundRoundTripDelay
    * The maximum outbound stream network round trip delay.
    *
    * @return Duration The maximumOutboundRoundTripDelay
    */
    public function getMaximumOutboundRoundTripDelay()
    {
        if (array_key_exists("maximumOutboundRoundTripDelay", $this->_propDict)) {
            if (is_a($this->_propDict["maximumOutboundRoundTripDelay"], "\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["maximumOutboundRoundTripDelay"];
            } else {
                $this->_propDict["maximumOutboundRoundTripDelay"] = new Duration($this->_propDict["maximumOutboundRoundTripDelay"]);
                return $this->_propDict["maximumOutboundRoundTripDelay"];
            }
        }
        return null;
    }

    /**
    * Sets the maximumOutboundRoundTripDelay
    * The maximum outbound stream network round trip delay.
    *
    * @param Duration $val The value to assign to the maximumOutboundRoundTripDelay
    *
    * @return TeleconferenceDeviceMediaQuality The TeleconferenceDeviceMediaQuality
    */
    public function setMaximumOutboundRoundTripDelay($val)
    {
        $this->_propDict["maximumOutboundRoundTripDelay"] = $val;
         return $this;
    }

    /**
    * Gets the mediaDuration
    * The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations.
    *
    * @return Duration The mediaDuration
    */
    public function getMediaDuration()
    {
        if (array_key_exists("mediaDuration", $this->_propDict)) {
            if (is_a($this->_propDict["mediaDuration"], "\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["mediaDuration"];
            } else {
                $this->_propDict["mediaDuration"] = new Duration($this->_propDict["mediaDuration"]);
                return $this->_propDict["mediaDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaDuration
    * The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations.
    *
    * @param Duration $val The value to assign to the mediaDuration
    *
    * @return TeleconferenceDeviceMediaQuality The TeleconferenceDeviceMediaQuality
    */
    public function setMediaDuration($val)
    {
        $this->_propDict["mediaDuration"] = $val;
         return $this;
    }
    /**
    * Gets the networkLinkSpeedInBytes
    * The network link speed in bytes
    *
    * @return int The networkLinkSpeedInBytes
    */
    public function getNetworkLinkSpeedInBytes()
    {
        if (array_key_exists("networkLinkSpeedInBytes", $this->_propDict)) {
            return $this->_propDict["networkLinkSpeedInBytes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkLinkSpeedInBytes
    * The network link speed in bytes
    *
    * @param int $val The value of the networkLinkSpeedInBytes
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setNetworkLinkSpeedInBytes($val)
    {
        $this->_propDict["networkLinkSpeedInBytes"] = $val;
        return $this;
    }
    /**
    * Gets the outboundPackets
    * The total number of the outbound packets.
    *
    * @return int The outboundPackets
    */
    public function getOutboundPackets()
    {
        if (array_key_exists("outboundPackets", $this->_propDict)) {
            return $this->_propDict["outboundPackets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outboundPackets
    * The total number of the outbound packets.
    *
    * @param int $val The value of the outboundPackets
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setOutboundPackets($val)
    {
        $this->_propDict["outboundPackets"] = $val;
        return $this;
    }
    /**
    * Gets the remoteIPAddress
    * The remote IP address for the media session.
    *
    * @return string The remoteIPAddress
    */
    public function getRemoteIPAddress()
    {
        if (array_key_exists("remoteIPAddress", $this->_propDict)) {
            return $this->_propDict["remoteIPAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remoteIPAddress
    * The remote IP address for the media session.
    *
    * @param string $val The value of the remoteIPAddress
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setRemoteIPAddress($val)
    {
        $this->_propDict["remoteIPAddress"] = $val;
        return $this;
    }
    /**
    * Gets the remotePort
    * The remote media port.
    *
    * @return int The remotePort
    */
    public function getRemotePort()
    {
        if (array_key_exists("remotePort", $this->_propDict)) {
            return $this->_propDict["remotePort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remotePort
    * The remote media port.
    *
    * @param int $val The value of the remotePort
    *
    * @return TeleconferenceDeviceMediaQuality
    */
    public function setRemotePort($val)
    {
        $this->_propDict["remotePort"] = $val;
        return $this;
    }
}
