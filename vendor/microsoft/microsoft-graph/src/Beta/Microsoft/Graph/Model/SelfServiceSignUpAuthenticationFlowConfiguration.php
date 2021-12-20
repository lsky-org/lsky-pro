<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SelfServiceSignUpAuthenticationFlowConfiguration File
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
* SelfServiceSignUpAuthenticationFlowConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SelfServiceSignUpAuthenticationFlowConfiguration extends Entity
{
    /**
    * Gets the isEnabled
    * Indicates whether self-service sign-up flow is enabled or disabled. The default value is false. This property is not a key. Required.
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * Indicates whether self-service sign-up flow is enabled or disabled. The default value is false. This property is not a key. Required.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return SelfServiceSignUpAuthenticationFlowConfiguration
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
}
