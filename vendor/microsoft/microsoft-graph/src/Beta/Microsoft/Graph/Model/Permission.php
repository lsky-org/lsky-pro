<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Permission File
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
* Permission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Permission extends Entity
{
    /**
    * Gets the expirationDateTime
    * A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there is no expiration set for this permission. Optional.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * A format of yyyy-MM-ddTHH:mm:ssZ of DateTimeOffset indicates the expiration time of the permission. DateTime.MinValue indicates there is no expiration set for this permission. Optional.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return Permission
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the grantedTo
    * For user type permissions, the details of the users &amp; applications for this permission. Read-only.
    *
    * @return IdentitySet The grantedTo
    */
    public function getGrantedTo()
    {
        if (array_key_exists("grantedTo", $this->_propDict)) {
            if (is_a($this->_propDict["grantedTo"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["grantedTo"];
            } else {
                $this->_propDict["grantedTo"] = new IdentitySet($this->_propDict["grantedTo"]);
                return $this->_propDict["grantedTo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the grantedTo
    * For user type permissions, the details of the users &amp; applications for this permission. Read-only.
    *
    * @param IdentitySet $val The grantedTo
    *
    * @return Permission
    */
    public function setGrantedTo($val)
    {
        $this->_propDict["grantedTo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the grantedToIdentities
    * For link type permissions, the details of the users to whom permission was granted. Read-only.
     *
     * @return array The grantedToIdentities
     */
    public function getGrantedToIdentities()
    {
        if (array_key_exists("grantedToIdentities", $this->_propDict)) {
           return $this->_propDict["grantedToIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the grantedToIdentities
    * For link type permissions, the details of the users to whom permission was granted. Read-only.
    *
    * @param IdentitySet $val The grantedToIdentities
    *
    * @return Permission
    */
    public function setGrantedToIdentities($val)
    {
		$this->_propDict["grantedToIdentities"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasPassword
    * This indicates whether password is set for this permission, it's only showing in response. Optional and Read-only and for OneDrive Personal only.
    *
    * @return bool The hasPassword
    */
    public function getHasPassword()
    {
        if (array_key_exists("hasPassword", $this->_propDict)) {
            return $this->_propDict["hasPassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasPassword
    * This indicates whether password is set for this permission, it's only showing in response. Optional and Read-only and for OneDrive Personal only.
    *
    * @param bool $val The hasPassword
    *
    * @return Permission
    */
    public function setHasPassword($val)
    {
        $this->_propDict["hasPassword"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the inheritedFrom
    * Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
    *
    * @return ItemReference The inheritedFrom
    */
    public function getInheritedFrom()
    {
        if (array_key_exists("inheritedFrom", $this->_propDict)) {
            if (is_a($this->_propDict["inheritedFrom"], "\Beta\Microsoft\Graph\Model\ItemReference")) {
                return $this->_propDict["inheritedFrom"];
            } else {
                $this->_propDict["inheritedFrom"] = new ItemReference($this->_propDict["inheritedFrom"]);
                return $this->_propDict["inheritedFrom"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inheritedFrom
    * Provides a reference to the ancestor of the current permission, if it is inherited from an ancestor. Read-only.
    *
    * @param ItemReference $val The inheritedFrom
    *
    * @return Permission
    */
    public function setInheritedFrom($val)
    {
        $this->_propDict["inheritedFrom"] = $val;
        return $this;
    }
    
    /**
    * Gets the invitation
    * Details of any associated sharing invitation for this permission. Read-only.
    *
    * @return SharingInvitation The invitation
    */
    public function getInvitation()
    {
        if (array_key_exists("invitation", $this->_propDict)) {
            if (is_a($this->_propDict["invitation"], "\Beta\Microsoft\Graph\Model\SharingInvitation")) {
                return $this->_propDict["invitation"];
            } else {
                $this->_propDict["invitation"] = new SharingInvitation($this->_propDict["invitation"]);
                return $this->_propDict["invitation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the invitation
    * Details of any associated sharing invitation for this permission. Read-only.
    *
    * @param SharingInvitation $val The invitation
    *
    * @return Permission
    */
    public function setInvitation($val)
    {
        $this->_propDict["invitation"] = $val;
        return $this;
    }
    
    /**
    * Gets the link
    * Provides the link details of the current permission, if it is a link type permissions. Read-only.
    *
    * @return SharingLink The link
    */
    public function getLink()
    {
        if (array_key_exists("link", $this->_propDict)) {
            if (is_a($this->_propDict["link"], "\Beta\Microsoft\Graph\Model\SharingLink")) {
                return $this->_propDict["link"];
            } else {
                $this->_propDict["link"] = new SharingLink($this->_propDict["link"]);
                return $this->_propDict["link"];
            }
        }
        return null;
    }
    
    /**
    * Sets the link
    * Provides the link details of the current permission, if it is a link type permissions. Read-only.
    *
    * @param SharingLink $val The link
    *
    * @return Permission
    */
    public function setLink($val)
    {
        $this->_propDict["link"] = $val;
        return $this;
    }
    
    /**
    * Gets the roles
    * The type of permission, e.g. read. See below for the full list of roles. Read-only.
    *
    * @return string The roles
    */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
            return $this->_propDict["roles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roles
    * The type of permission, e.g. read. See below for the full list of roles. Read-only.
    *
    * @param string $val The roles
    *
    * @return Permission
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
        return $this;
    }
    
    /**
    * Gets the shareId
    * A unique token that can be used to access this shared item via the [shares API][]. Read-only.
    *
    * @return string The shareId
    */
    public function getShareId()
    {
        if (array_key_exists("shareId", $this->_propDict)) {
            return $this->_propDict["shareId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shareId
    * A unique token that can be used to access this shared item via the [shares API][]. Read-only.
    *
    * @param string $val The shareId
    *
    * @return Permission
    */
    public function setShareId($val)
    {
        $this->_propDict["shareId"] = $val;
        return $this;
    }
    
}
