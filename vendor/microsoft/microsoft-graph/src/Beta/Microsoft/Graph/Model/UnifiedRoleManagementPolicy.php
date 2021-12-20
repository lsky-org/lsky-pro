<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicy File
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
* UnifiedRoleManagementPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicy extends Entity
{
    /**
    * Gets the description
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
    *
    * @param string $val The description
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isOrganizationDefault
    *
    * @return bool The isOrganizationDefault
    */
    public function getIsOrganizationDefault()
    {
        if (array_key_exists("isOrganizationDefault", $this->_propDict)) {
            return $this->_propDict["isOrganizationDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOrganizationDefault
    *
    * @param bool $val The isOrganizationDefault
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setIsOrganizationDefault($val)
    {
        $this->_propDict["isOrganizationDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    *
    * @return Identity The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new Identity($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedBy
    *
    * @param Identity $val The lastModifiedBy
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the scopeId
    *
    * @return string The scopeId
    */
    public function getScopeId()
    {
        if (array_key_exists("scopeId", $this->_propDict)) {
            return $this->_propDict["scopeId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scopeId
    *
    * @param string $val The scopeId
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setScopeId($val)
    {
        $this->_propDict["scopeId"] = $val;
        return $this;
    }
    
    /**
    * Gets the scopeType
    *
    * @return string The scopeType
    */
    public function getScopeType()
    {
        if (array_key_exists("scopeType", $this->_propDict)) {
            return $this->_propDict["scopeType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scopeType
    *
    * @param string $val The scopeType
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the effectiveRules
     *
     * @return array The effectiveRules
     */
    public function getEffectiveRules()
    {
        if (array_key_exists("effectiveRules", $this->_propDict)) {
           return $this->_propDict["effectiveRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the effectiveRules
    *
    * @param UnifiedRoleManagementPolicyRule $val The effectiveRules
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setEffectiveRules($val)
    {
		$this->_propDict["effectiveRules"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rules
     *
     * @return array The rules
     */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
           return $this->_propDict["rules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rules
    *
    * @param UnifiedRoleManagementPolicyRule $val The rules
    *
    * @return UnifiedRoleManagementPolicy
    */
    public function setRules($val)
    {
		$this->_propDict["rules"] = $val;
        return $this;
    }
    
}
