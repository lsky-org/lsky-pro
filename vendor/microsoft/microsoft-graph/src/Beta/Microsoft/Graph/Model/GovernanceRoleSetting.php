<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRoleSetting File
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
* GovernanceRoleSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRoleSetting extends Entity
{

     /** 
     * Gets the adminEligibleSettings
    * The rule settings that are evaluated when an administrator tries to add an eligible role assignment.
     *
     * @return array The adminEligibleSettings
     */
    public function getAdminEligibleSettings()
    {
        if (array_key_exists("adminEligibleSettings", $this->_propDict)) {
           return $this->_propDict["adminEligibleSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the adminEligibleSettings
    * The rule settings that are evaluated when an administrator tries to add an eligible role assignment.
    *
    * @param GovernanceRuleSetting $val The adminEligibleSettings
    *
    * @return GovernanceRoleSetting
    */
    public function setAdminEligibleSettings($val)
    {
		$this->_propDict["adminEligibleSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the adminMemberSettings
    * The rule settings that are evaluated when an administrator tries to add a direct member role assignment.
     *
     * @return array The adminMemberSettings
     */
    public function getAdminMemberSettings()
    {
        if (array_key_exists("adminMemberSettings", $this->_propDict)) {
           return $this->_propDict["adminMemberSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the adminMemberSettings
    * The rule settings that are evaluated when an administrator tries to add a direct member role assignment.
    *
    * @param GovernanceRuleSetting $val The adminMemberSettings
    *
    * @return GovernanceRoleSetting
    */
    public function setAdminMemberSettings($val)
    {
		$this->_propDict["adminMemberSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefault
    * Read-only. Indicate if the roleSetting is a default roleSetting
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    * Read-only. Indicate if the roleSetting is a default roleSetting
    *
    * @param bool $val The isDefault
    *
    * @return GovernanceRoleSetting
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastUpdatedBy
    * Read-only. The display name of the administrator who last updated the roleSetting.
    *
    * @return string The lastUpdatedBy
    */
    public function getLastUpdatedBy()
    {
        if (array_key_exists("lastUpdatedBy", $this->_propDict)) {
            return $this->_propDict["lastUpdatedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastUpdatedBy
    * Read-only. The display name of the administrator who last updated the roleSetting.
    *
    * @param string $val The lastUpdatedBy
    *
    * @return GovernanceRoleSetting
    */
    public function setLastUpdatedBy($val)
    {
        $this->_propDict["lastUpdatedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdatedDateTime
    * Read-only. The time when the role setting was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdatedDateTime
    * Read-only. The time when the role setting was last updated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return GovernanceRoleSetting
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    * Required. The id of the resource that the role setting is associated with.
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    * Required. The id of the resource that the role setting is associated with.
    *
    * @param string $val The resourceId
    *
    * @return GovernanceRoleSetting
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinitionId
    * Required. The id of the role definition that the role setting is associated with.
    *
    * @return string The roleDefinitionId
    */
    public function getRoleDefinitionId()
    {
        if (array_key_exists("roleDefinitionId", $this->_propDict)) {
            return $this->_propDict["roleDefinitionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleDefinitionId
    * Required. The id of the role definition that the role setting is associated with.
    *
    * @param string $val The roleDefinitionId
    *
    * @return GovernanceRoleSetting
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userEligibleSettings
    * The rule settings that are evaluated when a user tries to add an eligible role assignment. The setting is not supported for now.
     *
     * @return array The userEligibleSettings
     */
    public function getUserEligibleSettings()
    {
        if (array_key_exists("userEligibleSettings", $this->_propDict)) {
           return $this->_propDict["userEligibleSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userEligibleSettings
    * The rule settings that are evaluated when a user tries to add an eligible role assignment. The setting is not supported for now.
    *
    * @param GovernanceRuleSetting $val The userEligibleSettings
    *
    * @return GovernanceRoleSetting
    */
    public function setUserEligibleSettings($val)
    {
		$this->_propDict["userEligibleSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userMemberSettings
    * The rule settings that are evaluated when a user tries to activate his role assignment.
     *
     * @return array The userMemberSettings
     */
    public function getUserMemberSettings()
    {
        if (array_key_exists("userMemberSettings", $this->_propDict)) {
           return $this->_propDict["userMemberSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userMemberSettings
    * The rule settings that are evaluated when a user tries to activate his role assignment.
    *
    * @param GovernanceRuleSetting $val The userMemberSettings
    *
    * @return GovernanceRoleSetting
    */
    public function setUserMemberSettings($val)
    {
		$this->_propDict["userMemberSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    * Read-only. The associated resource for this role setting.
    *
    * @return GovernanceResource The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Beta\Microsoft\Graph\Model\GovernanceResource")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new GovernanceResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    * Read-only. The associated resource for this role setting.
    *
    * @param GovernanceResource $val The resource
    *
    * @return GovernanceRoleSetting
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinition
    * Read-only. The role definition that is enforced with this role setting.
    *
    * @return GovernanceRoleDefinition The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "\Beta\Microsoft\Graph\Model\GovernanceRoleDefinition")) {
                return $this->_propDict["roleDefinition"];
            } else {
                $this->_propDict["roleDefinition"] = new GovernanceRoleDefinition($this->_propDict["roleDefinition"]);
                return $this->_propDict["roleDefinition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleDefinition
    * Read-only. The role definition that is enforced with this role setting.
    *
    * @param GovernanceRoleDefinition $val The roleDefinition
    *
    * @return GovernanceRoleSetting
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }
    
}
