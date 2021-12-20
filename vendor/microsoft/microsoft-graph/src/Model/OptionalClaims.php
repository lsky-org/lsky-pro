<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OptionalClaims File
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
* OptionalClaims class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OptionalClaims extends Entity
{

    /**
    * Gets the accessToken
    * The optional claims returned in the JWT access token.
    *
    * @return OptionalClaim The accessToken
    */
    public function getAccessToken()
    {
        if (array_key_exists("accessToken", $this->_propDict)) {
            if (is_a($this->_propDict["accessToken"], "\Microsoft\Graph\Model\OptionalClaim")) {
                return $this->_propDict["accessToken"];
            } else {
                $this->_propDict["accessToken"] = new OptionalClaim($this->_propDict["accessToken"]);
                return $this->_propDict["accessToken"];
            }
        }
        return null;
    }

    /**
    * Sets the accessToken
    * The optional claims returned in the JWT access token.
    *
    * @param OptionalClaim $val The value to assign to the accessToken
    *
    * @return OptionalClaims The OptionalClaims
    */
    public function setAccessToken($val)
    {
        $this->_propDict["accessToken"] = $val;
         return $this;
    }

    /**
    * Gets the idToken
    * The optional claims returned in the JWT ID token.
    *
    * @return OptionalClaim The idToken
    */
    public function getIdToken()
    {
        if (array_key_exists("idToken", $this->_propDict)) {
            if (is_a($this->_propDict["idToken"], "\Microsoft\Graph\Model\OptionalClaim")) {
                return $this->_propDict["idToken"];
            } else {
                $this->_propDict["idToken"] = new OptionalClaim($this->_propDict["idToken"]);
                return $this->_propDict["idToken"];
            }
        }
        return null;
    }

    /**
    * Sets the idToken
    * The optional claims returned in the JWT ID token.
    *
    * @param OptionalClaim $val The value to assign to the idToken
    *
    * @return OptionalClaims The OptionalClaims
    */
    public function setIdToken($val)
    {
        $this->_propDict["idToken"] = $val;
         return $this;
    }

    /**
    * Gets the saml2Token
    * The optional claims returned in the SAML token.
    *
    * @return OptionalClaim The saml2Token
    */
    public function getSaml2Token()
    {
        if (array_key_exists("saml2Token", $this->_propDict)) {
            if (is_a($this->_propDict["saml2Token"], "\Microsoft\Graph\Model\OptionalClaim")) {
                return $this->_propDict["saml2Token"];
            } else {
                $this->_propDict["saml2Token"] = new OptionalClaim($this->_propDict["saml2Token"]);
                return $this->_propDict["saml2Token"];
            }
        }
        return null;
    }

    /**
    * Sets the saml2Token
    * The optional claims returned in the SAML token.
    *
    * @param OptionalClaim $val The value to assign to the saml2Token
    *
    * @return OptionalClaims The OptionalClaims
    */
    public function setSaml2Token($val)
    {
        $this->_propDict["saml2Token"] = $val;
         return $this;
    }
}
