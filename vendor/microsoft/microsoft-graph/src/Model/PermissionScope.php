<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionScope File
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
* PermissionScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionScope extends Entity
{
    /**
    * Gets the adminConsentDescription
    * A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences.
    *
    * @return string The adminConsentDescription
    */
    public function getAdminConsentDescription()
    {
        if (array_key_exists("adminConsentDescription", $this->_propDict)) {
            return $this->_propDict["adminConsentDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the adminConsentDescription
    * A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences.
    *
    * @param string $val The value of the adminConsentDescription
    *
    * @return PermissionScope
    */
    public function setAdminConsentDescription($val)
    {
        $this->_propDict["adminConsentDescription"] = $val;
        return $this;
    }
    /**
    * Gets the adminConsentDisplayName
    * The permission's title, intended to be read by an administrator granting the permission on behalf of all users.
    *
    * @return string The adminConsentDisplayName
    */
    public function getAdminConsentDisplayName()
    {
        if (array_key_exists("adminConsentDisplayName", $this->_propDict)) {
            return $this->_propDict["adminConsentDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the adminConsentDisplayName
    * The permission's title, intended to be read by an administrator granting the permission on behalf of all users.
    *
    * @param string $val The value of the adminConsentDisplayName
    *
    * @return PermissionScope
    */
    public function setAdminConsentDisplayName($val)
    {
        $this->_propDict["adminConsentDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application.
    *
    * @param string $val The value of the id
    *
    * @return PermissionScope
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the isEnabled
    * When creating or updating a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed.
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * When creating or updating a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return PermissionScope
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the origin
    *
    * @return string The origin
    */
    public function getOrigin()
    {
        if (array_key_exists("origin", $this->_propDict)) {
            return $this->_propDict["origin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the origin
    *
    * @param string $val The value of the origin
    *
    * @return PermissionScope
    */
    public function setOrigin($val)
    {
        $this->_propDict["origin"] = $val;
        return $this;
    }
    /**
    * Gets the type
    * Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator should be required for consent to the permissions. This will be the default behavior, but each customer can choose to customize the behavior in their organization (by allowing, restricting or limiting user consent to this delegated permission.)
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator should be required for consent to the permissions. This will be the default behavior, but each customer can choose to customize the behavior in their organization (by allowing, restricting or limiting user consent to this delegated permission.)
    *
    * @param string $val The value of the type
    *
    * @return PermissionScope
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    /**
    * Gets the userConsentDescription
    * A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
    *
    * @return string The userConsentDescription
    */
    public function getUserConsentDescription()
    {
        if (array_key_exists("userConsentDescription", $this->_propDict)) {
            return $this->_propDict["userConsentDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userConsentDescription
    * A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
    *
    * @param string $val The value of the userConsentDescription
    *
    * @return PermissionScope
    */
    public function setUserConsentDescription($val)
    {
        $this->_propDict["userConsentDescription"] = $val;
        return $this;
    }
    /**
    * Gets the userConsentDisplayName
    * A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
    *
    * @return string The userConsentDisplayName
    */
    public function getUserConsentDisplayName()
    {
        if (array_key_exists("userConsentDisplayName", $this->_propDict)) {
            return $this->_propDict["userConsentDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userConsentDisplayName
    * A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves.
    *
    * @param string $val The value of the userConsentDisplayName
    *
    * @return PermissionScope
    */
    public function setUserConsentDisplayName($val)
    {
        $this->_propDict["userConsentDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % &amp; ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, as well as characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, are not allowed.
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % &amp; ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, as well as characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, are not allowed.
    *
    * @param string $val The value of the value
    *
    * @return PermissionScope
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
