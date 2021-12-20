<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernancePermission File
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
* GovernancePermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernancePermission extends Entity
{
    /**
    * Gets the accessLevel
    * The access level. Valid values: None, UserRead, AdminRead, and AdminReadWrite.
    *
    * @return string The accessLevel
    */
    public function getAccessLevel()
    {
        if (array_key_exists("accessLevel", $this->_propDict)) {
            return $this->_propDict["accessLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessLevel
    * The access level. Valid values: None, UserRead, AdminRead, and AdminReadWrite.
    *
    * @param string $val The value of the accessLevel
    *
    * @return GovernancePermission
    */
    public function setAccessLevel($val)
    {
        $this->_propDict["accessLevel"] = $val;
        return $this;
    }
    /**
    * Gets the isActive
    * Indicate if the requestor has any active role assignment for the access level.
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isActive
    * Indicate if the requestor has any active role assignment for the access level.
    *
    * @param bool $val The value of the isActive
    *
    * @return GovernancePermission
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = $val;
        return $this;
    }
    /**
    * Gets the isEligible
    * Indicate if the requestor has any eligible role assignment for the access level.
    *
    * @return bool The isEligible
    */
    public function getIsEligible()
    {
        if (array_key_exists("isEligible", $this->_propDict)) {
            return $this->_propDict["isEligible"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEligible
    * Indicate if the requestor has any eligible role assignment for the access level.
    *
    * @param bool $val The value of the isEligible
    *
    * @return GovernancePermission
    */
    public function setIsEligible($val)
    {
        $this->_propDict["isEligible"] = $val;
        return $this;
    }
}
