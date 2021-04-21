<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAndAppManagementAssignmentTarget File
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
* DeviceAndAppManagementAssignmentTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAndAppManagementAssignmentTarget extends Entity
{
    /**
    * Gets the deviceAndAppManagementAssignmentFilterId
    * The Id of the filter for the target assignment.
    *
    * @return string The deviceAndAppManagementAssignmentFilterId
    */
    public function getDeviceAndAppManagementAssignmentFilterId()
    {
        if (array_key_exists("deviceAndAppManagementAssignmentFilterId", $this->_propDict)) {
            return $this->_propDict["deviceAndAppManagementAssignmentFilterId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceAndAppManagementAssignmentFilterId
    * The Id of the filter for the target assignment.
    *
    * @param string $val The value of the deviceAndAppManagementAssignmentFilterId
    *
    * @return DeviceAndAppManagementAssignmentTarget
    */
    public function setDeviceAndAppManagementAssignmentFilterId($val)
    {
        $this->_propDict["deviceAndAppManagementAssignmentFilterId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceAndAppManagementAssignmentFilterType
    * The type of filter of the target assignment i.e. Exclude or Include. Possible values are: none, include, exclude.
    *
    * @return DeviceAndAppManagementAssignmentFilterType The deviceAndAppManagementAssignmentFilterType
    */
    public function getDeviceAndAppManagementAssignmentFilterType()
    {
        if (array_key_exists("deviceAndAppManagementAssignmentFilterType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceAndAppManagementAssignmentFilterType"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentFilterType")) {
                return $this->_propDict["deviceAndAppManagementAssignmentFilterType"];
            } else {
                $this->_propDict["deviceAndAppManagementAssignmentFilterType"] = new DeviceAndAppManagementAssignmentFilterType($this->_propDict["deviceAndAppManagementAssignmentFilterType"]);
                return $this->_propDict["deviceAndAppManagementAssignmentFilterType"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceAndAppManagementAssignmentFilterType
    * The type of filter of the target assignment i.e. Exclude or Include. Possible values are: none, include, exclude.
    *
    * @param DeviceAndAppManagementAssignmentFilterType $val The value to assign to the deviceAndAppManagementAssignmentFilterType
    *
    * @return DeviceAndAppManagementAssignmentTarget The DeviceAndAppManagementAssignmentTarget
    */
    public function setDeviceAndAppManagementAssignmentFilterType($val)
    {
        $this->_propDict["deviceAndAppManagementAssignmentFilterType"] = $val;
         return $this;
    }
}
