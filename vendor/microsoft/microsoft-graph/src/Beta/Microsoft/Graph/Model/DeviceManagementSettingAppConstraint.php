<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingAppConstraint File
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
* DeviceManagementSettingAppConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingAppConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementSettingAppConstraint");
    }

    /**
    * Gets the supportedTypes
    * Acceptable app types to allow for this setting
    *
    * @return string The supportedTypes
    */
    public function getSupportedTypes()
    {
        if (array_key_exists("supportedTypes", $this->_propDict)) {
            return $this->_propDict["supportedTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedTypes
    * Acceptable app types to allow for this setting
    *
    * @param string $val The value of the supportedTypes
    *
    * @return DeviceManagementSettingAppConstraint
    */
    public function setSupportedTypes($val)
    {
        $this->_propDict["supportedTypes"] = $val;
        return $this;
    }
}
