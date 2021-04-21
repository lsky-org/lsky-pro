<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SmsAuthenticationMethodTarget File
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
* SmsAuthenticationMethodTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SmsAuthenticationMethodTarget extends AuthenticationMethodTarget
{
    /**
    * Gets the isUsableForSignIn
    * Determines if the users or groups can use this authentication method to sign in to Azure AD. The value is always true.
    *
    * @return bool The isUsableForSignIn
    */
    public function getIsUsableForSignIn()
    {
        if (array_key_exists("isUsableForSignIn", $this->_propDict)) {
            return $this->_propDict["isUsableForSignIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isUsableForSignIn
    * Determines if the users or groups can use this authentication method to sign in to Azure AD. The value is always true.
    *
    * @param bool $val The isUsableForSignIn
    *
    * @return SmsAuthenticationMethodTarget
    */
    public function setIsUsableForSignIn($val)
    {
        $this->_propDict["isUsableForSignIn"] = boolval($val);
        return $this;
    }
    
}
