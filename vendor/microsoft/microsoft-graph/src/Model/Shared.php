<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Shared File
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
* Shared class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Shared extends Entity
{

    /**
    * Gets the owner
    * The identity of the owner of the shared item. Read-only.
    *
    * @return IdentitySet The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["owner"];
            } else {
                $this->_propDict["owner"] = new IdentitySet($this->_propDict["owner"]);
                return $this->_propDict["owner"];
            }
        }
        return null;
    }

    /**
    * Sets the owner
    * The identity of the owner of the shared item. Read-only.
    *
    * @param IdentitySet $val The value to assign to the owner
    *
    * @return Shared The Shared
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
         return $this;
    }
    /**
    * Gets the scope
    * Indicates the scope of how the item is shared: anonymous, organization, or users. Read-only.
    *
    * @return string The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            return $this->_propDict["scope"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scope
    * Indicates the scope of how the item is shared: anonymous, organization, or users. Read-only.
    *
    * @param string $val The value of the scope
    *
    * @return Shared
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }

    /**
    * Gets the sharedBy
    * The identity of the user who shared the item. Read-only.
    *
    * @return IdentitySet The sharedBy
    */
    public function getSharedBy()
    {
        if (array_key_exists("sharedBy", $this->_propDict)) {
            if (is_a($this->_propDict["sharedBy"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["sharedBy"];
            } else {
                $this->_propDict["sharedBy"] = new IdentitySet($this->_propDict["sharedBy"]);
                return $this->_propDict["sharedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the sharedBy
    * The identity of the user who shared the item. Read-only.
    *
    * @param IdentitySet $val The value to assign to the sharedBy
    *
    * @return Shared The Shared
    */
    public function setSharedBy($val)
    {
        $this->_propDict["sharedBy"] = $val;
         return $this;
    }

    /**
    * Gets the sharedDateTime
    * The UTC date and time when the item was shared. Read-only.
    *
    * @return \DateTime The sharedDateTime
    */
    public function getSharedDateTime()
    {
        if (array_key_exists("sharedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sharedDateTime"], "\DateTime")) {
                return $this->_propDict["sharedDateTime"];
            } else {
                $this->_propDict["sharedDateTime"] = new \DateTime($this->_propDict["sharedDateTime"]);
                return $this->_propDict["sharedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sharedDateTime
    * The UTC date and time when the item was shared. Read-only.
    *
    * @param \DateTime $val The value to assign to the sharedDateTime
    *
    * @return Shared The Shared
    */
    public function setSharedDateTime($val)
    {
        $this->_propDict["sharedDateTime"] = $val;
         return $this;
    }
}
