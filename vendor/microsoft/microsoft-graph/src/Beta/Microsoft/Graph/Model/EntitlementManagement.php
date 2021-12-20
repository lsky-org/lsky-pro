<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntitlementManagement File
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
* EntitlementManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntitlementManagement extends Entity
{

     /** 
     * Gets the accessPackageAssignmentApprovals
     *
     * @return array The accessPackageAssignmentApprovals
     */
    public function getAccessPackageAssignmentApprovals()
    {
        if (array_key_exists("accessPackageAssignmentApprovals", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentApprovals"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignmentApprovals
    *
    * @param Approval $val The accessPackageAssignmentApprovals
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentApprovals($val)
    {
		$this->_propDict["accessPackageAssignmentApprovals"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignmentPolicies
     *
     * @return array The accessPackageAssignmentPolicies
     */
    public function getAccessPackageAssignmentPolicies()
    {
        if (array_key_exists("accessPackageAssignmentPolicies", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignmentPolicies
    *
    * @param AccessPackageAssignmentPolicy $val The accessPackageAssignmentPolicies
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentPolicies($val)
    {
		$this->_propDict["accessPackageAssignmentPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignmentRequests
     *
     * @return array The accessPackageAssignmentRequests
     */
    public function getAccessPackageAssignmentRequests()
    {
        if (array_key_exists("accessPackageAssignmentRequests", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignmentRequests
    *
    * @param AccessPackageAssignmentRequest $val The accessPackageAssignmentRequests
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentRequests($val)
    {
		$this->_propDict["accessPackageAssignmentRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignmentResourceRoles
     *
     * @return array The accessPackageAssignmentResourceRoles
     */
    public function getAccessPackageAssignmentResourceRoles()
    {
        if (array_key_exists("accessPackageAssignmentResourceRoles", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentResourceRoles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignmentResourceRoles
    *
    * @param AccessPackageAssignmentResourceRole $val The accessPackageAssignmentResourceRoles
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentResourceRoles($val)
    {
		$this->_propDict["accessPackageAssignmentResourceRoles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignments
     *
     * @return array The accessPackageAssignments
     */
    public function getAccessPackageAssignments()
    {
        if (array_key_exists("accessPackageAssignments", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignments
    *
    * @param AccessPackageAssignment $val The accessPackageAssignments
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignments($val)
    {
		$this->_propDict["accessPackageAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageCatalogs
     *
     * @return array The accessPackageCatalogs
     */
    public function getAccessPackageCatalogs()
    {
        if (array_key_exists("accessPackageCatalogs", $this->_propDict)) {
           return $this->_propDict["accessPackageCatalogs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageCatalogs
    *
    * @param AccessPackageCatalog $val The accessPackageCatalogs
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageCatalogs($val)
    {
		$this->_propDict["accessPackageCatalogs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResourceEnvironments
     *
     * @return array The accessPackageResourceEnvironments
     */
    public function getAccessPackageResourceEnvironments()
    {
        if (array_key_exists("accessPackageResourceEnvironments", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceEnvironments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageResourceEnvironments
    *
    * @param AccessPackageResourceEnvironment $val The accessPackageResourceEnvironments
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResourceEnvironments($val)
    {
		$this->_propDict["accessPackageResourceEnvironments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResourceRequests
     *
     * @return array The accessPackageResourceRequests
     */
    public function getAccessPackageResourceRequests()
    {
        if (array_key_exists("accessPackageResourceRequests", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageResourceRequests
    *
    * @param AccessPackageResourceRequest $val The accessPackageResourceRequests
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResourceRequests($val)
    {
		$this->_propDict["accessPackageResourceRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResourceRoleScopes
     *
     * @return array The accessPackageResourceRoleScopes
     */
    public function getAccessPackageResourceRoleScopes()
    {
        if (array_key_exists("accessPackageResourceRoleScopes", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceRoleScopes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageResourceRoleScopes
    *
    * @param AccessPackageResourceRoleScope $val The accessPackageResourceRoleScopes
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResourceRoleScopes($val)
    {
		$this->_propDict["accessPackageResourceRoleScopes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResources
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
    *
    * @param AccessPackageResource $val The accessPackageResources
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageResources($val)
    {
		$this->_propDict["accessPackageResources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackages
     *
     * @return array The accessPackages
     */
    public function getAccessPackages()
    {
        if (array_key_exists("accessPackages", $this->_propDict)) {
           return $this->_propDict["accessPackages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackages
    *
    * @param AccessPackage $val The accessPackages
    *
    * @return EntitlementManagement
    */
    public function setAccessPackages($val)
    {
		$this->_propDict["accessPackages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the connectedOrganizations
     *
     * @return array The connectedOrganizations
     */
    public function getConnectedOrganizations()
    {
        if (array_key_exists("connectedOrganizations", $this->_propDict)) {
           return $this->_propDict["connectedOrganizations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the connectedOrganizations
    *
    * @param ConnectedOrganization $val The connectedOrganizations
    *
    * @return EntitlementManagement
    */
    public function setConnectedOrganizations($val)
    {
		$this->_propDict["connectedOrganizations"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return EntitlementManagementSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\EntitlementManagementSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new EntitlementManagementSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param EntitlementManagementSettings $val The settings
    *
    * @return EntitlementManagement
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
}
