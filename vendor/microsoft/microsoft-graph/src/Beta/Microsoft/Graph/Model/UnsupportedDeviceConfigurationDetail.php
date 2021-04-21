<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnsupportedDeviceConfigurationDetail File
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
* UnsupportedDeviceConfigurationDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnsupportedDeviceConfigurationDetail extends Entity
{
    /**
    * Gets the message
    * A message explaining why an entity is unsupported.
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * A message explaining why an entity is unsupported.
    *
    * @param string $val The value of the message
    *
    * @return UnsupportedDeviceConfigurationDetail
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the propertyName
    * If message is related to a specific property in the original entity, then the name of that property.
    *
    * @return string The propertyName
    */
    public function getPropertyName()
    {
        if (array_key_exists("propertyName", $this->_propDict)) {
            return $this->_propDict["propertyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propertyName
    * If message is related to a specific property in the original entity, then the name of that property.
    *
    * @param string $val The value of the propertyName
    *
    * @return UnsupportedDeviceConfigurationDetail
    */
    public function setPropertyName($val)
    {
        $this->_propDict["propertyName"] = $val;
        return $this;
    }
}
