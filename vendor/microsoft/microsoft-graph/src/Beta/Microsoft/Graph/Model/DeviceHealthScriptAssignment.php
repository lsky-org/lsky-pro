<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptAssignment File
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
* DeviceHealthScriptAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptAssignment extends Entity
{
    /**
    * Gets the runRemediationScript
    * Determine whether we want to run detection script only or run both detection script and remediation script
    *
    * @return bool The runRemediationScript
    */
    public function getRunRemediationScript()
    {
        if (array_key_exists("runRemediationScript", $this->_propDict)) {
            return $this->_propDict["runRemediationScript"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the runRemediationScript
    * Determine whether we want to run detection script only or run both detection script and remediation script
    *
    * @param bool $val The runRemediationScript
    *
    * @return DeviceHealthScriptAssignment
    */
    public function setRunRemediationScript($val)
    {
        $this->_propDict["runRemediationScript"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the runSchedule
    * Script run schedule for the target group
    *
    * @return DeviceHealthScriptRunSchedule The runSchedule
    */
    public function getRunSchedule()
    {
        if (array_key_exists("runSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["runSchedule"], "\Beta\Microsoft\Graph\Model\DeviceHealthScriptRunSchedule")) {
                return $this->_propDict["runSchedule"];
            } else {
                $this->_propDict["runSchedule"] = new DeviceHealthScriptRunSchedule($this->_propDict["runSchedule"]);
                return $this->_propDict["runSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the runSchedule
    * Script run schedule for the target group
    *
    * @param DeviceHealthScriptRunSchedule $val The runSchedule
    *
    * @return DeviceHealthScriptAssignment
    */
    public function setRunSchedule($val)
    {
        $this->_propDict["runSchedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    * The Azure Active Directory group we are targeting the script to
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
    * The Azure Active Directory group we are targeting the script to
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return DeviceHealthScriptAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}
