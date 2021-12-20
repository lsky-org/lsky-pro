<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantSetupInfo File
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
* TenantSetupInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantSetupInfo extends Entity
{
    /**
    * Gets the firstTimeSetup
    *
    * @return bool The firstTimeSetup
    */
    public function getFirstTimeSetup()
    {
        if (array_key_exists("firstTimeSetup", $this->_propDict)) {
            return $this->_propDict["firstTimeSetup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firstTimeSetup
    *
    * @param bool $val The firstTimeSetup
    *
    * @return TenantSetupInfo
    */
    public function setFirstTimeSetup($val)
    {
        $this->_propDict["firstTimeSetup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the relevantRolesSettings
    *
    * @return string The relevantRolesSettings
    */
    public function getRelevantRolesSettings()
    {
        if (array_key_exists("relevantRolesSettings", $this->_propDict)) {
            return $this->_propDict["relevantRolesSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the relevantRolesSettings
    *
    * @param string $val The relevantRolesSettings
    *
    * @return TenantSetupInfo
    */
    public function setRelevantRolesSettings($val)
    {
        $this->_propDict["relevantRolesSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the setupStatus
    *
    * @return SetupStatus The setupStatus
    */
    public function getSetupStatus()
    {
        if (array_key_exists("setupStatus", $this->_propDict)) {
            if (is_a($this->_propDict["setupStatus"], "\Beta\Microsoft\Graph\Model\SetupStatus")) {
                return $this->_propDict["setupStatus"];
            } else {
                $this->_propDict["setupStatus"] = new SetupStatus($this->_propDict["setupStatus"]);
                return $this->_propDict["setupStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the setupStatus
    *
    * @param SetupStatus $val The setupStatus
    *
    * @return TenantSetupInfo
    */
    public function setSetupStatus($val)
    {
        $this->_propDict["setupStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the skipSetup
    *
    * @return bool The skipSetup
    */
    public function getSkipSetup()
    {
        if (array_key_exists("skipSetup", $this->_propDict)) {
            return $this->_propDict["skipSetup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skipSetup
    *
    * @param bool $val The skipSetup
    *
    * @return TenantSetupInfo
    */
    public function setSkipSetup($val)
    {
        $this->_propDict["skipSetup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userRolesActions
    *
    * @return string The userRolesActions
    */
    public function getUserRolesActions()
    {
        if (array_key_exists("userRolesActions", $this->_propDict)) {
            return $this->_propDict["userRolesActions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userRolesActions
    *
    * @param string $val The userRolesActions
    *
    * @return TenantSetupInfo
    */
    public function setUserRolesActions($val)
    {
        $this->_propDict["userRolesActions"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultRolesSettings
    *
    * @return PrivilegedRoleSettings The defaultRolesSettings
    */
    public function getDefaultRolesSettings()
    {
        if (array_key_exists("defaultRolesSettings", $this->_propDict)) {
            if (is_a($this->_propDict["defaultRolesSettings"], "\Beta\Microsoft\Graph\Model\PrivilegedRoleSettings")) {
                return $this->_propDict["defaultRolesSettings"];
            } else {
                $this->_propDict["defaultRolesSettings"] = new PrivilegedRoleSettings($this->_propDict["defaultRolesSettings"]);
                return $this->_propDict["defaultRolesSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultRolesSettings
    *
    * @param PrivilegedRoleSettings $val The defaultRolesSettings
    *
    * @return TenantSetupInfo
    */
    public function setDefaultRolesSettings($val)
    {
        $this->_propDict["defaultRolesSettings"] = $val;
        return $this;
    }
    
}
