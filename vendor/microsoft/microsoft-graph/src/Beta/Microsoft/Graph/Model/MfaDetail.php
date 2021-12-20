<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MfaDetail File
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
* MfaDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MfaDetail extends Entity
{
    /**
    * Gets the authDetail
    * Indicates the MFA auth detail for the corresponding Sign-in activity when the MFA Required is 'Yes'.
    *
    * @return string The authDetail
    */
    public function getAuthDetail()
    {
        if (array_key_exists("authDetail", $this->_propDict)) {
            return $this->_propDict["authDetail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authDetail
    * Indicates the MFA auth detail for the corresponding Sign-in activity when the MFA Required is 'Yes'.
    *
    * @param string $val The value of the authDetail
    *
    * @return MfaDetail
    */
    public function setAuthDetail($val)
    {
        $this->_propDict["authDetail"] = $val;
        return $this;
    }
    /**
    * Gets the authMethod
    * Indicates the MFA Auth methods (SMS, Phone, Authenticator App are some of the value) for the corresponding sign-in activity when the MFA Required field is 'Yes'.
    *
    * @return string The authMethod
    */
    public function getAuthMethod()
    {
        if (array_key_exists("authMethod", $this->_propDict)) {
            return $this->_propDict["authMethod"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authMethod
    * Indicates the MFA Auth methods (SMS, Phone, Authenticator App are some of the value) for the corresponding sign-in activity when the MFA Required field is 'Yes'.
    *
    * @param string $val The value of the authMethod
    *
    * @return MfaDetail
    */
    public function setAuthMethod($val)
    {
        $this->_propDict["authMethod"] = $val;
        return $this;
    }
}
