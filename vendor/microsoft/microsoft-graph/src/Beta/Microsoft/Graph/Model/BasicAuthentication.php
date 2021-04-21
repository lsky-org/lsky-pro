<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BasicAuthentication File
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
* BasicAuthentication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BasicAuthentication extends ApiAuthenticationConfigurationBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.basicAuthentication");
    }

    /**
    * Gets the password
    * The password. It is not returned in the responses.
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
    * The password. It is not returned in the responses.
    *
    * @param string $val The value of the password
    *
    * @return BasicAuthentication
    */
    public function setPassword($val)
    {
        $this->_propDict["password"] = $val;
        return $this;
    }
    /**
    * Gets the username
    * The username.
    *
    * @return string The username
    */
    public function getUsername()
    {
        if (array_key_exists("username", $this->_propDict)) {
            return $this->_propDict["username"];
        } else {
            return null;
        }
    }

    /**
    * Sets the username
    * The username.
    *
    * @param string $val The value of the username
    *
    * @return BasicAuthentication
    */
    public function setUsername($val)
    {
        $this->_propDict["username"] = $val;
        return $this;
    }
}
