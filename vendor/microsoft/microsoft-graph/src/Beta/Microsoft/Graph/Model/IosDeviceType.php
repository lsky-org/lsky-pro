<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosDeviceType File
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
* IosDeviceType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosDeviceType extends Entity
{
    /**
    * Gets the iPad
    * Whether the app should run on iPads.
    *
    * @return bool The iPad
    */
    public function getIPad()
    {
        if (array_key_exists("iPad", $this->_propDict)) {
            return $this->_propDict["iPad"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iPad
    * Whether the app should run on iPads.
    *
    * @param bool $val The value of the iPad
    *
    * @return IosDeviceType
    */
    public function setIPad($val)
    {
        $this->_propDict["iPad"] = $val;
        return $this;
    }
    /**
    * Gets the iPhoneAndIPod
    * Whether the app should run on iPhones and iPods.
    *
    * @return bool The iPhoneAndIPod
    */
    public function getIPhoneAndIPod()
    {
        if (array_key_exists("iPhoneAndIPod", $this->_propDict)) {
            return $this->_propDict["iPhoneAndIPod"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iPhoneAndIPod
    * Whether the app should run on iPhones and iPods.
    *
    * @param bool $val The value of the iPhoneAndIPod
    *
    * @return IosDeviceType
    */
    public function setIPhoneAndIPod($val)
    {
        $this->_propDict["iPhoneAndIPod"] = $val;
        return $this;
    }
}
