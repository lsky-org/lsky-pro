<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationMaxCacheSizePercentage File
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
* DeliveryOptimizationMaxCacheSizePercentage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationMaxCacheSizePercentage extends DeliveryOptimizationMaxCacheSize
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deliveryOptimizationMaxCacheSizePercentage");
    }

    /**
    * Gets the maximumCacheSizePercentage
    * Specifies the maximum cache size that Delivery Optimization can utilize, as a percentage of disk size (1-100). Valid values 1 to 100
    *
    * @return int The maximumCacheSizePercentage
    */
    public function getMaximumCacheSizePercentage()
    {
        if (array_key_exists("maximumCacheSizePercentage", $this->_propDict)) {
            return $this->_propDict["maximumCacheSizePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumCacheSizePercentage
    * Specifies the maximum cache size that Delivery Optimization can utilize, as a percentage of disk size (1-100). Valid values 1 to 100
    *
    * @param int $val The value of the maximumCacheSizePercentage
    *
    * @return DeliveryOptimizationMaxCacheSizePercentage
    */
    public function setMaximumCacheSizePercentage($val)
    {
        $this->_propDict["maximumCacheSizePercentage"] = $val;
        return $this;
    }
}
