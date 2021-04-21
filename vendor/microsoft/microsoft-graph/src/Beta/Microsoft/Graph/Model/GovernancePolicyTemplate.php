<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernancePolicyTemplate File
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
* GovernancePolicyTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernancePolicyTemplate extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return GovernancePolicyTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the policy
    *
    * @return GovernancePolicy The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "\Beta\Microsoft\Graph\Model\GovernancePolicy")) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new GovernancePolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policy
    *
    * @param GovernancePolicy $val The policy
    *
    * @return GovernancePolicyTemplate
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return BusinessFlowSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\BusinessFlowSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new BusinessFlowSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param BusinessFlowSettings $val The settings
    *
    * @return GovernancePolicyTemplate
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
}
