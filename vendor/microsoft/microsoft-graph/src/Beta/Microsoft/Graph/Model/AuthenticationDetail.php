<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationDetail File
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
* AuthenticationDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationDetail extends Entity
{
    /**
    * Gets the authenticationMethod
    * The type of authentication method used to perform this step of authentication. Possible values: Password, SMS, Voice, Authenticator App, Software OATH token, Satisfied by token, Previously satisfied.
    *
    * @return string The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            return $this->_propDict["authenticationMethod"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationMethod
    * The type of authentication method used to perform this step of authentication. Possible values: Password, SMS, Voice, Authenticator App, Software OATH token, Satisfied by token, Previously satisfied.
    *
    * @param string $val The value of the authenticationMethod
    *
    * @return AuthenticationDetail
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    /**
    * Gets the authenticationMethodDetail
    * Details about the authentication method used to perform this authentication step. For example, phone number (for SMS and voice), device name (for Authenticator app), and password source (e.g. cloud, AD FS, PTA, PHS).
    *
    * @return string The authenticationMethodDetail
    */
    public function getAuthenticationMethodDetail()
    {
        if (array_key_exists("authenticationMethodDetail", $this->_propDict)) {
            return $this->_propDict["authenticationMethodDetail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationMethodDetail
    * Details about the authentication method used to perform this authentication step. For example, phone number (for SMS and voice), device name (for Authenticator app), and password source (e.g. cloud, AD FS, PTA, PHS).
    *
    * @param string $val The value of the authenticationMethodDetail
    *
    * @return AuthenticationDetail
    */
    public function setAuthenticationMethodDetail($val)
    {
        $this->_propDict["authenticationMethodDetail"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationStepDateTime
    * Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The authenticationStepDateTime
    */
    public function getAuthenticationStepDateTime()
    {
        if (array_key_exists("authenticationStepDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationStepDateTime"], "\DateTime")) {
                return $this->_propDict["authenticationStepDateTime"];
            } else {
                $this->_propDict["authenticationStepDateTime"] = new \DateTime($this->_propDict["authenticationStepDateTime"]);
                return $this->_propDict["authenticationStepDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationStepDateTime
    * Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the authenticationStepDateTime
    *
    * @return AuthenticationDetail The AuthenticationDetail
    */
    public function setAuthenticationStepDateTime($val)
    {
        $this->_propDict["authenticationStepDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the authenticationStepRequirement
    * The step of authentication that this satisfied. For example, primary authentication, or multi-factor authentication.
    *
    * @return string The authenticationStepRequirement
    */
    public function getAuthenticationStepRequirement()
    {
        if (array_key_exists("authenticationStepRequirement", $this->_propDict)) {
            return $this->_propDict["authenticationStepRequirement"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationStepRequirement
    * The step of authentication that this satisfied. For example, primary authentication, or multi-factor authentication.
    *
    * @param string $val The value of the authenticationStepRequirement
    *
    * @return AuthenticationDetail
    */
    public function setAuthenticationStepRequirement($val)
    {
        $this->_propDict["authenticationStepRequirement"] = $val;
        return $this;
    }
    /**
    * Gets the authenticationStepResultDetail
    * Details about why the step succeeded or failed. For examples, user is blocked, fraud code entered, no phone input - timed out, phone unreachable, or claim in token.
    *
    * @return string The authenticationStepResultDetail
    */
    public function getAuthenticationStepResultDetail()
    {
        if (array_key_exists("authenticationStepResultDetail", $this->_propDict)) {
            return $this->_propDict["authenticationStepResultDetail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationStepResultDetail
    * Details about why the step succeeded or failed. For examples, user is blocked, fraud code entered, no phone input - timed out, phone unreachable, or claim in token.
    *
    * @param string $val The value of the authenticationStepResultDetail
    *
    * @return AuthenticationDetail
    */
    public function setAuthenticationStepResultDetail($val)
    {
        $this->_propDict["authenticationStepResultDetail"] = $val;
        return $this;
    }
    /**
    * Gets the succeeded
    * Indicates the status of the authentication step. Possible values: succeeded, failed.
    *
    * @return bool The succeeded
    */
    public function getSucceeded()
    {
        if (array_key_exists("succeeded", $this->_propDict)) {
            return $this->_propDict["succeeded"];
        } else {
            return null;
        }
    }

    /**
    * Sets the succeeded
    * Indicates the status of the authentication step. Possible values: succeeded, failed.
    *
    * @param bool $val The value of the succeeded
    *
    * @return AuthenticationDetail
    */
    public function setSucceeded($val)
    {
        $this->_propDict["succeeded"] = $val;
        return $this;
    }
}
