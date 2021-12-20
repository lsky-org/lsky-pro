<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContinuousAccessEvaluationPolicy File
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
* ContinuousAccessEvaluationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContinuousAccessEvaluationPolicy extends Entity
{
    /**
    * Gets the description
    * Continuous access evaluation automatically blocks access to resources and applications in near real time when a user's access is removed or a client IP address changes. Read-only.
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
    * Continuous access evaluation automatically blocks access to resources and applications in near real time when a user's access is removed or a client IP address changes. Read-only.
    *
    * @param string $val The description
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The value is always Continuous Access Evaluation. Read-only.
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
    * The value is always Continuous Access Evaluation. Read-only.
    *
    * @param string $val The displayName
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the groups
    * The collection of group identifiers in scope for evaluation. All groups are in scope when the collection is empty.
    *
    * @return string The groups
    */
    public function getGroups()
    {
        if (array_key_exists("groups", $this->_propDict)) {
            return $this->_propDict["groups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groups
    * The collection of group identifiers in scope for evaluation. All groups are in scope when the collection is empty.
    *
    * @param string $val The groups
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setGroups($val)
    {
        $this->_propDict["groups"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabled
    * true to indicate whether continuous access evaluation should be performed; otherwise false.
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    * true to indicate whether continuous access evaluation should be performed; otherwise false.
    *
    * @param bool $val The isEnabled
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the users
    * The collection of user identifiers in scope for evaluation. All users are in scope when the collection is empty.
    *
    * @return string The users
    */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
            return $this->_propDict["users"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the users
    * The collection of user identifiers in scope for evaluation. All users are in scope when the collection is empty.
    *
    * @param string $val The users
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setUsers($val)
    {
        $this->_propDict["users"] = $val;
        return $this;
    }
    
}
