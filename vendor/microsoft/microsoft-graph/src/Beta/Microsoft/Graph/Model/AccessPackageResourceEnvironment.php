<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceEnvironment File
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
* AccessPackageResourceEnvironment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceEnvironment extends Entity
{
    /**
    * Gets the connectionInfo
    * Connection information of an environment used to connect to a resource.
    *
    * @return ConnectionInfo The connectionInfo
    */
    public function getConnectionInfo()
    {
        if (array_key_exists("connectionInfo", $this->_propDict)) {
            if (is_a($this->_propDict["connectionInfo"], "\Beta\Microsoft\Graph\Model\ConnectionInfo")) {
                return $this->_propDict["connectionInfo"];
            } else {
                $this->_propDict["connectionInfo"] = new ConnectionInfo($this->_propDict["connectionInfo"]);
                return $this->_propDict["connectionInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionInfo
    * Connection information of an environment used to connect to a resource.
    *
    * @param ConnectionInfo $val The connectionInfo
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setConnectionInfo($val)
    {
        $this->_propDict["connectionInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * The display name of the user that created this object.
    *
    * @return string The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            return $this->_propDict["createdBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the createdBy
    * The display name of the user that created this object.
    *
    * @param string $val The createdBy
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description of this accessPackageResourceEnvironment object.
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
    * The description of this accessPackageResourceEnvironment object.
    *
    * @param string $val The description
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of this object.
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
    * The display name of this object.
    *
    * @param string $val The displayName
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefaultEnvironment
    * Determines whether this is default environment or not. It is set to true for all static origin systems, such as Azure AD groups and Azure AD Applications.
    *
    * @return bool The isDefaultEnvironment
    */
    public function getIsDefaultEnvironment()
    {
        if (array_key_exists("isDefaultEnvironment", $this->_propDict)) {
            return $this->_propDict["isDefaultEnvironment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefaultEnvironment
    * Determines whether this is default environment or not. It is set to true for all static origin systems, such as Azure AD groups and Azure AD Applications.
    *
    * @param bool $val The isDefaultEnvironment
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setIsDefaultEnvironment($val)
    {
        $this->_propDict["isDefaultEnvironment"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the modifiedBy
    * The display name of the entity that last modified this object.
    *
    * @return string The modifiedBy
    */
    public function getModifiedBy()
    {
        if (array_key_exists("modifiedBy", $this->_propDict)) {
            return $this->_propDict["modifiedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the modifiedBy
    * The display name of the entity that last modified this object.
    *
    * @param string $val The modifiedBy
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setModifiedBy($val)
    {
        $this->_propDict["modifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    * The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    * The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the originId
    * The unique identifier of this environment in the origin system.
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
    * The unique identifier of this environment in the origin system.
    *
    * @param string $val The originId
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setOriginId($val)
    {
        $this->_propDict["originId"] = $val;
        return $this;
    }
    
    /**
    * Gets the originSystem
    * The type of the resource in the origin system such as SharePointOnline. Supports $filter.
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
    * The type of the resource in the origin system such as SharePointOnline. Supports $filter.
    *
    * @param string $val The originSystem
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setOriginSystem($val)
    {
        $this->_propDict["originSystem"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResources
    * Read-only. Required.
     *
     * @return array The accessPackageResources
     */
    public function getAccessPackageResources()
    {
        if (array_key_exists("accessPackageResources", $this->_propDict)) {
           return $this->_propDict["accessPackageResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageResources
    * Read-only. Required.
    *
    * @param AccessPackageResource $val The accessPackageResources
    *
    * @return AccessPackageResourceEnvironment
    */
    public function setAccessPackageResources($val)
    {
		$this->_propDict["accessPackageResources"] = $val;
        return $this;
    }
    
}
