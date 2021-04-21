<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectoryObjectPartnerReference File
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
* DirectoryObjectPartnerReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DirectoryObjectPartnerReference extends DirectoryObject
{
    /**
    * Gets the description
    * Description of the object returned. Read-only.
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
    * Description of the object returned. Read-only.
    *
    * @param string $val The description
    *
    * @return DirectoryObjectPartnerReference
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of directory object being returned, like group or application. Read-only.
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
    * Name of directory object being returned, like group or application. Read-only.
    *
    * @param string $val The displayName
    *
    * @return DirectoryObjectPartnerReference
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalPartnerTenantId
    * The tenant identifier for the partner tenant. Read-only.
    *
    * @return string The externalPartnerTenantId
    */
    public function getExternalPartnerTenantId()
    {
        if (array_key_exists("externalPartnerTenantId", $this->_propDict)) {
            return $this->_propDict["externalPartnerTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalPartnerTenantId
    * The tenant identifier for the partner tenant. Read-only.
    *
    * @param string $val The externalPartnerTenantId
    *
    * @return DirectoryObjectPartnerReference
    */
    public function setExternalPartnerTenantId($val)
    {
        $this->_propDict["externalPartnerTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the objectType
    * The type of the referenced object in the partner tenant. Read-only.
    *
    * @return string The objectType
    */
    public function getObjectType()
    {
        if (array_key_exists("objectType", $this->_propDict)) {
            return $this->_propDict["objectType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the objectType
    * The type of the referenced object in the partner tenant. Read-only.
    *
    * @param string $val The objectType
    *
    * @return DirectoryObjectPartnerReference
    */
    public function setObjectType($val)
    {
        $this->_propDict["objectType"] = $val;
        return $this;
    }
    
}
