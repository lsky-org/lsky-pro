<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PhoneAuthenticationMethod File
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
* PhoneAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PhoneAuthenticationMethod extends AuthenticationMethod
{
    /**
    * Gets the phoneNumber
    * The phone number to text or call for authentication. Phone numbers use the format '+&amp;lt;country code&amp;gt; &amp;lt;number&amp;gt;x&amp;lt;extension&amp;gt;', with extension optional. For example, +1 5555551234 or +1 5555551234x123 are valid. Numbers are rejected when creating/updating if they do not match the required format.
    *
    * @return string The phoneNumber
    */
    public function getPhoneNumber()
    {
        if (array_key_exists("phoneNumber", $this->_propDict)) {
            return $this->_propDict["phoneNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phoneNumber
    * The phone number to text or call for authentication. Phone numbers use the format '+&amp;lt;country code&amp;gt; &amp;lt;number&amp;gt;x&amp;lt;extension&amp;gt;', with extension optional. For example, +1 5555551234 or +1 5555551234x123 are valid. Numbers are rejected when creating/updating if they do not match the required format.
    *
    * @param string $val The phoneNumber
    *
    * @return PhoneAuthenticationMethod
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the phoneType
    * The type of this phone. Possible values are: mobile, alternateMobile, or office.
    *
    * @return AuthenticationPhoneType The phoneType
    */
    public function getPhoneType()
    {
        if (array_key_exists("phoneType", $this->_propDict)) {
            if (is_a($this->_propDict["phoneType"], "\Beta\Microsoft\Graph\Model\AuthenticationPhoneType")) {
                return $this->_propDict["phoneType"];
            } else {
                $this->_propDict["phoneType"] = new AuthenticationPhoneType($this->_propDict["phoneType"]);
                return $this->_propDict["phoneType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the phoneType
    * The type of this phone. Possible values are: mobile, alternateMobile, or office.
    *
    * @param AuthenticationPhoneType $val The phoneType
    *
    * @return PhoneAuthenticationMethod
    */
    public function setPhoneType($val)
    {
        $this->_propDict["phoneType"] = $val;
        return $this;
    }
    
    /**
    * Gets the smsSignInState
    * Whether a phone is ready to be used for SMS sign-in or not. Possible values are: notSupported, notAllowedByPolicy, notEnabled, phoneNumberNotUnique, ready, or notConfigured, unknownFutureValue.
    *
    * @return AuthenticationMethodSignInState The smsSignInState
    */
    public function getSmsSignInState()
    {
        if (array_key_exists("smsSignInState", $this->_propDict)) {
            if (is_a($this->_propDict["smsSignInState"], "\Beta\Microsoft\Graph\Model\AuthenticationMethodSignInState")) {
                return $this->_propDict["smsSignInState"];
            } else {
                $this->_propDict["smsSignInState"] = new AuthenticationMethodSignInState($this->_propDict["smsSignInState"]);
                return $this->_propDict["smsSignInState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the smsSignInState
    * Whether a phone is ready to be used for SMS sign-in or not. Possible values are: notSupported, notAllowedByPolicy, notEnabled, phoneNumberNotUnique, ready, or notConfigured, unknownFutureValue.
    *
    * @param AuthenticationMethodSignInState $val The smsSignInState
    *
    * @return PhoneAuthenticationMethod
    */
    public function setSmsSignInState($val)
    {
        $this->_propDict["smsSignInState"] = $val;
        return $this;
    }
    
}
