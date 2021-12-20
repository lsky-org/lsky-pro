<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChromeOSDeviceProperty File
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
* ChromeOSDeviceProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChromeOSDeviceProperty extends Entity
{
    /**
    * Gets the name
    * Name of the property
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name of the property
    *
    * @param string $val The value of the name
    *
    * @return ChromeOSDeviceProperty
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the updatable
    * Whether this property is updatable
    *
    * @return bool The updatable
    */
    public function getUpdatable()
    {
        if (array_key_exists("updatable", $this->_propDict)) {
            return $this->_propDict["updatable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the updatable
    * Whether this property is updatable
    *
    * @param bool $val The value of the updatable
    *
    * @return ChromeOSDeviceProperty
    */
    public function setUpdatable($val)
    {
        $this->_propDict["updatable"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Value of the property
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Value of the property
    *
    * @param string $val The value of the value
    *
    * @return ChromeOSDeviceProperty
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
    /**
    * Gets the valueType
    * Type of the value
    *
    * @return string The valueType
    */
    public function getValueType()
    {
        if (array_key_exists("valueType", $this->_propDict)) {
            return $this->_propDict["valueType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the valueType
    * Type of the value
    *
    * @param string $val The value of the valueType
    *
    * @return ChromeOSDeviceProperty
    */
    public function setValueType($val)
    {
        $this->_propDict["valueType"] = $val;
        return $this;
    }
}
