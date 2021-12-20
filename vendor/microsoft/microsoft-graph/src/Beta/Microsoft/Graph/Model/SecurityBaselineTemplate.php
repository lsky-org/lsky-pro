<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityBaselineTemplate File
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
* SecurityBaselineTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityBaselineTemplate extends DeviceManagementTemplate
{

     /** 
     * Gets the categoryDeviceStateSummaries
    * The security baseline per category device state summary
     *
     * @return array The categoryDeviceStateSummaries
     */
    public function getCategoryDeviceStateSummaries()
    {
        if (array_key_exists("categoryDeviceStateSummaries", $this->_propDict)) {
           return $this->_propDict["categoryDeviceStateSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the categoryDeviceStateSummaries
    * The security baseline per category device state summary
    *
    * @param SecurityBaselineCategoryStateSummary $val The categoryDeviceStateSummaries
    *
    * @return SecurityBaselineTemplate
    */
    public function setCategoryDeviceStateSummaries($val)
    {
		$this->_propDict["categoryDeviceStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStates
    * The security baseline device states
     *
     * @return array The deviceStates
     */
    public function getDeviceStates()
    {
        if (array_key_exists("deviceStates", $this->_propDict)) {
           return $this->_propDict["deviceStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStates
    * The security baseline device states
    *
    * @param SecurityBaselineDeviceState $val The deviceStates
    *
    * @return SecurityBaselineTemplate
    */
    public function setDeviceStates($val)
    {
		$this->_propDict["deviceStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceStateSummary
    * The security baseline device state summary
    *
    * @return SecurityBaselineStateSummary The deviceStateSummary
    */
    public function getDeviceStateSummary()
    {
        if (array_key_exists("deviceStateSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStateSummary"], "\Beta\Microsoft\Graph\Model\SecurityBaselineStateSummary")) {
                return $this->_propDict["deviceStateSummary"];
            } else {
                $this->_propDict["deviceStateSummary"] = new SecurityBaselineStateSummary($this->_propDict["deviceStateSummary"]);
                return $this->_propDict["deviceStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceStateSummary
    * The security baseline device state summary
    *
    * @param SecurityBaselineStateSummary $val The deviceStateSummary
    *
    * @return SecurityBaselineTemplate
    */
    public function setDeviceStateSummary($val)
    {
        $this->_propDict["deviceStateSummary"] = $val;
        return $this;
    }
    
}
