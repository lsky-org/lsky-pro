<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* B2cAuthenticationMethodsPolicy File
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
* B2cAuthenticationMethodsPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class B2cAuthenticationMethodsPolicy extends Entity
{
    /**
    * Gets the isEmailPasswordAuthenticationEnabled
    * The tenant admin can configure local accounts using email if the email and password authentication method is enabled.
    *
    * @return bool The isEmailPasswordAuthenticationEnabled
    */
    public function getIsEmailPasswordAuthenticationEnabled()
    {
        if (array_key_exists("isEmailPasswordAuthenticationEnabled", $this->_propDict)) {
            return $this->_propDict["isEmailPasswordAuthenticationEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEmailPasswordAuthenticationEnabled
    * The tenant admin can configure local accounts using email if the email and password authentication method is enabled.
    *
    * @param bool $val The isEmailPasswordAuthenticationEnabled
    *
    * @return B2cAuthenticationMethodsPolicy
    */
    public function setIsEmailPasswordAuthenticationEnabled($val)
    {
        $this->_propDict["isEmailPasswordAuthenticationEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isPhoneOneTimePasswordAuthenticationEnabled
    *
    * @return bool The isPhoneOneTimePasswordAuthenticationEnabled
    */
    public function getIsPhoneOneTimePasswordAuthenticationEnabled()
    {
        if (array_key_exists("isPhoneOneTimePasswordAuthenticationEnabled", $this->_propDict)) {
            return $this->_propDict["isPhoneOneTimePasswordAuthenticationEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isPhoneOneTimePasswordAuthenticationEnabled
    *
    * @param bool $val The isPhoneOneTimePasswordAuthenticationEnabled
    *
    * @return B2cAuthenticationMethodsPolicy
    */
    public function setIsPhoneOneTimePasswordAuthenticationEnabled($val)
    {
        $this->_propDict["isPhoneOneTimePasswordAuthenticationEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isUserNameAuthenticationEnabled
    * The tenant admin can configure local accounts using username if the username and password authentication method is enabled.
    *
    * @return bool The isUserNameAuthenticationEnabled
    */
    public function getIsUserNameAuthenticationEnabled()
    {
        if (array_key_exists("isUserNameAuthenticationEnabled", $this->_propDict)) {
            return $this->_propDict["isUserNameAuthenticationEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isUserNameAuthenticationEnabled
    * The tenant admin can configure local accounts using username if the username and password authentication method is enabled.
    *
    * @param bool $val The isUserNameAuthenticationEnabled
    *
    * @return B2cAuthenticationMethodsPolicy
    */
    public function setIsUserNameAuthenticationEnabled($val)
    {
        $this->_propDict["isUserNameAuthenticationEnabled"] = boolval($val);
        return $this;
    }
    
}
