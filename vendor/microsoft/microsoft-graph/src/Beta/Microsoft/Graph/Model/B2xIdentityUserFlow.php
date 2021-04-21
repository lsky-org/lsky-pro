<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* B2xIdentityUserFlow File
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
* B2xIdentityUserFlow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class B2xIdentityUserFlow extends IdentityUserFlow
{
    /**
    * Gets the apiConnectorConfiguration
    * Configuration for enabling an API connector for use as part of the self-service sign up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
    *
    * @return UserFlowApiConnectorConfiguration The apiConnectorConfiguration
    */
    public function getApiConnectorConfiguration()
    {
        if (array_key_exists("apiConnectorConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["apiConnectorConfiguration"], "\Beta\Microsoft\Graph\Model\UserFlowApiConnectorConfiguration")) {
                return $this->_propDict["apiConnectorConfiguration"];
            } else {
                $this->_propDict["apiConnectorConfiguration"] = new UserFlowApiConnectorConfiguration($this->_propDict["apiConnectorConfiguration"]);
                return $this->_propDict["apiConnectorConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the apiConnectorConfiguration
    * Configuration for enabling an API connector for use as part of the self-service sign up user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
    *
    * @param UserFlowApiConnectorConfiguration $val The apiConnectorConfiguration
    *
    * @return B2xIdentityUserFlow
    */
    public function setApiConnectorConfiguration($val)
    {
        $this->_propDict["apiConnectorConfiguration"] = $val;
        return $this;
    }
    

     /** 
     * Gets the identityProviders
    * The identity providers included in the user flow.
     *
     * @return array The identityProviders
     */
    public function getIdentityProviders()
    {
        if (array_key_exists("identityProviders", $this->_propDict)) {
           return $this->_propDict["identityProviders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the identityProviders
    * The identity providers included in the user flow.
    *
    * @param IdentityProvider $val The identityProviders
    *
    * @return B2xIdentityUserFlow
    */
    public function setIdentityProviders($val)
    {
		$this->_propDict["identityProviders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the languages
    * The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign up user flow. You cannot create custom languages in self-service sign up user flows.
     *
     * @return array The languages
     */
    public function getLanguages()
    {
        if (array_key_exists("languages", $this->_propDict)) {
           return $this->_propDict["languages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the languages
    * The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign up user flow. You cannot create custom languages in self-service sign up user flows.
    *
    * @param UserFlowLanguageConfiguration $val The languages
    *
    * @return B2xIdentityUserFlow
    */
    public function setLanguages($val)
    {
		$this->_propDict["languages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userAttributeAssignments
    * The user attribute assignments included in the user flow.
     *
     * @return array The userAttributeAssignments
     */
    public function getUserAttributeAssignments()
    {
        if (array_key_exists("userAttributeAssignments", $this->_propDict)) {
           return $this->_propDict["userAttributeAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userAttributeAssignments
    * The user attribute assignments included in the user flow.
    *
    * @param IdentityUserFlowAttributeAssignment $val The userAttributeAssignments
    *
    * @return B2xIdentityUserFlow
    */
    public function setUserAttributeAssignments($val)
    {
		$this->_propDict["userAttributeAssignments"] = $val;
        return $this;
    }
    
}
