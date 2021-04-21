<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RolePermission File
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
* RolePermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RolePermission extends Entity
{
    /**
    * Gets the actions
    * Allowed Actions - Deprecated
    *
    * @return string The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            return $this->_propDict["actions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actions
    * Allowed Actions - Deprecated
    *
    * @param string $val The value of the actions
    *
    * @return RolePermission
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
        return $this;
    }

    /**
    * Gets the resourceActions
    * Resource Actions each containing a set of allowed and not allowed permissions.
    *
    * @return ResourceAction The resourceActions
    */
    public function getResourceActions()
    {
        if (array_key_exists("resourceActions", $this->_propDict)) {
            if (is_a($this->_propDict["resourceActions"], "\Beta\Microsoft\Graph\Model\ResourceAction")) {
                return $this->_propDict["resourceActions"];
            } else {
                $this->_propDict["resourceActions"] = new ResourceAction($this->_propDict["resourceActions"]);
                return $this->_propDict["resourceActions"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceActions
    * Resource Actions each containing a set of allowed and not allowed permissions.
    *
    * @param ResourceAction $val The value to assign to the resourceActions
    *
    * @return RolePermission The RolePermission
    */
    public function setResourceActions($val)
    {
        $this->_propDict["resourceActions"] = $val;
         return $this;
    }
}
