<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceScope File
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
* AccessPackageResourceScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceScope extends Entity
{
    /**
    * Gets the description
    * The description of the scope.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The description of the scope.
    *
    * @param string $val The description
    *
    * @return AccessPackageResourceScope
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of the scope.
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
    * The display name of the scope.
    *
    * @param string $val The displayName
    *
    * @return AccessPackageResourceScope
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isRootScope
    * True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
    *
    * @return bool The isRootScope
    */
    public function getIsRootScope()
    {
        if (array_key_exists("isRootScope", $this->_propDict)) {
            return $this->_propDict["isRootScope"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRootScope
    * True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
    *
    * @param bool $val The isRootScope
    *
    * @return AccessPackageResourceScope
    */
    public function setIsRootScope($val)
    {
        $this->_propDict["isRootScope"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the originId
    * The unique identifier for the scope in the resource as defined in the origin system.
    *
    * @return string The originId
    */
    public function getOriginId()
    {
        if (array_key_exists("originId", $this->_propDict)) {
            return $this->_propDict["originId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the originId
    * The unique identifier for the scope in the resource as defined in the origin system.
    *
    * @param string $val The originId
    *
    * @return AccessPackageResourceScope
    */
    public function setOriginId($val)
    {
        $this->_propDict["originId"] = $val;
        return $this;
    }
    
    /**
    * Gets the originSystem
    * The origin system for the scope.
    *
    * @return string The originSystem
    */
    public function getOriginSystem()
    {
        if (array_key_exists("originSystem", $this->_propDict)) {
            return $this->_propDict["originSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the originSystem
    * The origin system for the scope.
    *
    * @param string $val The originSystem
    *
    * @return AccessPackageResourceScope
    */
    public function setOriginSystem($val)
    {
        $this->_propDict["originSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleOriginId
    * The origin system for the role, if different.
    *
    * @return string The roleOriginId
    */
    public function getRoleOriginId()
    {
        if (array_key_exists("roleOriginId", $this->_propDict)) {
            return $this->_propDict["roleOriginId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleOriginId
    * The origin system for the role, if different.
    *
    * @param string $val The roleOriginId
    *
    * @return AccessPackageResourceScope
    */
    public function setRoleOriginId($val)
    {
        $this->_propDict["roleOriginId"] = $val;
        return $this;
    }
    
    /**
    * Gets the url
    * A resource locator for the scope.
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the url
    * A resource locator for the scope.
    *
    * @param string $val The url
    *
    * @return AccessPackageResourceScope
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageResource
    * Read-only. Nullable.
    *
    * @return AccessPackageResource The accessPackageResource
    */
    public function getAccessPackageResource()
    {
        if (array_key_exists("accessPackageResource", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageResource"], "\Beta\Microsoft\Graph\Model\AccessPackageResource")) {
                return $this->_propDict["accessPackageResource"];
            } else {
                $this->_propDict["accessPackageResource"] = new AccessPackageResource($this->_propDict["accessPackageResource"]);
                return $this->_propDict["accessPackageResource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageResource
    * Read-only. Nullable.
    *
    * @param AccessPackageResource $val The accessPackageResource
    *
    * @return AccessPackageResourceScope
    */
    public function setAccessPackageResource($val)
    {
        $this->_propDict["accessPackageResource"] = $val;
        return $this;
    }
    
}
