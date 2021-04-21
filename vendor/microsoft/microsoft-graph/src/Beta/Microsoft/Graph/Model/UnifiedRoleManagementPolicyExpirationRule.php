<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicyExpirationRule File
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
* UnifiedRoleManagementPolicyExpirationRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicyExpirationRule extends UnifiedRoleManagementPolicyRule
{
    /**
    * Gets the isExpirationRequired
    *
    * @return bool The isExpirationRequired
    */
    public function getIsExpirationRequired()
    {
        if (array_key_exists("isExpirationRequired", $this->_propDict)) {
            return $this->_propDict["isExpirationRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isExpirationRequired
    *
    * @param bool $val The isExpirationRequired
    *
    * @return UnifiedRoleManagementPolicyExpirationRule
    */
    public function setIsExpirationRequired($val)
    {
        $this->_propDict["isExpirationRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the maximumDuration
    *
    * @return Duration The maximumDuration
    */
    public function getMaximumDuration()
    {
        if (array_key_exists("maximumDuration", $this->_propDict)) {
            if (is_a($this->_propDict["maximumDuration"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["maximumDuration"];
            } else {
                $this->_propDict["maximumDuration"] = new Duration($this->_propDict["maximumDuration"]);
                return $this->_propDict["maximumDuration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the maximumDuration
    *
    * @param Duration $val The maximumDuration
    *
    * @return UnifiedRoleManagementPolicyExpirationRule
    */
    public function setMaximumDuration($val)
    {
        $this->_propDict["maximumDuration"] = $val;
        return $this;
    }
    
}
