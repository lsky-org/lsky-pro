<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodTarget File
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
* AuthenticationMethodTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodTarget extends Entity
{
    /**
    * Gets the isRegistrationRequired
    * Determines if the user is enforced to register the authentication method.
    *
    * @return bool The isRegistrationRequired
    */
    public function getIsRegistrationRequired()
    {
        if (array_key_exists("isRegistrationRequired", $this->_propDict)) {
            return $this->_propDict["isRegistrationRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRegistrationRequired
    * Determines if the user is enforced to register the authentication method.
    *
    * @param bool $val The isRegistrationRequired
    *
    * @return AuthenticationMethodTarget
    */
    public function setIsRegistrationRequired($val)
    {
        $this->_propDict["isRegistrationRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the targetType
    * Possible values are: user, group.
    *
    * @return AuthenticationMethodTargetType The targetType
    */
    public function getTargetType()
    {
        if (array_key_exists("targetType", $this->_propDict)) {
            if (is_a($this->_propDict["targetType"], "\Microsoft\Graph\Model\AuthenticationMethodTargetType")) {
                return $this->_propDict["targetType"];
            } else {
                $this->_propDict["targetType"] = new AuthenticationMethodTargetType($this->_propDict["targetType"]);
                return $this->_propDict["targetType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetType
    * Possible values are: user, group.
    *
    * @param AuthenticationMethodTargetType $val The targetType
    *
    * @return AuthenticationMethodTarget
    */
    public function setTargetType($val)
    {
        $this->_propDict["targetType"] = $val;
        return $this;
    }
    
}
