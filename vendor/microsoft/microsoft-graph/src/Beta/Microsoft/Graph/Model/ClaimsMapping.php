<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClaimsMapping File
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
* ClaimsMapping class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClaimsMapping extends Entity
{
    /**
    * Gets the displayName
    * The claim that provides the display name or full name for the user. It is a required propoerty.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The claim that provides the display name or full name for the user. It is a required propoerty.
    *
    * @param string $val The value of the displayName
    *
    * @return ClaimsMapping
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the email
    * The claim that provides the email address of the user.
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
    * The claim that provides the email address of the user.
    *
    * @param string $val The value of the email
    *
    * @return ClaimsMapping
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    /**
    * Gets the givenName
    * The claim that provides the first name of the user.
    *
    * @return string The givenName
    */
    public function getGivenName()
    {
        if (array_key_exists("givenName", $this->_propDict)) {
            return $this->_propDict["givenName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the givenName
    * The claim that provides the first name of the user.
    *
    * @param string $val The value of the givenName
    *
    * @return ClaimsMapping
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    /**
    * Gets the surname
    * The claim that provides the last name of the user.
    *
    * @return string The surname
    */
    public function getSurname()
    {
        if (array_key_exists("surname", $this->_propDict)) {
            return $this->_propDict["surname"];
        } else {
            return null;
        }
    }

    /**
    * Sets the surname
    * The claim that provides the last name of the user.
    *
    * @param string $val The value of the surname
    *
    * @return ClaimsMapping
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * The claim that provides the unique identifier for the signed-in user. It is a required propoerty.
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
    * The claim that provides the unique identifier for the signed-in user. It is a required propoerty.
    *
    * @param string $val The value of the userId
    *
    * @return ClaimsMapping
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
}
