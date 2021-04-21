<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationBandwidthBusinessHoursLimit File
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
* DeliveryOptimizationBandwidthBusinessHoursLimit class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationBandwidthBusinessHoursLimit extends Entity
{
    /**
    * Gets the bandwidthBeginBusinessHours
    * Specifies the beginning of business hours using a 24-hour clock (0-23). Valid values 0 to 23
    *
    * @return int The bandwidthBeginBusinessHours
    */
    public function getBandwidthBeginBusinessHours()
    {
        if (array_key_exists("bandwidthBeginBusinessHours", $this->_propDict)) {
            return $this->_propDict["bandwidthBeginBusinessHours"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bandwidthBeginBusinessHours
    * Specifies the beginning of business hours using a 24-hour clock (0-23). Valid values 0 to 23
    *
    * @param int $val The value of the bandwidthBeginBusinessHours
    *
    * @return DeliveryOptimizationBandwidthBusinessHoursLimit
    */
    public function setBandwidthBeginBusinessHours($val)
    {
        $this->_propDict["bandwidthBeginBusinessHours"] = $val;
        return $this;
    }
    /**
    * Gets the bandwidthEndBusinessHours
    * Specifies the end of business hours using a 24-hour clock (0-23). Valid values 0 to 23
    *
    * @return int The bandwidthEndBusinessHours
    */
    public function getBandwidthEndBusinessHours()
    {
        if (array_key_exists("bandwidthEndBusinessHours", $this->_propDict)) {
            return $this->_propDict["bandwidthEndBusinessHours"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bandwidthEndBusinessHours
    * Specifies the end of business hours using a 24-hour clock (0-23). Valid values 0 to 23
    *
    * @param int $val The value of the bandwidthEndBusinessHours
    *
    * @return DeliveryOptimizationBandwidthBusinessHoursLimit
    */
    public function setBandwidthEndBusinessHours($val)
    {
        $this->_propDict["bandwidthEndBusinessHours"] = $val;
        return $this;
    }
    /**
    * Gets the bandwidthPercentageDuringBusinessHours
    * Specifies the percentage of bandwidth to limit during business hours (0-100). Valid values 0 to 100
    *
    * @return int The bandwidthPercentageDuringBusinessHours
    */
    public function getBandwidthPercentageDuringBusinessHours()
    {
        if (array_key_exists("bandwidthPercentageDuringBusinessHours", $this->_propDict)) {
            return $this->_propDict["bandwidthPercentageDuringBusinessHours"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bandwidthPercentageDuringBusinessHours
    * Specifies the percentage of bandwidth to limit during business hours (0-100). Valid values 0 to 100
    *
    * @param int $val The value of the bandwidthPercentageDuringBusinessHours
    *
    * @return DeliveryOptimizationBandwidthBusinessHoursLimit
    */
    public function setBandwidthPercentageDuringBusinessHours($val)
    {
        $this->_propDict["bandwidthPercentageDuringBusinessHours"] = $val;
        return $this;
    }
    /**
    * Gets the bandwidthPercentageOutsideBusinessHours
    * Specifies the percentage of bandwidth to limit outsidse business hours (0-100). Valid values 0 to 100
    *
    * @return int The bandwidthPercentageOutsideBusinessHours
    */
    public function getBandwidthPercentageOutsideBusinessHours()
    {
        if (array_key_exists("bandwidthPercentageOutsideBusinessHours", $this->_propDict)) {
            return $this->_propDict["bandwidthPercentageOutsideBusinessHours"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bandwidthPercentageOutsideBusinessHours
    * Specifies the percentage of bandwidth to limit outsidse business hours (0-100). Valid values 0 to 100
    *
    * @param int $val The value of the bandwidthPercentageOutsideBusinessHours
    *
    * @return DeliveryOptimizationBandwidthBusinessHoursLimit
    */
    public function setBandwidthPercentageOutsideBusinessHours($val)
    {
        $this->_propDict["bandwidthPercentageOutsideBusinessHours"] = $val;
        return $this;
    }
}
