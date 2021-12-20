<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicyAuthenticationContextRule File
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
* UnifiedRoleManagementPolicyAuthenticationContextRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicyAuthenticationContextRule extends UnifiedRoleManagementPolicyRule
{
    /**
    * Gets the claimValue
    *
    * @return string The claimValue
    */
    public function getClaimValue()
    {
        if (array_key_exists("claimValue", $this->_propDict)) {
            return $this->_propDict["claimValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the claimValue
    *
    * @param string $val The claimValue
    *
    * @return UnifiedRoleManagementPolicyAuthenticationContextRule
    */
    public function setClaimValue($val)
    {
        $this->_propDict["claimValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabled
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
    *
    * @param bool $val The isEnabled
    *
    * @return UnifiedRoleManagementPolicyAuthenticationContextRule
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
}
