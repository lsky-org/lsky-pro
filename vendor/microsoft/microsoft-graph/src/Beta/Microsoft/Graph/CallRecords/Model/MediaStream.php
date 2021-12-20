<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaStream File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;
/**
* MediaStream class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaStream extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the averageAudioDegradation
    * Average Network Mean Opinion Score degradation for stream. Represents how much the network loss and jitter has impacted the quality of received audio.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The averageAudioDegradation
    */
    public function getAverageAudioDegradation()
    {
        if (array_key_exists("averageAudioDegradation", $this->_propDict)) {
            if (is_a($this->_propDict["averageAudioDegradation"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["averageAudioDegradation"];
            } else {
                $this->_propDict["averageAudioDegradation"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["averageAudioDegradation"]);
                return $this->_propDict["averageAudioDegradation"];
            }
        }
        return null;
    }

    /**
    * Sets the averageAudioDegradation
    * Average Network Mean Opinion Score degradation for stream. Represents how much the network loss and jitter has impacted the quality of received audio.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the averageAudioDegradation
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageAudioDegradation($val)
    {
        $this->_propDict["averageAudioDegradation"] = $val;
         return $this;
    }

    /**
    * Gets the averageAudioNetworkJitter
    * Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \Beta\Microsoft\Graph\Model\Duration The averageAudioNetworkJitter
    */
    public function getAverageAudioNetworkJitter()
    {
        if (array_key_exists("averageAudioNetworkJitter", $this->_propDict)) {
            if (is_a($this->_propDict["averageAudioNetworkJitter"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["averageAudioNetworkJitter"];
            } else {
                $this->_propDict["averageAudioNetworkJitter"] = new \Beta\Microsoft\Graph\Model\Duration($this->_propDict["averageAudioNetworkJitter"]);
                return $this->_propDict["averageAudioNetworkJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the averageAudioNetworkJitter
    * Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \Beta\Microsoft\Graph\Model\Duration $val The value to assign to the averageAudioNetworkJitter
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageAudioNetworkJitter($val)
    {
        $this->_propDict["averageAudioNetworkJitter"] = $val;
         return $this;
    }
    /**
    * Gets the averageBandwidthEstimate
    * Average estimated bandwidth available between two endpoints in bits per second.
    *
    * @return int The averageBandwidthEstimate
    */
    public function getAverageBandwidthEstimate()
    {
        if (array_key_exists("averageBandwidthEstimate", $this->_propDict)) {
            return $this->_propDict["averageBandwidthEstimate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageBandwidthEstimate
    * Average estimated bandwidth available between two endpoints in bits per second.
    *
    * @param int $val The value of the averageBandwidthEstimate
    *
    * @return MediaStream
    */
    public function setAverageBandwidthEstimate($val)
    {
        $this->_propDict["averageBandwidthEstimate"] = $val;
        return $this;
    }

    /**
    * Gets the averageJitter
    * Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \Beta\Microsoft\Graph\Model\Duration The averageJitter
    */
    public function getAverageJitter()
    {
        if (array_key_exists("averageJitter", $this->_propDict)) {
            if (is_a($this->_propDict["averageJitter"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["averageJitter"];
            } else {
                $this->_propDict["averageJitter"] = new \Beta\Microsoft\Graph\Model\Duration($this->_propDict["averageJitter"]);
                return $this->_propDict["averageJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the averageJitter
    * Average jitter for the stream computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \Beta\Microsoft\Graph\Model\Duration $val The value to assign to the averageJitter
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageJitter($val)
    {
        $this->_propDict["averageJitter"] = $val;
         return $this;
    }

    /**
    * Gets the averagePacketLossRate
    * Average packet loss rate for stream.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The averagePacketLossRate
    */
    public function getAveragePacketLossRate()
    {
        if (array_key_exists("averagePacketLossRate", $this->_propDict)) {
            if (is_a($this->_propDict["averagePacketLossRate"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["averagePacketLossRate"];
            } else {
                $this->_propDict["averagePacketLossRate"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["averagePacketLossRate"]);
                return $this->_propDict["averagePacketLossRate"];
            }
        }
        return null;
    }

    /**
    * Sets the averagePacketLossRate
    * Average packet loss rate for stream.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the averagePacketLossRate
    *
    * @return MediaStream The MediaStream
    */
    public function setAveragePacketLossRate($val)
    {
        $this->_propDict["averagePacketLossRate"] = $val;
         return $this;
    }

    /**
    * Gets the averageRatioOfConcealedSamples
    * Ratio of the number of audio frames with samples generated by packet loss concealment to the total number of audio frames.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The averageRatioOfConcealedSamples
    */
    public function getAverageRatioOfConcealedSamples()
    {
        if (array_key_exists("averageRatioOfConcealedSamples", $this->_propDict)) {
            if (is_a($this->_propDict["averageRatioOfConcealedSamples"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["averageRatioOfConcealedSamples"];
            } else {
                $this->_propDict["averageRatioOfConcealedSamples"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["averageRatioOfConcealedSamples"]);
                return $this->_propDict["averageRatioOfConcealedSamples"];
            }
        }
        return null;
    }

    /**
    * Sets the averageRatioOfConcealedSamples
    * Ratio of the number of audio frames with samples generated by packet loss concealment to the total number of audio frames.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the averageRatioOfConcealedSamples
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageRatioOfConcealedSamples($val)
    {
        $this->_propDict["averageRatioOfConcealedSamples"] = $val;
         return $this;
    }

    /**
    * Gets the averageReceivedFrameRate
    * Average frames per second received for all video streams computed over the duration of the session.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The averageReceivedFrameRate
    */
    public function getAverageReceivedFrameRate()
    {
        if (array_key_exists("averageReceivedFrameRate", $this->_propDict)) {
            if (is_a($this->_propDict["averageReceivedFrameRate"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["averageReceivedFrameRate"];
            } else {
                $this->_propDict["averageReceivedFrameRate"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["averageReceivedFrameRate"]);
                return $this->_propDict["averageReceivedFrameRate"];
            }
        }
        return null;
    }

    /**
    * Sets the averageReceivedFrameRate
    * Average frames per second received for all video streams computed over the duration of the session.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the averageReceivedFrameRate
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageReceivedFrameRate($val)
    {
        $this->_propDict["averageReceivedFrameRate"] = $val;
         return $this;
    }

    /**
    * Gets the averageRoundTripTime
    * Average network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \Beta\Microsoft\Graph\Model\Duration The averageRoundTripTime
    */
    public function getAverageRoundTripTime()
    {
        if (array_key_exists("averageRoundTripTime", $this->_propDict)) {
            if (is_a($this->_propDict["averageRoundTripTime"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["averageRoundTripTime"];
            } else {
                $this->_propDict["averageRoundTripTime"] = new \Beta\Microsoft\Graph\Model\Duration($this->_propDict["averageRoundTripTime"]);
                return $this->_propDict["averageRoundTripTime"];
            }
        }
        return null;
    }

    /**
    * Sets the averageRoundTripTime
    * Average network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \Beta\Microsoft\Graph\Model\Duration $val The value to assign to the averageRoundTripTime
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageRoundTripTime($val)
    {
        $this->_propDict["averageRoundTripTime"] = $val;
         return $this;
    }

    /**
    * Gets the averageVideoFrameLossPercentage
    * Average percentage of video frames lost as displayed to the user.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The averageVideoFrameLossPercentage
    */
    public function getAverageVideoFrameLossPercentage()
    {
        if (array_key_exists("averageVideoFrameLossPercentage", $this->_propDict)) {
            if (is_a($this->_propDict["averageVideoFrameLossPercentage"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["averageVideoFrameLossPercentage"];
            } else {
                $this->_propDict["averageVideoFrameLossPercentage"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["averageVideoFrameLossPercentage"]);
                return $this->_propDict["averageVideoFrameLossPercentage"];
            }
        }
        return null;
    }

    /**
    * Sets the averageVideoFrameLossPercentage
    * Average percentage of video frames lost as displayed to the user.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the averageVideoFrameLossPercentage
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageVideoFrameLossPercentage($val)
    {
        $this->_propDict["averageVideoFrameLossPercentage"] = $val;
         return $this;
    }

    /**
    * Gets the averageVideoFrameRate
    * Average frames per second received for a video stream, computed over the duration of the session.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The averageVideoFrameRate
    */
    public function getAverageVideoFrameRate()
    {
        if (array_key_exists("averageVideoFrameRate", $this->_propDict)) {
            if (is_a($this->_propDict["averageVideoFrameRate"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["averageVideoFrameRate"];
            } else {
                $this->_propDict["averageVideoFrameRate"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["averageVideoFrameRate"]);
                return $this->_propDict["averageVideoFrameRate"];
            }
        }
        return null;
    }

    /**
    * Sets the averageVideoFrameRate
    * Average frames per second received for a video stream, computed over the duration of the session.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the averageVideoFrameRate
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageVideoFrameRate($val)
    {
        $this->_propDict["averageVideoFrameRate"] = $val;
         return $this;
    }

    /**
    * Gets the averageVideoPacketLossRate
    * Average fraction of packets lost, as specified in [RFC 3550][], computed over the duration of the session.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The averageVideoPacketLossRate
    */
    public function getAverageVideoPacketLossRate()
    {
        if (array_key_exists("averageVideoPacketLossRate", $this->_propDict)) {
            if (is_a($this->_propDict["averageVideoPacketLossRate"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["averageVideoPacketLossRate"];
            } else {
                $this->_propDict["averageVideoPacketLossRate"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["averageVideoPacketLossRate"]);
                return $this->_propDict["averageVideoPacketLossRate"];
            }
        }
        return null;
    }

    /**
    * Sets the averageVideoPacketLossRate
    * Average fraction of packets lost, as specified in [RFC 3550][], computed over the duration of the session.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the averageVideoPacketLossRate
    *
    * @return MediaStream The MediaStream
    */
    public function setAverageVideoPacketLossRate($val)
    {
        $this->_propDict["averageVideoPacketLossRate"] = $val;
         return $this;
    }

    /**
    * Gets the endDateTime
    * UTC time when the stream ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    * UTC time when the stream ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return MediaStream The MediaStream
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lowFrameRateRatio
    * Fraction of the call where frame rate is less than 7.5 frames per second.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The lowFrameRateRatio
    */
    public function getLowFrameRateRatio()
    {
        if (array_key_exists("lowFrameRateRatio", $this->_propDict)) {
            if (is_a($this->_propDict["lowFrameRateRatio"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["lowFrameRateRatio"];
            } else {
                $this->_propDict["lowFrameRateRatio"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["lowFrameRateRatio"]);
                return $this->_propDict["lowFrameRateRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the lowFrameRateRatio
    * Fraction of the call where frame rate is less than 7.5 frames per second.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the lowFrameRateRatio
    *
    * @return MediaStream The MediaStream
    */
    public function setLowFrameRateRatio($val)
    {
        $this->_propDict["lowFrameRateRatio"] = $val;
         return $this;
    }

    /**
    * Gets the lowVideoProcessingCapabilityRatio
    * Fraction of the call that the client is running less than 70% expected video processing capability.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The lowVideoProcessingCapabilityRatio
    */
    public function getLowVideoProcessingCapabilityRatio()
    {
        if (array_key_exists("lowVideoProcessingCapabilityRatio", $this->_propDict)) {
            if (is_a($this->_propDict["lowVideoProcessingCapabilityRatio"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["lowVideoProcessingCapabilityRatio"];
            } else {
                $this->_propDict["lowVideoProcessingCapabilityRatio"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["lowVideoProcessingCapabilityRatio"]);
                return $this->_propDict["lowVideoProcessingCapabilityRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the lowVideoProcessingCapabilityRatio
    * Fraction of the call that the client is running less than 70% expected video processing capability.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the lowVideoProcessingCapabilityRatio
    *
    * @return MediaStream The MediaStream
    */
    public function setLowVideoProcessingCapabilityRatio($val)
    {
        $this->_propDict["lowVideoProcessingCapabilityRatio"] = $val;
         return $this;
    }

    /**
    * Gets the maxAudioNetworkJitter
    * Maximum of audio network jitter computed over each of the 20 second windows during the session, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \Beta\Microsoft\Graph\Model\Duration The maxAudioNetworkJitter
    */
    public function getMaxAudioNetworkJitter()
    {
        if (array_key_exists("maxAudioNetworkJitter", $this->_propDict)) {
            if (is_a($this->_propDict["maxAudioNetworkJitter"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["maxAudioNetworkJitter"];
            } else {
                $this->_propDict["maxAudioNetworkJitter"] = new \Beta\Microsoft\Graph\Model\Duration($this->_propDict["maxAudioNetworkJitter"]);
                return $this->_propDict["maxAudioNetworkJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the maxAudioNetworkJitter
    * Maximum of audio network jitter computed over each of the 20 second windows during the session, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \Beta\Microsoft\Graph\Model\Duration $val The value to assign to the maxAudioNetworkJitter
    *
    * @return MediaStream The MediaStream
    */
    public function setMaxAudioNetworkJitter($val)
    {
        $this->_propDict["maxAudioNetworkJitter"] = $val;
         return $this;
    }

    /**
    * Gets the maxJitter
    * Maximum jitter for the stream computed as specified in RFC 3550, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \Beta\Microsoft\Graph\Model\Duration The maxJitter
    */
    public function getMaxJitter()
    {
        if (array_key_exists("maxJitter", $this->_propDict)) {
            if (is_a($this->_propDict["maxJitter"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["maxJitter"];
            } else {
                $this->_propDict["maxJitter"] = new \Beta\Microsoft\Graph\Model\Duration($this->_propDict["maxJitter"]);
                return $this->_propDict["maxJitter"];
            }
        }
        return null;
    }

    /**
    * Sets the maxJitter
    * Maximum jitter for the stream computed as specified in RFC 3550, denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \Beta\Microsoft\Graph\Model\Duration $val The value to assign to the maxJitter
    *
    * @return MediaStream The MediaStream
    */
    public function setMaxJitter($val)
    {
        $this->_propDict["maxJitter"] = $val;
         return $this;
    }

    /**
    * Gets the maxPacketLossRate
    * Maximum packet loss rate for the stream.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The maxPacketLossRate
    */
    public function getMaxPacketLossRate()
    {
        if (array_key_exists("maxPacketLossRate", $this->_propDict)) {
            if (is_a($this->_propDict["maxPacketLossRate"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["maxPacketLossRate"];
            } else {
                $this->_propDict["maxPacketLossRate"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["maxPacketLossRate"]);
                return $this->_propDict["maxPacketLossRate"];
            }
        }
        return null;
    }

    /**
    * Sets the maxPacketLossRate
    * Maximum packet loss rate for the stream.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the maxPacketLossRate
    *
    * @return MediaStream The MediaStream
    */
    public function setMaxPacketLossRate($val)
    {
        $this->_propDict["maxPacketLossRate"] = $val;
         return $this;
    }

    /**
    * Gets the maxRatioOfConcealedSamples
    * Maximum ratio of packets concealed by the healer.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The maxRatioOfConcealedSamples
    */
    public function getMaxRatioOfConcealedSamples()
    {
        if (array_key_exists("maxRatioOfConcealedSamples", $this->_propDict)) {
            if (is_a($this->_propDict["maxRatioOfConcealedSamples"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["maxRatioOfConcealedSamples"];
            } else {
                $this->_propDict["maxRatioOfConcealedSamples"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["maxRatioOfConcealedSamples"]);
                return $this->_propDict["maxRatioOfConcealedSamples"];
            }
        }
        return null;
    }

    /**
    * Sets the maxRatioOfConcealedSamples
    * Maximum ratio of packets concealed by the healer.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the maxRatioOfConcealedSamples
    *
    * @return MediaStream The MediaStream
    */
    public function setMaxRatioOfConcealedSamples($val)
    {
        $this->_propDict["maxRatioOfConcealedSamples"] = $val;
         return $this;
    }

    /**
    * Gets the maxRoundTripTime
    * Maximum network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @return \Beta\Microsoft\Graph\Model\Duration The maxRoundTripTime
    */
    public function getMaxRoundTripTime()
    {
        if (array_key_exists("maxRoundTripTime", $this->_propDict)) {
            if (is_a($this->_propDict["maxRoundTripTime"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["maxRoundTripTime"];
            } else {
                $this->_propDict["maxRoundTripTime"] = new \Beta\Microsoft\Graph\Model\Duration($this->_propDict["maxRoundTripTime"]);
                return $this->_propDict["maxRoundTripTime"];
            }
        }
        return null;
    }

    /**
    * Sets the maxRoundTripTime
    * Maximum network propagation round-trip time computed as specified in [RFC 3550][], denoted in [ISO 8601][] format. For example, 1 second is denoted as 'PT1S', where 'P' is the duration designator, 'T' is the time designator, and 'S' is the second designator.
    *
    * @param \Beta\Microsoft\Graph\Model\Duration $val The value to assign to the maxRoundTripTime
    *
    * @return MediaStream The MediaStream
    */
    public function setMaxRoundTripTime($val)
    {
        $this->_propDict["maxRoundTripTime"] = $val;
         return $this;
    }
    /**
    * Gets the packetUtilization
    * Packet count for the stream.
    *
    * @return int The packetUtilization
    */
    public function getPacketUtilization()
    {
        if (array_key_exists("packetUtilization", $this->_propDict)) {
            return $this->_propDict["packetUtilization"];
        } else {
            return null;
        }
    }

    /**
    * Sets the packetUtilization
    * Packet count for the stream.
    *
    * @param int $val The value of the packetUtilization
    *
    * @return MediaStream
    */
    public function setPacketUtilization($val)
    {
        $this->_propDict["packetUtilization"] = $val;
        return $this;
    }

    /**
    * Gets the postForwardErrorCorrectionPacketLossRate
    * Packet loss rate after FEC has been applied aggregated across all video streams and codecs.
    *
    * @return \Beta\Microsoft\Graph\Model\Single The postForwardErrorCorrectionPacketLossRate
    */
    public function getPostForwardErrorCorrectionPacketLossRate()
    {
        if (array_key_exists("postForwardErrorCorrectionPacketLossRate", $this->_propDict)) {
            if (is_a($this->_propDict["postForwardErrorCorrectionPacketLossRate"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["postForwardErrorCorrectionPacketLossRate"];
            } else {
                $this->_propDict["postForwardErrorCorrectionPacketLossRate"] = new \Beta\Microsoft\Graph\Model\Single($this->_propDict["postForwardErrorCorrectionPacketLossRate"]);
                return $this->_propDict["postForwardErrorCorrectionPacketLossRate"];
            }
        }
        return null;
    }

    /**
    * Sets the postForwardErrorCorrectionPacketLossRate
    * Packet loss rate after FEC has been applied aggregated across all video streams and codecs.
    *
    * @param \Beta\Microsoft\Graph\Model\Single $val The value to assign to the postForwardErrorCorrectionPacketLossRate
    *
    * @return MediaStream The MediaStream
    */
    public function setPostForwardErrorCorrectionPacketLossRate($val)
    {
        $this->_propDict["postForwardErrorCorrectionPacketLossRate"] = $val;
         return $this;
    }

    /**
    * Gets the startDateTime
    * UTC time when the stream started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * UTC time when the stream started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return MediaStream The MediaStream
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the streamDirection
    * Indicates the direction of the media stream. Possible values are: callerToCallee, calleeToCaller.
    *
    * @return MediaStreamDirection The streamDirection
    */
    public function getStreamDirection()
    {
        if (array_key_exists("streamDirection", $this->_propDict)) {
            if (is_a($this->_propDict["streamDirection"], "\Beta\Microsoft\Graph\CallRecords\Model\MediaStreamDirection")) {
                return $this->_propDict["streamDirection"];
            } else {
                $this->_propDict["streamDirection"] = new MediaStreamDirection($this->_propDict["streamDirection"]);
                return $this->_propDict["streamDirection"];
            }
        }
        return null;
    }

    /**
    * Sets the streamDirection
    * Indicates the direction of the media stream. Possible values are: callerToCallee, calleeToCaller.
    *
    * @param MediaStreamDirection $val The value to assign to the streamDirection
    *
    * @return MediaStream The MediaStream
    */
    public function setStreamDirection($val)
    {
        $this->_propDict["streamDirection"] = $val;
         return $this;
    }
    /**
    * Gets the streamId
    * Unique identifier for the stream.
    *
    * @return string The streamId
    */
    public function getStreamId()
    {
        if (array_key_exists("streamId", $this->_propDict)) {
            return $this->_propDict["streamId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the streamId
    * Unique identifier for the stream.
    *
    * @param string $val The value of the streamId
    *
    * @return MediaStream
    */
    public function setStreamId($val)
    {
        $this->_propDict["streamId"] = $val;
        return $this;
    }
    /**
    * Gets the wasMediaBypassed
    * True if the media stream bypassed the Mediation Server and went straight between client and PSTN Gateway/PBX, false otherwise.
    *
    * @return bool The wasMediaBypassed
    */
    public function getWasMediaBypassed()
    {
        if (array_key_exists("wasMediaBypassed", $this->_propDict)) {
            return $this->_propDict["wasMediaBypassed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wasMediaBypassed
    * True if the media stream bypassed the Mediation Server and went straight between client and PSTN Gateway/PBX, false otherwise.
    *
    * @param bool $val The value of the wasMediaBypassed
    *
    * @return MediaStream
    */
    public function setWasMediaBypassed($val)
    {
        $this->_propDict["wasMediaBypassed"] = $val;
        return $this;
    }
}
