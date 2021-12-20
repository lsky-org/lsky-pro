<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeleconferenceDeviceVideoQuality File
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
* TeleconferenceDeviceVideoQuality class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeleconferenceDeviceVideoQuality extends TeleconferenceDeviceMediaQuality
{
    /**
    * Gets the averageInboundBitRate
    * The average inbound stream video bit rate per second.
    *
    * @return float The averageInboundBitRate
    */
    public function getAverageInboundBitRate()
    {
        if (array_key_exists("averageInboundBitRate", $this->_propDict)) {
            return $this->_propDict["averageInboundBitRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageInboundBitRate
    * The average inbound stream video bit rate per second.
    *
    * @param float $val The value of the averageInboundBitRate
    *
    * @return TeleconferenceDeviceVideoQuality
    */
    public function setAverageInboundBitRate($val)
    {
        $this->_propDict["averageInboundBitRate"] = $val;
        return $this;
    }
    /**
    * Gets the averageInboundFrameRate
    * The average inbound stream video frame rate per second.
    *
    * @return float The averageInboundFrameRate
    */
    public function getAverageInboundFrameRate()
    {
        if (array_key_exists("averageInboundFrameRate", $this->_propDict)) {
            return $this->_propDict["averageInboundFrameRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageInboundFrameRate
    * The average inbound stream video frame rate per second.
    *
    * @param float $val The value of the averageInboundFrameRate
    *
    * @return TeleconferenceDeviceVideoQuality
    */
    public function setAverageInboundFrameRate($val)
    {
        $this->_propDict["averageInboundFrameRate"] = $val;
        return $this;
    }
    /**
    * Gets the averageOutboundBitRate
    * The average outbound stream video bit rate per second.
    *
    * @return float The averageOutboundBitRate
    */
    public function getAverageOutboundBitRate()
    {
        if (array_key_exists("averageOutboundBitRate", $this->_propDict)) {
            return $this->_propDict["averageOutboundBitRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageOutboundBitRate
    * The average outbound stream video bit rate per second.
    *
    * @param float $val The value of the averageOutboundBitRate
    *
    * @return TeleconferenceDeviceVideoQuality
    */
    public function setAverageOutboundBitRate($val)
    {
        $this->_propDict["averageOutboundBitRate"] = $val;
        return $this;
    }
    /**
    * Gets the averageOutboundFrameRate
    * The average outbound stream video frame rate per second.
    *
    * @return float The averageOutboundFrameRate
    */
    public function getAverageOutboundFrameRate()
    {
        if (array_key_exists("averageOutboundFrameRate", $this->_propDict)) {
            return $this->_propDict["averageOutboundFrameRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageOutboundFrameRate
    * The average outbound stream video frame rate per second.
    *
    * @param float $val The value of the averageOutboundFrameRate
    *
    * @return TeleconferenceDeviceVideoQuality
    */
    public function setAverageOutboundFrameRate($val)
    {
        $this->_propDict["averageOutboundFrameRate"] = $val;
        return $this;
    }
}
