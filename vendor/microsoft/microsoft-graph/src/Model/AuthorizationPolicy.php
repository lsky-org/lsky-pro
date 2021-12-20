<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationPolicy File
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
* AuthorizationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationPolicy extends PolicyBase
{
    /**
    * Gets the allowedToSignUpEmailBasedSubscriptions
    * Indicates whether users can sign up for email based subscriptions.
    *
    * @return bool The allowedToSignUpEmailBasedSubscriptions
    */
    public function getAllowedToSignUpEmailBasedSubscriptions()
    {
        if (array_key_exists("allowedToSignUpEmailBasedSubscriptions", $this->_propDict)) {
            return $this->_propDict["allowedToSignUpEmailBasedSubscriptions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedToSignUpEmailBasedSubscriptions
    * Indicates whether users can sign up for email based subscriptions.
    *
    * @param bool $val The allowedToSignUpEmailBasedSubscriptions
    *
    * @return AuthorizationPolicy
    */
    public function setAllowedToSignUpEmailBasedSubscriptions($val)
    {
        $this->_propDict["allowedToSignUpEmailBasedSubscriptions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowedToUseSSPR
    * Indicates whether the Self-Serve Password Reset feature can be used by users on the tenant.
    *
    * @return bool The allowedToUseSSPR
    */
    public function getAllowedToUseSSPR()
    {
        if (array_key_exists("allowedToUseSSPR", $this->_propDict)) {
            return $this->_propDict["allowedToUseSSPR"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedToUseSSPR
    * Indicates whether the Self-Serve Password Reset feature can be used by users on the tenant.
    *
    * @param bool $val The allowedToUseSSPR
    *
    * @return AuthorizationPolicy
    */
    public function setAllowedToUseSSPR($val)
    {
        $this->_propDict["allowedToUseSSPR"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowEmailVerifiedUsersToJoinOrganization
    * Indicates whether a user can join the tenant by email validation.
    *
    * @return bool The allowEmailVerifiedUsersToJoinOrganization
    */
    public function getAllowEmailVerifiedUsersToJoinOrganization()
    {
        if (array_key_exists("allowEmailVerifiedUsersToJoinOrganization", $this->_propDict)) {
            return $this->_propDict["allowEmailVerifiedUsersToJoinOrganization"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowEmailVerifiedUsersToJoinOrganization
    * Indicates whether a user can join the tenant by email validation.
    *
    * @param bool $val The allowEmailVerifiedUsersToJoinOrganization
    *
    * @return AuthorizationPolicy
    */
    public function setAllowEmailVerifiedUsersToJoinOrganization($val)
    {
        $this->_propDict["allowEmailVerifiedUsersToJoinOrganization"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowInvitesFrom
    * Indicates who can invite external users to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone.  everyone is the default setting for all cloud environments except US Government. See more in the table below.
    *
    * @return AllowInvitesFrom The allowInvitesFrom
    */
    public function getAllowInvitesFrom()
    {
        if (array_key_exists("allowInvitesFrom", $this->_propDict)) {
            if (is_a($this->_propDict["allowInvitesFrom"], "\Microsoft\Graph\Model\AllowInvitesFrom")) {
                return $this->_propDict["allowInvitesFrom"];
            } else {
                $this->_propDict["allowInvitesFrom"] = new AllowInvitesFrom($this->_propDict["allowInvitesFrom"]);
                return $this->_propDict["allowInvitesFrom"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowInvitesFrom
    * Indicates who can invite external users to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone.  everyone is the default setting for all cloud environments except US Government. See more in the table below.
    *
    * @param AllowInvitesFrom $val The allowInvitesFrom
    *
    * @return AuthorizationPolicy
    */
    public function setAllowInvitesFrom($val)
    {
        $this->_propDict["allowInvitesFrom"] = $val;
        return $this;
    }
    
    /**
    * Gets the blockMsolPowerShell
    * To disable the use of MSOL PowerShell set this property to true. Setting to true will also disable user-based access to the legacy service endpoint used by MSOL PowerShell. This does not affect Azure AD Connect or Microsoft Graph.
    *
    * @return bool The blockMsolPowerShell
    */
    public function getBlockMsolPowerShell()
    {
        if (array_key_exists("blockMsolPowerShell", $this->_propDict)) {
            return $this->_propDict["blockMsolPowerShell"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockMsolPowerShell
    * To disable the use of MSOL PowerShell set this property to true. Setting to true will also disable user-based access to the legacy service endpoint used by MSOL PowerShell. This does not affect Azure AD Connect or Microsoft Graph.
    *
    * @param bool $val The blockMsolPowerShell
    *
    * @return AuthorizationPolicy
    */
    public function setBlockMsolPowerShell($val)
    {
        $this->_propDict["blockMsolPowerShell"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defaultUserRolePermissions
    * Specifies certain customizable permissions for default user role.
    *
    * @return DefaultUserRolePermissions The defaultUserRolePermissions
    */
    public function getDefaultUserRolePermissions()
    {
        if (array_key_exists("defaultUserRolePermissions", $this->_propDict)) {
            if (is_a($this->_propDict["defaultUserRolePermissions"], "\Microsoft\Graph\Model\DefaultUserRolePermissions")) {
                return $this->_propDict["defaultUserRolePermissions"];
            } else {
                $this->_propDict["defaultUserRolePermissions"] = new DefaultUserRolePermissions($this->_propDict["defaultUserRolePermissions"]);
                return $this->_propDict["defaultUserRolePermissions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultUserRolePermissions
    * Specifies certain customizable permissions for default user role.
    *
    * @param DefaultUserRolePermissions $val The defaultUserRolePermissions
    *
    * @return AuthorizationPolicy
    */
    public function setDefaultUserRolePermissions($val)
    {
        $this->_propDict["defaultUserRolePermissions"] = $val;
        return $this;
    }
    
}
