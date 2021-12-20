<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleDeviceFeaturesConfigurationBase File
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
* AppleDeviceFeaturesConfigurationBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleDeviceFeaturesConfigurationBase extends DeviceConfiguration
{

     /** 
     * Gets the airPrintDestinations
    * An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
     *
     * @return array The airPrintDestinations
     */
    public function getAirPrintDestinations()
    {
        if (array_key_exists("airPrintDestinations", $this->_propDict)) {
           return $this->_propDict["airPrintDestinations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the airPrintDestinations
    * An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
    *
    * @param AirPrintDestination $val The airPrintDestinations
    *
    * @return AppleDeviceFeaturesConfigurationBase
    */
    public function setAirPrintDestinations($val)
    {
		$this->_propDict["airPrintDestinations"] = $val;
        return $this;
    }
    
}
