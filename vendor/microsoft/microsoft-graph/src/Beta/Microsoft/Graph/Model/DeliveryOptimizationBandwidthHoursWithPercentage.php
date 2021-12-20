<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationBandwidthHoursWithPercentage File
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
* DeliveryOptimizationBandwidthHoursWithPercentage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationBandwidthHoursWithPercentage extends DeliveryOptimizationBandwidth
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deliveryOptimizationBandwidthHoursWithPercentage");
    }


    /**
    * Gets the bandwidthBackgroundPercentageHours
    * Background download percentage hours.
    *
    * @return DeliveryOptimizationBandwidthBusinessHoursLimit The bandwidthBackgroundPercentageHours
    */
    public function getBandwidthBackgroundPercentageHours()
    {
        if (array_key_exists("bandwidthBackgroundPercentageHours", $this->_propDict)) {
            if (is_a($this->_propDict["bandwidthBackgroundPercentageHours"], "\Beta\Microsoft\Graph\Model\DeliveryOptimizationBandwidthBusinessHoursLimit")) {
                return $this->_propDict["bandwidthBackgroundPercentageHours"];
            } else {
                $this->_propDict["bandwidthBackgroundPercentageHours"] = new DeliveryOptimizationBandwidthBusinessHoursLimit($this->_propDict["bandwidthBackgroundPercentageHours"]);
                return $this->_propDict["bandwidthBackgroundPercentageHours"];
            }
        }
        return null;
    }

    /**
    * Sets the bandwidthBackgroundPercentageHours
    * Background download percentage hours.
    *
    * @param DeliveryOptimizationBandwidthBusinessHoursLimit $val The value to assign to the bandwidthBackgroundPercentageHours
    *
    * @return DeliveryOptimizationBandwidthHoursWithPercentage The DeliveryOptimizationBandwidthHoursWithPercentage
    */
    public function setBandwidthBackgroundPercentageHours($val)
    {
        $this->_propDict["bandwidthBackgroundPercentageHours"] = $val;
         return $this;
    }

    /**
    * Gets the bandwidthForegroundPercentageHours
    * Foreground download percentage hours.
    *
    * @return DeliveryOptimizationBandwidthBusinessHoursLimit The bandwidthForegroundPercentageHours
    */
    public function getBandwidthForegroundPercentageHours()
    {
        if (array_key_exists("bandwidthForegroundPercentageHours", $this->_propDict)) {
            if (is_a($this->_propDict["bandwidthForegroundPercentageHours"], "\Beta\Microsoft\Graph\Model\DeliveryOptimizationBandwidthBusinessHoursLimit")) {
                return $this->_propDict["bandwidthForegroundPercentageHours"];
            } else {
                $this->_propDict["bandwidthForegroundPercentageHours"] = new DeliveryOptimizationBandwidthBusinessHoursLimit($this->_propDict["bandwidthForegroundPercentageHours"]);
                return $this->_propDict["bandwidthForegroundPercentageHours"];
            }
        }
        return null;
    }

    /**
    * Sets the bandwidthForegroundPercentageHours
    * Foreground download percentage hours.
    *
    * @param DeliveryOptimizationBandwidthBusinessHoursLimit $val The value to assign to the bandwidthForegroundPercentageHours
    *
    * @return DeliveryOptimizationBandwidthHoursWithPercentage The DeliveryOptimizationBandwidthHoursWithPercentage
    */
    public function setBandwidthForegroundPercentageHours($val)
    {
        $this->_propDict["bandwidthForegroundPercentageHours"] = $val;
         return $this;
    }
}
