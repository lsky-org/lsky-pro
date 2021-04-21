<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* B2cIdentityUserFlow File
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
* B2cIdentityUserFlow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class B2cIdentityUserFlow extends IdentityUserFlow
{
    /**
    * Gets the apiConnectorConfiguration
    * Configuration for enabling an API connector for use as part of the user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
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
    * Configuration for enabling an API connector for use as part of the user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
    *
    * @param UserFlowApiConnectorConfiguration $val The apiConnectorConfiguration
    *
    * @return B2cIdentityUserFlow
    */
    public function setApiConnectorConfiguration($val)
    {
        $this->_propDict["apiConnectorConfiguration"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultLanguageTag
    * Indicates the default language of the b2cIdentityUserFlow that is used when no ui_locale tag is specified in the request. This field is RFC 5646 compliant.
    *
    * @return string The defaultLanguageTag
    */
    public function getDefaultLanguageTag()
    {
        if (array_key_exists("defaultLanguageTag", $this->_propDict)) {
            return $this->_propDict["defaultLanguageTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultLanguageTag
    * Indicates the default language of the b2cIdentityUserFlow that is used when no ui_locale tag is specified in the request. This field is RFC 5646 compliant.
    *
    * @param string $val The defaultLanguageTag
    *
    * @return B2cIdentityUserFlow
    */
    public function setDefaultLanguageTag($val)
    {
        $this->_propDict["defaultLanguageTag"] = $val;
        return $this;
    }
    
    /**
    * Gets the isLanguageCustomizationEnabled
    * The property that determines whether language customization is enabled within the B2C user flow. Language customization is not enabled by default for B2C user flows.
    *
    * @return bool The isLanguageCustomizationEnabled
    */
    public function getIsLanguageCustomizationEnabled()
    {
        if (array_key_exists("isLanguageCustomizationEnabled", $this->_propDict)) {
            return $this->_propDict["isLanguageCustomizationEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isLanguageCustomizationEnabled
    * The property that determines whether language customization is enabled within the B2C user flow. Language customization is not enabled by default for B2C user flows.
    *
    * @param bool $val The isLanguageCustomizationEnabled
    *
    * @return B2cIdentityUserFlow
    */
    public function setIsLanguageCustomizationEnabled($val)
    {
        $this->_propDict["isLanguageCustomizationEnabled"] = boolval($val);
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
    * @return B2cIdentityUserFlow
    */
    public function setIdentityProviders($val)
    {
		$this->_propDict["identityProviders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the languages
    * The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
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
    * The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
    *
    * @param UserFlowLanguageConfiguration $val The languages
    *
    * @return B2cIdentityUserFlow
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
    * @return B2cIdentityUserFlow
    */
    public function setUserAttributeAssignments($val)
    {
		$this->_propDict["userAttributeAssignments"] = $val;
        return $this;
    }
    
}
