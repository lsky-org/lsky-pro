<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceScheduledActionForRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* DeviceComplianceScheduledActionForRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceScheduledActionForRule extends Entity
{
    /**
    * Gets the ruleName
    * Name of the rule which this scheduled action applies to.
    *
    * @return string The ruleName
    */
    public function getRuleName()
    {
        if (array_key_exists("ruleName", $this->_propDict)) {
            return $this->_propDict["ruleName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ruleName
    * Name of the rule which this scheduled action applies to.
    *
    * @param string $val The ruleName
    *
    * @return DeviceComplianceScheduledActionForRule
    */
    public function setRuleName($val)
    {
        $this->_propDict["ruleName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the scheduledActionConfigurations
    * The list of scheduled action configurations for this compliance policy.
     *
     * @return array The scheduledActionConfigurations
     */
    public function getScheduledActionConfigurations()
    {
        if (array_key_exists("scheduledActionConfigurations", $this->_propDict)) {
           return $this->_propDict["scheduledActionConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the scheduledActionConfigurations
    * The list of scheduled action configurations for this compliance policy.
    *
    * @param DeviceComplianceActionItem $val The scheduledActionConfigurations
    *
    * @return DeviceComplianceScheduledActionForRule
    */
    public function setScheduledActionConfigurations($val)
    {
		$this->_propDict["scheduledActionConfigurations"] = $val;
        return $this;
    }
    
}
