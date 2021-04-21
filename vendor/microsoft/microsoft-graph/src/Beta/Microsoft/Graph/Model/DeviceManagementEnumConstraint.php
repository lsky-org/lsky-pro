<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementEnumConstraint File
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
* DeviceManagementEnumConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementEnumConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementEnumConstraint");
    }


    /**
    * Gets the values
    * List of valid values for this string
    *
    * @return DeviceManagementEnumValue The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
            if (is_a($this->_propDict["values"], "\Beta\Microsoft\Graph\Model\DeviceManagementEnumValue")) {
                return $this->_propDict["values"];
            } else {
                $this->_propDict["values"] = new DeviceManagementEnumValue($this->_propDict["values"]);
                return $this->_propDict["values"];
            }
        }
        return null;
    }

    /**
    * Sets the values
    * List of valid values for this string
    *
    * @param DeviceManagementEnumValue $val The value to assign to the values
    *
    * @return DeviceManagementEnumConstraint The DeviceManagementEnumConstraint
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
         return $this;
    }
}
