<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedAccess File
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
* PrivilegedAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedAccess extends Entity
{
    /**
    * Gets the displayName
    * The display name of the provider managed by PIM.
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
    * The display name of the provider managed by PIM.
    *
    * @param string $val The displayName
    *
    * @return PrivilegedAccess
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
    * A collection of resources for the provider.
     *
     * @return array The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resources
    * A collection of resources for the provider.
    *
    * @param GovernanceResource $val The resources
    *
    * @return PrivilegedAccess
    */
    public function setResources($val)
    {
		$this->_propDict["resources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentRequests
    * A collection of role assignment requests for the provider.
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
    * A collection of role assignment requests for the provider.
    *
    * @param GovernanceRoleAssignmentRequest $val The roleAssignmentRequests
    *
    * @return PrivilegedAccess
    */
    public function setRoleAssignmentRequests($val)
    {
		$this->_propDict["roleAssignmentRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
    * A collection of role assignments for the provider.
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
    * A collection of role assignments for the provider.
    *
    * @param GovernanceRoleAssignment $val The roleAssignments
    *
    * @return PrivilegedAccess
    */
    public function setRoleAssignments($val)
    {
		$this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
    * A collection of role defintions for the provider.
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
    * A collection of role defintions for the provider.
    *
    * @param GovernanceRoleDefinition $val The roleDefinitions
    *
    * @return PrivilegedAccess
    */
    public function setRoleDefinitions($val)
    {
		$this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleSettings
    * A collection of role settings for the provider.
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
    * A collection of role settings for the provider.
    *
    * @param GovernanceRoleSetting $val The roleSettings
    *
    * @return PrivilegedAccess
    */
    public function setRoleSettings($val)
    {
		$this->_propDict["roleSettings"] = $val;
        return $this;
    }
    
}
