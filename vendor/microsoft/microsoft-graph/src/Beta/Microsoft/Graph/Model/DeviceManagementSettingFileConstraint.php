<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingFileConstraint File
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
* DeviceManagementSettingFileConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingFileConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementSettingFileConstraint");
    }

    /**
    * Gets the supportedExtensions
    * Acceptable file extensions to upload for this setting
    *
    * @return string The supportedExtensions
    */
    public function getSupportedExtensions()
    {
        if (array_key_exists("supportedExtensions", $this->_propDict)) {
            return $this->_propDict["supportedExtensions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedExtensions
    * Acceptable file extensions to upload for this setting
    *
    * @param string $val The value of the supportedExtensions
    *
    * @return DeviceManagementSettingFileConstraint
    */
    public function setSupportedExtensions($val)
    {
        $this->_propDict["supportedExtensions"] = $val;
        return $this;
    }
}
