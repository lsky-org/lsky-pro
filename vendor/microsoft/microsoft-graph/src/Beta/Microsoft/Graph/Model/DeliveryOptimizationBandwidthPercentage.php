<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationBandwidthPercentage File
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
* DeliveryOptimizationBandwidthPercentage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationBandwidthPercentage extends DeliveryOptimizationBandwidth
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deliveryOptimizationBandwidthPercentage");
    }

    /**
    * Gets the maximumBackgroundBandwidthPercentage
    * The default value 0 (zero) means that Delivery Optimization dynamically adjusts to use the available bandwidth for background downloads. Valid values 0 to 100
    *
    * @return int The maximumBackgroundBandwidthPercentage
    */
    public function getMaximumBackgroundBandwidthPercentage()
    {
        if (array_key_exists("maximumBackgroundBandwidthPercentage", $this->_propDict)) {
            return $this->_propDict["maximumBackgroundBandwidthPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumBackgroundBandwidthPercentage
    * The default value 0 (zero) means that Delivery Optimization dynamically adjusts to use the available bandwidth for background downloads. Valid values 0 to 100
    *
    * @param int $val The value of the maximumBackgroundBandwidthPercentage
    *
    * @return DeliveryOptimizationBandwidthPercentage
    */
    public function setMaximumBackgroundBandwidthPercentage($val)
    {
        $this->_propDict["maximumBackgroundBandwidthPercentage"] = $val;
        return $this;
    }
    /**
    * Gets the maximumForegroundBandwidthPercentage
    * The default value 0 (zero) means that Delivery Optimization dynamically adjusts to use the available bandwidth for foreground downloads. Valid values 0 to 100
    *
    * @return int The maximumForegroundBandwidthPercentage
    */
    public function getMaximumForegroundBandwidthPercentage()
    {
        if (array_key_exists("maximumForegroundBandwidthPercentage", $this->_propDict)) {
            return $this->_propDict["maximumForegroundBandwidthPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumForegroundBandwidthPercentage
    * The default value 0 (zero) means that Delivery Optimization dynamically adjusts to use the available bandwidth for foreground downloads. Valid values 0 to 100
    *
    * @param int $val The value of the maximumForegroundBandwidthPercentage
    *
    * @return DeliveryOptimizationBandwidthPercentage
    */
    public function setMaximumForegroundBandwidthPercentage($val)
    {
        $this->_propDict["maximumForegroundBandwidthPercentage"] = $val;
        return $this;
    }
}
