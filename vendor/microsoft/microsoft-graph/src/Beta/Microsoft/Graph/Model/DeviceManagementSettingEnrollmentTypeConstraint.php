<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingEnrollmentTypeConstraint File
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
* DeviceManagementSettingEnrollmentTypeConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingEnrollmentTypeConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementSettingEnrollmentTypeConstraint");
    }

    /**
    * Gets the enrollmentTypes
    * List of enrollment types
    *
    * @return string The enrollmentTypes
    */
    public function getEnrollmentTypes()
    {
        if (array_key_exists("enrollmentTypes", $this->_propDict)) {
            return $this->_propDict["enrollmentTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enrollmentTypes
    * List of enrollment types
    *
    * @param string $val The value of the enrollmentTypes
    *
    * @return DeviceManagementSettingEnrollmentTypeConstraint
    */
    public function setEnrollmentTypes($val)
    {
        $this->_propDict["enrollmentTypes"] = $val;
        return $this;
    }
}
