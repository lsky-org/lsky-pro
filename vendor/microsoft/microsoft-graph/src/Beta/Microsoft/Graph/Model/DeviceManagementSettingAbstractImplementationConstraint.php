<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingAbstractImplementationConstraint File
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
* DeviceManagementSettingAbstractImplementationConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingAbstractImplementationConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementSettingAbstractImplementationConstraint");
    }

    /**
    * Gets the allowedAbstractImplementationDefinitionIds
    * List of value which means not configured for the setting
    *
    * @return string The allowedAbstractImplementationDefinitionIds
    */
    public function getAllowedAbstractImplementationDefinitionIds()
    {
        if (array_key_exists("allowedAbstractImplementationDefinitionIds", $this->_propDict)) {
            return $this->_propDict["allowedAbstractImplementationDefinitionIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedAbstractImplementationDefinitionIds
    * List of value which means not configured for the setting
    *
    * @param string $val The value of the allowedAbstractImplementationDefinitionIds
    *
    * @return DeviceManagementSettingAbstractImplementationConstraint
    */
    public function setAllowedAbstractImplementationDefinitionIds($val)
    {
        $this->_propDict["allowedAbstractImplementationDefinitionIds"] = $val;
        return $this;
    }
}
