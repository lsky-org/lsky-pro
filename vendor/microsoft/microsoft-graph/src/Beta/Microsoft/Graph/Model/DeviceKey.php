<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceKey File
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
* DeviceKey class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceKey extends Entity
{
    /**
    * Gets the deviceId
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    *
    * @param string $val The value of the deviceId
    *
    * @return DeviceKey
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the keyMaterial
    *
    * @return \GuzzleHttp\Psr7\Stream The keyMaterial
    */
    public function getKeyMaterial()
    {
        if (array_key_exists("keyMaterial", $this->_propDict)) {
            if (is_a($this->_propDict["keyMaterial"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["keyMaterial"];
            } else {
                $this->_propDict["keyMaterial"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["keyMaterial"]);
                return $this->_propDict["keyMaterial"];
            }
        }
        return null;
    }

    /**
    * Sets the keyMaterial
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the keyMaterial
    *
    * @return DeviceKey The DeviceKey
    */
    public function setKeyMaterial($val)
    {
        $this->_propDict["keyMaterial"] = $val;
         return $this;
    }
    /**
    * Gets the keyType
    *
    * @return string The keyType
    */
    public function getKeyType()
    {
        if (array_key_exists("keyType", $this->_propDict)) {
            return $this->_propDict["keyType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keyType
    *
    * @param string $val The value of the keyType
    *
    * @return DeviceKey
    */
    public function setKeyType($val)
    {
        $this->_propDict["keyType"] = $val;
        return $this;
    }
}
