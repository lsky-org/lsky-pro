<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SmsAuthenticationMethodConfiguration File
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
* SmsAuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SmsAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration
{

     /** 
     * Gets the includeTargets
    * A collection of users or groups who are enabled to use the authentication method.
     *
     * @return array The includeTargets
     */
    public function getIncludeTargets()
    {
        if (array_key_exists("includeTargets", $this->_propDict)) {
           return $this->_propDict["includeTargets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the includeTargets
    * A collection of users or groups who are enabled to use the authentication method.
    *
    * @param SmsAuthenticationMethodTarget $val The includeTargets
    *
    * @return SmsAuthenticationMethodConfiguration
    */
    public function setIncludeTargets($val)
    {
		$this->_propDict["includeTargets"] = $val;
        return $this;
    }
    
}
