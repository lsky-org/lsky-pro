<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityBaselineState File
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
* SecurityBaselineState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityBaselineState extends Entity
{
    /**
    * Gets the displayName
    * The display name of the security baseline
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
    * The display name of the security baseline
    *
    * @param string $val The displayName
    *
    * @return SecurityBaselineState
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityBaselineTemplateId
    * The security baseline template id
    *
    * @return string The securityBaselineTemplateId
    */
    public function getSecurityBaselineTemplateId()
    {
        if (array_key_exists("securityBaselineTemplateId", $this->_propDict)) {
            return $this->_propDict["securityBaselineTemplateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityBaselineTemplateId
    * The security baseline template id
    *
    * @param string $val The securityBaselineTemplateId
    *
    * @return SecurityBaselineState
    */
    public function setSecurityBaselineTemplateId($val)
    {
        $this->_propDict["securityBaselineTemplateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * Security baseline compliance state
    *
    * @return SecurityBaselineComplianceState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\SecurityBaselineComplianceState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new SecurityBaselineComplianceState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * Security baseline compliance state
    *
    * @param SecurityBaselineComplianceState $val The state
    *
    * @return SecurityBaselineState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * User Principal Name
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    * User Principal Name
    *
    * @param string $val The userPrincipalName
    *
    * @return SecurityBaselineState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the settingStates
    * The security baseline state for different settings for a device
     *
     * @return array The settingStates
     */
    public function getSettingStates()
    {
        if (array_key_exists("settingStates", $this->_propDict)) {
           return $this->_propDict["settingStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the settingStates
    * The security baseline state for different settings for a device
    *
    * @param SecurityBaselineSettingState $val The settingStates
    *
    * @return SecurityBaselineState
    */
    public function setSettingStates($val)
    {
		$this->_propDict["settingStates"] = $val;
        return $this;
    }
    
}
