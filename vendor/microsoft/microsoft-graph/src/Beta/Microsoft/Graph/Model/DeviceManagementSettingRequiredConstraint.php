<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingRequiredConstraint File
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
* DeviceManagementSettingRequiredConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingRequiredConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementSettingRequiredConstraint");
    }

    /**
    * Gets the notConfiguredValue
    * List of value which means not configured for the setting
    *
    * @return string The notConfiguredValue
    */
    public function getNotConfiguredValue()
    {
        if (array_key_exists("notConfiguredValue", $this->_propDict)) {
            return $this->_propDict["notConfiguredValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notConfiguredValue
    * List of value which means not configured for the setting
    *
    * @param string $val The value of the notConfiguredValue
    *
    * @return DeviceManagementSettingRequiredConstraint
    */
    public function setNotConfiguredValue($val)
    {
        $this->_propDict["notConfiguredValue"] = $val;
        return $this;
    }
}
