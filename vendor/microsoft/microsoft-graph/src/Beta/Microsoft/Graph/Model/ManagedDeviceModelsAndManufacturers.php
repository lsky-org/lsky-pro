<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceModelsAndManufacturers File
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
* ManagedDeviceModelsAndManufacturers class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceModelsAndManufacturers extends Entity
{
    /**
    * Gets the deviceManufacturers
    * List of Manufactures for managed devices in the account
    *
    * @return string The deviceManufacturers
    */
    public function getDeviceManufacturers()
    {
        if (array_key_exists("deviceManufacturers", $this->_propDict)) {
            return $this->_propDict["deviceManufacturers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceManufacturers
    * List of Manufactures for managed devices in the account
    *
    * @param string $val The value of the deviceManufacturers
    *
    * @return ManagedDeviceModelsAndManufacturers
    */
    public function setDeviceManufacturers($val)
    {
        $this->_propDict["deviceManufacturers"] = $val;
        return $this;
    }
    /**
    * Gets the deviceModels
    * List of Models for managed devices in the account
    *
    * @return string The deviceModels
    */
    public function getDeviceModels()
    {
        if (array_key_exists("deviceModels", $this->_propDict)) {
            return $this->_propDict["deviceModels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceModels
    * List of Models for managed devices in the account
    *
    * @param string $val The value of the deviceModels
    *
    * @return ManagedDeviceModelsAndManufacturers
    */
    public function setDeviceModels($val)
    {
        $this->_propDict["deviceModels"] = $val;
        return $this;
    }
}
