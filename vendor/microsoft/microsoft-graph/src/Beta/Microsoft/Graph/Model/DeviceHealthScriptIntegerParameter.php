<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptIntegerParameter File
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
* DeviceHealthScriptIntegerParameter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptIntegerParameter extends DeviceHealthScriptParameter
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceHealthScriptIntegerParameter");
    }

    /**
    * Gets the defaultValue
    * The default value of Integer param. Valid values -2147483648 to 2147483647
    *
    * @return int The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            return $this->_propDict["defaultValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultValue
    * The default value of Integer param. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the defaultValue
    *
    * @return DeviceHealthScriptIntegerParameter
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
}
