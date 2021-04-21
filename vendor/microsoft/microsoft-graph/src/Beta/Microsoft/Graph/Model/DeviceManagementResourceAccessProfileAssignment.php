<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementResourceAccessProfileAssignment File
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
* DeviceManagementResourceAccessProfileAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementResourceAccessProfileAssignment extends Entity
{
    /**
    * Gets the intent
    * The assignment intent for the resource access profile. Possible values are: apply, remove.
    *
    * @return DeviceManagementResourceAccessProfileIntent The intent
    */
    public function getIntent()
    {
        if (array_key_exists("intent", $this->_propDict)) {
            if (is_a($this->_propDict["intent"], "\Beta\Microsoft\Graph\Model\DeviceManagementResourceAccessProfileIntent")) {
                return $this->_propDict["intent"];
            } else {
                $this->_propDict["intent"] = new DeviceManagementResourceAccessProfileIntent($this->_propDict["intent"]);
                return $this->_propDict["intent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intent
    * The assignment intent for the resource access profile. Possible values are: apply, remove.
    *
    * @param DeviceManagementResourceAccessProfileIntent $val The intent
    *
    * @return DeviceManagementResourceAccessProfileAssignment
    */
    public function setIntent($val)
    {
        $this->_propDict["intent"] = $val;
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
    * @return DeviceManagementResourceAccessProfileAssignment
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    * The assignment target for the resource access profile.
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
    * The assignment target for the resource access profile.
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return DeviceManagementResourceAccessProfileAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}
