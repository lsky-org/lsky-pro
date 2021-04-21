<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationMaxCacheSizeAbsolute File
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
* DeliveryOptimizationMaxCacheSizeAbsolute class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationMaxCacheSizeAbsolute extends DeliveryOptimizationMaxCacheSize
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deliveryOptimizationMaxCacheSizeAbsolute");
    }

    /**
    * Gets the maximumCacheSizeInGigabytes
    * The value 0 (zero) means "unlimited" cache. Delivery Optimization will clear the cache when the device is running low on disk space. Valid values 0 to 4294967295
    *
    * @return int The maximumCacheSizeInGigabytes
    */
    public function getMaximumCacheSizeInGigabytes()
    {
        if (array_key_exists("maximumCacheSizeInGigabytes", $this->_propDict)) {
            return $this->_propDict["maximumCacheSizeInGigabytes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumCacheSizeInGigabytes
    * The value 0 (zero) means "unlimited" cache. Delivery Optimization will clear the cache when the device is running low on disk space. Valid values 0 to 4294967295
    *
    * @param int $val The value of the maximumCacheSizeInGigabytes
    *
    * @return DeliveryOptimizationMaxCacheSizeAbsolute
    */
    public function setMaximumCacheSizeInGigabytes($val)
    {
        $this->_propDict["maximumCacheSizeInGigabytes"] = $val;
        return $this;
    }
}
