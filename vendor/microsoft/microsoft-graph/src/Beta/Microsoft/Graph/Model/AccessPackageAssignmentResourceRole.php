<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentResourceRole File
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
* AccessPackageAssignmentResourceRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentResourceRole extends Entity
{
    /**
    * Gets the originId
    * A unique identifier relative to the origin system, corresponding to the originId property of the accessPackageResourceRole.
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
    * A unique identifier relative to the origin system, corresponding to the originId property of the accessPackageResourceRole.
    *
    * @param string $val The originId
    *
    * @return AccessPackageAssignmentResourceRole
    */
    public function setOriginId($val)
    {
        $this->_propDict["originId"] = $val;
        return $this;
    }
    
    /**
    * Gets the originSystem
    * The system where the role assignment is to be created or has been created for an access package assignment, such as SharePointOnline, AadGroup or AadApplication, corresponding to the originSystem property of the accessPackageResourceRole.
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
    * The system where the role assignment is to be created or has been created for an access package assignment, such as SharePointOnline, AadGroup or AadApplication, corresponding to the originSystem property of the accessPackageResourceRole.
    *
    * @param string $val The originSystem
    *
    * @return AccessPackageAssignmentResourceRole
    */
    public function setOriginSystem($val)
    {
        $this->_propDict["originSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The value is PendingFulfillment when the access package assignment has not yet been delivered to the origin system, and Fulfilled when the access package assignment has been delivered to the origin system.
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
    * The value is PendingFulfillment when the access package assignment has not yet been delivered to the origin system, and Fulfilled when the access package assignment has been delivered to the origin system.
    *
    * @param string $val The status
    *
    * @return AccessPackageAssignmentResourceRole
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignments
    * The access package assignments resulting in this role assignment. Read-only. Nullable.
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
    * The access package assignments resulting in this role assignment. Read-only. Nullable.
    *
    * @param AccessPackageAssignment $val The accessPackageAssignments
    *
    * @return AccessPackageAssignmentResourceRole
    */
    public function setAccessPackageAssignments($val)
    {
		$this->_propDict["accessPackageAssignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageResourceRole
    * Read-only. Nullable.
    *
    * @return AccessPackageResourceRole The accessPackageResourceRole
    */
    public function getAccessPackageResourceRole()
    {
        if (array_key_exists("accessPackageResourceRole", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageResourceRole"], "\Beta\Microsoft\Graph\Model\AccessPackageResourceRole")) {
                return $this->_propDict["accessPackageResourceRole"];
            } else {
                $this->_propDict["accessPackageResourceRole"] = new AccessPackageResourceRole($this->_propDict["accessPackageResourceRole"]);
                return $this->_propDict["accessPackageResourceRole"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageResourceRole
    * Read-only. Nullable.
    *
    * @param AccessPackageResourceRole $val The accessPackageResourceRole
    *
    * @return AccessPackageAssignmentResourceRole
    */
    public function setAccessPackageResourceRole($val)
    {
        $this->_propDict["accessPackageResourceRole"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageResourceScope
    * Read-only. Nullable.
    *
    * @return AccessPackageResourceScope The accessPackageResourceScope
    */
    public function getAccessPackageResourceScope()
    {
        if (array_key_exists("accessPackageResourceScope", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageResourceScope"], "\Beta\Microsoft\Graph\Model\AccessPackageResourceScope")) {
                return $this->_propDict["accessPackageResourceScope"];
            } else {
                $this->_propDict["accessPackageResourceScope"] = new AccessPackageResourceScope($this->_propDict["accessPackageResourceScope"]);
                return $this->_propDict["accessPackageResourceScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageResourceScope
    * Read-only. Nullable.
    *
    * @param AccessPackageResourceScope $val The accessPackageResourceScope
    *
    * @return AccessPackageAssignmentResourceRole
    */
    public function setAccessPackageResourceScope($val)
    {
        $this->_propDict["accessPackageResourceScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageSubject
    * Read-only. Nullable.
    *
    * @return AccessPackageSubject The accessPackageSubject
    */
    public function getAccessPackageSubject()
    {
        if (array_key_exists("accessPackageSubject", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageSubject"], "\Beta\Microsoft\Graph\Model\AccessPackageSubject")) {
                return $this->_propDict["accessPackageSubject"];
            } else {
                $this->_propDict["accessPackageSubject"] = new AccessPackageSubject($this->_propDict["accessPackageSubject"]);
                return $this->_propDict["accessPackageSubject"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageSubject
    * Read-only. Nullable.
    *
    * @param AccessPackageSubject $val The accessPackageSubject
    *
    * @return AccessPackageAssignmentResourceRole
    */
    public function setAccessPackageSubject($val)
    {
        $this->_propDict["accessPackageSubject"] = $val;
        return $this;
    }
    
}
