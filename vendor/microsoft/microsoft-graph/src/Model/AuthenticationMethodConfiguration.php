<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodConfiguration File
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
* AuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodConfiguration extends Entity
{
    /**
    * Gets the state
    * The state of the policy. Possible values are: enabled, disabled.
    *
    * @return AuthenticationMethodState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Microsoft\Graph\Model\AuthenticationMethodState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AuthenticationMethodState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * The state of the policy. Possible values are: enabled, disabled.
    *
    * @param AuthenticationMethodState $val The state
    *
    * @return AuthenticationMethodConfiguration
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
}
