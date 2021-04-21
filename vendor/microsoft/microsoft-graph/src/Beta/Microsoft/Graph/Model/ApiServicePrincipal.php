<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApiServicePrincipal File
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
* ApiServicePrincipal class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApiServicePrincipal extends Entity
{

    /**
    * Gets the resourceSpecificApplicationPermissions
    *
    * @return ResourceSpecificPermission The resourceSpecificApplicationPermissions
    */
    public function getResourceSpecificApplicationPermissions()
    {
        if (array_key_exists("resourceSpecificApplicationPermissions", $this->_propDict)) {
            if (is_a($this->_propDict["resourceSpecificApplicationPermissions"], "\Beta\Microsoft\Graph\Model\ResourceSpecificPermission")) {
                return $this->_propDict["resourceSpecificApplicationPermissions"];
            } else {
                $this->_propDict["resourceSpecificApplicationPermissions"] = new ResourceSpecificPermission($this->_propDict["resourceSpecificApplicationPermissions"]);
                return $this->_propDict["resourceSpecificApplicationPermissions"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceSpecificApplicationPermissions
    *
    * @param ResourceSpecificPermission $val The value to assign to the resourceSpecificApplicationPermissions
    *
    * @return ApiServicePrincipal The ApiServicePrincipal
    */
    public function setResourceSpecificApplicationPermissions($val)
    {
        $this->_propDict["resourceSpecificApplicationPermissions"] = $val;
         return $this;
    }
}
