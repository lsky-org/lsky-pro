<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharingInvitation File
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
* SharingInvitation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharingInvitation extends Entity
{
    /**
    * Gets the email
    * The email address provided for the recipient of the sharing invitation. Read-only.
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
    * The email address provided for the recipient of the sharing invitation. Read-only.
    *
    * @param string $val The value of the email
    *
    * @return SharingInvitation
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }

    /**
    * Gets the invitedBy
    * Provides information about who sent the invitation that created this permission, if that information is available. Read-only.
    *
    * @return IdentitySet The invitedBy
    */
    public function getInvitedBy()
    {
        if (array_key_exists("invitedBy", $this->_propDict)) {
            if (is_a($this->_propDict["invitedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["invitedBy"];
            } else {
                $this->_propDict["invitedBy"] = new IdentitySet($this->_propDict["invitedBy"]);
                return $this->_propDict["invitedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the invitedBy
    * Provides information about who sent the invitation that created this permission, if that information is available. Read-only.
    *
    * @param IdentitySet $val The value to assign to the invitedBy
    *
    * @return SharingInvitation The SharingInvitation
    */
    public function setInvitedBy($val)
    {
        $this->_propDict["invitedBy"] = $val;
         return $this;
    }
    /**
    * Gets the redeemedBy
    *
    * @return string The redeemedBy
    */
    public function getRedeemedBy()
    {
        if (array_key_exists("redeemedBy", $this->_propDict)) {
            return $this->_propDict["redeemedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redeemedBy
    *
    * @param string $val The value of the redeemedBy
    *
    * @return SharingInvitation
    */
    public function setRedeemedBy($val)
    {
        $this->_propDict["redeemedBy"] = $val;
        return $this;
    }
    /**
    * Gets the signInRequired
    * If true the recipient of the invitation needs to sign in in order to access the shared item. Read-only.
    *
    * @return bool The signInRequired
    */
    public function getSignInRequired()
    {
        if (array_key_exists("signInRequired", $this->_propDict)) {
            return $this->_propDict["signInRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signInRequired
    * If true the recipient of the invitation needs to sign in in order to access the shared item. Read-only.
    *
    * @param bool $val The value of the signInRequired
    *
    * @return SharingInvitation
    */
    public function setSignInRequired($val)
    {
        $this->_propDict["signInRequired"] = $val;
        return $this;
    }
}
