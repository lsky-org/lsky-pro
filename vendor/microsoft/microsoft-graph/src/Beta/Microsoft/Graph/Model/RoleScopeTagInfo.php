<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleScopeTagInfo File
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
* RoleScopeTagInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleScopeTagInfo extends Entity
{
    /**
    * Gets the displayName
    * Scope Tag Display name.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Scope Tag Display name.
    *
    * @param string $val The value of the displayName
    *
    * @return RoleScopeTagInfo
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the roleScopeTagId
    * Scope Tag Id.
    *
    * @return string The roleScopeTagId
    */
    public function getRoleScopeTagId()
    {
        if (array_key_exists("roleScopeTagId", $this->_propDict)) {
            return $this->_propDict["roleScopeTagId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleScopeTagId
    * Scope Tag Id.
    *
    * @param string $val The value of the roleScopeTagId
    *
    * @return RoleScopeTagInfo
    */
    public function setRoleScopeTagId($val)
    {
        $this->_propDict["roleScopeTagId"] = $val;
        return $this;
    }
}
