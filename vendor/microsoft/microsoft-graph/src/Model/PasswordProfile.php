<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordProfile File
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
* PasswordProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordProfile extends Entity
{
    /**
    * Gets the forceChangePasswordNextSignIn
    * If true, at next sign-in, the user must change their password. After a password change, this property will be automatically reset to false. If not set, default is false.
    *
    * @return bool The forceChangePasswordNextSignIn
    */
    public function getForceChangePasswordNextSignIn()
    {
        if (array_key_exists("forceChangePasswordNextSignIn", $this->_propDict)) {
            return $this->_propDict["forceChangePasswordNextSignIn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the forceChangePasswordNextSignIn
    * If true, at next sign-in, the user must change their password. After a password change, this property will be automatically reset to false. If not set, default is false.
    *
    * @param bool $val The value of the forceChangePasswordNextSignIn
    *
    * @return PasswordProfile
    */
    public function setForceChangePasswordNextSignIn($val)
    {
        $this->_propDict["forceChangePasswordNextSignIn"] = $val;
        return $this;
    }
    /**
    * Gets the forceChangePasswordNextSignInWithMfa
    * If true, at next sign-in, the user must perform a multi-factor authentication (MFA) before being forced to change their password. The behavior is identical to forceChangePasswordNextSignIn except that the user is required to first perform a multi-factor authentication before password change. After a password change, this property will be automatically reset to false. If not set, default is false.
    *
    * @return bool The forceChangePasswordNextSignInWithMfa
    */
    public function getForceChangePasswordNextSignInWithMfa()
    {
        if (array_key_exists("forceChangePasswordNextSignInWithMfa", $this->_propDict)) {
            return $this->_propDict["forceChangePasswordNextSignInWithMfa"];
        } else {
            return null;
        }
    }

    /**
    * Sets the forceChangePasswordNextSignInWithMfa
    * If true, at next sign-in, the user must perform a multi-factor authentication (MFA) before being forced to change their password. The behavior is identical to forceChangePasswordNextSignIn except that the user is required to first perform a multi-factor authentication before password change. After a password change, this property will be automatically reset to false. If not set, default is false.
    *
    * @param bool $val The value of the forceChangePasswordNextSignInWithMfa
    *
    * @return PasswordProfile
    */
    public function setForceChangePasswordNextSignInWithMfa($val)
    {
        $this->_propDict["forceChangePasswordNextSignInWithMfa"] = $val;
        return $this;
    }
    /**
    * Gets the password
    * The password for the user. This property is required when a user is created. It can be updated, but the user will be required to change the password on the next login. The password must satisfy minimum requirements as specified by the user’s passwordPolicies property. By default, a strong password is required.
    *
    * @return string The password
    */
    public function getPassword()
    {
        if (array_key_exists("password", $this->_propDict)) {
            return $this->_propDict["password"];
        } else {
            return null;
        }
    }

    /**
    * Sets the password
    * The password for the user. This property is required when a user is created. It can be updated, but the user will be required to change the password on the next login. The password must satisfy minimum requirements as specified by the user’s passwordPolicies property. By default, a strong password is required.
    *
    * @param string $val The value of the password
    *
    * @return PasswordProfile
    */
    public function setPassword($val)
    {
        $this->_propDict["password"] = $val;
        return $this;
    }
}
