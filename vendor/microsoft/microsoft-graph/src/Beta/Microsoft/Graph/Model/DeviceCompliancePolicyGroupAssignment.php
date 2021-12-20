<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicyGroupAssignment File
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
* DeviceCompliancePolicyGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceCompliancePolicyGroupAssignment extends Entity
{
    /**
    * Gets the excludeGroup
    * Indicates if this group is should be excluded. Defaults that the group should be included
    *
    * @return bool The excludeGroup
    */
    public function getExcludeGroup()
    {
        if (array_key_exists("excludeGroup", $this->_propDict)) {
            return $this->_propDict["excludeGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the excludeGroup
    * Indicates if this group is should be excluded. Defaults that the group should be included
    *
    * @param bool $val The excludeGroup
    *
    * @return DeviceCompliancePolicyGroupAssignment
    */
    public function setExcludeGroup($val)
    {
        $this->_propDict["excludeGroup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the targetGroupId
    * The Id of the AAD group we are targeting the device compliance policy to.
    *
    * @return string The targetGroupId
    */
    public function getTargetGroupId()
    {
        if (array_key_exists("targetGroupId", $this->_propDict)) {
            return $this->_propDict["targetGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupId
    * The Id of the AAD group we are targeting the device compliance policy to.
    *
    * @param string $val The targetGroupId
    *
    * @return DeviceCompliancePolicyGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCompliancePolicy
    * The navigation link to the  device compliance polic targeted.
    *
    * @return DeviceCompliancePolicy The deviceCompliancePolicy
    */
    public function getDeviceCompliancePolicy()
    {
        if (array_key_exists("deviceCompliancePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCompliancePolicy"], "\Beta\Microsoft\Graph\Model\DeviceCompliancePolicy")) {
                return $this->_propDict["deviceCompliancePolicy"];
            } else {
                $this->_propDict["deviceCompliancePolicy"] = new DeviceCompliancePolicy($this->_propDict["deviceCompliancePolicy"]);
                return $this->_propDict["deviceCompliancePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceCompliancePolicy
    * The navigation link to the  device compliance polic targeted.
    *
    * @param DeviceCompliancePolicy $val The deviceCompliancePolicy
    *
    * @return DeviceCompliancePolicyGroupAssignment
    */
    public function setDeviceCompliancePolicy($val)
    {
        $this->_propDict["deviceCompliancePolicy"] = $val;
        return $this;
    }
    
}
