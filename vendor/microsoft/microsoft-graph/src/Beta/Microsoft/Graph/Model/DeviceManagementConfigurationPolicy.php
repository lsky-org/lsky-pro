<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationPolicy File
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
* DeviceManagementConfigurationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationPolicy extends Entity
{
    /**
    * Gets the createdDateTime
    * Policy creation date and time. This property is read-only.
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
    * Policy creation date and time. This property is read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the creationSource
    * Policy creation source
    *
    * @return string The creationSource
    */
    public function getCreationSource()
    {
        if (array_key_exists("creationSource", $this->_propDict)) {
            return $this->_propDict["creationSource"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the creationSource
    * Policy creation source
    *
    * @param string $val The creationSource
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setCreationSource($val)
    {
        $this->_propDict["creationSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Policy description
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
    * Policy description
    *
    * @param string $val The description
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAssigned
    * Policy assignment status. This property is read-only.
    *
    * @return bool The isAssigned
    */
    public function getIsAssigned()
    {
        if (array_key_exists("isAssigned", $this->_propDict)) {
            return $this->_propDict["isAssigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAssigned
    * Policy assignment status. This property is read-only.
    *
    * @param bool $val The isAssigned
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setIsAssigned($val)
    {
        $this->_propDict["isAssigned"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Policy last modification date and time. This property is read-only.
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
    * Policy last modification date and time. This property is read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * Policy name
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
    * Policy name
    *
    * @param string $val The name
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the platforms
    * Platforms for this policy. Possible values are: none, macOS, windows10X, windows10.
    *
    * @return DeviceManagementConfigurationPlatforms The platforms
    */
    public function getPlatforms()
    {
        if (array_key_exists("platforms", $this->_propDict)) {
            if (is_a($this->_propDict["platforms"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationPlatforms")) {
                return $this->_propDict["platforms"];
            } else {
                $this->_propDict["platforms"] = new DeviceManagementConfigurationPlatforms($this->_propDict["platforms"]);
                return $this->_propDict["platforms"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platforms
    * Platforms for this policy. Possible values are: none, macOS, windows10X, windows10.
    *
    * @param DeviceManagementConfigurationPlatforms $val The platforms
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingCount
    * Number of settings. This property is read-only.
    *
    * @return int The settingCount
    */
    public function getSettingCount()
    {
        if (array_key_exists("settingCount", $this->_propDict)) {
            return $this->_propDict["settingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingCount
    * Number of settings. This property is read-only.
    *
    * @param int $val The settingCount
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setSettingCount($val)
    {
        $this->_propDict["settingCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the technologies
    * Technologies for this policy. Possible values are: none, mdm, windows10XManagement, configManager.
    *
    * @return DeviceManagementConfigurationTechnologies The technologies
    */
    public function getTechnologies()
    {
        if (array_key_exists("technologies", $this->_propDict)) {
            if (is_a($this->_propDict["technologies"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationTechnologies")) {
                return $this->_propDict["technologies"];
            } else {
                $this->_propDict["technologies"] = new DeviceManagementConfigurationTechnologies($this->_propDict["technologies"]);
                return $this->_propDict["technologies"];
            }
        }
        return null;
    }
    
    /**
    * Sets the technologies
    * Technologies for this policy. Possible values are: none, mdm, windows10XManagement, configManager.
    *
    * @param DeviceManagementConfigurationTechnologies $val The technologies
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setTechnologies($val)
    {
        $this->_propDict["technologies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * Policy assignments
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
    * Policy assignments
    *
    * @param DeviceManagementConfigurationPolicyAssignment $val The assignments
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the settings
    * Policy settings
     *
     * @return array The settings
     */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
           return $this->_propDict["settings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the settings
    * Policy settings
    *
    * @param DeviceManagementConfigurationSetting $val The settings
    *
    * @return DeviceManagementConfigurationPolicy
    */
    public function setSettings($val)
    {
		$this->_propDict["settings"] = $val;
        return $this;
    }
    
}
