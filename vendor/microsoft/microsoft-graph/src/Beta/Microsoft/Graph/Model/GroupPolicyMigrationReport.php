<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyMigrationReport File
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
* GroupPolicyMigrationReport class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyMigrationReport extends Entity
{
    /**
    * Gets the createdDateTime
    * The date and time at which the GroupPolicyMigrationReport was created.
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
    * The date and time at which the GroupPolicyMigrationReport was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return GroupPolicyMigrationReport
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of Group Policy Object from the GPO Xml Content
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
    * The name of Group Policy Object from the GPO Xml Content
    *
    * @param string $val The displayName
    *
    * @return GroupPolicyMigrationReport
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupPolicyCreatedDateTime
    * The date and time at which the GroupPolicyMigrationReport was created.
    *
    * @return \DateTime The groupPolicyCreatedDateTime
    */
    public function getGroupPolicyCreatedDateTime()
    {
        if (array_key_exists("groupPolicyCreatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["groupPolicyCreatedDateTime"], "\DateTime")) {
                return $this->_propDict["groupPolicyCreatedDateTime"];
            } else {
                $this->_propDict["groupPolicyCreatedDateTime"] = new \DateTime($this->_propDict["groupPolicyCreatedDateTime"]);
                return $this->_propDict["groupPolicyCreatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the groupPolicyCreatedDateTime
    * The date and time at which the GroupPolicyMigrationReport was created.
    *
    * @param \DateTime $val The groupPolicyCreatedDateTime
    *
    * @return GroupPolicyMigrationReport
    */
    public function setGroupPolicyCreatedDateTime($val)
    {
        $this->_propDict["groupPolicyCreatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupPolicyLastModifiedDateTime
    * The date and time at which the GroupPolicyMigrationReport was last modified.
    *
    * @return \DateTime The groupPolicyLastModifiedDateTime
    */
    public function getGroupPolicyLastModifiedDateTime()
    {
        if (array_key_exists("groupPolicyLastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["groupPolicyLastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["groupPolicyLastModifiedDateTime"];
            } else {
                $this->_propDict["groupPolicyLastModifiedDateTime"] = new \DateTime($this->_propDict["groupPolicyLastModifiedDateTime"]);
                return $this->_propDict["groupPolicyLastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the groupPolicyLastModifiedDateTime
    * The date and time at which the GroupPolicyMigrationReport was last modified.
    *
    * @param \DateTime $val The groupPolicyLastModifiedDateTime
    *
    * @return GroupPolicyMigrationReport
    */
    public function setGroupPolicyLastModifiedDateTime($val)
    {
        $this->_propDict["groupPolicyLastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupPolicyObjectId
    * The Group Policy Object GUID from GPO Xml content
    *
    * @return string The groupPolicyObjectId
    */
    public function getGroupPolicyObjectId()
    {
        if (array_key_exists("groupPolicyObjectId", $this->_propDict)) {
            return $this->_propDict["groupPolicyObjectId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupPolicyObjectId
    * The Group Policy Object GUID from GPO Xml content
    *
    * @param string $val The groupPolicyObjectId
    *
    * @return GroupPolicyMigrationReport
    */
    public function setGroupPolicyObjectId($val)
    {
        $this->_propDict["groupPolicyObjectId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time at which the GroupPolicyMigrationReport was last modified.
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
    * The date and time at which the GroupPolicyMigrationReport was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return GroupPolicyMigrationReport
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the migrationReadiness
    * The Intune coverage for the associated Group Policy Object file. Possible values are: none, partial, complete, error, notApplicable.
    *
    * @return GroupPolicyMigrationReadiness The migrationReadiness
    */
    public function getMigrationReadiness()
    {
        if (array_key_exists("migrationReadiness", $this->_propDict)) {
            if (is_a($this->_propDict["migrationReadiness"], "\Beta\Microsoft\Graph\Model\GroupPolicyMigrationReadiness")) {
                return $this->_propDict["migrationReadiness"];
            } else {
                $this->_propDict["migrationReadiness"] = new GroupPolicyMigrationReadiness($this->_propDict["migrationReadiness"]);
                return $this->_propDict["migrationReadiness"];
            }
        }
        return null;
    }
    
    /**
    * Sets the migrationReadiness
    * The Intune coverage for the associated Group Policy Object file. Possible values are: none, partial, complete, error, notApplicable.
    *
    * @param GroupPolicyMigrationReadiness $val The migrationReadiness
    *
    * @return GroupPolicyMigrationReport
    */
    public function setMigrationReadiness($val)
    {
        $this->_propDict["migrationReadiness"] = $val;
        return $this;
    }
    
    /**
    * Gets the ouDistinguishedName
    * The distinguished name of the OU.
    *
    * @return string The ouDistinguishedName
    */
    public function getOuDistinguishedName()
    {
        if (array_key_exists("ouDistinguishedName", $this->_propDict)) {
            return $this->_propDict["ouDistinguishedName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ouDistinguishedName
    * The distinguished name of the OU.
    *
    * @param string $val The ouDistinguishedName
    *
    * @return GroupPolicyMigrationReport
    */
    public function setOuDistinguishedName($val)
    {
        $this->_propDict["ouDistinguishedName"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportedSettingsCount
    * The number of Group Policy Settings supported by Intune.
    *
    * @return int The supportedSettingsCount
    */
    public function getSupportedSettingsCount()
    {
        if (array_key_exists("supportedSettingsCount", $this->_propDict)) {
            return $this->_propDict["supportedSettingsCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedSettingsCount
    * The number of Group Policy Settings supported by Intune.
    *
    * @param int $val The supportedSettingsCount
    *
    * @return GroupPolicyMigrationReport
    */
    public function setSupportedSettingsCount($val)
    {
        $this->_propDict["supportedSettingsCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the supportedSettingsPercent
    * The Percentage of Group Policy Settings supported by Intune.
    *
    * @return int The supportedSettingsPercent
    */
    public function getSupportedSettingsPercent()
    {
        if (array_key_exists("supportedSettingsPercent", $this->_propDict)) {
            return $this->_propDict["supportedSettingsPercent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedSettingsPercent
    * The Percentage of Group Policy Settings supported by Intune.
    *
    * @param int $val The supportedSettingsPercent
    *
    * @return GroupPolicyMigrationReport
    */
    public function setSupportedSettingsPercent($val)
    {
        $this->_propDict["supportedSettingsPercent"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the targetedInActiveDirectory
    * The Targeted in AD property from GPO Xml Content
    *
    * @return bool The targetedInActiveDirectory
    */
    public function getTargetedInActiveDirectory()
    {
        if (array_key_exists("targetedInActiveDirectory", $this->_propDict)) {
            return $this->_propDict["targetedInActiveDirectory"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedInActiveDirectory
    * The Targeted in AD property from GPO Xml Content
    *
    * @param bool $val The targetedInActiveDirectory
    *
    * @return GroupPolicyMigrationReport
    */
    public function setTargetedInActiveDirectory($val)
    {
        $this->_propDict["targetedInActiveDirectory"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the totalSettingsCount
    * The total number of Group Policy Settings from GPO file.
    *
    * @return int The totalSettingsCount
    */
    public function getTotalSettingsCount()
    {
        if (array_key_exists("totalSettingsCount", $this->_propDict)) {
            return $this->_propDict["totalSettingsCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalSettingsCount
    * The total number of Group Policy Settings from GPO file.
    *
    * @param int $val The totalSettingsCount
    *
    * @return GroupPolicyMigrationReport
    */
    public function setTotalSettingsCount($val)
    {
        $this->_propDict["totalSettingsCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the groupPolicySettingMappings
    * A list of group policy settings to MDM/Intune mappings.
     *
     * @return array The groupPolicySettingMappings
     */
    public function getGroupPolicySettingMappings()
    {
        if (array_key_exists("groupPolicySettingMappings", $this->_propDict)) {
           return $this->_propDict["groupPolicySettingMappings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupPolicySettingMappings
    * A list of group policy settings to MDM/Intune mappings.
    *
    * @param GroupPolicySettingMapping $val The groupPolicySettingMappings
    *
    * @return GroupPolicyMigrationReport
    */
    public function setGroupPolicySettingMappings($val)
    {
		$this->_propDict["groupPolicySettingMappings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the unsupportedGroupPolicyExtensions
    * A list of unsupported group policy extensions inside the Group Policy Object.
     *
     * @return array The unsupportedGroupPolicyExtensions
     */
    public function getUnsupportedGroupPolicyExtensions()
    {
        if (array_key_exists("unsupportedGroupPolicyExtensions", $this->_propDict)) {
           return $this->_propDict["unsupportedGroupPolicyExtensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the unsupportedGroupPolicyExtensions
    * A list of unsupported group policy extensions inside the Group Policy Object.
    *
    * @param UnsupportedGroupPolicyExtension $val The unsupportedGroupPolicyExtensions
    *
    * @return GroupPolicyMigrationReport
    */
    public function setUnsupportedGroupPolicyExtensions($val)
    {
		$this->_propDict["unsupportedGroupPolicyExtensions"] = $val;
        return $this;
    }
    
}
