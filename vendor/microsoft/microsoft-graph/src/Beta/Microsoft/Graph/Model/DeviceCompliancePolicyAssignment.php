<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicyAssignment File
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
* DeviceCompliancePolicyAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceCompliancePolicyAssignment extends Entity
{
    /**
    * Gets the source
    * The assignment source for the device compliance policy, direct or parcel/policySet. Possible values are: direct, policySets.
    *
    * @return DeviceAndAppManagementAssignmentSource The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentSource")) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new DeviceAndAppManagementAssignmentSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }
    
    /**
    * Sets the source
    * The assignment source for the device compliance policy, direct or parcel/policySet. Possible values are: direct, policySets.
    *
    * @param DeviceAndAppManagementAssignmentSource $val The source
    *
    * @return DeviceCompliancePolicyAssignment
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceId
    * The identifier of the source of the assignment.
    *
    * @return string The sourceId
    */
    public function getSourceId()
    {
        if (array_key_exists("sourceId", $this->_propDict)) {
            return $this->_propDict["sourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sourceId
    * The identifier of the source of the assignment.
    *
    * @param string $val The sourceId
    *
    * @return DeviceCompliancePolicyAssignment
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    * Target for the compliance policy assignment.
    *
    * @return DeviceAndAppManagementAssignmentTarget The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentTarget")) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new DeviceAndAppManagementAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }
    
    /**
    * Sets the target
    * Target for the compliance policy assignment.
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return DeviceCompliancePolicyAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}
