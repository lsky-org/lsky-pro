<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicyRoot File
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
* PolicyRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicyRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    protected $_propDict;
    
    /**
    * Construct a new PolicyRoot
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
		$this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the PolicyRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the authenticationMethodsPolicy
    *
    * @return AuthenticationMethodsPolicy The authenticationMethodsPolicy
    */
    public function getAuthenticationMethodsPolicy()
    {
        if (array_key_exists("authenticationMethodsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethodsPolicy"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodsPolicy")) {
                return $this->_propDict["authenticationMethodsPolicy"];
            } else {
                $this->_propDict["authenticationMethodsPolicy"] = new AuthenticationMethodsPolicy($this->_propDict["authenticationMethodsPolicy"]);
                return $this->_propDict["authenticationMethodsPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethodsPolicy
    *
    * @param AuthenticationMethodsPolicy $val The authenticationMethodsPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthenticationMethodsPolicy($val)
    {
        $this->_propDict["authenticationMethodsPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationFlowsPolicy
    *
    * @return AuthenticationFlowsPolicy The authenticationFlowsPolicy
    */
    public function getAuthenticationFlowsPolicy()
    {
        if (array_key_exists("authenticationFlowsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationFlowsPolicy"], "\Beta\Microsoft\Graph\Model\AuthenticationFlowsPolicy")) {
                return $this->_propDict["authenticationFlowsPolicy"];
            } else {
                $this->_propDict["authenticationFlowsPolicy"] = new AuthenticationFlowsPolicy($this->_propDict["authenticationFlowsPolicy"]);
                return $this->_propDict["authenticationFlowsPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationFlowsPolicy
    *
    * @param AuthenticationFlowsPolicy $val The authenticationFlowsPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthenticationFlowsPolicy($val)
    {
        $this->_propDict["authenticationFlowsPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the b2cAuthenticationMethodsPolicy
    *
    * @return B2cAuthenticationMethodsPolicy The b2cAuthenticationMethodsPolicy
    */
    public function getB2cAuthenticationMethodsPolicy()
    {
        if (array_key_exists("b2cAuthenticationMethodsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["b2cAuthenticationMethodsPolicy"], "\Beta\Microsoft\Graph\Model\B2cAuthenticationMethodsPolicy")) {
                return $this->_propDict["b2cAuthenticationMethodsPolicy"];
            } else {
                $this->_propDict["b2cAuthenticationMethodsPolicy"] = new B2cAuthenticationMethodsPolicy($this->_propDict["b2cAuthenticationMethodsPolicy"]);
                return $this->_propDict["b2cAuthenticationMethodsPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the b2cAuthenticationMethodsPolicy
    *
    * @param B2cAuthenticationMethodsPolicy $val The b2cAuthenticationMethodsPolicy
    *
    * @return PolicyRoot
    */
    public function setB2cAuthenticationMethodsPolicy($val)
    {
        $this->_propDict["b2cAuthenticationMethodsPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the activityBasedTimeoutPolicies
     *
     * @return array The activityBasedTimeoutPolicies
     */
    public function getActivityBasedTimeoutPolicies()
    {
        if (array_key_exists("activityBasedTimeoutPolicies", $this->_propDict)) {
           return $this->_propDict["activityBasedTimeoutPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activityBasedTimeoutPolicies
    *
    * @param ActivityBasedTimeoutPolicy $val The activityBasedTimeoutPolicies
    *
    * @return PolicyRoot
    */
    public function setActivityBasedTimeoutPolicies($val)
    {
		$this->_propDict["activityBasedTimeoutPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the authorizationPolicy
     *
     * @return array The authorizationPolicy
     */
    public function getAuthorizationPolicy()
    {
        if (array_key_exists("authorizationPolicy", $this->_propDict)) {
           return $this->_propDict["authorizationPolicy"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the authorizationPolicy
    *
    * @param AuthorizationPolicy $val The authorizationPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthorizationPolicy($val)
    {
		$this->_propDict["authorizationPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the claimsMappingPolicies
     *
     * @return array The claimsMappingPolicies
     */
    public function getClaimsMappingPolicies()
    {
        if (array_key_exists("claimsMappingPolicies", $this->_propDict)) {
           return $this->_propDict["claimsMappingPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the claimsMappingPolicies
    *
    * @param ClaimsMappingPolicy $val The claimsMappingPolicies
    *
    * @return PolicyRoot
    */
    public function setClaimsMappingPolicies($val)
    {
		$this->_propDict["claimsMappingPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeRealmDiscoveryPolicies
     *
     * @return array The homeRealmDiscoveryPolicies
     */
    public function getHomeRealmDiscoveryPolicies()
    {
        if (array_key_exists("homeRealmDiscoveryPolicies", $this->_propDict)) {
           return $this->_propDict["homeRealmDiscoveryPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the homeRealmDiscoveryPolicies
    *
    * @param HomeRealmDiscoveryPolicy $val The homeRealmDiscoveryPolicies
    *
    * @return PolicyRoot
    */
    public function setHomeRealmDiscoveryPolicies($val)
    {
		$this->_propDict["homeRealmDiscoveryPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the permissionGrantPolicies
     *
     * @return array The permissionGrantPolicies
     */
    public function getPermissionGrantPolicies()
    {
        if (array_key_exists("permissionGrantPolicies", $this->_propDict)) {
           return $this->_propDict["permissionGrantPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the permissionGrantPolicies
    *
    * @param PermissionGrantPolicy $val The permissionGrantPolicies
    *
    * @return PolicyRoot
    */
    public function setPermissionGrantPolicies($val)
    {
		$this->_propDict["permissionGrantPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the privateLinkResourcePolicies
     *
     * @return array The privateLinkResourcePolicies
     */
    public function getPrivateLinkResourcePolicies()
    {
        if (array_key_exists("privateLinkResourcePolicies", $this->_propDict)) {
           return $this->_propDict["privateLinkResourcePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the privateLinkResourcePolicies
    *
    * @param PrivateLinkResourcePolicy $val The privateLinkResourcePolicies
    *
    * @return PolicyRoot
    */
    public function setPrivateLinkResourcePolicies($val)
    {
		$this->_propDict["privateLinkResourcePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenIssuancePolicies
     *
     * @return array The tokenIssuancePolicies
     */
    public function getTokenIssuancePolicies()
    {
        if (array_key_exists("tokenIssuancePolicies", $this->_propDict)) {
           return $this->_propDict["tokenIssuancePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tokenIssuancePolicies
    *
    * @param TokenIssuancePolicy $val The tokenIssuancePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenIssuancePolicies($val)
    {
		$this->_propDict["tokenIssuancePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenLifetimePolicies
     *
     * @return array The tokenLifetimePolicies
     */
    public function getTokenLifetimePolicies()
    {
        if (array_key_exists("tokenLifetimePolicies", $this->_propDict)) {
           return $this->_propDict["tokenLifetimePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tokenLifetimePolicies
    *
    * @param TokenLifetimePolicy $val The tokenLifetimePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenLifetimePolicies($val)
    {
		$this->_propDict["tokenLifetimePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the featureRolloutPolicies
     *
     * @return array The featureRolloutPolicies
     */
    public function getFeatureRolloutPolicies()
    {
        if (array_key_exists("featureRolloutPolicies", $this->_propDict)) {
           return $this->_propDict["featureRolloutPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the featureRolloutPolicies
    *
    * @param FeatureRolloutPolicy $val The featureRolloutPolicies
    *
    * @return PolicyRoot
    */
    public function setFeatureRolloutPolicies($val)
    {
		$this->_propDict["featureRolloutPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the adminConsentRequestPolicy
    *
    * @return AdminConsentRequestPolicy The adminConsentRequestPolicy
    */
    public function getAdminConsentRequestPolicy()
    {
        if (array_key_exists("adminConsentRequestPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["adminConsentRequestPolicy"], "\Beta\Microsoft\Graph\Model\AdminConsentRequestPolicy")) {
                return $this->_propDict["adminConsentRequestPolicy"];
            } else {
                $this->_propDict["adminConsentRequestPolicy"] = new AdminConsentRequestPolicy($this->_propDict["adminConsentRequestPolicy"]);
                return $this->_propDict["adminConsentRequestPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the adminConsentRequestPolicy
    *
    * @param AdminConsentRequestPolicy $val The adminConsentRequestPolicy
    *
    * @return PolicyRoot
    */
    public function setAdminConsentRequestPolicy($val)
    {
        $this->_propDict["adminConsentRequestPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the directoryRoleAccessReviewPolicy
    *
    * @return DirectoryRoleAccessReviewPolicy The directoryRoleAccessReviewPolicy
    */
    public function getDirectoryRoleAccessReviewPolicy()
    {
        if (array_key_exists("directoryRoleAccessReviewPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["directoryRoleAccessReviewPolicy"], "\Beta\Microsoft\Graph\Model\DirectoryRoleAccessReviewPolicy")) {
                return $this->_propDict["directoryRoleAccessReviewPolicy"];
            } else {
                $this->_propDict["directoryRoleAccessReviewPolicy"] = new DirectoryRoleAccessReviewPolicy($this->_propDict["directoryRoleAccessReviewPolicy"]);
                return $this->_propDict["directoryRoleAccessReviewPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the directoryRoleAccessReviewPolicy
    *
    * @param DirectoryRoleAccessReviewPolicy $val The directoryRoleAccessReviewPolicy
    *
    * @return PolicyRoot
    */
    public function setDirectoryRoleAccessReviewPolicy($val)
    {
        $this->_propDict["directoryRoleAccessReviewPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the conditionalAccessPolicies
     *
     * @return array The conditionalAccessPolicies
     */
    public function getConditionalAccessPolicies()
    {
        if (array_key_exists("conditionalAccessPolicies", $this->_propDict)) {
           return $this->_propDict["conditionalAccessPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the conditionalAccessPolicies
    *
    * @param ConditionalAccessPolicy $val The conditionalAccessPolicies
    *
    * @return PolicyRoot
    */
    public function setConditionalAccessPolicies($val)
    {
		$this->_propDict["conditionalAccessPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the identitySecurityDefaultsEnforcementPolicy
    *
    * @return IdentitySecurityDefaultsEnforcementPolicy The identitySecurityDefaultsEnforcementPolicy
    */
    public function getIdentitySecurityDefaultsEnforcementPolicy()
    {
        if (array_key_exists("identitySecurityDefaultsEnforcementPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["identitySecurityDefaultsEnforcementPolicy"], "\Beta\Microsoft\Graph\Model\IdentitySecurityDefaultsEnforcementPolicy")) {
                return $this->_propDict["identitySecurityDefaultsEnforcementPolicy"];
            } else {
                $this->_propDict["identitySecurityDefaultsEnforcementPolicy"] = new IdentitySecurityDefaultsEnforcementPolicy($this->_propDict["identitySecurityDefaultsEnforcementPolicy"]);
                return $this->_propDict["identitySecurityDefaultsEnforcementPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identitySecurityDefaultsEnforcementPolicy
    *
    * @param IdentitySecurityDefaultsEnforcementPolicy $val The identitySecurityDefaultsEnforcementPolicy
    *
    * @return PolicyRoot
    */
    public function setIdentitySecurityDefaultsEnforcementPolicy($val)
    {
        $this->_propDict["identitySecurityDefaultsEnforcementPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleManagementPolicies
     *
     * @return array The roleManagementPolicies
     */
    public function getRoleManagementPolicies()
    {
        if (array_key_exists("roleManagementPolicies", $this->_propDict)) {
           return $this->_propDict["roleManagementPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleManagementPolicies
    *
    * @param UnifiedRoleManagementPolicy $val The roleManagementPolicies
    *
    * @return PolicyRoot
    */
    public function setRoleManagementPolicies($val)
    {
		$this->_propDict["roleManagementPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleManagementPolicyAssignments
     *
     * @return array The roleManagementPolicyAssignments
     */
    public function getRoleManagementPolicyAssignments()
    {
        if (array_key_exists("roleManagementPolicyAssignments", $this->_propDict)) {
           return $this->_propDict["roleManagementPolicyAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleManagementPolicyAssignments
    *
    * @param UnifiedRoleManagementPolicyAssignment $val The roleManagementPolicyAssignments
    *
    * @return PolicyRoot
    */
    public function setRoleManagementPolicyAssignments($val)
    {
		$this->_propDict["roleManagementPolicyAssignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the ODataType
    *
    * @return string The ODataType
    */
    public function getODataType()
    {
        return $this->_propDict["@odata.type"];
    }
    
    /**
    * Sets the ODataType
    *
    * @param string The ODataType
    *
    * @return Entity
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }
    
    /**
    * Serializes the object by property array
	* Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            }
        }
        return $serializableProperties;
    }
}
