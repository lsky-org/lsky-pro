<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LicenseAssignmentState File
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
* LicenseAssignmentState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LicenseAssignmentState extends Entity
{
    /**
    * Gets the assignedByGroup
    * The id of the group that assigns this license. If the assignment is a direct-assigned license, this field will be Null. Read-Only.
    *
    * @return string The assignedByGroup
    */
    public function getAssignedByGroup()
    {
        if (array_key_exists("assignedByGroup", $this->_propDict)) {
            return $this->_propDict["assignedByGroup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedByGroup
    * The id of the group that assigns this license. If the assignment is a direct-assigned license, this field will be Null. Read-Only.
    *
    * @param string $val The value of the assignedByGroup
    *
    * @return LicenseAssignmentState
    */
    public function setAssignedByGroup($val)
    {
        $this->_propDict["assignedByGroup"] = $val;
        return $this;
    }
    /**
    * Gets the disabledPlans
    * The service plans that are disabled in this assignment. Read-Only.
    *
    * @return string The disabledPlans
    */
    public function getDisabledPlans()
    {
        if (array_key_exists("disabledPlans", $this->_propDict)) {
            return $this->_propDict["disabledPlans"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disabledPlans
    * The service plans that are disabled in this assignment. Read-Only.
    *
    * @param string $val The value of the disabledPlans
    *
    * @return LicenseAssignmentState
    */
    public function setDisabledPlans($val)
    {
        $this->_propDict["disabledPlans"] = $val;
        return $this;
    }
    /**
    * Gets the error
    * License assignment failure error. If the license is assigned successfully, this field will be Null. Read-Only. Possible values: CountViolation, MutuallyExclusiveViolation, DependencyViolation, ProhibitedInUsageLocationViolation, UniquenessViolation, and Others. For more information on how to identify and resolve license assignment errors see here.
    *
    * @return string The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            return $this->_propDict["error"];
        } else {
            return null;
        }
    }

    /**
    * Sets the error
    * License assignment failure error. If the license is assigned successfully, this field will be Null. Read-Only. Possible values: CountViolation, MutuallyExclusiveViolation, DependencyViolation, ProhibitedInUsageLocationViolation, UniquenessViolation, and Others. For more information on how to identify and resolve license assignment errors see here.
    *
    * @param string $val The value of the error
    *
    * @return LicenseAssignmentState
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }
    /**
    * Gets the skuId
    * The unique identifier for the SKU. Read-Only.
    *
    * @return string The skuId
    */
    public function getSkuId()
    {
        if (array_key_exists("skuId", $this->_propDict)) {
            return $this->_propDict["skuId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skuId
    * The unique identifier for the SKU. Read-Only.
    *
    * @param string $val The value of the skuId
    *
    * @return LicenseAssignmentState
    */
    public function setSkuId($val)
    {
        $this->_propDict["skuId"] = $val;
        return $this;
    }
    /**
    * Gets the state
    * Indicate the current state of this assignment. Read-Only. Possible values: Active, ActiveWithError, Disabled and Error.
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    * Indicate the current state of this assignment. Read-Only. Possible values: Active, ActiveWithError, Disabled and Error.
    *
    * @param string $val The value of the state
    *
    * @return LicenseAssignmentState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
}
