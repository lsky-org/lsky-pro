<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedRole File
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
* PrivilegedRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedRole extends Entity
{
    /**
    * Gets the name
    * Role name.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * Role name.
    *
    * @param string $val The name
    *
    * @return PrivilegedRole
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The assignments for this role. Read-only. Nullable.
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
    * The assignments for this role. Read-only. Nullable.
    *
    * @param PrivilegedRoleAssignment $val The assignments
    *
    * @return PrivilegedRole
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    * The settings for this role. Read-only. Nullable.
    *
    * @return PrivilegedRoleSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\PrivilegedRoleSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new PrivilegedRoleSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * The settings for this role. Read-only. Nullable.
    *
    * @param PrivilegedRoleSettings $val The settings
    *
    * @return PrivilegedRole
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
    /**
    * Gets the summary
    * The summary information for this role. Read-only. Nullable.
    *
    * @return PrivilegedRoleSummary The summary
    */
    public function getSummary()
    {
        if (array_key_exists("summary", $this->_propDict)) {
            if (is_a($this->_propDict["summary"], "\Beta\Microsoft\Graph\Model\PrivilegedRoleSummary")) {
                return $this->_propDict["summary"];
            } else {
                $this->_propDict["summary"] = new PrivilegedRoleSummary($this->_propDict["summary"]);
                return $this->_propDict["summary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the summary
    * The summary information for this role. Read-only. Nullable.
    *
    * @param PrivilegedRoleSummary $val The summary
    *
    * @return PrivilegedRole
    */
    public function setSummary($val)
    {
        $this->_propDict["summary"] = $val;
        return $this;
    }
    
}
