<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessPlatforms File
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
* ConditionalAccessPlatforms class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessPlatforms extends Entity
{

    /**
    * Gets the excludePlatforms
    * Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue.
    *
    * @return ConditionalAccessDevicePlatform The excludePlatforms
    */
    public function getExcludePlatforms()
    {
        if (array_key_exists("excludePlatforms", $this->_propDict)) {
            if (is_a($this->_propDict["excludePlatforms"], "\Beta\Microsoft\Graph\Model\ConditionalAccessDevicePlatform")) {
                return $this->_propDict["excludePlatforms"];
            } else {
                $this->_propDict["excludePlatforms"] = new ConditionalAccessDevicePlatform($this->_propDict["excludePlatforms"]);
                return $this->_propDict["excludePlatforms"];
            }
        }
        return null;
    }

    /**
    * Sets the excludePlatforms
    * Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue.
    *
    * @param ConditionalAccessDevicePlatform $val The value to assign to the excludePlatforms
    *
    * @return ConditionalAccessPlatforms The ConditionalAccessPlatforms
    */
    public function setExcludePlatforms($val)
    {
        $this->_propDict["excludePlatforms"] = $val;
         return $this;
    }

    /**
    * Gets the includePlatforms
    * Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue.
    *
    * @return ConditionalAccessDevicePlatform The includePlatforms
    */
    public function getIncludePlatforms()
    {
        if (array_key_exists("includePlatforms", $this->_propDict)) {
            if (is_a($this->_propDict["includePlatforms"], "\Beta\Microsoft\Graph\Model\ConditionalAccessDevicePlatform")) {
                return $this->_propDict["includePlatforms"];
            } else {
                $this->_propDict["includePlatforms"] = new ConditionalAccessDevicePlatform($this->_propDict["includePlatforms"]);
                return $this->_propDict["includePlatforms"];
            }
        }
        return null;
    }

    /**
    * Sets the includePlatforms
    * Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue.
    *
    * @param ConditionalAccessDevicePlatform $val The value to assign to the includePlatforms
    *
    * @return ConditionalAccessPlatforms The ConditionalAccessPlatforms
    */
    public function setIncludePlatforms($val)
    {
        $this->_propDict["includePlatforms"] = $val;
         return $this;
    }
}
