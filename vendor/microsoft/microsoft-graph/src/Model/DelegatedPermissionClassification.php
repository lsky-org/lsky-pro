<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedPermissionClassification File
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
* DelegatedPermissionClassification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedPermissionClassification extends Entity
{
    /**
    * Gets the classification
    * The classification value being given. Possible value: low. Does not support $filter.
    *
    * @return PermissionClassificationType The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Microsoft\Graph\Model\PermissionClassificationType")) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new PermissionClassificationType($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }
    
    /**
    * Sets the classification
    * The classification value being given. Possible value: low. Does not support $filter.
    *
    * @param PermissionClassificationType $val The classification
    *
    * @return DelegatedPermissionClassification
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionId
    * The unique identifier (id) for the delegated permission listed in the publishedPermissionScopes collection of the servicePrincipal. Required on create. Does not support $filter.
    *
    * @return string The permissionId
    */
    public function getPermissionId()
    {
        if (array_key_exists("permissionId", $this->_propDict)) {
            return $this->_propDict["permissionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissionId
    * The unique identifier (id) for the delegated permission listed in the publishedPermissionScopes collection of the servicePrincipal. Required on create. Does not support $filter.
    *
    * @param string $val The permissionId
    *
    * @return DelegatedPermissionClassification
    */
    public function setPermissionId($val)
    {
        $this->_propDict["permissionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionName
    * The claim value (value) for the delegated permission listed in the publishedPermissionScopes collection of the servicePrincipal. Does not support $filter.
    *
    * @return string The permissionName
    */
    public function getPermissionName()
    {
        if (array_key_exists("permissionName", $this->_propDict)) {
            return $this->_propDict["permissionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissionName
    * The claim value (value) for the delegated permission listed in the publishedPermissionScopes collection of the servicePrincipal. Does not support $filter.
    *
    * @param string $val The permissionName
    *
    * @return DelegatedPermissionClassification
    */
    public function setPermissionName($val)
    {
        $this->_propDict["permissionName"] = $val;
        return $this;
    }
    
}
