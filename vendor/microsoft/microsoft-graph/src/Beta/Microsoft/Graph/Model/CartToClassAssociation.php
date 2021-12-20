<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CartToClassAssociation File
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
* CartToClassAssociation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CartToClassAssociation extends Entity
{
    /**
    * Gets the classroomIds
    * Identifiers of classrooms to be associated with device carts.
    *
    * @return string The classroomIds
    */
    public function getClassroomIds()
    {
        if (array_key_exists("classroomIds", $this->_propDict)) {
            return $this->_propDict["classroomIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classroomIds
    * Identifiers of classrooms to be associated with device carts.
    *
    * @param string $val The classroomIds
    *
    * @return CartToClassAssociation
    */
    public function setClassroomIds($val)
    {
        $this->_propDict["classroomIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * DateTime the object was created.
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
    * DateTime the object was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return CartToClassAssociation
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Admin provided description of the CartToClassAssociation.
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
    * Admin provided description of the CartToClassAssociation.
    *
    * @param string $val The description
    *
    * @return CartToClassAssociation
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCartIds
    * Identifiers of device carts to be associated with classes.
    *
    * @return string The deviceCartIds
    */
    public function getDeviceCartIds()
    {
        if (array_key_exists("deviceCartIds", $this->_propDict)) {
            return $this->_propDict["deviceCartIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceCartIds
    * Identifiers of device carts to be associated with classes.
    *
    * @param string $val The deviceCartIds
    *
    * @return CartToClassAssociation
    */
    public function setDeviceCartIds($val)
    {
        $this->_propDict["deviceCartIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Admin provided name of the device configuration.
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
    * Admin provided name of the device configuration.
    *
    * @param string $val The displayName
    *
    * @return CartToClassAssociation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return CartToClassAssociation
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Version of the CartToClassAssociation.
    *
    * @return int The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * Version of the CartToClassAssociation.
    *
    * @param int $val The version
    *
    * @return CartToClassAssociation
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    
}
