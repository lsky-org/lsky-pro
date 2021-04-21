<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AadUserConversationMember File
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
* AadUserConversationMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AadUserConversationMember extends ConversationMember
{
    /**
    * Gets the email
    * The email address of the user.
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    * The email address of the user.
    *
    * @param string $val The email
    *
    * @return AadUserConversationMember
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantId
    * TenantId which the Azure AD user belongs to.
    *
    * @return string The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    * TenantId which the Azure AD user belongs to.
    *
    * @param string $val The tenantId
    *
    * @return AadUserConversationMember
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The GUID of the user.
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * The GUID of the user.
    *
    * @param string $val The userId
    *
    * @return AadUserConversationMember
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the user
    *
    * @return User The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            if (is_a($this->_propDict["user"], "\Microsoft\Graph\Model\User")) {
                return $this->_propDict["user"];
            } else {
                $this->_propDict["user"] = new User($this->_propDict["user"]);
                return $this->_propDict["user"];
            }
        }
        return null;
    }
    
    /**
    * Sets the user
    *
    * @param User $val The user
    *
    * @return AadUserConversationMember
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
        return $this;
    }
    
}
