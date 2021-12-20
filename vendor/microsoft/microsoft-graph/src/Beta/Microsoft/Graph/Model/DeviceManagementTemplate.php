<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTemplate File
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
* DeviceManagementTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTemplate extends Entity
{
    /**
    * Gets the description
    * The template's description
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
    * The template's description
    *
    * @param string $val The description
    *
    * @return DeviceManagementTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The template's display name
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
    * The template's display name
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the intentCount
    * Number of Intents created from this template.
    *
    * @return int The intentCount
    */
    public function getIntentCount()
    {
        if (array_key_exists("intentCount", $this->_propDict)) {
            return $this->_propDict["intentCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the intentCount
    * Number of Intents created from this template.
    *
    * @param int $val The intentCount
    *
    * @return DeviceManagementTemplate
    */
    public function setIntentCount($val)
    {
        $this->_propDict["intentCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the isDeprecated
    * The template is deprecated or not. Intents cannot be created from a deprecated template.
    *
    * @return bool The isDeprecated
    */
    public function getIsDeprecated()
    {
        if (array_key_exists("isDeprecated", $this->_propDict)) {
            return $this->_propDict["isDeprecated"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeprecated
    * The template is deprecated or not. Intents cannot be created from a deprecated template.
    *
    * @param bool $val The isDeprecated
    *
    * @return DeviceManagementTemplate
    */
    public function setIsDeprecated($val)
    {
        $this->_propDict["isDeprecated"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the platformType
    * The template's platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, all.
    *
    * @return PolicyPlatformType The platformType
    */
    public function getPlatformType()
    {
        if (array_key_exists("platformType", $this->_propDict)) {
            if (is_a($this->_propDict["platformType"], "\Beta\Microsoft\Graph\Model\PolicyPlatformType")) {
                return $this->_propDict["platformType"];
            } else {
                $this->_propDict["platformType"] = new PolicyPlatformType($this->_propDict["platformType"]);
                return $this->_propDict["platformType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platformType
    * The template's platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, all.
    *
    * @param PolicyPlatformType $val The platformType
    *
    * @return DeviceManagementTemplate
    */
    public function setPlatformType($val)
    {
        $this->_propDict["platformType"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishedDateTime
    * When the template was published
    *
    * @return \DateTime The publishedDateTime
    */
    public function getPublishedDateTime()
    {
        if (array_key_exists("publishedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["publishedDateTime"], "\DateTime")) {
                return $this->_propDict["publishedDateTime"];
            } else {
                $this->_propDict["publishedDateTime"] = new \DateTime($this->_propDict["publishedDateTime"]);
                return $this->_propDict["publishedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishedDateTime
    * When the template was published
    *
    * @param \DateTime $val The publishedDateTime
    *
    * @return DeviceManagementTemplate
    */
    public function setPublishedDateTime($val)
    {
        $this->_propDict["publishedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the templateSubtype
    * The template's subtype. Possible values are: none, firewall, diskEncryption, attackSurfaceReduction, endpointDetectionReponse, accountProtection, antivirus, firewallSharedAppList, firewallSharedIpList, firewallSharedPortlist.
    *
    * @return DeviceManagementTemplateSubtype The templateSubtype
    */
    public function getTemplateSubtype()
    {
        if (array_key_exists("templateSubtype", $this->_propDict)) {
            if (is_a($this->_propDict["templateSubtype"], "\Beta\Microsoft\Graph\Model\DeviceManagementTemplateSubtype")) {
                return $this->_propDict["templateSubtype"];
            } else {
                $this->_propDict["templateSubtype"] = new DeviceManagementTemplateSubtype($this->_propDict["templateSubtype"]);
                return $this->_propDict["templateSubtype"];
            }
        }
        return null;
    }
    
    /**
    * Sets the templateSubtype
    * The template's subtype. Possible values are: none, firewall, diskEncryption, attackSurfaceReduction, endpointDetectionReponse, accountProtection, antivirus, firewallSharedAppList, firewallSharedIpList, firewallSharedPortlist.
    *
    * @param DeviceManagementTemplateSubtype $val The templateSubtype
    *
    * @return DeviceManagementTemplate
    */
    public function setTemplateSubtype($val)
    {
        $this->_propDict["templateSubtype"] = $val;
        return $this;
    }
    
    /**
    * Gets the templateType
    * The template's type. Possible values are: securityBaseline, specializedDevices, advancedThreatProtectionSecurityBaseline, deviceConfiguration, custom, securityTemplate, microsoftEdgeSecurityBaseline, microsoftOffice365ProPlusSecurityBaseline, deviceCompliance, deviceConfigurationForOffice365, cloudPC, firewallSharedSettings.
    *
    * @return DeviceManagementTemplateType The templateType
    */
    public function getTemplateType()
    {
        if (array_key_exists("templateType", $this->_propDict)) {
            if (is_a($this->_propDict["templateType"], "\Beta\Microsoft\Graph\Model\DeviceManagementTemplateType")) {
                return $this->_propDict["templateType"];
            } else {
                $this->_propDict["templateType"] = new DeviceManagementTemplateType($this->_propDict["templateType"]);
                return $this->_propDict["templateType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the templateType
    * The template's type. Possible values are: securityBaseline, specializedDevices, advancedThreatProtectionSecurityBaseline, deviceConfiguration, custom, securityTemplate, microsoftEdgeSecurityBaseline, microsoftOffice365ProPlusSecurityBaseline, deviceCompliance, deviceConfigurationForOffice365, cloudPC, firewallSharedSettings.
    *
    * @param DeviceManagementTemplateType $val The templateType
    *
    * @return DeviceManagementTemplate
    */
    public function setTemplateType($val)
    {
        $this->_propDict["templateType"] = $val;
        return $this;
    }
    
    /**
    * Gets the versionInfo
    * The template's version information
    *
    * @return string The versionInfo
    */
    public function getVersionInfo()
    {
        if (array_key_exists("versionInfo", $this->_propDict)) {
            return $this->_propDict["versionInfo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the versionInfo
    * The template's version information
    *
    * @param string $val The versionInfo
    *
    * @return DeviceManagementTemplate
    */
    public function setVersionInfo($val)
    {
        $this->_propDict["versionInfo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the categories
    * Collection of setting categories within the template
     *
     * @return array The categories
     */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
           return $this->_propDict["categories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the categories
    * Collection of setting categories within the template
    *
    * @param DeviceManagementTemplateSettingCategory $val The categories
    *
    * @return DeviceManagementTemplate
    */
    public function setCategories($val)
    {
		$this->_propDict["categories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the migratableTo
    * Collection of templates this template can migrate to
     *
     * @return array The migratableTo
     */
    public function getMigratableTo()
    {
        if (array_key_exists("migratableTo", $this->_propDict)) {
           return $this->_propDict["migratableTo"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the migratableTo
    * Collection of templates this template can migrate to
    *
    * @param DeviceManagementTemplate $val The migratableTo
    *
    * @return DeviceManagementTemplate
    */
    public function setMigratableTo($val)
    {
		$this->_propDict["migratableTo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the settings
    * Collection of all settings this template has
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
    * Collection of all settings this template has
    *
    * @param DeviceManagementSettingInstance $val The settings
    *
    * @return DeviceManagementTemplate
    */
    public function setSettings($val)
    {
		$this->_propDict["settings"] = $val;
        return $this;
    }
    
}
