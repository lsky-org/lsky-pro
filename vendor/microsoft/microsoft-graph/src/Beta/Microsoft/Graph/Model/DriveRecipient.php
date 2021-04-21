<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DriveRecipient File
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
* DriveRecipient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DriveRecipient extends Entity
{
    /**
    * Gets the alias
    * The alias of the domain object, for cases where an email address is unavailable (e.g. security groups).
    *
    * @return string The alias
    */
    public function getAlias()
    {
        if (array_key_exists("alias", $this->_propDict)) {
            return $this->_propDict["alias"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alias
    * The alias of the domain object, for cases where an email address is unavailable (e.g. security groups).
    *
    * @param string $val The value of the alias
    *
    * @return DriveRecipient
    */
    public function setAlias($val)
    {
        $this->_propDict["alias"] = $val;
        return $this;
    }
    /**
    * Gets the email
    * The email address for the recipient, if the recipient has an associated email address.
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
    * The email address for the recipient, if the recipient has an associated email address.
    *
    * @param string $val The value of the email
    *
    * @return DriveRecipient
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    /**
    * Gets the objectId
    * The unique identifier for the recipient in the directory.
    *
    * @return string The objectId
    */
    public function getObjectId()
    {
        if (array_key_exists("objectId", $this->_propDict)) {
            return $this->_propDict["objectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectId
    * The unique identifier for the recipient in the directory.
    *
    * @param string $val The value of the objectId
    *
    * @return DriveRecipient
    */
    public function setObjectId($val)
    {
        $this->_propDict["objectId"] = $val;
        return $this;
    }
}
