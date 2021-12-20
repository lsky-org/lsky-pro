<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRolePermission File
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
* UnifiedRolePermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRolePermission extends Entity
{
    /**
    * Gets the allowedResourceActions
    * Set of tasks that can be performed on a resource.
    *
    * @return string The allowedResourceActions
    */
    public function getAllowedResourceActions()
    {
        if (array_key_exists("allowedResourceActions", $this->_propDict)) {
            return $this->_propDict["allowedResourceActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedResourceActions
    * Set of tasks that can be performed on a resource.
    *
    * @param string $val The value of the allowedResourceActions
    *
    * @return UnifiedRolePermission
    */
    public function setAllowedResourceActions($val)
    {
        $this->_propDict["allowedResourceActions"] = $val;
        return $this;
    }
    /**
    * Gets the condition
    * Optional constraints that must be met for the permission to be effective.
    *
    * @return string The condition
    */
    public function getCondition()
    {
        if (array_key_exists("condition", $this->_propDict)) {
            return $this->_propDict["condition"];
        } else {
            return null;
        }
    }

    /**
    * Sets the condition
    * Optional constraints that must be met for the permission to be effective.
    *
    * @param string $val The value of the condition
    *
    * @return UnifiedRolePermission
    */
    public function setCondition($val)
    {
        $this->_propDict["condition"] = $val;
        return $this;
    }
    /**
    * Gets the excludedResourceActions
    *
    * @return string The excludedResourceActions
    */
    public function getExcludedResourceActions()
    {
        if (array_key_exists("excludedResourceActions", $this->_propDict)) {
            return $this->_propDict["excludedResourceActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludedResourceActions
    *
    * @param string $val The value of the excludedResourceActions
    *
    * @return UnifiedRolePermission
    */
    public function setExcludedResourceActions($val)
    {
        $this->_propDict["excludedResourceActions"] = $val;
        return $this;
    }
}
