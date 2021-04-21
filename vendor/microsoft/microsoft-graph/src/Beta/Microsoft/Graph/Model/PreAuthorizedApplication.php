<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PreAuthorizedApplication File
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
* PreAuthorizedApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PreAuthorizedApplication extends Entity
{
    /**
    * Gets the appId
    * The unique identifier for the application.
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * The unique identifier for the application.
    *
    * @param string $val The value of the appId
    *
    * @return PreAuthorizedApplication
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the permissionIds
    * The unique identifier for the oauth2PermissionScopes the application requires.
    *
    * @return string The permissionIds
    */
    public function getPermissionIds()
    {
        if (array_key_exists("permissionIds", $this->_propDict)) {
            return $this->_propDict["permissionIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionIds
    * The unique identifier for the oauth2PermissionScopes the application requires.
    *
    * @param string $val The value of the permissionIds
    *
    * @return PreAuthorizedApplication
    */
    public function setPermissionIds($val)
    {
        $this->_propDict["permissionIds"] = $val;
        return $this;
    }
}
