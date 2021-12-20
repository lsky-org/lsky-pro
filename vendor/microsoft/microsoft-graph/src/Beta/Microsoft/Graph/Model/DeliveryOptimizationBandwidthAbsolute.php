<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationBandwidthAbsolute File
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
* DeliveryOptimizationBandwidthAbsolute class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationBandwidthAbsolute extends DeliveryOptimizationBandwidth
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deliveryOptimizationBandwidthAbsolute");
    }

    /**
    * Gets the maximumDownloadBandwidthInKilobytesPerSecond
    * The value 0 (zero) means that Delivery Optimization dynamically adjusts to use the available bandwidth for downloads. Valid values 0 to 4294967295
    *
    * @return int The maximumDownloadBandwidthInKilobytesPerSecond
    */
    public function getMaximumDownloadBandwidthInKilobytesPerSecond()
    {
        if (array_key_exists("maximumDownloadBandwidthInKilobytesPerSecond", $this->_propDict)) {
            return $this->_propDict["maximumDownloadBandwidthInKilobytesPerSecond"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumDownloadBandwidthInKilobytesPerSecond
    * The value 0 (zero) means that Delivery Optimization dynamically adjusts to use the available bandwidth for downloads. Valid values 0 to 4294967295
    *
    * @param int $val The value of the maximumDownloadBandwidthInKilobytesPerSecond
    *
    * @return DeliveryOptimizationBandwidthAbsolute
    */
    public function setMaximumDownloadBandwidthInKilobytesPerSecond($val)
    {
        $this->_propDict["maximumDownloadBandwidthInKilobytesPerSecond"] = $val;
        return $this;
    }
    /**
    * Gets the maximumUploadBandwidthInKilobytesPerSecond
    * The default value is 0, which permits unlimited possible bandwidth (optimized for minimal usage of upload bandwidth). Valid values 0 to 4000000
    *
    * @return int The maximumUploadBandwidthInKilobytesPerSecond
    */
    public function getMaximumUploadBandwidthInKilobytesPerSecond()
    {
        if (array_key_exists("maximumUploadBandwidthInKilobytesPerSecond", $this->_propDict)) {
            return $this->_propDict["maximumUploadBandwidthInKilobytesPerSecond"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumUploadBandwidthInKilobytesPerSecond
    * The default value is 0, which permits unlimited possible bandwidth (optimized for minimal usage of upload bandwidth). Valid values 0 to 4000000
    *
    * @param int $val The value of the maximumUploadBandwidthInKilobytesPerSecond
    *
    * @return DeliveryOptimizationBandwidthAbsolute
    */
    public function setMaximumUploadBandwidthInKilobytesPerSecond($val)
    {
        $this->_propDict["maximumUploadBandwidthInKilobytesPerSecond"] = $val;
        return $this;
    }
}
