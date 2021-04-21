<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingProfileConstraint File
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
* DeviceManagementSettingProfileConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingProfileConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementSettingProfileConstraint");
    }

    /**
    * Gets the source
    * The source of the entity
    *
    * @return string The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            return $this->_propDict["source"];
        } else {
            return null;
        }
    }

    /**
    * Sets the source
    * The source of the entity
    *
    * @param string $val The value of the source
    *
    * @return DeviceManagementSettingProfileConstraint
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
    /**
    * Gets the types
    * A collection of types this entity carries
    *
    * @return string The types
    */
    public function getTypes()
    {
        if (array_key_exists("types", $this->_propDict)) {
            return $this->_propDict["types"];
        } else {
            return null;
        }
    }

    /**
    * Sets the types
    * A collection of types this entity carries
    *
    * @param string $val The value of the types
    *
    * @return DeviceManagementSettingProfileConstraint
    */
    public function setTypes($val)
    {
        $this->_propDict["types"] = $val;
        return $this;
    }
}
