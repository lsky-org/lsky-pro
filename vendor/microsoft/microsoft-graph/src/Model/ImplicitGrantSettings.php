<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImplicitGrantSettings File
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
* ImplicitGrantSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ImplicitGrantSettings extends Entity
{
    /**
    * Gets the enableAccessTokenIssuance
    * Specifies whether this web application can request an access token using the OAuth 2.0 implicit flow.
    *
    * @return bool The enableAccessTokenIssuance
    */
    public function getEnableAccessTokenIssuance()
    {
        if (array_key_exists("enableAccessTokenIssuance", $this->_propDict)) {
            return $this->_propDict["enableAccessTokenIssuance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableAccessTokenIssuance
    * Specifies whether this web application can request an access token using the OAuth 2.0 implicit flow.
    *
    * @param bool $val The value of the enableAccessTokenIssuance
    *
    * @return ImplicitGrantSettings
    */
    public function setEnableAccessTokenIssuance($val)
    {
        $this->_propDict["enableAccessTokenIssuance"] = $val;
        return $this;
    }
    /**
    * Gets the enableIdTokenIssuance
    * Specifies whether this web application can request an ID token using the OAuth 2.0 implicit flow.
    *
    * @return bool The enableIdTokenIssuance
    */
    public function getEnableIdTokenIssuance()
    {
        if (array_key_exists("enableIdTokenIssuance", $this->_propDict)) {
            return $this->_propDict["enableIdTokenIssuance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableIdTokenIssuance
    * Specifies whether this web application can request an ID token using the OAuth 2.0 implicit flow.
    *
    * @param bool $val The value of the enableIdTokenIssuance
    *
    * @return ImplicitGrantSettings
    */
    public function setEnableIdTokenIssuance($val)
    {
        $this->_propDict["enableIdTokenIssuance"] = $val;
        return $this;
    }
}
