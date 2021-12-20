<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicySet File
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
* PolicySet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicySet extends Entity
{
    /**
    * Gets the createdDateTime
    * Creation time of the PolicySet.
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
    * Creation time of the PolicySet.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PolicySet
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the PolicySet.
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
    * Description of the PolicySet.
    *
    * @param string $val The description
    *
    * @return PolicySet
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * DisplayName of the PolicySet.
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
    * DisplayName of the PolicySet.
    *
    * @param string $val The displayName
    *
    * @return PolicySet
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorCode
    * Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted.
    *
    * @return ErrorCode The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            if (is_a($this->_propDict["errorCode"], "\Beta\Microsoft\Graph\Model\ErrorCode")) {
                return $this->_propDict["errorCode"];
            } else {
                $this->_propDict["errorCode"] = new ErrorCode($this->_propDict["errorCode"]);
                return $this->_propDict["errorCode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the errorCode
    * Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted.
    *
    * @param ErrorCode $val The errorCode
    *
    * @return PolicySet
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the guidedDeploymentTags
    * Tags of the guided deployment
    *
    * @return string The guidedDeploymentTags
    */
    public function getGuidedDeploymentTags()
    {
        if (array_key_exists("guidedDeploymentTags", $this->_propDict)) {
            return $this->_propDict["guidedDeploymentTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the guidedDeploymentTags
    * Tags of the guided deployment
    *
    * @param string $val The guidedDeploymentTags
    *
    * @return PolicySet
    */
    public function setGuidedDeploymentTags($val)
    {
        $this->_propDict["guidedDeploymentTags"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Last modified time of the PolicySet.
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
    * Last modified time of the PolicySet.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return PolicySet
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTags
    * RoleScopeTags of the PolicySet
    *
    * @return string The roleScopeTags
    */
    public function getRoleScopeTags()
    {
        if (array_key_exists("roleScopeTags", $this->_propDict)) {
            return $this->_propDict["roleScopeTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTags
    * RoleScopeTags of the PolicySet
    *
    * @param string $val The roleScopeTags
    *
    * @return PolicySet
    */
    public function setRoleScopeTags($val)
    {
        $this->_propDict["roleScopeTags"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Validation/assignment status of the PolicySet. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned.
    *
    * @return PolicySetStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\PolicySetStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new PolicySetStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Validation/assignment status of the PolicySet. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned.
    *
    * @param PolicySetStatus $val The status
    *
    * @return PolicySet
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * Assignments of the PolicySet.
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    * Assignments of the PolicySet.
    *
    * @param PolicySetAssignment $val The assignments
    *
    * @return PolicySet
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
    * Items of the PolicySet with maximum count 100.
     *
     * @return array The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the items
    * Items of the PolicySet with maximum count 100.
    *
    * @param PolicySetItem $val The items
    *
    * @return PolicySet
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    
}
