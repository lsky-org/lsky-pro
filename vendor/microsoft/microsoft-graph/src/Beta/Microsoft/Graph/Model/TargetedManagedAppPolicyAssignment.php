<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetedManagedAppPolicyAssignment File
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
* TargetedManagedAppPolicyAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TargetedManagedAppPolicyAssignment extends Entity
{
    /**
    * Gets the source
    * Type of resource used for deployment to a group, direct or parcel/policySet. Possible values are: direct, policySets.
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
    * Type of resource used for deployment to a group, direct or parcel/policySet. Possible values are: direct, policySets.
    *
    * @param DeviceAndAppManagementAssignmentSource $val The source
    *
    * @return TargetedManagedAppPolicyAssignment
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceId
    * Identifier for resource used for deployment to a group
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
    * Identifier for resource used for deployment to a group
    *
    * @param string $val The sourceId
    *
    * @return TargetedManagedAppPolicyAssignment
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    * Identifier for deployment to a group or app
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
    * Identifier for deployment to a group or app
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return TargetedManagedAppPolicyAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}
