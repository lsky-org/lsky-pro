<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceResource File
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
* GovernanceResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceResource extends Entity
{
    /**
    * Gets the displayName
    * The display name of the resource.
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
    * The display name of the resource.
    *
    * @param string $val The displayName
    *
    * @return GovernanceResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    * The external id of the resource, representing its original id in the external system. For example, a subscription resource's external id can be '/subscriptions/c14ae696-5e0c-4e5d-88cc-bef6637737ac'.
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    * The external id of the resource, representing its original id in the external system. For example, a subscription resource's external id can be '/subscriptions/c14ae696-5e0c-4e5d-88cc-bef6637737ac'.
    *
    * @param string $val The externalId
    *
    * @return GovernanceResource
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the registeredDateTime
    * Represents the date time when the resource is registered in PIM.
    *
    * @return \DateTime The registeredDateTime
    */
    public function getRegisteredDateTime()
    {
        if (array_key_exists("registeredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["registeredDateTime"], "\DateTime")) {
                return $this->_propDict["registeredDateTime"];
            } else {
                $this->_propDict["registeredDateTime"] = new \DateTime($this->_propDict["registeredDateTime"]);
                return $this->_propDict["registeredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the registeredDateTime
    * Represents the date time when the resource is registered in PIM.
    *
    * @param \DateTime $val The registeredDateTime
    *
    * @return GovernanceResource
    */
    public function setRegisteredDateTime($val)
    {
        $this->_propDict["registeredDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the registeredRoot
    * The externalId of the resource's root scope that is registered in PIM. The root scope can be the parent, grandparent, or higher ancestor resources.
    *
    * @return string The registeredRoot
    */
    public function getRegisteredRoot()
    {
        if (array_key_exists("registeredRoot", $this->_propDict)) {
            return $this->_propDict["registeredRoot"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the registeredRoot
    * The externalId of the resource's root scope that is registered in PIM. The root scope can be the parent, grandparent, or higher ancestor resources.
    *
    * @param string $val The registeredRoot
    *
    * @return GovernanceResource
    */
    public function setRegisteredRoot($val)
    {
        $this->_propDict["registeredRoot"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The status of a given resource. For example, it could represent whether the resource is locked or not (values: Active/Locked). Note: This property may be extended in the future to support more scenarios.
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    * The status of a given resource. For example, it could represent whether the resource is locked or not (values: Active/Locked). Note: This property may be extended in the future to support more scenarios.
    *
    * @param string $val The status
    *
    * @return GovernanceResource
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * Required. Resource type. For example, for Azure resources, the type could be 'Subscription', 'ResourceGroup', 'Microsoft.Sql/server', etc.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    * Required. Resource type. For example, for Azure resources, the type could be 'Subscription', 'ResourceGroup', 'Microsoft.Sql/server', etc.
    *
    * @param string $val The type
    *
    * @return GovernanceResource
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the parent
    * Read-only. The parent resource. for pimforazurerbac scenario, it can represent the subscription the resource belongs to.
    *
    * @return GovernanceResource The parent
    */
    public function getParent()
    {
        if (array_key_exists("parent", $this->_propDict)) {
            if (is_a($this->_propDict["parent"], "\Beta\Microsoft\Graph\Model\GovernanceResource")) {
                return $this->_propDict["parent"];
            } else {
                $this->_propDict["parent"] = new GovernanceResource($this->_propDict["parent"]);
                return $this->_propDict["parent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parent
    * Read-only. The parent resource. for pimforazurerbac scenario, it can represent the subscription the resource belongs to.
    *
    * @param GovernanceResource $val The parent
    *
    * @return GovernanceResource
    */
    public function setParent($val)
    {
        $this->_propDict["parent"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentRequests
    * The collection of role assignment requests for the resource.
     *
     * @return array The roleAssignmentRequests
     */
    public function getRoleAssignmentRequests()
    {
        if (array_key_exists("roleAssignmentRequests", $this->_propDict)) {
           return $this->_propDict["roleAssignmentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignmentRequests
    * The collection of role assignment requests for the resource.
    *
    * @param GovernanceRoleAssignmentRequest $val The roleAssignmentRequests
    *
    * @return GovernanceResource
    */
    public function setRoleAssignmentRequests($val)
    {
		$this->_propDict["roleAssignmentRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
    * The collection of role assignments for the resource.
     *
     * @return array The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists("roleAssignments", $this->_propDict)) {
           return $this->_propDict["roleAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignments
    * The collection of role assignments for the resource.
    *
    * @param GovernanceRoleAssignment $val The roleAssignments
    *
    * @return GovernanceResource
    */
    public function setRoleAssignments($val)
    {
		$this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
    * The collection of role defintions for the resource.
     *
     * @return array The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists("roleDefinitions", $this->_propDict)) {
           return $this->_propDict["roleDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleDefinitions
    * The collection of role defintions for the resource.
    *
    * @param GovernanceRoleDefinition $val The roleDefinitions
    *
    * @return GovernanceResource
    */
    public function setRoleDefinitions($val)
    {
		$this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleSettings
    * The collection of role settings for the resource.
     *
     * @return array The roleSettings
     */
    public function getRoleSettings()
    {
        if (array_key_exists("roleSettings", $this->_propDict)) {
           return $this->_propDict["roleSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleSettings
    * The collection of role settings for the resource.
    *
    * @param GovernanceRoleSetting $val The roleSettings
    *
    * @return GovernanceResource
    */
    public function setRoleSettings($val)
    {
		$this->_propDict["roleSettings"] = $val;
        return $this;
    }
    
}
