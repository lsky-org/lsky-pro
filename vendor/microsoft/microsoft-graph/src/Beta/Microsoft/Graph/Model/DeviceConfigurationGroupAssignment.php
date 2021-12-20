<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationGroupAssignment File
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
* DeviceConfigurationGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceConfigurationGroupAssignment extends Entity
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
    * @return DeviceConfigurationGroupAssignment
    */
    public function setExcludeGroup($val)
    {
        $this->_propDict["excludeGroup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the targetGroupId
    * The Id of the AAD group we are targeting the device configuration to.
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
    * The Id of the AAD group we are targeting the device configuration to.
    *
    * @param string $val The targetGroupId
    *
    * @return DeviceConfigurationGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceConfiguration
    * The navigation link to the Device Configuration being targeted.
    *
    * @return DeviceConfiguration The deviceConfiguration
    */
    public function getDeviceConfiguration()
    {
        if (array_key_exists("deviceConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["deviceConfiguration"], "\Beta\Microsoft\Graph\Model\DeviceConfiguration")) {
                return $this->_propDict["deviceConfiguration"];
            } else {
                $this->_propDict["deviceConfiguration"] = new DeviceConfiguration($this->_propDict["deviceConfiguration"]);
                return $this->_propDict["deviceConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceConfiguration
    * The navigation link to the Device Configuration being targeted.
    *
    * @param DeviceConfiguration $val The deviceConfiguration
    *
    * @return DeviceConfigurationGroupAssignment
    */
    public function setDeviceConfiguration($val)
    {
        $this->_propDict["deviceConfiguration"] = $val;
        return $this;
    }
    
}
