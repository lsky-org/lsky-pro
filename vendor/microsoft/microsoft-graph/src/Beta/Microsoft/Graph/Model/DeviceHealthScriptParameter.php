<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptParameter File
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
* DeviceHealthScriptParameter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptParameter extends Entity
{
    /**
    * Gets the applyDefaultValueWhenNotAssigned
    * Whether Apply DefaultValue When Not Assigned
    *
    * @return bool The applyDefaultValueWhenNotAssigned
    */
    public function getApplyDefaultValueWhenNotAssigned()
    {
        if (array_key_exists("applyDefaultValueWhenNotAssigned", $this->_propDict)) {
            return $this->_propDict["applyDefaultValueWhenNotAssigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applyDefaultValueWhenNotAssigned
    * Whether Apply DefaultValue When Not Assigned
    *
    * @param bool $val The value of the applyDefaultValueWhenNotAssigned
    *
    * @return DeviceHealthScriptParameter
    */
    public function setApplyDefaultValueWhenNotAssigned($val)
    {
        $this->_propDict["applyDefaultValueWhenNotAssigned"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * The description of the param
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of the param
    *
    * @param string $val The value of the description
    *
    * @return DeviceHealthScriptParameter
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the isRequired
    * Whether the param is required
    *
    * @return bool The isRequired
    */
    public function getIsRequired()
    {
        if (array_key_exists("isRequired", $this->_propDict)) {
            return $this->_propDict["isRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequired
    * Whether the param is required
    *
    * @param bool $val The value of the isRequired
    *
    * @return DeviceHealthScriptParameter
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The name of the param
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
    * The name of the param
    *
    * @param string $val The value of the name
    *
    * @return DeviceHealthScriptParameter
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
